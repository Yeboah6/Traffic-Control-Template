@extends('layouts.app')
@section('content')
@include('includes.preloader')
   
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
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to Traffic Management</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
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
                                        <div class="row">
                                            <!-- Material statustic card start -->
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-user text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>10K</h5>
                                                                        <p class="text-muted m-b-0">Locations</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-volume-down text-c-green f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>100%</h5>
                                                                        <p class="text-muted m-b-0">Cameras</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-file-alt text-c-red f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>2000+</h5>
                                                                        <p class="text-muted m-b-0">Traffic Signals</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="far fa-envelope-open text-c-blue f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>120</h5>
                                                                        <p class="text-muted m-b-0">Online</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-stat-card">
                                                    <div class="card-block">
                                                        <div class="row align-items-center b-b-default">
                                                            <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-share-alt text-c-purple f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>1000</h5>
                                                                        <p class="text-muted m-b-0">People</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-sitemap text-c-green f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>600</h5>
                                                                        <p class="text-muted m-b-0">Vehicle</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row align-items-center">
                                                            <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-signal text-c-red f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>350</h5>
                                                                        <p class="text-muted m-b-0">Returns</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6 p-b-20 p-t-20">
                                                                <div class="row align-items-center text-center">
                                                                    <div class="col-4 p-r-0">
                                                                        <i class="fas fa-wifi text-c-blue f-24"></i>
                                                                    </div>
                                                                    <div class="col-8 p-l-0">
                                                                        <h5>100%</h5>
                                                                        <p class="text-muted m-b-0">Connections</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-12">
                                                <div class="card mat-clr-stat-card text-white green ">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-green">
                                                                <i class="fas fa-star mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                                <h5>4000+</h5>
                                                                <p class="m-b-0">Ratings Received</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card mat-clr-stat-card text-white blue">
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-3 text-center bg-c-blue">
                                                                <i class="fas fa-trophy mat-icon f-24"></i>
                                                            </div>
                                                            <div class="col-9 cst-cont">
                                                                <h5>17</h5>
                                                                <p class="m-b-0">Achievements</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <style>
                                                /* Default iframe dimensions */
                                                iframe {
                                                    width: 600px;
                                                    height: 350px;
                                                }
                                            
                                                /* Adjust iframe dimensions for screens below 1100px */
                                                @media screen and (max-width: 1850px) {
                                                    iframe {
                                                        width: 400px;
                                                        height: 300px;
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
                                            
                                                /* General layout styles */
                                                .row {
                                                    display: flex;
                                                    flex-wrap: wrap;
                                                    justify-content: space-between;
                                                }
                                            
                                                .col-md-4 {
                                                    flex: 0 0 30%; /* Default card width */
                                                    margin-bottom: 15px;
                                                    display: flex;
                                                    justify-content: center;
                                                }
                                            
                                                @media screen and (max-width: 1433px) {
                                                    .col-md-4 {
                                                        flex: 0 0 50%; /* Adjust card width for smaller screens */
                                                    }
                                                }
                                            </style>
                                            
                                            
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="card text-center order-visitor-card">
                                                            <iframe src="https://media.geeksforgeeks.org/wp-content/uploads/20231020155223/Full-Stack-Development-_-LIVE-Classes-_-GeeksforGeeks.mp4" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-4">
                                                        <div class="card text-center order-visitor-card">
                                                            <iframe src="https://media.geeksforgeeks.org/wp-content/uploads/20231020155223/Full-Stack-Development-_-LIVE-Classes-_-GeeksforGeeks.mp4" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-4">
                                                        <div class="card text-center order-visitor-card">
                                                            <iframe src="https://media.geeksforgeeks.org/wp-content/uploads/20231020155223/Full-Stack-Development-_-LIVE-Classes-_-GeeksforGeeks.mp4" frameborder="0" allowfullscreen></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="card text-center order-visitor-card" style="height: 350px; width: 600px;">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Total Subscription</h6>
                                                                <h4 class="m-t-15 m-b-15">
                                                                    <i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652
                                                                </h4>
                                                                <p class="m-b-0">48% From Last 24 Hours</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="col-md-4">
                                                        <div class="card text-center order-visitor-card" style="height: 350px; width: 600px;">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Order Status</h6>
                                                                <h4 class="m-t-15 m-b-15">
                                                                    <i class="fa fa-arrow-up m-r-15 text-c-green"></i>6325
                                                                </h4>
                                                                <p class="m-b-0">36% From Last 6 Months</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="col-md-4">
                                                        <div class="card text-center order-visitor-card" style="height: 350px; width: 600px;">
                                                            <div class="card-block">
                                                                <h6 class="m-b-0">Total Comment</h6>
                                                                <h4 class="m-t-15 m-b-15">
                                                                    <i class="fa fa-comments m-r-15 text-c-blue"></i>489
                                                                </h4>
                                                                <p class="m-b-0">15% Increase</p>
                                                            </div>
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