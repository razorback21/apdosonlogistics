<?php get_header();?>


  <!-- Hero Section -->
  <section class="relative h-screen">
    <div class="absolute inset-0 z-0">
      <div class="absolute inset-0 bg-gradient-to-b from-black/50 to-transparent z-10"></div>
      <div class="w-full h-full bg-cover bg-center" style="background-image: url('<?= get_post_meta(get_the_ID, 'apdoson_hero_apdoson_hero_image_title', true); ?>'); transform: scale(1.1);"></div>
    </div>
    
    <div class="relative container h-full mx-auto px-4 z-20 flex flex-col justify-center items-start">
      <div class="max-w-3xl space-y-8">
        <span class="inline-block bg-logistics-red/90 backdrop-blur-sm text-white px-4 py-1 rounded-full text-sm font-medium fade-element">
          Reliable Logistics Solutions
        </span>
        
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white leading-tight fade-element fade-delay-100">
          <?= get_post_meta(get_the_ID, 'apdoson_hero_title', true); ?>
        </h1>
        
        <p class="text-lg sm:text-xl text-white/90 leading-relaxed fade-element fade-delay-200">
          <?= get_post_meta(get_the_ID, 'apdoson_hero_subdescription', true); ?>. <!--and beyond. -->
        </p>
        
        <div class="flex flex-wrap gap-4 pt-2 fade-element fade-delay-300">
          <a href="/services" class="inline-flex items-center justify-center font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-logistics-blue hover:bg-logistics-blue/90 text-white focus:ring-logistics-blue/20 px-6 py-3 rounded-full">
            Explore Services
          </a>
          <a href="/contact" class="inline-flex items-center justify-center font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-white/10 backdrop-blur-sm border border-white text-white hover:bg-white/20 focus:ring-white/20 px-6 py-3 rounded-full">
            Get a Quote
          </a>
        </div>
      </div>
    </div>
    
    <!-- Scroll indicator -->
    <!-- <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
      <div class="w-1 h-16 relative">
        <span class="absolute top-0 left-0 w-0.5 h-8 bg-white rounded-full opacity-80"></span>
        <span class="absolute bottom-0 left-0 w-0.5 h-8 bg-white/0 to-white/80 bg-gradient-to-t rounded-full"></span>
      </div>
    </div> -->
  </section>

  <!-- About Section -->
  <section class="py-24 px-4 bg-white">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <div class="relative order-2 lg:order-1">
          <div class="relative z-10 fade-element">
            <img
              src="<?= get_template_directory_uri().'/images/';?>hero2.png"
              alt="Apdoson Logistics facilities"
              class="rounded-2xl shadow-lg object-cover w-full h-[500px]"
            />
          </div>
          <div class="absolute bottom-8 right-8 z-20 fade-element fade-delay-300">
            <div class="bg-white rounded-2xl shadow-lg p-6">
              <div class="text-5xl font-bold text-logistics-blue mb-2">5+</div>
              <div class="text-gray-600">Years of Excellence</div>
            </div>
          </div>
          <div class="absolute -bottom-5 -right-5 -z-10 w-64 h-64 bg-logistics-blue/10 rounded-full blur-3xl"></div>
          <div class="absolute -top-5 -left-5 -z-10 w-64 h-64 bg-logistics-red/10 rounded-full blur-3xl"></div>
        </div>
        
        <div class="order-1 lg:order-2">
          <span class="inline-block bg-logistics-blue/10 text-logistics-blue px-4 py-1 rounded-full text-sm font-medium mb-4 fade-element">
            About Us
          </span>
          <h2 class="text-3xl md:text-4xl font-bold text-logistics-dark mb-6 fade-element fade-delay-100">
            Your Trusted Logistics Partner in the Philippines
          </h2>
          <p class="text-lg text-gray-600 mb-8 fade-element fade-delay-200">
            Apdoson Logistics has been providing exceptional transportation and logistics 
            services across the Philippines for five years. We combine industry expertise 
            with innovative technology to deliver reliable, efficient, and cost-effective 
            logistics solutions tailored to your specific needs.
          </p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-4 mb-10">
            <div class="flex items-start space-x-3 fade-element fade-delay-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-logistics-blue flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-gray-700">5+ years of industry expertise</span>
            </div>
            <div class="flex items-start space-x-3 fade-element fade-delay-400">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-logistics-blue flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-gray-700">Nationwide coverage across the Philippines</span>
            </div>
            <div class="flex items-start space-x-3 fade-element fade-delay-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-logistics-blue flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-gray-700">Modern fleet and state-of-the-art tracking</span>
            </div>
            <div class="flex items-start space-x-3 fade-element fade-delay-600">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-logistics-blue flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <span class="text-gray-700">Customized logistics solutions</span>
            </div>
          </div>
          
          <div class="fade-element fade-delay-700">
            <a href="/about" class="inline-flex items-center justify-center font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-logistics-blue hover:bg-logistics-blue/90 text-white focus:ring-logistics-blue/20 px-6 py-3 rounded-full">
              Learn More About Us
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-24 px-4 bg-logistics-light">
    <div class="container mx-auto">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <span class="inline-block bg-logistics-blue/10 text-logistics-blue px-4 py-1 rounded-full text-sm font-medium mb-4 fade-element">
          Our Services
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-logistics-dark mb-4 fade-element fade-delay-100">
          Comprehensive Logistics Solutions
        </h2>
        <p class="text-lg text-gray-600 fade-element fade-delay-200">
          We offer a wide range of logistics services tailored to meet your business needs, 
          ensuring your goods move efficiently across the Philippines.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php 
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'category_name' => 'services', // Ensure 'services' is the correct category slug
          'meta_key' => 'order', // Replace 'order' with the actual meta key for ordering
          'orderby' => 'meta_value_num',
          'order' => 'ASC',
        );

        $query = new WP_Query($args);

        if (!$query->have_posts()) {
          echo '<p>No services found. Please check the category slug or add posts to the "services" category.</p>';
        }

        if ($query->have_posts()) {
          
          while ($query->have_posts()) {
            $query->the_post(); ?>
            
            <div class="glass-card rounded-2xl p-8 hover:shadow-md transition-all duration-300 group fade-element fade-delay-200">
              <div class="mb-6 p-4 bg-logistics-blue/10 inline-block rounded-xl text-logistics-blue group-hover:bg-logistics-blue group-hover:text-white transition-all duration-300">
                <?= get_post_meta(get_the_ID(), 'icon', true); ?>
              </div>
              <h3 class="text-xl font-bold mb-3 text-logistics-dark group-hover:text-logistics-blue transition-colors duration-300">
                <?php the_title(); ?>
              </h3>
              <p class="text-gray-600 mb-6">
                <?= get_post_meta( get_the_ID(), 'short_description', true ); ?>
              </p>
              <a href="<?php the_permalink(); ?>" class="text-logistics-blue hover:text-logistics-blue/80 font-medium inline-flex items-center transition-all duration-300 group-hover:pl-2">
                Learn more
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
              </a>
            </div>
        
          <?php } // End of the loop
          wp_reset_postdata();
         } ?>
          
         
        <!-- Land Transportation -->
        <!-- <div class="glass-card rounded-2xl p-8 hover:shadow-md transition-all duration-300 group fade-element">
          <div class="mb-6 p-4 bg-logistics-blue/10 inline-block rounded-xl text-logistics-blue group-hover:bg-logistics-blue group-hover:text-white transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3 text-logistics-dark group-hover:text-logistics-blue transition-colors duration-300">
            Land Transportation
          </h3>
          <p class="text-gray-600 mb-6">
            Door-to-door delivery across the Philippines with our extensive fleet of trucks and vans.
          </p>
          <a href="/services" class="text-logistics-blue hover:text-logistics-blue/80 font-medium inline-flex items-center transition-all duration-300 group-hover:pl-2">
            Learn more
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div> -->
        
        <!-- Sea Freight -->
        <!-- <div class="glass-card rounded-2xl p-8 hover:shadow-md transition-all duration-300 group fade-element fade-delay-100">
          <div class="mb-6 p-4 bg-logistics-blue/10 inline-block rounded-xl text-logistics-blue group-hover:bg-logistics-blue group-hover:text-white transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349M3.75 21V9.349m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.015a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72l1.189-1.19A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72M6.75 18h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .414.336.75.75.75z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3 text-logistics-dark group-hover:text-logistics-blue transition-colors duration-300">
            Sea Freight
          </h3>
          <p class="text-gray-600 mb-6">
            Reliable shipping services connecting all major ports in the Philippine archipelago.
          </p>
          <a href="/services" class="text-logistics-blue hover:text-logistics-blue/80 font-medium inline-flex items-center transition-all duration-300 group-hover:pl-2">
            Learn more
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div> -->
        
        <!-- Air Cargo -->
        <!-- <div class="glass-card rounded-2xl p-8 hover:shadow-md transition-all duration-300 group fade-element fade-delay-200">
          <div class="mb-6 p-4 bg-logistics-blue/10 inline-block rounded-xl text-logistics-blue group-hover:bg-logistics-blue group-hover:text-white transition-all duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-3 text-logistics-dark group-hover:text-logistics-blue transition-colors duration-300">
            Air Cargo
          </h3>
          <p class="text-gray-600 mb-6">
            Fast and efficient air freight solutions for time-sensitive deliveries.
          </p>
          <a href="/services" class="text-logistics-blue hover:text-logistics-blue/80 font-medium inline-flex items-center transition-all duration-300 group-hover:pl-2">
            Learn more
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </a>
        </div> -->
      </div>
      
      <div class="text-center mt-16 fade-element">
        <a href="/services" class="inline-flex items-center justify-center font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-logistics-blue hover:bg-logistics-blue/90 text-white focus:ring-logistics-blue/20 px-7 py-3 rounded-full">
          View All Services
        </a>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-24 px-4 bg-white">
    <div class="container mx-auto">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <span class="inline-block bg-logistics-red/10 text-logistics-red px-4 py-1 rounded-full text-sm font-medium mb-4 fade-element">
          Get In Touch
        </span>
        <h2 class="text-3xl md:text-4xl font-bold text-logistics-dark mb-4 fade-element fade-delay-100">
          Ready to Optimize Your Logistics?
        </h2>
        <p class="text-lg text-gray-600 fade-element fade-delay-200">
          Contact our team today to discover how Apdoson Logistics can improve your supply chain efficiency and reduce transportation costs.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Call Us -->
        <div class="glass-card rounded-2xl p-8 text-center hover:shadow-md transition-all duration-300 fade-element">
          <div class="w-16 h-16 bg-logistics-blue/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-logistics-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-2 text-logistics-dark">Call Us</h3>
          <p class="text-gray-600 mb-4">Speak directly with our logistics experts</p>
          <a href="tel:+6328123456" class="text-lg font-medium text-logistics-blue"><?= get_option('phone'); ?></a>
        </div>
        
        <!-- Email Us -->
        <div class="glass-card rounded-2xl p-8 text-center hover:shadow-md transition-all duration-300 fade-element fade-delay-100">
          <div class="w-16 h-16 bg-logistics-blue/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-logistics-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-2 text-logistics-dark">Email Us</h3>
          <p class="text-gray-600 mb-4">Send us your inquiries and requirements</p>
          <a href="mailto:info@Apdoson-logistics.com" class="text-lg font-medium text-logistics-blue"><?= get_option('email'); ?></a>
        </div>
        
        <!-- Visit Us -->
        <div class="glass-card rounded-2xl p-8 text-center hover:shadow-md transition-all duration-300 fade-element fade-delay-200">
          <div class="w-16 h-16 bg-logistics-blue/10 rounded-full flex items-center justify-center mx-auto mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-logistics-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-bold mb-2 text-logistics-dark">Visit Us</h3>
          <p class="text-gray-600 mb-4">Our headquarters in Parañaque City</p>
          <span class="text-lg font-medium text-logistics-blue"><?= get_option('office_address'); ?></span>
        </div>
      </div>
      
      <div class="text-center mt-16 fade-element">
        <a href="contact.html" class="inline-flex items-center justify-center font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 bg-logistics-red hover:bg-logistics-red/90 text-white focus:ring-logistics-red/20 px-7 py-3 rounded-full">
          Contact Us
        </a>
      </div>
    </div>
  </section>


<?php get_footer();?>
