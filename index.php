<?php
require_once "debug.php";
require_once "calendar.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <style>
        .contaier{
            width: 100%;
            overflow-y: scroll;
        }

        td {
            border: 1px solid gray;
            padding: 3px;
        }

        .active{
            color:aquamarine;
        }
    </style>
</head>

<body>
    <div class="contaier">

        <?php
        $calendar = new Calendar;
        // Debug::view($calendar->generateDate());

        ?>
        <table>
            <tr>
                <?php
                $days = $calendar->generateDate();
                foreach ($days as $day) {

                    echo "<td class='day'>{$day}</td>";
                }
                ?>
            </tr>
        </table>
    <div class="counter">



    </div>

    </div>
</body>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"></script>
<script>
    $( ".day" ).on( "click", function() {
        
    $(this).toggleClass("active");
    getCount();
} );
function getCount(){
    var selectDays = $(".active").length;
    $(".counter").text(selectDays);
}


</script>
</html>