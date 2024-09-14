@extends('Layout.master')

@section('content')

<div class="pagetitle">
      <h1>Course Details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
          <li class="breadcrumb-item active">Course Details</li>
        </ol>
      </nav>
</div>

<section class="section dashboard">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Course Information</h5>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Course ID</label>
            <div class="col-sm-10">
              <p class="form-control-plaintext">{{ $course->id }}</p>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Course Name</label>
            <div class="col-sm-10">
              <p class="form-control-plaintext">{{ $course->name }}</p>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Start Date</label>
            <div class="col-sm-10">
              <p class="form-control-plaintext">{{ \Carbon\Carbon::parse($course->date)->format('Y-m-d') }}</p>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Price</label>
            <div class="col-sm-10">
              <p class="form-control-plaintext">${{ number_format($course->price, 2) }}</p>
            </div>
          </div>

          <div class="text-center">
            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-success">Edit</a>
            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
