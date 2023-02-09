<div class="container max-w-lg m-auto min-h-max my-24">
  <div class="flex justify-around my-12">
    <button id="btcBtn" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
      <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
          BTC
      </span>
    </button>
    <button id="ethBtn" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-500 to-pink-500 group-hover:from-purple-500 group-hover:to-pink-500 hover:text-white  focus:ring-4 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
      <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white  rounded-md group-hover:bg-opacity-0">
          ETH
      </span>
    </button>
    <button id="dogeBtn" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
      <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
          DOGE
      </span>
    </button>
    <button id="lunBtn" class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-teal-300 to-lime-300 group-hover:from-teal-300 group-hover:to-lime-300  dark:hover:text-white focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-lime-800">
      <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">
          LUN
      </span>
    </button>
  </div>
  <div id="chart">  
    <div id="beforeCanvas" class="shadow-lg rounded-lg overflow-hidden">
        <div class="py-3 px-5 bg-gray-50 text-center text-gray-500">
          <strong class="text-gray-800">Weekly Historic Highest</strong>
          <p id="chartHeader" class="text-gray-800 text-center"></p>
        </div>
        <canvas class="m-8" id="chartLine"></canvas>
    </div>
  </div>
</div>