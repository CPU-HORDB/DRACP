<?php
header('Content-Type:text/html; charset=utf-8');
date_default_timezone_set('PRC');

$conn=@mysqli_connect('localhost','root','zhengh123','Dracp') or die('连接错误！请检查网络');
mysqli_query($conn,'set names utf8');




?>

<!DOCTYPE html>
<html lang="en">

<!--  browse   -->

<head>
    <title>Classified-Browse</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/public.css">
    <script language="Javascript" src="http://dracp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dracp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>

</head>

<body>

<?php
require_once ("../head/head_content.php");
?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="http://dracp.cpu-bioinfor.org">Home</a></li>
            <li><a href="http://dracp.cpu-bioinfor.org/browse/Peptide_Information.php">Browse</a></li>
            <li class="active">Classified Browse</li>
        </ol>
    </div>



    <div style="padding-left: 20%;padding-right: 20%">
        <div class="alert alert-success" role="alert" onclick="aa(1)">
            <p  class="alert-link" style="font-size: 22px;"><span id="aa">+</span> By Type</p>
        </div>

        <div class="container" id="a" style="display: none">
            <ul>
                <li><a href="Classfied_Information.php?a=1&b=Native peptide" style="color: black;font-size: 16px">Native peptide</a></li>
                <li><a href="Classfied_Information.php?a=1&b=Designed peptide"  style="color: black;font-size: 16px">Designed peptide</a></li>
            </ul>

        </div>
    </div>

    <div style="padding-left: 20%;padding-right: 20%">
        <div class="alert alert-success" role="alert" onclick="aa(2)">
            <p  class="alert-link" style="font-size: 22px;"><span id="bb">+</span> By Nature</p>
        </div>

        <div class="container" id="b" style="display: none">
            <ul>
                <li><a href="Classfied_Information.php?a=2&b=Anticancer" style="color: black;font-size: 16px">Anticancer</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antitumor"  style="color: black;font-size: 16px">Antitumor</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antimicrobial"  style="color: black;font-size: 16px">Antimicrobial</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antibacterial" style="color: black;font-size: 16px">Antibacterial</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antiangiogenesis"  style="color: black;font-size: 16px">Antiangiogenesis</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antifungal"  style="color: black;font-size: 16px">Antifungal</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antihypertensive"  style="color: black;font-size: 16px">Antihypertensive</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antiviral"  style="color: black;font-size: 16px">Antiviral</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Antioxidant"  style="color: black;font-size: 16px">Antioxidant</a></li>
                <li><a href="Classfied_Information.php?a=2&b=Immunomodulant"  style="color: black;font-size: 16px">Immunomodulant</a></li>
            </ul>

        </div>
    </div>

    <div style="padding-left: 20%;padding-right: 20%">
        <div class="alert alert-success" role="alert" onclick="aa(3)">
            <p  class="alert-link" style="font-size: 22px;"><span id="cc">+</span> By Chiral</p>
        </div>

        <div class="container" id="c" style="display: none">
            <ul>
                <li><a href="Classfied_Information.php?a=3&b=L" style="color: black;font-size: 16px">L</a></li>
                <li><a href="Classfied_Information.php?a=3&b=D"  style="color: black;font-size: 16px">D</a></li>
                <li><a href="Classfied_Information.php?a=3&b=Mix" style="color: black;font-size: 16px">Mix</a></li>
            </ul>

        </div>
    </div>

    <div style="padding-left: 20%;padding-right: 20%">
        <div class="alert alert-success" role="alert" onclick="aa(4)">
            <p  class="alert-link" style="font-size: 22px;"><span id="dd">+</span> By Length</p>
        </div>

        <div class="container" id="d" style="display: none">
            <ul>
                <li><a href="Classfied_Information.php?a=4&b=2&c=5" style="color: black;font-size: 16px">2-5</a></li>
                <li><a href="Classfied_Information.php?a=4&b=6&c=50"  style="color: black;font-size: 16px">6-50</a></li>
                <li><a href="Classfied_Information.php?a=4&b=51&c=100" style="color: black;font-size: 16px">51-100</a></li>
            </ul>

        </div>
    </div>

    <div style="padding-left: 20%;padding-right: 20%">
        <div class="alert alert-success" role="alert" onclick="aa(5)">
            <p  class="alert-link" style="font-size: 22px;"><span id="ee">+</span> By Cancer classified</p>
        </div>

        <div class="container" id="e" style="display: none">
            <ul>
                <li><a href="Classfied_Information.php?a=5&b=Carcinoma" style="color: black;font-size: 16px">Carcinoma</a></li>
                <li><a href="Classfied_Information.php?a=5&b=Sarcoma"  style="color: black;font-size: 16px">Sarcoma</a></li>
                <li><a href="Classfied_Information.php?a=5&b=Lymphoma"  style="color: black;font-size: 16px">Lymphoma</a></li>
                <li><a href="Classfied_Information.php?a=5&b=Leukemia" style="color: black;font-size: 16px">Leukemia</a></li>
                <li><a href="Classfied_Information.php?a=5&b=Germ"  style="color: black;font-size: 16px">Germ</a></li>
                <li><a href="Classfied_Information.php?a=5&b=Blastoma"  style="color: black;font-size: 16px">Blastoma</a></li>
            </ul>

        </div>
    </div>


    <div style="padding-left: 20%;padding-right: 20%">
        <div class="alert alert-success" role="alert" onclick="aa(6)">
            <p  class="alert-link" style="font-size: 22px;"><span id="ff">+</span> By Data type</p>
        </div>

        <div class="container" id="f" style="display: none">
            <ul>

                <li><a href="Classfied_Information.php?a=6&b=Literature" style="color: black;font-size: 16px">Literature</a></li>
                <li><a href="Classfied_Information.php?a=6&b=Patent" style="color: black;font-size: 16px">Patent</a></li>

            </ul>

        </div>
    </div>
    <div></div>

