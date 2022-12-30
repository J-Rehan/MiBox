<div class="boxes_square">
    <h3>Extras</h3>
    <div class="unitbox-left unitbox-w">
        <div class="main_border_class">
            <form wire:submit.prevent="editbox">
                @foreach($lists as $key => $list)
                    <div class="unitbox-counter-main">
                        <figure class="unitprdtins-img">
                            <div class="unitbox-header">
                                <h4>{{$list->name}}</h4>
                            </div>
                            <img src="{{asset($list['url'])}}" alt="" class="img-fluid">
                        </figure>
                        <div class="unitcounter">
                            <div>
                                <div class="unit-info">
                                    <p style="margin: 0px;">Available</p>
                                    <div class="form-check form-check-inline">
                                        <div class="custom-radio">
                                            <input name="flexRadioDefault{{$key}}" id="flexRadioDefault{{$key}}" @if($list['available'] == 1) checked @endif wire:model='lists.{{ $key }}.available' value="1" class="form-check-input" type="radio" >
                                        </div>
                                        <label class="form-check-label" for=flexRadioDefault{{$key}}">
                                            <span>Yes</span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <div class="custom-radio">
                                            <input name="flexRadioDefault1{{$key}}" id="flexRadioDefault1{{$key}}" @if($list['available'] == 1) checked @endif wire:model='lists.{{ $key }}.available' value="0" class="form-check-input" type="radio" >
                                        </div>
                                        <label class="form-check-label" for=flexRadioDefault1{{$key}}">
                                            <span>No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="location-price">
                                @if($list->type == 'buy')
                                    <div class="input-group">
                                        <input wire:model='lists.{{ $key }}.price' type="text" class="form-control" placeholder="Price" aria-label="Stored at MiBox" aria-describedby="basic-addon2"><span class="cust-blanket">/ each</span></input>
                                    </div>
                                @elseif($list->type == 'rent')
                                    <div class="input-group">
                                        <input wire:model='lists.{{ $key }}.price' type="text" class="form-control" placeholder="Price" aria-label="Stored at MiBox" aria-describedby="basic-addon2"><span class="cust-blanket">/ dozen</span></input>
                                    </div>
                                @else
                                    <div class="input-group">
                                        <input wire:model='lists.{{ $key }}.price' type="text" class="form-control" placeholder="Price" aria-label="Stored at MiBox" aria-describedby="basic-addon2">
                                    </div>
                                @endif
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
