<!------------------------------------------------------------------------------------------------------------------------
Module Code		: Helpdesk
Page Name		: Credit Card - Check List
Purpose			: To check ststus of Credit Card 
Author			: Nilanka Chameera
Date & Time		: 11.41 A.M 16/11/2018
------------------------------------------------------------------------------------------------------------------------->
<!-- Common Included -->
<?php
	session_start();
	$_SESSION['page']="hel/e/064";
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
<title>Credit Card - Check List</title>
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
<script src=" jquery/jquery-1.9.1.js"></script>
<script src="jquery/jquery-ui.js"></script>
<script type="text/javascript">
function pageClose(){ //Page Close Function.......
	//parent.location.href = parent.location.href;
    window.open('http://cdberp:8080/cdb/pages/helpdesk/Entry/CreditCard-CheckList.php?DispName=Credit%20Card%20Service%20Request%20List%20-%20CheckList','conectpage');
}
function pageRef(){
   //http://192.168.3.5:8080/cdb/pages/helpdesk/Entry/kioskServiceRequestList.php?DispName=Kiosk%20Service%20Request%20List
   window.open('http://cdberp:8080/cdb/pages/helpdesk/Entry/CreditCard-CheckList.php?DispName=Credit%20Card%20Service%20Request%20List%20-%20CheckList','conectpage');
}

    function clientValidate(title,cat_cod){
        var helpAdmin = document.getElementById('txt_helpdeskadmin').value;
        var helpClose = document.getElementById('txt_helpdesk_close').value;
            //alert(cat_cod);
            var mydata;
            var getHI = document.getElementById(title).value;
            mydata= new XMLHttpRequest();
            mydata.onreadystatechange=function(){
                if(mydata.readyState==4){
                    document.getElementById('maneSpan').innerHTML=mydata.responseText;           
                }
            }          
            mydata.open("GET","../helpdesk_DEVELOPMENT/PHP_FUNCTION/helpdesk_Ajax_creaditCard.php"+"?getHelpIDreqCardCenterCCDIS="+getHI+"&gettxt_helpdesk_closeCardCenterCCDIS="+helpClose,true);
            mydata.send();  
    }
    
    function isActivation(title){
        var HelpID = document.getElementById(title).value;
        var User = document.getElementById('txt_USERMY').value;
        //alert(HelpID);
        var r = confirm('Confirm to proceed ?')
        if (r==true){
            //alert('function ok');
			$.ajax({ 
				type:'POST', 
				data: {get_act_helpid : HelpID , get_act_user : User}, 
				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/helpdesk_Ajax_creaditCard.php', 
				success: function(val_retn) { 
				    //document.getElementById('maneSpan').innerHTML = val_retn;
				    //alert(val_retn);
                    if(val_retn == 'OK'){
                        alert('Credit Card activated.');
                        pageRef();
                    }else{
                        alert('Credit card activate ERROR.');
                    }
                    //pageCloseDefineLetterTypes();
				}               
			});
        }
    }
    
    
   /* function getSolution(){
        var getsubHI = document.getElementById('txt_help_ID').value;
            mydata1= new XMLHttpRequest();
            mydata1.onreadystatechange=function(){
                if(mydata1.readyState==4){
                    document.getElementById('maneSpan').innerHTML=mydata1.responseText;           
                }
            }
            mydata1.open("GET","../helpdesk_DEVELOPMENT/PHP_FUNCTION/helpdesk_Ajax_creaditCard.php"+"?getsubHelpIDreq="+getsubHI,true);
            mydata1.send();
    }*/
    
   /* function deleteRow(n){ // this fuction is Delete Row(s) in table
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
}*/

/*function is_add_row(){
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
}*/
/* function popup(x){
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
			
		
	  }else{
		document.getElementById('outer').style.visibility = "hidden";
		document.getElementById('conten').style.visibility = "hidden";
	  }	
	}*/
	
/*	function selectDB(xx){
			var id1 = document.getElementById('txt1'+xx).value;
			var id2 = document.getElementById('txt2'+xx).value;
			//alert(id1);
			//alert(id2);
			document.getElementById('txt_inner_User1').value = id1;
			document.getElementById('txt_inner_User2').value = id2;
	}*/
	
	/*function fileSelect(){
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
  }*/
