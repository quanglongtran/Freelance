<?php
if(!function_exists('life_stressor')){

function life_stressor(){
    ob_start();
?>
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
<style type="text/css">
.calculator-table-form 
 input[type="checkbox"] {
    display: inline-block;
}
    .caltable-form table{background:#ecf9f2;border:1px solid #eee;border-bottom:2px solid #006666;box-shadow:0 0 20px rgba(0,0,0,.1),0 10px 20px rgba(0,0,0,.05),0 20px 20px rgba(0,0,0,.05),0 30px 20px rgba(0,0,0,.05)}.caltable-form td{border:solid 1px #fff;padding:10px}.caltable-form tfoot{background-color:#ccf2ff;color:#fff;padding:10px}.caltable-form tbody{color:#000;padding:10px}.table-head{background-color:#006666;color:#fff;padding:10px;text-align:left}.caltable-form input[type=text]:focus,select:focus,textarea:focus{min-height:32px;background:#fff;border:1px solid #ccc;outline:0;padding-right:5px;padding-left:5px}.caltable-form input[type=text],textarea{min-height:32px;background:#fff;border:1px solid #ccc;outline:0;padding-right:5px;padding-left:5px}.caltable-form select{min-height:32px;background:#fff;border:1px solid #ccc;outline:0}.caltable-form input[type=text]:focus,select:focus,textarea:focus{min-height:32px;background:#fff;border:1px solid #ccc;outline:0;padding-right:5px;padding-left:5px}input[type=text]:focus,select:focus,textarea:focus{min-height:32px}
.caltable-form .btn{background-color:#006666;border:0;border-radius:3px;box-shadow:0 0 2px 0 rgb(0 0 0 / 10%),0 2px 2px 0 rgb(0 0 0 / 20%);display:inline-block;color:#fff;font-size:1.105rem;line-height:1;padding:.75rem 1.5rem;text-decoration:none!important}

</style>
<script language="javascript">
          function checkgender() { if (document.chart.sex[0].checked) { gendercolor.className = "calculator-table-form blue"; } else { gendercolor.className = "calculator-table-form pink"; } }
          function check(count) {
            if (document.chart.sex[0].checked) {
              document.getElementById("ip_tbl").className = "bluebox2 blue_background"
              document.getElementById("ip_tbl1").className = "bluebox2 blue_background"
              document.getElementById("submit_btn").style.backgroundColor = "#0593E2"
              document.getElementById("submit_btn").style.Color = "#FFFFFF"

              age_l.className = "CalcDarkBgWhite1 tv12blue";
              age_r.className = "CalcLiteBgBlack";
              sex_l.className = "CalcDarkBgWhite1 tv12blue";
              sex_r.className = "CalcLiteBgBlack";
              ethinicity_l.className = "CalcDarkBgWhite1 tv12blue";
              ethinicity_r.className = "CalcLiteBgBlack";
              readlife.className = "CalcDarkBgWhite1 tv12blue";

              for (i = 1; i <= count + 1; i++) {
                //document.getElementById('cnt'+i).className = "CalcLiteBgBlack";
                document.getElementById('lifeevt' + i).className = "CalcLiteBgBlack";
                document.getElementById('eventid' + i).className = "CalcLiteBgBlack";
                document.getElementById("ip_tbl").className = "bluebox2 blue_background"
              }
            }
            if (document.chart.sex[1].checked) {
              document.getElementById("ip_tbl").className = "pinkbox2 pink_background"
              document.getElementById("ip_tbl1").className = "pinkbox2 pink_background"
              document.getElementById("submit_btn").style.backgroundColor = "#F394c6"
              document.getElementById("submit_btn").style.Color = "#FFFFFF"

              age_l.className = "CalcfemaleBg tv12blue";
              age_r.className = "CalcfemaleBg1";
              sex_l.className = "CalcfemaleBg tv12blue";
              sex_r.className = "CalcfemaleBg1";
              ethinicity_l.className = "CalcfemaleBg tv12blue";
              ethinicity_r.className = "CalcfemaleBg1";
              readlife.className = "CalcfemaleBg tv12blue";

              for (i = 1; i <= count + 1; i++) {
                //document.getElementById('cnt'+i).className = "CalcfemaleBg1";
                document.getElementById('lifeevt' + i).className = "CalcfemaleBg1";
                document.getElementById('eventid' + i).className = "CalcfemaleBg1";
                document.getElementById("ip_tbl").className = "pinkbox2 pink_background"
              }
            }
          }
          jQuery(document).ready(function () {
            $('#submit_btn').click(function () {
              var ethnicity = $("#ethnicity :selected").text();
              var sex = $("input[name='sex']:checked").val();
              var age = $("input[name='age']").val();
              if (document.chart.ethnicity.value == "-1") {
                alert("Vui l??ng ch???n d??n t???c c???a b???n!");
                document.chart.ethnicity.focus();
                return false;
              }
              if ((sex != 'm') && (sex != 'f')) {
                alert("Vui l??ng ch???n gi???i t??nh!");
                return false;
              }
              if (age == "") {
                alert("Vui l??ng ch???n tu???i c???a b???n!");
                $("input[name='age']").focus();
                return false;
              }
              if (!age.match(/^[0-9]+(\.[0-9]+)?$/)) {
                alert("Vui l??ng ch???n tu???i h???p l???!");
                $("input[name='age']").focus();
                return false;
              }
              if ((age <= 13) || (age >= 76)) {
                alert("M??y t??nh n??y ho???t ?????ng t???t nh???t cho nh???ng ng?????i t??? 14 ?????n 75 tu???i!");
                $("input[name='age']").focus();
                return false;
              }
              var total = 0;
              $.map($("input:checkbox:checked"), function (params, id) {
                total += parseInt($(params).val());
              });
              if (total <= 150){
                $('#muc_do').html('t????ng ?????i th???p');
              } else if (total > 150 && total <= 299){
                $('#muc_do').html('??? m???c trung b??nh');
              } else if (total > 299 ){
                $('#muc_do').html('l?? cao');
              }
              if (sex == 'm') {
                $('#form_sex').html('Nam');
              } else {
                $('#form_sex').html('N???');
              }
              $('#form_age').html(age);
              $('#form_kq2').css('display', 'block');
            })
          })
          function numeralsOnly(evt) {
            evt = (evt) ? evt : event;
            var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : ((evt.which) ? evt.which : 0));
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
              return false;
            }
            return true;
          }
          function mail() {
            document.mailform.submit();
          }
        </script>

        <div class="calculator-table-form blue" id="gendercolor">

          <form name="chart" method="post">
            <table id="ip_tbl1" border="0" align="center" cellpadding="5" cellspacing="0" width="100%">
              <tr class="table-head">
                <td colspan="2">Bi???u ????? tr???m c???m cu???c s???ng</td>
              </tr>
              <tr>
                <td id="ethinicity_l">D??n t???c<span class="mandatory-star">&nbsp;*</span></td>
                <td id="ethinicity_r" colspan="2" style="padding:10px;" valign="middle">
                  <select name="ethnicity" style="width:140px" id="ethnicity">
                    <option value="-1">Ch???n</option>
                    <option value="0">Ng?????i Ch??u ??</option>
                    <option value="1">Ng?????i ch??u Phi</option>
                    <option value="2">Ng?????i da tr???ng</option>
                    <option value="3">Ng?????i T??y Ban Nha</option>
                    <option value="4">C??c nh??m d??n c?? kh??c</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td id="sex_l">Gi???i t??nh<span class="mandatory-star">&nbsp;*</span></td>
                <td id="sex_r" colspan="2" style="padding:10px" valign="middle" onclick="check()">
                  <input type="radio" value="m" name="sex" onclick="checkgender('44')">Nam
                  <input type="radio" value="f" name="sex" onclick="checkgender('44')">N???
                </td>
              </tr>
              <tr>
                <td id="age_l" style="text-align: left;">Tu???i<span class="mandatory-star">&nbsp;*</span></td>
                <td id="age_r" colspan="2" style="padding:10px;text-align: left;" valign="middle">
                  <input type="text" name="age" size="8" style="width:140px" maxlength="2"
                    onKeyPress="return numeralsOnly(event)">
                </td>
              </tr>
            </table>

            <table width="100%">
              <tr height="50">
                <td id="readlife" colspan="2"><b>?????c c??c s??? ki???n trong ?????i ???????c li???t k?? b??n d?????i v?? n???u b???t k??? s??? ki???n n??o trong s??? n??y ???? x???y ra trong hai n??m qua, h??y ch???n h???p.</b> </td>
              </tr>

              <tr>
                <td bgcolor="#ffffff" width="100%" colspan="2"><b>H??n nh??n v?? c??c m???i quan h???</b></td>
              </tr>

              <tr>

                <td id="lifeevt1" bgcolor="#FFF8F7">&nbsp;<span id="eventid1"><input type="checkbox" name="ck_event1"
                      value="73"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Ly h??n
                  <span id="cnt1" style="display:none">1.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt2" bgcolor="#FFF8F7">&nbsp;<span id="eventid2"><input type="checkbox" name="ck_event2"
                      value="39"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Th??m m???t th??nh vi??n m???i trong gia ????nh (c?? con, nh???n con nu??i, ng?????i l???n tu???i chuy???n ?????n, v.v.)
                  <span id="cnt2" style="display:none">2.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt3" bgcolor="#FFF8F7">&nbsp;<span id="eventid3"><input type="checkbox" name="ck_event3"
                      value="35"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">S??? l?????ng c??c cu???c tranh c??i v???i v??? / ch???ng thay ?????i (t???c l?? nhi???u h??n ho???c ??t h??n)
                  <span id="cnt3" style="display:none">3.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt4" bgcolor="#FFF8F7">&nbsp;<span id="eventid4"><input type="checkbox" name="ck_event4"
                      value="45"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">T??i h??n
                  <span id="cnt4" style="display:none">4.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt5" bgcolor="#FFF8F7">&nbsp;<span id="eventid5"><input type="checkbox" name="ck_event5"
                      value="65"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Ly th??n
                  <span id="cnt5" style="display:none">5.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt6" bgcolor="#FFF8F7">&nbsp;<span id="eventid6"><input type="checkbox" name="ck_event6"
                      value="50"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">H??n nh??n
                  <span id="cnt6" style="display:none">6.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt7" bgcolor="#FFF8F7">&nbsp;<span id="eventid7"><input type="checkbox" name="ck_event7"
                      value="40"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Mang thai
                  <span id="cnt7" style="display:none">7.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt8" bgcolor="#FFF8F7">&nbsp;<span id="eventid8"><input type="checkbox" name="ck_event8"
                      value="39"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Kh?? kh??n v??? chuy???n T??nh d???c
                  <span id="cnt8" style="display:none">8.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt9" bgcolor="#FFF8F7">&nbsp;<span id="eventid9"><input type="checkbox" name="ck_event9"
                      value="29"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Con c??i b??? nh?? ra ??i (l?? do k???t h??n, h???c ?????i h???c, nh???p ng??, v.v.)
                  <span id="cnt9" style="display:none">9.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt10" bgcolor="#FFF8F7">&nbsp;<span id="eventid10"><input type="checkbox" name="ck_event10"
                      value="29"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">R???c r???i ??? r??? hay l??m d??u
                  <span id="cnt10" style="display:none">10.</span>
                </td>



              </tr>

              <tr>
                <td bgcolor="#ffffff" width="100%" colspan="2"><b>T??i ch??nh</b></td>
              </tr>

              <tr>

                <td id="lifeevt11" bgcolor="#FFF8F7">&nbsp;<span id="eventid11"><input type="checkbox" name="ck_event11"
                      value="30"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">B??? T???ch thu t??i s???n th??? ch???p ho???c vay n???
                  <span id="cnt11" style="display:none">11.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt12" bgcolor="#FFF8F7">&nbsp;<span id="eventid12"><input type="checkbox" name="ck_event12"
                      value="17"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Vay ti???n (mua xe, tivi, t??? ????ng, v.v.)
                  <span id="cnt12" style="display:none">12.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt13" bgcolor="#FFF8F7">&nbsp;<span id="eventid13"><input type="checkbox" name="ck_event13"
                      value="31"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Th??? ch???p (mua nh??, c?? s??? kinh doanh, v.v.)
                  <span id="cnt13" style="display:none">13.</span>
                </td>



              </tr>

              <tr>
                <td bgcolor="#ffffff" width="100%" colspan="2"><b>C??ng vi???c</b></td>
              </tr>

              <tr>

                <td id="lifeevt14" bgcolor="#FFF8F7">&nbsp;<span id="eventid14"><input type="checkbox" name="ck_event14"
                      value="47"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">B??? sa th???i trong c??ng vi???c
                  <span id="cnt14" style="display:none">14.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt15" bgcolor="#FFF8F7">&nbsp;<span id="eventid15"><input type="checkbox" name="ck_event15"
                      value="36"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Chuy???n sang m???t c??ng vi???c kh??c
                  <span id="cnt15" style="display:none">15.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt16" bgcolor="#FFF8F7">&nbsp;<span id="eventid16"><input type="checkbox" name="ck_event16"
                      value="39"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">??i???u ch???nh ho???t ?????ng kinh doanh l???n
                  <span id="cnt16" style="display:none">16.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt17" bgcolor="#FFF8F7">&nbsp;<span id="eventid17"><input type="checkbox" name="ck_event17"
                      value="38"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n v??? t??nh tr???ng t??i ch??nh (t???i t??? h??n ho???c t???t h??n r???t nhi???u so v???i b??nh th?????ng)
                  <span id="cnt17" style="display:none">17.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt18" bgcolor="#FFF8F7">&nbsp;<span id="eventid18"><input type="checkbox" name="ck_event18"
                      value="15"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i v??? s??? l???n g???p g??? gia ????nh (t???c l?? nhi???u h??n ho???c ??t h??n)
                  <span id="cnt18" style="display:none">18.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt19" bgcolor="#FFF8F7">&nbsp;<span id="eventid19"><input type="checkbox" name="ck_event19"
                      value="16"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n trong th??i quen ng??? (t???c l?? nhi???u hay ??t)
                  <span id="cnt19" style="display:none">19.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt20" bgcolor="#FFF8F7">&nbsp;<span id="eventid20"><input type="checkbox" name="ck_event20"
                      value="18"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n trong c??c ho???t ?????ng x?? h???i (t???c l?? c??u l???c b???, xem phim, tham quan, v.v.)
                  <span id="cnt20" style="display:none">20.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt21" bgcolor="#FFF8F7">&nbsp;<span id="eventid21"><input type="checkbox" name="ck_event21"
                      value="19"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i v??? lo???i h??nh v?? / ho???c th???i gian gi???i lao, ngh??? ng??i, th?? vui
                  <span id="cnt21" style="display:none">21.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt22" bgcolor="#FFF8F7">&nbsp;<span id="eventid22"><input type="checkbox" name="ck_event22"
                      value="12"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">C??c ng??y ngh??? l??? l???n
                  <span id="cnt22" style="display:none">22.</span>
                </td>



              </tr>
              <tr>

                <td id="lifeevt22" bgcolor="#FFF8F7">&nbsp;<span id="eventid22"><input type="checkbox" name="ck_event23"
                      value="44"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n v??? s???c kh???e ho???c h??nh vi c???a m???t th??nh vi??n trong gia ????nh
                  <span id="cnt22" style="display:none">23.</span>
                </td>



              </tr>


              <tr>

                <td id="lifeevt23" bgcolor="#FFF8F7">&nbsp;<span id="eventid23"><input type="checkbox" name="ck_event24"
                      value="28"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Th??nh t???u c?? nh??n n???i b???t
                  <span id="cnt23" style="display:none">24.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt24" bgcolor="#FFF8F7">&nbsp;<span id="eventid24"><input type="checkbox" name="ck_event25"
                      value="24"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i c??c th??i quen c?? nh??n (t???c l?? ??n m???c, hi???p h???i, b??? h??t thu???c, v.v.)
                  <span id="cnt24" style="display:none">25.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt25" bgcolor="#FFF8F7">&nbsp;<span id="eventid25"><input type="checkbox" name="ck_event26"
                      value="13"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Ngh??? ph??p
                  <span id="cnt25" style="display:none">26.</span>
                </td>



              </tr>

              <tr>
                <td bgcolor="#ffffff" width="100%" colspan="2"><b>Lu???t ph??p</b></td>
              </tr>

              <tr>

                <td id="lifeevt38" bgcolor="#FFF8F7">&nbsp;<span id="eventid26"><input type="checkbox" name="ck_event27"
                      value="4"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">B??? giam gi??? trong nh?? t??
                  <span id="cnt38" style="display:none">27.</span>
                </td>



              </tr>
              <tr>

                <td id="lifeevt34" bgcolor="#FFF8F7">&nbsp;<span id="eventid27"><input type="checkbox" name="ck_event28"
                      value="11"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Vi ph???m lu???t nh??? (v?? d??? nh?? v?? giao th??ng, ??i ???u, v.v.
                  <span id="cnt34" style="display:none">28.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt35" bgcolor="#FFF8F7">&nbsp;<span id="eventid28"><input type="checkbox" name="ck_event29"
                      value="29"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n v??? tr??ch nhi???m trong c??ng vi???c (t???c l?? th??ng ch???c, c??ch ch???c, v.v.)
                  <span id="cnt35" style="display:none">29.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt36" bgcolor="#FFF8F7">&nbsp;<span id="eventid29"><input type="checkbox" name="ck_event30"
                      value="20"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Nh???ng thay ?????i l???n v??? gi??? gi???c ho???c ??i???u ki???n l??m vi???c (c???c h??n hay nh??n h??n)
                  <span id="cnt36" style="display:none">30.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt37" bgcolor="#FFF8F7">&nbsp;<span id="eventid30"><input type="checkbox" name="ck_event31"
                      value="45"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Ngh??? h??u.
                  <span id="cnt37" style="display:none">31.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt39" bgcolor="#FFF8F7">&nbsp;<span id="eventid31"><input type="checkbox" name="ck_event32"
                      value="26"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">V??? / ch???ng b???t ?????u ho???c ng???ng l??m vi???c
                  <span id="cnt39" style="display:none">32.</span>
                </td>
              </tr>
              <tr>

                <td id="lifeevt39" bgcolor="#FFF8F7">&nbsp;<span id="eventid32"><input type="checkbox" name="ck_event33"
                      value="23"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Nh???ng r???c r???i v???i c???p tr??n
                  <span id="cnt39" style="display:none">33.</span>
                </td>
              </tr>

              <tr>
                <td bgcolor="#ffffff" width="100%" colspan="2"><b>Thay ?????i l???i s???ng</b></td>
              </tr>

              <tr>

                <td id="lifeevt40" bgcolor="#FFF8F7">&nbsp;<span id="eventi33"><input type="checkbox" name="ck_event34"
                      value="26"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">B???t ?????u ho???c ng???ng h???c ch??nh th???c
                  <span id="cnt40" style="display:none">34.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt41" bgcolor="#FFF8F7">&nbsp;<span id="eventid34"><input type="checkbox" name="ck_event35"
                      value="20"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i n??i c?? tr??
                  <span id="cnt41" style="display:none">35.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt42" bgcolor="#FFF8F7">&nbsp;<span id="eventid35"><input type="checkbox" name="ck_event36"
                      value="20"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Chuy???n sang tr?????ng m???i
                  <span id="cnt42" style="display:none">36.</span>
                </td>



              </tr>

              <tr>

                <td id="lifeevt43" bgcolor="#FFF8F7">&nbsp;<span id="eventid36"><input type="checkbox" name="ck_event37"
                      value="19"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n trong ho???t t??n gi??o (t???c l?? nhi???u hay ??t)
                  <span id="cnt43" style="display:none">37.</span>
                </td>



              </tr>
              <tr>

                <td id="lifeevt43" bgcolor="#FFF8F7">&nbsp;<span id="eventid37"><input type="checkbox" name="ck_event38"
                      value="15"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n trong th??i quen ??n u???ng (nhi???u hay ??t, gi??? ??n, m??i tr?????ng xung quanh, v.v.)
                  <span id="cnt43" style="display:none">38.</span>
                </td>



              </tr>
              <tr>

                <td id="lifeevt43" bgcolor="#FFF8F7">&nbsp;<span id="eventid38"><input type="checkbox" name="ck_event39"
                      value="25"></span></td>
                <td style="white-space: pre-wrap;word-wrap: break-word; ">Thay ?????i l???n v??? ??i???u ki???n s???ng (t???c l?? nh?? m???i, tu s???a, xu???ng c???p, v.v.)
                  <span id="cnt43" style="display:none">39.</span>
                </td>



              </tr>

              <tr>

                <td colspan="2">
                  <font class="required">* Y??u c???u</font>
                  <input type="button" value="X??c nh???n" name="but_check" class="flat-btn"
                    id="submit_btn">
                </td>
              </tr>
            </table>
          </form>
        </div>
      <script language="javascript">
        document.onload = check('44');
      </script><br>
      <div class="calculator-table-form blue" style="padding-top: 10px;display: none;" id="form_kq2">

        <table width="100%" cellpadding="7" cellspacing="1" class="tv12blue" bgcolor="#ffffff">
              <tbody><tr class="table-head"><td colspan="2">K???t qu???:</td></tr>
          <tr>
            <td class="CalcDarkBgWhite1 tbold" align="center">Gi???i t??nh</td>
            <td class="CalcLiteBgBlack" id="form_sex"></td>
          </tr>
          <tr>
            <td class="CalcDarkBgWhite1 tbold" align="center">Tu???i</td>
            <td class="CalcLiteBgBlack" id="form_age"></td>
          </tr>
          <tr bgcolor="#edfbfe">
            <td colspan="2" align="center">
              <table width="100%" bgcolor="white" class="tv12blue" cellpadding="10">
                <tbody>
                  <tr>
                    <td align="justify" style="line-height:150%" valign="middle">
                    kh??? n??ng g???p ph???i v???n ????? tr???m c???m c???a b???n  <font class="tv12red"><b id="muc_do"></b></font></td>
                  </tr>
                  <tr>
                    <td>
                      S??? th???t v??? tr???m c???m:<br>
                              Tr???m c???m c?? th??? g???m ba lo???i<br>
                         Tr???m c???m do cu???c s???ng th?????ng ng??y( c??ng vi???c, gia ????nh ..)<br>
                         Tr???m c???m do nh???ng v???n ????? kh??ng l?????ng tr?????c( m???t vi???c, ly h??n, b???nh t???t,???)<br>
                         Tr???m c???m do ch???n th????ng (tai n???n nghi??m tr???ng, tai h???a thi??n nhi??n)<br>
                              Cu???c s???ng m?? kh??ng c?? tr???m c???m s??? khi???n cho con ng?????i kh??ng h???nh ph??c h??n v?? th??nh c??ng h??n.<br>
                              M???i ng?????i s??? ph???n ???ng v???i nh???ng v???n ????? trong cu???c s???ng kh??c nhau.<br>
                              Nh???ng gi???i ph??p th?? gi??n nh?? th??? v?? thi???n gi??p gi???m tr???m c???m.<br>
                              Yoga t??ng g???p ????i kh??? n??ng trong vi???c t??ng ????? d???o dai, s???c m???nh v?? ????? b???n c??ng nh?? gi???m lo l???ng v?? lo l???ng.

                    </td>
                  </tr>
              </tbody></table>
            </td>
          </tr>
        
        </tbody></table>
    </div>
<?php
$result = ob_get_contents();
ob_end_clean();
return $result;
}}