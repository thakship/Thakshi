<!------------------------------------------------------------------------------------------------------------------------
Module Code		: Operation
Page Name		: Service Request List - Disbursement  
Purpose			: To viwe Request List for Disbursement  
Author			: Madushan Wikramaarachchi
Date & Time		: 12.04 P.M 27/01/2017
------------------------------------------------------------------------------------------------------------------------->
<!-- Common Included -->
<?php
	session_start();
	$_SESSION['page']="ope/e/007";
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
    include('../Operation_DEVELOPMENT/PHP_FUNCTION/operation_php_function.php');
  
  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Service Request List - Disbursement </title>
<!-- Common function Libariries -->
<!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../../../CSS/globleCSS.css"/>
    <link rel="stylesheet" type="text/css" href="../Operation_DEVELOPMENT/CSS/operation_Style_Sheet.css"/>
<!--Javascript-->
<script src="../../../js/commenfunction.js"></script>
<script src="../Operation_DEVELOPMENT/JAVASCRIPT_FUNCTION/operation_js_function"></script>
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
    window.open('http://cdberp:8080/cdb/pages/operation/Entry/operetionCODServiceRequestList-Disbursement.php?DispName=Service%20Request%20List%20-%20Disbursement','conectpage');
}
function pageRef(){
   window.open('http://cdberp:8080/cdb/pages/operation/Entry/operetionCODServiceRequestList-Disbursement.php?DispName=Service%20Request%20List%20-%20Disbursement','conectpage');
}

