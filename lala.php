<!DOCTYPE html>
<html style="height: 100%;" lang="en-US"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>My lala file</title>

<script src="lala_arquivos/osd.js"></script><script type="text/javascript" async="" src="lala_arquivos/js.js"></script><script async="" src="lala_arquivos/async-ads.js"></script><script async="" src="lala_arquivos/apstag.js"></script><script type="text/javascript" async="" src="lala_arquivos/cse.js"></script><script async="" src="lala_arquivos/analytics.js"></script><script>
window.addEventListener("load", loadUser);

function loadUser() {
  var x, y, fname = "/php/php_file_create.asp";
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      y = this.responseText;
      x = y.substr(0, 1);
      if (x == "A" || x == "B" || x == "C" || x == "D" || x == "E" || x == "F" || x == "G" || x == "H") {
        console.log(x);
        //if (x != "A") activateMYPAGE(x, y);
      } else {
        console.log("Z");
      }
    }
  };
  xhttp.open("POST", "https://mypage.w3schools.com/mypage/alpha.php", true);
  xhttp.withCredentials = true;
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("n=" + fname);
}

function activateMYPAGE(cc, obj) {
  var x, degrees = 0, txt = "";
  var a = document.getElementById("theworldsgreatest");
  var b = document.getElementById("mypagediv");
  if (a) a.style.display = "none";
  if (b) {
    if (cc == "D" || cc == "H") {
      jsonobj = JSON.parse(obj.substr(1));
      x = Math.round((jsonobj.b/jsonobj.a) * 100);
      degrees = x * 3.6;
      if (degrees > 359) degrees = 359;
    }
    b.style.display = "block";
    txt += "<img src='/images/mypagelogo32x32.png' alt='MYPAGE' style='position:absolute;top:18px;right:28px'>";
    //txt += "<span style='display:inline-block;line-height:normal;position:relative;bottom:3px;font-size:12px;font-family:consolas;background-color:rgba(44, 156, 202, 1);color:#fff;border-radius:5px;padding:1px 3px;'>123p</span>";
    txt += '<svg style="position:absolute;top:0;right:0;height:70px;width:70px">';
    //txt += '<circle cx="50" cy="50" r="20" fill="rgba(76, 175, 80, 0.1)" id="mypage_circle" />';
    txt += '<path id="mypage_circle1" fill="none" stroke="rgba(76, 175, 80, 0.1)" stroke-width="4"/>';
    txt += '<path id="mypage_circle2" fill="none" stroke="rgba(76, 175, 80, 1)" stroke-width="4"/>';
    txt += '</svg>';
    b.innerHTML = txt;
    document.getElementById("mypage_circle1").setAttribute("d", describeArc(26, 35, 24, 0, 359));
    document.getElementById("mypage_circle2").setAttribute("d", describeArc(26, 35, 24, 0, degrees));

  }
}

function polarToCartesian(centerX, centerY, radius, angleInDegrees) {
  var angleInRadians = (angleInDegrees-90) * Math.PI / 180.0;
  return {
    x: centerX + (radius * Math.cos(angleInRadians)),
    y: centerY + (radius * Math.sin(angleInRadians))
  };
}

function describeArc(x, y, radius, startAngle, endAngle){
    var start = polarToCartesian(x, y, radius, endAngle);
    var end = polarToCartesian(x, y, radius, startAngle);
    var largeArcFlag = endAngle - startAngle <= 180 ? "0" : "1";
    var d = [
        "M", start.x, start.y, 
        "A", radius, radius, 0, largeArcFlag, 0, end.x, end.y
    ].join(" ");
    return d;       
}


</script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Python,Java,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.">
<link rel="icon" href="https://www.w3schools.com/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="lala_arquivos/w3.css">
<link href="lala_arquivos/css.css" rel="stylesheet">

