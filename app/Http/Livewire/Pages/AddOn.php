<?php

namespace App\Http\Livewire\Pages;

use App\Models\Box;
use App\Models\ZipCode;
use App\Models\Deliverydetail;
use App\Models\Extras;
use Livewire\Component;

class AddOn extends Component
{

    protected $requests;
    public $container_count = 1;
    public $padlocks_count = 0;
    public $blankets_count = 1;
    public $blanket_count = 1;
    public $_protection = 0;
    public $boxes;
    public $zipcode;
    public $Extras;
    public $_padlocks;
    public $_blankets;
    public $_blanket;
    public $_blankets_type = 0;
    public $_zipocde;
    public $_qty = 1;
    public $type = 1;
    public $container = 1;
    public $container_types;

    public function AddPadlocks($id)
    {

        $this->padlocks_count = $id;
    }

    public function Add()
    {
        $this->padlocks_count = $this->padlocks_count + 1;
    }

    public function Minus()
    {
        $this->padlocks_count = $this->padlocks_count - 1 == 0 ? 1 : $this->padlocks_count - 1;
    }

    public function Add_blankets($type)
    {   
       
        if($type == 'rent'){
            $this->blanket_count = $this->blanket_count + 1;
        }else{
            $this->blankets_count = $this->blankets_count + 1;
        }
        
    }

    public function Minus_blankets($type)
    {   
        if($type == 'rent'){
            $this->blanket_count = $this->blanket_count - 1 == 0 ? 1 : $this->blanket_count - 1;
        }else{
            $this->blankets_count = $this->blankets_count - 1 == 0 ? 1 : $this->blankets_count - 1;
        } 
    }

