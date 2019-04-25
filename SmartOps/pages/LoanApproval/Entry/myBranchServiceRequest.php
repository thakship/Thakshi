<!------------------------------------------------------------------------------------------------------------------------
Module Code		: Loan Approval
Page Name		: My Branch Service Request
Purpose			: View Request List for My Branch Service Request
Author			: Madushan Wikramaarachchi
Date & Time		: 09.41 A.M 26/04/2016
------------------------------------------------------------------------------------------------------------------------->
<!-- Common Included -->
<?php
	session_start();
	$_SESSION['page']="lon/e/006";
		include('../../pageasses.php');
	//echo $_SESSION['usergroupNumber'];
	$ass = cakepageaccess();
	//echo getHelpIDreq1;
	if($ass != 1){
		header('Location:../../home.php');
	}
	include('../../../php_con/includes/db.ini.php');
	include('../../../php_con/includes/Common.php');
	include('../../loguser.php');
  include('../helpdesk_DEVELOPMENT/PHP_FUNCTION/helpdesk_php_function.php');
  
  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Courier Day Receive  Report</title>
<!-- Common function Libariries -->
<!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../../../CSS/globleCSS.css"/>
    <link rel="stylesheet" type="text/css" href="../helpdesk_DEVELOPMENT/CSS/helpdesk_Style_Sheet.css"/>
<!--Javascript-->
<script src="../../../js/commenfunction.js"></script>
<script src="../helpdesk_DEVELOPMENT/JAVASCRIPT_FUNCTION/helpdesk_js_function.js"></script>
<!--END Common fumction Libariries-->
<style type="text/css">
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
		margin-left: -200px;
		top:50%;
		left:50%;
		visibility: hidden;
		background: #ffffff;
		z-index: 5;
		height:275px;
		overflow-y: scroll;
		border:#000000 solid 1px;
	}
</style>
<link rel="stylesheet" href="jquery/jquery-ui.css" />
<script src="jquery/jquery-1.9.1.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script type="text/javascript">
function pageClose(){ //Page Close Function.......
	//parent.location.href = parent.location.href;
    window.open('http://cdberp:8080/cdb/pages/LoanApproval/Entry/myBranchServiceRequest.php?DispName=My%20Branch%20Service%20Request','conectpage');
}
function pageRef(){
  // http://cdberp:8080/cdb/pages/helpdesk/Entry/kioskServiceRequestList.php?DispName=Kiosk%20Service%20Request%20List
   window.open('http://cdberp:8080/cdb/pages/LoanApproval/Entry/myBranchServiceRequest.php?DispName=My%20Branch%20Service%20Request','conectpage');
}

    function clientValidate(title,cat_cod){
        var helpAdmin = document.getElementById('txt_helpdeskadmin').value;
        var helpClose = document.getElementById('txt_helpdesk_close').value;
        var userID = document.getElementById('txt_USERMY').value;
        //alert(helpAdmin+"--"+helpClose);
       //alert(cat_cod);
            var mydata;
            var getHI = document.getElementById(title).value;
            //alert(getHI);
            mydata= new XMLHttpRequest();
            mydata.onreadystatechange=function(){
                if(mydata.readyState==4){
                    document.getElementById('maneSpan').innerHTML=mydata.responseText;           
                }
            }          
            mydata.open("GET","../helpdesk_DEVELOPMENT/PHP_FUNCTION/helpdesk_Ajax.php"+"?getHelpIDreq1_mybranch="+getHI+"&gettxt_helpdesk_close1_mybranch="+helpClose+"&getuserID_mybranch="+userID,true);
            mydata.send();
       
        
    }
    
    function getSolution(){
        var getsubHI = document.getElementById('txt_help_ID').value;
            mydata1= new XMLHttpRequest();
            mydata1.onreadystatechange=function(){
                if(mydata1.readyState==4){
                    document.getElementById('maneSpan').innerHTML=mydata1.responseText;           
                }
            }
            mydata1.open("GET","../helpdesk_DEVELOPMENT/PHP_FUNCTION/helpdesk_Ajax.php"+"?getsubHelpIDreq="+getsubHI,true);
            mydata1.send();
    }
    
    function deleteRow(n){ // this fuction is Delete Row(s) in table
        //alert(n);
        var m=n.parentNode.parentNode.rowIndex;
        document.getElementById('myTable').deleteRow(m);
        var num1 = document.getElementById("myTable").rows.length;
        var num2 = num1 - 1;
        var y = 1;
        var  rowcount = document.getElementById("myTable").rows.length;
        document.getElementById('row_COUNT').value =  document.getElementById("myTable").rows.length-1;
        var i = rowcount-1;    
       	for(var mloop=2;mloop <=100;mloop++){
            var elementA =  document.getElementById('txta' + (mloop - 1));
            var elementB =  document.getElementById('txtb' + (mloop - 1));
            if (elementA != null){
                // Re-order the sequence of the table rows.............
                elementA.value = y;
                //Changing the element ID's to capture in the php
                elementA.id = 'txta' + y;				  
                elementB.id = 'txtb' + y;
                //Changing the element name's to capture in the php				  
                elementA.name = 'txta' + y;				  
                elementB.name = 'txtb' + y;
                y++;
            }			
        }
}

