<?php
$servername = "localhost";  
$username = "root";         
$password = "";             
$dbname = "form_data";      

// Подключение к базе
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Ошибка подключения: " . $conn->connect_error]));
}

// Проверяем, отправлены ли данные
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['name_first_name'] ?? null;
    $last_name = $_POST['name_last_name'] ?? null;
    $email = $_POST['email'] ?? null;
    $country = $_POST['country'] ?? null;

    if (!$first_name || !$last_name || !$email || !$country) {
        die(json_encode(["status" => "error", "message" => "Все поля должны быть заполнены!"]));
    }

    // SQL-запрос
    $sql = "INSERT INTO users (first_name, last_name, email, country) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die(json_encode(["status" => "error", "message" => "Ошибка запроса: " . $conn->error]));
    }

    $stmt->bind_param("ssss", $first_name, $last_name, $email, $country);
    if ($stmt->execute()) {
        echo json_encode(["status" => "success"]); // Успешный ответ
    } else {
        echo json_encode(["status" => "error", "message" => "Ошибка выполнения запроса"]);
    }

    $stmt->close();
}

$conn->close();
?>
