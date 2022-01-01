<?php
header("Content-Type: text/json; charset=UTF-8");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");

     if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $uploads_dir = 'u/';
    $tmp_name = $_FILES['file']['tmp_name'];
	$ext = end((explode(".",$_FILES["file"]["name"])));

if($ext!="php"){
    $random_pass=str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890");
    $new_name = substr($random_pass ,0,22).".".$ext;
    move_uploaded_file($tmp_name, $uploads_dir.$new_name);
    
    $jsonoutput = array(
    "src" => "http://r96e.c1.biz/".$uploads_dir.$new_name
    );
    echo json_encode($jsonoutput);
     }else{
    $jsonoutput = array(
    "error" => "File Format not Supported"
    );
    echo json_encode($jsonoutput);
    }
   
    }else{
$jsonoutput = array(
"error" => "No file Passed"
);
echo json_encode($jsonoutput);
    }
?>
