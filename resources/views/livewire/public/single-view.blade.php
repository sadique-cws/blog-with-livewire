<div class="flex flex-col md:flex-row">
    <!-- Main Post Area -->
    <div class="w-full md:w-3/4 pr-0 md:pr-8">
      <!-- Post Image -->
      <img class="w-full h-96 object-contain object-top mb-6" src="{{asset('storage/images/'.$post->featured_image)}}" alt="Post Image">

      <!-- Post Title -->
      <h1 class="text-4xl font-bold text-gray-800 mb-4">{{$post->title}}</h1>

      <!-- Post Metadata -->
      <div class="text-gray-600 mb-6">
        <span>Published on {{$post->created_at}}</span> | 
        <span>Author: {{$post->user_id}}</span>
      </div>

      <!-- Post Body -->
      <div class="text-xl text-gray-700 leading-loose text-justify">
        <p>
          {{$post->content}}
        </p>
        
        <!-- Add more post content here -->
      </div>
    </div>

    <!-- Related Posts Sidebar -->
    <aside class="w-full md:w-1/4 mt-8 md:mt-0">
      <h2 class="text-2xl font-bold text-gray-800 mb-4">Related Posts</h2>
      <ul class="space-y-4">
        @foreach ($related_posts as $item)
            
        <li>
          <a href="{{route('post.show', $item->id)}}" class="flex items-start space-x-4 hover:bg-gray-100 p-3 rounded-lg">
            <img src="{{asset('storage/images/'.$item->featured_image)}}" alt="Related Post 1" class="w-20 h-20 object-cover rounded">
            <div>
              <h3 class="text-lg font-semibold text-gray-700">Understanding JavaScript Promises</h3>
              <p class="text-gray-600 text-sm">Explore the basics of JavaScript Promises and how they handle asynchronous operations.</p>
            </div>
          </a>
        </li>
        @endforeach

       
      </ul>
    </aside>
  </div>