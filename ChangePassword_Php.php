<?php
$passErr = "";
if ((isset($_SESSION["forgotpasswordeid"]) || isset($_SESSION["Emp_Id"])) && ($_SESSION["Security_Answer"] == 1)) {
    if (isset($_POST["submit"])) {
        if (isset($_SESSION["forgotpasswordeid"])) {
            $empid = $_SESSION["forgotpasswordeid"];
            $newpwd = $_POST["storepass"];
            $pass_update = "UPDATE login SET Password='$newpwd' WHERE Emp_id=$empid";
            $pass_update2 = "UPDATE login SET created_by =1 WHERE Emp_id=$empid";
            $pass_result = mysqli_query($conn, $pass_update);
            $pass_result1 = mysqli_query($conn, $pass_update2);
            header('Location:logout.php');
        } else {
            if (!isset($_SESSION["Emp_Id"]))
                header('Location:logout.php');
            else {
                $empid = $_SESSION["Emp_Id"];
                $newpwd = $_POST["storepass"];
                $pass_update = "UPDATE login SET Password='$newpwd' WHERE Emp_id=$empid";
                $pass_update2 = "UPDATE login SET created_by =1 WHERE Emp_id=$empid";
                $pass_result = mysqli_query($conn, $pass_update);
                $pass_result1 = mysqli_query($conn, $pass_update2);
                header('Location:logout.php');
            }
        }
    }
} else {
    header('Location:logout.php');
}