<?php
function dbConnect()
{
    $hostname = "localhost";
    $username = "root";
    $userpass = "";
    $dbname = "test";
    $conn = mysqli_connect($hostname, $username, $userpass, $dbname);
    return $conn;
}
function registerus($data)
{
    $conn = dbConnect();
    $firstname = $data['firstname'];
    $lastname = $data['lastname'];
    $email = $data['email'];
    $password = $data['password'];


    if ($conn) {
        $sql = "insert into stud(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password')";
        $res = mysqli_query($conn, $sql);
        return $res;
    } else {
        echo "database not connected";
    }
}
function loginus($data)
{
    $conn = dbConnect();

    $email = $data['email'];
    $password = $data['password'];

    if ($conn) {
        $sql = "select * from stud where email='$email' and password='$password'";
        $res = mysqli_query($conn, $sql);
        return $res;
    } else {
        echo "database not connected";
    }
}
function uploadpro($data)
{
    $conn = dbConnect();
    $name = $data['name'];
    $gender = $data['gender'];
    $stream = $data['stream'];
    $target_dir = "product/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
    {

        $sql = "insert into pro(name,gender,stream,image) values('$name','$gender','$stream','$target_file')";
        $res = mysqli_query($conn, $sql);
        if ($res == 1) {
            echo "file uploded";
        } else {
            echo "not uploded";
        }
    }
    else{
        echo "sorry no more file available!!";
    }
}
function displayall()
{
    $conn = dbConnect(); 
    $sql = "select * from pro";
    $res = mysqli_query($conn, $sql);
    return $res;
}
function getpathbyid($pid)
{
    $conn = dbConnect();
    $sql = "select * from pro where pid='$pid'";
    $res = mysqli_query($conn, $sql);
    $data=mysqli_fetch_assoc($res);
    return $data['image']; 
   
}
function deletepro($pid)
{
    $imagepath=getpathbyid($pid);
    $conn = dbConnect();
    $sql = "delete from pro where pid='$pid'";
    $res = mysqli_query($conn, $sql);
    if($res == 1)
    {
        unlink($imagepath);
    }
    return $res;
}
function getdatabyid($pid)
{
    $conn = dbConnect();
    $sql = "select * from pro where pid='$pid'";
    $res = mysqli_query($conn, $sql);
    return $res;
   

}
function updatepro($data)
{
    $conn = dbConnect();
    $pid=$data['pid'];
    $name = $data['name'];
    $gender = $data['gender'];
    $stream = $data['stream'];
    $target_dir = "product/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    if(!empty($_FILES["image"]["name"]))
    {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
        {
    
            $sql = "update  pro set name='$name',gender='$gender',stream='$stream' ,image='$target_file'where pid='$pid'";
            $res= mysqli_query($conn,$sql);
            if($res == 1)
            {
                echo "data updated sucessfully";
            }
            else{
                echo "not inserted";
            }

        }
        else{
            echo "sorry no more file available!!";
        }
    }
    else{
        $sql = "update pro set name='$name',gender='$gender',stream='$stream' where pid='$pid'";
        $res = mysqli_query($conn, $sql);
        if ($res == 1) 
        {
            echo "file updated sucessfully";
        } else
        {
            echo "not uploded";
        }

    }
}

?>
