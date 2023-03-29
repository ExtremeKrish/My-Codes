<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.2.0/styles/stackoverflow-light.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.2.0/highlight.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="trial.css">
<script src="trial.js"></script>
<link href="https://fonts.googleapis.com/css?family=Merienda|Slabo+27px" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title></title>
    <style type="text/css">

    .card{
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    padding:16px;
    display:flex;
    align-items:center;
    border-radius:8px;
    margin-bottom:16px;
    }
    
    .dev{
    height:48px;
    width:48px;
    border-radius:48px;
    border:2px solid #424242;
    }
    </style>
<style type="text/css">
body{
	margin:0;
    font-family: "Poppins",sans-serif;
    overflow:hidden;
    height:100vh;
    -webkit-tap-highlight-color: transparent;
}
.toolbar {
	padding:16px;
background:#4595D4;
	font-weight:500;
	font-size:18px;
	color:white;
	height:60px;
}
.search-box button
{   cursor:pointer ;
    outline:none;
    border-width: 5px;
    border-color:#2196f3; 
    height:50px;    width:120px;
    background:transparent;
    color:#fff;
    font-size:22px;
    margin:2px 10px 10px 2px;
    border-radius:12px;
    font-family: 'Slabo 27px', serif;
    box-shadow:0 1px 3px rgba(0,0,0,0.12), 0 3px 5px rgba(0,0,0,0.3);
}
.search-box
{   position: relative;
    display:block;
    height:62px;
    width:86vw;
    max-width: 600px;
    margin:0 auto;
    background-color:#fff;
    border-radius:30px;
    transform:translateY(-50%);
    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
}
.title{
height:62px;
width:86vw;
margin:0 auto;
box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    border-radius:30px;
    display:flex;
align-items:center;
padding-left:24px;
transform:translateX(-3.5vw);
text-overflow:ellipsis;
overflow:none;
white-space:nowrap;
margin-top:56px;
}
#keyword
{
    font-family: "Poppins",sans-serif;
    background:none;
    border:none;
    color:#4d4d4d;
    height:62px;
    width: 100%;
    margin-left: 1em;
    font-size:16px;
    outline:none;
}
#btn
{   position: absolute;
    top: 4px;
    right: 4px;
background:#4595D4;
    color:#fff;
    height: 24px;
    width: 24px;
    line-height: 24px;
    border-radius:50%;
    text-align: center;
    padding:15px;
    transition:.7 ease;
}
#btn-copy
{   position: absolute;
    top: 4px;
    right: 4px;
background:#4595D4;
    color:#fff;
    height: 24px;
    width: 24px;
    line-height: 24px;
    border-radius:50%;
    text-align: center;
    padding:15px;
    transition:.7 ease;
}
ul {
	margin:0;
	padding:0;
	height:calc(100% - 150px);
	overflow:hidden auto;
background:transparent;
white-space:nowrap;

}
li {
	width:86vw;
    border-radius:30px;
	list-style:none;
	background:#fff;
	margin:16px auto;
	padding:16px;
	box-shadow: rgba(149, 157, 165, 0.2) 0px 0px 24px;
}
.title span{
text-overflow:ellipsis;
overflow:hidden;
padding-right:60px;

}
.pop{
position:fixed;
height:100vh;
width:100vw;
top:0;
left:0;
background:white;
padding:3.5vw;
display:none;
}

pre{
font-size:13px;
line-height:1.30769;
background-color:#fff;
border-radius:10px;
max-height:300px;
margin:20px auto 0 auto;
padding:12px;
overflow-wrap:normal;
overflow:auto;
width:86vw;
transform:translateX(-3.5vw);
box-shadow: rgba(149, 157, 165, 0.2) 0px 0px 24px;
}
pre::-webkit-scrollbar{
width:10px;
height:10px;
background-color:transparent;
}

pre::-webkit-scrollbar-thumb{
border-radius:10px;
background-color:#c5c5c5;
}

