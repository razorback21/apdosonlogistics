<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Configure Tailwind -->
    <script>
        tailwind.config = {
        theme: {
            extend: {
            colors: {
                'logistics-blue': '#00a9ce',
                'logistics-red': '#e5281c',
                'logistics-light': '#f5f5f7',
                'logistics-dark': '#1d1d1f'
            },
            fontFamily: {
                'sans': ['SF Pro Display', 'system-ui', 'sans-serif'],
                'display': ['SF Pro Display', 'system-ui', 'sans-serif']
            }
            }
        }
        }
  </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('min-h-screen flex flex-col antialiased'); ?>>
    <?php wp_body_open(); ?>
    <header class="fixed top-0 z-50 w-full bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <a href="/" class="flex items-center gap-2">
        <img src="<?= get_template_directory_uri().'/images/';?>logo.png" alt="Apdoson Logistics Logo" class="h-12">
      </a>
      
      <nav class="hidden md:flex items-center gap-8">
        <!-- <a href="index.html" class="text-sm font-medium text-logistics-blue">Home</a> -->
        <?php 
            $items = wp_get_nav_menu_items('primary');
            if ($items): ?>
                <?php foreach ($items as $item): ?>
                    <a href="<?php echo $item->url;?>" class="text-sm font-medium hover:text-logistics-blue transition-colors">
                        <?php echo strtoupper($item->title); ?>
                    </a>
            <?php endforeach; ?>
        <?php endif; ?>
        <a href="/contact" class="bg-logistics-red hover:bg-logistics-red/90 text-white rounded-full px-6 py-2 text-sm font-medium transition-all">Get Quote</a>
      </nav>
      
      <div class="md:hidden flex items-center">
        <button id="mobile-menu-button" class="text-logistics-dark">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden p-4 absolute w-full bg-white border-t">
      <nav class="flex flex-col space-y-4">
        <!-- <a href="index.html" class="text-sm font-medium text-logistics-blue">Home</a> -->        
        <?php if ($items): ?>
            <?php foreach ($items as $item): ?>
                <a href="<?php echo $item->url;?>" class="text-sm font-medium hover:text-logistics-blue transition-colors">
                    <?php echo strtoupper($item->title); ?>
                </a>
            <?php endforeach; ?>
        <?php endif;?>        
        <a href="contact.html" class="text-sm font-medium bg-logistics-red text-white rounded-full px-6 py-2 text-center">Get Quote</a>
      </nav>
    </div>
  </header>