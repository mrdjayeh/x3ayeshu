﻿<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('DJ');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$name = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode(' ',$stat[data][$i-1][from][id]);
$tagged_name = ' @['.$tags[0].':1] ';
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$user = ' @['.$me[id].':] ';
$user1 ='@['.$stat[data][$i-1][from][id].':'.$exp_nam[0].']';


$kata= array(
'cinta.php',
'motivasi.php',
'motto.php',
'bijak.php',
);

$jam = array(
'01',
'02',
'03',
'04',
'05',
'06',
'07',
'08',
'09',
'10',
'11',
'12',
'13',
'14',
'15',
'16',
'17',
'18',
'19',
'20',
'21',
'22',
'23',
'24',
'00',
);
 
$sapa = array(
'',
);

$ucapan = gmdate('H',time()+7*3600); 
$ucapan = str_replace($jam,$sapa,$ucapan);

$emo=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon=$emo[rand(0,count($emo)-1)];

$emo1=array (
'😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊','😋','😎','😍','😘','😗','😙','😚','☺','🙂','🙄','😮','😛','😜','😝','😌','😒','😲','😢','😭','🤓','😡','😠','😳','😈','👿','😺','😸','😹','😻','😼','😽','🙀','😿','😾','🙈','🙉','🙊','💪','👈','👉','☝','👆','👇','✌','🤞','🖖','🤘','🤙','🖐','✋','👌','👍','👎','✊','👊','🤛','🤜','🤚','💚','💛','🧡','💜','🖤','💝','💞','💙','🐺','🦊','🐱','🐈','🦁','🐯','🐅','🐆','🦄','🦓','🦌','🐮','🐂','🐃','🐄','🐏','🐧','🐦','🐥','🐤','🐣','🐓','🐔','🦃','🐾','🐼','🐨','🐻','🦔','🐿','🐇','🐰','🐹','🐀','🐁','🐭','🦏','🐘','🦒','🐫','🐪','🐐','🐑','🕊','🦅','🦆','🦉','🐸','🐊','🐢','🦎','🐍','🐲','🐉','🐬','🐟','🐠','🦈','🐌','🦋','🐛','🏵','🌹','🥀','🌺','🌻','🌼','🌷','🌲','🌳','🌴','🌵','✅','✔','☑','🇵🇰',
);

$emoticon1=$emo1[rand(0,count($emo1)-1)];

$emo0=array (
'👈😀👉','👈😁👉','👈✌👉','👈🤣👉','👈😃👉','👈😄👉','👈😅👉','👈😆👉','👈😉👉','👈😊👉','👈😋👉','👈😎👉','👈😍👉','👈😘👉','👈😗👉','👈😙👉','👈😚👉','☺','👈💞👉','👈💙👉','🐺','👈🐱👉','👈💂👉','👈🦁👉','👈🐯👉','👈🐅👉','👈🐸👉','👈🐊👉','👈🐢👉','👈🐍👉','👈🐲👉','👈🐉👉','👈🐬👉','👈🐟👉','👈🐠👉','👈🦈👉','👈🐌👉','👈🌺👉','👈🌻👉','👈🌼👉','👈💫👉','👈🌲👉','👈🌳👉','👈🌴👉','👈🌵👉','👈✅👉','👈✔👉','👈☑👉','👈🇵🇰👉',
);

$emoticon0=$emo0[rand(0,count($emo)-1)];

$emo00=array (
'👈😀👉','👈😁👉','👈✌👉','👈🤣👉','👈😃👉','👈😄👉','👈😅👉','👈😆👉','👈😉👉','👈😊👉','👈😋👉','👈😎👉','👈😍👉','👈😘👉','👈😗👉','👈😙👉','👈😚👉','☺','👈💞👉','👈💙👉','🐺','👈🐱👉','👈💂👉','👈🦁👉','👈🐯👉','👈🐅👉','👈🐸👉','👈🐊👉','👈🐢👉','👈🐍👉','👈🐲👉','👈🐉👉','👈🐬👉','👈🐟👉','👈🐠👉','👈🦈👉','👈🐌👉','👈🌺👉','👈🌻👉','👈🌼👉','👈💫👉','👈🌲👉','👈🌳👉','👈🌴👉','👈🌵👉','👈✅👉','👈✔👉','👈☑👉','👈🇵🇰👉',
);

$emoticon00=$emo00[rand(0,count($emo)-1)];



$text = array('
'.$emoticon.' Dp Py Tapko ❣ ¦ '.$user1.' ¦ ❣  
'.$emoticon1.' @[100025466832535:Baig] '.$emoticon0.' Reactkings,xyz '.$emoticon.' ',


''.$emoticon.' 🤔 R U Serious? '.$emoticon00.' ¦ '.$user1.' ¦ 😜😂 
'.$emoticon1.' @[100025466832535:Baig] '.$emoticon0.' Reactkings,xyz '.$emoticon.' ',

''.$emoticon.' 🤔 Nice Post '.$emoticon00.' ¦ '.$user1.' ¦ '.$emoticon1.' 
'.$emoticon1.' @[100025466832535:Baig] '.$emoticon0.' Reactkings,xyz '.$emoticon.' ',







);
$comments = $text[rand(0,count($text)-1)];

$site = ''.$emoticon.' LOVE ALL TIME '.$emoticon.'';

$return = ' '.$comments.' 
'.$site.' ';



auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/reactions?type=WOW&method=POST&access_token='.$token.'');

}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>
