<?php
//********** 1. count **********
$array = ['wolf', 'dog', 'cat', 'horse', 'frog'];
$multi_array = ['wolf', 'dog', 'cat', 'horse', 'frog', ['wolf', 'sheep','rooster']];
// echo count($array);

// for($i=0;$i<count($array)-1;$i++){
//     printf($array[$i]."\n");
// }

// echo count($multi_array,COUNT_NORMAL);
// echo "\n";
// echo count($multi_array,COUNT_RECURSIVE);


//********** 2. is_array **********

if(is_array($array)){
    echo "This is an array";
}




