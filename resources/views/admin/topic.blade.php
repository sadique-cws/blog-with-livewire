@extends('admin.adminlayout')

@section('content')
    <div class="flex flex-1 px-10 py-5">
        <div class="w-8/12">
            <livewire:admin.topic.calling-top />
        </div>
        <div class="w-4/12">
            <div class="container mx-auto px-4 py-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Insert New Topic</h1>
                <livewire:admin.topic.insert-topic />
            </div>
        </div>
    </div>
@endsection
