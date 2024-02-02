@extends('recettes.layout')
@section('content')

<div id="form" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 duration-300">
  <form action="{{ url('editRecette/'.$recette->id) }}" method="post" enctype="multipart/form-data" class="w-[700px] mx-auto bg-gray-700 py-10 ">
    @csrf <!-- Add this to include the CSRF token -->
    
    <div class="flex mr-9 mb-9 justify-end">
      <a href="/recettes"><svg  id="closeForm" class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
      </svg></a>
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
            @foreach ($categories as $categorie )
            <option value="{{ $categorie->id }}"> {{ $categorie->name }} </option>
            @endforeach
        </select>
      </div>
    
    </div>
    
    <div class="flex justify-center">
      <button type="submit" class="text-black bg-gray-200 hover:bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </div>
    </form>
    </div>
    @endsection