/*function removeUsreID(){
    document.getElementById('txt_inner_User1').value = '';
    document.getElementById('txt_inner_User2').value = '';
} */ 

/*function is_kiosk_ok(title){
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
    
   // chk_1 = document.getElementById('chk_1').checked ? 1 :0;
   // chk_2 = document.getElementById('chk_2').checked ? 1 :0;
   // chk_3 = document.getElementById('chk_3').checked ? 1 :0;
   // chk_4 = document.getElementById('chk_4').checked ? 1 :0;
   // chk_5 = document.getElementById('chk_5').checked ? 1 :0;
   // chk_6 = document.getElementById('chk_6').checked ? 1 :0;
    
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
    				data: {get_ksrl_helpid : ksrl_helpid , get_chk_1 : chk_1 , get_chk_2 : chk_2 , get_chk_3 : chk_3 , get_chk_4 : chk_4 , get_chk_5 : chk_5 , get_chk_6 : chk_6 , get_ksrl_user : ksrl_user , get_ksrl_pn : ksrl_pn , get_title : title}, 
    				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
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
        } 
    }else{
        alert('login user undifind.');
    }    
}  */

/*function isUpdateCliendtl(title){
    //alert(title);
    var Cliendtl_helpid = document.getElementById('txt_help_ID').value;
    var Cliendtl_user = document.getElementById('txt_USERMY').value;
    if(title == 1){
        var txt_dtl = document.getElementById('txt_Clint_Code_ssb').value;     
    }else if (title == 2){
        var txt_dtl = document.getElementById('txt_Supplier_Code_ssb').value;
    }else if (title == 3){
        var txt_dtl = document.getElementById('txt_Security_No_ssb').value;
    }else if (title == 4){
        var txt_dtl = document.getElementById('txt_Granter_1_ssb').value;
    }else if (title == 5){
        var txt_dtl = document.getElementById('txt_Granter_2_ssb').value;
    }else if (title == 6){
        var txt_dtl = document.getElementById('txt_Granter_3_ssb').value;
    }else if (title == 7){
        var txt_dtl = document.getElementById('txt_Supplier_Account_ssb').value;
    }else if (title == 8){
        var txt_dtl = document.getElementById('txt_Recovery_Account_ssb').value;
    }else{
        var txt_dtl = "";
    }
    if(txt_dtl != ""){
        $.ajax({ 
    		type:'POST', 
    		data: {get_Cliendtl_helpid : Cliendtl_helpid , get_Cliendtl_user : Cliendtl_user , get_txt_dtl : txt_dtl , get_title : title }, 
    		url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
    		success: function(val_retn) { 
    		    alert(val_retn); 
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
        alert("Data is Missing");
    }
   
}*/

/*function isAddiImgRequset(title){
    //alert(title);
    var helpID = title;
    var aIType = "K";
    window.open('http://cdberp:8080/cdb/pages/helpdesk/Entry/applicationPendingUpload.php?DispName=Application%20%20Pending%20Upload&helpID='+helpID+'&pendingUploadImgType='+aIType,'conectpage');
}*/
/*function isAppGenerater(companyname){
    var appNUmber = document.getElementById('txt_app_number').value;
    var ksrl_helpid = document.getElementById('txt_help_ID').value;
    var ksrl_user = document.getElementById('txt_USERMY').value;
    
    //alert(companyname);
    
    if(isNaN(appNUmber) == true){
        alert('Invalid Application Number.');
    }else if(companyname == "CDB" && appNUmber.length != 17){
        alert('Invalid Application Number - length : 17.');
    }else if(companyname == "UCL" && appNUmber.length != 17){
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
    
    
}*/
/*function updateAssUser(){
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
    				url: '../helpdesk_DEVELOPMENT/PHP_FUNCTION/kiosk_php_function.php', 
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
}*/

/*function isEveluale(title){
    //alert(title);
    if(title == "A"){
        //alert('Recomented');
          var getsubHI = document.getElementById('txt_help_ID').value;
          var resTitle = title.split("|");
          var v_srting =  "R|"+getsubHI+"|Are you sure you want to Recommended this?";
          popup1(1,v_srting);
    }else if(title == "R"){
        //alert('Reject');
         var getsubHI = document.getElementById('txt_help_ID').value;
         var resTitle = title.split("|");
         var v_srting =  "R|"+getsubHI+"|Are you sure you want to Reject this?";
         popup2(1,v_srting);
    }else{
        alert('Not Difend Function');
    }
}*/

