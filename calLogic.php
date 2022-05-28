<?php

switch($_POST['functionName']){
    case 'NUM1':
        //logic
        $data = addN1($_POST);
        $response['success'] = ($data) ? true : false;
        $response['data'] = $data;
        $response['msg'] = ($data) ? 'Function Successfully' : 'Function Error';
        
        echo json_encode($response); 
        break;
    
    case 'NUM2':
        //logic
        $data = addN2($_POST);
        $response['success'] = ($data) ? true : false;
        $response['data'] = $data;
        $response['msg'] = ($data) ? 'Function Successfully' : 'Function Error';
        
        echo json_encode($response); 
        break;
    
    case 'ANS':
        //logic
        $data = addN1N2($_POST);
        $response['success'] = ($data) ? true : false;
        $response['data'] = $data;
        $response['msg'] = ($data) ? 'Function Successfully' : 'Function Error';
        
        echo json_encode($response); 
        break;
        
}

function addN1($data){
    //Logic Build up
    return $data['isnum1'];

}

function addN2($data){
    //Logic Build up
    return $data['isnum2'];

}

function addN1N2($data){
    //Logic Build up
    return $data['isans'];

}



?>