<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Class Schedule</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <section>
        <form action="get_group.php" method="get">
            <label for="group">Выберите группу:</label>
            <select name="group" id="group">
                <?php
                    include('connect.php');
                    try {
                        $stmt = $dbh->query("SELECT ID_Groups, title FROM groups");
                        $res = $stmt->fetchAll();
                        foreach($res as $row)
                        {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                    }
                    catch(PDOException $ex) {
                        echo $ex->GetMessage();
                    }
        
                    $dbh = null;
                ?>
            </select>
            <input type="submit" value="Найти расписание">
        </form>
        <form action="get_teacher.php" method="get">
            <label for="teacher">Выберите преподавателя:</label>
            <select name="teacher" id="teacher">
                <?php
                    include('connect.php');
                    try {
                        $stmt = $dbh->query("SELECT ID_Teacher, name FROM teacher");
                        $res = $stmt->fetchAll();
        
                        foreach($res as $row)
                        {
                            echo "<option value='$row[0]'>$row[1]</option>";
                        }
                    }
                    catch(PDOException $ex) {
                        echo $ex->GetMessage();
                    }
        
                    $dbh = null;
                ?>
            </select>
            <input type="submit" value="Найти расписание">
        </form>
        <form action="get_auditorium.php" method="get">
            <label for="auditorium">Выберите аудиторию:</label>
            <select name="auditorium" id="auditorium">
                <?php
                    include('connect.php');
                    try {
                        $stmt = $dbh->query("SELECT DISTINCT auditorium FROM lesson");
                        $res = $stmt->fetchAll();
        
                        foreach($res as $row)
                        {
                            echo "<option value='$row[0]'>$row[0]</option>";
                        }
                    }
                    catch(PDOException $ex) {
                        echo $ex->GetMessage();
                    }
        
                    $dbh = null;
                ?>
            </select>
            <input type="submit" value="Найти расписание">
        </form>
    </section>
</body>
</html>    