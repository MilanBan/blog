
    <h2>{{ $post->title }}</h2>
    <h3>{{ $post->body }}</h3>

    <div>
    @if(count($post->comments))
        @foreach($post->comments as $comment)
        <div class="blog-post">
            <li>
                <hr>
                <h4 class="blog-post-title">{{ $comment->autor }}</h4>
                <p class="blog-post-meta">{{ $comment->body }}</p>
            <li>
        </div>
        @endforeach
    @endif
<div><H2>Ostavi Komentar</H2></div>
    <form method="POST" action="/posts/{{$post->id}}/comments">
        @csrf
        <div class="form-group">
        <lable for="autor">Autor</lable>
        <input type="text" id="autor" name="autor" class="form-control"/>
        </div>

        <div class="form-group">
        <label for="body">Body</label>
        <textarea type="text" id="body" name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    </div>
