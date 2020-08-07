<div class="card mb-5 single">
    <div class="card-header post-title">
        <h2>{{ title }}</h2>            
    </div>
    <div class="card-body">
        <p class="mb-0">{{ subtitle }}</p>
    </div>
    <div class="card-footer d-flex justify-content-center">
        <article>
            {{ content }}            
        </article>
    </div>
    <div class="comments mx-3">
        <h2>Comments</h2>
        <form action="?page=post&method=sendComment" method="post">
            <div class="form-group d-flex flex-column justify-content-start">
                <label for="" class="label-create-title">Name</label>
                <input type="text" name="name" class="form-control col-6">
                <label for="" class="label-create-post">Comment</label>
                <textarea type="text" name="comment" class="form-control col-6" rows="10"></textarea>
                <input type="hidden" name="id" value="{{ id }}">
            </div>
            <input type="submit" class="btn btn-danger button mb-4" value="Send Comment">
        </form>
        {% if comments == false %}
            <h4 class="name-comment">There is no comments!</h4>
        {% else %}
            {% for comment in comments %}
                <h4 class="name-comment">{{ comment.name }}</h4>
                <p class="message">{{ comment.message }}</p>
            {% endfor %}
        {% endif %}
    </div>
</div>