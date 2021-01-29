<?php
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
ob_start();
define('INET_HACK','1691306214:AAF85fqtv8M8aRNNhPv5fKA-9nO8uyHoTPE');
$mybot=" @Free_Fire_Uzbgroup_bot";
$admin = "1171894731"; 


   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".INET_HACK."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$groupid = $message->chat->id;
$channel_id = $message->chat->id;
$text = $message->text;
$tx = $message->text;
$type = $message->chat->type;
$name = $message->from->first_name;
$bio = $message->from->about;
$user = $message->from->username;
$surname = $message->from->last_name;
$uid = $message->from->id;
$nid = $message->from->id;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$title = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$soat = date("H:i:s",strtotime("2 hour"));
$sana = date("dmY",strtotime("2 hour"));
$kun = date("d",strtotime("2 hour"));
$reply = $message->reply_to_message->text;
$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$nazad="🔙Orqaga qaytish";
$yil = date("Y",strtotime("2 hour"));
$mid = $message->message_id;
$sreply = $message->reply_to_message->text;  
$sreplyd = $message->reply_to_message->document;
    $ent = $message->entities[0]->type;
    $reply_menu = json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);

$back = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"$nazad"],],
]
]);
$menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔔 ANKETANI TOʻLDIRISH 🔔"],],
[['text'=>"◀️ BOTIMIZGA BAHO BERING ▶️"],],
[['text'=>"📤ADMINGA XABAR QOLDIRISH📥"],],
[['text'=>"🤖BOT YASAB BERISH XIZMATI🤖"],],
[['text'=>"📚SIZNING SHAXSIY KABINETINGIZ📚"],],
]
]);
$menu1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➡️ADMINGA XABAR KIRITISH⬅️"],],
[['text'=>"➡️TAKLIF KIRITISH⬅️"],['text'=>"➡️BOTGA SHIKOYAT⬅️"],],
]
]);
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$mtext = $message->text;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");

