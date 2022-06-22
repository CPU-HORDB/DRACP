<!DOCTYPE html>
<html>
<head>
    <title> DRACP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="head-style.css"/>

    <link rel="stylesheet" type="text/css" href="./cs/blast.css"/>
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
            <li><a href="http://dracp.cpu-bioinfor.org/tools/similarity-search.php">Tools</a></li>
            <li class="active">Similarity search(Peptide Drug)</li>
        </ol>
    </div>
</div>

<div id="blast-content"  style="margin-bottom:7%">
    <div class="p-blast"><h2> BLAST :</h2></div>

    <form method="get" action="http://dracp.cpu-bioinfor.org/cgi-bin/drug_blast.cgi">
        <div class="wd_blast">
            <label for="seq_one" class="lb_blast">Sequence (FASTA)</label>
            <textarea  name="simi_area" rows="5" id="text_blast"  placeholder="Enter sequence in FASTA format."></textarea>
        </div>

        <div class="wd_blast">
            <label for="seq_two" class="lb_blast">Scoring Matrix</label>
            <select class="form-control input-lg" style="width: 35%" name="matrix">

                <option value="BLOSUM45">BLOSUM45</option>
                <option value="BLOSUM50">BLOSUM50</option>
                <option value="BLOSUM62" selected="selected">BLOSUM62</option>
                <option value="BLOSUM80">BLOSUM80</option>
                <option value="BLOSUM90">BLOSUM90</option>
                <option value="PAM30">PAM30</option>
                <option value="PAM70">PAM70</option>
                <option value="PAM250">PAM250</option>

            </select>
        </div>
        <div class="wd_blast">
            <button type="reset" class="btn_blast" id="reset_blast">Reset</button>
            <button type="submit" class="btn_blast">Submit</button>
        </div>
    </form>
</div>
<div class="clear"></div>
<?php
require_once("../head/footer.php");

?>
</body>
</html>