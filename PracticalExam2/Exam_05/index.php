<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam_05</title>
</head>
<body>
    <form action="./index.php" method="post">
        <input type="text" name="content" id="">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            //reverse the string
            echo  strrev($_POST['content']);
        } 
    ?>
</body>
</html>