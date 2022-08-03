@extends ('frontend.layouts.app')
@section('content')

<div class="container login-section py-5">
    <div class="row gx-5">
        <div class="col-lg-5">
            <div class="login-form bg-light  ">

                <form action="{{route('login-details')}}" method="POST" class="row g-3 ">
                    @csrf
                    <div class="register-banner">
                            <img class="img-fluid" src="https://img.freepik.com/free-photo/front-view-male-student-green-checkered-shirt-with-black-backpack-holding-copybooks-smiling-blue-wall_140725-42439.jpg?size=626&ext=jpg" alt="">
                    </div>
                    <!-- <img src="./img/AEN-loogo.png" alt="" class="img-fluid"> -->
                    <div class="banner-content px-5 py-4">
                    <h5 class="login_welcome">Please Login  </h5>

                    <div class="col-12 ">

                        <input type="email" required name="email" class="form-control" placeholder="Email">
                        <span id="textarea1-error" class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="col-12 py-4">

                        <input type="password" required name="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="col-12 ">
                       <button class=" float-end btn-login">Login</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center ps-5">
            <div class="login-right">
                <h2 class="login-right-title ">
                    Accelerating your growth
                    towards <br> <span class="login-right-title-0">New Zealand.</span>
                </h2>

                <div class="login-right-list pt-4">
                    <p class="login-list"><i class="fa-regular fa-hand-point-right login-list-icon"></i><span class="list-para"> The universities in New Zealand offer a world-class educational system.</span></p>
                    <p class="login-list"><i class="fa-regular fa-hand-point-right login-list-icon"></i><span class="list-para"> Over 30,000 international students choose New Zealand as their study abroad destination every year.span></p>
                    <p class="login-list"><i class="fa-regular fa-hand-point-right login-list-icon"></i><span class="list-para">The fair allows students to gain all the essential knowledge about the entire application process.</span></p>

                </div>

            </div>
        </div>
    </div>
</div>


@stop


