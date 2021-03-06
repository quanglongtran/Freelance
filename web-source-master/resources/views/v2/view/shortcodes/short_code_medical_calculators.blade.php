<?php
if(!function_exists('short_code_medical_calculators')){

function short_code_medical_calculators(){
	ob_start();
?>

<script language="JavaScript1.1" type="text/javascript">
/* <![CDATA[ */

function log(i){
return Math.log(i) * Math.LOG10E;   
}

function ln(i){
return Math.log(i);
}

function sq(i){
return i * i;
}

function sqr(i){
return Math.sqrt(i);
}

function power(x,y){
return Math.pow(x,y);
}

function eTo(x){
return Math.exp(x);
}

function fixDP(r, dps) {
if (isNaN(r)) return "NaN";
var msign = '';
if (r < 0) msign = '-';
x = Math.abs(r);
if (x > Math.pow(10, 21)) return msign + x.toString();
var m = Math.round(x * Math.pow(10, dps)).toString();
if (dps == 0) return msign + m;
while (m.length <= dps) m = "0" + m;
return msign + m.substring(0, m.length - dps) + "." + m.substring(m.length - dps);
}

function OneDecimalPoint(x){
return fixDP(x,1);
}

function TwoDecimalPoints(x){
return fixDP(x,2);
}

function alertNaN(thisparam){
 alert(thisparam + ' is improperly formatted. You may only input the digits 0-9 and a decimal point.');
doCalc = false;
clrResults();
}

function clrValue(field) {
field.value = '';
}

var currenttimeout;

function resetInTime(){
if (currenttimeout) clearTimeout(currenttimeout);
currenttimeout = setTimeout('minMaxCheck();', 3000);
}

var curelement;

function togCB(thisid){
thischeckbox = document.getElementById(thisid);
if (thischeckbox.checked){ thischeckbox.checked = false; }
else { thischeckbox.checked = true; }
CVRiskRevised2018_fx();
}

function setRB(thisid){
document.getElementById(thisid).checked = true;
CVRiskRevised2018_fx();
}

var calctxt = ''; 
var xmltxt = ''; 
var xmlresult = '';
var htmtxt = ''; 
var postNow = false;
var printing = false;
var interptxt = '';
var interphtm = '';
var interpxml = '';

function CVRiskRevised2018_fx() {

with(document.CVRiskRevised2018_form){

doCalc = true;
param_value = parseFloat(Age_param.value);
if (isNaN(param_value)){param_value = ""; doCalc = false;}
unit_parts = Age_unit.options[Age_unit.selectedIndex].value.split('|');
Age = param_value * parseFloat(unit_parts[0]) + parseFloat(unit_parts[1]);
rbchk = false;
if (Race_radio[0].checked){ rbchk = true; Race = 0;  }
if (Race_radio[1].checked){ rbchk = true; Race = 0;  }
if (Race_radio[2].checked){ rbchk = true; Race = 1;  }
if (Race_radio[3].checked){ rbchk = true; Race = 0;  }
if (Race_radio[4].checked){ rbchk = true; Race = 0;  }
if (!rbchk) doCalc = false;
rbchk = false;
if (Sex_radio[0].checked){ rbchk = true; Sex = 1;  }
if (Sex_radio[1].checked){ rbchk = true; Sex = 2;  }
if (!rbchk) doCalc = false;
param_value = parseFloat(Chol_param.value);
if (isNaN(param_value)){param_value = ""; doCalc = false;}
unit_parts = Chol_unit.options[Chol_unit.selectedIndex].value.split('|');
Chol = param_value * parseFloat(unit_parts[0]) + parseFloat(unit_parts[1]);
param_value = parseFloat(HDL_param.value);
if (isNaN(param_value)){param_value = ""; doCalc = false;}
unit_parts = HDL_unit.options[HDL_unit.selectedIndex].value.split('|');
HDL = param_value * parseFloat(unit_parts[0]) + parseFloat(unit_parts[1]);
param_value = parseFloat(SBP_param.value);
if (isNaN(param_value)){param_value = ""; doCalc = false;}
unit_parts = SBP_unit.options[SBP_unit.selectedIndex].value.split('|');
SBP = param_value * parseFloat(unit_parts[0]) + parseFloat(unit_parts[1]);
rbchk = false;
if (On_Hypertension_Med_radio[0].checked){ rbchk = true; On_Hypertension_Med = 0;  }
if (On_Hypertension_Med_radio[1].checked){ rbchk = true; On_Hypertension_Med = 1;  }
if (!rbchk) doCalc = false;
rbchk = false;
if (Diabetes_radio[0].checked){ rbchk = true; Diabetes = 0;  }
if (Diabetes_radio[1].checked){ rbchk = true; Diabetes = 1;  }
if (!rbchk) doCalc = false;
rbchk = false;
if (Smoker_radio[0].checked){ rbchk = true; Smoker = 0;  }
if (Smoker_radio[1].checked){ rbchk = true; Smoker = 1;  }
if (!rbchk) doCalc = false;
dp = decpts.options[decpts.selectedIndex].text;
Logit_Female =   -12.823110 +  (0.106501 * Age) +  (0.432440 * Race) +  (0.000056 * power(SBP, 2)) +  (0.017666 * SBP) +  (0.731678 * On_Hypertension_Med) +  (0.943970 * Diabetes) +  (1.009790 * Smoker) +  (0.151318 * (Chol / HDL)) +  (-0.008580 * Age * Race) +  (-0.003647 * SBP * On_Hypertension_Med) +  (0.006208 * SBP * Race) +  (0.152968 * Race * On_Hypertension_Med) +  (-0.000153 * Age * SBP) +  (0.115232 * Race * Diabetes) +  (-0.092231 * Race * Smoker) +  (0.070498 * Race * (Chol / HDL)) +  (-0.000173 * Race * SBP * On_Hypertension_Med) +  (-0.000094 * Age * SBP * Race);

Risk_Female =  100 / (1 + eTo(- Logit_Female));

Logit_Male =  -11.679980 +  (0.064200 * Age) +  (0.482835 * Race) +  (-0.000061 * power(SBP, 2)) +  (0.038950 * SBP) +  (2.055533 * On_Hypertension_Med) +  (0.842209 * Diabetes) +  (0.895589 * Smoker) +  (0.193307 * Chol / HDL) +  (-0.014207 * SBP * On_Hypertension_Med) +  (0.011609 * SBP * Race) +  (-0.119460 * On_Hypertension_Med * Race) +  (0.000025 * Age * SBP) +  (-0.077214 * Race * Diabetes) +  (-0.226771 * Race * Smoker) +  (-0.117749 * Race * Chol / HDL) +  (0.004190 * Race * On_Hypertension_Med * SBP) +  (-0.000199 * Race * Age * SBP);

Risk_Male =  100 / (1 + eTo(- Logit_Male));

Risk =  (Math.abs(Sex == 1) * Risk_Female) + (Math.abs(Sex == 2) * Risk_Male);

unit_parts = Risk_unit.options[Risk_unit.selectedIndex].value.split('|');
if (doCalc) Risk_param.value = fixDP((Risk - parseFloat(unit_parts[1])) / parseFloat(unit_parts[0]), dp);

}
}

function minMaxCheck(){
if (printing) return;

with(document.CVRiskRevised2018_form){

if (Age_param.value && isNaN(Age_param.value)){ clrValue(Age_param); alertNaN('Tu???i'); }
if (Age_param.value && (Age < (20 - 0.00001))) {
Age = 0;
clrValue(Age_param);
clrResults();
doCalc = false;
 alert("Gi?? tr??? t???i thi???u cho ????? tu???i l?? 20 tu???i. \nN???u b???n mu???n ch??? ?????nh gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
if (Age_param.value && Age > 79) {
clrValue(Age_param);
clrResults();
Age = 0;
doCalc = false;
 alert("Gi?? tr??? t???i ??a cho ????? tu???i l?? 79 tu???i. \nN???u b???n mu???n ch??? ?????nh gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
if (Chol_param.value && isNaN(Chol_param.value)){ clrValue(Chol_param); alertNaN('Colesterol total'); }
if (Chol_param.value && (Chol < (130 - 0.00001))) {
Chol = 0;
clrValue(Chol_param);
clrResults();
doCalc = false;
 alert("Gi?? tr??? t???i thi???u cho T???ng Cholesterol l?? 130 mg / dL. \n N???u b???n mu???n ch??? ?????nh m???t gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
if (Chol_param.value && Chol > 320) {
clrValue(Chol_param);
clrResults();
Chol = 0;
doCalc = false;
 alert("Gi?? tr??? t???i ??a cho T???ng Cholesterol l?? 320 mg / dL. \nN???u b???n mu???n ch??? ?????nh m???t gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
if (HDL_param.value && isNaN(HDL_param.value)){ clrValue(HDL_param); alertNaN('Colesterol HDL'); }
if (HDL_param.value && (HDL < (20 - 0.00001))) {
HDL = 0;
clrValue(HDL_param);
clrResults();
doCalc = false;
 alert("Gi?? tr??? t???i thi???u cho HDL Cholesterol l?? 20 mg / dL. \nN???u b???n mu???n ch??? ?????nh m???t gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
if (HDL_param.value && HDL > 100) {
clrValue(HDL_param);
clrResults();
HDL = 0;
doCalc = false;
 alert("Gi?? tr??? t???i ??a cho HDL Cholesterol l?? 100 mg / dL. \nN???u b???n mu???n ch??? ?????nh m???t gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
if (SBP_param.value && isNaN(SBP_param.value)){ clrValue(SBP_param); alertNaN('Presi??n arterial sist??lica'); }
if (SBP_param.value && (SBP < (90 - 0.00001))) {
SBP = 0;
clrValue(SBP_param);
clrResults();
doCalc = false;
 alert("Gi?? tr??? t???i thi???u c???a Huy???t ??p t??m thu l?? 90 mmHg. \nN???u b???n mu???n ch??? ?????nh m???t gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
if (SBP_param.value && SBP > 200) {
clrValue(SBP_param);
clrResults();
SBP = 0;
doCalc = false;
 alert("Gi?? tr??? t???i ??a c???a Huy???t ??p t??m thu l?? 200 mmHg. \nN???u b???n mu???n ch??? ?????nh m???t gi?? tr??? trong m???t ????n v??? kh??c, tr?????c ti??n h??y thay ?????i b??? ch???n ????n v???.");
}
}
}
function clrResults(){
with(document.CVRiskRevised2018_form){
Risk_param.value = '';
}
}
var Age = null,
Race = null,
Sex = null,
Chol = null,
HDL = null,
SBP = null,
On_Hypertension_Med = null,
Diabetes = null,
Smoker = null,
Logit_Female = null,
Risk_Female = null,
Logit_Male = null,
Risk_Male = null,
Risk = null,
param_value = null;

/* ]]> */
</script>

<style type="text/css">
	div#calc_main {
    background: #ebf3f4;
    padding: 10px;
}
</style>

<form name="CVRiskRevised2018_form" id="CVRiskRevised2018_form" action="" onsubmit="return false;" onkeydown="clrResults(); resetInTime();" onkeyup="CVRiskRevised2018_fx();">

<table width="100%" cellpadding="4" cellspacing="0" summary="EBMcalc Table">
<tbody><tr><td class="medCalcTitleBox" width="1%"><br></td>
<td class="medCalcTitleBox">
<span class="medCalcFontTitleBox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">

 
????nh gi?? r???i ro tim m???ch (c??c ph????ng tr??nh thu???n t???p t???ng h???p 10 n??m v?? s???a ?????i t??? n??m 2018)
</font></font></span></td></tr></tbody></table><br>&nbsp;<br>

<div id="calc_main">

<div id="calc_input">
<center>
<span class="medCalcFontIO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
D??? li???u
</font></font></span>
<br>&nbsp;<br>
<table cellpadding="3" cellspacing="0" summary="EBMcalc Table">
<tbody><tr><td align="right" width="42%"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tu???i</font></font></span> </td>
<td align="left" valign="top" nowrap="nowrap" width="5%">&nbsp; <input type="text" name="Age_param" size="6" value="" onblur="minMaxCheck(); CVRiskRevised2018_fx();" onchange="CVRiskRevised2018_fx();"></td>
<td align="left" valign="top"> <select name="Age_unit" onchange="CVRiskRevised2018_fx(); minMaxCheck();" style="width:115px;" class="medCalcFontSelect">
<option value="0.0833333333333333|0|mo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">th??ng</font></font></option>
<option value="1|0|yr" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">n??m</font></font></option>
</select></td></tr>

<tr><td align="right" valign="top"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M??u da</font></font></span></td>
<td colspan="2" align="left"><input type="radio" name="Race_radio" id="togel1" value="Amerindio o nativo de Alaska|0" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel1');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ng?????i M??? da ????? ho???c th??? d??n Alaska</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="Race_radio" id="togel2" value="Asi??tico|0" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel2');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ch??u ??</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="Race_radio" id="togel3" value="Negro o afroamericano|1" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel3');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ng?????i M??? da ??en ho???c ng?????i M??? g???c Phi</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="Race_radio" id="togel4" value="Nativo de Haw??i o de otras islas del Pac??fico|0" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel4');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> B???n ?????a Hawaii ho???c c??c c?? d??n tr??n ?????o Th??i B??nh D????ng kh??c</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="Race_radio" id="togel5" value="Blanco|0" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel5');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ng?????i Da tr???ng</font></font></span></td></tr>
<tr><td align="right" valign="top"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gi???i t??nh</font></font></span></td>
<td colspan="2" align="left"><input type="radio" name="Sex_radio" id="togel6" value="Mujer|1" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel6');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> N??? gi???i</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="Sex_radio" id="togel7" value="Hombre|2" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel7');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Nam gi???i</font></font></span></td></tr>
<tr><td align="right" width="42%"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T???ng l?????ng ch???t b??o</font></font></span> </td>
<td align="left" valign="top" nowrap="nowrap" width="5%">&nbsp; <input type="text" name="Chol_param" size="6" value="" onblur="minMaxCheck(); CVRiskRevised2018_fx();" onchange="CVRiskRevised2018_fx();"></td>
<td align="left" valign="top"> <select name="Chol_unit" onchange="CVRiskRevised2018_fx(); minMaxCheck();" style="width:115px;" class="medCalcFontSelect">
<option value="1|0|mg/dL_Chol" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mg / dL</font></font></option>
<option value="38.6697602474865|0|mmol/L_Chol"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mmol / L</font></font></option>
</select></td></tr>

<tr><td align="right" width="42%"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ch???t b??o</font></font></span> </td>
<td align="left" valign="top" nowrap="nowrap" width="5%">&nbsp; <input type="text" name="HDL_param" size="6" value="" onblur="minMaxCheck(); CVRiskRevised2018_fx();" onchange="CVRiskRevised2018_fx();"></td>
<td align="left" valign="top"> <select name="HDL_unit" onchange="CVRiskRevised2018_fx(); minMaxCheck();" style="width:115px;" class="medCalcFontSelect">
<option value="1|0|mg/dL_HDL" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mg / dL</font></font></option>
<option value="38.6697602474865|0|mmol/L_HDL"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mmol / L</font></font></option>
</select></td></tr>

<tr><td align="right" width="42%"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Huy???t ??p t??m thu</font></font></span> </td>
<td align="left" valign="top" nowrap="nowrap" width="5%">&nbsp; <input type="text" name="SBP_param" size="6" value="" onblur="minMaxCheck(); CVRiskRevised2018_fx();" onchange="CVRiskRevised2018_fx();"></td>
<td align="left" valign="top"> <select name="SBP_unit" onchange="CVRiskRevised2018_fx(); minMaxCheck();" style="width:115px;" class="medCalcFontSelect">
<option value="0.00750063755419211|0|Pascal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Pascal</font></font></option>
<option value="760.002100178515|0|atm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ATM</font></font></option>
<option value="750.063755419211|0|bar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Qu??n r?????u</font></font></option>
<option value="0.735561538478802|0|cmH2O"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cmH2O</font></font></option>
<option value="10|0|cmHg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cmHg</font></font></option>
<option value="22.4199156928339|0|ftH2O"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ftH2O</font></font></option>
<option value="0.735561538478802|0|gm/sqcm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">gm / sqcm</font></font></option>
<option value="1.86832630773616|0|inH2O"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">inH2O</font></font></option>
<option value="25.4000840071406|0|inHg"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">inHg</font></font></option>
<option value="7.50063755419211|0|kPa"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">kPa</font></font></option>
<option value="0.750063755419211|0|mbar"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mbar</font></font></option>
<option value="1|0|mmHg" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">mmHg</font></font></option>
<option value="51.7150957831416|0|psi"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">psi</font></font></option>
<option value="1|0|torr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">torr</font></font></option>
</select></td></tr>

<tr><td align="right" valign="top"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">D??ng thu???c t??ng huy???t ??p</font></font></span></td>
<td colspan="2" align="left"><input type="radio" name="On_Hypertension_Med_radio" id="togel8" value="No|0" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel8');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kh??ng</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="On_Hypertension_Med_radio" id="togel9" value="S??|1" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel9');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> C??</font></font></span></td></tr>
<tr><td align="right" valign="top"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B???nh ti???u ???????ng</font></font></span></td>
<td colspan="2" align="left"><input type="radio" name="Diabetes_radio" id="togel10" value="No|0" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel10');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kh??ng</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="Diabetes_radio" id="togel11" value="S??|1" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel11');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> C??</font></font></span></td></tr>
<tr><td align="right" valign="top"><span class="medCalcFontOneBold"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ng?????i h??t thu???c</font></font></span></td>
<td colspan="2" align="left"><input type="radio" name="Smoker_radio" id="togel12" value="No|0" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel12');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Kh??ng</font></font></span></td></tr>
<tr><td align="left"><br></td><td colspan="2" align="left"><input type="radio" name="Smoker_radio" id="togel13" value="S??|1" onclick="CVRiskRevised2018_fx();"><span class="medCalcFontOneClick" onclick="setRB('togel13');"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> C??</font></font></span></td></tr>

</tbody></table>

</center>

</div>
<br>&nbsp;<br>
<div id="calc_result">
<center><span class="medCalcFontIO"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">K???t qu???</font></font></span>

<br>&nbsp;<br>
<table summary="EBMcalc Table" class="medCalcResultBox" cellpadding="4">
<tbody><tr><td colspan="3">&nbsp;<br></td></tr>
<tr>
<td align="right"><span class="medCalcFontResultParam"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R???i ro 10 n??m</font></font></span></td>
<td valign="top" nowrap="nowrap">&nbsp; <input type="text" name="Risk_param" size="6" onfocus="blur();"></td>
<td valign="top" align="left"><span class="medCalcFontResultParam">
<select name="Risk_unit" onchange="CVRiskRevised2018_fx(); minMaxCheck();" style="width:115px;" class="medCalcFontSelect">
<option value="1|0|%" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">%</font></font></option>
<option value="100|0|fraction"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ph???n nh???</font></font></option>
<option value="100|0|ratio"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">t??? l???</font></font></option>
</select>
</span></td>
</tr>


<tr><td colspan="3">&nbsp;<br></td></tr>
<tr><td colspan="3" align="center"><span class="medCalcFontResultParam"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">????? ch??nh x??c th???p ph??n &nbsp;</font></font></span>
<select name="decpts" onchange="CVRiskRevised2018_fx();" class="medCalcFontSelect">
<option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></option>
<option selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
<option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
<option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>

</select></td></tr>

</tbody></table>
</center>


</div>
</div><div id="pretextrefs">
&nbsp;
</div>

<div id="calc_tables_above_notes">

</div>

<!-- <br>&nbsp;<br> -->
<!-- <span class="medCalcFontRef"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ph????ng tr??nh ???????c s??? d???ng</font></font></b></span> -->

<!-- <br>&nbsp;<br> -->
<center style="display: none;">
<div id="calc_equation">
<table cellspacing="0" cellpadding="10" summary="EBMcalc Table"><tbody><tr><td class="medCalcFormuliBox"><span class="medCalcFontFormuli"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LogitFemale = -12,823110 + (0,106501 * Tu???i) + (0,432440 * Ch???ng t???c) + (0,000056 * Huy???t ??p t??m thu </font></font><sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ) + (0,017666 * Huy???t ??p t??m thu) + (0,731678 * Thu???c ??i???u tr??? t??ng huy???t ??p) + (0,943970 * B???nh ti???u ???????ng) + (1,18009790 * Ng?????i h??t thu???c) * (Cholesterol to??n ph???n / HDL Cholesterol)) + (-0.008580 * Tu???i * Ch???ng t???c) + (-0.003647 * Huy???t ??p t??m thu * Thu???c ??i???u tr??? t??ng huy???t ??p) + (0.006208 * Huy???t ??p t??m thu * Ch???ng t???c) + (0.152968 * Ch???ng t???c * Thu???c ??i???u tr??? t??ng huy???t ??p ) + (-0,000153 * Tu???i ??p l???c ?????ng m???ch *) + (0,115232 * Ch???ng t???c * B???nh ti???u ???????ng) + (-0,092231 * Ch???ng t???c * Ng?????i h??t thu???c) + (0,070498 * Ch???ng t???c * (T???ng Cholesterol / HDL Cholesterol)) + (-0,000173 * Ch???ng t???c * T??m thu Huy???t ??p * Thu???c ??i???u tr??? t??ng huy???t ??p) + (-0.000094 * Tu???i * Huy???t ??p t??m thu * Ch???ng t???c)</font></font></span></td></tr><tr><td class="medCalcFormuliBox"><span class="medCalcFontFormuli"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R???i ro 10 n??m N??? = 100 / (1 + e </font></font><sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(-LogitFemale)</font></font></sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> )</font></font></span></td></tr><tr><td class="medCalcFormuliBox"><span class="medCalcFontFormuli"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">LogitMale = -11,679980 + (0,064200 * Tu???i) + (0,482835 * Ch???ng t???c) + (-0,000061 * Huy???t ??p t??m thu </font></font><sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> ) + (0,038950 * Huy???t ??p t??m thu) + (2,055533 * ??ang d??ng thu???c ??i???u tr??? t??ng huy???t ??p) + (0,842209 * B???nh ti???u ???????ng) + ( 0,895589 (* Ng?????i h??t thu???c) + (0,895589) 0,193307 * Cholesterol to??n ph???n / HDL Cholesterol) + (-0,014207 * Huy???t ??p t??m thu * U???ng thu???c t??ng huy???t ??p) + (0,011609 * Huy???t ??p t??m thu * Ch???ng t???c) + (-0,19460 * Thu???c t??ng huy???t ??p * Ch???ng t???c * + (0,000025 * Tu???i * Huy???t ??p t??m thu214) + (-0,077 Huy???t ??p t??m thu214) + (-0,077 Huy???t ??p t??m thu214) (-0,226771 * Ch???ng t???c * Ng?????i h??t thu???c) + (-0,17749 * Ch???ng t???c * T???ng Cholesterol / HDL Cholesterol) + (0,004190 * Ch???ng t???c * D??ng thu???c t??ng huy???t ??p * Huy???t ??p t??m thu) + (-0,000199 * Ch???ng t???c * Tu???i * Huy???t ??p t??m thu)</font></font></span></td></tr><tr><td class="medCalcFormuliBox"><span class="medCalcFontFormuli"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R???i ro 10 n??mMale = 100 / (1 + e </font></font><sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(-LogitMale)</font></font></sup><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> )</font></font></span></td></tr><tr><td class="medCalcFormuliBox"><span class="medCalcFontFormuli"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">R???i ro ??? 10 tu???i = (Math.abs (Gi???i t??nh == 1) * R???i ro ??? 10 tu???i N???) + (Math.abs (Gi???i t??nh == 2) * R???i ro ??? 10 tu???i Nam)</font></font></span></td></tr></tbody></table><br>&nbsp;<br>
</div> </center>

<div id="calc_tables">

</div>

<!-- <br>&nbsp;<br> -->



</form>


<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
 }}