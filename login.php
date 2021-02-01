<?php
$nameError=$ageError="";
$name=$age="";
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $name=$_POST['name'];
    $age=$_POST['age'];
    if (empty($_POST['name'])) {
        $nameError="name is required";
    }
}
echo "Well Come to the Login Page";
echo "<br><br>";
?>

<html> 
    <body>
        <form act>
            Enter Your Name: <input type="text" name="name" value=<?php echo $name;?>> <?php echo $nameError ?><br>
            Enter your Age: <input type="number" name="age" value=<?php echo $age; ?>> <?php echo $ageError ?><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>

