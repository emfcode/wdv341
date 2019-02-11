<?php

  $custName="";
  $phoneNum="";
  $emailAdd="";
  $registration="";
  $badgeHolder="";
  $checklist1="";
  $checklist2="";
  $checklist3="";
  $specRequest="";

  if( isset($_POST['button3']) )
    {
      echo "The form has been submitted <br>";
    
      $custName = $_POST["custName"];
      $phoneNum = $_POST["phoneNum"];
      $emailAdd = $_POST["emailAdd"];
      $registration = $_POST["select"];
      $badgeHolder = $_POST["radio"];
      $checklist1 = $_POST["checkbox"];
      $checklist2 = $_POST["checkbox2"];
      $checklist3 = $_POST["checkbox3"];
      $specRequest = $_POST["textarea"];

      //echo "$custName <br>";
      //echo "$phoneNum <br>";
      //echo "$emailAdd <br>";
      //echo "$registration <br>";
      //echo "$badgeHolder <br>";
      //echo "$checklist1 <br>";
      //echo "$checklist2 <br>";
      //echo "$checklist3 <br>";
    }
?>
<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV341 Intro PHP - Self Posting Form</title>
<style>

#orderArea	{
	width:600px;
	border:thin solid black;
	margin: auto auto;
	padding-left: 20px;
}
#address {
  display:none;
}

#orderArea h3	{
	text-align:center;	
}
.error	{
	color:red;
	font-style:italic;	
}

</style>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Unit-5 and Unit-6 Self Posting - Form Validation Assignment


</h2>
<p>&nbsp;</p>


<div id="orderArea">
<form name="form3" method="post" action="customerRegistrationForm.php">
  <h3>Customer Registration Form</h3>

      <p>
        <label for="textfield">Name:</label>
        <input type="text" name="custName" id="custName" value="<?php echo $custName; ?>">
      </p>
      <p>
        <label for="textfield2">Phone Number:</label>
        <input type="text" name="phoneNum" id="phoneNum" value="<?php echo $phoneNum; ?>">
      </p>
      <p>
        <label for="textfield3">Email Address: </label>
        <input type="text" name="emailAdd" id="emailAdd" value="<?php echo $emailAdd; ?>">
      </p>
      <p id="address">
        <label for="textfield">Address:</label>
        <input type="text" name="custAdd" id="custAdd" value="">
      </p>
      <p>
        <label for="select">Registration: </label>
        <select name="select" id="select">
          <option value="">Choose Type</option>
          <option value="evt01" <?php if(isset($registration) && $registration=="evt01") echo "selected" ?>>Attendee</option>
          <option value="evt02" <?php if(isset($registration) && $registration=="evt02") echo "selected" ?>>Presenter</option>
          <option value="evt03" <?php if(isset($registration) && $registration=="evt03") echo "selected" ?>>Volunteer</option>
          <option value="evt04" <?php if(isset($registration) && $registration=="evt04") echo "selected" ?>>Guest</option>
        </select>
      </p>
      <p>Badge Holder:</p>
      <p>
        <input type="radio" name="radio" id="radio" value="radio" <?php if(isset($badgeHolder) && $badgeHolder=="radio") echo "checked" ?>>
        <label for="radio">Clip</label> <br>
        <input type="radio" name="radio" id="radio2" value="radio2" <?php if(isset($badgeHolder) && $badgeHolder=="radio2") echo "checked" ?>>
        <label for="radio2">Lanyard</label> <br>
        <input type="radio" name="radio" id="radio3" value="radio3" <?php if(isset($badgeHolder) && $badgeHolder=="radio3") echo "checked" ?>>
        <label for="radio3">Magnet</label>
      </p>
      <p>Provided Meals (Select all that apply):</p>
      <p>
        <input type="checkbox" name="checkbox" id="checkbox" value="checkbox" <?php if(isset($checklist1) && $checklist1=="checkbox") echo "checked" ?>>
        <label for="checkbox">Friday Dinner</label><br>
        <input type="checkbox" name="checkbox2" id="checkbox2" value="checkbox2" <?php if(isset($checklist2) && $checklist2=="checkbox2") echo "checked" ?>>
        <label for="checkbox2">Saturday Lunch</label><br>
        <input type="checkbox" name="checkbox3" id="checkbox3" value="checkbox3"<?php if(isset($checklist3) && $checklist3=="checkbox3") echo "checked" ?>>
        <label for="checkbox3">Sunday Award Brunch</label>
      </p>
      <p>
        <label for="textarea">Special Requests/Requirements: (Limit 200 characters)<br>
        </label>
        <textarea name="textarea" cols="40" rows="5" id="textarea"><?php echo $specRequest; ?></textarea>
      </p>
   
  <p>
    <input type="submit" name="button3" id="button3" value="Submit">
    <input type="button" name="button4" id="button4" value="Clear">
  </p>
</form>
</div>

</body>
</html>