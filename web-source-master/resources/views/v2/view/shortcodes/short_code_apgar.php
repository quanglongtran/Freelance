<?php
if(!function_exists('short_code_apgar')){

function short_code_apgar(){
	ob_start();
?>
<style type="text/css">.question .title {
    font-size: inherit;
    margin: 0;
    padding: 0;
    color: #ff0000;
    font-weight: 600;
    margin: 15px 0;
}.ket-qua-danh-gia h3{
    color: red;
}

.question .answer {
    padding: 0;
}

.question .answer input {
    margin-right: 5px;
}
table input[type="radio"] {
    vertical-align: middle;
    margin-right: 5px;
}
</style>
<script type="text/javascript">

function validateapcar()  
{
  window.event.keyCode=false   
}
function apgar()
{
Score=document.frm.TotalScore.value
//if ((Score=="")||(Score==0))
 //{
 //   alert("Please select scale")
  //  return false
 //}
 
//window.open('calcapgar.asp?Score='+Score,'index','top=200 left=200 width=470 height=300 toolbar=0 statusbar=0');
// document.frm.action="apgar11.asp?Score="+Score+"&showRes=yes#result";
// document.frm.submit();
}

	function calculate()
{
var c1=0;c2=0;c3=0;c4=0;c5=0
var s1,s2,s3,s4,s5
with (document.frm)
{
if (r1[0].checked)s1.value = 0; 
if (r1[1].checked)s1.value = 1;  
if (r1[2].checked)s1.value = 2; 

if (r2[0].checked)s2.value = 0; 
if (r2[1].checked)s2.value = 1; 
if (r2[2].checked)s2.value = 2; 

if (r3[0].checked)s3.value = 0; 
if (r3[1].checked)s3.value = 1;
if (r3[2].checked)s3.value = 2;


if (r4[0].checked)s4.value = 0; 
if (r4[1].checked)s4.value = 1; 
if (r4[2].checked)s4.value = 2;

if (r5[0].checked)s5.value = 0; 
if (r5[1].checked)s5.value = 1; 
if (r5[2].checked)s5.value = 2;
}
if (document.frm.s1.value)c1=document.frm.s1.value; else c1=0
if (document.frm.s2.value)c2=document.frm.s2.value; else c2=0
if (document.frm.s3.value)c3=document.frm.s3.value; else c3=0
if (document.frm.s4.value)c4=document.frm.s4.value; else c4=0
if (document.frm.s5.value)c5=document.frm.s5.value; else c5=0

document.frm.TotalScore.value=parseInt(c1)+parseInt(c2)+parseInt(c3)+parseInt(c4)+parseInt(c5)
}

jQuery(document).ready(function($){

	$('.wpt_test_form-apgar').submit(function(event){
		event.preventDefault();
		var total_point = 0;
		total_point =  parseInt($('input[name="TotalScore"]').val());

		$('.diem-so-apgar-value').text('??i???m s??? Apgar: '+total_point);
		// alert(total_point);
		$('.ket-qua-apgar').show();
		$('.muc-do-result').hide();
		if(total_point <= 6){
			$('.ket-qua-apgar .muc-do-1').show();
		}
		if(total_point >= 7){
			$('.ket-qua-apgar .muc-do-2').show();
		}
	});
})
</script>

<div class="wpt_test fill_form">
<div class="content">	
<h4 style="text-align: justify;"><strong>??i???m s??? Apgar</strong></h4>
<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">??i???m Apgar ???????c ?????t t??n ????? vinh danh b??c s?? g??y m??, Ti???n s?? Virginia. </font><font class="" style="vertical-align: inherit;">B?? ???? ph??t tri???n h??? th???ng t??nh ??i???m n??y ????? x??c ?????nh t??c ?????ng c???a g??y m?? s???n khoa ?????i v???i tr??? s?? sinh. </font><font style="vertical-align: inherit;">N?? gi??p ch??ng t??i x??c ?????nh nhanh ch??ng li???u tr??? s?? sinh c?? c???n ???????c ch??m s??c y t??? ngay l???p t???c hay kh??ng. </font><font style="vertical-align: inherit;">N?? ???????c thi???t k??? ????? ????n gi???n v?? c?? th??? l???p l???i (ngh??a l??, nh???ng ng?????i quan s??t kh??c nhau ?????t ???????c c??ng m???t ??i???m s???).</font></font>
</div>
<div class="content">
<div class="calculator-table-form blue ">
			  
          <form method="POST" name="frm" class="wpt_test_form-apgar">
  
  <table border="0" bgcolor="#ced4da" cellpadding="3" cellspacing="1" align="center">
 <tbody><tr class="table-head">
   <td colspan="4" bgcolor="#FCF5BA"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">H??? th???ng ch???m ??i???m APGAR
    
       </font></font></td>
       <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">K???t qu???</font></font></td>
       </tr>
       
   <tr bgcolor="#355abb">
      <th bgcolor="#E7E7E7"></th>
       <th bgcolor="#E7E7E7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0 ??i???m</font></font></th>
       <th bgcolor="#E7E7E7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 ??i???m</font></font></th>
       <th bgcolor="#E7E7E7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 ??i???m</font></font></th>
       <th bgcolor="#E7E7E7"></th>
   </tr>
       <tr>
         <td width="25%"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngo???i h??nh</font></font></td>
         <td><input type="radio" name="r1" onclick="calculate()" value="1" checked="" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T??i nh???t</font></font></td>
         <td><input type="radio" name="r1" onclick="calculate()" value="2" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M??u xanh d????ng</font></font></td>
         <td><input type="radio" name="r1" onclick="calculate()" value="3" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">H???ng</font></font></td>
         <td><input type="text" name="s1" size="6" onkeypress="validateapcar()" style="color: rgb(204, 204, 204);"></td>
       </tr>
<tr>
         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xung</font></font></td>
         <td><input type="radio" name="r2" onclick="calculate()" value="1" checked="" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kh??ng c?? m???t</font></font></td>
         <td><input type="radio" name="r2" onclick="calculate()" value="2" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&lt;100</font></font></td>
         <td><input type="radio" name="r2" onclick="calculate()" value="3" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt; 100</font></font></td>
         <td><input type="text" name="s2" size="6" onkeypress="validateapcar()" style="color: rgb(204, 204, 204);"></td>
       </tr>
       <tr>
         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nh??n m???t</font></font></td>
         <td><input type="radio" name="r3" onclick="calculate()" value="1" checked="" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kh??ng c?? m???t</font></font></td>
         <td><input type="radio" name="r3" onclick="calculate()" value="2" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nh??n m???t</font></font></td>
         <td><input type="radio" name="r3" onclick="calculate()" value="3" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cry Active</font></font></td>
         <td><input type="text" name="s3" size="6" onkeypress="validateapcar()" style="color: rgb(204, 204, 204);"></td>
       </tr>   
       <tr>
         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ho???t ?????ng</font></font></td>
         <td><input type="radio" name="r4" onclick="calculate()" value="1" checked="" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kh???p khi???ng</font></font></td>
         <td><input type="radio" name="r4" onclick="calculate()" value="2" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M???t s??? giai ??i???u</font></font></td>
         <td><input type="radio" name="r4" onclick="calculate()" value="3" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T??ch c???c</font></font></td>
         <td><input type="text" name="s4" size="6" onkeypress="validateapcar()" style="color: rgb(204, 204, 204);"></td>
       </tr> 
       <tr>
         <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">H?? h???p</font></font></td>
         <td><input type="radio" name="r5" onclick="calculate()" value="1" checked="" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kh??ng c?? m???t</font></font></td>
         <td><input type="radio" name="r5" onclick="calculate()" value="2" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">kh??ng th?????ng xuy??n</font></font></td>
         <td><input type="radio" name="r5" onclick="calculate()" value="3" style="color: rgb(204, 204, 204);"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Reg &amp; Cry</font></font></td>
         <td><input type="text" name="s5" size="6" onkeypress="validateapcar()" style="color: rgb(204, 204, 204);"></td>
       </tr>
       <tr bgcolor="e7e7e7">
         <td bgcolor="e7e7e7" colspan="4">
          <p align="center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T???ng ??i???m</font></font></p>
         </td>
         <td><input type="text" name="TotalScore" size="6" onkeypress="validateapcar()" style="color: rgb(204, 204, 204);"></td>
       </tr>  
       <tr><td colspan="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
       	<input class="button btn btn-primary" type="submit" value="Xem k???t qu???" class="flat-btn" id="button1" name="button1" style="color: rgb(204, 204, 204);">
       </font></font></td></tr>
     </tbody></table>
	 
	 
	 
     </form>
    
 
    </div>
</div>
</div>
<div class="ket-qua-danh-gia ket-qua-apgar" style="display:none;">
	<h3 class="diem-so-apgar-value">??i???m s??? Apgar: </h3>
	<h3>K???t qu???: 
		<span class="muc-do-result muc-do-1" style="display:none;">Phi???n mu???n</span>
		<span class="muc-do-result muc-do-2" style="display:none;">B??nh th?????ng</span>
	</h3>
	<p>* Ch?? ??: Tr???c nghi???m n??y ch??? c?? ?? ngh??a t???m so??t. Ch???n ??o??n x??c ?????nh n??n ???????c th???c hi???n b???i b??c s?? chuy??n khoa, sau khi ???? h???i b???nh v?? th??m kh??m, bao g???m vi???c ????nh gi?? m???c ????? suy gi???m ch???c n??ng c???a b???nh nh??n.</p>
</div>
<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
 }}