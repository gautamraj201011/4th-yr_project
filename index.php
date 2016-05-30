<html>

<head>
 <title>project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
font
{
color: blue;
}
</style>


<script>
function validateForm1() {
    var a = document.forms["desenc"]["key"].value;
    if (a.length != 8 && a.length != 24) {
        alert("for des encryption key must be 8 or 24 character");
        return false;
    }
}
function validateForm2() {
var b = document.forms["desdec"]["key"].value;
    if (b.length != 8 && b.length != 24) {
        alert("for des decryption key must be 8 or 24 character");
        return false;
    }
}
function validateForm3() {
var c = document.forms["aesencimg"]["key"].value;
    if (c.length != 16 && c.length != 24 && c.length != 32) {
        alert("key must be 8 or 24 or 32 character");
        return false;
    }
}
function validateForm4() {
var d = document.forms["aesdecimg"]["key"].value;
     if (d.length != 16 && d.length != 24 && d.length != 32) {
        alert("key must be 8 or 24 or 32 character");
        return false;
    }
}
function validateForm5() {
var e = document.forms["aesenctxt"]["key"].value;
    if (e.length != 16 && e.length != 24 && e.length != 32) {
        alert("key must be 8 or 24 or 32 character");
        return false;
    }
}
function validateForm6() {
var f = document.forms["aesdectxt"]["key"].value;
    if (f.length != 16 && f.length != 24 && f.length != 32) {
        alert("key must be 8 or 24 or 32 character");
        return false;
    }
}
</script>

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
      </button>
      <a class="navbar-brand" href="#section0">PROJECT</a>
    </div>
<div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li><a href="#section1">DES&3DES-Text</a></li>
      <li><a href="#section2">AES-Image</a></li> 
      <li><a href="#section3">AES-Text</a></li> 

    </ul>

<ul class="nav navbar-nav navbar-right">

<li><a href="save.php">save into drive</a></li>
<li><a href="pick.php">pick-image</a></li>
<li><a href="pickdoc.php">pick-text_file</a></li>
</ul>
  </div>
</div>
</nav>

<center>
<div id="section0">
<br><br><br>
<h1><u> WELCOME </u> </h1>

<h3>SECURITY IN CLOUD COMPUTING</h3>



<h4>SECURITY IN CLOUD COMPUTING USING DIFFERENT EXISTING ENCRYPTION ALGORITHMS </h4>


A report submitted in partial fulfillment of the requirements for the degree of <br>
Bechlor of Technology <br>
in <br>

Computer Science & Engineering <br><br>

by <br>
<h4>GAUTAM RAJ & PRADIP KUMAR </h4>

Under the supervision of <br>

<h4>SHRADDHA K. TRIPATHI </h4>

Assistant Professor <br>
<h5>
Department of Computer Science & Engineering <br>
Institute of Engineering & Management <br>

Gurukul, Y-12, Block –EP, Sector-V, Salt Lake Electronics Complex

Kolkata-700091, West Bengal, India
 </h5>
MAY, 2016



<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
</div>

<div id="section1">
<br><br><br><br><br><br><br>
<h1><u>DES & 3-DES -TEXT </u></h1>
<div class="row">
  <div class="col-sm-6">
<h3><u>ENCRYPTION</u></h3><br/>
<form name="desenc" action="desenc.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm1()" >
    <input type="file" name="image" required/><br/><br/>
    Key: <input type="text" id="name" name="key" required />for DES 8 character and for 3-DES 24 character<br /><br/><br/>
    <input type="submit" name="submit" value="Submit me!" />
</form>
   </div>

<div class="col-sm-6">
<h3><u>DECRYPTION</u></h3><br/>
<form name="desdec" action="desdec.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm2()">
    <input type="file" name="image" required /><br/><br/>
    Key: <input type="text" name="key" required/>for des 8 chracter and for 3-des 24 character<br />
	<br />
	<br />
	
    <input type="submit" name="submit" value="Submit me!" />
</form>
  </div>
        </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


<div id="section2">
<br><br><br><br><br><br><br>
<h1><u>AES-IMAGE</u></h1>
<div class="row">
  <div class="col-sm-6">
<h3><u>ENCRYPTION</u> </h3><br/>
<form name="aesencimg" action="aesencimg.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm3()">
    <input type="file" name="image" required /> </br></br>
    Key: <input type="text" name="key" required />key size must be either 16, 24 or 32 character<br />
	<br />
	<br />
	
    <input type="submit" name="submit" value="Submit me!" />
</form>
</div>
  <div class="col-sm-6">
<h3><u>DECRYPTION</u></h3><br/>
<form name="aesdecimg"action="aesdecimg.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm4()">
    <input type="file" name="image" required /> </br></br>
    Key: <input type="text" name="key" required />key size must be either 16, 24 or 32 character<br />
	<br />
	<br />
	
    <input type="submit" name="submit" value="Submit me!" />
</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>


<div id="section3">
<br><br><br><br><br><br><br>
<h1><u>AES-TEXT</u></h1>
<div class="row">
<div class="col-sm-6">
<h3><u>ENCRYPTION</u> </h3><br/>
<form name="aesenctxt" action="aesenctxt.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm5()">
    <input type="file" name="image" required /> </br></br>
    Key: <input type="text" name="key" />key size must be either 16, 24 or 32 character<br />
	<br />
	<br />
	
    <input type="submit" name="submit" value="Submit me!" />
</form>
</div>

<div class="col-sm-6">
<h3><u>DECRYPTION</u></h3><br/>
<form name="aesdectxt" action="aesdectxt.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm6()">
    <input type="file" name="image" required /> </br></br>
    Key: <input type="text" name="key" />key size must be either 16, 24 or 32 character<br />
	<br />
	<br />
	
    <input type="submit" name="submit" value="Submit me!" />
</form>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</center>
</body>
</html>