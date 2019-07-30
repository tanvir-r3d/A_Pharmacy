<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

<section id="main-content">
    <section class="wrapper site-min-height">
        <!-- page start-->
        <section class="">
            <header class="panel-heading">
                <i class="fa fa-plus-circle"></i> Point Of Sales

                </header>
                <div class="">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <!--  <div class="col-lg-12"> -->
                            <div class="">
                               <!--   <section class="panel"> -->
                                <section class="">
                                    <!--   <div class="panel-body"> -->
                                    <div class="">
                                        <style>
                                            .payment{
                                                padding-top: 20px;
                                                padding-bottom: 20px;
                                                border: none;

                                            }
                                            .pad_bot{
                                                padding-bottom: 10px;
                                            }

                                            form{
                                                border: 1px solid #ccc;
                                                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                                                background: transparent;
                                            }
                                            .pos{
                                                padding-left:0px;
                                            }
                                            .form-control{
                                                font-size: 14px;
                                                font-weight: 600;
                                                box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                                            }
                                        </style>

                                        <form role="form" class="clearfix pos form1"  id="editPaymentForm" action="finance/addPayment" method="post" enctype="multipart/form-data">
                                            <div class="col-md-6">
                                                                                                <div class="col-md-8 payment">
                                                    <div class="form-group last">
                                                        <div class="col-md-3 payment_label">
                                                            <label for="exampleInputEmail1"> Client </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select class="form-control m-bot15" name="client" value=''>
                                                                <option value="walk in customer">Select Client</option>

                                                                    <option value="267"  > PRECIOUS FAITH </option>

                                                                    <option value="265"  > jabatour </option>

                                                                    <option value="255"  > Moen B </option>

                                                                    <option value="252"  > Dirk Saikat </option>

                                                                    <option value="249"  > Hafiz Aamir </option>

                                                                    <option value="246"  > abdiqani </option>

                                                                    <option value="245"  > qazmxul Hasan </option>

                                                                    <option value="242"  > iuyiy </option>

                                                                    <option value="235"  > RamKumar </option>

                                                                    <option value="231"  > Nabin </option>

                                                                    <option value="230"  > Junior </option>

                                                                    <option value="227"  > 1rizwanhaider@gmail.com </option>

                                                                    <option value="226"  > maxamed saalax nuur </option>

                                                                    <option value="225"  > syedtalha </option>

                                                                    <option value="224"  > sdfsadf </option>

                                                                    <option value="223"  > jazzy </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group last">

                                                        <div class="col-md-3 payment_label">
                                                            <label for="exampleInputEmail1"> Select Item</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <select name="category_name[]" id="" class="multi-select" multiple="" id="my_multi_select3" >
                                                                                                                                    <option class="ooppttiioonn" data-id="211" data-s_price="20" data-m_name = "Insulin" value="211"

                                                                                                                                                        >

                                                                        Insulin                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="209" data-s_price="1.5" data-m_name = "Napa" value="209"

                                                                                                                                                        >

                                                                        Napa                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="208" data-s_price="37" data-m_name = "Rakted" value="208"

                                                                                                                                                        >

                                                                        Rakted                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="201" data-s_price="3.99" data-m_name = "ZihuiTest Med" value="201"

                                                                                                                                                        >

                                                                        ZihuiTest Med                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="197" data-s_price="2000" data-m_name = "moonga" value="197"

                                                                                                                                                        >

                                                                        moonga                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="196" data-s_price="5" data-m_name = "panadol" value="196"

                                                                                                                                                        >

                                                                        panadol                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="195" data-s_price="2330" data-m_name = "parasitomol" value="195"

                                                                                                                                                        >

                                                                        parasitomol                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="193" data-s_price="20" data-m_name = "abc" value="193"

                                                                                                                                                        >

                                                                        abc                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="191" data-s_price="300" data-m_name = "Traxon" value="191"

                                                                                                                                                        >

                                                                        Traxon                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="174" data-s_price="20" data-m_name = "Cancer" value="174"

                                                                                                                                                        >

                                                                        Cancer                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="169" data-s_price="400" data-m_name = "disprine" value="169"

                                                                                                                                                        >

                                                                        disprine                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="168" data-s_price="255" data-m_name = "meriela" value="168"

                                                                                                                                                        >

                                                                        meriela                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="166" data-s_price="120" data-m_name = "test" value="166"

                                                                                                                                                        >

                                                                        test                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="165" data-s_price="30" data-m_name = "acilog" value="165"

                                                                                                                                                        >

                                                                        acilog                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="164" data-s_price="1250" data-m_name = "LONART C" value="164"

                                                                                                                                                        >

                                                                        LONART C                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="163" data-s_price="150" data-m_name = "fraise 1" value="163"

                                                                                                                                                        >

                                                                        fraise 1                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="162" data-s_price="144" data-m_name = "Dasamoolaristam" value="162"

                                                                                                                                                        >

                                                                        Dasamoolaristam                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="158" data-s_price="8.00" data-m_name = "flugal 50mg " value="158"

                                                                                                                                                        >

                                                                        flugal 50mg                                                                     </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="157" data-s_price="8.00" data-m_name = "revotril 0.5 mg" value="157"

                                                                                                                                                        >

                                                                        revotril 0.5 mg                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="156" data-s_price="2" data-m_name = "PARACETAMOL" value="156"

                                                                                                                                                        >

                                                                        PARACETAMOL                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="153" data-s_price="2500" data-m_name = "Paracetamol" value="153"

                                                                                                                                                        >

                                                                        Paracetamol                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="152" data-s_price="2500" data-m_name = "Paracetamol" value="152"

                                                                                                                                                        >

                                                                        Paracetamol                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="151" data-s_price="11" data-m_name = "panadol" value="151"

                                                                                                                                                        >

                                                                        panadol                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="149" data-s_price="10" data-m_name = "Napa" value="149"

                                                                                                                                                        >

                                                                        Napa                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="148" data-s_price="125.00" data-m_name = "ABC Cure" value="148"

                                                                                                                                                        >

                                                                        ABC Cure                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="147" data-s_price="12" data-m_name = "Multivitamin" value="147"

                                                                                                                                                        >

                                                                        Multivitamin                                                                    </option>
                                                                                                                                    <option class="ooppttiioonn" data-id="146" data-s_price="10" data-m_name = "PARACETAMOL" value="146"

                                                                                                                                                        >

                                                                        PARACETAMOL                                                                    </option>
                                                                                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 qfloww"><p>Selected Items</p></div>
                                            <div class="col-md-4 right-six">
                                                <div class="col-md-12 payment right-six">
                                                    <div class="col-md-3 payment_label">
                                                        <label for="exampleInputEmail1"> Sub Total</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control pay_in" name="subtotal" id="subtotal" value='' placeholder=" " disabled>
                                                    </div>

                                                </div>
                                                <div class="col-md-12 payment right-six">
                                                    <div class="col-md-3 payment_label">
                                                        <label for="exampleInputEmail1"> Discount (%) </label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control pay_in" name="discount" id="dis_id" value='' placeholder="Discount">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 payment right-six">
                                                    <div class="col-md-3 payment_label">
                                                        <label for="exampleInputEmail1"> Gross Total</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control pay_in" name="grsss" id="gross" value='' placeholder=" " disabled>
                                                    </div>

                                                </div>
                                                <div class="col-md-12 payment right-six">
                                                    <div class="col-md-3 payment_label">
                                                        <label for="exampleInputEmail1"> Amount Received</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control pay_in" name="amount_received" id="amount_received" value='' placeholder=" ">
                                                    </div>

                                                </div>

                                                <div class="col-md-12 payment right-six">
                                                    <div class="col-md-12">
                                                        <div class="col-md-3">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button type="submit" name="submit" class="btn btn-info"> Submit</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--
                                                <div class="col-md-12 payment">
                                                    <div class="col-md-3 payment_label">
                                                      <label for="exampleInputEmail1">Vat (%)</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                      <input type="text" class="form-control pay_in" name="vat" id="exampleInputEmail1" value='' placeholder="%">
                                                    </div>
                                                </div>
                                                -->

                                                <input type="hidden" name="id" value=''>
                                                <div class="row">
                                                </div>
                                                <div class="form-group">
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </section>
    </section>
  </div>
