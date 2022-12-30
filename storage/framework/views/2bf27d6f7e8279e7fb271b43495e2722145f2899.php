<!doctype html>
<html>

<head>
    <meta name="viewport" content="widtd=device-widtd">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php echo e(env('APP_NAME')); ?></title>
    
    <style>
        *{margin: 0; padding: 0;}
        body {margin: 0; background-color: #F5F5F7;}
        table {border-spacing: 0;}
        td {padding: 0;}
        img {border: 0;}
        a{text-decoration: none;}
        tr{font-size: 15px;}
        .wrapper{ width: 100%; table-layout: fixed; background-color: #F5F5F7;}
        .main{ background-color: #fff; margin: 0 auto; width: 100%; max-width: 700px; border-spacing: 0; font-family: sans-serif; color: #000000; min-height: 60vh;}
        .inner-container{max-width: 540px; margin: 0 auto; width: 100%;}
        .content-box td{padding: 6px 0;}
    </style>
</head>

<body>
    <center class="wrapper">
        <table class="main" width="100%">
            <tr>
                <td style="vertical-align: top">
                    <table style="width:100%;">
                        <tr>
                            <td colspan="2">
                                <table style="width: 100%;text-align:center;padding:20px 0;background:#ddd;">
                                    <tr>
                                        <td>
                                            <img src="<?php echo e(asset('images/logo.png')); ?>" alt="" style="height:60px;width:auto;">
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                         <!-- CONTENT SECTION -->
                        <tr>
                            <td style="background-color:#fff;padding: 30px 30px 0; "  class="mobile-section">
                                <table class="content-box inner-container">
                                    <tr>
                                        <td>
                                            <table style="width:100%; margin-bottom:15px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-bottom: 10px; border-bottom: 1px solid #ccc;">
                                                            <b>Quote Summary</b>
                                                        </td>
                                                        <td style="border-bottom: 1px solid #ccc; padding-bottom: 10px; text-align: right;">
                                                            #91035612MI<?php echo e($details->id); ?>

                                                        </td>
                                                    </tr>
                                                    <tr>    
                                                    </tr>
                                                </tbody>
                                            </table>

                                          <table style="width:100%">
                                            <thead>
                                                <tr>
                                                     <td colspan="2" style="font-size: 17px;border-bottom: 1px solid #ccc;padding-bottom: 10px;"> <b>Details</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                              <tr>
                                                    <td style="width:40%">Name</td>
                                                    <td style="text-align: right;"> <?php echo e($details->first_name); ?> <?php echo e($details->last_name); ?> </td>
                                                </tr>
                                                <tr>
                                                    <td>Phone number</td>
                                                    <td style="text-align: right;"><?php echo e($details->phone_number); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td style="text-align: right;"><?php echo e($details->email); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td style="text-align: right;"><?php echo e($details->storage_city); ?> - <?php echo e($details->storage_state); ?> - <?php echo e($details->storage_zip_code); ?></td>
                                                </tr>
                                                <tr>
                                                    <td><?php echo e(@$box->size); ?></td>
                                                    <td style="text-align: right;">
                                                        <?php if($type == 2): ?>
                                                            $<?php echo e($box->mibox_price); ?>

                                                        <?php else: ?>
                                                            $<?php echo e($box->price); ?>

                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Start Date</td>
                                                    <td style="text-align: right;">4/22/22</td>
                                                </tr>
                                                <tr>
                                                    <td>Start Location</td>
                                                    <td style="text-align: right;">34234</td>
                                                </tr>
                                                <tr>
                                                    <td>Final Location</td>
                                                    <td style="text-align: right;">34221</td>
                                                </tr>
                                                <tr>
                                                    <td>Service</td>
                                                    <td style="text-align: right;">Moving</td>
                                                </tr>
                                                </tbody>
                                          </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- CONTENT SECTION -->
                        <tr>
                            <td style="background-color:#fff;padding: 30px 30px 0; "  class="mobile-section">
                                <table class="content-box inner-container">
                                    <tr>
                                        <td>
                                          <table style="width:100%">
                                                <tr>
                                                    <td style="font-size: 17px;width: 40%;"> <b>Initial Address:-<b></td>
                                                    <td style="text-align:right;"> <?php echo e($details->storage_address); ?><br> <?php echo e($details->storage_city); ?> - <?php echo e($details->storage_state); ?> - <?php echo e($details->storage_zip_code); ?></td>
                                                </tr>
                                             
                                          </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- CONTENT SECTION -->
                        <tr>
                            <td style="background-color:#fff;padding: 30px 30px 0; "  class="mobile-section">
                                <table class="content-box inner-container">
                                    <tr>
                                        <td>
                                          <table style="width:100%">
                                                <tr>
                                                    <td style="font-size: 17px"> <b>Final Address:-</b></td>
                                                    <td style="text-align:right;"> <?php echo e($details->delivery_address); ?><br><?php echo e($details->delivery_city); ?> - <?php echo e($details->delivery_state); ?> - <?php echo e($details->delivery_zip_code); ?></td>
                                                </tr>
                                          </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                         <!-- CONTENT SECTION -->
                        <tr>
                            <td style="background-color:#fff;padding: 30px 30px 0; "  class="mobile-section">
                                <table class="content-box inner-container">
                                    <tr>
                                        <td>
                                          <table style="width:100%">
                                            <thead>
                                                <tr>
                                                     <td colspan="2" style="font-size: 17px;border-bottom:1px solid #ccc;padding-bottom: 10px;"> <b>Charges</b></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                              <tr>
                                                    <td style="width:40%">Monthly Charges</td>
                                                    <td></td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>Container Storage</td>
                                                    <td style="text-align: right;">$<?php echo e($details->container_storage); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Initial Delivery</td>
                                                    <td style="text-align: right;">$<?php echo e(@json_decode($details->options)->_initial_delivery); ?></td>
                                                </tr>

                                                <?php if(@json_decode($details->options)->_type == 2): ?>
                                                <tr>
                                                    <td>Initial Pickup</td>
                                                    <td style="text-align: right;">$<?php echo e(@json_decode($details->options)->_initial_pickup); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Final Delivery</td>
                                                    <td style="text-align: right;">$<?php echo e(@json_decode($details->options)->_final_delivery); ?></td>
                                                </tr>
                                                <?php endif; ?>

                                                
                                                <?php if((@json_decode($details->options)->_container_types != 'Storage' || @json_decode($details->options)->_container_types != 'Moving' && @json_decode($details->options)->_type != 1 && @json_decode($details->options)->_type != 2) 
                                                && (@json_decode($details->options)->_container_types != 'Storage-Moving' || @json_decode($details->options)->_type == 1)
                                                || (@json_decode($details->options)->_type != 1 && @json_decode($details->options)->_type != 2)): ?>
                                                <tr>
                                                    <td>Moving</td>
                                                    <td style="text-align: right;">$<?php echo e(@json_decode($details->options)->_moving??0); ?></td>
                                                </tr>
                                                <?php endif; ?>

                                                <tr>
                                                    <td>Final Pickup (due at final container pickup)</td>
                                                    <td style="text-align: right;">$<?php echo e(@json_decode($details->options)->_final_pick); ?></td>
                                                </tr>
                                                </tbody>
                                          </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- CONTENT SECTION -->
                        <tr>
                            <td style="background-color:#fff;padding: 30px 30px 0; "  class="mobile-section">
                                <table class="content-box inner-container">
                                    <tr>
                                        <td>
                                            <table style="width:100%">
                                            <tdead>
                                                <tr>
                                                     <td colspan="2" style="font-size: 17px;border-bottom:1px solid #ccc;padding-bottom: 10px;"> <b>Options</b></td>
                                                </tr>
                                            </tdead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="2"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width:40%">Lock</td>
                                                    <td style="text-align: right;">$<?php echo e(@json_decode($details->One_Time_Charges)->_padlocks); ?></td>
                                                </tr>
                                                <tr>
                                                    <td > Blankets</td>
                                                    <?php if(@json_decode($details->One_Time_Charges)->_blankets > 0): ?>
                                                        <td style="text-align: right;">$<?php echo e(@json_decode($details->One_Time_Charges)->_blankets); ?></td>
                                                    <?php elseif(@json_decode($details->One_Time_Charges)->_blanket > 0): ?>
                                                        <td style="text-align: right;">$<?php echo e(@json_decode($details->One_Time_Charges)->_blanket); ?></td>
                                                    <?php else: ?>
                                                        <td style="text-align: right;">$0</td>
                                                    <?php endif; ?>
                                                </tr>
                                                <tr>
                                                    <td>Delivery Time</td>
                                                    <td style="text-align: right;"><?php echo e($details->time); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Total</td>
                                                    <td style="text-align: right;">$<?php echo e($details->total); ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <!-- FOOTER SECTION -->
                        <tr>
                            <td style="padding-top:30px;">
                                <table style="width: 100%;text-align:center;padding:20px 0;background:#ddd;">
                                    <tr>
                                        <td style="font-size: 15px;">
                                            <p>Contact: 1-941-777-7269</p><br>
                                            <p>MI-BOX Moving & Storage
                                                6400 Manatee Ave W, L 110
                                                Bradenton, FL 34209 </p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>    
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
<?php /**PATH /var/www/html/mibox/resources/views/emails/inquiry_email.blade.php ENDPATH**/ ?>