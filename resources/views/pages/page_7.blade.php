@extends('layouts.app')
@section('content')
<section class="section thankyou-main">
  <div class="container">
    <div class="row">
      <div class="col-md-7 m-auto text-center">
        <div class="thankyou-box">
          <figure class="thankyou-img">
            <img src="{{ asset('images/thankyou.svg') }}" alt="" class="img-fluid">
          </figure>
          <div class="thankyou-content">
            <h3>Thank you for reserving a MIBOX</h3>
            <ol>
              <li>To make sure you are 100% satisfied our local Delivery Coordinator will reach out to confirm your delivery information and finalize your reservation. </li>
              <li>E-sign your rental agreement. Please check your email inbox for the MI-BOX Rental Agreement. It is a very simple DocuSign and takes less than 2 minutes to complete.</li>
              <li>If you need any additional information or your delivery information changes at any time, give us a call at 941-777-7269. We are local and a live person will always answer your call.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection