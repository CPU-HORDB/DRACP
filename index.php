<!DOCTYPE html>
<html lang="en">

<!--  browse   -->

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
    <script src="https://3Dmol.org/build/3Dmol-min.js" async></script>
</head>


<body>




<div style="background-color: #F1F1F1">

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">

                <p style="font-family: ：Arial Black;color: #006400;font-size: 26px;font-weight: bold;margin-bottom: 0px">DRACP</p>
                <p style="font-family: ：Arial;color: #006400;font-size: 16px;">Data repository of anticancer peptide</p>
            </div>
            <div class="col-md-8">
                <form class="form-inline" action="http://dracp.cpu-bioinfor.org/search/home_search.php">
                    <div class="form-group" style="padding-top: 20px">
                        <input type="text" name="txtarea" style="width: 360px" class="form-control" id="exampleInputName2" placeholder="Sequence/Peptide Name/Cell Line">
                    </div>
                    <button type="submit" class="btn btn-default"  style="margin-top: 20px;border-color: #006400;background-color: white;color: #EFA97A">Quick Search</button>
                </form>
            </div>

        </div>




        <div class="row">
            <div style="width: 11.11%;float: left">
                <a href="http://dracp.cpu-bioinfor.org" class="text-center">
                    <p style="color: #EFA97A;">Home</p>
                </a>
            </div>
            <div style="width: 11.11%;float: left">
                <div class="dropdown">
                    <p style="color: #EFA97A;"  class="text-center" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Search
                        <span class="caret"></span>
                    </p>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="http://dracp.cpu-bioinfor.org/search/">Simple search</a></li>
                        <li><a href="http://dracp.cpu-bioinfor.org/search/advsearch.php">Advanced search</a></li>
                        <li><a href="http://dracp.cpu-bioinfor.org/search/drugsearch.php">Drug search</a></li>
                    </ul>
                </div>
            </div>
            <div style="width: 11.11%;float: left">
                <div class="dropdown">
                    <p style="color: #EFA97A;"  class="text-center" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Browse
                        <span class="caret"></span>
                    </p>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="http://dracp.cpu-bioinfor.org/browse/Peptide_Information.php">Peptide Information</a></li>
                        <li><a href="http://dracp.cpu-bioinfor.org/browse/Classified_Browse.php">Classified Browse</a></li>
                        <li><a href="http://dracp.cpu-bioinfor.org/browse/PeptideDrug.php">Peptide Drug Information</a></li>
                    </ul>
                </div>
            </div>
            <div style="width: 11.11%;float: left">
                <div class="dropdown">
                    <p style="color: #EFA97A;"  class="text-center" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Tools
                        <span class="caret"></span>
                    </p>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="http://dracp.cpu-bioinfor.org/tools/similarity-search.php">Similarity search</a></li>
                        <li><a href="http://dracp.cpu-bioinfor.org/tools/similarity_search_drug.php">Similarity search(peptide drug)</a></li>
                        <li><a href="http://dracp.cpu-bioinfor.org/tools/prediction.php">Anticancer peptide prediction</a></li>
                    </ul>
                </div>
            </div>
            <div style="width: 11.11%;float: left">
                <a href="http://dracp.cpu-bioinfor.org/static/statistic.php" class="text-center">
                    <p style="color: #EFA97A;">Statistics</p>
                </a>
            </div>
            <div style="width: 11.11%;float: left">
                <a href="http://dracp.cpu-bioinfor.org/downloads/" class="text-center">
                    <p style="color: #EFA97A;">Downloads</p>
                </a>
            </div>
            <div style="width: 11.11%;float: left">
                <a href="http://dracp.cpu-bioinfor.org/static/quick_links.php" class="text-center">
                    <p style="color: #EFA97A;">Quicklink</p>
                </a>
            </div>
            <div style="width: 11.11%;float: left">
                <a href="http://dracp.cpu-bioinfor.org/static/help.php" class="text-center">
                    <p style="color: #EFA97A;">Help</p>
                </a>
            </div>
            <div style="width: 11.11%;float: left">
                <a href="http://dracp.cpu-bioinfor.org/static/submit.php" class="text-center">
                    <p style="color: #EFA97A;">Submit</p>
                </a>
            </div>

        </div>


    </div>

</div>



    <div class="clearfix"></div>
