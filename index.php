<!-- Task One -->
<?php
echo "==============Task one================"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Electricity Bill</title>
</head>
<?php 
     $result_str = $result = '';
     if(isset($_POST['unit-submit'])){
       $units = $_POST['units'];
       if(!empty($units)){
         $result = calculate_bill($units);
         $result_str = 'total amount is '.$units.'-'.$result;
       }
     }
     function calculate_bill($units){
      $first_50_units = 2.50;
      $second_100_units = 5.00;
      $third_100_units = 6.20;
      $fourth_above_250 = 7.50;

      if($units <= 50 ) {
        $bill = $units * $first_50_units ;
      }
      else if($units > 50 && $units <=100){
         $temp = 50 * $first_50_units;
         $remaining_units = $units -50;
         $bill = $temp + ($remaining_units * $second_100_units);
      }
      else if ($units > 100 && $units <= 200) {
        $temp = (50 * 3.5 )+ (100 * $second_100_units);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $third_100_units);
      }
      else{
        $temp = (50 * 3.5) + (100 *  $second_100_units) + (100 *  $third_100_units);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourth_above_250 );
      }
      return number_format((float) $bill, 2 , '.', '');
     }

 
?>

<body>
  <div id="page-wrap">
    <h1>calculate Electrcity bill</h1>

    <form action="" method="post" id="quiz-form">
      <input type="number" name="units" id="units" placeholder="Please enter no. of units" />
      <input type="submit" name="unit-submit" id="unit-submit" value="Submit" />

    </form>
    <div>
      <?php echo '<br />' . $result_str; ?>
    </div>
  </div>
</body>

</html>

<br>
<br>

<!-- Task Two -->
<?php
echo "==============Task Two================"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<?php 
     $first_number = $_POST['first_number'];
     $second_number =$_POST['second_number'];
     $operator = $_POST['operator'];
     $result = '';

     if(is_numeric($first_number) && is_numeric($second_number)){
       switch ($operator) {
         case 'Add':
          $result = $first_number + $second_number;
          break;
         case 'Subtract':
          $result =  $first_number - $second_number;
          break;
         case 'Multiply':
          $result = $first_number * $second_number;
          break;
         case 'Divide':
          $result = $first_number / $second_number; 
       }
     }
  
?>

<body>
  <div id="page-wrap">
    <h1>
      Simple calculator
    </h1>
    <form action="" method="post" id="quiz-form">
      <p>
        <input type="number" name="first_number" id="first_number" required="required"
          value="<?php echo $first_number; ?>" />
        <b>First Number</b>
      </p>
      <p>
        <input type="number" name="second_number" id="second_number" required="required"
          value="<?php echo $second_number; ?>" />
        <b>Second Number</b>
      </p>
      <p>
        <input readonly="readonly" name="result" value="<?php echo $result; ?>"> <b>Result</b>
      </p>

      <input type="submit" name="operator" value="Add" />
      <input type="submit" name="operator" value="Subtract" />
      <input type="submit" name="operator" value="Multiply" />
      <input type="submit" name="operator" value="Divide" />
    </form>
  </div>
</body>

</html>

<br>
<br>


<!-- Task Three -->
<?php
echo "==============Task Three================"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vote</title>
</head> <br><br>
<?php

    // $name = $_POST['name'];
    // $age =$_POST['age'];
    // $submit = $_POST['submit'];
    // $result =
    function check_vote() {
      $name = 'Hello';
      $age = 50;
     
      if($age >= 18 &&  $age <= 60) {
        echo $name . ", you are eligible to vote";
      }else  {
        echo $name . ". you are not eligible to vote";
      }
     }
   check_vote();
?>


<body>
  <!-- <div id="page-wrap">

    <form action="" method="post" id="quiz-form">
      <p>
        <input type="number" name="age" id="age" required="required" value="<?php echo $age; ?>" />
        <b>Age</b>
      </p>
      <p>
        <input type="text" name="name" id="name" required="required" value="<?php echo $name; ?>" />
        <b>Name</b>
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Submit" />

      </p>


    </form>
  </div> -->
</body>

</html>

<br>
<br>

<!-- Task Four -->
<?php
echo "==============Task Four================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Positive</title>
</head>
<?php
  $num = 1 ;  
  if ($num > 0){
    echo $num . " is a positive number";
  }else if($num < 0){

    echo $num . " is a negative number ";
  }else if ($num == 0) {
    echo $num .  "you have entered Zero ";
  }else {
    echo " please enter a numeric value";
  }

?>

<body>

</body>

</html>