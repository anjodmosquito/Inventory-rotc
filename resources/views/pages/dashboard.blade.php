@extends('layouts.app')

@section('content')

@include('inc.alert')

<div class="container-fluid pt-6 px-6" >
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Department of Military Science and Tactics</h1>
            <p class="col-md-12 fs-4">
                Surigao del Norte State University Reserve Officers Training Corps
            </p>
                <div class="col-md-12">
                    <img src="images\rotclogo.jpg" class="img-fluid" style="width: 200px; height: auto;">
                        <button type="button" class="btn btn-light btn-lg">
                            <a href="https://www.facebook.com/SNSUMainCampusROTCU" target="_blank">
                                <i class="fa fa-envelope me-lg-2"></i>
                                <strong><span class="d-none d-lg-inline-flex">SNSU- Main Campus ROTC Unit Facebook Unit Page</span></strong>
                            </a>
                        </button>
                </div>
        </div>
    </div>
</div>
@endsection
