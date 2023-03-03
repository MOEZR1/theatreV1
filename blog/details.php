<?php 
    session_start();
    include '../components/header.php';
    include '../components/navigation.php';
    include '../account/auth/dbConfig.php';
?>
<!-- Blog component -->
<section class="bg-white dark:bg-gray-900">
    <div class="flex justify-center min-h-screen">
        <div class="hidden bg-cover lg:block lg:w-2/5" style="background-image: url('<?= ROOT_DIR ?>assets/images/mary_poppins.jpg'); background-position: center;">
        </div>

        <div class="flex items-center w-full max-w-3xl p-8 mx-auto lg:px-12 lg:w-3/5">
            <div class="w-full">
                <h1 class="text-2xl font-semibold tracking-wider text-gray-800 capitalize dark:text-white">
                    Mary Poppins
                </h1>

                <p class="mt-4 text-gray-500 dark:text-gray-400">Saturday 1st February, 2023</p>
                <hr>
                <div class="mt-6">
                    <p class="mt-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit adipisci exercitationem quam ex id tenetur esse sint soluta, architecto earum consequuntur labore minus asperiores optio! Et aliquid fugiat sint ea!</p>    
                </div>    
                <div class="mt-6">
                    <p class="mt-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit adipisci exercitationem quam ex id tenetur esse sint soluta, architecto earum consequuntur labore minus asperiores optio! Et aliquid fugiat sint ea!</p>    
                </div> 
                <div class="mt-6">
                    <p class="mt-4 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit adipisci exercitationem quam ex id tenetur esse sint soluta, architecto earum consequuntur labore minus asperiores optio! Et aliquid fugiat sint ea!</p>    
                </div>    
            </div>
            
        </div>
    </div>
</section>
<section>
    <?php if (!isset($_SESSION['loggedin'])): ?>
        <div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
						style="background-image: url('https://source.unsplash.com/oWTW-jNGl9I/600x800')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
			
						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded">
							<div class="mb-4">							
                                <h3 class="pt-4 mb-2 text-2xl">Sign in to leave a comment</h3>
                                
								<label class="block mb-2 text-sm font-bold text-gray-700" for="username">
									Username
								</label>
								<input
									class="w-full mb-4 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="username"
									type="text"
									placeholder="Enter username..."
								/>
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full mb-4 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="email"
									placeholder="Enter Email Address..."
								/>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"								
                                    type="submit"
                                    value="SIGN IN"
								/>

							<hr class="mb-6 border-t" />
						</form>
                        <div class="px-8 mb-4 text-center">
                            <h3 class="pt-4 mb-2 text-2xl">Get involved</h3>
                            <p class="mb-4 text-sm text-gray-700"> Sign up today to get access to early bird tickets</p>
                            <button class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">SIGN UP</button>
                    </div>
					</div>
                   
				</div>
			</div>
		</div>        
        <?php else: ?>
        <div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
						style="background-image: url('https://source.unsplash.com/oWTW-jNGl9I/600x800')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
						<div class="px-8 mb-4 text-center">
							<h3 class="pt-4 mb-2 text-2xl">Leave a comment</h3>
							<p class="mb-4 text-sm text-gray-700">
								Your post will be visible once it as been approved by our admin
							</p>
						</div>
						<div class="max-w-2xl mx-auto">

	<form>
    <div class="mb-4 w-full bg-gray-50 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
        <div class="flex justify-between items-center py-2 px-3 border-b dark:border-gray-600">
            <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x dark:divide-gray-600"> 
                <div class="flex flex-wrap items-center space-x-1 sm:pl-4">
                <p class="mb-4 text-sm text-gray-700">Leave a comment</p>
                </div>
            </div>
        </div>
        <div class="py-2 px-4 bg-white rounded-b-lg dark:bg-gray-800">
            <label for="editor" class="sr-only"></label>
            <textarea id="editor" rows="8" class="block px-0 w-full text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Add your comment" required></textarea>
        </div>
    </div>
    <button type="submit" class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
        Comment
    </button>
    </form>

</div>
					</div>
				</div>
			</div>
		</div>
        <?php endif ?>
</section>
<!-- Comments component -->
<div class="p-8">
    <div class="bg-white p-4 rounded-lg shadow-xl py-8 mt-12">
        <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">Comments</h4>
        <?php if (!isset($_SESSION['loggedin'])): ?>
            <p class="text-center text-gray-600 text-sm mt-2">Sign in to leave a comment</p>
            <?php endif ?>
        <div class="space-y-12 px-2 xl:px-16 mt-12">
            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Lorem ipsum dolor sit amet?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>
    
            <div class="mt-4 flex">
                <div>
                    <div class="flex items-center h-16 border-l-4 border-blue-600">
                        <span class="text-4xl text-blue-600 px-4">Q.</span>
                    </div>
                    <div class="flex items-center h-16 border-l-4 border-gray-400">
                        <span class="text-4xl text-gray-400 px-4">A.</span>
                    </div>
                </div>
                <div>
                    <div class="flex items-center h-16">
                        <span class="text-lg text-blue-600 font-bold">Impedit iusto vitae dolorum, nostrum fugit?</span>
                    </div>
                    <div class="flex items-center py-2">
                        <span class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, dignissimos. Neque eos, dignissimos provident reiciendis debitis repudiandae commodi perferendis et itaque, similique fugiat cumque impedit iusto vitae dolorum. Nostrum, fugit!</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include '../components/footer.php';
?>