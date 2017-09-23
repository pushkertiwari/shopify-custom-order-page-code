<?php
$data = $db->query("SELECT * From tbl_headers Where unique_head_key	= 'choose_knobs'");
if($data->num_rows > 0){
	$result = $data->fetch_assoc();
}
?>
<div class="inner-padding">
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne">
          Title And Description
        </a>
      </h4>
      </div>
      <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            <div class="update_msg alert alert-success alert-dismissable">
	    		<a href="#" class="close" aria-label="close">&times;</a>
	    		<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" method="POST" id="knob_form">
					<input type="hidden" name="id" value="<?php echo $result['id'];?>">
				    <input type="hidden" name="knob_key" value="<?php echo $result['unique_head_key'];?>">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Title:</label>
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="knob_title" placeholder="Enter Title" name="knob_title" required value="<?php echo $result['title'];?>">
				    		<span class="error_msg">Your Title Can't be empty.</span>
				    	</div>
				    </div>
				    <div class="form-group">
				      	<label class="control-label col-sm-3" for="email">Description:</label>
				    	<div class="col-sm-9">
				    		<textarea name="knob_description" class="form-control" rows="3" id="comment"><?php echo $result['description'];?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="knob_btn">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>
	<div class="col-md-10 col-sm-10">
		<form class="form-horizontal" id="image_knob_effect" method="POST" enctype="multipart/form-data" action="image_section_insert.php">
			<input type="hidden" name="knob_image_Upload" value="knob_image">
			<div class="form-group">
		    	<label class="control-label col-sm-3" for="email">Knob Name:</label>
		    	<div class="col-sm-9">
		    		<input type="text" class="form-control" id="knob" placeholder="Enter Knob Name" name="knob_name" required>
		    	</div>
		    </div>
		    <div class="form-group">
		      	<label class="control-label col-sm-3" for="email">Image:</label>
		    	<div class="col-sm-9">
		    		<input type="file"  name="image_knob" id="image_knob" class="form-control"  required>
		    	</div>
		    </div>
		    <div class="form-group">
		      <div class="col-sm-offset-3 col-sm-8">
		        <button type="Submit" id="knobSubmit" class="btn btn-default">Submit</button>
		      </div>
		    </div>
		</form>
	</div>
</div>
<?php
$tab1  =  $db->query("SELECT * FROM tbl_knobs");
if($tab1->num_rows > 0){?>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th>Serial Number</th>
      <th>Knob Name</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
	<?php $img_path = "https://".$_SERVER['SERVER_NAME']."/app/images/knobs/";  $i=1; while($row = $tab1->fetch_assoc()) { ?>
	  <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $row['knob_name'] ?></td>
    	<td><img src="<?php echo $img_path.$row['image'] ?>" alt="..." class="img-thumbnail my_img_size"></td>
      <td><button type="button" class="btn btn-danger" data-image="<?php echo $row['image'] ?>" data-id="<?php echo $row['id']?>" onclick="delete_record_tab3(this);">Delete</button></td>
    </tr>
    <?php $i++; }?>
			   </tbody>
</table>
<?php }
?>

<script type="text/javascript">
$(function() {

	$('#knob_btn').click(function(e){
		e.preventDefault();
		var title_name = $('#knob_title').val();
		if(title_name != ''){
			$.ajax({
	    		type: 'POST',
	    		url: 'title_updates.php',
	    		data: $("#knob_form").serialize(),
	    		beforeSend: function() {
			        $('.ajaxloader').show();
			    },
	    		success: function(data){
	    			$('.ajaxloader').hide();
	    			$('.update_msg').show();
	    		}
	    	});
		}else{
			$('.error_msg').show();
	 		$('#knob_title').addClass('error');
		}
	});

	$('#knob_title').focus(function(){
	 	$('.error_msg').hide();
	 	$('#knob_title').removeClass('error');
	});

});
function delete_record_tab3(thisob){
	$(thisob).parent().parent().hide();
	var id = $(thisob).attr('data-id');
	var image =  $(thisob).attr('data-image');
	if(id !=''){
	$.ajax({
			type:'POST',
			url:'delete.php',
			data:{'id':id,'tab':'tab3','image':image},
			success:function(resp){
				console.log(resp);
			},error:function(err,xhr){
				console.log(err);
			}
	});
	}
}
$(document).ready(function(){
	$('#knobSubmit').click(function(){
		localStorage.setItem('selectTab','#menu2');
	})
});
</script>