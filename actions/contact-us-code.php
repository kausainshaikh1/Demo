<?php session_start();

$con = mysqli_connect("localhost", "root", "", "project");

if (isset($_POST['submit'])) {
    //getting post values
    $customer_name = $_POST['customer_name'];
    $Email_ID = $_POST['Email_ID'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // $RegDate=$_POST['RegDate'];
    $query = "insert into contact(customer_name,Email_ID,subject,message) values('$customer_name','$Email_ID','$subject','$message')";
    $result = mysqli_query($con, $query);
    if ($result) {
        // echo '<script>alert("Employee created successfully.")</script>';
        // echo "<script>window.location.href='Add_employee.php'</script>";
        $_SESSION['stat'] = "Message Sent Successfully";
        $_SESSION['status_code'] = "success";
        header('Location:../contact.php');
    } else {
        // echo "<script>alert('Something went wrong. Please try again.');</script>";
        // echo "<script>window.location.href='contact.php'</script>";
        $_SESSION['stat'] = "Error";
        $_SESSION['status_code'] = "error";
        header('Location:../contact.php');
    }
}
