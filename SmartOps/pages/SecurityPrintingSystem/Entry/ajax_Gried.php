<?php
function DatabaseConnection(){
    $conn = mysqli_connect("localhost","root","1234","cdberp");
    return $conn;
}
if(isset($_REQUEST['sr_gried'])){
        serviceRequsestMaual_Gried_POPUP_1();
}if(isset($_REQUEST['srm_gried'])){
        serviceRequsestMaual_Manual_Gried_POPUP_2();
}
function serviceRequsestMaual_Gried_POPUP_1(){
    $conn = DatabaseConnection();
    echo "<div id='outer'></div>";
    echo "<div id='conten'>";
    echo "<div style='width: 100%; height: 30px;'><img src='../../../img/Close-Button.png' onclick='popup(0);' /></div>";
    echo "<div style='width: 100%;'>";
    echo "Search User name : <input class='box_decaretion' style='width:200px; background-color:#E0E0E0;' type='text' name='popupsearch' id='popupsearch' value='' onKeyPress='return disableEnterKey(event)'/> 
                            <input class='buttonManage' type='button' value='Search' id='popupSearchBTN' name='popupSearchBTN' onclick='fileSelect()' />
                            <div style='display:none;'>
                                <input style='width:100px;' type='text' name='tx' id='tx' value=''  onKeyPress='return disableEnterKey(event)'/>
                                <input style='width:100px;' type='text' name='ty' id='ty' value=''  onKeyPress='return disableEnterKey(event)'/>
                            </div>
                            <br/>
                            <br/>
                            <div id='getNewtblPopup'>";
                            $viewDoc = "SELECT `userName`,`userID` FROM `user`";
                            $sql_viewDoc = mysqli_query($conn,$viewDoc);
                            echo "<table class='tbl1' border='1'>
                                    <tr>
                                        <td style='text-align:center; padding-top:5px; padding-bottom:5; width:100px;'>User Number</td>
                                        <td style='text-align:center; padding-top:5px; padding-bottom:5;width:300px;'>User Name</td>
                                        <td style='text-align:center; padding-top:5px; padding-bottom:5;width:50px;'>Access</td>
                                      </tr>";
                            $a = 1 ;
                            while ($add = mysqli_fetch_array($sql_viewDoc)){
                                    echo "<tr style='background-color:#FFFFFF;'>";
                                    echo "<td style='width:100px;'>
                                          <input style='width:100px;' type='text' name='txt1".$a."' id='txt1".$a."' value='".$add[0]."' readonly='readonly'/></td>";
                                    echo "<td style='width:300px;'>
                                          <input style='width:300px;' type='text' name='txt2".$a."' id='txt2".$a."' value='".$add[1]."' readonly='readonly'/></td>";
                                    echo "<td style='width:50px;'>";
                                    echo "<input style='font-size: 12px;' type='button' id='btnselect".$a."' name='btnselect".$a."' value='Select' title=".$a." onclick='selectDB(title);popup(0);'/>";
                                    echo "</td>";
                                    echo "</tr>";
                                    $a++;
                            }
               echo "</table></div></div></div>";
}

function serviceRequsestMaual_Manual_Gried_POPUP_2(){
    $conn = DatabaseConnection();
    echo "<div id='outersub'></div>";
    echo "<div id='contensub'>
            <div style='width: 100%; height: 30px;'><img src='../../../img/Close-Button.png' onclick='popupsub(0);'/></div>
            <div style='width: 100%;'>
                Search User name : <input class='box_decaretion' style='width:200px; background-color:#E0E0E0;' type='text' name='popupsearchsub' id='popupsearchsub' value='' onKeyPress='return disableEnterKey(event)'/> 
                                    <input class='buttonManage' type='button' value='Search' id='popupSearchBTNsub' name='popupSearchBTNsub' onclick='fileSelectsub()' />
                <div style='display:none;'>
                    <input style='width:100px;' type='text' name='txsub' id='txsub' value=''  onKeyPress='return disableEnterKey(event)'/>
                    <input style='width:100px;' type='text' name='tysub' id='tysub' value=''  onKeyPress='return disableEnterKey(event)'/>
                </div>
        <br/>
        <br/>
        <div id='getNewtblPopupsub'>";
        $viewDocsub = "SELECT `user`.`userName`, `user`.`userID`, `user`.`branchNumber`, `branch`.`branchName`, `user`.`deparmentNumber`, `deparment`.`deparmentName`
                        FROM `user`, `branch`, `deparment` 
                        WHERE `user`.`branchNumber` = `branch`.`branchNumber` AND
                        	`user`.`deparmentNumber` = `deparment`.`deparmentNumber`";
        $sql_viewDocsub = mysqli_query($conn,$viewDocsub);
        echo "<table class='tbl1' border='1'>
              <tr>
                <td style='text-align:center; padding-top:5px; padding-bottom:5; width:100px;'>User Number</td>
                <td style='text-align:center; padding-top:5px; padding-bottom:5;width:300px;'>User Name</td>
                <td style='text-align:center; padding-top:5px; padding-bottom:5;width:100px;'>Access</td>
              </tr>";
                    $a = 1 ;
                    while ($addsub = mysqli_fetch_array($sql_viewDocsub)){
                        echo "<tr style='background-color:#FFFFFF;'>";
                        echo "<td style='width:100px;'>
                              <input style='width:100px;' type='text' name='txt1sub".$a."' id='txt1sub".$a."' value='".$addsub[0]."' readonly='readonly'/></td>";
                        echo "<td style='width:300px;'>
                              <input style='width:300px;' type='text' name='txt2sub".$a."' id='txt2sub".$a."' value='".$addsub[1]."' readonly='readonly'/>
                              <div style='display:none;'>
                                <input style='width:200px;' type='text' name='txt3sub".$a."' id='txt3sub".$a."' value='".$addsub[2]."' readonly='readonly'/>
                                <input style='width:200px;' type='text' name='txt4sub".$a."' id='txt4sub".$a."' value='".$addsub[3]."' readonly='readonly'/>
                                <input style='width:200px;' type='text' name='txt5sub".$a."' id='txt5sub".$a."' value='".$addsub[4]."' readonly='readonly'/>
                                <input style='width:200px;' type='text' name='txt6sub".$a."' id='txt6sub".$a."' value='".$addsub[5]."' readonly='readonly'/>
                              </div>
                              </td>";
                        echo "<td style='width:50px;'>";
                        echo "<input style='font-size: 12px;' type='button' id='btnselectsub".$a."' name='btnselectsub".$a."' value='Select' title='".$a."' onclick='selectDBsub(title);popupsub(0);'/>";
                        echo "</td>";
                        echo "</tr>";
                        $a++;
                    }
			echo "</table></div></div></div>";
    
}
    
?>