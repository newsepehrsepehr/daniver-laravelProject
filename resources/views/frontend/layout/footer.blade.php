<div class="footer footer--dark has-not-copyright" id="footer" dir="rtl">
    <div class="container">
        <div class="row">

            <div class="col col-lg-4 col-md-4 col-sm-6 col-6" dir="rtl">
                <div class="widget w-list text-right">
                    <h6 class="title fs0-85">تماس با ما</h6>
                    <div class="form-group contact-us" dir="rtl">
                        <input class="form-control" name="name" placeholder="نام و نام خانوادگی">
                        <input class="form-control" name="email" placeholder="ایمیل">
                        <input class="form-control" name="title" placeholder="موضوع">
                        <textarea class="form-control" name="description" placeholder="متن پیام"></textarea>
                        <span class="btn btn-sm btn-transparent border mt-3 btn-send-msg">ارسال</span>
                    </div>

                </div>
            </div>

            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="widget w-list">
                    <h6 class="title">لینک های اصلی</h6>
                    <ul>
                        <li>
                            <a href="#">ثبت نام</a>
                        </li>
                        <li>
                            <a href="#">ورود</a>
                        </li>
                        <li>
                            <a href="#">وبلاگ</a>
                        </li>
                        <li>
                            <a href="#">درس و بحث</a>
                        </li>
                        <li>
                            <a href="#">خوابگاه ها</a>
                        </li>
                        <li>
                            <a href="#">هم کلاسی ها</a>
                        </li>
                        <li>
                            <a href="#">بازارچه</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="widget w-list">
                    <h6 class="title">درس و بحث</h6>
                    <ul>
                        @foreach($majors as $major)
                            <li>
                                <a href="#">دانشکده {{$major->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="widget w-list">
                    <h6 class="title">خوابگاه ها</h6>
                    <ul>
                        @foreach($dorms as $dorm)
                            <li>
                                <a href="#">خوابگاه {{$dorm->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col col-lg-2 col-md-4 col-sm-6 col-6">
                <div class="widget w-list">
                    <h6 class="title">لینک های مفید</h6>
                    <ul>
                        <li>
                            <a href="#">دانشگاه ولی عصر (عج) رفسنجان</a>
                        </li>
                    </ul>
                </div>
            </div>

            {{--<div class="col col-lg-4 col-md-4 col-sm-6 col-6">
--}}{{--
                <div class="widget w-about">
                    <a href="02-ProfilePage.html" class="logo">
                        <div class="img-wrap">
                            <img src="/frontend/img/logo-colored.png" alt="Olympus">
                        </div>
                        <div class="title-block">
                            <h6 class="logo-title">olympus</h6>
                            <div class="sub-title">SOCIAL NETWORK</div>
                        </div>
                    </a>
                    <p>Lorem ipsum dolor sit amet, consect adipisicing elit, sed do eiusmod por incidid ut labore et lorem.</p>
                    <ul class="socials">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-square" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
--}}{{--
            </div>--}}
        </div>
    </div>
</div>