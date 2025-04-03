<?php get_header();?>


  <!-- Page Header -->
  <section class="pt-32 pb-16 bg-logistics-light">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto text-center">
        <div class="fade-in">
          <span class="inline-block bg-logistics-blue/10 text-logistics-blue px-4 py-1 rounded-full text-sm font-medium mb-4">
            About Our Company
          </span>
        </div>
        <div class="fade-in fade-in-delay-1">
          <h1 class="text-4xl md:text-5xl font-bold text-logistics-dark mb-6">
            Learn More About Apdoson Logistics
          </h1>
        </div>
        <div class="fade-in fade-in-delay-2">
          <p class="text-lg text-gray-600">
            We provide comprehensive logistics solutions across the Philippines, backed by years of industry expertise and a commitment to excellence.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Story Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="fade-in">
          <span class="inline-block bg-logistics-blue/10 text-logistics-blue px-4 py-1 rounded-full text-sm font-medium mb-4">
            Our Story
          </span>
          <h2 class="text-3xl font-bold text-logistics-dark mb-6">
            Delivering Excellence Since 2021
          </h2>
          <p class="text-gray-600 mb-6">
            Apdoson Logistics Philippines branch was founded in 2021 with a mission to transform the Philippines' logistics industry. What began as a small operation with just three trucks and a passionate team of five has grown into one of the country's most trusted logistics providers.
          </p>
          <p class="text-gray-600 mb-6">
            Our journey has been marked by continuous innovation, strategic expansion, and an unwavering commitment to customer satisfaction. We've navigated through challenges, embraced new technologies, and consistently raised industry standards.
          </p>
          <!-- <p class="text-gray-600">
            Today, APDOSon Logistics operates a modern fleet of over 150 vehicles, employs more than 300 dedicated professionals, and serves thousands of businesses across the Philippine archipelago.
          </p> -->
        </div>
        <div class="fade-in fade-in-delay-2 order-first lg:order-last">
          <div class="relative">
            <img 
              src="<?= get_template_directory_uri().'/images/';?>ourstory.png" 
              alt="APDOSon Logistics History" 
              class="w-full h-auto rounded-2xl shadow-xl"
            />
            <div class="absolute -bottom-5 -right-5 -z-10 w-full h-full bg-logistics-blue/10 rounded-full blur-3xl"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Vision Section -->
  <section class="py-20 bg-logistics-light">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div class="fade-in">
          <h3 class="text-2xl font-bold text-logistics-dark mb-4">Our Mission</h3>
          <p class="text-gray-600">
            To provide reliable, efficient, and innovative logistics solutions that exceed customer expectations and contribute to the growth of the Philippine economy.
          </p>
        </div>
        <div class="fade-in fade-in-delay-1">
          <h3 class="text-2xl font-bold text-logistics-dark mb-4">Our Vision</h3>
          <p class="text-gray-600">
            To be the leading logistics provider in the Philippines, recognized for our commitment to excellence, sustainability, and customer satisfaction.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Leadership Team Section -->
  <?php /*
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <div class="fade-in">
          <span class="inline-block bg-logistics-blue/10 text-logistics-blue px-4 py-1 rounded-full text-sm font-medium mb-4">
            Leadership
          </span>
        </div>
        <div class="fade-in fade-in-delay-1">
          <h2 class="text-3xl font-bold text-logistics-dark mb-4">
            Meet Our Leadership Team
          </h2>
        </div>
        <div class="fade-in fade-in-delay-2">
          <p class="text-lg text-gray-600">
            Our company is led by a team of experienced professionals with a passion for logistics and a commitment to excellence.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Team Member 1 -->
        <div class="fade-in fade-in-delay-3">
          <div class="bg-logistics-light rounded-2xl p-6 text-center">
            <img 
              src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" 
              alt="Team Member 3" 
              class="w-32 h-32 rounded-full mx-auto mb-4" 
            />
            <h4 class="text-xl font-semibold text-logistics-dark mb-2">Rizalyn Esperanza</h4>
            <p class="text-gray-600 mb-3">Chief Executive Officer</p>
            <div class="flex justify-center space-x-4">
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2a6 6 0 016 6v8a6 6 0 01-6 6H8a6 6 0 01-6-6V8a6 6 0 016-6h4m5 9a5 5 0 11-5-5 5 5 0 015 5z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="fade-in fade-in-delay-4">
          <div class="bg-logistics-light rounded-2xl p-6 text-center">
            <img 
              src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" 
              alt="Team Member 3" 
              class="w-32 h-32 rounded-full mx-auto mb-4" 
            />
            <h4 class="text-xl font-semibold text-logistics-dark mb-2">Rizalyn Esperanza</h4>
            <p class="text-gray-600 mb-3">Chief Operating Officer</p>
            <div class="flex justify-center space-x-4">
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2a6 6 0 016 6v8a6 6 0 01-6 6H8a6 6 0 01-6-6V8a6 6 0 016-6h4m5 9a5 5 0 11-5-5 5 5 0 015 5z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Team Member 3 -->
        
        <div class="fade-in fade-in-delay-5">
          <div class="bg-logistics-light rounded-2xl p-6 text-center">
            <img 
              src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" 
              alt="Team Member 3" 
              class="w-32 h-32 rounded-full mx-auto mb-4" 
            />
            <h4 class="text-xl font-semibold text-logistics-dark mb-2">Rizalyn Esperanza</h4>
            <p class="text-gray-600 mb-3">Chief Technology Officer</p>
            <div class="flex justify-center space-x-4">
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a href="#" class="text-logistics-blue hover:text-logistics-blue/80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2a6 6 0 016 6v8a6 6 0 01-6 6H8a6 6 0 01-6-6V8a6 6 0 016-6h4m5 9a5 5 0 11-5-5 5 5 0 015 5z"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
         */ ?>
      </div>
    </div>
  </section>


<?php get_footer();?>