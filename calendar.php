<?php
class Calendar
{




    public function tranclate($day){
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

    public function generateDate($days=30){
    $i = 1;
    $result = [];
    while($i<=$days){
    $cr_day = time();
    $op_time = $i*3600*24+$cr_day;
    $result[$i] = date('d.m.Y - ' ,$op_time );
    $result[$i] .= $this->tranclate(date('l' ,$op_time ));
    $i++;
    }
    return $result;
    }
}
