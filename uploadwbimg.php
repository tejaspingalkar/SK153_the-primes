<?php 
session_start();
include "conn.php";
//echo $_COOKIE['lat'];
//echo $_COOKIE['lon'];


if(!isset($_SESSION['bid']))
{
  echo '<script language="javascript">';
  echo 'alert("You are Not Doing It By valid Way");';
  echo 'window.location.href="addwb.php";';
  echo '</script>';
  echo mysqli_error($conn);
}

$bid = $_SESSION['bid'];

//echo $bid;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="">
        <title>EmbankNetra</title>
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/cosmos.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="//rawgithub.com/hayageek/jquery-upload-file/master/js/jquery.uploadfile.min.js"></script>
<style>
    .ajax-file-upload-statusbar {
border: 1px solid #0ba1b5;
margin-top: 10px;
width: 420px;
margin-right: 10px;
margin: 5px;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
border-radius: 4px;
padding: 5px 5px 5px 15px
}

.ajax-file-upload-filename {
width: 300px;
height: auto;
margin: 0 5px 5px 0px;

}

.ajax-file-upload-filesize {
width: 50px;
height: auto;
margin: 0 5px 5px 0px;
display: inline-block;
vertical-align:middle;
}
.ajax-file-upload-progress {
margin: 5px 10px 5px 0px;
position: relative;
width: 250px;
border: 1px solid #ddd;
padding: 1px;
border-radius: 3px;
display: inline-block;
color:#FFFFFF;

}
.ajax-file-upload-bar {
background-color: #0ba1b5;
width: 0;
height: 20px;
border-radius: 13px;
color:#FFFFFF;

}
.ajax-file-upload-percent {
position: absolute;
display: inline-block;
top: 3px;
left: 48%
}
.ajax-file-upload-red {
-moz-box-shadow: inset 0 39px 0 -24px #e67a73;
-webkit-box-shadow: inset 0 39px 0 -24px #e67a73;
box-shadow: inset 0 39px 0 -24px #e67a73;
background-color: #e4685d;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
border-radius: 4px;
display: inline-block;
color: #fff;
font-family: arial;
font-size: 13px;
font-weight: normal;
padding: 4px 15px;
text-decoration: none;
text-shadow: 0 1px 0 #b23e35;
cursor: pointer;
vertical-align: top;
margin: 5px 10px 5px 0px;
}
.ajax-file-upload-green {
background-color: #77b55a;
-moz-border-radius: 4px;
-webkit-border-radius: 4px;
border-radius: 4px;
margin: 0;
padding: 0;
display: inline-block;
color: #fff;
font-family: arial;
font-size: 13px;
font-weight: normal;
padding: 4px 15px;
text-decoration: none;
cursor: pointer;
text-shadow: 0 1px 0 #5b8a3c;
vertical-align: top;
margin: 5px 10px 5px 0px;
}
.ajax-file-upload {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
   font-weight: bold;
	padding: 15px 20px;
	cursor:pointer;
	line-height:20px;
	height:45px;
	margin:0 10px 10px 0;
  display: inline-block;
  background: #fff;
  border: 1px solid #e8e8e8;
  color: #888;
  text-decoration: none;
  border-radius: 3px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -moz-box-shadow: 0 2px 0 0 #e8e8e8;
  -webkit-box-shadow: 0 2px 0 0 #e8e8e8;
  box-shadow: 0 2px 0 0 #e8e8e8;
  padding: 14px 110px 4px 10px;
  color: #fff;
  background: #2f8ab9;
  border: none;
  -moz-box-shadow: 0 2px 0 0 #13648d;
  -webkit-box-shadow: 0 2px 0 0 #13648d;
  box-shadow: 0 2px 0 0 #13648d;
  vertical-align: middle;
  }

.ajax-file-upload:hover {
      background: #3396c9;
      -moz-box-shadow: 0 2px 0 0 #15719f;
      -webkit-box-shadow: 0 2px 0 0 #15719f;
      box-shadow: 0 2px 0 0 #15719f;
}

.ajax-upload-dragdrop
{

	border:2px dotted #A5A5C7;
	width:420px;
	color: #DADCE3;
	text-align:left;
	vertical-align:middle;
	padding:10px 10px 0px 10px;
  margin: auto;
}

.state-hover
{
		border:2px solid #A5A5C7;
}
.ajax-file-upload-container
{
	margin:10px 50px 20px 30px;
}

* { box-sizing: border-box; }

.container {
  display: flex;
  flex-wrap: wrap;
  height: 5vh;
  align-items: center;
  justify-content: center;
  padding: 0 20px;
}

.rating {
  display: flex;
  width: 100%;
  justify-content: center;
  overflow: hidden;
  flex-direction: row-reverse;
  height: 150px;
  position: relative;
}

.rating-0 {
  filter: grayscale(100%);
}

.rating > input {
  display: none;
}

.rating > label {
  cursor: pointer;
  width: 40px;
  height: 40px;
  margin-top: auto;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23e3e3e3' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center;
  background-size: 76%;
  transition: .3s;
}

.rating > input:checked ~ label,
.rating > input:checked ~ label ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23fcd93a' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}


