<?php
session_start();
include('connect.php')
$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;
$gid=$_POST['groupid'];
$uid=$_SESSION['id'];
$updatevotes=mysqli_query($con,"update'userdata' set votes='$totalvotes'where id='$gid'");
$updatestatus=musqli_query($con,"update 'userdata' set status=1 where id='$uid'");
if($updatevotes and $updatestatus)
{
$updatestatus=mysqli_query($con,"Select username,photo,votes,id from 'userdata' where standard='group'");
$group=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
$_SESSION['groups']=$groups;
$_SESSION['status']=1;
echo '<script>
alert("Voting successful");
window.location="../partials/dashboard.php";
</script>'
}
else{
    echo '<script>
    alert("Technical error !! vote after sometime");
    window.location="../partials/dashboard.php";
    </script>'
}