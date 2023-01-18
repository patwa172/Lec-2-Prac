
<?php 
$username = "Paras";
$time = date("g:i a");

function randomAdjective()
{
    $words = ["limp", "sus", "cool", "amazing"];
    $word = array_rand($words);
    return $word;
}

function timeOfDay()
{
    $tod = date("a");

    if ($tod == "am")
    {
        $timeDesc = "Morning";
    }

    else
    {
         $timeDesc = "afternooon";
    }
    
    return $timeDesc;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> MMomentum Knockoff </title>
</head>


<body>




<h1>  <?php $time ?> </h1> <!-- This php gives us the current time (fix time zone) -->


<h2>  Youre Looking very <?php randomAdjective() ?> this <?php timeOfDay() ?>, <?php $username ?> </h2>


</body>

</html>

