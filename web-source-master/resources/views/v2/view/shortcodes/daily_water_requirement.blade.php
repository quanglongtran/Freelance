<?php
if(!function_exists('daily_water_requirement')){

function daily_water_requirement(){
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

    <div>
                <h2>C??ng c??? t??nh l?????ng n?????c c???n u???ng h??ng ng??y</h2>
                <p>
                    B???n c?? m???c sai l???m khi ?????i ?????n khi c???m th???y kh??t r???i m???i u???ng n?????c hay kh??ng? <br>
                    Kh??t n?????c kh??ng ph???i l?? m???t t??n hi???u t??? c?? th??? cho th???y r???ng m???c n?????c trong c?? th??? b???n ??ang c???n ki???t. <br>
                    ???? l?? m???t c???nh b??o r???ng b???n ??ang b??? m???t n?????c v?? b???n c???n ph???i u???ng n?????c s???m. <br>
                    V??o th???i ??i???m b???n c???m th???y kh??t, c?? th??? b???n ???? m???t 1% l?????ng n?????c. U???ng n?????c ?????u ?????n ????? b???n kh??ng b??? m???t n?????c.<br>
                    C??ng c??? t??nh n??y gi??p b???n x??c ?????nh l?????ng n?????c b???n ph???i u???ng m???i ng??y ????? tr??nh b??? m???t n?????c. <br>
                    H??y nh??? r???ng, ????y ch??? l?? ?????c t??nh. <br>
                    S??? l?????ng th???c t??? m?? m???t ng?????i c???n ph??? thu???c v??o nhi???u y???u t??? nh?? t???p th??? d???c, b???nh t???t v?? h??m l?????ng ch???t l???ng trong kh???u ph???n ??n. <br>
                    Ph??? n??? mang thai v?? cho con b?? c???n u???ng th??m ch???t l???ng ????? gi??? ????? n?????c.
                </p>
            </div>
            <script language="javascript">
                jQuery(document).ready(function () {
                    $('#submit_btn').click(function () {
                        var weight = $("input[name='pounds']").val();
                        var time = $("input[name='time']").val();
                        if (weight == "" ) {
                            alert("H??y nh???p c??n n???ng c???a b???n");
                            return false;
                        } 
                        if (!weight.match(/^[0-9]+(\.[0-9]+)?$/))
                        {
                            alert("H??y nh???p ????ng ?????nh d???ng c??n n???ng!");
                            return false;
                        } 
                        if (time == ""){
                            alert("H??y nh???p th???i gian t???p th??? d???c m???i ng??y c???a b???n");
                            return false;
                        }
                        if (!time.match(/^[0-9]+(\.[0-9]+)?$/))
                        {
                            alert("H??y nh???p ????ng ?????nh d???ng th???i gian t???p th??? d???c m???i ng??y!");
                            return false;
                        } 
                        var lit = (weight*2.2*0.67*0.03) + (time/30)*12*0.03;
                        $('#lit').html(lit);
                        $('#form_kq2').css('display', 'block');
                    });
                });
            </script>

            <div class="calculator-table-form blue" id="gendercolor">

                <form method="POST" name="infant">
                    <input type="hidden" name="wt">
                    <center>
                        <table cellpadding="0" cellspacing="0" class="tv12black">
                            <tbody>
                                <tr class="table-head">
                                    <td colspan="2">Nh???p chi ti???t</td>

                                </tr>

                                <tr>
                                    <td>
                                        C??n n???ng<span class="mandatory-star">*</span>
                                    </td>
                                    <td>
                                        <input size="10" type="text" name="pounds" maxlength="3" value="70">
                                        &nbsp;
                                        Kg
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Th???i gian t???p th??? d???c m???i ng??y<span class="mandatory-star">*</span>
                                    </td>
                                    <td>
                                        <input size="10" type="text" name="time" maxlength="5" value="120">
                                        &nbsp;
                                        Ph??t
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"> <span class="required">* Y??u c???u</span>
                                        <input type="button" value="X??c nh???n" name="B1" class="flat-btn" id="submit_btn">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </center>
                </form>
            </div>
            <div class="calculator-table-form blue" style="padding-bottom: 20px;display: none;" id="form_kq2">
                <form name="waterreq">           
                  <table width="100%" cellpadding="10" style="border: 1px solid #42A0E2" bgcolor="white" class="tv12blue">    
                  <tbody><tr class="table-head"><td>K???t qu???:</td></tr>         
                            <tr>
                                <td>B???n c???n u???ng ??t nh???t <font class="tv12red"><b id="lit"></b></font> l??t n?????c h??ng ng??y.</td>
                            </tr>
                            
                        </tbody>
                    </table>              
                </form>
            </div>
            <div>
                <p>
                    Th??ng tin quan tr???ng v??? n?????c:<br>
                        ??? C?? th??? con ng?????i ???????c t???o th??nh t??? g???n nh?? 60% -70% l?? n?????c.<br>
                        ??? ????? u???ng nh?? tr??, c?? ph?? v?? t???t c??? ????? u???ng c?? c???n ?????u l?? ch???t l???ng kh??? n?????c v?? s??? ????o th???i n?????c ra kh???i c?? th??? b???n. V?? v???y, n???u b???n kh??t, h??y ?????m b???o r???ng b???n kh??ng u???ng b???t k??? ch???t l???ng l??m m???t n?????c n??o.<br>
                        ??? U???ng m???t c???c n?????c tr?????c b???a ??n. N?? kh??ng ch??? ki???m so??t vi???c ??n u???ng c???a b???n v?? gi??p gi??? cho c??n n???ng c???a b???n ??? m???c kh???e m???nh m?? c??n gi??p b???o v??? th??nh d??? d??y c???a b???n kh???i t??c h???i c???a axit ti??u h??a.<br>
                        ??? U???ng ????? n?????c s??? gi??p b???n gi???m c??n v?? n???u kh??ng c?? n?????c, c?? th??? kh??ng th??? chuy???n h??a ch???t b??o m???t c??ch ?????y ?????.<br>
                        ??? C??c tri???u ch???ng m???t n?????c bao g???m nh???c ?????u, ??au b???ng, thay ?????i h??nh vi, tr???m c???m.<br>
                        ??? M???t 22% -30% t???ng l?????ng n?????c trong c?? th??? c?? th??? d???n ?????n h??n m?? v?? t??? vong

                </p>
            </div>
<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
}}