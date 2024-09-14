@extends('Layout.master')

@section('content')

<div class="pagetitle">
    <h1>Create Course</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Course Form</h5>
                    <form method="POST" action="{{ route('courses.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-sm-2 col-form-label">Course Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter course name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-sm-2 col-form-label">Start Date</label>
                            <div class="col-sm-10">
                                <input type="date" name="date" class="form-control" id="date" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input type="number" name="price" class="form-control" id="price" placeholder="Enter price" step="0.01" min="0" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
