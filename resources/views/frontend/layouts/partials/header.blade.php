<section id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">

            <p>Call Now : <a  class="links" href="tel:{{setting('phone')}}">{{setting('phone')}}</a>


              <span class="ps-5"> Email Us:   <a class="links" href="mailto:{{setting('email')}}"> </a></span>
            </p>

          </div>

        </div>


        <div class="col-lg-6 text-end">
            <button><a  href="{{ route('register') }}" class="dbtn" class="help d-md-show"><i class="d-icon-user"></i>
                Register</a></button>
                <button><a  href="{{ route('client-login') }}" class="dbtn" class="help d-md-show"><i class="d-icon-user"></i>
                    Login</a></button>
            @if(setting('facebook') !=null)
                <p class="top d-flex justify-content-end">
                    <a href="{{setting('facebook')}}">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
            @endif

            @if(setting('instagram') !=null)
             <a href="{{setting('instagram')}}"><i class="fa fa-instagram mx-4" aria-hidden="true"></i>
             </a>
            @endif

            @if(setting('twitter') !=null)
                <i class="fa fa-twitter" aria-hidden="true"></i>
            @endif
          </p>
        </div>
      </div>
    </div>
  </section>
  <section id="nav">
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="{{ url('') }}" class="tablinks" onclick="openCity(event, 'London' )"><img src="{{ asset('images/fl-LOGO.png') }}"
            alt="" class="filling_logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="tab">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                @foreach($menus as $menu)
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url($menu->url) }}" class="tablinks">
                        {{$menu->name}}
                    </a>
                    </li>
                @endforeach
            </ul>

          </div>
        </div>
      </div>
    </nav>
  </section>
