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

$result = json_decode($src, true);
// print_r($result);
$map = array_combine(array_column($result, 'id'), array_column($result, 'pid'));
// print_r($map);/
print_r(getIdAndPid($map, [9]));

/**
 * 查出ids中的id以及其父id以及其父id的父id......
 * @param $map 以id为键, pid为值的 所有数据 的map
 * @param $ids 要查找的ids
 * @return array
 */
function getIdAndPid(&$map, $ids){
    $res = [];
    foreach($ids as $id){
        joinPid($map, $id, $res);
        echo '1';
        echo "<br>";
    }
    return array_values(array_unique($res));
}

function joinPid(&$map, $id, &$res){
    // 如果其pid不为0, 则继续查找
    if(isset($map[$id]) && $map[$id] != 0){
        joinPid($map, $map[$id], $res);
        echo '2';
        echo "<br>";
    }
    $res[] = $id;
}