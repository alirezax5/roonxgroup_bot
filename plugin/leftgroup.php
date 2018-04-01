<?php
if($text == "/left on" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/leftgroup.txt","فعال");
			SendMessage($chatid,"هشدار موقع خروج کاربر فعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif(preg_match("'^(/textleft)(.*)'",$text)){
    if($text == "/textleft"){
        
        
    }else{
preg_match("'^(/textleft)(.*)'",$text,$match);
$text = str_replace("/textleft","",$text);

		savee("b".$Group."/textleftgroup.txt","$text");
		$text = str_replace("#firstname","[اسم کاربر]",$text);
	    $text = str_replace("#lastname","[فامیل]",$text);
	    $text = str_replace("#username","[نام کاربری کاربر]",$text);
	    $text = str_replace("#id","[ای دی کاربر]",$text);
	SendMessage($chatid,"متن $text با موفقیت ثبت شد","html","true");

}}
elseif($text == "/left off" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
			if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/leftgroup.txt","غیرفعال");
			SendMessage($chatid,"هشدار موقع خروج کاربر غیرفعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($leftgroup == "فعال" ){
    $textleft = file_get_contents("Group/b".$Group."/textleftgroup.txt");

        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));

	if($update->message->left_chat_member){
	    $first = $update->message->left_chat_member->first_name;
	    	    $lastf = $update->message->left_chat_member->last_name;
	    	    $user_feed = $update->message->left_chat_member->username;
	    	    $id_feed = $update->message->left_chat_member->id;
if($user_feed != null){
$user_feed = "@$user_feed"; }
else{
$user_feed = "none"; }

	    $textleft = str_replace("#firstname","$first",$textleft);
	    $textleft = str_replace("#lastname","$lastf",$textleft);
	    $textleft = str_replace("#username","$user_feed",$textleft);
	    $textleft = str_replace("#id","$id_feed",$textleft);

	    		SendMessage($chatid,"$textleft","html","true");

	}}   

?>