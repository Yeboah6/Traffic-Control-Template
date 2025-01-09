@extends('layouts.app')
@section('content')
@include('includes.preloader')

<style>
    /* Default iframe dimensions */
    iframe {
        width: 800px;
        height: 550px;
    }

    .select1 {
        margin-left: 350px;
        margin-top: 50px;
    }

    .two-inputs {
        display: flex;
        justify-content:space-between;
    }

    /* input {
        width: 300px;
    } */

    /* Adjust iframe dimensions for screens below 1100px */
    @media screen and (max-width: 1850px) {
        iframe {
            width: 500px;
            height: 400px;
        }

        .select1 {
            margin-left: 150px;
        }

        .two-inputs {
            display: block;
        }
    }

    /* Further adjustment for very small screens */
    @media screen and (max-width: 600px) {
        iframe {
            width: 540px; /* Full width */
            height: 250px; /* Adjust height for smaller screens */
        }
    }

    @media screen and (max-width: 450px) {
        iframe {
            width: 370px; /* Full width */
            height: 250px; /* Adjust height for smaller screens */
        }
    }

    @media screen and (max-width: 1433px) {
        .col-md-4 {
            flex: 0 0 45%; /* Adjust card width for smaller screens */
        }
    }
</style>
   
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('includes.nav-header')

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    @include('includes.sidenav')

                    <div class="pcoded-content">

                           <!-- Page-header start -->
                           <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Add Camera</h5>
                                            <p class="m-b-0">Lorem Ipsum is simply dummy text of the printing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="/add-camera">Camera</a>
                                            </li>
                                            {{-- <li class="breadcrumb-item"><a href="#!">Google Maps</a> --}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->

                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="card">
                                        <div class="col-sm-12">
                                            
                                                <div class="row">

                                                    <div class="col-md-4" style="display: flex; justify-content: center;margin-top: 20px;">
                                                        <div class="card" >
                                                            {{-- <div class="card-block"> --}}
                                                                <iframe src="https://media.geeksforgeeks.org/wp-content/uploads/20231020155223/Full-Stack-Development-_-LIVE-Classes-_-GeeksforGeeks.mp4" frameborder="0" allowfullscreen></iframe>
                                                            {{-- </div> --}}
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <!-- Basic Form Inputs card start -->
                                                        <div class="card-block">
                                                            <form class="form-material" action="" method="post">

                                                                <div class="form-group form-default select1">
                                                                    <select name="select" class="form-control">
                                                                        <option value="opt1"></option>
                                                                        <option value="opt2">Type 2</option>
                                                                        <option value="opt3">Type 3</option>
                                                                        <option value="opt4">Type 4</option>
                                                                        <option value="opt5">Type 5</option>
                                                                        <option value="opt6">Type 6</option>
                                                                        <option value="opt7">Type 7</option>
                                                                        <option value="opt8">Type 8</option>
                                                                    </select>
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label">Location</label>
                                                                </div>

                                                                <div class="form-group form-default select1">
                                                                    <select name="select" class="form-control">
                                                                        <option value="opt1"></option>
                                                                        <option value="opt2">Type 2</option>
                                                                        <option value="opt3">Type 3</option>
                                                                        <option value="opt4">Type 4</option>
                                                                        <option value="opt5">Type 5</option>
                                                                        <option value="opt6">Type 6</option>
                                                                        <option value="opt7">Type 7</option>
                                                                        <option value="opt8">Type 8</option>
                                                                    </select>
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label">Camera</label>
                                                                </div>

                                                                <div class="form-group form-default select1">
                                                                    <input type="text" name="footer-email" class="form-control">
                                                                    <span class="form-bar"></span>
                                                                    <label class="float-label">Camera Name</label>
                                                                </div>

                                                                <div class="form-group form-default select1 two-inputs" >
                                                                    <div class="form-group form-default">
                                                                        <input type="text" name="road_from" class="form-control" placeholder="">
                                                                        <span class="form-bar"></span>
                                                                        <label class="float-label">Road From</label>
                                                                    </div>

                                                                    <div class="form-group form-default">
                                                                        <input type="text" name="road_to" class="form-control" placeholder="">
                                                                        <span class="form-bar"></span>
                                                                        <label class="float-label">Road To</label>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group form-default select1">
                                                                    <button class="btn btn-primary">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                                <div id="styleSelector"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   @endsection