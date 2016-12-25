<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    
    
    
</head>
<body>
    <div class="container">
        <a href="/" class="logoLink"><h1 class="logo">Детский оздоровительно-образовательный центр "Надежда"</h1></a>
        <br />
        
        
        <ul>
                <li class="menu-item">
                    <?php
                        echo "<a href='place.php?start_date_id=" . $_GET['start_date_id'] . "&start_event_id=" . $_GET['start_event_id'] . "'>Назад</a>"
                    ?>
                </li>
                <li class="menu-item">
                    <a id="moderLink" href="/">На главную</a>
                </li>
        </ul>
        <br />
        
        <?php 
        
        $start_place_id = $_GET['start_place_id'];
        $start_place_id = trim($start_place_id);
        $start_place_id = stripslashes($start_place_id);
        $start_place_id = htmlspecialchars($start_place_id);
        
        ?>
        
        <!--<div class="form-block" id="identification">-->
            <form action="php/registration_to_db.php">
                <label>Записаться:</label><br /><br />
                <?php echo "<input name='place_id' type='hidden' value='" . $start_place_id . "'>"; ?>
                <input name="name" required type="text" placeholder="Имя"><br /><br />
                <input name="surname" required type="text" placeholder="Фамилия"><br /><br />
                <select name="squad" id="squad">
                    <option>Выберите</option> 
                    <option value="1 отряд">1 отряд</option>
                    <option value="2 отряд">2 отряд</option>
                    <option value="3 отряд">3 отряд</option>
                </select>
                <button>Отправить</button>
            </form>
        <!--</div>-->
    </div>
</body>
</html>