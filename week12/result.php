<!DOCTYPE html>
<html>
    <head>
        <title>Thank you!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
<?php

    if(!empty($reply)){

      echo "<p class='notify'>$reply</p>";

    }

    unset($reply);

?> 

    </body>
</html>

