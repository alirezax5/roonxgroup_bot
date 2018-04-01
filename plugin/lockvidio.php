<?php

//= locks vidio
if($text == '/lock vidio' ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/lockvidio.txt","فعال");
		SendMessage($chatid,"قفل فعال شد","html","true");

	}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == '/unlock vidio' ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/lockvidio.txt","غیرفعال");
			SendMessage($chatid,"قفل غیرفعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == '/lock vidio warn' ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockvidio_value.txt","warn");
		$first = $message->from->first_name;
		SendMessage($chatid,"هشدار فعال شد","html","true");

}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == '/lock vidio kick' ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockvidio_value.txt","kick");
		$first = $message->from->first_name;
	SendMessage($chatid,"حذف فعال شد","html","true");

}else{
		SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($lockvidio == "فعال" ){
	if($update->message->video->file_id){
	    	if($lockvidio_value == "warn"){
		$first = $message->from->first_name;
	SendMessage($chatid,"ارسال فیلم ممنوع است","html","true");

}
		    	elseif($lockvidio_value == "kick"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$fadmin.""));
    
		$first = $message->from->first_name;
	SendMessage($chatid,"کاربر به علت ارسال فیلم حذف شد","html","true");

}    
  		    	elseif($lockvidio_value == "pm"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/deleteMessage?parse_mode=HTML&chat_id=".$Group."&message_id=".$message_id_feed.""));
 	
}  
	}}

//= locks vidio
//= locks audio

?>