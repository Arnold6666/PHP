<?php
// $a = [
//             ['id' => 1, 'pid' => 0],
//             ['id' => 2, 'pid' => 0],
//             ['id' => 3, 'pid' => 0],
//             ['id' => 4, 'pid' => 2],
//             ['id' => 5, 'pid' => 2],
//             ['id' => 6, 'pid' => 2],
//             ['id' => 8, 'pid' => 4],
//             ['id' => 9, 'pid' => 2],
//             ['id' => 12, 'pid' => 8],
//             ['id' => 13, 'pid' => 4],
//             ['id' => 14, 'pid' => 13],
// ];
$b = [
    ['id'=>6,'pid'=>7,'username'=>'test3'],
    ['id'=>5,'pid'=>7,'username'=>'test3'],
    ['id'=>4,'pid'=>7,'username'=>'test3'],
    ['id'=>3,'pid'=>7,'username'=>'test3'],
    ['id'=>2,'pid'=>7,'username'=>'test3'],
    ['id'=>1,'pid'=>7,'username'=>'test3']
];
$a = [
    ['A1' => 1, 'pid' => 0],
    ['B1' => 2, 'pid' => 1],
    ['B2' => 3, 'pid' => 1],
    ['C1' => 4, 'pid' => 2],
    ['C2' => 5, 'pid' => 2],
    ['C3' => 6, 'pid' => 2],
    ['D1' => 7, 'pid' => 3],
    ['D2' => 8, 'pid' => 3],
    ['D3' => 9, 'pid' => 3]
];
// $a = [
//     'A1' => [ 
//         'B1'=>[
//             'C1' => ['D1','D2'],
//             'C2'],
//         'B2'=>['C3'=>['D3']]
//     ]
// ];
$data=[];
// foreach ($a as $b)
// {
//      if ($b['pid'] == 2)
//      {
//           $data[]=$b['id'];
//      }
//      if(in_array($b['pid'],$data)){
//           $data[]=$b['id'];
//      }
// }
print_r($data);