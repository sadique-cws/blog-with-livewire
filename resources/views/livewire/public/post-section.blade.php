<div class="grid grid-cols-1 gap-3">
    @forelse ($posts as $post)
        <a href="{{ route('post.show', $post->id) }}"
            class="hover:bg-slate-100 flex  bg-white border  border-gray-200 rounded-lg shadow-md overflow-hidden">
            <!-- Post Image -->
            <div class="flex-1">
                <img class="w-full h-48 object-cover" src="{{ asset('storage/images/' . $post->featured_image) }}"
                    alt="Post Image">
            </div>
            <!-- Post Content -->
            <div class="p-6 flex-[4]">
                <!-- Post Title -->
                <h2 class="text-2xl font-bold text-gray-800 mb-2">
                    {{ $post->title }}
                </h2>
                <!-- Post Description -->
                <p class="text-gray-600 text-sm mb-4 line-clamp-3 ">
                    {{ $post->content }}
                </p>
            </div>
        </a>
    @empty
        <p>Post not found</p>
    @endforelse


</div>
