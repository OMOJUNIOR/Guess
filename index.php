<!-- header -->
<?php include ("css/header.php"); ?>  <!-- header styling or css-->
<body class="bg-gray-200">

<!-- Game title starts here-->
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="gimage/guess2.jpeg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Guessing Game</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Start by guessing with numbers between 1 and 100 </a>
      </p>
        
<!-- Game title ends here-->
    </div>
  <!-- Form starts here -->
    <form class="mt-8 space-y-6 " method="post" action="result.php">
    <div class="rounded-md shadow-sm -space-y-px">    
  <input type="number" name="user_input" placeholder="enter number here" class= "appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required
  oninvalid="this.setCustomValidity('This field should not be empty')"
  oninput="this.setCustomValidity('')"/>
  </div>
 <!-- hint javascript code starts here-->
  <div x-data="{ open: false } " class="flex items-center justify-between  text-sm">  
    
    <a x-on:click="open = ! open" href="#" class="font-medium text-red-600 hover:text-indigo-500">Get hint !</a>
    <span x-show="open"  x-transition.duration.500ms class="bg-yellow-300 text-red-600 border border-slate-500 rounded-auto" >
       In this game you will <br>be guessing numbers <br>
       that will be automatically <br> generated by our system <br>
       if you get it right you will<br> be taken to another level 
       </span>
       <!-- hint javascript code ends here-->
</div>


  
  <button type="submit" name="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Guess

      </button>
</div>
    </form>
    <!-- form code ends here-->
    </div>
    <!-- Footer include -->
    <?php include ("css/footer.php"); ?>

</body>
</html>