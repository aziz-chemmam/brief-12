<!DOCTYPE html>
<html>
<head>
    <title>Carnet</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body>

    <div class="container">
        
        @yield('content')
    </div> 
    
    <nav x-data="{ isOpen: false }" class="relative bg-white shadow dark:bg-gray-800">
      <div class="container px-6 py-3 mx-auto md:flex">
          <div class="flex items-center justify-between">
              <a href="#">
                  <img class="w-[200px] h-[60px] " src="{{ url("image/recipes1.png") }}" alt="">
              </a>
  
              <!-- Mobile menu button -->
              <div class="flex lg:hidden">
                  <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                      <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                      </svg>
              
                      <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </button>
              </div>
          </div>
  
          <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
          <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
              <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10 md:py-0">
                  <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 md:mx-2">Categories</a>
                  <a href="#" class="px-2.5 py-2 text-gray-700 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 md:mx-2">Recettes</a>
              </div>
  
              <div class="relative mt-4 md:mt-0">
                  <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                      <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                          <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                  </span>
  
                  <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-lg dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40 focus:ring-blue-300" placeholder="Search">
              </div>
          </div>
      </div>
  </nav>

  <div class="flex justify-end mt-10 mr-10 ">
    <button class="bg-gray-800 text-white px-2 py-2 rounded-lg " id="btn" >Ajouter Une Recette </button>
  </div>

  <div class="flex max-w-md mt-24 ml-44 overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <div class="w-1/3 bg-cover" style="background-image: url('https://images.unsplash.com/photo-1494726161322-5360d4d0eeae?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80')"></div>

    <div class="w-2/3 p-4 md:p-4">
        <h1 class="text-xl font-bold text-gray-800 dark:text-white">Backpack</h1>

        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit In odit</p>

        <div class="flex mt-2 item-center">
            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
            </svg>

            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
            </svg>

            <svg class="w-5 h-5 text-gray-700 fill-current dark:text-gray-300" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
            </svg>

            <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
            </svg>

            <svg class="w-5 h-5 text-gray-500 fill-current" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" />
            </svg>
        </div>

        <div class="flex justify-between mt-3 item-center">
            <h1 class="text-lg font-bold text-gray-700 dark:text-gray-200 md:text-xl">$220</h1>
            <button class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Add to Cart</button>
        </div>
    </div>
</div>

<div id="form" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 scale-0 duration-300">
    <form action="/create" method="post" enctype="multipart/form-data" class="w-[700px] mx-auto bg-gray-700 py-10 ">
      @csrf <!-- Add this to include the CSRF token -->

      <div class="flex mr-9 mb-9 justify-end">
          <svg id="closeForm" class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
          </svg>
      </div>

      <div class="flex justify-center">
          <h1 class="text-white font-bold text-2xl">Add Recipe</h1>
      </div>

      <div class="relative z-0 w-full ml-44 mt-5 mb-5 group">
          <input type="text" name="name" id="name" class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
          <label for="name" class="peer-focus:font-medium absolute ml-[20%] text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white font-bold peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
      </div>

      <div class="relative z-0 w-full mb-5 ml-44 group">
          <input type="text" name="description" id="description" class="block py-2.5 px-0 w-96  text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
          <label for="description" class="peer-focus:font-medium absolute ml-[20%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
      </div>
      <div class="relative z-0 w-full ml-44 mb-5 group">
          <input type="text" name="ingredients" id="ingredients" class="block py-2.5 px-0 w-96   text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-white dark:focus:border-orange-500 focus:outline-none focus:ring-0 focus:border-orange-600 peer" placeholder=" " required />
          <label for="ingredients	" class="peer-focus:font-medium absolute ml-[20%]  text-sm text-white duration-300 transform -translate-y-2 scale-75 top-2 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white font-bold peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ingredients	</label>
      </div>

      <div class="relative z-0 w-full ml-44 mb-5 group">
          <label class="block mb-2 text-sm ml-[20%]  font-bold text-white" for="image">Upload file</label>
          <input name="image" class="bg-transparent border-0 border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" aria-describedby="user_avatar_help" type="file">
      </div>

      <div class="grid md:grid-cols-2 ml-[37%] md:gap-6">
          <div class="relative z-0 w-full mb-5 group">
              <label for="categoryId" class="block mb-2 ml-[20%]  text-sm font-bold text-white">Select Category</label>
              <select id="categoryId" name="categoryId" class="bg-transparent border-0 border-b-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-white dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  {{-- @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach --}}
              </select>
          </div>

      </div>

      <div class="flex justify-center">
          <button type="submit" class="text-black bg-gray-200 hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
      </div>
  </form>
</div>
<script src="{{ url("js/script.js") }}"></script>
</html>