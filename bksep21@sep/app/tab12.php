<div class="inner-padding">
	<!-- Custom Design, symbol, logo or pattern section start  -->
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne11" aria-expanded="true" aria-controls="collapseOne">
          Admin Email Settings
        </a>
      </h4>
      </div>
      <div id="collapseOne11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      	<?php
			$data = $db->query("SELECT * From admin_email");
			if($data->num_rows > 0){
				$result = $data->fetch_assoc();
			}
      	?>
        <div class="panel-body">
        	<div class="update_other_msg6 alert alert-success alert-dismissable">
	    		<a href="#" class="close close6" aria-label="close">&times;</a>
	    		<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" method="POST" id="admin_email_form">
				<input type="hidden" name="id" value="<?php echo $result['id'];?>">
				  <input type="hidden" name="admin_email_key" value="admin_email_check">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Email:</label>
				    	<div class="col-sm-9">
				    		<input type="email" class="form-control" id="admin_email_title" placeholder="Enter Email" name="admin_email_title" required value="<?php echo $result['email'];?>">
				    	</div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="admin_email_btn">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    	$(function() {
    		$('.update_other_msg6').hide();
    		$('#admin_email_btn').click(function(e) {
    			e.preventDefault();
				var title_name = $('#admin_email_title').val();
				if(title_name != ''){
					$.ajax({
			    		type: 'POST',
			    		url: 'title_updates.php',
			    		data: $("#admin_email_form").serialize(),
			    		beforeSend: function() {
					        $('.ajaxloader').show();
					    },
			    		success: function(data){
			    			console.log(data);
			    			$('.ajaxloader').hide();
			    			$('.update_other_msg6').show();
			    		}
			    	});
				}else{
					$('.error_msg').show();
			 		$('#admin_email_title').addClass('error');
				}
    		});

    		$('#admin_email_title').focus(function(){
			 	$('.error_msg').hide();
			 	$('#admin_email_title').removeClass('error');
			});

			$('.close6').click(function(){
				$('.update_other_msg6').hide();
			});
    		
    	});
    </script>

<!-- email  host name  -->
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne12" aria-expanded="true" aria-controls="collapseOne">
          SMTP  Email settings
        </a>
      </h4>
      </div>
      <div id="collapseOne12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <?php
			$data1 = $db->query("SELECT * From tbl_host_settings");
			if($data1->num_rows > 0){
				$result1 = $data1->fetch_assoc();
			}
      	?>
        <div class="panel-body">
        	<div class="update_other_msg2 alert alert-success alert-dismissable">
	    		<a href="#" class="close close2" aria-label="close">&times;</a>
	    		<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" method="POST" id="hosting_details">
					<input type="hidden" name="id" value="<?php echo $result1['id'];?>">
				    <input type="hidden" name="hosting_key" value="host_settings">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Host Name:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="host_name" placeholder="Enter host name" name="host_name" required value="<?php echo $result1['host_name'];?>">
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Username:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="host_username" placeholder="Enter username" name="host_username" required value="<?php echo $result1['host_username'];?>">
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Password:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="host_pass" placeholder="Enter password" name="host_pass" required value="<?php echo $result1['host_pass'];?>">
				    	</div>
				    </div>
				    <div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Secure:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="host_secure" placeholder="Enter SSL Or TLS" name="host_secure" required value="<?php echo $result1['host_secure'];?>">
				    	</div>
				    </div>
				     <div class="form-group">
				    	<label class="control-label col-sm-3" for="email">port Number:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="host_port" placeholder="Port number" name="host_port" required value="<?php echo $result1['host_port'];?>">
				    	</div>
				    </div>
				    
				    <div class="form-group">        
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="hosting_btn">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    	$(function(){
    		$('#hosting_btn').click(function(e) {
    			e.preventDefault();
				var host_name = $('#host_name').val();
				var host_username = $('#host_username').val();
				var host_pass = $('#host_pass').val();
				var host_secure = $('#host_secure').val();
				var host_port = $('#host_port').val();
				if(host_name != '' && host_username !='' && host_pass !='' && host_secure !='' && host_port !=''){
					$.ajax({
			    		type: 'POST',
			    		url: 'title_updates.php',
			    		data: $("#hosting_details").serialize(),
			    		beforeSend: function() {
					        $('.ajaxloader').show();
					    },
			    		success: function(data){
			    			console.log(data);
			    			$('.ajaxloader').hide();
			    			$('.update_other_msg2').show();
			    		}
			    	});
				}else{
					$('.error_msg').show();
			 		$('#host_name').addClass('error');
			 		$('#host_username').addClass('error');
			 		$('#host_pass').addClass('error');
			 		$('#host_secure').addClass('error');
			 		$('#host_port').addClass('error');

				}
    			
    		});

    		$('#host_name').focus(function(){
			 	$('.error_msg').hide();
			 	$('#host_name').removeClass('error');
			});
			$('#host_secure').focus(function(){
			 	$('.error_msg').hide();
			 	$('#host_secure').removeClass('error');
			});
			$('#host_username').focus(function(){
			 	$('.error_msg').hide();
			 	$('#host_username').removeClass('error');
			});
			$('#host_pass').focus(function(){
			 	$('.error_msg').hide();
			 	$('#host_pass').removeClass('error');
			});
			$('#host_port').focus(function(){
			 	$('.error_msg').hide();
			 	$('#host_port').removeClass('error');
			});

			$('.close2').click(function(){
				$('.update_other_msg2').hide();
			});
    	});
    </script>



</div>
