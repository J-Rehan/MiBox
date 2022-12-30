<div class="boxes_square">
    <h3>Boxes</h3>
    <div class="unitbox-left unitbox-w">
        <div class="main_border_class">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <form wire:submit.prevent="editbox">
            @foreach($lists as $key => $list)
            <div class="unitbox-counter-main">
                <figure class="unitprdt-img">
                    <div class="unitbox-header">
                        <h4>{{$list['size']}}</h4>
                    </div>
                    <img src="{{asset("assets/admin/image/productft-$loop->iteration.png")}}" alt="" class="img-fluid">
                </figure>

                <div class="unitcounter">
                    <div>
                        <div class="">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p style="color: #ff0000">{{ $error }}</p>
                                @endforeach
                            @endif
                        </div>
                        <div class="unit-info">
                            <p style="margin: 0px;">Available</p>
                            <div class="form-check form-check-inline">
                                <div class="custom-radio">
                                    <input @if($list['available'] == 1) checked @endif  wire:model='lists.{{ $key }}.available' value="1" class="form-check-input" type="radio" name="flexRadioDefault{{$key}}" id="flexRadioDefault{{$key}}" >
                                </div>
                                <label class="form-check-label" for="flexRadioDefault4">
                                    <span>Yes</span>
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <div class="custom-radio">
                                    <input @if($list['available'] == 2) checked @endif wire:model='lists.{{ $key }}.available' value="2" class="form-check-input" type="radio" name="flexRadioDefault{{$key}}" id="flexRadioDefault{{$key}}" >
                                </div>
                                <label class="form-check-label" for="flexRadioDefault5">
                                    <span>No</span>
                                </label>
                            </div>
                        </div>
                        <div class="location-price">

                                <div class="input-group">
                                    <input type="text" wire:key="search-{{ $loop->index }}" class="form-control"  wire:model='lists.{{ $key }}.price'  placeholder="Customer location price" aria-label="Email" aria-describedby="basic-addon2">
                                </div>

                                <div class="input-group">
                                    <input type="text" wire:key="search-{{ $loop->index }}" class="form-control"  wire:model='lists.{{ $key }}.mibox_price' placeholder="Stored at MiBox Price" aria-label="Stored at MiBox" aria-describedby="basic-addon2">
                                </div>
                        </div>
                        <div class="location-price">
                            <button  type="submit" type="button" class="btn btn--add">
                                save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </form>
        </div>

    </div>
</div>
