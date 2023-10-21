<?php
session_start();

if (isset($_POST['who'])) {
    // Пользователь отправил данные в форме
    if (isset($_POST['pass']) && $_POST['pass'] == 'php123') {
        // Введен правильный пароль, перенаправляем на игру
        $_SESSION['who'] = $_POST['who'];
        header('Location: game.php');
        return;
    } else {
        // Неправильный пароль
        $error = "Incorrect password";
    }
}

if (isset($_SESSION['who'])) {
    // Пользователь уже вошел в систему
    $who = $_SESSION['who'];

    if (isset($_POST['human'])) {
        // Пользователь выбрал опцию и хочет играть
        $human = $_POST['human'];
        $computer = rand(0, 2);
        // Реализуйте игру и вывод результатов
    }
} else {
    // Пользователь не вошел в систему, отобразите форму входа
    $who = '';
    $error = '';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>7884526f</title>
    <!-- Ваш код здесь -->
</head>
<body>
    <h1>Welcome to Rock Paper Scissors</h1>
    <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    if (isset($_SESSION['who'])) {
        // Пользователь уже вошел в систему, отображаем форму игры
        echo "<form method='post'>
            <label for='who'>User Name</label>
            <input type='text' name='who' id='who' value='$who' size='40'><br>
            <select name='human'>
                <option value='0'>Rock</option>
                <option value='1'>Paper</option>
                <option value='2'>Scissors</option>
                <option value='3'>Test</option>
            </select>
            <input type='submit' value='Play'>
            <a href='?logout=1'>Logout</a>
        </form>";
    } else {
        // Пользователь не вошел в систему, отображаем форму входа
        echo "<form method='post'>
            <label for='who'>User Name</label>
            <input type='text' name='who' id='who' value='$who' size='40'><br>
            <label for='pass'>Password</label>
            <input type='password' name='pass' id='pass' size='40'><br>
            <input type='submit' value='Log In'>
        </form>";
    }
    ?>
</body>
</html>
