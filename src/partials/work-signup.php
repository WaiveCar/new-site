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
</style>
    <div class="index-main">
      <div class="index-main__wrapper">
        
        <!-- Container -->
        <div class="index-main__container">
          
          <div class="index-main-info">
            
            <div class="index-main-info__title">Sign up for WaiveWork</div>
            
            <ul class="index-main-info__list">
              <li class="index-main-info__list-item">Enjoy a free car for work</li>
              <li class="index-main-info__list-item">Help the environment with our fresh efficient hybrids</li>
              <li class="index-main-info__list-item">Take the car home with you</li>
            </ul>
          
          </div>
          
          <div class="index-main-start">
            
            <div class="index-main-start__bg"></div>
            <div class="index-main-start__content">
              
              <form class="index-main-start-form" id="sign-up-form" action="javascript:void(0);" onsubmit="signup(this)">
                <div class="index-main-start__title"> Tell us a bit more about yourself</div>
                <div class="index-main-start-form__row">
                  <input class="index-main-start-form__input" id="sign-up-form-first-name" name="firstName" type="text" placeholder="First Name"
                      data-required="true" aria-label="Enter your first name" aria-required="true">
                </div>
                
                <div class="index-main-start-form__row">
                  <input class="index-main-start-form__input" id="sign-up-form-last-name" name="lastName" type="text" placeholder="Last Name"
                      data-required="true" aria-label="Enter your last name" aria-required="true">
                </div>
                
                <div class="index-main-start-form__row">
                  <input class="index-main-start-form__input" id="sign-up-form-email" name="email" type="email" placeholder="Email Address"
                      data-required="true" aria-label="Enter your email" aria-required="true">
                </div>
                
                <div class="index-main-start-form__row">
                  
                  <input class="index-main-start-form__input" id="sign-up-location" name="placeName" type="text" placeholder="Location"
                      data-required="true" aria-label="Enter your location" aria-required="true">
                </div>
                
                <div class="index-main-start__title"> How many hours a week do you drive for work? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-hours" name="hours" type="number" placeholder="30"
                      data-required="true" aria-label="30" aria-required="true">

                <div class="index-main-start__title"> How many days a week do you work? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-days" name="days" type="number" placeholder="4"
                      data-required="true" aria-label="4" aria-required="true">

                <div class="index-main-start__title"> How many years have you been driving? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-experience" name="experience" type="number" placeholder="3" 
                    data-required="true" aria-label="3" aria-required="true">

                <div class="index-main-start__title"> Best number to contact you? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-phone" name="phone" type="phone" placeholder="310 555 1212"
                      data-required="true" aria-label="310 555 1212" aria-required="true">

                <div class="index-main-start__title"> Address Line 1</div>
                  <input class="index-main-start-form__input" id="sign-up-form-address-1" name="address-1" type="text" placeholder="2102 Pico Blvd"
                      data-required="true" aria-label="2102 Pico Blvd" aria-required="true">

                <div class="index-main-start__title"> Address Line 2</div>
                  <input class="index-main-start-form__input" id="sign-up-form-address-2" name="address-2" type="text" placeholder="Unit 1"
                      data-required="true" aria-label="Unit 1" aria-required="false">

                <div class="index-main-start__title"> City</div>
                  <input class="index-main-start-form__input" id="sign-up-form-city" name="city" type="text" placeholder="Los Angeles"
                      data-required="true" aria-label="Los Angeles" aria-required="true">

                <div class="index-main-start__title"> State</div>
                  <input class="index-main-start-form__input" id="sign-up-form-state" name="state" type="text" placeholder="California"
                      data-required="true" aria-label="California" aria-required="true">

                <div class="index-main-start__title"> Zip Code</div>
                  <input class="index-main-start-form__input" id="sign-up-form-zip" name="zip" type="number" placeholder="90401"
                      data-required="true" aria-label="90401" aria-required="true">
    

                <input type='hidden' name='accountType' value='waivework'>
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
