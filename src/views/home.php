<h2>Posts</h2>
{% for post in posts %}
    <div class="card mb-5">
        <div class="card-header post-title">
            <a href="index.php?page=post&id={{ post.id }}">{{ post.title }}</a>            
        </div>
        <div class="card-body">
            <p class="mb-0">{{ post.subtitle }}</p>
        </div>
        <!--<div class="card-footer d-flex justify-content-center">

        </div>-->
    </div>
{% endfor %}    
