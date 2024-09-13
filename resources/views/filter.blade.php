@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row">
      <!-- Filter Sidebar -->
      <aside class="w-full md:w-1/4 mb-8 md:mb-0">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Filter By</h2>
  
        <!-- Category Filter -->
        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Category</h3>
          <ul class="space-y-2">
            <li>
              <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox text-blue-600">
                <span class="ml-2 text-gray-700">Programming</span>
              </label>
            </li>
            <li>
              <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox text-blue-600">
                <span class="ml-2 text-gray-700">Design</span>
              </label>
            </li>
            <li>
              <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox text-blue-600">
                <span class="ml-2 text-gray-700">Marketing</span>
              </label>
            </li>
            <li>
              <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox text-blue-600">
                <span class="ml-2 text-gray-700">Science</span>
              </label>
            </li>
          </ul>
        </div>
  
        <!-- Price Filter -->
        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Price Range</h3>
          <input type="range" class="w-full" min="0" max="1000" step="10">
          <div class="flex justify-between text-gray-600 text-sm">
            <span>$0</span>
            <span>$1000+</span>
          </div>
        </div>
  
        <!-- Rating Filter -->
        <div class="mb-6">
          <h3 class="text-lg font-semibold text-gray-700 mb-2">Rating</h3>
          <ul class="space-y-2">
            <li>
              <label class="inline-flex items-center">
                <input type="radio" name="rating" class="form-radio text-blue-600">
                <span class="ml-2 text-gray-700">5 Stars</span>
              </label>
            </li>
            <li>
              <label class="inline-flex items-center">
                <input type="radio" name="rating" class="form-radio text-blue-600">
                <span class="ml-2 text-gray-700">4 Stars & Above</span>
              </label>
            </li>
            <li>
              <label class="inline-flex items-center">
                <input type="radio" name="rating" class="form-radio text-blue-600">
                <span class="ml-2 text-gray-700">3 Stars & Above</span>
              </label>
            </li>
          </ul>
        </div>
      </aside>
  
      <!-- Filtered Results Section -->
      <div class="w-full md:w-3/4">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Results</h2>
  
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Example Post Card -->
          <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300" alt="Result 1">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Mastering JavaScript Promises</h3>
              <p class="text-gray-600 mb-4">Learn how to handle asynchronous operations effectively with JavaScript Promises.</p>
              <a href="#post1" class="text-blue-600 hover:underline">Read More</a>
            </div>
          </div>
  
          <!-- Add more result cards here -->
          <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300" alt="Result 2">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Designing with CSS Grid</h3>
              <p class="text-gray-600 mb-4">A complete guide to mastering CSS Grid for modern web layouts.</p>
              <a href="#post2" class="text-blue-600 hover:underline">Read More</a>
            </div>
          </div>
  
          <div class="bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300" alt="Result 3">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800 mb-2">Digital Marketing Strategies</h3>
              <p class="text-gray-600 mb-4">Explore the latest trends in digital marketing to grow your business online.</p>
              <a href="#post3" class="text-blue-600 hover:underline">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection