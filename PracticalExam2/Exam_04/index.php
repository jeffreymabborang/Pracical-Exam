
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam_04</title>
</head>
<body>
    <form action="./index.php" method="post">
        Date 1:<input type="text" name="date1" id=""><br>
        Date 2:<input type="text" name="date2" id=""><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        // Validate the values of the dates
        try {
            if(isset($_POST['submit']))
            {
                // get the values of the dates
                $date1 = new DateTime($_POST['date1']);
                $date2 = new DateTime($_POST['date2']);
                // get the difference 
                $interval = $date1->diff($date2);
                $Data=$interval->y;
                //generate the best structure of description 
                if($interval->y>1)
                    $Data.=" years, ";
                else
                    $Data.=" year, "; 
                
                if($interval->m>1)
                    $Data.=$interval->m." months, ";
                else
                    $Data.=$interval->m." month, ";

                if($interval->d>1)
                    $Data.=$interval->d." days ";
                else
                    $Data.=$interval->d." day ";
            } 
            echo $Data;
        } catch (\Throwable $th) {
            echo "Error inputs!";
        }
    ?>
</body>
</html>