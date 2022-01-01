<?php
error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE); // Error/Exception file logging engine.
ini_set('error_log', 'error.log'); // Logging file path


$input=file_get_contents('php://input');
$data=json_decode($input);
$chat_id=$data->message->chat->id;
$text=$data->message->text;
if(strpos($text,'/project ') === false) {

if($text == "/help") {
$text = "<b>/project [id]</b> - Sends the Project Detail %0A<b>/search [text] - Search Projects";
}else{

if(strpos($text,'/search ') === false) {
$text = "";
}else{

$proj_list = 'https://sketchub.in/api/v3/get_project_list';
     $parameters = [
     'api_key' => '06f6b7d1-f2e6-42eb-887b-c1479f399005',
     'search_keywords' => trim(str_replace("/search ", "", $text))
     ];
     //request
     $ch_t = curl_init($proj_list);
     curl_setopt($ch_t, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch_t, CURLOPT_POSTFIELDS, $parameters);
     //response
     $response = curl_exec($ch_t);
     curl_close($ch_t);
     //extract
     
          if($respo = json_decode($response)) {
          $text = "";
          for($x = 0;$x < count($respo->projects);$x++){
              
           $text = $text . $respo->projects[$x]->id . " : " . $respo->projects[$x]->title."%0A";
          }
          
          }
}
}
    } else {
$pid = trim(str_replace("/project ", "", $text));
//config
     $SHREQUESTURL = 'https://sketchub.in/api/v3/get_project_details';
     $parameters = [
     'api_key' => '06f6b7d1-f2e6-42eb-887b-c1479f399005',
     'project_id' => $pid
     ];
     //request
     $ch = curl_init($SHREQUESTURL);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
     //response
     $response = curl_exec($ch);
     curl_close($ch);
     //extract
     if($project = json_decode($response)) {
     $title = $project->title;
     $owner = $project->user_name;
     if($project->whatsnew == ""){
$whatnue = "";
     }else{
          $whatsnue = "%0A%0A<u>What's New</u>%0A$project->whatsnew";
     }
  $verif="✅ Verified";
 if($project->is_verified=="1"){
  $verif="✅ Verified";
 }
 if($project->is_verified=="0"){
  $verif="❌ Unverified";
  }
 
 if($project->is_editorchoice=="1"){
 $editorchoise=" ✅ Editor's Choice";
 }
 
 if($project->is_editorchoice=="0"){
 $editorchoise="";
 }
       
       //$text = "<b><u>".$title. "</u></b>%0ABy <a href=\"https://web.sketchub.in/u/".$project->user_name."\"><i>".$project->user_name."</i></a>".$whatsnue."%0A%0A<u>Description</u>%0A".$project->description."%0A%0A<u>Size</u>%0A".$project->project_size."%0A%0A<u>Categories</u>%0A".$project->category.", ".$project->project_type.$verif."%0A%0ALink: <a href=\"https://web.sketchub.in/p/$pid\">https://web.sketchub.in/p/$pid</a>";
$text = "<b><u>" . $title . "</u></b>%0ABy <a href=\"https://web.sketchub.in/u/" . $project->user_name . "\"><i>" . $project->user_name . "</i></a>" . str_replace("_","%0A",$whatsnue) . "%0A%0A<u>Description</u>%0A" . str_replace("_","%0A",$project->description) . "%0A%0A<u>Size</u>%0A" . $project->project_size . "%0A%0A<u>Categories</u>%0A" . str_replace("&","And",$project->category) . ", ";
$text = $text . $project->project_type . "%0A%0A".$verif.$editorchoise;
$text = $text . "%0A%0ALink: https://web.sketchub.in/p/".$pid;

     } else {
     //error
     $text = htmlspecialchars($response);
     }
     
    }
$token='5023266737:AAG3B-2KAOVNw2Vb-ZmYc7fCDcpb4rIS3Ig';
$url="https://api.telegram.org/bot$token/sendMessage?text=$text&parse_mode=html&chat_id=$chat_id";
file_get_contents($url);
?> 
