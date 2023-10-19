<?php

header("Access-Control-Alllow-Methods: DELETE");

include("../config.php");

$config = new Config();
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    

    $input = file_get_contents("php://input");
    parse_str($input,$_DELETE);

    $id = $_DELETE['id'];
    $res = $config->delete($id);

    if($res){
        $arr['data'] = "Delete succefully...";
    }else{
        $arr['data'] = "Delete unsuccefully...";
    }
    
}else{
    $arr['msg'] = "Only DELETE ALLOW";

}

echo json_encode($arr);
?>