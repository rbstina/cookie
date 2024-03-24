<html>
<body>

<?php
$cookie_name = "isAdmin"; 

if(isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name] === "1"){
    echo "Flag{Congrats_you_solved_this_challenge}";
} else {
    echo "WRONG PLACE GO BACK";
}
?>

</body>
</html>
