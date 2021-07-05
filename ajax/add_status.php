<?php
session_start();
if(!isset($_SESSION["token"])) 
	exit(0);

include("../function/kdxr_function.php");
require_once "../function/sql_inject.php";
$bDestroy_session = TRUE;
$url_redirect = '../index.php';
$sqlinject = new sql_inject('../log_file_sql.log',$bDestroy_session,$url_redirect);

$Name = $_POST['Name'];

if(isset($Name)){
	
	$functions = new kdxr_function();
	
	$sqlinject->test($Name);
	
	$adduser = $functions->insertStatusList($Name);
	
	if($adduser){
		//echo "<script>swalAlertConfirm(\"สำเร็จ\",\"success\")</script>";
		header ('Location: ../index?p=sell-status-info&status=1');
	}else{
		//echo "<script>swalAlertConfirm(\"บางอย่างผิดพลาด\",\"error\")</script>";
		header ('Location: ../index?p=sell-status-info&status=0');
	}

}
else{
	header ('Location: ../index');
}

?>