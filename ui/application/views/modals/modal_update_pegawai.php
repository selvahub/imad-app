<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Pegawai</h3>
      <form method="POST" id="form-update-pegawai">
        <input type="text" name="id" class="form-control" value="<?php echo $dataPegawai->id_pegawai; ?>" readonly>
        <label>Payment Amount</label>
		<div class="input-group form-group">
          
		  <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-tag"></i>
          </span>
		  
          <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama_pegawai; ?>">
        </div>
		<label>Transaction ID</label>
       <div class="input-group form-group">
          
		  <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-tag"></i>
          </span>
          
		  <input type="text" class="form-control" placeholder="Nama" name="transaction_id" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->telp; ?>">
        </div>
		<label>Payment Mode</label>
       <div class="input-group form-group">
          
		  <span class="input-group-addon" id="sizing-addon2">
            <i class="glyphicon glyphicon-tag"></i>
          </span>
		  
          <input type="text" class="form-control" placeholder="Nama" name="paymentmode" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->paymentmode; ?>">
        </div>
        <div class="form-group">
          <div class="col-md-12">
              <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
          </div>
        </div>
      </form>
</div>

<script type="text/javascript">
$(function () {
    $(".select2").select2();

    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });
});
</script>