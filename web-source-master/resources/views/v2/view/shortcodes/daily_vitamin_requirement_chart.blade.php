<?php
if(!function_exists('daily_vitamin_requirement_chart')){

function daily_vitamin_requirement_chart(){
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

    <script type="text/javascript">
        $(function () {
            $("input").each(function (index, element) {
                var $element = $(element);
                var defaultValue = $element.val();
                $element.css('color', '#ccc');
                $element.focus(function () {
                    $element.css('color', '#000');
                });
                $element.blur(function (e) {
                    var actualValue = $element.val();
                    if (actualValue != defaultValue) {
                        $element.css('color', '#000');
                    } else {
                        $element.css('color', '#ccc');
                    }

                });
            });
        });
    </script>

    <script language="javascript">
                jQuery(document).ready(function () {
                    $('#submit_btn').click(function () {
                        var slt_vitamin = $("#slt_vitamin :selected").text();
                        if (slt_vitamin == 'Ch???n') {
                            alert("H??y ch???n lo???i vitamin b???n c???n");
                            return false;
                        }
                        if (slt_vitamin == 'Vitamin A (Retinol)') {
                            $('#nam').html('800 mcg (3000 IU)');
                            $('#nu').html('700 mcg(2333 IU)');
                            $('#loi_ich').html('C???n thi???t cho thi l???c v?? c?? th??? l??m gi???m nguy c?? ung th?? ti???n li???t tuy???n.Gi??? cho c??c m?? v?? da kh???e m???nh.????ng m???t vai tr?? quan tr???ng trong s??? ph??t tri???n c???a x????ng v?? mi???n d???ch.<br>Th???c ph???m gi??u carotenoid lutein v?? zeaxanthin c?? th??? b???o v??? ch???ng l???i b???nh ?????c th???y tinh th???');
                            $('#nguon').html('Ngu???n cung c???p retinoids: gan b??, tr???ng, t??m, c??, s???a t??ng c?????ng, b??, pho m??t Th???y S??.<br>Ngu???n cung c???p beta carotene: khoai lang, c?? r???t, b?? ng??, rau bina, xo??i, c??? c???i xanh');
                        }
                        if (slt_vitamin == 'B1 (Thiamine)') {
                            $('#nam').html('1,2 mg');
                            $('#nu').html('1,1 mg');
                            $('#loi_ich').html('Gi??p chuy???n h??a th???c ??n th??nh n??ng l?????ng.<br>C???n thi???t cho l??n da, m??i t??c, c?? b???p v?? n??o kh???e m???nh v?? r???t quan tr???ng ?????i v???i ch???c n??ng th???n kinh.');
                            $('#nguon').html('Th???t l???n, g???o l???t, gi??m b??ng, s???a ?????u n??nh, d??a h???u, b?? ?????');
                        }
                        if (slt_vitamin == 'B2 (Ribloflavin)') {
                            $('#nam').html('1,3 mg');
                            $('#nu').html('1,1 mg');
                            $('#loi_ich').html('Gi??p chuy???n h??a th???c ??n th??nh n??ng l?????ng. C???n thi???t cho l??n da, m??i t??c, m??u v?? n??o kh???e m???nh');
                            $('#nguon').html('S???a, tr???ng, s???a chua, pho m??t, th???t, rau l?? xanh, ng?? c???c.');
                        }
                        if (slt_vitamin == 'B6 (Pyridoxine)') {
                            $('#nam').html('1,3 mg');
                            $('#nu').html('1,3 mg');
                            $('#loi_ich').html('H??? tr??? gi???m m???c homocysteine v?? c?? th??? l??m gi???m nguy c?? b???nh tim. Gi??p chuy???n ?????i tryptophan th??nh niacin v?? serotonin, m???t ch???t d???n truy???n th???n kinh ????ng vai tr?? quan tr???ng trong gi???c ng???, s??? th??m ??n v?? t??m tr???ng. Gi??p t???o ra c??c t??? b??o h???ng c???u ');
                            $('#nguon').html('Th???t, c??, th???t gia c???m, c??c lo???i ?????u, ?????u ph??? v?? c??c s???n ph???m t??? ?????u n??nh kh??c, khoai t??y, tr??i c??y kh??ng c?? m??i nh?? chu???i v?? d??a h???u');
                        }
                        if (slt_vitamin == 'B12 (Cobalamin)') {
                            $('#nam').html('2,4 mcg');
                            $('#nu').html('2,4 mcg');
                            $('#loi_ich').html('H??? tr??? l??m gi???m m???c homocysteine v?? c?? th??? l??m gi???m nguy c?? m???c b???nh tim. H??? tr??? t???o ra c??c t??? b??o m???i v?? ph?? v??? m???t s??? axit b??o v?? axit amin. B???o v??? c??c t??? b??o th???n kinh v?? khuy???n kh??ch s??? ph??t tri???n b??nh th?????ng c???a ch??ng');
                            $('#nguon').html('Th???t, gia c???m, c??, s???a, pho m??t, tr???ng, ng?? c???c, s???a ?????u n??nh');
                        }
                        if (slt_vitamin == 'B3 Niacin(Nicotinamide or Nicotinic acid)') {
                            $('#nam').html('16 mg');
                            $('#nu').html('14 mg');
                            $('#loi_ich').html('Gi??p chuy???n h??a th???c ??n th??nh n??ng l?????ng. C???n thi???t cho l??n da kh???e m???nh, t??? b??o m??u, n??o v?? h??? th???n kinh');
                            $('#nguon').html('Th???t, gia c???m, c??, ng?? c???c t??ng c?????ng v?? ng?? c???c nguy??n h???t, n???m, khoai t??y, b?? ?????u ph???ng');
                        }
                        if (slt_vitamin == 'Folic acid') {
                            $('#nam').html('400 mcg');
                            $('#nu').html('400 mcg');
                            $('#loi_ich').html('Quan tr???ng cho vi???c t???o t??? b??o m???i. Gi??p ng??n ng???a d??? t???t b???m sinh n??o v?? c???t s???ng khi d??ng trong th???i k??? ?????u c???a thai k???; n??n ???????c th???c hi???n th?????ng xuy??n b???i t???t c??? ph??? n??? trong ????? tu???i sinh ????? v?? ph??? n??? c?? th??? kh??ng bi???t m??nh ??ang mang thai trong nh???ng tu???n ?????u ti??n c???a thai k???.');
                            $('#nguon').html('C??c lo???i ng?? c???c v?? ng?? c???c t??ng c?????ng, m??ng t??y, ?????u b???p, rau bina, c??? c???i xanh, b??ng c???i xanh, c??c lo???i ?????u nh?? ?????u m???t ??en v?? ?????u g??, n?????c cam, n?????c ??p c?? chua');
                        }
                        if (slt_vitamin == 'Pantothenic acid (Vit. B5)') {
                            $('#nam').html('5 mg');
                            $('#nu').html('5 mg');
                            $('#loi_ich').html('Gi??p chuy???n h??a th???c ??n th??nh n??ng l?????ng. Gi??p t???o lipid (ch???t b??o), ch???t d???n truy???n th???n kinh, hormone steroid v?? hemoglobin');
                            $('#nguon').html('Th???t g??, l??ng ????? tr???ng, ng?? c???c nguy??n h???t, b??ng c???i xanh, n???m, b??, c??c s???n ph???m t??? c?? chua');
                        }
                        if (slt_vitamin == 'Biotin') {
                            $('#nam').html('30 mcg');
                            $('#nu').html('30 mcg');
                            $('#loi_ich').html('Gi??p chuy???n h??a th???c ??n th??nh n??ng l?????ng v?? t???ng h???p glucose. Gi??p t???o ra v?? ph?? v??? m???t s??? axit b??o. C???n thi???t cho x????ng v?? t??c kh???e m???nh');
                            $('#nguon').html('Ng?? c???c nguy??n h???t, th???t n???i t???ng, l??ng ????? tr???ng, ?????u n??nh v?? c??');
                        }
                        if (slt_vitamin == 'Vitamin C (Ascorbic Acid)') {
                            $('#nam').html('90 mg');
                            $('#nu').html('75 mg');
                            $('#loi_ich').html('Th???c ph???m gi??u vitamin C c?? th??? l??m gi???m nguy c?? m???c m???t s??? b???nh ung th??, bao g???m c??? ung th?? mi???ng, th???c qu???n, d??? d??y v?? v??.  S??? d???ng vitamin C b??? sung l??u d??i c?? th??? b???o v??? ch???ng l???i b???nh ?????c th???y tinh th???.  Gi??p t???o ra collagen, m???t m?? li??n k???t k???t n???i c??c v???t th????ng l???i v???i nhau v?? h??? tr??? c??c th??nh m???ch m??u. T??ng c?????ng h??? th???ng mi???n d???ch');
                            $('#nguon').html('Tr??i c??y v?? n?????c ??p tr??i c??y (?????c bi???t l?? cam qu??t), khoai t??y, b??ng c???i xanh, ???t chu??ng, rau bina, d??u t??y, c?? chua, c???i Brussels');
                        }
                        if (slt_vitamin == 'Vitamin D') {
                            $('#nam').html('15 mcg (600 IU)');
                            $('#nu').html('15 mcg (600 IU)');
                            $('#loi_ich').html('Gi??p duy tr?? n???ng ????? canxi v?? ph???t pho trong m??u b??nh th?????ng, gi??p x????ng ch???c kh???e.  Gi??p h??nh th??nh r??ng v?? x????ng.  Ch???t b??? sung c?? th??? l??m gi???m s??? ca g??y x????ng kh??ng ph???i c???t s???ng');
                            $('#nguon').html('S???a t??ng c?????ng ho???c b?? th???c v???t, ng?? c???c t??ng c?????ng, c?? b??o');
                        }
                        if (slt_vitamin == 'Vitamin E (Tocopherol)') {
                            $('#nam').html('15 mg');
                            $('#nu').html('15 mg');
                            $('#loi_ich').html('Ho???t ?????ng nh?? m???t ch???t ch???ng oxy h??a, v?? hi???u h??a c??c ph??n t??? kh??ng ???n ?????nh c?? th??? g??y h???i cho t??? b??o.  B???o v??? vitamin A v?? m???t s??? lipid nh???t ?????nh kh???i b??? h?? h???i. Ch??? ????? ??n gi??u vitamin E c?? th??? gi??p ng??n ng???a b???nh Alzheimer. ');
                            $('#nguon').html('D???u th???c v???t, n?????c s???t salad v?? b?? th???c v???t l??m t??? d???u th???c v???t, m???m l??a m??, rau l?? xanh, ng?? c???c nguy??n h???t, c??c lo???i h???t');
                        }
                        if (slt_vitamin == 'Vitamin K') {
                            $('#nam').html('120 mcg');
                            $('#nu').html('90 mcg');
                            $('#loi_ich').html('K??ch ho???t c??c protein v?? canxi c???n thi???t cho qu?? tr??nh ????ng m??u. C?? th??? gi??p ng??n ng???a g??y x????ng h??ng');
                            $('#nguon').html('B???p c???i, gan, tr???ng, s???a, rau bina, b??ng c???i xanh, rau m???m, c???i xo??n, c???i th??a v?? c??c lo???i rau xanh kh??c');
                        }
                        $('#name_vitamin').html(slt_vitamin);
                        $('#form_kq2').css('display', 'block');
                    });
                });
            </script>
            <center>
                <div class="calculator-table-form blue">
                    <form name="vitamin_class">
                        <table border="0">
                            <tbody>
                                <tr class="table-head">
                                    <td colspan="2">Ch???n chi ti???t c???a b???n</td>
                                </tr>
                                <tr>
                                    <td>C??c lo???i Vitamin</td>
                                    <td>
                                        <select name="slt_vitamin" id="slt_vitamin">
                                            <option>Ch???n</option>
                                            <option value="Vitamin A (Retinol)">Vitamin A (Retinol)</option>
                                            <option value="B1 (Thiamine)">B1 (Thiamine)</option>
                                            <option value="B2 (Ribloflavin)">B2 (Ribloflavin)</option>
                                            <option value="B6 (Pyridoxine)">B6 (Pyridoxine)</option>
                                            <option value="B12 (Cobalamin)">B12 (Cobalamin)</option>
                                            <option value="B3 Niacin (Nicotinamide or Nicotinic acid)">B3 Niacin
                                                (Nicotinamide or Nicotinic acid)</option>
                                            <option value="Folic acid">Folic acid</option>
                                            <option value="Pantothenic acid (Vit. B5)">Pantothenic acid (Vit. B5)
                                            </option>
                                            <option value="Biotin">Biotin</option>
                                            <option value="Vitamin C (Ascorbic Acid)">Vitamin C (Ascorbic Acid)</option>
                                            <option value="Vitamin D">Vitamin D</option>
                                            <option value="Vitamin E (Tocopherol)">Vitamin E (Tocopherol)</option>
                                            <option value="Vitamin K">Vitamin K</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span class="red">* </span>Y??u c???u
                                        <input type="button" class="btn" value="Ki???m tra" name="but_check"
                                            id="submit_btn">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </center>
            <div class="calculator-table-form blue" style="padding-bottom: 30px;display: none;" id="form_kq2">
                <table border="0" width="100%">
                    <tbody>
                        <tr class="table-head">
                            <td style="padding-left:5px" valign="top">T??n Vitamin</td>
                        </tr>
                        <tr>
                            <td style="padding-left:5px; " id="name_vitamin"></td>
                        </tr>
                        <tr class="table-head">
                            <td style="padding-left:5px" valign="top">Y??u c???u h??ng ng??y ?????i v???i Nam</td>
                        </tr>
                        <tr>
                            <td style="padding-left:5px; " valign="middle" id="nam"></td>
                        </tr>
                        <tr class="table-head">
                            <td style="padding-left:5px" valign="top">Y??u c???u h??ng ng??y ?????i v???i N???</td>
                        </tr>
                        <tr>
                            <td style="padding-left:5px; " valign="middle" id="nu"></td>
                        </tr>
                        <tr class="table-head">
                            <td style="padding-left:5px" valign="top">L???i ??ch</td>
                        </tr>
                        <tr>
                            <td style="padding-left:5px; " valign="middle" id="loi_ich"></td>
                        </tr>
                        <tr class="table-head">
                            <td style="padding-left:5px" valign="top">Ngu???n th???c ph???m</td>
                        </tr>
                        <tr>
                            <td style="padding-left:5px;text-align: left; " valign="middle" id="nguon"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
}}