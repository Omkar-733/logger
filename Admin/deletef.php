<?php
include("../configASL.php");
include('update.php');
LabStatus($al);

$idf=$_GET['delf'];
mysqli_query($al,"delete from feedback where st_pin='$idf'");
?>
<script type="text/javascript">
alert("Successfully deleted");
window.location='feedback.php';
</script>
