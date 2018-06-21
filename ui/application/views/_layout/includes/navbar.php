<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            
        </div>
		
		
		
        
        <div class="collapse navbar-collapse">
		
		 <form method="post" action="" class="form-horizontal" role="form">
		 <?php if(!empty(@$notif)){ ?>
                <div id="login-alert" class="alert alert-<?php echo @$notif['type'];?> col-sm-12"><?php echo @$notif['message'];?></div>
                <?php } ?>
            
			<img src="<?php echo base_url('assets\imges\cropped-intaxseva_logo_tiny-1.jpg'); ?>" width="205px" height="50px" style="margin:10px;
			">
			
			<div style="float:right; width:600px;">
                 <div style="margin:10px 0 5px 5px; width:250px; float:left;" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="email1"  placeholder="Email address">                                        
                 </div> 
			
				<div style="margin:10px 0 5px 5px; width:250px;float:left;" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password1" placeholder="password">

						</div>

				<div style="margin:10px 0 5px 5px; width:80px;float:left;" class="form-group">
                        <div class="col-sm-12 controls">
            
			<input type="submit" class="btn btn-primary" value=" Login ">

			</div>
						&nbsp;&nbsp;&nbsp;&nbsp;<div style="float:left; font-size: 70%; position: relative; top:-6px"><a href="<?php echo site_url('auth/forgot_password'); ?>">Forgot password?</a></div>
				</div>
				
			</div>
			
			                
         </form>   
        </div>
    </div>
</div>

