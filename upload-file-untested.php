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
function gen_uuid()
    { 
      return sprintf( 
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x', 
        // 32 bits for "time_low" 
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff), 
        // 16 bits for "time_mid" 
        mt_rand(0, 0xffff), 
        // 16 bits for "time_hi_and_version", 
        // four most significant bits holds version number 4 
        mt_rand(0, 0x0fff) | 0x4000, 
        // 16 bits, 8 bits for "clk_seq_hi_res", 
        // 8 bits for "clk_seq_low", 
        // two most significant bits holds zero and one for variant  DCE1.1
        mt_rand(0, 0x3fff) | 0x8000, 
        // 48 bits for "node" 
        mt_rand(0, 0xffff), 
        mt_rand(0, 0xffff), 
        mt_rand(0, 0xffff) 
      );
    }
    
    $new_name = gen_uuid().".".$ext;
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