</div>




<div style="height: 300px"></div>

<?php

require_once("../head/footer.php");

?>



</body>
<script>
    function aa(a) {
        if(a==1){
            if(document.getElementById('a').style.display=='none'){
                document.getElementById('a').style.display='block';
                document.getElementById('aa').innerHTML='-';
            }else {
                document.getElementById('a').style.display='none';
                document.getElementById('aa').innerHTML='+';
            }
        }

        if(a==2){
            if(document.getElementById('b').style.display=='none'){
                document.getElementById('b').style.display='block';
                document.getElementById('bb').innerHTML='-';
            }else {
                document.getElementById('b').style.display='none';
                document.getElementById('bb').innerHTML='+';
            }
        }

        if(a==3){
            if(document.getElementById('c').style.display=='none'){
                document.getElementById('c').style.display='block';
                document.getElementById('cc').innerHTML='-';
            }else {
                document.getElementById('c').style.display='none';
                document.getElementById('cc').innerHTML='+';
            }
        }

        if(a==4){
            if(document.getElementById('d').style.display=='none'){
                document.getElementById('d').style.display='block';
                document.getElementById('dd').innerHTML='-';
            }else {
                document.getElementById('d').style.display='none';
                document.getElementById('dd').innerHTML='+';
            }
        }

        if(a==5){
            if(document.getElementById('e').style.display=='none'){
                document.getElementById('e').style.display='block';
                document.getElementById('ee').innerHTML='-';
            }else {
                document.getElementById('e').style.display='none';
                document.getElementById('ee').innerHTML='+';
            }
        }

        if(a==6){
            if(document.getElementById('f').style.display=='none'){
                document.getElementById('f').style.display='block';
                document.getElementById('ff').innerHTML='-';
            }else {
                document.getElementById('f').style.display='none';
                document.getElementById('ff').innerHTML='+';
            }
        }
    }
</script>
</html>
