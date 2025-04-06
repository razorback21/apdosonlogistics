<?php get_header(); ?>

<section class="pt-32 pb-16 bg-logistics-light">
  <div class="container mx-auto px-4">
    <div class="max-w-3xl mx-auto text-center">
      <div class="fade-element">
        <span class="inline-block bg-logistics-blue/10 text-logistics-blue px-4 py-1 rounded-full text-sm font-medium mb-4">
          Services
        </span>
      </div>
      <div class="fade-element fade-delay-100">
        <h1 class="text-4xl md:text-5xl font-bold text-logistics-dark mb-6">
          <?php the_title(); ?>
        </h1>
        <p class="text-lg text-gray-600 fade-element fade-delay-200">
          <?= get_post_meta( get_the_ID(), 'short_description', true );  ?>   
        </p>
      </div>
    </div>
  </div>
</section>

<section class="py-20 bg-white">
  <div class="container mx-auto px-4 max-w-4xl">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="mb-8 fade-element fade-delay-200">
        <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded-lg shadow']); ?>
      </div>
    <?php endif; ?>
    <div class="prose max-w-none fade-element fade-delay-300">
      <?php
      while ( have_posts() ) :
        the_post();
        the_content();
      endwhile;
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
