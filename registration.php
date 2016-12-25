<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выберите день мероприятия</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <div class="container">
        <a href="/" class="logoLink"><h1 class="logo">Детский оздоровительно-образовательный центр "Надежда"</h1></a>
        <br />
        <ul>
                <li class="menu-item">
                    <a href="/">Назад</a>
                </li>
                <li class="menu-item">
                    <a id="moderLink" href="/">На главную</a>
                </li>
                <li class="menu-item">
                    <?php
                        if (isset($_COOKIE["login_cookie"])) {
                            echo "<a id='moderLink' href='date_form.php'>Добавить дату</a>";
                        };
                    ?>
                </li>
        </ul>
        <br />
        <?php 
            require ('php/conect.php');
            $db_table_to_show = 'all_dates';
        
            // подключаемся к базе данных
            mysql_select_db($db_name, $connect_to_db)
            or die("Could not select DB: " . mysql_error());
            
            // выбираем все значения из таблицы "all_dates"
            $qr_result = mysql_query("select * from " . $db_table_to_show)
            or die(mysql_error());
            
            while($data = mysql_fetch_assoc($qr_result))
            {
                $existing_all[] = array($data);
            };
        
            //asort($existing_all['date']);
            echo "<div class='font-fix'>";    
        
            foreach($existing_all as $value)
            {
                foreach($value as $val) 
                {
                    echo "<a href='date.php?start_date_id=" . $val['date_id'] . "'><div class='date'>" . $val['date'] . "</div></a>";
                };
            };
        
            echo "</div>";    
            
        ?>
    </div>
</body>
</html>
