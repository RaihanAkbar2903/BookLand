<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</head>
<body class="bg-stone-100">

    <!-- NAVBAR -->

    <nav class="bg-gradient-to-br from-stone-500 via-orange-200 to-slate-500">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../img/logo.png" alt="" width="100" class="h-14">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BookLand</span>
        </a>
        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <a href="/login" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
            <a href="/register" class="text-grey bg-slate-500 hover:bg-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-to-slate-500 focus:outline-none dark:focus:ring-blue-800">Sign up</a>
            <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-transparent focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
                
            </button>
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
                        Kategori<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
  </svg>
                    </button>
                    <div id="mega-menu-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Library
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Resources
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Pro Version
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Newsletter
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Playground
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        License
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-4">
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Support Center
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
            </ul>
        </div>
    </div>
</nav>

    <!-- NAVBAR -->

    <!-- Carousel -->
	
    @include('layouts/carousel')

    <!-- Carousel -->

    <!-- kategori -->

<div class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Kategori Buku</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="bg-white rounded-lg p-4 shadow">
                <img src="https://via.placeholder.com/150" alt="Category" class="mb-2">
                <h2 class="text-lg font-semibold">Fiksi</h2>
                <p class="text-gray-500">Explore our collection of fictional books.</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <img src="https://via.placeholder.com/150" alt="Category" class="mb-2">
                <h2 class="text-lg font-semibold">Non-fiksi</h2>
                <p class="text-gray-500">Discover our non-fiction books on various topics.</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <img src="https://via.placeholder.com/150" alt="Category" class="mb-2">
                <h2 class="text-lg font-semibold">Science Fiction</h2>
                <p class="text-gray-500">Travel to distant galaxies with our science fiction collection.</p>
            </div>
            <div class="bg-white rounded-lg p-4 shadow">
                <img src="https://via.placeholder.com/150" alt="Category" class="mb-2">
                <h2 class="text-lg font-semibold">Fantasy</h2>
                <p class="text-gray-500">Immerse yourself in magical realms with our fantasy books.</p>
            </div>
        </div>
    </div>
</div>



    <!-- Card -->
<div class="md:flex md:items-center mt-10 mb-10">
<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mx-5">
    <a href="#">
        <img class="rounded-t-lg h-[500px] w-96" src="img/card.jpeg" alt="">
    </a>
    <div class="py-2 flex">
        <a href="#" class="p-[124.5px] py-2 justify-items-center flex font-medium text-white bg-blue-700 hover:bg-blue-800 rounded-b-lg">
            Lihat Semua
        </a>
    </div>
</div>

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[26px] rounded-lg">
    <a href="#">
        <img class="rounded-t-lg h-96 w-96" src="img/card1.jpeg" alt="">
    </a>
    <div class="py-2 bg-white rounded-b-lg pl-2">
        <p class="text-gray-600 pt-2">HALLO BAGAS</p><br>
        <p>Nanti Juga Sembuh Sendiri</p>
        <p class="text-blue-700 font-bold">Rp 80.000</p>
    </div>
    </a>
</div>

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[26px] rounded-lg">
    <a href="#">
        <img class="rounded-t-lg h-96 w-96" src="img/card1.jpeg" alt="">
    </a>
    <div class="py-2 bg-white rounded-b-lg pl-2">
        <p class="text-gray-600 pt-2">HALLO BAGAS</p><br>
        <p>Nanti Juga Sembuh Sendiri</p>
        <p class="text-blue-700 font-bold">Rp 80.000</p>
    </div>
    </a>
</div>

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[26px] rounded-lg">
    <a href="#">
        <img class="rounded-t-lg h-96 w-96" src="img/card1.jpeg" alt="">
    </a>
    <div class="py-2 bg-white rounded-b-lg pl-2">
        <p class="text-gray-600 pt-2">HALLO BAGAS</p><br>
        <p>Nanti Juga Sembuh Sendiri</p>
        <p class="text-blue-700 font-bold">Rp 80.000</p>
    </div>
    </a>
</div>

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[26px] rounded-lg">
    <a href="#">
        <img class="rounded-t-lg h-96 w-96" src="img/card1.jpeg" alt="">
    </a>
    <div class="py-2 bg-white rounded-b-lg pl-2">
        <p class="text-gray-600 pt-2">HALLO BAGAS</p><br>
        <p>Nanti Juga Sembuh Sendiri</p>
        <p class="text-blue-700 font-bold">Rp 80.000</p>
    </div>
    </a>
</div>
</div>
    <!-- Card -->

    

    <!-- Footer -->
    
    <!-- Footer -->
    <div>
    <footer class="bg-gradient-to-br from-stone-500 via-orange-200 to-slate-500">
    <div class="container mx-auto py-14 px-6">
        <div class="grid md:grid-cols-12 grid-cols-1 gap-7">
            <div class="lg:col-span-4 col-span-12">
            <h5 class="tracking-wide text-black font-semibold">Tentang Kami</h5>
                <a href="/">
                <img'
                class="h-12"
                src:
                alt=""
                />
                </a>
                <p class="nt-6">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus incidunt illum, deserunt voluptatem quaerat dolores pariatur veritatis autem quia libero temporibus voluptate aut praesentium? Nesciunt consequuntur quis unde repellat neque.
                </p>
            </div>
            <div class="lg:col-span-2 md:col-span-4 col-span-12">
            <h5 class="tracking-wide text-black font-semibold">Company</h5>
            <ul class="list-none mt-6 space-y-2">
                <li>
                    <a
                    href="#"
                    class="hover:text-white transition-all duration-500 ease-in-out"
                    >
                    About us </a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="hover:text-white transition-all duration-500 ease-in-out"
                    >
                    services </a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="hover:text-white transition-all duration-500 ease-in-out"
                    >
                    pricing </a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="hover:text-white transition-all duration-500 ease-in-out"
                    >
                    Blog </a
                    >
                </li>
            </div>
            <div class="lg:col-span-3 md:col-span-4 col-span-12">
                <h5 class="tracking-wide text-black font-semibold">
                    important Links
                </h5>
                <ul class="list-none space-y-2 mt-6">
                    <li>
                        <a
                        href="#"
                        class="hover:text-white transition-all duration-500 ease-in-out"
                        >
                        terms of servies</a
                        >
                    </li>
                    <li>
                        <a
                        href="#"
                        class="hover:text-white transition-all duration-500 ease-in-out"
                        >
                        Privacy Policy</a
                        >
                    </li>
                    <li>
                        <a
                        href="#"
                        class="hover:text-white transition-all duration-500 ease-in-out"
                        >
                        Documentation</a
                        >
                    </li>
                   </div>
                   <div class="lg:col-span-3 md:col-span-4 col-span-12">
                <h5 class="tracking-wide text-black font-semibold">
                    Hubungi Kami
                </h5>
                <ul class="list-none space-y-2 mt-6">
                    <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0 6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                    </svg>
                        <a
                        href="#"
                        class="hover:text-white transition-all duration-500 ease-in-out"
                        >

                        +62 83495103974</a
                        >
                    </li>
                    <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                 </svg>

                        <a
                        class="hover:text-white transition-all duration-500 ease-in-out"
                        
                        >
                        BookLand@gmail.com</a
                        >
                    </li>

        
        
    <div class="md:text-center text-center container flex items-center justify-center mx-auto px-6">
        <p class="mb-0 text-lg">
            &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>
            BookLand team
        </p>
                    </div>


</div>
</div>
</div>
</footer>

<!-- footer -->
    
</body>
</html>
