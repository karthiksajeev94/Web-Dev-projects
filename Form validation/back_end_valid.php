<?php

mysql_connect("localhost","root","root");
mysql_select_db("user");


if(isset($_POST['submit']))
{
$name=$_POST['name'];
$rno=$_POST['rno'];
$d=$_POST['d'];
$m=$_POST['m'];
$y=$_POST['y'];
$gen=$_POST['g'];
$email=$_POST['eid'];
$dept=$_POST['dept'];
$res=$_POST['a'];
$lsa=$_POST['lsa'];
$password=$_POST['pwd'];
$confirm=$_POST['cpwd'];
$club = array($_POST['aero'],$_POST['alum'],$_POST['band'],$_POST['hack'],$_POST['hit']
,$_POST['bot'],$_POST['how'],$_POST['stam'],$_POST['web'],$_POST['word']);
$upload=$_POST['upload'];
$count=0;
$k=0;
$q=0;
$error=array();


if((!isset($name))||($name==''))
{
$error[]="Enter Name";
$k=1;
}
else if(preg_match('/^[A-Za-z]+[A-Za-z ]*$/',$name))
{
if(!preg_match('/^[A-Z]+/',$name))
{
$error[]="Name should start with capital letter";
$k=1;
}
}
else
{
$error[]="Name should contain only letters or spaces";
$k=1;
}


if(($d=='')||($m=='')||($y=='')||($d=='dd')||($y=='yyyy'))
{
$error[]="Enter Date of Birth";
$k=1;
}
else if((!checkdate($m,$d,$y))||($y>2009))
{
$error[]="Invalid D.O.B";
$k=1;
}



if((!isset($rno))||($rno==''))
{
$error[]="Enter Roll No.";
$k=1;
}
else if(!preg_match('/[\d]{10}/',$rno))
{
$error[]="Roll No. should consist of 10 digits";
$k=1;
}


if((!isset($email))||($email==''))
{
$error[]="Enter Email id";
$k=1;
}
else if(!preg_match('/^[a-zA-Z0-9-_]+(\.[a-zA-Z0-9-_]+)*@([a-zA-Z0-9-]+)(\.[a-zA-Z0-9-]+)*(\.[a-z]{2,4})$/',$email))
{
$error[]="Email id is invalid";
$k=1;
}


foreach($club as $c)
{
if(isset($c))
$count++;
}

if($count<3)
{
$error[]="Select atleast three clubs";
$k=1;
}


if((!isset($password))||($password==''))
{
$error[]="Enter Password";
$k=1;
}
else if((strlen($password)<5)||(strlen($password)>9))
{
$error[]="Password should contain atleast 5 and utmost 9 characters";
$k=1;
}
else if(!preg_match('/^[\w_]+$/',$password))
{
$error[]="Password must consist of letters, digits and underscores only";
$k=1;
}
else
$q=1;


if((!isset($confirm))||($confirm==''))
{
$error[]="Enter Confirmation Password";
$k=1;
}
else if($confirm!=$password)
{
if($q==1)
{
$error[]="Passwords don't match";
$k=1;
}
}

if((isset($upload))&&($upload!=''))
{
if(!preg_match('/(.jpg|.png)$/',$upload))
$error[]="Uploaded file must be of .jpg or .png type";
$upload='k';
}


if($k==0)
{
$result = mysql_query("INSERT INTO Data (Roll_No, Name, DOB, Gender, Department, 
Email_id, Last_School_Attended, Residential_Address) 
VALUES ('$rno', '$name', '$y-$m-$d', '$gen', '$dept', '$email', '$lsa', '$res');");

die(header("Location:success.php"));
}

}

?>

<html>

<head>

<title>
FORM
</title>

<style>

span {color:yellow; font-size:15px;}

fieldset {background-image:url("8.jpg"); color:white; width:600px; position:absolute; 
          left:350px; font-family:arial; font-size:18px; border:2px solid black;}
body {background-image:url("4.jpg")}
h1 {color:yellow; font-family:harrington; text-align:center; font-size:45px;}
h3 {color:yellow;}
#s {width:150px; background-color:lime; color:navy; height:40px;
    position:relative; left:155px;}
#reset {width:150px; background-color:red; color:yellow; height:40px; 
        position:relative; left:150px;}
textarea {width:300px; height:100px; position:relative; left:100px;}
td {width:200px; height:30px; color:white; font-family:arial; font-size:18px;}
.legend {text-align:right; padding-right:30px; font-size:18px; width:175px;}
.i {width:200px;}
#d {width:40px;}
#m {width:90px;}
#y {width:60px;}
.mesg {padding-left:10px; color:yellow; font-size:15px;}
#upload {width:280px;}
#club {position:relative; left:20px;}
#add {position:relative; left:20px;}
#php {position:relative; left:50px;}
</style>

</head>


<body>
<fieldset>
<form name='form' method='post' action=''>

<h1>CREATE AN ACCOUNT</h1>
<br>

<div id='php'>
<?php
if(isset($error))
{
echo ("<h3>SERVER VALIDATION</h3>");
foreach($error as $e)
{echo ($e."<br>");}
}
?>
</div>

