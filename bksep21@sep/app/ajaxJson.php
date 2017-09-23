<?php
include 'include/DBConnection.php'; 
header("Access-Control-Allow-Origin: *");

if (isset($_REQUEST['choose_effect'])) {
	$data = $db->query('SELECT effect_name,id,image FROM tbl_choose_a_effect');
	if($data->num_rows > 0){
		$records = array();
		while($rows = $data->fetch_assoc()){
			$records[] = $rows;
		}
		echo json_encode($records);
	}
}

if (isset($_REQUEST['pick_color'])) {
	$data = $db->query('SELECT color_name,id,image FROM tbl_picker_color');
	if($data->num_rows > 0){
		$pick = array();
		while($rows = $data->fetch_assoc()){
			$pick[] = $rows;
		}
		echo json_encode($pick);
	}
}

if (isset($_REQUEST['knobs'])) {
	$data = $db->query('SELECT knob_name,id,image FROM tbl_knobs');
	if($data->num_rows > 0){
		$knob = array();
		while($rows = $data->fetch_assoc()){
			$knob[] = $rows;
		}
		echo json_encode($knob);
	}
}

if (isset($_REQUEST['footswitch_color'])) {
	$data = $db->query('SELECT footswitch_name,id,image FROM tbl_footswitch');
	if($data->num_rows > 0){
		$footswitch_color = array();
		while($rows = $data->fetch_assoc()){
			$footswitch_color[] = $rows;
		}
		echo json_encode($footswitch_color);
	}
}

if (isset($_REQUEST['footswitch_hardware'])) {
	$data = $db->query('SELECT hardware_name,id,image FROM tbl_footswitch_hardware_name');
	if($data->num_rows > 0){
		$footswitch_hardware = array();
		while($rows = $data->fetch_assoc()){
			$footswitch_hardware[] = $rows;
		}
		echo json_encode($footswitch_hardware);
	}
}
if (isset($_REQUEST['toggle_switch'])) {
	$data = $db->query('SELECT toggle_switch_name,id,image FROM tbl_toggle_switch_hardware');
	if($data->num_rows > 0){
		$toggle_switch_name = array();
		while($rows = $data->fetch_assoc()){
			$toggle_switch_name[] = $rows;
		}
		echo json_encode($toggle_switch_name);
	}
}

if (isset($_REQUEST['toggle_switch_tip'])) {
	$data = $db->query('SELECT toggle_switch_tip,id,image FROM tbl_toggle_switch_tip');
	if($data->num_rows > 0){
		$switch_tip = array();
		while($rows = $data->fetch_assoc()){
			$switch_tip[] = $rows;
		}
		echo json_encode($switch_tip);
	}
}

if (isset($_REQUEST['jewel_lens_json'])) {
	$data = $db->query('SELECT jewel_lens,id,image FROM tbl_jewel_lens');
	if($data->num_rows > 0){
		$jewel_lens = array();
		while($rows = $data->fetch_assoc()){
			$jewel_lens[] = $rows;
		}
		echo json_encode($jewel_lens);
	}
}

if (isset($_REQUEST['dc_jewel_lens'])) {
	$data = $db->query('SELECT dc_jewel_lens,id,image FROM tbl_dc_jewel_lens');
	if($data->num_rows > 0){
		$dc_jewel_lens = array();
		while($rows = $data->fetch_assoc()){
			$dc_jewel_lens[] = $rows;
		}
		echo json_encode($dc_jewel_lens);
	}
}

if (isset($_REQUEST['logo_badge'])) {
	$data = $db->query('SELECT logo_badge,id,image FROM tbl_logo_badge');
	if($data->num_rows > 0){
		$logo_badge = array();
		while($rows = $data->fetch_assoc()){
			$logo_badge[] = $rows;
		}
		echo json_encode($logo_badge);
	}
}

