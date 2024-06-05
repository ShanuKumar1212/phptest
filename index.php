<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input name="user" type="text">
        <input name="password" type="text">
        <button name="submit">Submit</button>
    </form>
    <?php
    $host='localhost';
    $user ='root';
    $passw='';
    $db='test';
    $conn=new mysqli($host,$user,$passw,$db);
    if ($conn)
    {
        if(isset($_GET['submit']))
        {
           $user=$_GET['user'];
           $pass=$_GET['password'];
           $query="select * from user where name='$user' and password='$pass'";
           $result=$conn->query($query);
           if ($result->num_rows > 0)
           {
            echo "<script>alert('login success');</script>";
           }
           else{
            echo "<script>alert('failure');</script>";
           }
        }
    }
    else{
        echo "<script>alert('not_found');</script>";
    }
    ?>
</body>
</html>