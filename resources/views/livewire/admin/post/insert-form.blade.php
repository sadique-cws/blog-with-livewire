<div class="w-5/12">
    {{-- The whole world belongs to you. --}}

    <form wire:submit.prevent="store">
        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
            <input type="text" wire:model="title" id="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('title') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>

        <!-- Content -->
        <div class="mb-4">
            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
            <textarea wire:model="editor" id="content" rows="20" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('content') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>

        <!-- Topic -->
        <div class="mb-4">
            <label for="topic_id" class="block text-gray-700 text-sm font-bold mb-2">Topic</label>
            <select wire:model="topic_id" id="topic_id" class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Select a Topic</option>
                @foreach($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->topic_name }}</option>
                @endforeach
            </select>
            @error('topic_id') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>

        <!-- Featured Image -->
        <div class="mb-4">
            <label for="featured_image" class="block text-gray-700 text-sm font-bold mb-2">Featured Image URL</label>
            <input type="file" wire:model.live="featured_image" id="featured_image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @error('featured_image') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
        </div>

        @if ($featured_image)
            <img src="{{$featured_image->temporaryUrl()}}" alt="">
        @endif


        <!-- Submit Button -->
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>
    </form>
</div>
