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
        
        <ul>
                <li class="menu-item">
                    <?php
                        echo "<a href='date.php?start_date_id=" . $_GET['start_date_id'] . "'>Назад</a>"
                    ?>
                </li>
                <li class="menu-item">
                    <a id="moderLink" href="/">На главную</a>
                </li>
        </ul>
        
        <br />
        <?php 
            require ('php/conect.php');
            $db_table_to_show_parant = 'all_events';
            $db_table_to_show_child = 'all_places';
        
            // подключаемся к базе данных
            mysql_select_db($db_name, $connect_to_db)
            or die("Could not select DB: " . mysql_error());
        
            // выбираем все значения из таблицы "all_dates", соответствующие условию
            $cons_result = mysql_query("select * from all_events, all_places WHERE all_events.event_id = all_places.event_id")
            or die(mysql_error());
        
            while($date = mysql_fetch_assoc($cons_result))
            {
                $existing_all[] = array($date);
            };
        
            //asort($existing_events);
            
            echo "<div class='font-fix'>";   
                    
            if ($_COOKIE["login_cookie"] == 4 || $_COOKIE["login_cookie"] == 7) {
                foreach($existing_all as $value)
                {
                    foreach($value as $val) 
                    {
                        if (($val['event_id'] == $_GET['start_event_id']) & !(empty($val['name']))) {
                            echo "<div class='date'>Место " . $val['num'] . " | " . $val['name'] . " " . $val['surname'] . " | " . $val['squad'] . " 
                                    <ul style='float: right;'>
                                        <li class='menu-item'>
                   
                                            <form action='php/delete_child.php'>
                                                <input type='hidden' name='start_date_id' value='" . $_GET['start_date_id'] . "'>
                                                <input type='hidden' name='start_event_id' value='" . $val['event_id'] . "'>
                                                <input type='hidden' name='start_place_id' value='" . $val['place_id'] . "'>
                                                <button>Удалить</button>
                                            </form>
                                        </li>
                                    </ul>
                            </div>";
                        } elseif (($val['event_id'] == $_GET['start_event_id']) &  (empty($val['name']))) {
                            echo "<div class='date'>Место " . $val['num'] . " | не занято</div>";
                        } else {
                            continue;
                        };
                    };
                };
            } else {
                foreach($existing_all as $value)
                {
                    foreach($value as $val) 
                    {
                        if (($val['event_id'] == $_GET['start_event_id']) & (empty($val['name']))) {
                            echo "<a href='identification.php?start_date_id=" . $_GET['start_date_id'] . "&start_event_id=" . $val['event_id'] . "&start_place_id=" . $val['place_id'] . "'><div class='date active_place'>Место " . $val['num'] . "</div></a>";
                        } elseif (($val['event_id'] == $_GET['start_event_id']) & !(empty($val['name']))) {
                            echo "<div class='date disable_place'>Место " . $val['num'] . "</div>";
                        } else {
                            continue;
                        };
                    };
                };
            };
                
            
            echo "</div>";   
            
            /*foreach($existing_all as $value)
            {
                foreach($value as $val) 
                {
                    if (($val['event_id'] == $_GET['start_event_id']) & (empty($val['name']))) {
                        echo "<a href='identification.php?start_place_id=" . $val['place_id'] . "'><div class='date'>" . $val['place_id'] . "</div></a>";
                    } elseif (($val['event_id'] == $_GET['start_event_id']) & !(empty($val['name']))) {
                        echo "<div class='date'>" . $val['place_id'] . "</div>";
                    } else {
                        continue;
                    };
                };
            };*/
            
        ?>
    </div>
</body>
</html>