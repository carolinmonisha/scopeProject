@extends('layout')
@section('content')
    
            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Registration</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">registration</li>
                                </ol>
                            </nav>
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
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
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
                            <h6 class="position-relative d-inline text-primary ps-4"></h6>
                            <h2 class="mt-2">For Registration</h2>
                           
                                @if(session('success'))

                                <h2 class="mt-2 text-danger">{{session('success')}}</h2>
                                @endif
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            @endif
                            
                            <form method='post' action="/Registration" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="First Name" name='firstname'>
                                            <label for="name">First Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="email" placeholder="Last Name" name='lastname'>
                                            <label for="email">Last Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" aria-label="Default select example" name='gender'>
                                                    <option selected>Gender</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="Date" class="form-control" id="email" placeholder="Date of Birth" name='dateofbirth'>
                                            <label for="Date">Date of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="tel" class="form-control" id="email" placeholder="PhoneNumber" name='phonenumber'>
                                            <label for="email">PhoneNumber</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
                                            <label for="email"> Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating ">
                                            <select class="form-control" name="country" id="country"></select> <br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating ">
                                        <select name="state" class="form-control" id="state"></select> <br>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating ">
                                        <select name="city" class="form-control" id="city"></select>

                                        </div>
                                    </div>
                                    
                                            <!-- <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Message</label>
                                        </div> -->
                                     </div><br>
                                     <div>
                                        <label for="">HOBBIES</label>
                                        <div class="form-check">
                                        
                                        <input class="form-check-input" type="checkbox" value="badminton" id="flexCheckDefault" name='hobbies[]'>
                                        <label class="form-check-label" for="hobbies">
                                            Badminton
                                        </label>
                                    </div>
                                     <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Drawing" id="flexCheckChecked" checked name='hobbies[]'>
                                        <label class="form-check-label" for="flexCheckChecked">
                                             Drawing
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Reading_Books" id="flexCheckChecked" checked name='hobbies[]'>
                                        <label class="form-check-label" for="flexCheckChecked">
                                             Reading Books
                                        </label>
                                    </div><br>
                                    <div class="form-check">
                                        <input class="form-control" type="file"  id="flexCheckChecked"  name='image'>
                                        
                                    </div>
                                     </div><br>
                                        <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        

        @endsection