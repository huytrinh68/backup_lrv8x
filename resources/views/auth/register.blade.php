<html>

<head>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
</head>
<body>
<div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://scontent.fpnh22-3.fna.fbcdn.net/v/t1.6435-9/45345823_2137509936514297_178745462138863616_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=gwmFzbU6Yc8AX9PaKWC&_nc_ht=scontent.fpnh22-3.fna&oh=a278d71195efc8cc461db39204ab8ee5&oe=60E5B0F9"> </div>
                        <h3 class="mb-5 text-center heading">Welcome to project lrv8x</h3>
                            <x-jet-validation-errors class="mb-4" />
                          <div class="form-group"> <label class="form-control-label text-muted">First Name</label> <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Last Name</label> <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Email</label> <input type="email" id="email" name="email" placeholder="Phone no or email id" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Date of birth</label> <input type="date" id="dob" name="dob" placeholder="Date of birth" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" id="password" name="password" placeholder="Password" class="form-control"> </div>
                        <div class="form-group"> <label class="form-control-label text-muted">Confirm Password</label> <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password" class="form-control"> </div>
                        <div class="row justify-content-center my-3 px-3"> <button class="btn-block btn-color">{{ __('Register') }}</button> </div>

                        </form>

                    </div>
                </div>
                <div class="bottom text-center mb-5">
                    <a href="{{ route('login') }}" class="sm-text mx-auto mb-3">Already have an account?<button class="btn btn-white ml-2">Login</button></a>
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
