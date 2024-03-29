<? 
$PAGETITLE = 'FAQ';
include('header.php'); 
?>    

    <section class="faq-cover">
      <div class="faq-cover__wrapper">
        
        <div class="faq-cover-info">
          <h1 class="faq-cover-info__title">Got Questions? Awesome, we’re here to help you. Check our FAQ below.</h1>
        </div>
      
      </div>
    </section>
    
    <main class="faq-wrapper">
      <div class="faq-wrapper__container">
        
        <aside class="faq-sidebar">
          
          <button class="faq-sidebar-btn js-active" data-tab="1">
            <svg class="faq-sidebar-btn__icon faq-sidebar-btn__icon--user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 0C4.48 0 0 4.48 0 10s4.48 10 10 10 10-4.48 10-10S15.52 0 10 0zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z"/>
            </svg>
            
            <span class="faq-sidebar-btn__title">Signing Up</span>
          </button>
          
          <button class="faq-sidebar-btn" data-tab="2">
            <svg class="faq-sidebar-btn__icon faq-sidebar-btn__icon--booking" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 16">
              <path fill-rule="evenodd" d="M15.92 1.01C15.72.42 15.16 0 14.5 0h-11c-.66 0-1.21.42-1.42 1.01L0 7v8c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-1h12v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1V7l-2.08-5.99zM3.5 11C2.67 11 2 10.33 2 9.5S2.67 8 3.5 8 5 8.67 5 9.5 4.33 11 3.5 11zm11 0c-.83 0-1.5-.67-1.5-1.5S13.67 8 14.5 8s1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM2 6l1.5-4.5h11L16 6H2z"/>
            </svg>
            
            <span class="faq-sidebar-btn__title">Booking Cars</span>
          </button>
          
          <button class="faq-sidebar-btn" data-tab="3">
            <svg class="faq-sidebar-btn__icon faq-sidebar-btn__icon--driving" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20">
              <g fill="none" fill-rule="evenodd">
                <path class="icon-driving-baloons" d="M5.5 2C2.46 2 0 4.348 0 7.25 0 11.188 5.5 17 5.5 17S11 11.187 11 7.25C11 4.348 8.54 2 5.5 2zm0 7.125c-1.012 0-1.833-.84-1.833-1.875 0-1.035.821-1.875 1.833-1.875s1.833.84 1.833 1.875c0 1.035-.821 1.875-1.833 1.875zM16 0c1.659 0 3 1.252 3 2.8C19 4.9 16 8 16 8s-3-3.1-3-5.2C13 1.252 14.341 0 16 0z"/>
                <path class="icon-driving-line" stroke-linecap="round" stroke-width="2" d="M6 19l.994-.156 4.375-.688c.55-.086.914-.6.815-1.144l-.55-3.024a1.048 1.048 0 0 1 .807-1.205l2.573-.566c.544-.12.986-.66.986-1.216V9.999"/>
              </g>
            </svg>
            
            <span class="faq-sidebar-btn__title">Driving Cars</span>
          </button>
          
          <button class="faq-sidebar-btn" data-tab="4">
            <svg class="faq-sidebar-btn__icon faq-sidebar-btn__icon--ending" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
              <path fill-rule="evenodd" d="M8 10h1.99C11.65 10 13 8.657 13 7c0-1.653-1.347-3-3.01-3H7.004A.99.99 0 0 0 6 4.99v7.013c0 .544.448.997 1 .997.556 0 1-.447 1-.998V10zM2 0h14c1.1 0 2 .85 2 1.889V15.11c0 1.04-.9 1.89-2 1.89H2c-1.1 0-2-.85-2-1.889V1.89C0 .85.9 0 2 0zm6 6h2.001c.552 0 .999.444.999 1 0 .552-.443 1-.999 1H8V6z"/>
            </svg>
            
            <span class="faq-sidebar-btn__title">Ending Your Ride</span>
          </button>
        
        </aside>
        
        <div class="faq-content">
          <div class="faq-content__container js-active" data-tab="1">
            <div class="faq-content-item">
              
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">What is WaiveCar?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <article class="faq-content-item__content">
                <p>WaiveCar is the first ever ad-supported and 100% electric car sharing program. Businesses pay us to display their ads on our
                  roof-mounted screens and body wraps. We use those funds to give you 2 FREE hours of driving for every WaiveCar reservation!</p>
                
                <p>After your 2 free hours are up, our rate is the lowest in the carsharing industry at $5.99 per hour!</p>
              </article>
            
            </div>
            
            <div class="faq-content-item">
              
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">What do I need to sign up?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>All you need to sign up with WaiveCar is a smart phone, credit card, a valid driver's license, and a good driving record.
                  Simply download the app from your app store!</p>
              </article>
            
            </div>
            
            <!-- Item -->
            <div class="faq-content-item">
              
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">What's a good driving record?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>To us, a good driving record means one without any:</p>
                
                <ul>
                  <li>DUIs</li>
                  <li>Moving violations</li>
                  <li>Driving with a suspended license</li>
                  <li>Any similar negligent or reckless acts</li>
                </ul>
              </article>
            
            </div>
            
            <!-- Item -->
            <div class="faq-content-item">
              
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Does it cost any money to sign up?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Nope. We promise there’s REALLY no catch.</p>
              </article>
            
            </div>
            
            <div class="faq-content-item">
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Why do I need a credit card to sign up if it's free?</span>
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>We charge a temporary $20 hold on your card when you book a car. It will be refunded as soon as your ride is over, and exists
                  just to make sure there are available funds in case you choose to keep driving past two hours.</p>
              </article>
            
            </div>
            
            <div class="faq-content-item">
              
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How old do I need to be to use WaiveCar?</span>
                <span class="faq-content-item__icon"></span>
              </button>
              
              <article class="faq-content-item__content">
                <p>You need to be 21 years old.</p>
              </article>
            
            </div>
            
            <div class="faq-content-item">
              
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Can I use my iPad/tablet to use WaiveCar?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>No. Unfortunately we require a smartphone so that a phone number can be attached to the account as well as GPS services.</p>
              </article>
            
            </div>
            
            <!-- Item -->
            <div class="faq-content-item">
              
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Is insurance included?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Insurance with a $1,000 deductible is included with your signup! The information is in the glove box.</p>
              </article>
            
            </div>
            
            <!-- Item -->
            <div class="faq-content-item">
              
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Can I use an out of state drivers license to use WaiveCar?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Yes! However, if you have a Pennsylvania license, please email us at support@waive.car as Pennsylvania requires a separate
                  background check form to be filled out.</p>
              </article>
            
            </div>
            
            <!-- Item -->
            <div class="faq-content-item">
              
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Can I use an out of country drivers license?</span>
                
                <span class="faq-content-item__icon"></span>
              </button>
              
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Also yes. However, you will need to contact your DMV and obtain a driving record. Once received, please email it to us at
                  <a href="mailto:support@waive.car">support@waive.car</a></p>
              </article>
            
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Can I use a temporary drivers license?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Unfortunately, you will need a permanent drivers license to use WaiveCar.</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How long does the signup take?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>It's surprisingly quick. It should only take about 10 minutes for the signup and the background check to complete. If your
                  waiting time extends longer than an hour, please give us a call at <a href="tel:855WAIVE55">855-WAIVE55</a></p>
              </article>
  
            </div>
          
          </div>
  
          <!-- Booking Cars -->
          <div class="faq-content__container" data-tab="2">
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">What are Waive's hours?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Our cars are available 24/7. However, Waive HQ is open from 9am-10pm and our customer service line is open from 9am-12am. If
                  you need assistance at other hours, simply send us an email at <a href="mailto:support@waive.car">support@waive.car</a> and we’ll
                  reach out to you ASAP!</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How do I book a WaiveCar?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Open the app and find the closest available WaiveCar in your location.  Hit "Book it"! You then have 15 minutes to get to the
                  car before your reservation times out.</p>
              </article>
    
            </div>
    
            <div class="faq-content-item">
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Where can I get a WaiveCar?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Right now our cars are only dispersed around Santa Monica, CA. In the near future, you will be able to pick them up anywhere in
                  LA and other major cities!</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How long do I have to get to a WaiveCar?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>You have 15 minutes to get to your WaiveCar before the reservation times out.<br>Once you get there, please make sure you start
                  driving.  We may have to forfeit your booking if the WaiveCar isn't being used. But don't worry, we send out a message beforehand
                  and you'll have plenty of time to contact us if we've made a mistake.</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Can I reserve a car in advance?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Unlike a rental company, you cannot reserve a car in advance. Waive believes in the convenience of giving you a free car at a
                  moment's notice.  Get them while they’re hot!</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Can I book multiple cars a day?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Yep! And even better, you’ll get the free 2 hours for every ride.</p>
              </article>
    
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Does the free 2 hours start when I reserve a car or when I start the ride?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>When you start the ride! Enjoy your leisurely walk.</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Is the free 2 hours only when I'm driving the car?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Nope! The clock keeps ticking whether you’re driving or parked.</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">What happens if I don't make it to the car in 15 minutes?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Your reservation will expire. So hurry up and rebook  before it’s gone! As you can see, we’re a pretty hot commodity.</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How many WaiveCars are there?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>We have over 100 on LA's west side!</p>
              </article>
  
            </div>
  
          </div>
  
          <!-- Driving Cars -->
          <div class="faq-content__container" data-tab="3">
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How far can I drive with a WaiveCar?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>You can drive up to 20 miles outside our HQ in Santa Monica, which includes most of LA. You will get a text message alert when
                  you have passed the boundaries.</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Where are the keys?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>You don't need keys to start the car, however if you need to lock the car during your rental, the keys are on a sensor in the
                  glovebox. Just make sure you replace them when you're done!</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">I've never driven an electric car. How many miles per charge do I get?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Our Chevy Spark EVs have 80 miles per charge.</p>
              </article>
    
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">What should I do if I'm running low on charge?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Check the app for the closest fast charger, or download the app "Plugshare".  If you’re having trouble, call <a
                    href="tel:855WAIVE55">855-WAIVE55</a> and we’ll direct you to the nearest one!</p>
              </article>
  
            </div>
            
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Do you guys cover the charging station costs?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>We don't compensate for recharging at third party stations. However, if you drop your WaiveCar off at HQ- we’ll gladly charge
                  it for FREE! Plus, we’ll switch you out for a higher charged car if one is available.</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How much does it usually cost to charge an electric car?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Fast chargers typically cost around $10 and take about 15 minutes. Level 2 chargers take approximately 6 hours to fully charge,
                  but can be free depending on the station! Just call us if there's any confusion.</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Is it true I can drive in the carpool lane on the highway?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Yep, you heard correctly!</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Can someone else drive using my account?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>This one's a big N.O. The ONLY person allowed to drive a WaiveCar is the one who has booked the car!</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">What happens if there's a parking ticket?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>If you get a ticket, you have 10 days to pay it. If you don't pay it within that time, we will charge your account for the
                  amount due. If you see a ticket from a previous user, simply put it in the glove box.</p>
              </article>
  
            </div>
  
          </div>
  
          <!-- Ending Your Ride -->
          <div class="faq-content__container" data-tab="4">
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Where can I park when I'm done?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>If the battery is over 25% charged (20 miles), you can park at any 3 hour public parking spot in Santa Monica without paying the
                  meter. If the battery is under 25% charged (20 miles) you MUST return it to headquarters (2102 Pico Blvd).</p>
                <p>However after midnight, parking must be valid until 10:00 AM that morning.</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Where can I NOT park?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Private parking spaces, parking garages, permit-only spots, any business parking lot, or anywhere not in Santa Monica! Make sure
                  to check street signs to confirm there’s no parking restrictions on the spot for 3 hours.</p>
                
                <p>Restricted parking includes:</p>
  
                <ul>
                  <li>Street parking restricted by signs such as during street sweeping hours.</li>
                  <li>Private lots (Whole Foods, Ralphs, etc.)</li>
                  <li>Private driveways & Permit-only zones</li>
                  <li>Indoor public lots with less than 3 hours of free parking</li>
                  <li>Upside down and engulfed in flames ( but seriously).</li>
                </ul>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Is it true I don't have to pay any parking meter in Santa Monica?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>In Santa Monica, electric cars park free! Sweet, right?</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">How do I end my ride?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>First make sure that you are parked in a valid spot (see above). Turn off the car, put the key back on the glovebox sensor, grab
                  your belongings, and exit the car. Select "End Ride" from the app and input the appropriate information.  If you haven't received
                  a confirmation text, please call us at <a href="tel:855WAIVE55">855-WAIVE55</a>!</p>
              </article>
    
            </div>
    
            <!-- Item -->
            <div class="faq-content-item">
      
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Do I need to clean the car when I'm done?</span>
        
                <span class="faq-content-item__icon"></span>
              </button>
      
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Yes! No need for an extensive cleaning, but make sure all your belongings and  trash are removed from the car.  If you leave a
                  mess, there could be a cleaning fee!</p>
              </article>
    
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Do I need to charge the car before I end my ride?</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>Nope! Follow the rules above. If the car is under 25% charged (20 miles), simply return it at  HQ!</p>
              </article>
  
            </div>
  
            <!-- Item -->
            <div class="faq-content-item">
    
              <!-- Question (Header) -->
              <button class="faq-content-item__header">
                <span class="faq-content-item__question">Fees</span>
      
                <span class="faq-content-item__icon"></span>
              </button>
    
              <!-- Answer (Content) -->
              <article class="faq-content-item__content">
                <p>There are some modest fees in order to keep our fleet bright and shiny.</p>
                
                <ul>
                  <li>Ending with under 20% charge and not brought back to Waive's lot $20</li>
                  <li>Dead Battery / Lights Left On $100</li>
                  <li>Missing Key (Failure to return equipment) $300</li>
                  <li>Parking Violation (any violation of our parking rules) $40</li>
                  <li>Special Cleaning - varies-</li>
                  <li>Smoking $200</li>
                  <li>Pet not in carrier/odor $50</li>
                  <li>Damage to the interior -varies-</li>
                  <li>Vehicle Recovery (if left outside Santa Monica) $300 minimum</li>
                  <li>Declined Credit Card Charges + $5 penalty fee</li>
                  <li>Excess Time (non Waive time) $1 for every 10 mins. ($5.99/hour)</li>
                </ul>
  
                <p>There's a few unfortunate events that can happen where we have pass the costs on to you:</p>
  
                <ul>
                  <li>Public Garage Parking Fee: Cost to remove vehicle from garage + $40 parking violation</li>
                  <li>Vehicle Recovery (inside Santa Monica): Miscellaneous Recovery Costs</li>
                  <li>Parking Ticket: ticket price + $20.00 Handling fee (unless user pays themselves)</li>
                  <li>Impounded Vehicle: Cost of impound fee + $100 recovery</li>
                </ul>
  
                <p>If the car is physically damaged during the rental ( in an accident or other circumstances), we will hold your $1,000 deposit, and
                  will return it to you if the insurance determines you are not at fault.</p>

              </article>
  
            </div>
  
          </div>
          
        </div>
      
      </div>
    </main>
  
  </div>

<?  include('footer.php'); ?>
