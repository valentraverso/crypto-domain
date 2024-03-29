<nav class="relative px-8 py-8 flex justify-between items-center bg-white">
		<a class="text-3xl font-bold leading-none text-maroon" href="<?php echo BASE_URL; ?>">
            <img width="50px"src="<?php echo BASE_URL; ?>/img/logo.png">
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
			<li><a class="text-sm text-gray-400 hover:text-maroon" href="<?php echo BASE_URL; ?>">Home</a></li>
			
			<li><a class="text-sm font-bold text-maroon hover:text-maroon" href="<?php echo BASE_URL.'/user/login.php'; ?>">Buy</a></li>
			
			<li><a class="text-sm text-gray-400 hover:text-maroon" href="<?php echo BASE_URL.'/user/login.php'; ?>">Sell</a></li>
		</ul>
		<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-yellow text-sm text-maroon font-bold  rounded-xl transition duration-200" href="<?php echo BASE_URL.'/user/login.php'; ?>">Log In</a>
		<a class="hidden lg:inline-block py-2 px-6 bg-yellow hover:bg-maroon hover:text-white text-sm text-maroon font-bold rounded-xl transition duration-200" href="<?php echo BASE_URL.'/user/sign-up.php'; ?>">Sign up</a>
	</nav>
	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img width="50px"src="<?php echo BASE_URL; ?>/img/logo.png">		
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
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yellow hover:text-maroon rounded" href="<?php echo BASE_URL; ?>">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yellow hover:text-maroon rounded" href="<?php echo BASE_URL.'/user/buy-coins.php'; ?>">Buy</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-yellow hover:text-maroon rounded" href="<?php echo BASE_URL.'/user/sell-coins.php'; ?>">Sell</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-white hover:bg-maroon hover:text-white rounded-xl" href="<?php echo BASE_URL.'/user/login.php'; ?>">Log in</a>
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-maroon font-semibold bg-yellow hover:bg-maroon hover:text-white rounded-xl" href="<?php echo BASE_URL.'/user/sign-up.php'; ?>">Sign Up</a>
				</div>
				<p class="my-4 text-xs text-center text-gray-400">
					<span>Copyright © 2023</span>
				</p>
			</div>
		</nav>
	</div>

