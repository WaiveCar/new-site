<?
$PAGETITLE = 'Welcome';
include('header.php'); 
?>    
    
<style>
.index-main-start__title {
  margin-bottom: 0;
  margin-top: 3rem;
}

.page-wrapper {
  overflow-x: visible;
}
.index-main__wrapper {
  max-height: 1000rem;
  height: 100%;
}

.index-main-start__bg {
  height: 100%;
  background: url(../img/index-main-start-bg.png) 50% 50% repeat;
}

.index-main-start-form__submit {
  margin-top: 3rem;
}
.page-wrapper::after,
.page-wrapper--no-download::after {
  height: 0
}
.work-subtitle {
  color: grey;
  font-size: 14px;
}
</style>
    <div class="index-main">
      <div class="index-main__wrapper">
        
        <!-- Container -->
        <div class="index-main__container">
          
          <div class="index-main-info">
            
            <div class="index-main-info__title">Sign up for WaiveWork</div>
            
            <ul class="index-main-info__list">
              <li class="index-main-info__list-item">Help the environment with our fresh efficient hybrids or electric cars</li>
              <li class="index-main-info__list-item">Take the car home with you</li>
            </ul>
            <a class='work-main-btn' href="/work-info.html"><span class="work-main-btn__title">Explore WaiveWork</span>
          </a>
          </div>
          <div class="index-main-start">
            
            <div class="index-main-start__bg"></div>
            <div class="index-main-start__content">
              <form class="index-main-start-form" id="sign-up-form" action="javascript:void(0);" onsubmit="signup(this)">
                <div class="flex-cols">
                  <div class="index-main-start__title"> Tell us a bit more about yourself</div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-first-name" name="firstName" type="text" placeholder="First Name"
                        data-required="true" aria-label="Enter your first name" aria-required="true" required>
                  </div>
                  
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-last-name" name="lastName" type="text" placeholder="Last Name"
                        data-required="true" aria-label="Enter your last name" aria-required="true" required>
                  </div>
                  
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-email" name="email" type="email" placeholder="Email Address"
                        data-required="true" aria-label="Enter your email" aria-required="true" required>
                  </div>
                  
                  <div class="index-main-start-form__row">
                    
                    <input class="index-main-start-form__input" id="sign-up-location" name="placeName" type="text" placeholder="Location"
                        data-required="true" aria-label="Enter your location" aria-required="true" required>
                  </div>
                  
                  <div class="index-main-start__title"> Best number to contact you? </div>
                    <input class="index-main-start-form__input" id="sign-up-form-phone" name="phone" type="phone" placeholder="310 555 1212"
                        data-required="true" aria-label="310 555 1212" aria-required="true" required>

                  <input type='hidden' name='accountType' value='waivework'>
                  <div class="index-main-start__title"> What is your home address?</div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-address-1" name="address1" type="text" placeholder="Address Line 1"
                        data-required="true" aria-label="Address Line 1" aria-required="true" required>
                  </div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-address-2" name="address2" type="text" placeholder="Address Line 2"
                        data-required="true" aria-label="Address Line 2" aria-required="false">
                  </div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-city" name="city" type="text" placeholder="City"
                        data-required="true" aria-label="City" aria-required="true" required>
                  </div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-state" name="state" type="text" placeholder="State"
                        data-required="true" aria-label="State" aria-required="true" required>
                  </div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-zip" name="zip" type="number" placeholder="Zip Code"
                        data-required="true" aria-label="Zip Code" aria-required="true" required>
                  </div>
                  <div class="index-main-start__title"> What is your license information?</div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-license-number" name="licenseNumber" 
                        type="text" placeholder="License Number"
                        data-required="true" aria-label="License Number" aria-required="true" required>
                  </div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input" id="sign-up-form-license-state" name="licenseState" 
                        type="text" placeholder="License State"
                        data-required="true" aria-label="License State" aria-required="true" required>
                  </div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input licensedate placeholderclass" id="sign-up-form-birth-date" 
                        name="birthDate" type="date" placeholder="Birth Date"
                        data-required="true" aria-label="Birthday" aria-required="true" required
                        onclick="$(this).removeClass('placeholderclass')"
                    >
                  </div>
                  <div class="index-main-start-form__row">
                    <input class="index-main-start-form__input licensedate placeholderclass" id="sign-up-form-expiration" 
                        name="expiration" type="date" placeholder="Expiration"
                        data-required="true" aria-label="expiration" aria-required="true" required
                        onclick="$(this).removeClass('placeholderclass')"
                    >
                  </div>
                  <div class="index-main-start__title"> How many years have you been driving? </div>
                    <input class="index-main-start-form__input" id="sign-up-form-experience" name="experience" type="number" placeholder="3"
                      data-required="true" aria-label="3" aria-required="true">

                  <div class="index-main-start__title"> How much would you be willing to pay per week?<div> 
                  <div class="work-subtitle">We prioritize our long waitlist and guide our offer by this amount.</div>
                    <input class="index-main-start-form__input" id="sign-up-form-offer-per-week" name="offerPerWeek" type="number" placeholder="dollars per day"
                      data-required="true" aria-label="3" aria-required="true">

                  <div class="index-main-start__title"> Will you be driving for rideshare services?</div>
                  <div class="radio-holder">
                    <div>
                      <input type="radio" id="yes" name="rideshare" value="true" checked>
                      <label for="yes">Yes</label>
                    </div>
                    <div>
                      <input type="radio" id="No" name="rideshare" value="false">
                      <label for="no">No</label>
                    </div>
                  </div>
                  <div>
                    We have a fleet of Hyundai Ioniqs which are otherwise identical except some are hybrid and electric.
                    <ol class="work-subtitle">
                      <li>Electric</li>
                        <ul>
                          <li>140 mile range</li>
                          <li>5mi charge/hr slow charger included</li>
                          <li>20 minutes to fast charge to 75% ($.25/minute)</li>
                        </ul>
                      <li>Hybrid</li>
                        <ul>
                          <li>60mpg</li>
                          <li>600 miles/tank</li>
                        </ul>
                    </ol>
                  </div>
                  <div class="index-main-start__title"> Are you interested in using an electric car?</div>
                  <div class="radio-holder">
                    <div>
                      <input type="radio" id="yes" name="wantsElectric" value="true" checked>
                      <label for="yes">Yes</label>
                    </div>
                    <div>
                      <input type="radio" id="No" name="wantsElectric" value="false">
                      <label for="no">No</label>
                    </div>
                  </div>
                </div>
                <button class="index-main-start-form__submit" type="submit">Get started</button>
              </form>
              
              <div class="index-main-start__terms">By clicking “Get Started”, you agree to WaiveCar’s <a href="https://lb.waivecar.com/terms.pdf">Terms&nbsp;&&nbsp;Condition</a> and <a href="https://lb.waivecar.com/privacy">Privacy&nbsp;Policy</a>.
              </div>
            
            </div>
          
          </div>
        
        </div>
      
      </div>
      
    </div>
    
<?  include('footer.php'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQysUfVLDsR8aYHZBQ9epqpGAQ-LZ1bTw&libraries=places&callback=initMap" async defer></script>
