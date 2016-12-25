<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    

    
</head>
<body>
    <div class="container">
        <a href="/" class="logoLink"><h1 class="logo">Детский оздоровительно-образовательный центр "Надежда"</h1></a>
        <nav class="menu-block">
            <ul>
                <li class="menu-item">
                    <a href="registration.php">Записаться на мероприятие</a>
                </li>
                <li class="menu-item">
                    <?php
                        if (isset($_COOKIE["login_cookie"])) {
                            echo "<a id='moderLink' href='registration.php'>Для руководителей мероприятий</a>";
                        } else {
                            echo "<a id='moderLink' href='login.php'>Для руководителей мероприятий</a>";
                        }
                    ?>
                </li>
                <!--<li class="menu-item">
                   
                    <?php
                        /*if (isset($_COOKIE["login_cookie"])) {
                            echo "<a id='moderLink' href='registration.php'>Для администратора</a>";
                        } else {
                            echo "<a id='moderLink' href='login.php'>Для администратора</a>";
                        }*/
                    ?>
                </li>-->
                <li class="menu-item">
                   
                    <form action="php/auth.php">
                        <?php
                            if (isset($_COOKIE["login_cookie"])) {
                                echo "<button>Выйти</button>";
                            }
                        ?>
                    </form>
                </li>
            </ul>
        </nav>
        <img src="img/bf1b5518d9_201606011331.jpeg" style="margin-left: 150px; margin-top: 50px;" alt="">
        
    </div>
      
</body>
</html>