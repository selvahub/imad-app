<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-payment"><i class="glyphicon glyphicon-plus-sign"></i>New</button>
    </div>
    <div class="col-md-3">
        <a href="<?php echo base_url('Payment/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-kota"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
		  <th style="min-width:97px;">Transaction ID</th>
		  <th>Rs.</th>
		  <th>Mode</th>
		  <th>Name</th>
		  <th>Service</th>
		  <th>Date&Time</th>

          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </thead>
      <tbody id="data-payment">
      
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_payment; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPayment', 'Remove?', 'Yes, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Payment';
  $data['url'] = 'Payment/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>