$fname = $message->from->first_name;
$user = $message->from->username;
$otabek = $message->contact;
$datesticer = $message->siticker;
$nomer = $message->contact->phone_number;

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$soat = date('H:i', strtotime('0 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
//Yangi odam id si
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");


    if (($new_chat_members != NUll)&&($is_bot!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
      $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
    ]);
    }else{
      $test = "";
       bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$test,
       'parse_mode'=>'html'
     ]);
   }
    }
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }
  
 


    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Guruhga faqat adminlar bot qo'shi mumkin.</b>",
      'parse_mode' => 'html'
  ]);
}
}
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$text = $message->text;
$status = $statjson['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$rtid = $update->message->reply_to_message->from->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$rt = $update->message->reply_to_message;
$super_silent = explode("n", $silent);
$re_name = $update->message->reply_to_message->from->first_name;
$mtext = $message->text;
$type = $message->chat->type;
$uid= $message->from->id;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$from_id = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");


$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$soat = date('H:i', strtotime('0 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;


$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$is_bot = $message->new_chat_member->is_bot;

$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward_from = $message->forward_from;
$voice = $message->voice;
$doc = $message->document;
$rasm = $message->photo;
$animation = $message->animation;
$music = $update->message->audio;
$contact = $message->contact;
 $location = $message->location;
$video_note = $message->video_note;
$is_animated = $message->is_animated;
$reply_to_message = $message->reply_to_message;
$game = $message->game;
$kirish = $message->kirish;

$photoset = $message->chat_photo_changed;
$titleset = $message->chat_title_changed;
$descset = $message->chat_description_changed;
$userset = $message->chat_username_changed;
$pinset = $message->pinned_message;

$new = $message->new_chat_member;
$left = $message->left_chat_member;

$cusername = $message->chat->username;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

$channel = $update->channel_post; 
$channel_text = $channel->text;
$channel_mid = $channel->message_id; 
$channel_id = $channel->chat->id; 
$channel_title = $channel->chat->title;
$channel_user = $channel->chat->username; 
$chanel_doc = $channel->document; 
$chanel_vid = $channel->video; 
$chanel_mus = $channel->audio; 
$chanel_voi = $channel->voice; 
$chanel_gif = $channel->animation; 
$chanel_fot = $channel->photo; 
$chanel_txt = $channel->text; 
$caption =$channel->caption;

$message_ch = $update->channel_post;
$message_ch_text = $message_ch->text;
$message_ch_photo = $message_ch->photo;


$message_ch_author = $message_ch->author_signature;
$message_ch_mid = $message_ch->message_id;
$message_ch_chid = $message_ch->chat->id;
$message_ch_user = $message_ch->chat->username;
$audio_ch = $message_ch->audio;

$soat = date("H:i", strtotime("0 hour"));
$sana = date('d.m.y',strtotime('0 hour'));

$texxx = $message_ch->caption;

$date = date('d-M Y',strtotime('2 hour'));

$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$kanallar = file_get_contents("stat/kanal.list");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");
mkdir("avto");
mkdir("avto/$cid");
mkdir("matn");
mkdir("kanall");
$avtoinfo = file_get_contents("avto/$cid/avtoinfo.txt");
$avtosoni = file_get_contents("avto/$cid/avtosoni.txt");

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$sana = date('d-M Y',strtotime('0 hour'));
$soat = date('H:i', strtotime('0 hour'));
$login0 = $message->chat->username;
if($login0 == null){
$logincha = "Kiritlmagan!";}else{
$logincha = "@".$login0;	
}

$kun3 = date('N',strtotime('0 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('0 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('0 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('0 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('0 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('0 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruhimizga xush kelibsiz!
😊Kuningiz xayrli va Barokatli o'tsin!
📆Bugun: $sana-yil
⏰Soat: $soat
📅Hafta kuni: $hafta1
🛡Guruhimiz: $logincha
👥Guruh a'zolari: $count
",
]);
}
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/

if(isset($text1)){
$get = file_get_contents("sozlama/$chat_id");
if($get){}else{
$baza = [
"salom"=>"true",
"chats"=>"true",
"sticker"=>"true",
"link"=>"true",
"audio"=>"true",
"video"=>"true",
"doc"=>"true",
"rasm"=>"true",
"forward"=>"true",
"gif"=>"true",
"golos"=>"true",
"contact"=>" true",
"user"=>" true",
"hashtag"=>" true",
"location"=>"true",
"video_note"=>"true",
"is_animated"=>"true",
"reply_to_message"=>"true",
"game"=>"true",
"kirish"=>"true",
"komand"=>"true",
];
file_put_contents("sozlama/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$Ssalom = $baza["salom"];
$Schats = $baza["chats"];
$Ssticker = $baza["sticker"];
$Slink = $baza["link"];
$Saudio = $baza["audio"];
$Svideo = $baza["video"];
$Sdoc = $baza["doc"];
$Sforward_from = $baza["forward_from"];
$Sgif = $baza["gif"];
$Srasm = $baza["rasm"];
$Sgolos = $baza["golos"];
$Scontact = $baza["contact"];
$Suser = $baza["user"];
$Shashtag = $baza["hashtag"];
$Slocation = $baza["location"];
$Svideo_note = $baza["video_note"];
$Sis_animated = $baza["is_animated"];
$Sreply_to_message = $baza["reply_to_message"];
$Sgame = $baza["game"];
$Skirish = $baza["kirish"];
$Skomand = $baza["komand"];


if(isset($update) and $Ssalom == "true"){

if (($new_chat_members != NUll)&&($is_bot!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
  $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
  'chat_id' => $chat_id,
  'user_id' => $new_chat_members,
  'until_date'=> $vaqti,
]);
}else{
  $test = "<b>Assalomu alaykum</b> <a href='tg://user?id=$new_chat_members'>$ism</a>, <b>$title</b> <b>guruhimizga xush kelibsiz.</b>
Mumkin bo'lsa odam qoshib bering.";
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$test,
   'parse_mode'=>'html'
 ]);
   }
}

}

if(isset($update) and $Schats == "true"){

if((stripos($mtext,"bot") !== false) or (stripos($mtext,"Bot")!==false) or (stripos($mtext,"boti")!==false) or (stripos($mtext,"Robot")!==false)){
  $name = $message->from->first_name;
  $input = array("O'zing bot🤪","Bot bolsam ham sandan kop foydam tegadi😜","👍","Ok.","Qaysi viloyatdansiz?", "Nima uchun","Ha","Bot emas robot😉");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Toshkent")!==false) or (stripos($mtext,"Andijon")!==false) or (stripos($mtext,"Fargona")!==false) or (stripos($mtext,"Farg'ona")!==false)  or  (stripos($mtext,"Namangan")!==false) or  (stripos($mtext,"Sirdaryo")!==false) or (stripos($mtext,"Jizzax")!==false) or (stripos($mtext,"Qashqadaryo")!==false) or (stripos($mtext,"Surxondaryo")!==false) or (stripos($mtext,"Buxoro")!==false) or (stripos($mtext,"Xorazim")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Qoraqalpoq")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"nanay")!==false) or (stripos($mtext,"Nanay")!==false) or (stripos($mtext,"Kattakorgon")!==false) or (stripos($mtext,"Chilonzor")!==false)){
$input = array("Qayeridan?","Zo'rku👍","Hmm,Chiroyli shahar","Yaxshi,lekin biz tomondan ancha uzoq ekan.","O‘zidanmi?", "Yoge,zorku.","Qayeridan.","Hm,u yerda chiroyli joylar ko‘p deb eshitganman.");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Hm") !== false) or (stripos($mtext,"Xm")!==false)){
  $name = $message->from->first_name;
  $input = array("Nega  hm deysiz gapiring","Hm","Nima Hm?","😂","Zerikdingizmi?","Negadur zerikdim", "Tinchlikmi?","Mbingiz kam qoldimi deyman 😁","Qayerliksiz?");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Tinchlikmi") !== false)){
  $name = $message->from->first_name;
  $input = array("Ha tinchlik","Nima edi?","O'zizdan so'rasak");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

 if($text1 == "salomlar" || $text1 == "Salom" || $text1 == "Xayrli tun" || $text1 == "Xayrli tun hamaga"){
       bot('sendvoice',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'voice'=>"http://telegram.me/MusikTv_Uz/62"
    ]);
  }

if((stripos($mtext,"Rostdanmi") !== false) or (stripos($mtext,"rostanmi")!==false) or (stripos($mtext,"rostmi")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha rost","Bilmadim","Ha","Men qayerdan bilay ","Yolg'ondan :)");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"O‘idan") !== false) or (stripos($mtext,"O'zidan")!==false) or (stripos($mtext,"o‘zidan")!==false) or (stripos($mtext,"Sentridan")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha yaxshi","Shahardanmisiz?","Zo'rku");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Samarqand")!==false)){
$input = array("Wow,men ham Samarqandlik","Hamshahar ekanmiz!","Men ham Samarqandlikman 😊","Qayeridan?","Bitta joydan ekanmiz");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Yoge")!==false) or (stripos($mtext,"rostanmi")!==false)  or (stripos($mtext,"rostdanmi")!==false)  or (stripos($mtext,"Yog'e")!==false)){
$input = array("Ha","Ha shunaqa","Hm shunday","Haye.","Ha rost");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

  if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"салом")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"Assalom-u alaykum,",
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("Assalom-u alaykum!","Salom $name, guruhimiz sizga yoqdimi?","Salom, ismingiz nima?","Assaalom-u alaykum","Привет, как дело?","Qaleysiz?","Sizga ham salom","Salom.", "Salom qaleysiz?","Va alaykum assalom, baxtli bo‘ling! 😊.","Yaxshimisiz $name, namuncha ko‘rinmay ketdingiz?", "Juda sersalom ekansiz!", "Assalom-u alaykum!", "Salom $name", "Iye keling,endi sizni eslab turgandik","Ana, yana bittasi keldi 😂","Salom meni tanidizmi?","Salom bergan kishini...Xudo o‘nglar ishini.","Namuncha salom berurasiz","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim. Tringlab hech qoymagan Telegramda chap qo‘lim!","Sizni ko‘radigan kun ham bor ekanu!","Salom, yaxshimisiz?","Qaleysiz?","Asssalom-u alaykum boy ota. Ishlar qaley?","Sava","Привет ","Hello $name, qaleysiz?","Salom, Nick daxshat-ku a?","Ehe keb qoling, anu gap nima bo'ldi?","Yuragizni sevgi muhabbat qoplagan vaqtda to‘g‘ri shu yerga kelevering, ok?","Garov  o‘ynaymizmi  kimnidur sevib qolgansiz?Agar adashayotgan bo‘lsam, garov haqida unuting 😆","Bolla, qizla bitta fikr bor!","Keling, sizni ham ko‘radigan  kun  bor ekan-ku a?");
  $rand=rand(0,32);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}
  }

  if($text1 == "Ok" or  $text1 == "ok" or $text1 == "OK" or $text1 == "oK"){
  $input = array("Ok!!!","Nok🍐","Sok","👌","Tok?","😏","?","👍","Ok");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimni") !== false){
  $input  = array("Bilmasam?","Natashani jiyani","Bugun havo zo‘r-ku a?","Men bilmayman");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if(stripos($mtext,"Qanaqa") !== false){
  $input  = array("Man qayerdan bilay?","Hech qanaqa 😆","Shunaqa","Bilmasam");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"Qaleys") !== false) or (stripos($mtext,"Qalaysan")!==false)  or (stripos($mtext,"Qaliysan")!==false) or (stripos($mtext,"Qaneysan")!==false)  or  (stripos($mtext,"Qanneysan")!==false)){
  $input = array("Cho‘tki 😁","Zo‘r.", "Zo‘r, o‘zingizchi?","Kechagidan  yaxshi 😁","Yaxshi, so‘raganingiz uchun rahmat!", "Zo‘r", "Zo‘r, o‘zingizchi?", "Chidasa bo‘ladi 👌");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Vunder") !== false) or (stripos($mtext,"vunder") !== false) or (stripos($mtext,"vunderbot") !== false) or (stripos($mtext,"vunderbotim")!==false)){
  $input = array("Qaleysiz?","Har zamonda bir yozib turingda siz ham","Uydagilar uylan deb qoymayapti","Profilingizdagi rasm zo‘r 👍","Bugun hamma jim negadir?","Shu ismimni deb hamma meni rus deb o'ylaydi😜","Admin ko'rinmaydimi?","Mbingiz kam qolibdi 😂", "Men shu yerdaman.", "Ho‘v?", "Shunaqa chaqirishingiz juda ham yoqadi-da ☺️", "Nima?", "Menda ishingiz bormi?", "Hozir kimdir meni esladimi?","Tinchgina ovqatlanishga ham qoyishmaydi-de bular","Qulog‘im  sizda!","Labbay?!","Eshitaman?","Hozir kelaman mb kam qolibdi","Salom, biror nima kerakmi?","Shu ismni qayerdadir eshitganman-da 🤔","Ana kapitan");
  $rand=rand(0,14);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
if((stripos($mtext,"Rahmat")!==false) or (stripos($mtext,"Raxmat")!== false)){
  $input = array("Arzimaydi 😊","Arziysiz","😊","Rahmatga hojat yo‘q!");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimman") !== false){
  $name = $message->from->first_name;
  $input = array("$name bo‘lsangiz kerak yana bilmadim.","O‘zingiz  bilmasangiz, men qayerdan bilaman?!","Betakrorsiz","Ajinagul...degan sinfdoshim esimga tushib ketdi 😢","N1","Kapitan","Ponchik","Kunfu panda","Kim san, Shu serialni kim  ko‘rgan?","Kim bo‘lsangiz  ham avvalo inson bo’ling!","Brucleeni quritilgani 😂","Boyvacha","Eng zo‘risiz","Men qayerdan bilay");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimsan")!== false){
  $name = $message->from->first_name;
  $input = array("N1","Shu savolni eshitsam negadir nickimga hech nima yozilmagan ekan degan hayolga boraman!?","Kim deb o‘ylaysiz?","Traktorchi Abdusattorni qo‘shinisi Sobirni amakivachchasiga boja bo‘lgan G‘anisher degan aka bor-ku, o‘sha mashinasiga tonirofka qildiribdi 😜","Kapitan Telegram","Mashaman","Sirliman 🎩","O‘ziz kimsiz?","Har doim shu savolni beraverib charchamadingizmi?","Tinchlikmi kimligim bilan qiziqib qolibsiz?!","Menmi?","Nima edi 😡...Vux qo‘rqib ketdingiz-a?","Leonardo Dekapryo,","Mishani xizmatdosh jo'rasi!");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(mb_stripos($text,"golos") !== false){ 
$input = array("qanaqa golos","Bemalol Golos Kerakmi","Tanishmaymizmi","Ismim FF siznikichi","ismiz nima");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=uzb&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}

if(mb_stripos($text,"ovoz") !== false){ 
$input = array("qanaqa golos","Bemalol Golos Kerakmi","Tanishmaymizmi","Ismim Erkamoy siznikichi","ismiz nima");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=uzb&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}

if(mb_stripos($text,"xursandman") !== false){ 
$input = array("menam juda xursandman","albatta xursand boling","juda yaxshi","menam","shunaqa deng");
  $rand=rand(0,4);
  $soz="$input[$rand]";
$vo = file_get_contents('http://tts.baidu.com/text2audio?lan=en&ie=UTF-8&text='.urlencode($soz));
file_put_contents('vo.ogg',$vo);
bot('SendVoice',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'voice'=>new CURLFile('vo.ogg'),
]);
}

}

if($text1 == "/sozlama" or $text == "/sozlama@Free_Fire_Uzbgroup_bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️ TAQIQLANGAN";
}else{
$salom = "✅ RUXSAT BERILGAN";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️ TAQIQLANGAN";
}else{
$chats = "✅ RUXSAT BERILGAN";
}
$sticker = $baza["sticker"];
if($sticker == "false"){
$sticker = "☑️ TAQIQLANGAN";
}else{
$sticker = "✅ RUXSAT BERILGAN";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️ TAQIQLANGAN";
}else{
$link = "✅ RUXSAT BERILGAN";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️ TAQIQLANGAN";
}else{
$audio = "✅ RUXSAT BERILGAN";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑️ TAQIQLANGAN";
}else{
$video = "✅ RUXSAT BERILGAN";
}
$doc = $baza["doc"];
if($doc == "false"){
$doc = "☑️ TAQIQLANGAN";
}else{
$doc = "✅ RUXSAT BERILGAN";
}
$forward_from = $baza["forward_from"];
if($forward_from == "false"){
$forward_from  = "☑️ TAQIQLANGAN";
}else{
$forward_from = "✅ RUXSAT BERILGAN";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑️ TAQIQLANGAN";
}else{
$gif = "✅ RUXSAT BERILGAN";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑️ TAQIQLANGAN";
}else{
$rasm = "✅ RUXSAT BERILGAN";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑️ TAQIQLANGAN";
}else{
$golos = "✅ RUXSAT BERILGAN";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑️ TAQIQLANGAN";
}else{
$contact = "✅ RUXSAT BERILGAN";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑️ TAQIQLANGAN";
}else{
$user = "✅ RUXSAT BERILGAN";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑️ TAQIQLANGAN";
}else{
$hashtag = "✅ RUXSAT BERILGAN";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑️ TAQIQLANGAN";
}else{
$location = "✅ RUXSAT BERILGAN";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑️ TAQIQLANGAN";
}else{
$video_note = "✅ RUXSAT BERILGAN";
}
$is_animated = $baza["is_animated"];
if($is_animated == "false"){
$is_animated = "☑️ TAQIQLANGAN";
}else{
$is_animated = "✅ RUXSAT BERILGAN";
}
$reply_to_message = $baza["reply_to_message"];
if($reply_to_message == "false"){
$reply_to_message = "☑️ TAQIQLANGAN";
}else{
$reply_to_message = "✅ RUXSAT BERILGAN";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑️ TAQIQLANGAN";
}else{
$game = "✅ RUXSAT BERILGAN";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️ TAQIQLANGAN";
}else{
$kirish = "✅ RUXSAT BERILGAN";
}
$komand = $baza["komand"];
if($komand == "false"){
$komand = "☑️ TAQIQLANGAN";
}else{
$komand = "✅ RUXSAT BERILGAN";
}
file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Gurux sozlamalarini bot lichkasiga yubordim.
Guruxni sozlash uchun @Free_Fire_Uzbgroup_bot ga kiring.</b>",
'parse_mode'=>'html',
]);

