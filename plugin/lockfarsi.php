<?php

//= locks music
if($text == '/lock farsi' ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/lockfarsi.txt","فعال");
			SendMessage($chatid,"قفل فعال شد","html","true");

	}else{
				SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == '/unlock farsi' ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/lockfarsi.txt","غیرفعال");
				SendMessage($chatid,"قفل غیرفعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");
}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");
}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");
}}
elseif($text == "/lock farsi warn" ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
    	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockfarsi_value.txt","warn");
	$first = $message->from->first_name;
		SendMessage($chatid,"هشدار فعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");
}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");
}}
elseif($text == "/lock farsi kick" ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
        	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockfarsi_value.txt","kick");
		$first = $message->from->first_name;
		SendMessage($chatid,"حذف فعال شد","html","true");

}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");
}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");
}}
elseif($text == "/lock farsi pm" ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
        	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/lockfarsi_value.txt","pm");
		$first = $message->from->first_name;
		SendMessage($chatid,"  حذف پیام فعال شد","html","true");

}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");
}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");
}}
elseif($lockfarsi == "فعال" ){
        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if(preg_match("'^(.*)(ض)(.*)'",$text) or preg_match("'^(.*)(ص)(.*)'",$text) or preg_match("'^(.*)(ق)(.*)'",$text)	or preg_match("'^(.*)(ث)(.*)'",$text) or preg_match("'^(.*)(ف)(.*)'",$text)	or preg_match("'^(.*)(غ)(.*)'",$text)	or preg_match("'^(.*)(ع)(.*)'",$text)	 or preg_match("'^(.*)(ه)(.*)'",$text) or preg_match("'^(.*)(خ)(.*)'",$text) or preg_match("'^(.*)(ح)(.*)'",$text) or preg_match("'^(.*)(ج)(.*)'",$text) or preg_match("'^(.*)(چ)(.*)'",$text) or preg_match("'^(.*)(ش)(.*)'",$text) or preg_match("'^(.*)(س)(.*)'",$text) or preg_match("'^(.*)(ی)(.*)'",$text) or preg_match("'^(.*)(ب)(.*)'",$text) or preg_match("'^(.*)(ل)(.*)'",$text) or preg_match("'^(.*)(ا)(.*)'",$text) or preg_match("'^(.*)(ت)(.*)'",$text) or preg_match("'^(.*)(ن)(.*)'",$text) or preg_match("'^(.*)(م)(.*)'",$text) or preg_match("'^(.*)(ک)(.*)'",$text) or preg_match("'^(.*)(گ)(.*)'",$text) or preg_match("'^(.*)(ظ)(.*)'",$text) or preg_match("'^(.*)(ط)(.*)'",$text) or preg_match("'^(.*)(ز)(.*)'",$text) or preg_match("'^(.*)(ر)(.*)'",$text) or preg_match("'^(.*)(ذ)(.*)'",$text) or preg_match("'^(.*)(د)(.*)'",$text) or preg_match("'^(.*)(ئ)(.*)'",$text)
){
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
 	
	}else{
	    	if($lockfarsi_value == "warn"){
		$first = $message->from->first_name;
		SendMessage($chatid,"ارسال متن فارسی  ممنوع است","html","true");

}
		    	elseif($lockfarsi_value == "kick"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$fadmin.""));
    
		$first = $message->from->first_name;
		SendMessage($chatid,"کاربر به علت ارسال متن فارسی حذف شد","html","true");

} 
		    	elseif($lockfarsi_value == "pm"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/deleteMessage?parse_mode=HTML&chat_id=".$Group."&message_id=".$message_id_feed.""));
 	
}  
	}
	}}
?>