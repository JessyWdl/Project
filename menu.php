<?php session_start() ?>

<head>

</head>

<nav class="flex items-center justify-between flex-wrap bg-darkblue-500 p-6">
    <div class="flex cursor-pointer items-center flex-shrink-0 text-darkblue mr-6">
        <a href = "http://localhost/projetphp/Project/">
            <img src="http://localhost/projetphp/Project/logo.png"  alt="" width="150" height="">
        </a>
        <span class="font-semibold text-xl tracking-tight"></span>
    </div>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-black-200 border-black-400 hover:text-darkblue hover:border-darkblue">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>
    <div class="w-full block flexlg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex">
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-darkblue mr-4">
                Docs
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-darkblue mr-4">
                Examples
            </a>
            <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black-200 hover:text-darkblue mr-12">
                Blog
            </a>

            <?php
              if (isset($_SESSION['User_Prenom'])){
                echo $_SESSION['User_Prenom'];
              }
              else{
            ?>
            <div>                          
                <button class="modal-open bg-transparent border border-gray-500 hover:border-blue-500 text-gray-500 hover:text-blue-500 font-bold py-2 px-4 rounded-full">Sign in</button>
            <?php
              }
            ?>

            <?php
              if (isset($_SESSION['User_Type']) && $_SESSION['User_Type']==2) {
            ?>
              <li> <a href="../admin/adm_index.php" target="_blank">Administration</a> </li>
            <?php
              }
            ?>

            <?php
              if (isset($_SESSION['User_Prenom'])) {
            ?>
            <li> <a href="../logout/logout.php">Deconnexion</a> </li>
            <?php
              }
            ?>

            <div class="flex flex-row-reverse mr-6 my-2">
                <div class="relative text-gray-600">
                  <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                  <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                      <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                          <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                      </svg>
                  </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ---------------------------------------------------------------------------- -->