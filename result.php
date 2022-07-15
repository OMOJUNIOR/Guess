<?php 
 
// validation
require_once ("include/valid.php");// validation logic as include
// header 
include ("css/header.php"); // header and css styling as include
?>

<body class="bg-gray-200" >
<div class="mx-auto w-full bg-gray-100 flex items-center justify-center " x-data="{ 'showModal': false }" @keydown.escape="showModal = false" x-cloak>

<section class="flex flex-wrap p-4 h-full items-center">

    <button type="button" class="bg-white border border-blue-500 hover:border-indigo-500 text-red-800 hover:text-indigo-500 font-bold py-2 px-4 rounded-full" @click="showModal = true">Warning !</button> <!-- Alpine js-->

    <!--Overlay-->
    <div class="overflow-auto" style="background-color: rgba(0,0,0,0.5)" x-show="showModal" :class="{ 'absolute inset-0 z-10 flex items-center justify-center': showModal }">
        <!--Dialog-->
        <!-- Alpine js-->
        <div class="bg-yellow-100 w-11/12 md:max-w-md mx-auto rounded shadow-lg py-4 text-left text-red-900 px-6" x-show="showModal" @click.away="showModal = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"> >>


        <!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl text-gray-900 font-bold">System Default settings!</p>
					<div class="cursor-pointer z-50" @click="showModal = false"> <!-- Alpine js-->
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
							<path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
						</svg>
					</div>
				</div>

				<!-- content -->
        
          <ul  class="text-gray-700">
				<li>This page will automatically refresh after 15 seconds<br> </li>
				<li class="bg-red-600 text-white">If you try reloading the page to change the result,you will be redirected to the homepage..<br></li>
				<li>The possibility of not getting the accurate prediction is 99%<br></li>
				<li>Click Halt refresh to stop the page from ending session</p>
        </ul>
        

				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2" @click="alert('You have stopped the page from refreshing');">Halt refresh</button> <!-- Alpine js-->
					<button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400" @click="showModal = false">Close</button> <!-- Alpine js-->
				</div>


			</div>
			<!--/Dialog -->
		</div><!-- /Overlay -->

	</section>



</div>

<div class="flex flex-col gap-5 items-center justify-center bg-gray-50 h-auto">

  <!-- Card 1 -->
  <card class="border-green-500 border-2 rounded-xl w-[30rem] py-7 px-5">
    <div class="grid grid-cols-6 gap-3">
      
      <!-- Image -->
      <div class="col-span-2">
        <img src="https://events.duolingo.com/images/why_global.svg" />
      </div>

      <!-- Description -->
      
      <div class="col-span-4">
        
        <p class="text-gray-700 font-bold"> <?= $winhead ?> </p> <!-- backend code-->
        <p class="text-gray-500 mt-4"> <?= $message ?> </p>  <!-- backend code-->
        </div>
      
      

    </div>
  </card>

  <!-- Card 2 -->
  <card class="border-red-400 border-2 rounded-xl w-[30rem] py-7 px-5">
    <div class="grid grid-cols-6 gap-3">
      
      <!-- Description -->
      <div class="col-span-4">
        <p class="text-gray-700 font-bold"><?= $succsTitle ?>  </p> <!-- backend code-->
        <p class="text-gray-500 mt-4"> <?= $success ?> </p> <!-- backend code-->
      </div>

            <!-- Image -->
      <div class="col-span-2">
        <img src="https://events.duolingo.com/images/why_impact.svg" />
      </div>

    </div>
  </card>

  <!-- Card 3 -->
  <card class="border-indigo-500 border-2 rounded-xl w-[30rem] py-7 px-5">
    <div class="grid grid-cols-6 gap-3">
      
      <!-- Image -->
      <div class="col-span-2">
        <img src="https://events.duolingo.com/images/why_access.svg" />
      </div>

      <!-- Description -->
      <div class="col-span-4">
        <p class="text-gray-700 font-bold"> My favorite Qoute </p>
        <p class="text-gray-500 mt-4"> <?= $codeQoute ?></p>  <!-- backend code-->
      </div>

    </div>
  </card>

</div>

<!-- footer -->
<?php include ("css/footer.php"); ?>  <!-- footer css-->
</body>

    
    
    



