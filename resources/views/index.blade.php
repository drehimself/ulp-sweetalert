<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<body>
    @if (session('success_message'))
        <div class="alert alert-success">
            {{ session('success_message') }}
        </div>
    @endif
    <ul>
        @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
        @endforeach
    </ul>
    @include('sweetalert::alert')
</body>
</html>
