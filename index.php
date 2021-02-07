
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vitebsk_tel</title>
    <link rel="stylesheet" href="style2656.css">
</head>

<body>
    <form action="" method="post">
        <textarea rows="20" cols="50" name="name"></textarea>
        <input type="submit" value="OK">
        <?php
    $str = $_POST["name"];
  
    
    //  if (preg_match('/^((80212)?)(2|3|6|9)(\d{5})$|^\+375(\(?)212(\)?)(-?)(2|3|6|9)\d(-?)\d{2}(-?)\d{2}$/', $str)) {
    //     echo 'Мы Вам перезвоним';
    // } else {
    //     echo 'нет такого номера';
    // }
 if (preg_match('/^(([80,+375]?(212)?))?(2|3|6|9)\d{5}$|^\+375\(212\)(2|3|6|9)\d{5}$|^\+375\(212\)-?(2|3|6|9)(\d{3}|\d-\d{2}-\d{2})$/', $str)) {
        echo 'Мы Вам перезвоним';
    } else {
        echo 'нет такого номера';
    }

    ?>
    </form>
   
</body>

</html>