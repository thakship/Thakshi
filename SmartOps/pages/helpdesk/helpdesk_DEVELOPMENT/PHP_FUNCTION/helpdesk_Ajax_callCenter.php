<?php
session_start();
//.........................................Databse Connection .......................................................
function DatabaseConnection(){
    $conn = mysqli_connect("localhost","root","1234","cdberp");
    return $conn;
}
//.........................................get Helpdesk ID for Service Requset List............................................................................
 
if(isset($_REQUEST['get_Approve']) && isset($_REQUEST['get_function'])){
    //echo $_REQUEST['get_Approve']." - ".$_REQUEST['get_function'];
    get_Approve($_REQUEST['get_function']);
}
if(isset($_REQUEST['get_D_Approve']) && isset($_REQUEST['get_D_function'])){
    //echo $_REQUEST['get_Approve']." - ".$_REQUEST['get_function'];
    get_D_Approve($_REQUEST['get_D_Approve'],$_REQUEST['get_D_function']);
}
 if(isset($_REQUEST['getHelpIDreq']) && isset($_REQUEST['gettxt_helpdesk_close'])){
        getAjaxServiceRequsesList_helpID($_REQUEST['getHelpIDreq'],$_REQUEST['gettxt_helpdesk_close']);
 }
 
 if(isset($_REQUEST['getHelpIDCloaseREquest'])){
      // echo $_REQUEST['getHelpIDCloaseREquest'];
       getAjaxCloaseREquest($_REQUEST['getHelpIDCloaseREquest']);
 }
 
 if(isset($_REQUEST['getHelpIDLooping'])){
      // echo $_REQUEST['getHelpIDCloaseREquest'];
       getAjaxCloaseREquestLoop($_REQUEST['getHelpIDLooping']);
 }
  if(isset($_REQUEST['getHelpIDreqpatpat']) && isset($_REQUEST['gettxt_helpdesk_closepatpat'])){
    //echo "Patpat - ".$_REQUEST['gettxt_helpdesk_closepatpat'];
        getAjaxServiceRequsesList_helpID_PATPAT($_REQUEST['getHelpIDreqpatpat'],$_REQUEST['gettxt_helpdesk_closepatpat']);
 }
 
 
 if(isset($_REQUEST['getHelpIDreq1']) && isset($_REQUEST['gettxt_helpdesk_close1'])){
        getAjaxServiceRequsesList_helpIDSub($_REQUEST['getHelpIDreq1'],$_REQUEST['gettxt_helpdesk_close1']);
        //echo $_REQUEST['getHelpIDreq1']."--".$_REQUEST['gettxt_helpdesk_close1'];
 }
 
  if(isset($_REQUEST['getHelpIDreqBranch']) && isset($_REQUEST['gettxt_helpdesk_closeBranch'])){
        getAjaxServiceRequsesList_helpIDBranchSub($_REQUEST['getHelpIDreqBranch'],$_REQUEST['gettxt_helpdesk_closeBranch']);
        //echo $_REQUEST['getHelpIDreq1']."--".$_REQUEST['gettxt_helpdesk_close1'];
 }
 
 // ------------------------------- Start Scan Pending -----------------------------------
 if(isset($_REQUEST['getHelpIDreq_SP']) && isset($_REQUEST['gettxt_helpdesk_close_SP'])){
        getAjaxServiceRequsesList_helpID_SP($_REQUEST['getHelpIDreq_SP'],$_REQUEST['gettxt_helpdesk_close_SP']);
 }
 // ------------------------------- End Scan Pending -----------------------------------
 
 // ------------------------------- Start Scan Copled -----------------------------------
 if(isset($_REQUEST['getHelpIDreq_SP_sub']) && isset($_REQUEST['gettxt_helpdesk_close_SP_sub'])){
        getAjaxServiceRequsesList_helpID_SP_sub($_REQUEST['getHelpIDreq_SP_sub'],$_REQUEST['gettxt_helpdesk_close_SP_sub']);
 }
 // ------------------------------- End Scan Compied -----------------------------------
 
 
 if(isset($_REQUEST['getsubHelpIDreq'])){
    //echo $_REQUEST['getsubHelpIDreq'];
    getAjaxServiceRequsesList_SoledIssue($_REQUEST['getsubHelpIDreq']);
 }
 if(isset($_REQUEST['getAthUserGroup'])){
    getAjaxUsreGroup_CatFile($_REQUEST['getAthUserGroup']);
 }
 if(isset($_REQUEST['editHelpReq_ID'])){
    getAjaxServiceRequses_Edit($_REQUEST['editHelpReq_ID']);
 }
 if(isset($_REQUEST['getSRReoptDate1']) && isset($_REQUEST['getSRReoptDate2']) && isset($_REQUEST['getSRUGroup']) && isset($_REQUEST['opt']) && isset($_REQUEST['getDe']) && isset($_REQUEST['getsel_States']) && isset($_REQUEST['getsel_Urgency']) && isset($_REQUEST['getsel_Priority']) && isset($_REQUEST['getsel_Source']) && isset($_REQUEST['getsel_User']) && isset($_REQUEST['getsel_catCode'])){
    
    getServiceReequses_Report($_REQUEST['getSRReoptDate1'],$_REQUEST['getSRReoptDate2'],$_REQUEST['getSRUGroup'],$_REQUEST['opt'],$_REQUEST['getDe'],$_REQUEST['getsel_States'],$_REQUEST['getsel_Urgency'],$_REQUEST['getsel_Priority'],$_REQUEST['getsel_Source'],$_REQUEST['getsel_User'],$_REQUEST['getsel_catCode']);
 }
 if(isset($_REQUEST['getSRReoptDate1']) && isset($_REQUEST['getSRReoptDate2']) && isset($_REQUEST['getSRUGroup']) && isset($_REQUEST['opt']) && isset($_REQUEST['getDe']) && isset($_REQUEST['getsel_States']) && isset($_REQUEST['getsel_Urgency']) && isset($_REQUEST['getsel_Priority']) && isset($_REQUEST['getsel_Source']) && isset($_REQUEST['getcat_m']) && isset($_REQUEST['getcat1']) && isset($_REQUEST['getcat2']) && isset($_REQUEST['getcat3']) && isset($_REQUEST['getUser']) && isset($_REQUEST['getAsingUer']) ){
    
    getServiceReequses_ReportNew($_REQUEST['getSRReoptDate1'],$_REQUEST['getSRReoptDate2'],$_REQUEST['getSRUGroup'],$_REQUEST['opt'],$_REQUEST['getDe'],$_REQUEST['getsel_States'],$_REQUEST['getsel_Urgency'],$_REQUEST['getsel_Priority'],$_REQUEST['getsel_Source'],$_REQUEST['getcat_m'],$_REQUEST['getcat1'],$_REQUEST['getcat2'],$_REQUEST['getcat3'],$_REQUEST['getUser'],$_REQUEST['getAsingUer']);
 }
 if(isset($_REQUEST['linkExcel'])){
    echo "<a style='font-size:15px;text-decoration: none; color:#000000;' href='../../../temp/".$_REQUEST['linkExcel']."'>GET EXCEL</a>";
 }
 if(isset($_REQUEST['getSelectSRSelection']) && isset($_REQUEST['getSelectIDSelection']) && isset($_REQUEST['getSelectUGroupSelection']) && isset($_REQUEST['opt']) && isset($_REQUEST['getDe'])){
    getAjaxServiceRequses_Selection($_REQUEST['getSelectIDSelection'],$_REQUEST['getSelectSRSelection'],$_REQUEST['getSelectUGroupSelection'],$_REQUEST['opt'],$_REQUEST['getDe']);
 }
 if(isset($_POST['getCatID'])){
    getAjaxsubCatogorySelection_01($_POST['getCatID']);
 }
 if(isset($_POST['getCatIDSub1'])){
    getAjaxsubSubCatogorySelection_01($_POST['getCatIDSub1']);
 }
  if(isset($_REQUEST['getCatIDSub11']) && isset($_REQUEST['getVatIDSub22'])){
    getAjaxsubSubCatogorySelection_02($_REQUEST['getCatIDSub11'],$_REQUEST['getVatIDSub22']);
 }
 
 if(isset($_REQUEST['getSRCRFromDate']) && isset($_REQUEST['getSRCRToDate']) && isset($_REQUEST['getSRCRIdVal']) && isset($_REQUEST['srctopt'])){
    if($_REQUEST['srctopt']==1){
        getSR_Report_cat_period($_REQUEST['getSRCRFromDate'],$_REQUEST['getSRCRToDate'],$_REQUEST['getSRCRIdVal']);
    }
 }
 
 if(isset($_REQUEST['AddImg_helpID']) && isset($_REQUEST['AddImg_aIType'])){
    echo $_REQUEST['AddImg_helpID']."--".$_REQUEST['AddImg_aIType'];
    //getAjaxsubSubCatogorySelection_02($_REQUEST['getCatIDSub11'],$_REQUEST['getVatIDSub22']);
 }
 
 if(isset($_REQUEST['get_cnic']) && isset($_REQUEST['getscat2']) ){
    //echo $_REQUEST['get_cnic'];
    getNewCompliedDataGrid_informetion($_REQUEST['get_cnic'],$_REQUEST['getscat2']);
 } 
 
 if(isset($_REQUEST['getIss_templet']) && isset($_REQUEST['get_status']) && isset($_REQUEST['getcatCodeSelect'])){
   // echo $_REQUEST['getIss_templet'];  
    get_issue_temp($_REQUEST['getIss_templet'],$_REQUEST['get_status'] ,$_REQUEST['getcatCodeSelect']);
 }
 
 
 function get_Approve($get_function){
    $classes = explode("|",$get_function);
     
    echo "<div id='outer'></div>";
    echo "<div id='conten' style='padding: 10px;'><br/>";
     echo "<div style='width: 100%; height: 30px;text-align: right;margin-right: 10px;'></div>";
     echo $classes[2];
     echo "<br/>";
     echo "<table>
            <tr>
                <td>
                    Comment : 
                </td>
                <td>
                    <textarea id='txtComment' name='txtComment' rows='4' style='width: 300px;padding-left: 10px;font-family: Times New Roman;font-size: 12px;border: solid #000000 1px;'></textarea>     
                </td>
            </tr>
            </table>
          <br/>";
    echo "<div style='width: 100%;'>";    
    if($classes[0] == "A"){
        echo "<input type='button' style='margin-left: 100px;'  class='buttonManage' id='btn_Edit' name='btn_Edit' value='Approve' title='A|".$classes[1]."' onclick='isSolution(title);'/>";     
    }
    if($classes[0] == "R"){
        echo "<input type='button' style='margin-left: 100px;'  class='buttonManage' id='btn_Edit' name='btn_Edit' value='Reject' title='R|".$classes[1]."' onclick='isSolution(title);'/>";     
    }
    if($classes[0] == "P"){
        echo "<input type='button' style='margin-left: 100px;'  class='buttonManage' id='btn_Edit' name='btn_Edit' value='Update' title='".$classes[1]."' onclick='isSolution(title);'/>";     
    }
   echo "<input type='button' style='margin-right: 10px;' class='buttonManage' id='btn_Edit' name='btn_Edit' value='Close' title='Close' onclick='popup(0,title)'/>";
          
    echo "</div>";
    echo "<div style='width: 100%;'></div>
    </div>";
}


function get_D_Approve($get_D_Approve,$get_D_function){
     
    echo "<div id='outer'></div>";
    echo "<div id='conten' style='padding: 10px;'><br/>";
    // echo "<div style='width: 100%; height: 5px;text-align: right;margin-right: 10px;'></div>";
     echo "<div style='width: 100%; height: 5px;'>
             <lable style='margin-left: 5px;'>Confirm to proceed ?<lable> <hr/>
           </div>";
    echo "<div style='display: none;'>
    <input type='text' name='txt_helpID_D' id='txt_helpID_D' value='".$get_D_function."' />
    </div>";
     echo "<br/><br/>";
     echo "<table>
            <tr>
                <td style='width: 100px; text-align: right; vertical-align: top;'>Call Answered :</td>
                <td>
                   <select class='box_decaretion' name='selCallAnswered' id='selCallAnswered' onkeypress='return disableEnterKey(event)' onchange = 'getCallFeedback();'>
                             <option value='YES'> Yes </option>
                             <option value='NO'> NO </option>
                   </select>
                   
                </td>
            </tr>
           </table>
            <table style='display: none;' id='callchk'>
                       <tr>
                     <td style='width: 100px; text-align: right; vertical-align: top;'>Pending Call  :</td>
                        <td>
                             <input class='box_decaretion' type='checkbox' name='chk_C' id='chk_C'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                    </tr>
            </table>
           <table>
           <tr>
                <td style='width: 100px; text-align: right; vertical-align: top;'>
                    Comment : 
                </td>
                <td>
                    <textarea id='txtComment' name='txtComment' rows='4' style='width: 300px;padding-left: 10px;font-family: Times New Roman;font-size: 12px;border: solid #000000 1px;'></textarea>     
                </td>
            </tr>
          </table>
            
          <br/>";
    echo "<div style='width: 100%;'>";    
         echo "  <table>
                       <tr>
                     <td style='width: 100px; text-align: right; vertical-align: top;'</td>
                        <td>
                            <input type='submit' style='width: 100px; border: #000000 solid 1px; height: 30px;'  class='buttonManage' id='btn_submit' name='btn_submit' value='Update'/>
                            <input type='button' style='margin-right: 10px;width: 100px;border: #000000 solid 1px; height: 30px;' class='buttonManage' id='btn_Edit' name='btn_Edit' value='Close' title='Close' onclick='popup(0,title)'/>
                        </td>
                    </tr>
            </table>";
       // echo "<input type='submit' style='margin-left: 10px;'  class='buttonManage' id='btn_submit' name='btn_submit' value='Update'/>";     
       // echo "<input type='button' style='margin-right: 10px;' class='buttonManage' id='btn_Edit' name='btn_Edit' value='Close' title='Close' onclick='popup(0,title)'/>";
          
    echo "</div>";
    echo "<div style='width: 100%;'></div>
    </div>";
}
 
 //="+helpID+"&="+aIType