sleep('1');
bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"<b>$title guruxi sozlamalari.</b>

Xurmatli admin guruxingizni sozlash uchun gurux sozlamalari.",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"salom","text"=>"👋 Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"chats","text"=>"✏ Guruhda Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"sticker","text"=>"🎭Sticker"],["callback_data"=>"M()sticker","text"=>"$sticker"],],
[["callback_data"=>"doc","text"=>"📁Fayl"],["callback_data"=>"M()doc","text"=>"$doc"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward_from","text"=>"➡ Forward"],["callback_data"=>"M()forward_from","text"=>"$forward_from"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
[["callback_data"=>"is_animated","text"=>"🎭Animation sticker"],["callback_data"=>"M()is_animated","text"=>"$is_animated"],],
[["callback_data"=>"reply_to_message","text"=>"↩Reply"],["callback_data"=>"M()reply_to_message","text"=>"$reply_to_message"],],
[["callback_data"=>"game","text"=>"🖲Game"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"kirish","text"=>"🗑Kirdi chiqdilarni tozalash"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"komand","text"=>"🔊 Kamanda berish"],["callback_data"=>"M()komand","text"=>"$komand"],],
]
]),
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑️ TAQIQLANGAN";
}else{
$salom = "✅ RUXSAT BERILGAN";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️ TAQIQLANGAN";
}else{
$chats = "✅ RUXSAT BERILGAN";
}
$sticker = $baza["sticker"];
if($sticker == "false"){
$sticker = "☑️ TAQIQLANGAN";
}else{
$sticker = "✅ RUXSAT BERILGAN";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑️ TAQIQLANGAN";
}else{
$link = "✅ RUXSAT BERILGAN";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️ TAQIQLANGAN";
}else{
$audio = "✅ RUXSAT BERILGAN";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑️ TAQIQLANGAN";
}else{
$video = "✅ RUXSAT BERILGAN";
}
$doc = $baza["doc"];
if($doc == "false"){
$doc  = "☑️ TAQIQLANGAN";
}else{
$doc = "✅ RUXSAT BERILGAN";
}
$forward_from = $baza["forward_from"];
if($forward_from == "false"){
$forward_from  = "☑️ TAQIQLANGAN";
}else{
$forward_from = "✅ RUXSAT BERILGAN";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑️ TAQIQLANGAN";
}else{
$gif = "✅ RUXSAT BERILGAN";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑️ TAQIQLANGAN";
}else{
$rasm = "✅ RUXSAT BERILGAN";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑️ TAQIQLANGAN";
}else{
$golos = "✅ RUXSAT BERILGAN";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑️ TAQIQLANGAN";
}else{
$contact = "✅ RUXSAT BERILGAN";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑️ TAQIQLANGAN";
}else{
$user = "✅ RUXSAT BERILGAN";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑️ TAQIQLANGAN";
}else{
$hashtag = "✅ RUXSAT BERILGAN";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑️ TAQIQLANGAN";
}else{
$location = "✅ RUXSAT BERILGAN";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑️ TAQIQLANGAN";
}else{
$video_note = "✅ RUXSAT BERILGAN";
}
$is_animated = $baza["is_animated"];
if($is_animated == "false"){
$is_animated = "☑️ TAQIQLANGAN";
}else{
$is_animated = "✅ RUXSAT BERILGAN";
}
$reply_to_message = $baza["reply_to_message"];
if($reply_to_message == "false"){
$reply_to_message = "☑️ TAQIQLANGAN";
}else{
$reply_to_message = "✅ RUXSAT BERILGAN";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑️ TAQIQLANGAN";
}else{
$game = "✅ RUXSAT BERILGAN";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑️ TAQIQLANGAN";
}else{
$kirish = "✅ RUXSAT BERILGAN";
}
$komand = $baza["komand"];
if($komand == "false"){
$komand = "☑️ TAQIQLANGAN";
}else{
$komand = "✅ RUXSAT BERILGAN";
}
bot('editMessageText', [
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"<b>$title guruxi sozlamalari.</b>

Xurmatli admin guruxingizni sozlash uchun gurux sozlamalari.",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"salom","text"=>"👋 Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"chats","text"=>"✏ Guruhda Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"sticker","text"=>"🎭Sticker"],["callback_data"=>"M()sticker","text"=>"$sticker"],],
[["callback_data"=>"doc","text"=>"📁Fayl"],["callback_data"=>"M()doc","text"=>"$doc"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward_from","text"=>"➡ Forward"],["callback_data"=>"M()forward_from","text"=>"$forward_from"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
[["callback_data"=>"is_animated","text"=>"🎭Animation sticker"],["callback_data"=>"M()is_animated","text"=>"$is_animated"],],
[["callback_data"=>"reply_to_message","text"=>"↩Reply"],["callback_data"=>"M()reply_to_message","text"=>"$reply_to_message"],],
[["callback_data"=>"game","text"=>"🖲Game"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"kirish","text"=>"🗑Kirdi chiqdilarni tozalash"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"komand","text"=>"🔊 Kamanda berish"],["callback_data"=>"M()komand","text"=>"$komand"],],
]
]),
]);
}
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
 if(isset($update) and $Sgif == "false"){
if(isset($message->animation)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Scontact == "false"){
if(isset($message->contact)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Srasm == "false"){
if(isset($message->photo)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Ssticker == "false"){
if(isset($message->sticker)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
if(isset($update) and $Svideo == "false"){
if(isset($message->video)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Saudio == "false"){
if(isset($message->audio)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sdoc == "false"){
if(isset($message->document)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sforward_from == "false"){
if(isset($message->forward_from) or isset($message->forward_from_chat)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sgolos == "false"){
if(isset($message->voice)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}


if(isset($update) and $Slink == "false"){
if((mb_stripos($mtext,"http") !==false) or (stripos($capt,"http://")!==false) or (stripos($capt,"bot?start=")!==false) or (stripos($mtext,"bot?start=")!==false) or (stripos($mtext,"https://")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Suser == "false"){
if((mb_stripos($mtext,"@") !==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($mtext,"@")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Shashtag == "false"){
if((mb_stripos($mtext,"#") !==false) or (stripos($capt,"#")!==false) or (stripos($capt,"#")!==false) or (stripos($mtext,"#")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
if(isset($update) and $Slocation == "false"){
if(isset($message->location)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}
/*
Ushbu kod @VunderBot kodi 100% ishlidi ushbu kodni @iNet_Hack yozdi.
manba bilan olilar. kod @iNet_Hack ga tegishli
kanalimizga azo boling kanalimizda bundan ham yaxshi kodlar bor @iNet_Coders
*/
if(isset($update) and $Svideo_note == "false"){
if(isset($message->video_note)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sis_animated == "false"){
if(isset($message->is_animated)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sreply_to_message == "false"){
if(isset($message->reply_to_message)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sgame == "false"){
if(isset($message->game)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}
if(stripos($mtext,"/soat") !== false){
		$soat = date('H:i', strtotime('2 hour'));
  $text = "⏰ Hozir soat: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($mtext,"/sana") !== false){
        $bugun = date('d-M Y',strtotime('5 hour'));
  $text = "📆 Bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "*▶️Sizning id kodingiz:* $fadmin";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "*▶️Guruhning id kodi:* $chat_id";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}
if($text1 == "/ro" or $text1 == "Ro" or $text1 == "RO" or $text1 == "rO"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+120 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> Siz <b>Read - Only</b> rejimiga tushirildingiz.",
      'parse_mode' => 'html'
  ]);
}
}

    if($text1 == "/Kick"  or  $text1 == "kick"  or $text1 == "/kick"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>chiqarib</b> yuborildi.",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 =="/ban" or $text1 == "Xayr"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldingiz.",
        'parse_mode'=>'html'
    ]);
  }
  
 if($text1 == "/admin" or $text1 == "addpm"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
 
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Siz endi guruh <b>admini</b> bo'ldingiz.",
    'parse_mode'=>'html'
  ]);
}
}

   if($text1 == "/deladmin" or $text1 == "delpm"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizni guruhda <b>adminlildan</b> chiqarishdi.",
    'parse_mode'=>'html'
  ]);
}
}

  if($text1 == "/unro" or $text1 == "UNRO" or $text1 == "unro"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizdan cheklov olindi, guruhda <b>yozishingiz mumkin.</b>",
    'parse_mode'=>'html'
  ]);
}
}

if ($text1=='/del'&&$fadmin==$admin) {
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

if($text1 == "/pin" or $text1 == "Pin" or $text1 == "PIn" or $text1 == "PIN" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}

if($text1=="/leave"&&$fadmin==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Ho‘p xo‘jayin, guruhni tark etaman.</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}

if((stripos($mtext,"ping")!==false) and $fadmin == $admin){
      $sx=explode("\n",$text1);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"pong",
       ]);
  }

 if($text1 == "ban" or $text1 == "Ban" or $text1== "/Ban" or  $text1 == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);

    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldi.",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "Unban"  or  $text1 == "/unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ban</b>dan olindi.",
        'parse_mode'=>'html'
    ]);
}
}

if($text1 == "warn" or $text1 == "Warn" or $text1 == "/warn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
 
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni: <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq bo‘ldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi.</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+120 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");

  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

  if($text1 == "unwarn" or $text1 == "Unwarn" or $text1 == "/unwarn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}
if(mb_stripos($text1,"/rasm") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://yandex.ru/images/search?text=$ex[1]",
]);
}  
if($text1 == "/start" or $text1 == "/start@Free_Fire_Uzbgroup_bot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing.</b>",
'parse_mode' => 'html'
]);
  bot('sendMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('sendMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
        'text'=>"*Assalomu alaykum botdan toliq foydalanish uchun ro'yxatdan o'tish tugmasini bosing*", 
        'parse_mode'=>"markdown", 
        'reply_markup'=>json_encode( 
['resize_keyboard'=>true, 
'keyboard' => [ 
[["text"=>"◀️RO'YXATDAN O'TISH▶️",'request_contact' =>true],], 
]
]),
]);
}
}
if($otabek){
bot('sendmessage',[
    'chat_id'=>"$admin",
    'text'=>"🔔BOTIMIZDA YANGI AZO🔔
➖➖➖➖➖➖➖➖➖
▶️ ISMI: $fname
▶️ USERI: @$user
▶️ ID KODI: $uid
▶️ NOMERI: [+]$nomer
➖➖➖➖➖➖➖➖➖
",
    'parse_mode'=>"markdown"
        ]);
bot("sendmessage",[
    'chat_id'=>$cid,
    'text'=>"👏Tabriklaymiz ro'yxatdan omadli o'tdingiz.
Endi anketani to'ldirish tugmasini bosing.",
    'reply_markup'=>json_encode(
[
'resize_keyboard'=>true,
'selective'=>true,
'one_time_keyboard'=>true,
'keyboard' => [
[['text'=>"🔔 ANKETANI TOʻLDIRISH 🔔"],],
[['text'=>"◀️ BOTIMIZGA BAHO BERING ▶️"],],
[['text'=>"📤ADMINGA XABAR QOLDIRISH📥"],],
[['text'=>"🤖BOT YASAB BERISH XIZMATI🤖"],],
[['text'=>"📚SIZNING SHAXSIY KABINETINGIZ📚"],],
]
]),
]);
}

