<?php
$t = date('h');
if($t < '10'){
    echo 'Good morning';
}else if($t < '20'){
    echo 'Have a good day';
}else{
    echo 'Have a good night';
}
echo '<br>';
var_dump($t);
echo '<br>';

// Giai phuong trinh bac nhat ax + b = 0;
$a = 5;
$b = 6;
if($a==0){
    if($b == 0){
        echo 'Phuong trinh vo so nghiem';
    }else{
        echo 'Phuong trinh vo nghiem';
    }
}else{
    $x = - $b / $a;
    echo "Phuong trinh co nghiem: $x";
}
?>