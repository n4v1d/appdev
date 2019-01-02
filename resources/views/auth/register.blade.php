@extends('Site/master')


@section('content')
    <section class="breadcrumb-area rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">ثبت نام</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="#">خانه</a>
                            </li>
                            <li class="active">
                                <a href="#">ثبت نام</a>
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


    <section class="signup_area section--padding rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="/register" method="post">
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>ساخت حساب کاربری</h3>
                                <p>لطفا برای ثبت نامم در  سایت اطلاعات خواسته شده زیر را تکمیل نمایید
                                </p>
                            </div>
                            <!-- end .login_header -->

                            @csrf
                            <div class="login--form">
                                <div class="form-group">
                                    <label for="urname">نام شما</label>
                                    <input name="name" type="text" class="text_field" value="{{old('name')}}" placeholder="نام خود را وارد کیند">
                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif


                                <div class="form-group">
                                    <label for="email_ad">آدرس ایمیل</label>
                                    <input name="email" type="text" class="text_field" value="{{old('email')}}" placeholder="ایمیل خود را وارد کنید">
                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif


                                <div class="form-group">
                                    <label for="password">رمز عبور</label>
                                    <input name="password" type="password" value="{{old('password')}}" class="text_field" placeholder="رمز عبور">
                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <div class="form-group">
                                    <label for="con_pass">رمز عبور خود را تکرار کنید</label>
                                    <input name="password_confirmation" type="password" value="{{old('password_confirmation')}}" class="text_field" placeholder="تکرار رمز عبور">
                                </div>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                                <button class="btn btn--md register_btn btn-primary" type="submit">ثبت نام</button>

                                <div class="login_assist">
                                    <p>آیا در سایت حساب کاربری دارید ؟
                                        <a href="login.html">ورود</a>
                                    </p>
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
