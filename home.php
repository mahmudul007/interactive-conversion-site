<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Page 1 [Home]</p> 
   <p>Conversion site </p>
   1. <a href="home.php">Home</a> 2. <a href="conversion.php">Conversion Rate</a> 3. <a href="history.php">History</a>

   <p>Converter</p>
   <form class="" action="home.php" method="post">
   <select id="ddlView" class="" name="Distance" >
           <option value="">Select</option>
          <option value="Foot to Inch">Foot to Inch</option>
          <option value="Inch to Foot">Inch to Foot</option>
          <option value ="Centimeter to meter">CM to meter </option>
          <option value =" meter to cm"> meter to CM </option>
          <option value ="kg to gm">kg to gm </option>
            </select>
            <br>
            <br>
            Value:  <input id="amount" type="text" name="amount" value="" placeholder="Enter a Value" ><br>
            <br>
            <br>
           

 <?php


if (isset($_POST['convert'])) {
  $amount=$_POST['amount'];
  $option=$_POST['Distance'];
 

  if ($option=='Foot to Inch') {
    $result=$amount*12;
    echo $amount." Foot = ".$result." Inch";
  }
  if ($option=='Inch to Foot') {
    $result=$amount/12;
    echo $amount." Inch = ".$result." Foot";
  }
  if($option== 'Centimeter to meter')
  {
    $result=$amount/100;
    echo $amount."Centimeter=" .$result."meter";
  }
  if($option== 'meter to cm')
  {
    $result=$amount*100;
    echo $amount."Meter=" .$result."centimeter";
  }
  if($option== 'kg to gm')
  {
    $result=$amount*1000;
    echo $amount."KG=" .$result."GM";
  }
  
}else {
  echo "Choose a Conversion Option";
}




?>
</h3>

<input id="convert" type="submit" name="convert" onclick="Validate()" value="select">

</form>
<script src="./script.js"></script>
</body>
</html>