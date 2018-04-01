<?php
if($text == '/lock oprator' ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/locksimcart.txt","فعال");
	SendMessage($chatid,"قفل فعال شد","html","true");
	}else{
	SendMessage($chatid,"شما ادمین نیستید","html","true");
}}
elseif($text == '/unlock oprator' ){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/locksimcart.txt","غیرفعال");
	SendMessage($chatid,"قفل غیرفعال شد","html","true");
	}else{
	SendMessage($chatid,"شما ادمین نیستید","html","true");
}}
elseif($text == "/lock oprator warn" ){
    	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locksimcart_value.txt","warn");
SendMessage($chatid,"هشدار فعال شد","html","true");
	}else{
	SendMessage($chatid,"شما ادمین نیستید","html","true");
}}

elseif($text == "/lock oprator kick" ){
        	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locksimcart_value.txt","kick");
SendMessage($chatid,"حذف فعال شد","html","true");
	}else{
	SendMessage($chatid,"شما ادمین نیستید","html","true");
}}
elseif($text == "/lock oprator pm" ){
        	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locksimcart_value.txt","pm");
		SendMessage($chatid,"  حذف پیام فعال شد","html","true");
	}else{
	SendMessage($chatid,"شما ادمین نیستید","html","true");
}}
elseif($locksimcart == "فعال" ){
        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if(preg_match("'^(.*)(رایتل)(.*)'",$text) or preg_match("'^(.*)(همراه اول)(.*)'",$text) or preg_match("'^(.*)(ایرانسل)(.*)'",$text)){
preg_match("'^(رایتل)(.*)'",$text,$match);
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
 	
	}else{
	    	if($locksimcart_value == "warn"){
SendMessage($chatid,"ارسال تبلیغات اپوراتور   ممنوع است","html","true");
}
		    	elseif($locksimcart_value == "kick"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$fadmin.""));
SendMessage($chatid,"کاربر به علت ارسال تبلیغ اپوراتور حذف شد","html","true");
}    
		    	elseif($locksimcart_value == "pm"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/deleteMessage?parse_mode=HTML&chat_id=".$Group."&message_id=".$message_id_feed.""));
 	
}  
	}
	}}
?>