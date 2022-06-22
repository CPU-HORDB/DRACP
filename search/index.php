<!DOCTYPE html>
<html lang="en">

<!--  browse   -->

<head>
    <title>Simple-Search</title>
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

<div class="container" style="padding-bottom:11%">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="http://dracp.cpu-bioinfor.org">Home</a></li>
            <li><a href="http://dracp.cpu-bioinfor.org/search">Search</a></li>
            <li class="active">Simple Search</li>
        </ol>
    </div>

   <!-- the content -->
        <div class="col-md-offset-1  col-md-8 mt30" >
            <div class="row highlight">
                  <p class="text-center text-info"><h2 class="text-center text-info">Simple Search</h2></p>
                  <form role="simple search" action="simple_search.php" method="get" name="login_userpw">

                    <div class="form-group">
                        <fieldset style="padding: 0">
                        <legend>Search Items</legend>
                        <select id="slt" name="slt" class="form-control input-lg">
                            <option value="Sequence">Sequence</option>
                            <option value="Peptide_Name">Peptide Name</option>
							<option value="Sequence_Length">Sequence Length</option>
							<option value="Mass">Mass</option>
							<option value="Origin">Origin</option>
							<option value="Linear_Cyclic">Linear/Cyclic</option>
							<option value="Chiral">Chiral</option>
							<option value="UniProt_ID">UniProt ID</option>
							<option value="PDB_ID">PDB ID</option>
							<option value="Assay">Assay</option>
							<option value="Patent_ID">Patent ID</option>
							<option value="Nature">Nature</option>
                        </select>
                        </fieldset>
                    </div>

                    <div class="form-group">
                      <fieldset style="padding: 0">
                      <legend>Enter the content</legend>
                      <textarea name="txtarea" id="txtarea" rows="5"  class="form-control"></textarea>  
                      </fieldset>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</div>

<?php

require_once("../head/footer.php");

?>



</body>
</html>
