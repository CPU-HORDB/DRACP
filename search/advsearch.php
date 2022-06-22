<!DOCTYPE html>
<html lang="en">

<!--  advsearch   -->

<head>
    <title>Advance-Search</title>
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
            <li><a href="http://dracp.cpu-bioinfor.org/search">Search</a></li>
            <li class="active">Advanced Search</li>
        </ol>
    </div>
    <div class="row mt40">
        

   <!-- the content -->
        <div class="col-md-offset-1  col-md-8 mt30" >
            <div class="row highlight">
                  <p class="text-center text-info"><h2 class="text-center text-info">Advanced Search</h2></p>
                  <form role="advanced search" action="advanced_search.php" method="get">



                    <div class="form-group">
                        <fieldset style="padding: 0">
                        <legend>
                          Sequence
                        </legend>
			                   <div class="col-md-12">
                              <textarea name="wwed" class="form-control" cols="30"  rows="3" wrap="virtual" placeholder="e.g. FLPLLAGLAANFLPTIICKISYKC"></textarea>
                        </div>

			</fieldset>
                    </div>




                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Peptide Name</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwee" class="form-control" id="words" placeholder="e.g.Buforin IIb or Buforin" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Sequence Length</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wweg" class="form-control" id="words" placeholder="Any figure like 21" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Mass</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wweh" class="form-control" id="words" placeholder="Any figure like 302071" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Origin</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwei" class="form-control" id="words" placeholder="e.g.Skin secretions of Rana rugosaor" />
                              </div>
                          </fieldset>
                      </div>


                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Cell Line</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwej" class="form-control" id="words" placeholder="e.g.A-549" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Linear/Cyclic</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwek" class="form-control" id="words" placeholder="e.g.linear"/>
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Chiral</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwel" class="form-control" id="words" placeholder="D" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>UniProt ID</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwem" class="form-control" id="words" placeholder="e.g.P80400" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>PDB ID</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwen" class="form-control" id="words" placeholder="e.g.1JMN" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Assay</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wweq" class="form-control" id="words" placeholder="e.g.MTT assay" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Patent ID</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwer" class="form-control" id="words" placeholder="e.g.US2018/0057532A1" />
                              </div>
                          </fieldset>
                      </div>
                      <div class="form-group">
                          <fieldset style="padding: 0">
                              <legend>Nature</legend>
                              <div class="col-md-12">
                                  <input type="text" name="wwes" class="form-control" id="words" placeholder="e.g.Antimicrobial" />
                              </div>
                          </fieldset>
                      </div>



                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>

            </div>
        </div>
    </div>
</div>

<?php

   require_once ("../head/footer.php");

?>

</body>
</html>
