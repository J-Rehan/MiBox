<div>
    <div class="row">
        <div class="col-md-7">
            <div class="category-boxs-main">
                <!-- <div class="cat-box">
                    <div class="cat-box-img">
                        <img src="{{ asset('images/cat-img-1.svg')}}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-box-content">
                        <div class="box-heading">
                            <h4>Would you like extra protection for belongings?</h4>
                            <p class="mt-2">Why do I need a protection plan ?</p>
                        </div>
                        <div class="box-plans">
                            <div class="form-check-main">
                                <div class="form-check">
                                    <div class="custom-radio">
                                        <input class="form-check-input" wire:model="_protection" value="0" type="radio"
                                               name="flexRadioDefault"
                                               id="_protection0">
                                    </div>
                                    <label class="form-check-label" for="_protection0">
                                        <span>No thanks</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <div class="custom-radio">
                                        <input class="form-check-input" wire:model="_protection" value=1 type="radio"
                                               name="flexRadioDefault"
                                               id="_protection1">
                                    </div>
                                    <label class="form-check-label" for="_protection1">
                                        <span>Container only ($15.00/ Container/ Month) </span>
                                        <p class="info-tip" data-bs-toggle="tooltip" data-bs-placement="right"
                                           title="Lorem ipsum">i</p>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <div class="custom-radio">
                                        <input class="form-check-input" wire:model="_protection" value=2 type="radio"
                                               name="flexRadioDefault"
                                               id="_protection2">
                                    </div>
                                    <label class="form-check-label" for="_protection2">
                                        <span>Container & Contents</span>
                                        <p class="info-tip" data-bs-toggle="tooltip" data-bs-placement="right"
                                           title="Lorem ipsum">i</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                @if($_padlocks->available == 1)
                <div class="cat-box">
                    <div class="cat-box-img">
                        <img src="{{ asset('images/cat-img-2.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-box-content">
                        <div class="box-heading">
                            <h4>Would you like padlock?</h4>
                        </div>
                        <div class="box-plans">
                            <p>We require a lock on your container when storing at our facility and while in transport.</p>
                            <div class="form-check-main">
                                <div class="form-check" wire:click="AddPadlocks(0)">
                                    <div class="custom-radio">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                               id="flexRadioDefault4" checked>
                                    </div>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        <span>I will provide my own padlocks</span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <div class="custom-radio" wire:click="AddPadlocks(1)">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault2"
                                               id="flexRadioDefault5">
                                    </div>
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        <span>Buy Secure Disc Lock</span>
                                        {{--<p class="price-info">${{$_padlocks->price}} </p>--}}
                                        <p class="price-info">${{$_padlocks->price}} / Each</p>
                                    </label>
                                    <div class="count-info-main">
                                        @if($padlocks_count > 0)
                                            <span class="cust-price">${{$this->_padlocks->price * $padlocks_count}}</span>
                                        @else
                                            <span class="cust-price">$0</span>
                                        @endif
                                        <div class="product-count small-counter">
                                            <button class="button-count no-active" wire:click="Minus">-</button>
                                            <input type="text" readonly="" class="number-product form-control"
                                                wire:model="padlocks_count">
                                            <button id="submitAdd" class="button-count no-active" wire:click="Add">+</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="box-button">
                                    <button wire:click="Deliverydetailsave()"  class="btn btn--primary">Continue</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if($_blankets->available == 1 || $_blanket->available == 1)
                <div class="cat-box">
                    <div class="cat-box-img">
                        <img src="{{ asset('images/cat-img-3.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="cat-box-content">
                        <div class="box-heading">
                            <h4>Do you need moving blankets to protect your belongings ?</h4>
                        </div>
                        <div class="box-plans">
                            <div class="form-check-main">
                                <div class="form-check">
                                    <div class="custom-radio">
                                        <input class="form-check-input" type="radio" wire:model="_blankets_type" value=0
                                               name="flexRadioDefault3"
                                               id="flexRadioDefault6" checked>
                                    </div>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        <span>No</span>
                                    </label>
                                </div>
                                @if($_blanket->available == 1)
                                <div class="form-check">
                                    <div class="custom-radio">
                                        <input class="form-check-input" wire:model="_blankets_type" value=1 type="radio"
                                               name="flexRadioDefault3"
                                               id="flexRadioDefault7">
                                    </div>
                                    <label class="form-check-label" for="flexRadioDefault7">
                                        <span>Rent them by the Dozen</span>
                                        <p class="price-info">${{$_blanket->price}} / Mo </p> 
                                        {{-- {{$_blanket->price}} --}}
                                    </label>
                                    <div class="count-info-main">
                                        @if($blanket_count > 0 && $_blankets_type == 1)
                                            <span class="cust-price">${{$_blanket->price * $blanket_count}}</span>
                                        @endif
                                        @if($blanket_count == 0 && $_blankets_type == 1)
                                            <span class="cust-price">$0</span>
                                        @endif
                                        @if($_blankets_type == 1)
                                            <div class="product-count small-counter">
                                                <button class="button-count no-active" wire:click="Minus_blankets('rent')">-</button>
                                                <input type="text" readonly="" class="number-product form-control" wire:model.lazy="blanket_count">
                                                <button class="button-count no-active" wire:click="Add_blankets('rent')">+</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @endif
                                @if($_blankets->available == 1)
                                <div class="form-check">
                                    <div class="custom-radio">
                                        <input class="form-check-input" wire:model="_blankets_type" value=2 type="radio" name="flexRadioDefault3" id="flexRadioDefault8">
                                    </div>
                                    <label class="form-check-label" for="flexRadioDefault8">
                                        <span>Buy blankets</span>
                                        <p class="price-info">${{$_blankets->price}} / Each </p>
                                    </label>
                                    <div class="count-info-main">
                                        @if($blankets_count > 0 && $_blankets_type == 2)
                                            <span class="cust-price">${{$_blankets->price * $blankets_count}}</span>
                                        @endif
                                        @if($blankets_count == 0 && $_blankets_type == 2)
                                            <span class="cust-price">$0</span>
                                        @endif
                                        @if($_blankets_type == 2)
                                        
                                            <div class="product-count small-counter">
                                                <button class="button-count no-active" wire:click="Minus_blankets('buy')">-</button>
                                                <input type="text" readonly="" class="number-product form-control" wire:model.lazy="blankets_count">
                                                <button class="button-count no-active" wire:click="Add_blankets('buy')">+</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                         <!-- <div class="box-button"><button wire:click="Deliverydetailsave()"  class="btn btn--primary">Continue</button></div> -->
                    </div>
                </div>
                @endif
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
                                        {{-- @if($_protection == 1)
                                            <th>${{@$boxes->price*($_qty??1)+15}}</th>
                                        @else
                                            <th>${{@$boxes->price*($_qty??1)}}</th>
                                        @endif --}}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Container Storage</td>
                                         @if($_protection == 1)
                                            <th>${{@$boxes->price*($_qty??1)+15}}</th>
                                        @else
                                            <th>${{@$boxes->price*($_qty??1)}}</th>
                                        @endif
                                    </tr>
                                    {{-- <tr>
                                        <td>Container Insurance</td>
                                        @if($_protection == 1)
                                            <th>$15</th>
                                        @else
                                            <th>$0</th>
                                        @endif
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
                                        <th>One-Time Charges</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Initial Delivery</td>
                                        <td>${{$zipcode->initial_delivery??0}}</td>
                                    </tr>
                                    @if($type == 2)
                                         <tr>
                                                <td>Initial Pickup</td>
                                                <td>${{@$zipcode->initial_pickup??0}}</td>
                                        </tr>
                                        <tr>
                                                <td>Final Delivery</td>
                                                <td>${{@$zipcode->final_delivery??0}}</td>
                                        </tr>
                                    @endif
                                    {{-- @if($container_types != 'Storage') --}}
                                    @if(($container_types != 'Storage' || $container_types != 'Moving' && $type!=1 &&  $type!=2) && ($container_types != 'Storage-Moving' || $type==1))
                                    <tr>
                                        <td>Moving</td>
                                        <td>${{$zipcode->moving??0}}</td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>Final Pickup (due at final container pickup)</td>
                                        <td>${{$zipcode->final_pick??0}}</td>
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
                                        <td>${{$this->_padlocks->price * $padlocks_count}}</td>
                                    </tr>
                                    <tr>
                                        <td>Moving Blankets / Monthly</td>
                                        @if($_blankets_type == 1)
                                            <td>${{$this->_blanket->price*($blanket_count??1) }}</td>
                                        @elseif($_blankets_type == 2)
                                            <td>${{$this->_blankets->price*($blankets_count??1) }}</td>
                                        @else
                                            <td>$0</td>
                                        @endif
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
                                            <td>Total Due 24 Hours Before Delivery. Reserve now, pay later</td>
                                            @if($type == 2)
                                                @if($container_types != 'Storage')
                                                    @if($_blankets_type == 1)
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->moving??0)+($zipcode->initial_pickup??0)+($zipcode->final_delivery??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td>
                                                    @elseif($_blankets_type == 2)
                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td>
                                                    @else
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->moving??0)+($zipcode->initial_pickup??0)+($zipcode->final_delivery??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*(0))}}</td>
                                                    @endif
                                                @else
                                                    @if($_blankets_type == 1)
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->initial_pickup??0)+($zipcode->final_delivery??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td>
                                                    @elseif($_blankets_type == 2)
                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td>
                                                    @else
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->initial_pickup??0)+($zipcode->final_delivery??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*(0))}}</td>
                                                    @endif
                                                @endif
                                            @else
                                                @if($container_types != 'Storage')
                                                    @if($_blankets_type == 1)
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->moving??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td>
                                                    @elseif($_blankets_type == 2)
                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td>
                                                    @else
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->moving??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*(0))}}</td>
                                                    @endif
                                                @else
                                                    @if($_blankets_type == 1)
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blanket->price*($blanket_count??0))}}</td>
                                                    @elseif($_blankets_type == 2)
                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td>
                                                    @else
                                                        {{-- <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($zipcode->final_pick??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*($blankets_count??0))}}</td> --}}

                                                        <td class="text-bold total-count">${{@($boxes->price*($_qty??1))+($_protection == 1?15:0)+(($zipcode->initial_delivery??0)+($this->_padlocks->price * $padlocks_count)+$this->_blankets->price*(0))}}</td>
                                                    @endif
                                                @endif
                                            @endif
                                            {{-- <td class="text-bold total-count">$326.00</td>--}}
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-button"><button wire:click="Deliverydetailsave()"  class="btn btn--primary-continue">Continue</button></div>
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
                                <p>We used MiBox for 3 years & each time I contacted them I spoke with Joe. Never had
                                    any issues, Joe was great. Some of the best customer service l've had. We finally
                                    moved into our... <a href="#" class="readmore-btn">Read More</a>
                                </p>
                            </div>
                            <div class="rprofile-card">
                                <div class="rprofilecard-heading">
                                    <h6>Response from the owner</h6>
                                    <p class="semibold-heading">4 months ago</p>
                                </div>
                                <div class="rprofilecard-content">
                                    <p>Matthew, your 5 star review of your experiences with MI-BOX is greatly
                                        appreciated. Thank you for trusting MI-BOX with your valuables. It's been our
                                        pleasure having you as a customer and best of luck </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script> 
$('#submitAdd').click(function() {
    if ($("input[name='flexRadioDefault2']:checked").val()) {
        var flexRadioDefault5 = document.getElementById('flexRadioDefault5').checked = true;
        // var flexRadioDefault5 = $('#flexRadioDefault5').attr("checked", "checked");
    }

});
</script>
