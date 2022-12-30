<div>
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="unit-box-main">
                @foreach($boxes as $boxe)
{{--                                                {{json_encode($boxe)}}--}}
                    {{--                            {{json_encode($zipcode)}}--}}
                    <div class="unitbox">
                        <div class="unitbox-data">
                            <div class="unitbox-left unitbox-w">
                                <div class="unitbox-header d-flex align-items-center">
                                    <h4 style="min-width: 160px;">{{$boxe->size}}</h4>
                                    @if($boxe->price == 209.0)
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$209</h4></span>
                                    @elseif($boxe->price == 309.0)
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$309</h4></span>
                                    @elseif($boxe->price == 179.0)
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$179</h4></span>
                                    @elseif($boxe['mibox_price'] == 269.0)
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$269</h4></span>
                                    @elseif($boxe['mibox_price'] == 369.0)
                                        <span class="cust-box-price"><h4 style="min-width: 160px;">$369</h4></span>
                                    @endif
                                </div>
                                <div class="unitbox-counter-main">
                                    <figure class="unitprdt-img">
                                        <img src="{{ asset("images/productft-$loop->iteration.png") }}" alt=""
                                             class="img-fluid">
                                    </figure>
                                    <div class="unitcounter">
                                       {{--  @if($container_count[$boxe->id] != 0)
                                            <span class="cust-box-price">${{$boxe->price*$container_count[$boxe->id]}}</span>
                                        @else
                                            <span class="cust-box-price">$0</span>
                                        @endif --}}
                                        <div class="product-count">
                                            <button class="button-count no-active" wire:click="Minus({{$boxe->id}})">-
                                            </button>
                                            <input wire:model="container_count.{{$boxe->id}}" type="text" readonly
                                                   class="number-product form-control">
                                            <button class="button-count" wire:click="Add({{$boxe->id}})">+</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="unitbox-content-main">
                                    <h6>{{$room_data[$boxe->id]}}</h6>
                                    <p>{{$text_data[$boxe->id]}}</p>
                                    <!-- <p>Ideal for storing the contents of a studio apartment, including a number of boxes, kitchen appliances, small mattress set, chairs, or even a motorcycle.</p> -->
                                </div>
                            </div>
                            <div class="unitbox-right unitbox-w">
                                <div class="unitbox-table">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                            <tr>
                                                <td>Monthly Rent</td>
                                                <td class="text-bold">
                                                    @if($container_count[$boxe->id] == 0)
                                                        $0
                                                    @else
                                                        ${{$boxe->price*$container_count[$boxe->id]}}
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Initial Delivery</td>
                                                <td class="text-bold">${{@$zipcode->initial_delivery??0}}</td>
                                            </tr>
                                            @if($type == 2)
                                            <tr>
                                                <td>Initial Pickup</td>
                                                <td class="text-bold">${{@$zipcode->initial_pickup??0}}</td>
                                            </tr>
                                            <tr>
                                                <td>Final Delivery</td>
                                                <td class="text-bold">${{@$zipcode->final_delivery??0}}</td>
                                            </tr>
                                            @endif
                                            {{-- @if($container_types != 'Storage') --}}
                                            @if(($container_types != 'Storage' || $container_types != 'Moving' && $type!=1 && $type!=2) && ($container_types != 'Storage-Moving' || $type==1))
                                            <tr>
                                                <td>Moving</td>
                                                <td class="text-bold">${{@$zipcode->moving??0}}</td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td>Final Pickup</td>
                                                <td class="text-bold">${{@$zipcode->final_pick??0}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Due Before Delivery</td>
                                                <td class="total-prc">
                                                    @if($container_count[$boxe->id] == 0)
                                                        $0
                                                    @elseif($type==2)
                                                    @if($container_types != 'Storage')
                                                    <!-- ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery + @$zipcode->initial_pickup + @$zipcode->final_delivery + @$zipcode->moving +@$zipcode->final_pick}}</td> -->
                                                        ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery }}</td>
                                                    @else
                                                        <!-- ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery + @$zipcode->initial_pickup + @$zipcode->final_delivery +@$zipcode->final_pick}}</td> -->
                                                        ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery }}</td>
                                                    @endif
                                                    @else
                                                    @if($container_types != 'Storage')
                                                    <!-- ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery + @$zipcode->moving +@$zipcode->final_pick}}</td> -->
                                                        ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery }}</td>
                                                    @else
                                                        <!-- ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery +@$zipcode->final_pick}}</td> -->
                                                        ${{($boxe->price*$container_count[$boxe->id]) + @$zipcode->initial_delivery }}</td>
                                                    @endif
                                                @endif
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pay-later">
                            <div class="pay-left w-50 text-center">
                                @if($container_count[$boxe->id] == 0)
                                    <a onclick="stoplink(event)" class="hover-5"
                                       href="{{url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])}}">
                                        <h4>Reserve now pay later</h4></a>
                                @else
                                    <a onclick=""
                                       href="{{url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])}}">
                                        <h4>Reserve now pay later</h4></a>
                                @endif
                            </div>
                            <div class="pay-right w-50 text-center">
                                @if($container_count[$boxe->id] == 0)
                                    <a onclick="stoplink(event)"
                                       href="{{url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])}}"
                                       class="btn btn--primary d-flex">Reserve now</a>
                                    <p>No Change or Cancelation Fees</p>
                                @else
                                    <a
                                       href="{{url("add-on?type=$type&container_types=$container_types&zipcode=$_zipocde&container=$boxe->id&qty=".$container_count[$boxe->id])}}"
                                       class="btn btn--primary d-flex">Reserve now</a>
                                    <p>No Change or Cancelation Fees</p>
                                @endif


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script>
        function stoplink(e) {
            e.preventDefault();
            return false;
        }
    </script>
</div>
