@extends('frontend.layouts.app')

@section('content')

<div id="London" class="tabcontent">


    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
          <img class="home_slider"
            src="https://t4.ftcdn.net/jpg/02/96/35/27/240_F_296352702_2RetcMbcX7gjw19ItLqNf6uiUpv3Ye1R.jpg" alt="...">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="cright ">
                  <h2 class="cright_title">What do you want to do ?</h2>
                  <select class="form-select form_0 pb-0 mb-4" aria-label="Default select example">
                    <option selected>Find Here...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <button class="seeks" type="submit">Seek Services</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="2000">
          <img class="home_slider"
            src="https://t3.ftcdn.net/jpg/02/50/06/78/240_F_250067805_cui2Qn216VYrebYDRbheYBIXyMbGEaPg.jpg"
            class="d-block w-100" alt="...">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="cright ">
                  <h2 class="cright_title">What do you want to do ?</h2>
                  <select class="form-select form_0 pb-0 mb-4" aria-label="Default select example">
                    <option selected>Find Here...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <button class="seeks" type="submit">Seek Services</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <section id="about_us">
      <h2 class="text-center py-4 rtitle_0">How we work</h2>
      <div class="container">
        <div class="row text-center ">
          <div class="col-lg-3">
            <div class="abox">
              <p class="astep">01 </p>
              <i class="fa fa-circle" aria-hidden="true"></i>

            </div>
          </div>
          <div class="col-lg-3">
            <div class="abox">
              <p class="astep">02 </p>
              <i class="fa fa-circle" aria-hidden="true"></i>

            </div>
          </div>
          <div class="col-lg-3">
            <div class="abox">
              <p class="astep">03 </p>
              <i class="fa fa-circle" aria-hidden="true"></i>

            </div>
          </div>
          <div class="col-lg-3">

            <p class="astep">04 </p>
            <i class="fa fa-circle" aria-hidden="true"></i>


          </div>



        </div>
        <div class="row py-4">
          <div class="col-lg-3">
            <div class="abox_1">
              <!-- <img class="img-fluid"
                src="https://img.freepik.com/free-photo/touching-light-male-hand-demonstrating-gesture-getting-touch-isolated-black-studio-background-concept-human-emotions-feelings-phycology-business_155003-33799.jpg?size=626&ext=jpg"
                alt=""> -->
                <i class="fa fa-info
                "></i>
              <h5 class="py-2 we_work_h5 ">Your request</h5>
              <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Unde</p>
              <div class="arrow">

                <span>&#8594;</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="abox_1">
              <!-- <img class="img-fluid"
                src="https://img.freepik.com/free-photo/man-working-night_1098-12798.jpg?size=626&ext=jpg" alt=""> -->
                <i class="fa fa-wrench" aria-hidden="true"></i>

              <h5 class="py-2 we_work_h5 ">We Prepared</h5>
              <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Unde</p>
              <div class="arrow">

                <span>&#8594;</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="abox_1">
              <i class="fa fa-cogs" aria-hidden="true"></i>

              <h5 class="py-2  we_work_h5">Required Process</h5>
              <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Unde</p>
              <div class="arrow">

                <span>&#8594;</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="abox_1">
              <i class="fa fa-refresh" aria-hidden="true"></i>

              <h5 class="py-2 we_work_h5 ">Assured Compliance</h5>
              <p class="pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Unde</p>
              <div class="arrow">

                <span>&#8594;</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="services">
      <div class="container">
        <h2 class="rtitle_0">Services</h2>
        <div class="row py-5">
          <div class="col-lg-6">
            <img class="img-fluid "
              src="https://img.freepik.com/premium-photo/crop-man-uniform-making-notes-clipboard-while-working-professional-garage_251859-4485.jpg?size=626&ext=jpg"
              alt="">
          </div>
          <div class="col-lg-6">
            <h2 class="rtitle_0">Why Filing Nepal?</h2>
            <p class="d_para">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum ipsam tempora quas perferendis eos aliquam
              modi beatae esse consequuntur, veritatis sint, excepturi hic necessitatibus architecto enim? Ea, cum.
              Sunt, minima! Rerum labore dicta, nisi quisquam exercitationem sint odio illum unde hic necessitatibus
              minima distinctio nihil? Perferendis esse quisquam odit ipsam.
            </p>
          </div>
        </div>
        <div class="container">
            <div class="m-4">
                <ul class="nav nav-pills my-5" id="myTab">
                    @if (isset($service_category))
                        @foreach ($service_category as $key => $data)
                            <li class="nav-item">
                                <a href="#{{ $data->slug }}"
                                    class="nav-link {{ $key == 0 ? 'active' : '' }}">{{ $data->title }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
                <div class="tab-content">
                    @if (isset($service_category))
                        @foreach ($service_category as $key => $data)
                            <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="{{ $data->slug }}">
                                @foreach ($data->categories as $service)
                                    <div class=" s_cont ">
                                        <h6 class="insleft_title"><i class="fa fa-book"
                                                aria-hidden="true"></i>{{ $service->title }}
                                        </h6>
                                        <p class="insleft_para pb-0 mb-0">{!! $service->content !!}</p>
                                        <div class="insbtn">
                                            <div class="dbtn"><a href="{{ route('services') }}">View Now</a></div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
      </div>
    </section>
    <section id="testimonials">
        <div class="container ">
            <h2 class="px-5 rtitle_0">Our Clients</h2>
            <div class="row align-items-center">
                <div class="col-lg-5 d-flex align-items-center">
                    <div id="tes_slider">
                        <div id="carouselExampleDark" class="carousel  slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner pt-5 mt-5">
                              @foreach ($clients as $key => $data )
                              <div class="carousel-item {{ $key == 0 ? 'active' : '' }} text-center p-4 " data-bs-interval="1000">

                                  <img class="c_height"
                                      src="{{ asset($data->image_path) }}"
                                      alt="">
                                  <h4 class="pt-3 ">{{$data->title}}</h4>
                                  <h6 class="test_icon">{{$data->position}} at {{$data->company_name}} <i class="fa fa-twitter" aria-hidden="true"></i>
                                  </h6>
                                  <p>{!!$data->content!!}</p>
                              </div>
                              @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon text-light" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon text-light" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="sbtn tablinks serv_view" onclick="openCity(event, 'Client')">View All</div>
                    <div class="cc"></div>



                    <div class="owl-carousel pe-0 me-0">
                        <div class="  slider_1">
                            <div class="row pe-0 me-0">
                              @foreach ($clients as $data)
                              <div class="col-lg-4">
                                  <img class="img-fluid"
                                      src="{{ asset($data->image_path) }}"
                                      alt="">
                              </div>
                              @endforeach
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
  </div>
  <!-- services start  -->

  <div id="Paris" class="tabcontent">
    <section id="inservices">
      <div class="container">
        <h3 class="ins_head">Our Services</h3>

        <div class="row g-0">
          <div class="col-lg-4">
            <p class="sr_row bdr
           sr_row_01 " id="comp1">Company Registration <i class="fa fa-caret-right" aria-hidden="true"></i></p>
            <p class="sr_row sr_row_01 bdr" id="tx1">Taxation <i class="fa fa-caret-right" aria-hidden="true"></i> </p>
            <p class="sr_row sr_row_01 bdr" id="compli1">Compliance <i class="fa fa-caret-right" aria-hidden="true"></i>
            </p>
            <p class="sr_row sr_row_01 bdr" id="writ1">Writ<i class="fa fa-caret-right" aria-hidden="true"></i></p>
            <p class="sr_row sr_row_01 bdr1" id="coop1">Cooperation <i class="fa fa-caret-right" aria-hidden="true"></i>
            </p>
          </div>

          <div class="col-lg-8 cont-0  ">


            <div class="comp ">

              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Public Company Registration</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr ">
              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Public Company Registration</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn1">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr">
              <div class="s_cont  ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Public Company Registration
                </h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn2">Book Services</div>

                </div>



              </div>
            </div>
            <div class="tax">

              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Taxation</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr ">
              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Taxation</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn1">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr">
              <div class="s_cont  ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Taxation
                </h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn2">Book Services</div>

                </div>



              </div>
            </div>
            <div class="compli">
              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Compliance</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr ">
              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Compliance</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn1">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr">
              <div class="s_cont  ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Compliance
                </h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn2">Book Services</div>

                </div>



              </div>
            </div>
            <div class="writ">
              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Writ</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr ">
              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Writ</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn1">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr">
              <div class="s_cont  ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Writ
                </h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn2">Book Services</div>

                </div>



              </div>
            </div>
            <div class="coop">

              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Cooperation</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr ">
              <div class=" s_cont ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Cooperation</h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn1">Book Services</div>
                </div>
              </div>
              <hr class="s_bdr">
              <div class="s_cont  ">
                <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Cooperation
                </h6>
                <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem,
                  consequuntur cum
                  ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                <div class="insbtn">
                  <div class="dbtn"><a href="">Detais</a></div>
                  <div class="bbtn " id="myBtn2">Book Services</div>

                </div>



              </div>
            </div>




    </section>
    <!-- services modal start  -->
    <div class="container">
      <div class="row">
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content1">
            <div class="rspan"> <span class="close">&times;</span></div>
            <div class="top_title">
              <h3>Public Company Registration</h3>
              <p>Welcome Please Enter the Details</p>
            </div>
            <div class="cdetails ">
              <h3 class="pb-2">Company Details</h3>
              <input type="text" class="pname" placeholder="Purpose Name">

              <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Select Services</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <input type="text" class="pname" placeholder="Company Address">


            </div>
            <div class="pdetails ">
              <h3 class="pt-3 pb-2">Personal Details</h3>
              <input type="text" class="pname" placeholder="Name">
              <input type="email" class="pname my-4" placeholder="Email Id">
              <div class="lpname_0">

                <input type="number" class="pname lpname" placeholder="Phone Number">



                <input type="number" class="pname  lpname" placeholder="Mobile Number">

              </div>
            </div>
            <div class="book_1 pt-5">
              <button type="submit" class="nbook">Book Now</button>
            </div>

          </div>

        </div>
      </div>

    </div>
    <!-- services modal end  -->
  </div>

  <!-- services end  -->
  <!-- requestquote start  -->
  <div id="Request" class="tabcontent">
    <div id="sbanner">

      <div class="cb_title">
        <h2>Quotation</h2>
        <a href="" class="tablinks" onclick="openCity(event, 'London' )">Home</a>>Reqest Quote
      </div>

    </div>
    <section id="rquote">
      <div class="container ">
        <h2 class="rtitle_0 pb-5">Request Quote Now</h2>
        <div class="row  mrequest g-5">
          <div class="col-lg-6">
            <div class="hinput">
              <h5>Full Name</h5>
              <input type="text" class="rinput">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hinput">
              <h5>Address</h5>
              <input type="text" class="rinput">
            </div>
          </div>

        </div>
        <div class="row  g-5 py-4 mrequest">
          <div class="col-lg-6">
            <div class="hinput">
              <h5>Your Number</h5>
              <input type="text" class="rinput">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hinput">
              <h5>Email Id</h5>
              <input type="text" class="rinput">
            </div>
          </div>

        </div>
        <div class="row  mrequest g-5">
          <div class="col-lg-6">
            <div class="hinput">
              <h5>Your Organization</h5>
              <input type="text" class="rinput">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hinput">
              <h5 class="mb-0 pb-2">Services</h5>
              <select class="form-select rinput pt-0 mt-0" aria-label="Default select example">
                <option selected></option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
              </select>
            </div>
          </div>

        </div>
        <div class="rsubmit ">
          <button type="submit " class="rsubmit_0">Submit</button>
        </div>
      </div>
    </section>
  </div>
  <!-- request quote end  -->
  <!-- contact start  -->
  <div id="Contact" class="tabcontent">
    <div id="cbanner">
      <div class="cb_title">
        <h2>Contact Now</h2>
        <p><a href="">Home</a>>Contact Us</p>
      </div>
    </div>
    <section id="contact ">
      <div class="container py-5 my-5 ">
        <div class="row  g-5">
          <div class="col-lg-6">
            <h2 class="rtitle_0 pb-5">Contact Us</h2>

            <div class="row g-3">
              <div class="col-lg-6">
                <div class="hinput">
                  <h5>Full Name</h5>
                  <input type="text" class="rinput">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hinput">
                  <h5>Email Id</h5>
                  <input type="text" class="rinput">
                </div>
              </div>

            </div>
            <div class="row g-3 py-4">
              <div class="col-lg-6">
                <div class="hinput">
                  <h5>Phone Number</h5>
                  <input type="text" class="rinput">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="hinput">
                  <h5>Mobile Number</h5>
                  <input type="text" class="rinput">
                </div>
              </div>

            </div>
            <div class="hinput">
              <h5>Subject</h5>
              <input type="text" class="rinput">
            </div>
            <div class="hinput pt-4">
              <h5>Messege</h5>
              <textarea name="" id="" cols="30" rows="10" class="rinput rmessage"></textarea>
            </div>

            <div class="rsubmit ">
              <button type="submit " class="rsubmit_0">Submit</button>
            </div>
          </div>
          <div class="col-lg-6 cmap "><iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7192911.795605831!2d79.63626048977022!3d28.323639343563105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995e8c77d2e68cf%3A0x34a29abcd0cc86de!2sNepal!5e0!3m2!1sen!2snp!4v1655451254323!5m2!1sen!2snp"
              width="600" height="83%" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
      </div>
    </section>
  </div>

  <!-- contact end  -->
  <!-- about page start  -->
  <div id="About" class="tabcontent">
    <div id="fa_banner">
      <div class="container">
        <div class="banner_content">

          <h2>About Filing Nepal</h2>

          <p><a href="" class="text-light text-decoration-none">Home</a>>About</p>

        </div>
        <!-- <div class="banner_arrow">
          <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
        </div> -->
      </div>
    </div>

    <!-- about  -->
    <section id="abt_more">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex align-items-center">
            <div>

              <h2 class="rtitle_0">About Filing Nepal</h2 class="rtitle_0">
              <p class="abt_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, error quia?
                Harum,
                dignissimos a
                voluptatum soluta et, laboriosam possimus aperiam molestias cumque illo nulla
                necessitatibus,
                porro laborum tenetur facere. Similique nobis adipisci, labore illo, eum fugiat aliquid
                velit,
                odit repellat facere minus? Aliquam facere deserunt ea excepturi et facilis delectus cumque
                . Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, assumenda! Commodi
                necessitatibus officiis quidem velit tempora voluptatum illo magni sapiente expedita sunt
                labore, ea illum. Obcaecati doloremque quo nam ex?</p>
            </div>
          </div>
          <div class="col-lg-5 text-end">
            <div class="">
              <img class="img-fluid"
                src="https://img.freepik.com/free-photo/hand-using-laptop-computer-with-virtual-screen-document-online-approve-paperless-quality-assurance-erp-management-concept_616485-61.jpg?size=626&ext=jpg"
                alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="data">
      <div class="container">
        <div class="row">
          <div class="col-lg-6   pe-5">
            <div class="ab_vission">
              <p class="d_title mb-0 pb-0  pb-3">Mission</p>
              <p class="d_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, error quia?
                Harum,
                dignissimos a
                voluptatum soluta et, laboriosam possimus aperiam molestias cumque illo nulla.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi, ducimus.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam similique nesciunt unde quam architecto
                debitis, suscipit at officiis nam perferendis.

                .</p>
            </div>


          </div>

          <div class="col-lg-6">
            <div class="ab_vission ">

              <p class="d_title mb-0 pb-0 pb-3">Vission</p>
              <p class="d_para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, error quia?
                Harum,
                dignissimos a
                voluptatum soluta et, laboriosam possimus aperiam molestias cumque illo nulla.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, fugiat?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur maxime enim esse ea eaque dolor
                ipsum neque sint, incidunt possimus?

                .</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="team">
      <div class="container">
        <h2 class="team_title">Meet Our Team</h2>
        <p class="team_para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At earum omnis, consequatur id
          dolorem
          debitis odit natus vero laborum nobis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ipsam libero quam soluta, quasi
          numquam atque amet qui, ea non culpa dolores sunt totam magni fugit ex rem in.<span class="c_content">Quis
            saepe unde voluptatibus
            Quo odio totam minus molestias velit ullam tenetur beatae eius.</span> </p>
        <div class="tbox mt-5">
          <div class="row ">
            <div class="col-lg-4">
              <div class="tbox_1">
                <div class="zoom ">
                  <img class="tp_img"
                    src="https://images.unsplash.com/photo-1655841769348-fb2f0ead0216?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzN3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                    alt="">
                  <h6>Nissan Gautam</h6>
                  <p class="pb-4">Managing Director</p>
                  <p class="pb-5 pt_icon"> <i class="fa fa-google" aria-hidden="true"></i><i class="fa fa-facebook"
                      aria-hidden="true"></i>

                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 ">
              <div class="tbox_1 ">
                <img class="tp_img"
                  src="https://images.unsplash.com/photo-1655841769348-fb2f0ead0216?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzN3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                  alt="">
                <h6>Nissan Gautam</h6>
                <p class="pb-4">Managing Director</p>
                <p class="pb-5 pt_icon"> <i class="fa fa-google" aria-hidden="true"></i><i class="fa fa-facebook"
                    aria-hidden="true"></i>

                  <i class="fa fa-instagram" aria-hidden="true"></i>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="tbox_1">
                <img class="tp_img"
                  src="https://images.unsplash.com/photo-1655841769348-fb2f0ead0216?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzN3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
                  alt="">
                <h6>Nissan Gautam</h6>
                <p class="pb-4">Managing Director</p>
                <p class="pb-5 pt_icon"> <i class="fa fa-google" aria-hidden="true"></i><i class="fa fa-facebook"
                    aria-hidden="true"></i>

                  <i class="fa fa-instagram" aria-hidden="true"></i>
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>
  </div>
  <!-- about page end   -->
  <!-- client page start  -->
  <div id="Client" class="tabcontent">
    <div class="client_0  ">
      <div class="client_top">
      </div>

      <div class="container position-relative ">


        <div class="row  ">
          <div class="client_1">
            <div class="row ">

              <div class="col-lg-7 pe-0 me-0">

                <div class="client_left">
                  <h2 class="rtitle_0">What Our Client Say</h2 class="rtitle_0">
                  <p class="d_para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit corrupti dolor ipsam?
                    Nesciunt quos
                    accusantium adipisci officia nulla eius distinctio eum eligendi ad ratione deserunt rerum fugiat,
                    voluptatibus quis suscipit!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, animi ut minus
                    exercitationem
                    aliquid labore iste corporis quisquam. Ipsum odit reiciendis quae magni debitis tempore fuga
                    similique,
                    porro, quod quia nemo enim dolorum ea ex. Laborum ratione rerum officiis error amet corporis maxime.
                    Facere nihil deserunt optio ipsum quidem nobis!</p>
                  <div class="rsubmit ">
                    <button type="submit " class="rsubmit_1">Read more</button>
                  </div>
                </div>


              </div>

              <div class="col-lg-5 ps-0 ms-0">

                <div class="client_right">
                  <img class="img-fluid"
                    src="https://img.freepik.com/premium-photo/studio-portrait-confident-caucasian-man-blue-shirt-gray-background_230115-2614.jpg?w=740"
                    alt="">
                </div>

              </div>

            </div>
          </div>
        </div>


      </div>

    </div>
    <section id="testimonials">
      <div class="container ">
        <h2 class="px-5 rtitle_0">Our Clients</h2>
        <div class="row align-items-center">
          <div class="col-lg-5 d-flex align-items-center">
            <div id="tes_slider">
              <div id="carouselExampleDark" class="carousel  slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner pt-5 mt-5">
                  <div class="carousel-item active text-center p-4 " data-bs-interval="1000">

                    <img class="c_height"
                      src="https://img.freepik.com/free-photo/serious-indian-graduate-graduation-robe-with-crossed-arms-looking-forward_496169-1338.jpg?size=626&ext=jpg"
                      alt="">
                    <h4 class="pt-3 ">xan</h4>
                    <h6 class="test_icon">ceo at xyz <i class="fa fa-twitter" aria-hidden="true"></i></h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga ipsa
                      quisquam provident laborum earum .
                      Lorem ipsum dolor sit amet, consectetur adipisicing </p>
                  </div>
                  <div class="carousel-item text-center p-4" data-bs-interval="1000">
                    <img class="c_height"
                      src="https://media.istockphoto.com/photos/man-working-at-home-picture-id1354077790?k=20&m=1354077790&s=612x612&w=0&h=5u4l-YyB1F38kN6sevx4dIYB0C-HvcPVDmOJyDPVAPw="
                      alt="">
                    <h5 class="pt-3 ">xan</h5>
                    <h6 class="test_icon">ceo at xyz <i class="fa fa-twitter" aria-hidden="true"></i></h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga ipsa
                      quisquam provident laborum earum .
                      Lorem ipsum dolor sit amet, consectetur adipisicing </p>
                  </div>
                  <div class="carousel-item text-center p-4" data-bs-interval="1000">
                    <img class="c_height"
                      src="https://media.istockphoto.com/photos/man-working-at-home-picture-id1354077790?k=20&m=1354077790&s=612x612&w=0&h=5u4l-YyB1F38kN6sevx4dIYB0C-HvcPVDmOJyDPVAPw="
                      alt="">
                    <h5 class="pt-3 d-inline-block ">xan</h5>
                    <h6 class="test_icon d-inline-block">ceo at xyz <i class="fa fa-twitter" aria-hidden="true"></i>
                    </h6>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga ipsa
                      quisquam provident laborum earum .
                      Lorem ipsum dolor sit amet, consectetur adipisicing </p>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                  data-bs-slide="prev">
                  <span class="carousel-control-prev-icon text-light" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                  data-bs-slide="next">
                  <span class="carousel-control-next-icon text-light" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="sbtn tablinks serv_view" onclick="openCity(event, 'Client')">View All</div>
            <div class="cc"></div>



            <div class="owl-carousel pe-0 me-0">
              <div class="  slider_1">
                <div class="row pe-0 me-0">
                  <div class="col-lg-4">
                    <img class="img-fluid"
                      src="https://media.istockphoto.com/photos/cube-isolated-on-black-picture-id1390331991?k=20&m=1390331991&s=612x612&w=0&h=XMQatMkZ2asC2vHlJmbyCu2uWeaZMwm3EL8Lt0dWm4o="
                      alt="">
                  </div>
                  <div class="col-lg-4">
                    <img class="img-fluid"
                      src="https://img.freepik.com/free-vector/camera-radar-logo-security-company-vector-illustration_7649-2314.jpg?size=338&ext=jpg"
                      alt="">
                  </div>
                  <div class="col-lg-4 pe-0 me-0">
                    <img class="img-fluid"
                      src="https://images.unsplash.com/photo-1612810806695-30f7a8258391?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bG9nbyUyMGltYWdlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                      alt="">
                  </div>
                </div>
                <div class="row mt-4 pe-0 me-0">
                  <div class="col-lg-4">
                    <img class="img-fluid"
                      src="https://images.unsplash.com/photo-1636051028886-0059ad2383c8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bG9nbyUyMGltYWdlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                      alt="">
                  </div>
                  <div class="col-lg-4">
                    <img class="img-fluid"
                      src="https://images.unsplash.com/photo-1611162616475-46b635cb6868?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDh8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                      alt="">
                  </div>
                  <div class="col-lg-4 pe-0 me-0">
                    <img class="img-fluid"
                      src="https://images.unsplash.com/photo-1636044594149-6e2f289c3868?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDJ8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                      alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- client page end  -->

  @stop