function is_add_row(){
    var x = document.getElementById("myTable").rows.length;
    var getVal = document.getElementById('txtb'+(x-1)).value;
    if(getVal != ""){
        var table=document.getElementById("myTable");
        var row=table.insertRow(-1);
        var cell1=row.insertCell(0);
        var cell2=row.insertCell(1);
        var cell3=row.insertCell(2);
        var cell4=row.insertCell(3);
        var cell5=row.insertCell(4);
        cell1.innerHTML="<input style='width:50px;text-align: right;' type='text' name='txta"+(x)+"' id='txta"+(x)+"' value='"+(x)+"'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/>";
        cell2.innerHTML="<input style='width:600px;' type='text' name='txtb"+(x)+"' id='txtb"+(x)+"' value=''  onKeyPress='return disableEnterKey(event)'/>";
        cell3.innerHTML="<input style='width:100px;' type='text' name='txtUse"+(x)+"' id='txtUse"+(x)+"' value=''  onKeyPress='return disableEnterKey(event)' readonly='readonly' />";
        cell4.innerHTML="<input style='width:150px;' type='text' name='txtOn"+(x)+"' id='txtOn"+(x)+"' value=''  onKeyPress='return disableEnterKey(event)' readonly='readonly' />";
        cell5.innerHTML="<img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/><div style='display: none;'><input class='box_decaretion' type='text' name='txt_c_n"+(x)+"' id='txt_c_n"+(x)+"' value='1' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>";
        document.getElementById('row_COUNT').value =  document.getElementById("myTable").rows.length-1;
    }else{
       alert('Note text box empty.');
    }
}
 function popup(x){
		if(x==1){
			var mydataGried;
			mydataGried= new XMLHttpRequest();
			mydataGried.onreadystatechange=function(){
				if(mydataGried.readyState==4){
					document.getElementById('getGried').innerHTML=mydataGried.responseText;  
					document.getElementById('outer').style.visibility = "visible";
					document.getElementById('conten').style.visibility = "visible";           
				}
			}
			mydataGried.open("GET","ajax_Gried.php"+"?sr_gried="+x,true);
			mydataGried.send();
			/*document.getElementById('outer').style.visibility = "visible";
			document.getElementById('conten').style.visibility = "visible";*/
		
	  }else{
		document.getElementById('outer').style.visibility = "hidden";
		document.getElementById('conten').style.visibility = "hidden";
	  }	
	}
	
	function selectDB(xx){
			var id1 = document.getElementById('txt1'+xx).value;
			var id2 = document.getElementById('txt2'+xx).value;
			//alert(id1);
			//alert(id2);
			document.getElementById('txt_inner_User1').value = id1;
			document.getElementById('txt_inner_User2').value = id2;
	}
	
	function fileSelect(){
		var mydata5;
		mydata5= new XMLHttpRequest();
		mydata5.onreadystatechange=function(){
			if(mydata5.readyState==4){
				document.getElementById('getNewtblPopup').innerHTML=mydata5.responseText;
			}
		}
		var searchup=document.getElementById('popupsearch').value;
		mydata5.open('GET','ajaxEntryPopu1.php'+'?txtsearch='+searchup,true);
		mydata5.send();
  }
