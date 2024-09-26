    <div class="w-full overflow-auto px-[10%] py-10">
        @if (session("message"))
            <p class="bg-green-600 text-white p-3 w-full text-sm">{{session('message')}}</p>
        @endif
        <div class="flex flex-1 my-3 justify-between items-center">
            <h2 class="text-2xl font-semibold">Manage Posts ({{count($posts)}})</h2>
            <input type="search"  wire:model.live="searchTerm" class="border border-slate-400 rounded-md px-3 py-2" placeholder="Search Here...">
        </div>
        <table class="w-full border">
            <thead>
                <tr>
                    <th class="border p-3">Id</th>
                    <th class="border p-3">Title</th>
                    <th class="border p-3">Topic</th>
                    <th class="border p-3">Content</th>
                    <th class="border p-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td class="border p-2">{{$post->id}}</td>
                    <td class="border p-2">{{$post->title}}</td>
                    <td class="border p-2">{{$post->topic->topic_name}}</td>
                    <td class="border p-2">
                        <div class=" line-clamp-1 max-w-96 leading-loose">        
                            {{$post->content}}
                        </div>
                    </td>
                   
                    <td class="border p-2">
                        <button class="bg-teal-500 text-white px-3 py-2 rounded">Edit</button>
                        <button wire:click="deletePost({{$post->id}})" class="bg-red-500 text-white px-3 py-2 rounded">Delete</button>
                        <a href="{{route('post.show', $post->id)}}" target="_blank" class="bg-green-500 text-white px-3 py-2 rounded">View Post</a>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td class="border p-3 text-center" colspan="5">No posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