/*function popup1(x,title){
       // alert(x);
        //alert(title);
    if(x==1){ 
		    //alert('a');
			var mydataGried;
			mydataGried= new XMLHttpRequest();
			mydataGried.onreadystatechange=function(){
				if(mydataGried.readyState==4){
				    //alert('b');
					document.getElementById('getGried').innerHTML = mydataGried.responseText;  
					document.getElementById('outer').style.visibility = "visible";
					document.getElementById('conten').style.visibility = "visible";           
				}
			}
			mydataGried.open("GET","credit_card_call_ajax.php"+"?get_Approve="+x+"&get_function="+title,true);
			mydataGried.send();
			document.getElementById('outer').style.visibility = "visible";
			document.getElementById('conten').style.visibility = "visible";
		
	  }else{
		document.getElementById('outer').style.visibility = "hidden";
		document.getElementById('conten').style.visibility = "hidden";
	  }	
}*/

/*function popup2(x,title){
       // alert(x);
        //alert(title);
    if(x==1){ 
		    //alert('a');
			var mydataGried;
			mydataGried= new XMLHttpRequest();
			mydataGried.onreadystatechange=function(){
				if(mydataGried.readyState==4){
				    //alert('b');
					document.getElementById('getGried').innerHTML = mydataGried.responseText;  
					document.getElementById('outer').style.visibility = "visible";
					document.getElementById('conten').style.visibility = "visible";           
				}
			}
			mydataGried.open("GET","credit_card_call_ajax.php"+"?get_Reject="+x+"&get_function="+title,true);
			mydataGried.send();
			document.getElementById('outer').style.visibility = "visible";
			document.getElementById('conten').style.visibility = "visible";
		
	  }else{
		document.getElementById('outer').style.visibility = "hidden";
		document.getElementById('conten').style.visibility = "hidden";
	  }	
}*/
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
    $v_sql_det_detelsCNT = "SELECT COUNT(1) FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`,`cdb_help_user_oth`
 WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
       `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code` AND 
       `cdb_helpdesk`.`cmb_code` = '5002' AND
        `cdb_helpdesk`.`cat_code` = '1038' AND
        `cdb_helpdesk`.`COD_FILE_VERIFIED_BY` IS NOT NULL AND
         `cdb_helpdesk`.`COD_CHG_REC_BY` IS NOT NULL AND
         `cdb_helpdesk`.`COD_CHKLIST_BY` IS NOT NULL AND
         `cdb_helpdesk`.`COD_DO_PRINT_BY` IS NULL AND
        `cdb_helpdesk`.`ssb_app_number` != '' AND  date(`cdb_helpdesk`.`enterDateTime`) >= (CURRENT_DATE - INTERVAL 90 DAY) AND 
       `cdb_help_user_oth`.`user_group` = '".$_SESSION['usergroupNumber']."'
       ORDER BY `cdb_helpdesk`.`helpid`;";
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
            `cdb_helpdesk`.`cat_code` = '1038' AND
            `cdb_helpdesk`.`COD_FILE_VERIFIED_BY` IS NOT NULL AND
             `cdb_helpdesk`.`COD_CHG_REC_BY` IS NOT NULL AND
             `cdb_helpdesk`.`COD_CHKLIST_BY` IS NOT NULL AND
             `cdb_helpdesk`.`COD_DO_PRINT_BY` IS NULL AND
            `cdb_helpdesk`.`ssb_app_number` != '' AND  date(`cdb_helpdesk`.`enterDateTime`) >= (CURRENT_DATE - INTERVAL 90 DAY) AND 
           `cdb_help_user_oth`.`user_group` = '".$_SESSION['usergroupNumber']."'
           ORDER BY `cdb_helpdesk`.`helpid`;";           
            $v_que_app_count = mysqli_query($conn,$v_app_count);
            while($rec_app_count = mysqli_fetch_array($v_que_app_count)){
                echo "<h3>Total record(s) : ". $rec_det_detelsCNT[0]. "</h3>";
            }
    }

