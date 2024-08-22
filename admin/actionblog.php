<?php
if(isset($_POST['create']))
{
    $date = $_POST['date'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $photopath = $_POST['photopath'];

    //upload image
    $target_dir = "../uploads/";
    $filename = time().$_FILES['photopath']['name'];
    $tmpname = $_FILES['photopath']['tmp_name'];
    //move uploaded file
    move_uploaded_file($tmpname, $target_dir.$filename);
    $photopath = $filename;
    
    //query
    $qry = "INSERT INTO blogs (blog_date, title, description, photopath) VALUES ('$date', '$title', '$description', '$photopath')";

    //execute query
    include '../dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include '../closeconnection.php';
    if($result)
    {
        header('Location: blogs.php');
    }
    else
    {
        echo "Failed to create blog";
    }
}