function removeUsreID(){
    document.getElementById('txt_inner_User1').value = '';
    document.getElementById('txt_inner_User2').value = '';
}  

function is_kiosk_ok(title){
    //alert('OK button');
    var chk_1 = 0;
    var chk_2 = 0;
    var chk_3 = 0;
    var chk_4 = 0;
    var chk_5 = 0;
    var chk_6 = 0;
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_user = document.getElementById('txt_USERMY').value;
    var ksrl_pn = document.getElementById('txt_pn').value;
    //alert(ksrl_helpid);
    //alert(ksrl_user);
    //alert(ksrl_pn);
    if(ksrl_user == ""){
         alert('Missing Help ID.');
    }else if(ksrl_user == ""){
        alert('login user undifind.');
    }else if(ksrl_pn == ""){
        alert('Missing Pending Notification.');
    }else if(title == 1){
        //alert('Reject') ;   
        var r = confirm('Confirm to Reject ?')
        if(r==true){
            //alert('function ok');
			$.ajax({ 
				type:'POST', 
				data: {get_ksrl_helpid : ksrl_helpid , get_chk_1 : chk_1 , get_chk_2 : chk_2 , get_chk_3 : chk_3 , get_chk_4 : chk_4 , get_chk_5 : chk_5 , get_chk_6 : chk_6 , get_ksrl_user : ksrl_user , get_ksrl_pn : ksrl_pn , get_title : title}, 
				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
				success: function(val_retn) { 
				    //document.getElementById('maneSpan').innerHTML = val_retn;
				    //alert(val_retn);
                    if(val_retn == 'OK'){
                        alert('Updated.')
                        pageRef();
                    }else{
                        alert('Updated Error.')
                    }
                    //pageCloseDefineLetterTypes();
				}               
			});
        }
        
    }else if(title == 2){
        //alert('Recomend');
        var r = confirm('Confirm to Recommend?')
        if(r==true){
            //alert('function ok');
			$.ajax({ 
				type:'POST', 
				data: {get_ksrl_helpid : ksrl_helpid , get_chk_1 : chk_1 , get_chk_2 : chk_2 , get_chk_3 : chk_3 , get_chk_4 : chk_4 , get_chk_5 : chk_5 , get_chk_6 : chk_6 , get_ksrl_user : ksrl_user , get_ksrl_pn : ksrl_pn , get_title : title}, 
				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
				success: function(val_retn) { 
				    //document.getElementById('maneSpan').innerHTML = val_retn;
				    //alert(val_retn);
                    if(val_retn == 'OK'){
                        alert('Updated.')
                        pageRef();
                    }else{
                        alert('Updated Error.')
                    }
                    //pageCloseDefineLetterTypes();
				}               
			});
        }
        
    }else if(title == 3){
        //alert('Aprove');
        var r = confirm('Confirm to Aproved?')
        if(r==true){
            //alert('function ok');
			$.ajax({ 
				type:'POST', 
				data: {get_ksrl_helpid : ksrl_helpid , get_chk_1 : chk_1 , get_chk_2 : chk_2 , get_chk_3 : chk_3 , get_chk_4 : chk_4 , get_chk_5 : chk_5 , get_chk_6 : chk_6 , get_ksrl_user : ksrl_user , get_ksrl_pn : ksrl_pn , get_title : title}, 
				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
				success: function(val_retn) { 
				    //document.getElementById('maneSpan').innerHTML = val_retn;
				    //alert(val_retn);
                    if(val_retn == 'OK'){
                        alert('Updated.')
                        pageRef();
                    }else{
                        alert('Updated Error.')
                    }
                    //pageCloseDefineLetterTypes();
				}               
			});
        }
        
    }else if(title == 4){
        //alert('Notify Pending');
        var r = confirm('Confirm to Notify Pending?')
        if(r==true){
            //alert('function ok');
			$.ajax({ 
				type:'POST', 
				data: {get_ksrl_helpid : ksrl_helpid , get_chk_1 : chk_1 , get_chk_2 : chk_2 , get_chk_3 : chk_3 , get_chk_4 : chk_4 , get_chk_5 : chk_5 , get_chk_6 : chk_6 , get_ksrl_user : ksrl_user , get_ksrl_pn : ksrl_pn , get_title : title}, 
				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
				success: function(val_retn) { 
				    //document.getElementById('maneSpan').innerHTML = val_retn;
				    //alert(val_retn);
                    if(val_retn == 'OK'){
                        alert('Updated.')
                        pageRef();
                    }else{
                        alert('Updated Error.')
                    }
                    //pageCloseDefineLetterTypes();
				}               
			});
        }
    }else{
         alert('NOT');
    }
}  

