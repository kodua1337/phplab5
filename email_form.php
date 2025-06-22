<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Перевірка email</title>
</head>
<body>
    <h2>Завдання 2: Введіть email для перевірки</h2>

    <form method="POST">
        <label>Email: <input type="email" name="email" required></label>
        <button type="submit">Перевірити</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email'])) {
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Пошта '$email' має коректний формат.</p>";
        } else {
            echo "<p>Пошта '$email' має некоректний формат!</p>";
        }
    }
    ?>
</body>
</html>
