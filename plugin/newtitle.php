<?php
if($text == "/newtitle on" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/newtitle.txt","فعال");
			SendMessage($chatid," اعلان تغییر عنوان گروه  فعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif(preg_match("'^(/textnewtitle)(.*)'",$text)){
        if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
    
    if($text == "/textnewtitle"){
        
        
    }else{
preg_match("'^(/textnewtitle)(.*)'",$text,$match);
$text = str_replace("/textnewtitle","",$text);

		savee("b".$Group."/newtitletext.txt","$text");
		$text = str_replace("#firstname","[اسم کاربر]",$text);
	    $text = str_replace("#lastname","[فامیل]",$text);
	    $text = str_replace("#username","[نام کاربری کاربر]",$text);
	    $text = str_replace("#id","[ای دی کاربر]",$text);
	      $text = str_replace("#title","[عنوان جدید]",$text);
	SendMessage($chatid,"متن $text با موفقیت ثبت شد","html","true");

}}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == "/newtitle off" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/newtitle.txt","غیرفعال");
			SendMessage($chatid," اعلان تغییر عنوان گروه  غیرفعال  شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($newtitle == "فعال" ){
    $textnewtitle = file_get_contents("Group/b".$Group."/newtitletext.txt");

        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));

	if($update->message->new_chat_title){
	    $first = $update->message->from->first_name;
	    	    $lastf = $update->message->from->last_name;
	    	    $user_feed = $update->message->from->username;
	    	    $id_feed = $update->message->from->id;
	    	    $title = $update->message->new_chat_title;
if($user_feed != null){
$user_feed = "@$user_feed"; }
else{
$user_feed = "none"; }

	    $textnewtitle = str_replace("#firstname","$first",$textnewtitle);
	    $textnewtitle = str_replace("#lastname","$lastf",$textnewtitle);
	    $textnewtitle = str_replace("#username","$user_feed",$textnewtitle);
	    $textnewtitle = str_replace("#id","$id_feed",$textnewtitle);
$textnewtitle = str_replace("#title","$title",$textnewtitle);
	    		SendMessage($chatid,"$textnewtitle","html","true");

	}}   

?>