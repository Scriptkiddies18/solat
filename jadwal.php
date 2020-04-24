/* Coded By Rafli Gans */
<?php
function http_request($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$output = curl_exec($ch);
return $output;
}
echo " JADWAL SHOLAT \n";
echo "Masukin Daerah : ";
$wil = trim(fgets(STDIN));
$web = http_request("https://muslimsalat.com/indonesia/$wil.json?key=19ddd1f2e9f18df84d66aabb361cc28a");
$result= json_decode($web,true);

$fajr = $result['items']['0']['fajr'];
$shurooq = $result['items']['0']['shurooq'];
$dhuhr = $result['items']['0']['dhuhr'];
$asr = $result['items']['0']['asr'];
$maghrib = $result['items']['0']['maghrib'];
$isha = $result['items']['0']['isha'];
echo "Shubuh  :    ".$fajr."\n";
echo "Terbit  :    ".$shurooq."\n";
echo "Dzuhur  :    ".$dhuhr."\n";
echo "Ashar   :    ".$asr."\n";
echo "Maghrib :    ".$maghrib."\n";
echo "Isya    :    ".$isha."\n";
sleep(2);
echo "Sholat Lah Sebelum Di Sholatkan.";
?>
