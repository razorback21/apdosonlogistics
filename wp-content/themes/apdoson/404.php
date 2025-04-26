<?php get_header(); ?>
    <section>
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
            <div class="max-w-2xl px-8 py-16 text-center">
            <h1 class="mb-4 text-9xl font-bold text-gray-800">404</h1>
            <h2 class="mb-4 text-3xl font-semibold text-gray-600">Page Not Found</h2>
            <p class="mb-8 text-lg text-gray-500">Oops! The page you're looking for doesn't exist or has been moved.</p>
            <a href="<?php echo home_url(); ?>" class="inline-flex items-center px-6 py-3 text-base font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg transition duration-150 ease-in-out">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Return Home
            </a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>