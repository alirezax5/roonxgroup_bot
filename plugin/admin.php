<?php

if($reply != null and $text == "/setowner" ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$from_id.""));
	if($down->result->status == creator or $id_feed == "$admin" or $id_feed == "$admin1" or $id_feed == "$admin2"){
	    
	if($reply_id_id == "104280701"){
		SendMessage($chatid,"خطایی رخ داده است❗️","html","true");
			return false;
	}
		
    $txxt = file_get_contents("Group/b".$Group."/AdminList.txt");
    $pmembersid= explode("\n",$txxt);
    if (!in_array($reply_id_id,$pmembersid)){
      $aaddd = file_get_contents("Group/b".$Group."/AdminList.txt");
      $aaddd .= $reply_id_id."\n";
		savee("b".$Group."/AdminList.txt",$aaddd);
		SendMessage($chatid,"کاربر ( $reply_id_first_name )ادمین شد","html","true");
		
    }else{
        
	SendMessage($chatid,"کاربر ( $reply_id_first_name ) از قبل ادمین بوده است!","html","true");
	
    }
    
	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}

//==========================

if($reply != null and $text == "/delowner" ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$from_id.""));
	if($down->result->status == creator or $id_feed == "$admin" or $id_feed == "$admin1" or $id_feed == "$admin2"){
	    
	if($reply_id_id == "104280701"){
		SendMessage($chatid,"خطایی رخ داده است❗️","html","true");
			return false;
	}
    $txxt1 = file_get_contents("Group/b".$Group."/AdminList.txt");
    $pmembersid= explode("\n",$txxt1);
    if (in_array($reply_id_id,$pmembersid)){
	$txxt2 = file_get_contents("Group/b".$Group."/AdminList.txt");
	$newlist = str_replace("$reply_id_id\n","",$txxt2);
	savee("b".$Group."/AdminList.txt",$newlist);
	SendMessage($chatid,"کاربر ( $reply_id_first_name ) از ادمینی برکنار شد❗️","html","true");
    }else{
	SendMessage($chatid,"کاربر ( $reply_id_first_name ) ادمین نیست❌","html","true");    }
	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}

?>