<? 
$PAGETITLE = 'Welcome';
include('lib.php');
include('header.php'); 
?>    
    
<style>
.index-main-start__title {
  margin-bottom: 0;
  margin-top: 3rem;
}
</style>
    <!-- ==========================
      MAIN
    =========================== -->
    <div class="index-main">
      <div class="index-main__wrapper">
        
        <!-- Container -->
        <div class="index-main__container">
          
          <!-- Information -->
          <div class="index-main-info">
            
            <!-- Title -->
            <div class="index-main-info__title">Sign up for WaiveWork</div>
            
            <!-- Benefits -->
            <ul class="index-main-info__list">
              <li class="index-main-info__list-item">Enjoy a free car for work</li>
              <li class="index-main-info__list-item">Help the environment with our fresh efficient hybrids</li>
              <li class="index-main-info__list-item">Take the car home with you</li>
            </ul>
          
          </div>
          
          <!-- Get started -->
          <div class="index-main-start">
            
            <!-- Background -->
            <div class="index-main-start__bg"></div>
            
            <!-- Content -->
            <div class="index-main-start__content">
              
              
              <!-- Form -->
              <form class="index-main-start-form" id="sign-up-form" action="javascript:void(0);" onsubmit="signup(this)">
                <div class="index-main-start__title"> Tell us a bit more about yourself</div>
                <!-- First Name -->
                <div class="index-main-start-form__row">
                  <input class="index-main-start-form__input" id="sign-up-form-first-name" name="firstName" type="text" placeholder="First Name"
                      data-required="true" aria-label="Enter your first name" aria-required="true">
                </div>
                
                <!-- Last Name -->
                <div class="index-main-start-form__row">
                  <input class="index-main-start-form__input" id="sign-up-form-last-name" name="lastName" type="text" placeholder="Last Name"
                      data-required="true" aria-label="Enter your last name" aria-required="true">
                </div>
                
                <!-- Email Address -->
                <div class="index-main-start-form__row">
                  <input class="index-main-start-form__input" id="sign-up-form-email" name="email" type="email" placeholder="Email Address"
                      data-required="true" aria-label="Enter your email" aria-required="true">
                </div>
                
                <!-- Location -->
                <div class="index-main-start-form__row">
                  
                  <input class="index-main-start-form__input" id="sign-up-location" name="placeName" type="text" placeholder="Location"
                      data-required="true" aria-label="Enter your location" aria-required="true">
                </div>
                
                <div class="index-main-start__title"> How many hours a week do you drive for work? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-hours" name="hours" type="hours" placeholder="30"
                      data-required="true" aria-label="30" aria-required="true">

                <div class="index-main-start__title"> How many days a week do you work? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-days" name="days" type="days" placeholder="4"
                      data-required="true" aria-label="4" aria-required="true">

                <div class="index-main-start__title"> Best number to contact you? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-phone" name="phone" type="phone" placeholder="310 555 1212"
                      data-required="true" aria-label="310 555 1212" aria-required="true">

                <div class="index-main-start__title"> How many years have you been driving? </div>
                  <input class="index-main-start-form__input" id="sign-up-form-year" name="year" type="year" placeholder="3" data-required="true" aria-label="3" aria-required="true">

                <!-- Submit -->
                <button class="index-main-start-form__submit" type="submit">Get started</button>
              
              </form>
              
              <!-- Terms -->
              <div class="index-main-start__terms">By clicking “Get Started”, you agree to WaiveCar’s <a href="https://www.waivecar.com/terms.pdf">Terms&nbsp;&&nbsp;Condition</a> and <a href="https://www.waivecar.com/privacy">Privacy&nbsp;Policy</a>.
              </div>
            
            </div>
          
          </div>
        
        </div>
      
      </div>
      
    </div>
  
    
<?  include('footer.php'); ?>
