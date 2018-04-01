<?php
if($reply != null and $text == "/setsilent" ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$from_id.""));
	if($down->result->status == creator or $id_feed == "$admin" or $id_feed == "$admin1" or $id_feed == "$admin2"){
	    
	if($reply_id_id == "104280701"){
		SendMessage($chatid,"خطایی رخ داده است❗️","html","true");
			return false;
	}
		
    $txxt = file_get_contents("Group/b".$Group."/silent.txt");
    $pmembersid= explode("\n",$txxt);
    if (!in_array($reply_id_id,$pmembersid)){
      $aaddd = file_get_contents("Group/b".$Group."/silent.txt");
      $aaddd .= $reply_id_id."\n";
		savee("b".$Group."/silent.txt",$aaddd);
					SendMessage($chatid,"کاربر ( $reply_id_first_name )ساکت شد","html","true");
		
    }else{
        
	SendMessage($chatid,"کاربر ( $reply_id_first_name ) از قبل ساکت بوده است!","html","true");
	
    }
    
	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}



//==========================

elseif($reply != null and $text == "/delsilent" ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$from_id.""));
	if($down->result->status == creator or $id_feed == "$admin" or $id_feed == "$admin1" or $id_feed == "$admin2"){
	    
	if($reply_id_id == "104280701"){
		SendMessage($chatid,"خطایی رخ داده است❗️","html","true");
			return false;
	}
    $txxt1 = file_get_contents("Group/b".$Group."/silent.txt");
    $pmembersid= explode("\n",$txxt1);
    if (in_array($reply_id_id,$pmembersid)){
	$txxt2 = file_get_contents("Group/b".$Group."/silent.txt");
	$newlist = str_replace("$reply_id_id\n","",$txxt2);
	savee("b".$Group."/silent.txt",$newlist);
	SendMessage($chatid,"کاربر ( $reply_id_first_name ) از ساکتی برکنار شد❗️","html","true");
    }else{
	SendMessage($chatid,"کاربر ( $reply_id_first_name ) ساکت نیست❌","html","true");    }
	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}

elseif($text == "/silent on" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/silenton.txt","فعال");
			SendMessage($chatid," ساکت بودن کاربر خاص فعال شد","html","true");

	}else{
			SendMessage($chatid,"شما $updateادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == "/silent off" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/silenton.txt","غیرفعال");
			SendMessage($chatid," ساکت بودن کاربر خاص غیرفعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($silenton == "فعال" ){ 
	if($update->message or  $update->message->voice or $update->message->contact or $update->message->forward_from or $update->message->game or preg_match("'^(.*)(https)(.*)'",$text) or $update->message->location or $update->message->video->file_id or $update->message->audio or preg_match("'^(.*)(رایتل)(.*)'",$text) or preg_match("'^(.*)(همراه اول)(.*)'",$text) or preg_match("'^(.*)(ایرانسل)(.*)'",$text) or $update->message->photo[0] or $update->message->sticker or preg_match("'^(.*)(@)(.*)'",$text) or $message->text){

		$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));

			if(strpos($silent , "$fadmin") !== false){
	     	        		  	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/deleteMessage?parse_mode=HTML&chat_id=".$Group."&message_id=".$message_id_feed.""));

 	
	}}}
?>