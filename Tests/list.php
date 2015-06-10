<?php
    
    include 'connect.php';

    $result = mysql_query("SELECT * FROM pdf ");
    while($row = mysql_fetch_array($result)){

?>

    <a href="pdf_test.php"><?php echo $row['pdf_name '];?></a>
    <br>

<?php
    }
?>
