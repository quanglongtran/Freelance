<?php
if(!function_exists('body_fat_calculator')){

function body_fat_calculator(){
	ob_start();
?>
<style type="text/css">
	.red {
    color: red;
}

.pink-table{background:#FAE9F6;border:1px solid #F24680;}.pink-table tr:nth-child(2n){background:#F3C0E3;}.pink-table tr{border-bottom:1px solid #E496D8;}.pink-table tr:first-child td,.pink-table tr.table-title td{background:#F24680; border-right:1px solid #E496D8;}.form-pink{background:#FAE9F6!important;}.btn-blue { background-color: #0F5885; color: #fff!important;}.btn-blue:hover{background:#0779A3;}.btn-orange:hover,.btn-blue:hover,.btn-pink:hover{text-decoration:none;}.btn-orange { background-color: #FF6501; color: #fff;}.btn-orange:hover{background:#D55201; color:#fff;}.btn-pink{ background-color:#F24680; color: #fff!important;}.btn-pink:hover{background:#D62060;}.flat-blue:hover,.flat-red:hover,.flat-pink:hover{background:#333; color:#fff; text-decoration:none;}.flat-pink{border:none;color:#fff!important; background:#DA39AA; padding:3px 15px; *padding:0 10px; *font-size:13px!important}.calculator-table,.calculator-table-form{margin:0 0 20px 0;color: #000000; width:90%; margin:0 auto; line-height:130%;}.calculator-table-form table,.calculator-table table{width:100%;color: #000000;} .calculator-table-form td,.calculator-table td{border-left:1px solid #fff;}.calculator-table-form td:nth-child(1),.calculator-table td:nth-child(1){border-left:none;}.calculator-table-form.blue table{background:#E6F4FE;border:1px solid #0F5885;}.calculator-table.blue table{background:#E6F4FE;}.calculator-table-form.pink table{background:#FBE4FD;border:1px solid #AD0054;} .calculator-table.pink table{background:#B30035;} .calculator-table-form.blue td:first-child{background:#CFEAFC}.calculator-table-form.pink td:first-child{background:#FFD6EB} .calculator-table-form tr.table-head td,.calculator-table tr.table-head td{color:#fff; font-weight:bold;}.calculator-table-form.blue tr.table-head td,.calculator-table.blue tr.table-head td{background:#0F5885;}.calculator-table-form input[type='radio'],.calculator-table-form input[type='checkbox']{margin-right:5px;}.calculator-table-form.blue tr.table-head td,.calculator-table-form.pink tr.table-head td{font-size:14px;}.calculator-table-form.blue tr.table-head td,.calculator-table.blue tr.table-head td{background:#0F5885;}.calculator-table-form.pink tr.table-head td,.calculator-table.pink tr.table-head td{background:#AD0054;} .calculator-table-form tr:last-child td{text-align:center;}.calculator-table-form tr.leftalign td{text-align:left!important;}.calculator-table-form td,.calculator-table td{border-right:0px solid #fff;border-bottom:1px solid #fff;padding:10px 5px;vertical-align:top;text-align:left;}.calculator-table-form tr:last-child td,.calculator-table:last-child td{border-bottom:none;}.mandatory-star{color:#f00;}.required{color:#B30000; text-align:left; float:left; padding-top:15px;}.calculator-table-form .flat-btn{border:0; color:#fff; margin-left:5px; cursor:pointer;} .calculator-table-form.blue .flat-btn, .result .flat-btn{background:#0F5885;color: #fff!important; font-size:13px; font-weight:600; /*border-radius:4px;*/ padding:8px 15px; display:inline-block;}.calculator-table-form.pink .flat-btn{background:#AD0054;color: #fff;font-weight:600; /*border-radius:4px;*/ font-size:13px;padding:8px 15px; display:inline-block;} .calculator-table-form.blue .flat-btn:hover{background:#0779A3; }.calculator-table-form.pink .flat-btn:hover{background:#D62060; }.highlight_field{border:1px solid #dfdfdf; margin:10px auto; padding:3px 0; font-size:22px; font-weight:600; text-align:center; color:#333; box-shadow:inset 0 2px 5px #d2d2d2}a:not([href]){color:#333!important; text-decoration:none;} .calc-facts{padding:0 0 10px; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; -o-box-sizing:border-box; /*border-top:3px solid #388BC1;*/line-height:130%;}.calc-facts table td{padding:5px 0;}.calc-facts h3{padding:8px 0; border-bottom:3px solid #0F5885; font-size: 18px; margin: 0 0 10px 0; font-weight: 600; text-decoration: none;}.calc-facts ul{margin-left:20px;}.report-content .calc-facts li,.calc-facts li{margin:10px 0; line-height:130%; list-style-type:disc; line-height: 130%;}.calcresult{border:1px solid #0F5885; border-top:none;border-radius:4px 4px 0 0 ; background:#E6F4FE}.calcresult .result,.result{text-align:center; padding:5px 0; margin-bottom:10px;}.result.final-result {text-align: left;}.highlight{color:#f00; font-weight:bold;}.calcresult h3{background:#0F5885; margin-top:0; padding:10px; color:#fff; border-radius:4px 4px 0 0 ;}.calcresult .content-inner{line-height:130%; margin:15px 0 0 0; padding:7px; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; -o-box-sizing:border-box; font-size:75%;}mark { background: #ff0;color: #000; padding-right:5px;}/*.flat-btn,.flat-btn.blue{padding:5px 10px; background:#0F5885; color:#fff; text-decoration:none; margin:10px 0 0 0; display:inline-block; border-radius:4px;font-size: 13px !important;}*/.flat-btn:hover{text-decoration:none; background:#333; color:#fff}.calcresult ul{margin-left:45px;} .calcresult li{margin:10px 0 0 0;}.calcresult table{width:95%; margin:15px auto; border:3px solid #0F5885; background:#fff;}.calcresult table td{padding:5px; border:1px solid #0F5885;}.calcnote,.calcresult table .note{font-style:italic; font-size:12px; padding:10px;}.calcresult.pink{background:#FBE4FD; border:1px solid #FF85AD;}.calcresult.pink h3{background:#FF85AD}.calcresult.pink table{border:3px solid #FF85AD;}.calcresult.pink table td{border:1px solid #FF85AD;}.flat-btn.pink{background: none repeat scroll 0 0 #FF85AD;}.flat-btn.pink:hover{text-decoration:none; background:#333; color:#fff}.other-calc{display:none;padding:8px 10px; position:relative; box-sizing:border-box; border:1px solid #dfdfdf; margin-top:10px; cursor:pointer; font-weight:600; font-size:16px;}.other-calc span.icon{float:right;}.other-calc-list{display:none;padding:0 8px; width:100%; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; -o-box-sizing:border-box; left:0; top:35px; background:#fdfdfd; display:block; border:1px solid #dfdfdf; position:absolute; z-index:1;}.other-calc-list li{display:block; margin:10px 0;}.other-calc-list li a{padding:3px 0; color:#333; display:block; font-size:14px; font-weight:400;}.other-calc-list li a:hover{color:#0F5885;}.calculator-table-form .form-control{font-size:18px!important}/**************** calculator style end **************/#callinks_cat input[type=radio]{position:absolute;opacity:0;z-index:-1}#callinks_cat .row .col-md-4{flex:1}.tabs{overflow:hidden}.tab{width:100%;color:#fff;overflow:hidden}.tab-label{display:flex;justify-content:space-between;padding:10px;font-weight:700;cursor:pointer}.one .tab-label{background:#009999}.two .tab-label{background:#c77f28}.three .tab-label{background:#64636e}.tab-label:hover{background:#003333}.tab-label::after{content:"\276F";width:1em;height:1em;text-align:center;transition:all .35s}.tab-precontent{max-height:0;color:#2c3e50;background:#fff;transition:all .35s}.tab-close{display:flex;justify-content:flex-end;padding:1em;font-size:.75em;background:#2c3e50;cursor:pointer}.tab-close:hover{background:#003333}#callinks_cat input[type=radio]:checked+.tab-label{background:#003333}#callinks_cat input[type=radio]:checked+.tab-label::after{-webkit-transform:rotate(90deg);transform:rotate(90deg)}#callinks_cat input[type=radio]:checked~.tab-precontent{max-height:250vh;margin-bottom:20px;border-radius:8px;box-shadow:0 4px 4px -2px rgba(0,0,0,.5)}</style>


<script language="javascript">
function chec()
 {
  if (document.bodyfat.sex[0].checked){gendercolor.className = "calculator-table-form blue";} else {gendercolor.className = "calculator-table-form pink"; } 
   
  if (document.bodyfat.sex[0].checked )
  {
 
  document.getElementById('rowhip').style.display = 'none';
 document.getElementById('hip1').style.display = 'none';
 document.getElementById('hip2').style.display = 'none';
  
 
  document.getElementById('men').style.display = '';
  document.getElementById('women').style.display = 'none';
   

 
  
  }
  else  
  {
 
  document.getElementById('rowhip').style.display = '';
  document.getElementById('hip1').style.display = '';
  document.getElementById('hip2').style.display = '';
  
  
  document.getElementById('men').style.display = 'none';
  document.getElementById('women').style.display = '';

  } 
 }
 
 

</script>
<script language="javascript">

function validation()
{

  if (document.bodyfat.height.value=="")
  {
    alert("Vui l??ng nh???p chi???u cao");
    document.bodyfat.height.focus();
    return false;
  } 
    
  if ((document.bodyfat.height.value!="") && ((parseInt(document.bodyfat.height.value)<=5) || (parseInt(document.bodyfat.height.value)>300))) 
  {
        alert ("Vui l??ng nh???p chi???u cao!");
        document.bodyfat.height.focus();
        return false;
  }
    if (!bodyfat.height.value.match(/^[0-9]+(\.[0-9]+)?$/))
      {
        alert("Vui l??ng nh???p chi???u cao!");
        bodyfat.height.focus();
        return false;
      } 
      
    if  ((document.bodyfat.height.value<=121) || (document.bodyfat.height.value>213))
     {
        alert("Vui l??ng nh???p chi???u cao!");
        bodyfat.height.focus();
        return false;
      }
    
    
    if (document.bodyfat.weight.value=="")
    {
      alert("Nh???p c??n n???ng");
      document.bodyfat.weight.focus();
      return false;
      }
    
   if (!bodyfat.weight.value.match(/^[0-9]+(\.[0-9]+)?$/))
        {
            alert("Vui l??ng nh???p c??n n???ng!");
            bodyfat.weight.focus();
            return false;
        } 

    if (document.bodyfat.weight.value!="") 
    {
      weight = parseInt(document.bodyfat.weight.value);
      r =weight.toString();

      if(r.length>4)
    r=r.substring(0,5)
    if (document.bodyfat.selpounds.value=="lb")
    {
        r=r/2.2;
    }
    else if(document.bodyfat.selpounds.value=="kg")
    {
    r=weight;
    }

    document.bodyfat.hdnweight.value=Math.round(r);
    }
  
    
    if (document.bodyfat.waist.value=="")
      {
      alert("Nh???p v??ng eo c???a b???n");
      document.bodyfat.waist.focus();
      return false;
      }
  
    if (!bodyfat.waist.value.match(/^[0-9]+(\.[0-9]+)?$/))
        {
            alert("Nh???p v??ng eo c???a b???n!");
            bodyfat.waist.focus();
            return false;
        } 

    if (document.bodyfat.waist.value!="") 
    {
      waist = parseInt(document.bodyfat.waist.value);
      wt =waist.toString();

      if(wt.length>4)
    wt=wt.substring(0,5)
    if (document.bodyfat.selwaist.value=="inches")
    {
        wt=wt*2.54;
    }
    else if(document.bodyfat.selpounds.value=="cms")
    {
    wt=waist;
    }
    document.bodyfat.hdnwaist.value=Math.round(wt);
    }

  if (document.bodyfat.sex[1].checked )
    {
    if (document.bodyfat.Hip.value=="")
      {
      alert("Nh???p v??o v??ng h??ng c???a b???n");
      document.bodyfat.Hip.focus();
      return false;
      }
  
    if (!bodyfat.Hip.value.match(/^[0-9]+(\.[0-9]+)?$/))
        {
            alert("Nh???p v??o v??ng h??ng c???a b???n!");
            bodyfat.Hip.focus();
            return false;
        } 

    if (document.bodyfat.Hip.value!="") 
    {
      Hip = parseInt(document.bodyfat.Hip.value);
      hb =Hip.toString();

      if(hb.length>4)
    hb=hb.substring(0,5)
    if (document.bodyfat.selHip.value=="inches")
    {
        hb=hb*2.54;
    }
    else if(document.bodyfat.selHip.value=="cms")
    {
    hb=Hip;
    }
    document.bodyfat.hdnhip.value=Math.round(hb);
    }
    }

  
  if (document.bodyfat.neck.value=="")
      {
      alert("Nh???p v??o v??ng c???");
      document.bodyfat.neck.focus();
      return false;
      }
  
    if (!bodyfat.neck.value.match(/^[0-9]+(\.[0-9]+)?$/))
        {
            alert("Nh???p v??o v??ng c???!");
            bodyfat.neck.focus();
            return false;
        } 



    if (document.bodyfat.neck.value!="") 
    {
      neck = parseInt(document.bodyfat.neck.value);
    nk =neck.toString();

      if(nk.length>4)
    nk=nk.substring(0,5)
    if (document.bodyfat.selneck.value=="inches")
    {
        nk=nk*2.54;
    }
    else if(document.bodyfat.selneck.value=="cms")
    {
    nk=neck;
    }
    document.bodyfat.hdnneck.value=Math.round(nk);
    }
    
    if (document.bodyfat.hdnweight.value!="") 
    {
      weightchk = parseInt(document.bodyfat.hdnweight.value);
    if (weightchk<30 || weightchk>250)
    {
      alert("Vui l??ng nh???p ????ng c??n n???ng!")
            bodyfat.weight.focus();
            return false;
    }
    }
    
      if (document.bodyfat.hdnwaist.value!="") 
    {
         waistchk = parseInt(document.bodyfat.hdnwaist.value);
       if (waistchk<45 || waistchk>252)
       {
        alert("Nh???p v??ng eo h???p l???!")
        bodyfat.waist.focus();
        return false;
       }
    }
    
    
    if (document.bodyfat.hdnhip.value!="") 
    {
         hipchk = parseInt(document.bodyfat.hdnhip.value);
       if (hipchk<45 || hipchk>252)
       {
          alert("Nh???p v??ng h??ng h???p l???!")
        bodyfat.Hip.focus();
        return false;
       }
    }
    
    if (document.bodyfat.hdnneck.value!="") 
    {
         neckchk = parseInt(document.bodyfat.hdnneck.value);
       if (neckchk<20 || neckchk>51)
       {
        alert("Nh???p v??ng c??? h???p l???!")
        bodyfat.neck.focus();
        return false;
       }
    }
    
      
    if (document.bodyfat.sex[0].checked )
    {
    if ((document.bodyfat.waist.value!="") ||  (document.bodyfat.neck.value!=""))
    {
         wval = parseInt(document.bodyfat.hdnwaist.value);
       nval = parseInt(document.bodyfat.hdnneck.value);

       if (nval>=wval)
       {
        alert("Nh???p v??ng c??? h???p l???!")
              bodyfat.neck.focus();
        return false;
       }
    }
    }
    
    if (document.bodyfat.sex[1].checked )
    {
    if ((document.bodyfat.waist.value!="") ||  (document.bodyfat.neck.value!="") || (document.bodyfat.Hip.value!=""))
    {
         wval = parseInt(document.bodyfat.hdnwaist.value);
       nval = parseInt(document.bodyfat.hdnneck.value);
       hval = parseInt(document.bodyfat.hdnhip.value);
       whval=wval+hval
    
       if (nval>=whval)
       {
        
        alert("Nh???p v??ng c??? h???p l???!")
        bodyfat.neck.focus();
        return false;
       }
    }
    
    }

    gia_tri_phan_tram_chat_beo = (0.771 * (parseInt($('input[name="waist"]').val())-parseInt($('input[name="neck"]').val()))) - (0.132 * parseInt($('input[name="height"]').val())) + 4.29;
    $('.muc-do-result').hide();
    $('.ket-qua-danh-gia').show();
    $('.diem-so-body_fat_calculator-value').text('K???t qu???: ', format_tien_te(gia_tri_phan_tram_chat_beo));
    if($('input[name="sex"]').val() == 'b'){
      if(gia_tri_phan_tram_chat_beo < 6){
        $('.muc-do-1').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 6 && gia_tri_phan_tram_chat_beo <= 13){
        $('.muc-do-2').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 14 && gia_tri_phan_tram_chat_beo <= 17){
        $('.muc-do-3').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 18 && gia_tri_phan_tram_chat_beo <= 24){
        $('.muc-do-4').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 25){
        $('.muc-do-5').show();
      }
    }else{
      if(gia_tri_phan_tram_chat_beo < 14){
        $('.muc-do-1').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 14 && gia_tri_phan_tram_chat_beo <= 20){
        $('.muc-do-2').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 21 && gia_tri_phan_tram_chat_beo <= 24){
        $('.muc-do-3').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 25 && gia_tri_phan_tram_chat_beo <= 31){
        $('.muc-do-4').show();
      }
      if(gia_tri_phan_tram_chat_beo >= 32){
        $('.muc-do-5').show();
      }
    }
    return false;
  
}

function format_tien_te(data){
      data = data.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
      return data.replace('.00', '');
    }

</script>


        <div class="calculator-table-form blue" id="gendercolor">
<form method="POST" name="bodyfat" action="body-fat-calculatorresult.asp?mode=viewresult">
<input type="hidden" name="hdnwaist"> 
<input type="hidden" name="hdnhip"> 
<input type="hidden" name="hdnneck"> 
<input type="hidden" name="hdnweight"> 



 <table border="0" cellspacing="1" width="100%">
 <tbody><tr class="table-head"><td colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ch???n th??ng tin chi ti???t c???a b???n t???i ????y</font></font></td></tr>
 <tr>
 
 <td width="50%" align="left" height="25" id="tabcol" valign="middle">
 <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
 &nbsp;&nbsp; Gi???i t??nh </font></font><font size="1" color="#FF6500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></font></b></td>
 <td id="tbleft" width="50%" height="25" valign="middle">
  <input type="radio" value="b" checked="" name="sex" onclick="chec();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
 Nam gi???i </font></font><input type="radio" name="sex" value="g" onclick="chec();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
 N??? gi???i</font></font></td>
 </tr>
 
 <tr> 
 <td id="tabcol1" width="50%" align="left" height="25" valign="middle">
 <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
 &nbsp;&nbsp; Chi???u cao </font></font></b><b><font size="1" color="#FF6500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></font></b></td>
 <td id="tbleft1" width="50%" height="25" valign="middle">
 
  <input type="text" name="height" size="10" onkeyup="conv(3)" class="innerc resform" maxlength="3" placeholder="170">
                              <input type="hidden" name="inches" value="0">
                          &nbsp;
                              <input type="hidden" name="selheight"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                               cm              
                              &nbsp;</font></font><br>
 </td>
 </tr>
 
 <tr> 
 <td id="tabcol3" width="50%" align="left" height="25" valign="middle">
 <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
 &nbsp;&nbsp; Tr???ng l?????ng </font></font></b><b><font size="1" color="#FF6500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></font></b></td>
 <td id="tbleft3" width="50%" height="25" valign="middle">
 <input size="10" type="text" name="weight" maxlength="3" placeholder="70">
                           &nbsp;
                              <select size="1" name="selpounds">
                
                <option value="kg" selected="selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kil??gam</font></font></option>
                
                              </select>
 
 </td>
 </tr>  
 <tr> 
 <td id="tabcol4" width="50%" align="left" height="25" valign="middle">
 <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp;&nbsp; S??? ??o v??ng b???ng </font></font><font size="1" color="#FF6500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">* </font></font></font></b><font style="vertical-align: inherit;"><font size="1"><span id="men"><font style="vertical-align: inherit;">(??? r???n)</font></span></font></font><font size="1"> <span id="men"><font style="vertical-align: inherit;"></font></span><span id="women" style="display:none">(T???i v??? tr?? nh??? nh???t)</span>
 </font></td>
 <td id="tbleft4" width="50%" height="25" valign="middle">
 <input size="10" type="text" name="waist" maxlength="3">
                           &nbsp;
                  <select size="1" name="selwaist">
                                <option value="cms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cm</font></font></option>
                              </select>

</td>
 </tr> 
 
<tr id="rowhip" style="display:none"> 
<td id="tabcol5" width="50%" align="left" height="25" valign="middle">
<span id="hip1" style="display:none; width:50%">  <b>
 &nbsp;&nbsp; S??? ??o v??ng m??ng <font size="1" color="#FF6500">*</font></b><font size="1">(T???i v??? tr?? l???n nh???t)</font></span></td>
 <td id="tbleft5" width="50%" height="25" valign="middle">
              <span id="hip2" style="display:none; width:50%">
            <input size="10" type="text" name="Hip" maxlength="3">
                           &nbsp;
                              <select size="1" name="selHip">
                                <!-- <option value=" ">Ch???n</option> -->
                                <option value="cms">cm</option>
                              </select></span>
   
 </td>
 </tr>
 <tr> 
 <td id="tabcol6" width="50%" align="left" height="25" valign="middle">
 <b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
 &nbsp;&nbsp; S??? ??o v??ng c??? </font></font><font size="1" color="#FF6500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></font></b><font size="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (T???i v??? tr?? nh??? nh???t)</font></font></font></td>
 <td id="tbleft6" width="50%" height="25" valign="middle">
   <input size="10" type="text" name="neck" maxlength="3">
                           &nbsp;
                    <select size="1" name="selneck">
           <option value="cms"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cm</font></font></option>
        </select>
 </td>
 </tr>
 
  <tr> 
 <td align="left" colspan="2"> 
 <span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span> 
<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" class="flat-btn" value=" T??nh to??n " name="B1" onclick="return validation()"></font><span class="required"><font style="vertical-align: inherit;">b???t bu???c</font></span></font>
</td>
 </tr>
 </tbody></table>

</form></div>

<div class="ket-qua-danh-gia ket-qua-body_fat_calculator" style="display:none;">
    <br/>
    <br/>
  <h3 class="diem-so-body_fat_calculator-value"> K???t qu???:  </h3>
  <h3>T??? l??? ch???t b??o: 
    <span class="muc-do-result muc-do-1" style="display:none;">Kh??ng t???t cho s???c kh???e</span>
    <span class="muc-do-result muc-do-2" style="display:none;">C?? th??? kh???e m???nh</span>
    <span class="muc-do-result muc-do-3" style="display:none;">V???a v???n</span>
    <span class="muc-do-result muc-do-4" style="display:none;">Trung b??nh</span>
    <span class="muc-do-result muc-do-5" style="display:none;">B??o ph??</span>
  </h3>
  <p>
  </p>
  <p>* Ch?? ??: Tr???c nghi???m n??y ch??? c?? ?? ngh??a t???m so??t. Ch???n ??o??n x??c ?????nh n??n ???????c th???c hi???n b???i b??c s?? chuy??n khoa, sau khi ???? h???i b???nh v?? th??m kh??m, bao g???m vi???c ????nh gi?? m???c ????? suy gi???m ch???c n??ng c???a b???nh nh??n.</p>
</div>
<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
 }}