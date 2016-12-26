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
        <a href="/" class="logoLink"><h1 class="logo">Детский оздоравительно-образовательный центр "Надежда"</h1></a>
        <br />
        
        
        <ul>
                <li class="menu-item">
                    <?php
                        echo "<a href='/registration.php'>Назад</a>"
                    ?>
                </li>
                <li class="menu-item">
                    <a id="moderLink" href="/">На главную</a>
                </li>
        </ul>
        <br />
        
        <form action="php/create_event.php">
            <label>Новое мероприятие:</label><br /><br />
            <?php echo "<input name='start_date' value='" . $_GET['start_date_id'] ."' type='hidden'>"; ?>
            <input name="new_event" required type="text" placeholder="Название"><br /><br />
            <input name="new_time" required type="text" placeholder="HH:MM:SS"><br /><br />
            <input name="new_location" required type="text" placeholder="Локация"><br /><br />
            <input name="new_num_places" required type="number" placeholder="Кол-во мест"><br /><br />
            
            <button>Добавить дату</button>
        </form>
    </div>
</body>
</html>