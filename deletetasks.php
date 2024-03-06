
<?php include('sessions.php');?>

<?php


include('database.php');


if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="delete from tasks where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header("location: viewtasks.php");
       // echo "data deleted successfull";

    }else{
        die(mysqli_error($con));

    }

}

?>
