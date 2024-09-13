@extends('layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Post Content -->
    <div class="flex flex-col md:flex-row">
      <!-- Main Post Area -->
      <div class="w-full md:w-3/4 pr-0 md:pr-8">
        <!-- Post Image -->
        <img class="w-full h-64 object-cover mb-6" src="https://via.placeholder.com/800x400" alt="Post Image">
  
        <!-- Post Title -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4">How to Learn JavaScript Effectively</h1>
  
        <!-- Post Metadata -->
        <div class="text-gray-600 mb-6">
          <span>Published on September 12, 2024</span> | 
          <span>Author: John Doe</span>
        </div>
  
        <!-- Post Body -->
        <div class="text-lg text-gray-700 leading-relaxed">
          <p>
            JavaScript is one of the most popular programming languages in the world. In this article, we will cover the basics of JavaScript and provide a few tips on how to effectively learn and master the language.
          </p>
          <p class="mt-4">
            Whether you're just starting out or looking to improve your skills, this guide will help you become a better JavaScript developer. We will explore syntax, common patterns, and best practices.
          </p>
          <!-- Add more post content here -->
        </div>
      </div>
  
      <!-- Related Posts Sidebar -->
      <aside class="w-full md:w-1/4 mt-8 md:mt-0">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Related Posts</h2>
        <ul class="space-y-4">
          <li>
            <a href="#post1" class="flex items-start space-x-4 hover:bg-gray-100 p-3 rounded-lg">
              <img src="https://via.placeholder.com/100x100" alt="Related Post 1" class="w-20 h-20 object-cover rounded">
              <div>
                <h3 class="text-lg font-semibold text-gray-700">Understanding JavaScript Promises</h3>
                <p class="text-gray-600 text-sm">Explore the basics of JavaScript Promises and how they handle asynchronous operations.</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#post2" class="flex items-start space-x-4 hover:bg-gray-100 p-3 rounded-lg">
              <img src="https://via.placeholder.com/100x100" alt="Related Post 2" class="w-20 h-20 object-cover rounded">
              <div>
                <h3 class="text-lg font-semibold text-gray-700">Mastering JavaScript ES6 Features</h3>
                <p class="text-gray-600 text-sm">Get familiar with the most important features introduced in JavaScript ES6.</p>
              </div>
            </a>
          </li>
          <li>
            <a href="#post3" class="flex items-start space-x-4 hover:bg-gray-100 p-3 rounded-lg">
              <img src="https://via.placeholder.com/100x100" alt="Related Post 3" class="w-20 h-20 object-cover rounded">
              <div>
                <h3 class="text-lg font-semibold text-gray-700">Building Interactive UIs with JavaScript</h3>
                <p class="text-gray-600 text-sm">Learn how to create dynamic, interactive user interfaces with vanilla JavaScript.</p>
              </div>
            </a>
          </li>
        </ul>
      </aside>
    </div>
  </div>
  
@endsection