//title and paragraph data fetching their jsons  of choose a effect
if (isset($_REQUEST['title_choose_effect'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'choose_a_effect'");
	if($data->num_rows > 0){
		$text_choose_effect = array();
		while($rows = $data->fetch_assoc()){
			$text_choose_effect[] = $rows;
		}
		echo json_encode($text_choose_effect);
	}
}

//title and paragraph data fetching their jsons of pick a color
if (isset($_REQUEST['title_picker_color'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'pick_a_color'");
	if($data->num_rows > 0){
		$text_picker = array();
		while($rows = $data->fetch_assoc()){
			$text_picker[] = $rows;
		}
		echo json_encode($text_picker);
	}
}

//title and paragraph data fetching their jsons of knobs
if (isset($_REQUEST['title_knobs'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'choose_knobs'");
	if($data->num_rows > 0){
		$text_knobs = array();
		while($rows = $data->fetch_assoc()){
			$text_knobs[] = $rows;
		}
		echo json_encode($text_knobs);
	}
}

//title and paragraph data fetching their jsons of footswitch colors
if (isset($_REQUEST['title_footswitch_color'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'footswitch_color'");
	if($data->num_rows > 0){
		$text_footswitch_color = array();
		while($rows = $data->fetch_assoc()){
			$text_footswitch_color[] = $rows;
		}
		echo json_encode($text_footswitch_color);
	}
}

//title and paragraph data fetching their jsons of footswitch hardware
if (isset($_REQUEST['title_footswitch_hardware'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'footswitch_hardware'");
	if($data->num_rows > 0){
		$text_footswitch_hardware = array();
		while($rows = $data->fetch_assoc()){
			$text_footswitch_hardware[] = $rows;
		}
		echo json_encode($text_footswitch_hardware);
	}
}

//title and paragraph data fetching their jsons of toggle_hardware
if (isset($_REQUEST['title_toggle_hardware'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'toggle_hardware'");
	if($data->num_rows > 0){
		$text_toggle_hardware = array();
		while($rows = $data->fetch_assoc()){
			$text_toggle_hardware[] = $rows;
		}
		echo json_encode($text_toggle_hardware);
	}
}
//title and paragraph data fetching their jsons of toggle_switch
if (isset($_REQUEST['title_toggle_switch_tip'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'toggle_switch_tip'");
	if($data->num_rows > 0){
		$text_toggle_switch = array();
		while($rows = $data->fetch_assoc()){
			$text_toggle_switch[] = $rows;
		}
		echo json_encode($text_toggle_switch);
	}
}

//title and paragraph data fetching their jsons of jewel lens
if (isset($_REQUEST['title_jewel_lens'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'jewel_lens'");
	if($data->num_rows > 0){
		$text_jewel_lens = array();
		while($rows = $data->fetch_assoc()){
			$text_jewel_lens[] = $rows;
		}
		echo json_encode($text_jewel_lens);
	}
}

//title and paragraph data fetching their jsons of dc jewel lens
if (isset($_REQUEST['title_dc_jewel_lens'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'dc_power_jack_color'");
	if($data->num_rows > 0){
		$text_dc_jewel_lens = array();
		while($rows = $data->fetch_assoc()){
			$text_dc_jewel_lens[] = $rows;
		}
		echo json_encode($text_dc_jewel_lens);
	}
}

//title and paragraph data fetching their jsons of logo badge
if (isset($_REQUEST['title_logo_badge'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'logo_badge'");
	if($data->num_rows > 0){
		$text_logo_badge = array();
		while($rows = $data->fetch_assoc()){
			$text_logo_badge[] = $rows;
		}
		echo json_encode($text_logo_badge);
	}
}
//title and paragraph data fetching their jsons of thankyou text
if (isset($_REQUEST['title_thankyou'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'thank_you'");
	if($data->num_rows > 0){
		$text_thankyou = array();
		while($rows = $data->fetch_assoc()){
			$text_thankyou[] = $rows;
		}
		echo json_encode($text_thankyou);
	}
}

//title and paragraph data fetching their jsons of personal text
if (isset($_REQUEST['title_personal'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'personal_info'");
	if($data->num_rows > 0){
		$text_personal = array();
		while($rows = $data->fetch_assoc()){
			$text_personal[] = $rows;
		}
		echo json_encode($text_personal);
	}
}

//title and paragraph data fetching their jsons of comments_suggestions text
if (isset($_REQUEST['title_comments_suggestion'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'comments_suggestions'");
	if($data->num_rows > 0){
		$text_comments_suggestions = array();
		while($rows = $data->fetch_assoc()){
			$text_comments_suggestions[] = $rows;
		}
		echo json_encode($text_comments_suggestions);
	}
}

//title and paragraph data fetching their jsons of comments_suggestions text
if (isset($_REQUEST['title_custom_design'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'custom_design_pattern'");
	if($data->num_rows > 0){
		$text_custom_design = array();
		while($rows = $data->fetch_assoc()){
			$text_custom_design[] = $rows;
		}
		echo json_encode($text_custom_design);
	}
}

//title and paragraph data fetching their jsons of picker_color_cmt text
if (isset($_REQUEST['picker_color_cmt_title'])) {
	$data = $db->query("SELECT * FROM `tbl_headers` WHERE `unique_head_key` = 'picker_color_cmt'");
	if($data->num_rows > 0){
		$text_color_cmt = array();
		while($rows = $data->fetch_assoc()){
			$text_color_cmt[] = $rows;
		}
		echo json_encode($text_color_cmt);
	}
}

die();
?>