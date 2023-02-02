<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
		<a class="text-3xl font-bold leading-none text-maroon" href="#">
            <img width="50px"src="../img/logo.png">
		</a>
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-maroon p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm text-gray-400 hover:text-maroon" href="#">Home</a></li>
			
			<li><a class="text-sm text-maroon font-bold" href="#">Buy</a></li>
			
			<li><a class="text-sm text-gray-400 hover:text-maroon" href="#">Sell</a></li>
		</ul>
		<div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
      		<ul class="flex flex-col p-4 mt-4 rounded">
				<li class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-yellow rounded-full transition duration-200">
					<button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-700 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent"><img src="../img/avatarUser.png" width="30px"> <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
					<!-- Dropdown menu -->
					<div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
						<ul class="py-2 text-sm text-gray-700 bg-yellow transition duration-200" aria-labelledby="dropdownLargeButton">
							<li>
								<a href="#" class="block px-4 py-2 transition duration-200 hover:bg-maroon hover:text-white">Dashboard</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 transition duration-200 hover:bg-maroon hover:text-white">Settings</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 transition duration-200 hover:bg-maroon hover:text-white">Sign Out</a>
							</li>
						</ul>
        			</div>
				</li>
			</ul>
		</div>
		</div>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img width="50px"src="../img/logo.png">		
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-maroon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yellow hover:text-maroon rounded" href="#">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yellow hover:text-maroon rounded" href="#">Buy</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yellow hover:text-maroon rounded" href="#">Sell</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-white hover:bg-maroon hover:text-white rounded-xl mobile-navbar__button--settings" href="#">Settings</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-maroon font-semibold bg-yellow hover:bg-maroon hover:text-white rounded-xl mobile-navbar__button--logout" href="#">Log Out</a>
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2023</span>
				</p>
			</div>
		</nav>
	</div>

