<?php
        include_once('db.php');
        $username = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['passsword'];
        if(mysql_query("INSERT INTO user VALUES('$username', '$email', '$password')"))
         echo "Successfully Inserted";
        else
        echo "Insertion Failed";
?>