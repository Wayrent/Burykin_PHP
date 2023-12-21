<?php
include('./includes/connect.php');

// Получение данных из формы
$title = $_POST['title'];
$content = $_POST['content'];

// SQL- Запрос для вставки данных в форму
$sql = "INSERT INTO news (title, content) VALUES ('$title', '$content')";

// Проверка успешности выполнения запроса
if ($conn->query($sql) === TRUE) {
    echo "Новость успешно сохранена";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения
$conn->close();
?>