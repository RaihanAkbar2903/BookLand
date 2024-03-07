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
<body class="bg-slate-500">

    <!-- NAVBAR -->

    <nav class="bg-gradient-to-br from-stone-500 via-orange-200 to-slate-500 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="img/logo.png" class="h-8" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">BookLand</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
       <a href="login"><button type="button" class="bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-40% to-teal-900-500 to-90% bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button></a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <select name="" id="" class="bg-transparent mr-5"> 
      <option value="">KATEGORI</option>
      <option value="">Fiksi</option>
      <option value="">Non Fiksi</option>
      <option value="">Manga</option>
      <option value="">Manhwa</option>
    </select>
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90% dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <input type="search" class="rounded-lg w-72" placeholder="Cari Buku, Novel, Komik, Penulis ">
      </li>
    </ul>
  </div>
  </div>
</nav>

    <!-- NAVBAR -->

    <!-- Carousel -->

    <!-- Carousel -->
 
<div class="max-w-2xl mx-auto">
  <div id="default-carousel" class="relative" data-carousel="static">
    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
        
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2
            -translate-y-1/2 sm:text-3xl">
            Primer slide
            </span>
            <img src="img/carousel1.png" alt=""
              class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">

        </div>

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
         <img src="img/carousel2.png" alt=""
           class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" >
        </div>

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
         <img src="img/carousel1.png" alt=""
           class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" >
        </div>
    </div>
    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="slide 1" 
        data-carousel-slide-to="0"></button>
        <button class="w-3 h-3 rounded-full" aria-current="false" aria-label="slide 2" 
        data-carousel-slide-to="1"></button>
        

    </div>

  </div>

 </div>

    <!-- Carousel -->

    <!-- Carousel -->


    <!-- Card -->
<div class="md:flex md:items-center mt-20 mb-1">
<div class="max-w-sm border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 m-5 shadow">
    <a href="#">
        <img class="rounded-t-lg h-[500px] w-96" src="img/card.jpeg" alt="">
    </a>
    <div class="py-2 flex">
        <a href="#" class="p-[126.5px] py-2 justify-items-center flex font-medium text-white bg-blue-700 hover:bg-blue-800 rounded-b-lg">
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
<hr class="my-20 border-t-4"/>
</div>
<hr class="my-20 border-t-4"/>
    <!-- Card -->
    
</body>
</html>
