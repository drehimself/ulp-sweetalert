<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>
<body>
    <h2>Create Post</h2>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/posts" method="POST">
        @csrf
        <div>
            <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
        </div>
        <div>
            <textarea name="body" id="body" cols="30" rows="10">{{ old('body') }}</textarea>
        </div>
        <div>
            <button type="submit">Create Post</button>
        </div>
    </form>
@include('sweetalert::alert')
</body>
</html>
