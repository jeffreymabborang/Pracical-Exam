<?php
    // create the file name hello_there.php
    $myfile = fopen("hello_there.php", "w");
    // create the text that will insert to the file
    $txt = "<?php \n\n//This is a comment \n\necho \"This is a test page!\";\necho \"Exam number two!\"; \n\n// This is the end of a comment";
    // insert the text to the file
    fwrite($myfile, $txt);
?>