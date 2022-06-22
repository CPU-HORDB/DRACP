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
</head>


<body>

<?php

 require_once ("../head/head_content.php");

?>

<div class="container">
            <div class="row">
        <ol class="breadcrumb">
            <li><a href="http://dracp.cpu-bioinfor.org">Home</a></li>
            <li class="active">Help</li>
        </ol>
</div>

<div class="row">
<h1>Help</h1>
<li>Find a list of all indexed fields in the drop down menu and choose one of your interested.</li>
<div id="main">
<div class="contents">
<h2><a name="top">Contents</a></h2>
<h4>Search help</h4>
<ul>
<li><a href="#001">Quick Search</a></li>
<li><a href="#002">Simple Search</a></li>
<li><a href="#003">Advanced Search</a></li>
<li><a href="#004">Drug search</a></li>
</ul>
<h4>Tools help</h4>
<ul>
<li><a href="#005">Similarity search/Similarity search(Peptide Drug)</a></li>
<li><a href="#006">Anticancer peptide prediction</a></li>
</ul>
</div>
</div>
</div>

<div class="box_item">
<h3><a name="001">Quick Search</a></h3>
</ul>
<p>Quick search allows keywords searches to performed on all text fields:</p>
<ul>
<li>Identify the keywords of interest for your search.</li>
<li>Enter the terms (or key concepts) in the search box.</li>
<li>Click "Quick Search".</li>
</ul>
<a href="#top"><div class="back_top">Top</div></a>
</div>


<div class="box_item">
<h3><a name="002">Simple Search</a></h3>
<p>The Simple Search page allows you to search <strong>individual fields</strong> found within anticancer peptide (ACP).</p> 
<ul>
<li>Find a list of all indexed fields in the drop down menu and choose one of your interested.</li>
<li>Enter the appropriate contents in the text area below.</li>
<li>Click "Submit" (or click "Reset" to clear your input).</li>
</ul>
<a href="#top"><div class="back_top">Top</div></a>
<img src="../link_images/Simple_Search_help.png" width="80%"/>
<div class="box_table bs-example">
               <div>
                    <ul>
		            <li>Sequence >>> <span>Single letter code (no space, mature peptide only) .e.g.<strong>FLPLLAGLAANFLPTIICKISYKC</strong></span></li>
                    <li>Peptide Name >>> <span>Name of peptides in ACPDB (full name or short name works) .e.g.<strong>Buforin IIb</strong> or <strong>Buforin</strong></span></li> 
                    <li>Sequence length >>> <span>Enter the peptide sequence length number. e.g.<strong>21</strong></span></li>
                    <li>Mass >>> <span>Molecular weight(Unit is dalton) of input peptide. e.g.<strong>302071</strong></span></li>
                    <li>Origin >>> <span>Origin of peptides (full name or short name works). e.g.<strong>Skin secretions of Rana rugosa</strong> or <strong>Rana rugosa</strong></span></li>
                    <li>Linear/Cyclic >>> <span>Structural properties of peptides, linear or cyclic. e.g.<strong>linear</strong></span></li>
                    <li>Chiral>>> <span>Stereochemical properties of amino acids. e.g.<strong>L</strong></span></li>
                    <li>UniProt ID >>> <span>Accessing number and linking to UniProtKB/Swiss-Prot entries. e.g.<strong>P80400</strong></span></li>
                    <li>PDB ID >>> <span>Accessing numble of Protein Data Bank. e.g.<strong>1JMN</strong></span></li>
                    <li>Assay >>> <span>Anticancer activity determination assay. e.g.<strong>MTT assay</strong></span></li>
                    <li>Pantent ID>>> <span>Anticancer peptide patent query, enter the patent number. e.g.<strong>US2018/0057532A1</strong></span></li>
                    <li>Nature >>> <span>By other Natrue searches for anticancer peptide. e.g.<strong>Antimicrobial</strong></span></li>
		            </ul>                        
                </div>
</div>
</div>


<div class="box_item">
<h3><a name="003">Advanced Search</a></h3>
<p>Through any combination of keywords input panel retrieval.</p>
<a href="#top"><div class="back_top">Top</div></a>
<img src="../link_images/Advanced_Search_help.png" />
</div>

