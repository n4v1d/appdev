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
                                        <a href="{{route('blogpost')}}/{{$articles->slug}}"><img src="images/blog2.jpeg" alt="Blog image">></a>

                                        <figcaption>
                                            <div class="blog__content">
                                                <a href="/article/{{$articles->slug}}" class="blog__title">
                                                 <h5> {{ $articles->title }} </h5>
                                                </a>
                                                <p>{{ $articles->content }}</p>
                                            </div>

                                            <div class="blog__meta">
                                                <div class="date_time">
                                                    <span class="icon-clock"></span>
                                                    <p>12 آبان 1397</p>
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
                    {{ $article->links() }}
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

                        <div class="sidebar-card card--blog_sidebar card--category">
                            <div class="card-title">
                                <h4>دسته های برتر</h4>
                            </div>
                            <div class="collapsible-content">
                                <ul class="card-content">
                                    <li>
                                        <a href="/article/cat/wordpress">وردپرس

                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- end /.collapsible_content -->
                        </div>
                        <!-- end /.sidebar-card -->



                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

@endsection
