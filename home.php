<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>MuseoModerno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body background="img/header-bg.jpg" id="homebg">
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

      <div class="container2" >
       <div><h1> Museo Moderno</h1></div>
       <div><p>Exploring the Boundaries of Modern Expression</p></div>
      </div>


      <!-- 
        service area
        opening
        upcoming 
        ongoing
      -->
      <section class="text-gray-400 bg-gray-900 body-font">

          <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
              <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-green-400 mb-5 flex-shrink-0">
              <img src="img/opening.png" alt="">
              </div>
              <div class="flex-grow">
                <h2 class="text-white text-lg title-font font-medium mb-3">Opening Hours</h2>
                <p class="leading-relaxed text-base"> <p>
							  	Mon - Fri: 10.00am to 05.00pm<br>Sat: 12.00pm to 03.00 pm <br>Sunday Closed
							  </p>	</p>
              
              </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
              <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-green-400 mb-5 flex-shrink-0">
                <img src="img/upc2.png" alt="">
              </div>
              <div class="flex-grow">
                <h2 class="text-white text-lg title-font font-medium mb-3">Ongoing Exhibitions</h2>
                <p class="leading-relaxed text-base">Mon - Fri: 10.00am to 05.00pm <br>Sat: 12.00pm to 03.00 pm <br>Sunday Closed</p>

              </div>
            </div>
            <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
              <div class="w-20 h-20 inline-flex items-center justify-center rounded-full bg-gray-800 text-green-400 mb-5 flex-shrink-0">
                <img src="img/ongo.png" alt="" id="ongo">
              </div>
              <div class="flex-grow">
                <h2 class="text-white text-lg title-font font-medium mb-3">Opening Events</h2>
                <p class="leading-relaxed text-base">Mon - Fri: 10.00am to 05.00pm <br>Sat: 12.00pm to 03.00 pm <br>Sunday Closed</p></p>
               
              </div>
            </div>
          </div>
        </div>
      </section>

           <!-- 
        service area
        opening
        upcoming 
        ongoing
      -->

      <!-- quote area 
      quote 
    quote -->

    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <h2 class="sm:text-3xl text-2xl text-white font-medium title-font mb-2 md:w-2/5">"<b>Art</b> gives soul to the universe, <br>
          wings to the <b>mind</b>, flight <br>
          to the <b>imagination</b>".</h2>
        <div class="md:w-3/5 md:pl-6">
          <p class="leading-relaxed text-base">Art is a profound expression of human creativity and emotion, transcending boundaries of time and culture.
             Through various mediums such as painting, sculpture, and music, artists communicate intricate narratives and evoke powerful feelings. Art captivates,
              challenges, and inspires, serving as a mirror reflecting the diverse facets of the human experience.</p>
        </div>
      </div>
    </section>
      <!-- quote area 
      quote 
    quote -->

    <div class="upc_events">
      Upcoming Events
      <!-- <hr style="width: 50%; margin-left: 25%; margin-right: 25%;"> -->
      <hr class="upc" style="margin-left: 40%; margin-right: 40%;">
    </div>

    <!-- upcoming events section  -->



    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
          <img class="object-cover object-center rounded" alt="hero" src="img/exhib1.jpg">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Exhibition 1
            <br class="hidden lg:inline-block">
          </h1>
          <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag.
             Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
          <div class="flex justify-center">
            <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Learn More</button>
           
          </div>
        </div>
      </div>
    </section>




    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Exhibition 2
            <br class="hidden lg:inline-block">
          </h1>
          <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag.
             Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
          <div class="flex justify-center">
            <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Learn More</button>
          </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
          <img class="object-cover object-center rounded" alt="hero" src="img/exhib2.jpg">
        </div>
      </div>
    </section>


    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
          <img class="object-cover object-center rounded" alt="hero" src="img/exhib3.jpg">
        </div>
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
          <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Exhibition 3
            <br class="hidden lg:inline-block">
          </h1>
          <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag.
             Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
          <div class="flex justify-center">
            <button class="inline-flex text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Learn More</button>
           
          </div>
        </div>
      </div>
    </section>

    <!-- upcoming events section  -->


    <!-- gallery  -->

    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Our Art Gallery</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Immerse in Creativity: Explore Our Gallery of Timeless Masterpieces and 
            Contemporary Wonders—Where Art Speaks Louder Than Words.</p>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/g1.jpg">
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hver:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
                <h1 class="title-font text-lg font-medium text-white mb-3">Shooting Stars</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/g2.jpg">
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hovr:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
                <h1 class="title-font text-lg font-medium text-white mb-3">The Catalyzer</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/g3.jpg">
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hovr:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
                <h1 class="title-font text-lg font-medium text-white mb-3">The 400 Blows</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/g4.jpg">
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hovr:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
                <h1 class="title-font text-lg font-medium text-white mb-3">Neptune</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/g5.jpg">
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hovr:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
                <h1 class="title-font text-lg font-medium text-white mb-3">Holden Caulfield</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </div>
          </div>
          <div class="lg:w-1/3 sm:w-1/2 p-4">
            <div class="flex relative">
              <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="img/g6.jpg">
              <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-800 bg-gray-900 opacity-0 hove:opacity-100">
                <h2 class="tracking-widest text-sm title-font font-medium text-green-400 mb-1">THE SUBTITLE</h2>
                <h1 class="title-font text-lg font-medium text-white mb-3">Alper Kamu</h1>
                <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- gallery  -->
    <div class="hrfoot">
    <hr class="foot" style="margin-left: 10%; margin-right: 10%;">
  </div>

<div class="newsletter">
    <section class="text-gray-400 bg-gray-900 body-font relative">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Newsletter</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Stay updated with our monthly Newsletter</p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-400">Name</label>
                <input type="text" id="name" name="name" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-gray-800 bg-opacity-40 rounded border border-gray-700 focus:border-green-500 focus:bg-gray-900 focus:ring-2 focus:ring-green-900 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-full">
              <button class="flex mx-auto text-white bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Subscribe</button>
            </div>
            
          </div>
        </div>
      </div>
    </section>

</div>




    <footer class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
          <img id="footlogo" src="img/logo.png" alt="">
          <span class="ml-3 text-xl">Museo Moderno</span>
        </a>
        <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 Tailblocks —
          <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">@knyttneve</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
          <a class="text-gray-400">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-400">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </footer>


</body>
</html>