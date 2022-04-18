<?php
    $username=$_post['username'];
    $password=$_post['password'];
    //database coonection
    $conn=new msqli('localhost','root','','admin');
    if($conn->connect_error){
        die('connection failed :'.$cnn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into admin values(username,password) values(?,?)");
        $stmt->bind_param("ss",$username,$password);
        $stmt->execute();
        echo "thanks for login...........";
        $stmt->close();
        $conn->close();
        
    }
?>
