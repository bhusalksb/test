<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$prams='2016-12-05';
$start = date('Y-m-d',strtotime($prams)); // start date
$start = date('Y-m-d',strtotime("$start 1 days")); // start from next date than given date
$end = date('Y-m-d', strtotime("$start 6 days")); // set next 6 day

$start = new DateTime($start); // convert to php date object
$end = new DateTime($end);// convert to php date object

do {
    $date = $start->format("d M, Y");
    $start->modify("+1 day"); // modify date as looped date

?>
<!-- printout result -->
<?php echo $date; ?><br>
<?php
}while ($start <= $end);
