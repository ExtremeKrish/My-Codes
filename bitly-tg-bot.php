<?php
$input=file_get_contents('php://input');
$data=json_decode($input);
$chat_id=$data->message->chat->id;
$text=$data->message->text;
if($text == "/start"){
     $text = "Send me any Link";
}else{

$SHREQUESTURL = 'https://api-ssl.bitly.com/v3/shorten?access_token=763a2ea816b095c485eca090fc983f2c3958c549&longUrl=' . $text;
//request
$ch = curl_init($SHREQUESTURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//response
$response = curl_exec($ch);
curl_close($ch);
     if($project = json_decode($response)) {
     $text = $project->data->url;
     }

}


$token='5053043158:AAEj9u3aIFIRsMMxu0qxRjDJncdRPUXuf8E';
$url="https://api.telegram.org/bot$token/sendMessage?text=$text&parse_mode=html&chat_id=$chat_id";
file_get_contents($url);

?>
