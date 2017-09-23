<?php 
include 'include/DBConnection.php'; 
// print_r($_POST);
// die();
if($_POST['choose_effect'] == 'choose_a_effect'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['title_name'].'",description = "'.$_POST['full_description'].'" WHERE unique_head_key = "'.$_POST['choose_effect'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['pick_color'] == 'pick_a_color'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['pick_title'].'",description = "'.$_POST['color_description'].'" WHERE unique_head_key = "'.$_POST['pick_color'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['knob_key'] == 'choose_knobs'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['knob_title'].'",description = "'.$_POST['knob_description'].'" WHERE unique_head_key = "'.$_POST['knob_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['footswitch_key'] == 'footswitch_color'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['footswitch_title'].'",description = "'.$_POST['footswitch_des'].'" WHERE unique_head_key = "'.$_POST['footswitch_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['footswitch_hardware_key'] == 'footswitch_hardware'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['hardware_title'].'",description = "'.$_POST['hardware_des'].'" WHERE unique_head_key = "'.$_POST['footswitch_hardware_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['toggle_hardware_key'] == 'toggle_hardware'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['toggle_hardware_title'].'",description = "'.$_POST['toggle_hardware_des'].'" WHERE unique_head_key = "'.$_POST['toggle_hardware_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['toggle_tip_key'] == 'toggle_switch_tip'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['toggle_tip_title'].'",description = "'.$_POST['toggle_tip_des'].'" WHERE unique_head_key = "'.$_POST['toggle_tip_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['jewel_lens_key'] == 'jewel_lens'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['jewel_lens_title'].'",description = "'.$_POST['jewel_lens_des'].'" WHERE unique_head_key = "'.$_POST['jewel_lens_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['dc_power_jack_key'] == 'dc_power_jack_color'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['dc_power_jack_title'].'",description = "'.$_POST['dc_power_jack_des'].'" WHERE unique_head_key = "'.$_POST['dc_power_jack_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['logo_badge_key'] == 'logo_badge'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['logo_badge_title'].'",description = "'.$_POST['logo_badge_des'].'" WHERE unique_head_key = "'.$_POST['logo_badge_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['custom_design_key'] == 'custom_design_pattern'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['custom_design_title'].'",description = "'.$_POST['custom_design_des'].'" WHERE unique_head_key = "'.$_POST['custom_design_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['comment_suggestion_key'] == 'comments_suggestions'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['comment_suggestion_title'].'",description = "'.$_POST['comment_suggestion_des'].'" WHERE unique_head_key = "'.$_POST['comment_suggestion_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['personal_info_key'] == 'personal_info'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['personal_info_title'].'",description = "'.$_POST['personal_info_des'].'" WHERE unique_head_key = "'.$_POST['personal_info_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['thank_you_key'] == 'thank_you'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['thank_you_title'].'",description = "'.$_POST['thank_you_des'].'" WHERE unique_head_key = "'.$_POST['thank_you_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['picker_color_cmt_key'] == 'picker_color_cmt'){
	$db->query('UPDATE tbl_headers SET title = "'.$_POST['picker_color_cmt_title'].'",description = "'.$_POST['picker_color_cmt_des'].'" WHERE unique_head_key = "'.$_POST['picker_color_cmt_key'].'" AND id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['admin_email_key'] == 'admin_email_check'){
	$db->query('UPDATE admin_email SET email = "'.$_POST['admin_email_title'].'" WHERE id = "'.$_POST['id'].'"');
	echo "Done";
}

if($_POST['hosting_key'] == 'host_settings'){
	$db->query('UPDATE tbl_host_settings SET host_name = "'.$_POST['host_name'].'", host_username = "'.$_POST['host_username'].'",host_pass = "'.$_POST['host_pass'].'",host_secure = "'.$_POST['host_secure'].'",host_port = "'.$_POST['host_port'].'" WHERE id = "'.$_POST['id'].'"');
	echo "Done";
}


die();	
?>