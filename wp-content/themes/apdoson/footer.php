  <!-- Footer -->
  <footer class="bg-white border-t border-gray-100">
    <div class="container mx-auto px-4">
      <!-- Main Footer -->
      <div class="py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
        <!-- Company Info -->
        <div>
          <div class="space-y-6">
            <a href="/" class="inline-block">
              <img 
                src="<?= get_template_directory_uri().'/images/';?>logo.png" 
                alt="Apdoson Logistics Logo" 
                class="h-12" 
              />
            </a>
            <p class="text-gray-600">
              Your trusted logistics partner in the Philippines, delivering reliable and efficient solutions for businesses of all sizes.
            </p>
            <div class="flex space-x-4">
              <a 
                href="https://www.facebook.com/ApdosonPH/" 
                target="_blank" 
                rel="noopener noreferrer"
                class="bg-logistics-blue/10 p-2 rounded-full text-logistics-blue hover:bg-logistics-blue hover:text-white transition-colors"
                aria-label="Facebook"
              >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                </svg>
              </a>
              <a 
                href="https://www.youtube.com/channel/UCaKnK-p-72ZXgnwCY9fJdrg/featured" 
                target="_blank" 
                rel="noopener noreferrer"
                class="bg-logistics-blue/10 p-2 rounded-full text-logistics-blue hover:bg-logistics-blue hover:text-white transition-colors"
                aria-label="Youtube"
              >
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-youtube-icon lucide-youtube"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
              </a>
              <a 
                href="https://www.instagram.com/apdosonphilippines/" 
                target="_blank" 
                rel="noopener noreferrer"
                class="bg-logistics-blue/10 p-2 rounded-full text-logistics-blue hover:bg-logistics-blue hover:text-white transition-colors"
                aria-label="Instagram"
              >
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a6 6 0 016 6v8a6 6 0 01-6 6H8a6 6 0 01-6-6V8a6 6 0 016-6h4m5 9a5 5 0 11-5-5 5 5 0 015 5z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Quick Links -->
        <div>
          <div>
            <h3 class="text-lg font-semibold text-logistics-dark mb-6">
              Quick Links
            </h3>
            <ul class="space-y-4">
            <?php 
            $items = wp_get_nav_menu_items('primary');
            if ($items): ?>
                <?php foreach ($items as $item): ?>
                  <li>
                    <a href="<?= $item->url;?>" class="text-gray-600 hover:text-logistics-blue transition-colors relative group inline-block">
                     <?= $item->title; ?>
                      <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-logistics-blue group-hover:w-full transition-all duration-300"></span>
                    </a>
                  </li>
                <?php endforeach; ?>
            <?php endif; ?>
              
              <li>
                <a href="/contact" class="text-gray-600 hover:text-logistics-blue transition-colors relative group inline-block">
                  Get a Quote
                  <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-logistics-blue group-hover:w-full transition-all duration-300"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Services -->
        <div>
          <div>
            <h3 class="text-lg font-semibold text-logistics-dark mb-6">
              Our Services
            </h3>
            <ul class="space-y-4">
              <li>
                <a href="/services" class="text-gray-600 hover:text-logistics-blue transition-colors relative group inline-block">
                  Land Transportation
                  <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-logistics-blue group-hover:w-full transition-all duration-300"></span>
                </a>
              </li>
              <li>
                <a href="/services" class="text-gray-600 hover:text-logistics-blue transition-colors relative group inline-block">
                  Sea Freight
                  <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-logistics-blue group-hover:w-full transition-all duration-300"></span>
                </a>
              </li>
              <li>
                <a href="/services" class="text-gray-600 hover:text-logistics-blue transition-colors relative group inline-block">
                  Air Freight
                  <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-logistics-blue group-hover:w-full transition-all duration-300"></span>
                </a>
              </li>
              <li>
                <a href="/services" class="text-gray-600 hover:text-logistics-blue transition-colors relative group inline-block">
                  Customs Brokerage
                  <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-logistics-blue group-hover:w-full transition-all duration-300"></span>
                </a>
              </li>
              <li>
                <a href="/services" class="text-gray-600 hover:text-logistics-blue transition-colors relative group inline-block">
                  Hauling
                  <span class="absolute left-0 bottom-0 w-0 h-0.5 bg-logistics-blue group-hover:w-full transition-all duration-300"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <!-- Contact Info -->
        <div>
          <div>
            <h3 class="text-lg font-semibold text-logistics-dark mb-6">
              Contact Info
            </h3>
            <ul class="space-y-4">
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-5 text-logistics-blue mt-0.5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="text-gray-600">7306 Escudo Lane St Villanueva Village, Brgy San Dionisio Sucat Parañaque City, Philippines</span>
              </li>
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-logistics-blue mt-0.5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="text-gray-600">(02) 8525-5779</span>
              </li>
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-logistics-blue mt-0.5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <a href="mailto:contact@apdosonlogistics.com.ph" class="text-gray-600 mb-2 hover:text-logistics-blue">contact@apdosonlogistics.com.ph</span>
              </li>
              <li class="flex items-start">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-logistics-blue mt-0.5 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-gray-600">Mon - Fri: 8:00 AM - 5:00 PM<br>Sat: 8:00 AM - 5:00 PM</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <!-- Bottom Footer -->
      <div class="py-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center">
        <p class="text-gray-600 text-sm mb-4 md:mb-0">
          © 2023 Apdoson Logistics. All rights reserved.
        </p>
        <div class="flex space-x-6">
          <a href="#" class="text-gray-500 hover:text-logistics-blue text-sm transition-colors">Privacy Policy</a>
          <a href="#" class="text-gray-500 hover:text-logistics-blue text-sm transition-colors">Terms of Service</a>
          <!-- <a href="#" class="text-gray-500 hover:text-logistics-blue text-sm transition-colors">Cookie Policy</a> -->
        </div>
      </div>
    </div>
  </footer>
<?php wp_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
      // Mobile menu toggle
      const mobileMenuButton = document.getElementById('mobile-menu-button');
      const mobileMenu = document.getElementById('mobile-menu');
      
      if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
          mobileMenu.classList.toggle('hidden');
        });
      }
      
      // Intersection Observer for animations
      const fadeElements = document.querySelectorAll('.fade-element');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
          }
        });
      }, { threshold: 0.1 });
      
      fadeElements.forEach(element => {
        observer.observe(element);
      });
    });
  </script>


</body>
</html>