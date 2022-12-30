<div class="row">
    <div class="col-md-7">
        <div class="delivery-boxs-main">
            <div class="delivery-box">
                <div class="rbox-heading">
                    <h5>Delivery information</h5>
                </div>
                <div class="delivery-input-grp">
                    <h6>Where is the storage container going to first? </h6>
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="_storage_address" id="autocomplete"
                               placeholder="Address"
                               aria-label="Address">
                    </div>
                    <?php $__errorArgs = ['_storage_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="input-group">
                        <input class="form-control"  wire:model="_storage_state" id="state"
                               placeholder="State">
                        <input class="form-control" list="citylist" wire:model="_storage_city" id="city"
                               placeholder="City">
                        
                        <input type="text" class="form-control" placeholder="Zip Code" wire:model="_storage_zip_code"
                               aria-label="Zip Code">
                    </div>
                    <?php $__errorArgs = ['_storage_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php $__errorArgs = ['_storage_zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="delivery-input-grp">
                    <h6>Final delivery address: Where you are moving to?</h6>
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="_delivery_address" id="autocomplete2"
                               placeholder="Address"
                               aria-label="Address">
                    </div>
                    <?php $__errorArgs = ['_delivery_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="input-group">

                        <input class="form-control"  wire:model="_delivery_state" id="state"
                               placeholder="State">

                        <input class="form-control" list="citylist" id="city" wire:model="_delivery_city"
                               placeholder="City">
                        
                        
                        
                        
                        
                        
                        
                        <input type="text" class="form-control" wire:model="_delivery_zip_code" placeholder="Zip Code"
                               aria-label="Zip Code">

                    </div>
                    <?php $__errorArgs = ['_delivery_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php $__errorArgs = ['_delivery_zip_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="delivery-input-grp">
                    <h6>Type of Residence?</h6>
                    <div class="input-group form-check-main">
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" wire:model="_residence" value="House" type="radio"
                                       id="flexRadioDefault1">
                            </div>
                            <label class="form-check-label" for="flexRadioDefault1"> House </label>
                        </div>
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" wire:model="_residence" value="Apartment" type="radio"
                                       id="flexRadioDefault2">
                            </div>
                            <label class="form-check-label" for="flexRadioDefault2"> Apartment </label>
                        </div>
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" wire:model="_residence" value="Business" type="radio"
                                       id="flexRadioDefault3">
                            </div>
                            <label class="form-check-label" for="flexRadioDefault3"> Business </label>
                        </div>
                    </div>
                    <?php $__errorArgs = ['_residence'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="delivery-input-grp delivery-notes">
                    <h6>Delivery Notes:</h6>
                    <p class="light-title">To ensure a smooth delivery process, please add any delivery information in
                        regards to the placement of your MI-BOX container.</p>
                    <div class="input-group ">
                        <textarea class="form-control" wire:model="_delivery_notes" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    <?php $__errorArgs = ['_delivery_notes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="delivery-input-grp delivery-time">
                    <h6>Delivery Time</h6>
                    <p class="light-title">To Insure 100% satisfaction. Prior to your scheduled delivery a Local MI-BOX
                        Delivery Coordinator will touch base to review and confirm your delivery information</p>
                    <div class="input-group form-check-main">
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" wire:model="_time" value="no" type="radio"
                                       id="flexRadioDefault71">
                            </div>
                            <label class="form-check-label" value="Anytime + $0" for="flexRadioDefault71"> Anytime +
                                $0 </label>
                        </div>
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" value="AM Delivery + $50" wire:model="_time"
                                       type="radio" id="flexRadioDefault72">
                            </div>
                            <label class="form-check-label" for="flexRadioDefault72"> AM Delivery + $50 </label>
                        </div>
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" value="PM Delivery + $50" wire:model="_time"
                                       type="radio" id="flexRadioDefault73">
                            </div>
                            <label class="form-check-label" for="flexRadioDefault73"> PM Delivery + $50 </label>
                        </div>
                    </div>
                    <?php $__errorArgs = ['_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <!-- <div class="delivery-box-footer">
                <a href="#" role="button" class="btn btn--primary d-flex" wire:click="Sendmail()">Reserve Now</a>
                <p class="text-center">Book with confidence. No Change or Cancelation Fees</p>
            </div> -->
        </div>

        <div class="r-card-box rborder-box">
                <div class="rbox-heading">
                    <h5>Primary Contact Information</h5>
                </div>
                <div class="contactr-form">
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="_first_name" placeholder="First Name"
                               aria-label="First Name">
                    </div>
                    <?php $__errorArgs = ['_first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="_last_name" placeholder="Last Name"
                               aria-label="Last Name">
                    </div>
                    <?php $__errorArgs = ['_last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="input-group">

                        
                        <input id="phone" type="tel" class="form-control" name="phone" wire:model="_phone_number" placeholder="Phone Number"
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12">
                    </div>
                    <?php $__errorArgs = ['_phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" wire:model="_email" placeholder="Email"
                               aria-label="Email" autocomplete="on">
                    </div>
                    <?php $__errorArgs = ['_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="error-msg text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="delivery-box-footer">
                <a href="javascript:void(0)" role="button" class="btn btn--primary d-flex" wire:click="Sendmail()">Reserve Now</a>
                <p class="text-center">Book with confidence. No Change or Cancelation Fees</p>
            </div>
            
    </div>
    <div class="col-md-5">
        <div class="category-summary-main">
            
            <div class="r-card-box rborder-box">
                <div class="rbox-heading">
                    <h5>Quote Summary #91035612</h5>
                </div>
                <div class="rbox-price-main">
                    <div class="rbox-price">
                        <div class="box-tbl">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Monthly Charges</th>
                                    <th></th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                   
                                    <td>Container Storage</td>
                                    
                                    <th>$<?php echo e($_deliverydetail->container_storage??0); ?></th>
                                    
                                </tr>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="rbox-price">
                        <div class="box-tbl">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Monthly Charges</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Initial Delivery</td>
                                    <td>$<?php echo e(@json_decode($_deliverydetail->options)->_initial_delivery); ?></td>
                                </tr>
                                <?php if(@json_decode($_deliverydetail->options)->_type == 2): ?>
                                <tr>
                                    <td>Initial Pickup</td>
                                    <td>$<?php echo e(@json_decode($_deliverydetail->options)->_initial_pickup); ?></td>
                                </tr>
                                <tr>
                                    <td>Final Delivery</td>
                                    <td>$<?php echo e(@json_decode($_deliverydetail->options)->_final_delivery); ?></td>
                                </tr>
                                <?php endif; ?>
                                
                                <?php if((@json_decode($_deliverydetail->options)->_container_types != 'Storage' || @json_decode($_deliverydetail->options)->_container_types != 'Moving' && @json_decode($_deliverydetail->options)->_type != 1 && @json_decode($_deliverydetail->options)->_type != 2) 
                                && (@json_decode($_deliverydetail->options)->_container_types != 'Storage-Moving' || @json_decode($_deliverydetail->options)->_type == 1)
                                || (@json_decode($_deliverydetail->options)->_type != 1 && @json_decode($_deliverydetail->options)->_type != 2)): ?>
                                    <tr>
                                        <td>Moving</td>
                                        <td>$<?php echo e(@json_decode($_deliverydetail->options)->_moving); ?></td>
                                    </tr>
                                <?php endif; ?>
                                <tr>
                                    <td>Final Pickup (due at final container pickup)</td>
                                    <td>$<?php echo e(@json_decode($_deliverydetail->options)->_final_pick); ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="rbox-price">
                        <div class="box-tbl">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Security Locks</td>
                                    <td>$<?php echo e(@json_decode($_deliverydetail->One_Time_Charges)->_padlocks); ?></td>
                                </tr>
                                <tr>
                                    <td>Moving Blankets / Mo</td>
                                    <?php if(@json_decode($_deliverydetail->One_Time_Charges)->_blankets > 0): ?>
                                        <td>$<?php echo e(@json_decode($_deliverydetail->One_Time_Charges)->_blankets); ?></td>
                                    <?php elseif(@json_decode($_deliverydetail->One_Time_Charges)->_blanket > 0): ?>
                                        <td>$<?php echo e(@json_decode($_deliverydetail->One_Time_Charges)->_blanket); ?></td>
                                    <?php else: ?>
                                        <td>$0</td>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <td>Delivery Time</td>
                                    <td>

                                        <?php if($_time == "PM Delivery + $50"): ?>
                                            $50
                                        <?php elseif($_time == "AM Delivery + $50"): ?>
                                            $50
                                        <?php else: ?>
                                            $0
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="rbox-price">
                        <div class="box-tbl">
                            <table class="table">
                                <tbody>
                                <tr>
                                    
                                    <td>Total Due 24 Hours Before Delivery. Reserve now, pay later.</td>
                                    <td class="text-bold total-count">
                                        <?php if($_time == "PM Delivery + $50"): ?>
                                            $<?php echo e($_deliverydetail->total+50); ?>

                                        <?php elseif($_time == "AM Delivery + $50"): ?>
                                            $<?php echo e($_deliverydetail->total+50); ?>

                                        <?php else: ?>
                                            $<?php echo e($_deliverydetail->total); ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="r-card-box review-box ">
                <div class="review-profile-main">
                    <div class="review-profile-header">
                        <div class="rprofile-left">
                            <figure class="profile-img">
                                <img src="<?php echo e(asset('images/profile-img.png')); ?>" alt="profile-img">
                            </figure>
                            <div class="profile-name">
                                <h5>Matthew Lucazak</h5>
                                <div class="rating-main">
                                    <div class="rating">
                                        <input type="radio" id="rating-5" checked>
                                        <label for="rating-5"></label>
                                        <input type="radio" id="rating-4" checked>
                                        <label for="rating-4"></label>
                                        <input type="radio" id="rating-3" checked>
                                        <label for="rating-3"></label>
                                        <input type="radio" id="rating-2" checked>
                                        <label for="rating-2"></label>
                                        <input type="radio" id="rating-1" checked>
                                        <label for="rating-1"></label>
                                    </div>
                                    <div class="count-reviews">
                                        <p class="semibold-heading">6 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rprofile-right">
                            <p class="semibold-heading">4 months ago</p>
                        </div>
                    </div>
                    <div class="review-profile-content">
                        <div class="rprofile-data">
                            <p>We used MiBox for 3 years & each time I contacted them I spoke with Joe. Never had any
                                issues, Joe was great. Some of the best customer service l've had. We finally moved into
                                our... <a href="#" class="readmore-btn">Read More</a>
                            </p>
                        </div>
                        <div class="rprofile-card">
                            <div class="rprofilecard-heading">
                                <h6>Response from the owner</h6>
                                <p class="semibold-heading">4 months ago</p>
                            </div>
                            <div class="rprofilecard-content">
                                <p>Matthew, your 5 star review of your experiences with MI-BOX is greatly appreciated.
                                    Thank you for trusting MI-BOX with your valuables. It's been our pleasure having you
                                    as a customer and best of luck </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

    <script type="text/javascript"
            src="https://maps.google.com/maps/api/js?key=AIzaSyBUKE9XuVzIBKOB3MB8s6geLujuOAaYQHE&libraries=places"></script>
    <script>
        // $('#phone_number').keydown(function (e) {
        //     var key = e.charCode || e.keyCode || 0;
        //     $text = $(this); 
        //         if (key !== 8 && key !== 9) {
        //             if ($text.val().length === 3) {
        //                 $text.val($text.val() + '-');
        //             }      
        //         if ($text.val().length === 7) {
        //             $text.val($text.val() + '-');
        //         }
        //     }
        //     return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
        // });

        $(document).ready( function() {
            // $('input[type="tel"]').unmask();
            $('input[type="tel"]').mask("000-000-0000")
        });
    </script>
    <script>
        var componentForm = {
            locality: 'long_name',
            country: 'long_name',
            administrative_area_level_1: 'short_name',
            postal_code: 'short_name',
        };

        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete');
            var options = {
             componentRestrictions: {country: ["us"]}
            };
            var autocomplete = new google.maps.places.Autocomplete(input,options);

            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                //console.log(place.address_components[0].long_name+ ' ' +place.address_components[1].long_name+ ' ' +place.address_components[2].long_name);
                // count=place.address_components.length;
                // value=place.address_components;
                // country=value[count-1].long_name;
                // state=value[count-2].long_name;
                // city=value[count-3].long_name;
                let storage_zip = "";

                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
                        if(addressType == 'administrative_area_level_1'){
                            storage_state = val
                        }
                        if(addressType == 'locality'){
                            storage_city = val
                        }
                        if(addressType == 'postal_code'){
                            storage_zip = val
                        }
                    }
                }

                // window.livewire.find('<?php echo e($_instance->id); ?>').set('_storage_address', $('#autocomplete').val());
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_storage_address', place.address_components[0].long_name+ ' ' +place.address_components[1].long_name);
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_storage_city',storage_city);
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_storage_state', storage_state);
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_storage_zip_code', storage_zip);

            });
        }

    </script>
    <script>
        var componentForm = {
            locality: 'long_name',
            country: 'long_name',
            administrative_area_level_1: 'short_name',
            postal_code: 'short_name',
        };
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete2');
            // route , name
            var options = {
                componentRestrictions: {country: ["us"]}
            };
            var autocomplete = new google.maps.places.Autocomplete(input,options);
            
            autocomplete.addListener('place_changed', function () {
                var place = autocomplete.getPlace();
                // console.log(place.address_components[0].long_name+ ' ' +place.address_components[1].long_name);
                let zip = "";
                for (var i = 0; i < place.address_components.length; i++) {
                    var addressType = place.address_components[i].types[0];
                    if (componentForm[addressType]) {
                        var val = place.address_components[i][componentForm[addressType]];
                        if(addressType == 'administrative_area_level_1'){
                            state = val
                        }
                        if(addressType == 'locality'){
                            city = val
                        }
                        if(addressType == 'postal_code'){
                            zip = val
                        }
                    }
                }

                // window.livewire.find('<?php echo e($_instance->id); ?>').set('_delivery_address', $('#autocomplete2').val());
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_delivery_address', place.address_components[0].long_name+ ' ' +place.address_components[1].long_name);
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_delivery_city',city);
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_delivery_state', state);
                window.livewire.find('<?php echo e($_instance->id); ?>').set('_delivery_zip_code', zip);
            });
        }
    </script>
</div>
<?php /**PATH /var/www/html/mibox/resources/views/livewire/pages/delivery-information-controller.blade.php ENDPATH**/ ?>