function isAppGenerater(){
    var appNUmber = document.getElementById('txt_app_number').value;
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_user = document.getElementById('txt_USERMY').value;
    
    //alert(appNUmber+'--'+ksrl_helpid+'--'+ksrl_user);
    
    if(isNaN(appNUmber) == true){
        alert('Invalid Application Number.');
    }else if(appNUmber.length < 17){
        alert('Invalid Application Number - length : 17.');
    }else if(appNUmber == ""){
        alert('Application Number is missing.');
    }else if(ksrl_helpid == ""){
        alert('Help ID is missing.');
    }else if(ksrl_user == ""){
        alert('User ID is missing.');
    }else{
         var r = confirm('Confirm to proceed ?')
            if (r==true){
                //alert('function ok');
    			$.ajax({ 
    				type:'POST', 
    				data: {get_appNUmber : appNUmber , get_app_ksrl_helpid : ksrl_helpid , get_app_ksrl_user : ksrl_user }, 
    				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
    				success: function(val_retn) { 
    				   //document.getElementById('maneSpan').innerHTML = val_retn;
    				    //alert(val_retn);
                        if(val_retn == 'OK'){
                            alert('Updated.')
                            pageRef();
                        }else{
                            alert('Updated Error.')
                        }
                        //pageCloseDefineLetterTypes();
    				}               
    			});
            }
    }
    
    
}
function updateAssUser(){
    //alert('A');
    var assuser = document.getElementById('txt_inner_User1').value;
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_pn = document.getElementById('txt_pn').value;
     var ksrl_user = document.getElementById('txt_USERMY').value;
    
    //alert(assuser);
    //alert(ksrl_helpid);
    //alert(ksrl_pn);
    if(ksrl_pn == ""){
        alert('Missing Pending Notification.');
    }else{
        var r = confirm('Confirm to Update ?')
        if (r==true){
            //alert('function ok');
			$.ajax({ 		 
				type:'POST', 
				data: {get_assuser : assuser  , get_aass_ksrl_helpid : ksrl_helpid , get_aass_ksrl_pn : ksrl_pn , get_aass_ksrl_user : ksrl_user}, 
				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
				success: function(val_retn) { 
				  // document.getElementById('maneSpan').innerHTML = val_retn;
				   // alert(val_retn);
                    if(val_retn == 'OK'){
                        alert('Updated.')
                        pageClose();
                        //pageRef();
                    }else{
                        alert('Updated Error.')
                    }
                    //pageCloseDefineLetterTypes();
				}               
			});
       }
    }
    
}
function isAddiImgRequset(title){
    //alert(title);
    var helpID = title;
    var aIType = "K";
    window.open('http://cdberp:8080/cdb/pages/LoanApproval/Entry/applicationPendingUpload.php?DispName=Application%20%20Pending%20Upload&helpID='+helpID+'&pendingUploadImgType='+aIType,'conectpage');
}
</script>
<script>
var metaChar = false;
function keyEvent(event) {
  var key = event.keyCode || event.which;
   //alert("Key pressed " + key);
   if(key == 120){
        //alert("Key pressed " + key);
       var mydataNew;
		mydataNew= new XMLHttpRequest();
		mydataNew.onreadystatechange=function(){
			if(mydataNew.readyState==4){
				document.getElementById('maneSpan').innerHTML=mydataNew.responseText;
			}
		}
        var userID = document.getElementById('txt_USERMY').value;
        var userg = document.getElementById('txt_USERgROUP').value;
		mydataNew.open('GET','ajaxEntryNewGrid_1.php'+'?n_userID='+userID+'&n_userg='+userg,true);
		mydataNew.send();
       
    }
}
</script>
</head>
<body oncontextmenu="return false" onkeydown="keyEvent(event)" onkeyup="metaKeyUp(event)">
<form action="" method="post" name="schform" enctype="multipart/form-data"> 
<p class="topline">
<?php 
	echo $_REQUEST['DispName'];
