<?php
	
	if(preg_match("'^(/banall)(.*)'",$text)){
	if($id_feed == "$admin" or $id_feed == "$admin1" or $id_feed == "$admin2"){
    $txxt = file_get_contents("admin/ban.txt");
    $pmembersid= explode("\n",$txxt);
	    preg_match("'^(/banall)(.*)'",$text,$match);
$text = str_replace("/banall","",$text);
    if (!in_array($text,$pmembersid)){
   $aaddd1 = file_get_contents("admin/ban.txt");
      $aaddd1 .= $text."\n";
      file_put_contents("admin/ban.txt",$aaddd1);
      		SendMessage($chatid,"کاربر از تمام گروه ها بن شد","html","true");		
    }else{
	SendMessage($chatid,"کاربر قبلا بن ال شده است❗️","html","true");	
    } } }

//======================================================

	elseif(preg_match("'^(/unbanall)(.*)'",$text)){
	if($id_feed == "$admin" or $id_feed == "$admin1" or $id_feed == "$admin2"){
    $txxt = file_get_contents("admin/ban.txt");
    $pmembersid= explode("\n",$txxt);
	    preg_match("'^(/unbanall)(.*)'",$text,$match);
$text = str_replace("/unbanall","",$text);
    if (in_array($text,$pmembersid)){
   $aaddd1 = file_get_contents("admin/ban.txt");
   $newlist = str_replace("$text\n","",$aaddd1);
      file_put_contents("admin/ban.txt",$newlist);
      SendMessage($chatid," از تمام گروه ها آزاد  شد","html","true");
    }else{
	SendMessage($chatid,"کاربری با این شناسه در لیست بن ال ها یافت نشده❗️","html","true");	
	} } }
	
    elseif (strpos($banall , "$from_id") !== false) { 
file_get_contents('https://api.telegram.org/bot'.API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$from_id."");
	}
	
?>