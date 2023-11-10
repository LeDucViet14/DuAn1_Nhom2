<?php
$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'duan1';
$con = mysqli_connect($hname, $uname, $pass, $db);

if (!$con) {
    die("Cannot Connect to Database" . mysqli_connect_error());
}

function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = htmlspecialchars($value);
    }
    return $data;
}


function select($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        if (mysqli_stmt_bind_param($stmt, $datatypes, ...$values)) {
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                return $result;
            } else {
                die("Query cannot be executed - Select");
            }
        } else {
            die("Binding parameters failed");
        }
    } else {
        die("Query preparation failed - Select");
    }
}
