@extends('.Site/master')


@section('content')

    <section class="breadcrumb-area rtl">

    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-contents">
                <h2 class="page-title">فراموشی رمز عبور</h2>
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="#">خانه</a>
                        </li>
                        <li class="active">
                            <a href="#">فراموشی رمز عبور</a>
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
    <section class="login_area section--padding rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="/password/email" method="post">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>خوش آمدید</h3>
                                <p>شما میتوانید وارد سایت شوید</p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">نام کاربری</label>
                                    <input name="email" type="text" class="text_field" placeholder="نام کاربری خود را وارد کنید">
                                </div>
                                @csrf





                                <button class="btn  btn--md btn-primary" type="submit">ارسال رمز </button>

                                <div class="login_assist">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 text-center">
                                                <p class="signup">قبلا عضو شدید؟
                                                    <a href="/login">ورود</a></p>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6 text-center">
                                            <p class="signup">هنوز عضو نیستید ؟
                                                <a href="/register">عضویت</a></p>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>

@endsection
