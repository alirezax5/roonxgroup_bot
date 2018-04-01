<?php

if ($reply != null and $text == "/id") {

if($reply_id_username != null){
$reply_id_username = "@$reply_id_username"; }
else{
$reply_id_username = "ندارد"; }

$infobot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$reply_id_id"));
$total_count = "".$infobot->result->total_count."";

if($total_count == "0"){
    
 $admin1 = "".$infobot->result->total_count."";
 $photo = "".$infobot->result->photos[0][0]->file_id."";

	bot('sendphoto',[
					'chat_id'=>$chatid,
			      'photo'=>$nophoto,
		'caption'=>" اطلاعات شما در دکمه شیشه ای زیر نمایش داده میشود:",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[

 [
 ["text"=>"$admin1","callback_data"=>"lockvidio"],["text"=>"تعداد عکس پروفایل","callback_data"=>"lockvidio"]
 ],
 [
 ["text"=>"$reply_id_first_name","callback_data"=>"lockvidio"],["text"=>"نام شما:","callback_data"=>"lockvidio"]
 ],
 
 [
 ["text"=>"$reply_id_username","url"=>"https://telegram.me/$reply_id_username2"],["text"=>"نام کاربری:","callback_data"=>"lockvidio"]
 ],
 [
 ["text"=>"$reply_id_id","callback_data"=>"lockvidio"],["text"=>"ایدی عددی","callback_data"=>"lockvidio"]
 ],
				
					],
					'resize_keyboard'=>true
			])
			]);
 }else{
        $admin1 = "".$infobot->result->total_count."";
 $photo = "".$infobot->result->photos[0][0]->file_id."";

	bot('sendphoto',[
					'chat_id'=>$chatid,
			      'photo'=>$photo,
		'caption'=>" اطلاعات شما در دکمه شیشه ای زیر نمایش داده میشود:",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[
 [["text"=>"$admin1","callback_data"=>"lockvidio"],["text"=>"تعداد عکس پروفایل","callback_data"=>"lockvidio"]],
 [["text"=>"$reply_id_first_name","callback_data"=>"lockvidio"],["text"=>"نام شما:","callback_data"=>"lockvidio"]],
 [["text"=>"$reply_id_username","url"=>"https://telegram.me/$reply_id_username2"],["text"=>"نام کاربری:","callback_data"=>"lockvidio"]],
 [["text"=>"$reply_id_id","callback_data"=>"lockvidio"],["text"=>"ایدی عددی","callback_data"=>"lockvidio"]],
				
], 'resize_keyboard'=>true ]) ]); }

}else{
    
    if($user_feed != null){
$username1 = "@$user_feed"; }
else{
$username1 = "ندارد"; }

if ($text == "/id") {
      		$infobot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"));
      		 $total_count = "".$infobot->result->total_count."";

if($total_count == "0"){

 $admin1 = "".$infobot->result->total_count."";
 $photo = "".$infobot->result->photos[0][0]->file_id."";

	bot('sendphoto',[
					'chat_id'=>$chatid,
			      'photo'=>new CURLFile("photo/nophoto.png"),
		'caption'=>" اطلاعات شما در دکمه شیشه ای زیر نمایش داده میشود:",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[

 [
 ["text"=>"$admin1","callback_data"=>"lockvidio"],["text"=>"تعداد عکس پروفایل","callback_data"=>"lockvidio"]
 ],
 [
 ["text"=>"$first","callback_data"=>"lockvidio"],["text"=>"نام شما:","callback_data"=>"lockvidio"]
 ],
 
 [
 ["text"=>"$username1","url"=>"https://telegram.me/$username2"],["text"=>"نام کاربری:","callback_data"=>"lockvidio"]
 ],
 [
 ["text"=>"$id_feed","callback_data"=>"lockvidio"],["text"=>"ایدی عددی","callback_data"=>"lockvidio"]
 ],
				
					],
					'resize_keyboard'=>true
			])
			]);
 }else{
        $admin1 = "".$infobot->result->total_count."";
 $photo = "".$infobot->result->photos[0][0]->file_id."";

	bot('sendphoto',[
					'chat_id'=>$chatid,
			      'photo'=>$photo,
		'caption'=>" اطلاعات شما در دکمه شیشه ای زیر نمایش داده میشود:",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
					'inline_keyboard'=>[

 [
 ["text"=>"$admin1","callback_data"=>"lockvidio"],["text"=>"تعداد عکس پروفایل","callback_data"=>"lockvidio"]
 ],
 [
 ["text"=>"$first","callback_data"=>"lockvidio"],["text"=>"نام شما:","callback_data"=>"lockvidio"]
 ],
 [
 ["text"=>"$username1","url"=>"https://telegram.me/$username2"],["text"=>"نام کاربری:","callback_data"=>"lockvidio"]
 ],
 [
 ["text"=>"$id_feed","callback_data"=>"lockvidio"],["text"=>"ایدی عددی","callback_data"=>"lockvidio"]
 ],
				
					],
					'resize_keyboard'=>true
			])
			]);
    }}
    
}
?>