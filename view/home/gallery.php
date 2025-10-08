<section class="py-16 px-4 md:px-8" id="gallery">
    <div class="max-w-7xl mx-auto">
        <!-- Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-brand">Our Gallery</h2>
            <p class="text-gray-400 max-w-2xl mx-auto">Explore our collection of stunning images showcasing our
                work and creativity.</p>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Gallery Item 1 -->
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div
                    class="group relative overflow-hidden rounded-lg shadow-lg transition-transform duration-300 hover:scale-105">
                    <img src="assets/imgs/background.jpg" alt="Mountain landscape"
                        class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
            <?php endfor; ?>

        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <a href="/gallery"
                class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-lg transition-colors duration-300">
                View More
            </a>
        </div>
    </div>
</section>