<?php
 if ($data == "amar") {
	$Group = $update->callback_query->message->chat->id;
	$txtt = file_get_contents("admin/group.txt");
	$member_id = explode("\n",$txtt);
	$group = count($member_id);
	$txttt = file_get_contents("admin/supergroup.txt");
	$member_idd = explode("\n",$txttt);
	$supergroup = count($member_idd);
	$txtttt = file_get_contents("admin/user.txt");
	$member_iddd = explode("\n",$txtttt);
	$user = count($member_iddd);
	
	$groupa = "$group";
$supergroupa = "$supergroup";
	$allgroup = $groupa + $supergroupa;
	bot("editMessagetext",[
			"chat_id"=>$chat_id,
			"message_id"=>$message_id,
			"text"=>"
آمار گروه و کاربران به شرح زیر است :",
			"parse_mode"=>"html",
			"reply_markup"=>json_encode([
					"inline_keyboard"=>[
							[["text"=>"$group","callback_data"=>"lockvidio"],["text"=>"تعداد گروه","callback_data"=>"lockvidio"]],
	[["text"=>"$supergroup","callback_data"=>"lockvidio"],["text"=>"تعداد سوپرگروه","callback_data"=>"lockvidio"]],
	[["text"=>"$user","callback_data"=>"lockvidio"],["text"=>"تعداد اعضا","callback_data"=>"lockvidio"]],
	[["text"=>"$allgroup","callback_data"=>"lockvidio"],["text"=>"تمام گروه","callback_data"=>"lockvidio"]],
		[["text"=>"برگشت","callback_data"=>"backsettingshome"]],

			],
					"resize_keyboard"=>true
			])
	]);
}

  elseif ($data == "lockother") {
     $Group = $update->callback_query->message->chat->id;
    	$lockvidio = file_get_contents("Group/b".$Group."/lockvidio.txt");
	$lockaudio = file_get_contents("Group/b".$Group."/lockaudio.txt");
	$lockmusic = file_get_contents("Group/b".$Group."/lockmusic.txt");
	$lockphoto = file_get_contents("Group/b".$Group."/lockphoto.txt");
	$locklink = file_get_contents("Group/b".$Group."/locklink.txt");
	$lockusername = file_get_contents("Group/b".$Group."/lockusername.txt");
	$lockedite = file_get_contents("Group/b".$Group."/lockedite.txt");
	$locksimcart = file_get_contents("Group/b".$Group."/locksimcart.txt");
		$lockcude = file_get_contents("Group/b".$Group."/lockcude.txt");
	$lockloc = file_get_contents("Group/b".$Group."/lockloc.txt");
	$locktel = file_get_contents("Group/b".$Group."/locktel.txt");
	$locksticker = file_get_contents("Group/b".$Group."/locksticker.txt");
	$lockfor = file_get_contents("Group/b".$Group."/lockfor.txt");
	$lockgame = file_get_contents("Group/b".$Group."/lockgame.txt");
	$lockgroup = file_get_contents("Group/b".$Group."/lockgroup.txt");
$lockfarsi_value = file_get_contents("Group/b".$Group."/lockfarsi_value.txt");
		$lockfarsi = file_get_contents("Group/b".$Group."/lockfarsi.txt");
		$lockvidio_value = file_get_contents("Group/b".$Group."/lockvidio_value.txt");
		$locken_value = file_get_contents("Group/b".$Group."/locken_value.txt");
		$locken = file_get_contents("Group/b".$Group."/locken.txt");
				$silenton = file_get_contents("Group/b".$Group."/silenton.txt");

		bot("editMessagetext",[
			 "chat_id"=>$chat_id,
 			"message_id"=>$message_id,
				"text"=>"
تنظیمات گروه به شرح زیر است:",
				"parse_mode"=>"html",
				"reply_markup"=>json_encode([
						"inline_keyboard"=>[
	[["text"=>"وضعیت:","callback_data"=>"lockvidio"],["text"=>"قفل:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockgame","callback_data"=>"lockvidio"],["text"=>"بازی:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockfor","callback_data"=>"lockvidio"],["text"=>"فوروارد:","callback_data"=>"lockvidio"]],
	[["text"=>"$locksticker","callback_data"=>"lockvidio"],["text"=>"استیکر:","callback_data"=>"lockvidio"]],
	[["text"=>"$locktel","callback_data"=>"lockvidio"],["text"=>"مخاطب:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockloc","callback_data"=>"lockvidio"],["text"=>"مکان:","callback_data"=>"lockvidio"]],
	[["text"=>"$locksimcart ","callback_data"=>"lockvidio"],["text"=>"اپوراتور:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockedite ","callback_data"=>"lockvidio"],["text"=>"ویرایش:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockusername","callback_data"=>"lockvidio"],["text"=>"یوزرنیم:","callback_data"=>"lockvidio"]],
	[["text"=>"$locklink","callback_data"=>"lockvidio"],["text"=>"لینک:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockgroup","callback_data"=>"lockvidio"],["text"=>"گروه:","callback_data"=>"lockvidio"]],
	[["text"=>"$lockfarsi","callback_data"=>"lockvidio"],["text"=>"فارسی::","callback_data"=>"lockvidio"]],
	[["text"=>"$locken","callback_data"=>"lockvidio"],["text"=>"انگلیسی::","callback_data"=>"lockvidio"]],
		[["text"=>"$silenton","callback_data"=>"lockvidio"],["text"=>"ساکت:","callback_data"=>"lockvidio"]]
,
	[["text"=>"برگشت","callback_data"=>"backsettings"]],

						],
						"resize_keyboard"=>true
				])
		]);
	}
	 elseif ($data == "lockelan") {
 $Group = $update->callback_query->message->chat->id;
 	$welcome = file_get_contents("Group/b".$Group."/welcome.txt");
 	$leftgorup = file_get_contents("Group/b".$Group."/leftgroup.txt");
$newtitle = file_get_contents("Group/b".$Group."/newtitle.txt");
$newphoto = file_get_contents("Group/b".$Group."/newphoto.txt");

 	bot("editMessagetext",[
 			"chat_id"=>$chat_id,
 			"message_id"=>$message_id,
 			"text"=>"
تنظیمات گروه به شرح زیر است:",
 			"parse_mode"=>"html",
 			"reply_markup"=>json_encode([
 					"inline_keyboard"=>[
 							[["text"=>"وضعیت:","callback_data"=>"lockvidio"],["text"=>"اعلان:","callback_data"=>"lockvidio"]],
 					[["text"=>"$welcome","callback_data"=>"lockvidio"],["text"=>"خوش آمدگویی:","callback_data"=>"lockvidio"]],
 					 					[["text"=>"$newtitle","callback_data"=>"lockvidio"],["text"=>"تغییر عنوان:","callback_data"=>"lockvidio"]],
 					 					[["text"=>"$leftgorup","callback_data"=>"lockvidio"],["text"=>"خروج کاربر:","callback_data"=>"lockvidio"]],
 					 					[["text"=>"$newphoto","callback_data"=>"lockvidio"],["text"=>" تغییر تصویر:","callback_data"=>"lockvidio"]],

 				 					[["text"=>"برگشت","callback_data"=>"backsettings"]],
 
 			],
 					"resize_keyboard"=>true
 			])
 	]);
 }
