<?php
    while(true){
        $myfile = fopen("testrun", "w");
        $txt = "John Doe\n".sha1(time());
        fwrite($myfile, $txt);
        $txt = "John Doe\n".sha1(time());
        fwrite($myfile, $txt);
        fclose($myfile);
        exec("git add .");
        exec("git commit -m 'config#test$1@a'");
        exec("git push github main");
    }
?>
