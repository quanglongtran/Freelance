<?php
if(!function_exists('shortcode_119')){

function shortcode_119(){
    ob_start();
?>
 <style>
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
                    $('#submit_btn').click(function () {
                        var sex = $("input[name='r1']:checked").val();
                        var babyname = $("input[name='babyname']").val();
                        var day = $("#day :selected").val();
                        var month = $("#month :selected").val();
                        var year = $("#year :selected").val();
                        if (babyname == ''){
                            alert('B???n ch??a nh???p t??n c???a b??!');
                            return false;
                        } 
                        if (!babyname.match(/^([a-zA-Z]+[ a-zA-Z]*)$/)) {
                            alert('Vui l??ng ch??? nh???p b???ng ch??? c??i!');
                            return false;
                        }
                        if (sex != 'male' && sex != 'female') {
                            alert('B???n ch??a ch???n gi???i t??nh!');
                            return false;
                        }
                        if(day == ""){alert("Vui l??ng ch???n ng??y!");return false;}
                        if(month == ""){alert("Vui l??ng ch???n th??ng!");return false;}
                        if(year == ""){alert("Vui l??ng ch???n n??m!");return false;}  
                        var dd1=new Date();
                        var dd2=new Date(year,month-1,day);
                        cd=dd2.getDate();
                        if(day!=cd || dd1<dd2) 
                        {
                            alert("Ng??y kh??ng h???p l???!");
                            return false;
                        }
                        $('#name_').html(babyname);
                        $('#birthday').html( 'Ng??y ' + day + ' , ' + 'Th??ng ' + month + ' , ' + 'N??m ' +year);
                        $('#day_').html(day + ' ng??y');
                        $('#day_1').html(day + ' ng??y');
                        $('#day_2').html(day + ' ng??y');
                        $('#day_3').html(day + ' ng??y');
                        $('#day_4').html(day + ' ng??y');
                        $('#day_5').html(day + ' ng??y');
                        $('#form_kq2').css('display', 'block');
                    })
                });
            </script>
            <div class="calculator-table-form blue" id="gendercolor">
                <form method="POST" name="immunization">
                    <table cellpadding="0" cellspacing="0" class="tv12black">
                        <tbody>
                            <tr class="table-head">
                                <td colspan="2">L???ch ti??m ch???ng</td>
                            </tr>
                            <tr>
                                <td>T??n c???a b??</td>
                                <td><input type="text" name="babyname" maxlength="50">
                                </td>
                            </tr>
                            <tr>
                                <td>Gi???i t??nh <span class="mandatory-star">*</span> </td>
                                <td><input type="radio" name="r1" value="male" checked="checked"
                                        onclick="checkgender();">Nam
                                    <input type="radio" name="r1" value="female" onclick="checkgender();">N???
                                </td>
                            </tr>
                            <tr>
                                <td>Ng??y sinh<span class="mandatory-star">*</span></td>
                                <td><select size="1" name="dd" id="day">
                                        <option value="">Ng??y</option>
                                        <script language="javascript">
                                            for (i = 1; i <= 31; i++) {
                                                document.write('<option value="' + i + '">' + i + '</option>');
                                            }
                                        </script>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select size="1" name="mm" id="month">
                                        <option value="">Th??ng</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select> <select size="1" name="yy" id="year">
                                        <option value="">N??m</option>
                                        <script language="javascript">
                                            sdate = new Date();
                                            for (i = (sdate.getFullYear() - 10); i <= sdate.getFullYear(); i++) {
                                                document.write('<option value="' + i + '">' + i + '</option>');
                                            }
                                        </script>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><span class="required">* y??u c???u</span>
                                    <input class="flat-btn" type="button" value="X??c nh???n" name="but_send"
                                        id="submit_btn">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="report-content" id="form_kq2" style="padding-top: 10px; display: none;">
                <div class="vscroll">
                    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="100%" align="center">

                                    <div class="report-content">

                                        <div class="calcresult ">
                                            <h3>K???t qu???</h3>
                                            <div class="content-inner" style="font-size:14px; ">

                                                <div style="text-align:left; padding-left:15px;"> <b>T??n em b?? :</b> <b id="name_"></b>
                                                </div>
                                                <div style="text-align:left; padding-left:15px;"> <br><b>Ng??y sinh
                                                        :</b> <b id="birthday"></b></div>
                                                <table cellpadding="0" cellspacing="0" class="report-content"
                                                    style="font-size:14px; ">
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>Th???i gian</strong></td>
                                                            <td><strong>Lo???i v???c xin</strong></td>
                                                            <td><strong>H???n ng??y ti??m</strong></td>
                                                        </tr>


                                                        <tr>
                                                            <td>S?? sinh</td>
                                                            <td>Ti??m v???c xin Vi??m gan B m??i 0
                                                                Lao (BCG)
                                                                </td>
                                                            <td>24 gi??? sau sinh</td>

                                                        </tr>


                                                        <tr>
                                                            <td>2 th??ng</td>
                                                            <td>Ti??m v???c xin B???ch h???u- Ho g??- U???n v??n- Vi??m gan B- Hib m??i 1<br>
                                                                U???ng v???c xin b???i li???t l???n 1
                                                                </td>
                                                            <td><b id="day_"></b> + 2 th??ng</td>

                                                        </tr>


                                                        <tr>
                                                            <td>3 th??ng</td>
                                                            <td>Ti??m v???c xin B???ch h???u- Ho g??- U???n v??n- Vi??m gan B- Hib m??i 2<br>
                                                                U???ng v???c xin b???i li???t l???n 2</td>
                                                            <td><b id="day_1"></b> + 3 th??ng</td>

                                                        </tr>


                                                        <tr>
                                                            <td>4 th??ng</td>
                                                            <td>Ti??m v???c xin B???ch h???u- Ho g??- U???n v??n- Vi??m gan B- Hib m??i 3<br>
                                                                U???ng v???c xin b???i li???t l???n 3
                                                                </td>
                                                            <td><b id="day_2"></b> + 4 th??ng</td>

                                                        </tr>


                                                        <tr>
                                                            <td>5 th??ng</td>
                                                            <td>Ti??m v???c xin b???i li???t ??a gi?? (IPV)</td>
                                                            <td><b id="day_3"></b> + 5 th??ng</td>

                                                        </tr>


                                                        <tr>
                                                            <td>9 th??ng</td>
                                                            <td>Ti??m v???c xin s???i m??i 1</td>
                                                            <td><b id="day_4"></b> + 9 th??ng</td>

                                                        </tr>


                                                        <tr>
                                                            <td>18 th??ng</td>
                                                            <td>Ti??m v???c xin b???ch h???u- ho g??- u???n v??n m??i 4<br>
                                                                Ti??m v???c xin s???i-rubella
                                                                </td>
                                                            <td><b id="day_5"></b> + 18 th??ng</td>

                                                        </tr>


                                                        <tr>
                                                            <td>T??? 12 th??ng tu???i</td>
                                                            <td>Ti??m v???c xin vi??m n??o Nh???t b???n m??i 1<br>
                                                                Ti??m v???c xin vi??m n??o Nh???t b???n m??i 2 (1-2 tu???n sau m??i 1)<br>
                                                                Ti??m v???c xin vi??m n??o Nh???t b???n m??i 3 (1 n??m sau m??i 2)<br></td>
                                                            <td></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
}}