?>
<!-- End of added by Rizvi on 9:48 AM 29/01/2015 -->
<!--<table style="width: 100%;" border="0" >
    <tr>
        <td style="text-align: left; vertical-align: bottom;">
            <span style="background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:11px; font-weight:bold"><b>F2</b> - Cash-In-Hand , <b>F3</b> - 3W , <b>F4</b> - Other Products , <b>F8</b> - File Verified , <b>F10</b> - QC Pending , <b>F1</b> - QC Pending (Officer Sort) </span>
        </td>
        <td style="text-align: right; vertical-align: bottom;">
            <?php
               /* $query_Count_authPending = mysqli_query($conn , "select COUNT(*) FROM cdb_helpdesk AS c WHERE c.cmb_code = '5000' AND c.cat_code = '1038';");
                while($rec_Count_authPending = mysqli_fetch_array($query_Count_authPending)){
                    echo "<span style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:20px; font-weight:bold;margin-right: 10px;'> Branch Auth Q : ".$rec_Count_authPending[0]."</span>";
                }*/
            ?>
        </td>
    </tr>
</table>-->

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<table border="1" cellpadding="0" cellspacing="0" id="myTable"  style="background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;">
        <tr style="background-color: #BEBABA; font-size: 11; font-weight: bold;">
            <td style="width:80px;text-align: right;"><span style="margin-right: 5px;">Help ID</span></td>
            <td style="width:200px;text-align: right;"><span style="margin-right: 5px;">Entry Date</span></td>
			<!--<td style="width:90px;text-align: left;"><span style="margin-left: 5px;">Approval</span></td>-->
            <td style="width:90px;text-align: left;"><span style="margin-left: 5px;">File Type</span></td>
            <td style="width:100px;text-align: right;"><span style="margin-right: 5px;">Facility Amount</span></td>
            <td style="width:260px;text-align: left;"><span style="margin-left: 5px;">Client Information</span></td>
            <td style="width:100px;text-align: left;"><span style="margin-left: 5px;">Branch</span></td>
            <td style="width:190px;text-align: left;"><span style="margin-left: 5px;">SSB Type</span></td>
            <td style="width:70px;text-align: right;"><span style="margin-right: 5px;">Enter By</span></td>
            <!--<td style="width:100px;text-align: left;"><span style="margin-left: 5px;">Urgency</span></td>
            <td style="width:70px;text-align: left;"><span style="margin-left: 5px;">Priority</span></td>-->
            <td style="width:70px;text-align: right;"><span style="margin-right: 5px;">Assign User</span></td>
            
            <!--<td style="width:40px;text-align: left;"><span style="margin-left: 5px;">App</span></td>
            <td style="width:40px;text-align: left;"><span style="margin-left: 5px;">Fac</span></td>-->
            <td style="width:50px;"></td>
        </tr>
