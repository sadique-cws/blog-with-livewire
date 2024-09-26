<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel | {{env('APP_NAME')}}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

    @livewireStyles
</head>
<body>

    @include('admin.header')

    @section('content')
        @show

    @livewireScripts


    <script>
        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('textarea'))
            .then(editor => {
                console.log('Editor was initialized', editor);
            })
            .catch(error => {
                console.error('Error during initialization of the editor', error);
            });
    </script>
</body>
</html>