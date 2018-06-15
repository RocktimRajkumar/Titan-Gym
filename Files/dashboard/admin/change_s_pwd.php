<?php
// $a = $_SERVER['HTTP_REFERER'];

// if (strpos($a, '/e-has/') !== false) {
    
// } else {
//     header("Location: ./");
// }

?>
<?php
// include 'index.php';
require '../../include/db_conn.php';
$key          = rtrim($_POST['login_key']);
$pass         = rtrim($_POST['pwfield']);
$user_id_auth = rtrim($_POST['login_id']);
$passconfirm= rtrim($_POST['confirmfield']);
if($pass==$passconfirm){
if (isset($user_id_auth) && isset($pass) && isset($key)) {
    $sql    = "SELECT * FROM admin WHERE username='$user_id_auth'";
    $result = mysqli_query($con, $sql);
    $count  = mysqli_num_rows($result);
    if ($count == 1) {
        mysqli_query($con, "UPDATE admin SET pass_key='$pass',securekey='$key' WHERE username='$user_id_auth'");
        echo "<html><head><script>alert('Profile Updated ,Login Again ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
    } else {
        echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
        echo "error".mysqli_error($con);
        
    }
} else {
    echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
    echo "error".mysqli_error($con);
 
}
}
else{
    echo "<html><head><script>alert('Confirm Password Mismatch');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=change_pwd.php'>";
}
?>
<center>
<img src="loading.gif">
</center>