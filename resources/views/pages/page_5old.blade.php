@extends('layouts.app')
@section('content')
<section class="section categories-main">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="category-boxs-main">
          <div class="cat-box">
            <div class="cat-box-img">
              <img src="{{ asset('images/cat-img-1.svg') }}" alt="" class="img-fluid">
            </div>
            <div class="cat-box-content">
              <div class="box-heading">
                <h4>Would you like extra protection for things?</h4>
              </div>
              <div class="box-plans">
                <p>Why do I need a protection plan ?</p>
                <div class="form-check-main">
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                    </div>
                    <label class="form-check-label" for="flexRadioDefault1">
                      <span>No thanks</span>
                    </label>
                  </div>
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    </div>
                    <label class="form-check-label" for="flexRadioDefault2">
                      <span>Container only ($10.00/ Container/ Month)</span>
                      <p class="info-tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Lorem ipsum">i</p>
                    </label>
                  </div>
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    </div>
                    <label class="form-check-label" for="flexRadioDefault3">
                      <span>Container & Contents</span>
                      <p class="info-tip" data-bs-toggle="tooltip" data-bs-placement="right" title="Lorem ipsum">i</p>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cat-box">
            <div class="cat-box-img">
              <img src="{{ asset('images/cat-img-2.svg') }}" alt="" class="img-fluid">
            </div>
            <div class="cat-box-content">
              <div class="box-heading">
                <h4>Would you like padlocks?</h4>
              </div>
              <div class="box-plans">
                <p>We require a lock on your container when storing in our storage center.</p>
                <div class="form-check-main">
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault4">
                    </div>
                    <label class="form-check-label" for="flexRadioDefault4">
                      <span>I will provide my own padlocks</span>
                    </label>
                  </div>
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault2" id="flexRadioDefault5" checked>
                    </div>
                    <label class="form-check-label" for="flexRadioDefault5">
                      <span>Buy Secure Disc Lock</span>
                      <p class="price-info">$11.99</p>
                    </label>
                    <div class="product-count small-counter">
                      <button class="button-count no-active">-</button>
                      <input type="text" readonly="" class="number-product form-control" value="1">
                      <button class="button-count">+</button>
                    </div>
                  </div>
                  <div class="box-button">
                    <a href="#" class="btn btn--primary">Continue</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cat-box">
            <div class="cat-box-img">
              <img src="{{ asset('images/cat-img-3.svg') }}" alt="" class="img-fluid">
            </div>
            <div class="cat-box-content">
              <div class="box-heading">
                <h4>Do you need moving blankets to protect your belongings ?</h4>
              </div>
              <div class="box-plans">
                <div class="form-check-main">
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault6" checked>
                    </div>
                    <label class="form-check-label" for="flexRadioDefault6">
                      <span>No</span>
                    </label>
                  </div>
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault7">
                    </div>
                    <label class="form-check-label" for="flexRadioDefault7">
                      <span>Rent them by the Dozen</span>
                      <p class="price-info">$19.99/ Dozen </p>
                    </label>
                  </div>
                  <div class="form-check">
                    <div class="custom-radio">
                      <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault8">
                    </div>
                    <label class="form-check-label" for="flexRadioDefault8">
                      <span>Buy blankets</span>
                      <p class="price-info">$11.99</p>
                    </label>
                  </div>
                </div>
              </div>
              <!-- <div class="box-button"><a href="#" class="btn btn--primary">Continue</a></div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="category-summary-main">
          <div class="r-card-box rborder-box">
            <div class="rbox-heading">
              <h5>Quote Summary #91035612</h5>
            </div>
            <div class="rbox-price-main">
              <div class="rbox-price">
                <div class="box-tbl">
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
                <div class="box-tbl">
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
                <div class="box-tbl">
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
                <div class="box-tbl">
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
                    <img src="{{ asset('images/profile-img.png') }}" alt="profile-img">
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