?>
</p><hr/>
<span id="maneSpan">

<!-- added by Rizvi on 9:48 AM 29/01/2015 -->
<?php
    $v_sql_det_detelsCNT = "SELECT COUNT(1)  FROM `loan_cdb_helpdesk`, `urgency_states`, `priority_states`, `loan_product` , `branch`, `deparment`
 WHERE `loan_cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `loan_cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `loan_cdb_helpdesk`.`scat_code_2` = `loan_product`.`product_id` AND
       `loan_cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `loan_cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `loan_cdb_helpdesk`.`cmb_code` = '5001' AND
       `loan_cdb_helpdesk`.`entry_branch` = '".$_SESSION['userBranch']."'
       ORDER BY `loan_cdb_helpdesk`.`helpid`;";
    $v_que_det_detelsCNT = mysqli_query($conn,$v_sql_det_detelsCNT);
    $index = 0;
    while($rec_det_detelsCNT = mysqli_fetch_array($v_que_det_detelsCNT)){
    	$v_app_count = "SELECT COUNT(1),SUM(`ssb_facility_amount`),
SUM(CASE WHEN DATE(`loan_cdb_helpdesk`.`enterDateTime`)>='".date('Y-m-01')."' THEN `ssb_facility_amount` ELSE 0 END),
SUM(CASE WHEN DATE(`loan_cdb_helpdesk`.`enterDateTime`)>='".date('Y-m-01')."' THEN 1 ELSE 0 END)    
        FROM `loan_cdb_helpdesk`, `urgency_states`, `priority_states`, `loan_product` , `branch`, `deparment`
 WHERE `loan_cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `loan_cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `loan_cdb_helpdesk`.`scat_code_2` = `loan_product`.`product_id` AND
       `loan_cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `loan_cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `loan_cdb_helpdesk`.`cmb_code` = '5001' AND
       `loan_cdb_helpdesk`.`entry_branch` = '".$_SESSION['userBranch']."'
       ORDER BY `loan_cdb_helpdesk`.`helpid`;";
            $v_que_app_count = mysqli_query($conn,$v_app_count);
            while($rec_app_count = mysqli_fetch_array($v_que_app_count)){
                
                echo "<h4>Total record(s) : ". $rec_det_detelsCNT[0]. "<span style='padding-left:5em'> Total Rs. : ".number_format($rec_app_count[1], 2)."</span><span style='padding-left:5em'> For the month : ".number_format($rec_app_count[2], 2) . " [". $rec_app_count[3] ."</span>]</h4>";
            }
            echo 'F9 - Show recommended files only';
    }

?>
<!-- End of added by Rizvi on 9:48 AM 29/01/2015 -->

