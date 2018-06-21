<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contents extends CI_Model {
	public function select_all() {
	//$this->db->select('*');
		//$this->db->from('payment');
	//	$data = $this->db->get();
		//return $data->result();
		$sql = " SELECT content.id AS id,content.service_type,content.description,content.required_doc,content.payment from content";

		$data = $this->db->query($sql);

		return $data->result();
	}
	public function select_export() {
	$this->db->select('*');
		$this->db->from('content');
		$data = $this->db->get();
		return $data->result();
	}
	public function select_by_id($id) {
	$sql = "SELECT content.id AS id, content.service_type AS service_type, content.description AS description, content.required_doc AS required_doc, content.payment AS payment  FROM content WHERE content.id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();}
	
	public function select_by_details($id) {
	$sql = "SELECT content.id AS id, content.payment_amount AS amount_payment, payment.payment_mode AS mode_payment, payment.user_id AS id_user, payment.service_id AS id_service, payment.transaction_id AS id_transaction,payment.datetime AS date_time_payment,user.username As username_user FROM payment,user WHERE payment.user_id = '{$id}' AND user.id = '{$id}'";

		$data = $this->db->query($sql);

	return $data->result();}

	public function select_by_pegawai($id) {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_kota={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
//		$sql2 = "INSERT INTO payment VALUES('','" .$data['transaction_id'] ."','" .$data['payment'] ."','" .$data['mode'] ."','" .$data['user_id'] ."','" .$data['service_id'] ."','" .$data['datetime'] ."')";
		$sql2 = "INSERT INTO content VALUES('','" .$data['payment'] ."','" .$data['des'] ."','" .$data['req'] ."','" .$data['paymentamount'] ."')";
	//	$sql = "INSERT INTO kota VALUES('','" .$data['kota'] ."','" .$data['payment'] ."')";

		$this->db->query($sql2);
		//$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('kota', $data);
		
		$this->db->insert_batch('kota', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		//$sql = "UPDATE payment SET transaction_id='" .$data['transaction_id'] ."',payment_amount= '".$data['payment'] ."',payment_mode='".$data['mode']."',user_id='".$data['user_id']."',service_id='".$data['service_id']."',datetime='".$data['datetime']."' WHERE id='" .$data['id'] ."'";
$sql="UPDATE content SET id='".$data['kota'] ."',service_type='".$data['payment'] ."',description='".$data['des'] ."',required_doc='".$data['req'] ."',payment='".$data['paymentamount'] ."' WHERE id='" .$data['id'] ."'";
		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM content WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('content');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('content');

		return $data->num_rows();
	}
}

/* End of file M_kota.php */
/* Location: ./application/models/M_kota.php */