<html>
<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
    <script src="https://use.fontawesome.com/f3d90b2835.js"></script>
</head>
<body>
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <form method="POST" action="{{  route('login') }}">
                            @csrf
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://scontent.fpnh22-3.fna.fbcdn.net/v/t1.6435-9/45345823_2137509936514297_178745462138863616_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=gwmFzbU6Yc8AX9PaKWC&_nc_ht=scontent.fpnh22-3.fna&oh=a278d71195efc8cc461db39204ab8ee5&oe=60E5B0F9"> </div>
                        <h3 class="mb-5 text-center heading">Welcome to project lrv8x</h3>
                        <h6 class="msg-info">Please login to your account</h6>
                        <div class="form-group"> <label class="form-control-label text-muted" value="{{ __('Email') }}" >Email</label> <input type="email" id="email" name="email" placeholder="Phone no or email id" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted" value="{{ __('Password') }}">Password</label> <input type="password" id="password" name="password" placeholder="Password" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3">
                            <button class="btn-block btn-color">{{ __('Log in') }}</button>
                        </div>
                        </form>
                        <p id="otherMethodLogin">OR</p>
                        <div class="flex-c-m">
                            <a href="{{ url('auth/facebook') }}" class="login100-social-item bg1">
                                <i class="fa fa-facebook"></i>
                            </a>

                            <a href="#" class="login100-social-item bg2">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="{{ url('auth/google') }}" class="login100-social-item bg3">
                                <i class="fa fa-google"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <a href="{{ route('register') }}" class="sm-text mx-auto mb-3">Don't have an account?<button class="btn btn-white ml-2">Create new</button></a>
                </div>
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">We are more than just a company</h3> <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
