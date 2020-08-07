<h1 class="create-title">Edit Post</h1>
<form action="?page=admin&method=update" method="post">
    <div class="form-group">
        <label for="" class="label-create-title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ title }}">
        <label for="" class="label-create-title">Subtitle</label>
        <input type="text" name="subtitle" class="form-control" value="{{ subtitle }}">
        <label for="" class="label-create-post">Post</label>
        <textarea type="text" name="content" class="form-control" rows="30">{{ content }}</textarea>
        <input type="hidden" name="id" value="{{ id }}">
    </div>
    <input type="submit" class="btn btn-success button" value="Edit">
</form> 