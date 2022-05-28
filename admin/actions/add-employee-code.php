<?php session_start();
$con = mysqli_connect("localhost", "root", "", "project");

if (isset($_POST['submit'])) {
    //getting post values
    $EmpID = $_POST['EmpID'];
    $FullName = $_POST['FullName'];
    $MobileNumber = $_POST['MobileNumber'];
    // $RegDate=$_POST['RegDate'];
    $query = "insert into employee(EmpID,FullName,MobileNumber) values('$EmpID','$FullName','$MobileNumber')";
    $result = mysqli_query($con, $query);
    if ($result) {
        // echo '<script>alert("Employee created successfully.")</script>';
        // echo "<script>window.location.href='Add_employee.php'</script>";
        $_SESSION['stat'] = "Employee Details Entered";
        $_SESSION['status_code'] = "success";
        header('Location:../Add_employee.php');
    } else {
        // echo "<script>alert('Something went wrong. Please try again.');</script>";
        // echo "<script>window.location.href='Add_employee.php'</script>";
        $_SESSION['stat'] = "Error";
        $_SESSION['status_code'] = "error";
        header('Location:../Add_employee.php');
    }
}
