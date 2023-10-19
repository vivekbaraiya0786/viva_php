<?php

header("Access-Control-Alllow-Methods: POST");

include("../config.php");

$config = new Config();
if($_SERVER["REQUEST_METHOD"] == "POST"){


    $name = $_POST['name'];
    $post = $_POST['post'];
    $salary = $_POST['salary'];
    $comname = $_POST['comname'];

    $res = $config->insert($name,$post,$salary,$comname);

    if($res){
        $arr['data'] = "Insert succefully...";
    }else{
        $arr['data'] = "Insert failed...";
    }
   
}else{
    $arr['msg'] = "Only POST METHOD ALLOW";

}

echo json_encode($arr);
?>