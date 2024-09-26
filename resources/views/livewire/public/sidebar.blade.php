<aside class="w-64 h-full">
    <h2 class="text-xl font-bold text-gray-700 mb-4">Categories</h2>
    <ul class="space-y-2">
      
      @foreach ($topics as $topic)
      <li>
        <a href="#history" class="flex items-center transition">
          <span class="text-lg flex items-center justify-between flex-1 p-3 hover:bg-slate-100">
            <span>{{$topic->topic_name}}</span>
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 16 4-4-4-4m6 8 4-4-4-4"/>
            </svg>
            
          </span>
        </a>
      </li>     
      @endforeach
     
    </ul>
  </aside>