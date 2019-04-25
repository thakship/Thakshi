<!------------------------------------------------------------------------------------------------------------------------
Module Code		: Courier Management System
Page Name		: Send Courier Sub Bag
Purpose			: To comprem department level courier
Author			: Madushan Wikramaarachchi
Date & Time		: 09.03 A.M 21/08/2014 (Modified)
------------------------------------------------------------------------------------------------------------------------->
<!-- Common Included -->
<?php
	session_start();
	$_SESSION['page']="cou/e/003";
	$_SESSION['Module'] = "Courier Management System";
	include('../../pageasses.php');
	//echo $_SESSION['usergroupNumber'];
	$ass = cakepageaccess();
	//echo $ass;
	if($ass != 1){
		header('Location:../../home.php');
	}
	include('../../../php_con/includes/db.ini.php');
	include('../../../php_con/includes/Common.php');
	include('../../loguser.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Send Courier Sub Bag</title>
<!-- Common function Libariries -->
<!-- CSS-->
<link rel="stylesheet" type="text/css" href="../../../CSS/globleCSS.css"/>
<link rel="stylesheet" type="text/css" href="../CMS_DEVELOPMENT/CSS/courier_Management_System_Style_Sheet.css"/>
<!--Javascript-->
<script src="../../../js/jsLey.js"></script>
<script src="../../../js/commenfunction.js"></script>
<script src="../CMS_DEVELOPMENT/JAVASCRIPT_FUNCTION/courier_Management_System_JavaScript.js"></script>
<!--END Common fumction Libariries-->
<script type="text/javascript">
    function pageRef(){
        window.open('http://cdberp:8080/cdb/pages/Courier%20Management%20System/Entry/courier_department_branch.php?DispName=Send%20Courier%20Sub%20Bag','conectpage');
    }
      function selectDocuments(title){
        //alert(title);
        var mydataGried;
		mydataGried= new XMLHttpRequest();
		mydataGried.onreadystatechange=function(){
			if(mydataGried.readyState==4){
				document.getElementById('getGried').innerHTML=mydataGried.responseText;  
				document.getElementById('outer').style.visibility = "visible";
				document.getElementById('conten').style.visibility = "visible";           
			}
		}
		mydataGried.open("GET","ajax_Gried.php"+"?self_fileNumber="+title,true);
		mydataGried.send();
    }
    
    
    function popdown(){
        document.getElementById('outer').style.visibility = "hidden";
		document.getElementById('conten').style.visibility = "hidden";
    }
    
     function deleteRow(title){
        //alert(title);
        var fileNUmber = document.getElementById(title).value;
        //alert(fileNUmber);
        var r = confirm('Are you sure you want to save this?')
        if (r==true){
			$.ajax({ 
				type:'POST', 
				data: {get_delete_fileNUmber : fileNUmber }, 
				url: '../CMS_DEVELOPMENT/PHP_FUNCTION/comen_php_cms_function.php', 
				success: function(val_retn) { 
				    //fileNUmber
				    alert(val_retn); 
                    pageRef();
                    //pageCloseDefineLetterTypes(); 
				}
                
			});	
        }else{
			//alert('BBBBB');		
		} 
        
    }
    
</script>
<style type="text/css">
	.tbl1{
	 	text-align:center;
		background: #eeeeee; /* Old browsers */
		background: -moz-linear-gradient(top, #eeeeee 0%, #cccccc 100%); /* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#eeeeee), color-stop(100%,#cccccc)); /* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top, #eeeeee 0%,#cccccc 100%); /* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top, #eeeeee 0%,#cccccc 100%); /* Opera 11.10+ */
		background: -ms-linear-gradient(top, #eeeeee 0%,#cccccc 100%); /* IE10+ */
		background: linear-gradient(to bottom, #eeeeee 0%,#cccccc 100%); /* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */
	}
      #outer{
		visibility: hidden;
		position: fixed;
		left: 0px;
		top:0px;
		width: 100%;
		height: 100%;
		background: #6DA6E4;
		opacity: 0.7;
	}
	#conten{
		position: fixed;
		margin-top:-150px;
		margin-left: -100px;
		top:50%;
		left:35%;
		visibility: hidden;
		background: #ffffff;
		z-index: 5;
		height:275px;
		overflow-y: scroll;
		border:#000000 solid 1px;
	}
    
.cursor{
    cursor: pointer;
}
</style>
</head>
<body oncontextmenu="return false">
<form action="" method="post" name="schform">
<p class="topline">
<?php 
	echo $_REQUEST['DispName'];
?>
</p><hr/>
	<?php
    	$selectFile="SELECT DATE(courier_files.`createDateTime`), courier_files.`fileNumber`, courier_files.`fileName`, courier_files.`receiveBranchNumber`, courier_files.`receiveDepartmentNumber`,courier_files.`numberOfDocument`,courier_files.`stats`, courier_files.`createBy` , `user`.`userID`
FROM `courier_files` , `user`
WHERE 
courier_files.`createBy` = user.`userName` AND
courier_files.`stats`='CC' AND courier_files.`branchNumber`='".$_SESSION['userBranch']."' AND courier_files.`departmentNumber`='".$_SESSION['userDepartment']."';";
    	$sqlSelectFile = mysqli_query($conn,$selectFile);
    ?>
<table class="tbl1" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td style="text-align:center; padding-top:5px; padding-bottom:5; width:80px;">Create Date</td>
        <td style="text-align:center; padding-top:5px; padding-bottom:5;width:150px;">File Number</td>
         <td style="text-align:center; padding-top:5px; padding-bottom:5;width:300px;">File Name</td>
        <td style="text-align:center; padding-top:5px; padding-bottom:5;width:150px;">Receive Branch Number </td>
        <td style="text-align:center; padding-top:5px; padding-bottom:5;width:150px;">Receive Department Number </td>
         <td style="text-align:center; padding-top:5px; padding-bottom:5;width:50px;">Num of Doc </td>
         <td style="text-align:center; padding-top:5px; padding-bottom:5;width:100px;">Create By</td>
        <td style="text-align:center; padding-top:5px; padding-bottom:5;width:50px;"></td>
      </tr>
<?php
    $_SESSION['rowFile'] = mysqli_num_rows($sqlSelectFile);
	$a = 1 ;
	while ($rec = mysqli_fetch_array($sqlSelectFile)){
		$branchSel = "SELECT `branchName` FROM `branch` WHERE `branchNumber`='".$rec[3]."'";
		$sqlbranchSel = mysqli_query($conn,$branchSel);
		$departmentSel = "SELECT `deparmentName` FROM `deparment` WHERE `deparmentNumber`= '".$rec[4]."'";
		$sqldepartmentSel = mysqli_query($conn,$departmentSel);
		while($rec1 = mysqli_fetch_array($sqlbranchSel)){
			while($rec2 = mysqli_fetch_array($sqldepartmentSel)){
				echo "<tr style='background-color:#FFFFFF;'>";
				echo "<td style='width:80px;text-align: left;padding-left: 5px;' title='".$rec[1]."' onclick='selectDocuments(title);'>".$rec[0]."</td>";
				echo "<td style='width:150px;text-align: left;padding-left: 5px;' title='".$rec[1]."' onclick='selectDocuments(title);'>
					  <div id='divb".$a."' style='display:none;'>
					  <input class='txt' type='text' name='txtb".$a."' id='txtb".$a."' value='".$rec[1]."'/></div>
                        ".$rec[1]."</td>";
				echo "<td style='width:300px;text-align: left;padding-left: 5px;' title='".$rec[1]."' onclick='selectDocuments(title);'>".$rec[2]."</td>";
				echo "<td style='width:150px;text-align: left;padding-left: 5px;' title='".$rec[1]."' onclick='selectDocuments(title);'>".$rec1[0]."</td>";
				echo "<td style='width:150px;text-align: left;padding-left: 5px;' title='".$rec[1]."' onclick='selectDocuments(title);'>".$rec2[0]."</td>";
				echo "<td style='width:50px;text-align: left;padding-left: 5px;' title='".$rec[1]."' onclick='selectDocuments(title);' >".$rec[5]."</td>";
                echo "<td style='width:100px;text-align: left;padding-left: 5px;' title='".$rec[1]."' onclick='selectDocuments(title);'><label title='".$rec[8]."'>".$rec[7]."</label></td>";
				echo "<td style='width:50px;'>";
					//if($rec[5] == "SS"){
				echo "<input type='checkbox' name='chka".$a."' id='chka".$a."' checked='checked'/>";
					/*}else{
						echo "<input type='checkbox' name='chka".$a."' id='chka".$a."'/>";
					}*/
                echo "&nbsp;&nbsp;&nbsp;<img src='../../../img/dele.png' style='width:15px;' title='txtb".$a."' onclick='deleteRow(title)'/>";
				echo "</td>";
				echo "</tr>";
				$a++;
			}
		}
	}
?>
</table>
<div style='display:none;'>
    <input type='text' name='txtrowCount' id='txtrowCount' value='<?php echo $a; ?>' />
</div>
<span id="getGried"></span>
<br/>
<input style="width: 100px;" class="buttonManage" type="submit" id="btnSave" name="btnSave" value="Save" />
	<?php
       //echo $_SESSION['rowFile'];
        if(isset($_POST['btnSave']) && $_POST['btnSave']=='Save'){
            // Set autocommit to off
            mysqli_autocommit($conn,FALSE);
            try{
                $count_gried = $_POST['txtrowCount'];
                for ($i = 1; $i <= $_SESSION['rowFile']; $i++){ 
                    if(isset($_POST['chka'.$i])){
						date_default_timezone_set('Asia/Colombo');
                        $updateFile="UPDATE courier_files SET stats='AD' WHERE fileNumber = '".trim($_POST['txtb'.$i])."' AND stats = 'CC'";
                        $sql_updateFile= mysqli_query($conn,$updateFile) or die(mysqli_error($conn));	
						FileMovementLogger($conn,trim($_POST['txtb'.$i]),'Added to department bag');
                    }else{
                        
                    }
                }
				if($_SESSION['rowFile']!=0){
					$countFile = "SELECT COUNT(`fileNumber`) FROM `courier_files` WHERE departmentNumber='".$_SESSION['userDepartment']."' AND branchNumber='".$_SESSION['userBranch']."' AND stats='AD'";
					$sqlcountFile = mysqli_query($conn,$countFile);
					$selectDip = "SELECT `deparmentName` FROM `deparment` WHERE `deparmentNumber`='".$_SESSION['userDepartment']."'";
					$sqlselectDip = mysqli_query($conn,$selectDip);
					while($add_countFile = mysqli_fetch_array($sqlcountFile)){
						while($add_selectDip = mysqli_fetch_array($sqlselectDip)){
							$depBag ="INSERT INTO `courier_deparment_bag`(`departmentNumber`, `departmentName`, `branchNumber`, `sendDateTime`, `sendBy`, `numberOfFiles`) VALUES ('".$_SESSION['userDepartment']."','".$add_selectDip[0]."','".$_SESSION['userBranch']."',now(),'".$_SESSION['user']."','".$add_countFile[0]."')";
							$sql_depBag= mysqli_query($conn,$depBag) or die(mysqli_error($conn));	
						}
					}
					echo "<script> alert('Record Update!');</script>";
    	            echo "<script>pageRef();</script>";
					
				}else{
				}
                // Commit transaction
                mysqli_commit($conn);
            }catch(Exception $e){
                // Rollback transaction
                mysqli_rollback($conn);
                echo 'Message: ' .$e->getMessage();
            }
        }
    ?>
<input style="width: 100px;" type="button" class="buttonManage" id="btnClose" name="btnClose" value="Close" onclick="pageClose()"/>
</form>
</body>
</html>