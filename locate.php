<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Search</title>
        <style>
          .topright {
            position: absolute;
            top: 8px;
            right: 16px;
            font-size: 18px;
          }
          .toprightless{
            position: absolute;
            top: 40px;
            right: 16px;
            font-size: 18px;
          }
          </style>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<link rel="stylesheet" href="admn.css">
</head>
<body>
  
  <header class="text-gray-400 bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <img id="logo" src="img/logo.png" alt="" >
        <span class="ml-3 text-xl">Museo Moderno</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

      </nav>
          <a class="mr-5 hover:text-white" href="login.php">
            <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Logout
            </button>
          </a>
        </div>
      </header>


<div class="containe">
<div class="g">
      <center>
      <h1 id="search">
       Locate Artwork <br>
      </h1>
      </center>
      </div>
      
    <div class="2">
      <center>
        <form id="search2" action="https://google.com/search">
          <input type="text" name="q" size="50px" id="s1" placeholder="Enter Artwork ID"><br>
          <br>
          <input type="submit" id="butsearch"  value="Search" size="40px" >
</center></div>

</div>
</form>

</body>
</html>