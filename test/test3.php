<?php

$src = '[
    {"id":"1","name":"A1","pid":"0"},
    {"id":"2","name":"B1","pid":"1"},
    {"id":"3","name":"B2","pid":"1"},
    {"id":"4","name":"C1","pid":"2"},
    {"id":"5","name":"C2","pid":"2"},
    {"id":"6","name":"C3","pid":"3"},
    {"id":"7","name":"D1","pid":"4"},
    {"id":"8","name":"D2","pid":"4"},
    {"id":"9","name":"D3","pid":"6"}
    ]';

$result = json_decode($src,true);
$map = array_combine(array_column($result,'id'), array_column($result,'pid'));
print_r(getIdAndPid($map, [9]));


function getIdAndPid(&$map,$ids){
    $res= [];
    foreach($ids as $id){
        joinPid($map,$id,$res);
    }
    return array_values($res);
}

function joinPid(&$map,$id,&$res){
    if(isset($map[$id]) && $map[$id] != 0){
        joinPid($map,$map[$id],$res);
    } 
    $res[] = $id;
}

// function getName(&$res){

//     foreach($res as $id){

//     }
// }