<?php
session_start();

$py_root = '/www/wwwroot/dracp/tools/prediction/';
$tmp_dir = $py_root . 'data/tmp/';
    
$tmp_filename = $_SESSION['tmp_filename'];
if($tmp_filename) {
    $filename = $tmp_dir . $tmp_filename . '_result.csv';
    if(file_exists($filename)) {
        if($_GET['check_result'] == 1) {
            echo json_encode(array('status' => 'OK'));die;
        }
        
        $list = getCsvData($filename);
        $file_exists = 1;
    }else {
        $file_exists = 0;
    }
}
$time = date('Y-m-d H:i:s');

function getCsvData($filePath)
{
    $handle = fopen($filePath, "rb");
    $data = [];
    while (!feof($handle)) {
        $data[] = fgetcsv($handle);
    }
    fclose($handle);
    $data = eval('return ' . iconv('gb2312', 'utf-8', var_export($data, true)) . ';'); //字符转码操作

    return $data;

}
?>

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
    <style>
        .table{ width: 100%;border-bottom: 1px solid #ddd;}
        .table th{ margin: 2px; background: #f7f7fa; line-height: 2.5;}
        .table td{ margin: 2px; line-height: 2.5;}
    </style>
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
            <li class="active">Anticancer peptide prediction</li>
        </ol>
    </div>
</div>

<div id="result" class="container" style="margin-top:20px;color: black;lfont-weight:lighter" data-time="<?php echo $time;?>">
    <?php if($list){?>
        <table class="table">
            <?php foreach($list as $k => $v){?>
                <?php if($k == 0){?>
                    <tr>
                        <?php if($v && is_array($v)){?>
                        <?php foreach($v as $vv){?>
                            <th><?php echo $vv;?></th>
                        <?php }?>
                        <?php }?>
                    </tr>
                <?php }else{?>
                    <tr>
                        <?php if($v && is_array($v)){?>
                        <?php foreach($v as $vv){?>
                        <td>
                            <?php echo $vv;?>
                        </td>
                        <?php }?>
                        <?php }?>
                    </tr>
                <?php }?>
            <?php }?>
        </table>
    <?php }else{?>
        <?php if(!$tmp_filename) {?>
        暂无数据
        <?php }else{?>
        <span id="info">Results are being generated, please wait patiently.</span>
        <?php }?>
    <?php }?>
</div>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script>
$(function(){
    var filename = "<?php echo $filename;?>";
    var file_exists = "<?php echo $file_exists;?>";
    if(filename && file_exists != 1) {
        var num = 0;
        setInterval(() => {
            var text = "Results are being generated, please wait patiently.";
            text += ".".repeat(num);
            $("#info").text(text);
            
            num++;
            if(num >= 6) {
                num = 0;
            }
        }, 500);
        
        setInterval(() => {
            $.get("http://dracp.cpu-bioinfor.org/tools/prediction_result.php?check_result=1", function(res) {
                console.log(res)
                if(res.status == 'OK') {
                    location.reload();
                }
            }, 'json');
        }, 2000);
    }
    console.log(filename)
})
</script>

</body>
</html>