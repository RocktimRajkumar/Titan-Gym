
<?php
include './include/db_conn.php';

$user_id_auth = ltrim($_POST['user_id_auth']);
$user_id_auth = rtrim($user_id_auth);

$pass_key = ltrim($_POST['pass_key']);
$pass_key = rtrim($_POST['pass_key']);

$user_id_auth = stripslashes($user_id_auth);
$pass_key     = stripslashes($pass_key);



if($pass_key=="" &&  $user_id_auth==""){
   echo "<head><script>alert('Username and Password can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  
}
else if($pass_key=="" ){
   echo "<head><script>alert('Password can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  
}
else if($user_id_auth=="" ){
   echo "<head><script>alert('Username can be empty');</script></head></html>";
               echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  
}

else{

$user_id_auth = mysqli_real_escape_string($con, $user_id_auth);
$pass_key     = mysqli_real_escape_string($con, $pass_key);
$sql          = "SELECT * FROM admin WHERE username='$user_id_auth' and pass_key='$pass_key'";
$result       = mysqli_query($con, $sql);
$count        = mysqli_num_rows($result);
if ($count == 1) {
    $row = mysqli_fetch_assoc($result);
    session_start();
    // store session data
    $_SESSION['user_data']  = $user_id_auth;
    $_SESSION['logged']     = "start";
    // $_SESSION['auth_level'] = $row['level'];
    $_SESSION['full_name']  = $user_id_auth;
    $_SESSION['username']=$row['Full_name'];
    // $auth_l_x               = $_SESSION['auth_level'];
    // if ($auth_l_x == 5) {
        header("location: ./dashboard/admin/");
    // } else if ($auth_l_x == 4) {
    //     header("location: ../dashboard/cashier/");
    // } else if ($auth_l_x == 3) {
    //     header("location: ../dashboard/member/");        
    // } else {
    //     header("location: ../login/");
    // }
} else {
    include 'index.php';
    echo "<html><head><script>alert('Username OR Password is Invalid');</script></head></html>";
}
}
?>
