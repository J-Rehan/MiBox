<?php

namespace App\Http\Livewire\Admin;

use App\Models\Box;
use Livewire\Component;

class BoxController extends Component
{
    public $lists = [];

    protected $rules = [
        'lists.*.size' => 'required|min:2',
        'lists.*.available' => 'required',
        'lists.*.price' => 'required|numeric|min:1|max:9999',
        'lists.*.mibox_price' => 'required|numeric|min:1|max:9999',
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
            $box = Box::find($list['id']);
            $box->size = $list['size'];
            $box->available = $list['available'];
            $box->price = $list['price'];
            $box->mibox_price = $list['mibox_price'];
            $box->save();

        }
        session()->flash('message', 'Price successfully updated');
    }

    public function mount()
    {
        $this->lists = Box::orderBy('id')->get();
    }

    public function render()
    {
        $lists = Box::orderBy('id')->get();
        return view('livewire.admin.box-controller');
    }
}