<?php
 $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` ,
                              `cdb_helpdesk`.`enterDateTime`,
                               `cdb_helpdesk`.`issue`,
                               `scat_02`.`scat_discr_2`,
                               `branch`.`branchName`, 
                               `deparment`.`deparmentName`,
                               `cdb_helpdesk`.`enterBy`, 
                               `urgency_states`.`ur_discr`, 
                               `priority_states`.`pr_discr` , 
                               `cdb_helpdesk`.`asing_by` , 
                               `cdb_helpdesk`.`cat_code` , 
                               `cdb_helpdesk`.`ssb_facility_amount` , 
                               CONCAT(`cdb_helpdesk`.`ssb_type`), 
                               `cdb_helpdesk`.`help_discr`, 
                               IF(`cdb_helpdesk`.`ssb_app_number` = '', 4, `cdb_helpdesk`.`IsAppValid`) as validapp, 
                               `cdb_helpdesk`.`ssb_app_number`,
                               `cdb_helpdesk`.`facno`, 
                               datediff(date(now()),
                               DATE(`cdb_helpdesk`.`enterDateTime`)) as agedays,
                               `cdb_helpdesk`.`curr_stage`,
                               `cdb_helpdesk`.`assign_to`,
                               `cdb_helpdesk`.`taken_by`,
                               `cdb_helpdesk`.`mainFileType`
 FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `scat_02` , `branch`, `deparment`,`cdb_help_user_oth`
 WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
       `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
       `cdb_helpdesk`.`scat_code_2` = `scat_02`.`scat_code_2` AND
       `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
       `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
       `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code` AND 
       `cdb_helpdesk`.`cmb_code` = '5002' AND
       `cdb_helpdesk`.`cat_code` = '1038' AND
       `cdb_helpdesk`.`COD_FILE_VERIFIED_BY` IS NOT NULL AND
       `cdb_helpdesk`.`COD_CHG_REC_BY` IS NOT NULL AND
       `cdb_helpdesk`.`COD_CHKLIST_BY` IS NOT NULL AND
       `cdb_helpdesk`.`COD_DO_PRINT_BY` IS NULL AND
       `cdb_helpdesk`.`ssb_app_number` != '' AND date(`cdb_helpdesk`.`enterDateTime`) >= (CURRENT_DATE - INTERVAL 90 DAY) AND 
       `cdb_help_user_oth`.`user_group` = '".$_SESSION['usergroupNumber']."'
       ORDER BY `cdb_helpdesk`.`enterDateTime`;";
	//echo $v_sql_det_detels;
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
        if($rec_det_detels[8]=='Highest'){
            $col = "#000000";
        }else{
            $col = "#000000";
        }
        $MyRow = "";
        if ($_SESSION['user'] == $rec_det_detels[9]){
           $MyRow = "background-color:lightblue;";
        }
        
        if ($rec_det_detels[12] == "File re-submitted" || $rec_det_detels[12] == "Additional Images Uploaded"){
           $col = "#3F12F3;";
           if($rec_det_detels[12] == "Additional Images Uploaded")
            $col = "#BB11F3;";
        }
        //echo $col."<BR>";
        //-------------------------------------- Madushan 2018-08-28--------------------------------------------------------
        $countQ3 = 0;
        $sql_btn4 = "SELECT COUNT(cq.q_module_id) 
                                       FROM credit_card_call_dtl AS cq 
                                      WHERE cq.helpid = '".$rec_det_detels[0]."'
                                         AND  cq.q_module_id = 3 ;";
        $query_btn4 = mysqli_query($conn,$sql_btn4) or die(mysqli_error($conn));
        while($resalt_btn4 = mysqli_fetch_array($query_btn4)){
            $countQ3 = $resalt_btn4[0];
        }
        if($countQ3 <> 0){
                     
        //----------------------------------------------------------------------------------------------------------------
        
            echo "<tr style='color: ".$col.";'>";
            
            if($rec_det_detels[17] <= 15){
                echo "<td style='width:80px;text-align: right;".$MyRow .";color: ".$f_Col.";'><div style='display: none;'><input style='width:60px;color:#999999;text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$rec_det_detels[0]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-left: 2px;'>".$rec_det_detels[0]."</span></td>";
            }else{
                echo "<td style='width:80px;text-align: right;".$MyRow .";color: ".$f_Col.";' title ='".$rec_det_detels[17]." days'><div style='display: none;'><input style='width:60px;color:#999999;text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$rec_det_detels[0]."'  onKeyPress='return disableEnterKey(event)'/></div><img src='../../../img/exp.png' height='15' width='5'><span style='margin-left: 2px;'>".$rec_det_detels[0]."</span></td>";
            }
            echo "<td style='width:200px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".$rec_det_detels[1]."</span></td>";
    		//echo "<td style='width:90px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[21]."</span></td>";
            echo "<td style='width:90px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[3]."</span></td>";
            echo "<td style='width:100px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".number_format($rec_det_detels[11], 2)."</span></td>";
            echo "<td style='width:260px;text-align: left;".$MyRow ."' title='".$rec_det_detels[13]."'><span style='margin-left: 2px;'>".$rec_det_detels[2]."</span></td>"; 
            echo "<td style='width:100px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[4]."</span></td>";
            
            echo "<td style='width:190px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[12]."</span></td>";
            
            echo "<td style='width:100px;text-align: right;".$MyRow ."' title = '".$entryBy."'><div style='display: none;'><input type='text' name='txtx".$index."' id='txtx".$index."' value='".$rec_det_detels[6]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-right: 2px;'>".$rec_det_detels[6]."</span></td>";
            /*echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[7]."</span></td>";
            echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[8]."</span></td>";*/
            echo "<td style='width:70px;text-align: right;".$MyRow ."' title = '".$asingBy."'><span style='margin-right: 2px;'>".$rec_det_detels[9]."</span></td>";
            
            echo "</td>";
            
            /*Rizvi*/
           /* echo "<td style='width:40px;text-align: left;' title ='".$rec_det_detels[15].chr(10).$rec_det_detels[18].chr(10).$rec_det_detels[19].chr(10).$rec_det_detels[20]."'><span style='margin-left: 5px;'><img src='../../../img/".$rec_det_detels[14].".png'></span></td>";
            echo "<td style='width:40px;text-align: left;' title ='".$rec_det_detels[16]."'><span style='margin-left: 5px;'><img src='../../../img/".($rec_det_detels[16]==""?"4":"1").".png'></span></td>";*/
            //echo "<td style='width:40px;text-align: left;' title ='".$rec_det_detels[16]."'><span style='margin-left: 5px;'>".str_pad($rec_det_detels[17], 2, '0', STR_PAD_LEFT)."</span></td>";

            echo "<td style='width:200px;'>
                    <input type='button' class='buttonManage' id='btn_Validate' name='btn_Validate' value='VIEW' title='txta".$index."' onclick='clientValidate(title,".$rec_det_detels[10].");'/>
                    <input type='button' class='buttonManage' id='btn_Activate' name='btn_Activate' value='ACTIVATION' title='txta".$index."' onclick='isActivation(title);'/>
                    
         
            </td>";
            echo "</tr>";
            
        } 
    }
    
    