elseif ($data == "lockreane") {
     $Group = $update->callback_query->message->chat->id;
    	$lockvidio = file_get_contents("Group/b".$Group."/lockvidio.txt");
	$lockaudio = file_get_contents("Group/b".$Group."/lockaudio.txt");
	$lockmusic = file_get_contents("Group/b".$Group."/lockmusic.txt");
	$lockphoto = file_get_contents("Group/b".$Group."/lockphoto.txt");
	$locklink = file_get_contents("Group/b".$Group."/locklink.txt");
	$lockusername = file_get_contents("Group/b".$Group."/lockusername.txt");
	$lockedite = file_get_contents("Group/b".$Group."/lockedite.txt");
	$locksimcart = file_get_contents("Group/b".$Group."/locksimcart.txt");
		$lockcude = file_get_contents("Group/b".$Group."/lockcude.txt");
	$lockloc = file_get_contents("Group/b".$Group."/lockloc.txt");
	$locktel = file_get_contents("Group/b".$Group."/locktel.txt");
	$locksticker = file_get_contents("Group/b".$Group."/locksticker.txt");
	$lockfor = file_get_contents("Group/b".$Group."/lockfor.txt");
	$lockgame = file_get_contents("Group/b".$Group."/lockgame.txt");
		$lockvidio_value = file_get_contents("Group/b".$Group."/lockvidio_value.txt");
		bot("editMessagetext",[
			 "chat_id"=>$chat_id,
 			"message_id"=>$message_id,
				"text"=>"
تنظیمات گروه به شرح زیر است:",
				"parse_mode"=>"html",
				"reply_markup"=>json_encode([
						"inline_keyboard"=>[
			[["text"=>"وضعیت:","callback_data"=>"lockvidio"],["text"=>"قفل:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockaudio","callback_data"=>"lockvidio"],["text"=>"صدا:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockvidio","callback_data"=>"lockvidio"],["text"=>"ویدیو:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockmusic","callback_data"=>"lockvidio"],["text"=>"موزیک:","callback_data"=>"lockvidio"]],
					[["text"=>"$lockphoto","callback_data"=>"lockvidio"],["text"=>"تصویر:","callback_data"=>"lockvidio"]],	
								[["text"=>"برگشت","callback_data"=>"backsettings"]],

						],
						"resize_keyboard"=>true
				])
		]);
	}
	
   elseif ($data == "backsettings") {
  	bot('editMessagetext',[
  			'chat_id'=>$chat_id,
 			'message_id'=>$message_id,
  				'text'=>"
تنظیمات گروه به شرح زیر است:",
  		'parse_mode'=>'html',
'reply_markup'=>json_encode([
		'inline_keyboard'=>[
[["text"=>"🖥 قفل رسانه ","callback_data"=>'lockreane']],
[["text"=>"🔕 اعلان ها ","callback_data"=>'lockelan']],
[["text"=>"🔒 دیگر قفل ها","callback_data"=>'lockother']],
[["text"=>" ادمین ها ","callback_data"=>'adminlist']],

		     	
            	],
            	'resize_keyboard'=>true
       		])
			]);
  	
  }
   elseif ($data == "backsettingshome") {
  	bot('editMessagetext',[
  			'chat_id'=>$chat_id,
 			'message_id'=>$message_id,
  				'text'=>"
به صفحه اصلی بازگشتید:",
  		'parse_mode'=>'html',
'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'راهنما','callback_data'=>'help'],['text'=>'اضافه کردن به گروه','url'=>'https://t.me/Samyar88975bot?startgroup=new']],
				[["text"=>"درباره ما","callback_data"=>"about"],["text"=>"آمار گروه","callback_data"=>"amar"]],
											[["text"=>"کانال توسعه دهنده","url"=>"https://t.me/Samyar001"]],

		     	
            	],
            	'resize_keyboard'=>true
       		])
			]);
  	
  }
?>