<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam_01</title>
</head>
<body>
    <form action="./index.php" method="post">
        <input type="text" name="content" id="">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            // get the value that need to test then reverse the value using the predefined function
            $old=strrev($_POST['content']);
            // create the new container for the new string without the space
            $NewString=str_replace(' ', '', $old);
            // test the new string and the value that already remove the spaces
            if($NewString==str_replace(' ', '', $_POST['content']))
            {
                echo "Input:".$_POST['content']."<br>Reverse:".$old."<br>This is palindrome!";
            }
            else
            {
                echo "Input:".$_POST['content']."<br>Reverse:".$old."<br>This is not a palindrome!";    
            }
        } 
    ?>
</body>
</html>