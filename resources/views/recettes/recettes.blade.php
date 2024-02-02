@extends('recettes.layout')
@section('content')

<div class=" flex justify-end mt-10 mr-10 mb-5 ">
    <button class="bg-gray-800 text-white  px-2 py-2 rounded-lg " id="btn" >Ajouter Une Recette </button>
  </div>


<div id="form" class="absolute w-full h-full inset-0 bg-opacity-50 backdrop-filter backdrop-blur-md flex justify-center items-center bg-gray-500 scale-0 duration-300">
<form action="/recettes" method="post" enctype="multipart/form-data" class="w-[700px] mx-auto bg-gray-700 py-10 ">
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

<div class="flex justify-center gap-8">


@foreach ($recettes as $recette )


<div class="flex flex-col  rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-gray-800 md:max-w-xl md:flex-row">
  <img
    class="h-64 w-42 rounded-t-lg object-cover  md:!rounded-none md:!rounded-l-lg"
    src="https://tecdn.b-cdn.net/wp-content/uploads/2020/06/vertical.jpg"
    alt="" />
  <div class="flex flex-col justify-start w-[400px] p-6">
    <h5
      class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
      {{ $recette->name }}
    </h5>
    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
      {{ $recette->description }}
    </p>
    <p class="text-s text-neutral-500 dark:text-neutral-300">
      {{ $recette->ingredients }}
    </p>
  </div>

  <div class="flex gap-4 items-end mb-3 mr-5 ">
    <a href="" class="btn btn-danger flex flex-end text-red-700  btn-sm">Delete</a>
  <a href="" class="btn btn-danger flex flex-end text-blue-700  btn-sm">Edit</a>

  </div>

</div>

        @endforeach

      </div>
<script src="{{ url("js/script.js") }}"></script> 

@endsection