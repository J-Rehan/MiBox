<?php

namespace App\Http\Livewire\Pages;

use App\Models\Box;
use App\Models\Extras;
use App\Models\Deliverydetail;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Validator;
use Mail;

class DeliveryInformationController extends Component
{
    protected $requests;
    public $__id;
    public $_deliverydetail;
    public $_storage_address;
    public $_storage_city;
    public $_storage_state;
    public $_storage_zip_code;
    public $_delivery_address;
    public $_delivery_city;
    public $_delivery_state;
    public $_delivery_zip_code;
    public $_residence;
    public $_delivery_notes;
    public $_time = "no";
    public $_first_name;
    public $_last_name;
    public $_phone_number;
    public $_email;
    public $_monthly_charges;
    public $_container_storage;
    public $_container_insurance;
    public $_One_Time_Charges;
    public $_options;
    public $_total;


    public function Sendmail()
    {
        $this->validate([
            '_storage_address' => 'required',
            '_storage_city' => 'required',
            '_storage_state' => 'required',
            '_storage_zip_code' => 'required',
            '_residence' => 'required',
            '_time' => 'required',
            '_first_name' => 'required',
            '_last_name' => 'required',
            '_phone_number' => 'required',
            '_email' => 'required',
            '_delivery_address' => 'required',
            '_delivery_city' => 'required',
            '_delivery_state' => 'required',
            '_delivery_zip_code' => 'required',
        ]);

        $deliverydetail = Deliverydetail::find($this->__id);
        $deliverydetail->storage_address =  $this->_storage_address;
        $deliverydetail->storage_city = $this->_storage_city;
        $deliverydetail->storage_state = $this->_storage_state;
        $deliverydetail->storage_zip_code = $this->_storage_zip_code;
        $deliverydetail->residence = $this->_residence;
        $deliverydetail->time = $this->_time;
        $deliverydetail->first_name = $this->_first_name;
        $deliverydetail->last_name = $this->_last_name;
        $deliverydetail->phone_number = $this->_phone_number;
        $deliverydetail->email = $this->_email;
        $deliverydetail->delivery_address = $this->_delivery_address;
        $deliverydetail->delivery_city = $this->_delivery_city;
        $deliverydetail->delivery_state = $this->_delivery_state;
        $deliverydetail->delivery_zip_code = $this->_delivery_zip_code;
        $deliverydetail->delivery_notes = $this->_delivery_notes??" ";
        if($this->_time == "PM Delivery + $50" || $this->_time == "AM Delivery + $50"){
            $deliverydetail->total = $deliverydetail->total + 50;
        }else{
            $deliverydetail->total = $deliverydetail->total;
        }
        $deliverydetail->save();

        $box = Box::find($deliverydetail->id_box);
        $del_data = json_decode($deliverydetail->options,true);
        $type = $del_data['_type'];

        try {
            Mail::send('emails.inquiry_email',["details"=>$deliverydetail,'box'=>$box, 'type' => $type],
                function ($message) {
                    $message->from(config("mail.from.address"), 'Mi-Box');
                    // $message->to(["elisisaac@gmail.com","rehandevelopment123@gmail.com"])->subject('Mi box inquiry email');
                    $message->to(["rehandevelopment123@gmail.com", "elisisaac@gmail.com"])->subject('Mi box inquiry email');
                    // $message->to('mibox@yopmail.com')->subject('Mi box inquiry email');
                }
            );
            // dd('if');
            Mail::send('emails.customer_email',["customer" => $deliverydetail],
            function ($message) use ($deliverydetail){
                    // $message->from(env("MAIL_FROM_ADDRESS"), 'Mi-Box');
                     $message->from(config("mail.from.address"), 'Mi-Box');
                    $message->to($deliverydetail->email)->subject('Mi box inquiry email');
                }
            );
            return redirect()->route("thank_you")->with(['success' => 'Thanks for subscribing']);

        } 
        catch (\Exception $e) {
            return redirect()->route("thank_you")->with(['success' => 'Thanks for subscribing']);
        }
    }

    public function mount($request)
    {
        $this->requests = $request;
        $this->__id = $request->q;
        $this->_deliverydetail = Deliverydetail::find($this->requests->q);
    }
    public function render()
    {
        return view('livewire.pages.delivery-information-controller');
    }
}