<table border="1" cellpadding="0" cellspacing="0" id="myTable"  style="background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="background-color: #BEBABA; font-size: 11; font-weight: bold;">
            <td style="width:80px;text-align: right;"><span style="margin-right: 5px;">Help ID</span></td>
            <td style="width:70px;text-align: right;"><span style="margin-right: 5px;">Entry Date</span></td>
            <td style="width:90px;text-align: left;"><span style="margin-left: 5px;">File Type</span></td>
            <td style="width:100px;text-align: right;"><span style="margin-right: 5px;">Facility Amount</span></td>
            <td style="width:260px;text-align: left;"><span style="margin-left: 5px;">Client Information</span></td>
            <td style="width:100px;text-align: left;"><span style="margin-left: 5px;">Branch</span></td>
            <td style="width:190px;text-align: left;"><span style="margin-left: 5px;">Req. Statas</span></td>
            <td style="width:70px;text-align: right;"><span style="margin-right: 5px;">Enter By</span></td>
            <td style="width:100px;text-align: right;"><span style="margin-right: 5px;">Recommend Date</span></td>
            <!--<td style="width:100px;text-align: left;"><span style="margin-left: 5px;">Urgency</span></td>
            <td style="width:70px;text-align: left;"><span style="margin-left: 5px;">Priority</span></td>-->
            <td style="width:70px;text-align: right;"><span style="margin-right: 5px;">Assign User</span></td>
            <td style="width:50px;"></td>
        </tr>