    public function Deliverydetailsave()
    {
        //        `id`, `storage_address`, `storage_city`, `storage_zip_code`, `residence`, `time`, `first_name`, `last_name`, `phone_number`, `email`,
        // `monthly_charges`, `container_storage`, `container_insurance`, `One_Time_Charges`, `options`, `total`, `created_at`, `updated_at`
        if($this->_blankets_type == 1){
            $onetimearray = [
                "_padlocks" => (($this->_padlocks->price * $this->padlocks_count) ?? 0),
                "_blankets" => (($this->_blankets->price*(0))),
                "_blanket" => (($this->_blanket->price*($this->blanket_count)) ??0)
            ];
        }else if($this->_blankets_type == 2){
            $onetimearray = [
                "_padlocks" => (($this->_padlocks->price * $this->padlocks_count) ?? 0),
                "_blankets" => (($this->_blankets->price*($this->blankets_count)) ??0),
                "_blanket" => (($this->_blanket->price*(0)))
            ];
        }else{
            $onetimearray = [
                "_padlocks" => (($this->_padlocks->price * $this->padlocks_count) ?? 0),
                "_blankets" => (($this->_blankets->price*(0))),
                "_blanket" => (($this->_blanket->price*(0)))
            ];
        }
        
        $options_array = [
            "_initial_delivery" => ($this->zipcode->initial_delivery??0), 
            "_initial_pickup" => ($this->zipcode->initial_pickup??0), 
            "_final_delivery" => ($this->zipcode->final_delivery??0), 
            "_type" => $this->type, 
            "_container_types" => $this->container_types,
            "_final_pick" => ($this->zipcode->final_pick??0),
            "_moving" => ($this->zipcode->moving??0),
        ];
        $deliverydetail = new Deliverydetail();
        $deliverydetail->storage_address = " ";
        $deliverydetail->storage_city = " ";
        $deliverydetail->storage_zip_code = " ";
        $deliverydetail->residence = " ";
        $deliverydetail->time = " ";
        $deliverydetail->first_name = " ";
        $deliverydetail->last_name = " ";
        $deliverydetail->phone_number = " ";
        $deliverydetail->email = " ";

        $deliverydetail->delivery_address = " ";
        $deliverydetail->delivery_city = " ";
        $deliverydetail->delivery_zip_code = " ";
        $deliverydetail->delivery_notes = " ";
        $deliverydetail->id_box = $this->boxes->id;
        $deliverydetail->qty_lock = $this->padlocks_count??0;
        //dd($onetimearray);
        if($this->type == 1){
            $deliverydetail->monthly_charges = ($this->boxes->price * ($this->_qty ?? 1)) + ($this->_protection != 0 ? 15 : 0);
            $deliverydetail->container_storage = $this->boxes->price * ($this->_qty ?? 1);
        }else{
            $deliverydetail->monthly_charges = ($this->boxes->mibox_price * ($this->_qty ?? 1)) + ($this->_protection != 0 ? 15 : 0);
            $deliverydetail->container_storage = $this->boxes->mibox_price * ($this->_qty ?? 1);
        }
        
        $deliverydetail->container_insurance = $this->_protection != 0 ? 15 : 0;
        $deliverydetail->One_Time_Charges = json_encode($onetimearray);
        $deliverydetail->options =  json_encode($options_array);
        if($this->container_types != 'Storage'){
            if($this->_blankets_type == 1){
                //$deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) + ($this->zipcode->moving ?? 0) +($this->zipcode->final_pick ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blanket->price * ($this->blanket_count ?? 0));

                $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blanket->price * ($this->blanket_count ?? 0));
            }else if($this->_blankets_type == 2){
                $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) +  ($this->_padlocks->price * $this->padlocks_count) + $this->_blankets->price * ($this->blankets_count ?? 0));
            }
            else{
                // $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) + ($this->zipcode->moving ?? 0) +($this->zipcode->final_pick ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blankets->price * ($this->blankets_count ?? 0));

                $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) +  ($this->_padlocks->price * $this->padlocks_count) + $this->_blankets->price * (0));
            }
        }else{
            if($this->_blankets_type == 1){
                // $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) +($this->zipcode->final_pick ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blanket->price * ($this->blanket_count ?? 0));

                $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blanket->price * ($this->blanket_count ?? 0));
            }else if($this->_blankets_type == 2){
                $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blankets->price * ($this->blankets_count ?? 0));
            }else{
                // $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) +($this->zipcode->final_pick ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blankets->price * ($this->blankets_count ?? 0));

                $deliverydetail->total = $deliverydetail->monthly_charges + (($this->zipcode->initial_delivery ?? 0) + ($this->_padlocks->price * $this->padlocks_count) + $this->_blankets->price * (0));
            }
        }
        
        if($this->type == 2){
            //$deliverydetail->total = $deliverydetail->total + ($this->zipcode->initial_pickup ?? 0) + ($this->zipcode->final_delivery ?? 0);
            $deliverydetail->total = $deliverydetail->total;
        }
        $deliverydetail->save();
        return redirect()->route("delivery_information",["q"=>$deliverydetail->id])->with(['success' => 'Thanks for subscribing']);

    }

    public function mount($request,$type)
    {
        $this->requests = $request;
        $this->type = $type;
        $this->container = $request->container;
        $this->container_types = $request->container_types;

        $this->_qty = $this->requests->qty;
        if ($type == 2) {
            $this->boxes = Box::where("id", $this->requests->container)->select('boxes.*', 'boxes.mibox_price AS price')->first();

        } else {
            $this->boxes = Box::where("id", $this->requests->container)->first();
        }
//        $this->boxes = Box::where("id", $this->requests->container)->first();
        $this->Extras = Extras::get();
        $this->_padlocks = Extras::where("name", "Padlocks")->first();
        $this->_blankets = Extras::where("name", "Blankets")->where('type','buy')->first();
        $this->_blanket = Extras::where("name", "Blankets")->where('type','rent')->first();
        $this->zipcode = ZipCode::where("zipcode", $this->requests->zipcode)->first();
    }

    public function render()
    {
        if ($this->type == 2) {
            $this->boxes = Box::where("id", $this->container)->select('boxes.*', 'boxes.mibox_price AS price')->first();

        } else {
            $this->boxes = Box::where("id", $this->container)->first();
        }

        // if($this->_blankets_type == 1){
        //     $this->blankets_count = 0;
        //     $this->blanket_count = 1;
        // }

        // if($this->_blankets_type == 2){
        //     $this->blanket_count = 0;
        //     $this->blankets_count = 1;
        // }


        return view('livewire.pages.add-on');
    }
}