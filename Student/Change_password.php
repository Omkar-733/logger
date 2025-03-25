<?php
include("../configASL.php");
include('update.php');
LabStatus($al);

session_start();
$aid = $_SESSION['st_pin']; // FIXED: Correct session variable for student ID

// Verify if student exists
$sql = "SELECT * FROM student WHERE st_pin='$aid'";
$res1 = mysqli_query($al, $sql);
if (!mysqli_num_rows($res1) > 0) {
    header("location: ./../logout.php");
    exit; 
}  

// Handle password change
if (!empty($_POST)) {
    $current_password = mysqli_real_escape_string($al, $_POST['pass']);
    $new_password = mysqli_real_escape_string($al, $_POST['pass1']);

    // Check if old password matches
    $sql = "SELECT * FROM student WHERE st_pin='$aid' AND password='$current_password'";
    $result = mysqli_query($al, $sql);

    if (mysqli_num_rows($result) > 0) {   
        // Update password
        $update_query = "UPDATE student SET password='$new_password' WHERE st_pin='$aid'";
        if (mysqli_query($al, $update_query)) {
            echo "<script>alert('Password updated successfully!'); window.location.href='stlog.php';</script>";
        } else {
            echo "<script>alert('Error updating password!');</script>";
        }
    } else {
        echo "<script>alert('Incorrect Old Password!');</script>";
    }
}
?>
<!doctype html>
<html>
<head>
    <title>DLLB</title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="admin.css">
    <style>
        h2 {
            margin: 0 0 50px;
            height: 30px;
            font-size:30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>

<nav>
    <label class="logo"><a class="logo" href="stlog.php">Student Panel</a></label>
    <ul>
        <li><a class="active" href="stlog.php">Home</a></li>
        <li>
            <a href="student_view.php">Join Lab</a>
        </li>
        <li>
            <a href="#">Settings</a>
            <ul>
                <li><a href="Change_password.php">Change Password</a></li>
            </ul>
        </li>
        <li><a href="exit1.php">Logout</a></li>
    </ul>
</nav>

<div class="login">
    <h2>Change Password</h2>
    <form method="post">
        <div class="mydiv">
            <input type="text" required placeholder="Enter Student ID" value="<?php echo $aid ?>" disabled>
        </div>
        <div class="mydiv">
            <input type="password" name="pass" required placeholder="Enter Old PASSWORD">
            <input type="password" name="pass1" required placeholder="Enter New PASSWORD">
        </div>
        <button type="submit">
            <span></span><span></span><span></span><span></span>Submit
        </button>
    </form>
</div>

</body>
</html>
