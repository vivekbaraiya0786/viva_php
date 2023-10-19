<?php

header("Access-Control-Alllow-Methods: GET");

include("../config.php");

$config = new Config();
if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $my_data = [];
    $res = $config->fetch();
    while($record = mysqli_fetch_assoc($res)){
        array_push($my_data,$record);
    }

    $arr['data'] = $my_data;
}else{
    $arr['msg'] = "Only GET METHOD ALLOW";

}

echo json_encode($arr);
?>