<? 
$PAGETITLE = 'About us';
include('header.php'); 
?>    
    
    <section class="about-article">
      <article class="about-article__wrapper">
        
        <!-- Textual -->
        <div class="about-article__info">
          
          <h1 class="about-article__title">About Us</h1>
          
          <div class="about-article__desc">
            <p>We believe there are smarter ways for communities to benefit from cars. Our contribution is WaiveCar, a revolutionary transportation
              system that connects users with ad-displaying electric cars for free, anywhere in their city. Together, drivers and companies can make a
              positive impact on the environment.</p>
            
            <p>WaiveCar is a car sharing startup currently operating in the Los Angeles area. Our electric fleet is completely free to drive for the
              first 2 hours.</p>
          </div>
        
        </div>
        
        <div class="about-article__thumb">
          <img class="about-article__img" src="pic/about-article-img.svg" alt="About WaiveCar">
        </div>
      
      </article>
    </section>
    
    
    <section class="about-map">
      
      <div class="about-map__container" id="map"></div>
  
      <div class="about-map__wrapper">
    
        <!-- Get in Touch -->
        <div class="about-map-contacts">
      
          <!-- Title -->
          <h2 class="about-map-contacts__title">Get in Touch</h2>
      
          <!-- Description -->
          <p class="about-map-contacts__desc">Got questions? Don’t hesitate to reach out!</p>
      
          <!-- Container -->
          <address class="about-map-contacts__container">
        
            <!-- Address -->
            <div class="about-map-contacts-item">
          
              <!-- Icon -->
              <div class="about-map-contacts-item__thumb">
                <svg class="about-map-contacts-item__icon about-map-contacts-item__icon--marker">
                  <use xlink:href="#icon-map-marker"></use>
                </svg>
              </div>
          
              <div class="about-map-contacts-item__info">
            
                <div class="about-map-contacts-item__title">Address</div>
            
                <div class="about-map-contacts-item__link">2102 Pico Blvd, Santa Monica, CA 90401</div>
          
              </div>
        
            </div>
        
            <div class="about-map-contacts-item">
          
              <!-- Icon -->
              <div class="about-map-contacts-item__thumb">
                <svg class="about-map-contacts-item__icon about-map-contacts-item__icon--phone">
                  <use xlink:href="#icon-phone"></use>
                </svg>
              </div>
          
              <!-- Information -->
              <div class="about-map-contacts-item__info">
            
                <!-- Title -->
                <div class="about-map-contacts-item__title">Phone</div>
            
                <!-- Data -->
                <div class="about-map-contacts-item__link">
                  <a href="tel:+18559248355">+1 855-924-8355</a>
                </div>
          
              </div>
        
            </div>
        
            <!-- Email -->
            <div class="about-map-contacts-item">
          
              <!-- Icon -->
              <div class="about-map-contacts-item__thumb">
                <svg class="about-map-contacts-item__icon about-map-contacts-item__icon--email">
                  <use xlink:href="#icon-email"></use>
                </svg>
              </div>
          
              <div class="about-map-contacts-item__info">
            
                <!-- Title -->
                <div class="about-map-contacts-item__title">Email</div>
            
                <!-- Data -->
                <div class="about-map-contacts-item__link">
                  <a href="mailto:info@waivecar.com">info@waivecar.com</a>
                </div>
          
              </div>
        
            </div>
      
          </address>
    
        </div>
  
      </div>
      
    </section>
  
  </div>
  
<?  include('footer.php'); ?>
