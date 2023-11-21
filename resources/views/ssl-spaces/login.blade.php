<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <title>SSL Spaces - space you need</title>

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <a href="{{route('index')}}" class="logo-nav">
                <img src="{{asset('images/SSL logo-01.png')}}" style="height: 60px;" alt="">
            </a>
        </div>
        <ul class="links">
            <li>
                <a href="{{route('features')}}" class="links-nav" active>
                    Features
                </a>
            </li>
            <li class="dropdown">
                <a href="{{route('lern&grow')}}" class="links-nav">
                    Learn & Grow
                </a>
            </li>
            <li>
                <a href="{{route('gallery')}}" class="links-nav">
                    Gallery
                </a>
            </li>
            <li>
                <a href="{{route('blog')}}" class="links-nav">
                    Blog
                </a>
            </li>
            <li>
                <a href="{{route('pricing')}}" class="links-nav">
                    Pricing
                </a>
            </li>
            <li>
                <a href="{{route('partners')}}" class="links-nav">
                    Partners
                </a>
            </li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <section class="container-fluid forms" id="container-fluid">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="{{route('notfound')}}" class="forgot-pass">
                            Forgot password?
                        </a>
                    </div>

                    <div class="field button-field">
                        <button>Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="{{route('HTTPerror')}}" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="#" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="#">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Create password" class="password">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirm password" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="505.html" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="#" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>

        </div>
    </section>

    <!-- footer  -->
    @include('ssl-spaces.ssl-components.footer')
    <!-- End footer  -->
    <!-- JavaScript -->
    <script src="{{asset('js/script.js')}}"></script>
    <script>
        function loadContent(event, route) {
            event.preventDefault(); // Prevent the default behavior of the link

            // Using the Fetch API
            fetch(route, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'text/html',
                    },
                })
                .then(response => response.text())
                .then(data => {
                    // Assuming you want to replace the entire body content with the response
                    document.body.innerHTML = data;
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
</body>

</html>