pre::-webkit-scrollbar-corner {
/*
background-image: url(resources/corner.png);
background-repeat: no-repeat;
*/
background-color:transparent;
}
#fab{
position:fixed;
bottom:20px;
right:20px;
	box-shadow: rgba(149, 157, 165, 0.3) 0px 0px 24px;
padding:12px 18px 12px 18px;
background:#4595D4;
border-radius:30px;
color:white;
font-weight:500;
}

.toolbar2 {
height:56px;
padding:0px;
align-items:center;
padding-left:12px;
display:flex;
position:absolute;
top:0;
width:100vw;
background:transparent;
	box-shadow: rgba(149, 157, 165, 0.3) 0px 0px 24px;
	right:0;
	left:0;
	overflow:hidden;
	color:#4d4d4d;
	font-weight:600;

}
	.drawer-opener {
position:absolute;
right:32px;
fill:#4d4d4d;
	}
	.drawer{
	height:100vh;
	width:100vw;
	top:0;
	left:0;
position:fixed;
z-index:999;
background:#fff;
padding:12px;
display:none;
	}
.pointer{
cursor:pointer;

}
ul span{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
}
.toolbar svg{
fill:white;
position:absolute;
right:16px;

}
.spinner {
display:none;
padding-top:10px;
position:fixed;
top:36px;
right:36px;
padding-bottom:10px;
width:140px;
background:white;
z-index:200;
border-radius:16px;
	box-shadow: rgba(149, 157, 165, 0.3) 0px 0px 24px;
}
.spinner-overlay {
display:none;
position:fixed;
height:100vh;
width:100vh;
background:transparent;
z-index:199;
}
.spinner span{
display:block;
padding:4px 16px 4px 16px;
}
.spinner span a {
text-decoration:none;
color:#000;
}
.drawer span{
display:block;

}

.drawer .one{
margin-top:0;

}
</style>
<script src="https://raw.githack.com/ExtremeKrish/Snackit/main/snackbar.js"></script>
</head>
<body>
<div class="spinner-overlay" onclick="popup()"></div>
<div class="spinner" onclick="popup()">
<span><a href="https://sketchub.in" >Home</a></span>
<span><a href="https://web.sketchub.in" >Web</a></span>

</div>
<div class="toolbar" >Codehive <svg onclick="popup()" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-dots-vertical" width="24" height="24" viewBox="0 0 24 24"><path d="M12,16A2,2 0 0,1 14,18A2,2 0 0,1 12,20A2,2 0 0,1 10,18A2,2 0 0,1 12,16M12,10A2,2 0 0,1 14,12A2,2 0 0,1 12,14A2,2 0 0,1 10,12A2,2 0 0,1 12,10M12,4A2,2 0 0,1 14,6A2,2 0 0,1 12,8A2,2 0 0,1 10,6A2,2 0 0,1 12,4Z" />


</svg></div>
<div class="search-box">
        <input type="text" id="keyword" autocomplete="off" placeholder="Type to search" />
        <div id="btn" onclick="search()">
            <i class="fas fa-search"></i>
        </div>
</div>
<ul>
<?php
    $SHREQUESTURL = 'https://codehive.sketchub.in/api/';
