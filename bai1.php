<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
     $result = '';
if (isset($_POST['calculate']))
{
 
    $a = isset($_POST['a']) ? (float)trim($_POST['a']) : '';
    $b = isset($_POST['b']) ? (float)trim($_POST['b']) : '';
 
    if ($b == ''){
        $result = 'Bạn chưa nhập số b';
    }
    else if ($a == ''){
        $result = 'Bạn chua nhập số a';
    }
    else if ($a == 0){
        $result = 'Phuong trinh vo nghiem';
    }
    else {
        $result = -($b) / $a;
    }
}
?>
<h2>PHUONG TRINH</h2></h2>
<form action="" method="post">
  <label for="fname">A</label><br>
  <input type="text" name="a" value="" ><br>
  <label for="lname">B</label><br>
  <input type="text"  name="b" value="" ><br><br>
  <input type="submit" name="calculate" value="Tính">
</form>
<?php echo $result ?>
</body>
</html>