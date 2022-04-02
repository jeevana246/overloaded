<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
    <script>
            function fn()
            {
               
                var t1 = document.getElementById("test");
                t1.style.display = testtaken.checked ? "block" : "none";
            }
        </script>
</head>
<body>
    
<div class="container">
        <div class="header">
        <table>
        <form action="connect.php" method="post" class="form" id="form">
        <div class="form-control ">
            <tr>
                <td>
          <label for="pid" >User ID</label></td>
          <td><input id="pid" name="pid" type= "text" placeholder="User ID"></td>
</tr>
            <tr>
                <td>
          <label for="hname" >Hospital Name</label>
</td>
          <td><input id="hname" name="hname" type= "text" placeholder="Hospital Name"><td></tr>
          

          <tr>
          <td><label for="hadd" >Hospital Address</label></td>
          <td><input id="hadd" name="hadd" type= "text" placeholder="Hospital Address"></td></td>
</tr>
<tr>
          
          <td><label for="reason">Reason for visit</label></td>
          <td><input id="hadd" name="reason" type= "text" placeholder="Reason"></td>
</tr>
          
          <tr>
          <td><label for="weight">WEIGHT</label></td>
          <td><input id="WEIGHT"
          name="weight" type= "number" placeholder="Enter your weight"></td>
</tr>

          <tr><td>
          <label for="pressure">BLOODPRESSURE</label></td>
          <td><input id="bloodpressure"
          name="bp" type= "number" placeholder="Enter your bp"></td> 
          <tr><td><br><br>
          <label for="testtaken" >TEST TAKEN</label></td>
          <td><input onclick="fn()" type="checkbox" id="testtaken" name="testtaken" value="yes">
          
          <div id="test" style="display:none;">
                <table>
                    <tr><td><label for="rbc">Red blood cells</label></td>
                        <td><input type="text" name="rbc"/></td></tr>
                    <tr><td><label for="wbc">White blood cells</label></td>
                        <td><input type="text" name="wbc"/></td></tr>
                    <tr><td><label for="platelets">Platelets</label></td>
                        <td><input type="text" name="platelets"/></td></tr>
                    <tr><td><label for="hemoglobin">Hemoglobin</label></td>
                        <td><input type="text" name="hemoglobin"/></td></tr>
                    <tr><td><label for="elec">Sodium,Potassium,Magnesium,Chloide levels(comma seperated)</label></td>
                        <td><input type="text" name="elec"/></td></tr>
                    <tr><td><label for="liver">Albumin,ALP,ALT,AST,Bilirubin (comma seperated)</label></td>
                        <td><input type="text" name="rbc"/></td></tr>
                    <tr><td><label for="thyroid">T3, T4, TSH (comma seperated)</label></td>
                        <td><input type="text" name="thyroid"/></td></tr>
                    <tr><td><label for="diab">Diabetes - FPG, PMBG, HbA1c (comma seperated)</label></td>
                        <td><input type="text" name="diab"/></td></tr>
                    <tr><td><label for="nut">Test for essential nutrients</label></td>
                        <td><input type="text" name="nut"/></td></tr>
                    <tr><td><label for="infla">CRP</label></td>
                        <td><input type="text" name="infla"/></td></tr>
                    <tr><td><label for="coag">PT, INR (comma seperated)</label></td>
                        <td><input type="text" name="coag"/></td></tr>
                    <tr><td><label for="others">Other test name comma seperated</label></td>
                        <td><input type="text" name="others"/></td></tr>

                    
        </table>
</div>
            
          <tr><td>
          <label for="scan_taken" >SCAN TAKEN</label></td>
          <td><input type="checkbox" id="scan_taken" name="scan_taken" value="yes"></td>
</tr>
          <tr><td>
          <label for="xray_taken" >XRAY TAKEN</label></td>
          <td><input type="checkbox" id="xray_taken" name="xray_taken" value="yes"></td>
</tr>
          
          <tr>
          <td><label for="surgery">SURGERY DONE</label></td>
          <td><input id="surgery" name="surgery" type= "text" placeholder="yes"></td>
</tr>

<tr>
            <td><label for="diagnosis" >Diagnosis</label></td>
            <td><input id="disgnosis" name="diagnosis" type= "text" placeholder="Diagnosis"></td>
</tr>

         <tr>
            <td><label for="treatment" >TREATMENT GIVEN</label></td>
            <td><input id="treatment" name="treatment" type= "text" placeholder="Treatment"></td>
</tr>

            <tr>
                <td>
            <label for="prescription" >PRESCRIPTION GIVEN</label></td>
            <td><input id="prescription" name="prescription" type= "text" placeholder="Prescription">
</td></tr>
            
          
         <tr><td>
          <label for="Nextdate">Next Appointment</label></td><td>
          <input id="date" name="date" type= "date" placeholder="dd/mm/yyyy"></td>
</tr>
        
          
          
            
           

          <tr><td><input id="button"  type="submit"></td></tr>
          
        </form>
</table>
      </div>
</div>
</div>


     	

</body>
</html>