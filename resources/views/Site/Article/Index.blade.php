@extends('Site/master')


@section('content')

    <section class="breadcrumb-area rtl">

        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">مقالات</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="#">خانه</a>
                            </li>
                            <li class="active">
                                <a href="#">مقالات</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END BREADCRUMB AREA
    =================================-->

    <!--================================
            START LOGIN AREA
    =================================-->
    <section class="blog_area p-top-100 p-bottom-70 rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">

                        @foreach($article as $articles)

                            <div class="col-lg-6 col-md-6" data-grid-prepared="true" >
                                <div class="single_blog blog--card">
                                    <figure>
                                        <a href="{{route('blogpost')}}/{{$articles->slug}}"><img src="/images/blog2.jpeg" alt="Blog image"></a>

                                        <figcaption>
                                            <div class="blog__content">
                                                <a href="/article/{{$articles->slug}}" class="blog__title">
                                                 <h5> {{ $articles->title }} </h5>
                                                </a>
                                                <p>{{ $articles->content }}</p>
                                            </div>

                                            <div class="blog__meta">
                                                <div class="date_time">
                                                   &nbsp; دسته بندی:&nbsp;<a href="/article/cat/{{$articles->category->slug}}">{{ $articles->category->name }}</a>

                                                </div>
                                                <div class="comment_view">
                                                    <p class="comment">
                                                        <span class="icon-bubble"></span>0</p>
                                                    <p class="view">
                                                        <span class="icon-eye"></span>{{ $articles->visit }}</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>


                        @endforeach

                    </div>
                </div>
                <!-- end /.col-md-8 -->





                <div class="col-lg-4 col-md-12">
                    <aside class="sidebar sidebar--blog">
                        <div class="sidebar-card card--search card--blog_sidebar">
                            <div class="card-title">
                                <h4>جست‌وجو در سایت</h4>
                            </div>
                            <!-- end /.card-title -->

                            <div class="card_content">
                                <form action="#">
                                    <div class="searc-wrap">
                                        <input type="text" placeholder="جستجوی محصول">
                                        <button type="submit" class="search-wrap__btn">
                                            <span class="icon-magnifier"></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- end /.card_content -->
                        </div>
                        <!-- end /.sidebar-card -->

                        @include('Site.Article.Sidebar')


                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
                        {{ $article->links() }}
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

@endsection