function clientValidate(title,cat_cod){
    var helpAdmin = document.getElementById('txt_helpdeskadmin').value;
    var helpClose = document.getElementById('txt_helpdesk_close').value;
    if(cat_cod != '1014' ){
        var mydata;
        var getHI = document.getElementById(title).value;
        mydata= new XMLHttpRequest();
        mydata.onreadystatechange=function(){
            if(mydata.readyState==4){
                document.getElementById('maneSpan').innerHTML=mydata.responseText;           
            }
        }
        
        mydata.open("GET","../Operation_DEVELOPMENT/PHP_FUNCTION/operation_Ajax.php"+"?getHelpIDreq="+getHI+"&gettxt_helpdesk_close="+helpClose,true);
        mydata.send();
    }else{
        //alert(cat_cod);
        var mydata;
        var getHI = document.getElementById(title).value;
        mydata= new XMLHttpRequest();
        mydata.onreadystatechange=function(){
            if(mydata.readyState==4){
                document.getElementById('maneSpan').innerHTML=mydata.responseText;           
            }
        }          
        mydata.open("GET","../Operation_DEVELOPMENT/PHP_FUNCTION/operation_Ajax.php"+"?getHelpIDreqIns="+getHI+"&gettxt_helpdesk_closeIns="+helpClose,true);
        mydata.send();
    }
    
}
    
    function getSolution(){
        var getsubHI = document.getElementById('txt_help_ID').value;
            mydata1= new XMLHttpRequest();
            mydata1.onreadystatechange=function(){
                if(mydata1.readyState==4){
                    document.getElementById('maneSpan').innerHTML=mydata1.responseText;           
                }
            }
            mydata1.open("GET","../Operation_DEVELOPMENT/PHP_FUNCTION/operation_Ajax.php"+"?getsubHelpIDreq="+getsubHI,true);
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
    
   /* chk_1 = document.getElementById('chk_1').checked ? 1 :0;
    chk_2 = document.getElementById('chk_2').checked ? 1 :0;
    chk_3 = document.getElementById('chk_3').checked ? 1 :0;
    chk_4 = document.getElementById('chk_4').checked ? 1 :0;
    chk_5 = document.getElementById('chk_5').checked ? 1 :0;
    chk_6 = document.getElementById('chk_6').checked ? 1 :0;*/
    
    if(document.getElementById('chk_1').checked == true){
        chk_1 = 1;
    }
    if(document.getElementById('chk_2').checked == true){
        chk_2 = 1;
    }
    if(document.getElementById('chk_3').checked == true){
        chk_3 = 1;
    }
    if(document.getElementById('chk_4').checked == true){
        chk_4 = 1;
    }
    if(document.getElementById('chk_5').checked == true){
        chk_5 = 1;
    }
    if(document.getElementById('chk_6').checked == true){
        chk_6 = 1;
    }
    if(ksrl_user != ""){
       if(document.getElementById('chk_1').checked == true && document.getElementById('chk_2').checked == true && document.getElementById('chk_3').checked == true && document.getElementById('chk_4').checked == true && document.getElementById('chk_5').checked == true && document.getElementById('chk_6').checked == true){
        //alert('all check');
            $.ajax({ 
    				type:'POST', 
    				data: {get_qc_code : "INS" ,get_ksrl_helpidINS : ksrl_helpid , get_chk_1 : chk_1 , get_chk_2 : chk_2 , get_chk_3 : chk_3 , get_chk_4 : chk_4 , get_chk_5 : chk_5 , get_chk_6 : chk_6 , get_ksrl_user : ksrl_user , get_ksrl_pn : ksrl_pn , get_title : title}, 
    				url: '../Operation_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
    				success: function(val_retn) { 
    				    //alert(val_retn); 
                        if(val_retn == 'OK'){
                            alert('Updated.');
                            pageRef();
                        }else{
                            alert('Updated Error.');
                        }
                        //pageCloseDefineLetterTypes();
    				}     
            });    
        }else{
            var r = confirm('Confirm to proceed ?')
            if (r==true){
                //alert('function ok');
    			$.ajax({ 
    				type:'POST', 
    				data: {get_qc_code : "INS" , get_ksrl_helpidINS : ksrl_helpid , get_chk_1 : chk_1 , get_chk_2 : chk_2 , get_chk_3 : chk_3 , get_chk_4 : chk_4 , get_chk_5 : chk_5 , get_chk_6 : chk_6 , get_ksrl_user : ksrl_user , get_ksrl_pn : ksrl_pn , get_title : title}, 
    				url: '../Operation_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
    				success: function(val_retn) { 
    				    //document.getElementById('maneSpan').innerHTML = val_retn;
    				    alert(val_retn);
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
    }else{
        alert('login user undifind.');
    }    
}  
function isAddiImgRequset(title){
    //alert(title);
    var helpID = title;
    var aIType = "K";
    window.open('http://cdberp:8080/cdb/pages/operation/Entry/applicationPendingUpload.php?DispName=Application%20%20Pending%20Upload&helpID='+helpID+'&pendingUploadImgType='+aIType,'conectpage');
}
function isAppGenerater(companyname){
    var appNUmber = document.getElementById('txt_app_number').value;
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_user = document.getElementById('txt_USERMY').value;
    
    //alert(companyname);
    
    if(isNaN(appNUmber) == true){
        alert('Invalid Application Number.');
    }else if(companyname == "CDB" && appNUmber.length != 17){
        alert('Invalid Application Number - length : 17.');
    }else if(companyname == "UCL" && appNUmber.length != 10){
        alert('Invalid Application Number - length : 10.');
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
    				url: '../Operation_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
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
    
   // alert(assuser);
    var r = confirm('Confirm to Update ?')
            if (r==true){
                //alert('function ok');
    			$.ajax({ 
    			 
    				type:'POST', 
    				data: {get_assuser : assuser  , get_aass_ksrl_helpid : ksrl_helpid}, 
    				url: '../Operation_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
    				success: function(val_retn) { 
    				   //document.getElementById('maneSpan').innerHTML = val_retn;
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

function isCDPUQC(){
    //alert('CDPU');
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_user = document.getElementById('txt_USERMY').value;
     var r = confirm('Confirm to Update ?')
    if (r==true){
        //alert('function ok');
		$.ajax({ 
		 
			type:'POST', 
			data: {getCDPUQCUser : ksrl_user  , getCDPUQCHelpID : ksrl_helpid}, 
			url: '../Operation_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
			success: function(val_retn) { 
			   //document.getElementById('maneSpan').innerHTML = val_retn;
			    //alert(val_retn);
                if(val_retn == 'OK'){
                    alert('Updated.')
                     //pageClose();
                    pageRef();
                }else{
                    alert('Updated Error.')
                }
                //pageCloseDefineLetterTypes();
			}               
		});
    }
}
function isSecurityDOCQC(){
    //alert('S');
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_user = document.getElementById('txt_USERMY').value;
     var r = confirm('Confirm to Update ?')
    if (r==true){
        //alert('function ok');
		$.ajax({ 
		 
			type:'POST', 
			data: {getSecurityDOCQCUser : ksrl_user  , getSecurityDOCQCHelpID : ksrl_helpid}, 
			url: '../Operation_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
			success: function(val_retn) { 
			   //document.getElementById('maneSpan').innerHTML = val_retn;
			    //alert(val_retn);
                if(val_retn == 'OK'){
                    alert('Updated.')
                     //pageClose();
                    pageRef();
                }else{
                    alert('Updated Error.')
                }
                //pageCloseDefineLetterTypes();
			}               
		});
    }
}
function isInsuranceDOCQC(){
    alert('I');
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_user = document.getElementById('txt_USERMY').value;
     var r = confirm('Confirm to Update ?')
    if (r==true){
        //alert('function ok');
		$.ajax({ 
		 
			type:'POST', 
			data: {getInsuranceDOCQCUser : ksrl_user  , getInsuranceDOCQCHelpID : ksrl_helpid}, 
			url: '../Operation_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
			success: function(val_retn) { 
			   //document.getElementById('maneSpan').innerHTML = val_retn;
			    //alert(val_retn);
                if(val_retn == 'OK'){
                    alert('Updated.')
                     //pageClose();
                    pageRef();
                }else{
                    alert('Updated Error.')
                }
                //pageCloseDefineLetterTypes();
			}               
		});
    }
}

</script>
<script>
var metaChar = false;
function keyEvent(event) {
  var key = event.keyCode || event.which;
   //alert("Key pressed " + key);
   if(key == 120){ // F9
        //alert("Key pressed " + key);
        
       /*var mydataNew;
		mydataNew= new XMLHttpRequest();
		mydataNew.onreadystatechange=function(){
			if(mydataNew.readyState==4){
				document.getElementById('maneSpan').innerHTML=mydataNew.responseText;
			}
		}
        var userID = document.getElementById('txt_USERMY').value;
        var userg = document.getElementById('txt_USERgROUP').value;
		mydataNew.open('GET','ajaxEntryNewGrid_1.php'+'?n_userID='+userID+'&n_userg='+userg,true);
		mydataNew.send();*/
    } else if(key == 112){ // F1 Key
        //alert("Key pressed " + key);
       /*var mydataNew;
		mydataNew= new XMLHttpRequest();
		mydataNew.onreadystatechange=function(){
			if(mydataNew.readyState==4){
				document.getElementById('maneSpan').innerHTML=mydataNew.responseText;
			}
		}
        var userID = document.getElementById('txt_USERMY').value;
        var userg = document.getElementById('txt_USERgROUP').value;
		mydataNew.open('GET','ajaxEntryNewGrid_F1.php'+'?n_userID='+userID+'&n_userg='+userg,true);
		mydataNew.send();*/
    }else if(key == 113){ // F2 Key
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
		mydataNew.open('GET','ajaxEntryNewGrid_F2_Insurance.php'+'?n_userID='+userID+'&n_userg='+userg,true);
		mydataNew.send();
    }else if(key == 114){ // F3 Key
        //alert("Key pressed " + key);
       /*var mydataNew;
		mydataNew= new XMLHttpRequest();
		mydataNew.onreadystatechange=function(){
			if(mydataNew.readyState==4){
				document.getElementById('maneSpan').innerHTML=mydataNew.responseText;
			}
		}
        var userID = document.getElementById('txt_USERMY').value;
        var userg = document.getElementById('txt_USERgROUP').value;
		mydataNew.open('GET','ajaxEntryNewGrid_F3.php'+'?n_userID='+userID+'&n_userg='+userg,true);
		mydataNew.send();*/
    }else if(key == 115){ // F4 Key
        //alert("Key pressed " + key);
       /*var mydataNew;
		mydataNew= new XMLHttpRequest();
		mydataNew.onreadystatechange=function(){
			if(mydataNew.readyState==4){
				document.getElementById('maneSpan').innerHTML=mydataNew.responseText;
			}
		}
        var userID = document.getElementById('txt_USERMY').value;
        var userg = document.getElementById('txt_USERgROUP').value;
		mydataNew.open('GET','ajaxEntryNewGrid_F4.php'+'?n_userID='+userID+'&n_userg='+userg,true);
		mydataNew.send();*/
    }else if(key == 121){ // F10 Key
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
		mydataNew.open('GET','ajaxEntryNewGrid_F10_Insurance.php'+'?n_userID='+userID+'&n_userg='+userg,true);
		mydataNew.send();
    }else if(key == 119){ // F8 key
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
		mydataNew.open('GET','ajaxEntryNewGrid_F8_Insurance.php'+'?n_userID='+userID+'&n_userg='+userg,true);
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
    /*$v_sql_det_detelsCNT = "SELECT COUNT(1) FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`,`cdb_help_user_oth`
 WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
       `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code` AND 
       `cdb_helpdesk`.`cmb_code` = '5001' AND
        `cdb_helpdesk`.`cat_code` = '1014' AND
        `cdb_helpdesk`.`ssb_app_number` = '' AND  date(`cdb_helpdesk`.`enterDateTime`) >= (CURRENT_DATE - INTERVAL 90 DAY) AND 
       `cdb_help_user_oth`.`user_group` = '".$_SESSION['usergroupNumber']."'
       ORDER BY `cdb_helpdesk`.`helpid`;";*/
    $v_sql_det_detelsCNT = "SELECT COUNT(1),FORMAT(SUM(ssb_facility_amount),2) AS FACAMT FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`,`cdb_help_user_oth`
 WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
       `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code` AND 
       `cdb_helpdesk`.`cmb_code` = '5002' AND
        `cdb_helpdesk`.`cat_code` = '1014' AND
		date(`cdb_helpdesk`.`COD_START_DATE`) >= (CURRENT_DATE - INTERVAL 120 DAY) AND 
       `cdb_help_user_oth`.`user_group` = '".$_SESSION['usergroupNumber']."' AND
         `cdb_helpdesk`.COD_STATUS = '001' and
		  `cdb_helpdesk`.QC_INS_ON IS NULL and
		  `cdb_helpdesk`.QC_INS_ON_DATA IS NOT NULL
       ORDER BY `cdb_helpdesk`.`helpid`;"; // /* AND `cdb_helpdesk`.COD_DO_PRINT_ON = '0000-00-00 00:00:00'*/
    $v_que_det_detelsCNT = mysqli_query($conn,$v_sql_det_detelsCNT);
    $index = 0;
    while($rec_det_detelsCNT = mysqli_fetch_array($v_que_det_detelsCNT)){
           $v_app_count = "SELECT COUNT(1), COUNT(1) - COUNT(NULLIF(TRIM(`cdb_helpdesk`.`asing_by`), '')) ,
	     COUNT(CASE WHEN `cdb_helpdesk`.`ssb_type` like 'Pending Notified%' THEN 1 END) AS PENDING_NOTIFIED,
	     COUNT(CASE WHEN `cdb_helpdesk`.`ssb_type` = 'File re-submitted' THEN 1 END) AS FILE_RE_SUBMITTED,
		 COUNT(CASE WHEN `cdb_helpdesk`.`ssb_type` = 'Additional Images Uploaded' THEN 1 END) AS ADD_IMG_UPLOADED,
		 COUNT(CASE WHEN `cdb_helpdesk`.`ssb_type` = 'File Verified by CDPU' THEN 1 END) AS FILE_VERIFIED,
		 COUNT(CASE WHEN `cdb_helpdesk`.`ssb_type` = 'Initial Submission' THEN 1 END) AS INIT_SUBMISSION,
         COUNT(CASE WHEN `cdb_helpdesk`.`ssb_type` = 'File Verified by CDPU' AND TRIM(`cdb_helpdesk`.`asing_by`) = '' THEN 1 END) AS FILE_VERIFIED_P ,
		 COUNT(CASE WHEN `cdb_helpdesk`.`ssb_type` = 'File Verified by CDPU' AND TRIM(`cdb_helpdesk`.`asing_by`) <> '' THEN 1 END) AS FILE_VERIFIED_PR 
		 FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`,`cdb_help_user_oth`
     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
           `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
           `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
           `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
           `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
           `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code` AND 
           `cdb_helpdesk`.`cmb_code` = '5002' AND
            `cdb_helpdesk`.`cat_code` = '1014' AND
			date(`cdb_helpdesk`.`COD_START_DATE`) >= (CURRENT_DATE - INTERVAL 120 DAY) AND 
           `cdb_help_user_oth`.`user_group` = '".$_SESSION['usergroupNumber']."' AND
            `cdb_helpdesk`.COD_STATUS = '001' and
		    `cdb_helpdesk`.QC_INS_ON IS NULL and
		    `cdb_helpdesk`.QC_INS_ON_DATA IS NOT NULL
           ORDER BY `cdb_helpdesk`.`helpid`;";           // /*AND `cdb_helpdesk`.COD_DO_PRINT_ON = '0000-00-00 00:00:00'*/
            $v_que_app_count = mysqli_query($conn,$v_app_count);
            while($rec_app_count = mysqli_fetch_array($v_que_app_count)){
                echo "<h3>Total record(s) : ". $rec_det_detelsCNT[0]."&nbsp;&nbsp;&nbsp;[Amount :".$rec_det_detelsCNT[1]."]</h3> <div style='padding-left:900px;font-size:14px;'><table border='1' cellpadding='0' cellspacing='0'><tr><td style='background:#F7819F'>Supplier DO</td><td style='background:#FFFFFF'>Client DO</td></tr></table></div> ";
				// echo "<h3>Total record(s) : ". $rec_det_detelsCNT[0]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style='color:red; font-size:14px;'>[ Not Assigned : ".$rec_app_count[1]." ]</font>&nbsp;&nbsp;<font style='color:red; font-size:14px;'>[Initial Submission : ".$rec_app_count[6]." ]</font>&nbsp;&nbsp;<font style='color:#9966ff; font-size:14px;'>[Pending Notified : ".$rec_app_count[2]."]</font>&nbsp;&nbsp;<font style='color:#ff6600; font-size:14px;'>[File Re-Submitted : ".$rec_app_count[3]."]</font>&nbsp;&nbsp;<font style='color:#ffcc66; font-size:14px;'>[Additional Images : ".$rec_app_count[4]."]</font>&nbsp;&nbsp;<font style='color:#669900; font-size:14px;'>[CDPU Verified : ".$rec_app_count[5]." -  Not Assigned: ".$rec_app_count[7]."  -  In Progress - ".$rec_app_count[8]."]</font></h3>";

            } #F7819F
    } 

?>
<!-- End of added by Rizvi on 9:48 AM 29/01/2015 -->
<span style="background:#FFFFFF;text-align:center; font-family:Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; font-size:11px; font-weight:bold"><b>F2</b> - Cash-In-Hand , <b>F8</b> - File Verified , <b>F10</b> - QC Pending </span>
<table border="1" cellpadding="0" cellspacing="0" id="myTable"  style="background:#FFFFFF;text-align:center; font-family:Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif; font-size:12px;">
        <tr style="background-color: #BEBABA; font-size: 11; font-weight: bold;">
            <td style="width:70px;text-align: right;"><span>Help ID</span></td>
            <td style="width:110px;text-align: right;"><span>Entry Date</span></td>
            <td style="width:90px;text-align: left;"><span style="margin-left: 5px;">File Type</span></td>
            <td style="width:100px;text-align: right;"><span >Facility Amount</span></td>
            <td style="width:150px;text-align: left;"><span style="margin-left: 5px;">Client Information</span></td>
            <td style="width:100px;text-align: left;"><span style="margin-left: 5px;">Branch</span></td>
			<td style="width:100px;text-align: left;"><span style="margin-left: 5px;">Facility No</span></td>
            <td style="width:190px;text-align: left;"><span style="margin-left: 5px;">LAST EVENT</span></td>
			<td style="width:190px;text-align: left;"><span style="margin-left: 5px;">Req Type</span></td>
            <td style="width:70px;text-align: right;"><span>Entered By</span></td>
            <td style="width:70px;text-align: right;"><span>Assigned User</span></td>
			<!-- Start by Rizvi on 8:45 PM 23/02/2017 : QC Feature -->
			<!--<td style="width:30px;text-align: left;"><span style="margin-left: 5px;">QC CDPU</span></td>
			<td style="width:30px;text-align: left;"><span style="margin-left: 5px;">QC SECDOCS</span></td> -->
			<!--<td style="width:30px;text-align: left;"><span style="margin-left: 5px;">QC INS</span></td> -->
			<td style="width:30px;text-align: right;"><span>Document Upload On</span></td>
			<!-- End of added by Rizvi on 8:45 PM 23/02/2017 : QC Feature -->
            <!-- <td style="width:30px;text-align: left;"><span style="margin-left: 5px;">Chg Rec</span></td>
            <td style="width:30px;text-align: left;"><span style="margin-left: 5px;">DO Prnt</span></td>
			<td style="width:30px;text-align: left;"><span style="margin-left: 5px;">Chk List</span></td> -->
			<td style="width:25px;text-align: left;"><span style="margin-left: 5px;">Minutes</span></td>

            <td style="width:50px;"></td>
        </tr>
<?php

       $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , 
                                   `cdb_helpdesk`.`COD_START_DATE`, 
                                   `cdb_helpdesk`.`issue`,
                                   `scat_02`.`scat_discr_2`, 
								   `branch`.`branchName`,
                                   `deparment`.`deparmentName`,
                                   `cdb_helpdesk`.`enterBy`,
                                   `urgency_states`.`ur_discr`, 
								   `priority_states`.`pr_discr` , 
                                   `cdb_helpdesk`.`COD_FILE_PROCUSER` , 
                                   `cdb_helpdesk`.`cat_code` , 
								   `cdb_helpdesk`.`ssb_facility_amount` , 
                                   CONCAT( `cdb_helpdesk`.`COD_LAST_EVENT` , IF(`cdb_helpdesk`.`COD_LAST_EVENT` = 'Pending Notified.', CONCAT(' - ' ,`cdb_helpdesk`.`COD_LAST_EVENT_DT`), '') ),
                                   `cdb_helpdesk`.`help_discr`,
								   IF(`cdb_helpdesk`.`ssb_app_number` = '', 4, `cdb_helpdesk`.`IsAppValid`) as validapp,
                                   `cdb_helpdesk`.`ssb_app_number`,
								   `cdb_helpdesk`.`facno`, 
                                   datediff(date(now()),DATE(`cdb_helpdesk`.`COD_START_DATE`)) as agedays,
                                   `cdb_helpdesk`.`curr_stage`,
								   `cdb_helpdesk`.`assign_to`, 
                                   `cdb_helpdesk`.`taken_by`, 
                                   `cdb_helpdesk`.`COD_CHG_REC_ON`,
                                   `cdb_helpdesk`.`COD_DO_PRINT_ON`,
								   `cdb_helpdesk`.`COD_CHKLIST_ON`, 
                                   ROUND(time_to_sec((TIMEDIFF(NOW(), `cdb_helpdesk`.QC_INS_ON_DATA))) / 60),
                                   `cdb_helpdesk`.`pr_code`,
								   `cdb_helpdesk`.`QC_CDPU_ON` , 
                                   `cdb_helpdesk`.`QC_SECDOCS_ON`, 
                                   `cdb_helpdesk`.`QC_INS_ON`, 
                                   `cdb_helpdesk`.QC_INS_ON_DATA,
								    (select count(*) from pending_upload_file ad where ad.help_id = `cdb_helpdesk`.helpid and ad.DocPurpose = 'Insurance Doc') AS NUMUPLOADS,
									(SELECT (SELECT s2.scat_discr_2 FROM scat_02 AS s2 WHERE s2.cat_code = '1003' and s2.scat_code_1 = '100301'  and s2.scat_code_2 = ps.`scat02`) from `pending_upload_file` ps WHERE ps.`help_id` = `cdb_helpdesk`.`helpid` and ps.`DocPurpose` = 'Insurance Doc' and ps.`done_on` = (SELECT max(`done_on`) from `pending_upload_file` WHERE `help_id` =  `cdb_helpdesk`.`helpid` and `DocPurpose` = 'Insurance Doc')) AS REQ_TYPE,
                                    (SELECT COUNT(s.helpid) 
                                            FROM cdb_help_note AS s  , pending_upload_file AS ad
                                            WHERE  s.helpid = ad.help_id
                                             AND s.helpid = `cdb_helpdesk`.`helpid`
                                             AND s.note_discr like 'INS %' 
                                             AND ad.DocPurpose = 'Insurance Doc'
                                             AND s.enterDateTime > ad.done_on
                                            ORDER BY s.enterDateTime DESC ) AS AD_DIFF ,
                                    (select scat_03.scat_discr_3 from scat_03 where scat_03.cat_code = cdb_helpdesk.cat_code and scat_03.scat_code_1 = cdb_helpdesk.scat_code_1 and scat_03.scat_code_2 = cdb_helpdesk.scat_code_2 and scat_03.scat_code_3 = cdb_helpdesk.scat_code_3)
 FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `scat_02` , `branch`, `deparment`,`cdb_help_user_oth`
 WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `cdb_helpdesk`.`scat_code_2` = `scat_02`.`scat_code_2` AND
       `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code` AND 
       `cdb_helpdesk`.`cmb_code` = '5002' AND
       `cdb_helpdesk`.`cat_code` = '1014' AND
	   date(`cdb_helpdesk`.`COD_START_DATE`) >= (CURRENT_DATE - INTERVAL 120 DAY) AND 
       `cdb_help_user_oth`.`user_group` = '".$_SESSION['usergroupNumber']."' AND
       `cdb_helpdesk`.COD_STATUS = '001'  and
	   `cdb_helpdesk`.QC_INS_ON IS NULL and
	    `cdb_helpdesk`.QC_INS_ON_DATA IS NOT NULL
       ORDER BY `cdb_helpdesk`.QC_INS_ON_DATA desc,`cdb_helpdesk`.`COD_START_DATE`;";
	//echo $v_sql_det_detels; ////*AND `cdb_helpdesk`.COD_DO_PRINT_ON = '0000-00-00 00:00:00'*/
    $v_que_det_detels = mysqli_query($conn,$v_sql_det_detels);
    $index = 0;
    while($rec_det_detels = mysqli_fetch_array($v_que_det_detels)){
       $sql_count_note = "SELECT COUNT(*) FROM `cdb_help_note` WHERE `helpid` = '".$rec_det_detels[0]."';";
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
		
        if( $rec_det_detels[25]=='7002'){ // || $rec_det_detels[25]=="7002" $rec_det_detels[8]=='Highest' ||
            $colPr = "background-color:#F7819F;";
        }else{
            $colPr = "";
        }
		
        $MyRow = "";
        if ($_SESSION['user'] == $rec_det_detels[9]){
           $MyRow = "background-color:lightblue;";
        }
        $col = "";
        if ($rec_det_detels[12] == "File re-submitted" || $rec_det_detels[12] == "Additional Images Uploaded"){
           $col = "#3F12F3;";
           if($rec_det_detels[12] == "Additional Images Uploaded")
            $col = "#BB11F3;";
        }
        //echo $col."<BR>";
        echo "<tr style='color: ".$col.";'>";
        
        if($rec_det_detels[17] <= 15){
            echo "<td style='width:70px;text-align: right;".$colPr .";color: ".$f_Col.";'><div style='display: none;'><input style='width:60px;color:#999999;text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$rec_det_detels[0]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-left: 2px;'>".$rec_det_detels[0]."</span></td>";
        }else{
            echo "<td style='width:70px;text-align: right;".$colPr .";color: ".$f_Col.";' title ='".$rec_det_detels[17]." days'><div style='display: none;'><input style='width:60px;color:#999999;text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$rec_det_detels[0]."'  onKeyPress='return disableEnterKey(event)'/></div><img src='../../../img/exp.png' height='15' width='5'><span style='margin-left: 2px;'>".$rec_det_detels[0]."</span></td>";
        }
        echo "<td style='width:110px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".$rec_det_detels[1]."</span></td>";
        echo "<td style='width:90px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[3]." - ".$rec_det_detels[33]."</span></td>";
        echo "<td style='width:100px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".number_format($rec_det_detels[11], 2)."</span></td>";
        echo "<td style='width:150px;text-align: left;".$MyRow ."' title='".$rec_det_detels[13]."'><span style='margin-left: 2px;'>".$rec_det_detels[2]."</span></td>"; 
        echo "<td style='width:100px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[4]."</span></td>";
        echo "<td style='width:100px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[16]."</span></td>";

        echo "<td style='width:190px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[12]."</span></td>";
		echo "<td style='width:190px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[31]."</span></td>"; 
        
        echo "<td style='width:100px;text-align: right;".$MyRow ."' title = '".$entryBy."'><div style='display: none;'><input type='text' name='txtx".$index."' id='txtx".$index."' value='".$rec_det_detels[6]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-right: 2px;'>".$rec_det_detels[6]."</span></td>";
        /*echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[7]."</span></td>";
        echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[8]."</span></td>";*/
        echo "<td style='width:70px;text-align: right;".$MyRow ."' title = '".$asingBy."'><span style='margin-right: 2px;'>".$rec_det_detels[9]."</span></td>";
		
		/*if($rec_det_detels[26] == '') // QC_CDPU
			echo "<td style='width:25px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>&nbsp;</span></td>";
		else        
			echo "<td style='width:25px;text-align: left;' title ='".$rec_det_detels[26]."'><span style='margin-left: 5px;'><img src='../../../img/1.png'></span></td>";
		if($rec_det_detels[27] == '') // QC_SECURITY DOC
			echo "<td style='width:25px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>&nbsp;</span></td>";
		else        
			echo "<td style='width:25px;text-align: left;' title ='".$rec_det_detels[27]."'><span style='margin-left: 5px;'><img src='../../../img/1.png'></span></td>";
		
        if($rec_det_detels[28] == '') // QC_INSURANCE
			echo "<td style='width:25px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>&nbsp;</span></td>";
		else        
			echo "<td style='width:25px;text-align: left;' title ='".$rec_det_detels[28]."'><span style='margin-left: 5px;'><img src='../../../img/1.png'></span></td>";
		*/
		
		//$col = $rec_det_detels[30] > 1?"#D7BDE2":"#FDFEFE"; 32
        if($rec_det_detels[30] > 1){
            $col = "#D7BDE2";
        }else if($rec_det_detels[32] >= 1){
            $col = "#cc1ed8";
        }else{
            $col = "#FFFFFF";
        }
		echo "<td style='width:25px;text-align: left; background-color:".$col."'><span style='margin-left: 5px;'>".$rec_det_detels[29]."</span></td>";

		/*if($rec_det_detels[21] == '0000-00-00 00:00:00') // Charges Recovery Column
			echo "<td style='width:30px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>&nbsp;</span></td>";
		else        
			echo "<td style='width:30px;text-align: left;' title ='".$rec_det_detels[21]."'><span style='margin-left: 5px;'><img src='../../../img/1.png'></span></td>";

		if($rec_det_detels[22] == '0000-00-00 00:00:00') // Do Printing Column
			echo "<td style='width:30px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>&nbsp;</span></td>";
		else        
			echo "<td style='width:30px;text-align: left;' title ='".$rec_det_detels[22]."'><span style='margin-left: 5px;'><img src='../../../img/1.png'></span></td>";

		if($rec_det_detels[23] == '0000-00-00 00:00:00') // Check List Column
			echo "<td style='width:25px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>&nbsp;</span></td>";
		else        
			echo "<td style='width:25px;text-align: left;' title ='".$rec_det_detels[23]."'><span style='margin-left: 5px;'><img src='../../../img/1.png'></span></td>";
	
	    */
		// echo $rec_det_detels[24] <= 15?"@":($rec_det_detels[24] < 20?"#":($rec_det_detels[24] <= 25?"$":"%"));
		// echo $rec_det_detels[24] <= 15?"@":($rec_det_detels[24] < 20?"#":($rec_det_detels[24] <= 25?"$":"%"));
        
        // change color code and time - madushan 2018-04-27  
        //$col = $rec_det_detels[24] <= 15?"":($rec_det_detels[24] < 20?"#12FEC1":($rec_det_detels[24] <= 25?"#FFC300":"#FF5733"));
		
		$col = $rec_det_detels[24] <= 15?"":($rec_det_detels[24] <= 30?"#12FEC1":($rec_det_detels[24] <= 45?"#FFC300":"#FF5733"));
		echo "<td style='width:190px;text-align: left; background-color:".$col."'><span style='margin-left: 2px;'>".$rec_det_detels[24]."</span></td>";
        /*Rizvi*/           
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
