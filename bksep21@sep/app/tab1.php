<?php
$data = $db->query("SELECT * From tbl_headers Where unique_head_key	= 'choose_a_effect'");
if($data->num_rows > 0){
	$result = $data->fetch_assoc();
}
?>
<div class="inner-padding">
	<div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Title And Description
        </a>
      </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
        	<div class="update_msg alert alert-success alert-dismissable">
		    	<a href="#" class="close" aria-label="close">&times;</a>
		    	<strong>Success!</strong> Data Successfully Updated.
		    </div>
        	<div class="col-md-10 col-sm-10">
				<form class="form-horizontal" id="header_section" method="POST">
					<div class="form-group">
				    	<label class="control-label col-sm-3" for="email">Title:</label>
				    	<input type="hidden" name="id" value="<?php echo $result['id'];?>">
				    	<input type="hidden" name="choose_effect" value="<?php echo $result['unique_head_key'];?>">
				    	<div class="col-sm-9">
				    		<input type="text" class="form-control" id="title_name" placeholder="Enter Title" name="title_name" required value="<?php echo $result['title'];?>">
				    		<span class="error_msg">Your Title Can't be empty.</span>
				    	</div>
				    </div>
				    <div class="form-group">
				      	<label class="control-label col-sm-3" for="email">Description:</label>
				    	<div class="col-sm-9">
				    		<textarea name="full_description" class="form-control" rows="3" id="comment" value=""><?php echo $result['description'];?></textarea>
				    	</div>
				    </div>
				    <div class="form-group">
				      <div class="col-sm-offset-3 col-sm-8">
				        <button type="Submit" class="btn btn-default" id="effect_choose">Update</button>
				      </div>
				    </div>
				</form>
			</div>
        </div>
      </div>
    </div>
	<div class="col-md-10 col-sm-10">
		<form class="form-horizontal" id="image_section_Choose_effect" method="POST" enctype="multipart/form-data" action="image_section_insert.php">
			<input type="hidden" name="choose_effect_image_Upload" value="effect_image_Upload">
			<input type="hidden" name="request_uri" value="<?php echo $_SERVER['REQUEST_URI'];?>">
			<div class="form-group">
		    	<label class="control-label col-sm-3" for="email">Effect Name:</label>
		    	<div class="col-sm-9">
		    		<input type="text" class="form-control" id="effect" placeholder="Enter Effect Name" name="effect_name" required>
		    	</div>
		    </div>
		    <div class="form-group">
		      	<label class="control-label col-sm-3" for="email">Image:</label>
		    	<div class="col-sm-9">
		    		<input type="file" name="image_effect" id="image_effect" class="form-control"  required>
		    	</div>
		    </div>
		    <div class="form-group">
		      <div class="col-sm-offset-3 col-sm-8">
		        <button type="Submit" class="btn btn-default" id="effect_choose_image_insert">Submit</button>
		      </div>
		    </div>
		</form>
	</div>
</div>
<?php
$tab1  =  $db->query("SELECT * FROM tbl_choose_a_effect");
if($tab1->num_rows > 0){?>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th>Serial Number</th>
      <th>Effect Name</th>
      <th>Image</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
	<?php $img_path = "https://".$_SERVER['SERVER_NAME']."/app/images/choose_effect/";  $i=1; while($row = $tab1->fetch_assoc()) { ?>
	  <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $row['effect_name']; ?></td>
			<td><img src="<?php echo $img_path.$row['image'] ?>" alt="..." class="img-thumbnail my_img_size"></td>
      <td><button type="button" class="btn btn-danger" data-image="<?php echo $row['image'] ?>" data-id="<?php echo $row['id']?>" onclick="delete_record(this);">Delete</button></td>
    </tr>
    <?php $i++; }?>
			   </tbody>
</table>
<?php }
?>
<script type="text/javascript">
$(function() {

	$('#effect_choose').click(function(e){
    	e.preventDefault();
	 	var title_name = $('#title_name').val();
	 	if(title_name != ''){
	 		$.ajax({
	    		type: 'POST',
	    		url: 'title_updates.php',
	    		data: $("#header_section").serialize(),
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
	 		$('#title_name').addClass('error');
	 	}
    });

    $('#title_name').focus(function(){
	 	$('.error_msg').hide();
	 	$('#title_name').removeClass('error');
	});

	$('.close').click(function(){
		$('.update_msg').hide();
	});

});
//delete button functionality
function delete_record(thisob){
	$(thisob).parent().parent().hide();
	var id = $(thisob).attr('data-id');
	var image =  $(thisob).attr('data-image');
	if(id !=''){
	$.ajax({
			type:'POST',
			url:'delete.php',
			data:{'id':id,'tab':'tab1','image':image},
			success:function(resp){
				console.log(resp);
			},error:function(err,xhr){
				console.log(err);
			}
	});
	}
}
$(document).ready(function(){
	$('#effect_choose_image_insert').click(function(){
		localStorage.setItem('selectTab','#home');
	})
});
<!-- insert code starts here -->

// function insertImage(){
// 	var effect_name = $('#effect').val();
// 	var img_effect = $('#image_effect').val();
// 	console.log(img_effect);
// 	alert("DGdsgds");
// 	if(effect_name != '' && img_effect !=''){
// 		$.ajax({
// 			type:'POST',
// 			url:'image_section_insert.php',
// 		//	data:$("#image_section_Choose_effect").serialize(),
// 		data:{'effect_name':effect_name,'img_effect':image_effect},
// 			beforeSend: function() {
// 			        $('.ajaxloader').show();
// 			    },
// 			success: function(resp){
// 	    	$('.ajaxloader').hide();
// 				console.log(resp);
// 	    },error:function(err,xhr){
// 				console.log(err);
// 			}
// 	  });
// 	}else{
// 		console.log("please select image");
// 	}
// }


<!-- code ends here -->
</script>
