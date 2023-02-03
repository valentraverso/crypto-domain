<?php
include BASE_PATH.'/src/templates/components/head.php';
include BASE_PATH.'/src/templates/components/navbar.php';
?>
<div class="flex items-center justify-center p-12">
  <div class="mx-auto w-full max-w-[550px]">
    <form action="https://formbold.com/s/FORM_ID" method="POST">
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
        <button
          class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
        >
          Submit
        </button>
      </div>
    </form>
  </div>
</div>
<?php
    include_once BASE_PATH.'/src/templates/components/footer.html';
?>