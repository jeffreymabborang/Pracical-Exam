<?php
    include('./Controller.php');
    include('./db.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Practical Exam 1</title>
</head>
<body>
        <div class="head">
            <h1>Pratical Exam 1</h1>
        </div>
        <div>
            <h3>1. Loop</h3>
            A. Create a PHP function using WHILE loop that will sum all even numbers from 0 - 10. <br><?php WhileLoop();?><br>
            B. Create a PHP function using DO WHILE loop that will display all odd numbers from 0 - 10. <br><?php DoWhileLoop();?><br>
            C. Create a PHP function using FOR loop that will display 10 numbers in fibonacci sequence. <br><?php ForLoop();?><br>
        </div>
        <div>
            <h3>2. Array</h3>
            A. Display the value that have the most number occurrence; in case of tie arrange it in alphabetical order. 
            <br>
            <?php
                $ArrayValue=["Marvin", "Marco", "Marvin", "Marco", "Marco", "Marvin", "Christian"];
                $ArrayValue=SortArrayString($ArrayValue);
                echo json_encode($ArrayValue);  
            ?><br>
            B. Sort the array in ascending order; if the value is an odd number, round it up to nearest tens.  
            <br>
            <?php
                $ArrayValue=[9863,7127,2020,80,131,55,100];
                $ArrayValue=RoundData($ArrayValue);
                echo json_encode($ArrayValue);
            ?><br>
            B. Display the item that is not repetitive.  
            <br>
            <?php
                $ArrayValue=['red','blue','black','red','blue','blue','red','gold'];
                $ArrayValue=SortArrayNotRepetitive($ArrayValue);
                echo json_encode($ArrayValue);
            ?><br>
        </div>
        <div>
            <h3>3. SQL</h3>
            A. Get all data of highest paid employee (without LIMIT).
            <br>
                <?php 
                    $query="SELECT employee.id as emp_id,
                                   employee.name as name,
                                   salary.salary as salary
                                   from employee, salary
                                    where employee.salary_id=salary.id
                                    and salary.salary=(select MAX(salary.salary) from salary)
                            ";

                    $result=mysqli_query($conn,$query);
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $key):?>
                                <tr>
                                    <td><?=$key['emp_id']?></td>
                                    <td><?=$key['name']?></td>
                                    <td><?=$key['salary']?></td>
                                </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            <br>
            B. Get all employees that are hired from 2017-2018
            <br>
            <?php 

                    $query="SELECT id, name,
                                   YEAR(date_hired) as DateReq 
                                   FROM employee 
                                   where YEAR(date_hired)=2017 
                                   or YEAR(date_hired)=2018";

                    $result=mysqli_query($conn,$query);
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Name</th>
                                <th>Date Hired</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($result as $key):?>
                                <tr>
                                    <td><?=$key['id']?></td>
                                    <td><?=$key['name']?></td>
                                    <td><?=$key['DateReq']?></td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
            <br>
            C. Get all employees that belongs to IT department AND hired 2018 onwards.
            <br> 
                <?php 
                    $query="SELECT employee.id as employeeid,
                                   employee.name as emp_name, 
                                   employee.department_id as dep_id, 
                                   department 
                                   FROM employee,department 
                                   where employee.department_id=department.id 
                                   and department.department='IT' 
                                   and YEAR(date_hired)>=2018";

                    $result=mysqli_query($conn,$query);
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $key):?>
                            <tr>
                                <td><?=$key['employeeid']?></td>
                                <td><?=$key['emp_name']?></td>
                                <td><?=$key['department']?></td>
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

            <br>
        </div>
        
        <div>
            <h2>Javascript</h2>
            A. Fix the sentence. (Capitalize the first word only and add spaces per word).
            <h4 class="test" style="margin:0">TheQuickBrownFoxJumpsOverTheLazyDog</h4>
            <div class="load"></div>
            <a href="./employee.php"><button>Employee Form</button></a>
        </div>
        
    <script src="./js/myjs.js"></script>
</body>
</html>
