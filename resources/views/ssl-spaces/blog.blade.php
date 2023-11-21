<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/features.css')}}">
    <link rel="stylesheet" href="{{asset('css/lern&grow.css')}}">
    <!-- <link rel="stylesheet" href="css/contact_us.css"> -->
    <link rel="stylesheet" href="{{asset('css/blogs.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces-space you need</title>
</head>

<body id="features-page">
    <!-- navbar part -->
    @include('ssl-spaces.ssl-components.navbar')
    <!--End navbar part -->

    <!-- first feat part  -->
    <div class="container">
        <!-- heading  -->
        <div class="row">
            <div class="main-sec">
                <h1 class="first-blog pt-5" data-aos="zoom-in">
                    Our Thoughts
                </h1>
            </div>
        </div>
        <!--End heading  -->

        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 p-4 first-blog-sec" data-aos="zoom-in">
                <a href="{{route('blog-demo')}}">
                    <img width="514" height="119" class="img-fluid" src="{{asset('images/blog-1.jpg')}}" alt="">
                </a>
                <div class="text-blog p-3 pt-5">
                    <a href="{{route('blog-demo')}}" class="text-decoration-none">
                        <h3 class="blog-heading">
                            Top Podcast Studios in Lahore: Best Podcast Studios in Lahore
                        </h3>
                    </a>
                    <p class="blog-des   pt-3">
                        In the dynamic city of Lahore, Pakistan, the podcasting scene is flourishing, with many studios
                        catering to the growing demand for high-quality audio
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 pt-3">
                                <img style="height: 40px;width: 35px;" class="img-fluid" src="{{asset('images/Signature-icon.png')}}" alt="">
                            </div>
                            <div class="col-lg-9 pt-4">
                                <p class="row-float-left-blog">SSL Spaces</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <p class="row-float-right-blog" style="float: right;">9 April, 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-4 second-blog-sec" data-aos="zoom-in">
                <a href="{{route('blog-demo')}}">
                    <img width="514" height="119" class="img-fluid" src="{{asset('images/blog-2.jpg')}}" alt="">
                </a>
                <div class="text-blog p-3 pt-5">
                    <a href="{{route('blog-demo')}}" class="text-decoration-none">
                        <h3 class="blog-heading">
                            Why Night Shifts at Coworking Spaces are More Rewarding
                        </h3>
                    </a>
                    <p class="blog-des pt-3">
                        Thinking of working at night, people imagine dark office spaces with no one but you, or they
                        think of you in your bed typing away on your laptop with
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 pt-3">
                                <img style="height: 40px;width: 35px;" class="img-fluid" src="{{asset('images/Signature-icon.png')}}" alt="">
                            </div>
                            <div class="col-lg-9 pt-4">
                                <p class="row-float-left-blog">SSL Spaces</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <p class="row-float-right-blog" style="float: right;">9 April, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 third-blog-sec" data-aos="zoom-in">
                <a href="{{route('blog-demo')}}">
                    <img width="514" height="119" class="img-fluid" src="{{asset('images/blog-3.jpg.png')}}" alt="">
                </a>
                <div class="text-blog p-3 pt-5">
                    <a href="{{route('blog-demo')}}" class="text-decoration-none">
                        <h3 class="blog-heading">
                            10 Best Coworking Spaces in Lahore
                        </h3>
                    </a>
                    <p class="blog-des   pt-3">
                        Lahore is known as the “city of wonders” and has a long, rich history. Lahore has developed a
                        lot in the last decade, and if we look at th
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 pt-3">
                                <img style="height: 40px;width: 35px;" class="img-fluid" src="{{asset('images/Signature-icon.png')}}" alt="">
                            </div>
                            <div class="col-lg-9 pt-4">
                                <p class="row-float-left-blog">SSL Spaces</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <p class="row-float-right-blog" style="float: right;">9 April, 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 forth-blog-sec" data-aos="zoom-in">
                <a href="{{route('blog-demo')}}" class="text-decoration-none">
                    <img width="514" height="119" class="img-fluid" src="{{asset('images/blog-4.png')}}" alt="">
                </a>
                <div class="text-blog p-3 pt-5">
                    <a href="{{route('blog-demo')}}" class="text-decoration-none">
                        <h3 class="blog-heading">
                            Pros And Cons Of Working In A Coworking Spaces In Pakistan
                        </h3>
                    </a>
                    <p class="blog-des pt-3">
                        What’s a coworking space? Coworking spaces are collaboration hubs in which workers of different
                        companies share an office space. It’s different from a
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 pt-3">
                                <img style="height: 40px;width: 35px;" class="img-fluid" src="{{asset('images/Signature-icon.png')}}" alt="">
                            </div>
                            <div class="col-lg-9 pt-4">
                                <p class="row-float-left-blog">SSL Spaces</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <p class="row-float-right-blog" style="float: right;">9 April, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 fiveth-blog-sec" data-aos="zoom-in">
                <a href="{{route('blog-demo')}}" class="text-decoration-none">
                    <img width="514" height="119" class="img-fluid" src="{{asset('images/blog-5.jpg')}}" alt="">
                </a>
                <div class="text-blog p-3 pt-5">
                    <a href="{{route('blog-demo')}}" class="text-decoration-none">
                        <h3 class="blog-heading">
                            Why a Co-Working Space is Better Than Working from Home?
                        </h3>
                    </a>
                    <p class="blog-des  pt-3">
                        At the first glance, working from home sounds like an interesting and exciting opportunity. You
                        look forward to getting up at your schedule and starti
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 pt-3">
                                <img style="height: 40px;width: 35px;" class="img-fluid" src="{{asset('images/Signature-icon.png')}}" alt="">
                            </div>
                            <div class="col-lg-9 pt-4">
                                <p class="row-float-left-blog">SSL Spaces</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <p class="row-float-right-blog" style="float: right;">9 April, 2020</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 p-5 sixth-blog-sec" data-aos="zoom-in">
                <a href="{{route('blog-demo')}}">
                    <img width="514" height="119" class="img-fluid" src="{{asset('images/blog-6.jpg')}}" alt="">
                </a>
                <div class="text-blog p-3 pt-5">
                    <a href="{{route('blog-demo')}}" class="text-decoration-none">
                        <h3 class="blog-heading">
                            How to Choose a Co-Working Space For Your Startups?
                        </h3>
                    </a>
                    <p class="blog-des pt-3">
                        Here is a lot to consider when you are going to choose a coworking space. Whether you’re a
                        freelancer or just plunged into it, begun your journe
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-3 pt-3">
                                <img style="height: 40px;width: 35px;" class="img-fluid" src="{{asset('images/Signature-icon.png')}}" alt="">
                            </div>
                            <div class="col-lg-9 pt-4">
                                <p class="row-float-left-blog">SSL Spaces</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-4">
                        <p class="row-float-right-blog" style="float: right;">9 April, 2020</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End first feat part  -->
        <!-- second main text part  -->
    </div>

    <!-- End second main text part  -->

    <!-- footer part  -->
    @include('ssl-spaces.ssl-components.footer')
    <!--End footer part  -->

    <button id="scrollToTopBtn">
        <b><i class="fa-solid fa-arrow-up"></i></b>
    </button>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mybutton = document.getElementById("scrollToTopBtn");

            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }
            mybutton.addEventListener("click", function() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            });
        });
    </script>
    <script>
        const currentURL = window.location.href;
        const navLinks = document.querySelectorAll('.links-nav');
        navLinks.forEach(link => {
            if (link.href === currentURL) {
                link.style.color = '#2ea9dd';
            }
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            offset: 12
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>