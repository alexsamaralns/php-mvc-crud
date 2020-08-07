<h1 class="create-title">Create Post</h1>
<form action="?page=admin&method=insert" method="post">
    <div class="form-group">
        <label for="" class="label-create-title">Title</label>
        <input type="text" name="title" class="form-control">
        <label for="" class="label-create-title">Subtitle</label>
        <input type="text" name="subtitle" class="form-control">
        <label for="" class="label-create-post">Post</label>
        <textarea type="text" name="content" class="form-control" rows="30"></textarea>
    </div>
    <input type="submit" class="btn btn-success button" value="Save">
</form> 