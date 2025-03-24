<?php
include("../configASL.php");




function LabStatus($al) {
    date_default_timezone_set("Asia/Kolkata");
    $current_time = date("H:i:s");

    // Fetch end time from database for active labs
    $sql_check = "SELECT `end` FROM `labs` WHERE `status`=1";
    $result = mysqli_query($al, $sql_check);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $end_time_db = $row['end'];

        // Convert database time format to match PHP time format
        $end_time = date("H:i:s", strtotime($end_time_db));

        if ($current_time >= $end_time) {
            // If current time has passed end time, reset values
            $sql_update = "UPDATE `labs` SET `status`=0, `start`='00:00:00', `end`='00:00:00' WHERE `status`=1";
            mysqli_query($al, $sql_update);
        }
    }
}
?>
<?php

?>

