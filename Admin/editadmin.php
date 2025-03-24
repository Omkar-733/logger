<?php
include("../configASL.php");


include("update.php");
LabStatus($al);
session_start();
if (isset($_SESSION["lab"])) {
    header("location: ./Login.php");
}
$user = $_SESSION['aid'];
$sql = "SELECT * FROM `admin` WHERE `aid`='$user';";
$res1 = mysqli_query($al, $sql);
if (!mysqli_num_rows($res1) > 0) {
    header("location: ../logout.php");
    exit;
}

if (!empty($_POST)) {
    $aid = ($_SESSION['aid']);
    $pass = ($_POST['pass']);
    $passn = ($_POST['pass1']);
    $sql = mysqli_query($al, "SELECT * FROM admin WHERE password='$pass'");

    if (mysqli_num_rows($sql) > 0) {
        $u = mysqli_query($al, "UPDATE admin SET password='$passn' WHERE aid='$aid'");
        while ($row = mysqli_fetch_assoc($sql)) {
            header("location:student_view.php");
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("Incorrect Admin ID or Password");
        </script>
        <?php
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
            font-size: 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .hidden {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
    <script>
        // Function to check URL parameter and activate corresponding div
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const formId = urlParams.get('id'); // Get the 'id' parameter from the URL
            
            // Hide both forms initially
            document.getElementById('changePasswordForm').classList.add('hidden');
            document.getElementById('addFacultyForm').classList.add('hidden');
            
            // Show the corresponding form based on 'id' parameter in URL
            if (formId === 'changePassword') {
                document.getElementById('changePasswordForm').classList.remove('hidden');
            } else if (formId === 'addFaculty') {
                document.getElementById('addFacultyForm').classList.remove('hidden');
            }
        };
    </script>
</head>

<body>
    <!-- Navigation Bar with Toggle Link -->
    <nav>
        <label class="logo">Edit Panel</label>
        <ul>
            <li><a class="active" href="home.php">Home</a></li>
            <li><a href="search.php">Search</a></li>
            <li><a href="tech.php">Assign Lab</a></li>
            <li>
                <a href="#">Student View</a>
                <ul>
                    <li><a href="reg.php">Add Student</a></li>
                    <li><a href="viewst.php">Students</a></li>
                </ul>
            </li>
            <li><a href="feedback.php">Feedback</a></li>
            <li>
                <a href="#">Settings</a>
                <ul>
                    <li><a href="editadmin.php?id=addFaculty">Add Faculty</a></li>
                    <li><a href="editadmin.php?id=changePassword">Change Password</a></li>
                </ul>
            </li>
            <li><a href="exit1.php">Logout</a></li>
        </ul>
    </nav>

    <!-- Change Password Form -->
    <div class="login hidden" id="changePasswordForm">
        <h2>Change Password</h2>
        <form method="post" action="">
            <div class="mydiv">
                <input type="text" name="aid" required="" placeholder="Enter Admin Name" style="color:aqua;" value="<?php echo $user ?>" disabled>
            </div>
            <div class="mydiv">
                <input type="password" name="pass" required="" placeholder="Enter Old PASSWORD" style="color:aqua;">
                <input type="password" name="pass1" required="" placeholder="Enter New PASSWORD" style="color:aqua;">
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>
    </div>

    <!-- Add Faculty Form (initially hidden) -->
    <div class="login hidden" id="addFacultyForm">
        <h2>Add Faculty</h2>
        <form method="post" action="user.php" onsubmit="updateNavbarLink()">
            <div class="mydiv">
                <input type="text" name="aid" required="" placeholder="Enter Faculty Name" style="color:aqua;">
            </div>
            <div class="mydiv">
                <input type="password" name="pass" required="" placeholder="Enter PASSWORD" style="color:aqua;">
                <input type="password" name="pass1" required="" placeholder="Enter Confirm PASSWORD" style="color:aqua;">
            </div>
            <button type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
            </button>
        </form>
    </div>

</body>

</html>
