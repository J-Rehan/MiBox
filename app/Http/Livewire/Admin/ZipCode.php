<?php

namespace App\Http\Livewire\Admin;

use App\Models\Customer;
use App\Models\CustomerVideo;
use App\Models\ZipCode as Pincode;
use Livewire\Component;
use Livewire\WithPagination;

class ZipCode extends Component
{
    use WithPagination;

    public $_zipcode;
    public $_city;
    public $_country;
    public $_initial_delivery;
    public $_initial_pickup;
    public $_final_delivery;
    public $_final_pick;
    public $_moving;
    public $_pincode_id = 0;
    public $_delete = 0;
    protected $paginationTheme = 'bootstrap';

    public $_id = -1;
    public $sortField = 'zipcode';
    public $sortAsc = true;
    public $search = '';
    public $perPage = 10;
    
    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function showmodel($id)
    {
        $this->_id = $id;
    }
    public function deletemodel($id)
    {
        $this->_delete = $id;
    }

    public function deletePinCode() {
        $user = Pincode::find($this->_delete);
        $user->delete();
        $this->_delete = 0;
    }

    protected
        $rules = [
        '_zipcode' => 'required|min:4|max:9999999999|numeric',
        '_city' => 'required|min:3|max:200',
        '_country' => 'required|min:3|max:200',
        '_initial_delivery' => 'required|numeric|min:1|max:9999',
        '_initial_pickup' => 'required|numeric|min:1|max:9999',
        '_final_delivery' => 'required|numeric|min:1|max:9999',
        '_final_pick' => 'required|numeric|min:1|max:9999',
        '_moving' => 'required|numeric|min:1|max:9999',
    ];

    public
    function editZipcode($id)
    {
        $this->_id = $id;
        $pincodeedit = Pincode::find($id);
        $this->_zipcode = $pincodeedit->zipcode;
        $this->_city = $pincodeedit->city;
        $this->_country = $pincodeedit->country;
        $this->_initial_delivery = $pincodeedit->initial_delivery;
        $this->_initial_pickup = $pincodeedit->initial_pickup;
        $this->_final_delivery = $pincodeedit->final_delivery;
        $this->_final_pick = $pincodeedit->final_pick;
        $this->_moving = $pincodeedit->moving;
        $this->_pincode_id = $pincodeedit->id;
    }

public function clearform()
{
    $this->_zipcode = "";
    $this->_city = "";
    $this->_country = "";
    $this->_initial_delivery ="";
    $this->_initial_pickup = "";
    $this->_final_delivery = "";
    $this->_final_pick ="";
    $this->_moving ="";
    $this->_pincode_id = "";
    $this->_id = -1;
}

    public function saveORedit()
    {
        $this->validate();
        Pincode::updateOrCreate([
            'id' =>99,
        ], [
            'zipcode' => $this->_zipcode,
            'city' => $this->_city,
            'country' => $this->_country,
            'initial_delivery' => $this->_initial_delivery,
            'initial_pickup' => $this->_initial_pickup,
            'final_delivery' => $this->_final_delivery,
            'final_delivery' => $this->_final_delivery,
            'final_pick' => $this->_final_pick,
            'moving' => $this->_moving,
        ]);
        $this->clearform();
        session()->flash('success_message', 'Zip code Details successfully updated');
    }

    public function render()
    {
        // $pincode = Pincode::query();
        $pincode = Pincode::search($this->search);
        $lists = $pincode->latest()->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')->paginate($this->perPage);
        return view('livewire.admin.zip-code', ["lists" => $lists]);
    }

    // public function render()
    // {
    //     $pincode = Pincode::query();
    //     $lists = $pincode->latest()->paginate(10);
    //     return view('livewire.admin.zip-code', ["lists" => $lists]);
    // }
}