<br><br>
<table>
<tr>
<td class='legend'>
Name* :
</td>
<td>
<input type='text' name='name' class='i' value="<?php echo $name; ?>"> 
</td>
<td>
<span id='n'></span>
</td>
</tr>
<tr>
<td class='legend'>
D.O.B* :
</td>
<td>
<input type='text' name='d' id='d' value="<?php echo $d; ?>" 
maxlength=2 onclick=date()>
<select name='m' id='m' onclick=month()>
<option value=''><?php echo $m; ?></option>
<option value='1'>January</option>
<option value='2'>February</option>
<option value='3'>March</option>
<option value='4'>April</option>
<option value='5'>May</option>
<option value='6'>June</option>
<option value='7'>July</option>
<option value='8'>August</option>
<option value='9'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select>
<input type='text' name='y' id='y' value="<?php echo $y; ?>" maxlength=4 onclick=year()>

</td>
<td class='mesg' id='error'>
</td>
</tr>
<tr>
<td class='legend'>

Gender :
</td>
<td>

&nbsp;&nbsp;
<input type='radio' name='g' value='Male'> Male

&nbsp;&nbsp;&nbsp;&nbsp;
<input type='radio' name='g' value='Female'> Female

</td>
<td>

</td>
</tr>
<tr>
<td class='legend'>

Roll No* :
</td>
<td>
<input type='text' name='rno' class='i' value="<?php echo $rno; ?>">

</td>
<td>
<span id='r'></span>

</td>
</tr>

<tr>
<td class='legend'>
Department :

</td>
<td>
<select name='dept'>

<option value='Architecture'>Architecture</option>
<option value='Chemical'>Chemical</option>

<option value='Civil'>Civil</option>

<option selected value='Computer Science'>Computer Science</option>

<option value='Electronics & Communication'>Electronics & Communication</option>

<option value='Electrical and Electronics'>Electrical and Electronics</option>

<option value='Instrumentation & Control'>Instrumentation & Control</option>

<option value='Mechanical'>Mechanical</option>

<option value='Metallurgy'>Metallurgy</option>

<option value='Production'>Production</option>


</select>

</td>
<td>
</td>

</tr>
<tr>
<td class='legend'>
Email Id* :
</td>
<td>
<input type='text' name='eid' class='i' value="<?php echo $email; ?>">

</td>
<td>
<span id='e'></span>

</td>
</tr>
</table>

<br>
<table id='club'>
<tr>
<td colspan=3>
Club Membership (atleast three):

</td>
</tr>
<tr>
<td>
</td>
<td colspan=2>
<span id='member'></span>

</td>
</tr>
<tr>
<td>

<input type='checkbox' name='aero' > Aero-modelling 
</td>

<td>
<input type='checkbox' name='alum' '> Alumni Association
</td>
<td>

<input type='checkbox' name='band'> Bandsters 
</td>
</tr>
<tr>
<td>

<input type='checkbox' name='hack'> HackIt!! 
</td>
<td>
<input type='checkbox' name='hit'> HitDFloor
</td>
<td>

<input type='checkbox' name='bot'> HotBot 
</td>
</tr>
<tr>
<td>
<input type='checkbox' name='how'> Howzatt! 
</td>
<td>
<input type='checkbox' name='stam'> Staminator 
</td>
<td>
<input type='checkbox' name='web'> Websters 
</td>
</tr>
<tr>
<td colspan=3>
<input type='checkbox' name='word'> Wordsworth 
</td>
</tr>
</table>

<br>
<div id='add'>
Residential Address: 
<br><br>
<textarea size='600px' name='a' class='dob' onclick='address()'>
Enter Address here </textarea>
</div>
<br>
<table>
<tr>
<td rowspan=2 class='legend'>
Last School Attended* :

</td>
<td colspan=2>
</td>
</tr>
<tr>
<td colspan=2>
<select name='lsa'>

<option>DPS, R.K. Puram, New Delhi</option>

<option>Sishya School, Adyar, Chennai</option>

<option>The Riverside School, Ahmedabad, Ahmedabad</option>

<option>Vidyaranya High School, Hyderabad</option>

<option>Springdales School, Dhaula Kuan, Delhi</option>

<option>Centre For Learning, Bengaluru</option>

<option>Sanskriti School, Chanakyapuri, Delhi</option>

<option>Smt. Sulochanadevi Singhania School, Thane</option>

<option>Cathedral and John Connon School, Mumbai</option>

<option>Vasant Valley School, Delhi</option>

<option>Other Schools</option>

</select>

</td>
</tr>
<tr>
<td colspan=3>
<span id='s'></span>


</td>
</tr>
<tr>
<td class='legend'>
Password* :
</td>
<td>
<input type='password' name='pwd' class='i' value="<?php echo $password; ?>"> 

</td>
<td>
<span id='p'></span>

</td>

</tr>
<tr>
<td class='legend'>
Confirm Password* :
</td>
<td>
<input type='password' name='cpwd' class='i' value="<?php echo $confirm; ?>">

</td>
<td>
<span id='c'></span>

</td>
</tr>


<tr>
<td class='legend'>
Upload photo :
</td>
<td colspan=2>
<input type='file' id='upload' name='upload' value='k'>
</td>
</tr>
<tr>
<td>
</td>
<td colspan=2>
<span id='u'></span>
</td>
</tr>
</table>

<br><br>
<input type='reset' value='Clear Form' id='reset'>&nbsp;
<input type='submit' value='Create Account' name='submit' id='s'>
<br><br><br>
* marked fields are mandatory fields.

</form>

</fieldset>
</body>

</html>
