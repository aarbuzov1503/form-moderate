<?php
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "text";
$password = "_text_pass";
$dbname = "_text";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение данных из формы
$name = $_POST["name"];
$description = $_POST["description"];
$price = $_POST["price"];
$dateRange = $_POST["date_range"];
$dateTime = $_POST["date_time"];
$fullname = $_POST["fullname"];

// Проверка наличия загруженных файлов
if(isset($_FILES['image1']) && $_FILES['image1']['error'] === UPLOAD_ERR_OK) {
    $image1Name = $_FILES['image1']['name'];
    $image1TmpName = $_FILES['image1']['tmp_name'];
    $image1Path = "images/" . $image1Name;
    move_uploaded_file($image1TmpName, $image1Path);
} else {
    $image1Path = ""; // пустая строка, если изображение не было загружено
}

if(isset($_FILES['image2']) && $_FILES['image2']['error'] === UPLOAD_ERR_OK) {
    $image2Name = $_FILES['image2']['name'];
    $image2TmpName = $_FILES['image2']['tmp_name'];
    $image2Path = "images/" . $image2Name;
    move_uploaded_file($image2TmpName, $image2Path);
} else {
    $image2Path = ""; // пустая строка, если изображение не было загружено
}

// Вставка данных в таблицу базы данных
$sql = "INSERT INTO your_table_name (name, description, price, date_range, date_time, fullname, image1, image2)
        VALUES ('$name', '$description', '$price', '$dateRange', '$dateTime', '$fullname', '$image1Path', '$image2Path')";

if ($conn->query($sql) === TRUE) {
    echo "Форма успешно доставлена, эту вкладку можно закрыть";
    
} else {
    echo "Ошибка при добавлении данных сообщите администратору: " . $conn->error;
}

$conn->close();
?>