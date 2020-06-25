<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$db_host = "127.0.0.1:3307";
$db_user = "root";
$db_password = "0000";
$db_name = "smartfarming";

/* Attempt to connect to MySQL database */
$link = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check connection
if($link->connect_errno){
    debug_to_console("Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error);
    exit;
}
debug_to_console($link->host_info . "\n");

// Show echo string in Browser Console log
function debug_to_console($data) {
    echo "<script>console.log('Debug Objects: " . $data. "' );</script>";
}

$query_distinct_class = "SELECT DISTINCT class FROM job_list";

if ($result_distinct_class = mysqli_query($link, $query_distinct_class)) {
    if(mysqli_num_rows($result_distinct_class) > 0) {
        echo "<table>";
            echo "<tr>";
            echo "<th>name</th>";
                echo "<th>class</th>";
                echo "<th>method</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result_distinct_class)){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['class'] . "</td>";
                echo "<td>" . $row['detail'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result_distinct_class);
    } else {
        echo "No records matching your query were found.";
    }
}
else {
    echo "ERROR: Could not able to execute $query_distinct_class. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