if($text1 == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}


if($text1 == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if($data=="stat1"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('0 hour'));
$bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "┌ @Free_Fire_Uzbgroup_bot NING YANGI STATISTIKASI. 
├▶
├▶ <b>A'ZOLAR: $us</b>
├▶ <b>GURUHLAR: $gr</b>
├▶ <b>BARCHASI: $obsh</b>
├▶
└▶ <b>$bugun $soat</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔄YANGILASH','callback_data' => "stat2"],['text'=>'➕GURUH QOSHISH','url'=>'telegram.me/Free_Fire_Uzbgroup_bot?startgroup=new']],
[['text'=>'🔙Orqaga qaytish','callback_data' => "orqa"]],
]
]),
]);
}
if($data=="stat2"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('0 hour'));
$bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "┌  @Free_Fire_Uzbgroup_bot NING YANGI STATISTIKASI. 
├▶
├▶ <b>A'ZOLAR: $us</b>
├▶ <b>GURUHLAR: $gr</b>
├▶ <b>BARCHASI: $obsh</b>
├▶
└▶ <b>$bugun $soat</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔄YANGILASH','callback_data' => "stat1"],['text'=>'➕GURUH QOSHISH','url'=>'telegram.me/Free_Fire_Uzbgroup_bot?startgroup=new']],
[['text'=>'🔙Orqaga qaytish','callback_data' => "orqa"]],
]
]),
]);
}
if($text1 == "🔔 ANKETANI TOʻLDIRISH 🔔" or $text1 == "/start@Free_Fire_Uzbgroup_bot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing.</b>",
'parse_mode' => 'html'
]);
  bot('sendMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('sendMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>KIM EKANINGIZNI KOʻRSATING ♂️♀️</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'??‍♂ ODAM 🙍‍♀','callback_data' => "iNet_Coders"],['text'=>'🤖 ROBOT 🤖','callback_data' => "robot"]]
]   
]),
]);
}
}
if($data=="robot"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🤖<b>Kechirasiz biz robotlarga xizmat ko'rsatmaymiz.</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/@Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa1"]],
]
]),
]);
}
if($data=="orqa1"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>KIM EKANINGIZNI KOʻRSATING ♂️♀️</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
    [['text'=>'🙎‍♂ ODAM 🙍‍♀','callback_data' => "iNet_Coders"],['text'=>'🤖 ROBOT 🤖','callback_data' => "robot"]]
]
]),
]);
}
if($data=="iNet_Coders"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>🤖Assalomu alaykum  siz bosh sahifadasiz.

Bizni botimiz kanalingiz va guruhingizni boshqarishga yordam beradi.

Botni guruhingizga qo'shib to'liq admin qilib keyin /sozlama sozini guruhingizga yuborib guruhingizni sozlab olishingiz mumkin.

Menyini tanlang.</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔔 BUYRUQLARIM 🔔','callback_data' => "komanda"],['text'=>'🖥DASTURCHILAR🖥','callback_data' => "dast"]],
[['text'=>'💎BOT STATISTIKASI💎','callback_data' => "stat1"],['text'=>'🌇XOZIRGI AXBOROT🌇','callback_data' => "otabekuz"]],
[['text'=>'📒BOTIMIZ XAQIDAGI MALUMOTLAR📒','callback_data' => "botxaqida"]],
[['text'=>'↪️ ADMIN BILAN ALOQAGA CHIQISH ↩️','callback_data' => "aloqa"]],
[['text'=>'↪️ TELEGRAMNING TILLARI ↩️','callback_data' => "tillar"]],
[['text'=>'➕BOTNI GURUHGA QOSHISH','url'=>'telegram.me/@Free_Fire_Uzbgroup_bot?startgroup=new']],
]
]),
]);
}
if($data=="komanda"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>O'ZINGIZGA KERAKLI BO'LIMNI TANLANG.</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
 [['text'=>'▶️ GURUX BUYRUQLARI','callback_data' => "buyruq1"]],
 [['text'=>'▶️ SUPER BUYRUQLARI','callback_data' => "buyruq2"]],
[['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/@Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
}
if($data=="buyruq1"){
   $bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>/ro</b> - Guruh a‘zosini yozishni cheklaydi
<b>/unro</b> - Guruh a‘zosidan cheklovni oladi
<b>/kick</b> - Guruh a‘zosini guruhdan chiqaradi yuboradi
<b>/warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi
<b>/unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi
<b>/ban</b>  - Guruh a‘zosini guruhdan chiqaradi, boshqa qaytib kira olmaydi
<b>/unban</b> - Bandan oladi va guruh a'zosi guruhga qaytib kira oladi
<b>/pin</b> - Xabarni guruh piniga qadab qo'shadi
<b>/admin</b> - Guruh a‘zosini guruhga admin qiladi
<b>/deladmin</b> - Guruh a'zosini adminlikdan oladi
<b>/leave</b> - Botni guruhdan chiqarib yuboradi",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/@Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
}
if($data=="buyruq2"){
   $bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>/soat</b> - Hozirgi soatni ko'rsatadi
<b>/sana</b> - Bugungi kunni ko'rsatadi
<b>/id</b> - Sizni id kodingizni ko'rsatadi
<b>/gid</b> - Guruxning id kodini ko'rsatadi
<b>/rasm va bironta ism</b> - Liboy rasmni topib beradi
<b>/soni</b> - Guruhga nechta odam qo'shganini aytib beradi",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/@Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
}
if($data=="dast"){
   $bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>▶️BOTIMIZNING MA'MURLARI◀️

▶️BOT DASTURCHISI: @Shox_Xacker
▶️BOT YASASH XIZMATI: @Shox_Xacker</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/@Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
}
if($data=="otabekuz"){
   $bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>▶️XOZIRGI MA'LUMOTLAR◀️</b>

⏰<b>XOZIRGI SOAT: $soat
🏞BUGUNGI SANA: $bugun</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/@Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
}
if($data=="tillar"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Telegramingizni o'zingizga kerakli bo'lgan tilga o'tkazib oling*

 ➖➖➖➖➖➖|
[✅Узбекча](tg://setlanguage?lang=uzbekcyr)
➖➖➖➖➖➖|
[✅O`zbekcha](tg://setlanguage?lang=uz-beta)
➖➖➖➖➖➖|
[✅Русский](tg://setlanguage?lang=ru)
➖➖➖➖➖➖|
[✅English](tg://setlanguage?lang=en)
➖➖➖➖➖➖|
[✅so'ngi telegraph](https://play.google.com/store/apps/details?id=ir.ilmili.telegraph)
➖➖➖➖➖➖|
",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
    [['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
} 
if($data=="botxaqida"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Botimiz xaqidagi ma'lumotlar bolimiga xush kelibsiz.*

[✅ BOT XAQIDA MA'LUMOT](https://Hacker_Bey)

[✅ BOT YASASH XIZMATI](t.me/iNet_Hack)",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
    [['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/VunderBot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
} 
    if($tx=="◀️ BOTIMIZGA BAHO BERING ▶️"){
  bot('Sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>Adminni Baholang!</b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
                        [['text'=>'⭐']],
                        [['text'=>'⭐⭐']],
                        [['text'=>'⭐⭐⭐']],
                        [['text'=>'⭐⭐⭐⭐']],
                        [['text'=>'⭐⭐⭐⭐⭐']]
]
]), 
]);
}
if($tx == "⭐"){
  bot('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"<b>🤖BOTIMIZGA QO‘YGAN ⭐ BAXO UCHUN RAXMAT.</b>",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"◀️BOTIMIZNI BAXOLASHDI▶️

▶️ ISMI: $fname
▶️ USERI: @$user
▶️ BAXOSI: ⭐
▶️ HOZIR SOAT: $soat
▶️ BIZNING BOT: @$mybot",
]);
}
if($tx == "⭐⭐"){
  bot('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"<b>🤖BOTIMIZGA QO‘YGAN ⭐⭐ BAXO UCHUN RAXMAT.</b>",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"◀️BOTIMIZNI BAXOLASHDI▶️

▶️ ISMI: $fname
▶️ USERI: @$user
▶️ BAXOSI: ⭐⭐
▶️ HOZIR SOAT: $soat
▶️ BIZNING BOT: @$mybot",
]);
}
if($tx == "⭐⭐⭐"){
  bot('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"<b>🤖BOTIMIZGA QO‘YGAN ⭐⭐⭐ BAXO UCHUN RAXMAT.</b>",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"◀️BOTIMIZNI BAXOLASHDI▶️

▶️ ISMI: $fname
▶️ USERI: @$user
▶️ BAXOSI: ⭐⭐⭐
▶️ HOZIR SOAT: $soat
▶️ BIZNING BOT: @$mybot",
]);
}
if($tx == "⭐⭐⭐⭐"){
  bot('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"<b>🤖BOTIMIZGA QO‘YGAN ⭐⭐⭐⭐ BAXO UCHUN RAXMAT.</b>",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"◀️BOTIMIZNI BAXOLASHDI▶️

▶️ ISMI: $fname
▶️ USERI: @$user
▶️ BAXOSI: ⭐⭐⭐⭐⭐
▶️ HOZIR SOAT: $soat
▶️ BIZNING BOT: @$mybot",
]);
}
if($tx == "⭐⭐⭐⭐⭐"){
  bot('sendmessage',[
  'chat_id'=>$cid,
  'text'=>"<b>🤖BOTIMIZGA QO‘YGAN ⭐⭐⭐⭐⭐ BAXO UCHUN RAXMAT.</b>",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"◀️BOTIMIZNI BAXOLASHDI▶️

▶️ ISMI: $fname
▶️ USERI: @$user
▶️ BAXOSI: ⭐⭐⭐⭐⭐
▶️ HOZIR SOAT: $soat
▶️ BIZNING BOT: @$mybot",
]);
}
if($text=="📤ADMINGA XABAR QOLDIRISH📥"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Xabaringiz turini tanlang.</b>",
'parse_mode'=>'html',
'reply_markup'=>$menu1,
]);
}
if($text == "➡️ADMINGA XABAR KIRITISH⬅️"){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"Assalomu alaykum adminga yozmoqchi bo'lgan xabaringizni kiriting.",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Assalomu alaykum adminga yozmoqchi bo'lgan xabaringizni kiriting."){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🔔FOYDALANUVCHIDAN XABAR KELDI🔔
➖➖➖➖➖➖➖➖➖➖➖
▶️ ISMI: $fname
▶️ USERI: @$user
▶️ ID RAQAMI: <a href = 'tg://user?id=$uid'>$uid</a>
➖➖➖➖➖➖➖➖➖➖➖

 👁‍🗨 YOZGAN XABARI: $text
➖➖➖➖➖➖➖➖➖➖➖
⏰XABAR JONATGAN SOAT: $soat",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Xabaringiz adminga yetkazildi tez orada sizga javob qaytaradi...*",
'parse_mode'=>"markdown",
'reply_markup'=>$menu,
]);
}
if($text == "➡️TAKLIF KIRITISH⬅️"){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"Assalomu alaykum adminga yozmoqchi bo'lgan taklifingizni kiriting.",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Assalomu alaykum adminga yozmoqchi bo'lgan taklifingizni kiriting."){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🔔FOYDALANUVCHIDAN TAKLIF KELDI🔔
➖➖➖➖➖➖➖➖➖➖➖
▶️ ISMI: $fname
▶️ USERI: @$user
▶️ ID RAQAMI: <a href = 'tg://user?id=$uid'>$uid</a>
➖➖➖➖➖➖➖➖➖➖➖

 👁‍🗨 YOZGAN TAKLIFI: $text
➖➖➖➖➖➖➖➖➖➖➖
⏰XABAR JONATGAN SOAT: $soat",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Xabaringiz adminga yetkazildi tez orada sizga javob qaytaradi...*",
'parse_mode'=>"markdown",
'reply_markup'=>$menu,
]);
}
if($text == "➡️BOTGA SHIKOYAT⬅️"){
  bot('sendMessage',[
  'chat_id'=>$cid,
  'message_id'=>$mid,
  'text'=>"Assalomu alaykum botimizga nega shikoyat qilasiz xabaringizni yozing.",
  'reply_markup'=>$rpl,
    ]);
    }
    if($reply=="Assalomu alaykum botimizga nega shikoyat qilasiz xabaringizni yozing."){
      bot('sendMessage',[
      'chat_id'=>$admin,
      'text'=>"🔔FOYDALANUVCHIDAN SHIKOYAT KELDI🔔
➖➖➖➖➖➖➖➖➖➖➖
▶️ ISMI: $fname
▶️ USERI: @$user
▶️ ID RAQAMI: <a href = 'tg://user?id=$uid'>$uid</a>
➖➖➖➖➖➖➖➖➖➖➖

 👁‍🗨 SHIKOYATI: $text
➖➖➖➖➖➖➖➖➖➖➖
⏰XABAR JONATGAN SOAT: $soat",
'parse_mode'=>'html',
]);
sleep(2);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"*Xabaringiz adminga yetkazildi tez orada sizga javob qaytaradi...*",
'parse_mode'=>"markdown",
'reply_markup'=>$menu,
]);
}
if($text1 == "🤖BOT YASAB BERISH XIZMATI🤖" or $text1 == "/start@Free_Fire_Uzbgroup_bot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('sendMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('sendMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>Assalomu alaykum siz sifatli va arzon narxlarda bot yasatmoqchimisiz unda siz adashmabsiz. Murojat uchun👇</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[["text"=>"👨‍💻BOT YASASH XIZMATI👨‍💻","url"=>"https://t.me/Shox_Xacker"],],
]   
]),
]);
}
}
if($text1 == "📚SIZNING SHAXSIY KABINETINGIZ📚" or $text1 == "/start@Free_Fire_Uzbgroup_bot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing.</b>",
'parse_mode' => 'html'
]);
  bot('sendMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('sendMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$bugun = date('d-M Y',strtotime('0 hour'));
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>▶️SIZNING SHAXSIY KABINETINGIZ◀️
▶️ ISMINGIZ: $fname
▶️ USERINGIZ: @$user
▶️ ID KODINGIZ: $uid
▶️ HOZIRGI SOAT: $soat
▶️ BUGUNGI SANA: $bugun
▶️ BIZNING BOTIMIZ: @$mybot</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'🔙Orqaga qaytish','callback_data' => "orqa"]],
]
]),
]);
}
}
if($data=="aloqa"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Bot admini bilan aloqaga chiqish*

[✅ BOT ADMINI BILAN ALOQA](https://t.me/Shox_Xacker)

[✅ BOT YASASH XIZMATI](t.me/Shox_Xacker)",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
    [['text'=>"➕Guruhga qo‘shish",'url'=>'t.me/@Free_Fire_Uzbgroup_bot?startgroup=new'],['text'=>'🔙Orqaga qaytish', 'callback_data'=>"orqa"]],
]
]),
]);
} 
if($data=="orqa"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>🤖Assalomu alaykum  siz bosh sahifadasiz.

Bizni botimiz kanalingiz va guruhingizni boshqarishga yordam beradi.

Botni guruhingizga qo'shib to'liq admin qilib keyin /sozlama sozini guruhingizga yuborib guruhingizni sozlab olishingiz mumkin.

Menyini tanlang.</b>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔔 BUYRUQLARIM 🔔','callback_data' => "komanda"],['text'=>'🖥DASTURCHILAR🖥','callback_data' => "dast"]],
[['text'=>'💎BOT STATISTIKASI💎','callback_data' => "stat1"],['text'=>'🌇XOZIRGI AXBOROT🌇','callback_data' => "otabekuz"]],
[['text'=>'📒BOTIMIZ XAQIDAGI MALUMOTLAR📒','callback_data' => "botxaqida"]],
[['text'=>'↪️ ADMIN BILAN ALOQAGA CHIQISH ↩️','callback_data' => "aloqa"]],
[['text'=>'↪️ TELEGRAMNING TILLARI ↩️','callback_data' => "tillar"]],
[['text'=>'➕BOTNI GURUHGA QOSHISH','url'=>'telegram.me/@Free_Fire_Uzbgroup_bot?startgroup=new']],
]
]),
]);
}
if(mb_stripos($text,"/sms") !== false){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"🔔ADMINDAN SIZGA XABAR KELDI🔔
➖➖➖➖➖➖➖➖➖➖➖
▶️ADMIN: [$ismi](tg://user?id=$uid)
➖➖➖➖➖➖➖➖➖➖➖
👁‍🗨 YOZGAN XABARI: $sms
➖➖➖➖➖➖➖➖➖➖➖
⏰XABAR JONATGAN SOAT: $soat",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>"$admin",
'text'=>"▶️ [Foydalanuvchi]($egasi) *ga xabaringiz yuborildi* ◀️",
'parse_mode'=>"markdown", 
]);
}
$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👤Userlarga xabar yuborish"],],
[['text'=>"👥Guruhlarga xabar yuborish"],],
[['text'=>"👤Userlar"],['text'=>"👥Guruhlar"],],
]
]);

if($text1 == "/xabar"&&$fadmin==$admin){
ty($chat_id); 
 bot('SendMessage',[ 
'chat_id'=>$admin,
'message_id'=>$mid,
'parse_mode'=>'markdown',
'text'=>"🔹*Siz adminsiz kerakli bo'limni tanlang:*",
'reply_markup'=>$key,
]);
}

if($text1 == "👥Guruhlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}

if($text1 == "👤Userlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

$yubbi = "📨Yuboriladigan xabar matnini kiriting. Xabar turi markdown";
 if($text1 == "👤Userlarga xabar yuborish" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
  file_put_contents("stat/$chat_id.step","link");
file_put_contents("stat/$chat_id.matn",$text1);
 bot('sendmessage',[
          'chat_id'=>$admin,
          'parse_mode'=>"markdown",
          'text'=>"✅*Matn qabul qilindi endi namuna bo'yicha knopkani yuboring!
Namuna:*
`Samariddin + https://t.me/SMODILOV`",
          ]);      
}
    
if($step == "link"){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
$in=file_get_contents("stat/$chat_id.in");
$matn=file_get_contents("stat/$chat_id.matn");
   $i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text1);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode(",",$row);
foreach($bottons as $botton){
$data = explode("+",$botton."+");
$Ibotton = ["text" => trim($data[0]), "url" => trim($data[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;
}
$i++;
}
$reply_markup=json_encode($keyboard);
$soni=substr_count($userlar,"\n")-1;
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$matn,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      'reply_markup'=>($reply_markup)
      ]);
 $sended=$userr->ok;
if($sended){
$true=file_get_contents("viki/send.ok");
file_put_contents("viki/send.ok","$true\n$idlat");
}else{
$false=file_get_contents("viki/send.no");
file_put_contents("viki/send.no","$false\n$idlat");
}
}
$true=file_get_contents("viki/send.ok");
$false=file_get_contents("viki/send.no");
$truecount=substr_count($true,"\n");
$falsecount=substr_count($false,"\n");
bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Userlarga yuborildi\nYubordim: $truecount/$soni\nYuborolmadim: $falsecount/$soni",
    'parse_mode'=>"markdown",
    ]);
