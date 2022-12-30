<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Box;
use App\Models\ZipCode;
use App\Models\Deliverydetail;
use Illuminate\Http\Request;
use App\Exports\ExportZipcode;
use Maatwebsite\Excel\Facades\Excel;


class PageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages/page_4',["request"=>$request]);
    }
    public function AddOn(Request $request)
    {
        return view('pages/page_5',["request"=>$request]);
    }
    public function Delivery_Information(Request  $request)
    {
        return view('pages/page_9',["request"=>$request]);
    }
    public function thank_you(Request  $request)
    {
        return view('pages/page_7',["request"=>$request]);
    }
    public function email(Request  $request)
    {
        $details =  Deliverydetail::find(3);
        $box = Box::find($details->id_box);
        return view('emails.inquiry_email',["details"=>$details,'box'=>$box]);
    }
    public function show($id = 1)
    {
        $pages = [1,2,3,4,5,6,7,8,9];

        if(in_array($id,$pages)) {
            return view('pages.page_'.$id);
        }
        else {
            return view('pages.page_1');
        }
    }

    public function exportPincodes(Request $request)
    {
        return Excel::download(new ExportZipcode, 'zipcodes.xlsx');
    }

    public function emailTest(Request  $request)
    {
        return view('emailTest');
    }
}
