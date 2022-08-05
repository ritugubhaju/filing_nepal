  <!-- client page start  -->
  @extends('frontend.layouts.app')

  @section('content')

      <div>
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
                                      <p class="d_para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit
                                          corrupti dolor ipsam?
                                          Nesciunt quos
                                          accusantium adipisci officia nulla eius distinctio eum eligendi ad ratione
                                          deserunt rerum fugiat,
                                          voluptatibus quis suscipit!
                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, animi ut
                                          minus
                                          exercitationem
                                          aliquid labore iste corporis quisquam. Ipsum odit reiciendis quae magni debitis
                                          tempore fuga
                                          similique,
                                          porro, quod quia nemo enim dolorum ea ex. Laborum ratione rerum officiis error
                                          amet corporis maxime.
                                          Facere nihil deserunt optio ipsum quidem nobis!</p>
                                     
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

  @stop
  <!-- client page end  -->
