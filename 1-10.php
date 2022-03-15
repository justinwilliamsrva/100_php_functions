<?php
//******************************************
//********** variables **********
//******************************************

$array = ['wolf', 'dog', 'cat', 'horse', 'frog'];
$multi_array = ['wolf', 'dog', 'cat', 'horse', 'frog', ['wolf', 'sheep','rooster']];
$sentence = "Clever Animals are Fast";
$num_array = [1.0, 1.5, 2.0, 2.5];
$comma_string = 'walk,try,hurt';
$column_string = 'walk|try|hurt';
$space_string = 'walk try hurt';


//******************************************
//********** 1. count **********
//******************************************

// echo count($array);

// for($i=0;$i<count($array)-1;$i++){
//     printf($array[$i]."\n");
// }

// echo count($multi_array,COUNT_NORMAL);
// echo "\n";
// echo count($multi_array,COUNT_RECURSIVE);


//******************************************
//********** 2. is_array **********
//******************************************

// if(is_array($array)){
//     echo "This is an array";
// }


//******************************************
//********** 3. substr **********
//******************************************

// echo substr($sentence, 0);
// echo substr($sentence, 0, 6);
// echo substr($sentence, 0, 6);
// echo substr($sentence, 7, 7);
// echo substr($sentence, -4);


//******************************************
//********** 4. in_array **********
//******************************************

// echo in_array('1.0', $num_array);
// echo in_array('1.0', $num_array,TRUE);

//******************************************
//********** 5. explode  **********
//******************************************

// print_r(explode(",",$comma_string));
// print_r(explode("|",$column_string,2));
// print_r(explode(" ",$space_string,-1));







