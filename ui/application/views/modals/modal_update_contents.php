<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data kota</h3>

  <form id="form-update-contents" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataContents->id; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Kota" name="kota" aria-describedby="sizing-addon2" value="<?php echo $dataContents->id; ?>">
      <input type="text" class="form-control" placeholder="Nama Kota" name="payment" aria-describedby="sizing-addon2" value="<?php echo $dataContents->service_type; ?>">
       <input type="text" class="form-control" placeholder="Nama Kota" name="des" aria-describedby="sizing-addon2" value="<?php echo $dataContents->description; ?>">
       <input type="text" class="form-control" placeholder="Nama Kota" name="req" aria-describedby="sizing-addon2" value="<?php echo $dataContents->required_doc; ?>">
       <input type="text" class="form-control" placeholder="Nama Kota" name="paymentamount" aria-describedby="sizing-addon2" value="<?php echo $dataContents->payment; ?>">
	  </div>
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>