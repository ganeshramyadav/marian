<section class="content">
    <div class="row">        
        <div class="col-md-12">                     
            <div class="box box-primary">                    
                <div class="box-body">
                    <div class="mailbox-read-info">
                    	<br />
                    	<div class="row">
                    		<span>Thank You for your interest in <?php echo $read_mail['agency_name'];?>, Inc. Our HR application is now online.</span>
                    	</div>
                    	<br />
                    	
                    	<div class="row" style="text-align:center;">
                    		<p>
                    		Please visit: <a href="<?php echo $read_mail['agency_website'];?>"><?php echo $read_mail['agency_website'];?></a>
                    		</p>
                    		<p>
                    		username: <font color="red"><?php echo $read_mail['username']; ?></font>
                    		</p>
                    		<p>
                    		temporary password:  <font color="red">employee</font>
                    		</p>
                    	</div>
                    	<br />
                    	<div class="row">
                    		<p>You will be requested to upload your picture and credentials. If you have problems with completing your online application kindly call<a href=""><?php echo ' '.$read_mail['agency_contactno'];?></a>.</p>
                    	</div>
                    	<br />
                    	<div class="row">
                    		<p>To change your temporary password, on the upper right hand corner "PROFILE" you will find the change of password tab.</p>
                    	</div>
                    	<br />
                    	<div class="row">
                    		<p>We know you have a busy schedule; nonetheless, we request your patience in completing the requisite applications. We will be calling you to schedule your interview and orientation once the application is complete. </p>
                    	</div>
                    	<!--
                        <h3>Hello <?php  ?></h3>
                        <h5>Thank you for joining Us</h5>
                        -->
                        <h5><span class="mailbox-read-time"></span></h5>
                    </div><!-- /.mailbox-read-info -->
                    <!--
                    <div class="mailbox-read-message text-justify margin">
                         <h5>Click the below Link and use Your Username and password for login</h5>
					    <a href="<?php echo $read_mail['message_body'];?>">Login Here</a>
                        <p>Your Username : <?php echo $read_mail['username']; ?></p> 
                        <p>Your Password : employee</p>
                        <p>You must change your password after Login</p>                            
                    </div>
                    --><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->                    
                                       
               <!-- <input action="action" class="btn btn-primary margin" type="button" value="Back" onclick="history.go(-1);" /> -->
            </div><!-- /. box -->
        </div><!-- /.col -->
    </div>    
</section>