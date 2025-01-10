<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beanie Coffee</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- Include Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-color: #FAF9F7;
        }

        .text-color {
            color: #c6a764 !important;
        }

        .swiper-wrapper {
            width: 100%;
            height: max-content !important;
            padding-bottom: 64px !important;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }

        .swiper-pagination-bullet {
            background: #4f46e5;
        }

        .swiper-button-prev:after,
        .swiper-rtl .swiper-button-next:after {
            content: '' !important;
        }

        .swiper-button-next:after,
        .swiper-rtl .swiper-button-prev:after {
            content: '' !important;
        }

        @media (max-width: 767px) {

            .swiper-button-next,
            .swiper-button-prev {
                display: none !important;
            }
        }
    </style>
</head>

<body class="bg-[#fdfdfd] text-gray-800">

    <div class="max-w-screen-xl mx-auto px-4 lg:px-8">
        <!-- Header Section -->
        <div class="w-full max-w-screen-xl mx-auto pt-12">
            <!-- Navbar -->
            <div class="flex flex-wrap items-center justify-between py-4 border-b border-[#e5e5e5] border-t">
                <!-- Left Section (Menu Links) -->
                <div class="flex items-center space-x-8 text-sm text-[#999999] tracking-wide hidden lg:flex">
                    <a href="#" class="hover:text-[#c5a17e] text-[#c5a17e] font-bold">HOME</a>
                    <a href="#" class="hover:text-[#c5a17e]">SHOP</a>
                    <a href="#" class="hover:text-[#c5a17e]">BLOG</a>
                    <a href="#" class="hover:text-[#c5a17e]">PAGES</a>
                </div>

                <!-- Logo -->
                <div class="relative flex justify-center w-full lg:w-auto mb-4 lg:mb-0">
                    <img src="https://placehold.co/150x50" alt="Logo" class="h-12">
                </div>

                <!-- Right Section (Search & Icons) -->
                <div class="flex items-center space-x-6 text-sm text-[#999999]">
                    <!-- Search Bar -->
                    <div class="relative hidden lg:block">
                        <input type="text" placeholder="Search here..."
                            class="pl-4 pr-10 py-2 text-[#999999] text-sm bg-[#fdfcf9] border border-[#e5e5e5] rounded-full focus:outline-none focus:border-[#c5a17e]">
                        <i class="fas fa-search absolute top-2.5 right-4 text-[#999999]"></i>
                    </div>

                    <!-- Icons -->
                    <div class="flex items-center space-x-4">
                        <a href="#" class="hover:text-[#c5a17e]"><i class="far fa-heart"></i></a>
                        <a href="#" class="hover:text-[#c5a17e] flex items-center">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="ml-1 text-xs">(0)</span>
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div class="flex lg:hidden w-full mt-4 justify-between">
                    <!-- Left Section (Menu Links for Mobile) -->
                    <div class="flex items-center space-x-4 text-sm text-[#999999] tracking-wide">
                        <a href="#" class="hover:text-[#c5a17e] text-[#c5a17e] font-bold">HOME</a>
                        <a href="#" class="hover:text-[#c5a17e]">SHOP</a>
                    </div>

                    <!-- Search Bar for Mobile -->
                    <div class="relative">
                        <input type="text" placeholder="Search..."
                            class="pl-4 pr-10 py-2 text-[#999999] text-sm bg-[#fdfcf9] border border-[#e5e5e5] rounded-full focus:outline-none focus:border-[#c5a17e] w-full">
                        <i class="fas fa-search absolute top-2.5 right-4 text-[#999999]"></i>
                    </div>
                </div>
            </div>


            <!-- Hero Section -->
            <section class="mt-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div>
                        <img src="storage/{{$hero->image_url}}"
                         alt="{{ $hero->title }}" class="w-full rounded-lg shadow-lg">
                    </div>
                    <div class="flex flex-col justify-center items-center bg-[#f9f9f7] rounded-md text-center p-8">
                        <h2 class="text-3xl font-semibold font-serif text-gray-800">
                            {{ \Str::before($hero->title, ' ') }}
                            <span class="text-[#c6a764]">{{ \Str::after($hero->title, ' ') }}</span>
                        </h2>
                        <p class="mt-4 text-gray-600 text-lg">{{$hero->description}}</p>
                        <!-- <button class="mt-6 px-6 py-3 bg-[#c6a764] text-white rounded-md hover:bg-[#b2955c]">Order
                            Now</button> -->
                        <button type="button"
                            class="border border-black dark:border-gray-600 dark:focus:ring-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-600 focus:ring-gray-100 font-medium hover:bg-gray-100 mb-2 me-2 mt-6 px-6 py-3 rounded-full text-gray-900 text-sm">Order Now</button>

                    </div>
                </div>
                <p class="pt-12 pb-6 mt-8 mx-auto px-4 sm:px-6 lg:px-8 text-2xl text-center text-gray-600 max-w-3xl">
                    Morbi justo vel clam non leo elementum massa. Molestie ipsum condimentum egestas vitae ut cras
                    aenean
                    enim.
                    Laoreet odio adipiscing auctor scelerisque phasellus nisi faucibus.
                </p>

            </section>

            <!-- Shop Best Coffee Section -->
            <section class="mt-16">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-semibold font-serif text-gray-800">Shop Best Coffee</h3>
                    <div class="flex items-center gap-4">
                        <a href="#" class="text-[#c6a764] hover:underline">View All</a>
                        <!-- Prev Button -->
                        <button id="coffee-prev" aria-label="Previous"
                            class="flex justify-center items-center w-8 h-8 border border-gray-400 rounded-md hover:bg-black hover:text-white transition">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <!-- Next Button -->
                        <button id="coffee-next" aria-label="Next"
                            class="flex justify-center items-center w-8 h-8 border border-gray-400 rounded-md hover:bg-black hover:text-white transition">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Product Item -->
                    @foreach ($coffees as $coffee)
                        <div>
                            <div class="w-full h-64 bg-gray-100 rounded-md overflow-hidden">
                                <img src="storage/{{ $coffee->image_url }}" alt="{{ $coffee->name }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <h4 class="mt-4 text-lg font-medium text-gray-800">{{ $coffee->name }}</h4>
                            <p class="mt-2 text-gray-600 text-color">${{ number_format($coffee->price, 2) }}</p>
                        </div>
                    @endforeach
                </div>
            </section>


            <!-- Testimonials Section -->
            <section class="mt-16">
                <div class="w-full relative">
                    <div class="swiper default-carousel swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testi)
                                <div class="swiper-slide">
                                    <div class="bg-transparent rounded-2xl h-96 flex justify-center items-center">
                                        <div class="pt-12 pb-6 mt-8 mx-auto px-4 sm:px-6 lg:px-8 text-center">
                                            <p class="sm:text-2xl text-gray-600 max-w-3xl mx-auto italic">
                                                {{ $testi->quote }}
                                            </p>
                                            <p class="mt-4 text-gray-600 text-xl font-medium">
                                                {{ $testi->author }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="flex items-center gap-8 lg:justify-start justify-center">
                            <!-- Previous Button -->
                            <button id="slider-button-left" aria-label="Previous Slide"
                                class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-black !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8 !left-5 hover:bg-black hover:text-white hover:outline-black">
                                <svg class="h-5 w-5 text-black group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <!-- Next Button -->
                            <button id="slider-button-right" aria-label="Next Slide"
                                class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-black !w-12 !h-12 transition-all duration-500 rounded-full !top-2/4 !-translate-y-8 !right-5 hover:bg-black hover:text-white hover:outline-black">
                                <svg class="h-5 w-5 text-black group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                        stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>


            <!--HTML CODE-->

            <section class="flex justify-center items-center">
                <div class="w-full p-4 sm:p-8 max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- New Arrivals -->
                        <div>
                            <h2 class="text-2xl font-bold mb-4">NEW ARRIVALS</h2>
                            <ul>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Coconut Kiss"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">COCONUT KISS</p>
                                            <p class="text-sm text-gray-500">A zing and coconut-accented shot of coffee.
                                            </p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$2.99</p>
                                </li>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Pumpkin Spice Surprise"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">PUMPKIN SPICE SURPRISE</p>
                                            <p class="text-sm text-gray-500">A shot of espresso diluted with hot water.
                                            </p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$3.49</p>
                                </li>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Toffee Temptation"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">TOFFEE TEMPTATION</p>
                                            <p class="text-sm text-gray-500">Equal parts of espresso, steamed milk, and
                                                foam, topped with cocoa.</p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$3.99</p>
                                </li>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Gingerbread Galore"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">GINGERBREAD GALORE</p>
                                            <p class="text-sm text-gray-500">Creamy espresso with steamed milk and a
                                                thin
                                                layer of foam.</p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$4.49</p>
                                </li>
                            </ul>
                            <p class="text-sm font-bold mt-4 underline cursor-pointer">VIEW ALL</p>
                        </div>

                        <!-- Best Selling -->
                        <div>
                            <h2 class="text-2xl font-bold mb-4">BEST SELLING</h2>
                            <ul>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Cinnamon Swirl"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">CINNAMON SWIRL</p>
                                            <p class="text-sm text-gray-500">A zing and cinnamon-accented shot of
                                                coffee.
                                            </p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$2.99</p>
                                </li>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Hazelnut Heaven"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">HAZELNUT HEAVEN</p>
                                            <p class="text-sm text-gray-500">A shot of espresso diluted with hot water.
                                            </p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$3.49</p>
                                </li>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Peppermint Perk"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">PEPPERMINT PERK</p>
                                            <p class="text-sm text-gray-500">Equal parts of espresso, steamed milk, and
                                                foam, topped with cocoa.</p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$3.99</p>
                                </li>
                                <li class="flex items-center justify-between py-2 border-b border-gray-300">
                                    <div class="flex items-center space-x-4">
                                        <img src="https://placehold.co/50x50" alt="Peppermint Perk"
                                            class="w-12 h-12 rounded-full">
                                        <div>
                                            <p class="font-bold text-lg">PEPPERMINT PERK</p>
                                            <p class="text-sm text-gray-500">Equal parts of espresso, steamed milk, and
                                                foam, topped with cocoa.</p>
                                        </div>
                                    </div>
                                    <p class="font-bold">$3.99</p>
                                </li>
                            </ul>
                            <p class="text-sm font-bold mt-4 underline cursor-pointer">VIEW ALL</p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <section class="text-center mt-20">
                    <h2 class="text-3xl font-bold text-[#4a4a4a]">SUBSCRIBE US</h2>
                    <p class="text-[#9a9a9a] mt-4">Subscribe to our newsletter for discount codes and updates.</p>
                    <div class="mt-6 flex justify-center">
                        <input type="email" placeholder="Write your email address here..."
                            class="border border-[#cccccc] rounded-l-full px-6 py-3 w-[400px] text-sm text-[#666666] focus:outline-none">
                        <button
                            class="bg-[#ffffff] border border-[#cccccc] rounded-r-full px-6 py-3 text-sm text-[#666666] hover:bg-[#f5f5f5]">
                            SUBSCRIBE
                        </button>
                    </div>
                    <div class="mt-6">
                        <ul class="flex justify-center gap-6 text-[#9a9a9a]">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </section>

                <!-- Features Section -->
                <section class="mt-20 border-t  border-b border-[#e6e6e6] pt-12 pb-12">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 text-center">
                        <!-- Feature 1 -->
                        <div>
                            <div class="text-3xl text-[#9a9a9a]">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <h3 class="mt-4 text-[#4a4a4a] font-bold">QUICK DELIVERY</h3>
                            <p class="mt-2 text-[#9a9a9a] text-sm">Per sua vivra feugiat qui curum delaeque aut rem
                                commem.
                            </p>
                        </div>
                        <!-- Feature 2 -->
                        <div>
                            <div class="text-3xl text-[#9a9a9a]">
                                <i class="fas fa-store"></i>
                            </div>
                            <h3 class="mt-4 text-[#4a4a4a] font-bold">PICKUP IN STORE</h3>
                            <p class="mt-2 text-[#9a9a9a] text-sm">Orid el cursus ele most qui suas partu non jump qui
                                vivra
                                feugiat.</p>
                        </div>
                        <!-- Feature 3 -->
                        <div>
                            <div class="text-3xl text-[#9a9a9a]">
                                <i class="fas fa-box-open"></i>
                            </div>
                            <h3 class="mt-4 text-[#4a4a4a] font-bold">NO SHIPPING CHARGE</h3>
                            <p class="mt-2 text-[#9a9a9a] text-sm">Bugie aut dictae eleifend qui susan pulvin partu
                                susa.
                            </p>
                        </div>
                        <!-- Feature 4 -->
                        <div>
                            <div class="text-3xl text-[#9a9a9a]">
                                <i class="fas fa-hands-helping"></i>
                            </div>
                            <h3 class="mt-4 text-[#4a4a4a] font-bold">FRIENDLY SERVICE</h3>
                            <p class="mt-2 text-[#9a9a9a] text-sm">Dictum eleifend qui susan partu pulvinor feugiat qui
                                curum.</p>
                        </div>
                    </div>
                </section>

            </section>
            <section>
                <div class="flex items-center justify-between mt-20">
                    <h2 class="text-3xl font-bold text-[#4a4a4a]">READ OUR BLOGS</h2>
                    <a href="#" class="text-sm font-bold text-[#9a9a9a] hover:underline">READ BLOG POSTS</a>
                </div>
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Blog 1 -->
                    @foreach ($blogs as $blog)
                        <div class="rounded-lg overflow-hidden shadow-md bg-white">
                            <div class="w-full h-48 bg-gray-100 overflow-hidden">
                                <img src="storage/{{ $blog->image_url }}" alt="{{ $blog->title }}"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-[#4a4a4a]">
                                    {{ Str::limit($blog->title, 75) }}
                                </h3>
                                <p class="text-sm text-[#9a9a9a] mt-2">
                                    {{ Str::limit($blog->content, 100) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>



            <!-- Instagram Section -->
            <section class="mt-20">
                <div class="text-center">
                    <h2 class="text-3xl font-bold text-[#4a4a4a]">FOLLOW OUR INSTAGRAM #BEANIE</h2>
                </div>
                <div class="mt-10 grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                    @foreach ($instagram as $ig)
                        <div class="relative w-full h-32 sm:h-40 lg:h-48">
                            <img src="storage/{{$ig->image_url}}" alt="{{$ig->title}}" 
                                class="absolute top-0 left-0 w-full h-full object-cover rounded-lg">
                        </div>
                    @endforeach
                </div>
            </section>


            <!-- Footer Section -->
            <footer class="mt-16 bg-[#f9f9f7] py-12">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:px-8">
                    <!-- Quick Links -->
                    <div>
                        <h4 class="font-medium text-gray-800">Quick Links</h4>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li><a href="#" class="hover:underline">Home</a></li>
                            <li><a href="#" class="hover:underline">Shop</a></li>
                            <li><a href="#" class="hover:underline">Blog</a></li>
                            <li><a href="#" class="hover:underline">Pages</a></li>
                        </ul>
                    </div>
                    <!-- Follow Us -->
                    <div>
                        <h4 class="font-medium text-gray-800">Follow Us</h4>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li><a href="#" class="hover:underline">Instagram</a></li>
                            <li><a href="#" class="hover:underline">Facebook</a></li>
                            <li><a href="#" class="hover:underline">Twitter</a></li>
                        </ul>
                    </div>
                    <!-- Customer Service -->
                    <div>
                        <h4 class="font-medium text-gray-800">Customer Service</h4>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li><a href="#" class="hover:underline">Contact Us</a></li>
                            <li><a href="#" class="hover:underline">FAQ</a></li>
                        </ul>
                    </div>
                    <!-- Subscribe -->
                    <div>
                        <h4 class="font-medium text-gray-800">Subscribe</h4>
                    </div>
                </div>
            </footer>

        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".default-carousel", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>

</html>