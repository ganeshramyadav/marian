<section class="content">
    <div class="row">        
        <div class="col-md-12">                     
            <div class="box box-primary">                    
                <div class="box-body">
                    <div class="mailbox-read-info">
                        <h3><?php echo $read_mail['subject']; ?></h3>
                        <h5>Name of the person whose document will be expire : <?php echo $read_mail['expirename']; ?></h5>
                        <h5>Email of the person whose document will be expire : <?php echo $read_mail['to']; ?></h5>
                        <h5><span class="mailbox-read-time"></span></h5>
                    </div><!-- /.mailbox-read-info -->                                  
                    <div class="mailbox-read-message text-justify margin">
					    <p>Hello <?php echo $read_mail['name'];?>,</p>
                        <p><?php echo $read_mail['message_body']; ?></p>                            
                    </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->                    
                                       
               <!-- <input action="action" class="btn btn-primary margin" type="button" value="Back" onclick="history.go(-1);" /> -->
            </div><!-- /. box -->
        </div><!-- /.col -->
    </div>    
</section>