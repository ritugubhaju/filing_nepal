<section id="footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-5">
          <div class="fright">
            <img src="./image (3).png" alt="" class="filling_logo">
            <p class="pt-4">{{setting('footer')}}</p>
            <h5 class="pt-3 ">Social Media</h5>
            @if(setting('facebook') !=null)
             <p class="top d-flex justify-content-start"><a href="{{setting('facebook')}}"><i class="fa fa-facebook " aria-hidden="true"></i> </a>
            @endif

            @if(setting('instagram') !=null)
            <a href="{{setting('instagram')}}"> <i class="fa fa-instagram mx-4" aria-hidden="true"></i></a>
            @endif

            @if(setting('twitter') !=null)
            <a href="{{setting('twitter')}}">  <i class="fa fa-twitter" aria-hidden="true"></i> </a>
            </p>
            @endif
          </div>

        </div>
        <div class="col-lg-3">
          <div class="fmidle tab">
            <h5>Links</h5>
            <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                onclick="openCity(event, 'London' )" id="defaultOpen"><a class="links" href="{{url('')}}">Home</a></button> </p>
            <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                onclick="openCity(event, 'About' )"><a class="links" href="{{url('about')}}">About </a> </button> </p>
            <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                onclick="openCity(event, 'Paris' )"><a class="links" href="{{url('services')}}">Services</a></button> </p>
            <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i><button class="tablinks"
                onclick="openCity(event, 'Request' )"><a class="links" href="{{url('recent-quote')}}">Request Quote</a></button> </p>
            <p class="fsspan"><i class="fa fa-hand-o-right" aria-hidden="true"></i> <button class="tablinks"
                onclick="openCity(event, 'Contact' )"><a class="links" href="{{url('contact')}}">Contact Us</a></button></p>




          </div>
        </div>

        <div class="col-lg-4 pt-5 ">
          <div class="fnews">
            <div>
              <h5>News Letters</h5>
              <p>Lorem ipsum dolor sit amet.</p>
              <div class="fmail px-4">
                <input type="email" placeholder="Mail Id">
                <button type="submit"><span>&#8594;</span></button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
