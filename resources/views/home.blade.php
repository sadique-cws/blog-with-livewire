@extends('layout')

@section('content')
    <div class="flex flex-1 px-[10%] mt-10">
        <div class="w-3/12">
            <aside class="w-64 bg-gray-100 h-full p-6">
                <h2 class="text-xl font-bold text-gray-700 mb-4">Categories</h2>
                <ul class="space-y-2">
                  <li>
                    <a href="#programming" class="flex items-center p-3 bg-white rounded-lg shadow hover:bg-blue-100 transition">
                      <span class="text-blue-600 text-lg font-semibold">Programming</span>
                    </a>
                  </li>
                  <li>
                    <a href="#design" class="flex items-center p-3 bg-white rounded-lg shadow hover:bg-blue-100 transition">
                      <span class="text-blue-600 text-lg font-semibold">Design</span>
                    </a>
                  </li>
                  <li>
                    <a href="#marketing" class="flex items-center p-3 bg-white rounded-lg shadow hover:bg-blue-100 transition">
                      <span class="text-blue-600 text-lg font-semibold">Marketing</span>
                    </a>
                  </li>
                  <li>
                    <a href="#science" class="flex items-center p-3 bg-white rounded-lg shadow hover:bg-blue-100 transition">
                      <span class="text-blue-600 text-lg font-semibold">Science</span>
                    </a>
                  </li>
                  <li>
                    <a href="#math" class="flex items-center p-3 bg-white rounded-lg shadow hover:bg-blue-100 transition">
                      <span class="text-blue-600 text-lg font-semibold">Mathematics</span>
                    </a>
                  </li>
                  <li>
                    <a href="#history" class="flex items-center p-3 bg-white rounded-lg shadow hover:bg-blue-100 transition">
                      <span class="text-blue-600 text-lg font-semibold">History</span>
                    </a>
                  </li>
                </ul>
              </aside>
              
        </div>
        <div class="w-9/12">
            <div class="grid grid-cols-3 gap-3">
                <div class=" bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
                    <!-- Post Image -->
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/400x300" alt="Post Image">
                  
                    <!-- Post Content -->
                    <div class="p-6">
                      <!-- Post Title -->
                      <h2 class="text-2xl font-bold text-gray-800 mb-2">
                        How to Learn JavaScript Effectively
                      </h2>
                  
                      <!-- Post Description -->
                      <p class="text-gray-600 text-sm mb-4">
                        JavaScript is a powerful language, but learning it can be challenging. This guide will help you understand the basics and start building projects in no time.
                      </p>
                  
                      <!-- Read More Button -->
                      <a href="{{route('post.show', 234543)}}" class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-500">
                        Read More
                      </a>
                    </div>
                  </div>
                  
                </div>
            </div>
    </div>
@endsection