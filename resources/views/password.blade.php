@extends('layout')
@section('content')
    

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn"></h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <!-- <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                                </ol>
                            </nav> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="f orm-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="position-relative d-inline text-primary ps-4">CHANGE YOUR PASSWORD</h1>
                            <h2 class="mt-2">Make Changes</h2>
                            @if(session('success'))
                                <h2 class="mt-2">{{session('success')}}</h2>
                            @endif
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form action="" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="name" placeholder="Email" name="email">
                                            <label for="email">E-mail</label>
                                        </div> 
                                    </div>
                                    <!-- <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="email" placeholder="password">
                                            <label for="password">New Password</label>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div> -->
                                     <!-- <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Forget password?</label>
                                        </div> 
                                    </div> -->
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">save</button>
                                    </div>

                                    <!-- <div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Forget password?</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        @endsection