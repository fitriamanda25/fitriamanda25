<?
    ob_start();
    include"config.php";
    
    $qConfig = "select * from `config` where `config_id` = '1'";
    $rConfig = mysql_query($qConfig, $conn) or die(mysql_error());
    $aConfig = mysql_fetch_array($rConfig);
?>