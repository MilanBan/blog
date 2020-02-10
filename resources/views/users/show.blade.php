
    <h1 class="blog-post-title">User: {{ $user->name }}</h1>
 
@foreach($user->posts as $post)
   </p><a href="/post/{{ $post->id}}"> {{ $post->title }}</a><p>
   </p> {{ $post->body }} <p>
   </p> {{ $post->created_at->toFormattedDateString() }}<p>

 @endforeach