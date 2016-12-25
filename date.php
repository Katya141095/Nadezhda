<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Выбор мероприятия</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    
</head>
<body>
    <div class="container">
        <a href="/" class="logoLink"><h1 class="logo">Детский оздоровительно-образовательный центр "Надежда"</h1></a>
        <br />
        
        <ul>
                <li class="menu-item">
                    <a href="registration.php">Назад</a>
                </li>
                <li class="menu-item">
                    <a id="moderLink" href="/">На главную</a>
                </li>
                <li class="menu-item">
                    <?php
                        if (isset($_COOKIE["login_cookie"])) {
                            echo "<a id='moderLink' href='event_form.php?start_date_id=" . $_GET['start_date_id'] ."'>Добавить мероприятие</a>";
                        };
                    ?>
                </li>
        </ul>
        <br />
        <?php 
            require ('php/conect.php');
            $db_table_to_show_parant = 'all_dates';
            $db_table_to_show_child = 'all_events';
        
            // подключаемся к базе данных
            mysql_select_db($db_name, $connect_to_db)
            or die("Could not select DB: " . mysql_error());
        
            // выбираем все значения из таблицы "all_dates", соответствующие условию
            $cons_result = mysql_query("select * from all_dates, all_events WHERE all_dates.date_id = all_events.date_id")
            or die(mysql_error());
            
            while($date = mysql_fetch_assoc($cons_result))
            {
                $existing_all[] = array($date);
            };
            
            //asort($existing_events);
        
            echo "<div class='font-fix'>";    
        
            foreach($existing_all as $value)
            {
                foreach($value as $val) 
                {
                    if ($val['date_id'] == $_GET['start_date_id']) {
                        echo "<a href='place.php?start_date_id=" . $_GET['start_date_id'] . "&start_event_id=" . $val['event_id'] . "'><div class='date'>" . $val['time'] ." | " . $val['event'] ." | " . $val['location'] . "</div></a>";
                    }
                };
            };
        
            echo "</div>";    
            
        ?>
    </div>
</body>
</html>