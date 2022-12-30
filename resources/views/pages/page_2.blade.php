@extends('layouts.app')
@section('content')
<section class="section categories-main">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="delivery-boxs-main">
          <div class="delivery-box">
            <div class="rbox-heading">
              <h5>Delivery information</h5>
            </div>
            <div class="delivery-input-grp">
              <h6>Where the storage container is going first </h6>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Address" aria-label="Address">
              </div>
              <div class="input-group">
                <input class="form-control" list="citylist" id="city" placeholder="City">
                <datalist id="citylist">
                  <option value="San Francisco">
                  <option value="New York">
                  <option value="Seattle">
                  <option value="Los Angeles">
                  <option value="Chicago">
                </datalist>
                <input type="text" class="form-control" placeholder="Zip Code" aria-label="Zip Code">
              </div>
            </div>
            <div class="delivery-input-grp">
              <h6>Final delivery address: Where you are moving to</h6>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Address" aria-label="Address">
              </div>
              <div class="input-group">
                <input class="form-control" list="citylist" id="city" placeholder="City">
                <datalist id="citylist">
                  <option value="San Francisco">
                  <option value="New York">
                  <option value="Seattle">
                  <option value="Los Angeles">
                  <option value="Chicago">
                </datalist>
                <input type="text" class="form-control" placeholder="Zip Code" aria-label="Zip Code">
              </div>
            </div>
            <div class="delivery-input-grp">
              <h6>Type of Residence?</h6>
              <div class="input-group form-check-main">
                <div class="form-check">
                  <div class="custom-radio">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                  </div>
                  <label class="form-check-label" for="flexRadioDefault7"> House </label>
                </div>
                <div class="form-check">
                  <div class="custom-radio">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                  </div>
                  <label class="form-check-label" for="flexRadioDefault7"> Apartment </label>
                </div>
                <div class="form-check">
                  <div class="custom-radio">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                  </div>
                  <label class="form-check-label" for="flexRadioDefault7"> Business </label>
                </div>
              </div>
            </div>
            <div class="delivery-input-grp delivery-notes">
              <h6>Delivery Notes:</h6>
              <p class="light-title">To ensure a smooth delivery process, please add any delivery information in regards to the placement of your MI-BOX container.</p>
              <div class="input-group ">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Address"></textarea>
              </div>
            </div>
            <div class="delivery-input-grp delivery-time">
              <h6>Delivery Time</h6>
              <p class="light-title">To Insure 100% satisfaction. Prior to your scheduled delivery a Local MI-BOX Delivery Coordinator will touch base to review and confirm your delivery information</p>
              <div class="input-group form-check-main">
                <div class="form-check">
                  <div class="custom-radio">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                  </div>
                  <label class="form-check-label" for="flexRadioDefault7"> Anytime + $0 </label>
                </div>
                <div class="form-check">
                  <div class="custom-radio">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                  </div>
                  <label class="form-check-label" for="flexRadioDefault7"> AM Delivery + $50 </label>
                </div>
                <div class="form-check">
                  <div class="custom-radio">
                    <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                  </div>
                  <label class="form-check-label" for="flexRadioDefault7"> PM Delivery + $50 </label>
                </div>
              </div>
            </div>
          </div>
          <div class="delivery-box-footer">
            <a href="#" role="button" class="btn btn--primary d-flex">Reserve Now</a>
            <p class="text-center">Book with confidence. No Change or Cancelation Fees</p>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="category-summary-main">
          <div class="r-card-box rborder-box">
            <div class="rbox-heading">
              <h5>Primary Contact Information</h5>
            </div>
            <div class="contactr-form">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="First Name" aria-label="First Name">
              </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Last Name" aria-label="Last Name">
              </div>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
              </div>
              <div class="input-group">
                <input type="Email" class="form-control" placeholder="Email" aria-label="Email">
              </div>
            </div>
          </div>
          <div class="r-card-box rborder-box">
            <div class="rbox-heading">
              <h5>Quote Summary #91035612</h5>
            </div>
            <div class="rbox-price-main">
              <div class="rbox-price">
                <div class="box-tbl table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Monthly Charges</th>
                        <th>$229.00</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Container Storage</td>
                        <td>$219.00</td>
                      </tr>
                      <tr>
                        <td>Container Insurance</td>
                        <td>$10.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="rbox-price">
                <div class="box-tbl table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Monthly Charges</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Delivery Fee</td>
                        <td>$97.00</td>
                      </tr>
                      <tr>
                        <td>Pickup Fee (due at final container pickup)</td>
                        <td>$97.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="rbox-price">
                <div class="box-tbl table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Security Locks</td>
                        <td>$0.00</td>
                      </tr>
                      <tr>
                        <td>Moving Blankets</td>
                        <td>$0.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="rbox-price">
                <div class="box-tbl table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>You can reserve now and pay later. Total due 24 hours before delivery.</td>
                        <td class="text-bold total-count">$326.00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="r-card-box review-box">
            <div class="review-profile-main">
              <div class="review-profile-header">
                <div class="rprofile-left">
                  <figure class="profile-img">
                    <img src="{{ asset('images/profile-img.png') }}" alt="profile-img" class="img-fluid">
                  </figure>
                  <div class="profile-name">
                    <h5>Matthew Lucazak</h5>
                    <div class="rating-main">
                      <div class="rating">
                        <input type="radio" id="rating-5" checked>
                        <label for="rating-5"></label>
                        <input type="radio" id="rating-4" checked>
                        <label for="rating-4"></label>
                        <input type="radio" id="rating-3" checked>
                        <label for="rating-3"></label>
                        <input type="radio" id="rating-2" checked>
                        <label for="rating-2"></label>
                        <input type="radio" id="rating-1" checked>
                        <label for="rating-1"></label>
                      </div>
                      <div class="count-reviews">
                        <p class="semibold-heading">6 reviews</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="rprofile-right">
                  <p class="semibold-heading">4 months ago</p>
                </div>
              </div>
              <div class="review-profile-content">
                <div class="rprofile-data">
                  <p>We used MiBox for 3 years & each time I contacted them I spoke with Joe. Never had any issues, Joe was great. Some of the best customer service l've had. We finally moved into our... <a href="#" class="readmore-btn">Read More</a>
                  </p>
                </div>
                <div class="rprofile-card">
                  <div class="rprofilecard-heading">
                    <h6>Response from the owner</h6>
                    <p class="semibold-heading">4 months ago</p>
                  </div>
                  <div class="rprofilecard-content">
                    <p>Matthew, your 5 star review of your experiences with MI-BOX is greatly appreciated. Thank you for trusting MI-BOX with your valuables. It's been our pleasure having you as a customer and best of luck </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection