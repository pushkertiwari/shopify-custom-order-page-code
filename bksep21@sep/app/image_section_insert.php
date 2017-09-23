<?php
include 'include/DBConnection.php';
header("Access-Control-Allow-Origin: *");
// echo __DIR__ ."/images/choose_effect/";
// echo "<pre>";
// //print_r($_POST);
// print_r($_FILES);
// echo "</pre>";
// die;

if($_POST['choose_effect_image_Upload'] == 'effect_image_Upload' && isset($_FILES['image_effect']) ){
 if(isset($_FILES["image_effect"]) && $_FILES["image_effect"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_effect"]["name"];
        $filetype = $_FILES["image_effect"]["type"];
        $filesize = $_FILES["image_effect"]["size"];
       
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/choose_effect/". $filename)){
                $filename = time().$filename;
               move_uploaded_file($_FILES["image_effect"]["tmp_name"], __DIR__ ."/images/choose_effect/". $filename);
                $sql = "INSERT INTO tbl_choose_a_effect (effect_name,image,created_at) VALUES ('".$_POST['effect_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');

            } else{
             move_uploaded_file($_FILES["image_effect"]["tmp_name"], __DIR__ ."/images/choose_effect/". $filename);
                $sql = "INSERT INTO tbl_choose_a_effect (effect_name,image,created_at) VALUES ('".$_POST['effect_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
           header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_effect"]["error"];
    }
}

//pick color upload and insert code
if($_POST['pick_color_image_Upload'] == 'pick_color_image' && isset($_FILES['image_picker']) ){
 if(isset($_FILES["image_picker"]) && $_FILES["image_picker"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_picker"]["name"];
        $filetype = $_FILES["image_picker"]["type"];
        $filesize = $_FILES["image_picker"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/picker_image/". $filename)){
                 $filename = time().$filename;
                 move_uploaded_file($_FILES["image_picker"]["tmp_name"], __DIR__ ."/images/picker_image/". $filename);
                $sql = "INSERT INTO tbl_picker_color (color_name,image,created_at) VALUES ('".$_POST['color_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');

            } else{
             move_uploaded_file($_FILES["image_picker"]["tmp_name"], __DIR__ ."/images/picker_image/". $filename);
                $sql = "INSERT INTO tbl_picker_color (color_name,image,created_at) VALUES ('".$_POST['color_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
            header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_picker"]["error"];
    }
}

//knobs color upload and insert code
if($_POST['knob_image_Upload'] == 'knob_image' && isset($_FILES['image_knob']) ){
 if(isset($_FILES["image_knob"]) && $_FILES["image_knob"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_knob"]["name"];
        $filetype = $_FILES["image_knob"]["type"];
        $filesize = $_FILES["image_knob"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/knobs/". $filename)){
                 $filename = time().$filename;
                 move_uploaded_file($_FILES["image_knob"]["tmp_name"], __DIR__ ."/images/knobs/". $filename);
                  $sql = "INSERT INTO tbl_knobs (knob_name,image,created_at) VALUES ('".$_POST['knob_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
              header('location:welcome.php');

            } else{
             move_uploaded_file($_FILES["image_knob"]["tmp_name"], __DIR__ ."/images/knobs/". $filename);
                $sql = "INSERT INTO tbl_knobs (knob_name,image,created_at) VALUES ('".$_POST['knob_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
           header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_knob"]["error"];
    }
}

//footswitch_color upload and insert code
if($_POST['footswitch_Upload'] == 'footswitch_image' && isset($_FILES['image_footswitch']) ){
 if(isset($_FILES["image_footswitch"]) && $_FILES["image_footswitch"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_footswitch"]["name"];
        $filetype = $_FILES["image_footswitch"]["type"];
        $filesize = $_FILES["image_footswitch"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/footswitch_color/". $filename)){
               $filename = time().$filename;
               move_uploaded_file($_FILES["image_footswitch"]["tmp_name"], __DIR__ ."/images/footswitch_color/". $filename);
                $sql = "INSERT INTO tbl_footswitch (footswitch_name,image,created_at) VALUES ('".$_POST['footswitch_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');
            } else{
             move_uploaded_file($_FILES["image_footswitch"]["tmp_name"], __DIR__ ."/images/footswitch_color/". $filename);
                $sql = "INSERT INTO tbl_footswitch (footswitch_name,image,created_at) VALUES ('".$_POST['footswitch_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
            header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_footswitch"]["error"];
    }
}

//footswitch_hardware upload and insert code
if($_POST['hardware_name_post'] == 'footswitch_hardware_name' && isset($_FILES['image_foot_hardware']) ){
 if(isset($_FILES["image_foot_hardware"]) && $_FILES["image_foot_hardware"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_foot_hardware"]["name"];
        $filetype = $_FILES["image_foot_hardware"]["type"];
        $filesize = $_FILES["image_foot_hardware"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/footswitch_hardware/". $filename)){
                 $filename = time().$filename;
                  move_uploaded_file($_FILES["image_foot_hardware"]["tmp_name"], __DIR__ ."/images/footswitch_hardware/". $filename);
                $sql = "INSERT INTO tbl_footswitch_hardware_name (hardware_name,image,created_at) VALUES ('".$_POST['hardware_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
               header('location:welcome.php');

            } else{
             move_uploaded_file($_FILES["image_foot_hardware"]["tmp_name"], __DIR__ ."/images/footswitch_hardware/". $filename);
                $sql = "INSERT INTO tbl_footswitch_hardware_name (hardware_name,image,created_at) VALUES ('".$_POST['hardware_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
            header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_foot_hardware"]["error"];
    }
}


//toggle_switch_hardware upload and insert code
if($_POST['toggle_switch_post'] == 'toggle_switch' && isset($_FILES['image_toggle_switch']) ){
 if(isset($_FILES["image_toggle_switch"]) && $_FILES["image_toggle_switch"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_toggle_switch"]["name"];
        $filetype = $_FILES["image_toggle_switch"]["type"];
        $filesize = $_FILES["image_toggle_switch"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/toggle_switch_hardware/". $filename)){
               $filename = time().$filename;
                move_uploaded_file($_FILES["image_toggle_switch"]["tmp_name"], __DIR__ ."/images/toggle_switch_hardware/". $filename);
                $sql = "INSERT INTO tbl_toggle_switch_hardware (toggle_switch_name,image,created_at) VALUES ('".$_POST['toggle_switch_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');


            } else{
             move_uploaded_file($_FILES["image_toggle_switch"]["tmp_name"], __DIR__ ."/images/toggle_switch_hardware/". $filename);
                $sql = "INSERT INTO tbl_toggle_switch_hardware (toggle_switch_name,image,created_at) VALUES ('".$_POST['toggle_switch_name']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_toggle_switch"]["error"];
    }
}

//toggle_switch_tip upload and insert code
if($_POST['toggle_switch__tip_upload'] == 'switch_tip' && isset($_FILES['image_toggle_switch_tip']) ){
 if(isset($_FILES["image_toggle_switch_tip"]) && $_FILES["image_toggle_switch_tip"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_toggle_switch_tip"]["name"];
        $filetype = $_FILES["image_toggle_switch_tip"]["type"];
        $filesize = $_FILES["image_toggle_switch_tip"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/toggle_switch_tip/". $filename)){
                $filename = time().$filename;
                move_uploaded_file($_FILES["image_toggle_switch_tip"]["tmp_name"], __DIR__ ."/images/toggle_switch_tip/". $filename);
                $sql = "INSERT INTO tbl_toggle_switch_tip (toggle_switch_tip,image,created_at) VALUES ('".$_POST['toggle_switch_tip']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');

            } else{
             move_uploaded_file($_FILES["image_toggle_switch_tip"]["tmp_name"], __DIR__ ."/images/toggle_switch_tip/". $filename);
                $sql = "INSERT INTO tbl_toggle_switch_tip (toggle_switch_tip,image,created_at) VALUES ('".$_POST['toggle_switch_tip']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_toggle_switch_tip"]["error"];
    }
}

//jewel_lens upload and insert code
if($_POST['jewel_lens_upload'] == 'jewel_lens_hidden' && isset($_FILES['image_jewel_lens']) ){
 if(isset($_FILES["image_jewel_lens"]) && $_FILES["image_jewel_lens"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_jewel_lens"]["name"];
        $filetype = $_FILES["image_jewel_lens"]["type"];
        $filesize = $_FILES["image_jewel_lens"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/jewel_lens/". $filename)){
                $filename = time().$filename;
                move_uploaded_file($_FILES["image_jewel_lens"]["tmp_name"], __DIR__ ."/images/jewel_lens/". $filename);
                $sql = "INSERT INTO tbl_jewel_lens (jewel_lens,image,created_at) VALUES ('".$_POST['jewel_lens']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');

            } else{
             move_uploaded_file($_FILES["image_jewel_lens"]["tmp_name"], __DIR__ ."/images/jewel_lens/". $filename);
                $sql = "INSERT INTO tbl_jewel_lens (jewel_lens,image,created_at) VALUES ('".$_POST['jewel_lens']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_jewel_lens"]["error"];
    }
}

//dc_jewel_lens upload and insert code
if($_POST['dc_jewel_lens_upload'] == 'dc_jewel_lens_hidden' && isset($_FILES['image_dc_jewel_lens']) ){
 if(isset($_FILES["image_dc_jewel_lens"]) && $_FILES["image_dc_jewel_lens"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_dc_jewel_lens"]["name"];
        $filetype = $_FILES["image_dc_jewel_lens"]["type"];
        $filesize = $_FILES["image_dc_jewel_lens"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/dc_jack_color/". $filename)){
                $filename = time().$filename;
                 move_uploaded_file($_FILES["image_dc_jewel_lens"]["tmp_name"], __DIR__ ."/images/dc_jack_color/". $filename);
                $sql = "INSERT INTO tbl_dc_jewel_lens (dc_jewel_lens,image,created_at) VALUES ('".$_POST['dc_jewel_lens']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');

            } else{
             move_uploaded_file($_FILES["image_dc_jewel_lens"]["tmp_name"], __DIR__ ."/images/dc_jack_color/". $filename);
                $sql = "INSERT INTO tbl_dc_jewel_lens (dc_jewel_lens,image,created_at) VALUES ('".$_POST['dc_jewel_lens']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_dc_jewel_lens"]["error"];
    }
}

//logo_badge upload and insert code
if($_POST['logo_badge_upload'] == 'logo_badge_hidden' && isset($_FILES['image_logo_badge']) ){
 if(isset($_FILES["image_logo_badge"]) && $_FILES["image_logo_badge"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image_logo_badge"]["name"];
        $filetype = $_FILES["image_logo_badge"]["type"];
        $filesize = $_FILES["image_logo_badge"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/logo_badge/". $filename)){
                 $filename = time().$filename;
                 move_uploaded_file($_FILES["image_logo_badge"]["tmp_name"], __DIR__ ."/images/logo_badge/". $filename);
                $sql = "INSERT INTO tbl_logo_badge (logo_badge,image,created_at) VALUES ('".$_POST['logo_badge']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');


            } else{
             move_uploaded_file($_FILES["image_logo_badge"]["tmp_name"], __DIR__ ."/images/logo_badge/". $filename);
                $sql = "INSERT INTO tbl_logo_badge (logo_badge,image,created_at) VALUES ('".$_POST['logo_badge']."', '".$filename."','".date('y-m-d')."' )";
                $db->query($sql);
                header('location:welcome.php');


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["image_logo_badge"]["error"];
    }
}
// upload the custom image 
if(isset($_FILES['input-file-preview'])){
 if($_FILES["input-file-preview"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["input-file-preview"]["name"];
        $filetype = $_FILES["input-file-preview"]["type"];
        $filesize = $_FILES["input-file-preview"]["size"];
      //  echo $filename;

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists( __DIR__ ."/images/logo_badge/". $filename)){
                 $filename = time().$filename;
                 move_uploaded_file($_FILES["input-file-preview"]["tmp_name"], __DIR__ ."/images/custom_image/". $filename);
                 //  $bin_string = file_get_contents($_FILES["input-file-preview"]["name"]);
                 // $hex_string = base64_encode($bin_string);
                $sql = "INSERT INTO tbl_custom_image (image) VALUES ('".$filename."')";
                $db->query($sql);
               // header('location:welcome.php');
                echo 'uploaded';

            } else{
             move_uploaded_file($_FILES["input-file-preview"]["tmp_name"], __DIR__ ."/images/custom_image/". $filename);
                $sql = "INSERT INTO tbl_custom_image (image) VALUES ('".$filename."')";
                $db->query($sql);
                echo 'uploaded';


            }
        } else{
            echo "Error: There was a problem uploading your file. Please try again.";
        }

    } else{
        echo "Error: " . $_FILES["input-file-preview"]["error"];
    }
}
die;
?>