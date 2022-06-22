<?php
header('Content-Type:text/html; charset=utf-8');
date_default_timezone_set('PRC');

$conn=@mysqli_connect('localhost','root','zhengh123','Dracp') or die('连接错误！请检查网络');
mysqli_query($conn,'set names utf8');


@$da=$_GET['wwed'];

@$ea=$_GET['wwee'];

@$ga=$_GET['wweg'];

@$ha=$_GET['wweh'];

@$ia=$_GET['wwei'];

@$ja=$_GET['wwej'];
@$ka=$_GET['wwek'];
@$la=$_GET['wwel'];
@$ma=$_GET['wwem'];
@$na=$_GET['wwen'];
@$qa=$_GET['wweq'];
@$ra=$_GET['wwer'];
@$sa=$_GET['wwes'];

@$page=isset($_GET['page'])?$_GET['page']:1;
function escapeString($content) {
    $pattern = "/(select[\s])|(insert[\s])|(update[\s])|(delete[\s])|(from[\s])|(where[\s])|(drop[\s])/i";
    if (is_array($content)) {
        foreach ($content as $key=>$value) {
            $content[$key] = addslashes(trim($value));
            if(preg_match($pattern,$content[$key])) {
                $content[$key] = '';
            }
        }
    } else {
        $content=addslashes(trim($content));
        if(preg_match($pattern,$content)) {
            echo '<script>location.href="http://dracp.cpu-bioinfor.org/"</script>';exit;
        }
    }
    return $content;
}
function safe_replace($string) {
    $string = str_replace('%20','',$string);
    $string = str_replace('%27','',$string);
    $string = str_replace('%2527','',$string);
    $string = str_replace('*','',$string);
    $string = str_replace('"','&quot;',$string);
    $string = str_replace("'",'',$string);
    $string = str_replace('"','',$string);
    $string = str_replace(';','',$string);
    $string = str_replace('<','&lt;',$string);
    $string = str_replace('>','&gt;',$string);
    $string = str_replace("{",'',$string);
    $string = str_replace('}','',$string);
    $string = str_replace('\\','',$string);
    return $string;
}
$page=escapeString($page);
$page=safe_replace($page);


$da=escapeString($da);
$da=safe_replace($da);

$ea=escapeString($ea);
$ea=safe_replace($ea);

$fa=escapeString($fa);
$fa=safe_replace($fa);

$ga=escapeString($ga);
$ga=safe_replace($ga);

$ha=escapeString($ha);
$ha=safe_replace($ha);

$ia=escapeString($ia);
$ia=safe_replace($ia);

$ja=escapeString($ja);
$ja=safe_replace($ja);
$ka=escapeString($ka);
$ka=safe_replace($ka);
$la=escapeString($la);
$la=safe_replace($la);
$ma=escapeString($ma);
$ma=safe_replace($ma);
$na=escapeString($na);
$na=safe_replace($na);
$qa=escapeString($qa);
$qa=safe_replace($qa);
$ra=escapeString($ra);
$ra=safe_replace($ra);
$sa=escapeString($sa);
$sa=safe_replace($sa);

$hdeh=$page;


?>

<!DOCTYPE html>
<html lang="en">

<!--  browse   -->

