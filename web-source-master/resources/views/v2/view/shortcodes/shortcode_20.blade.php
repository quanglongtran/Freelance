<?php
if(!function_exists('shortcode_20')){

function shortcode_20(){
    ob_start();
?>
 <style>
    .red { color: red; }
        .calculator-table-form table{background:#ebf3f4;border:1px solid #eee;border-bottom:2px solid #187681;box-shadow:0 0 20px rgba(0,0,0,.1),0 10px 20px rgba(0,0,0,.05),0 20px 20px rgba(0,0,0,.05),0 30px 20px rgba(0,0,0,.05)}.calculator-table-form td{border:solid 1px #fff;padding:10px}.calculator-table-form tfoot{background-color:#ccf2ff;color:#fff;padding:10px}.calculator-table-form tbody{color:#000;padding:10px}.calculator-table-form  tr.table-head {background-color:#187681;color:#fff;padding:10px;text-align:left}.calculator-table-form input[type=text]:focus,select:focus,textarea:focus{min-height:32px;background:#fff;border:1px solid #ccc;outline:0;padding-right:5px;padding-left:5px}.calculator-table-form input[type=text],textarea{min-height:32px;background:#fff;border:1px solid #ccc;outline:0;padding-right:5px;padding-left:5px}
        .calculator-table-form .flat-btn{align:center;background-color:#187681;border:0;border-radius:3px;box-shadow:0 0 2px 0 rgb(0 0 0 / 10%),0 2px 2px 0 rgb(0 0 0 / 20%);display:inline-block;color:#fff;font-size:1.105rem;line-height:1;padding: .65rem 1.2rem;text-decoration:none!important}.calculator-table-form select{min-height:32px;background:#fff;border:1px solid #ccc;outline:0}.calculator-table-form input[type=text]:focus,select:focus,textarea:focus{min-height:32px;background:#fff;border:1px solid #ccc;outline:0;padding-right:5px;padding-left:5px}input[type=text]:focus,select:focus,textarea:focus{min-height:32px}.overlay-menu{height:100%;position:fixed;z-index:1;top:0;left:0;background-color:#f9f9f9;border:1px solid #f9f9f9;overflow-x:hidden;transition:all .17s cubic-bezier(.37,.15,.32,.94);-webkit-transition:all .17s cubic-bezier(.37,.15,.32,.94);z-index:1000000}
        .calculator-table-form tr:last-child td{text-align:center;}
        .flat-btn{cursor:pointer;margin:10px;background-color:#187681;border:0;border-radius:3px;box-shadow:0 0 2px 0 rgb(0 0 0 / 10%),0 2px 2px 0 rgb(0 0 0 / 20%);display:inline-block;color:#fff;font-size:.875rem;line-height:1;padding:.75rem 1.5rem;text-decoration:none!important}
        .flat-btn:hover{color:#fff;}
        .result{text-align:center;margin:15px;}.content11{font-size:14px;}
        .result .flat-btn{margin-bottom:15px;}
        .mandatory-star{color:#c00;}
        .calcnote {font-size:14px;}
        .pad10{padding:10px;}
        .required{color:#c00;}
        .btn:hover{color:#fff;}
        .relatedlinks a:hover{color:#0D71AF;}
        .flat-btn {  color: #fff!important;}.flat-btn:hover {  color: #fff!important;}
        .calcresult{border-radius:4px 4px 0 0 ; background:#ebf3f4}.calcresult .result,.result{text-align:center; padding:5px 0; margin-bottom:10px;}
        .calcresult table{width:95%; margin:15px auto; border:3px solid #187681; background:#fff;}.calcresult table td{padding:5px; border:1px solid #187681;}.calcnote,.calcresult table .note{font-style:italic; font-size:12px; padding:10px;}</style>
<script language="javascript">
                function checkgender() { if (document.immunization.r1[0].checked) { gendercolor.className = "calculator-table-form blue"; form_kq2.className = "calculator-table-form blue"; } else { gendercolor.className = "calculator-table-form pink"; form_kq2.className = "calculator-table-form pink"; } }
                jQuery(document).ready(function () {
                    $('[name="BMIform"]').submit(function (event) {                        
                        event.preventDefault();
                        var a = parseInt($('[name="a"]').val());
                        var b = parseInt($('[name="b"]').val());
                        var c = parseInt($('[name="c"]').val());
                        var d = parseInt($('[name="d"]').val());
                        var e = parseInt($('[name="e"]').val());
                        var urr = (1-b/a)*100;
                        var ktv = -Math.log((b/a)-(0.008*c)) + (4-3,5*(b/a)) * d/e;
                        //format_tien_te
                        $('.ketqua1').text(format_tien_te(ktv));
                        $('.ketqua2').text(format_tien_te(urr)+'%');
                        if(urr < 65){
                            $('.ketqua3').text('Cu???c l???c m??u kh??ng ?????t hi???u qu???. B???n n??n h???i ?? ki???n b??c s?? th???n h???c ????? x??c ?????nh l???i');
                        }else{
                            $('.ketqua3').text('Cu???c l???c m??u ?????t hi???u qu???. N???u b???n c??n c?? nghi ng??? g?? h??y h???i ?? ki???n b??c s?? chuy??n khoa th???n c???a b???n');
                        }
                        $('#form_kq2').css('display', 'block');
                    })
                });
            </script>
            <div class="calculator-table-form blue" id="gendercolor">
<form name="BMIform" onsubmit="return;">
<input type="hidden" name="hdnhip">
<table cellpadding="0" cellspacing="0" class="tv12black">
      <tbody><tr class="table-head">
        <td colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nh???p chi ti???t</font></font></td>
    </tr>
<tr><td>N???ng ????? ure m??u tr?????c khi l???c</td>
 <td>
   <input type="number" name="a" size="10" class="innerc resform" maxlength="3" value="" required> mg/dL 
 </td>
 </tr>
 <tr><td>N???ng ????? ure m??u sau khi l???c
(??o sau 2-5 ph??t l???c m??u)
</td>
 <td>
   <input type="number" name="b" size="10" class="innerc resform" maxlength="3" value="" required> mg/dL 
 </td>
 </tr>
 <tr><td>Th???i gian l???c m??u
</td>
 <td>
   <input type="number" name="c" size="10" class="innerc resform" maxlength="3" value="" required> Gi??? 
 </td>
 </tr>
 <tr><td>Th??? t??ch l???c
</td>
 <td>
   <input type="number" name="d" size="10" class="innerc resform" maxlength="3" value="" required> L??t 
 </td>
 </tr>
<tr><td>Tr???ng l?????ng c?? th??? sau khi l???c
</td>
 <td>
   <input type="number" name="e" size="10" class="innerc resform" maxlength="3" value="" required> kg 
 </td>
 </tr>

   <tr> 
 <td colspan="2"> <span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" class="flat-btn" value=" T??nh to??n " name="B1"></font><span class="required"><font style="vertical-align: inherit;">b???t bu???c</font></span></font>
</td>
 </tr>
 </tbody></table>
</form>
</div>
            

            <div class="report-content" id="form_kq2" style="padding-top: 10px; display: none;">
                <div class="calculator-table-form blue">
                    <table class="tv12black">
<tbody>
<tr class="table-head">
                            <td colspan=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">K???t qu???</font></font></td>
                            </tr>
    <tr><td colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kt / V cho c??c gi?? tr??? ???? nh???p l??   </font></font><font color="#FF0000"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="ketqua1">1,04</font></font></b></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> .</font></font></td></tr>
<tr><td colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gi???m ur?? (URR) c???a b???n l?? </font></font><font color="#FF0000"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;" class="ketqua2">50%</font></font></b></font></td></tr>
<tr><td colspan="2"><font style="vertical-align: inherit;" class="ketqua3"></font></td></tr>
<tr><td colspan="2">
<div class="note"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L??u ??: M??y t??nh n??y ch??? ??o ????? thanh th???i ur?? qua th???m t??ch m??u. </font><font style="vertical-align: inherit;">Gi?? tr??? Kt / V c???n ?????t c?? th??? l???n h??n ?????i v???i ph??? n???.</font></font></div></td></tr>       

</tbody></table>

                </div>
            </div>

<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
}}