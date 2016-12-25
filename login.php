<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выбор места</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <div class="container">
        <a href="/" class="logoLink"><h1 class="logo">Детский оздоровительно-образовательный центр "Надежда"</h1></a>
        <br />
        
        <div class="form-block" id="login-moderator">
            <form action="php/auth.php">
                <input type="text" name="login" placeholder="Логин"><br /><br />
                <input type="password" name="pass" placeholder="Пароль"><br /><br />
                <button>Войти</button>
                <?php
                    if (isset($_COOKIE["login_cookie"])) {
                        echo "<button>Выйти</button>";
                    }
                ?>
            </form>
            
        </div>
        
    </div>
</body>
</html>