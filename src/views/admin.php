<h1 class="admin-title">Content Manager</h1>
<div>
    <a href="index.php?page=admin&method=create" class="option">Create Post</a><br><hr>
</div>
<table class="table border rounded">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    {% for post in posts %}
        <tr>
            <th>{{ post.id }}</th>
            <th>{{ post.title }}</th>
            <th><a class="icon-option" href="index.php?page=admin&method=change&id={{ post.id }}"><i class="icofont-edit icon"></a></th>
            <th><a class="icon-option" href="index.php?page=admin&method=delete&id={{ post.id }}"><i class="icofont-ui-delete icon"></i></a></th>
        </tr>
    {% endfor %}
</table>