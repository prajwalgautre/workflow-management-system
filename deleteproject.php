
<?php include('sessions.php');?>

<?php


include('database.php');


if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $sql="delete from addprojects where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        header("location: viewprojects.php");
       // echo "data deleted successfull";

    }else{
        die(mysqli_error($con));

    }

}

?>
