<div class="col-lg-3">
    <div class="card card-small card-post card-post--1">
        <div class="card-post__image" style="background-image: url('images/content-management/4.jpeg');">
            <a href="#" class="card-post__category badge badge-pill badge-warning">Technology</a>
            <div class="card-post__author d-flex">
                <a href="#" class="card-post__author-avatar card-post__author-avatar--small" style="background-image: url('images/avatars/3.jpg');">Written by John James</a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">
                <a class="text-fiord-blue" href="#">{{$item->title}}</a>
            </h5>
            <p class="card-text d-inline-block mb-3">{{$item->description}}</p>
            <span class="text-muted">{{$item->created_at}}</span>
        </div>
    </div>
</div>
