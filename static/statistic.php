

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Welcome To DRACP</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/private.css">
    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="http://dracp.cpu-bioinfor.org/lazysheep/css/public.css">
     <script language="Javascript" src="http://dracp.cpu-bioinfor.org/lazysheep/js/jquery-1.11.1.js"></script>
    <script language="JavaScript" src="http://dracp.cpu-bioinfor.org/lazysheep/js/bootstrap.js"></script>

          <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <script type="text/javascript" src="../js/jquery-1.js"></script>
    <script type="text/javascript" src="../js/jquery.js"></script>       
	
	<style>
body { font-family:Arial, Helvetica, sans-serif;}
h2 { text-align:center; font-weight:bold;}
.p_question { font-size:20px; padding-left:300px; font-weight:bold; padding-top:50px;}
img { padding-left:50px;}
.no { font-size:18px; font-family:"Arial Black", Gadget, sans-serif;}
</style> 


   
</head>


<body>

<?php

          require_once ("../head/head_content.php");

?>

<div class="container" style="padding-bottom:100px;">


    <div class="row">
        <ol class="breadcrumb">
            <li><a href="http://dracp.cpu-bioinfor.org">Home</a></li>
            <li class="active">Statistic</li>
        </ol>
    </div>
    <div class="row">
	<h2>Data statistics in DRACP(By June 2022)</h2>
<p class="p_question"><span class="no">1.</span> Summary of information</p>
<img src="../link_images/Summary of information.png" width="98%" />
<p class="p_question"><span class="no">2.</span> Length distribution of ACP in DRACP</p>
<img src="../link_images/Length distribution of ACP in DRACP.png" width="1200px" height="600px"/>
<p class="p_question"><span class="no">3.</span> The net charge distribution of ACP in DRACP</p>
<img src="../link_images/Net charge distribution of ACP in DRACP.png" width="1200px"  />
<p class="p_question"><span class="no">4.</span> Amino acid distribution of ACP in DRACP</p>
<img src="../link_images/Amino acid distribution of ACP in DRACP.png" width="1200px"  />
<p class="p_question"><span class="no">5.</span> Percentage of hydrophobic residue of ACP in DRACP</p>
<img src="../link_images/Percentage of hydrophobic residue.png" width="1200px"  />
<p class="p_question"><span class="no">5.</span> Secondary structure distribution of ACP in DRACP</p>
<img src="../link_images/Secondary structure ratio distribution of ACP.png" width="1200px"  />
<p class="p_question"><span class="no">6.</span> Top 10 Cancer Cell Lines in the DRACP Anticancer Activity Test</p>
<img src="../link_images/Cancer cell line.png" width="1200px"  />
<p class="p_question"><span class="no">7.</span> Organization of approved peptide drugs in DRACP</p>
<img src="../link_images/Organization of approved peptide drugs in DRACP.png" width="1200px"  />
<p class="p_question"><span class="no">8.</span> The top 10 treated diseases for approved peptide drugs in DRACP</p>
<img src="../link_images/The top 10 treated diseases for approved peptide drugs in DRACP.png" width="1200px"  />
    </div>




</div>


<?php

	require_once ("../head/footer.php");


?>

