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
                    @error('_storage_address') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    <div class="input-group">
                        <input class="form-control"  wire:model="_storage_state" id="state"
                               placeholder="State">
                        <input class="form-control" list="citylist" wire:model="_storage_city" id="city"
                               placeholder="City">
                        {{--<datalist id="citylist">
                            <option value="San Francisco">
                            <option value="New York">
                            <option value="Seattle">
                            <option value="Los Angeles">
                            <option value="Chicago">
                        </datalist>--}}
                        <input type="text" class="form-control" placeholder="Zip Code" wire:model="_storage_zip_code"
                               aria-label="Zip Code">
                    </div>
                    @error('_storage_city') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    @error('_storage_zip_code') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                </div>
                {{--<div class="delivery-input-grp">
                    <h6>Select Type?</h6>
                    <div class="input-group form-check-main">
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" type="radio"  id="flexRadioDefault7">
                            </div>
                            <label class="form-check-label" for="flexRadioDefault7"> Storage </label>
                        </div>
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" type="radio"  id="flexRadioDefault7" checked>
                            </div>
                            <label class="form-check-label" for="flexRadioDefault7"> Storage and moving </label>
                        </div>
                        <div class="form-check">
                            <div class="custom-radio">
                                <input class="form-check-input" type="radio"  id="flexRadioDefault7">
                            </div>
                            <label class="form-check-label" for="flexRadioDefault7"> Moving </label>
                        </div>
                    </div>
                </div>--}}
                <div class="delivery-input-grp">
                    <h6>Final delivery address: Where you are moving to?</h6>
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="_delivery_address" id="autocomplete2"
                               placeholder="Address"
                               aria-label="Address">
                    </div>
                    @error('_delivery_address') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    <div class="input-group">

                        <input class="form-control"  wire:model="_delivery_state" id="state"
                               placeholder="State">

                        <input class="form-control" list="citylist" id="city" wire:model="_delivery_city"
                               placeholder="City">
                        {{--                        <datalist id="citylist">--}}
                        {{--                            <option value="San Francisco">--}}
                        {{--                            <option value="New York">--}}
                        {{--                            <option value="Seattle">--}}
                        {{--                            <option value="Los Angeles">--}}
                        {{--                            <option value="Chicago">--}}
                        {{--                        </datalist>--}}
                        <input type="text" class="form-control" wire:model="_delivery_zip_code" placeholder="Zip Code"
                               aria-label="Zip Code">

                    </div>
                    @error('_delivery_city') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    @error('_delivery_zip_code') <p class="error-msg text-danger">{{ $message }}</p> @enderror
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
                    @error('_residence') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                </div>
                <div class="delivery-input-grp delivery-notes">
                    <h6>Delivery Notes:</h6>
                    <p class="light-title">To ensure a smooth delivery process, please add any delivery information in
                        regards to the placement of your MI-BOX container.</p>
                    <div class="input-group ">
                        <textarea class="form-control" wire:model="_delivery_notes" id="exampleFormControlTextarea1"
                                  rows="3"></textarea>
                    </div>
                    @error('_delivery_notes') <p class="error-msg text-danger">{{ $message }}</p> @enderror
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
                    @error('_time') <p class="error-msg text-danger">{{ $message }}</p> @enderror
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
                    @error('_first_name') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    <div class="input-group">
                        <input type="text" class="form-control" wire:model="_last_name" placeholder="Last Name"
                               aria-label="Last Name">
                    </div>
                    @error('_last_name') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    <div class="input-group">

                        {{-- <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12"> --}}
                        <input id="phone" type="tel" class="form-control" name="phone" wire:model="_phone_number" placeholder="Phone Number"
                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12">
                    </div>
                    @error('_phone_number') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" wire:model="_email" placeholder="Email"
                               aria-label="Email" autocomplete="on">
                    </div>
                    @error('_email') <p class="error-msg text-danger">{{ $message }}</p> @enderror
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
                                    {{-- <th>${{$_deliverydetail->monthly_charges??0}}</th> --}}
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                   
                                    <td>Container Storage</td>
                                    
                                    <th>${{$_deliverydetail->container_storage??0}}</th>
                                    
                                </tr>
                                {{-- <tr>
                                    <td>Container Insurance</td>
                                    <th>${{$_deliverydetail->container_insurance??0}}</th>
                                </tr> --}}
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
                                    <td>${{@json_decode($_deliverydetail->options)->_initial_delivery}}</td>
                                </tr>
                                @if(@json_decode($_deliverydetail->options)->_type == 2)
                                <tr>
                                    <td>Initial Pickup</td>
                                    <td>${{@json_decode($_deliverydetail->options)->_initial_pickup}}</td>
                                </tr>
                                <tr>
                                    <td>Final Delivery</td>
                                    <td>${{@json_decode($_deliverydetail->options)->_final_delivery}}</td>
                                </tr>
                                @endif
                                
                                @if((@json_decode($_deliverydetail->options)->_container_types != 'Storage' || @json_decode($_deliverydetail->options)->_container_types != 'Moving' && @json_decode($_deliverydetail->options)->_type != 1 && @json_decode($_deliverydetail->options)->_type != 2) 
                                && (@json_decode($_deliverydetail->options)->_container_types != 'Storage-Moving' || @json_decode($_deliverydetail->options)->_type == 1)
                                || (@json_decode($_deliverydetail->options)->_type != 1 && @json_decode($_deliverydetail->options)->_type != 2))
                                    <tr>
                                        <td>Moving</td>
                                        <td>${{@json_decode($_deliverydetail->options)->_moving}}</td>
                                    </tr>
                                @endif
                                <tr>
                                    <td>Final Pickup (due at final container pickup)</td>
                                    <td>${{@json_decode($_deliverydetail->options)->_final_pick}}</td>
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
                                    <td>${{@json_decode($_deliverydetail->One_Time_Charges)->_padlocks}}</td>
                                </tr>
                                <tr>
                                    <td>Moving Blankets / Mo</td>
                                    @if(@json_decode($_deliverydetail->One_Time_Charges)->_blankets > 0)
                                        <td>${{@json_decode($_deliverydetail->One_Time_Charges)->_blankets}}</td>
                                    @elseif(@json_decode($_deliverydetail->One_Time_Charges)->_blanket > 0)
                                        <td>${{@json_decode($_deliverydetail->One_Time_Charges)->_blanket}}</td>
                                    @else
                                        <td>$0</td>
                                    @endif
                                </tr>
                                <tr>
                                    <td>Delivery Time</td>
                                    <td>

                                        @if($_time == "PM Delivery + $50")
                                            $50
                                        @elseif($_time == "AM Delivery + $50")
                                            $50
                                        @else
                                            $0
                                        @endif
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
                                    {{-- <td>You can reserve now and pay later. Total due 24 hours before delivery.</td> --}}
                                    <td>Total Due 24 Hours Before Delivery. Reserve now, pay later.</td>
                                    <td class="text-bold total-count">
                                        @if($_time == "PM Delivery + $50")
                                            ${{$_deliverydetail->total+50}}
                                        @elseif($_time == "AM Delivery + $50")
                                            ${{$_deliverydetail->total+50}}
                                        @else
                                            ${{$_deliverydetail->total}}
                                        @endif
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
                                <img src="{{ asset('images/profile-img.png') }}" alt="profile-img">
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

                // @this.set('_storage_address', $('#autocomplete').val());
                @this.set('_storage_address', place.address_components[0].long_name+ ' ' +place.address_components[1].long_name);
                @this.set('_storage_city',storage_city);
                @this.set('_storage_state', storage_state);
                @this.set('_storage_zip_code', storage_zip);

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

                // @this.set('_delivery_address', $('#autocomplete2').val());
                @this.set('_delivery_address', place.address_components[0].long_name+ ' ' +place.address_components[1].long_name);
                @this.set('_delivery_city',city);
                @this.set('_delivery_state', state);
                @this.set('_delivery_zip_code', zip);
            });
        }
    </script>
</div>
