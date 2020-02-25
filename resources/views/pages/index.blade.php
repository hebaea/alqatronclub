<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>نادي المناظرة القطرون</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cairo&display=swap">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="css/homeStyle.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <script type="text/javascript" src="js/modernizr.custom.js"></script>


</head>

<body style="direction: rtl">
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.jpg') }}" class="hidden-xs" alt="نادي القطرون">
                    <h3 class="visible-xs">نادي القطرون</h3>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/#testimonials-section') }}" class="page-scroll">اتصل بنا</a></li>
                    <li><a href="{{ url('/#team-section') }}" class="page-scroll">الفريق</a></li>
                    <li><a href="{{ url('/#works-section') }}" class="page-scroll">أنشطتنا</a></li>
                    <li><a href="{{ url('/#services-section') }}" class="page-scroll">أهدافنا</a></li>
                    <li><a href="{{  url('/#about-section') }}" class="page-scroll">حولنا</a></li>
                    <li><a href="{{  url('/') }}" class="page-scroll">الرئيسية</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header name="home">
        <!-- class="text-center" -->
        <div class="intro-text" style="margin-right: 550px">
            <h1>مرحبا بك في <span class="color">نادي القطرون</span></h1>
            <p> للحوار و المناظرة</p>
            <div class="clearfix"></div>
        </div>
    </header>

    <!-- About Section -->
    <div id="about-section">
        <div class="container">
            <div class="section-title">
                <h2 dir="rtl"><strong>حولنا</strong></h2>
                <hr>
                <div class="clearfix"></div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-4"> <i class="fa fa-users"></i>
                    <h4>من نحن؟</h4>
                    <p dir="rtl"><br> تأسس نادي الحوار والمناظرة ببلدية القطرون الواقعة في الجنوب الليبي في أواخر سبتمبر /2018 ليكون مؤسسة مجمتع مدني تقوم بتنفذ ورش عمل وأنشطة متنوعة لتطوير قدرات التفكير ولإعداد الطلاب لخوض المناظرات من قبل نخبة من المدربين المحليين
                        ذوي الخبرة والمهارة العالية في فنون المناظرات.
                    </p>
                </div>
                <div class="col-md-4"> <i class="fa fa-check-square-o"></i>
                    <h4>رسالتنا</h4>
                    <p dir="rtl"><br> أن نَنشر الوعي في المجتمع وأن نُساهم في إعداد طلبة قادرين على التناظر والحوار الفكري البناء.
                    </p>
                </div>
                <div class="col-md-4"> <i class="fa fa-send"></i>
                    <h4>رؤيتنا</h4>
                    <p dir="rtl"><br> تم تأسيس نادي الحوار والمناظرة القطرون كمؤسسة مستقلة تسعى إلى صقل مهارة مهارات الشباب وتعزيز قدراتهم على الإقناع ونشر القيم والمبادئ الخاصة بالحوار والداعية لاحترام وجهات النظر المختلفة بخلق رفيع وتقبل أرائهم بسعة صدر دون انزعاج
                        ممن يخالفنا الرأي، بل باحترام الرأي والرأي الأخر.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section -->
    <div id="services-section">
        <div class="container">
            <div class="section-title">
                <h2 dir="rtl"><strong>أهدافنا</strong></h2>
                <hr>

                <div class="clearfix"></div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6 service">
                    <!--<i class="fa fa-desktop"></i>-->
                    <p dir="rtl">
                        • يهدف النادي إلى نشر ثقافة الحوار كأسلوب حياة بين فئات المجتمع المختلفة، ومن أجل خلق نمط جديد يؤمن بالتعددية واحترام الأخرين أيًا كان أنتمائهم.<br> • تعليم ثقافة الحوار بواسطة ابرز خبراء المناظرات في المنطقة، وتعزيز مهارات الخطابة
                        واكتساب مهارات بحثية قيمة.<br> • توعية الطلاب بالقضايا العامة من خلال الحوار وتنمية شخصياتهم وتمكينهم من القدرة على مخاطبة الأخرين بأسلوب راقٍ وفعال من خلال تعليمهم فنون وأساسيات المناظرة. <br> • تعزيز الثقة بالنفس لدى الطلبة والأنتماء
                        لما يؤمنون به.

                    </p>
                </div>
                <div class="col-md-6 col-sm-6 service">
                    <!--<i class="fa fa-gears"></i>-->
                    <p dir="rtl">
                        • بث روح المنافسة الشريفة بين الطلبة واكتساب مهارة العمل ضمن فريق.<br> • ممارسة قدراتك لتفكير النقدي.<br> • تنمية مهارات التحليل والبحث العلمي وتدوين الملاحظات لدى المتدربين.<br> • تطوير القدرة على الأتزان وتقديم الحجج البناءة
                        واستخدام المنطق والأدلة.<br>• توطيد مفهوم التركيز في الحديث والحوار والاستماع والأصغاء في الأذهان.

                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- blog section -->
    <div id="works-section">
        <div class="container">
            <!-- Container -->
            <div class="section-title">
                <h2 dir="rtl"><strong>أنشطتنا ومشاركتنا</strong></h2>
                <hr>
                <div class="clearfix"></div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6 service">
                    <!--<i class="fa fa-desktop"></i>-->
                    <p dir="rtl">
                        • تم تدريب أكثر من 100 شاب وشابة من مختلف الأعمار على مستوى البلدية.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 service">
                    <!--<i class="fa fa-gears"></i>-->
                    <p dir="rtl">
                        • تنظيم سلسلة تدريبات المواطنة الفاعلة.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Section -->
    <div id="team-section">
        <div class="container">
            <div class="section-title">
                <h2 dir="rtl"><strong>فريقنا</strong></h2>
                <hr>
                <div class="clearfix"></div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-6 col-sm-6 service">
                    <!--<i class="fa fa-desktop"></i>-->
                    <p dir="rtl">
                        يضم فريق نادي الحوار والمناظرة القطرون مجموعة مميزة من المدربين الاحترافيين ذوي الخبرة والكفاءة.
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 service">
                    <!--<i class="fa fa-gears"></i>-->
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="testimonials-section">
        <div class="container">
            <div class="section-title">
                <h2 dir="rtl"><strong>اتصل بنا</strong></h2>
                <hr>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4">
                <p>معلومات الاتصال</p>
                <div class="space"></div>
                <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>بلدية القطرون<br> الجنوب, ليبيا</p>
                <div class="space"></div>
                <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>Qdc.ly18@gmail.com</p>
                <div class="space"></div>
                <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i> </p>
            </div>
            <div class="col-md-8">
                <p dir="rtl">إن كان لديك أي استفسار أو فقط تود مراسلتنا أو الأتصال بنا لا تتردد</p>

                @if(count($errors)>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>* {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>{{ $message }}</p>
                </div>
                @endif

                <form action="{{route('sendMessage')}}" method="post" name="sentMessage" id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="الاسم">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="بريدك الإلكتروني">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <!-- calculate text area -->
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="اكتب رسالتك هنا" maxlength="300"></textarea>
                        <div class="message"></div>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" value="ارسل" class="btn btn-default">ارسل</button>
                </form>

            </div>
        </div>
    </div>
    <div id="social-section">
        <div class="container">
            <div class="social">
                <ul>
                    <li><a href="{{ url('https://www.facebook.com/QDC.LY/') }}"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- scroll to top -->
    <div id="scroll-up">
        <img id="sc" src="img/scrollup.png" alt="scroll up">
    </div>

    <div id="footer">
        <div class="container">
            <center>
                <p> &copy نادي القطرون للحوار و المناظرة 2020 </p>
            </center>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>

    <script type="text/javascript" src="js/contact_me.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>


    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/homeScript.js" type="text/javascript"></script>
</body>

</html>
