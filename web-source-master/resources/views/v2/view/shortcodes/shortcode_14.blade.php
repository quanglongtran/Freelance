<?php
if(!function_exists('shortcode_14')){

function shortcode_14(){
    ob_start();
?>
<style>
        /***************** calculator style --*********/
        .calculator-table,
        .calculator-table-form {
            margin: 0 0 20px 0;
            color: #000000;
            width: 90%;
            margin: 0 auto;
            line-height: 130%;
        }

        .calculator-table-form table,
        .calculator-table table {
            width: 100%;
            color: #000000;
        }

        .calculator-table-form td,
        .calculator-table td {
            border-left: 1px solid #fff;
        }

        .calculator-table-form td:nth-child(1),
        .calculator-table td:nth-child(1) {
            border-left: none;
        }

        .calculator-table-form.blue table {
            background: #E6F4FE;
            border: 1px solid #0F5885;
        }

        .calculator-table.blue table {
            background: #E6F4FE;
        }

        .calculator-table-form.pink table {
            background: #FBE4FD;
            border: 1px solid #AD0054;
        }

        .calculator-table.pink table {
            background: #B30035;
        }

        .calculator-table-form.blue td:first-child {
            background: #CFEAFC
        }

        .calculator-table-form.pink td:first-child {
            background: #FFD6EB
        }

        .calculator-table-form tr.table-head td,
        .calculator-table tr.table-head td {
            color: #fff;
            font-weight: bold;
        }

        .calculator-table-form.blue tr.table-head td,
        .calculator-table.blue tr.table-head td {
            background: #0F5885;
        }

        .calculator-table-form input[type='radio'],
        .calculator-table-form input[type='checkbox'] {
            margin-right: 5px;
        }

        .calculator-table-form.blue tr.table-head td,
        .calculator-table-form.pink tr.table-head td {
            font-size: 14px;
        }

        .calculator-table-form.blue tr.table-head td,
        .calculator-table.blue tr.table-head td {
            background: #0F5885;
        }

        .calculator-table-form.pink tr.table-head td,
        .calculator-table.pink tr.table-head td {
            background: #AD0054;
        }

        .calculator-table-form tr:last-child td {
            text-align: center;
        }

        .calculator-table-form tr.leftalign td {
            text-align: left !important;
        }

        .calculator-table-form td,
        .calculator-table td {
            border-right: 0px solid #fff;
            border-bottom: 1px solid #fff;
            padding: 10px 5px;
            vertical-align: top;
            text-align: left;
        }

        .calculator-table-form tr:last-child td,
        .calculator-table:last-child td {
            border-bottom: none;
        }

        .mandatory-star {
            color: #f00;
        }

        .required {
            color: #B30000;
            text-align: left;
            float: left;
            padding-top: 15px;
        }

        .calculator-table-form .flat-btn {
            border: 0;
            color: #fff;
            margin-left: 5px;
            cursor: pointer;
        }

        .calculator-table-form.blue .flat-btn,
        .result .flat-btn {
            background: #0F5885;
            color: #fff !important;
            font-size: 13px;
            font-weight: 600;
            /*border-radius:4px;*/
            padding: 8px 15px;
            display: inline-block;
        }

        .calculator-table-form.pink .flat-btn {
            background: #AD0054;
            color: #fff;
            font-weight: 600;
            /*border-radius:4px;*/
            font-size: 13px;
            padding: 8px 15px;
            display: inline-block;
        }

        .calculator-table-form.blue .flat-btn:hover {
            background: #0779A3;
        }

        .calculator-table-form.pink .flat-btn:hover {
            background: #D62060;
        }


        a:not([href]) {
            color: #333 !important;
            text-decoration: none;
        }

        /*.flat-btn,.flat-btn.blue{padding:5px 10px; background:#0F5885; color:#fff; text-decoration:none; margin:10px 0 0 0; display:inline-block; border-radius:4px;font-size: 13px !important;}*/
        .flat-btn:hover {
            text-decoration: none;
            background: #333;
            color: #fff
        }


        .flat-btn.pink {
            background: none repeat scroll 0 0 #FF85AD;
        }

        .flat-btn.pink:hover {
            text-decoration: none;
            background: #333;
            color: #fff
        }

        .calculator-table-form .form-control {
            font-size: 18px !important
        }
    </style>

<script language="javascript">
                jQuery(document).ready(function ($) {
                    function format_tien_te(data){
                        data = data.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
                        return data.replace('.00', '');
                    }

                  
                    $('[name="waist_height"]').submit(function(event){
                        event.preventDefault();
                        $('#form_kq2').show();
                        var WHtR = parseInt($('[name="txtWaist"]').val()) / parseInt($('[name="height"]').val());
                        if(WHtR > 0.5){
                            $('.ketqua-text2').text('WHtR >0.5: Cho th???y nguy c?? m???c b???nh ti???u ???????ng, b???nh tim m???ch, ?????t qu??? cao h??n v?? tu???i th??? th???p h??n');
                        }else{
                            $('.ketqua-text2').text('WHtR <0.5: ???????c coi l?? l??nh m???nh ?????i v???i c??? nam v?? n??? tr??n to??n th??? gi???i');
                        }
                        $('.ketqua').text(format_tien_te(WHtR*100));

                        if($('[name="sex"]').val() == 'Male'){
                            if(WHtR <= 0.34){
                                $('.ketqua-text').text('C???c k?? m??nh mai');
                                $('.ketqua-text1').text('Tr???ng l?????ng c?? th??? c???a b???n th???p khi so s??nh v???i c??c khuy???n ngh??? ti??u chu???n. Thi???u c??n khi???n b???n d??? b??? nhi???m tr??ng, c??c v???n ????? ti??u h??a v?? hi???m khi b??? ung th??. Nguy??n nh??n nh??? c??n c?? th??? do thi???u ch???t dinh d?????ng, kh??ng ti??u th??? ????? calo ho???c do r???i lo???n ??n u???ng.Tham kh???o ?? ki???n b??c s?? ho???c chuy??n gia dinh d?????ng ????? t??ng c??n b??nh th?????ng.'
                                );
                            }
                            if(WHtR >= 0.35 && WHtR <= 0.42){
                                $('.ketqua-text').text('M???nh mai');
                                $('.ketqua-text1').text('Tr???ng l?????ng c?? th??? c???a b???n th???p khi so s??nh v???i c??c khuy???n ngh??? ti??u chu???n. Thi???u c??n khi???n b???n d??? b??? nhi???m tr??ng, c??c v???n ????? ti??u h??a v?? hi???m khi b??? ung th??. Nguy??n nh??n nh??? c??n c?? th??? do thi???u ch???t dinh d?????ng, kh??ng ti??u th??? ????? calo ho???c do r???i lo???n ??n u???ng.Tham kh???o ?? ki???n b??c s?? ho???c chuy??n gia dinh d?????ng ????? t??ng c??n b??nh th?????ng.'
                                );
                            }
                            if(WHtR >= 0.43 && WHtR <= 0.52){
                                $('.ketqua-text').text('Kh???e m???nh');
                                $('.ketqua-text1').text('Ti???p t???c ??n u???ng l??nh m???nh v?? t???p th??? d???c 150 ph??t m???i tu???n ????? gi??? c??n n???ng c???a b???n trong ph???m vi khuy???n ngh???.' );
                            }
                            if(WHtR >= 0.53 && WHtR <= 0.62){
                                $('.ketqua-text').text('Th???a c??n');
                                $('.ketqua-text1').text('B???n c?? th??? c?? nhi???u m??? trong c?? th??? h??n do l???i s???ng ??t v???n ?????ng. Th???a c??n l?? m???t y???u t??? nguy c?? c???a b???nh tim, ti???u ???????ng v?? t??ng huy???t ??p. Ch??ng t??i khuy??n b???n n??n t??ng c?????ng ho???t ?????ng v?? t???p th??? d???c ??t nh???t 150 ph??t m???i tu???n ????? gi???m c??n v?? l???y l???i v??c d??ng.' );
                            }
                            if(WHtR >= 0.63){
                                $('.ketqua-text').text('B???nh b??o ph??');
                                $('.ketqua-text1').text('B??o ph?? l??m gi???m tu???i th??? c???a b???n v?? khi???n b???n d??? m???c c??c b???nh kh??c nhau, ?????c bi???t l?? b???nh tim, ti???u ???????ng, ng??ng th??? khi ng???, vi??m x????ng kh???p, li???t d????ng v?? m???t s??? lo???i ung th??. Ngay c??? m???t ch??? ????? t???p th??? d???c ng???n c??ng c?? th??? gi??p b???n t??ng t???c ????? trao ?????i ch???t h???ng ng??y v?? gi??p b???n t??ng l?????ng calo ti??u th??? v?? gi???m c??n. Tham kh???o ?? ki???n c???a chuy??n gia dinh d?????ng, chuy??n gia th??? d???c v?? b??c s?? c???a b???n ????? c???i thi???n l???i s???ng v?? t???i ??u h??a c??n n???ng c???a b???n.' );
                            }
                        }else{
                            if(WHtR <= 0.34){
                                $('.ketqua-text').text('C???c k?? m??nh mai');
                                $('.ketqua-text1').text('Tr???ng l?????ng c?? th??? c???a b???n th???p khi so s??nh v???i c??c khuy???n ngh??? ti??u chu???n. Thi???u c??n khi???n b???n d??? b??? nhi???m tr??ng, c??c v???n ????? ti??u h??a v?? hi???m khi b??? ung th??. Nguy??n nh??n nh??? c??n c?? th??? do thi???u ch???t dinh d?????ng, kh??ng ti??u th??? ????? calo ho???c do r???i lo???n ??n u???ng. Tham kh???o ?? ki???n b??c s?? ho???c chuy??n gia dinh d?????ng ????? t??ng c??n b??nh th?????ng.'
                                );
                            }
                            if(WHtR >= 0.35 && WHtR <= 0.41){
                                $('.ketqua-text').text('M???nh mai');
                                $('.ketqua-text1').text('Tr???ng l?????ng c?? th??? c???a b???n th???p khi so s??nh v???i c??c khuy???n ngh??? ti??u chu???n. Thi???u c??n khi???n b???n d??? b??? nhi???m tr??ng, c??c v???n ????? ti??u h??a v?? hi???m khi b??? ung th??. Nguy??n nh??n nh??? c??n c?? th??? do thi???u ch???t dinh d?????ng, kh??ng ti??u th??? ????? calo ho???c do r???i lo???n ??n u???ng. Tham kh???o ?? ki???n b??c s?? ho???c chuy??n gia dinh d?????ng ????? t??ng c??n b??nh th?????ng.'
                                );
                            }
                            if(WHtR >= 0.42 && WHtR <= 0.48){
                                $('.ketqua-text').text('Kh???e m???nh');
                                $('.ketqua-text1').text('Ti???p t???c ??n u???ng l??nh m???nh v?? t???p th??? d???c 150 ph??t m???i tu???n ????? gi??? c??n n???ng c???a b???n trong ph???m vi khuy???n ngh???.' );
                            }
                            if(WHtR >= 0.49 && WHtR <= 0.57){
                                $('.ketqua-text').text('Th???a c??n');
                                $('.ketqua-text1').text('B???n c?? th??? c?? nhi???u m??? trong c?? th??? h??n do l???i s???ng ??t v???n ?????ng. Th???a c??n l?? m???t y???u t??? nguy c?? c???a b???nh tim, ti???u ???????ng v?? t??ng huy???t ??p. Ch??ng t??i khuy??n b???n n??n t??ng c?????ng ho???t ?????ng v?? t???p th??? d???c ??t nh???t 150 ph??t m???i tu???n ????? gi???m c??n v?? l???y l???i v??c d??ng.' );
                            }
                            if(WHtR >= 0.58){
                                $('.ketqua-text').text('B???nh b??o ph??');
                                $('.ketqua-text1').text('B??o ph?? l??m gi???m tu???i th??? c???a b???n v?? khi???n b???n d??? m???c c??c b???nh kh??c nhau, ?????c bi???t l?? b???nh tim, ti???u ???????ng, ng??ng th??? khi ng???, vi??m x????ng kh???p, li???t d????ng v?? m???t s??? lo???i ung th??. Ngay c??? m???t ch??? ????? t???p th??? d???c ng???n c??ng c?? th??? gi??p b???n t??ng t???c ????? trao ?????i ch???t h???ng ng??y v?? gi??p b???n t??ng l?????ng calo ti??u th??? v?? gi???m c??n. Tham kh???o ?? ki???n c???a chuy??n gia dinh d?????ng, chuy??n gia th??? d???c v?? b??c s?? c???a b???n ????? c???i thi???n l???i s???ng v?? t???i ??u h??a c??n n???ng c???a b???n.' );
                            }
                        }

                    })
                });
            </script>

        
<div class="calculator-table-form blue" id="gendercolor">
<form name="waist_height" method="post">
    <table border="0" cellpadding="5" cellspacing="0" width="100%" class="tv12black">
        <tbody><tr class="table-head">
            <td colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nh???p chi ti???t</font></font></td>
        </tr>
        <tr>
            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gi???i t??nh </font></font><span class="mandatory-star"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span>
            </td>
            <td>
            <input type="radio" name="sex" value="Male" size="6" maxlength="3" onclick="checkgender();" checked=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Nam gi???i &nbsp;
            </font></font><input type="radio" name="sex" value="Female" size="6" maxlength="3" onclick="checkgender();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gi???ng c??i
             </font></font></td>
        </tr>   
         <tr>
        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi???u cao </font></font><span class="mandatory-star"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></td>
        <td><input type="text" name="height" style="width:80px" onkeyup="conv(3)" maxlength="3" placeholder="170" required>
          <input type="hidden" name="inches" value="0">
          <input type="hidden" name="selheight"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          &nbsp;cm &nbsp;</font></font><br></td>
      </tr>

    <tr>
        <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">K??ch th?????c v??ng eo </font></font><span class="mandatory-star"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></td>
        <td>
<input type="text" name="txtWaist" size="8" maxlength="6" placeholder="20-160" class="definput" onkeypress="return numeralsOnly(event)" onfocus="setfocus('waist');" required> &nbsp;cm
        </td>
    </tr>
    <tr>
        <td colspan="2"> 
        <span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">* Y??u c???u</font></font></span> 
        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input class="flat-btn" type="submit" value="N???p"></font></font></font></font>
        <input class="flat-btn" type="reset" value="Reset" onclick="checkgender();">
        </td>
    </tr>               
</tbody></table>
</form>
</div>


        <div class="calculator-table-form blue " style="padding-top: 20px;display: none;" id="form_kq2">
            <table class="tv12black" cellpadding="5" cellspacing="1">
                <tbody><tr class="table-head"><td colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">K???t qu???</font></font></td></tr>
                    <tr><td colspan="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                T??? l??? v??ng eo tr??n chi???u cao c???a b???n l?? </font></font><font color="red"><b><font style="vertical-align: inherit;"><font class="ketqua" style="vertical-align: inherit;"></font>%</font></b></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> . </font><font style="vertical-align: inherit;">T??? l??? n??y ch??? ra r???ng b???n ??ang ??? </font></font><b><font style="vertical-align: inherit;"><font class="ketqua-text" style="vertical-align: inherit;">  </font></font></b><br><br>
                                <p class="ketqua-text1"></p>
                                <p class="ketqua-text2"></p>
                            </td></tr>         
                </tbody>
            </table>
        </div>


<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
}}