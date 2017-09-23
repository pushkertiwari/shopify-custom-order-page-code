
<div class="inner-padding">
	<!-- Custom Design, symbol, logo or pattern section start  -->
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#other_section1" aria-expanded="true" aria-controls="collapseOne">
          Custom Design and Pattern
        </a>
      </h4>
      </div>
      <div id="other_section1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      	<?php
			$data = $db->query("SELECT * From tbl_headers Where unique_head_key	= 'custom_design_pattern'");
			if($data->num_rows > 0){
				$result = $data->fetch_assoc();
			}
      	?>
        <div class="panel-body">
        	<div class="update_other_msg1 alert alert-success alert-dismissable">
	    		<a href="#" class="close close1" aria-label="close">&times;</a>
	    		<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" method="POST" id="custom_design_form">
					<input type="hidden" name="id" value="<?php echo $result['id'];?>">
				    <input type="hidden" name="custom_design_key" value="<?php echo $result['unique_head_key'];?>">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Title:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="custom_design_title" placeholder="Enter Title" name="custom_design_title" required value="<?php echo $result['title'];?>">
				    	</div>
				    </div>
				    <div class="form-group">        
				      	<label class="control-label col-sm-3" for="email">Description:</label>
				    	<div class="col-sm-9">
				    		<textarea name="custom_design_des" class="form-control" rows="3" id="comment"><?php echo $result['description'];?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="custom_design_btn">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    	$(function() {

    		$('#custom_design_btn').click(function(e) {
    			e.preventDefault();
				var title_name = $('#custom_design_title').val();
				if(title_name != ''){
					$.ajax({
			    		type: 'POST',
			    		url: 'title_updates.php',
			    		data: $("#custom_design_form").serialize(),
			    		beforeSend: function() {
					        $('.ajaxloader').show();
					    },
			    		success: function(data){
			    			console.log(data);
			    			$('.ajaxloader').hide();
			    			$('.update_other_msg1').show();
			    		}
			    	});
				}else{
					$('.error_msg').show();
			 		$('#custom_design_title').addClass('error');
				}
    		});

    		$('#custom_design_title').focus(function(){
			 	$('.error_msg').hide();
			 	$('#custom_design_title').removeClass('error');
			});

			$('.close1').click(function(){
				$('.update_other_msg1').hide();
			});
    		
    	});
    </script>
    <!-- Custom Design, symbol, logo or pattern section end  -->

	<!-- Comments, ideas or suggestion section start  -->
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#other_section2" aria-expanded="true" aria-controls="collapseOne">
          Comments and Suggestion
        </a>
      </h4>
      </div>
      <div id="other_section2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <?php
			$data1 = $db->query("SELECT * From tbl_headers Where unique_head_key = 'comments_suggestions'");
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
				<form class="form-horizontal" method="POST" id="comment_suggestion_form">
					<input type="hidden" name="id" value="<?php echo $result1['id'];?>">
				    <input type="hidden" name="comment_suggestion_key" value="<?php echo $result1['unique_head_key'];?>">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Title:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="comment_suggestion_title" placeholder="Enter Title" name="comment_suggestion_title" required value="<?php echo $result1['title'];?>">
				    	</div>
				    </div>
				    <div class="form-group">        
				      	<label class="control-label col-sm-3" for="email">Description:</label>
				    	<div class="col-sm-9">
				    		<textarea name="comment_suggestion_des" class="form-control" rows="3" id="comment"><?php echo $result1['description'];?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="comment_suggestion_btn">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    	$(function(){
    		$('#comment_suggestion_btn').click(function(e) {
    			e.preventDefault();
				var title_name = $('#comment_suggestion_title').val();
				if(title_name != ''){
					$.ajax({
			    		type: 'POST',
			    		url: 'title_updates.php',
			    		data: $("#comment_suggestion_form").serialize(),
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
			 		$('#comment_suggestion_title').addClass('error');
				}
    			
    		});

    		$('#comment_suggestion_title').focus(function(){
			 	$('.error_msg').hide();
			 	$('#comment_suggestion_title').removeClass('error');
			});

			$('.close2').click(function(){
				$('.update_other_msg2').hide();
			});
    	});
    </script>
	<!-- Comments, ideas or suggestion section end  -->

	<!-- Personal Info section start  -->
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#other_section3" aria-expanded="true" aria-controls="collapseOne">
          Personal Info
        </a>
      </h4>
      </div>
      <div id="other_section3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <?php
			$data2 = $db->query("SELECT * From tbl_headers Where unique_head_key = 'personal_info'");
			if($data2->num_rows > 0){
				$result2 = $data2->fetch_assoc();
			}
      	?>
        <div class="panel-body">
			<div class="update_other_msg3 alert alert-success alert-dismissable">
	    		<a href="#" class="close close3" aria-label="close">&times;</a>
	    		<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" method="post" id="personal_info_form">
					<input type="hidden" name="id" value="<?php echo $result2['id'];?>">
				    <input type="hidden" name="personal_info_key" value="<?php echo $result2['unique_head_key'];?>">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Title:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="personal_info_title" placeholder="Enter Title" name="personal_info_title" required value="<?php echo $result2['title'];?>">
				    		<span class="error_msg">Your Title Can't be empty.</span>
				    	</div>
				    </div>
				    <div class="form-group">        
				      	<label class="control-label col-sm-3" for="email">Description:</label>
				    	<div class="col-sm-9">
				    		<textarea name="personal_info_des" class="form-control" rows="3" id="comment"><?php echo $result2['description'];?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="personal_info_btn">Submit</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    	$(function() {
    		$('#personal_info_btn').click(function(e) {
    			e.preventDefault();
    			var title_name = $('#personal_info_title').val();
				if(title_name != ''){
					$.ajax({
			    		type: 'POST',
			    		url: 'title_updates.php',
			    		data: $("#personal_info_form").serialize(),
			    		beforeSend: function() {
					        $('.ajaxloader').show();
					    },
			    		success: function(data){
			    			console.log(data);
			    			$('.ajaxloader').hide();
			    			$('.update_other_msg3').show();
			    		}
			    	});
				}else{
					$('.error_msg').show();
			 		$('#personal_info_title').addClass('error');
				}
    		});

    		$('#personal_info_title').focus(function(){
			 	$('.error_msg').hide();
			 	$('#personal_info_title').removeClass('error');
			});

			$('.close3').click(function(){
				$('.update_other_msg3').hide();
			});
    	});
    </script>
	<!-- Personal Info section end  -->

	<!-- Thanks section start  -->
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#other_section4" aria-expanded="true" aria-controls="collapseOne">
          Thank You
        </a>
      </h4>
      </div>
      <div id="other_section4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      	<?php 
			$data3 = $db->query("SELECT * From tbl_headers Where unique_head_key = 'thank_you'");
			if($data3->num_rows > 0){
				$result3 = $data3->fetch_assoc();
			}
		?>
        <div class="panel-body">
        	<div class="update_other_msg4 alert alert-success alert-dismissable">
	    		<a href="#" class="close close4" aria-label="close">&times;</a>
	    		<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" method="POST" id="thank_you_form">
				    <input type="hidden" name="id" value="<?php echo $result3['id'];?>">
					<input type="hidden" name="thank_you_key" value="<?php echo $result3['unique_head_key'];?>">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Title:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="thank_you_title" placeholder="Enter Title" name="thank_you_title" required value="<?php echo $result3['title'];?>">
				    	</div>
				    </div>
				    <div class="form-group">        
				      	<label class="control-label col-sm-3" for="email">Description:</label>
				    	<div class="col-sm-9">
				    		<textarea name="thank_you_des" class="form-control" rows="3" id="comment"><?php echo $result3['description'];?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="thank_you_btn">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    	$(function() {
    		$('#thank_you_btn').click(function(e) {
				e.preventDefault();
				var title_name = $('#thank_you_title').val();
				if(title_name != ''){
					$.ajax({
			    		type: 'POST',
			    		url: 'title_updates.php',
			    		data: $("#thank_you_form").serialize(),
			    		beforeSend: function() {
					        $('.ajaxloader').show();
					    },
			    		success: function(data){
			    			console.log(data);
			    			$('.ajaxloader').hide();
			    			$('.update_other_msg4').show();
			    		}
			    	});
				}else{
					$('.error_msg').show();
			 		$('#thank_you_title').addClass('error');
				}
    		});

    		$('#thank_you_title').focus(function(){
			 	$('.error_msg').hide();
			 	$('#thank_you_title').removeClass('error');
			});

			$('.close4').click(function(){
				$('.update_other_msg4').hide();
			});

    	});
    </script>
	<!-- Thanks section end  -->

	<!-- picker color comment text start section here  -->
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#other_section5" aria-expanded="true" aria-controls="collapseOne">
          pick a color comment section
        </a>
      </h4>
      </div>
      <div id="other_section5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      	<?php 
			$data4 = $db->query("SELECT * From tbl_headers Where unique_head_key = 'picker_color_cmt'");
			if($data4->num_rows > 0){
				$result4 = $data4->fetch_assoc();
			}
		?>
        <div class="panel-body">
        	<div class="update_other_msg5 alert alert-success alert-dismissable">
	    		<a href="#" class="close close5" aria-label="close">&times;</a>
	    		<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" method="POST" id="picker_color_cmt_form">
				    <input type="hidden" name="id" value="<?php echo $result4['id'];?>">
					<input type="hidden" name="picker_color_cmt_key" value="<?php echo $result4['unique_head_key'];?>">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Title:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="picker_color_cmt_title" placeholder="Enter Title" name="picker_color_cmt_title" required value="<?php echo $result4['title'];?>">
				    	</div>
				    </div>
				    <div class="form-group">        
				      	<label class="control-label col-sm-3" for="email">Description:</label>
				    	<div class="col-sm-9">
				    		<textarea name="picker_color_cmt_des" class="form-control" rows="3" id="comment"><?php echo $result4['description'];?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">        
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="picker_color_cmt_btn">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    	$(function() {
    		$('.update_other_msg5').hide();
    		$('#picker_color_cmt_btn').click(function(e) {
				e.preventDefault();
				var title_name = $('#picker_color_cmt_title').val();
				if(title_name != ''){
					$.ajax({
			    		type: 'POST',
			    		url: 'title_updates.php',
			    		data: $("#picker_color_cmt_form").serialize(),
			    		beforeSend: function() {
					        $('.ajaxloader').show();
					    },
			    		success: function(data){
			    			console.log(data);
			    			$('.ajaxloader').hide();
			    			$('.update_other_msg5').show();
			    		}
			    	});
				}else{
					$('.error_msg').show();
			 		$('#picker_color_cmt_title').addClass('error');
				}
    		});

    		$('#picker_color_cmt_title').focus(function(){
			 	$('.error_msg').hide();
			 	$('#picker_color_cmt_title').removeClass('error');
			});

			$('.close5').click(function(){
				$('.update_other_msg5').hide();
			});

    	});
    </script>
	<!-- picker color comment text start here section end  -->


</div>