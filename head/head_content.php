<div style="background-color: #F1F1F1;margin-bottom: 20px">

    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">

                <p style="font-family: ：Arial Black;color: #006400;font-size: 26px;font-weight: bold;margin-bottom: 0px">DRACP</p>
                <p style="font-family: ：Arial;color: #006400;font-size: 16px;">Data repository of anticancer peptide
</p>
            </div>
            <div class="col-md-8">
                <form class="form-inline" action="http://dracp.cpu-bioinfor.org/search/home_search.php">
                    <div class="form-group" style="padding-top: 20px">
                        <input type="text" name="txtarea" style="width: 360px" class="form-control" id="exampleInputName2" placeholder="Sequence/Peptide Name/Cell Line" value="<?php echo @$tcont?>">
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