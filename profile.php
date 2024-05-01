<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Колесников Б.А</title>
    <!-- Подключим фреймворк стилей и импорт файла со стилями-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="col-3 nav_logo"></div>
            <div class="col-9 nav_text">Info</div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
        </div>
        <div class="row">
            <div class="col-8"></div>  
            <div class="col-4"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Богдан Колесников, начинающий исследователь информационной безопасности. Интересующие области: Обратная разработка, бинарные уязвимости, криптография, компьютерная криминалистика.</h2>
            </div>
            <div class="col-4">
                <div class="row my_photo"></div>
                <div class="row"><p class="title_photo">Колесников Б.А.</p></div>    
            </div>
        </div>
    </div>
    <!-- Добавленные блоки -->
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h3>Я студент 1-го курса ИБТКС МТУСИ! </h3>
               <h3>Прохожу стажировку PT Start</h3>
            </div>    
        </div>
        <div class="row">
            <div class="col-4">
                <h5>Дорогу осилит идущий!</h5>
                <img class="img_size" src="image/img2.jpg" alt="my_photo2">
            </div>
            </div>
        </div>
    </div>
    <!--Кнопка-->
    <div class="container">
        <div class="row">
            <div class=" button_js col-12">
                <button id="myButton">Click me</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <dib class="col-12">
                <form method="POST" action="profile.php">
                    <input type="text" class="form" type="text" name="title" placeholder="Заголовок вашего поста">
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста ..."></textarea>
                    <button type="submit" class="btn_red" name="submit">Сохранить пост!</button>
                </form>
<           </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
</html>

<?php
require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first_db');

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die("Не удалось добавить пост");
}
?>