<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="title" content="Morphe | Cheaper daily contact lenses delivered monthly at your doorstep"/>
    <meta name="description" content="Select your Degree of eyes, you'll receive your 1st box of 30 pairs of Beppo Lenses for free. Your monthly subscription brings your lens cost at a lower price! START FOR FREE"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Morphe | Cheaper daily contact lenses delivered monthly at your doorstep" />
    <meta property="og:image" content="https://fakeimg.pl/400x209/" />
    <meta property="og:description" content="Select your Degree of eyes, you'll receive your 1st box of 30 pairs of Beppo Lenses for free. Your monthly subscription brings your lens cost at a lower price! START FOR FREE" />
    <title>Morphe</title>
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/gif" sizes="16x16">
    <link href="{{ asset('assets/dist/app.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114864697-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-114864697-1');
    </script>
</head>
<body>
      <!-- Header -->
        <header style="background: url(../assets/images/banner.jpg) no-repeat center center /cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="logo animated fadeIn"><a href="index.html"><img src="assets/images/logo.png" alt="" /></a></div>
                        <h1 class="animated fadeIn">The best sheets ever.</h1>
                        <div class="top-form">
                            <form id="formEmail" action="{{asset('/')}}" method="post">
                                 {{ csrf_field() }}
                                <input type="email" name="email" value="{{old('email')}}" class="form-control animated fadeIn" id="email" placeholder="ENTER YOUR EMAIL" />
                                 <input type="hidden" name="code" value="
                                    @if (isset($_GET['rel']))
                                        {{$_GET['rel']}}
                                    @else
                                        {{''}}
                                    @endif
                                    " placeholder="">
                                <button type="submit" name="send" class="btn btn-primary btn--dark animated fadeIn">JOIN OUR WAITING LIST</button>
                                <div class="errorTxt"></div>
                            </form>
                        </div>
                        <h2>LAUNCHING SOON</h2>
                    </div>
                </div>
            </div>
            @yield('popup')
        </header>
        <!-- ./Header -->
    <!-- ./Header -->
   <!-- Feature -->
        <section class="feature sec-pad bg-1" style="background-image: url(../assets/images/bk1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <h2>AMAZING PRODUCTS</h2>
                            <p>
                                Quality is our top priority. We use
                                the most luxurious materials and partner
                                with top caliber factories for production
                                around the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Feature -->


        <!-- Feature -->
        <section class="feature sec-pad bg-2 type-2" style="background-image: url(../assets/images/bk2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <h2>A PERSONAL TOUCH</h2>
                            <p>
                                Our emphasis is on service and we strive to make products tailored to your needs. If you don’t find what you’re looking for, just ask us.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
        <!-- ./Feature -->
        <!-- Feature -->
        <section class="feature sec-pad bg-3" style="background-image: url(../assets/images/bk3.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <h2>EFFECIENT SUPPLY CHAIN</h2>
                            <p>
                                Did you know sheets retail up to 10x what they cost? We know, crazy!
                                By removing layers of unnecessary
                                cost, we deliver the best possible
                                value to you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Feature -->


        <!-- Feature -->
        <section class="feature sec-pad bg-4 type-2" style="background-image: url(../assets/images/bk4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <h2>BETTER EXPERIENCE</h2>
                            <p>
                                We believe shopping should be simple and hassle-free, so we’ve done the hard work for you. A curated experience allows fewer options, but better.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </section>
        <!-- ./Feature -->


        <!-- Our Approach -->
        <section class="approach" style="background: url(../assets/images/bk5.jpg) no-repeat center center /cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>OUR APPROACH</h2>
                        <p>
                            Morphe was built to deliver simple, beautiful home essentials at a fair price. By cutting out the middlemen, we bypass costs like wholesaling, storefronts, and designer licensing fees that have no bearing on quality. And we pass the savings on to you.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./Our Approach -->

        <!-- Footer -->
        <footer class="text-center">
            <a href="#">Contact</a>
        </footer>
        <!-- ./Footer -->
    <script src="{{ asset('assets/dist/app.js') }}"></script>
</body>
</html>
