@extends('layouts.app')

@section('content')

@include('inc.alert')
<div class="container">
<p class="font-monospace" style="font-size: 24px;">Add new department</p>
    <a href="{{ route('department') }}" class="btn btn-secondary mt-3">Back</a>

    <div class="border border-dark mt-3 p-3">
        <form action="{{ route('department.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Department Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" name="location" id="name" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