.rating > input:not(:checked) ~ label:hover,
.rating > input:not(:checked) ~ label:hover ~ label {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='126.729' height='126.73'%3e%3cpath fill='%23d8b11e' d='M121.215 44.212l-34.899-3.3c-2.2-.2-4.101-1.6-5-3.7l-12.5-30.3c-2-5-9.101-5-11.101 0l-12.4 30.3c-.8 2.1-2.8 3.5-5 3.7l-34.9 3.3c-5.2.5-7.3 7-3.4 10.5l26.3 23.1c1.7 1.5 2.4 3.7 1.9 5.9l-7.9 32.399c-1.2 5.101 4.3 9.3 8.9 6.601l29.1-17.101c1.9-1.1 4.2-1.1 6.1 0l29.101 17.101c4.6 2.699 10.1-1.4 8.899-6.601l-7.8-32.399c-.5-2.2.2-4.4 1.9-5.9l26.3-23.1c3.8-3.5 1.6-10-3.6-10.5z'/%3e%3c/svg%3e");
}

.emoji-wrapper {
  width: 100%;
  text-align: center;
  height: 100px;
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
}

.emoji-wrapper:before,
.emoji-wrapper:after{
  content: "";
  height: 15px;
  width: 100%;
  position: absolute;
  left: 0;
  z-index: 1;
}

.emoji-wrapper:before {
  top: 0;
  background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji-wrapper:after{
  bottom: 0;
  background: linear-gradient(to top, rgba(255,255,255,1) 0%,rgba(255,255,255,1) 35%,rgba(255,255,255,0) 100%);
}

.emoji {
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: .3s;
}

.emoji > svg {
  margin: 15px 0; 
  width: 70px;
  height: 70px;
  flex-shrink: 0;
}

#rating-1:checked ~ .emoji-wrapper > .emoji { transform: translateY(-100px); }
#rating-2:checked ~ .emoji-wrapper > .emoji { transform: translateY(-200px); }
#rating-3:checked ~ .emoji-wrapper > .emoji { transform: translateY(-300px); }
#rating-4:checked ~ .emoji-wrapper > .emoji { transform: translateY(-400px); }
#rating-5:checked ~ .emoji-wrapper > .emoji { transform: translateY(-500px); }

.feedback {
  max-width: 360px;
  background-color: #fff;
  width: 100%;
  padding: 30px;
  margin: auto;
  border-radius: 8px;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: center;
  box-shadow: 0 4px 30px rgba(0,0,0,.05);
}

.modalDialog {
	position: fixed;
	font-family: Arial, Helvetica, sans-serif;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: rgba(0,0,0,0.8);
	z-index: 99999;
	opacity:0;
	-webkit-transition: opacity 400ms ease-in;
	-moz-transition: opacity 400ms ease-in;
	transition: opacity 400ms ease-in;
	pointer-events: none;
}
.modalDialog:target {
	opacity:1;
	pointer-events: auto;
}

.modalDialog > div {
	width: 400px;
	position: relative;
	margin: 10% auto;
	padding: 5px 20px 13px 20px;
	border-radius: 10px;
	background: #fff;
	background: -moz-linear-gradient(#fff, #999);
	background: -webkit-linear-gradient(#fff, #999);
	background: -o-linear-gradient(#fff, #999);
}
.close {
	background: #606061;
	color: #FFFFFF;
	line-height: 25px;
	position: absolute;
	right: -12px;
	text-align: center;
	top: -10px;
	width: 24px;
	text-decoration: none;
	font-weight: bold;
	-webkit-border-radius: 12px;
	-moz-border-radius: 12px;
	border-radius: 12px;
	-moz-box-shadow: 1px 1px 3px #000;
	-webkit-box-shadow: 1px 1px 3px #000;
	box-shadow: 1px 1px 3px #000;
}

.close:hover { background: #00d9ff; }

</style>
</head>



<body onload="load()">
<a class="temp" href='#openModal'></a>
        <div onload="load()" id="openModal" class="modalDialog">
            <div>
                <a href="#close" title="Close" class="close">X</a>

                <h2>Tips</h2>
                <h4>Please Turn On Location <b>(Geotagging)</b> Feature in Your <b>Camera Setting</b>. For
                  Better review 
                  <br>
                  <b><a href="#close" title="Close" >Ok</a></b>
                </h4>
                  </div>
        </div>

    </div>
  </div> 

  

  <h1 style="text-align: center;">Upload Photos</h1>
  
<div id="mulitplefileuploader">Add Photos</div>
<div id="status"></div>
<div id="status"></div>
</div>
</div>
<div style="text-align: center;">
  <!--<button class="btn btn-primary rounded" data-toggle="modal" data-target="#final">Submit</button>-->
  <button class="btn btn-primary rounded" onclick="window.location.href='finalc.php'">Submit</button>
</div>
<script>
  
$(document).ready(function()
{

var settings = {
	url: "uploadwbimage.php",
	method: "POST",
	allowedTypes:"jpg,png,gif,jpeg",
	fileName: "myfile",
	multiple: true,
	onSuccess:function(files,data,xhr)
	{
    alert(data);
     if(data=='SUCCESS')
     {
      $("#status").html("<font color='green'>Upload is success</font>");
     }else{
      $("#status").html("<font color='red'>Upload is Failed</font>");   
     }
    
	},
	onError: function(files,status,errMsg)
	{		
		$("#status").html("<font color='red'>Upload is Failed</font>");
	}
}
$("#mulitplefileuploader").uploadFile(settings);

});

$(document).ready(function() {

$('a').get(0).click();
});
</script>
</body>