<!------------------------------------------------------------------------------------------------------------------------
Module Code		: Admin
Page Name		: Page Access Levels
Purpose			: To Page Access Levels User group
Author			: Madushan Wikramaarachchi
Date & Time		: 12.22 P.M 19/08/2014 (Modified)
                : 08.50 A.M 27/04/2016 (Modified) - Inculed bootstrap (Madushan)
------------------------------------------------------------------------------------------------------------------------->
<!-- Common Included -->
<?php
	session_start();
	$_SESSION['page']="P005";
	$_SESSION['Module'] = "Admin";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>User Group Authentication</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- MetisMenu CSS -->
    <link href="../../../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="../../../dist/css/realSolution_1.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link href="../../../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Common function Libariries -->
<!-- CSS-->
<!--<link rel="stylesheet" type="text/css" href="../../../CSS/globleCSS.css"/>
<link rel="stylesheet" type="text/css" href="../ADMIN_DEVELOPMENT/CSS/admin_Style_Sheet.css"/>-->
<!--Javascript-->

<!--Javascript-->
<script src="../../../js/jsLey.js"></script>
<script src="../../../js/commenfunction.js"></script>
<script src="../ADMIN_DEVELOPMENT/JAVASCRIPT_FUNCTION/admin_JavaScript.js"></script>
<!--END Common fumction Libariries-->
<script type="text/javascript">
	function pageClose(){ //Page Close Function.......
		//parent.location.href = parent.location.href;
		window.open('http://cdberp:8080/cdb/pages/admin/Entry/Entry_Usergroup_Module_Page.php?DispName=Page%20Access%20Levels','conectpage');
	}
    function getGriedAccess(){
        var userGroupCode = document.getElementById('selUserGroupCode').value;
        if(userGroupCode != ""){
            var mydata1;
        	mydata1= new XMLHttpRequest();
        	mydata1.onreadystatechange=function(){
        		if(mydata1.readyState==4){
        			document.getElementById('loadsel_module').innerHTML=mydata1.responseText;
        		}
        	}
        	mydata1.open("GET","../ADMIN_DEVELOPMENT/PHP_FUNCTION/ajax_admin_commen_function.php"+"?get_UP_userGroupCode="+userGroupCode,true);
        	mydata1.send();
        }else{
            alert('Select User Group.');
            var mydata1;
        	mydata1= new XMLHttpRequest();
        	mydata1.onreadystatechange=function(){
        		if(mydata1.readyState==4){
        			document.getElementById('loadsel_module').innerHTML=mydata1.responseText;
        		}
        	}
        	mydata1.open("GET","../ADMIN_DEVELOPMENT/PHP_FUNCTION/ajax_admin_commen_function.php"+"?get_UP_userGroupCode="+userGroupCode,true);
        	mydata1.send();
        }
    
    }  
    function getTableAccess(){
        var userGroupCode = document.getElementById('selUserGroupCode').value;
        var moduleCode = document.getElementById('selModuleCode').value;
        if(userGroupCode == ""){
            alert('Select User Group.');
        }else if(moduleCode == ""){
            alert('Select Module.');
        }else{
		   //alert('userGroupCode = '+userGroupCode + "  | moduleCode = " + moduleCode);
           var mydata2;
        	mydata2= new XMLHttpRequest();
        	mydata2.onreadystatechange=function(){
        		if(mydata2.readyState==4){
        			document.getElementById('loadGread').innerHTML=mydata2.responseText;
        		}
        	}
        	mydata2.open("GET","../ADMIN_DEVELOPMENT/PHP_FUNCTION/ajax_admin_commen_function.php"+"?get_tbl_up_userGroupCode="+userGroupCode+"&get_tbl_up_moduleCode="+moduleCode,true);
        	mydata2.send(); 
        }
    }
</script>
</head>
<body oncontextmenu="return false">
<form class="form-horizontal" action="" method="post" style="margin-left: 20px;">
<h3>
<?php 
	echo $_REQUEST['DispName'];
