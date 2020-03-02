<?php include __DIR__ . '/../header.php' ?>

<body class="bg-darkblue font-sans leading-normal tracking-normal">
  <div class="carousel relative shadow-2xl bg-darkblue">
    <div class="carousel-inner relative overflow-hidden w-full">
    <!--Slide 1-->
      <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
      <div class="carousel-item absolute opacity-0" style="height:65vh;">
        <div class="block h-full w-full bg-indigo-500 text-darkblue text-5xl text-center">
          <img src="../2.jpg" class="w-m" alt="">
        </div>
      </div>
      <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-darkblue rounded-full bg-darkblue hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
      <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-darkblue rounded-full bg-darkblue hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

<!--Slide 2-->
      <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:65vh;">
          <div class="block h-full w-full bg-orange-500 text-darkblue text-5xl text-center"></div>
        </div>
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-darkblue rounded-full bg-darkblue hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-darkblue rounded-full bg-darkblue hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 

<!--Slide 3-->
      <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0" style="height:65vh;">
          <div class="block h-full w-full bg-green-500 text-darkblue text-5xl text-center"></div>
        </div>
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-darkblue rounded-full bg-darkblue hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-darkblue rounded-full bg-darkblue hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

<!-- Add additional indicators for each slide-->
      <ol class="carousel-indicators">
        <li class="inline-block mr-3">
          <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-darkblue hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-darkblue hover:text-blue-700">•</label>
        </li>
        <li class="inline-block mr-3">
          <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-darkblue hover:text-blue-700">•</label>
        </li>
      </ol>
    </div>
  </div>
<!-- ----------------------------------------- -->
<h1> Les recettes du moment</h1>
  <main class="py-4">
    <div class="px-4">
      <div class="block md:flex justify-between md:-mx-2">
        <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
          <div class="bg-white rounded-lg overflow-hidden shadow relative">
            <img class="h-56 w-full object-cover object-center" src="../3.jpg" alt="">          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
              Woman standing under blue sky
            </a>
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque porro id commodi quisquam debitis!
            </div>
            <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#something</a>
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sky</a>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-56 w-full object-cover object-center" src="../2.jpg" alt="">          
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
              Woman walking on pathway
            </a>
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure aut quia alias ullam eveniet sunt! Ipsa, sunt. Inventore ipsum sit quasi. Alias quasi officiis blanditiis!
            </div>
              <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#pathway</a>
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#woman</a>
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#walkalone</a>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
        <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-56 w-full object-cover object-center" src="../1.jpg" alt="">
          <div class="p-4 h-auto md:h-40 lg:h-48">
            <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
              Walking through a forest in the afternoon
            </a>
            <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nemo magni saepe cumque error quia quae sint ducimus, maiores doloremque.
            </div>
            <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#forest</a>
              <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#walk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<h1> Les recettes du moment</h1>
  <main class="py-4">
    <div class="px-4">
      <div class="block md:flex justify-between md:-mx-2">
        <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
          <div class="bg-white rounded-lg overflow-hidden shadow relative">
          <img class="h-56 w-full object-cover object-center" src="../5.jpg" alt="">          
            <div class="p-4 h-auto md:h-40 lg:h-48">
              <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
                Woman standing under blue sky
              </a>
              <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quidem blanditiis unde asperiores? Officia amet perspiciatis ad quibusdam incidunt eaque, nobis, eveniet neque porro id commodi quisquam debitis!
              </div>
              <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
                <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#something</a>
                <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#sky</a>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
          <div class="bg-white rounded-lg overflow-hidden shadow relative">
            <img class="h-56 w-full object-cover object-center" src="../6.jpg" alt="">          
          <div class="p-4 h-auto md:h-40 lg:h-48">
          <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
            Woman walking on pathway
          </a>
          <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure aut quia alias ullam eveniet sunt! Ipsa, sunt. Inventore ipsum sit quasi. Alias quasi officiis blanditiis!
          </div>
          <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#pathway</a>
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#woman</a>
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#walkalone</a>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/3 md:mx-2 mb-4 md:mb-0">
      <div class="bg-white rounded-lg overflow-hidden shadow relative">
        <img class="h-56 w-full object-cover object-center" src="../1.jpg" alt="">
        <div class="p-4 h-auto md:h-40 lg:h-48">
          <a href="#" class="block text-blue-500 hover:text-blue-600 font-semibold mb-2 text-lg md:text-base lg:text-lg">
            Walking through a forest in the afternoon
          </a>
          <div class="text-gray-600 text-sm leading-relaxed block md:text-xs lg:text-sm">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi nemo magni saepe cumque error quia quae sint ducimus, maiores doloremque.
          </div>
          <div class="relative mt-2 lg:absolute bottom-0 mb-4 md:hidden lg:block">
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#forest</a>
            <a class="inline bg-gray-300 py-1 px-2 rounded-full text-xs lowercase text-gray-700" href="#">#walk</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include __DIR__ . '/../footer.php' ?>