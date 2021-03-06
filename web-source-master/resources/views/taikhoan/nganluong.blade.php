<style>
    
    ul.bankList {
        clear: both;
        height: 202px;
        width: 636px;
    }
    ul.bankList li {
        list-style-position: outside;
        list-style-type: none;
        cursor: pointer;
        float: left;
        margin-right: 0;
        padding: 5px 2px;
        text-align: center;
        width: 90px;
    }
    .list-content li {
        list-style: none outside none;
        margin: 0 0 10px;
    }
    
    .list-content li .boxContent {
        display: none;
        width: 636px;
        border:1px solid #cccccc;
        padding:10px; 
    }
    .list-content li.active .boxContent {
        display: block;
    }
    .list-content li .boxContent ul {
        height:280px;
    }
    
    i.VISA, i.MASTE, i.AMREX, i.JCB, i.VCB, i.TCB, i.MB, i.VIB, i.ICB, i.EXB, i.ACB, i.HDB, i.MSB, i.NVB, i.DAB, i.SHB, i.OJB, i.SEA, i.TPB, i.PGB, i.BIDV, i.AGB, i.SCB, i.VPB, i.VAB, i.GPB, i.SGB,i.NAB,i.BAB 
    { width:80px; height:30px; display:block; background:url(https://www.nganluong.vn/webskins/skins/nganluong/checkout/version3/images/bank_logo.png) no-repeat;}
    i.MASTE { background-position:0px -31px}
    i.AMREX { background-position:0px -62px}
    i.JCB { background-position:0px -93px;}
    i.VCB { background-position:0px -124px;}
    i.TCB { background-position:0px -155px;}
    i.MB { background-position:0px -186px;}
    i.VIB { background-position:0px -217px;}
    i.ICB { background-position:0px -248px;}
    i.EXB { background-position:0px -279px;}
    i.ACB { background-position:0px -310px;}
    i.HDB { background-position:0px -341px;}
    i.MSB { background-position:0px -372px;}
    i.NVB { background-position:0px -403px;}
    i.DAB { background-position:0px -434px;}
    i.SHB { background-position:0px -465px;}
    i.OJB { background-position:0px -496px;}
    i.SEA { background-position:0px -527px;}
    i.TPB { background-position:0px -558px;}
    i.PGB { background-position:0px -589px;}
    i.BIDV { background-position:0px -620px;}
    i.AGB { background-position:0px -651px;}
    i.SCB { background-position:0px -682px;}
    i.VPB { background-position:0px -713px;}
    i.VAB { background-position:0px -744px;}
    i.GPB { background-position:0px -775px;}
    i.SGB { background-position:0px -806px;}
    i.NAB { background-position:0px -837px;}
    i.BAB { background-position:0px -868px;}
    
    ul.cardList li {
        cursor: pointer;
        float: left;
        margin-right: 0;
        padding: 5px 4px;
        text-align: center;
        width: 90px;
    }
</style>

    <form name="NLpayBank" action="{{route('naptien')}}" method="post">
        {{csrf_field()}}
        <h2>Th??ng tin n???p ti???n</h2>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <ul class="alert alert-danger">
                    <li>{{ $error }}</li>
                </ul>
            @endforeach
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table style="clear:both;width:100%;max-width:500px;padding-left:46px;"> 
            <tr>
                <td>
                     <ul>
                         <li>
                            <input type="radio" id="total_amount1" name="total_amount" value="50000" checked>
                            <label for="total_amount1">50.000??</label>
                         </li>
                         <li>
                            <input type="radio" id="total_amount2" name="total_amount" value="100000" {{($total_amount == 100000)? 'checked' : ''}}>
                            <label for="total_amount2">100.000??</label>
                         </li>
                         <li>
                            <input type="radio" id="total_amount3" name="total_amount" value="200000" {{($total_amount == 200000)? 'checked' : ''}}>
                            <label for="total_amount3">200.000??</label>
                         </li>
                     </ul>
                </td>
            </tr>
            <tr><td>H??? T??n: </td>
                <td>
                     <input type="text" style="width: 100%" id="fullname" name="buyer_fullname" class="field-check " value="{{Session::get('user')->fullname}}">
                </td>
            </tr>
            <tr><td>Email: </td>
                <td>
                     <input type="text" style="width: 100%" id="buyer_email" name="buyer_email" class="field-check " value="{{Session::get('user')->email}}">
                </td>
            </tr>
            <tr><td>S??? ??i???n tho???i: </td>
                <td>
                     <input type="text" style="width: 100%" id="buyer_mobile" name="buyer_mobile" class="field-check " value="{{Session::get('user')->phone}}">
                </td>
            </tr>               
        </table>
        <br>
        <h2>Ch???n ph????ng th???c thanh to??n</h2>
        <ul class="list-content">
            <li class="active">
                <label><input type="radio" value="NL" name="option_payment" selected="true">Thanh to??n b???ng V?? ??i???n t??? Ng??nL?????ng</label>
                <div class="boxContent">
                    <p>
                    Thanh to??n tr???c tuy???n AN TO??N v?? ???????C B???O V???, s??? d???ng th??? ng??n h??ng trong v?? ngo??i n?????c ho???c nhi???u h??nh th???c ti???n l???i kh??c.
                    ???????c b???o h??? & c???p ph??p b???i NG??N H??NG NH?? N?????C, v?? ??i???n t??? duy nh???t ???????c c???ng ?????ng ??A TH??CH NH???T 2 n??m li??n ti???p, B??? Th??ng tin Truy???n th??ng trao gi???i th?????ng Sao Khu??
                    <br/>Giao d???ch. ????ng k?? v?? Ng??nL?????ng.vn mi???n ph?? <a href="https://www.nganluong.vn/?portal=nganluong&amp;page=user_register" target="_blank">t???i ????y</a></p>
                </div>
            </li>
            <li>
                <label><input type="radio" value="ATM_ONLINE" name="option_payment">Thanh to??n online b???ng th??? ng??n h??ng n???i ?????a</label>
                <div class="boxContent">
                    <p><i>
                    <span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">L??u ??</span>: B???n c???n ????ng k?? Internet-Banking ho???c d???ch v??? thanh to??n tr???c tuy???n t???i ng??n h??ng tr?????c khi th???c hi???n.</i></p>
                                
                            <ul class="cardList clearfix">
                            <li class="bank-online-methods ">
                                <label for="vcb_ck_on">
                                    <i class="BIDV" title="Ng??n h??ng TMCP ?????u t?? &amp; Ph??t tri???n Vi???t Nam"></i>
                                    <input type="radio" value="BIDV"  name="bankcode" >
                                
                            </label></li>
                            <li class="bank-online-methods ">
                                <label for="vcb_ck_on">
                                    <i class="VCB" title="Ng??n h??ng TMCP Ngo???i Th????ng Vi???t Nam"></i>
                                    <input type="radio" value="VCB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="vnbc_ck_on">
                                    <i class="DAB" title="Ng??n h??ng ????ng ??"></i>
                                    <input type="radio" value="DAB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="tcb_ck_on">
                                    <i class="TCB" title="Ng??n h??ng K??? Th????ng"></i>
                                    <input type="radio" value="TCB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_mb_ck_on">
                                    <i class="MB" title="Ng??n h??ng Qu??n ?????i"></i>
                                    <input type="radio" value="MB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_vib_ck_on">
                                    <i class="VIB" title="Ng??n h??ng Qu???c t???"></i>
                                    <input type="radio" value="VIB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_vtb_ck_on">
                                    <i class="ICB" title="Ng??n h??ng C??ng Th????ng Vi???t Nam"></i>
                                    <input type="radio" value="ICB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_exb_ck_on">
                                    <i class="EXB" title="Ng??n h??ng Xu???t Nh???p Kh???u"></i>
                                    <input type="radio" value="EXB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_acb_ck_on">
                                    <i class="ACB" title="Ng??n h??ng ?? Ch??u"></i>
                                    <input type="radio" value="ACB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_hdb_ck_on">
                                    <i class="HDB" title="Ng??n h??ng Ph??t tri???n Nh?? TPHCM"></i>
                                    <input type="radio" value="HDB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_msb_ck_on">
                                    <i class="MSB" title="Ng??n h??ng H??ng H???i"></i>
                                    <input type="radio" value="MSB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_nvb_ck_on">
                                    <i class="NVB" title="Ng??n h??ng Nam Vi???t"></i>
                                    <input type="radio" value="NVB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_vab_ck_on">
                                    <i class="VAB" title="Ng??n h??ng Vi???t ??"></i>
                                    <input type="radio" value="VAB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_vpb_ck_on">
                                    <i class="VPB" title="Ng??n H??ng Vi???t Nam Th???nh V?????ng"></i>
                                    <input type="radio" value="VPB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="sml_atm_scb_ck_on">
                                    <i class="SCB" title="Ng??n h??ng S??i G??n Th????ng t??n"></i>
                                    <input type="radio" value="SCB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="bnt_atm_pgb_ck_on">
                                    <i class="PGB" title="Ng??n h??ng X??ng d???u Petrolimex"></i>
                                    <input type="radio" value="PGB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="bnt_atm_gpb_ck_on">
                                    <i class="GPB" title="Ng??n h??ng TMCP D???u kh?? To??n C???u"></i>
                                    <input type="radio" value="GPB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="bnt_atm_agb_ck_on">
                                    <i class="AGB" title="Ng??n h??ng N??ng nghi???p &amp; Ph??t tri???n n??ng th??n"></i>
                                    <input type="radio" value="AGB"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="bnt_atm_sgb_ck_on">
                                    <i class="SGB" title="Ng??n h??ng S??i G??n C??ng Th????ng"></i>
                                    <input type="radio" value="SGB"  name="bankcode" >
                                
                            </label></li>   
                            <li class="bank-online-methods ">
                                <label for="sml_atm_bab_ck_on">
                                    <i class="BAB" title="Ng??n h??ng B???c ??"></i>
                                    <input type="radio" value="BAB"  name="bankcode" >
                                
                            </label></li>
                            <li class="bank-online-methods ">
                                <label for="sml_atm_bab_ck_on">
                                    <i class="TPB" title="T???n phong bank"></i>
                                    <input type="radio" value="TPB"  name="bankcode" >
                                
                            </label></li>
                            <li class="bank-online-methods ">
                                <label for="sml_atm_bab_ck_on">
                                    <i class="NAB" title="Ng??n h??ng Nam ??"></i>
                                    <input type="radio" value="NAB"  name="bankcode" >
                                
                            </label></li>
                            <li class="bank-online-methods ">
                                <label for="sml_atm_bab_ck_on">
                                    <i class="SHB" title="Ng??n h??ng TMCP S??i G??n - H?? N???i (SHB)"></i>
                                    <input type="radio" value="SHB"  name="bankcode" >
                                
                            </label></li>
                            <li class="bank-online-methods ">
                                <label for="sml_atm_bab_ck_on">
                                    <i class="OJB" title="Ng??n h??ng TMCP ?????i D????ng (OceanBank)"></i>
                                    <input type="radio" value="OJB"  name="bankcode" >
                            </label></li>
                        </ul>
                </div>
            </li>
            <li>
                <label><input type="radio" value="IB_ONLINE" name="option_payment">Thanh to??n b???ng Internet Banking</label>
                <div class="boxContent">
                    <p><i>
                        <span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">L??u ??</span>: B???n c???n ????ng k?? Internet-Banking ho???c d???ch v??? thanh to??n tr???c tuy???n t???i ng??n h??ng tr?????c khi th???c hi???n.</i></p>
                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="BIDV" title="Ng??n h??ng TMCP ?????u t?? &amp; Ph??t tri???n Vi???t Nam"></i>
                                <input type="radio" value="BIDV"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VCB" title="Ng??n h??ng TMCP Ngo???i Th????ng Vi???t Nam"></i>
                                <input type="radio" value="VCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="DAB" title="Ng??n h??ng ????ng ??"></i>
                                <input type="radio" value="DAB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="tcb_ck_on">
                                <i class="TCB" title="Ng??n h??ng K??? Th????ng"></i>
                                <input type="radio" value="TCB"  name="bankcode" >

                            </label></li>
                    </ul>

                </div>
            </li>
            <li>
                <label><input type="radio" value="ATM_OFFLINE" name="option_payment">Thanh to??n ATM offline</label>
                <div class="boxContent">
                    
                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="BIDV" title="Ng??n h??ng TMCP ?????u t?? &amp; Ph??t tri???n Vi???t Nam"></i>
                                <input type="radio" value="BIDV"  name="bankcode" >

                            </label></li>
                            
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VCB" title="Ng??n h??ng TMCP Ngo???i Th????ng Vi???t Nam"></i>
                                <input type="radio" value="VCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="DAB" title="Ng??n h??ng ????ng ??"></i>
                                <input type="radio" value="DAB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="tcb_ck_on">
                                <i class="TCB" title="Ng??n h??ng K??? Th????ng"></i>
                                <input type="radio" value="TCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_mb_ck_on">
                                <i class="MB" title="Ng??n h??ng Qu??n ?????i"></i>
                                <input type="radio" value="MB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vtb_ck_on">
                                <i class="ICB" title="Ng??n h??ng C??ng Th????ng Vi???t Nam"></i>
                                <input type="radio" value="ICB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_acb_ck_on">
                                <i class="ACB" title="Ng??n h??ng ?? Ch??u"></i>
                                <input type="radio" value="ACB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_msb_ck_on">
                                <i class="MSB" title="Ng??n h??ng H??ng H???i"></i>
                                <input type="radio" value="MSB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_scb_ck_on">
                                <i class="SCB" title="Ng??n h??ng S??i G??n Th????ng t??n"></i>
                                <input type="radio" value="SCB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="bnt_atm_pgb_ck_on">
                                <i class="PGB" title="Ng??n h??ng X??ng d???u Petrolimex"></i>
                                <input type="radio" value="PGB"  name="bankcode" >

                            </label></li>
                        
                         <li class="bank-online-methods ">
                            <label for="bnt_atm_agb_ck_on">
                                <i class="AGB" title="Ng??n h??ng N??ng nghi???p &amp; Ph??t tri???n n??ng th??n"></i>
                                <input type="radio" value="AGB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="SHB" title="Ng??n h??ng TMCP S??i G??n - H?? N???i (SHB)"></i>
                                <input type="radio" value="SHB"  name="bankcode" >

                            </label></li>
                    </ul>

                </div>
            </li>
            <li>
                <label><input type="radio" value="NH_OFFLINE" name="option_payment">Thanh to??n t???i v??n ph??ng ng??n h??ng</label>
                <div class="boxContent">
                    
                    <ul class="cardList clearfix">
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="BIDV" title="Ng??n h??ng TMCP ?????u t?? &amp; Ph??t tri???n Vi???t Nam"></i>
                                <input type="radio" value="BIDV"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="vcb_ck_on">
                                <i class="VCB" title="Ng??n h??ng TMCP Ngo???i Th????ng Vi???t Nam"></i>
                                <input type="radio" value="VCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="vnbc_ck_on">
                                <i class="DAB" title="Ng??n h??ng ????ng ??"></i>
                                <input type="radio" value="DAB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="tcb_ck_on">
                                <i class="TCB" title="Ng??n h??ng K??? Th????ng"></i>
                                <input type="radio" value="TCB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_mb_ck_on">
                                <i class="MB" title="Ng??n h??ng Qu??n ?????i"></i>
                                <input type="radio" value="MB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vib_ck_on">
                                <i class="VIB" title="Ng??n h??ng Qu???c t???"></i>
                                <input type="radio" value="VIB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_vtb_ck_on">
                                <i class="ICB" title="Ng??n h??ng C??ng Th????ng Vi???t Nam"></i>
                                <input type="radio" value="ICB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_acb_ck_on">
                                <i class="ACB" title="Ng??n h??ng ?? Ch??u"></i>
                                <input type="radio" value="ACB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_msb_ck_on">
                                <i class="MSB" title="Ng??n h??ng H??ng H???i"></i>
                                <input type="radio" value="MSB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="sml_atm_scb_ck_on">
                                <i class="SCB" title="Ng??n h??ng S??i G??n Th????ng t??n"></i>
                                <input type="radio" value="SCB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="bnt_atm_pgb_ck_on">
                                <i class="PGB" title="Ng??n h??ng X??ng d???u Petrolimex"></i>
                                <input type="radio" value="PGB"  name="bankcode" >

                            </label></li>

                        <li class="bank-online-methods ">
                            <label for="bnt_atm_agb_ck_on">
                                <i class="AGB" title="Ng??n h??ng N??ng nghi???p &amp; Ph??t tri???n n??ng th??n"></i>
                                <input type="radio" value="AGB"  name="bankcode" >

                            </label></li>
                        <li class="bank-online-methods ">
                            <label for="sml_atm_bab_ck_on">
                                <i class="TPB" title="T???n phong bank"></i>
                                <input type="radio" value="TPB"  name="bankcode" >

                            </label></li>
                    </ul>
                </div>
            </li>
            <li>
                <label><input type="radio" value="VISA" name="option_payment" selected="true">Thanh to??n b???ng th??? Visa ho???c MasterCard</label>
                <div class="boxContent">
                    <p><span style="color:#ff5a00;font-weight:bold;text-decoration:underline;">L??u ??</span>:Visa ho???c MasterCard.</p>
                    <ul class="cardList clearfix">
                            <li class="bank-online-methods ">
                                <label for="vcb_ck_on">
                                    Visa:
                                    <input type="radio" value="VISA"  name="bankcode" >
                                
                            </label></li>

                            <li class="bank-online-methods ">
                                <label for="vnbc_ck_on">
                                    Master:<input type="radio" value="MASTER"  name="bankcode" >
                            </label></li>
                    </ul>   
                </div>
            </li>
        </ul>
        
        <table style="clear:both;width:100%;max-width:500px;padding-left:46px;"> 
            <tr>
                <td>
                     <input type="submit" name="nlpayment" value="Thanh to??n"/>
                </td>
            </tr>                   
        </table>
    </form> 
    <script src="https://www.nganluong.vn/webskins/javascripts/jquery_min.js" type="text/javascript"></script>      
    <script language="javascript">
        $('input[name="option_payment"]').bind('click', function() {
        $('.list-content li').removeClass('active');
        $(this).parent().parent('li').addClass('active');
        });
    </script>   