?>
</h3>
<hr/>

<div class="container-fluid">
    <div class="panel panel-default">
            <div class="panel-heading">
                   User - Pages Authentication Informetion
            </div>
            <div class="panel-body">
				 <div class="form-group">
					<label class="col-sm-2">User Group Name : *</label>
                    <div class="col-sm-3">
                        <?php
                			$addsql01="SELECT `usergroupNumber`,`usergroupName` FROM `usergroup`";
                			$quary101 = mysqli_query($conn,$addsql01);
                        ?>
                        <select class="form-control" name="selUserGroupCode" id="selUserGroupCode" onkeypress="return disableEnterKey(event)"  onfocus="hilightColoyr(this.id)" onblur="colourLeave(this.id)" onchange="getGriedAccess();">
                             <option value="">--Select User Group Name--</option>
                             <?php
                                 while ($rec1 = mysqli_fetch_array($quary101)){
                    			 	echo "<option value='".$rec1[0]."'>".$rec1[1]."</option>";
                    			 }
                            ?>
                            </select>
				    </div>
                    <label class="col-sm-2">Module Name : </label>
                    <div class="col-sm-3" id="loadsel_module">
                        <select class="form-control" name="selModuleCode" id="selModuleCode" onkeypress="return disableEnterKey(event)"  onfocus="hilightColoyr(this.id)" onblur="colourLeave(this.id)">
                             <option value="">----Select Module Name----</option>
                        </select>
				    </div>
                 </div>
                 <div class='col-lg-12'>
					
				 </div>
                 <div class='col-lg-12'>
					<button type="button" style="width: 100px;" class="btn btn-success" value="Select" onclick="getTableAccess();" >Select</button>
				 </div>
                 <div class='col-lg-12'>
					
				 </div>
                 <br />
                 <div class="table-responsive" id="loadGread">
                    <table id="myTable" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Page Code</th>
                                <th>Page Name</th>
                                <th>Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>                         
                 </div>
			</div>
    </div>
</div>
<div class="container-fluid">
    <button type="submit" style="width: 100px;" class="btn btn-success" value="Save" name="btnUsergroupModulePageSave" id="btnUsergroupModulePageSave">Save</button>
    <button type="button" style="width: 100px;" class="btn btn-success" onclick="pageClose()">Close</button>
</div>

       	 <?php
			$modulecode ="";
			if(isset($_POST['btnUsergroupModulePageSave']) && $_POST['btnUsergroupModulePageSave']=='Save'){
				// Set autocommit to off
                trim($_POST['selUserGroupCode']);
                trim($_POST['selModuleCode']);
				mysqli_autocommit($conn,FALSE);
				try{
				    $adddel = "DELETE FROM usergroup_module_page 
                               WHERE `usergroupNumber`='".trim($_POST['selUserGroupCode'])."' AND `moduleCode`='".trim($_POST['selModuleCode'])."';";
				    $resdell= mysqli_query($conn,$adddel) or die(mysqli_error($conn));
                    
						for ($i = 1; trim($_POST['txtnum'])>= $i; $i++){ 
							if(isset($_POST['chka'.$i])){
								$addsq1="INSERT INTO usergroup_module_page(`usergroupNumber`, `moduleCode`,`pageCode`) 
										VALUES('".trim($_POST['selUserGroupCode'])."','".trim($_POST['selModuleCode'])."','".trim($_POST['txta'.$i])."');"; 
								$result= mysqli_query($conn,$addsq1) or die(mysqli_error($conn));						
							}else{
							
							}
						}
                         echo "<script> alert('updated success!');</script>";
                        echo "<script> pageClose();</script>";
					// Commit transaction
					mysqli_commit($conn);
				}catch(Exception $e){
					// Rollback transaction
					mysqli_rollback($conn);
					echo 'Message: ' .$e->getMessage();
				}
			}
		?>
</form>
</body>
</html>