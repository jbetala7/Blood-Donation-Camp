<?php
$username = 'globalautomotive_bdc';
$pass = 'liNb*w?bds.j';
$dbname = 'globalautomotive_bdc';
$servername = 'localhost';
$conn = mysqli_connect($servername,$username,$pass,$dbname);
if(!$conn)
{
    echo "Could Not Connect To The Database". myslqi_error($conn);
}
?>