//............................................................................................................................................................
    function get_issue_temp($getIss_templet,$get_status,$getcatCodeSelect){
         $conn = DatabaseConnection();
         $catagry = substr($getIss_templet,0,4);
         $scat1 = substr($getIss_templet,0,6);
         
         if($getcatCodeSelect == "1024" && $scat1 == "102402"){
             
               echo "<tr>
                                <td style='width: 100px; text-align: right;'><label class='linetop'>Request/ Issue :</label></td>
                                <td>
                                    <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                                </td>
                                </tr>
                                <tr style='display: none;'>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                        </tr>
                              <tr>
                                <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                                <td>
<textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;font-size:12px' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required'>
Customer Name :
Contact Number :
Location :
Inquiry :

</textarea>
                                </td>
                              </tr>
                                ";
         }else if($getcatCodeSelect == "1024"){
             
             echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Clint Contact Number :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_issue' id='txt_issue' value='' maxlength='10' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                        </td>
                        </tr>
                      <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                        </tr>
                      <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
<textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;font-size:12px' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required'>
Name :
Contact No :
URL : 
</textarea>
                        </td>
                      </tr>
                        ";
         }else {
                 
                 if($get_status == 4){
                    $sql_load = "SELECT `templet_issue` , `issue_lbl` FROM `scat_02` WHERE `scat_code_2` = '".$getIss_templet."';";
                    //echo $sql_load;
                 }else{
                    $sql_load = "SELECT `templet_issue`,`issue_lbl` FROM `scat_03` WHERE `scat_code_3` = '".$getIss_templet."';";
                    //echo $sql_load;
                 }
                 
                 $que_load = mysqli_query($conn , $sql_load) or die(mysqli_error($conn));
                 while($rec_load = mysqli_fetch_array($que_load)){
                    if($rec_load[0] == "" && $rec_load[1] == "" ){
                         echo "<tr>
                                <td style='width: 100px; text-align: right;'><label class='linetop'>Request/ Issue :</label></td>
                                <td>
                                    <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                                </td>
                                </tr>
                                <tr style='display: none;'>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                        </tr>
                              <tr>
                                <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                                <td>
                                     <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;font-size:12px' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required'></textarea>
                                </td>
                              </tr>
                                ";
                    }else if($rec_load[0] != "" && $rec_load[1] == "" ){
                        echo "<tr>
                                <td style='width: 100px; text-align: right;'><label class='linetop'>Request/ Issue :</label></td>
                                <td>
                                    <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                                </td>
                                </tr>
                                <tr style='display: none;'>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                        </tr>
                              <tr>
                                <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                                <td>
                                     <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;font-size:12px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required'>".$rec_load[0]."</textarea>
                                </td>
                              </tr>
                                ";
                    }else if($rec_load[0] == "" && $rec_load[1] != "" ){
                        echo "<tr>
                                <td style='width: 100px; text-align: right;'><label class='linetop'>".$rec_load[1]." :</label></td>
                                <td>
                                    <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                                </td>
                                </tr>
                                <tr style='display: none;'>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                        </tr>
                              <tr>
                                <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                                <td>
                                     <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;font-size:12px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required'></textarea>
                                </td>
                              </tr>
                                ";
                    }else if($rec_load[0] != "" && $rec_load[1] != "" ){
                        echo "<tr>
                                <td style='width: 100px; text-align: right;'><label class='linetop'>".$rec_load[1]." :</label></td>
                                <td>
                                    <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                                </td>
                                </tr>
                                <tr style='display: none;'>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                        </tr>
                              <tr>
                                <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                                <td>
                                     <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;font-size:12px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required'>".$rec_load[0]."</textarea>
                                </td>
                              </tr>
                                ";
                    }else{
                         echo "<tr>
                                <td style='width: 100px; text-align: right;'><label class='linetop'>Request/ Issue  :</label></td>
                                <td>
                                    <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                                </td>
                                </tr>
                                <tr style='display: none;'>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                        </tr>
                              <tr>
                                <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                                <td>
                                     <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;font-size:12px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required'></textarea>
                                </td>
                              </tr>
                                ";
                    }
                 }
         }
        
    }
    // Normal Helpdesk items.........
    function getAjaxServiceRequsesList_helpID($gethelpID,$getStClose){
        $conn = DatabaseConnection();
		echo "getAjaxServiceRequsesList_helpID";
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress`,`defPassword` , `ssb_facility_amount` , `tentativeon` ,`CallAssgined`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."';";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $vEntryUserBranch = getEntryUserBranch($rec_getHelpdesk['entry_branch'],$conn); // Get Entry Usre Branch
            $v_getTentative = getTentative($rec_getHelpdesk['scat_code_2'],$conn); // get statas of Tantative ON.
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            $userEmail = "";
            $userGSM = "";
            $DefaultPswd = $rec_getHelpdesk['defPassword'];  
            
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
			
	
            
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;'  type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Branch :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0; width : 250px;' type='text' name='txt_Entry_Branch' id='txt_Entry_Branch' value='".$vEntryUserBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                </table>";
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Category :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_catagory' id='sel_catagory' value='".$v_sel_catagory."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat01' id='sel_scat01' value='".$v_sel_scat01."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />                 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat03' id='sel_scat03' value='".$v_sel_scat03."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>";
                    if($rec_getHelpdesk['cat_code'] == "1024" && $rec_getHelpdesk['scat_code_1'] == "102401"){
                        echo "<tr>
                            <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='".$rec_getHelpdesk['ssb_facility_amount']."' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                            </td>";
                    }
                    
                    echo "<tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>";
                  //Added by Rizvi on 2:30 PM 16/06/2016
                  if ($rec_getHelpdesk['scat_code_2'] == '200115') echo "<td style='text-align: left;font-size: 24px;'>".($DefaultPswd=="1"?"":$DefaultPswd)."</td>";
                  echo "</tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Source' id='sel_Source' value='".$v_getSource."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:600px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." -- ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Attachment :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                            
                     echo   "</td>
                    </tr>";
                    
                    $v_Sql_helpNote = "SELECT COUNT(*) FROM `pending_upload_file` WHERE `help_id` = '".$gethelpID."';";
                    
                    //echo $v_Sql_helpNote;
                    $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                    while($REC_helpNote = mysqli_fetch_array($que_helpNote)){
                        if($REC_helpNote[0] > 0){
                            echo "<tr><td s tyle='width: 100px; text-align: right;'><label class='linetop'>Additional Files:</label></td><td>";
                            echo "<a title='".$gethelpID."' href='#' onclick='isAddiImgRequset(title)'>Additional Images</a>";
                            echo   "</td></tr>";     
                        } 
                    }      
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID' onclick='popup(1);'/> 
                                <input class='box_decaretion' type='text' style='width:500px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name' onclick='popup(1);'/>
                                <input type='button' class='buttonManage' id='btnPopUp' name='btnPopUp' value='...' onclick='popup(1);'/> 
                                <input type='button' class='buttonManage' id='btnremove' name='btnremove' value='Remove' onclick='removeUsreID()'/>
                        </td>
                    </tr>";
                    
                    if($v_getTentative == 1){
                        $dis = "";
                    }else{
                        $dis = "display: none;";   
                    }
                   
                    if($rec_getHelpdesk['tentativeon'] != "0000-00-00"){
                        $des = "disabled='disabled'";
                    }else{
                        $des = "";
                    }
                    echo "<tr style='".$dis."'>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Tentative On :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_tentativeon' id='txt_tentativeon' value='".$rec_getHelpdesk['tentativeon']."' onKeyPress='return disableEnterKey(event)' placeholder='0000-00-00' ".$des."/> 
                                <input type='button' class='buttonManage' id='btntentativeon' name='btntentativeon' value='Agree' title='".$gethelpID."' onclick='tentativeonAgree(title)' ".$des."/>
                        </td>
                    </tr>";
                echo "</table>";
                
                //$v_getTentative
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:600px;'>Notes</td>
                                    <td style='width:100px;'>Enterd User</td>
                                    <td style='width:200px;'>Enterd On</td>
                                    <td style='width:30px;'></td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."';";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                            <td style='width: 600px; text-align: left;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value='".$REC_helpNote['note_discr']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 100px; text-align: left;' title='".getUserNameGenaral_Mob_Eml($REC_helpNote['enterBy'],$conn)."'><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value='".$REC_helpNote['enterBy']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 150px; text-align: left;'><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value='".$REC_helpNote['enterDateTime']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width:30px;'>
                                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_c_n".$index."' id='txt_c_n".$index."' value='0' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                                            </td>
                                        </tr>";
                                    $index++;
                                }
                        echo "<tr>
                                <td style='width:50px;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                <td style='width:600px;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value=''  onKeyPress='return disableEnterKey(event)' /></td>
                                <td style='width: 100px;><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value=''  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                <td style='width: 150px;><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value=''  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                <td style='width:30px;'>
                                <img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/>
                                <div style='display: none;'><input class='box_decaretion' type='text' name='txt_c_n".$index."' id='txt_c_n".$index."' value='1' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                                </td>
                            </tr>";
                    echo "</table>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'></td>
                        <td><input class='buttonManage' type='button' name='btn_addnote' id='btn_addnote' value='Add row' onclick='is_add_row();'/></td>
                    </tr>
                </table> <div style='display: none;'>
           <input type='text' name='row_COUNT' id='row_COUNT' value='".$index."' onKeyPress='return disableEnterKey(event)'/> 
        </div>";
                echo "<br/><br/>
                <fieldset>
                    <legend><label class='linetop'>Intermediate Contact:</label></legend>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Branch :</label><td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Branch' id='txt_Branch' value='".$v_getBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Department' id='txt_Department' value='".$v_getDepartment."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. User :</label><td>   
                            <td>
                                <input class='box_decaretion' type='text'  style='width:600px;' name='txt_inner_User2' id='txt_inn' value='".$vgetInnerUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Remark :</label><td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:50px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['inner_remark']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                         echo "<input type='submit' style='width: 100px;' class='buttonManage' id='btnUpdate' name='btnUpdate' value='Update'/>";
                          echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageRef()'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        if($getStClose!=0){
                            echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnSolution' name='btnSolution' value='Solution' onclick='getSolution();'/>";
                         }else{}  
//----------------------------------------------- Gen PDF - develop by Madushan - 2016-07-06 -----------------------------------------------------------
                         if ($rec_getHelpdesk['scat_code_2'] == '200115'){
                             echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='GenPDF' onclick='genPdfForUserLogin();'/>";
$Rowsnos =  50;
$colsnos =  round ((strlen($rec_getHelpdesk['help_discr']) + 1) / 40,0);
$Rowsnos = $Rowsnos < 4 ? 4 : $colsnos;
echo "<div id='content' style='font-family: Times New Roman; font-size: 12px;display: none;'>
<div style='page-break-after: always;'>
<div style='background-image: url('../../../img/CONFIDENTIAL.png');background-repeat: no-repeat;'>
    <br />
    <div style='width: 100%;'>
        <div style='float: left; text-align: left;width: 50%;font-family: Times New Roman; font-size: 12px;'>Dear ".$rec_getHelpdesk['issue'].",</div>
        <div style='float: left; text-align: right;width: 50%;font-family: Times New Roman; font-size: 12px;'>Date- ".date('Y-m-d')."</div>
    </div>
    <div style='width: 100%;'>
         <br /><br />
        <label style='margin-left: 10px; font-weight: bold; text-decoration: underline;font-family: Times New Roman; font-size: 12px;'>Welcome to CDB Information Systems!!!</label><br /><br />
        <label style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>Please Use the following User Credentials for Your Systems</label><br /><br />
        <div style='font-family: Times New Roman; font-size: 12px;'> 
            <textarea rows='".$colsnos."' style='width: 400px;padding-left: 10px;font-family: Times New Roman;font-size: 12px;border: none;'>".$rec_getHelpdesk['help_discr']."</textarea>
        </div>
        <table style='margin-left: 8px;font-family: Times New Roman; font-size: 12px;'>
            <tr>
                <td style='font-family: Times New Roman; font-size: 12px;'>Password</td>
                <td style='font-family: Times New Roman; font-size: 12px;'>: ".$DefaultPswd."</td>
            </tr>
        </table>
        <br />
        <table border='1' cellpadding='0' cellspacing='0' style='margin-left: 10px;'>";
            $v_Sql_tbl_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."';";
            $que_tbl_helpNote = mysqli_query($conn,$v_Sql_tbl_helpNote);
            $index = 1;
            while($REC_tblhelpNote = mysqli_fetch_assoc($que_tbl_helpNote)){  
                echo "<tr>
                        <td style='width: 400px;font-family: Times New Roman; font-size: 12px;'>".$REC_tblhelpNote['note_discr']."</td>
                    </tr>";
                $index++;
            }          
        echo "</table>
        <br />
    </div>
    <div style='width: 100%;text-align: center;'>
        <label style='font-weight: bold; text-decoration: underline;font-family: Times New Roman; font-size: 12px;'>Instructions in Protecting &amp; Using Your Passwords</label>
    </div>
    <div style='width: 100%;text-align: justify;'>
        <p style='font-family: Times New Roman; font-size: 12px; text-align: justify;line-height: 20px;'>
        Please find below instructions with regards to protecting and using the passwords for the user IDs assigned to you. You are required to follow these instructions carefully. Citizens Development Business Finance PLC reserves the right to take disciplinary actions against you for violation of any of these instructions.
        </p>
        <ol style='font-family: Times New Roman; font-size: 12px;line-height: 20px;'>
            <li>Your password is for your personal use only. Do not divulge them to anyone else.</li>
            <li>Your password should be minimum 8 characters in length wherever applicable.</li>
            <li>You should change your Password immediately after logging into all systems at \"First Time\".</li>
            <li>Your password should be formed using the following guide lines.
                <ul style='list-style-type:disc;font-family: Times New Roman; font-size: 12px;line-height: 20px;'>
                    <li>The use of both upper- and lower-case letters (case sensitivity).</li>
                    <li>Inclusion of four or more numerical digits.</li>
                    <li>The use of consonant and  vowel, numbers and special characters in the  formation  of passwords.</li>
                </ul>
            </li>
            <li>You must be alert following practices in using passwords.
                <ul style='list-style-type:disc;line-height: 20px;'>
                    <li>Never use  the same password for more than one account.</li>
                    <li>Do not use remember password option available on applications such as \"Outlook\", Firefox , IE </li>
                    <li>Never write down a password.</li>
                    <li>Never communicate a password by telephone, e-mail or instant messaging.</li>
                    <li>Log off before leaving a computer unattended</li>
                    <li>Changing passwords whenever there is suspicion they may have been compromised.</li>
                    <li>Change your passwords regularly.</li>
                    <li>If your workstation (Ex. Branch/Division/Department) is changed, please inform IT Department trough HR department immediately to do necessary changes to your User credentials</li>
                </ul>
            </li>
            <li>If you feel your password has being obtained by someone else, change it immediately.</li>
            <li>Notify the IT Helpdesk immediately, if you feel your User ID/Password has been used by anyone else..</li>
        </ol>
       	<div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 14px;'>Wishing all the success! for your future career at CDB    ~Team IT~</label>
        </div>
        <br />
        <br />
        <br />
        <br />
        <div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 12px;'>Page 01 of 02</lable>
        </div> 
        <div style='width: 100%;text-align: right;'>
            <label style='font-family: Times New Roman; font-size: 12px;margin-right: 20px;'>CONFIDENTIAL</label>
        </div>
    </div>
</div>
</div>
<div style='page-break-after: always;'>
<div style='background-image: url('../../../img/CONFIDENTIAL.png');background-repeat: no-repeat;'>
<br /><br/><br/>
    <div style='width: 100%;text-align: center;'>
        <label style='font-weight: bold; text-decoration: underline;font-family: Times New Roman; font-size: 14px; '>User Acknowledgment - CDB Information Systems</label><br /><br />
    </div>
    <div style='width: 100%;'>
        <label style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>I ...............................................................................................................................................................................</label><br />
        <div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 12px;'>(Name)</lable>
        </div> 
        <br />
        <label style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>Hereby acknowledge that, </label><br />
        <ul style='font-family: Times New Roman; font-size: 12px; line-height: 20px;'>
            <li>I have received the user credentials to the CDB Information systems and</li>
            <li>I have read and understood the CDB IT Policies and Procedures listed below,</li>
        </ul>
        <br/>
         <table style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;  font-weight: bold;'>Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;font-weight: bold;'>Tick as Appropriate</td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Information Security Policy &amp; Procedure</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Acceptable Use policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Password Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Email Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Internet Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
         </table>
         <br/>
         <p style='font-family: Times New Roman; font-size: 12px;text-align: justify;line-height: 20px;'>
            Further I agree to comply with the aforesaid CDB IT Policies and procedures (and other associated content) as a condition of employment (or continued employment) with CDB. I consent to the Company monitoring the Systems and monitoring, reviewing and disclosing documents and messages (including personal documents and messages) as provided in Acceptable use Policy, and I agree that I have no expectation of privacy with respect to any documents or messages created, sent, received, retrieved or stored on any of the CDB Systems.   
         </p>
         <p style='font-family: Times New Roman; font-size: 12px;text-align: justify;line-height: 20px;'>
            I agree further that the policies listed above are not exhaustive and the management of the CDB reserve the right to amend/ rescind/ alter the existing policies and impose such other policies as it deems necessary from time to time.
         </p>
         <br/>
        <label style='font-family: Times New Roman; font-size: 12px;'>Date &nbsp;&nbsp;:...............................................</label>
        <label style='font-family: Times New Roman; font-size: 12px;'>Time :...............................................</label><br /><br/>
        <label style='font-family: Times New Roman; font-size: 12px;'>User ID. :.........................................</label> <br /><br/>
        <label style='font-family: Times New Roman; font-size: 12px;'>NIC No:.............................................</label>
        <label style='font-family: Times New Roman; font-size: 12px;'>Signature :...............................................</label><br /><br/>
        <p style='font-family: Times New Roman; font-size: 12px;'>
           <label style='font-family: Times New Roman; font-size: 12px; font-weight: bold;'>Important!</label> - Duly completed 2nd page of this document should be returned to the HR Department within 03 working days.    
        </p>
        <br/>
        <br/>
        <br/>
        <br/>
        <div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 12px;'>Page 02 of 02</label>
        </div>
        <div style='width: 100%;text-align: right;'>
            <label style='font-family: Times New Roman; font-size: 12px;margin-right: 20px;'>CONFIDENTIAL</label>
        </div>
    </div>
</div>
</div>

</div>";
                         } 
//----------------------------------------------------------------------------------------------------------------------------------------------------------
                        echo "</td>
                    </tr>
                </table>
                ";
        }
        
        
    }
    
    
///////////////////////////////////////////////////////////////////////////////////////////////

function getTentative($scat_code_2,$conn){
    $sql = "SELECT s.isTentative FROM scat_02 AS s WHERE s.scat_code_2 = '".$scat_code_2."';";
    $query = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    while($rec = mysqli_fetch_array($query)){
        return $rec[0];
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     // Normal Helpdesk items.........
    function getAjaxCloaseREquest($gethelpID){
        $conn = DatabaseConnection();
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress`,`defPassword` , `ssb_facility_amount`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."' AND (`cmb_code` = '5002' OR `cmb_code`='5004');";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $vEntryUserBranch = getEntryUserBranch($rec_getHelpdesk['entry_branch'],$conn); // Get Entry Usre Branch
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            $userEmail = "";
            $userGSM = "";
            $DefaultPswd = $rec_getHelpdesk['defPassword'];
            
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
            
            
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;'  type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Branch :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0; width : 250px;' type='text' name='txt_Entry_Branch' id='txt_Entry_Branch' value='".$vEntryUserBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                </table>";
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Category :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_catagory' id='sel_catagory' value='".$v_sel_catagory."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat01' id='sel_scat01' value='".$v_sel_scat01."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />                 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat03' id='sel_scat03' value='".$v_sel_scat03."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>";
                    if($rec_getHelpdesk['cat_code'] == "1024"){
                        echo "<tr>
                            <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='".$rec_getHelpdesk['ssb_facility_amount']."' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                            </td>";
                    }
                    
                    echo "<tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>";
                  //Added by Rizvi on 2:30 PM 16/06/2016
                  if ($rec_getHelpdesk['scat_code_2'] == '200115') echo "<td style='text-align: left;font-size: 24px;'>".($DefaultPswd=="1"?"":$DefaultPswd)."</td>";
                  echo "</tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Source' id='sel_Source' value='".$v_getSource."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:600px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." -- ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Attachment :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                            
                     echo   "</td>
                    </tr>";
                    $v_Sql_helpNote = "SELECT COUNT(*) FROM `pending_upload_file` WHERE `file_type` = 'K' AND `help_id` = '".$gethelpID."';";
                    $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                    while($REC_helpNote = mysqli_fetch_array($que_helpNote)){
                        if($REC_helpNote[0] > 0){
                            echo "<tr><td s tyle='width: 100px; text-align: right;'><label class='linetop'>Additional Files:</label></td><td>";
                            echo "<a title='".$gethelpID."' href='#' onclick='isAddiImgRequset(title)'>Additional Images</a>";
                            echo   "</td></tr>";     
                        } 
                    }      
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID'/> 
                                <input class='box_decaretion' type='text' style='width:500px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name'/>
                        </td>
                    </tr>
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:600px;'>Notes</td>
                                    <td style='width:100px;'>Enterd User</td>
                                    <td style='width:200px;'>Enterd On</td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."' order by `enterDateTime`;";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                            <td style='width: 600px; text-align: left;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value='".$REC_helpNote['note_discr']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 100px; text-align: left;'><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value='".$REC_helpNote['enterBy']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 150px; text-align: left;'><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value='".$REC_helpNote['enterDateTime']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                        </tr>";
                                    $index++;
                                }
                    echo "</table>
                        </td>
                    </tr>
                </table> <div style='display: none;'>
           <input type='text' name='row_COUNT' id='row_COUNT' value='".$index."' onKeyPress='return disableEnterKey(event)'/> 
        </div>";
                echo "<br/><br/>
                <fieldset>
                    <legend><label class='linetop'>Intermediate Contact:</label></legend>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Branch :</label><td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Branch' id='txt_Branch' value='".$v_getBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Department' id='txt_Department' value='".$v_getDepartment."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. User :</label><td>   
                            <td>
                                <input class='box_decaretion' type='text'  style='width:600px;' name='txt_inner_User2' id='txt_inn' value='".$vgetInnerUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Remark :</label><td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:50px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['inner_remark']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                          echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageRef()'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "</td>
                    </tr>
                </table>
                ";
        }
        
        
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     // Normal Helpdesk items.........
    function getAjaxCloaseREquestLoop($gethelpID){
        $conn = DatabaseConnection();
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress`,`defPassword` , `ssb_facility_amount` , `resulution` ,`solution`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."';";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $vEntryUserBranch = getEntryUserBranch($rec_getHelpdesk['entry_branch'],$conn); // Get Entry Usre Branch
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            $userEmail = "";
            $userGSM = "";
            $DefaultPswd = $rec_getHelpdesk['defPassword'];
            
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
            
            
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;'  type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Branch :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0; width : 250px;' type='text' name='txt_Entry_Branch' id='txt_Entry_Branch' value='".$vEntryUserBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                </table>";
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Category :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_catagory' id='sel_catagory' value='".$v_sel_catagory."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat01' id='sel_scat01' value='".$v_sel_scat01."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />                 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat03' id='sel_scat03' value='".$v_sel_scat03."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>";
                    if($rec_getHelpdesk['cat_code'] == "1024"){
                        echo "<tr>
                            <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='".$rec_getHelpdesk['ssb_facility_amount']."' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                            </td>";
                    }
                    
                    echo "<tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>";
                  //Added by Rizvi on 2:30 PM 16/06/2016
                  if ($rec_getHelpdesk['scat_code_2'] == '200115') echo "<td style='text-align: left;font-size: 24px;'>".($DefaultPswd=="1"?"":$DefaultPswd)."</td>";
                  echo "</tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Source' id='sel_Source' value='".$v_getSource."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:600px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." -- ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Attachment :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                            
                     echo   "</td>
                    </tr>";
                    $v_Sql_helpNote = "SELECT COUNT(*) FROM `pending_upload_file` WHERE `file_type` = 'K' AND `help_id` = '".$gethelpID."';";
                    $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                    while($REC_helpNote = mysqli_fetch_array($que_helpNote)){
                        if($REC_helpNote[0] > 0){
                            echo "<tr><td s tyle='width: 100px; text-align: right;'><label class='linetop'>Additional Files:</label></td><td>";
                            echo "<a title='".$gethelpID."' href='#' onclick='isAddiImgRequset(title)'>Additional Images</a>";
                            echo   "</td></tr>";     
                        } 
                    }      
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID'/> 
                                <input class='box_decaretion' type='text' style='width:500px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name'/>
                        </td>
                    </tr>
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:600px;'>Notes</td>
                                    <td style='width:100px;'>Enterd User</td>
                                    <td style='width:200px;'>Enterd On</td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."' order by `enterDateTime`;";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                            <td style='width: 600px; text-align: left;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value='".$REC_helpNote['note_discr']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 100px; text-align: left;'><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value='".$REC_helpNote['enterBy']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 150px; text-align: left;'><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value='".$REC_helpNote['enterDateTime']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                        </tr>";
                                    $index++;
                                }
                    echo "</table>
                        </td>
                    </tr>
                </table> <div style='display: none;'>
           <input type='text' name='row_COUNT' id='row_COUNT' value='".$index."' onKeyPress='return disableEnterKey(event)'/> 
        </div>";
                echo "<br/><br/>
                <fieldset>
                    <legend><label class='linetop'>Solution :</label></legend>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Caused by :</label><td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:50px; width: 400px;' name='sadsa' id='inner_Rassademark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['resulution']."</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Solution  :</label><td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:50px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['solution']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                          echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageRef()'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo "</td>
                    </tr>
                </table>
                ";
        }
        
        
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
    // Normal Helpdesk items.........
    function getAjaxServiceRequsesList_helpID_PATPAT($gethelpID,$getStClose){
		echo "getAjaxServiceRequsesList_helpID_PATPAT";
        $conn = DatabaseConnection();
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress`,`defPassword` , `ssb_facility_amount`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."';";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $vEntryUserBranch = getEntryUserBranch($rec_getHelpdesk['entry_branch'],$conn); // Get Entry Usre Branch
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            $userEmail = "";
            $userGSM = "";
            $DefaultPswd = $rec_getHelpdesk['defPassword'];
            
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
            
            
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0;'  type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Branch :</label></td>
                        <td>
                            <input class='box_decaretion' style='background-color:#d1d1e0; width : 250px;' type='text' name='txt_Entry_Branch' id='txt_Entry_Branch' value='".$vEntryUserBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                </table>";
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Category :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_catagory' id='sel_catagory' value='".$v_sel_catagory."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat01' id='sel_scat01' value='".$v_sel_scat01."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />                 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat03' id='sel_scat03' value='".$v_sel_scat03."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>";
                    if($rec_getHelpdesk['cat_code'] == "1024"){
                        echo "<tr>
                            <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_facAmount' id='txt_facAmount' value='".$rec_getHelpdesk['ssb_facility_amount']."' maxlength='20' onKeyPress='return isNumber(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                            </td>";
                    }
                    
                    echo "<tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>";
                  //Added by Rizvi on 2:30 PM 16/06/2016
                  if ($rec_getHelpdesk['scat_code_2'] == '200115') echo "<td style='text-align: left;font-size: 24px;'>".($DefaultPswd=="1"?"":$DefaultPswd)."</td>";
                  echo "</tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Source' id='sel_Source' value='".$v_getSource."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:600px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." -- ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Attachment :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                            
                     echo   "</td>
                    </tr>";
                    $v_Sql_helpNote = "SELECT COUNT(*) FROM `pending_upload_file` WHERE `file_type` = 'K' AND `help_id` = '".$gethelpID."';";
                    $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                    while($REC_helpNote = mysqli_fetch_array($que_helpNote)){
                        if($REC_helpNote[0] > 0){
                            echo "<tr><td s tyle='width: 100px; text-align: right;'><label class='linetop'>Additional Files:</label></td><td>";
                            echo "<a title='".$gethelpID."' href='#' onclick='isAddiImgRequset(title)'>Additional Images</a>";
                            echo   "</td></tr>";     
                        } 
                    }      
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID' onclick='popup(1);'/> 
                                <input class='box_decaretion' type='text' style='width:500px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name' onclick='popup(1);'/>
                                <input type='button' class='buttonManage' id='btnPopUp' name='btnPopUp' value='...' onclick='popup(1);'/> 
                                <input type='button' class='buttonManage' id='btnremove' name='btnremove' value='Remove' onclick='removeUsreID()'/>
                        </td>
                    </tr>
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:600px;'>Notes</td>
                                    <td style='width:100px;'>Enterd User</td>
                                    <td style='width:200px;'>Enterd On</td>
                                    <td style='width:30px;'></td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."';";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                            <td style='width: 600px; text-align: left;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value='".$REC_helpNote['note_discr']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 100px; text-align: left;'><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value='".$REC_helpNote['enterBy']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 150px; text-align: left;'><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value='".$REC_helpNote['enterDateTime']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width:30px;'>
                                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_c_n".$index."' id='txt_c_n".$index."' value='0' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                                            </td>
                                        </tr>";
                                    $index++;
                                }
                        echo "<tr>
                                <td style='width:50px;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                <td style='width:600px;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value=''  onKeyPress='return disableEnterKey(event)' /></td>
                                <td style='width: 100px;><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value=''  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                <td style='width: 150px;><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value=''  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                <td style='width:30px;'>
                                <img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/>
                                <div style='display: none;'><input class='box_decaretion' type='text' name='txt_c_n".$index."' id='txt_c_n".$index."' value='1' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                                </td>
                            </tr>";
                    echo "</table>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'></td>
                        <td><input class='buttonManage' type='button' name='btn_addnote' id='btn_addnote' value='Add row' onclick='is_add_row();'/></td>
                    </tr>
                </table> <div style='display: none;'>
           <input type='text' name='row_COUNT' id='row_COUNT' value='".$index."' onKeyPress='return disableEnterKey(event)'/> 
        </div>";
                echo "<br/><br/>
                <fieldset>
                    <legend><label class='linetop'>Intermediate Contact:</label></legend>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Branch :</label><td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Branch' id='txt_Branch' value='".$v_getBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Department' id='txt_Department' value='".$v_getDepartment."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. User :</label><td>   
                            <td>
                                <input class='box_decaretion' type='text'  style='width:600px;' name='txt_inner_User2' id='txt_inn' value='".$vgetInnerUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Remark :</label><td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:50px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['inner_remark']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                         echo "<input type='submit' style='width: 100px;' class='buttonManage' id='btnUpdate' name='btnUpdate' value='Update'/>";
                          echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageRef()'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        /*if($getStClose!=0){
                            echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnSolution' name='btnSolution' value='Solution' onclick='getSolution();'/>";
                         }else{}  */
