<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sklep";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Połączenie nieudane: " . $conn->connect_error);
}

// Проверка данных из формы
if(isset($_POST["title"]) && isset($_POST["price"])) {
    $title = $_POST["title"];
    $price = $_POST["price"];

    // Подготовка SQL-запроса
    $sql = "INSERT INTO products (name, price) VALUES ('$title', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Nowy produkt został dodany";
        
        // Перенаправление на другую страницу
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Brak danych z formularza";
}

// Закрытие соединения с базой данных
$conn->close();
?>
