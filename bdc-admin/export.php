<?php
$time = date_create()->format('Y-m-d-H') . ".csv";
export($time);
function export($time)
{
    include 'dbc.php';
    $sql = "SELECT * FROM user_details;";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $file = fopen($time, 'w');
        fwrite($file, "Name");
        fwrite($file, ",");
        fwrite($file, "Email");
        fwrite($file, ",");
        fwrite($file, "Registration");
        fwrite($file, ",");
        fwrite($file, "Phone");
        fwrite($file, ",");
        fwrite($file, "BloodGroup");
        fwrite($file, ",");
        fwrite($file, "Age");
        fwrite($file, "\n");
    while($row = mysqli_fetch_assoc($result))
    {
        fwrite($file, "$row[Name]");
        fwrite($file, ",");
        fwrite($file, "$row[Email]");
        fwrite($file, ",");
        fwrite($file, "$row[Registration]");
        fwrite($file, ",");
        fwrite($file, "$row[Phone]");
        fwrite($file, ",");
        fwrite($file, "$row[BloodGroup]");
        fwrite($file, ",");
        fwrite($file, "$row[Age]");
        fwrite($file, "\n");
    }
   fclose($file);       
}
//echo $time;
echo "<script>window.open('https://bdcmuj.in/bdc-admin/";
echo $time;
echo "', '_blank');</script>";
echo "<script> window.location.replace('https://bdcmuj.in/bdc-admin/usermanagement.php');</script>";
//header("Location: usermanagement.php");
?>