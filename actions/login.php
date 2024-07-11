<?php
session_start();
include('connect.php');
$username=$_post[username];
$mobile=$_post['mobile'];
$password=$_post['password'];
$std=$_std['std'];

$sql="Select * from 'userdata' where username='$username' and mobile='$mobile' and password='$password' and standard='$std'";
$result=mysquli_query($con,$sql);
if(mysqli_num_rows($result>0)
{
    $group=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
    $_SESSION['groups']=$groups;
    
}
$data=mysqli_fetch_array($result);
$_SESSION['id']=$data['id'];
$_SESSION['status']=$data['status'];
$_SESSION['data']=$data;
echo'<script>
window.location="../partials/dashboard.ph
</script>'
