<?php 
    include '../../components/header.php';
    include '../../components/navigation.php';
?>

<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-image:url('assets/images/main1.jpg')">
  <div class="rounded-xl bg-gray-800 bg-opacity-100 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <div class="mb-8 flex flex-col items-center">
        <img src="<?php ROOT_DIR ?>assets/images/logo1.png" width="120" alt="" srcset="" />
        <span class="text-gray-300">Enter Login Details</span>
      </div>
      <form action="account/auth/authenticate.php" method="post">
        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" 
          type="text" name="username" placeholder="username" />
        </div>

        <div class="mb-4 text-lg">
          <input class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md" 
          type="Password" name="password" placeholder="*********" />
        </div>
        <div class="mt-8 flex justify-center text-lg text-black">
          <!-- <button type="submit" 
          class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Login</button> -->
        <input type="submit" class="rounded-3xl bg-red-700 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-indigo-700 " value="LOGIN">

        </div>
        
      </form>

    </div>
    <p class="text-gray-300">
        Don’t have an account yet? <a href="<?php ROOT_DIR ?>register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
      </p>
  </div>
</div>

<?php 
    include '../../components/footer.php';
?>