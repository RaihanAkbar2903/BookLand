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
<body>
<div class="bg-gray-100 flex justify-center items-center h-screen">

<div class="w-1/2 h-screen hidden lg:block">
  <img src="img/buku.jpg" alt="Placeholder Image" class="object-fill w-full h-full relative">
</div>

<div class="lg:p-[345px] md:p-52 sm:20 p-8 w-full lg:w-1/2 ">
  <h1 class="text-2xl font-semibold mb-4">Login</h1>
  <form action="#" method="POST">

    <div class="mb-4">
      <label for="username" class="block text-gray-600">Username</label>
      <input type="text" id="username" name="username" class="w-auto border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>

    <div class="mb-4">
      <label for="password" class="block text-gray-600">Password</label>
      <input type="password" id="password" name="password" class="w-auto border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:border-blue-500" autocomplete="off">
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md py-2 px-4 w-52">Login</button>
  </form>

  <div class="mt-6 text-blue-500 text-center w-auto">
    <p class="text-sm font-light text-gray-500 dark:text-gray-400 w-56">
                      Belum Punya Akun? <a href="register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Register Disini</a>
                  </p>
  </div>
</div>
</div>
</body>
</html>