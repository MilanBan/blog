
    <form method="POST" action="{{ route('store-post') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <div class="form-group">
        <lable for="published">Published</lable>
        <input type="checkbox" id="published" name="published" value="1"/>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
