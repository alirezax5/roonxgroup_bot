<?php

//= locks music
if($text == '/lock en' ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/locken.txt","فعال");
			SendMessage($chatid,"قفل فعال شد","html","true");

	}else{
				SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == '/unlock en' ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/locken.txt","غیرفعال");
				SendMessage($chatid,"قفل غیرفعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");
}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");
}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");
}}
elseif($text == "/lock en warn" ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
    	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locken_value.txt","warn");
	$first = $message->from->first_name;
		SendMessage($chatid,"هشدار فعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");
}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");
}}
elseif($text == "/lock en kick" ){
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
elseif($text == "/lock en pm" ){
    	if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
        	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
	savee("b".$Group."/locken_value.txt","pm");
		$first = $message->from->first_name;
		SendMessage($chatid,"  حذف پیام فعال شد","html","true");

}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");
}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");
}}
elseif($locken == "فعال" ){
        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if(preg_match("'^(.*)(q)(.*)'",$text) or preg_match("'^(.*)(w)(.*)'",$text) or preg_match("'^(.*)(e)(.*)'",$text)	or preg_match("'^(.*)(r)(.*)'",$text) or preg_match("'^(.*)(t)(.*)'",$text)	or preg_match("'^(.*)(y)(.*)'",$text)	or preg_match("'^(.*)(u)(.*)'",$text)	 or preg_match("'^(.*)(o)(.*)'",$text) or preg_match("'^(.*)(i)(.*)'",$text) or preg_match("'^(.*)(p)(.*)'",$text) or preg_match("'^(.*)(a)(.*)'",$text) or preg_match("'^(.*)(s)(.*)'",$text) or preg_match("'^(.*)(f)(.*)'",$text) or preg_match("'^(.*)(g)(.*)'",$text) or preg_match("'^(.*)(h)(.*)'",$text) or preg_match("'^(.*)(j)(.*)'",$text) or preg_match("'^(.*)(k)(.*)'",$text) or preg_match("'^(.*)(l)(.*)'",$text) or preg_match("'^(.*)(z)(.*)'",$text) or preg_match("'^(.*)(x)(.*)'",$text) or preg_match("'^(.*)(c)(.*)'",$text) or preg_match("'^(.*)(v)(.*)'",$text) or preg_match("'^(.*)(b)(.*)'",$text) or preg_match("'^(.*)(n)(.*)'",$text) or preg_match("'^(.*)(m)(.*)'",$text) 
){
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
 	
	}else{
	    	if($locken_value == "warn"){
		$first = $message->from->first_name;
		SendMessage($chatid,"ارسال متن انگلیسی  ممنوع است","html","true");

}
		    	elseif($locken_value == "kick"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/kickChatMember?parse_mode=HTML&chat_id=".$Group."&user_id=".$fadmin.""));
    
		$first = $message->from->first_name;
		SendMessage($chatid,"کاربر به علت ارسال متن انگلیسی حذف شد","html","true");

} 
		    	elseif($locken_value == "pm"){
		    	    $bana = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/deleteMessage?parse_mode=HTML&chat_id=".$Group."&message_id=".$message_id_feed.""));
 	
}  
	}
	}}
?>