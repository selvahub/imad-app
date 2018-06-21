<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_payment');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataPayment'] 	= $this->M_payment->select_all();
		$data['page'] 		= "payment";
		$data['judul'] 		= "Payment";
		$data['deskripsi'] 	= "Management";

		$data['modal_tambah_payment'] = show_my_modal('modals/modal_tambah_payment', 'tambah-payment', $data);

		$this->template->views('payment/home', $data);
	}

	public function tampil() {
		$data['dataPayment'] = $this->M_payment->select_all();
		$this->load->view('payment/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('payment', 'Payment', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_payment->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				//$out['msg'] = show_succ_msg('Data Kota Berhasil ditambahkan', '20px');
				$out['msg'] = show_succ_msg('New Payment Added!', '20px');
				
			} else {
				$out['status'] = '';
				//$out['msg'] = show_err_msg('Data Kota Gagal ditambahkan', '20px');
				$out['msg'] = show_err_msg('Sorry, No Changes!', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update() {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['dataPayment'] 	= $this->M_payment->select_by_id($id);

		echo show_my_modal('modals/modal_update_payment', 'update-payment', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('payment', 'Payment', 'trim|required');

		$data 	= $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_payment->update($data);

			if ($result > 0) {
				$out['status'] = '';
				//$out['msg'] = show_succ_msg('Data Kota Berhasil diupdate', '20px');
				$out['msg'] = show_succ_msg('One Record Updated!', '20px');
			} else {
				$out['status'] = '';
				//$out['msg'] = show_succ_msg('Data Kota Gagal diupdate', '20px');
				$out['msg'] = show_succ_msg('No Updates Occured!', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_payment->delete($id);
		
		if ($result > 0) {
			//echo show_succ_msg('Data Kota Berhasil dihapus', '20px');
			echo show_succ_msg('One Record Deleted!...', '20px');
		} else {
			echo show_err_msg('No Change!...', '20px');
		}
	}

	public function detail() {
		$data['userdata'] 	= $this->userdata;

		$id 				= trim($_POST['id']);
		$data['payment'] = $this->M_payment->select_by_details($id);
		$data['jumlahKota'] = $this->M_payment->total_rows();
		$data['dataPayment'] = $this->M_payment->select_by_details($id);

		echo show_my_modal('modals/modal_detail_payment', 'detail-payment', $data, 'lg');
	}

	public function export() {
		error_reporting(E_ALL);
    
		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_payment->select_export();

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0); 

		$objPHPExcel->getActiveSheet()->SetCellValue('A1', "ID"); 
		$objPHPExcel->getActiveSheet()->SetCellValue('B1', "Payment_Amount");
		$objPHPExcel->getActiveSheet()->SetCellValue('C1', "Transaction ID");
$objPHPExcel->getActiveSheet()->SetCellValue('D1', "Payment Mode");
$objPHPExcel->getActiveSheet()->SetCellValue('E1', "User ID");
$objPHPExcel->getActiveSheet()->SetCellValue('F1', "Service ID");
$objPHPExcel->getActiveSheet()->SetCellValue('G1', "Date & Time");

		$rowCount = 2;
		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->id); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->payment_amount); 
			$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $value->transaction_id); 
			$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->payment_mode); 
			$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->user_id); 
			$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->service_id); 
			$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->datetime); 
			
		    $rowCount++; 
		} 

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
		$objWriter->save('./assets/excel/INTAXSEVA Payment List.xlsx'); 

		$this->load->helper('download');
		force_download('./assets/excel/INTAXSEVA Payment List.xlsx', NULL);
	}

	public function import() {
		$this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {
			$this->session->set_flashdata('msg', 'File harus diisi');
		} else {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('excel')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data = $this->upload->data();
				
				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' .$data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

				$index = 0;
				foreach ($sheetData as $key => $value) {
					if ($key != 1) {
						$check = $this->M_payment->check_nama($value['B']);

						if ($check != 1) {
							$resultData[$index]['nama'] = ucwords($value['B']);
						}
					}
					$index++;
				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_payment->insert_batch($resultData);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Data Kota Berhasil diimport ke database'));
						redirect('Payment');
					}
				} else {
					$this->session->set_flashdata('msg', show_msg('Data Kota Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('Payment');
				}

			}
		}
	}
}

/* End of file Kota.php */
/* Location: ./application/controllers/Kota.php */