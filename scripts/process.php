<?php
$action = empty($_POST['action']) ? false : $_POST['action'];
switch ($action) {
    case 'emailEntry':
        $firstName = $POST['firstName'];
        $lastName = $POST['lastName'];
        $email = $POST['email'];
        $birthday = $POST['birthday'];
        $string = $firstName . ", " . $lastName . ", " . $email . ", " . $birthday;
        
        // how to connect to MySQL from PHP taken from: https://www.w3schools.com/php/php_mysql_connect.asp
        $servername = "localhost";
        $username = "ec2-user";
        $password = "password";
        $database = "CS2830";
        
        $connection = new mysqli($servername, $username, $password, $database);
        
        if ($connection->connect-error) {
            die("Connection failed: " . $connection->connect_error);
        }
        
        $sql = "INSERT INTO emailList (firstName, lastName, email, birthday) VALUES (" . $string . ");";
        
        if ($connection->query($sql) === TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }
        
        $connection->close();
        break;
    case 'login':
        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $password = empty($_POST['password']) ? '' : $_POST['password'];
        if ($username == 'test' && $password == 'pass'){
            setcookie('userID', $username, time() + (24*3600), "/");
        }
        else {
            setcookie('userID', 'invalid', time() + (24*3600), "/");
        }
        
        break;
    case 'logout':
        setcookie('userID', '', 1, "/");
        break;
    default:
        break;
}
?>