<div class="box_item">
<h3><a name="004">Drug search</a></h3>
<p>The Drug search page allows you to search <strong>individual fields</strong> found within anticancer peptide (ACP).</p> 
<ul>
<li>Find a list of all indexed fields in the drop down menu and choose one of your interested.</li>
<li>Enter the appropriate contents in the text area below.</li>
<li>Click "Submit" (or click "Reset" to clear your input).</li>
<a href="#top"><div class="back_top">Top</div></a>
<img src="../link_images/Drug_Search_help.png" width="60%" />
<div class="box_table bs-example">
               <div>
                    <ul>
		            <li>Sequence >>> <span>Single letter code (no space, mature peptide only) .e.g.<strong>FLPLLAGLAANFLPTIICKISYKC</strong></span></li>
                    <li>Peptide Name >>> <span>Name of peptides in ACPDB (full name or short name works) .e.g.<strong>Buforin IIb</strong> or <strong>Buforin</strong></span></li> 
                    <li>Sequence length >>> <span>Enter the peptide sequence length number. e.g.<strong>21</strong></span></li>
                    <li>Mass >>> <span>Molecular weight(Unit is dalton) of input peptide. e.g.<strong>302071</strong></span></li>
                    <li>Origin >>> <span>Origin of peptides (full name or short name works). e.g.<strong>Skin secretions of Rana rugosa</strong> or <strong>Rana rugosa</strong></span></li>
                    <li>Linear/Cyclic >>> <span>Structural properties of peptides, linear or cyclic. e.g.<strong>linear</strong></span></li>
                    <li>Chiral>>> <span>Stereochemical properties of amino acids. e.g.<strong>L</strong></span></li>
                    <li>UniProt ID >>> <span>Accessing number and linking to UniProtKB/Swiss-Prot entries. e.g.<strong>P80400</strong></span></li>
                    <li>PDB ID >>> <span>Accessing numble of Protein Data Bank. e.g.<strong>1JMN</strong></span></li>
                    <li>Assay >>> <span>Anticancer activity determination assay. e.g.<strong>MTT assay</strong></span></li>
                    <li>Pantent ID>>> <span>Anticancer peptide patent query, enter the patent number. e.g.<strong>US2018/0057532A1</strong></span></li>
                    <li>Nature >>> <span>By other Natrue searches for anticancer peptide. e.g.<strong>Antimicrobial</strong></span></li>
		            </ul>                        
                </div>
</div>
</div>



<div class="box_item">
<h2><a name="005">Similarity Search/Similarity search(Peptide Drug)</a></h2>
<img src="../link_images/Simi_Search_help.png" width="60%"/>
<p>The <strong>BLAST</strong> (Basic Local Alignment Search Tool) program uses a strategy based on matching sequence fragments by employing a powerful statistical model to find the best <strong>local alignments</strong> (For more information see <a href="http://www.ebi.ac.uk/Tools/sss/ncbiblast/">http://www.ebi.ac.uk/Tools/sss/ncbiblast/</a>). </p>
<h3>Usage Introduction</h3>
<h4>Step 1 – Sequence Input</h4>
<ul>
<li><strong>Sequence Input Window</strong>: The query sequence can be entered directly into text area. The sequence must be <strong>FASTA</strong> format.</li>
<p><strong>FASTA format</strong>: FASTA formatted sequence records start with a definition line, which must start with a > character. The definition line must occupy one single line and followed by sequence data.</p>
<p>Example: </p>
<p>><br>
   FLPLLAGLAANFLPTIICKISYKC	</p>
</ul>
<h4>Step 2 – Parameters</h4>
<ul>
<li><strong>Matrix</strong>: This option allows you to choose the scoring matrix to be applied to the search.</li>
</ul>
<p>Default value is: <strong>BLOSUM62</strong></p>
<p><strong>Tip</strong>: In general, higher value BLOSUM matrices (e.g. BLOSUM90) and lower value PAM matrices (e.g. PAM30) are more stringent than low value BLOSUM or high value PAM matrices. This implies that if you want to find more distantly related homologues, you should preferentially employ a low value BLOSUM or high value PAM matrix (For more information about scoring matrices see <a href="http://en.wikipedia.org/wiki/Matrix">http://en.wikipedia.org/wiki/Matrix</a>).</p>
<a href="#top"><div class="back_top">Top</div></a>
</div>

<div class="box_item">
<h2><a name="006">Anticancer peptide prediction</a></h2>
<img src="../link_images/Simi_Search_help.png" width="60%"/>
<p>The tool is used for anticancer activity prediction of unmodified natural peptide sequences (only 20 natural amino acids), and one or more peptide sequences are submitted through an input box for prediction. Submission in the form of a document is also supported. The submitted form of the peptide sequence must be in fasta format and the identifier ">" cannot be followed by any description, as shown in the figure.</p>
<h3>Usage Introduction</h3>
<h4>Step 1 – Sequence Input</h4>
<ul>
<li><strong>Sequence Input Window</strong>: The query sequence can be entered directly into text area. The sequence must be <strong>FASTA</strong> format.</li>
<p><strong>FASTA format</strong>: FASTA formatted sequence records start with a definition line, which must start with a > character. The definition line must occupy one single line and followed by sequence data.</p>
<p>Example: </p>
<p>></p>
<p>FLPLLAGLAANFLPTIICKISYKC	</p>
</ul>
<h4>Step 2 – Parameters</h4>
<ul>
<li><strong>Matrix</strong>: This option allows you to choose the scoring matrix to be applied to the search.</li>
</ul>
<p>Default value is: <strong>BLOSUM62</strong></p>
<p><strong>Tip</strong>: In general, higher value BLOSUM matrices (e.g. BLOSUM90) and lower value PAM matrices (e.g. PAM30) are more stringent than low value BLOSUM or high value PAM matrices. This implies that if you want to find more distantly related homologues, you should preferentially employ a low value BLOSUM or high value PAM matrix (For more information about scoring matrices see <a href="http://en.wikipedia.org/wiki/Matrix">http://en.wikipedia.org/wiki/Matrix</a>).</p>
<a href="#top"><div class="back_top">Top</div></a>
</div>
</div>
</div>
</div>	
<?php

	require_once("../head/footer.php");

?>

</body>
</html>
