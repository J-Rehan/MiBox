<?php

namespace App\Http\Livewire\Pages;

use App\Models\Box;
use App\Models\ZipCode;
use http\Env\Request;
use Livewire\Component;

class Home extends Component
{
    protected $requests;
    public $container_count = [];
    public $boxes;
    public $zipcode;
    public $_zipocde;
    public $text_data;
    public $room_data;
    public $type;
    public $container_types;




    public function mount($request,$type)
    {
        $textRoomContents = [
            "Typically holds 3 to 4 rooms of contents",
            "Typically holds 4 to 5 rooms of contents",
            "Typically holds 1 to 2 rooms of contents",
        ];

        $text = [
            "Commonly holds 3-4 rooms. Perfect for holding an entertainment center, king-size mattresses, larger appliances, dining room, furniture, boxes and other various items.",
            "Commonly holds 4-5 rooms. Perfect for holding an entertainment center, king-size mattresses, larger appliances, dining room, furniture, and other various items",
            // "Can usually hold the contents of a 1-2 room home. Great for storing bikes and other sporting equipment, large furniture or full dining room sets.",
            "Ideal for storing the contents of a studio apartment, including a number of boxes, kitchen appliances, small mattress set, chairs, or even a motorcycle.",
        ];
      
        $this->requests = $request;
        $this->type = $type;
        $this->container_types = $request->container_types;

        if ($this->type == 2) {
            $this->boxes = Box::where('available', 1)->select('boxes.*', 'boxes.mibox_price AS price')->orderBy('order', 'asc')->get();

        } else {
            $this->boxes = Box::where('available', 1)->orderBy('order', 'asc')->get();
        }


        foreach ($this->boxes as $key => $box) {
            $this->container_count[$box->id] = 0;
            $this->text_data[$box->id] = $text[$key];
            $this->room_data[$box->id] = $textRoomContents[$key];
        }
        $this->_zipocde = $this->requests->zipcode;
        $this->zipcode = ZipCode::where("zipcode", $this->requests->zipcode)->first();
    }

    public function Add($id)
    {

        $this->container_count[$id] = $this->container_count[$id] + 1;
    }

    public function Minus($id)
    {
        $this->container_count[$id] = $this->container_count[$id] - 1 == -1 ? 0 : $this->container_count[$id] - 1;
    }

    public function render()
    {
        if ($this->type == 2) {
            $this->boxes = Box::where('available', 1)->select('boxes.*', 'boxes.mibox_price AS price')->orderBy('order', 'asc')->get();

        } else {
            $this->boxes = Box::where('available', 1)->orderBy('order', 'asc')->get();
        }

        if($this->container_count[$this->boxes[0]['id']] == 0){
            $this->container_count[$this->boxes[0]['id']] = 1;
        }

        return view('livewire.pages.home');
    }
}
