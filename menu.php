<?php

  session_start()

?>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">

	<nav class="flex items-center justify-between flex-wrap bg-white p-1 w-full z-10 top-0">
		<div class="flex items-center flex-shrink-0 text-white mr-6">
			<a class="text-white no-underline hover:text-white hover:no-underline" href="index.php">
        <span class=""><i class="em em-grinning"></i>
        <img src="logo.png"  alt="150" width="150" height="25">
      </span>
			</a>
		</div>

		<div class="block lg:hidden">
			<button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600">
				<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
			</button>
		</div>

		<div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block pt-6 lg:pt-0" id="nav-content">
			<ul class="list-reset lg:flex justify-end flex-1 items-center">
      <li class="mr-3">
        <a class="inline-block py-1 px-4 text-black no-underline hover:text-blue-500 hover:text-underline" href="recettes.php">Recettes</a>
      </li>
      <li class="mr-3">
        <div class="flex flex-row mr-6 my-2">
          <div class="relative text-gray-600 pl-4">
          <input type="search" name="search" placeholder="Recherche..." class="bg-white  rounded-full text-lg focus:outline-none">
            <button type="submit" class="absolute right-0 top-0 ">
              <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
              </svg>
            </button>
          </div>
        </div>
      </li>
      <?php
            if (isset($_SESSION['User_Prenom'])){
              echo $_SESSION['User_Prenom'];
            }
            else{
          ?>
          <div class="px-4">                          
              <button class="modal-open bg-transparent border border-gray-500 hover:border-blue-500 text-gray-500 hover:text-blue-500 font-bold py-2 px-4 rounded-full">Sign in</button>
          <?php
            }
          ?>
      <?php
          if (isset($_SESSION['User_Type']) && $_SESSION['User_Type']==2) {
        ?>
      <li class="mr-3">
        <a class="inline-block text-black no-underline hover:text-blue-500 hover:text-underline py-2 px-4" href="admin/adm_index.php">Administration</a>
      </li>
      <?php
            }
          ?>
      <?php
        if (isset($_SESSION['User_Prenom'])) {
      ?>
      <li class="mr-3">
        <a class="inline-block text-black no-underline hover:text-blue-500 hover:text-underline py-2 px-4" href="logout.php">Deconnexion</a>
      </li>
      <?php
            }
          ?>
    </ul>
  </div>
</nav>


	<!--Container-->
	<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-18">

	</div>

	<script>
		//Javascript to toggle the menu
		document.getElementById('nav-toggle').onclick = function(){
		document.getElementById("nav-content").classList.toggle("hidden");
		}
	</script>

</body>
