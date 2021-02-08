
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
<h1>Добрый день!</h1>
<p>В Витебске и области действует 6-значная нумерация, начиная с цифр 2,3,6 и 9.<p> 
    <h2>Допустимые форматы ввода номеров:</h2>
    <ul>
    <li>80212259955</li>
    <li>+375212359955</li>
    <li>+375(212)659955</li>
    <li>+375(212)65-99-55</li>
    <li>+375-(212)-95-99-55</li>
    <li>959955</li>
    </ul>
<h2> Оставьте Ваш номер телефона</h2>
<div class="form">
    <form action="" method="post">
        <textarea rows="5" cols="30" name="name"></textarea><br>
        <input type="submit" value="OK"><br><br>
        <?php
    $str = $_POST["name"];
 if (preg_match('/^((80|\+375)212)?(2|3|6|9)\d{5}$|^\+375\(212\)(2|3|6|9)(\d{5}|\d-\d{2}-\d{2})$|^\+375-\(212\)-(2|3|6|9)(\d{3}|\d-\d{2}-\d{2})$/', $str)) {
        echo 'Ожидайте звонка';
    } else {
        echo 'Не правильно набран номер';
    }
    ?>
    </form>
    </div>
    
    <div class=gallery>
    <img src="images7.jpg" width="450px" height="300px" alt="">
    <img src="images2.jpg" awidth="450px" height="300px" lt="">
    <img src="images3.jpg" width="450px" height="300px" alt="">
    <img src="images8.jpg" width="450px" height="300px" alt="">
    </div>
</body>

</html>