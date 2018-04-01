<?php

//= locks vidio
if($text == '/lock vidio' ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/lockvidio.txt","فعال");
		SendMessage($chatid,"قفل فعال شد","html","true");

	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}
elseif($text == '/unlock vidio' ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/lockvidio.txt","غیرفعال");
			SendMessage($chatid,"قفل غیرفعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}
elseif($text == '/lock vidio warn' ){
$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockvidio_value.txt","warn");
		$first = $message->from->first_name;
		SendMessage($chatid,"هشدار فعال شد","html","true");

}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}
elseif($text == '/lock vidio kick' ){
$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockvidio_value.txt","kick");
		$first = $message->from->first_name;
	SendMessage($chatid,"حذف فعال شد","html","true");

}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}
elseif($text == '/lock vidio pm' ){
$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockvidio_value.txt","pm");
		$first = $message->from->first_name;
	SendMessage($chatid,"حذف فعال شد","html","true");

}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}
elseif($lockvidio == "فعال" ){
    	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($update->message->video->file_id){
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
 	
	}else{
	    	if($lockvidio_value == "warn"){
		$first = $message->from->first_name;
	SendMessage($chatid,"ارسال فیلم ممنوع است","html","true");

}
		    	elseif($lockvidio_value == "kick"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$fadmin.""));
    
		$first = $message->from->first_name;
	SendMessage($chatid,"کاربر به علت ارسال فیلم حذف شد","html","true");

}    
	}}}

//= locks vidio


?>