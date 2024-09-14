@extends('Layout.master')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-12">
            <!-- Welcome Banner -->
            <div class="alert alert-info text-center" role="alert">
                <h4 class="alert-heading">Welcome to the Dashboard!</h4>
                <p>Here you can manage your courses, view statistics, and monitor recent activities.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Overview</h5>

                    <!-- Card for Course Statistics -->
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card text-white bg-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Total Courses</h5>
                                    <p class="card-text">{{ $totalCourses }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card text-white bg-success">
                                <div class="card-body">
                                    <h5 class="card-title">Active Courses</h5>
                                    <p class="card-text">{{ $activeCourses }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card text-white bg-warning">
                                <div class="card-body">
                                    <h5 class="card-title">Upcoming Courses</h5>
                                    <p class="card-text">{{ $upcomingCourses }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-3">
                            <div class="card text-white bg-danger">
                                <div class="card-body">
                                    <h5 class="card-title">Expired Courses</h5>
                                    <p class="card-text">{{ $expiredCourses }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activities -->
                    <h5 class="card-title">Recent Activities</h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($recentActivities as $activity)
                                    <tr>
                                        <td>{{ $activity->name }}</td>
                                        <td>Updated</td>
                                        <td>
                                            {{ $activity->updated_at ? $activity->updated_at->format('Y-m-d H:i:s') : 'N/A' }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No recent activities</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
