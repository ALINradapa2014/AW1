<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
<?php
    isset( $_POST['number'] ) ? $number = $_POST['number'] : $number = "";
    if( !empty( $number ) ) {
        for( $i=1; $i<=12; $i++ ) {
            echo "<br/>{$number} x {$i} = ".( $number * $i );
        }
    }
?>
    <b>โปรแกรมแม่สูตรคูณ</b>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
    <input type="number" name="number">
    <input type="submit" value="แสดงแม่สูตรคูณ">
    </form>
</body>
</html>>