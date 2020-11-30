<?php
function myerror(){
    echo "Something wents wrong";
}

set_exception_handler('myerror');
throw new Exception();
$a = "helloo i am krishna kaushal";
str_replace($a, 'k');

    ?>