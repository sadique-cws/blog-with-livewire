@extends('admin.adminlayout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Dashboard Title -->
    <h1 class="text-3xl font-bold text-gray-800 mb-8">Admin Dashboard</h1>
  
    <!-- Statistics Cards Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <!-- Card 1 -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-gray-800">Users</h2>
        <p class="text-3xl font-bold text-blue-600 mt-4">{{\App\Models\User::count()}}</p>
      </div>
  
      <!-- Card 2 -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-gray-800">Topics</h2>
        <p class="text-3xl font-bold text-blue-600 mt-4">{{\App\Models\Topic::count()}}</p>
      </div>
  
      <!-- Card 3 -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-gray-800">Posts</h2>
        <p class="text-3xl font-bold text-green-600 mt-4">{{\App\Models\Post::count()}}</p>
      </div>
  
      <!-- Card 4 -->
      <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6">
        <h2 class="text-xl font-semibold text-gray-800">Draft</h2>
        <p class="text-3xl font-bold text-red-600 mt-4">45</p>
      </div>
    </div>
  
    <!-- Charts Section (Placeholder) -->
    <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6 mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Overview</h2>
      <div class="h-64 bg-gray-100 flex items-center justify-center text-gray-600">
        [Chart Placeholder]
      </div>
    </div>
  
    <!-- Recent Activity Section -->
    <div class="bg-white border border-gray-200 rounded-lg shadow-md p-6">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Recent Activity</h2>
      <ul class="space-y-4">
        <li class="flex justify-between items-center">
          <span>User <strong>John Doe</strong> placed an order (#12345)</span>
          <span class="text-sm text-gray-600">2 hours ago</span>
        </li>
        <li class="flex justify-between items-center">
          <span>User <strong>Jane Smith</strong> signed up for an account</span>
          <span class="text-sm text-gray-600">4 hours ago</span>
        </li>
        <li class="flex justify-between items-center">
          <span>User <strong>Tom Brown</strong> updated profile information</span>
          <span class="text-sm text-gray-600">6 hours ago</span>
        </li>
      </ul>
    </div>
  </div>
  
@endsection