<div class="boxes_square">
    
    <div class="zipcode">
        <h3>zipcode</h3>
        <a href="#" data-bs-toggle="modal" data-bs-target="">
            <p><img src="{{asset("assets/admin/image/add.png")}}" alt="" srcset="" wire:click="showmodel(0)">Add new zip code</p>
        </a>
    </div>

    <div class="row mb-2">
        <div class="col-md-4">
          <div class="float-right">
              <input wire:model="search" class="form-control" type="text" placeholder="Search city or zipcode ...">
          </div>
        </div>
        
        <div class="col-md-3">
            <a class="btn btn-export" href="{{ route('exports') }}">Export</a>
        </div>
    </div>

    <table class="table table-striped table-responsive table-hover">
        @if ($lists->count())
        <thead>
        <tr>
            {{-- <th scope="col">zip</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('zipcode')" role="button" href="#">
                    Zipcode @include('includes.sort-icon', ['field' => 'zipcode'])
                </a>
            </th>
            {{-- <th scope="col">city</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('city')" role="button" href="#">
                    City @include('includes.sort-icon', ['field' => 'city'])
                </a>
            </th>
            {{-- <th scope="col">Country</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('country')" role="button" href="#">
                Country @include('includes.sort-icon', ['field' => 'country'])
                </a>
            </th>
            {{-- <th scope="col">Initial Delivery</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('initial_delivery')" role="button" href="#">
                Initial Delivery @include('includes.sort-icon', ['field' => 'initial_delivery'])
                </a>
            </th>
            {{-- <th scope="col">Initial Pickup</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('initial_pickup')" role="button" href="#">
                Initial Pickup @include('includes.sort-icon', ['field' => 'initial_pickup'])
                </a>
            </th>
            {{-- <th scope="col">Moving</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('moving')" role="button" href="#">
                    Moving @include('includes.sort-icon', ['field' => 'moving'])
                </a>
            </th>
            {{-- <th scope="col">Final Delivery</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('final_delivery')" role="button" href="#">
                Final Delivery @include('includes.sort-icon', ['field' => 'final_delivery'])
                </a>
            </th>
            {{-- <th scope="col">Final pick</th> --}}
            <th scope="col">
                <a wire:click.prevent="sortBy('final_pick')" role="button" href="#">
                Final pick @include('includes.sort-icon', ['field' => 'final_pick'])
                </a>
            </th>
            <th scope="col"> Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lists as $list)
            <tr>
                <td>{{$list->zipcode}}</td>
                <td>{{$list->city}}</td>
                <td>{{$list->country}}</td>
                <td>${{$list->initial_delivery}}</td>
                <td>${{$list->initial_pickup}}</td>
                <td>${{$list->moving}}</td>
                <td>${{$list->final_delivery}}</td>
                {{-- <td class="d-flex">${{$list->final_pick}}</td> --}}
                <td>${{$list->final_pick}}</td>
                <td><div class="final-pack"><img wire:click="editZipcode({{$list->id}})"  src="{{asset("assets/admin/image/edit.svg")}}" alt="" srcset=""
                    class="total_price"><img wire:click="deletemodel({{$list->id}})"
src="{{asset("assets/admin/image/delete3.png")}}" alt="" srcset=""></div></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
    <div class="alert alert-warning">
        Data not found.
    </div>
    @endif
    <div class="custom_pagination">
        {{ $lists->links() }}
    </div>

    <div id="PagamentoLongModal" class="modal delete-action-main fade bd-example-modal-sm @if($_delete >= 0) show @endif " tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="@if($_delete) display:block; @endif">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button"  wire:click="showmodel(-1)" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="delete-action">
                        <h5>Are you sure?</h5>
                        <p>Do you really want to delete this? This <br>process cannot be undone.</p>
                        <div class="delete-popup-btn">
                            <a wire:click="deletemodel(0)" class="btn btn-secondary" href="javascript:void(0)">Cancel</a>
                            <a class="btn btn-danger" wire:click="deletePinCode">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($_id >= 0)
        <div class="modal-backdrop show"></div> @endif
    <div class="modal @if($_id >= 0) show @endif" @if($_id >= 0) style="display: block" @endif id="exampleModal"
         tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100" id="exampleModalLabel">Zip Code</h5>
                    <button type="button"  wire:click="showmodel(-1)" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="container">
                            <form wire:submit.prevent="saveORedit">
                                <div class="row poup_borders">
                                    <div class="col-md-6">
                                        <label for="Zip">Zip</label>
                                        <input type="text" class="form-control "
                                               aria-label="Sizing example input" placeholder="Enter Zip" wire:model="_zipcode"
                                               aria-describedby="inputGroup-sizing-sm">
                                        @error('_zipcode') <span style="color:red">{{ $message }}</span> @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="City">City</label>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                               placeholder="Enter  City" wire:model="_city"
                                               aria-describedby="inputGroup-sizing-sm">
                                        @error('_city') <span style="color:red">{{ $message }}</span> @enderror


                                    </div>

                                    <div class="col-md-6 input_gap">
                                        <label for="Country">Country</label>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                               wire:model="_country" placeholder="Enter Country"
                                               aria-describedby="inputGroup-sizing-sm">
                                        @error('_country') <span style="color:red">{{ $message }}</span> @enderror

                                    </div>

                                </div>


                                <div class="row input_gap">
                                    <div class="col-md-6">
                                        <label for="initial_delivery">Initial Delivery</label>
                                        <input type="text" class="form-control my_data"
                                               aria-label="Sizing example input" placeholder="Initial Delivery Amount"
                                               wire:model="_initial_delivery" aria-describedby="inputGroup-sizing-sm">
                                        @error('_initial_delivery') <span
                                            style="color:red">{{ $message }}</span> @enderror

                                    </div>

                                    <div class="col-md-6 ">
                                        <label for="initial_pickup">Initial Pickup</label>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                               wire:model="_initial_pickup" placeholder="Initial Pickup Amount"
                                               aria-describedby="inputGroup-sizing-sm">
                                        @error('_initial_pickup') <span
                                            style="color:red">{{ $message }}</span> @enderror

                                    </div>
                                    <div class="col-md-6 input_gap">
                                        <label for="final_delivery">Final Delivery</label>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                               wire:model="_final_delivery" placeholder="Final delivery Amount"
                                               aria-describedby="inputGroup-sizing-sm">
                                        @error('_final_delivery') <span
                                            style="color:red">{{ $message }}</span> @enderror

                                    </div>


                                    <div class="col-md-6 input_gap">
                                        <label for="moving">Moving</label>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                               wire:model="_moving" placeholder="Moving Amount"
                                               aria-describedby="inputGroup-sizing-sm">
                                        @error('_moving') <span style="color:red">{{ $message }}</span> @enderror


                                    </div>


                                    <div class="col-md-6 input_gap">
                                        <label for="final_pick">Final Pick</label>
                                        <input type="text" class="form-control" aria-label="Sizing example input"
                                               wire:model="_final_pick" placeholder="Final Pickup Amount"
                                               aria-describedby="inputGroup-sizing-sm">
                                        @error('_final_pick') <span style="color:red">{{ $message }}</span> @enderror
                                    </div>

                                </div>
                                <div class="butoon_align">
                                    <button  type="submit" type="button" class="btn btn--add">
                                        @if($_id == 0) Add @else Edit  @endif
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
