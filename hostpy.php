<?php
header("Content-Type: application/json; charset=UTF-8");
$user_agent = $_SERVER["HTTP_USER_AGENT"];
$ar = array("a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J","k","K","l",'L','m','M','n',"N",'o','O','p','P','q','Q','r','R','S','s','t','T');
$rand1 = array_rand($ar, 1);
$rand2 = array_rand($ar, 1);
$rand3 = array_rand($ar, 1);
$rand4 = array_rand($ar, 1);
$rand5 = array_rand($ar, 1);
$rand6 = array_rand($ar, 1);
$rand7 = array_rand($ar, 1);
$rand8 = array_rand($ar, 1);
$rand9 = array_rand($ar, 1);
$rand10 = array_rand($ar, 1);
$rand11 = array_rand($ar, 1);
$a1 = $ar[$rand1];
$a2 = $ar[$rand2];
$a3 = $ar[$rand3];
$a4 = $ar[$rand4];
$a5 = $ar[$rand5];
$a6 = $ar[$rand6];
$a7 = $ar[$rand7];
$a8 = $ar[$rand8];
$username = $a1.$a2.$a3.$a4.$a5.$a6.$a7;
$password = $a5.$a1.$a2.$a6.$a7.$a4.$a3.$a8;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.pythonanywhere.com/registration/register/beginner/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "csrfmiddlewaretoken=l8BhwyPX4AY6gJYWCxHoU5rJuh08R9X6m1V0VZO6TWnzNbU9MMSyvZWZ9MCR8akU&username=".$username."&email=".$username."@gmail.com&password1=".$password."@&password2=".$password."@&tos=on&recaptcha_response_token_v3=");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
$headers = array();
$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
$headers[] = 'Accept-Language: ar-AE,ar;q=0.9,en-GB;q=0.8,en;q=0.7,en-US;q=0.6';
$headers[] = 'Cache-Control: max-age=0';
$headers[] = 'Connection: keep-alive';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
$headers[] = 'Cookie: cookie_warning_seen=True; _ga=GA1.1.1333768262.1665605026; csrftoken=ukuoLFSyTghYslpg8OLeBJ2eusHRoVPLvdO7a6RHICGrZNlti3WocDxu9XjAFWcz; sessionid=jdcdh80a4s14kn8ds2cs0rzv2bilhxm5; _gid=GA1.1.1410917274.1666463107';
$headers[] = 'Origin: https://www.pythonanywhere.com';
$headers[] = 'Referer: https://www.pythonanywhere.com/registration/register/beginner/';
$headers[] = 'Sec-Fetch-Dest: document';
$headers[] = 'Sec-Fetch-Mode: navigate';
$headers[] = 'Sec-Fetch-Site: same-origin';
$headers[] = 'Sec-Fetch-User: ?1';
$headers[] = 'Upgrade-Insecure-Requests: 1';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 12; SM-A225F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Mobile Safari/537.36';
$headers[] = 'Sec-Ch-Ua: \"Chromium\";v=\"105\", \"Not)A;Brand\";v=\"8\"';
$headers[] = 'Sec-Ch-Ua-Mobile: ?1';
$headers[] = 'Sec-Ch-Ua-Platform: \"Android\"';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);
$info = [
"username"=>$username,
"password"=>"$password@",
"email"=>"$username@gmail.com",
"login"=>"pythonanywhere.com/login/"
];
echo json_encode($info,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);