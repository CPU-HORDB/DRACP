<?php
session_start();
set_time_limit(0);

if($_POST) {
    $sequence_text = $_POST['sequence_text'];
    $sequence_file = $_FILES['sequence_file'];
    $type = $_POST['matrix'];
    
    $py_root = '/www/wwwroot/dracp/tools/prediction/';
    $tmp_dir = $py_root . 'data/tmp/';
    if(!is_dir($tmp_dir)) {
        mkdir($tmp_dir, 0755, true);
    }
    $filename = date('YmdHis') . mt_rand(111111, 999999);
    $path = $tmp_dir . $filename . '.fasta';
    
    if($sequence_text) {
        $re = file_put_contents($path, $sequence_text);
        if(!$re) {
            die("<script>alert('System Error.');history.back();</script>");
        }
    } else {
        if(!$sequence_file) {
            die("<script>alert('Please enter sequence in FASTA format or upload a file.');history.back();</script>");
        }
        
        $res = upload($sequence_file, $tmp_dir, $filename . '.fasta');
        if($res['error']) {
            die("<script>alert('Please enter sequence in FASTA format or upload a file.');history.back();</script>");
        }
    }

    $_SESSION['tmp_filename'] = $filename;
    
    $script = $py_root . $type . ".py";
    
    // var_dump("python3 {$script} {$filename}");die;
    
    $o = shell_exec("python3 {$script} {$filename} >/dev/null &");
    sleep(1);
    header("location:prediction_result.php");
}

function upload($file, $upload_path = '', $filename = '', $allow_type = array('.txt'), $max_upload_size = 512000)
{
    $result = array('error' => 1, 'message' => '', 'url' => '');
    //判断是否有文件上传
    if ($file['error'] == 4) {
        $result['message'] = '没有选择文件';
        return $result;
    }
    
    // $suffix = strrchr($file['name'], '.'); //
    // //限制类型
    // if (!in_array($suffix, $allow_type)) {
    //     $result['message'] = '文件类型不允许';
    //     return $result;
    // }
    
    //限制大小
    if ($file['size'] > $max_upload_size) {
        $result['message'] = '文件过大';
        return $result;
    }
    //限制来源
    if (!is_uploaded_file($file['tmp_name'])) {
        $result['message'] = '非法上传';
        return $result;
    }

    if(!$upload_path) {
        $result['message'] = '上传目录不存在';
        return $result;
    }
    
    //判断上传目录是否存在，如果不存在创建该目录
    if (!is_dir($upload_path)) { //  is_dir  判断目录是否存在
        mkdir($upload_path, 0755, true); //
    }
    
    if(!$filename) {
        $result['message'] = '文件名不存在';
        return $result;
    }
    
    $file_path = $upload_path . $filename;
    //实现上传(文件移动)
    if (move_uploaded_file($file['tmp_name'], $file_path)) {
        $result['error'] = 0;
        $result['url'] = $file_path;
        return $result;
    } else {
        $result['message'] = '上传失败';
        return $result;
    }
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

<div id="blast-content"  style="margin-bottom:7%">
    <div class="p-blast"><h2> Anticancer peptide prediction :</h2></div>

    <form method="post" action="" enctype="multipart/form-data">
        <div class="wd_blast">
            <label for="seq_one" class="lb_blast">Sequence (FASTA)</label>
            <textarea  name="sequence_text" rows="5" id="text_blast"  placeholder="The FASTA format must be like this:
>
FLPLLAGLAANFLPTIICKISYKC
>
PRFWEYWLALME
"></textarea>
        </div>
         <div class="wd_blast">
            <label for="seq_one" class="lb_blast">Or, upload a file: </label>
            <input type="file" name="sequence_file" value="Select A File">
        </div>
        <div><br></div>
        <div class="wd_blast">
            <label for="seq_two" class="lb_blast">Select model</label>
            <select class="form-control input-lg" style="width: 40%" name="matrix">
                <option value="CNN">CNN</option>
                <option value="DNN">DNN</option>
                <option value="SVM" selected="selected">SVM</option>
                <option value="RF">RF</option>
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