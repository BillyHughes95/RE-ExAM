<?php
   
   include 'session.php';
   include 'connect.php';
    

    $result = mysql_query("SELECT * FROM pdf ");
    while($row = mysql_fetch_array($result)){
    
?>
    
    <a href='http://intweb.bucks.ac.uk/~21330276/RE-ExAM/Tests/pdf_test.php?essay=<?php echo $row['pdf_file']?>'><?php echo $row['pdf_name'];?></a>
    <br>
    
<?php
    }
?>
