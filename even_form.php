<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Перевірка на парність</title>
</head>
<body>
    <h2>Завдання 1: Введіть число для перевірки парності</h2>

    <form method="GET">
        <label>Число: <input type="number" name="num" required></label>
        <button type="submit">Перевірити</button>
    </form>

    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        if (is_numeric($num)) {
            if ($num % 2 === 0) {
                echo "<p>Число $num — парне.</p>";
            } else {
                echo "<p>Число $num — непарне.</p>";
            }
        } else {
            echo "<p>Будь ласка, введіть коректне число.</p>";
        }
    }
    ?>
</body>
</html>