<head>
	<title>Advanced Search</title>
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
    <div class="row mt40" style="padding-top: 20px">



		<table class="table table-bordered">
			<thead>
			<tr>
                <th>DRACP ID</th>
                <th>Peptide Name</th>
                <th>Sequence</th>
                <th>Sequence Length</th>
                <th>Origin</th>
			</tr>
			</thead>
			<tbody>


            <?php
            $showpages=7;
            $page_eff=($showpages-1)/2;
            $pagesize=30;






            $sq="select * from All_Information  where Sequence like '%$da%' and Peptide_Name like '%$ea%'  and Sequence_Length like '%$ga%' and Mass like '%$ha%'  and Origin like '%$ia%'  and Cell_Line like '%$ja%'  and Linear_Cyclic like '%$ka%'  and Chiral like '%$la%'  and UniProt_ID like '%$ma%'  and PDB_ID like '%$na%'  and Assay like '%$qa%'  and Patent_ID like '%$ra%' and Nature like '%$sa%' order by DRACP_ID asc";
            $r=mysqli_query($conn,$sq);
            $records=mysqli_num_rows($r);
            $pagecount=ceil($records/$pagesize);
            $start=($page-1)*$pagesize;
            $i=1;
            $i=($page-1)*$pagesize+$i;


            $sqld="select * from All_Information   where Sequence like '%$da%' and Peptide_Name like '%$ea%'  and Sequence_Length like '%$ga%' and Mass like '%$ha%'  and Origin like '%$ia%'  and Cell_Line like '%$ja%'  and Linear_Cyclic like '%$ka%'  and Chiral like '%$la%'  and UniProt_ID like '%$ma%'  and PDB_ID like '%$na%'  and Assay like '%$qa%'  and Patent_ID like '%$ra%' and Nature like '%$sa%' order by DRACP_ID asc limit $start,$pagesize";
            $rsd=mysqli_query($conn,$sqld);
            while($row=mysqli_fetch_assoc($rsd)) {

                echo ' <tr>
                <td><a href="content.php?id='.$row['DRACP_ID'].'" >'.$row['DRACP_ID'].'</a></td>
                <td>'.$row['Peptide_Name'].'</td>
                <td>'.$row['Sequence'].'</td>
                <td>'.$row['Sequence_Length'].'</td>
                <td>'.$row['Origin'].'</td>
            </tr>';
            }
            ?>



			</tbody>
		</table>

	</div>
</div>


<div class="container mt-5">

	<div class="text-right mb-5">

        <?php
        echo ' <a href="advanced_search.php?page=1&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-default">First</a> ';


        $start=1;
        $end=$pagecount;
        if($pagecount>$showpages){
            if($page>$page_eff){
                $start=$page-$page_eff;
                $end=$pagecount>$page+$page_eff?$page+$page_eff:$pagecount;
            }else{
                $start=1;
                $end=$pagecount>$showpages?$showpages:$pagecount;
            }
            if($page+$page_eff>$pagecount){
                $start=$start-($page=$page_eff-$end);
            }
            for($i=$start;$i<=$end;$i++){
                if($i==$page){
                    echo ' <a href="advanced_search.php?page='.$i.'&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-primary">'.$i.'</a> ';
                }else{
                    echo ' <a href="advanced_search.php?page='.$i.'&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-default" >'.$i.'</a> ';
                }
            }
        }else{
            for($i=$start;$i<=$end;$i++) {
                if($i==$page){
                    echo ' <a href="advanced_search.php?page='.$i.'&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-primary">'.$i.'</a> ';
                }else{
                    echo ' <a href="advanced_search.php?page='.$i.'&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-default" >'.$i.'</a> ';
                }
            }
        }
        if($page<0){
            $uid=$end-$showpages+1;
            for($i=$uid;$i<=$end;$i++) {
                if($i==$hdeh){
                    echo ' <a href="advanced_search.php?page='.$i.'&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-primary">'.$i.'</a> ';
                }else{
                    echo ' <a href="advanced_search.php?page='.$i.'&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-default" >'.$i.'</a> ';
                }
            }
        }

        echo ' <a href="advanced_search.php?page='.$pagecount.'&wwed='.$da.'&wwee='.$ea.'&wweg='.$ga.'&wweh='.$ha.'&wwei='.$ia.'&wwej='.$ja.'&wwek='.$ka.'&wwel='.$la.'&wwem='.$ma.'&wwen='.$na.'&wweq='.$qa.'&wwer='.$ra.'&wwes='.$sa.'" class="btn btn-default">Last</a> ';

        ?>



	</div>
</div>


<div style="height: 300px"></div>

<?php

require_once("../head/footer.php");

?>



</body>
</html>

