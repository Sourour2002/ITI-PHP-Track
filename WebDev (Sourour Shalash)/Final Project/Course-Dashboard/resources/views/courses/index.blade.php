@extends('Layout.master')

@section('content')

<div class="pagetitle">
      <h1>Courses</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item active">Courses</li>
        </ol>
      </nav>
</div>

<section class="section dashboard">
  <div class="row">
    <div class="col-12">
      <div class="card top-selling overflow-auto">
        <div class="card-body pb-0">
          <h5 class="card-title">Courses <span>| List</span></h5>

          <div class="mb-3 text-end">
            <a class="btn btn-primary" href="{{ route('courses.create') }}">
              Create New Course
            </a>
          </div>

          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Start Date</th>
                <th scope="col">Price</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($courses as $course)
              <tr>
                <td class="fw-bold">{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ \Carbon\Carbon::parse($course->date)->format('Y-m-d') }}</td>
                <td>${{ number_format($course->price, 2) }}</td>
                <td>
                  <a class="btn btn-primary" href="{{ route('courses.show', $course->id) }}">Details</a>
                  <a class="btn btn-success" href="{{ route('courses.edit', $course->id) }}">Edit</a>
                  <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection
