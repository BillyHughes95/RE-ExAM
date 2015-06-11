<?php
session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    if (isset($_POST['register'])) {
        if (empty($_POST['regusername']) || empty($_POST['regpassword'])) {
        $error = "Username or Password have not been entered";
    }else {
    $regusername=$_POST['regusername'];
    $regpassword=$_POST['regpassword'];
    $connection = mysql_connect("localhost", "21330276", "mysqluser");
    // To protect MySQL injection for Security purpose
    $regusername = stripslashes($regusername);
    $regpassword = stripslashes($regpassword);
    $regusername = mysql_real_escape_string($regusername);
    $regpassword = mysql_real_escape_string($regpassword);
            
            $db = mysql_select_db("db2_21330276", $connection);
    // SQL query to fetch information of registerd users and finds user match.
            $query = mysql_query("INSERT INTO login VALUES('', '$regusername', '$regpassword')");
            
            
            
            
            mysql_close($connection); // Closing Connection
        }
    }
?>