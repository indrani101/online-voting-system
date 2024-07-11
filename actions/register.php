<?php
include('connect.php');

$=username$_post['username'];
$mobile=$_post['mobile'];
$password=$_post['password'];
$cpassword=$_post['cpassword'];
$image=$_post['photo']['name'];
$tmp_name=$_post['photo']['temp_name'];
$std=$_post['std'];



if($password!=$cpassword){
    echo '<script>
    alert("Passwords do not  match");
    window.location=../partials/registration.php";
    </script>';
}

else{
    move_upload_file($tmp_name,"../uploads/$image");
    $sql="insert into 'userdata' (username,mobile,pasword,photo,standard,
    status,votes) values ('$username','$mobile','$password','$image','$std',
    0,0)";

    $result=mysqli_qiery($con,$sql);

    if($result){
        echo '<script>
        alert("Registration Successfull");
        window.location"../";
        </script>';
    }else{
        die(mysqli_error($con));
    }

}
?>
