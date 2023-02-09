<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbarLoggedUser.php';

require_once '../src/controllers/UserController.php';

$user = new Users();
$idUser = $_SESSION['id_user'];
$userData = $user->readUserData("WHERE id_user='$idUser'");

?>
<div class="flex items-center justify-center p-12">
  <div class="mx-auto w-full max-w-[550px]">
    <form id="formChangeUser" action="<?php echo BASE_URL . '/src/funcs/updateUser.php';?>" method="POST">
        <div class="flex space-y-5 flex-col items-center py-7">
            <img class="h-28 w-28 rounded-full" src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe"
                alt="User">
        </div>
      <div class="mb-5">
        <label
          for="firstName"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          First Name
        </label>
        <input
          type="text"
          name="first-name"
          id="firstName"
          placeholder="First Name"
          value= "<?php echo $userData['first_name'];?>"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
      <label
          for="lastName"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Last Name
        </label>
        <input
          type="text"
          name="last-name"
          id="lastName"
          placeholder="Last Name"
          value = "<?php echo $userData['last_name'];?>"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
      <label
          for="password"
          class="mb-3 block text-base font-medium text-[#07074D]"
        >
          Password
        </label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="********"
          class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        />
      </div>
      <div class="mb-5">
        <label
          for="favCoin"
          class="mb-3 block text-base font-medium text-[#07074D]"
          required
        >
          Favorite Coin
        </label>
        <select
          name="favorite-coin"
          id="favCoin"
          class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
        >
        <option value='BTC' selected>BTC</option>
        <option value="ETH">ETH</option>
        <option value="LUN">LUNA</option>
        <option value="DOGE">DOGE</option>
    </select>
      </div>
      <div>
        <a
          class="hover:shadow-form rounded-md bg-red-500 py-3 px-8 text-base font-semibold text-white outline-none" id="btnDeleteUser">
          Delete
</a>
        
        <button
          class="hover:shadow-form rounded-md bg-[#6A64F1] ml-5 py-3 px-7 text-base font-semibold text-white outline-none" id="btnSubmitChanges">
          Submit
        </button>
        
      </div>
    </form>
  </div>
</div>
<?php
    include_once BASE_PATH.'/src/templates/components/footer.html';
?>
<script src="<?php echo BASE_URL;?>/src/js/changeProfile.js"></script>
<script src="<?php echo BASE_URL;?>/src/js/navbar.js"></script>