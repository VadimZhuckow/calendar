<?php
//чек флаг//
var_dump(date('l'));



function tranclate($day){
    if($day == "Monday"){
        return "Понедельник";
    }
    if($day == "Tuesday"){
        return "Вторник";
    }
    if($day == "Wednesday"){
        return "Среда";
    }
    if($day == "Thursday"){
        return "Четверг";
    }
    if($day == "Friday"){
        return "Пятница";
    }
    if($day == "Saturday"){
        return "Суббота";
    }
    if($day == "Sunday"){
        return "Воскресение";
    }
}

$i = 1;

while($i<=10){
    $cr_day = time();
    $op_time = $i*3600*24+$cr_day;
    echo date('d.m.Y - ' ,$op_time );
    echo tranclate(date('l' ,$op_time ));
    echo "<br>";
    $i++;
}
