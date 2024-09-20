<?
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

    $dbname = '';
    $dbuser = '';
    $dbpass = '';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM your_table_name ORDER BY id DESC');

?>
<!DOCTYPE html>
<html>
    <head>
    	  <link rel="shortcut icon" href="https://alex-verstak.ru/img/ico.svg" type="image/x-icon"/>
        <title>Список мероприятий</title>
        <style>
            table {
                border: 1px solid darkgray;
                border-collapse: collapse;
            }

            th {
                background-color: lightblue;
            }

            th, td {
                border: 1px solid darkgray;
                padding: 5px;
            }
            
            .section-form-1 {
            	margin-bottom: 100px;
            }
        </style>
    </head>
    <body>
       <section class="section-form-1">
        <table>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Стоимость билета</th>
            <th>Диапазон дат</th>
            <th>Время</th>
            <th>ФИО</th>
            <th>Изображение 1</th>
            <th>Изображение 2</th>
        </tr>
            <?
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['description'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td>' . $row['date_range'] . '</td>';
                    echo '<td>' . $row['date_time'] . '</td>';
                    echo '<td>' . $row['fullname'] . '</td>';
                    echo '<td> https://alex-verstak.ru/TEXT/old/' . $row['image1'] . ' </td>';
                    echo '<td> https://alex-verstak.ru/TEXT/old/' . $row['image2'] . ' </td>';
                    echo '</tr>';
                }
            ?>
        </table>
        </section>
        <section>
        	<?

    $dbname = '';
    $dbuser = '';
    $dbpass = '';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $stmt = $pdo->query('SELECT * FROM orders ORDER BY id DESC');

?>

        <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>E-mail</th>
            <th>Текст</th>
        </tr>
            <?
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['text'] . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
        	
        </section>
    </body>
</html>
