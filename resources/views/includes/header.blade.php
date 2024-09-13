<header class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Logo -->
      <a href="/" class="text-2xl font-bold text-blue-600">EduBlog</a>
      
      <!-- Navigation Menu -->
      <nav class="hidden md:flex space-x-6">
        <a href="{{route('homepage')}}" class="text-gray-600 hover:text-blue-600">Home</a>
        <a href="#about" class="text-gray-600 hover:text-blue-600">About</a>
        <a href="#courses" class="text-gray-600 hover:text-blue-600">Courses</a>
        <a href="#blog" class="text-gray-600 hover:text-blue-600">Blog</a>
        <a href="#contact" class="text-gray-600 hover:text-blue-600">Contact</a>
      </nav>
  
      <!-- Call to Action Button -->
      <a href="#signup" class="hidden md:block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-500">Sign Up</a>
  
      <!-- Mobile Menu Icon -->
      <button class="md:hidden text-gray-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>
    </div>
  </header>
  