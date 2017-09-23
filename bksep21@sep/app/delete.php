<?php
include 'include/DBConnection.php';
if($_POST['tab'] == 'tab1'){
    $path =  __DIR__;
    $img_path = $path."/images/choose_effect/".$_POST['image'];
    $db->query('DELETE FROM `tbl_choose_a_effect` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab2'){
    $path =  __DIR__;
    $img_path = $path."/images/picker_image/".$_POST['image'];
    $db->query('DELETE FROM `tbl_picker_color` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab3'){
    $path =  __DIR__;
    $img_path = $path."/images/knobs/".$_POST['image'];
    $db->query('DELETE FROM `tbl_knobs` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab4'){
    $path =  __DIR__;
    $img_path = $path."/images/footswitch_color/".$_POST['image'];
    $db->query('DELETE FROM `tbl_footswitch` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab5'){
    $path =  __DIR__;
    $img_path = $path."/images/footswitch_hardware/".$_POST['image'];
    $db->query('DELETE FROM `tbl_footswitch_hardware_name` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab6'){
    $path =  __DIR__;
    $img_path = $path."/images/toggle_switch_hardware/".$_POST['image'];
    $db->query('DELETE FROM `tbl_toggle_switch_hardware` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab7'){
    $path =  __DIR__;
    $img_path = $path."/images/toggle_switch_tip/".$_POST['image'];
    $db->query('DELETE FROM `tbl_toggle_switch_tip` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab8'){
    $path =  __DIR__;
    $img_path = $path."/images/jewel_lens/".$_POST['image'];
    $db->query('DELETE FROM `tbl_jewel_lens` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab9'){
    $path =  __DIR__;
    $img_path = $path."/images/dc_jack_color/".$_POST['image'];
    $db->query('DELETE FROM `tbl_dc_jewel_lens` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
if($_POST['tab'] == 'tab10'){
    $path =  __DIR__;
    $img_path = $path."/images/logo_badge/".$_POST['image'];
    $db->query('DELETE FROM `tbl_logo_badge` WHERE id ="'.$_POST['id'].'"');
    unlink($img_path);
    echo "True";
}
?>