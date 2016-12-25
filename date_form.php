<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    
    <script src="js/calc.js"></script>
    
</head>
<body>
    <div class="container">
        <a href="/" class="logoLink"><h1 class="logo">Детский оздоровительно-образовательный центр "Надежда"</h1></a>
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
        
        <form action="php/create_date.php">
            <label>Новая дата:</label><br /><br />
            <input name="new_date" required type="text" style="cursor: pointer;" placeholder="YYYY-MM-DD" onfocus="this.select();lcs(this)"
	onclick="event.cancelBubble=true;this.select();lcs(this)">
            <button>Добавить дату</button>
        </form>
    </div>
</body>
</html>