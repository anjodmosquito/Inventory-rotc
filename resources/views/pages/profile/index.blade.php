@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
<p class="font-monospace" style="font-size: 30px;">Profile</p>
    <a href="{{ route('profile.showEdit') }}" class="btn btn-primary mt-3">Edit</a>
    <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">Back</a>
    <div class="card border p-4 mt-3">
    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="email" class="form-control" id="name" name="name" value="{{ $profile->name }}" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{ $profile->email }}" disabled>
        </div>
    </div>
</div>
</div>
@endsection
