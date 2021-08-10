<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical Exam 1 - Employee Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <a href="./index.php"><Button>Back</Button></a>
    <h2>JavaScipt</h2>
    B. Create a function that will parse and display the JSON values on a CONTACT FORM.
    <div class="contact-form">
        <div class="head">
            <h2>Contact Form</h2>
        </div>
        <div class="details">
            <form action="" method="post">
                <div class="form-group">
                  <label for="">Firstname:</label>
                  <input type="text" class="form-control" id="box-display" name="firstname" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Lastname:</label>
                  <input type="text" class="form-control" id="box-display" name="lastname" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Birthday:</label>
                  <input type="text" class="form-control" id="box-display" name="birthday" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="gender">
                    <div class="title">Gender</div>
                    <div class="btn-radio">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="gender1" value="checkedValue">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="gender2" value="checkedValue">
                            Female
                        </label>
                        </div>
                    </div>
                </div>
                <div class="language">
                    <div class="title">Known Language</div>
                    <div class="btn-radio">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="knownLang" id="english" value="English">
                            English
                        </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="knownLang" id="japanese" value="Japanese">
                            Japanese
                        </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="knownLang" id="chinese" value="Chinese">
                            Chinese
                        </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $.ajax({
                type:"Get",
                url:"./myjson.json",
                dataType: 'json',
                success:function($result)
                {
                    sortJson($result['employees'], "lastname", "string", true);
                 
                    $("input[name='firstname']").val($result['employees'][0]['firstname']);
                    $("input[name='lastname']").val($result['employees'][0]['lastname']);
                    $("input[name='birthday']").val($result['employees'][0]['birthday']);
                    if($result['employees'][0]['gender']['male'])
                    {
                        $("#gender1").prop("checked", true);
                    }
                    else
                    {
                        $("#gender2").prop("checked", true);
                    }

                    if($result['employees'][0]['knownLanguage'][0]=="English")
                    {
                        $("#english").prop("checked", true);
                    }
                    
                    if($result['employees'][0]['knownLanguage'][1]=="Japanese")
                    {
                        $("#japanese").prop("checked", true);
                    }
                    
                    if($result['employees'][0]['knownLanguage'][2]=="Chinese")
                    {
                        $("#chinese").prop("checked", true);
                    }
                    
                }
            });
            function sortJson(element, prop, propType, asc) {
                switch (propType) {
                    case "int":
                    element = element.sort(function (a, b) {
                        if (asc) {
                        return (parseInt(a[prop]) > parseInt(b[prop])) ? 1 : ((parseInt(a[prop]) < parseInt(b[prop])) ? -1 : 0);
                        } else {
                        return (parseInt(b[prop]) > parseInt(a[prop])) ? 1 : ((parseInt(b[prop]) < parseInt(a[prop])) ? -1 : 0);
                        }
                    });
                    break;
                    default:
                    element = element.sort(function (a, b) {
                        if (asc) {
                        return (a[prop].toLowerCase() > b[prop].toLowerCase()) ? 1 : ((a[prop].toLowerCase() < b[prop].toLowerCase()) ? -1 : 0);
                        } else {
                        return (b[prop].toLowerCase() > a[prop].toLowerCase()) ? 1 : ((b[prop].toLowerCase() < a[prop].toLowerCase()) ? -1 : 0);
                        }
                    });
                }
            }
            
        });
    </script>
</body>
</html>