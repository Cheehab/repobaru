<?php

function url($url){
$hd = array();
$hd[] = "Mozilla/5.0 (Linux; Android 9; SM-J610F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Mobile Safari/537.36";
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $hd);	
	$hs = curl_exec($ch);
	return $hs;
}
error_reporting(0);
system("clear");

$hs = url("http://controlc.com/a767db93");
//echo $hs."\n";
//exit;
$st1 = explode('St: ',$hs);
$st = explode(' ',$st1[1]);
//echo $st[0]."\n";

$hs = url("http://controlc.com/0e981d09");
//echo $hs."\n";
//exit;
$link1 = explode('Link: ',$hs);
$link = explode(' ',$link1[1]);
//echo $link[0]."\n";
$pw1 = explode('[tpcolor=#FF0000]',$hs);
$pw = explode('[',$pw1[1]);
//echo $pass[0]."\n";


$pass = $pw[0];
if ($pass=='off'){
$s = "\033[1;97m\033[101mOFFLINE\033[0m";
}else{
$s = "\033[1;94m\033[102mONLINE\033[0m";
}
if ($link[0]==""){
$s = "\033[1;97m\033[101mDISCONNECT\033[0m";
}
if ($pass=='koid'){
$s = "\033[1;97m\033[101mKO'ID\033[0m";
}
if ($pass=='err1'){
$s = "\033[1;97m\033[101m$st[0]\033[0m";
}
if ($pass=='err'){
$s = "\033[1;94m\033[102m$st[0]\033[0m";
}
echo $banner = "
\033[1;92m ██████ ██   ██ ███████ ███████ ██   ██  █████  ██████  \033[1;94m\033[102mSERVER:\033[0m $s\033[1;92m
██      ██   ██ ██      ██      ██   ██ ██   ██ ██   ██ 
██      ███████ █████   █████   ███████ ███████ ██████  \033[1;94m\033[102mSCRIPT:\033[0m \033[1;94m\033[102mVIRTEXPRO\033[0m\033[1;92m
██      ██   ██ ██      ██      ██   ██ ██   ██ ██   ██ 
 ██████ ██   ██ ███████ ███████ ██   ██ ██   ██ ██████  \033[1;94m\033[102mVERSION:\033[0m \033[1;94m\033[102mV1\033[0m
\033[1;97m══════════════════════════════════════════════════════════════════════════
\033[1;94m『』\033[1;97mAuthor: Cheehab
\033[1;94m『』\033[1;97mChannel YT:\033[1;91m Cheehab
\033[1;94m『』\033[1;97mVersi Script: \033[1;92mGRATIS
\033[1;97m══════════════════════════════════════════════════════════════════════════
\033[1;91mSCRIPT INI 100% GRATIS. GUNAKAN DENGAN BIJAK YA KAWAN! SELURUH RESIKO
DITANGGUNG PENGGUNA. SAYA TIDAK BERTANGGUNG JAWAB HEHEHE...
\033[1;97m••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••••


ANDA BUKAN MEMBER PREMIUM! SILAHKAN HUBUNGI ADMIN UNTUK MEMBELI PAKET PREMIUM!
ADMIN: https://bit.ly/adminpremi
\n";
