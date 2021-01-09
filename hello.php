<?php
    $result = "";
    $lines = @file("data.txt") or $result = "파일을 읽을 수 없습니다.";
    if ($lines != null){
        for($i = 0;$i < count($lines);$i++){
            $result .= ($i + 1) . ": " . $lines[$i] . "<br>";
        }
    }
?>
<!DOCTYPE html>
<html lang="ko">
    <head> 
        <meta http-equiv="Content-Type"
            content="text/html; charset=UTF-8" /> 
        <title>sample page</title>
    </head>
    <body>
        <h1>Hello PHP!</h1>
        <p><?php echo $result; ?></p>
    </body>
</html>