//request
$ch = curl_init($SHREQUESTURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//response
$response = curl_exec($ch);
curl_close($ch);
     $codes_lm = json_decode($response);
     
     $text="";
     $index = 0;
     foreach ($codes_lm as $code) {
$text=$text ."<li onclick='opencode(".$index.")'>". htmlspecialchars($code->title). "</li>";
     $index++;
}
     
     
   

echo $text;
?> 
</ul>
<div class="pop" >

<nav class="toolbar2" >
<svg onclick="document.querySelector('.pop').style.display = 'none'" class="pointer" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-chevron-left" width="32" height="32" viewBox="0 0 24 24" fill="#4d4d4d"><path d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" /></svg>
&nbsp;Codehive

<svg class="drawer-opener" onclick="document.querySelector('.drawer').style.display = 'block'" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-menu" width="24" height="24" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg>

</nav>


<div id="fab" onclick="raw()" class="pointer" >Raw</div>
<div class="title" ><span id="title" ></span><div id="btn-copy"  onclick="copyToClip()" class="pointer" ><i class="fas fa-copy" ></i></div></div>
<pre id="code"></pre>
</div>


<!------The Drawer------->
<div class="drawer" >
<svg style="position:absolute; right:38px; "  xmlns="http://www.w3.org/2000/svg" onclick="document.querySelector('.drawer').style.display = 'none'" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-close" width="24" height="24" viewBox="0 0 24 24"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
<h2 class="one" >About</h2>
<p>Codehive is the program to show the useful code snippets. (Currently in Sketchware)</p>
<h2>Contact</h2>
<div class="card" onclick="window.open('mailto:contact@sketchub.in')" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-email" width="24" height="24" viewBox="0 0 24 24"><path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z" />
</svg>&nbsp;&nbsp;&nbsp;
<span>Email</span>
</div>
<div class="card" window.open('https://discord.gg/wEathsbhXc')>
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-discord" width="24" height="24" viewBox="0 0 24 24"><path d="M22,24L16.75,19L17.38,21H4.5A2.5,2.5 0 0,1 2,18.5V3.5A2.5,2.5 0 0,1 4.5,1H19.5A2.5,2.5 0 0,1 22,3.5V24M12,6.8C9.32,6.8 7.44,7.95 7.44,7.95C8.47,7.03 10.27,6.5 10.27,6.5L10.1,6.33C8.41,6.36 6.88,7.53 6.88,7.53C5.16,11.12 5.27,14.22 5.27,14.22C6.67,16.03 8.75,15.9 8.75,15.9L9.46,15C8.21,14.73 7.42,13.62 7.42,13.62C7.42,13.62 9.3,14.9 12,14.9C14.7,14.9 16.58,13.62 16.58,13.62C16.58,13.62 15.79,14.73 14.54,15L15.25,15.9C15.25,15.9 17.33,16.03 18.73,14.22C18.73,14.22 18.84,11.12 17.12,7.53C17.12,7.53 15.59,6.36 13.9,6.33L13.73,6.5C13.73,6.5 15.53,7.03 16.56,7.95C16.56,7.95 14.68,6.8 12,6.8M9.93,10.59C10.58,10.59 11.11,11.16 11.1,11.86C11.1,12.55 10.58,13.13 9.93,13.13C9.29,13.13 8.77,12.55 8.77,11.86C8.77,11.16 9.28,10.59 9.93,10.59M14.1,10.59C14.75,10.59 15.27,11.16 15.27,11.86C15.27,12.55 14.75,13.13 14.1,13.13C13.46,13.13 12.94,12.55 12.94,11.86C12.94,11.16 13.45,10.59 14.1,10.59Z" /></svg>
&nbsp;&nbsp;&nbsp;Discord
</div>
<h3>Developer</h3>
<div class="card" ><img class="dev"  src="https://sketchub.in/team/amitoj.jpg" >&nbsp;&nbsp;&nbsp;Amitoj Singh</div>
<br>
<center>
<p>Website Designed by <a style="color:#2196f3;"  href="https://extremekrish.github.io/" >Krish Vishwakarma</a>
</p>
</center>
</div>


<script type="text/javascript">
function opencode(ind){
window.open("view.php?id="+ind);
}
function popup() {
if(document.querySelector(".spinner").style.display == "block"){
document.querySelector(".spinner").style.display = "none";
document.querySelector(".spinner-overlay").style.display = "none";
}else{
document.querySelector(".spinner").style.display = "block";
document.querySelector(".spinner-overlay").style.display = "block";
}

}
</script>
</body>
</html>