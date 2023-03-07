
<?php 
    session_start();
    include 'components/header.php';
    include 'account/auth/dbConfig.php';
?>
  <div class="bg-gray-50 flex items-center">
    <section class="w-full bg-cover bg-center py-32" style="background-image: url('<?= ROOT_DIR ?>/assets/images/header-bg.jpg');">
      <div class="container mx-auto text-center text-white">
        <h1 class="text-5xl font-medium mb-6">Welcome to Clyde Theatre</h1>
        <p class="text-xl mb-12">Unmissable theatre, whenever you want it..</p>
        <a href="#" class="bg-indigo-500 text-white py-4 px-12 rounded-full hover:bg-indigo-600">WHAT'S ON</a>
      </div>
    </section>
    
  </div>
  
  <?php include 'components/navigation.php'; ?>
  <?php include 'components/latest.php'; ?>

  <section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">From the blog</h1>

        <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">
            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="<?php ROOT_DIR ?>assets/images/shows/steel_magnolias.jpeg" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        information on the show
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2023</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="<?php ROOT_DIR ?>assets/images/shows/fishermans_friends.jpeg" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        information on the show
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2023</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="<?php ROOT_DIR ?>assets/images/shows/pretty_woman.jpeg" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        information on the show
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2023</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="<?php ROOT_DIR ?>assets/images/shows/winnie_the_pooh.jpeg" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        information on the show
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2023</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="<?php ROOT_DIR ?>assets/images/shows/annie.jpeg" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        information on the show
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2023</span>
                </div>
            </div>

            <div class="lg:flex">
                <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="<?php ROOT_DIR ?>assets/images/shows/42nd_street.jpeg" alt="">

                <div class="flex flex-col justify-between py-6 lg:mx-6">
                    <a href="#" class="text-xl font-semibold text-gray-800 hover:underline dark:text-white ">
                        information on the show
                    </a>
                    <span class="text-sm text-gray-500 dark:text-gray-300">On: 20 October 2023</span>
                </div>
            </div>
        </div>
    </div>
</section>
  <?php include 'components/footer.php'; ?>