//----------------------------------------------- Gen PDF - develop by Madushan - 2016-07-06 -----------------------------------------------------------
                         if ($rec_getHelpdesk['scat_code_2'] == '200115'){
                             echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='GenPDF' onclick='genPdfForUserLogin();'/>";
$Rowsnos =  50;
$colsnos =  round ((strlen($rec_getHelpdesk['help_discr']) + 1) / 40,0);
$Rowsnos = $Rowsnos < 4 ? 4 : $colsnos;
echo "<div id='content' style='font-family: Times New Roman; font-size: 12px;display: none;'>
<div style='page-break-after: always;'>
<div style='background-image: url('../../../img/CONFIDENTIAL.png');background-repeat: no-repeat;'>
    <br />
    <div style='width: 100%;'>
        <div style='float: left; text-align: left;width: 50%;font-family: Times New Roman; font-size: 12px;'>Dear ".$rec_getHelpdesk['issue'].",</div>
        <div style='float: left; text-align: right;width: 50%;font-family: Times New Roman; font-size: 12px;'>Date- ".date('Y-m-d')."</div>
    </div>
    <div style='width: 100%;'>
         <br /><br />
        <label style='margin-left: 10px; font-weight: bold; text-decoration: underline;font-family: Times New Roman; font-size: 12px;'>Welcome to CDB Information Systems!!!</label><br /><br />
        <label style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>Please Use the following User Credentials for Your Systems</label><br /><br />
        <div style='font-family: Times New Roman; font-size: 12px;'> 
            <textarea rows='".$colsnos."' style='width: 400px;padding-left: 10px;font-family: Times New Roman;font-size: 12px;border: none;'>".$rec_getHelpdesk['help_discr']."</textarea>
        </div>
        <table style='margin-left: 8px;font-family: Times New Roman; font-size: 12px;'>
            <tr>
                <td style='font-family: Times New Roman; font-size: 12px;'>Password</td>
                <td style='font-family: Times New Roman; font-size: 12px;'>: ".$DefaultPswd."</td>
            </tr>
        </table>
        <br />
        <table border='1' cellpadding='0' cellspacing='0' style='margin-left: 10px;'>";
            $v_Sql_tbl_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."';";
            $que_tbl_helpNote = mysqli_query($conn,$v_Sql_tbl_helpNote);
            $index = 1;
            while($REC_tblhelpNote = mysqli_fetch_assoc($que_tbl_helpNote)){  
                echo "<tr>
                        <td style='width: 400px;font-family: Times New Roman; font-size: 12px;'>".$REC_tblhelpNote['note_discr']."</td>
                    </tr>";
                $index++;
            }          
        echo "</table>
        <br />
    </div>
    <div style='width: 100%;text-align: center;'>
        <label style='font-weight: bold; text-decoration: underline;font-family: Times New Roman; font-size: 12px;'>Instructions in Protecting &amp; Using Your Passwords</label>
    </div>
    <div style='width: 100%;text-align: justify;'>
        <p style='font-family: Times New Roman; font-size: 12px; text-align: justify;line-height: 20px;'>
        Please find below instructions with regards to protecting and using the passwords for the user IDs assigned to you. You are required to follow these instructions carefully. Citizens Development Business Finance PLC reserves the right to take disciplinary actions against you for violation of any of these instructions.
        </p>
        <ol style='font-family: Times New Roman; font-size: 12px;line-height: 20px;'>
            <li>Your password is for your personal use only. Do not divulge them to anyone else.</li>
            <li>Your password should be minimum 8 characters in length wherever applicable.</li>
            <li>You should change your Password immediately after logging into all systems at \"First Time\".</li>
            <li>Your password should be formed using the following guide lines.
                <ul style='list-style-type:disc;font-family: Times New Roman; font-size: 12px;line-height: 20px;'>
                    <li>The use of both upper- and lower-case letters (case sensitivity).</li>
                    <li>Inclusion of four or more numerical digits.</li>
                    <li>The use of consonant and  vowel, numbers and special characters in the  formation  of passwords.</li>
                </ul>
            </li>
            <li>You must be alert following practices in using passwords.
                <ul style='list-style-type:disc;line-height: 20px;'>
                    <li>Never use  the same password for more than one account.</li>
                    <li>Do not use remember password option available on applications such as \"Outlook\", Firefox , IE </li>
                    <li>Never write down a password.</li>
                    <li>Never communicate a password by telephone, e-mail or instant messaging.</li>
                    <li>Log off before leaving a computer unattended</li>
                    <li>Changing passwords whenever there is suspicion they may have been compromised.</li>
                    <li>Change your passwords regularly.</li>
                    <li>If your workstation (Ex. Branch/Division/Department) is changed, please inform IT Department trough HR department immediately to do necessary changes to your User credentials</li>
                </ul>
            </li>
            <li>If you feel your password has being obtained by someone else, change it immediately.</li>
            <li>Notify the IT Helpdesk immediately, if you feel your User ID/Password has been used by anyone else..</li>
        </ol>
       	<div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 14px;'>Wishing all the success! for your future career at CDB    ~Team IT~</label>
        </div>
        <br />
        <br />
        <br />
        <br />
        <div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 12px;'>Page 01 of 02</lable>
        </div> 
        <div style='width: 100%;text-align: right;'>
            <label style='font-family: Times New Roman; font-size: 12px;margin-right: 20px;'>CONFIDENTIAL</label>
        </div>
    </div>
</div>
</div>
<div style='page-break-after: always;'>
<div style='background-image: url('../../../img/CONFIDENTIAL.png');background-repeat: no-repeat;'>
<br /><br/><br/>
    <div style='width: 100%;text-align: center;'>
        <label style='font-weight: bold; text-decoration: underline;font-family: Times New Roman; font-size: 14px; '>User Acknowledgment - CDB Information Systems</label><br /><br />
    </div>
    <div style='width: 100%;'>
        <label style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>I ...............................................................................................................................................................................</label><br />
        <div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 12px;'>(Name)</lable>
        </div> 
        <br />
        <label style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>Hereby acknowledge that, </label><br />
        <ul style='font-family: Times New Roman; font-size: 12px; line-height: 20px;'>
            <li>I have received the user credentials to the CDB Information systems and</li>
            <li>I have read and understood the CDB IT Policies and Procedures listed below,</li>
        </ul>
        <br/>
         <table style='margin-left: 10px;font-family: Times New Roman; font-size: 12px;'>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;  font-weight: bold;'>Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;font-weight: bold;'>Tick as Appropriate</td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Information Security Policy &amp; Procedure</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Acceptable Use policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Password Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Email Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
            <tr>
                <td style='width: 200px;font-family: Times New Roman; font-size: 12px;'>Internet Policy</td>
                <td style='font-family: Times New Roman; font-size: 12px;'><p style='width: 15px; height: 15px; border: #000000 1px solid; margin-left: 30px;'>&nbsp;</p></td>
            </tr>
         </table>
         <br/>
         <p style='font-family: Times New Roman; font-size: 12px;text-align: justify;line-height: 20px;'>
            Further I agree to comply with the aforesaid CDB IT Policies and procedures (and other associated content) as a condition of employment (or continued employment) with CDB. I consent to the Company monitoring the Systems and monitoring, reviewing and disclosing documents and messages (including personal documents and messages) as provided in Acceptable use Policy, and I agree that I have no expectation of privacy with respect to any documents or messages created, sent, received, retrieved or stored on any of the CDB Systems.   
         </p>
         <p style='font-family: Times New Roman; font-size: 12px;text-align: justify;line-height: 20px;'>
            I agree further that the policies listed above are not exhaustive and the management of the CDB reserve the right to amend/ rescind/ alter the existing policies and impose such other policies as it deems necessary from time to time.
         </p>
         <br/>
        <label style='font-family: Times New Roman; font-size: 12px;'>Date &nbsp;&nbsp;:...............................................</label>
        <label style='font-family: Times New Roman; font-size: 12px;'>Time :...............................................</label><br /><br/>
        <label style='font-family: Times New Roman; font-size: 12px;'>User ID. :.........................................</label> <br /><br/>
        <label style='font-family: Times New Roman; font-size: 12px;'>NIC No:.............................................</label>
        <label style='font-family: Times New Roman; font-size: 12px;'>Signature :...............................................</label><br /><br/>
        <p style='font-family: Times New Roman; font-size: 12px;'>
           <label style='font-family: Times New Roman; font-size: 12px; font-weight: bold;'>Important!</label> - Duly completed 2nd page of this document should be returned to the HR Department within 03 working days.    
        </p>
        <br/>
        <br/>
        <br/>
        <br/>
        <div style='width: 100%;text-align: center;'>
            <label style='font-family: Times New Roman; font-size: 12px;'>Page 02 of 02</label>
        </div>
        <div style='width: 100%;text-align: right;'>
            <label style='font-family: Times New Roman; font-size: 12px;margin-right: 20px;'>CONFIDENTIAL</label>
        </div>
    </div>
</div>
</div>

</div>";
                         } 