<div class="container"  style="margin-top:1%;">
    <div class="container">

        <div class="">
            <h3>Welcome to DRACP</h3>
            <p>DRACP(Data repository of anticancer peptide) is an open data repository of anticancer peptide, containing all kinds of information about anticancer peptide. The information type was mainly divided into five parts, namely basic information, activity information, structure information, physicochemical information and literature information. It includes 49 kinds of information about the sequence, activity, structure, normal cytotoxicity, hemolytic activity, literature and patents, diseases and net charge of anticancer peptide. In addition, active ingredient information and formulation information for peptide drug products are included. Such as active ingredient, sequence, dosage form, dosage, time of approval, etc.
            </p>
            
            <p>As of June 2022, DRACP had <b>7405 entries</b>, including <b>5590 anticancer peptide entries</b> and <b>1815 peptide drug entries</b>
            </p>
            
            <p>Data in the DRACP is made available under an CCBY 4.0 License. You are entitled to access and use the services and download or extract data. The free services are offered for the purpose of providing access to summarized data, analytics, metadata, and bulk downloads.
            </p>



        </div>


        <div class="row">

            
            <div class="col-md-8">

                <div class="panel panel-success" style="margin-top:30px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Active mechanism of anticancer peptide</h3>
                    </div>
                    <div class="panel-body">
                        <img src="./link_images/homepic.png" width="100%"/>
                    </div>
                    <!--<div style="font-size:18px;color:#468847;text-align:center">
                        (a) destroy the structure of cell membrane;
                        (b) apoptosis; 
                        (c) inhibiting angiogenesis; 
                        (d) immune regulation.
                    </div>-->
                </div>





        </div>


            <div class="col-md-4">

                <div class="panel panel-success" style="margin-top:30px;">
                    <div class="panel-heading">
                        <a href="http://dracp.cpu-bioinfor.org/search/content.php?id=DRACP05590" style="color:#468847"><h3 class="panel-title" >Most recently updated entry</h3></a>
                    </div>
                    <div class="panel-body">
                        <p style='height: 200px; width: 100%; position: relative;' class='viewer_3Dmoljs' data-href='http://dracp.cpu-bioinfor.org/Structure/DRACP05590.pdb' data-backgroundcolor='0xffffff' data-style='cartoon:color=spectrum' data-ui='config' data-spin='axis:z;speed:0.5'>
                        </p>
                        <a href="http://dracp.cpu-bioinfor.org/search/content.php?id=DRACP05590" style="color:#468847">Source: Research articles; Published: 2022</a>
                    </div>
                </div>

                <div class="panel panel-success" style="margin-top:30px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">External Links</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row text-center">
                            <div class="col-md-6" style="padding: 10px">
                                <a href="http://dramp.cpu-bioinfor.org/"><img src="./link_images/dramp.png" width="70" height="30"/></a>
                            </div>
                            <div class="col-md-6" style="padding: 10px">
                                <a href="https://www.ebi.ac.uk/"><img src="./link_images/ebi.png" width="70" height="30" /></a>
                            </div>
                            <div class="col-md-6" style="padding: 10px">
                                <a href="https://www.ncbi.nlm.nih.gov/"><img src="./link_images/ncbi.png" width="70" height="30" /></a>
                            </div>
                            <div class="col-md-6" style="padding: 10px">
                                <a href="https://www.rcsb.org/"><img src="./link_images/pdb.png" width="70" height="30" /></a>
                            </div>
                            <div class="col-md-6" style="padding: 10px">
                                <a href="https://www.expasy.org/"><img src="./link_images/sib.png" width="70" height="30" /></a>
                            </div>
                            <div class="col-md-6" style="padding: 10px">
                                <a href="http://hordb.cpu-bioinfor.com/"><img src="./link_images/hordb.png" width="70" height="30" /></a>
                            </div>
                            <div class="col-md-6" style="padding: 10px">
                                <a href="http://pepbank.mgh.harvard.edu/"><img src="./link_images/pepbank.png" width="70" height="30" /></a>
                            </div>
                            <div class="col-md-6" style="padding: 10px">
                                <a href="http://crdd.osdd.net/raghava/cancerppd/index.php"><img src="./link_images/cancerppd.png" width="70" height="30" /></a>
                            </div>
                        </div>

                    </div>
                </div>





            </div>

    </div>




        <div class="panel panel-success" style="margin-top:70px;">
            <div class="panel-heading">
                <h3 class="panel-title">NEWS & EVENTS</h3>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled" style="font-size:16px;line-height: 140%;"
					 <br />
					 <li>➢<b>June 10, 2022</b>    Added annotation information for peptide drugs, including 70 annotation information for active ingredients of peptide drugs and 1168 annotation information for peptide drug preparations.</li>
                     <br />
					 <li>➢<b>April 22, 2022</b>    Integrated a variety of anticancer peptide prediction models (SVM, RF, CNN, DNN) system--"Anticancer peptide prediction".</li>
					 <br />
					 <li>➢<b>January 1, 2022</b>    Integrated 3Dmol for web display and editing of 3D structures of anticancer peptide.</li>
                     <br />
					 <li>➢<b>November 7, 2021</b>    Integrated BLAST Similarity search system for peptide drug sequence--"Similarity search(Peptide Drug)".</li>
 					 <br />
                     <li>➢<b>August 8, 2021</b>    Added annotation information about peptide drugs, including 65 active ingredient annotation information of peptide drugs and 647 annotation information of peptide drugs preparations.</li>
 					 <br />
                     <li>➢<b>May 23, 2021</b>    Integrated BLAST Similarity search system for anticancer peptide sequence--"Similarity search".</li>
 					 <br />
                     <li>➢<b>March 1, 2021</b>    DRACP Setup! Welcome to comment and build!</li>
                </ul>
            </div>
        </div>



    </div>

</div>



<?php

    require_once("./head/footer.php");

?>
        

</body>
</html>

