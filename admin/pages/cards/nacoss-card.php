
<div class="holder">
    <div class="container front">
        <div class="row">

            <div class="col-sm-5 px-4 border shadow-sm mt-5 rounded pt-3">
                <div class="p-0 m-0 col-sm topper">
                   <h6 class="text-center m-0">FEDERAL REPLUBIC OF NIGERIA</h6>
                   <p class="text-center p-0 m-0">NIGERIAN ASSOCIATION OF COMPUTER SCIENCE STUDENTS</p>
                   <p class="text-center p-0 m-0" style="font-size: 15px;">NACOSS CARD</p>
                </div>

                <div class="row">
                    <p class="personId">A34703884</p>
                <div class="col-sm-5">
                    <p class="pt-1 m-0 code">CODE: <strong><?php echo $unique_code; ?></strong></p>
                    <img class="img-responsive rounded mb-1 " style="width: 150px; height: 150px;" src="../uploads/passport/<?php echo $passport; ?>" alt="picture">
                    <p class="text-center bullet p-0 m-0">&#x25A0; &#x25A0; &#x25A0; &#x25A0; - &#x25A0; &#x25A0; &#x25A0; &#x25A0;</p>
                </div>

                <div class="col-sm-7 rightSide1 p-0">
                    <div class="wrapper p-1">
                        <p style="word-spacing:3px;">VIN: <?php echo $identification_no; ?></p>
                        <p style="word-spacing:3px;">DELIM: <?php echo strtoupper($state_of_res).' | '.strtoupper($town_of_res); ?><br /><?php echo strtoupper($lga_of_res); ?></p>

                        <h6><strong><?php echo strtoupper($l_name).', '.strtoupper($f_name).' '.strtoupper($m_name); ?></strong></h6>
                        <div class="text-right d-flex dobGender">
                            <p class="text-left">DATE OF BIRTH <br> <?php echo $dob; ?></p>
                            <p class="text-center ml-auto">GENDER <br /><?php echo strtoupper($gender); ?></p>
                        </div>
                        <p>OCCUPATION <br /><?php echo strtoupper($occupation); ?></p>
                        <p>ADDRESS <br /><?php echo strtoupper($address_of_res); ?></p>
                    </div>
                </div>
            </div>
            </div>

            <!--spacer-->
            <div class="col-sm-2"></div>


            <div class="col-sm-5 px-4 border shadow-sm mt-5 rounded pt-3">
                <div class="barcode">
                    barcode
                </div>



                <div class="logos py-2">
                    <center>Logo</center>
                </div>

                <hr />

                <div class="bottom">

                    <div class="paragraphs">
                        <p><?php echo strtoupper($f_name); ?>: <?php echo $identification_no; ?></p>
                        <p>DATE OF REG: <?php echo $date_of_registeration; ?></p>

                        <div class="row ">
                            <div class="col-sm-6">
                                <p><span class="batch">BATCH: A/14/05/09/009/11</span></p>
                            </div>

                            <div class="col-sm-6">
                                |<p><span class="text-right">SERIAL NO: <?php echo $serial_no; ?></span></p>
                            </div>
                        </div>

                        <p style="font-size: 9px;">ISSUED BY COOPERATIONS</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
