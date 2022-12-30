<?php

namespace App\Http\Livewire\Admin;

use App\Models\Extras;
use Livewire\Component;

class ExtrasController extends Component
{

    public $lists = [];

    protected $rules = [
        'lists.*.name' => 'required|min:2',
        'lists.*.available' => 'required',
        'lists.*.price' => 'required|numeric|min:1|max:9999',
    ];

    public function ManageAvailableCheckbox($id,$value)
    {
        $this->lists[$id]->available = $value;
    }

    public function editbox()
    {
        $this->validate();
        foreach ($this->lists as $list)
        {
            $box = Extras::find($list['id']);
            $box->available = $list['available'];
            $box->price = $list['price'];
            $box->save();

        }
        session()->flash('message', 'Price successfully updated');
    }

    public function mount()
    {
        $this->lists = Extras::orderBy('id')->get();
    }

    public function render()
    {
        return view('livewire.admin.extras-controller');
    }
}
