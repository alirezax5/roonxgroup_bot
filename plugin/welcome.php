<?php
if($text == "/welcome on" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/welcome.txt","فعال");
			SendMessage($chatid," خوش آمد گویی فعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif(preg_match("'^(/textwelcome)(.*)'",$text)){
        if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
    
    if($text == "/textwelcome"){
        
        
    }else{
preg_match("'^(/textwelcome)(.*)'",$text,$match);
$text = str_replace("/textwelcome","",$text);

		savee("b".$Group."/welcometext.txt","$text");
		$text = str_replace("#firstname","[اسم کاربر]",$text);
	    $text = str_replace("#lastname","[فامیل]",$text);
	    $text = str_replace("#username","[نام کاربری کاربر]",$text);
	    $text = str_replace("#id","[ای دی کاربر]",$text);
	SendMessage($chatid,"متن $text با موفقیت ثبت شد","html","true");

}}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($text == "/welcome off" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/welcome.txt","غیرفعال");
			SendMessage($chatid," خوش آمد گویی غیرفعال شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($welcome == "فعال" ){
    $textwelcome = file_get_contents("Group/b".$Group."/welcometext.txt");

        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));

	if($update->message->new_chat_member){
	    $first = $update->message->new_chat_member->first_name;
	    	    $lastf = $update->message->new_chat_member->last_name;
	    	    $user_feed = $update->message->new_chat_member->username;
	    	    $id_feed = $update->message->new_chat_member->id;
if($user_feed != null){
$user_feed = "@$user_feed"; }
else{
$user_feed = "none"; }

	    $textwelcome = str_replace("#firstname","$first",$textwelcome);
	    $textwelcome = str_replace("#lastname","$lastf",$textwelcome);
	    $textwelcome = str_replace("#username","$user_feed",$textwelcome);
	    $textwelcome = str_replace("#id","$id_feed",$textwelcome);

	    		SendMessage($chatid,"$textwelcome","html","true");

	}}   
 
?>