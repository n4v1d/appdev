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
                    <div class="single_blog blog--default">
                        <article>
                            <figure>
                                <img src="/images\bb1.jpeg" alt="Blog image">
                            </figure>
                            <div class="blog__content">
                                <a href="#" class="blog__title">
                                    <h3>{{ $artiicle->title }}</h3>
                                </a>

                                <div class="blog__meta">
                                    <div class="author">
                                        <span class="icon-user"></span>
                                        <p>موضوع
                                            <a href="/article/cat/{{$artiicle->category->slug}}">{{ $artiicle->category->name }}</a>
                                        </p>
                                    </div>
                                    <div class="date_time">
                                        <span class="icon-clock"></span>
                                        <p>18 آبان 1397</p>
                                    </div>
                                    <div class="comment_view">
                                        <p class="comment">
                                            <span class="icon-bubble"></span>0</p>
                                        <p class="view">
                                            <span class="icon-eye"></span>{{$artiicle->visit}}</p>
                                    </div>
                                </div>
                                {!! $artiicle->content !!}
                            </div>
                        </article>
                    </div>
                    <!-- end /.single_blog -->

              
                    <!-- end /.comment_area_wrapper -->
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

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

@endsection