file_put_contents("viki/send.ok","");
file_put_contents("viki/send.no","");
  file_put_contents("stat/$chat_id.step","");
}
}
   
       if($text1 == "👥Guruhlarga xabar yuborish" and $chat_id == $admin){
      ty($chat_id);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

       if($text1 == "👥Guruhlarga xabar yuborish" and $chat_id == $admin){
      ty($chat_id);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
    	         file_put_contents("stat/$chat_id.step","link1");
          file_put_contents("stat/$chat_id.matn1",$text1);
 bot('sendmessage',[
          'chat_id'=>$admin,
              'parse_mode'=>"markdown",
          'text'=>"✅*Matn qabul qilindi endi namuna bo'yicha knopkani yuboring!
Namuna:*
`Samariddin + https://t.me/SMODILOV`",
          ]);      
}

if($step == "link1"){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      	      $matn1=file_get_contents("stat/$chat_id.matn1");
     
   $i=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
$rows = explode("\n",$text1);
foreach($rows as $row){
$j=0;
$keyboard["inline_keyboard"][$i]=[];
$bottons = explode(",",$row);
foreach($bottons as $botton){
$data = explode("+",$botton."+");
$Ibotton = ["text" => trim($data[0]), "url" => trim($data[1])];
$keyboard["inline_keyboard"][$i][$j] = $Ibotton;
$j++;
}
$i++;
}
$reply_markup=json_encode($keyboard);
     $soni=substr_count($guruhlar,"\n")-1;
    $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
         'text'=>$matn1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
    'reply_markup'=>($reply_markup)
      ]);
  $sended=$guruu->ok;
