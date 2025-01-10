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
                                        <h5 class="m-b-10">Cameras</h5>
                                        <p class="m-b-0">Welcome to Cameras</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="/dashboard"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="/cameras">Cameras</a>
                                        </li>
                                        {{-- <li class="breadcrumb-item"><a href="#!">Google Maps</a> --}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                </div>
            </div>
        </div>
    </div>
</div>


@endsection