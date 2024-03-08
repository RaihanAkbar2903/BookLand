<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-100">

    <!-- NAVBAR -->

    <nav class="p-5 bg-gradient-to-br from-stone-500 via-orange-200 to-slate-500 md:flex md:items-center md:justify-between">
        <div class="md:flex md:items-center md:justify-between">
        <img src="img/logo.png" alt="" width="100">
            <span class="text-2xl font-[Poppins] text-white">
                BookLand
            </span>
        </div>
</div>  
<div>
<select name="cars" class="bg-orange-200 text-white shadow mr-20 text-2xl font-[Poppins]">
  <option value="volvo">Kategori</option>
  <option value="saab">Fiksi</option>
  <option value="mercedes">Non Fiksi</option>
  <option value="audi">Majalah</option>
  <option value="audi">Manga</option>
</select>
        <input type="search" name="" id="" placeholder="Cari Buku, Novel, Komik, Penulis " class="rounded-full px-5 py-5 w-96 bg-stone-100">
        </div>
        <ul class="md:flex md:items-center">
            <li class="mx-4">
                <a href="login" class="text-xl text-white shadow hover:text-gray-600 duration-500 font-[Poppins]">MASUK</a>
            </li>
            <li class="mx-4">
            <a href=""><ion-icon name="bag-handle-outline" class="text-white shadow size-10"></ion-icon></a>
            </li>
            <li>
            </li>
        </ul>
    </nav>

    <!-- NAVBAR -->

    <!-- Carousel -->
 
<!-- This is an example component -->
<div class="max-w-full">

	<div id="default-carousel" class="relative" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="overflow-hidden relative h-96 rounded-lg sm:h-96 4xl:h-96 4xl:h-96">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                <img src="img/carousel1.jpeg" class=" absolute top-2/3 left-1/2 w-full  -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/carousel2.jpeg" class="block absolute top-2/3 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/carousel1.jpeg" class="block absolute top-2/3 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>

    <!-- Carousel -->



    <!-- Card -->
<div class="md:flex md:items-center mt-10 mb-1">
<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 shadow">
    <a href="#">
        <img class="rounded-t-lg h-[500px] w-96" src="img/card.jpeg" alt="">
    </a>
    <div class="py-2 flex">
        <a href="#" class="p-[124.5px] py-2 justify-items-center flex font-medium text-white bg-blue-700 hover:bg-blue-800 rounded-b-lg">
            Lihat Semua
        </a>
    </div>
</div>

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[16px] rounded-lg">
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

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[16px] rounded-lg">
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

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[16px] rounded-lg">
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

<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 relative absolute bottom-[16px] rounded-lg">
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
</div>

<!-- footer -->
    
</body>
</html>
