
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($flash = session('message'))
        {{ $flash }}
    @endif
</body>
</html>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('single-post', ['id' => $post->id]) }}"> {{ $post->title }}</a>
            @if($post->user)
            <a herf="/users/{{$post->user_id}}"> {{ $post->user->name }}
            @endif
            <p>Tags:</p>
            @foreach($post->tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach
        </li>

    @endforeach