?>
</table>
<br />

                    
         
            
</span>
<div style="display: none;">
     <input type="text" name="txtrowCount" id="txtrowCount" value="<?php echo $index; ?>" />
    <input type="text" name="txt_helpdeskadmin" id="txt_helpdeskadmin" value="<?php echo  $_SESSION['helpdeskadmin']; ?>" />
    <input type="text" name="txt_helpdesk_close" id="txt_helpdesk_close" value="<?php echo  $_SESSION['helpdesk_close']; ?>" />
    <input type="text" name="txt_USERgROUP" id="txt_USERgROUP" value="<?php echo  $_SESSION['usergroupNumber']; ?>" />
    <input type="text" name="txt_USERMY" id="txt_USERMY" value="<?php echo  $_SESSION['user']; ?>" />
</div>

<br /><br />

<!-- ****************************************************************************************************************************************************** -->


<span id="getGried"></span>
<?php


function setNoteCreditCard($conn,$gethelpID,$note_dis,$user){
    
         
         $sql_note_update = "INSERT INTO `credit_card_note`(`helpid`, `note_dis`, `entry_by`) 
                                                    VALUES ('".$gethelpID."','".$note_dis."','".$user."');";
         $query_note_update = mysqli_query($conn,$sql_note_update) or die(mysqli_error($conn));
                   
}

function noteTbl($conn,$gethelpID , $msg,$user){
    $sql_select_note_count = "SELECT COUNT(c.helpid)
                                            FROM cdb_help_note AS c , cdb_helpdesk as h
                                            WHERE c.helpid = h.helpid AND
                                            h.helpid = '".$gethelpID."';";
    $query_select_note_count = mysqli_query($conn , $sql_select_note_count) or die(mysqli_error($conn));
    $cou = 1;
    //echo "A";
    while($rec_select_note_count = mysqli_fetch_array($query_select_note_count)){
        //echo "B";
        $cou = $rec_select_note_count[0] + 1;
        
        $sql_note_update = "INSERT INTO `cdb_help_note`(`helpid`, `note_code`, `note_discr`, `enterBy`, `enterDateTime`,`NoteTag`) 
                        VALUES (".$gethelpID.",'".$cou."',CONCAT('".$msg." ', now()),'".$user."',now(),'AGENT_ASSIGNED');";
        // echo $sql_note_update;
        $query_note_update = mysqli_query($conn,$sql_note_update) or die(mysqli_error($conn));
    }  
}




?>
</form>
</body>
</html>