<?php
 $v_sql_det_detels = "SELECT `loan_cdb_helpdesk`.`helpid` , DATE(`loan_cdb_helpdesk`.`enterDateTime`), `loan_cdb_helpdesk`.`issue`,`loan_product`.`product_name`, `branch`.`branchName`, `deparment`.`deparmentName`, `loan_cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` , `loan_cdb_helpdesk`.`asing_by` , `loan_cdb_helpdesk`.`cat_code` , `loan_cdb_helpdesk`.`ssb_facility_amount` , `loan_cdb_helpdesk`.`ssb_type`,`loan_cdb_helpdesk`.`help_discr`,IF(`loan_cdb_helpdesk`.`ssb_app_number` = '', 4, `loan_cdb_helpdesk`.`IsAppValid`) as validapp,`loan_cdb_helpdesk`.`ssb_app_number`,`loan_cdb_helpdesk`.`facno`,datediff(date(now()),DATE(`loan_cdb_helpdesk`.`enterDateTime`)) as agedays,`loan_cdb_helpdesk`.`curr_stage`,`loan_cdb_helpdesk`.`assign_to`,`loan_cdb_helpdesk`.`taken_by` , DATE(`loan_cdb_helpdesk`.`recommend_datetime`)
 FROM `loan_cdb_helpdesk`, `urgency_states`, `priority_states`, `loan_product` , `branch`, `deparment`
 WHERE `loan_cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `loan_cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `loan_cdb_helpdesk`.`scat_code_2` = `loan_product`.`product_id` AND
       `loan_cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `loan_cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `loan_cdb_helpdesk`.`cmb_code` = '5001' AND
       `loan_cdb_helpdesk`.`entry_branch` = '".$_SESSION['userBranch']."'
       ORDER BY `loan_cdb_helpdesk`.`helpid`;";
    $v_que_det_detels = mysqli_query($conn,$v_sql_det_detels);
    $index = 0;
    while($rec_det_detels = mysqli_fetch_array($v_que_det_detels)){
       $sql_count_note = "SELECT COUNT(*) FROM `loan_cdb_help_note` WHERE `helpid` = '".$rec_det_detels[0]."';";
          $v_que_count_note = mysqli_query($conn,$sql_count_note);
          while($rec_count_note =  mysqli_fetch_array($v_que_count_note)){
                $f_Col = "#000000";
                if($rec_count_note[0] != 0){
                    $f_Col = "#000000";
                }else{
                    $f_Col = "#000000";
                }  
          }
    
        $entryBy = getUserNameGenaral_Mob_Eml($rec_det_detels[6],$conn);
        $asingBy = getUserNameGenaral_Mob_Eml($rec_det_detels[9],$conn);
        $index++;
        if($rec_det_detels[8]=='Highest'){
            $col = "#000000";
        }else{
            $col = "#000000";
        }
        $MyRow = "";
        if ($_SESSION['user'] == $rec_det_detels[9]){
           $MyRow = "background-color:lightblue;";
        }
        echo "<tr style='color: ".$col.";'>";
        
        if($rec_det_detels[17] <= 15){
            echo "<td style='width:80px;text-align: right;".$MyRow .";color: ".$f_Col.";'><div style='display: none;'><input style='width:60px;color:#999999;text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$rec_det_detels[0]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-left: 2px;'>".$rec_det_detels[0]."</span></td>";
        }else{
            echo "<td style='width:80px;text-align: right;".$MyRow .";color: ".$f_Col.";' title ='".$rec_det_detels[17]." days'><div style='display: none;'><input style='width:60px;color:#999999;text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$rec_det_detels[0]."'  onKeyPress='return disableEnterKey(event)'/></div><img src='../../../img/exp.png' height='15' width='5'><span style='margin-left: 2px;'>".$rec_det_detels[0]."</span></td>";
        }
        echo "<td style='width:70px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".$rec_det_detels[1]."</span></td>";
        echo "<td style='width:90px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[3]."</span></td>";
        echo "<td style='width:100px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".number_format($rec_det_detels[11], 2)."</span></td>";
        echo "<td style='width:260px;text-align: left;".$MyRow ."' title='".$rec_det_detels[13]."'><span style='margin-left: 2px;'>".$rec_det_detels[2]."</span></td>"; 
        echo "<td style='width:100px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[4]."</span></td>";
        echo "<td style='width:190px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[12]."</span></td>";
        echo "<td style='width:100px;text-align: right;".$MyRow ."' title = '".$entryBy."'><div style='display: none;'><input type='text' name='txtx".$index."' id='txtx".$index."' value='".$rec_det_detels[6]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-right: 2px;'>".$rec_det_detels[6]."</span></td>";
        echo "<td style='width:100px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".$rec_det_detels[21]."</span></td>";
        /*echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[7]."</span></td>";
        echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[8]."</span></td>";*/
        echo "<td style='width:70px;text-align: right;".$MyRow ."' title = '".$asingBy."'><span style='margin-right: 2px;'>".$rec_det_detels[9]."</span></td>";
        
        /*Rizvi*/        
        //echo "<td style='width:40px;text-align: left;' title ='".$rec_det_detels[16]."'><span style='margin-left: 5px;'>".str_pad($rec_det_detels[17], 2, '0', STR_PAD_LEFT)."</span></td>";
        
        echo "<td style='width:50px;'><input type='button' class='buttonManage' id='btn_Validate' name='btn_Validate' value='...' title='txta".$index."' onclick='clientValidate(title,".$rec_det_detels[10].");'/></td>";
        echo "</tr>";
    }
?>
</table>
</span>
<div style="display: none;">
    <input type="text" name="txt_helpdeskadmin" id="txt_helpdeskadmin" value="<?php echo  $_SESSION['helpdeskadmin']; ?>" />
    <input type="text" name="txt_helpdesk_close" id="txt_helpdesk_close" value="<?php echo  $_SESSION['helpdesk_close']; ?>" />
    <input type="text" name="txt_USERgROUP" id="txt_USERgROUP" value="<?php echo  $_SESSION['usergroupNumber']; ?>" />
    <input type="text" name="txt_USERMY" id="txt_USERMY" value="<?php echo  $_SESSION['user']; ?>" />
</div>

<!-- ****************************************************************************************************************************************************** -->
<span id="getGried"></span>
</form>
</body>
</html>