<style>
a:hover,a:active{color:#4CAF50}
table.w3-table-all{margin:20px 0}
/*OPPSETT AV TOP, TOPNAV, SIDENAV, MAIN, RIGHT OG FOOTER:*/
.top {
position:relative;
background-color:#ffffff;
height:68px;
padding-top:20px;
line-height:50px;
overflow:hidden;
z-index:2;
}
.w3schools-logo {
font-family:fontawesome;
text-decoration:none;
line-height:1;
-webkit-font-smoothing:antialiased;
-moz-osx-font-smoothing:grayscale;
font-size:37px;
letter-spacing:3px;
color:#555555;
display:block;
position:absolute;
top:17px;
}
.w3schools-logo .dotcom {color:#4CAF50}
.topnav {
position:relative;
z-index:2;
font-size:17px;
background-color:#5f5f5f;
color:#f1f1f1;
width:100%;
padding:0;
letter-spacing:1px;
font-family:"Segoe UI",Arial,sans-serif;
}
.topnav a{
padding:10px 15px 9px 15px !important;
}
.topnav .w3-bar a:hover,.topnav .w3-bar a:focus{
background-color:#000000 !important;
color:#ffffff !important;
}
.topnav .w3-bar a.active {
background-color:#4CAF50;
color:#ffffff;
}
a.topnav-icons {
width:52px !important;
font-size:20px !important;
padding-top:11px !important;
padding-bottom:13px !important;
}
a.topnav-icons.fa-home {font-size:22px !important}
a.topnav-icons.fa-menu {font-size:22px !important}
a.topnav-localicons {
font-size:20px !important;
padding-top:6px !important;
padding-bottom:12px !important;
}
i.fa-caret-down,i.fa-caret-up{width:10px}
#sidenav h2 {
font-size:21px;
padding-left:16px;
margin:-4px 0 4px 0;
width:204px;
}
#sidenav a {font-family:"Segoe UI",Arial,sans-serif;text-decoration:none;display:block;padding:2px 1px 1px 16px}
#sidenav a:hover,#sidenav a:focus {color:#000000;background-color:#cccccc;}
#sidenav a.active {background-color:#4CAF50;color:#ffffff}
#sidenav a.activesub:link,#sidenav a.activesub:visited {background-color:#ddd;color:#000;}
#sidenav a.activesub:hover,#sidenav a.activesub:active {background-color:#ccc;color:#000;}
#leftmenuinner {
position:fixed;
top:0;
padding-top:112px;
padding-bottom:0;    
height:100%;
width:220px;
background-color:transparent;
}
#leftmenuinnerinner {
height:100%;
width:100%;
overflow-y:scroll;
overflow-x:hidden;
padding-top:20px;
}
#main {padding:16px}
#mainLeaderboard {height:90px}
#right {text-align:center;padding:16px 16px 0 0}
#right a {text-decoration:none}
#right a:hover {text-decoration:underline}
#skyscraper {min-height:600px}
.sidesection {margin-bottom:32px;}
#sidesection_exercise a{display:block;padding:4px 10px;}
#sidesection_exercise a:hover,#sidesection_exercise a:active{background-color:#ccc;text-decoration:none;color:#000000;}
.bottomad {padding:0 16px 16px 0;float:left;width:auto;}
.footer a {text-decoration:none;}
.footer a:hover{text-decoration:underline;}
#nav_tutorials,#nav_references,#nav_exercises{-webkit-overflow-scrolling:touch;overflow:auto;}
#nav_tutorials::-webkit-scrollbar,#nav_references::-webkit-scrollbar,#nav_exercises::-webkit-scrollbar {width: 12px;}
#nav_tutorials::-webkit-scrollbar-track,#nav_references::-webkit-scrollbar-track,#nav_exercises::-webkit-scrollbar-track {background:#555555;}
#nav_tutorials::-webkit-scrollbar-thumb,#nav_references::-webkit-scrollbar-thumb,#nav_exercises::-webkit-scrollbar-thumb {background: #999999;}
#nav_tutorials,#nav_references,#nav_exercises {
display:none;
letter-spacing:0;
margin-top:44px;
}
#nav_tutorials a,#nav_references a,#nav_exercises a{
padding:2px 0 2px 6px!important;
}
#nav_tutorials a:focus,#nav_references a:focus,#nav_exercises a:focus{
color: #000;
background-color: #ccc;
}
#nav_tutorials h3,#nav_references h3,#nav_exercises h3{
padding-left:6px;
}
.ref_overview{display:none}
.tut_overview{
 display :none;
 margin-left:10px;
 background-color :#ddd;
 line-height:1.8em;
}
#sidenav a.activesub:link,#sidenav a.activesub:visited {background-color:#ddd;color:#000;}
#sidenav a.activesub:hover,#sidenav a.activesub:active {background-color:#ccc;color:#000;}
#sidenav a.active_overview:link,#sidenav a.active_overview:visited {background-color:#ccc;color:#000;}
.w3-example{background-color:#f1f1f1;padding:0.01em 16px;margin:20px 0;box-shadow:0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important}
.nextprev a {font-size:17px;border:1px solid #cccccc;}
.nextprev a:link,.nextprev a:visited {background-color:#ffffff;color:#000000;}
.w3-example a:focus,.nextprev a:focus{box-shadow:0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);}
.nextprev a.w3-right,.nextprev a.w3-left {background-color:#4CAF50;color:#ffffff;border-color:#4CAF50}
.pagemenu{margin-left:-20px;margin-right:-20px;padding:20px;background-color:#d4edda;line-height:2.8em;color:#555;}
.pagemenu hr {border-top: 1px solid #fff;margin:20px 0;}
.pagemenu a {display:block;text-decoration:none!important;}
.pagemenu a:hover,.learnmore a:active {color:#000;}
#w3-exerciseform {background-color:#555555;padding:16px;color:#ffffff;}
#w3-exerciseform .exercisewindow {background-color:#ffffff;padding:16px;color:#000000;}
#w3-exerciseform .exerciseprecontainer {background-color:#f1f1f1;padding:16px;font-size:120%;font-family:Consolas,"Courier New", Courier, monospace;}
#w3-exerciseform .exerciseprecontainer pre[class*="language-"] {padding:1px;}
#w3-exerciseform .exerciseprecontainer pre {display: block;}
#w3-exerciseform .exerciseprecontainer textarea {width:100%;border:none;overflow:hidden}
#w3-exerciseform .exerciseprecontainer input {padding:1px;border: 1px solid transparent;height:1.3em;}
.w3-theme {color:#fff !important;background-color:#73AD21 !important;background-color:#4CAF50 !important}
.w3-theme-border {border-color:#4CAF50 !important}
.sharethis a:hover {color:inherit;}
.fa-facebook-square,.fa-twitter-square,.fa-google-plus-square {padding:0 8px;}
.fa-facebook-square:hover, .fa-thumbs-o-up:hover {color:#3B5998;}
.fa-twitter-square:hover {color:#55acee;}
.fa-google-plus-square:hover {color:#dd4b39;}
#google_translate_element img {margin-bottom:-1px;}
#googleSearch {color:#000000;}
#googleSearch a {padding:0 !important;}
.searchdiv {max-width:400px;margin:auto;text-align:left;font-size:16px}
div.cse .gsc-control-cse, div.gsc-control-cse {background-color:transparent;border:none;padding:6px;margin:0px}
td.gsc-search-button input.gsc-search-button {background-color:#4CAF50;border-color:#4CAF50}
td.gsc-search-button input.gsc-search-button:hover {background-color:#46a049;}
input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus, .gsc-search-button {
box-sizing:content-box; line-height:normal;}
.gsc-tabsArea div {overflow:visible;}
/*"nullstille" w3css:*/
.w3-main{transition:margin-left 0s;}
/*"nullstilling" slutt*/
@media (min-width:1675px) {
#main {width:79%}
#right {width:21%}
}
@media (max-width:992px) {
.top {height:100px}
.top img {display:block;margin:auto;}
.top .w3schools-logo {position:relative;top:0;width:100%;text-align:center;margin:auto}
.toptext {width:100%;text-align:center}
#sidenav {width:260px;box-shadow:0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);}
#sidenav h2 {font-size:26px;width:100%;}
#sidenav a {padding:3px 2px 3px 24px;font-size:17px}
#leftmenuinner {overflow:auto;-webkit-overflow-scrolling:touch;height:100%;position:relative;width:auto;padding-top:0;background-color:#f1f1f1;}
#leftmenuinnerinner {overflow-y:scroll}
.bottomad {float:none;text-align:center}
#skyscraper {min-height:60px}
}
@media screen and (max-width:600px) {
.w3-example, .w3-note, #w3-exerciseform {margin-left:-16px;margin-right:-16px;}
.top {height:68px}
.toptext {display:none}
}
@font-face {
font-family:'fontawesome';
src: url('../lib/fonts/fontawesome.eot?14663396');
src:url('../lib/fonts/fontawesome.eot?14663396#iefix') format('embedded-opentype'),
url('../lib/fonts/fontawesome.woff?14663396') format('woff'),
url('../lib/fonts/fontawesome.ttf?14663396') format('truetype'),
url('../lib/fonts/fontawesome.svg?14663396#fontawesome') format('svg');
font-weight:normal;
font-style:normal;
}
.fa {
display:inline-block;
font:normal normal normal 14px/1 FontAwesome;
font-size:inherit;
text-rendering:auto;
-webkit-font-smoothing:antialiased;
-moz-osx-font-smoothing:grayscale;
transform:translate(0, 0);
}
.fa-2x {
 font-size:2em;
}
.fa-home:before {content:'\e800';}
.fa-menu:before {content: '\f0c9';}
.fa-globe:before {content:'\e801';}
.fa-search:before {content:'\e802'; }
.fa-thumbs-o-up:before {content:'\e803';}
.fa-left-open:before {content:'\e804';}
.fa-right-open:before {content:'\e805';}
.fa-facebook-square:before {content:'\e806';}
.fa-google-plus-square:before {content:'\e807';}
.fa-twitter-square:before {content:'\e808';}
.fa-caret-down:before {content:'\e809';}
.fa-caret-up:before {content:'\e80a';}
.fa.fa-adjust:before { content: '\e80b'; }
span.marked, span.deprecated {
 color:#e80000;
 background-color:transparent;
}
.w3-code span.marked {
 color:#e80000;
 background-color:transparent;
}
.darktheme .w3-code span.marked {
 color:#ff9999;
 background-color:transparent;
}
.darktheme .w3-example.w3-light-grey {
  background-color:rgb(40,44,52)!important;color:white;
}
.intro {font-size:16px}
.w3-btn, .w3-btn:link, .w3-btn:visited {color:#FFFFFF;background-color:#4CAF50}
a.w3-btn[href*="exercise.asp"],a.w3-btn[href*="exercise_js.asp"] {margin:10px 5px 0 0}
a.btnplayit,a.btnplayit:link,a.btnplayit:visited {background-color:#FFAD33;padding:1px 10px 2px 10px}
a.btnplayit:hover,a.btnplayit:active {background-color:#ffffff;color:#FFAD33}
a.btnplayit:hover {box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);}
a.btnsmall:link,a.btnsmall:visited,a.btnsmall:active,a.btnsmall:hover {
float:right;padding:1px 10px 2px 10px;font:15px Verdana, sans-serif;}
a.btnsmall:hover {box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);}
a.btnsmall:active,a.btnsmall:hover {color:#4CAF50;background-color:#ffffff}
.tagcolor{color:mediumblue}
.tagnamecolor{color:brown}
.attributecolor{color:red}
.attributevaluecolor{color:mediumblue}
.commentcolor{color:green}
.cssselectorcolor{color:brown}
.csspropertycolor{color:red}
.csspropertyvaluecolor{color:mediumblue}
.cssdelimitercolor{color:black}
.cssimportantcolor{color:red}  
.jscolor{color:black}
.jskeywordcolor{color:mediumblue}
.jsstringcolor{color:brown}
.jsnumbercolor{color:red}
.jspropertycolor{color:black}
.javacolor{color:black}
.javakeywordcolor{color:mediumblue}
.javastringcolor{color:brown}
.javanumbercolor{color:red}
.javapropertycolor{color:black}
.kotlincolor{color:black}
.kotlinkeywordcolor{color:mediumblue}
.kotlinstringcolor{color:brown}
.kotlinnumbercolor{color:red}
.kotlinpropertycolor{color:black}
.phptagcolor{color:red}
.phpcolor{color:black}
.phpkeywordcolor{color:mediumblue}
.phpglobalcolor{color:goldenrod}
.phpstringcolor{color:brown}
.phpnumbercolor{color:red}  
.pythoncolor{color:black}
.pythonkeywordcolor{color:mediumblue}
.pythonstringcolor{color:brown}
.pythonnumbercolor{color:red}  
.angularstatementcolor{color:red}
.sqlcolor{color:black}
.sqlkeywordcolor{color:mediumblue}
.sqlstringcolor{color:brown}
.sqlnumbercolor{color:} 
.darktheme .w3-code{background-color:rgb(40,44,52);color:white;border-left-color:rgb(40,44,52)}
.darktheme .w3-example pre{background-color:rgb(40,44,52)!important;border-left-color:rgb(40,44,52)}
.darktheme .tagcolor{color:#88ccbb/*green2*/!important}
.darktheme .tagnamecolor{color:#ff9999/*red*/!important}
.darktheme .attributecolor{color:#c5a5c5/*purple*/!important}
.darktheme .attributevaluecolor{color:#88c999/*green*/!important}
.darktheme .commentcolor{color:#999!important}
.darktheme .cssselectorcolor{color:#ff9999/*red*/!important}
.darktheme .csspropertycolor{color:#c5a5c5/*purple*/!important}
.darktheme .csspropertyvaluecolor{color:#88c999/*green*/!important}
.darktheme .cssdelimitercolor{color:white!important}
.darktheme .cssimportantcolor{color:#ff9999/*red*/!important}
.darktheme .jscolor{color:white!important}
.darktheme .jskeywordcolor{color:#c5a5c5/*purple*/!important}
.darktheme .jsstringcolor{color:#88c999/*green*/!important}
.darktheme .jsnumbercolor{color:#80b6ff/*blue*/!important}
.darktheme .jspropertycolor{color:white!important}
.darktheme .javacolor{color:white!important}
.darktheme .javakeywordcolor{color:#88c999/*green*/!important}
.darktheme .javastringcolor{color:#88c999/*green*/!important}
.darktheme .javanumbercolor{color:#88c999/*green*/!important}
.darktheme .javapropertycolor{color:white!important}
.darktheme .kotlincolor{color:white!important}
.darktheme .kotlinkeywordcolor{color:#88c999/*green*/!important}
.darktheme .kotlinstringcolor{color:#88c999/*green*/!important}
.darktheme .kotlinnumbercolor{color:#88c999/*green*/!important}
.darktheme .kotlinpropertycolor{color:white!important}
.darktheme .phptagcolor{color:#999!important}
.darktheme .phpcolor{color:white!important}
.darktheme .phpkeywordcolor{color:#ff9999/*red*/!important}
.darktheme .phpglobalcolor{color:white!important}
.darktheme .phpstringcolor{color:#88c999/*green*/!important}
.darktheme .phpnumbercolor{color:#88c999/*green*/!important}
.darktheme .pythoncolor{color:white!important}
.darktheme .pythonkeywordcolor{color:#ff9999/*red*/!important}
.darktheme .pythonstringcolor{color:#88c999/*green*/!important}
.darktheme .pythonnumbercolor{color:#88c999/*green*/!important}
.darktheme .angularstatementcolor{color:#ff9999/*red*/!important}
.darktheme .sqlcolor{color:white!important}
.darktheme .sqlkeywordcolor{color:#80b6ff/*blue*/!important}
.darktheme .sqlstringcolor{color:#88c999/*green*/!important}
.darktheme .sqlnumbercolor{color:}
@media only screen and (max-device-width: 480px) {
.w3-code, .w3-codespan,#w3-exerciseform .exerciseprecontainer {font-family: 'Source Code Pro',Menlo,Consolas,monospace;}
.w3-code {font-size:14px;}
.w3-codespan {font-size:15px;}
#w3-exerciseform .exerciseprecontainer {font-size:15px;}
#w3-exerciseform .exerciseprecontainer input {padding:0;height:1.5em}
}
@media screen and (max-width:700px) {
#mainLeaderboard {height:60px}
#div-gpt-ad-1422003450156-0 {float:none;margin-left:auto;margin-right:auto}
#div-gpt-ad-1422003450156-3 {float:none;margin-left:auto;margin-right:auto}
}
@media (max-width:1700px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(18){display:none;}}
@media (max-width:1600px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(13){display:none;}}
/*@media (max-width:1510px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(12){display:none;}}*/
@media (max-width:1530px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(12){display:none;}}
@media (max-width:1450px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(11){display:none;}}
/*@media (max-width:1330px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(10){display:none;}}*/
@media (max-width:1350px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(10){display:none;}}
/*@media (max-width:1200px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(9){display:none;}}*/
@media (max-width:1240px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(9){display:none;}}
/*@media (max-width:1100px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(8){display:none;}}*/
@media (max-width:1140px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(8){display:none;}}
/*@media (max-width:1000px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(7){display:none;}}*/
@media (max-width:1050px) {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(7){display:none;}}
@media (max-width:992px)  {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(6){display:none;}}
@media (max-width:300px)  {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(17){display:none;}}
@media (max-width:930px)  {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(19){display:none;}}
@media (max-width:800px)  {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(20){display:none;}}
@media (max-width:650px)  {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(5){display:none;} #topnav .w3-bar:nth-of-type(1) a:nth-of-type(16){display:none;}}
@media (max-width:460px)  {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(4){display:none;}}
@media (max-width:400px)  {#topnav .w3-bar:nth-of-type(1) a:nth-of-type(3){display:none;}}
.w3-note{background-color:#ffffcc;border-left:6px solid #ffeb3b}
.w3-warning{background-color:#ffdddd;border-left:6px solid #f44336}
.w3-info{background-color:#ddffdd;border-left:6px solid #4CAF50}
hr[id^="ez-insert-after-placeholder"] {margin-top: 0;}
.phonebr {display:none;}
@media screen and (max-width: 475px) {.phonebr {display:initial;}}

/*NYTT:*/
#main {
  padding:16px 32px 32px 32px;
  border-right: 1px solid #f1f1f1;
}
#right {
  padding:16px 8px;
}
.sidesection .w3-left-align {
  text-align:center!important;
}
#footer {padding:32px;border-top:1px solid #f1f1f1;}
#footer hr:first-child {
  display:none;
}
.w3-info {
  background-color: #d4edda;
  border-left: none;
  padding:32px;
  margin:24px;
  margin-left:-32px;
  margin-right:-32px;
}
.w3-example {
  padding: 8px 20px;
  margin: 24px -20px;
  box-shadow:none!important;
}
.w3-note, .w3-warning {
  border-left: none;
}
.w3-panel {
  margin-top: 24px;
  margin-bottom: 24px;
  margin-left:-32px;
  margin-right:-32px;
  padding:16px 32px;
}
h1 {
  font-size: 42px;
}
h2 {
  font-size: 32px;
}
.w3-btn:hover,.w3-btn:active,.w3-example a:focus,.nextprev a:focus {
  box-shadow: none;
  background-color: #46a049!important;
}
.w3-btn:hover.w3-blue,.w3-btn:active.w3-blue,.w3-button:hover.w3-blue,.w3-button:active.w3-blue {
  background-color: #0d8bf2!important;color: #fff!important;
}
.w3-btn:hover.w3-white,.w3-btn:active.w3-white,.w3-button:hover.w3-white,.w3-button:active.w3-white {
  background-color: #f1f1f1!important;
}
.nextprev .w3-btn:not(.w3-left):not(.w3-right):hover,.nextprev .w3-btn:not(.w3-left):not(.w3-right):active,.nextprev .w3-btn:not(.w3-left):not(.w3-right):focus {
  background-color: #f1f1f1!important;
}
a.btnsmall:hover {box-shadow:none;}
a.btnsmall:active,a.btnsmall:hover {color:#fff;}
a.btnplayit:hover,a.btnplayit:active {background-color:#ff9900!important;color:#fff}
a.btnplayit:hover {box-shadow:none;}
#w3-exerciseform {
  padding: 20px;
  margin:32px -20px;
}
p {
  margin-top: 1.2em;
  margin-bottom: 1.2em;
  font-size: 15px;
}
hr {
  margin:20px -16px;
}
.w3-codespan {
  font-size:105%;
}
.w3-example p,.w3-panel p {
  margin-top: 1em;
  margin-bottom: 1em;
}
.w3-code{
  font-size:15px;
}
#midcontentadcontainer,#mainLeaderboard {
  text-align:center;
  margin-left:-20px;
  margin-right:-20px;
}

.adtext {
 font-family: "Segoe UI",Arial,sans-serif;
 font-size: 14px;
 color: #777;
 margin: 0 auto;
 padding:0;
}
@media screen and (max-width:600px) {
.w3-example, #w3-exerciseform {margin-left:-32px;margin-right:-32px;}
}

@media only screen and (max-device-width: 480px) {
#main {padding:24px}
h1 {
  font-size: 30px;
}
h2 {
  font-size: 25px;
}
.w3-example {
  padding: 8px 16px;
  margin: 24px -24px;
}
#w3-exerciseform {
  padding: 8px 16px 16px 16px;
  margin: 24px -24px;
}
.w3-panel,.w3-info {
  margin-left:-24px;
  margin-right:-24px;
}

}

</style>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-3855518-1', 'auto');
ga('require', 'displayfeatures');
ga('require', 'GTM-WJ88MZ5');
ga('send', 'pageview');
</script>

<script type="text/javascript">
var k42 = false;
var googletag = googletag || {}; googletag.cmd = googletag.cmd || [];

k42 = true;
googletag.cmd.push(function() { googletag.pubads().setTargeting("page_section",(function () {
    var folder = location.pathname;
    folder = folder.replace("/", "");
    folder = folder.substr(0, folder.indexOf("/"));
    return folder;
  })());
});  
(adsbygoogle=window.adsbygoogle||[]).pauseAdRequests=1;

var snhb = snhb || {}; snhb.queue = snhb.queue || [];
snhb.options = {
               logOutputEnabled : false,
               debugOutputEnabled: false,
               PBJSDebugOutputEnabled: false,
               auctionResultOutputEnabled: false,
               allOutputEnabled: false,
               autoStartAuction: false,
               gdpr: {
                     mainGeo: "us",
                     reconsiderationAppealIntervalSeconds: 0
                     }
               };

</script>
<script src="lala_arquivos/sncmp_stub.js" type="text/javascript"></script>
<script>
			window.__cmp('setLogo', "//www.w3schools.com/images/w3schoolscom_gray.gif", function(result){
	       		//snhb.console.log("Logo set");
	    	});
			window.__cmp('setPrivacyPolicy', "//www.w3schools.com/about/about_privacy.asp", function(result){
	       		//snhb.console.log("Privacy policy URI set");
	    	});
			__cmp('forceLocale', 'en', function(result){
	    });
			window.__cmp('enableWelcomeBanner', null, function(result) {
	       		//snhb.console.log("Banner mode enabled");
			});
			__cmp('enablePopupDismissable', null, function(result) {});
			window.__cmp('disableBannerPrivacyPolicyButton', null, function(result) {
	       		//snhb.console.log("Banner mode without privacy policy button enabled");
			});
      window.__cmp('setTranslationFiles', { path: '//www.w3schools.com/lib/', locales: ["en"] }, function(result) {});
      __cmp('setCSS', '//www.w3schools.com/lib/cmp.css', function(result){} );
</script>
<script async="" type="text/javascript" src="lala_arquivos/snhb-w3schools.js"></script>
<script>
  snhb.queue.push(function(){

    snhb.startAuction(["main_leaderboard", "wide_skyscraper", "bottom_medium_rectangle", "right_bottom_medium_rectangle"]);

  });
</script>
<script type="text/javascript">
var stickyadstatus = "";
function fix_stickyad() {
  document.getElementById("stickypos").style.position = "sticky";
  var elem = document.getElementById("stickyadcontainer");
  if (!elem) {return false;}
  if (document.getElementById("skyscraper")) {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("skyscraper"), "width").replace("px", ""));  
    }
  else {
    var skyWidth = Number(w3_getStyleValue(document.getElementById("right"), "width").replace("px", ""));  
  }
  elem.style.width = skyWidth + "px";
  if (window.innerWidth <= 992) {
    elem.style.position = "";
    elem.style.top = stickypos + "px";
    return false;
  }
  var stickypos = document.getElementById("stickypos").offsetTop;
  var docTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
  var adHeight = Number(w3_getStyleValue(elem, "height").replace("px", ""));
  if (stickyadstatus == "") {
    if ((stickypos - docTop) < 60) {
      elem.style.position = "fixed";
      elem.style.top = "60px";
      stickyadstatus = "sticky";
      document.getElementById("stickypos").style.position = "sticky";

    }
  } else {
    if ((docTop + 60) - stickypos < 0) {  
      elem.style.position = "";
      elem.style.top = stickypos + "px";
      stickyadstatus = "";
      document.getElementById("stickypos").style.position = "static";
    }
  }
  if (stickyadstatus == "sticky") {
    if ((docTop + adHeight + 60) > document.getElementById("footer").offsetTop) {
      elem.style.position = "absolute";
      elem.style.top = (document.getElementById("footer").offsetTop - adHeight) + "px";
      document.getElementById("stickypos").style.position = "static";
    } else {
        elem.style.position = "fixed";
        elem.style.top = "60px";
        stickyadstatus = "sticky";
        document.getElementById("stickypos").style.position = "sticky";
    }
  }
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
</script>
<script type="text/javascript" src="lala_arquivos/snhbMLSettings.js" async=""></script><script type="text/javascript" src="lala_arquivos/a" async=""></script><script type="text/javascript" src="lala_arquivos/prebid.js" async=""></script><script type="text/javascript" src="lala_arquivos/snhbGlobalSettings.js" async=""></script><script type="text/javascript" src="lala_arquivos/gpt.js" async=""></script><script type="text/javascript" src="lala_arquivos/sncmp.js" async=""></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="lala_arquivos/translateelement.css"><script type="text/javascript" charset="UTF-8" src="lala_arquivos/main_pt-BR.js"></script><script type="text/javascript" charset="UTF-8" src="lala_arquivos/element_main.js"></script><script src="lala_arquivos/cse_element__en.js" type="text/javascript"></script><link type="text/css" rel="stylesheet" href="lala_arquivos/defaulten.css"><link type="text/css" rel="stylesheet" href="lala_arquivos/default.css"><style type="text/css">.gsc-control-cse{font-family:arial, sans-serif}.gsc-control-cse .gsc-table-result{font-family:arial, sans-serif}.gsc-refinementsGradient{background:linear-gradient(to left,rgba(255,255,255,1),rgba(255,255,255,0))}.gsc-control-cse{border-color:#FFFFFF;background-color:#FFFFFF}input.gsc-input,.gsc-input-box,.gsc-input-box-hover,.gsc-input-box-focus{border-color:#D9D9D9}.gsc-search-button-v2,.gsc-search-button-v2:hover,.gsc-search-button-v2:focus{border-color:#2F5BB7;background-color:#357AE8;background-image:none;filter:none}.gsc-search-button-v2 svg{fill:#FFFFFF}.gsc-tabHeader.gsc-tabhActive,.gsc-refinementHeader.gsc-refinementhActive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-tabHeader.gsc-tabhInactive,.gsc-refinementHeader.gsc-refinementhInactive{color:#CCCCCC;border-color:#CCCCCC;background-color:#FFFFFF}.gsc-webResult.gsc-result,.gsc-results .gsc-imageResult{border-color:#FFFFFF;background-color:#FFFFFF}.gsc-webResult.gsc-result:hover{border-color:#FFFFFF;background-color:#FFFFFF}.gs-webResult.gs-result a.gs-title:link,.gs-webResult.gs-result a.gs-title:link b,.gs-imageResult a.gs-title:link,.gs-imageResult a.gs-title:link b{color:#1155CC}.gs-webResult.gs-result a.gs-title:visited,.gs-webResult.gs-result a.gs-title:visited b,.gs-imageResult a.gs-title:visited,.gs-imageResult a.gs-title:visited b{color:#1155CC}.gs-webResult.gs-result a.gs-title:hover,.gs-webResult.gs-result a.gs-title:hover b,.gs-imageResult a.gs-title:hover,.gs-imageResult a.gs-title:hover b{color:#1155CC}.gs-webResult.gs-result a.gs-title:active,.gs-webResult.gs-result a.gs-title:active b,.gs-imageResult a.gs-title:active,.gs-imageResult a.gs-title:active b{color:#1155CC}.gsc-cursor-page{color:#1155CC}a.gsc-trailing-more-results:link{color:#1155CC}.gs-webResult .gs-snippet,.gs-fileFormatType{color:#333333}.gs-webResult div.gs-visibleUrl{color:#009933}.gs-webResult div.gs-visibleUrl-short{color:#009933}.gsc-cursor-box{border-color:#FFFFFF}.gsc-results .gsc-cursor-box .gsc-cursor-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{border-color:#CCCCCC;background-color:#FFFFFF;color:#CCCCCC}.gsc-webResult.gsc-result.gsc-promotion{border-color:#F6F6F6;background-color:#F6F6F6}.gsc-completion-title{color:#1155CC}.gsc-completion-snippet{color:#333333}.gs-promotion a.gs-title:link,.gs-promotion a.gs-title:link *,.gs-promotion .gs-snippet a:link{color:#1155CC}.gs-promotion a.gs-title:visited,.gs-promotion a.gs-title:visited *,.gs-promotion .gs-snippet a:visited{color:#1155CC}.gs-promotion a.gs-title:hover,.gs-promotion a.gs-title:hover *,.gs-promotion .gs-snippet a:hover{color:#1155CC}.gs-promotion a.gs-title:active,.gs-promotion a.gs-title:active *,.gs-promotion .gs-snippet a:active{color:#1155CC}.gs-promotion .gs-snippet,.gs-promotion .gs-title .gs-promotion-title-right,.gs-promotion .gs-title .gs-promotion-title-right *{color:#333333}.gs-promotion .gs-visibleUrl,.gs-promotion .gs-visibleUrl-short{color:#009933}.gcsc-find-more-on-google{color:#1155CC}.gcsc-find-more-on-google-magnifier{fill:#1155CC}</style><style type="text/css">.gscb_a{display:inline-block;font:27px/13px arial,sans-serif}.gsst_a .gscb_a{color:#a1b9ed;cursor:pointer}.gsst_a:hover .gscb_a,.gsst_a:focus .gscb_a{color:#36c}.gsst_a{display:inline-block}.gsst_a{cursor:pointer;padding:0 4px}.gsst_a:hover{text-decoration:none!important}.gsst_b{font-size:16px;padding:0 2px;position:relative;user-select:none;-moz-user-select:none;white-space:nowrap}.gsst_e{vertical-align:middle;opacity:0.55;}.gsst_a:hover .gsst_e,.gsst_a:focus .gsst_e{opacity:0.72;}.gsst_a:active .gsst_e{opacity:1;}.gsst_f{background:white;text-align:left}.gsst_g{background-color:white;border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-moz-box-shadow:0 2px 4px rgba(0,0,0,0.2);margin:-1px -3px;padding:0 6px}.gsst_h{background-color:white;height:1px;margin-bottom:-1px;position:relative;top:-1px}.gsib_a{width:100%;padding:4px 6px 0}.gsib_a,.gsib_b{vertical-align:top}.gssb_c{border:0;position:absolute;z-index:989}.gssb_e{border:1px solid #ccc;border-top-color:#d9d9d9;box-shadow:0 2px 4px rgba(0,0,0,0.2);-moz-box-shadow:0 2px 4px rgba(0,0,0,0.2);cursor:default}.gssb_f{visibility:hidden;white-space:nowrap}.gssb_k{border:0;display:block;position:absolute;top:0;z-index:988}.gsdd_a{border:none!important}.gsq_a{padding:0}.gssb_a{padding:0 7px}.gssb_a,.gssb_a td{white-space:nowrap;overflow:hidden;line-height:22px}#gssb_b{font-size:11px;color:#36c;text-decoration:none}#gssb_b:hover{font-size:11px;color:#36c;text-decoration:underline}.gssb_g{text-align:center;padding:8px 0 7px;position:relative}.gssb_h{font-size:15px;height:28px;margin:0.2em}.gssb_i{background:#eee}.gss_ifl{visibility:hidden;padding-left:5px}.gssb_i .gss_ifl{visibility:visible}a.gssb_j{font-size:13px;color:#36c;text-decoration:none;line-height:100%}a.gssb_j:hover{text-decoration:underline}.gssb_l{height:1px;background-color:#e5e5e5}.gssb_m{color:#000;background:#fff}.gssb_a{padding:0 9px}.gsib_a{padding:5px 9px 4px 9px}.gscb_a{line-height:27px}.gssb_e{border:0}.gssb_l{margin:5px 0}input.gsc-input::-webkit-input-placeholder{font-size:14px}input.gsc-input:-moz-placeholder{font-size:14px}input.gsc-input::-moz-placeholder{font-size:14px}input.gsc-input:-ms-input-placeholder{font-size:14px}input.gsc-input:focus::-webkit-input-placeholder{color:transparent}input.gsc-input:focus:-moz-placeholder{color:transparent}input.gsc-input:focus::-moz-placeholder{color:transparent}input.gsc-input:focus:-ms-input-placeholder{color:transparent}.gssb_c .gsc-completion-container{position:static}.gssb_c{z-index:5000}.gsc-completion-container table{background:transparent;font-size:inherit;font-family:inherit}.gssb_c > tbody > tr,.gssb_c > tbody > tr > td,.gssb_d,.gssb_d > tbody > tr,.gssb_d > tbody > tr > td,.gssb_e,.gssb_e > tbody > tr,.gssb_e > tbody > tr > td{padding:0;margin:0;border:0}.gssb_a table,.gssb_a table tr,.gssb_a table tr td{padding:0;margin:0;border:0}</style><link rel="preload" href="lala_arquivos/integrator_002.js" as="script"><script type="text/javascript" src="lala_arquivos/integrator_002.js"></script><link rel="preload" href="lala_arquivos/integrator.js" as="script"><script type="text/javascript" src="lala_arquivos/integrator.js"></script><script src="lala_arquivos/pubads_impl_2020072301.js" async=""></script></head><body style="position: relative; min-height: 100%; top: 0px;">
<div class="w3-container top">
  <a class="w3schools-logo notranslate" href="https://www.w3schools.com/">w3schools<span class="dotcom">.com</span></a>
  <div id="mypagediv" class="w3-right w3-hide-small" style="display:none"></div>
  <div id="theworldsgreatest" class="w3-right w3-hide-small w3-wide toptext" style="font-family:'Segoe UI',Arial,sans-serif">THE WORLD'S LARGEST WEB DEVELOPER SITE</div>
</div>

<div style="display: none; position: fixed; z-index: 4; right: 52px; height: 44px; background-color: rgb(95, 95, 95); letter-spacing: normal; top: 0px;" id="googleSearch">
  <div id="___gcse_0"><div class="gsc-control-cse gsc-control-cse-en"><div class="gsc-control-wrapper-cse" dir="ltr"><form class="gsc-search-box gsc-search-box-tools" accept-charset="utf-8"><table class="gsc-search-box" cellspacing="0" cellpadding="0"><tbody><tr><td class="gsc-input"><div class="gsc-input-box" id="gsc-iw-id1"><table style="width: 100%; padding: 0px;" id="gs_id50" class="gstl_50 gsc-input" cellspacing="0" cellpadding="0"><tbody><tr><td id="gs_tti50" class="gsib_a"><input autocomplete="off" type="text" size="10" class="gsc-input" name="search" title="search" style="width: 100%; padding: 0px; border: medium none; margin: 0px; height: auto; background: rgb(255, 255, 255) url(&quot;https://www.google.com/cse/static/images/1x/en/branding.png&quot;) no-repeat scroll left center; outline: currentcolor none medium;" id="gsc-i-id1" dir="ltr" spellcheck="false"></td><td class="gsib_b"><div class="gsst_b" id="gs_st50" dir="ltr"><a class="gsst_a" href="javascript:void(0)" style="display: none;" title="Clear search box" role="button"><span class="gscb_a" id="gs_cb50" aria-hidden="true">×</span></a></div></td></tr></tbody></table></div></td><td class="gsc-search-button"><button class="gsc-search-button gsc-search-button-v2"><svg width="13" height="13" viewBox="0 0 13 13"><title>search</title><path d="m4.8495 7.8226c0.82666 0 1.5262-0.29146 2.0985-0.87438 0.57232-0.58292 0.86378-1.2877 0.87438-2.1144 0.010599-0.82666-0.28086-1.5262-0.87438-2.0985-0.59352-0.57232-1.293-0.86378-2.0985-0.87438-0.8055-0.010599-1.5103 0.28086-2.1144 0.87438-0.60414 0.59352-0.8956 1.293-0.87438 2.0985 0.021197 0.8055 0.31266 1.5103 0.87438 2.1144 0.56172 0.60414 1.2665 0.8956 2.1144 0.87438zm4.4695 0.2115 3.681 3.6819-1.259 1.284-3.6817-3.7 0.0019784-0.69479-0.090043-0.098846c-0.87973 0.76087-1.92 1.1413-3.1207 1.1413-1.3553 0-2.5025-0.46363-3.4417-1.3909s-1.4088-2.0686-1.4088-3.4239c0-1.3553 0.4696-2.4966 1.4088-3.4239 0.9392-0.92727 2.0864-1.3969 3.4417-1.4088 1.3553-0.011889 2.4906 0.45771 3.406 1.4088 0.9154 0.95107 1.379 2.0924 1.3909 3.4239 0 1.2126-0.38043 2.2588-1.1413 3.1385l0.098834 0.090049z"></path></svg></button></td><td class="gsc-clear-button"><div class="gsc-clear-button" title="clear results">&nbsp;</div></td></tr></tbody></table></form><div class="gsc-results-wrapper-overlay"><div class="gsc-results-close-btn" tabindex="0"></div><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"><div aria-label="refinement" role="tab" class="gsc-tabHeader gsc-inline-block gsc-tabhActive">Custom Search</div><span class="gs-spacer"> </span></div></div><div class="gsc-positioningWrapper"><div class="gsc-tabsAreaInvisible"></div></div><div class="gsc-above-wrapper-area-invisible"><table class="gsc-above-wrapper-area-container" cellspacing="0" cellpadding="0"><tbody><tr><td class="gsc-result-info-container"><div class="gsc-result-info-invisible"></div></td></tr></tbody></table></div><div class="gsc-adBlockInvisible"></div><div class="gsc-wrapper"><div class="gsc-adBlockInvisible"></div><div class="gsc-resultsbox-invisible"><div class="gsc-resultsRoot gsc-tabData gsc-tabdActive"><div><div class="gsc-expansionArea"></div></div></div></div></div></div><div class="gsc-modal-background-image" tabindex="0"></div></div></div></div>
</div>
<div style="display: none; position: fixed; z-index: 3; right: 111px; height: 44px; background-color: rgb(95, 95, 95); text-align: right; padding-top: 9px; top: 0px;" id="google_translate_element"><div class="skiptranslate goog-te-gadget" dir="ltr" style=""><div id=":0.targetLanguage" style="white-space: nowrap;" class="goog-te-gadget-simple"><img src="lala_arquivos/cleardot.gif" class="goog-te-gadget-icon" alt="" style="background-image: url(&quot;https://translate.googleapis.com/translate_static/img/te_ctrl3.gif&quot;); background-position: -65px 0px;"><span style="vertical-align: middle;"><a aria-haspopup="true" class="goog-te-menu-value" href="javascript:void(0)"><span>Selecione o idioma</span><img src="lala_arquivos/cleardot.gif" alt="" width="1" height="1"><span style="border-left: 1px solid rgb(187, 187, 187);">​</span><img src="lala_arquivos/cleardot.gif" alt="" width="1" height="1"><span style="color: rgb(118, 118, 118);" aria-hidden="true">▼</span></a></span></div></div></div>

<div class="w3-card-2 topnav notranslate" id="topnav" style="position: fixed; top: 0px;">
  <div style="overflow:auto;">
    <div class="w3-bar w3-left" style="width:100%;overflow:hidden;height:44px">
      <a href="javascript:void(0);" class="topnav-icons fa fa-menu w3-hide-large w3-left w3-bar-item w3-button" onclick="open_menu()" title="Menu"></a>
      <a href="https://www.w3schools.com/default.asp" class="topnav-icons fa fa-home w3-left w3-bar-item w3-button" title="Home"></a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/html/default.asp" title="HTML Tutorial">HTML</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/css/default.asp" title="CSS Tutorial">CSS</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/js/default.asp" title="JavaScript Tutorial">JAVASCRIPT</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/sql/default.asp" title="SQL Tutorial">SQL</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/python/default.asp" title="Python Tutorial">PYTHON</a>
      <a class="w3-bar-item w3-button active" href="https://www.w3schools.com/php/default.asp" title="PHP Tutorial">PHP</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp" title="Bootstrap Tutorial">BOOTSTRAP</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/howto/default.asp" title="How To">HOW TO</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS Tutorial">W3.CSS</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/jquery/default.asp" title="jQuery Tutorial">JQUERY</a>
      <a class="w3-bar-item w3-button" href="https://www.w3schools.com/java/default.asp" title="Java Tutorial">JAVA</a>
      <a class="w3-bar-item w3-button" id="topnavbtn_tutorials" href="javascript:void(0);" onclick='w3_open_nav("tutorials")' title="Tutorials">MORE <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display:none"></i></a>
      <a href="javascript:void(0);" class="topnav-icons fa w3-right w3-bar-item w3-button" onclick="open_search(this)" title="Search W3Schools"></a>


      <a href="javascript:void(0);" class="topnav-icons fa w3-right w3-bar-item w3-button" onclick="open_translate(this)" title="Translate W3Schools"></a>
      <a href="javascript:void(0);" class="topnav-icons fa w3-right w3-bar-item w3-button" onclick="changecodetheme(this)" title="Toggle Dark Code"></a>
      <a class="w3-bar-item w3-button w3-right" target="_blank" href="https://www.w3schools.com/forum/default.asp">FORUM</a>
      <a class="w3-bar-item w3-button w3-right" id="topnavbtn_exercises" href="javascript:void(0);" onclick='w3_open_nav("exercises")' title="Exercises">EXERCISES <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display:none"></i></a>
      <a class="w3-bar-item w3-button w3-right" id="topnavbtn_references" href="javascript:void(0);" onclick='w3_open_nav("references")' title="References">REFERENCES <i class="fa fa-caret-down" style="display: inline;"></i><i class="fa fa-caret-up" style="display:none"></i></a>
    </div>
    <div id="nav_tutorials" class="w3-bar-block w3-card-2" style="display:none;">
      <span onclick='w3_close_nav("tutorials")' class="w3-button w3-xlarge w3-right" style="position:absolute;right:0;font-weight:bold;">×</span>
      <div class="w3-row-padding" style="padding:24px 48px">
        <div class="w3-col l3 m6">
          <h3>HTML and CSS</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/html/default.asp">Learn HTML</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/css/default.asp">Learn CSS</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp">Learn Bootstrap</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/w3css/default.asp">Learn W3.CSS</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/colors/default.asp">Learn Colors</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/icons/default.asp">Learn Icons</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/graphics/default.asp">Learn Graphics</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/graphics/svg_intro.asp">Learn SVG</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/graphics/canvas_intro.asp">Learn Canvas</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/howto/default.asp">Learn How To</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/sass/default.asp">Learn Sass</a>          
          <div class="w3-hide-large w3-hide-small">
            <h3>XML</h3>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/default.asp">Learn XML</a>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/ajax_intro.asp">Learn XML AJAX</a>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/dom_intro.asp">Learn XML DOM</a>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xml_dtd_intro.asp">Learn XML DTD</a>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/schema_intro.asp">Learn XML Schema</a>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xsl_intro.asp">Learn XSLT</a>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xpath_intro.asp">Learn XPath</a>
            <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xquery_intro.asp">Learn XQuery</a>
          </div>
        </div>
        <div class="w3-col l3 m6">
          <h3>JavaScript</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/js/default.asp">Learn JavaScript</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/jquery/default.asp">Learn jQuery</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/react/default.asp">Learn React</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/angular/default.asp">Learn AngularJS</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/js/js_json_intro.asp">Learn JSON</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/js/js_ajax_intro.asp">Learn AJAX</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/w3js/default.asp">Learn W3.JS</a>
          <h3>Programming</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/python/default.asp">Learn Python</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/java/default.asp">Learn Java</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cpp/default.asp">Learn C++</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cs/default.asp">Learn C#</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/python/python_ml_getting_started.asp">Learn Machine Learning</a>
          <div class="w3-hide-small"><br class="w3-hide-medium w3_hide-small"><br class="w3-hide-medium w3_hide-small"></div>
        </div>
        <div class="w3-col l3 m6">
          <h3>Server Side</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/sql/default.asp">Learn SQL</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/php/default.asp">Learn PHP</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/asp/default.asp">Learn ASP</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/nodejs/default.asp">Learn Node.js</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/nodejs/nodejs_raspberrypi.asp">Learn Raspberry Pi</a>          
          <h3>Web Building</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/w3css/w3css_templates.asp">Web Templates</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/browsers/default.asp">Web Statistics</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/default.asp">Web Certificates</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/tryit/default.asp">Web Editor</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/whatis/default.asp">Web Development</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/typingspeed/default.asp">Test Your Typing Speed</a>
        </div>
        <div class="w3-col l3 m6 w3-hide-medium">
          <h3>XML</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/default.asp">Learn XML</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/ajax_intro.asp">Learn XML AJAX</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/dom_intro.asp">Learn XML DOM</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xml_dtd_intro.asp">Learn XML DTD</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/schema_intro.asp">Learn XML Schema</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xsl_intro.asp">Learn XSLT</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xpath_intro.asp">Learn XPath</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xquery_intro.asp">Learn XQuery</a>
        </div>
      </div>
      <br>
    </div>
    <div id="nav_references" class="w3-bar-block w3-card-2" style="display: none;">
      <span onclick='w3_close_nav("references")' class="w3-button w3-xlarge w3-right" style="position:absolute;right:0;font-weight:bold;">×</span>
      <div class="w3-row-padding" style="padding:24px 48px">
        <div class="w3-col l3 m6">
          <h3>HTML</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/tags/default.asp">HTML Tag Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/tags/ref_html_browsersupport.asp">HTML Browser Support</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/tags/ref_eventattributes.asp">HTML Event Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/colors/default.asp">HTML Color Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/tags/ref_attributes.asp">HTML Attribute Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/tags/ref_canvas.asp">HTML Canvas Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/graphics/svg_reference.asp">HTML SVG Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/default.asp">HTML Character Sets</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/graphics/google_maps_reference.asp">Google Maps Reference</a>
          <h3>CSS</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cssref/default.asp">CSS Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cssref/css3_browsersupport.asp">CSS Browser Support</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cssref/css_selectors.asp">CSS Selector Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/bootstrap/bootstrap_ref_all_classes.asp">Bootstrap 3 Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/bootstrap4/bootstrap_ref_all_classes.asp">Bootstrap 4 Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/w3css/w3css_references.asp">W3.CSS Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/icons/icons_reference.asp">Icon Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/sass/sass_functions_string.asp">Sass Reference</a>
       </div>
        <div class="w3-col l3 m6">
          <h3>JavaScript</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/jsref/default.asp">JavaScript Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/jsref/default.asp">HTML DOM Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/jquery/jquery_ref_overview.asp">jQuery Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/angular/angular_ref_directives.asp">AngularJS Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/w3js/w3js_references.asp">W3.JS Reference</a>
          <h3>Programming</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/python/python_reference.asp">Python Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/java/java_ref_keywords.asp">Java Reference</a>
        </div>
        <div class="w3-col l3 m6">
          <h3>Server Side</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/sql/sql_ref_keywords.asp">SQL Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/php/php_ref_overview.asp">PHP Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/asp/asp_ref_response.asp">ASP Reference</a>
          <h3>XML</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/dom_nodetype.asp">XML Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/dom_http.asp">XML Http Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xsl_elementref.asp">XSLT Reference</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/schema_elements_ref.asp">XML Schema Reference</a>
        </div>
        <div class="w3-col l3 m6 w3-hide-medium w3-hide-small">
          <h3>Character Sets</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/default.asp">HTML Character Sets</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/ref_html_ascii.asp">HTML ASCII</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/ref_html_ansi.asp">HTML ANSI</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/ref_html_ansi.asp">HTML Windows-1252</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/ref_html_8859.asp">HTML ISO-8859-1</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/ref_html_symbols.asp">HTML Symbols</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/charsets/ref_html_utf8.asp">HTML UTF-8</a>
        </div>
      </div>
      <br>
    </div>
    <div id="nav_exercises" class="w3-bar-block w3-card-2" style="display: none;">
      <span onclick='w3_close_nav("exercises")' class="w3-button w3-xlarge w3-right" style="position:absolute;right:0;font-weight:bold;">×</span>
      <div class="w3-row-padding" style="padding:24px 48px">
        <div class="w3-col l4 m6">
          <h3>Exercises</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/html/html_exercises.asp">HTML Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/css/css_exercises.asp">CSS Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/js/js_exercises.asp">JavaScript Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/sql/sql_exercises.asp">SQL Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/php/php_exercises.asp">PHP Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/python/python_exercises.asp">Python Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/jquery/jquery_exercises.asp">jQuery Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/bootstrap/bootstrap_exercises.asp">Bootstrap Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/java/java_exercises.asp">Java Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cpp/cpp_exercises.asp">C++ Exercises</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cs/cs_exercises.asp">C# Exercises</a>
        </div>
        <div class="w3-col l4 m6">
          <h3>Quizzes</h3>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/html/html_quiz.asp" target="_top">HTML Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/css/css_quiz.asp" target="_top">CSS Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/js/js_quiz.asp" target="_top">JavaScript Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/sql/sql_quiz.asp" target="_top">SQL Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/php/php_quiz.asp" target="_top">PHP Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/python/python_quiz.asp" target="_top">Python Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/jquery/jquery_quiz.asp" target="_top">jQuery Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/bootstrap/bootstrap_quiz.asp" target="_top">Bootstrap Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/java/java_quiz.asp" target="_top">Java Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cpp/cpp_quiz.asp" target="_top">C++ Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cs/cs_quiz.asp" target="_top">C# Quiz</a>
          <a class="w3-bar-item w3-button" href="https://www.w3schools.com/xml/xml_quiz.asp" target="_top">XML Quiz</a>
        </div>
        <div class="w3-col l4 m12">
         <h3>Certificates</h3>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_html_new.asp" target="_top">HTML Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_css.asp" target="_top">CSS Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_javascript.asp" target="_top">JavaScript Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_sql.asp" target="_top">SQL Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_php.asp" target="_top">PHP Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_python.asp" target="_top">Python Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_jquery.asp" target="_top">jQuery Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_bootstrap.asp" target="_top">Bootstrap Certificate</a>
         <a class="w3-bar-item w3-button" href="https://www.w3schools.com/cert/cert_xml.asp" target="_top">XML Certificate</a>
        </div>
      </div>
      <br>
    </div>
  </div>
</div>



<div class="w3-sidebar w3-collapse" id="sidenav" style="top: 44px; display: none;">
  <div id="leftmenuinner" style="padding-top: 44px;">
    <div class="w3-light-grey" id="leftmenuinnerinner">
<!--  <a href='javascript:void(0)' onclick='close_menu()' class='w3-button w3-hide-large w3-large w3-display-topright' style='right:16px;padding:3px 12px;font-weight:bold;'>&times;</a>-->
<h2 class="left"><span class="left_h2">PHP</span> Tutorial</h2>
<a target="_top" href="https://www.w3schools.com/php/default.asp">PHP HOME</a>
<a target="_top" href="https://www.w3schools.com/php/php_intro.asp">PHP Intro</a>
<a target="_top" href="https://www.w3schools.com/php/php_install.asp">PHP Install</a>
<a target="_top" href="https://www.w3schools.com/php/php_syntax.asp">PHP Syntax</a>
<a target="_top" href="https://www.w3schools.com/php/php_comments.asp">PHP Comments</a>
<a target="_top" href="https://www.w3schools.com/php/php_variables.asp">PHP Variables</a>
<a target="_top" href="https://www.w3schools.com/php/php_echo_print.asp">PHP Echo / Print</a>
<a target="_top" href="https://www.w3schools.com/php/php_datatypes.asp">PHP Data Types</a>
<a target="_top" href="https://www.w3schools.com/php/php_string.asp">PHP Strings</a>
<a target="_top" href="https://www.w3schools.com/php/php_numbers.asp">PHP Numbers</a>
<a target="_top" href="https://www.w3schools.com/php/php_math.asp">PHP Math</a>
<a target="_top" href="https://www.w3schools.com/php/php_constants.asp">PHP Constants</a>
<a target="_top" href="https://www.w3schools.com/php/php_operators.asp">PHP Operators</a>
<a target="_top" href="https://www.w3schools.com/php/php_if_else.asp">PHP If...Else...Elseif</a>
<a target="_top" href="https://www.w3schools.com/php/php_switch.asp">PHP Switch</a>
<a target="_top" href="https://www.w3schools.com/php/php_looping.asp">PHP Loops</a>
<div class="tut_overview">
<a target="_top" href="https://www.w3schools.com/php/php_looping.asp">Loops</a>
<a target="_top" href="https://www.w3schools.com/php/php_looping_while.asp">While Loop</a>
<a target="_top" href="https://www.w3schools.com/php/php_looping_do_while.asp">Do While Loop</a>
<a target="_top" href="https://www.w3schools.com/php/php_looping_for.asp">For Loop</a>
<a target="_top" href="https://www.w3schools.com/php/php_looping_foreach.asp">Foreach Loop</a>
<a target="_top" href="https://www.w3schools.com/php/php_looping_break.asp">Break/Continue</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_functions.asp">PHP Functions</a>
<a target="_top" href="https://www.w3schools.com/php/php_arrays.asp">PHP Arrays</a>
<div class="tut_overview">
<a target="_top" href="https://www.w3schools.com/php/php_arrays.asp">Arrays</a>
<a target="_top" href="https://www.w3schools.com/php/php_arrays_indexed.asp">Indexed Arrays</a>
<a target="_top" href="https://www.w3schools.com/php/php_arrays_associative.asp">Associative Arrays</a>
<a target="_top" href="https://www.w3schools.com/php/php_arrays_multidimensional.asp">Multidimensional Arrays</a>
<a target="_top" href="https://www.w3schools.com/php/php_arrays_sort.asp">Sorting Arrays</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_superglobals.asp">PHP Superglobals</a>
<div class="tut_overview">
<a target="_top" href="https://www.w3schools.com/php/php_superglobals.asp">Superglobals</a>
<a target="_top" href="https://www.w3schools.com/php/php_superglobals_globals.asp">$GLOBALS</a>
<a target="_top" href="https://www.w3schools.com/php/php_superglobals_server.asp">$_SERVER</a>
<a target="_top" href="https://www.w3schools.com/php/php_superglobals_request.asp">$_REQUEST</a>
<a target="_top" href="https://www.w3schools.com/php/php_superglobals_post.asp">$_POST</a>
<a target="_top" href="https://www.w3schools.com/php/php_superglobals_get.asp">$_GET</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_regex.asp">PHP RegEx</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Forms</h2>
<a target="_top" href="https://www.w3schools.com/php/php_forms.asp">PHP Form Handling</a>
<a target="_top" href="https://www.w3schools.com/php/php_form_validation.asp">PHP Form Validation</a>
<a target="_top" href="https://www.w3schools.com/php/php_form_required.asp">PHP Form Required</a>
<a target="_top" href="https://www.w3schools.com/php/php_form_url_email.asp">PHP Form URL/E-mail</a>
<a target="_top" href="https://www.w3schools.com/php/php_form_complete.asp">PHP Form Complete</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Advanced</h2>
<a target="_top" href="https://www.w3schools.com/php/php_date.asp">PHP Date and Time</a>
<a target="_top" href="https://www.w3schools.com/php/php_includes.asp">PHP Include</a>
<a target="_top" href="https://www.w3schools.com/php/php_file.asp">PHP File Handling</a>
<a target="_top" href="https://www.w3schools.com/php/php_file_open.asp">PHP File Open/Read</a>
<a target="_top" href="https://www.w3schools.com/php/php_file_create.asp" class="active">PHP File Create/Write</a>
<a target="_top" href="https://www.w3schools.com/php/php_file_upload.asp">PHP File Upload</a>
<a target="_top" href="https://www.w3schools.com/php/php_cookies.asp">PHP Cookies</a>
<a target="_top" href="https://www.w3schools.com/php/php_sessions.asp">PHP Sessions</a>
<a target="_top" href="https://www.w3schools.com/php/php_filter.asp">PHP Filters</a>
<a target="_top" href="https://www.w3schools.com/php/php_filter_advanced.asp">PHP Filters Advanced</a>
<a target="_top" href="https://www.w3schools.com/php/php_callback_functions.asp">PHP Callback Functions</a>
<a target="_top" href="https://www.w3schools.com/php/php_json.asp">PHP JSON</a>
<a target="_top" href="https://www.w3schools.com/php/php_exceptions.asp">PHP Exceptions</a>
<!-- <a target="_top" href="php_error_handling.asp">PHP Error Handling</a>
<a target="_top" href="php_exception.asp">PHP Exception</a> -->
<br>
<h2 class="left"><span class="left_h2">PHP</span> OOP</h2>
<a target="_top" href="https://www.w3schools.com/php/php_oop_what_is.asp">PHP What is OOP</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_classes_objects.asp">PHP Classes/Objects</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_constructor.asp">PHP Constructor</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_destructor.asp">PHP Destructor</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_access_modifiers.asp">PHP Access Modifiers</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_inheritance.asp">PHP Inheritance</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_constants.asp">PHP Constants</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_classes_abstract.asp">PHP Abstract Classes</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_traits.asp">PHP Traits</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_static_methods.asp">PHP Static Methods</a>
<a target="_top" href="https://www.w3schools.com/php/php_oop_static_properties.asp">PHP Static Properties</a>
<a target="_top" href="https://www.w3schools.com/php/php_namespaces.asp">PHP Namespaces</a>
<br>
<h2 class="left"><span class="left_h2">MySQL</span> Database</h2>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_intro.asp">MySQL Database</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_connect.asp">MySQL Connect</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_create.asp">MySQL Create DB</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_create_table.asp">MySQL Create Table</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_insert.asp">MySQL Insert Data</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_insert_lastid.asp">MySQL Get Last ID</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_insert_multiple.asp">MySQL Insert Multiple</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_prepared_statements.asp">MySQL Prepared</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_select.asp">MySQL Select Data</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_select_where.asp">MySQL Where</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_select_orderby.asp">MySQL Order By</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_delete.asp">MySQL Delete Data</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_update.asp">MySQL Update Data</a>
<a target="_top" href="https://www.w3schools.com/php/php_mysql_select_limit.asp">MySQL Limit Data</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> XML</h2>
<a target="_top" href="https://www.w3schools.com/php/php_xml_parsers.asp">PHP XML Parsers</a>
<a target="_top" href="https://www.w3schools.com/php/php_xml_simplexml_read.asp">PHP SimpleXML Parser</a>
<a target="_top" href="https://www.w3schools.com/php/php_xml_simplexml_get.asp">PHP SimpleXML - Get</a>
<a target="_top" href="https://www.w3schools.com/php/php_xml_parser_expat.asp">PHP XML Expat</a>
<a target="_top" href="https://www.w3schools.com/php/php_xml_dom.asp">PHP XML DOM</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> - AJAX</h2>
<a target="_top" href="https://www.w3schools.com/php/php_ajax_intro.asp">AJAX Intro</a>
<a target="_top" href="https://www.w3schools.com/php/php_ajax_php.asp">AJAX PHP</a>
<a target="_top" href="https://www.w3schools.com/php/php_ajax_database.asp">AJAX Database</a>
<a target="_top" href="https://www.w3schools.com/php/php_ajax_xml.asp">AJAX XML</a>
<a target="_top" href="https://www.w3schools.com/php/php_ajax_livesearch.asp">AJAX Live Search</a>
<a target="_top" href="https://www.w3schools.com/php/php_ajax_poll.asp">AJAX Poll</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Examples</h2>
<a target="_top" href="https://www.w3schools.com/php/php_examples.asp">PHP Examples</a>
<a target="_top" href="https://www.w3schools.com/php/php_compiler.asp">PHP Compiler</a>
<a target="_top" href="https://www.w3schools.com/php/php_quiz.asp">PHP Quiz</a>
<a target="_top" href="https://www.w3schools.com/php/php_exercises.asp">PHP Exercises</a>
<a target="_top" href="https://www.w3schools.com/php/php_exam.asp">PHP Certificate</a>
<br>
<h2 class="left"><span class="left_h2">PHP</span> Reference</h2>
<a target="_top" href="https://www.w3schools.com/php/php_ref_overview.asp">PHP Overview</a>
<a target="_top" href="https://www.w3schools.com/php/php_ref_array.asp">PHP Array</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_array.asp">array()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_change_key_case.asp">array_change_key_case()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_chunk.asp">array_chunk()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_column.asp">array_column()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_combine.asp">array_combine()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_count_values.asp">array_count_values()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_diff.asp">array_diff()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_diff_assoc.asp">array_diff_assoc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_diff_key.asp">array_diff_key()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_diff_uassoc.asp">array_diff_uassoc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_diff_ukey.asp">array_diff_ukey()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_fill.asp">array_fill()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_fill_keys.asp">array_fill_keys()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_filter.asp">array_filter()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_flip.asp">array_flip()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_intersect.asp">array_intersect()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_intersect_assoc.asp">array_intersect_assoc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_intersect_key.asp">array_intersect_key()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_intersect_uassoc.asp">array_intersect_uassoc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_intersect_ukey.asp">array_intersect_ukey()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_key_exists.asp">array_key_exists()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_keys.asp">array_keys()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_map.asp">array_map()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_merge.asp">array_merge()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_merge_recursive.asp">array_merge_recursive()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_multisort.asp">array_multisort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_pad.asp">array_pad()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_pop.asp">array_pop()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_product.asp">array_product()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_push.asp">array_push()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_rand.asp">array_rand()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_reduce.asp">array_reduce()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_replace.asp">array_replace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_replace_recursive.asp">array_replace_recursive()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_reverse.asp">array_reverse()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_search.asp">array_search()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_shift.asp">array_shift()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_slice.asp">array_slice()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_splice.asp">array_splice()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_sum.asp">array_sum()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_udiff.asp">array_udiff()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_udiff_assoc.asp">array_udiff_assoc()
    </a><a target="_top" href="https://www.w3schools.com/php/func_array_udiff_uassoc.asp">array_udiff_uassoc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_uintersect.asp">array_uintersect()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_uintersect_assoc.asp">array_uintersect_assoc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_uintersect_uassoc.asp">array_uintersect_uassoc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_unique.asp">array_unique()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_unshift.asp">array_unshift()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_values.asp">array_values()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_walk.asp">array_walk()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_walk_recursive.asp">array_walk_recursive()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_arsort.asp">arsort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_asort.asp">asort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_compact.asp">compact()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_count.asp">count()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_current.asp">current()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_each.asp">each()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_end.asp">end()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_extract.asp">extract()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_in_array.asp">in_array()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_key.asp">key()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_krsort.asp">krsort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_ksort.asp">ksort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_list.asp">list()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_natcasesort.asp">natcasesort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_natsort.asp">natsort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_next.asp">next()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_pos.asp">pos()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_prev.asp">prev()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_range.asp">range()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_reset.asp">reset()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_rsort.asp">rsort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_shuffle.asp">shuffle()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_sizeof.asp">sizeof()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_sort.asp">sort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_uasort.asp">uasort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_uksort.asp">uksort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_array_usort.asp">usort()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_calendar.asp">PHP Calendar</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_cal_cal_days_in_month.asp">cal_days_in_month()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_cal_from_jd.asp">cal_from_jd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_cal_info.asp">cal_info()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_cal_to_jd.asp">cal_to_jd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_easter_date.asp">easter_date()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_easter_days.asp">easter_days()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_frenchtojd.asp">frenchtojd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_gregoriantojd.asp">gregoriantojd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jddayofweek.asp">jddayofweek()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jdmonthname.asp">jdmonthname()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jdtofrench.asp">jdtofrench()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jdtogregorian.asp">jdtogregorian()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jdtojewish.asp">jdtojewish()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jdtojulian.asp">jdtojulian()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jdtounix.asp">jdtounix()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_jewishtojd.asp">jewishtojd()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_cal_juliantojd.asp">juliantojd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_cal_unixtojd.asp">unixtojd()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_date.asp">PHP Date</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_date_checkdate.asp">checkdate()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date_add.asp">date_add()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_create_from_format.asp">date_create_from_format()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date_create.asp">date_create()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date_set.asp">date_date_set()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_default_timezone_get.asp">date_default_timezone_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_default_timezone_set.asp">date_default_timezone_set()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date_diff.asp">date_diff()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date_format.asp">date_format()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_get_last_errors.asp">date_get_last_errors()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_interval_create_from_date_string.asp">date_interval_create_from_date_string()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_interval_format.asp">date_interval_format()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_isodate_set.asp">date_isodate_set()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_modify.asp">date_modify()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_offset_get.asp">date_offset_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_parse_from_format.asp">date_parse_from_format()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date_parse.asp">date_parse()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date_sub.asp">date_sub()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_sun_info.asp">date_sun_info()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_sunrise.asp">date_sunrise()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_sunset.asp">date_sunset()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_date_time_set.asp">date_time_set()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_date_timestamp_get.asp">date_timestamp_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timestamp_set.asp">date_timestamp_set()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_get.asp">date_timezone_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_set.asp">date_timezone_set()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_date.asp">date()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_getdate.asp">getdate()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_gettimeofday.asp">gettimeofday()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_gmdate.asp">gmdate()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_gmmktime.asp">gmmktime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_gmstrftime.asp">gmstrftimee()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_idate.asp">idate()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_localtime.asp">localtime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_microtime.asp">microtime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_mktime.asp">mktime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_strftime.asp">strftime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_strptime.asp">strptime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_strtotime.asp">strtotime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_time.asp">time()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_abbreviations_list.asp">timezone_abbreviations_list()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_identifiers_list.asp">timezone_identifiers_list()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_location_get.asp">timezone_location_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_name_from_abbr.asp">timezone_name_from_abbr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_name_get.asp">timezone_name_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_offset_get.asp">timezone_offset_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_open.asp">timezone_open()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_transitions_get.asp">timezone_transitions_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_date_timezone_version_get.asp">timezone_version_get()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_directory.asp">PHP Directory</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_directory_chdir.asp">chdir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_chroot.asp">chroot()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_closedir.asp">closedir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_dir.asp">dir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_getcwd.asp">getcwd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_opendir.asp">opendir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_readdir.asp">readdir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_rewinddir.asp">rewinddir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_directory_scandir.asp">scandir()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_error.asp">PHP Error</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_error_debug_backtrace.asp">debug_backtrace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_debug_print_backtrace.asp">debug_print_backtrace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_get_last.asp">error_get_last()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_log.asp">error_log()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_reporting.asp">error_reporting()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_restore_error_handler.asp">restore_error_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_restore_exception_handler.asp">restore_exception_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_set_error_handler.asp">set_error_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_set_exception_handler.asp">set_exception_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_error_trigger_error.asp">trigger_error()</a>    
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_filesystem.asp">PHP Filesystem</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_basename.asp">basename()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_chgrp.asp">chgrp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_chmod.asp">chmod()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_chown.asp">chown()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_clearstatcache.asp">clearstatcache()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_copy.asp">copy()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_delete.asp">delete()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_dirname.asp">dirname()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_disk_free_space.asp">disk_free_space()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_disk_total_space.asp">disk_total_space()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_diskfreespace.asp">diskfreespace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fclose.asp">fclose()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_feof.asp">feof()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fflush.asp">fflush()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fgetc.asp">fgetc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fgetcsv.asp">fgetcsv()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fgets.asp">fgets()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fgetss.asp">fgetss()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_file.asp">file()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_file_exists.asp">file_exists()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_file_get_contents.asp">file_get_contents()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_file_put_contents.asp">file_put_contents()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fileatime.asp">fileatime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_filectime.asp">filectime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_filegroup.asp">filegroup()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fileinode.asp">fileinode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_filemtime.asp">filemtime()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fileowner.asp">fileowner()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fileperms.asp">fileperms()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_filesize.asp">filesize()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_filetype.asp">filetype()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_flock.asp">flock()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fnmatch.asp">fnmatch()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fopen.asp">fopen()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fpassthru.asp">fpassthru()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fputcsv.asp">fputcsv()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fputs.asp">fputs()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fread.asp">fread()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fscanf.asp">fscanf()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fseek.asp">fseek()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fstat.asp">fstat()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_ftell.asp">ftell()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_ftruncate.asp">ftruncate()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_fwrite.asp">fwrite()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_glob.asp">glob()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_dir.asp">is_dir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_executable.asp">is_executable()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_file.asp">is_file()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_link.asp">is_link()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_readable.asp">is_readable()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_uploaded_file.asp">is_uploaded_file()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_writable.asp">is_writable()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_is_writeable.asp">is_writeable()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_lchgrp.asp">lchgrp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_lchown.asp">lchown()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_link.asp">link()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_linkinfo.asp">linkinfo()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_lstat.asp">lstat()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_mkdir.asp">mkdir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_move_uploaded_file.asp">move_uploaded_file()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_parse_ini_file.asp">parse_ini_file()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_parse_ini_string.asp">parse_ini_string()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_pathinfo.asp">pathinfo()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_pclose.asp">pclose()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_popen.asp">popen()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_readfile.asp">readfile()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_readlink.asp">readlink()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_realpath.asp">realpath()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_realpath_cache_get.asp">realpath_cache_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_realpath_cache_size.asp">realpath_cache_size()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_rename.asp">rename()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_rewind.asp">rewind()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_rmdir.asp">rmdir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_set_file_buffer.asp">set_file_buffer()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_stat.asp">stat()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_symlink.asp">symlink()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_tempnam.asp">tempnam()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_tmpfile.asp">tmpfile()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_touch.asp">touch()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_umask.asp">umask()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filesystem_unlink.asp">unlink()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_filter.asp">PHP Filter</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_filter_has_var.asp">filter_has_var()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filter_id.asp">filter_id()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filter_input.asp">filter_input()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filter_input_array.asp">filter_input_array()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filter_list.asp">filter_list()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filter_var.asp">filter_var()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_filter_var_array.asp">filter_var_array()</a>    
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_ftp.asp">PHP FTP</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_alloc.asp">ftp_alloc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_cdup.asp">ftp_cdup()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_chdir.asp">ftp_chdir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_chmod.asp">ftp_chmod()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_close.asp">ftp_close()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_connect.asp">ftp_connect()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_delete.asp">ftp_delete()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_exec.asp">ftp_exec()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_fget.asp">ftp_fget()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_fput.asp">ftp_fput()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_get.asp">ftp_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_get_option.asp">ftp_get_option()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_login.asp">ftp_login()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_mdtm.asp">ftp_mdtm()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_mkdir.asp">ftp_mkdir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_mlsd.asp">ftp_mlsd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_nb_continue.asp">ftp_nb_continue()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_nb_fget.asp">ftp_nb_fget()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_nb_fput.asp">ftp_nb_fput()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_nb_get.asp">ftp_nb_get()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_nb_put.asp">ftp_nb_put()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_nlist.asp">ftp_nlist()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_pasv.asp">ftp_pasv()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_put.asp">ftp_put()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_pwd.asp">ftp_pwd()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_quit.asp">ftp_quit()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_raw.asp">ftp_raw()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_rawlist.asp">ftp_rawlist()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_rename.asp">ftp_rename()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_rmdir.asp">ftp_rmdir()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_set_option.asp">ftp_set_option()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_site.asp">ftp_site()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_size.asp">ftp_size()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_ssl_connect.asp">ftp_ssl_connect()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_ftp_systype.asp">ftp_systype()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_json.asp">PHP JSON</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_json_decode.asp">json_decode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_json_encode.asp">json_encode()</a>
<!--<a target="_top" href="func_json_last_error.asp">json_last_error()</a>
    <a target="_top" href="func_json_last_error_msg.asp">json_last_error_msg()</a>-->
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_libxml.asp">PHP Libxml</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_libxml_clear_errors.asp">libxml_clear_errors()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_libxml_disable_entity_loader.asp">libxml_disable_entity_loader()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_libxml_get_errors.asp">libxml_get_errors()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_libxml_get_last_error.asp">libxml_get_last_error()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_libxml_set_external_entity_loader.asp">libxml_set_external_entity_loader()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_libxml_set_streams_context.asp">libxml_set_streams_context()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_libxml_use_internal_errors.asp">libxml_use_internal_errors()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_mail.asp">PHP Mail</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_mail_ezmlm_hash.asp">ezmlm_hash()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mail_mail.asp">mail()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_math.asp">PHP Math</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_math_abs.asp">abs()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_acos.asp">acos()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_acosh.asp">acosh()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_asin.asp">asin()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_asinh.asp">asinh()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_atan.asp">atan()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_atan2.asp">atan2()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_atanh.asp">atanh()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_base_convert.asp">base_convert()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_bindec.asp">bindec()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_ceil.asp">ceil()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_cos.asp">cos()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_cosh.asp">cosh()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_decbin.asp">decbin()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_dechex.asp">dechex()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_decoct.asp">decoct()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_deg2rad.asp">deg2rad()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_exp.asp">exp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_expm1.asp">expm1()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_floor.asp">floor()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_fmod.asp">fmod()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_getrandmax.asp">getrandmax()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_hexdec.asp">hexdec()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_hypot.asp">hypot()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_intdiv.asp">intdiv()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_is_finite.asp">is_finite()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_is_infinite.asp">is_infinite()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_is_nan.asp">is_nan()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_lcg_value.asp">lcg_value()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_log.asp">log()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_log10.asp">log10()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_log1p.asp">log1p()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_max.asp">max()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_min.asp">min()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_mt_getrandmax.asp">mt_getrandmax()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_mt_rand.asp">mt_rand()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_mt_srand.asp">mt_srand()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_octdec.asp">octdec()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_pi.asp">pi()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_pow.asp">pow()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_rad2deg.asp">rad2deg()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_rand.asp">rand()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_round.asp">round()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_sin.asp">sin()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_sinh.asp">sinh()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_sqrt.asp">sqrt()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_srand.asp">srand()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_tan.asp">tan()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_math_tanh.asp">tanh()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_misc.asp">PHP Misc</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_misc_connection_aborted.asp">connection_aborted()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_connection_status.asp">connection_status()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_connection_timeout.asp">connection_timeout()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_constant.asp">constant()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_define.asp">define()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_defined.asp">defined()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_die.asp">die()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_eval.asp">eval()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_exit.asp">exit()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_get_browser.asp">get_browser()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc___halt_compiler.asp">__halt_compiler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_highlight_file.asp">highlight_file()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_highlight_string.asp">highlight_string()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_hrtime.asp">hrtime()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_misc_ignore_user_abort.asp">ignore_user_abort()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_pack.asp">pack()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_php_strip_whitespace.asp">php_strip_whitespace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_show_source.asp">show_source()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_sleep.asp">sleep()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_sys_getloadavg.asp">sys_getloadavg()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_time_nanosleep.asp">time_nanosleep()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_time_sleep_until.asp">time_sleep_until()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_uniqid.asp">uniqid()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_unpack.asp">unpack()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_misc_usleep.asp">usleep()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_mysqli.asp">PHP MySQLi</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_affected_rows.asp">affected_rows</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_autocommit.asp">autocommit</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_change_user.asp">change_user</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_character_set_name.asp">character_set_name</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_close.asp">close</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_commit.asp">commit</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_connect.asp">connect</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_connect_errno.asp">connect_errno</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_connect_error.asp">connect_error</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_data_seek.asp">data_seek</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_debug.asp">debug</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_dump_debug_info.asp">dump_debug_info</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_errno.asp">errno</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_error.asp">error</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_error_list.asp">error_list</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_all.asp">fetch_all</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_array.asp">fetch_array</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_assoc.asp">fetch_assoc</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_field.asp">fetch_field</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_field_direct.asp">fetch_field_direct</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_fields.asp">fetch_fields</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_lengths.asp">fetch_lengths</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_object.asp">fetch_object</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_fetch_row.asp">fetch_row</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_field_count.asp">field_count</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_field_seek.asp">field_seek</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_charset.asp">get_charset</a>            
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_client_info.asp">get_client_info</a>                
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_client_stats.asp">get_client_stats</a>                
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_client_version.asp">get_client_version</a>                
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_connection_stats.asp">get_connection_stats</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_host_info.asp">get_host_info</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_proto_info.asp">get_proto_info</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_server_info.asp">get_server_info</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_get_server_version.asp">get_server_version</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_info.asp">info</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_init.asp">init</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_insert_id.asp">insert_id</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_kill.asp">kill</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_more_results.asp">more_results</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_multi_query.asp">multi_query</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_next_result.asp">next_result</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_options.asp">options</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_ping.asp">ping</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_poll.asp">poll</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_prepare.asp">prepare</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_query.asp">query</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_real_connect.asp">real_connect</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_real_escape_string.asp">real_escape_string</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_real_query.asp">real_query</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_reap_async_query.asp">reap_async_query</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_refresh.asp">refresh</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_rollback.asp">rollback</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_select_db.asp">select_db</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_set_charset.asp">set_charset</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_set_local_infile_handler.asp">set_local_infile_handler</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_sqlstate.asp">sqlstate</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_ssl_set.asp">ssl_set</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_stat.asp">stat</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_stmt_init.asp">stmt_init</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_thread_id.asp">thread_id</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_thread_safe.asp">thread_safe</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_use_result.asp">use_result</a>
    <a target="_top" href="https://www.w3schools.com/php/func_mysqli_warning_count.asp">warning_count</a>           
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_network.asp">PHP Network</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_network_checkdnsrr.asp">checkdnsrr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_closelog.asp">closelog()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_dns_check_record.asp">dns_check_record()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_dns_get_mx.asp">dns_get_mx()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_dns_get_record.asp">dns_get_record()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_fsockopen.asp">fsockopen()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_gethostbyaddr.asp">gethostbyaddr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_gethostbyname.asp">gethostbyname()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_gethostbynamel.asp">gethostbynamel()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_gethostname.asp">gethostname()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_getmxrr.asp">getmxrr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_getprotobyname.asp">getprotobyname()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_getprotobynumber.asp">getprotobynumber()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_getservbyname.asp">getservbyname()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_getservbyport.asp">getservbyport()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_header_register_callback.asp">header_register_callback()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_header_remove.asp">header_remove()</a>            
    <a target="_top" href="https://www.w3schools.com/php/func_network_header.asp">header()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_headers_list.asp">headers_list()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_headers_sent.asp">headers_sent()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_http_response_code.asp">http_response_code()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_inet_ntop.asp">inet_ntop()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_inet_pton.asp">inet_pton()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_ip2long.asp">ip2long()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_long2ip.asp">long2ip()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_openlog.asp">openlog()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_pfsockopen.asp">pfsockopen()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_network_setcookie.asp">setcookie()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_setrawcookie.asp">setrawcookie()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_socket_get_status.asp">socket_get_status()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_socket_set_blocking.asp">socket_set_blocking()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_network_socket_set_timeout.asp">socket_set_timeout()</a>            
    <a target="_top" href="https://www.w3schools.com/php/func_network_syslog.asp">syslog()</a>
</div>

<a target="_top" href="https://www.w3schools.com/php/php_ref_regex.asp">PHP RegEx</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_filter.asp">preg_filter()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_grep.asp">preg_grep()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_last_error.asp">preg_last_error()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_match.asp">preg_match()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_match_all.asp">preg_match_all()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_replace.asp">preg_replace</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_replace_callback.asp">preg_replace_callback</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_replace_callback_array.asp">preg_replace_callback_array</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_split.asp">preg_split</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_regex_preg_quote.asp">preg_quote</a>    
</div>

<a target="_top" href="https://www.w3schools.com/php/php_ref_simplexml.asp">PHP SimpleXML</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml__construct.asp">__construct()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml__tostring.asp">__tostring()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_addattribute.asp">addAttribute()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_addchild.asp">addChild()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_asxml.asp">asXML()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_attributes.asp">attributes()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_children.asp">children()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_count.asp">count()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_getdocnamespaces.asp">getDocNamespaces()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_getname.asp">getName()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_getnamespaces.asp">getNamespaces()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_registerxpathnamespace.asp">registerXPathNamespace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_savexml.asp">saveXML()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_import_dom.asp">simplexml_import_dom()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_load_file.asp">simplexml_load_file()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_load_string.asp">simplexml_load_string()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_xpath.asp">xpath()</a>
    <br>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_current.asp">current()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_getchildren.asp">getchildren()</a>            
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_haschildren.asp">haschildren()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_key.asp">key()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_next.asp">next()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_rewind.asp">rewind()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_simplexml_valid.asp">valid()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_stream.asp">PHP Stream</a>
<a target="_top" href="https://www.w3schools.com/php/php_ref_string.asp">PHP String</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_string_addcslashes.asp">addcslashes()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_addslashes.asp">addslashes()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_bin2hex.asp">bin2hex()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_chop.asp">chop()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_chr.asp">chr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_chunk_split.asp">chunk_split()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_convert_cyr_string.asp">convert_cyr_string()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_convert_uudecode.asp">convert_uudecode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_convert_uuencode.asp">convert_uuencode()</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_string_count_chars.asp">count_chars()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_crc32.asp">crc32()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_crypt.asp">crypt()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_echo.asp">echo()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_explode.asp">explode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_fprintf.asp">fprint()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_get_html_translation_table.asp">get_html_translation_table()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_hebrev.asp">hebrev()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_hebrevc.asp">hebrevc()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_hex2bin.asp">hex2bin()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_html_entity_decode.asp">html_entity_decode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_htmlentities.asp">htmlentities()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_htmlspecialchars_decode.asp">htmlspecialchars_decode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_htmlspecialchars.asp">htmlspecialchars()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_implode.asp">implode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_join.asp">join()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_lcfirst.asp">lcfirst()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_levenshtein.asp">levenshtein()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_localeconv.asp">localeconv()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_ltrim.asp">ltrim()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_md5.asp">md5()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_md5_file.asp">md5_file()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_metaphone.asp">metaphone()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_money_format.asp">money_format()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_nl_langinfo.asp">nl_langinfo()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_nl2br.asp">nl2br()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_number_format.asp">number_format()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_ord.asp">ord()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_parse_str.asp">parse_str()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_print.asp">print()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_string_printf.asp">printf()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_quoted_printable_decode.asp">quoted_printable_decode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_quoted_printable_encode.asp">quoted_printable_encode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_quotemeta.asp">quotemeta()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_rtrim.asp">rtrim()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_setlocale.asp">setlocale()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_sha1.asp">sha1()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_sha1_file.asp">sha1_file()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_similar_text.asp">similar_text()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_soundex.asp">soundex()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_sprintf.asp">sprintf()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_sscanf.asp">sscanf()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_getcsv.asp">str_getcsv()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_ireplace.asp">str_ireplace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_pad.asp">str_pad()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_repeat.asp">str_repeat()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_replace.asp">str_replace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_rot13.asp">str_rot13()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_shuffle.asp">str_shuffle()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_split.asp">str_split()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_str_word_count.asp">str_word_count()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strcasecmp.asp">strcasecmp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strchr.asp">strchr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strcmp.asp">strcmp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strcoll.asp">strcoll()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strcspn.asp">strcspn()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strip_tags.asp">strip_tags()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_stripcslashes.asp">stripcslashes()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_stripslashes.asp">stripslashes()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_stripos.asp">stripos()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_stristr.asp">stristr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strlen.asp">strlen()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strnatcasecmp.asp">strnatcasecmp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strnatcmp.asp">strnatcmp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strncasecmp.asp">strncasecmp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strncmp.asp">strncmp()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strpbrk.asp">strpbrk()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strpos.asp">strpos()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strrchr.asp">strrchr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strrev.asp">strrev()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strripos.asp">strripos()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strrpos.asp">strrpos()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strspn.asp">strspn()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strstr.asp">strstr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strtok.asp">strtok()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strtolower.asp">strtolower()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strtoupper.asp">strtoupper()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_strtr.asp">strtr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_substr.asp">substr()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_substr_compare.asp">substr_compare()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_substr_count.asp">substr_count()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_substr_replace.asp">substr_replace()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_trim.asp">trim()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_ucfirst.asp">ucfirst()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_ucwords.asp">ucwords()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_vfprintf.asp">vfprintf()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_vprintf.asp">vprintf()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_vsprintf.asp">vsprintf()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_string_wordwrap.asp">wordwrap()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_variable_handling.asp">PHP Variable Handling
</a><div class="ref_overview" style="margin-left:10px;background-color:#ddd"><a target="_top" href="https://www.w3schools.com/php/php_ref_variable_handling.asp">
    </a><a target="_top" href="https://www.w3schools.com/php/func_var_boolval.asp">boolval()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_debug_zval_dump.asp">debug_zval_dump()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_doubleval.asp">doubleval()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_countable.asp">is_countable()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_empty.asp">empty()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_floatval.asp">floatval()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_get_defined_vars.asp">get_defined_vars()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_get_resource_type.asp">get_resource_type()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_gettype.asp">gettype()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_intval.asp">intval()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_array.asp">is_array()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_bool.asp">is_bool()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_callable.asp">is_callable()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_double.asp">is_double()</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_float.asp">is_float()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_int.asp">is_int()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_integer.asp">is_integer()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_iterable.asp">is_iterable()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_long.asp">is_long()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_null.asp">is_null()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_numeric.asp">is_numeric()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_object.asp">is_object()</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_real.asp">is_real()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_resource.asp">is_resource()</a>            
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_scalar.asp">is_scalar()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_is_string.asp">is_string()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_isset.asp">isset()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_print_r.asp">print_r()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_serialize.asp">serialize()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_settype.asp">settype()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_strval.asp">strval()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_unserialize.asp">unserialize()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_unset.asp">unset()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_var_dump.asp">var_dump()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_var_var_export.asp">var_export()</a>    
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_xml.asp">PHP XML Parser</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_xml_utf8_decode.asp">utf8_decode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_utf8_encode.asp">utf8_encode()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_error_string.asp">xml_error_string()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_get_current_byte_index.asp">xml_get_current_byte_index()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_get_current_column_number.asp">xml_get_current_column_number()</a>        
    <a target="_top" href="https://www.w3schools.com/php/func_xml_get_current_line_number.asp">xml_get_current_line_number()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_get_error_code.asp">xml_get_error_code()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_parse.asp">xml_parse()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_parse_into_struct.asp">xml_parse_into_struct()</a>            
    <a target="_top" href="https://www.w3schools.com/php/func_xml_parser_create_ns.asp">xml_parser_create_ns()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_parser_create.asp">xml_parser_create()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_parser_free.asp">xml_parser_free()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_parser_get_option.asp">xml_parser_get_option()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_xml_parser_set_option.asp">xml_parser_set_option()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_character_data_handler.asp">xml_set_character_data_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_default_handler.asp">xml_set_default_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_element_handler.asp">xml_set_element_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_end_namespace_decl_handler.asp">xml_set_end_namespace_decl_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_external_entity_ref_handler.asp">xml_set_external_entity_ref_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_notation_decl_handler.asp">xml_set_notation_decl_handler()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_object.asp">xml_set_object()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_processing_instruction_handler.asp">xml_set_processing_instruction_handler()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_start_namespace_decl_handler.asp">xml_set_start_namespace_decl_handler()</a>    
    <a target="_top" href="https://www.w3schools.com/php/func_xml_set_unparsed_entity_decl_handler.asp">xml_set_unparsed_entity_decl_handler()</a>
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_zip.asp">PHP Zip</a>
<div class="ref_overview" style="margin-left:10px;background-color:#ddd">
    <a target="_top" href="https://www.w3schools.com/php/func_zip_close.asp">zip_close()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_zip_entry_close.asp">zip_entry_close()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_zip_entry_compressedsize.asp">zip_entry_compressedsize()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_zip_entry_compressionmethod.asp">zip_entry_compressionmethod()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_zip_entry_filesize.asp">zip_entry_filesize()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_zip_entry_name.asp">zip_entry_name()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_zip_entry_open.asp">zip_entry_open()</a>
    <a target="_top" href="https://www.w3schools.com/php/func_zip_entry_read.asp">zip_entry_read()</a>                    
    <a target="_top" href="https://www.w3schools.com/php/func_zip_open.asp">zip_open()</a>                    
    <a target="_top" href="https://www.w3schools.com/php/func_zip_read.asp">zip_read()</a>                        
</div>
<a target="_top" href="https://www.w3schools.com/php/php_ref_timezones.asp">PHP Timezones</a>
      <br><br>
    </div>
  </div>
</div>
<div class="w3-main w3-light-grey" id="belowtopnav" style="margin-left: 220px; padding-top: 44px;">
  <div class="w3-row w3-white">
    <div class="w3-col l10 m12" id="main">
      <div id="mainLeaderboard" style="overflow:hidden;">
        <!-- MainLeaderboard-->

        <!--<pre>main_leaderboard, all: [728,90][970,90][320,50][468,60]</pre>-->
        <div id="snhb-main_leaderboard-0" data-google-query-id="CIem3fD18-oCFaduwQodZ30Iew"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_0" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//main_leaderboard_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="1" data-load-complete="true" width="468" height="59" frameborder="0"></iframe></div></div>
        <!-- adspace leaderboard -->
       
      </div>
<h1>PHP <span class="color_h1">File Create/Write</span></h1>
<div class="w3-clear nextprev">
  <a class="w3-left w3-btn" href="https://www.w3schools.com/php/php_file_open.asp">❮ Previous</a>
  <a class="w3-right w3-btn" href="https://www.w3schools.com/php/php_file_upload.asp">Next ❯</a>
</div>
<hr>
<p class="intro">In this chapter we will teach you how to create and write to a file 
on the server.</p>
<hr>

<h2>PHP Create File - fopen()</h2>
<p>The <code class="w3-codespan">fopen()</code> function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same 
function used to open files.</p>
<p>If you use <code class="w3-codespan">fopen()</code> on a file that does not 
exist, it will create it, given that the file is opened for writing (w) or 
appending (a).</p>
<p>The example below creates a new file called "testfile.txt". The file will be 
created in the same directory where the PHP code resides:</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code phpHigh notranslate">
 $myfile = fopen("testfile.txt", "w")
</div>
<br>
</div>
<hr>

<h2>PHP File Permissions</h2>
<p>If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write 
information to the hard drive.</p>
<hr>

<h2>PHP Write to File - fwrite()</h2>
<p>The <code class="w3-codespan">fwrite()</code> function is used to write to a file.</p>
<p>The first parameter of <code class="w3-codespan">fwrite()</code> contains the name of the file to write to and 
the second parameter is the string to be written.</p>
<p>The example below writes a couple of names into a new file called "newfile.txt":</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code htmlHigh notranslate">
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$myfile = fopen(<span class="phpstringcolor" style="color:brown">"newfile.txt"</span>, <span class="phpstringcolor" style="color:brown">"w"</span>) <span class="phpkeywordcolor" style="color:mediumblue">or</span> <span class="phpkeywordcolor" style="color:mediumblue">die</span>(<span class="phpstringcolor" style="color:brown">"Unable to open file!"</span>);<br>$txt = <span class="phpstringcolor" style="color:brown">"John Doe\n"</span>;<br>fwrite($myfile, $txt);<br>$txt = <span class="phpstringcolor" style="color:brown">"Jane Doe\n"</span>;<br>fwrite($myfile, $txt);<br>fclose($myfile);<br><span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
<br>
</div>

<p>Notice that we wrote to the file "newfile.txt" twice. Each time we wrote to 
the file we sent the string $txt that first contained "John Doe" and second 
contained "Jane Doe". After we finished writing, we closed the file using the <code class="w3-codespan">fclose()</code> function.</p>
<p>If we open the "newfile.txt" file it would look like this:</p>
<div class="w3-code htmlHigh w3-border notranslate"><div>
 John Doe<br>Jane Doe</div>
 </div>
<hr>
<div id="midcontentadcontainer" style="overflow:auto;text-align:center">
<!-- MidContent -->

  <!--<pre>mid_content, all: [300,250][336,280][728,90][970,250][970,90][320,50][468,60]</pre>-->
  <div id="snhb-mid_content-0" data-google-query-id="CJar8fH18-oCFdCCywEd7wUH3A"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0__container__" style="border: 0pt none; display: inline-block; width: 336px; height: 281px;"><iframe style="border: 0px none; vertical-align: bottom;" src="lala_arquivos/container.html" id="google_ads_iframe_/22152718/sws-hb//w3schools.com//mid_content_0" title="3rd party ad content" name="" scrolling="no" marginwidth="0" marginheight="0" data-is-safeframe="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" data-google-container-id="6" data-load-complete="true" width="336" height="281" frameborder="0"></iframe></div></div>

<!--<p class="adtext">Advertisement</p>    -->
</div>
<hr>
<h2>PHP Overwriting</h2>
<p>Now that "newfile.txt" contains some data we can show what happens when we 
open an existing file for writing. All the existing data will be ERASED and we 
start with an empty file.</p>
<p>In the example below we open our existing file "newfile.txt", and write some 
new data into it:</p>
<div class="w3-example">
 <h3>Example</h3>
<div class="w3-code htmlHigh notranslate">
 <span class="phpcolor" style="color:black"><span class="phptagcolor" style="color:red">&lt;?php</span><br>$myfile = fopen(<span class="phpstringcolor" style="color:brown">"newfile.txt"</span>, <span class="phpstringcolor" style="color:brown">"w"</span>) <span class="phpkeywordcolor" style="color:mediumblue">or</span> <span class="phpkeywordcolor" style="color:mediumblue">die</span>(<span class="phpstringcolor" style="color:brown">"Unable to open file!"</span>);<br>$txt = <span class="phpstringcolor" style="color:brown">"Mickey Mouse\n"</span>;<br>fwrite($myfile, $txt);<br>$txt = <span class="phpstringcolor" style="color:brown">"Minnie Mouse\n"</span>;<br>fwrite($myfile, $txt);<br>fclose($myfile);<br><span class="phptagcolor" style="color:red">?&gt;</span></span>
 </div>
<br>
</div>

<p>If we now open the "newfile.txt" file, both John and Jane have 
vanished, and only the data we just wrote is present:</p>
<div class="w3-code w3-border notranslate"><div>
 Mickey Mouse<br>Minnie Mouse</div>
</div>
<hr>

<h2>Complete PHP Filesystem Reference</h2>
<p>For a complete reference of filesystem functions, go to our complete
<a href="https://www.w3schools.com/php/php_ref_filesystem.asp">PHP Filesystem Reference</a>.</p>

<br>
<div class="w3-clear nextprev">
  <a class="w3-left w3-btn" href="https://www.w3schools.com/php/php_file_open.asp">❮ Previous</a>
  <a class="w3-right w3-btn" href="https://www.w3schools.com/php/php_file_upload.asp">Next ❯</a>
</div>
</div>
<div class="w3-col l2 m12" id="right">

<div class="sidesection">
  <div id="skyscraper">
  
    <!--<pre>wide_skyscraper, all: [160,600][300,600][320,50][120,600][300,1050]</pre>-->
    <div id="snhb-wide_skyscraper-0" data-google-query-id="CNzF3_D18-oCFaduwQodZ30Iew"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//wide_skyscraper_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//wide_skyscraper_0" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//wide_skyscraper_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="2" data-load-complete="true" width="120" height="600" frameborder="0"></iframe></div></div>
    <!-- adspace wide-->
  
  </div>
</div>

<div class="sidesection">
<h4><a href="https://www.w3schools.com/colors/colors_picker.asp">COLOR PICKER</a></h4>
<a href="https://www.w3schools.com/colors/colors_picker.asp">
<img src="lala_arquivos/colorpicker.gif" alt="colorpicker"></a>
</div>

<div class="sidesection" id="moreAboutSubject">
</div>

<!--
<div id="sidesection_exercise" class="sidesection" style="background-color:#555555;max-width:200px;margin:auto;margin-bottom:32px">
  <div class="w3-container w3-text-white">
    <h4>Exercises</h4>
  </div>
  <div>
    <div class="w3-light-grey">
      <a target="_blank" href="/html/exercise.asp" style="padding-top:8px">HTML</a>
      <a target="_blank" href="/css/exercise.asp">CSS</a>
      <a target="_blank" href="/js/exercise_js.asp">JavaScript</a>
      <a target="_blank" href="/sql/exercise.asp">SQL</a>
      <a target="_blank" href="/php/exercise.asp">PHP</a>
      <a target="_blank" href="/python/exercise.asp">Python</a>
      <a target="_blank" href="/bootstrap/exercise_bs3.asp">Bootstrap</a>
      <a target="_blank" href="/jquery/exercise_jq.asp" style="padding-bottom:8px">jQuery</a>
    </div>
  </div>
</div>
-->

<div class="sidesection w3-light-grey" style="margin-left:auto;margin-right:auto;max-width:230px">
  <div class="w3-container w3-dark-grey">
    <h4><a href="https://www.w3schools.com/howto/default.asp" class="w3-hover-text-white">HOW TO</a></h4>
  </div>
  <div class="w3-container w3-left-align w3-padding-16">
    <a href="https://www.w3schools.com/howto/howto_js_tabs.asp">Tabs</a><br>
    <a href="https://www.w3schools.com/howto/howto_css_dropdown.asp">Dropdowns</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_accordion.asp">Accordions</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_sidenav.asp">Side Navigation</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_topnav.asp">Top Navigation</a><br>
    <a href="https://www.w3schools.com/howto/howto_css_modals.asp">Modal Boxes</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_progressbar.asp">Progress Bars</a><br>
    <a href="https://www.w3schools.com/howto/howto_css_parallax.asp">Parallax</a><br>
    <a href="https://www.w3schools.com/howto/howto_css_login_form.asp">Login Form</a><br>
    <a href="https://www.w3schools.com/howto/howto_html_include.asp">HTML Includes</a><br>
    <a href="https://www.w3schools.com/howto/howto_google_maps.asp">Google Maps</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_rangeslider.asp">Range Sliders</a><br>
    <a href="https://www.w3schools.com/howto/howto_css_tooltip.asp">Tooltips</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_slideshow.asp">Slideshow</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_filter_lists.asp">Filter List</a><br>
    <a href="https://www.w3schools.com/howto/howto_js_sort_list.asp">Sort List</a><br>
  </div>
</div>

<div class="sidesection">
<h4>SHARE</h4>
<div class="w3-text-grey sharethis" style="visibility: visible;">
<script>
<!--
try{
loc=location.pathname;
if (loc.toUpperCase().indexOf(".ASP")<0) loc=loc+"default.asp";
txt='<a href="http://www.facebook.com/sharer.php?u=https://www.w3schools.com'+loc+'" target="_blank" title="Facebook"><span class="fa fa-facebook-square fa-2x"></span></a>';
txt=txt+'<a href="https://twitter.com/home?status=Currently reading https://www.w3schools.com'+loc+'" target="_blank" title="Twitter"><span class="fa fa-twitter-square fa-2x"></span></a>';
document.write(txt);
} catch(e) {}
//-->
</script><a href="http://www.facebook.com/sharer.php?u=https://www.w3schools.com/php/php_file_create.asp" target="_blank" title="Facebook"><span class="fa fa-facebook-square fa-2x"></span></a><a href="https://twitter.com/home?status=Currently%20reading%20https://www.w3schools.com/php/php_file_create.asp" target="_blank" title="Twitter"><span class="fa fa-twitter-square fa-2x"></span></a>
<br><br>
<a href="javascript:void(0);" onclick="clickFBLike()" title="Like W3Schools on Facebook">
<span class="fa fa-thumbs-o-up fa-2x"></span></a>
<div id="fblikeframe" class="w3-modal">
<div class="w3-modal-content w3-padding-64 w3-animate-zoom" id="popupDIV"></div>
</div>
</div>
</div>

<div class="sidesection">
<h4><a target="_blank" href="https://www.w3schools.com/cert/default.asp">CERTIFICATES</a></h4>
<p>
<a href="https://www.w3schools.com/cert/cert_html.asp">HTML</a><br>
<a href="https://www.w3schools.com/cert/cert_css.asp">CSS</a><br>
<a href="https://www.w3schools.com/cert/cert_javascript.asp">JavaScript</a><br>
<a href="https://www.w3schools.com/cert/cert_sql.asp">SQL</a><br>
<a href="https://www.w3schools.com/cert/cert_python.asp">Python</a><br>
<a href="https://www.w3schools.com/cert/cert_php.asp">PHP</a><br>
<a href="https://www.w3schools.com/cert/cert_jquery.asp">jQuery</a><br>
<a href="https://www.w3schools.com/cert/cert_bootstrap.asp">Bootstrap</a><br>
<a href="https://www.w3schools.com/cert/cert_xml.asp">XML</a></p>
<a href="https://www.w3schools.com/cert/default.asp" class="w3-button w3-dark-grey" style="text-decoration:none">
Read More »</a>
</div>

<div id="stickypos" class="sidesection" style="text-align:center;position:sticky;top:50px;">
  <div id="stickyadcontainer" style="width: 115.983px;">
    <div style="position:relative;margin:auto;">
      
      <!--<pre>sidebar_sticky, desktop: [120,600][160,600][300,600][300,250]</pre>-->
      <div id="snhb-sidebar_sticky-0" data-google-query-id="CL-g8PH18-oCFdCCywEd7wUH3A"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//sidebar_sticky_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//sidebar_sticky_0" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//sidebar_sticky_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="5" data-load-complete="true" width="120" height="600" frameborder="0"></iframe></div></div>
      <script>
          if (Number(w3_getStyleValue(document.getElementById("main"), "height").replace("px", "")) > 2200) {
            // adspace sticky
            if (document.getElementById("snhb-mid_content-0")) {
              snhb.queue.push(function(){  snhb.startAuction(["sidebar_sticky", "mid_content" ]); });
            }
            else {
              snhb.queue.push(function(){  snhb.startAuction(["sidebar_sticky"]); });
            }
          }
          else {
              if (document.getElementById("snhb-mid_content-0")) {
                snhb.queue.push(function(){  snhb.startAuction(["mid_content"]); });
              }
          }
      </script>  
      
    </div>
  </div>
</div>

<script>
  window.addEventListener("scroll", fix_stickyad);
  window.addEventListener("resize", fix_stickyad);
</script>

</div>
</div>
<div id="footer" class="footer w3-container w3-white">

<hr>

<div style="overflow:auto">
  <div class="bottomad">
    <!-- BottomMediumRectangle -->
    <!--<pre>bottom_medium_rectangle, all: [970,250][300,250][336,280]</pre>-->
    <div id="snhb-bottom_medium_rectangle-0" style="padding:0 10px 10px 0;float:left;width:auto;" data-google-query-id="CN3F3_D18-oCFaduwQodZ30Iew"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//bottom_medium_rectangle_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//bottom_medium_rectangle_0" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//bottom_medium_rectangle_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="3" data-load-complete="true" width="300" height="250" frameborder="0"></iframe></div></div>
    <!-- adspace bmr -->
    <!-- RightBottomMediumRectangle -->
    <!--<pre>right_bottom_medium_rectangle, desktop: [300,250][336,280]</pre>-->
    <div id="snhb-right_bottom_medium_rectangle-0" style="padding:0 10px 10px 0;float:left;width:auto;" data-google-query-id="CN7F3_D18-oCFaduwQodZ30Iew"><div id="google_ads_iframe_/22152718/sws-hb//w3schools.com//right_bottom_medium_rectangle_0__container__" style="border: 0pt none;"><iframe id="google_ads_iframe_/22152718/sws-hb//w3schools.com//right_bottom_medium_rectangle_0" title="3rd party ad content" name="google_ads_iframe_/22152718/sws-hb//w3schools.com//right_bottom_medium_rectangle_0" scrolling="no" marginwidth="0" marginheight="0" style="border: 0px none; vertical-align: bottom;" srcdoc="" data-google-container-id="4" data-load-complete="true" width="300" height="250" frameborder="0"></iframe></div></div>
  </div>
</div>

<hr>
<div class="w3-row-padding w3-center w3-small" style="margin:0 -16px">
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="javascript:void(0);" onclick="displayError();return false" style="white-space:nowrap;text-decoration:none;margin-top:1px;margin-bottom:1px">REPORT ERROR</a>
</div>
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="javascript:void(0);" target="_blank" onclick="printPage();return false;" style="text-decoration:none;margin-top:1px;margin-bottom:1px">PRINT PAGE</a>
</div>
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="https://www.w3schools.com/forum/default.asp" target="_blank" style="text-decoration:none;margin-top:1px;margin-bottom:1px">FORUM</a>
</div>
<div class="w3-col l3 m3 s12">
<a class="w3-button w3-light-grey w3-block" href="https://www.w3schools.com/about/default.asp" target="_top" style="text-decoration:none;margin-top:1px;margin-bottom:1px">ABOUT</a>
</div>
</div>
<hr>
<div class="w3-light-grey w3-padding w3-margin-bottom" id="err_form" style="display:none;position:relative">
<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright w3-large">×</span>

<h2>Report Error</h2>

<p>If you want to report an error, or if you want to make a suggestion, do not hesitate to send us an e-mail:</p>
<p>help@w3schools.com</p>
<br>

<!--
<h2>Your Suggestion:</h2>
<form>
<div class="w3-section">      
<label for="err_email">Your E-mail:</label>
<input class="w3-input w3-border" type="text" style="margin-top:5px;width:100%" id="err_email" name="err_email">
</div>
<div class="w3-section">      
<label for="err_email">Page address:</label>
<input class="w3-input w3-border" type="text" style="width:100%;margin-top:5px" id="err_url" name="err_url" disabled="disabled">
</div>
<div class="w3-section">
<label for="err_email">Description:</label>
<textarea rows="10" class="w3-input w3-border" id="err_desc" name="err_desc" style="width:100%;margin-top:5px;resize:vertical;"></textarea>
</div>
<div class="form-group">        
<button type="button" class="w3-button w3-dark-grey" onclick="sendErr()">Submit</button>
</div>
<br>
</form>
-->

</div>
<div class="w3-container w3-light-grey w3-padding" id="err_sent" style="display:none;position:relative">
<span onclick="this.parentElement.style.display='none'" class="w3-button w3-display-topright">×</span>     
<h2>Thank You For Helping Us!</h2>
<p>Your message has been sent to W3Schools.</p>
</div>

<div class="w3-row w3-center w3-small">
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Top Tutorials</h4>
<a href="https://www.w3schools.com/html/default.asp">HTML Tutorial</a><br>
<a href="https://www.w3schools.com/css/default.asp">CSS Tutorial</a><br>
<a href="https://www.w3schools.com/js/default.asp">JavaScript Tutorial</a><br>
<a href="https://www.w3schools.com/howto/default.asp">How To Tutorial</a><br>
<a href="https://www.w3schools.com/sql/default.asp">SQL Tutorial</a><br>
<a href="https://www.w3schools.com/python/default.asp">Python Tutorial</a><br>
<a href="https://www.w3schools.com/w3css/default.asp">W3.CSS Tutorial</a><br>
<a href="https://www.w3schools.com/bootstrap/bootstrap_ver.asp">Bootstrap Tutorial</a><br>
<a href="https://www.w3schools.com/php/default.asp">PHP Tutorial</a><br>
<a href="https://www.w3schools.com/jquery/default.asp">jQuery Tutorial</a><br>
<a href="https://www.w3schools.com/java/default.asp">Java Tutorial</a><br>
<a href="https://www.w3schools.com/cpp/default.asp">C++ Tutorial</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Top References</h4>
<a href="https://www.w3schools.com/tags/default.asp">HTML Reference</a><br>
<a href="https://www.w3schools.com/cssref/default.asp">CSS Reference</a><br>
<a href="https://www.w3schools.com/jsref/default.asp">JavaScript Reference</a><br>
<a href="https://www.w3schools.com/sql/sql_ref_keywords.asp">SQL Reference</a><br>
<a href="https://www.w3schools.com/python/python_reference.asp">Python Reference</a><br>
<a href="https://www.w3schools.com/w3css/w3css_references.asp">W3.CSS Reference</a><br>
<a href="https://www.w3schools.com/bootstrap/bootstrap_ref_all_classes.asp">Bootstrap Reference</a><br>
<a href="https://www.w3schools.com/php/php_ref_overview.asp">PHP Reference</a><br>
<a href="https://www.w3schools.com/colors/colors_names.asp">HTML Colors</a><br>
<a href="https://www.w3schools.com/jquery/jquery_ref_overview.asp">jQuery Reference</a><br>
<a href="https://www.w3schools.com/java/java_ref_keywords.asp">Java Reference</a><br>
<a href="https://www.w3schools.com/angular/angular_ref_directives.asp">Angular Reference</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Top Examples</h4>
<a href="https://www.w3schools.com/html/html_examples.asp">HTML Examples</a><br>
<a href="https://www.w3schools.com/css/css_examples.asp">CSS Examples</a><br>
<a href="https://www.w3schools.com/js/js_examples.asp">JavaScript Examples</a><br>
<a href="https://www.w3schools.com/howto/default.asp">How To Examples</a><br>
<a href="https://www.w3schools.com/sql/sql_examples.asp">SQL Examples</a><br>
<a href="https://www.w3schools.com/python/python_examples.asp">Python Examples</a><br>
<a href="https://www.w3schools.com/w3css/w3css_examples.asp">W3.CSS Examples</a><br>
<a href="https://www.w3schools.com/bootstrap/bootstrap_examples.asp">Bootstrap Examples</a><br>
<a href="https://www.w3schools.com/php/php_examples.asp">PHP Examples</a><br>
<a href="https://www.w3schools.com/jquery/jquery_examples.asp">jQuery Examples</a><br>
<a href="https://www.w3schools.com/java/java_examples.asp">Java Examples</a><br>
<a href="https://www.w3schools.com/xml/xml_examples.asp">XML Examples</a><br>
</div>
</div>
<div class="w3-col l3 m6 s12">
<div class="top10">
<h4>Web Certificates</h4>
<a href="https://www.w3schools.com/cert/default.asp">HTML Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">CSS Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">JavaScript Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">SQL Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">Python Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">jQuery Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">PHP Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">Bootstrap Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp">XML Certificate</a><br>
<a href="https://www.w3schools.com/cert/default.asp" class="w3-button w3-margin-top w3-dark-grey" style="text-decoration:none">
Get Certified »</a>

</div>
</div>        
</div>        

<hr>
<div class="w3-center w3-small w3-opacity">
W3Schools is optimized for learning, testing, and training. Examples 
might be simplified to improve reading and basic understanding.
Tutorials, references, and examples are constantly reviewed to avoid 
errors, but we cannot warrant full correctness of all content.
While using this site, you agree to have read and accepted our <a href="https://www.w3schools.com/about/about_copyright.asp">terms of use</a>,
<a href="https://www.w3schools.com/about/about_privacy.asp">cookie and privacy policy</a>.
<a href="https://www.w3schools.com/about/about_copyright.asp">Copyright 1999-2020</a> by Refsnes Data. All Rights Reserved.<br>
 <a href="https://www.w3schools.com/w3css/default.asp">Powered by W3.CSS</a>.<br><br>
<a href="https://www.w3schools.com/">
<img style="width:150px;height:28px;border:0" src="lala_arquivos/w3schoolscom_gray.gif" alt="W3Schools.com"></a>
</div>
<br><br>
</div>

</div>
<script src="lala_arquivos/w3schools_footer.js"></script>
<script src="lala_arquivos/element.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
<![endif]--><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="lala_arquivos/translate_24dp.png" alt="Google Tradutor" width="20" height="20"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Texto original</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Sugerir uma tradução melhor</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>


<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div><iframe class="goog-te-menu-frame skiptranslate" title="Widget de tradução de idiomas" style="visibility: visible; box-sizing: content-box; width: 982px; height: 274px; display: none;" frameborder="0"></iframe><iframe style="display: none;" name="__cmpLocator"></iframe><iframe style="display: none;" name="__uspapiLocator"></iframe><table style="width: 2px; display: none; top: 3px; position: absolute; left: -1px;" class="gstl_50 gssb_c" cellspacing="0" cellpadding="0"><tbody><tr><td class="gssb_f"></td><td class="gssb_e" style="width: 100%;"></td></tr></tbody></table><iframe style="display: none;" src="https://s.amazon-adsystem.com/iu3?cm3ppd=1&amp;d=dtb-pub&amp;csif=t&amp;gdpr=0&amp;dl=rbd_n-emx_oath_rx_snb_dm_sovrn_dmx"></iframe><iframe id="google_osd_static_frame_4992021652360" name="google_osd_static_frame" style="display: none; width: 0px; height: 0px;"></iframe></body><iframe sandbox="allow-scripts allow-same-origin" id="614fb014d7aad26" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/connectmyusers_002.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="62649c08d8fd1378" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/async_usersync_002.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="635e00fc3b7f3028" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/connectmyusers_002.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="644e707467f293b" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/async_usersync_002.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="65908219a321753" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="https://us-u.openx.net/w/1.0/pd?plm=6&amp;ph=8a7ca719-8c2c-4c16-98ad-37ac6dbf26e9&amp;gdpr=0&amp;gdpr_consent=BO3VdjTO3VdjTDlDLAENDU-AAAAxKAAA&amp;us_privacy=1---" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="666ba4c242f0acd" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/showad.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="67ec5bb507cf23f" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/showad_002.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="686315e33659b6e8" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="https://us-u.openx.net/w/1.0/pd?plm=6&amp;ph=8a7ca719-8c2c-4c16-98ad-37ac6dbf26e9&amp;gdpr=0&amp;gdpr_consent=BO3VdjTO3VdjTDlDLAENDU-AAAAxKAAA&amp;us_privacy=1---" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="69f0bd03e8daa5a" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/ixmatch_002.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="70b2c3d6c6b18fd" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/usync.html" width="0" height="0" frameborder="0">
    </iframe><iframe sandbox="allow-scripts allow-same-origin" id="71c62db16150c78" allowtransparency="true" marginheight="0" marginwidth="0" hspace="0" vspace="0" style="height:0px;width:0px;display:none;" scrolling="no" src="lala_arquivos/ixmatch_002.html" width="0" height="0" frameborder="0">
    </iframe></html>
