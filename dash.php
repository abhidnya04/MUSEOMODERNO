<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
    <style>
        #head{
            color: white;
        }
    </style>
</head>
<body>
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <img id="logo" src="img/logo.png" alt="" >
            <span class="ml-3 text-xl">Museo Moderno</span>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-white" href="home.php">Home</a>
            <a class="mr-5 hover:text-white" href="about.php">About</a>
            <a class="mr-5 hover:text-white" href="gallery.php">Gallery</a>
            <a class="mr-5 hover:text-white" href="events.php">Events</a>
            <a class="mr-5 hover:text-white" href="contact.php">Contact</a>
          </nav>
          <a class="mr-5 hover:text-white" href="login.php">
            <button class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Login
            </button>
          </a>
        </div>
      </header>

      <div class="search-container">
        <h1 id="head">Search for Artwork</h1>
       <div> <input type="text" class="search-input" placeholder="Enter Artwork ID"></div>
       <div> <button class="search-button">Search</button></div>
    </div>
    </div>

</body>
</html>