
<style>
    .hover\:bg-yellow-500:hover {
      background-color: #d06f4c;
    }
  </style>
<nav 
class="z-0 relative" 
x-data="{open:false,menu:false, lokasi:false}">
  <div class="relative z-10 bg-red-900 shadow">
      <div class="relative flex items-center justify-center h-16">
        <div class="flex items-center justify-between w-full lg:w-auto  px-2 lg:px-0">
          <a class="flex-shrink-0" href="<?= ROOT_DIR ?>">
            <img class="block lg:hidden h-12 w-16" src="<?= ROOT_DIR ?>assets/images/logo1.png" alt="Logo">
            <img class="hidden lg:block h-12 w-auto" src="<?= ROOT_DIR ?>assets/images/logo1.png" alt="Logo">
          </a>
          <div class="hidden lg:block lg:ml-2">
            <div class="flex " >
              <?php if (!isset($_SESSION['loggedin'])): ?>
                <a href="<?= ROOT_DIR ?>" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Home </a>

                <a href="<?= ROOT_DIR ?>blogs" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Blogs </a>

                <a href="<?= ROOT_DIR ?>contact" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Contact </a>

                <a href="<?= ROOT_DIR ?>about" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> About Us </a>
                <a href="<?= ROOT_DIR ?>login" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Login </a>
                
              <?php else: ?>
                <a href="<?= ROOT_DIR ?>" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Home </a>
                <a href="<?= ROOT_DIR ?>blogs" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Blog </a>
                    <?php if ($_SESSION['is_admin'] == 1): ?>

                      <a href="<?= ROOT_DIR ?>a/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashbaord </a>
                    <?php elseif ($_SESSION['is_admin'] == 0): ?>

                      <a href="<?= ROOT_DIR ?>u/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashboard </a>
                    <?php endif ?>
                    <a href="<?= ROOT_DIR ?>account/auth/logout.php" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-white hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Logout </a>
                    <?php endif ?>
            </div>
          </div>
        </div>
        

        <div class="flex lg:hidden ">
          <button @click="menu=!menu" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out" aria-label="Main menu" aria-expanded="false">
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>
    <div x-show="menu" class="block md:hidden">
      <div class="px-2 pt-2 pb-3">
      <?php if (!isset($_SESSION['loggedin'])): ?>
                <a href="<?= ROOT_DIR ?>" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Home </a>
                <a href="<?= ROOT_DIR ?>blogs" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Blogs </a>
                
                <a href="<?= ROOT_DIR ?>login" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Login </a>

                <a href="<?= ROOT_DIR ?>register" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Register </a>
              <?php else: ?>
                <a href="<?= ROOT_DIR ?>" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Home </a>
                <a href="<?= ROOT_DIR ?>blogs" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Blog </a>

                    <?php if ($_SESSION['is_admin'] == 1): ?>
                      
                      <a href="<?= AUTH_DIR ?>a/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashbaord </a>



                    <?php elseif ($_SESSION['is_admin'] == 0): ?>
                      <a href="<?= ROOT_DIR ?>u/dashboard" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Dashbaord </a>

                    <?php endif ?>
                    <a href="<?= ROOT_DIR ?>account/auth/logout.php" class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 "> Logout </a>
                    <?php endif ?>
    </div>
    </div>
  </div>
</nav>





