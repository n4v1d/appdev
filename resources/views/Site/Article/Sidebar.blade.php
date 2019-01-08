
<div class="sidebar-card card--blog_sidebar card--category">
    <div class="card-title">
        <h4>موضوعات</h4>
    </div>
    <div class="collapsible-content">
        <ul class="card-content">
            @foreach($categorys as $category)
                <li>
                    <a href="/article/cat/{{$category->slug}}">{{$category->name}}</a>
                </li>
            @endforeach

        </ul>
    </div>
    <!-- end /.collapsible_content -->
</div>
<!-- end /.sidebar-card -->
