<?php
include("../configASL.php");

function downloadCSV($query) {
    global $al;

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=log_report.csv');

    $output = fopen('php://output', 'w');

    // Write column headers
    fputcsv($output, array('Sr.No', 'DATE', 'TIME', 'LAB NAME', 'BATCH', 'NAME', 'REG NO', 'COMPUTER NO'));

    $result = mysqli_query($al, $query);
    if (!$result) {
        die("Query Failed: " . mysqli_error($al));
    }

    $sr = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, array(
            $sr++,
            $row['date'],
            $row['time'],
            $row['lab_name'],
            $row['st_year'],
            $row['st_name'],
            $row['st_pin'],
            $row['com_no']
        ));
    }

    fclose($output);
    exit;
}

// Get query from URL parameter
if (isset($_GET['query'])) {
    $query = base64_decode($_GET['query']); // Decode base64 query for security
    downloadCSV($query);
} else {
    echo "No query provided!";
}
?>