if($sended){
$true=file_get_contents("viki/send.ok");
file_put_contents("viki/send.ok","$true\n$idlat");
}else{
$false=file_get_contents("viki/send.no");
file_put_contents("viki/send.no","$false\n$idlat");
}
}
$true=file_get_contents("viki/send.ok");
$false=file_get_contents("viki/send.no");
$truecount=substr_count($true,"\n");
$falsecount=substr_count($false,"\n");   
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi\nYubordim: $truecount/$soni\nYuborolmadim: $falsecount/$soni",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
if($text == '/file' and $cid == $admin){
bot('sendDocument',[
'chat_id'=>$cid,
'document'=>new CURLFile(__FILE__),
]);
}
if(mb_stripos($text,"/search") !== false){ 
$matn = str_replace("/search ","",$text);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"🔍 Qidiruv 
☑️ : $matn",
'parse_mode'=>"Markdown",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[
['text'=>"App store 🌐", 'url'=>"https://www.apple.com/us/search?q=$matn"],
],
[
['text'=>"Google 📈", 'url'=>"https://www.google.com.iq/search?q=$matn"],
],
[
['text'=>"Youtube 🎥", 'url'=>"https://m.youtube.com/results?q=$matn&sm=3"],
],
[
['text'=>"instagram 📯", 'url'=>"https://www.instagram.com/$matn"],
],

[
['text'=>"Telegram 📪", 'url'=>"https://www.telegram.me/$matn"],
],
[
['text'=>"Github 🐱", 'url'=>"https://github.com/search?utf8=✓&q=$matn"],
],
]
])
]);

}
      
?>