//----------------------------------------------------------------------------------------------------------------------------------------------------------
                        echo "</td>
                    </tr>
                </table>
                ";
        }
        
        
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    
    
    
    function getAjaxServiceRequsesList_helpIDSub($gethelpID,$getStClose){
        $conn = DatabaseConnection();
        //Call Center Main
        
        // Modified by Rizvi on 9:51 AM 15/09/2015          -- Update the assigned user
        // Modified by Rizvi Kareem on 1:29 PM 10/03/2016   -- Note creation and SMS sending to MTK Officer
        $SQL_CheckBlankAssign = "SELECT `user`.`email`,`user`.`GSMNO`,`issue`,`ssb_facility_amount`,`CallAssgined` FROM `cdb_helpdesk`,`user` WHERE `user`.`userName` = `cdb_helpdesk`.`enterBy` AND `cat_code` = '1014' AND `cdb_helpdesk`.`helpid` = '".$gethelpID."';";
        // echo $SQL_CheckBlankAssign;
        $RS_CheckBlankAssign = mysqli_query($conn,$SQL_CheckBlankAssign);
        while($rec_CheckBlankAssign = mysqli_fetch_array($RS_CheckBlankAssign)){
            /* Update the Assigned user*/
			/*Call User Update*/
			$v_CallAssgined = $rec_CheckBlankAssign[4];
			if($v_CallAssgined==""){
               	$sql_update   = "update `cdb_helpdesk` set `cdb_helpdesk`.`CallAssgined` = '".$_SESSION['user']."' WHERE `cat_code` = '1014' and `cdb_helpdesk`.`CallAssgined` IS NULL AND `cdb_helpdesk`.`helpid` = '".$gethelpID."';";
				//echo "sql_update = ".$sql_update;
				$query_update =  mysqli_query($conn,$sql_update) or die(mysqli_error($conn));   
			}
            
			/*
			if ($_SESSION['usergroupNumber'] == 'ug00094' || $_SESSION['usergroupNumber'] == 'ug00092'){
			
            
                // Note Creation
                //$sql_select_note_count =  "SELECT COUNT(*) FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."';";
                $sql_select_note_count = "SELECT COUNT(c.helpid), h.asing_by 
                                            FROM cdb_help_note AS c , cdb_helpdesk as h
                                            WHERE 
                                            c.helpid = h.helpid AND
                                            h.helpid = '".$gethelpID."';";
                $query_select_note_count = mysqli_query($conn , $sql_select_note_count) or die(mysqli_error($conn));
                $cou = 1;
                //echo "A";
                while($rec_select_note_count = mysqli_fetch_array($query_select_note_count)){
                    //echo "B";
                    $cou = $rec_select_note_count[0] + 1;
                    if($rec_select_note_count[1] == ""){
                        //echo "c";
                         $sql_note_update = "INSERT INTO `cdb_help_note`(`helpid`, `note_code`, `note_discr`, `enterBy`, `enterDateTime`,`NoteTag`) 
                                    VALUES (".$gethelpID.",'".$cou."',CONCAT('Agent Assigned to file ', now()),'".$_SESSION['user']."',now(),'AGENT_ASSIGNED');";
                        // echo $sql_note_update;
                         $query_note_update = mysqli_query($conn,$sql_note_update) or die(mysqli_error($conn));
                    }
                   
                }  
               	$sql_update   = "update `cdb_helpdesk` set `cdb_helpdesk`.`asing_by` = '".$_SESSION['user']."' WHERE `cat_code` = '1014' and trim(`cdb_helpdesk`.`asing_by`) = '' AND `cdb_helpdesk`.`helpid` = '".$gethelpID."';";
				$query_update =  mysqli_query($conn,$sql_update) or die(mysqli_error($conn));   
            }       
            */
            /*Send the SMS to User*/
            //$sql_sms   = "INSERT INTO `CDB_SMS_INBOX`(`mobileno`, `message`, `idatetime`, `module`, `uevent`, `sent`)  VALUES ('".$rec_CheckBlankAssign[1]."',CONCAT('Your file has been taken to processing.".chr(10).$_SESSION['user'].chr(10)."File : ".$rec_CheckBlankAssign[2].chr(10)."Amount : ".$rec_CheckBlankAssign[3].chr(10)."', now()),now(),'HELPDESK','PENDINGNOTE',0);";
            //echo $sql_sms;              
            //$query_sms =  mysqli_query($conn,$sql_sms) or die(mysqli_error($conn));                                                    
        }
         
        
        
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress` , `ssb_facility_amount` ,`ssb_type` , `ssb_app_number`,`IsAppValid` , `facno` , `attachment_namesub` , `facno_stats`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."';";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........ 
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO`,`kiosl_rec` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            
            $userEmail = "";
            $userGSM = "";
            
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
            $userCanRecUclFile = 0;
            $userCanAppUclFile = 0;
            $userCanRejUclFile = 0;
            $v_sql_getUsreNAmeKR = "SELECT `kiosl_rec`,`kiosl_appr`,`kiosl_rej` FROM `user` WHERE `userName` =  '".$_SESSION['user']."';";
            $que_getUsreNAmeKR = mysqli_query($conn,$v_sql_getUsreNAmeKR);
            while($RES_getUsreNAmeKR = mysqli_fetch_array($que_getUsreNAmeKR)){
                $userCanRecUclFile = $RES_getUsreNAmeKR[0];
                $userCanAppUclFile = $RES_getUsreNAmeKR[1];
                $userCanRejUclFile = $RES_getUsreNAmeKR[2];
            }
            
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' style='width: 70px;' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                        <td style='width: 80px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' style='width: 70px;' type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                        <td style='width: 70px; text-align: right;'><label class='linetop'>File Type :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:120px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>";
                /*<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Source' id='sel_Source' value='".$v_getSource."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>*/
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:433px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:75px; width: 433px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_issuessb_facility_amount' id='txt_issuessb_facility_amount' value='".$rec_getHelpdesk['ssb_facility_amount']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    
                    </table>";
             echo "<table>       
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:150px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                         <td style='width: 120px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:150px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr></table>";
             echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:720px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." - ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Main File :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                        
                            
                     echo   "</td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>CRIB File :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_namesub'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_namesub']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                     echo   "</td> </tr></tr>";
                    
                                           
                    $v_Sql_helpNote = "SELECT COUNT(*) FROM `pending_upload_file` WHERE `file_type` = 'K' AND `help_id` = '".$gethelpID."';";
                    $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                    while($REC_helpNote = mysqli_fetch_array($que_helpNote)){
                        if($REC_helpNote[0] > 0){
                            echo "<tr><td s tyle='width: 100px; text-align: right;'><label class='linetop'>Additional Files:</label></td><td>";
                            echo "<a title='".$gethelpID."' href='#' onclick='isAddiImgRequset(title)'>Additional Images</a>";
                            echo   "</td></tr>";     
                        } 
                    }                        
                        
                                         
                    //onclick='popup(1);'
                                       
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID'/> 
                                <input class='box_decaretion' type='text' style='width:400px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name'/>";
                              //  <input type='button' class='buttonManage' id='btnPopUp' name='btnPopUp' value='...' onclick='popup(1);'/> 
                              //  <input type='button' class='buttonManage' id='btnremove' name='btnremove' value='Remove' onclick='removeUsreID()'/>
                              //  <input type='button' class='buttonManage' id='btnupdateUser' name='btnupdateUser' value='Update' onclick='updateAssUser()'/>
                       echo "</td>
                    </tr>
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:400px;'>Notes</td>
                                    <td style='width:100px;'>User</td>
                                    <td style='width:150px;'>Date</td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."' order by `cdb_help_note`.`enterDateTime`;";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'>".$index."</td>
                                            <td style='width: 400px; text-align: left;'>".$REC_helpNote['note_discr']."</td>
                                            <td style='width: 100px; text-align: left;'>".$REC_helpNote['enterBy']."</td>
                                            <td style='width: 150px; text-align: left;'>".$REC_helpNote['enterDateTime']."</td>
                                        </tr>";
                                    $index++;
                                }
                    echo "</table>
                        </td>
                    </tr>
                </table>";
          
                 
                $sql_ssb_noti = "SELECT applicant_info , 
                                        clear_valuation , 
                                        guarantor_1 , 
                                        guarantor_2 , 
                                        cr_copy_and_invoce , 
                                        supplar_info , 
                                        pending_notification , 
                                        `clcode`, 
                                        `clcode_on`, 
                                        `clcode_by`, 
                                        `clcode_val`, 
                                        `supcode`, 
                                        `supcode_on`, 
                                        `supcode_by`, 
                                        `supcode_val`, 
                                        `gar_code_1`, 
                                        `gar_code_1_on`, 
                                        `gar_code_1_by`, 
                                        `gar_code_1_val`, 
                                        `gar_code_2`, 
                                        `gar_code_2_on`, 
                                        `gar_code_2_by`, 
                                        `gar_code_2_val`, 
                                        `gar_code_3`, 
                                        `gar_code_3_on`, 
                                        `gar_code_3_by`, 
                                        `gar_code_3_val`, 
                                        `sec_no`, 
                                        `sec_no_on`, 
                                        `sec_no_by`, 
                                        `sec_no_val` , 
                                        supacc , 
                                        supacc_on , 
                                        supacc_by , 
                                        supacc_val , 
                                        recacc , 
                                        recacc_on , 
                                        recacc_by , 
                                        recacc_val
                                    FROM cdb_ssb WHERE helpid = '".$gethelpID."';";
                $query_ssb_noti = mysqli_query($conn , $sql_ssb_noti);
                $chk_1_chk = '';
                $chk_2_chk = '';
                $chk_3_chk = '';
                $chk_4_chk = '';
                $chk_5_chk = '';
                $chk_6_chk = '';
                $pendi = '';
                $clcode = '';
                $clcode_on = '';
                $clcode_by = '';
                $clcode_val = '';
                $supcode = '';
                $supcode_on = '';
                $supcode_by = '';
                $supcode_val = '';
                $gar_code_1 = '';
                $gar_code_1_on = '';
                $gar_code_1_by = '';
                $gar_code_1_val = '';
                $gar_code_2 = '';
                $gar_code_2_on = '';
                $gar_code_2_by = '';
                $gar_code_2_val = '';
                $gar_code_3 = '';
                $gar_code_3_on = '';
                $gar_code_3_by = '';
                $gar_code_3_val  = '';
                $sec_no = '';
                $sec_no_on = '';
                $sec_no_by = '';
                $sec_no_val = '';
                $supacc = ''; 
                $supacc_on = ''; 
                $supacc_by = ''; 
                $supacc_val = ''; 
                $recacc = ''; 
                $recacc_on = ''; 
                $recacc_by = ''; 
                $recacc_val = '';
                while($rec_ssb_noti = mysqli_fetch_array($query_ssb_noti)){
                    $chk_1_chk = ($rec_ssb_noti[0] == 1 ? 'checked' : '' );
                    $chk_2_chk = ($rec_ssb_noti[1] == 1 ? 'checked' : '' );
                    $chk_3_chk = ($rec_ssb_noti[2] == 1 ? 'checked' : '' );
                    $chk_4_chk = ($rec_ssb_noti[3] == 1 ? 'checked' : '' );
                    $chk_5_chk = ($rec_ssb_noti[4] == 1 ? 'checked' : '' );
                    $chk_6_chk = ($rec_ssb_noti[5] == 1 ? 'checked' : '' );
                    $pendi = $rec_ssb_noti[6];
                    
                    $clcode = ($rec_ssb_noti[7] == 0 ? '' : $rec_ssb_noti[7]);
                    $clcode_on = $rec_ssb_noti[8];
                    $clcode_by = $rec_ssb_noti[9];
                    $clcode_val = $rec_ssb_noti[10];
                    $supcode = ($rec_ssb_noti[11] == 0 ? '' : $rec_ssb_noti[11]);
                    $supcode_on = $rec_ssb_noti[12];
                    $supcode_by = $rec_ssb_noti[13];
                    $supcode_val = $rec_ssb_noti[14];
                    $gar_code_1 = ($rec_ssb_noti[15] == 0 ? '' : $rec_ssb_noti[15]);
                    $gar_code_1_on = $rec_ssb_noti[16];
                    $gar_code_1_by = $rec_ssb_noti[17];
                    $gar_code_1_val = $rec_ssb_noti[18];
                    $gar_code_2 = ($rec_ssb_noti[19] == 0 ? '' : $rec_ssb_noti[19]);
                    $gar_code_2_on = $rec_ssb_noti[20];
                    $gar_code_2_by = $rec_ssb_noti[21];
                    $gar_code_2_val = $rec_ssb_noti[22];
                    $gar_code_3 = ($rec_ssb_noti[23] == 0 ? '' : $rec_ssb_noti[23]);
                    $gar_code_3_on = $rec_ssb_noti[24];
                    $gar_code_3_by = $rec_ssb_noti[25];
                    $gar_code_3_val  = $rec_ssb_noti[26];
                    $sec_no = ($rec_ssb_noti[27] == 0 ? '' : $rec_ssb_noti[27]);
                    $sec_no_on = $rec_ssb_noti[28];
                    $sec_no_by = $rec_ssb_noti[29];
                    $sec_no_val = $rec_ssb_noti[30];
                    $supacc = ($rec_ssb_noti[31] == 0 ? '' : $rec_ssb_noti[31]);
                    $supacc_on = $rec_ssb_noti[32];
                    $supacc_by = $rec_ssb_noti[33];
                    $supacc_val = $rec_ssb_noti[34]; 
                    $recacc = ($rec_ssb_noti[35] == 0 ? '' : $rec_ssb_noti[35]);
                    $recacc_on = $rec_ssb_noti[36]; 
                    $recacc_by = $rec_ssb_noti[37];
                    $recacc_val = $rec_ssb_noti[38];
                }
                echo "
                <fieldset style='width: 700px;margin-left: 100px;'>
                    <legend><label class='linetop'>Verification :</label></legend>
                    <table style='margin-left: 150px;display: none;'>
                        <tr>
                            <td style='width: 250px;'>
                                 <input class='box_decaretion' type='checkbox' name='chk_1' id='chk_1'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_1_chk." /> <label class='linetop'>Applicant Info.</label>
                            <td>
                            <td>
                                <input class='box_decaretion' type='checkbox' name='chk_2' id='chk_2'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_2_chk."/> <label class='linetop'>Clear Valuation.</label>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 250px;'>
                                 <input class='box_decaretion' type='checkbox' name='chk_3' id='chk_3'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_3_chk."/> <label class='linetop'>1st Guarantor Info.</label>
                            <td>
                            <td>
                                <input class='box_decaretion' type='checkbox' name='chk_5' id='chk_5'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_5_chk."/> <label class='linetop'>CR Copy and Invoce.</label>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 250px;'>
                                 <input class='box_decaretion' type='checkbox' name='chk_4' id='chk_4'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_4_chk."/> <label class='linetop'>2nd Guarantor Info.</label>
                            <td>
                            <td>
                                <input class='box_decaretion' type='checkbox' name='chk_6' id='chk_6'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_6_chk."/> <label class='linetop'>Supplar Info.</label>
                            </td>
                        </tr>
                    </table>";
                    // develop by madushan 2017-04-03 - new check box-----------------------------------------------------------------------------------------------------------
                    
                    
                    echo "<table>
                        <tr>
                            <td style='width: 150px;'>
                                <span class='linetop' >Clint Code :</span> 
                            </td>
                            <td style='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Clint_Code_ssb' id='txt_Clint_Code_ssb' maxlength='8' value='".$clcode."'  placeholder='Clint Code' onkeypress='return isNumber(event)' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='1' onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                            <td tyle='width: 150px;'>
                                <label class='linetop'>Granter 1 :</label> 
                            </td>
                            <td tyle='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Granter_1_ssb' id='txt_Granter_1_ssb' maxlength='8' value='".$gar_code_1."' onKeyPress='return isNumber(event)'  placeholder='Granter 1' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='4' onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                        </tr>
                        <tr>
                            <td style='width: 150px;'>
                                 <span class='linetop' style='width: 100px;'>Supplier Code :</span> 
                            </td>
                            <td style='width: 150px;'>     
                                 <input class='box_decaretion' type='text' style='width:100px;' name='txt_Supplier_Code_ssb' id='txt_Supplier_Code_ssb' maxlength='8' value='".$supcode."' onKeyPress='return isNumber(event)'  placeholder='Supplier Code' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='2'onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                             <td tyle='width: 150px;'>
                                <label class='linetop'>Granter 2 :</label> 
                            </td>
                            <td tyle='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Granter_2_ssb' id='txt_Granter_2_ssb' maxlength='8' value='".$gar_code_2."' onKeyPress='return isNumber(event)'  placeholder='Granter 2' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='5' onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                        </tr>
                        <tr>
                            <td style='width: 150px;'>
                                 <span class='linetop' style='width: 100px;'>Security No. :</span> 
                            </td>
                            <td style='width: 200px;'>     
                                 <input class='box_decaretion' type='text' style='width:100px;' name='txt_Security_No_ssb' id='txt_Security_No_ssb' maxlength='8' value='".$sec_no."' onKeyPress='return isNumber(event)'  placeholder='Security No' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='3' onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                             <td tyle='width: 150px;'>
                                <label class='linetop'>Granter 3 :</label> 
                            </td>
                            <td tyle='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Granter_3_ssb' id='txt_Granter_3_ssb' maxlength='8' value='".$gar_code_3."' onKeyPress='return isNumber(event)'  placeholder='Granter 3' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='6' onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                        </tr>
                         <tr>
                            <td style='width: 150px;'>
                                 <span class='linetop' style='width: 100px;'>Supplier Account :</span> 
                            </td>
                            <td style='width: 200px;'>     
                                 <input class='box_decaretion' type='text' style='width:100px;' name='txt_Supplier_Account_ssb' id='txt_Supplier_Account_ssb' maxlength='18' value='".$supacc."' onKeyPress='return isNumber(event)'  placeholder='Supplier Account' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='7' onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                             <td tyle='width: 150px;'>
                                <label class='linetop'>Recovery Account :</label> 
                            </td>
                            <td tyle='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Recovery_Account_ssb' id='txt_Recovery_Account_ssb' maxlength='18' value='".$recacc."' onKeyPress='return isNumber(event)'  placeholder='Recovery Account' />";
                                //<input type='button' style='width: 50px;' class='buttonManage' value='...' title='8' onclick='isUpdateCliendtl(title);'/>
                            echo "</td>
                        </tr>
                    </table>";
                    //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                    echo "<table>
                        <tr style='width: 250px;'>
                            <td style='width: 140px; vertical-align: top;'>
                                <label class='linetop'>Pending Notification : </label>
                            <td>
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='2' style='height:40px; width: 400px;' name='txt_pn' id='txt_pn' onkeypress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>".$pendi."</textarea>
                            </td>
                        </tr>
                    </table>
                    <table>
                    <tr  style='width: 250px;'>
                        <td style='width: 140px;'><label class='linetop'>Applicaton Number :</label></td>
                        <td>";

                        $dis_btn = "";
                        $readonli_btn = "";
                        if($rec_getHelpdesk['facno'] != ""){
                            $dis_btn = "disabled=\'disabled\'";
                            $readonli_btn = "readonly=\'readonly\'";
                        }else{
                            $dis_btn = "";
                            $readonli_btn = "";
                        }
                        
                        
                        if( $rec_getHelpdesk['ssb_app_number'] == 0 ||  $rec_getHelpdesk['ssb_app_number'] == ""){
                            if ($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')
                                echo "<input class='box_decaretion' type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='' onKeyPress='return disableEnterKey(event)'  placeholder='UCL Application Number' />";
                            else
                                echo "<input class='box_decaretion' type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='' onKeyPress='return disableEnterKey(event)'  placeholder='Application Number' />";
                        }else{
                            if ($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')
                                echo "<input class='box_decaretion'  type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='". $rec_getHelpdesk['ssb_app_number']."' onKeyPress='return disableEnterKey(event)'  placeholder='UCL Application Number' ".$readonli_btn." />";
                                //". ($rec_getHelpdesk['IsAppValid'] == '1'?"disabled='disabled'":"") ."
                            else
                                echo "<input class='box_decaretion' type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='". $rec_getHelpdesk['ssb_app_number']."' onKeyPress='return disableEnterKey(event)'  placeholder='Application Number' ".$readonli_btn." />";
                                // ". ($rec_getHelpdesk['IsAppValid'] == '1'?"disabled='disabled'":"") ."
                        }   
                       
                        
                      //  if( $rec_getHelpdesk['IsAppValid'] != '1' ){
                            //echo "<input type='button' style='width: 120px' class='buttonManage' value='App Confirmation' title='sol' onclick='isAppGenerater();'/>";
                          /*  if ($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')
                                echo "<input type='button' style='width: 120px' class='buttonManage' value='App Confirmation'  title='UCL' onclick='isAppGenerater(title);' ".$dis_btn." />";
                            else
                                echo "<input type='button' style='width: 120px' class='buttonManage' value='App Confirmation'  title='CDB' onclick='isAppGenerater(title);' ".$dis_btn."/>";
                          */
                       /* }else{
                            echo "<img style='margin-left:5px;'margin-top:5px;' src='../../../img/1.png'>";
                        }
                        */
                        echo "
                        </td>
                    </tr>
                </table>
                </fieldset>
                
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                        /*if($rec_getHelpdesk['facno'] == ''){
                             echo "<input type='button' style='width: 100px;' class='buttonManage' value='Ok' title='1' onclick='is_kiosk_ok(title);'/>";
                             echo "<input type='button' style='width: 100px;' class='buttonManage' value='Notify Pending' title='2' onclick='is_kiosk_ok(title);'/>";
                             // Rizvi On 10:24 AM 19/02/2016
                             if (($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')){
                                
                                if($userCanRecUclFile == 1){
                                    echo "<input type='button' style='width: 100px;' class='buttonManage' value='Recommend' title='R' onclick='is_kiosk_ok(title);'/>";
                                    // echo "<input type='button' style='width: 100px;' class='buttonManage' value='Reject' title='C' onclick='is_kiosk_ok(title);'/>";
                                }else{
                                    echo "<input type='button' style='width: 100px;' class='buttonManage' value='Recommend' title='R' disabled='disabled' onclick='is_kiosk_ok(title);'/>";
                                }
                                
                                if($userCanRejUclFile == 1){
                                    echo "<input type='button' style='width: 100px;' class='buttonManage' value='Reject' title='C' onclick='is_kiosk_ok(title);'/>";
                                }else{
                                    echo "<input type='button' style='width: 100px;' class='buttonManage' disabled='disabled' value='Reject' title='C' onclick='is_kiosk_ok(title);'/>";
                                }
                                
                                if($rec_getHelpdesk['facno_stats'] == 1){
                                    echo "<input type='button' style='width: 150px;' class='buttonManage' value='Gen Fec Number' title='GF' onclick='is_UCLFacNumberGetn();'/>";
                                }else{
                                    echo "<input type='button' style='width: 150px;' class='buttonManage' disabled='disabled' value='Gen Fec Number' onclick='is_UCLFacNumberGetn();'/>";
                                }
                                                                
                                
                             }
                       }*/
                        
                         echo "<input type='button' style='width: 100px;' class='buttonManage' value='Solution' onclick='getSolution();'/>";
                         echo "<input type='button' style='width: 100px;' class='buttonManage' value='Close' onclick='pageRef()'/>";
                         
                         
                        
                        echo "</td>
                    </tr>
                </table>
                ";
        }
    }

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function getAjaxServiceRequsesList_helpIDBranchSub($gethelpID,$getStClose){
        $conn = DatabaseConnection();
        echo "getAjaxServiceRequsesList_helpIDBranchSub";
        
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress` , `ssb_facility_amount` ,`ssb_type` , `ssb_app_number`,`IsAppValid` , `facno` , `attachment_namesub` , `facno_stats`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."';";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........ 
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO`,`kiosl_rec` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            
            $userEmail = "";
            $userGSM = "";
            
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
            $userCanRecUclFile = 0;
            $userCanAppUclFile = 0;
            $userCanRejUclFile = 0;
            $v_sql_getUsreNAmeKR = "SELECT `kiosl_rec`,`kiosl_appr`,`kiosl_rej` FROM `user` WHERE `userName` =  '".$_SESSION['user']."';";
            $que_getUsreNAmeKR = mysqli_query($conn,$v_sql_getUsreNAmeKR);
            while($RES_getUsreNAmeKR = mysqli_fetch_array($que_getUsreNAmeKR)){
                $userCanRecUclFile = $RES_getUsreNAmeKR[0];
                $userCanAppUclFile = $RES_getUsreNAmeKR[1];
                $userCanRejUclFile = $RES_getUsreNAmeKR[2];
            }
            
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' style='width: 70px;' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                        <td style='width: 80px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' style='width: 70px;' type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                        <td style='width: 70px; text-align: right;'><label class='linetop'>File Type :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:120px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>";
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:433px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:75px; width: 433px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Facility Amount :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='txt_issuessb_facility_amount' id='txt_issuessb_facility_amount' value='".$rec_getHelpdesk['ssb_facility_amount']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    
                    </table>";
             echo "<table>       
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:150px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                         <td style='width: 120px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:150px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr></table>";
             echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:720px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." - ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Main File :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                        
                            
                     echo   "</td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>CRIB File :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_namesub'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_namesub']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                     echo   "</td> </tr></tr>";
                    
                                           
                    $v_Sql_helpNote = "SELECT COUNT(*) FROM `pending_upload_file` WHERE `file_type` = 'K' AND `help_id` = '".$gethelpID."';";
                    $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                    while($REC_helpNote = mysqli_fetch_array($que_helpNote)){
                        if($REC_helpNote[0] > 0){
                            echo "<tr><td s tyle='width: 100px; text-align: right;'><label class='linetop'>Additional Files:</label></td><td>";
                            echo "<a title='".$gethelpID."' href='#' onclick='isAddiImgRequset(title)'>Additional Images</a>";
                            echo   "</td></tr>";     
                        } 
                    }                        
                        
                                         
                    
                                       
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID'/> 
                                <input class='box_decaretion' type='text' style='width:400px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name'/>
                        </td>
                    </tr>
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:400px;'>Notes</td>
                                    <td style='width:100px;'>User</td>
                                    <td style='width:150px;'>Date</td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."' order by `cdb_help_note`.`enterDateTime`;";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'>".$index."</td>
                                            <td style='width: 400px; text-align: left;'>".$REC_helpNote['note_discr']."</td>
                                            <td style='width: 100px; text-align: left;'>".$REC_helpNote['enterBy']."</td>
                                            <td style='width: 150px; text-align: left;'>".$REC_helpNote['enterDateTime']."</td>
                                        </tr>";
                                    $index++;
                                }
                    echo "</table>
                        </td>
                    </tr>
                </table>";
          
                 
                $sql_ssb_noti = "SELECT applicant_info , clear_valuation , guarantor_1 , guarantor_2 , cr_copy_and_invoce , supplar_info , pending_notification , `clcode`, `clcode_on`, `clcode_by`, `clcode_val`, `supcode`, `supcode_on`, `supcode_by`, `supcode_val`, `gar_code_1`, `gar_code_1_on`, `gar_code_1_by`, `gar_code_1_val`, `gar_code_2`, `gar_code_2_on`, `gar_code_2_by`, `gar_code_2_val`, `gar_code_3`, `gar_code_3_on`, `gar_code_3_by`, `gar_code_3_val`, `sec_no`, `sec_no_on`, `sec_no_by`, `sec_no_val`
                                    FROM cdb_ssb WHERE helpid = '".$gethelpID."';";
                $query_ssb_noti = mysqli_query($conn , $sql_ssb_noti);
                $chk_1_chk = '';
                $chk_2_chk = '';
                $chk_3_chk = '';
                $chk_4_chk = '';
                $chk_5_chk = '';
                $chk_6_chk = '';
                $pendi = '';
                $clcode = '';
                $clcode_on = '';
                $clcode_by = '';
                $clcode_val = '';
                $supcode = '';
                $supcode_on = '';
                $supcode_by = '';
                $supcode_val = '';
                $gar_code_1 = '';
                $gar_code_1_on = '';
                $gar_code_1_by = '';
                $gar_code_1_val = '';
                $gar_code_2 = '';
                $gar_code_2_on = '';
                $gar_code_2_by = '';
                $gar_code_2_val = '';
                $gar_code_3 = '';
                $gar_code_3_on = '';
                $gar_code_3_by = '';
                $gar_code_3_val  = '';
                $sec_no = '';
                $sec_no_on = '';
                $sec_no_by = '';
                $sec_no_val = '';
                while($rec_ssb_noti = mysqli_fetch_array($query_ssb_noti)){
                    $chk_1_chk = ($rec_ssb_noti[0] == 1 ? 'checked' : '' );
                    $chk_2_chk = ($rec_ssb_noti[1] == 1 ? 'checked' : '' );
                    $chk_3_chk = ($rec_ssb_noti[2] == 1 ? 'checked' : '' );
                    $chk_4_chk = ($rec_ssb_noti[3] == 1 ? 'checked' : '' );
                    $chk_5_chk = ($rec_ssb_noti[4] == 1 ? 'checked' : '' );
                    $chk_6_chk = ($rec_ssb_noti[5] == 1 ? 'checked' : '' );
                    $pendi = $rec_ssb_noti[6];
                    
                    $clcode = ($rec_ssb_noti[7] == 0 ? '' : $rec_ssb_noti[7]);
                    $clcode_on = $rec_ssb_noti[8];
                    $clcode_by = $rec_ssb_noti[9];
                    $clcode_val = $rec_ssb_noti[10];
                    $supcode = ($rec_ssb_noti[11] == 0 ? '' : $rec_ssb_noti[11]);
                    $supcode_on = $rec_ssb_noti[12];
                    $supcode_by = $rec_ssb_noti[13];
                    $supcode_val = $rec_ssb_noti[14];
                    $gar_code_1 = ($rec_ssb_noti[15] == 0 ? '' : $rec_ssb_noti[15]);
                    $gar_code_1_on = $rec_ssb_noti[16];
                    $gar_code_1_by = $rec_ssb_noti[17];
                    $gar_code_1_val = $rec_ssb_noti[18];
                    $gar_code_2 = ($rec_ssb_noti[19] == 0 ? '' : $rec_ssb_noti[19]);
                    $gar_code_2_on = $rec_ssb_noti[20];
                    $gar_code_2_by = $rec_ssb_noti[21];
                    $gar_code_2_val = $rec_ssb_noti[22];
                    $gar_code_3 = ($rec_ssb_noti[23] == 0 ? '' : $rec_ssb_noti[23]);
                    $gar_code_3_on = $rec_ssb_noti[24];
                    $gar_code_3_by = $rec_ssb_noti[25];
                    $gar_code_3_val  = $rec_ssb_noti[26];
                    $sec_no = ($rec_ssb_noti[27] == 0 ? '' : $rec_ssb_noti[27]);
                    $sec_no_on = $rec_ssb_noti[28];
                    $sec_no_by = $rec_ssb_noti[29];
                    $sec_no_val = $rec_ssb_noti[30];
                }
                echo "
                <fieldset style='width: 700px;margin-left: 100px;'>
                    <legend><label class='linetop'>Verification :</label></legend>
                    <table style='margin-left: 150px;display: none;'>
                        <tr>
                            <td style='width: 250px;'>
                                 <input class='box_decaretion' type='checkbox' name='chk_1' id='chk_1'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_1_chk." /> <label class='linetop'>Applicant Info.</label>
                            <td>
                            <td>
                                <input class='box_decaretion' type='checkbox' name='chk_2' id='chk_2'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_2_chk."/> <label class='linetop'>Clear Valuation.</label>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 250px;'>
                                 <input class='box_decaretion' type='checkbox' name='chk_3' id='chk_3'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_3_chk."/> <label class='linetop'>1st Guarantor Info.</label>
                            <td>
                            <td>
                                <input class='box_decaretion' type='checkbox' name='chk_5' id='chk_5'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_5_chk."/> <label class='linetop'>CR Copy and Invoce.</label>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 250px;'>
                                 <input class='box_decaretion' type='checkbox' name='chk_4' id='chk_4'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_4_chk."/> <label class='linetop'>2nd Guarantor Info.</label>
                            <td>
                            <td>
                                <input class='box_decaretion' type='checkbox' name='chk_6' id='chk_6'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ".$chk_6_chk."/> <label class='linetop'>Supplar Info.</label>
                            </td>
                        </tr>
                    </table>";
                    // develop by madushan 2017-04-03 - new check box-----------------------------------------------------------------------------------------------------------
                    
                    
                    echo "<table>
                        <tr>
                            <td style='width: 150px;'>
                                <span class='linetop' >Clint Code :</span> 
                            </td>
                            <td style='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Clint_Code_ssb' id='txt_Clint_Code_ssb' maxlength='8' value='".$clcode."'  placeholder='Clint Code' onkeypress='return isNumber(event)' />
                            </td>
                            <td tyle='width: 150px;'>
                                <label class='linetop'>Granter 1 :</label> 
                            </td>
                            <td tyle='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Granter_1_ssb' id='txt_Granter_1_ssb' maxlength='8' value='".$gar_code_1."' onKeyPress='return isNumber(event)'  placeholder='Granter 1' />
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 150px;'>
                                 <span class='linetop' style='width: 100px;'>Supplier Code :</span> 
                            </td>
                            <td style='width: 150px;'>     
                                 <input class='box_decaretion' type='text' style='width:100px;' name='txt_Supplier_Code_ssb' id='txt_Supplier_Code_ssb' maxlength='8' value='".$supcode."' onKeyPress='return isNumber(event)'  placeholder='Supplier Code' />
                            </td>
                             <td tyle='width: 150px;'>
                                <label class='linetop'>Granter 2 :</label> 
                            </td>
                            <td tyle='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Granter_2_ssb' id='txt_Granter_2_ssb' maxlength='8' value='".$gar_code_2."' onKeyPress='return isNumber(event)'  placeholder='Granter 2' />
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 150px;'>
                                 <span class='linetop' style='width: 100px;'>Security No. :</span> 
                            </td>
                            <td style='width: 200px;'>     
                                 <input class='box_decaretion' type='text' style='width:100px;' name='txt_Security_No_ssb' id='txt_Security_No_ssb' maxlength='8' value='".$sec_no."' onKeyPress='return isNumber(event)'  placeholder='Security No' />
                              
                            </td>
                             <td tyle='width: 150px;'>
                                <label class='linetop'>Granter 3 :</label> 
                            </td>
                            <td tyle='width: 200px;'>
                                <input class='box_decaretion' type='text' style='width:100px;' name='txt_Granter_3_ssb' id='txt_Granter_3_ssb' maxlength='8' value='".$gar_code_3."' onKeyPress='return isNumber(event)'  placeholder='Granter 3' />
                                
                            </td>
                        </tr>
                    </table>";
                    //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
                    echo "<table>
                        <tr style='width: 250px;'>
                            <td style='width: 140px; vertical-align: top;'>
                                <label class='linetop'>Pending Notification : </label>
                            <td>
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='2' style='height:40px; width: 400px;' name='txt_pn' id='txt_pn' onkeypress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>".$pendi."</textarea>
                            </td>
                        </tr>
                    </table>
                    <table>
                    <tr  style='width: 250px;'>
                        <td style='width: 140px;'><label class='linetop'>Applicaton Number :</label></td>
                        <td>";

                        $dis_btn = "";
                        $readonli_btn = "";
                        if($rec_getHelpdesk['facno'] != ""){
                            $dis_btn = "disabled=\'disabled\'";
                            $readonli_btn = "readonly=\'readonly\'";
                        }else{
                            $dis_btn = "";
                            $readonli_btn = "";
                        }
                        
                        
                        if( $rec_getHelpdesk['ssb_app_number'] == 0 ||  $rec_getHelpdesk['ssb_app_number'] == ""){
                            if ($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')
                                echo "<input class='box_decaretion' type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='' onKeyPress='return disableEnterKey(event)'  placeholder='UCL Application Number' />";
                            else
                                echo "<input class='box_decaretion' type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='' onKeyPress='return disableEnterKey(event)'  placeholder='Application Number' />";
                        }else{
                            if ($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')
                                echo "<input class='box_decaretion'  type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='". $rec_getHelpdesk['ssb_app_number']."' onKeyPress='return disableEnterKey(event)'  placeholder='UCL Application Number' ".$readonli_btn." />";
                                //". ($rec_getHelpdesk['IsAppValid'] == '1'?"disabled='disabled'":"") ."
                            else
                                echo "<input class='box_decaretion' type='text' style='width:180px;margin-left: 5px;font-size:15px;' name='txt_app_number' id='txt_app_number' maxlength='17' value='". $rec_getHelpdesk['ssb_app_number']."' onKeyPress='return disableEnterKey(event)'  placeholder='Application Number' ".$readonli_btn." />";
                                // ". ($rec_getHelpdesk['IsAppValid'] == '1'?"disabled='disabled'":"") ."
                        }   
                       
                        
                      //  if( $rec_getHelpdesk['IsAppValid'] != '1' ){
                            //echo "<input type='button' style='width: 120px' class='buttonManage' value='App Confirmation' title='sol' onclick='isAppGenerater();'/>";
                           /* if ($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')
                                echo "<input type='button' style='width: 120px' class='buttonManage' value='App Confirmation'  title='UCL' onclick='isAppGenerater(title);' ".$dis_btn." />";
                            else
                                echo "<input type='button' style='width: 120px' class='buttonManage' value='App Confirmation'  title='CDB' onclick='isAppGenerater(title);' ".$dis_btn."/>";
                            */
                       /* }else{
                            echo "<img style='margin-left:5px;'margin-top:5px;' src='../../../img/1.png'>";
                        }
                        */
                        echo "
                        </td>
                    </tr>
                </table>
                </fieldset>
                
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                        if($rec_getHelpdesk['facno'] == ''){
                             //echo "<input type='button' style='width: 100px;' class='buttonManage' value='Ok' title='1' onclick='is_kiosk_ok(title);'/>";
                             //echo "<input type='button' style='width: 100px;' class='buttonManage' value='Notify Pending' title='2' onclick='is_kiosk_ok(title);'/>";
                             // Rizvi On 10:24 AM 19/02/2016
                             if (($rec_getHelpdesk['scat_code_2'] == '10140108' || $rec_getHelpdesk['scat_code_2'] == '10140109' || $rec_getHelpdesk['scat_code_2'] == '10140110' || $rec_getHelpdesk['scat_code_2'] == '10140130')){
                                
                                if($userCanRecUclFile == 1){
                                    //echo "<input type='button' style='width: 100px;' class='buttonManage' value='Recommend' title='R' onclick='is_kiosk_ok(title);'/>";
                                    // echo "<input type='button' style='width: 100px;' class='buttonManage' value='Reject' title='C' onclick='is_kiosk_ok(title);'/>";
                                }else{
                                    //echo "<input type='button' style='width: 100px;' class='buttonManage' value='Recommend' title='R' disabled='disabled' onclick='is_kiosk_ok(title);'/>";
                                }
                                
                                if($userCanRejUclFile == 1){
                                    //echo "<input type='button' style='width: 100px;' class='buttonManage' value='Reject' title='C' onclick='is_kiosk_ok(title);'/>";
                                }else{
                                    //echo "<input type='button' style='width: 100px;' class='buttonManage' disabled='disabled' value='Reject' title='C' onclick='is_kiosk_ok(title);'/>";
                                }
                                
                                if($rec_getHelpdesk['facno_stats'] == 1){
                                    //echo "<input type='button' style='width: 150px;' class='buttonManage' value='Gen Fec Number' title='GF' onclick='is_UCLFacNumberGetn();'/>";
                                }else{
                                    //echo "<input type='button' style='width: 150px;' class='buttonManage' disabled='disabled' value='Gen Fec Number' onclick='is_UCLFacNumberGetn();'/>";
                                }
                                                                
                                
                             }
                       }
                        
                         //echo "<input type='button' style='width: 100px;' class='buttonManage' value='Cancel' onclick=''/>";
                         echo "<input type='button' style='width: 100px;' class='buttonManage' value='Close' onclick='pageRef()'/>";
                         
                         
                        
                        echo "</td>
                    </tr>
                </table>
                ";
        }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function getScat_2_desision_state($conn,$scat_code_2){
        $sql_scat_code_2 = "SELECT `decision_discription` FROM `scat_02` WHERE `decision_statue` = 1 AND `scat_code_2` = '".$scat_code_2."';";
        $que_scat_cade_2 = mysqli_query($conn,$sql_scat_code_2) or die(mysqli_error($conn));
        while($rec_scat_cade_2 =  mysqli_fetch_array($que_scat_cade_2)){
            return $rec_scat_cade_2[0];
        }
    }
    
    function getScat_2_isCouriar($conn,$scat_code_2){
        $sql_scat_code_2 = "SELECT `IsCourierStatus` FROM `scat_02` WHERE `scat_code_2` = '".$scat_code_2."';";
        $que_scat_cade_2 = mysqli_query($conn,$sql_scat_code_2) or die(mysqli_error($conn));
        while($rec_scat_cade_2 =  mysqli_fetch_array($que_scat_cade_2)){
            return $rec_scat_cade_2[0];
        }
    }
    
    function getScat_2_attachment_state($conn,$scat_code_2){
        $sql_scat_code_att = "SELECT `IsAttachmentRequired` FROM `scat_02` WHERE `scat_code_2` = '".$scat_code_2."';";
        $que_scat_cade_att = mysqli_query($conn,$sql_scat_code_att) or die(mysqli_error($conn));
        while($rec_scat_cade_att =  mysqli_fetch_array($que_scat_cade_att)){
            return $rec_scat_cade_att[0];
        }
    }
    function getScat_2_attachment_Lbl($conn,$scat_code_2){
        $sql_scat_code_att = "SELECT `attachmentLeable` FROM `scat_02` WHERE `scat_code_2` = '".$scat_code_2."';";
        $que_scat_cade_att = mysqli_query($conn,$sql_scat_code_att) or die(mysqli_error($conn));
        while($rec_scat_cade_att =  mysqli_fetch_array($que_scat_cade_att)){
            return $rec_scat_cade_att[0];
        }
    }
    
    
    
    function getScat_3_desision_state($conn,$scat_code_3){
        $sql_scat_code_3 = "SELECT `decision_discription` FROM `scat_03` WHERE `decision_state` = 1  AND `scat_code_3` = '".$scat_code_3."';";
        $que_scat_cade_3 = mysqli_query($conn,$sql_scat_code_3) or die(mysqli_error($conn));
        while($rec_scat_cade_3 =  mysqli_fetch_array($que_scat_cade_3)){
            return $rec_scat_cade_3[0];
        }
    }
   
   
    function getAjaxServiceRequsesList_SoledIssue($getSubHI){
        $conn = DatabaseConnection();
        $v_get_Issue = "SELECT `issue`,`enterBy`, `scat_code_2` , `scat_code_3`, `entry_branch` , `entry_department` FROM `cdb_helpdesk` WHERE `helpid` = '".$getSubHI."'";
        $que_get_Issue = mysqli_query($conn,$v_get_Issue);
        while($RES_get_Issue = mysqli_fetch_assoc($que_get_Issue)){
            $get_Iss = $RES_get_Issue['issue'];
            $entryUser = $RES_get_Issue['enterBy'];
            $entryBranch = $RES_get_Issue['entry_branch'];
            $entryDepartment = $RES_get_Issue['entry_department'];
            $scat_discrip = "";
            $cat_2 = $RES_get_Issue['scat_code_2'];
            $scat_3_discrip = getScat_3_desision_state($conn,$RES_get_Issue['scat_code_3']);
            $scat_2_discrip =  getScat_2_desision_state($conn,$RES_get_Issue['scat_code_2']);
            $scat_2_attachment =  getScat_2_attachment_state($conn,$RES_get_Issue['scat_code_2']);
            $scat_2_attachm_lbl = getScat_2_attachment_Lbl($conn,$RES_get_Issue['scat_code_2']);
            $getDepartmentName = getDepartmentName($conn,$RES_get_Issue['entry_department']);
            //echo $scat_3_discrip;
            $IsCourierStatus = 0;
            if($scat_3_discrip != ""){
                $scat_discrip = $scat_3_discrip;
            }else if($scat_2_discrip != ""){
                $scat_discrip = $scat_2_discrip;              
            }else{
                $scat_discrip = "";
            }
            $IsCourierStatus = getScat_2_isCouriar($conn,$RES_get_Issue['scat_code_2']);
            
        }
        echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' type='text' name='get_help_ID' id='get_help_ID' value='".$getSubHI."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'>
                            <input type='text' name='get_help_Iss' id='get_help_Iss' value='".$get_Iss."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <input type='text' name='get_help_Ent' id='get_help_Ent' value='".$entryUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <input type='text' name='get_entryBranch' id='get_entryBranch' value='".$entryBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <input type='text' name='get_EntentryDepartment' id='get_EntentryDepartment' value='".$entryDepartment."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </div>
                        </td>
                    </tr>
                   
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Call Answered :</label></td>
                        <td>
                           <select class='box_decaretion' name='selCallAnswered' id='selCallAnswered' onkeypress='return disableEnterKey(event)' onchange = 'getCallFeedback();'>
                                     <option value=''>--Select Call Answered--</option>
                                     <option value='YES'> Yes </option>
                                     <option value='NO'> NO </option>
                           </select>
                        </td>
                    </tr>
                    </table>
                    <table style='display: none;' id='callFed'>
                     <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Call Feedback :</label></td>
                        <td>
                           <select class='box_decaretion' name='selCallFeedback' id='selCallFeedback' onkeypress='return disableEnterKey(event)' onchange = 'getCallFSUBback();'>
                                     <option value=''>--Select Call Feedback--</option>
                                     <option value='1'> Verified </option>
                                     <option value='2'> Descrepency </option>
                           </select>
                        </td>
                    </tr>
                    </table>
                    <table style='display: none;' id='callchk'>
                     <tr>
                     <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Pending Call  :</label></td>
                        <td>
                             <input class='box_decaretion' type='checkbox' name='chk_C' id='chk_C'   onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                    </tr>
                    
                     <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Call Feedback  :</label></td>
                        <td>
                            <select class='box_decaretion' name='selCallFeedbackNO' id='selCallFeedbackNO' onkeypress='return disableEnterKey(event)'>
                             <option value=''>--Select Call Feedback--</option>
                             <option value='Invalid Number'> Invalid Number </option>
                             <option value='No such person'> No such person </option>
                             <option value='No contact number'> No contact number </option>
                             <option value='Ringing no answer'> Ringing no answer </option>
                             <option value='Can not be reached'> Can not be reached  </option>
                             <option value='Switched off'> Switched off </option>
                           </select>
                        </td>
                    </tr>
                    </table>
                    <table style='display: none;' id='callchkYES'>
                     
                     <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Call Feedback  :</label></td>
                        <td>
                            <select class='box_decaretion' name='selCallFeedbackYES' id='selCallFeedbackYES' onkeypress='return disableEnterKey(event)'>
                             <option value=''>--Select Call Feedback--</option>
                             <option value='Rental'> Rental </option>
                             <option value='Period'> Period </option>
                             <option value='Address'> Address </option>
                             <option value='Guarantor'> Guarantor </option>
                             <option value='Facility amount'> Facility amount  </option>
                             <option value='Facility Cancellation'> Facility Cancellation </option>
                             <option value='Hold the facility'> Hold the facility </option>
                             <option value='Other'> Other </option>
                           </select>
                        </td>
                    </tr>
                    </table>
                    <table>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Remark :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txtarea_Solution' id='txtarea_Solution' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' ></textarea>
                        </td>
                    </tr>";
                    
                    
                   
                    
                    
                     echo "<tr>
                                <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'></label></td>
                                <td>
                                    
                                </td>
                            </tr>";
                    
                     echo "<tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>
                            <input type='submit' style='width: 100px;' class='buttonManage' id='btnReq' name='btnReq' value='Submit'/>";
                           
                           echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageClose()'/>
                        </td>
                    </tr>
            </table>";
        
    }
    
    function getDepartmentName($conn,$entry_department){
        $sql_depatment = "SELECT `deparmentName` FROM `deparment` WHERE `deparmentNumber` = '".$entry_department."';";
        $query_department = mysqli_query($conn,$sql_depatment);
        while($rec_department = mysqli_fetch_array($query_department)){
            return $rec_department[0];
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
    
    function getAjaxUsreGroup_CatFile($userGroup){
        $conn = DatabaseConnection();
        echo "<table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left: 25px;'>
                <tr style='background-color: #BEBABA;'>
                <td style='width:50px; text-align: right;'><span style='margin-right: 5px;'>#</span></td>
                <td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>Cat Code</span></td>
                <td style='width:300px;text-align: left;'><span style='margin-left: 5px;'>Cat Name</span></td>
                <td style='width:50px;'></td>
            </tr>";
 
                $v_sql_Category = "SELECT `cat_code`,`cat_discr` FROM `cat_states`;";
                $que_Category = mysqli_query($conn,$v_sql_Category);
                $index = 0;
                while($RES_Category = mysqli_fetch_array($que_Category)){
                    $sql_getSt_ATH = "SELECT COUNT(*) FROM `cdb_help_user_oth` WHERE `user_group` = '".$userGroup."' AND `cat_code` = '".$RES_Category[0]."';";
                    $que_getSt_ATH = mysqli_query($conn,$sql_getSt_ATH);
                    $index++;
                    while($RES_getSt_ATH = mysqli_fetch_array($que_getSt_ATH)){
                        if($RES_getSt_ATH[0] != 0){
                            $chk = "checked = 'checked'";
                        }else{
                            $chk = "";
                        }
                        echo "<tr>";
                        echo "<td style='width:50px;text-align: right;'><span style='margin-right: 5px;'>".$index."</span></td>";
                        echo "<td style='width:100px;text-align: right;'><div style='display: none;'><input type='text' name='txtCatID".$index."' id='txtCatID".$index."' value='".$RES_Category[0]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-right: 5px;'>".$RES_Category[0]."</span></td>";
                        echo "<td style='width:300px;text-align: left;'><span style='margin-left: 5px;'>".$RES_Category[1]."</span></td>";
                        echo "<td style='width:50px;'><input type='checkbox' name='cheCat".$index."' id='cheCat".$index."' ".$chk." /></td>";
                        echo "</tr>";
                    }
                   
                }
      
      echo "</table><div style='display:none;'><input type='text' name='txtrow' id='txtrow' value='".$index."'/></div>";
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function  getAjaxServiceRequses_Edit($editHID){ // Edit Sevise Reqvest ............................................
        $conn = DatabaseConnection();
          $v_sql_getHelpdesk_edit= "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, `enterDateTime`, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3` , `ssb_facility_amount` , `attachment_namesub`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$editHID."';";
        $v_que_getHelpdesk_edit = mysqli_query($conn,$v_sql_getHelpdesk_edit);
        while($REC_getHelpdesk_edit = mysqli_fetch_assoc($v_que_getHelpdesk_edit)){
            
         echo "<table>
               <tr>
                <td style='width: 100px; text-align: right;'><label class='linetop'>".($REC_getHelpdesk_edit['cat_code'] == '1014' ? "File ID :" : "Help ID :")."</label></td>
                <td> <input class='box_decaretion' type='text' name='txt_help_ID' id='txt_help_ID' value='".$editHID."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
               </tr>
               </table>";
            $v_sel_catagory = getCat_Discreption($REC_getHelpdesk_edit['cat_code'],$conn); // Get Cat Discreeption........
            $v_sel_scat01 = getScat_discr_1_Descreption($REC_getHelpdesk_edit['cat_code'],$REC_getHelpdesk_edit['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($REC_getHelpdesk_edit['cat_code'],$REC_getHelpdesk_edit['scat_code_1'],$REC_getHelpdesk_edit['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($REC_getHelpdesk_edit['cat_code'],$REC_getHelpdesk_edit['scat_code_1'],$REC_getHelpdesk_edit['scat_code_2'],$REC_getHelpdesk_edit['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($REC_getHelpdesk_edit['cmb_code'],$conn); // Get Satates Description...............................
            $v_getRnterUsre = getUserName($REC_getHelpdesk_edit['enterBy'],$conn); // Get Enter Usre Name
            $v_getBranch = getBranchName($REC_getHelpdesk_edit['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($REC_getHelpdesk_edit['inner_brCode'],$REC_getHelpdesk_edit['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($REC_getHelpdesk_edit['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($REC_getHelpdesk_edit['enterBy'],$conn); // Get Enter Usre Name
			
             echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Category :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px; color: #747474; background: #D3D3D3;' name='sel_catagory' id='sel_catagory' value='".$v_sel_catagory."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> 
                            <div style='display: none;'><input class='box_decaretion' type='text'   name='sel_catagory_1' id='sel_catagory_1' value='".$REC_getHelpdesk_edit['cat_code']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> </div>
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px; color: #747474; background: #D3D3D3;' name='sel_scat01' id='sel_scat01' value='".$v_sel_scat01."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />                 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px; color: #747474; background: #D3D3D3;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px; color: #747474; background: #D3D3D3;' name='sel_scat03' id='sel_scat03' value='".$v_sel_scat03."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>";
             echo "<table>";
              if($REC_getHelpdesk_edit['cat_code'] == '1014'){
                   echo " <tr>
                    <td style='width: 150px; text-align: right;padding-right: 5px;'><label class='linetop'>Facility Amount :</label></td>
                    <td>
                        <input class='box_decaretion' type='text'  style='width:150px;' maxlength='15' placeholder='0.00' name='txt_facility_amount' id='txt_facility_amount' value='".$REC_getHelpdesk_edit['ssb_facility_amount']."' onkeypress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                    </td>
                  </tr>";
              }else{
                echo "<tr style='display: none;'>
                    <td style='width: 150px; text-align: right;padding-right: 5px;'><label class='linetop'>Facility Amount :</label></td>
                    <td>
                        <input class='box_decaretion' type='text'  style='width:150px;' maxlength='15' placeholder='0.00' name='txt_facility_amount' id='txt_facility_amount' value='".$REC_getHelpdesk_edit['ssb_facility_amount']."' onkeypress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' required='required' />
                    </td>
                  </tr>";
              }
                   echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='".$REC_getHelpdesk_edit['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>".$REC_getHelpdesk_edit['help_discr']."</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px; color: #747474; background: #D3D3D3;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>";
                        echo "<div style='display: none;'><input type='text' name='sel_Urgency_defolt' id='sel_Urgency_defolt' value='".$REC_getHelpdesk_edit['ur_code']."'  onKeyPress='return disableEnterKey(event)'/></div>";
                        echo "<select class='box_decaretion'  style='width: 200px;' name='sel_Urgency' id='sel_Urgency' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>";
                        $v_sql_Urgency = "SELECT `ur_code`,`ur_discr` FROM `urgency_states` WHERE `ur_state` = 1;";
                        $que_getUrgency = mysqli_query($conn,$v_sql_Urgency);
                        while($RES_getUrgency = mysqli_fetch_array($que_getUrgency)){
                            echo "<option value=".$RES_getUrgency[0].">".$RES_getUrgency[1]."</option>";
                        }
                        echo "</select>";
                echo "</td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>";
                        echo "<div style='display: none;'><input type='text' name='sel_Priority_defolt' id='sel_Priority_defolt' value='".$REC_getHelpdesk_edit['pr_code']."'  onKeyPress='return disableEnterKey(event)'/></div>";
                        echo "<select class='box_decaretion'  style='width: 200px;' name='sel_Priority' id='sel_Priority' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>";
                        $v_sql_Priority = "SELECT `pr_code`,`pr_discr` FROM `priority_states` WHERE `pr_state` = 1;";
                        $que_getPriority = mysqli_query($conn,$v_sql_Priority);
                        while($RES_getPriority = mysqli_fetch_array($que_getPriority)){
                            echo "<option value=".$RES_getPriority[0].">".$RES_getPriority[1]."</option>";
                        }
                        echo "</select>";
                     echo "</td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>";
                            echo "<div style='display: none;'><input type='text' name='sel_Source_defolt' id='sel_Source_defolt' value='".$REC_getHelpdesk_edit['s_type']."'  onKeyPress='return disableEnterKey(event)'/></div>";
                            echo "<select class='box_decaretion'  style='width: 200px;' name='sel_Source' id='sel_Source' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>";
                            $v_sql_Source = "SELECT `s_type`,`s_descript` FROM `cdb_soarce_of_issue` WHERE `s_stats` = 1;";
                            $que_getSource = mysqli_query($conn,$v_sql_Source);
                            while($RES_getSource = mysqli_fetch_array($que_getSource)){
                                echo "<option value=".$RES_getSource[0].">".$RES_getSource[1]."</option>";
                            }
                            echo "</select>";
                       echo "</td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:600px; color: #747474; background: #D3D3D3;' name='txt_User' id='txt_User' value='".$REC_getHelpdesk_edit['enterBy']." -- ".$v_getRnterUsre." ' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>";
                     if($REC_getHelpdesk_edit['cat_code'] == '1014'){
                   echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Main File :</label></td>
                        <td>";
                        echo "<div style='display: none;'><input type='text' name='fileAttachment1' id='fileAttachment1' value='".$REC_getHelpdesk_edit['attachment_name']."' onKeyPress='return disableEnterKey(event)'/></div>";
                        if($REC_getHelpdesk_edit['attachment_name'] !=""){
                          echo "<span id='link_att'><a href='../../../uploadHelpdesk/".$REC_getHelpdesk_edit['attachment_name']."' target='_blank'>GET Attachment</a></span>";
                          echo "&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' style='width: 100px;' class='buttonManage' id='btnCloseAtt' name='btnCloseAtt' value='Remove' title='".$editHID."' onclick='isRemoveAttachment(title);'/>";
                          echo "<input class='buttonManage' type='file' name='fileAttachment' id='fileAttachment'/>";
                        }else{
                          echo "<input class='buttonManage' type='file' name='fileAttachment' id='fileAttachment' />";  
                        }
                            
                     echo   "</td>
                    </tr>";
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>CRIB File :</label></td>
                        <td>";
                        echo "<div style='display: none;'><input type='text' name='fileAttachment2' id='fileAttachment2' value='".$REC_getHelpdesk_edit['attachment_namesub']."' onKeyPress='return disableEnterKey(event)'/></div>";
                        if($REC_getHelpdesk_edit['attachment_namesub'] !=""){
                          echo "<span id='link_att1'><a href='../../../uploadHelpdesk/".$REC_getHelpdesk_edit['attachment_namesub']."' target='_blank'>GET Attachment</a></span>";
                          echo "&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' style='width: 100px;' class='buttonManage' id='btnCloseAtt1' name='btnCloseAtt1' value='Remove' title='".$editHID."' onclick='isRemoveAttachment1(title);'/>";
                          echo "<input class='buttonManage' type='file' name='fileAttachmentsub' id='fileAttachmentsub'/>";
                        }else{
                          echo "<input class='buttonManage' type='file' name='fileAttachmentsub' id='fileAttachmentsub' />";  
                        }
                            
                     echo   "</td>
                    </tr>";
                    }else{
                         echo "<tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Attachment :</label></td>
                        <td>";
                        echo "<div style='display: none;'><input type='text' name='fileAttachment1' id='fileAttachment1' value='".$REC_getHelpdesk_edit['attachment_name']."' onKeyPress='return disableEnterKey(event)'/>
                        <input type='text' name='fileAttachment2' id='fileAttachment2' value='' onKeyPress='return disableEnterKey(event)'/>
                        </div>";
                        if($REC_getHelpdesk_edit['attachment_name'] !=""){
                          echo "<span id='link_att'><a href='../../../uploadHelpdesk/".$REC_getHelpdesk_edit['attachment_name']."' target='_blank'>GET Attachment</a></span>";
                          echo "&nbsp;&nbsp;&nbsp;&nbsp;<input type='button' style='width: 100px;' class='buttonManage' id='btnCloseAtt' name='btnCloseAtt' value='Remove' title='".$editHID."' onclick='isRemoveAttachment(title);'/>";
                          echo "<input class='buttonManage' type='file' name='fileAttachment' id='fileAttachment'/>";
                        }else{
                          echo "<input class='buttonManage' type='file' name='fileAttachment' id='fileAttachment' />";  
                        }
                            
                     echo   "</td>
                    </tr>";
                    }
                    echo "<tr>
                        <td style='width: 100px; text-align: right;'></td>
                        <td>
                            <div id='progress-div'><div id='progress-bar'></div></div>
                        </td>
                    </tr>
                    
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:600px;'>Notes</td>
                                    <td style='width:30px;'></td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr` FROM `cdb_help_note` WHERE `helpid` = '".$REC_getHelpdesk_edit['helpid']."';";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                            <td style='width: 600px; text-align: left;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value='".$REC_helpNote['note_discr']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width:30px;'></td>
                                        </tr>";
                                    $index++;
                                }
                        if($REC_getHelpdesk_edit['cat_code'] == '1014'){
                             echo "<tr style='display: none;'>
                                <td style='width:50px;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                <td style='width:600px;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value=''  onKeyPress='return disableEnterKey(event)' /></td>
                                <td style='width:30px;'><img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/></td>
                            </tr>";
                        }else{
                             echo "<tr>
                                <td style='width:50px;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                <td style='width:600px;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value=''  onKeyPress='return disableEnterKey(event)' /></td>
                                <td style='width:30px;'><img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/></td>
                            </tr>";
                        }
                       
                    echo "</table>
                        </td>
                    </tr>";
                     if($REC_getHelpdesk_edit['cat_code'] == '1014'){
                        echo "<tr style='display: none;'>
                            <td style='width: 100px; text-align: right;vertical-align: top;'></td>
                            <td><input class='buttonManage' type='button' name='btn_addnote' id='btn_addnote' value='Add row' onclick='is_add_row();'/></td>
                        </tr>";
                        
                     }else{
                    echo "<tr>
                            <td style='width: 100px; text-align: right;vertical-align: top;'></td>
                            <td><input class='buttonManage' type='button' name='btn_addnote' id='btn_addnote' value='Add row' onclick='is_add_row();'/></td>
                        </tr>";
                    }
               echo " </table> <div style='display: none;'>
           <input type='text' name='row_COUNT' id='row_COUNT' value='".$index."' onKeyPress='return disableEnterKey(event)'/> 
        </div>";
         if($REC_getHelpdesk_edit['cat_code'] == '1014'){
              echo "<br/><br/>
                <div style='display: none;'>
                <fieldset>
                    <legend><label class='linetop'>Intermediate Contact:</label></legend>
                        <table style='margin-left: 100px;'>
                        <tr>
                            <td>";
                                echo "<div style='display: none;'><input type='text' name='txt_Branch_defolt' id='txt_Branch_defolt' value='".$REC_getHelpdesk_edit['inner_brCode']."'  onKeyPress='return disableEnterKey(event)'/></div>
                                <select class='box_decaretion'  style='width: 200px;' name='txt_Branch' id='txt_Branch' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' title='3' onchange='is_getScat_01(this.id,title);'>
                                    <option value=''>--Select Branch --</option>";
                                    $v_sql_Branch = "SELECT `branchNumber`,`branchName` FROM `branch`;";
                                    $que_getBranch = mysqli_query($conn,$v_sql_Branch);
                                    while($RES_getBranch = mysqli_fetch_array($que_getBranch)){
                                        echo "<option value=".$RES_getBranch[0].">".$RES_getBranch[1]."</option>";
                                    }
                                echo "</select>
                            </td>
                            <td>
                                <div id='divc'>";
                                    echo "<div style='display: none;'><input type='text' name='txt_Department_defolt' id='txt_Department_defolt' value='".$REC_getHelpdesk_edit['inner_dept']."'  onKeyPress='return disableEnterKey(event)'/></div>";
                                    echo "<select class='box_decaretion'  style='width: 200px;' name='txt_Department' id='txt_Department' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>
                                        <option value=''>--Select Department--</option>";
                                        
                                    $v_sql_Dept = "SELECT `deparmentNumber`,`deparmentName` FROM `deparment` WHERE `branchNumber` = '" . $REC_getHelpdesk_edit['inner_brCode'] ."'" ;
                                    $que_getDept = mysqli_query($conn,$v_sql_Dept);
                                    while($RES_getDept = mysqli_fetch_array($que_getDept)){
                                        echo "<option value=".$RES_getDept[0].">".$RES_getDept[1]."</option>";
                                    }

                                    echo "</select>   
                                </div>
                            </td>
                        </tr>
                        </table>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'>
                                <label class='linetop'>Inter. User :</label>
                            <td>   
                            <td>
                                <div style='display: none;'>
                                    <input type='text' name='txt_inner_User1' id='txt_inner_User1' value='".$REC_getHelpdesk_edit['inner_user']."' onKeyPress='return disableEnterKey(event)'/> 
                                </div>
                                <input class='box_decaretion' type='text'  style='width:600px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vgetInnerUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name' onclick='popup(1);'  />
                                <input type='button' class='buttonManage' id='btnPopUp' name='btnPopUp' value='...' onclick='popup(1);'/>
                                <input type='button' class='buttonManage' id='btnremove' name='btnremove' value='Remove' onclick='removeUsreID()'/>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'>
                                <label class='linetop'>Inter. Remark :</label>
                            <td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>".$REC_getHelpdesk_edit['inner_remark']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset></div>";  
                        
         }else{
             echo "
                <fieldset>
                    <legend><label class='linetop'>Intermediate Contact:</label></legend>
                        <table style='margin-left: 100px;'>
                        <tr>
                            <td>";
                                echo "<div style='display: none;'><input type='text' name='txt_Branch_defolt' id='txt_Branch_defolt' value='".$REC_getHelpdesk_edit['inner_brCode']."'  onKeyPress='return disableEnterKey(event)'/></div>
                                <select class='box_decaretion'  style='width: 200px;' name='txt_Branch' id='txt_Branch' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' title='3' onchange='is_getScat_01(this.id,title);'>
                                    <option value=''>--Select Branch --</option>";
                                    $v_sql_Branch = "SELECT `branchNumber`,`branchName` FROM `branch`;";
                                    $que_getBranch = mysqli_query($conn,$v_sql_Branch);
                                    while($RES_getBranch = mysqli_fetch_array($que_getBranch)){
                                        echo "<option value=".$RES_getBranch[0].">".$RES_getBranch[1]."</option>";
                                    }
                                echo "</select>
                            </td>
                            <td>
                                <div id='divc'>";
                                    echo "<div style='display: none;'><input type='text' name='txt_Department_defolt' id='txt_Department_defolt' value='".$REC_getHelpdesk_edit['inner_dept']."'  onKeyPress='return disableEnterKey(event)'/></div>";
                                    echo "<select class='box_decaretion'  style='width: 200px;' name='txt_Department' id='txt_Department' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>
                                        <option value=''>--Select Department--</option>";
                                        
                                    $v_sql_Dept = "SELECT `deparmentNumber`,`deparmentName` FROM `deparment` WHERE `branchNumber` = '" . $REC_getHelpdesk_edit['inner_brCode'] ."'" ;
                                    $que_getDept = mysqli_query($conn,$v_sql_Dept);
                                    while($RES_getDept = mysqli_fetch_array($que_getDept)){
                                        echo "<option value=".$RES_getDept[0].">".$RES_getDept[1]."</option>";
                                    }

                                    echo "</select>   
                                </div>
                            </td>
                        </tr>
                        </table>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'>
                                <label class='linetop'>Inter. User :</label>
                            <td>   
                            <td>
                                <div style='display: none;'>
                                    <input type='text' name='txt_inner_User1' id='txt_inner_User1' value='".$REC_getHelpdesk_edit['inner_user']."' onKeyPress='return disableEnterKey(event)'/> 
                                </div>
                                <input class='box_decaretion' type='text'  style='width:600px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vgetInnerUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name' onclick='popup(1);'  />
                                <input type='button' class='buttonManage' id='btnPopUp' name='btnPopUp' value='...' onclick='popup(1);'/>
                                <input type='button' class='buttonManage' id='btnremove' name='btnremove' value='Remove' onclick='removeUsreID()'/>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'>
                                <label class='linetop'>Inter. Remark :</label>
                            <td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>".$REC_getHelpdesk_edit['inner_remark']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>";      
         }  
                echo "<table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                        echo "<input type='submit' style='width: 100px;' class='buttonManage' id='btnSolution' name='btnSolution' value='Update'/>";
                        echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageClose()'/>
                        </td>
                    </tr>
                </table>";
             
             
        }
         
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    function  getServiceReequses_Report($getDate1,$getDate2,$uGroup,$opt,$ude,$getsel_States,$getsel_Urgency,$getsel_Priority,$getsel_Source,$getsel_User,$getsel_catCode){
       // echo $getsel_States,$getsel_Urgency,$getsel_Priority,$getsel_Source,$getsel_User;
       //echo $getsel_catCode;
        $conn = DatabaseConnection();
        echo "<table border='1' cellpadding='0' cellspacing='0' id='myTable'  style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                <tr style='background-color: #BEBABA;'>
                    <td style='width:60px;text-align: right;'><span style='margin-right: 5px;'>Help ID</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Entry Date</span></td>
                    <td style='width:300px;text-align: left;'><span style='margin-left: 5px;'>Issue</span></td>
                    <td style='width:150px;text-align: left;'><span style='margin-left: 5px;'>Req. Branch</span></td>
                    <td style='width:150px;text-align: left'><span style='margin-left: 5px;'>Req. Department</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Enter By</span></td>
                    <td style='width:100px;text-align: left;'><span style='margin-left: 5px;'>Urgency</span></td>
                    <td style='width:80px;text-align: left;'><span style='margin-left: 5px;'>Priority</span></td>
                    <td style='width:80px;text-align: left;'><span style='margin-left: 5px;'>States</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Assign By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Solved By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Solved On</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Ackn. By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Ackn. On</span></td>
                    <th style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Decision</span></th>
                </tr>";
                
                if($opt==1){
                $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` ,`cmb_states`.`cmb_discr`, `cdb_helpdesk`.`asing_by`, `cdb_helpdesk`.`solved_by`, DATE(`cdb_helpdesk`.`solved_on`),  `cdb_helpdesk`.`act_by`,  DATE(`cdb_helpdesk`.`act_on`) , `cdb_helpdesk`.`decision_discription`
                                     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`,`cdb_help_user_oth`
                                     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` 
                                       AND `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` 
                                       AND `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` 
                                       AND `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`
                                       AND `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber`
                                       AND `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code`
                                       AND  DATE(`cdb_helpdesk`.`enterDateTime`) BETWEEN '".$getDate1."' AND '".$getDate2."'
                                       AND  `cdb_help_user_oth`.`user_group` = '".$uGroup."' ";
              if($getsel_States != ""){
                  $v_sql_det_detels  .= "AND `cdb_helpdesk`.`cmb_code` = '".$getsel_States."'";
                          
              }
                if($getsel_Urgency != ""){
                    $v_sql_det_detels .= " AND `cdb_helpdesk`.`ur_code` = '".$getsel_Urgency."'"; 
                }
                if($getsel_Priority != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`pr_code` = '".$getsel_Priority."'"; 
                }
                if($getsel_Source != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`s_type` = '".$getsel_Source."'"; 
                }
                if($getsel_User != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`asing_by` = '".$getsel_User."'"; 
                }
                if($getsel_catCode != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`scat_code_1` = '".$getsel_catCode."'"; 
                }
                $v_sql_det_detels .= "ORDER BY `cdb_helpdesk`.`enterDateTime` DESC;";
                }else if($opt==2){
                    $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` ,`cmb_states`.`cmb_discr`, `cdb_helpdesk`.`asing_by`, `cdb_helpdesk`.`solved_by`, DATE(`cdb_helpdesk`.`solved_on`),  `cdb_helpdesk`.`act_by`,  DATE(`cdb_helpdesk`.`act_on`) , `cdb_helpdesk`.`decision_discription`
                                     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`
                                     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` 
                                       AND `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` 
                                       AND `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` 
                                       AND `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`
                                       AND `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber`
                                       AND  DATE(`cdb_helpdesk`.`enterDateTime`) BETWEEN '".$getDate1."' AND '".$getDate2."'
                                       AND  `cdb_helpdesk`.`entry_branch` = '".$uGroup."'
                                       AND  `cdb_helpdesk`.`entry_department` = '".$ude."'";
                    if($getsel_States != ""){
                        $v_sql_det_detels  .= "AND `cdb_helpdesk`.`cmb_code` = '".$getsel_States."'";
                          
                    }
                    if($getsel_Urgency != ""){
                        $v_sql_det_detels .= " AND `cdb_helpdesk`.`ur_code` = '".$getsel_Urgency."'"; 
                    }
                    if($getsel_Priority != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`pr_code` = '".$getsel_Priority."'"; 
                    }
                    if($getsel_Source != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`s_type` = '".$getsel_Source."'"; 
                    }
                    if($getsel_User != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`asing_by` = '".$getsel_User."'"; 
                    }
                    if($getsel_catCode != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`cat_code` = '".$getsel_catCode."'"; 
                    }
                       $v_sql_det_detels .= "ORDER BY `cdb_helpdesk`.`enterDateTime` DESC;";
                }
                $v_que_det_detels = mysqli_query($conn,$v_sql_det_detels);
                $index = 0;
                while($rec_det_detels = mysqli_fetch_array($v_que_det_detels)){
                    $entryBy = getUserName($rec_det_detels[5],$conn);
                    $asingBy = getUserName($rec_det_detels[9],$conn);
                    $sodBy = getUserName($rec_det_detels[10],$conn);
                    $atcBy = getUserName($rec_det_detels[12],$conn);
                    //$string = preg_replace( '/[^[:print:]]/', '',$rec_det_detels[2]);
                    $string = preg_replace( '/[\x00-\x1F\x80-\xFF]/', '',$rec_det_detels[2]);
                    $index++;
                    echo "<tr id = 'tr".$index."' title = '".$rec_det_detels[0]."' onclick='gettrVal(this.id,title,1)'>";
                    echo "<td style='width:60px;text-align: right;'><span style='margin-left: 2px;'>`".$rec_det_detels[0]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[1]."</span></td>";
                    echo "<td style='width:300px;text-align: left;'><span style='margin-left: 2px;'>`".$string."</span></td>";
                    echo "<td style='width:150px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[3]."</span></td>";
                    echo "<td style='width:150px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[4]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'title = '".$entryBy."' ><span style='margin-right: 2px;'>".$rec_det_detels[5]."</span></td>";
                    echo "<td style='width:100px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[6]."</span></td>";
                    echo "<td style='width:80px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[7]."</span></td>";
                    echo "<td style='width:80px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[8]."</span></td>";
                    echo "<td style='width:80px;text-align: right;' title = '".$asingBy."'><span style='margin-right: 2px;'>".$rec_det_detels[9]."</span></td>";
                    echo "<td style='width:80px;text-align: right;' title = '".$sodBy."'><span style='margin-right: 2px;'>".$rec_det_detels[10]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[11]."</span></td>";
                    echo "<td style='width:80px;text-align: right;' title = '".$atcBy."'><span style='margin-right: 2px;'>".$rec_det_detels[12]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[13]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[14]."</span></td>";
                    echo "</tr>";
                }
            echo "</table>";  
    }
    
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    function  getServiceReequses_ReportNew($getDate1,$getDate2,$uGroup,$opt,$ude,$getsel_States,$getsel_Urgency,$getsel_Priority,$getsel_Source,$getcat_m,$getcat_1,$getcat_2,$getcat_3 , $userLog , $getAsingUer){
      // echo $getDate1."-".$getDate2."-".$uGroup."-".$opt."-".$ude."-".$getsel_States."-".$getsel_Urgency."-".$getsel_Priority."-".$getsel_Source."-".$getcat_m."-".$getcat_1."-".$getcat_2."-".$getcat_3;
       //echo $getsel_catCode;
        $conn = DatabaseConnection();
       
                
                if($opt==1){
                $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` ,`cmb_states`.`cmb_discr`, `cdb_helpdesk`.`asing_by`, `cdb_helpdesk`.`solved_by`, DATE(`cdb_helpdesk`.`solved_on`),  `cdb_helpdesk`.`act_by`,  DATE(`cdb_helpdesk`.`act_on`) , `cdb_helpdesk`.`decision_discription`, `scat_02`.`scat_discr_2`
                                     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`,`cdb_help_user_oth` ,  `scat_02`
                                     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` 
                                       AND `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` 
                                       AND `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` 
                                       AND `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`
                                       AND `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber`
                                       AND `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code`
                                       AND `cdb_helpdesk`.`scat_code_2` = `scat_02`.`scat_code_2`
                                       AND  DATE(`cdb_helpdesk`.`enterDateTime`) BETWEEN '".$getDate1."' AND '".$getDate2."'
                                       AND  `cdb_help_user_oth`.`user_group` = '".$uGroup."' ";
              if($getsel_States != ""){
                  $v_sql_det_detels  .= "AND `cdb_helpdesk`.`cmb_code` = '".$getsel_States."'";
              }
                if($getsel_Urgency != ""){
                    $v_sql_det_detels .= " AND `cdb_helpdesk`.`ur_code` = '".$getsel_Urgency."'"; 
                }
                if($getsel_Priority != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`pr_code` = '".$getsel_Priority."'"; 
                }
                if($getsel_Source != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`s_type` = '".$getsel_Source."'"; 
                }
                
                
                if($getcat_m != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`cat_code` = '".$getcat_m."'"; 
                }
                if($getcat_1 != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`scat_code_1` = '".$getcat_1."'"; 
                }
                if($getcat_2 != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`scat_code_2` = '".$getcat_2."'"; 
                }
                if($getcat_3 != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`scat_code_3` = '".$getcat_3."'"; 
                }
                
                if($getAsingUer != ""){
                    $v_sql_det_detels .= "AND `cdb_helpdesk`.`asing_by` = '".$getAsingUer."'";
                }
                
                $v_sql_det_detels .= "ORDER BY `cdb_helpdesk`.`enterDateTime` DESC;";
                }else if($opt == 2){
                    $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` ,`cmb_states`.`cmb_discr`, `cdb_helpdesk`.`asing_by`, `cdb_helpdesk`.`solved_by`, DATE(`cdb_helpdesk`.`solved_on`),  `cdb_helpdesk`.`act_by`,  DATE(`cdb_helpdesk`.`act_on`) , `cdb_helpdesk`.`decision_discription`, `scat_02`.`scat_discr_2`
                                     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`  ,  `scat_02`
                                     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` 
                                       AND `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` 
                                       AND `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` 
                                       AND `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`
                                       AND `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber`
                                        AND `cdb_helpdesk`.`scat_code_2` = `scat_02`.`scat_code_2`
                                       AND  DATE(`cdb_helpdesk`.`enterDateTime`) BETWEEN '".$getDate1."' AND '".$getDate2."'
                                       AND  `cdb_helpdesk`.`entry_branch` = '".$uGroup."'
                                       AND  `cdb_helpdesk`.`entry_department` = '".$ude."'";
                    if($getsel_States != ""){
                        $v_sql_det_detels  .= "AND `cdb_helpdesk`.`cmb_code` = '".$getsel_States."'";
                          
                    }
                    if($getsel_Urgency != ""){
                        $v_sql_det_detels .= " AND `cdb_helpdesk`.`ur_code` = '".$getsel_Urgency."'"; 
                    }
                    if($getsel_Priority != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`pr_code` = '".$getsel_Priority."'"; 
                    }
                    if($getsel_Source != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`s_type` = '".$getsel_Source."'"; 
                    }
                    
                    if($getcat_m != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`cat_code` = '".$getcat_m."'"; 
                    }
                    if($getcat_1 != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`scat_code_1` = '".$getcat_1."'"; 
                    }
                    if($getcat_2 != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`scat_code_2` = '".$getcat_2."'"; 
                    }
                    if($getcat_3 != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`scat_code_3` = '".$getcat_3."'"; 
                    }
                    if($getAsingUer != ""){
                        $v_sql_det_detels .= "AND `cdb_helpdesk`.`enterBy` = '".$getAsingUer."'"; 
                    }
                       $v_sql_det_detels .= "ORDER BY `cdb_helpdesk`.`enterDateTime` DESC;";
                }
                //echo $v_sql_det_detels;
                $v_que_det_detels = mysqli_query($conn,$v_sql_det_detels);
                $index = 0;
                 echo "<table border='1' cellpadding='0' cellspacing='0' id='myTable'  style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                <tr style='background-color: #BEBABA;'>
                    <td style='width:60px;text-align: right;'><span style='margin-right: 5px;'>Help ID</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Entry Date</span></td>
                    <td style='width:300px;text-align: left;'><span style='margin-left: 5px;'>Issue</span></td>
                    <th style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Category 2</span></th>
                    <td style='width:150px;text-align: left;'><span style='margin-left: 5px;'>Req. Branch</span></td>
                    <td style='width:150px;text-align: left'><span style='margin-left: 5px;'>Req. Department</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Enter By</span></td>
                    <td style='width:100px;text-align: left;'><span style='margin-left: 5px;'>Urgency</span></td>
                    <td style='width:80px;text-align: left;'><span style='margin-left: 5px;'>Priority</span></td>
                    <td style='width:80px;text-align: left;'><span style='margin-left: 5px;'>States</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Assign By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Solved By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Solved On</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Ackn. By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Ackn. On</span></td>
                    <th style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Decision</span></th>
                    
                </tr>";
                while($rec_det_detels = mysqli_fetch_array($v_que_det_detels)){
                    $entryBy = getUserName($rec_det_detels[5],$conn);
                    $asingBy = getUserName($rec_det_detels[9],$conn);
                    $sodBy = getUserName($rec_det_detels[10],$conn);
                    $atcBy = getUserName($rec_det_detels[12],$conn);
                    //$string = preg_replace( '/[^[:print:]]/', '',$rec_det_detels[2]);
                    $string = preg_replace( '/[\x00-\x1F\x80-\xFF]/', '',$rec_det_detels[2]);
                    $index++;
                    //echo $ude;
                    if($userLog == $rec_det_detels[9]){
                        $colTR = "background-color:#b3d9ff;";
                    }else{
                        $colTR = ""; 
                    }
                    echo "<tr id = 'tr".$index."'  title = '".$rec_det_detels[0]."' onclick='gettrVal(this.id,title,1)'>";
                    echo "<td style='width:60px;text-align: right;".$colTR."'><span style='margin-left: 2px;'>`".$rec_det_detels[0]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."'><span style='margin-right: 2px;'>".$rec_det_detels[1]."</span></td>";
                    echo "<td style='width:300px;text-align: left;".$colTR."'><span style='margin-left: 2px;'>`".$string."</span></td>";
                    echo "<td style='width:80px;text-align: left;".$colTR."'><span style='margin-left: 2px;'>".$rec_det_detels[15]."</span></td>";
                    echo "<td style='width:150px;text-align: left;".$colTR."'><span style='margin-left: 2px;'>".$rec_det_detels[3]."</span></td>";
                    echo "<td style='width:150px;text-align: left;".$colTR."'><span style='margin-left: 2px;'>".$rec_det_detels[4]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."' title = '".$entryBy."' ><span style='margin-right: 2px;'>".$rec_det_detels[5]."</span></td>";
                    echo "<td style='width:100px;text-align: left;".$colTR."'><span style='margin-left: 2px;'>".$rec_det_detels[6]."</span></td>";
                    echo "<td style='width:80px;text-align: left;".$colTR."'><span style='margin-left: 2px;'>".$rec_det_detels[7]."</span></td>";
                    echo "<td style='width:80px;text-align: left;".$colTR."'><span style='margin-left: 2px;'>".$rec_det_detels[8]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."' title = '".$asingBy."'><span style='margin-right: 2px;'>".$rec_det_detels[9]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."' title = '".$sodBy."'><span style='margin-right: 2px;'>".$rec_det_detels[10]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."'><span style='margin-right: 2px;'>".$rec_det_detels[11]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."' title = '".$atcBy."'><span style='margin-right: 2px;'>".$rec_det_detels[12]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."'><span style='margin-right: 2px;'>".$rec_det_detels[13]."</span></td>";
                    echo "<td style='width:80px;text-align: right;".$colTR."'><span style='margin-right: 2px;'>".$rec_det_detels[14]."</span></td>";
                    
                    echo "</tr>";
                }
            echo "</table>";  
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    function  getAjaxServiceRequses_Selection($IDSelection,$SRSelection,$uGroup,$opt,$udep){
        $conn = DatabaseConnection();
        echo "<table border='1' cellpadding='0' cellspacing='0' id='myTable'  style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                <tr style='background-color: #BEBABA;'>
                    <td style='width:60px;text-align: right;'><span style='margin-right: 5px;'>Help ID</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Entry Date</span></td>
                    <td style='width:300px;text-align: left;'><span style='margin-left: 5px;'>Issue</span></td>
                    <td style='width:150px;text-align: left;'><span style='margin-left: 5px;'>Req. Branch</span></td>
                    <td style='width:150px;text-align: left'><span style='margin-left: 5px;'>Req. Department</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Enter By</span></td>
                    <td style='width:80px;text-align: left;'><span style='margin-left: 5px;'>States</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Assign By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Solved By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Solved On</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Ackn. By</span></td>
                    <td style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Ackn. On</span></td>
                    <th style='width:80px;text-align: right;'><span style='margin-right: 5px;'>Decision</span></th>
                </tr>";
                if($opt == 1){
                 $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` ,`cmb_states`.`cmb_discr`, `cdb_helpdesk`.`asing_by`, `cdb_helpdesk`.`solved_by`, DATE(`cdb_helpdesk`.`solved_on`),  `cdb_helpdesk`.`act_by`,  DATE(`cdb_helpdesk`.`act_on`) , `cdb_helpdesk`.`decision_discription`
                                     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`,`cdb_help_user_oth`
                                     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` 
                                       AND `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` 
                                       AND `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` 
                                       AND `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`
                                       AND `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber`
                                       AND `cdb_helpdesk`.`cat_code` = `cdb_help_user_oth`.`cat_code`
                                       AND  `cdb_help_user_oth`.`user_group` = '".$uGroup."' AND";
                 }else if($opt == 2){
                    $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` ,`cmb_states`.`cmb_discr`, `cdb_helpdesk`.`asing_by`, `cdb_helpdesk`.`solved_by`, DATE(`cdb_helpdesk`.`solved_on`),  `cdb_helpdesk`.`act_by`,  DATE(`cdb_helpdesk`.`act_on`) , `cdb_helpdesk`.`decision_discription`
                                     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`
                                     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` 
                                       AND `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` 
                                       AND `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` 
                                       AND `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`
                                       AND `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber`
                                       AND `cdb_helpdesk`.`entry_branch` = '".$uGroup."' 
                                       AND `cdb_helpdesk`.`entry_department` = '".$udep."' AND ";
                                       
                 }
                if($IDSelection == 1){
                  $v_sql_det_detels  .= "`cdb_helpdesk`.`cmb_code` = '".$SRSelection."'";
                          
                }
                if($IDSelection == 2){
                    $v_sql_det_detels .= "`cdb_helpdesk`.`ur_code` = '".$SRSelection."'"; 
                }
                if($IDSelection == 3){
                    $v_sql_det_detels .= "`cdb_helpdesk`.`pr_code` = '".$SRSelection."'"; 
                }
                if($IDSelection == 4){
                    $v_sql_det_detels .= "`cdb_helpdesk`.`s_type` = '".$SRSelection."'"; 
                }
                if($IDSelection == 5){
                    $v_sql_det_detels .= "`cdb_helpdesk`.`asing_by` = '".$SRSelection."'"; 
                }
                $v_sql_det_detels .= " ORDER BY `cdb_helpdesk`.`enterDateTime` DESC;";   
                $v_que_det_detels = mysqli_query($conn,$v_sql_det_detels);
                $index = 0;
                while($rec_det_detels = mysqli_fetch_array($v_que_det_detels)){
                    $entryBy = getUserName($rec_det_detels[5],$conn);
                    $asingBy = getUserName($rec_det_detels[9],$conn);
                    $sodBy = getUserName($rec_det_detels[10],$conn);
                    $atcBy = getUserName($rec_det_detels[12],$conn);
                    //$string = preg_replace( '/[^[:print:]]/', '',$rec_det_detels[2]);
                    $string = preg_replace( '/[\x00-\x1F\x80-\xFF]/', '',$rec_det_detels[2]);
                    $index++;
                    echo "<tr id = 'tr".$index."' title = '".$rec_det_detels[0]."' onclick='gettrVal(this.id,title,1)'>";
                    echo "<td style='width:60px;text-align: right;'><span style='margin-left: 2px;'>`".$rec_det_detels[0]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[1]."</span></td>";
                    echo "<td style='width:300px;text-align: left;'><span style='margin-left: 2px;'>".$string."</span></td>";
                    echo "<td style='width:150px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[3]."</span></td>";
                    echo "<td style='width:150px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[4]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'title = '".$entryBy."' ><span style='margin-right: 2px;'>".$rec_det_detels[5]."</span></td>";
                    echo "<td style='width:80px;text-align: left;'><span style='margin-left: 2px;'>".$rec_det_detels[8]."</span></td>";
                    echo "<td style='width:80px;text-align: right;' title = '".$asingBy."'><span style='margin-right: 2px;'>".$rec_det_detels[9]."</span></td>";
                    echo "<td style='width:80px;text-align: right;' title = '".$sodBy."'><span style='margin-right: 2px;'>".$rec_det_detels[10]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[11]."</span></td>";
                    echo "<td style='width:80px;text-align: right;' title = '".$atcBy."'><span style='margin-right: 2px;'>".$rec_det_detels[12]."</span></td>";
                    echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[13]."</span></td>";
                     echo "<td style='width:80px;text-align: right;'><span style='margin-right: 2px;'>".$rec_det_detels[14]."</span></td>";
                    echo "</tr>";
                }
            echo "</table>";  
        
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function getAjaxsubCatogorySelection_01($getCatID){
        $conn = DatabaseConnection();
        echo "<table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>";
        echo "<tr style='background-color: #BEBABA;'>";
        echo "<td style='width:100px;'>Sub Cat ID</td>";
        echo "<td style='width:500px;'>Sub Cat Name</td>";
        echo "<td style='width:30px;'></td>";
        echo "</tr>";
        $sql_getScat1 = "SELECT `scat_code_1`,`scat_discr_1` FROM `scat_01` WHERE `cat_code`='".$getCatID."';";
        $q_getScat1 = mysqli_query($conn,$sql_getScat1);
        $rowcount=mysqli_num_rows($q_getScat1);
        $x = 1;
        if($rowcount !=0 ){
            while($RES_getScat1 = mysqli_fetch_assoc($q_getScat1)){
                echo "<tr>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txta".$x."' id='txta".$x."' value='".$RES_getScat1['scat_code_1']."'  onKeyPress='return disableEnterKey(event)'/></td>";
                echo "<td style='width:500px;'><input style='width:500px;' type='text' name='txtb".$x."' id='txtb".$x."' value='".$RES_getScat1['scat_discr_1']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:30px;'><img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/></td>";
                echo "</tr>";
                $x++;
            }
            echo "</table>";
            echo "<div style='display: none;'>";
            echo "<input type='text' name='row_COUNT' id='row_COUNT' value='".($x-1)."' onKeyPress='return disableEnterKey(event)'/>"; 
            echo "</div>";
        }else{
            echo "<tr>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txta".$x."' id='txta".$x."' value=''  onKeyPress='return disableEnterKey(event)'/></td>";
            echo "<td style='width:500px;'><input style='width:500px;' type='text' name='txtb".$x."' id='txtb".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:30px;'><img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/></td>";
            echo "</tr>";  
            echo "</table>";
            echo "<div style='display: none;'>";
            echo "<input type='text' name='row_COUNT' id='row_COUNT' value='".($x)."' onKeyPress='return disableEnterKey(event)'/>"; 
            echo "</div>"; 
        }
        
        
        
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    function getAjaxsubSubCatogorySelection_01($scat1){
        $conn = DatabaseConnection();
        $sql_getScat1 = "SELECT `scat_code_1`,`scat_discr_1` FROM `scat_01` WHERE `cat_code`='".$scat1."';";
        $q_getScat1 = mysqli_query($conn,$sql_getScat1);
        echo "<select class='box_decaretion'  style='width: 200px;' name='sel_catagory_1' id='sel_catagory_1' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' onchange='isChangeSubCat1()'>";
        echo "<option value=''>--Select Sub Catagory 1--</option>";
        while($RES_getScat1 = mysqli_fetch_assoc($q_getScat1)){
            echo "<option value='".$RES_getScat1['scat_code_1']."'>".$RES_getScat1['scat_discr_1']."</option>";
        }
        echo "</select>";
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
    function getAjaxsubSubCatogorySelection_02($cat1,$cat2){
        $conn = DatabaseConnection();
        echo "<table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>";
        echo "<tr style='background-color: #BEBABA;'>";
        echo "<td style='width:100px;'>Sub Cat ID</td>
              <td style='width:300px;'>Sub Cat Name</td>
              <td style='width:100px;'>Def. User</td>
              <td style='width:100px;'>SLA_Type</td>
              <td style='width:100px;'>SLA</td>
              <td style='width:100px;'>Esca. User 1</td>
              <td style='width:50px;'>Esca. 1</td>
              <td style='width:100px;'>Esca. User 2</td>
              <td style='width:50px;'>Esca. 2</td>
              <td style='width:100px;'>Esca. User 3</td>
              <td style='width:50px;'>Esca. 3</td>
              <td style='width:30px;'></td>";
        echo "</tr>";
        $sql_getScat1 = "SELECT * FROM `scat_02` WHERE `cat_code`='".$cat1."' AND `scat_code_1`='".$cat2."';";
        $q_getScat1 = mysqli_query($conn,$sql_getScat1);
        $rowcount=mysqli_num_rows($q_getScat1);
        $x = 1;
        if($rowcount !=0 ){
            while($RES_getScat1 = mysqli_fetch_assoc($q_getScat1)){
                echo "<tr>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txta".$x."' id='txta".$x."' value='".$RES_getScat1['scat_code_2']."'  onKeyPress='return disableEnterKey(event)'/></td>";
                echo "<td style='width:300px;'><input style='width:300px;' type='text' name='txtb".$x."' id='txtb".$x."' value='".$RES_getScat1['scat_discr_2']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtc".$x."' id='txtc".$x."' value='".$RES_getScat1['DefuserID']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'>
                        <select class='box_decaretion'  style='width:100px;' name='txtd".$x."' id='txtd".$x."' onkeypress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>
                            <option value=''>SLA TYPE</option>
                            <option value='DAY'>Day</option>
                            <option value='HOURS'>Hours</option>
                            <option value='MINUTES'>Minutes</option>
                         </select>
                <div style='display: none;'><input type='text' name='txtl".$x."' id='txtl".$x."' value='".$RES_getScat1['SLA_TYPE']."'  onKeyPress='return disableEnterKey(event)' /><div></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txte".$x."' id='txte".$x."' value='".$RES_getScat1['SAL']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtf".$x."' id='txtf".$x."' value='".$RES_getScat1['ESCAL_1_USER_ID']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtg".$x."' id='txtg".$x."' value='".$RES_getScat1['ESCAL_1']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txth".$x."' id='txth".$x."' value='".$RES_getScat1['ESCAL_2_USER_ID']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txti".$x."' id='txti".$x."' value='".$RES_getScat1['ESCAL_2']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtj".$x."' id='txtj".$x."' value='".$RES_getScat1['ESCAL_3_USER_ID']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtk".$x."' id='txtk".$x."' value='".$RES_getScat1['ESCAL_3']."'  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:30px;'><img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/></td>";
                echo "</tr>";
                $x++;
            }
            echo "</table>";
            echo "<div style='display: none;'>";
            echo "<input type='text' name='row_COUNT' id='row_COUNT' value='".($x-1)."' onKeyPress='return disableEnterKey(event)'/>"; 
            echo "</div>";
        }else{
           /* echo "<tr>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txta".$x."' id='txta".$x."' value=''  onKeyPress='return disableEnterKey(event)'/></td>";
            echo "<td style='width:300px;'><input style='width:300px;' type='text' name='txtb".$x."' id='txtb".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtc".$x."' id='txtc".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtd".$x."' id='txtd".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txte".$x."' id='txte".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtf".$x."' id='txtf".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:30px;'><img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/></td>";
            echo "</tr>";  
            echo "</table>";
            echo "<div style='display: none;'>";
            echo "<input type='text' name='row_COUNT' id='row_COUNT' value='".($x)."' onKeyPress='return disableEnterKey(event)'/>"; 
            echo "</div>"; 
            */
            
            echo "<tr>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txta".$x."' id='txta".$x."' value=''  onKeyPress='return disableEnterKey(event)'/></td>";
            echo "<td style='width:300px;'><input style='width:300px;' type='text' name='txtb".$x."' id='txtb".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtc".$x."' id='txtc".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
            echo "<td style='width:100px;'>
                        <select class='box_decaretion'  style='width:100px;' name='txtd".$x."' id='txtd".$x."' onkeypress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)'>
                            <option value=''>SLA TYPE</option>
                            <option value='DAY'>Day</option>
                            <option value='HOURS'>Hours</option>
                            <option value='MINUTES'>Minutes</option>
                         </select>
                <div style='display: none;'><input type='text' name='txtl".$x."' id='txtl".$x."' value=''  onKeyPress='return disableEnterKey(event)' /><div></td>";
            echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txte".$x."' id='txte".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtf".$x."' id='txtf".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtg".$x."' id='txtg".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txth".$x."' id='txth".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txti".$x."' id='txti".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtj".$x."' id='txtj".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:100px;'><input style='width:100px;' type='text' name='txtk".$x."' id='txtk".$x."' value=''  onKeyPress='return disableEnterKey(event)' /></td>";
                echo "<td style='width:30px;'><img src='../../../img/dele.png' style='width:15px;' onclick='deleteRow(this)'/></td>";
                echo "</tr>";
            echo "</table>";
            echo "<div style='display: none;'>";
            echo "<input type='text' name='row_COUNT' id='row_COUNT' value='".($x)."' onKeyPress='return disableEnterKey(event)'/>"; 
            echo "</div>";
        }
        
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    function getSR_Report_cat_period($getSRCRFromDate,$getSRCRToDate,$getSRCRIdVal){
        $conn = DatabaseConnection();
        $sql_getReport = "SELECT MIS.CAT_CODE,
                                 MIS.CAT_DESCR, 
                                 MIS.OPBAL_SR,
                                 MIS.OPEN_SR,
                                 MIS.CLOSE_SR,
                                 -- (MIS.OPBAL_SR + MIS.OPEN_SR - MIS.CLOSE_SR) AS PENDING,
                                 (MIS.firstCol + MIS.secCol + MIS.THCOL) AS PENDING ,
                                 MIS.firstCol,
                                 MIS.secCol,
                                 MIS.THCOL
                          FROM(SELECT   cs.`cat_code` AS CAT_CODE, 
                                        cs.`cat_discr` AS CAT_DESCR,
                                        (SELECT COUNT(*) FROM `cdb_helpdesk` ch WHERE date(ch.`enterDateTime`) < '".$getSRCRFromDate."' AND (date(ch.`caloser_dateTime`) >= '".$getSRCRFromDate."' OR date(ch.`caloser_dateTime`)  = '0000-00-00 00:00:00')  AND ch.`cat_code` = cs.`cat_code`) AS OPBAL_SR,
                                        (SELECT COUNT(*) FROM `cdb_helpdesk` ch WHERE date(ch.`enterDateTime`) >= '".$getSRCRFromDate."'   AND date(ch.`enterDateTime`) <= '".$getSRCRToDate."' AND ch.`cat_code` = cs.`cat_code`) AS OPEN_SR,
                                        (SELECT COUNT(*) FROM `cdb_helpdesk` ch WHERE date(ch.`solved_on`) >= '".$getSRCRFromDate."'   AND date(ch.`solved_on`) <= '".$getSRCRToDate."'   AND ch.`cat_code` = cs.`cat_code`) AS CLOSE_SR,
                                        (SELECT COUNT(*) FROM `cdb_helpdesk` ch WHERE ch.`cat_code` = cs.`cat_code` and `cmb_code` = '5001' and DATEDIFF(date(now()),date(ch.`enterDateTime`)) < 3) AS firstCol,
                                        (SELECT COUNT(*) FROM `cdb_helpdesk` ch WHERE ch.`cat_code` = cs.`cat_code` and `cmb_code` = '5001' and DATEDIFF(date(now()),date(ch.`enterDateTime`)) >= 3 AND DATEDIFF(date(now()),date(ch.`enterDateTime`)) < 5) AS secCol,
                                        (SELECT COUNT(*) FROM `cdb_helpdesk` ch WHERE ch.`cat_code` = cs.`cat_code` and `cmb_code` = '5001' and DATEDIFF(date(now()),date(ch.`enterDateTime`)) >= 5) AS THCOL                                          
                               FROM `cat_states` cs
                               where cs.`cat_code` like '%".$getSRCRIdVal."%'
                          ) MIS";
       // echo $sql_getReport;
        $q_getScat = mysqli_query($conn,$sql_getReport);
        //$rowcount=mysqli_num_rows($q_getScat);
        echo "<table border='1' cellpadding='0' cellspacing='0' id='myTable'  style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px; margin-left: 20px;'>";
        echo "<tr style='background-color: #BEBABA;'>";
        echo "<td style='width:60px;text-align: right;'><span style='margin-right: 5px;'>Category</span></td>";
        echo "<td style='width:200px;text-align: left;'><span style='margin-left: 5px;'>#</span></td>";
        echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>Open Balance</span></td>";
        echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>New SR</span></td>";
        echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>Closed SR</span></td>";
        echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>Pending SR</span></td>";
        echo "<td style='width:150px;text-align: right;' colspan='3'><span style='margin-right: 5px;'>Age Analysis</span></td>";
        echo "</tr>";
         echo "<tr style='background-color: #BEBABA;'>";
        echo "<td style='width:660px;text-align: right;' colspan='6'></td>";
        echo "<td style='width:50px;text-align: right;'><span style='margin-right: 5px;'>1 - 3</span></td>";
        echo "<td style='width:50px;text-align: right;'><span style='margin-right: 5px;'>4 - 5</span></td>";
        echo "<td style='width:50px;text-align: right;'><span style='margin-right: 5px;'>>5</span></td>";
        echo "</tr>";
        $index = 1;
        while($RES_getScat = mysqli_fetch_array($q_getScat)){
            $index++;
            if($index%2 == 1){
                $col = "#FFFFFF";
            }else{
                 $col = "#F2F2F2";
            }
            echo "<tr style='background-color:".$col."'>";
            echo "<td style='width:60px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[0]."</span></td>";
            echo "<td style='width:200px;text-align: left;'><span style='margin-left: 5px;'>".$RES_getScat[1]."</span></td>";
            echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[2]."</span></td>";
            echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[3]."</span></td>";
            echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[4]."</span></td>";
            echo "<td style='width:100px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[5]."</span></td>";
            echo "<td style='width:50px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[6]."</span></td>";
            echo "<td style='width:50px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[7]."</span></td>";
            echo "<td style='width:50px;text-align: right;'><span style='margin-right: 5px;'>".$RES_getScat[8]."</span></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
    function getCat_Discreption($catCode,$conn){
        $v_sql_getCategory = "SELECT `cat_discr` FROM `cat_states` WHERE `car_state` = '1' AND `cat_code` = '".$catCode."';";
        $que_getCategory = mysqli_query($conn,$v_sql_getCategory);
        while($RES_getCategory = mysqli_fetch_array($que_getCategory)){
            return $RES_getCategory[0];
        }
    }
    function getScat_discr_1_Descreption($catCode,$sCode1,$conn){
        $v_sql_getscat_code_1 = "SELECT `scat_discr_1` FROM `scat_01` WHERE `cat_code` = '".$catCode."' AND `scat_code_1` = '".$sCode1."';";
        $que_getscat_code_1 = mysqli_query($conn,$v_sql_getscat_code_1);
        while($RES_getscat_code_1 = mysqli_fetch_array($que_getscat_code_1)){
            return $RES_getscat_code_1[0];
        }
    }
    function getScat_discr_2_Descreption($catCode,$sCode1,$sCode2,$conn){
        $v_sql_getscat_code_2 = "SELECT `scat_discr_2` FROM `scat_02` WHERE `cat_code` = '".$catCode."' AND `scat_code_1` = '".$sCode1."' AND `scat_code_2` = '".$sCode2."';";
        $que_getscat_code_2 = mysqli_query($conn,$v_sql_getscat_code_2);
        while($RES_getscat_code_2 = mysqli_fetch_array($que_getscat_code_2)){
               return $RES_getscat_code_2[0];
        }
    }
    function getScat_discr_3_Descreption($catCode,$sCode1,$sCode2,$sCode3,$conn){
        
         $v_sql_getscat_code_3 = "SELECT `scat_discr_3` FROM `scat_03` WHERE `cat_code` = '".$catCode."' AND `scat_code_1` = '".$sCode1."' AND `scat_code_2` = '".$sCode2."' AND `scat_code_3` = '".$sCode3."';";
        $que_getscat_code_3 = mysqli_query($conn,$v_sql_getscat_code_3);
        while($RES_getscat_code_3 = mysqli_fetch_array($que_getscat_code_3)){
               return $RES_getscat_code_3[0];
        }
    }
    function getStates($cmdCode,$conn){
        $v_sql_States = "SELECT `cmb_discr` FROM `cmb_states` WHERE `cmb_code` = '$cmdCode';";
        $que_getStates = mysqli_query($conn,$v_sql_States);
        while($RES_getStates = mysqli_fetch_array($que_getStates)){
            return $RES_getStates[0];
        }
    }
    function getUrgency_states($ur_state,$conn){
         $v_sql_Urgency = "SELECT `ur_discr` FROM `urgency_states` WHERE `ur_code` = '".$ur_state."';";
         $que_getUrgency = mysqli_query($conn,$v_sql_Urgency);
         while($RES_getUrgency = mysqli_fetch_array($que_getUrgency)){
            return $RES_getUrgency[0];
         }
    }
    function getPriority_states($pr_code,$conn){
        $v_sql_Priority = "SELECT `pr_discr` FROM `priority_states` WHERE `pr_code` = '".$pr_code."';";
        $que_getPriority = mysqli_query($conn,$v_sql_Priority);
        while($RES_getPriority = mysqli_fetch_array($que_getPriority)){
            return $RES_getPriority[0];
        }
     }
     function  getSource_States($s_ID,$conn){
        $v_sql_Source = "SELECT `s_descript` FROM `cdb_soarce_of_issue` WHERE `s_type` = '".$s_ID."';";
        $que_getSource = mysqli_query($conn,$v_sql_Source);
        while($RES_getSource = mysqli_fetch_array($que_getSource)){
            return $RES_getSource[0];
        }
     }
     function getBranchName($getBranchID,$conn){
        $v_sql_getBranch = "SELECT `branchName` FROM `branch` WHERE `branchNumber` = '".$getBranchID."';";
        $que_getBranch = mysqli_query($conn,$v_sql_getBranch);
        while($RES_getBranch = mysqli_fetch_array($que_getBranch)){
            return $RES_getBranch[0];
        }
     }
     function getDepartment($getBranchID,$getDepartmnet,$conn){
        $v_sql_getDepartment = "SELECT `deparmentName` FROM `deparment` WHERE `deparmentNumber` = '".$getDepartmnet."' AND `branchNumber` = '".$getBranchID."';";
        $que_getDepartment = mysqli_query($conn,$v_sql_getDepartment);
        while($RES_getDepartment = mysqli_fetch_array($que_getDepartment)){
            return $RES_getDepartment[0];
        }
     } 
     function getUserName($userID,$conn){
        $v_sql_getUsreNAme = "SELECT `userID` FROM `user` WHERE `userName` =  '".$userID."';";
        $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
        while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
            return $RES_getUsreNAme[0];
        }
     }
     
     function getEntryUserBranch($entry_branch,$conn){
        $v_sql_getUsreBranch = "SELECT `branchName` FROM `branch` WHERE `branchNumber` = '".$entry_branch."';";
        $que_getUsreBranch = mysqli_query($conn,$v_sql_getUsreBranch);
        while($RES_getUsreBranch = mysqli_fetch_array($que_getUsreBranch)){
            return $RES_getUsreBranch[0];
        }
     }
     
     
     // ---------------------------------------------- Scan Pending will be called this function
     function getAjaxServiceRequsesList_helpID_SP($gethelpID,$getStClose){
        $conn = DatabaseConnection();
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."';";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            $userEmail = "";
            $userGSM = "";
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
            
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                </table>";
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Category :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_catagory' id='sel_catagory' value='".$v_sel_catagory."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat01' id='sel_scat01' value='".$v_sel_scat01."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />                 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat03' id='sel_scat03' value='".$v_sel_scat03."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Source' id='sel_Source' value='".$v_getSource."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:600px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." -- ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Attachment :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                            
                     echo   "</td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID'/> 
                                <input class='box_decaretion' type='text' style='width:500px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name'/>
                        </td>
                    </tr>
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:600px;'>Notes</td>
                                    <td style='width:100px;'>Enterd User</td>
                                    <td style='width:200px;'>Enterd On</td>
                                    <td style='width:30px;'></td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."';";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                            <td style='width: 600px; text-align: left;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value='".$REC_helpNote['note_discr']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 100px; text-align: left;'><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value='".$REC_helpNote['enterBy']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 150px; text-align: left;'><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value='".$REC_helpNote['enterDateTime']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width:30px;'>
                                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_c_n".$index."' id='txt_c_n".$index."' value='0' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                                            </td>
                                        </tr>";
                                    $index++;
                                }
                    echo "</table>
                        </td>
                    </tr>
                </table> <div style='display: none;'>
           <input type='text' name='row_COUNT' id='row_COUNT' value='".$index."' onKeyPress='return disableEnterKey(event)'/> 
        </div>";
                echo "<br/><br/>
                <fieldset>
                    <legend><label class='linetop'>Intermediate Contact:</label></legend>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Branch :</label><td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Branch' id='txt_Branch' value='".$v_getBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Department' id='txt_Department' value='".$v_getDepartment."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. User :</label><td>   
                            <td>
                                <input class='box_decaretion' type='text'  style='width:600px;' name='txt_inner_User2' id='txt_inn' value='".$vgetInnerUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Remark :</label><td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:50px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['inner_remark']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                         echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnUpdate' name='btnUpdate' value='Flag as Scanned' onclick='flagAsScanned();'/>";
                         echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageRef()'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        
                        echo "</td>
                    </tr>
                </table>
                ";
        }
        
        
    }
     // ----------------------------------------------
     
     function getAjaxServiceRequsesList_helpID_SP_sub($gethelpID,$getStClose){
        $conn = DatabaseConnection();
        $v_sql_getHelpdesk = "SELECT `helpid`, `cat_code`, `scat_code_1`, `scat_code_2`, `cmb_code`, `ur_code`, `pr_code`, `issue`, `help_discr`, `enterBy`, DATE(`enterDateTime`) AS dd, `attachment_name`, `inner_brCode`, `inner_dept`, `inner_user`, `inner_remark`, `inner_get`, `entry_branch`, `entry_department`, `s_type`, `scat_code_3`,`asing_by`,`ipAddress`
                                FROM `cdb_helpdesk` 
                                WHERE `helpid` = '".$gethelpID."';";
        $v_que_getHelpdesk = mysqli_query($conn,$v_sql_getHelpdesk);
        while($rec_getHelpdesk = mysqli_fetch_assoc($v_que_getHelpdesk)){
            $v_sel_catagory = getCat_Discreption($rec_getHelpdesk['cat_code'],$conn); // Get Cat Discreeption........
            $v_sel_scat01 = getScat_discr_1_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$conn); // Get Scat Descreption...........
            $v_sel_scat02 = getScat_discr_2_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$conn); // Get SCat Descrepion...........
            $v_sel_scat03 = getScat_discr_3_Descreption($rec_getHelpdesk['cat_code'],$rec_getHelpdesk['scat_code_1'],$rec_getHelpdesk['scat_code_2'],$rec_getHelpdesk['scat_code_3'],$conn); // Get SCat Descrepion...........
            $v_getStates =  getStates($rec_getHelpdesk['cmb_code'],$conn); // Get Satates Description...............................
            $v_getUrCode = getUrgency_states($rec_getHelpdesk['ur_code'],$conn); // Get Urgency States Descreption...........................
            $v_getPrCode = getPriority_states($rec_getHelpdesk['pr_code'],$conn); // Get Uriority States Descreption................................
            $v_getSource = getSource_States($rec_getHelpdesk['s_type'],$conn); // GetSource Of Issue...............................................
            $v_getBranch = getBranchName($rec_getHelpdesk['inner_brCode'],$conn); // Get Branch Name..............................................
            $v_getDepartment = getDepartment($rec_getHelpdesk['inner_brCode'],$rec_getHelpdesk['inner_dept'],$conn); // Get Department
            $vgetInnerUser = getUserName($rec_getHelpdesk['inner_user'],$conn); // Get Inner Usre Name
            $v_getRnterUsre = getUserName($rec_getHelpdesk['enterBy'],$conn); // Get Enter Usre Name
            $vAsingUser = getUserName($rec_getHelpdesk['asing_by'],$conn); // Get Assign Usre Name
            $v_sql_getUsreNAme = "SELECT `email`,`GSMNO` FROM `user` WHERE `userName` =  '".$rec_getHelpdesk['enterBy']."';";
            $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
            $userEmail = "";
            $userGSM = "";
            while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
               $userEmail = $RES_getUsreNAme[0];
               $userGSM = $RES_getUsreNAme[1]; 
            }
            
            
            //echo "getAjaxServiceRequsesList_helpID_SP_sub";

            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Help ID :</label></td>
                        <td>
                            <input class='box_decaretion' type='text' name='txt_help_ID' id='txt_help_ID' value='".$rec_getHelpdesk['helpid']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Entry Date :</label></td>
                        <td>
                            <input class='box_decaretion' type='text' name='txt_Entry_Date' id='txt_Entry_Date' value='".$rec_getHelpdesk['dd']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                        </td>
                    </tr>
                </table>";
            echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Category :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_catagory' id='sel_catagory' value='".$v_sel_catagory."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' /> 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat01' id='sel_scat01' value='".$v_sel_scat01."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />                 
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat02' id='sel_scat02' value='".$v_sel_scat02."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_scat03' id='sel_scat03' value='".$v_sel_scat03."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly' />      
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Issue :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:400px;' name='txt_issue' id='txt_issue' value='".$rec_getHelpdesk['issue']."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right; vertical-align: top;'><label class='linetop'>Description :</label></td>
                        <td>
                            <textarea class='box_decaretion' cols='47' rows='4' style='height:100px; width: 400px;' name='txt_Description' id='txt_Description' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['help_discr']."</textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>States :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_States' id='sel_States' value='".$v_getStates."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Urgency :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Urgency' id='sel_Urgency' value='".$v_getUrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Priority :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Priority' id='sel_Priority' value='".$v_getPrCode."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Source of Iss. :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:200px;' name='sel_Source' id='sel_Source' value='".$v_getSource."' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'/>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Enterd User :</label></td>
                        <td>
                            <input class='box_decaretion' type='text'  style='width:600px;' name='txt_User' id='txt_User' value='".$rec_getHelpdesk['enterBy']." -- ".$v_getRnterUsre." - ".$userGSM." - ".$userEmail ." - ".$rec_getHelpdesk['ipAddress']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_UserGetMail' id='txt_UserGetMail' value='".$rec_getHelpdesk['enterBy']."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                        </td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Attachment :</label></td>
                        <td>";
                        if($rec_getHelpdesk['attachment_name'] !=""){
                          echo "<a href='../../../uploadHelpdesk/".$rec_getHelpdesk['attachment_name']."' target='_blank'>GET Attachment</a>";
                        }else{
                            
                        }
                            
                     echo   "</td>
                    </tr>
                    <tr>
                        <td style='width: 100px; text-align: right;'><label class='linetop'>Assign User :</label></td>
                        <td>
                                <input class='box_decaretion' type='text' style='width:100px; color: #747474; background: #F2F2F2;' name='txt_inner_User1' id='txt_inner_User1' value='".$rec_getHelpdesk['asing_by']."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User ID'/> 
                                <input class='box_decaretion' type='text' style='width:500px; color: #747474; background: #F2F2F2;' name='txt_inner_User2' id='txt_inner_User2' value='".$vAsingUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly' placeholder='User Name'/>
                        </td>
                    </tr>
                </table>";
                echo "<table>
                    <tr>
                        <td style='width: 100px; text-align: right;vertical-align: top;'><label class='linetop'>Note :</label></td>
                        <td>
                            <table border='1' id='myTable' style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:12px;'>
                                <tr style='background-color: #BEBABA;'>
                                    <td style='width:50px;'>#</td>
                                    <td style='width:600px;'>Notes</td>
                                    <td style='width:100px;'>Enterd User</td>
                                    <td style='width:200px;'>Enterd On</td>
                                    <td style='width:30px;'></td>
                                </tr>";
                                $v_Sql_helpNote = "SELECT `note_discr`,`enterBy`,`enterDateTime` FROM `cdb_help_note` WHERE `helpid` = '".$gethelpID."' ORDER BY `cdb_help_note`.`enterDateTime`;";
                                $que_helpNote = mysqli_query($conn,$v_Sql_helpNote);
                                $index = 1;
                                while($REC_helpNote = mysqli_fetch_assoc($que_helpNote)){  
                                    echo "<tr style='background:#FFFFFF;'>
                                            <td style='width: 50px; text-align: right;'><input style='width:50px; text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$index."'  onKeyPress='return disableEnterKey(event)' readonly='readonly'/></td>
                                            <td style='width: 600px; text-align: left;'><input style='width:600px;' type='text' name='txtb".$index."' id='txtb".$index."' value='".$REC_helpNote['note_discr']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 100px; text-align: left;'><input style='width:100px;' type='text' name='txtUse".$index."' id='txtUse".$index."' value='".$REC_helpNote['enterBy']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width: 150px; text-align: left;'><input style='width:150px;' type='text' name='txtOn".$index."' id='txtOn".$index."' value='".$REC_helpNote['enterDateTime']."'  onKeyPress='return disableEnterKey(event)' readonly='readonly' /></td>
                                            <td style='width:30px;'>
                                            <div style='display: none;'><input class='box_decaretion' type='text' name='txt_c_n".$index."' id='txt_c_n".$index."' value='0' onKeyPress='return disableEnterKey(event)' readonly='readonly'/></div>
                                            </td>
                                        </tr>";
                                    $index++;
                                }
                    echo "</table>
                        </td>
                    </tr>
                </table> <div style='display: none;'>
           <input type='text' name='row_COUNT' id='row_COUNT' value='".$index."' onKeyPress='return disableEnterKey(event)'/> 
        </div>";
                echo "<br/><br/>
                <fieldset>
                    <legend><label class='linetop'>Intermediate Contact:</label></legend>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Branch :</label><td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Branch' id='txt_Branch' value='".$v_getBranch."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                            <td>
                                <input class='box_decaretion' type='text'  style='width:200px;' name='txt_Department' id='txt_Department' value='".$v_getDepartment."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. User :</label><td>   
                            <td>
                                <input class='box_decaretion' type='text'  style='width:600px;' name='txt_inner_User2' id='txt_inn' value='".$vgetInnerUser."' onKeyPress='return disableEnterKey(event)' readonly='readonly'/>
                            </td>
                        </tr>
                        <tr>
                            <td style='width: 93px; text-align: right; vertical-align: top;'><label class='linetop'>Inter. Remark :</label><td>   
                            <td>
                                <textarea class='box_decaretion' cols='47' rows='4' style='height:50px; width: 400px;' name='inner_Remark' id='inner_Remark' onKeyPress='return disableEnterKey(event)'  onfocus='hilightColoyr(this.id)' onblur='colourLeave(this.id)' readonly='readonly'>".$rec_getHelpdesk['inner_remark']."</textarea>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <table>
                    <tr>
                        <td style='width: 100px;'>&nbsp;</td>
                        <td>";
                         
                         echo "<input type='button' style='width: 100px;' class='buttonManage' id='btnClose' name='btnClose' value='Close' onclick='pageRef()'/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        
                        echo "</td>
                    </tr>
                </table>
                ";
        }
     }
     
function getNewCompliedDataGrid_informetion($get_cnic,$getscat2){
    $conn = DatabaseConnection();
	echo "<span style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:11px;'><B>Sort</B> : Facility creation date time descending </span>";
    echo "<table border='1' cellpadding='0' cellspacing='0' id='myTable'  style='background:#FFFFFF;text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:11px;'>
            <tr style='background-color: #BEBABA; font-size: 11; font-weight: bold;'>
                <td style='width:60px;text-align: right;'><span style='margin-right: 5px;'>Help ID</span></td>
                <td style='width:70px;text-align: right;'><span style='margin-right: 5px;'>Entry Date</span></td>
                <td style='width:100px;text-align: left;'><span style='margin-left: 5px;'>File Type</span></td>
                <td style='width:120px;text-align: right;'><span style='margin-right: 5px;'>Facility Amount</span></td>
                <td style='width:260px;text-align: left;'><span style='margin-left: 5px;'>Client Information</span></td>
                <td style='width:150px;text-align: left;'><span style='margin-left: 5px;'>Branch</span></td>
                <td style='width:200px;text-align: left;'><span style='margin-left: 5px;'>Type</span></td>
                <td style='width:70px;text-align: right;'><span style='margin-right: 5px;'>Enter By</span></td>
                <td style='width:70px;text-align: right;'><span style='margin-right: 5px;'>Assigned User</span></td>
				<td style='width:70px;text-align: right;'><span style='margin-right: 5px;'>Facility No</span></td>
				<td style='width:70px;text-align: right;'><span style='margin-right: 5px;'>Closed Date</span></td>
                <td style='width:50px;'></td>
            </tr>";
if($get_cnic != "" && $getscat2 != ""){
     $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`,`cdb_helpdesk`.`scat_code_2`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` , `cdb_helpdesk`.`asing_by` , `cdb_helpdesk`.`cat_code` , `cdb_helpdesk`.`ssb_facility_amount` , `cdb_helpdesk`.`ssb_type`,`cdb_helpdesk`.`help_discr`,IF(`cdb_helpdesk`.`ssb_app_number` = '', 4, `cdb_helpdesk`.`IsAppValid`) as validapp,`cdb_helpdesk`.`ssb_app_number`,`cdb_helpdesk`.`facno`,`cdb_helpdesk`.`caloser_dateTime`,DATE(`cdb_helpdesk`.`caloser_dateTime`) = DATE(NOW()) AS is_old
     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`
     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
           `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
           `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
           `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
           `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
           `cdb_helpdesk`.`cmb_code` = '5002' AND
           `cdb_helpdesk`.`issue` like  '%".$get_cnic."%' AND
           `cdb_helpdesk`.`scat_code_2` like '%".$getscat2."%'
           ORDER BY (`cdb_helpdesk`.`caloser_dateTime`) DESC;"; //enterDateTime
}else if($get_cnic != "" && $getscat2 == ""){
    $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`,`cdb_helpdesk`.`scat_code_2`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` , `cdb_helpdesk`.`asing_by` , `cdb_helpdesk`.`cat_code` , `cdb_helpdesk`.`ssb_facility_amount` , `cdb_helpdesk`.`ssb_type`,`cdb_helpdesk`.`help_discr`,IF(`cdb_helpdesk`.`ssb_app_number` = '', 4, `cdb_helpdesk`.`IsAppValid`) as validapp,`cdb_helpdesk`.`ssb_app_number`,`cdb_helpdesk`.`facno`,`cdb_helpdesk`.`caloser_dateTime`,DATE(`cdb_helpdesk`.`caloser_dateTime`) = DATE(NOW()) AS is_old
     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`
     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
           `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
           `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
           `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
           `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
           `cdb_helpdesk`.`cmb_code` = '5002' AND
           `cdb_helpdesk`.`issue` like  '%".$get_cnic."%'
           ORDER BY (`cdb_helpdesk`.`caloser_dateTime`) DESC;";
}else if($get_cnic == "" && $getscat2 != ""){
    $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`,`cdb_helpdesk`.`scat_code_2`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` , `cdb_helpdesk`.`asing_by` , `cdb_helpdesk`.`cat_code` , `cdb_helpdesk`.`ssb_facility_amount` , `cdb_helpdesk`.`ssb_type`,`cdb_helpdesk`.`help_discr`,IF(`cdb_helpdesk`.`ssb_app_number` = '', 4, `cdb_helpdesk`.`IsAppValid`) as validapp,`cdb_helpdesk`.`ssb_app_number`,`cdb_helpdesk`.`facno`,`cdb_helpdesk`.`caloser_dateTime`,DATE(`cdb_helpdesk`.`caloser_dateTime`) = DATE(NOW()) AS is_old
     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`
     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
           `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
           `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
           `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
           `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
           `cdb_helpdesk`.`cmb_code` = '5002' AND
           `cdb_helpdesk`.`scat_code_2` like '%".$getscat2."%'
           ORDER BY (`cdb_helpdesk`.`caloser_dateTime`) DESC;";
}else{
    $v_sql_det_detels = "SELECT `cdb_helpdesk`.`helpid` , DATE(`cdb_helpdesk`.`enterDateTime`), `cdb_helpdesk`.`issue`,`cdb_helpdesk`.`scat_code_2`, `branch`.`branchName`, `deparment`.`deparmentName`, `cdb_helpdesk`.`enterBy`, `urgency_states`.`ur_discr`, `priority_states`.`pr_discr` , `cdb_helpdesk`.`asing_by` , `cdb_helpdesk`.`cat_code` , `cdb_helpdesk`.`ssb_facility_amount` , `cdb_helpdesk`.`ssb_type`,`cdb_helpdesk`.`help_discr`,IF(`cdb_helpdesk`.`ssb_app_number` = '', 4, `cdb_helpdesk`.`IsAppValid`) as validapp,`cdb_helpdesk`.`ssb_app_number`,`cdb_helpdesk`.`facno`,`cdb_helpdesk`.`caloser_dateTime`,DATE(`cdb_helpdesk`.`caloser_dateTime`) = DATE(NOW()) AS is_old
     FROM `cdb_helpdesk`, `urgency_states`, `priority_states`, `cmb_states`, `branch`, `deparment`
     WHERE `cdb_helpdesk`.`ur_code` = `urgency_states`.`ur_code` AND
           `cdb_helpdesk`.`pr_code` = `priority_states`.`pr_code` AND
           `cdb_helpdesk`.`cmb_code` = `cmb_states`.`cmb_code` AND
           `cdb_helpdesk`.`entry_branch` = `branch`.`branchNumber`AND
           `cdb_helpdesk`.`entry_department` = `deparment`.`deparmentNumber` AND
           `cdb_helpdesk`.`cmb_code` = '5002' AND
           `cdb_helpdesk`.`issue` like  '%".$get_cnic."%' AND
           `cdb_helpdesk`.`scat_code_2` like '%".$getscat2."%'
           ORDER BY (`cdb_helpdesk`.`caloser_dateTime`) DESC;";
}

       
 
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
        // if ($_SESSION['user'] == $rec_det_detels[9]){
        if ($rec_det_detels[18]){
           $MyRow = "background-color:#E6FFFA;";
        }
        echo "<tr style='color: ".$col.";'>";
        echo "<td style='width:60px;text-align: right;".$MyRow .";color: ".$f_Col.";' title ='".$rec_det_detels[17]."'><div style='display: none;'><input style='width:60px;color:#999999;text-align: right;' type='text' name='txta".$index."' id='txta".$index."' value='".$rec_det_detels[0]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-left: 2px;'>".$rec_det_detels[0]."</span></td>";
        echo "<td style='width:70px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".$rec_det_detels[1]."</span></td>";
        echo "<td style='width:100px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".scat02gen($conn,$rec_det_detels[3])."</span></td>";
        echo "<td style='width:120px;text-align: right;".$MyRow ."'><span style='margin-right: 2px;'>".number_format($rec_det_detels[11], 2)."</span></td>";
        echo "<td style='width:260px;text-align: left;".$MyRow ."' title='".$rec_det_detels[13]."'><span style='margin-left: 2px;'>".$rec_det_detels[2]."</span></td>"; 
        echo "<td style='width:150px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[4]."</span></td>";
        echo "<td style='width:200px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[12]."</span></td>";
        echo "<td style='width:100px;text-align: right;".$MyRow ."' title = '".$entryBy."'><div style='display: none;'><input type='text' name='txtx".$index."' id='txtx".$index."' value='".$rec_det_detels[6]."'  onKeyPress='return disableEnterKey(event)'/></div><span style='margin-right: 2px;'>".$rec_det_detels[6]."</span></td>";
        /*echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[7]."</span></td>";
        echo "<td style='width:80px;text-align: left;".$MyRow ."'><span style='margin-left: 2px;'>".$rec_det_detels[8]."</span></td>";*/
        echo "<td style='width:70px;text-align: right;".$MyRow ."' title = '".$asingBy."'><span style='margin-right: 2px;'>".$rec_det_detels[9]."</span></td>";
        /*Rizvi*/        
        echo "<td style='width:40px;text-align: left;'><span style='margin-left: 5px;'>".$rec_det_detels[16]."</span></td>";
        echo "<td style='width:40px;text-align: left;'><span style='margin-left: 5px;'>".$rec_det_detels[17]."</span></td>";		
        echo "<td style='width:50px;'><input type='button' class='buttonManage' id='btn_Validate' name='btn_Validate' value='...' title='txta".$index."' onclick='clientValidate(title,".$rec_det_detels[10].");'/></td>";
        echo "</tr>";
    }
    echo "</table>";
    //echo $v_sql_det_detels;
}
function getUserNameGenaral_Mob_Eml($user,$conn){
        //return $user;
        $v_sql_getUsreNAme = "SELECT `userID` , `GSMNO` , `email` FROM `user` WHERE `userName` =  '".$user."';";
        $que_getUsreNAme = mysqli_query($conn,$v_sql_getUsreNAme);
        while($RES_getUsreNAme = mysqli_fetch_array($que_getUsreNAme)){
            return $RES_getUsreNAme[0]."\n".$RES_getUsreNAme[1]."\n".$RES_getUsreNAme[2];
        }
}

function scat02gen($conn,$scat2){
    $sql_load = "SELECT s2.scat_discr_2 FROM scat_02 AS s2 WHERE s2.scat_code_2 = '".$scat2."';";
     $que_load = mysqli_query($conn , $sql_load) or die(mysqli_error($conn));
     while($rec_load = mysqli_fetch_array($que_load)){
        return $rec_load[0];
     }
}
?>
