<?php 
    session_start(); 
    include '../../auth/dbConfig.php';
    include '../../../components/header.php'; 
    include '../../../components/navigation.php'; 

    $users = $conn->prepare('SELECT 
        u.id,
        u.username,
        u.email,
        u.active

       FROM users u

       
      ');
$users->execute();
$users->store_result();
$users->bind_result($userID, $userName, $userEmail, $userActive);
?>

<h1>USERS</h1>  
<!-- filter function -->
<input type="text" id="searchInput" placeholder="filter User...">

<!--table of users  -->
<table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">ID</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">STATE</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">USERNAME</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900">EMAIL</th>
        <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100 border-t border-gray-100" id="names">
    <?php while ($users->fetch()): ?>
        <tr class="hover:bg-gray-50">
        <td class="px-6 py-4"><?= $userID ?></td>
        <td class="px-6 py-4">
        <?php if ($userActive == 1): ?>
          <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
            Active
          </span>
          <?php else: ?>  

          <span class="inline-flex items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
            <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
            Inactive
          </span>
          <?php endif ?>

        </td>
        <td class="px-6 py-4"><?= $userName ?></td>
      
          <td class="px-6 py-4"><?= $userEmail ?></td>
        
        <td class="px-6 py-4">
          <div class="flex justify-end gap-4">
            <a x-data="{ tooltip: 'Delete' }" href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
                id="delete"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                />
              </svg>
            </a>
            <a x-data="{ tooltip: 'Edite' }" onclick="window.location.href='./edit.php';">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                />
              </svg>
            </a>
          </div>
        </td>
      </tr>
    
      <?php endwhile; ?>
    </tbody>
  </table>
  <script src="<?= ROOT_DIR ?>assets/js/filter.js"></script>

  <!-- delete popup -->
  <div class="min-w-screen h-screen animated fadeIn faster fixed left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  style="background-image: url(https://images.unsplash.com/photo-1623600989906-6aae5aa131d4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1582&q=80);" id="delete-modal">
   	<div class="absolute bg-black opacity-80 inset-0 z-0"></div>
    <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
      <!--content-->
      <div class="">
        <!--body-->
        <div class="text-center p-5 flex-auto justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
</svg>
                        <h2 class="text-xl font-bold py-4 ">Are you sure?</h3>
                        <p class="text-sm text-gray-500 px-8">Do you really want to delete your account?
                This process cannot be undone</p>    
        </div>
        <!--footer-->
        <div class="p-3  mt-2 text-center space-x-4 md:block">
            <button class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100">
                Cancel
            </button>
            <button class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button>
        </div>
      </div>
    </div>
  </div>
  <script>
const delete = () => {
const deleteBtn = document.getElementById('delete');
  deleteBtn.addEventListener('click', function handleClick() {
    deleteBtn.classList.add('delete-show');
  });
}
    </script>
  <?php include '../../../components/footer.php'; ?>