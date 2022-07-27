@extends ('frontend.layouts.app')
@section('content')

    <!-- services start  -->
    @if ($services->isNotEmpty())
        <div id="Paris" class="tabcontent">
            <section id="inservices">
                <div class="container">
                    <h3 class="ins_head">Our Services</h3>

                    <div class="row g-0">
                        <div class="col-lg-4">
                            @foreach($service_category as $data)
                            <p class="sr_row bdr sr_row_01 " id="comp">{{$data->title}} <i
                                    class="fa fa-caret-right" aria-hidden="true"></i></p>
                            <p class="sr_row sr_row_01 bdr" id="tx1">Taxation <i class="fa fa-caret-right"
                                    aria-hidden="true"></i> </p>
                            @endforeach
                        </div>

                        <div class="col-lg-8 cont-0  ">


                            <div class="comp ">

                                <div class=" s_cont ">
                                    <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Public Company
                                        Registration</h6>
                                    <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Autem,
                                        consequuntur cum
                                        ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                                    <div class="insbtn">
                                        <div class="dbtn"><a href="">Detais</a></div>
                                        <div class="bbtn " id="myBtn">Book Services</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tax">

                                <div class=" s_cont ">
                                    <h6 class="insleft_title"><i class="fa fa-book" aria-hidden="true"></i>Taxation</h6>
                                    <p class="insleft_para pb-0 mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Autem,
                                        consequuntur cum
                                        ea commodi fugiat accusantium deleniti! Cumque explicabo.</p>
                                    <div class="insbtn">
                                        <div class="dbtn"><a href="">Detais</a></div>
                                        <div class="bbtn " id="myBtn">Book Services</div>
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

                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
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
    @endif
@stop
