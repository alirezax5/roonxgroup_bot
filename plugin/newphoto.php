<?php
if($text == "/newphoto on" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/newphoto.txt","فعال");
			SendMessage($chatid," اعلان تغییر تصویر گروه  فعال  شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif(preg_match("'^(/textnewphoto)(.*)'",$text)){
        if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
    
    if($text == "/textnewphoto"){
        
        
    }else{
preg_match("'^(/textnewphoto)(.*)'",$text,$match);
$text = str_replace("/textnewphoto","",$text);

		savee("b".$Group."/newphototext.txt","$text");
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
elseif($text == "/newphoto off" ){
    if ($type_chat == 'group' | $type_chat == 'supergroup'){
  	if ($addthegroup == "yes"){
	$down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));
	if($down->result->status == creator or $down->result->status == administrator or $fadmin == $admin or  $fadmin == $admin1 or  $fadmin == $admin2 or  strpos($adminlist , "$fadmin") !== false){
		savee("b".$Group."/welcome.txt","غیرفعال");
			SendMessage($chatid," اعلان تغییر تصویر گروه  غیرفعال  شد","html","true");

	}else{
			SendMessage($chatid,"شما ادمین نیستید","html","true");

}}else{
		SendMessage($chatid,"گروه اضافه نشده! روی /add بزنید","html","true");

}}else{
		SendMessage($chatid,"این دستور فقط در گروه کاربرد دارد کافیه ربات رو به گروه اضافع کنی و دستور /add رو ارسال کنید!","html","true");

}}
elseif($newphoto == "فعال" ){
    $textnewphoto = file_get_contents("Group/b".$Group."/newphototext.txt");

        $down = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?parse_mode=HTML&chat_id=".$Group ."&user_id=".$from_id .""));

	if($update->message->new_chat_photo){
	    
	    $first = $update->message->from->first_name;
	    	    $lastf = $update->message->from->last_name;
	    	    $user_feed = $update->message->from->username;
	    	    $id_feed = $update->message->from->id;
if($user_feed != null){
$user_feed = "@$user_feed"; }
else{
$user_feed = "none"; }

	    $textnewphoto = str_replace("#firstname","$first",$textnewphoto);
	    $textnewphoto = str_replace("#lastname","$lastf",$textnewphoto);
	    $textnewphoto = str_replace("#username","$user_feed",$textnewphoto);
	    $textnewphoto = str_replace("#id","$id_feed",$textnewphoto);

	    		SendMessage($chatid,"$textnewphoto","html","true");

	}}   

?>