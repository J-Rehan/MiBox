<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Datelist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use Auth;
use Validator;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        return view('admin/dashboard/index');
    }

    public function zipcode(Request $request)
    {
        return view('admin/dashboard/zipcode');
    }

    public function extras(Request $request)
    {
        return view('admin/dashboard/extras');
    }

    public function calendar(Request $request)
    {
        return view('admin/dashboard/calendar');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect(route('admin.auth.loginForm'));
    }

    public function Inquiry(Request $request)
    {
        $rules = [
            'type' => "required",
            'current_zipcode' => "required|min:2|max:255",
            'new_zipcode' => "required|min:2|max:255",
            'promo_code' => "nullable|min:2|max:255",
            'start_date' => "required",
            'email' => "required|email|max:255",
            'container_types' => 'nullable',
            'phone' => "required",
        ];
        $messages = [];

        //Validate requested data
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first(), "data" => (object)[]], 400);
        }

        $inquiry = new Inquiry();
        $inquiry->type = $request->type;
        $inquiry->current_zipcode = $request->current_zipcode;
        $inquiry->new_zipcode = $request->new_zipcode;
        $inquiry->promo_code = $request->promo_code;
        $inquiry->start_date = $request->start_date;
        // $inquiry->start_date = Carbon::parse($request->start_date)->format('Y-m-d'); 
        $inquiry->email = $request->email;
        $inquiry->container_types = $request->container_types;
        $inquiry->phone = $request->phone;
        $inquiry->save();

        $response['data'] = $inquiry;
        $response['success'] = true;
        $response['message'] = "Inquiry Save successfully";

        return response()->json($response, 200);
    }

    public function DateList()
    {
        $lists = Datelist::orderBy("date")->pluck("date");
        $response['data']["dates"] = $lists;
        $response['success'] = true;
        $response['message'] = "Date list";

        return response()->json($response, 200);
    }

}
