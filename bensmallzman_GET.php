<?php
//fetch $firstname
$firstname=filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
//fetch $lastname
$lastname=filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
//fetch $age
$age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
//output
echo "Hello, my name is $firstname $lastname.<br/>";
//age condition
if($age>=18)
{
echo "I am $age years old and I am old enough to vote in the United States.<br/>";
}
else
{
echo "I am $age years old and I am not old enough to vote in the United States.<br/>";
}
//convert age to days
$numofdays = $age  * 365;
echo "The age in days is $numofdays <br/>";
//output date
$date = date('Y-m-d H:i:s');
echo $date;
?>
