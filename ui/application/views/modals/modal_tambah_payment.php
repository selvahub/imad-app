<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">New </h3>

  <form id="form-tambah-payment" method="POST">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Transaction ID" name="transaction_id" aria-describedby="sizing-addon2" required>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Amount" name="payment" aria-describedby="sizing-addon2" required>
    </div>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select class="form-control" placeholder="Mode" name="mode" aria-describedby="sizing-addon2" required>
	    <option value="">Mode of Payment</option>
  <option value="Online">Online</option>
  <option value="NetBanking">NetBanking</option>
  <option value="Cheque">Cheque</option>
  <option value="Cash">Cash</option></select>	  
</select>
    </div>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select class="form-control" placeholder="UserID" name="user_id" aria-describedby="sizing-addon2" required>
	  <?php 
	  $con=mysql_connect("localhost","root","");
	  $db=mysql_select_db("intax",$con);
	  $get=mysql_query("select * from user");?>
	  <option value="">Select the User</option>
	  <?php
	  while($row=mysql_fetch_assoc($get)){
	  ?>
	  <option value="<?php echo($row['id'])?>">User_ID='<?php echo($row['id'])?>' Name='<?php echo($row['username'])?>'</option>
	  <?php }?>
	  </select>
    </div>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <select class="form-control" placeholder="ServiceID" name="service_id" aria-describedby="sizing-addon2" required>
	  <?php 
	  $con=mysql_connect("localhost","root","");
	  $db=mysql_select_db("intax",$con);
	  $get=mysql_query("select * from service");?>
	  <option value="">Select the service</option>
	  <?php
	  while($row=mysql_fetch_assoc($get)){
	  ?>
	  <option value="<?php echo($row['id'])?>">Service_ID='<?php echo($row['id'])?>' Service='<?php echo($row['service_type'])?>'</option>
	  <?php }?>
	  </select>
	  </select>
    </div>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Date & Time" name="datetime" aria-describedby="sizing-addon2" value="<?php $date = date_default_timezone_set('Asia/Kolkata');
echo $today = date("F j, Y, g:i a T");
?>"">
    </div>

	
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>New Payment</button>
      </div>
    </div>
  </form>
</div>