<?php
if(!(isset($_COOKIE['count']))){
    setcookie('count',2);
    $count = 2;
}else{
    $count = $_COOKIE[ 'count'];
}

if(isset($_GET['add']) && $_GET[ 'add'] == 1){
    setcookie('count',$count + 1);
}
if(isset($_GET['reduce']) && $_GET[ 'reduce'] == 1){
    setcookie('count',$count - 1);
}

?>
<html>
<body>
<?php 
echo '<a href="./index.php?add=1">Add</a>';
echo '<br />';
echo '<a href="./index.php?reduce=1">Reduce</a>';


echo '<form action="result.php" method="post"';
for($i = 0;$i < $count ;$i++){
    echo 'ID:'.' '.$i;
    echo '<input name="Nums[]">';
    echo '<br />';
    
}

echo '<input type="submit" name="submit"';



?>

</body>

</html>