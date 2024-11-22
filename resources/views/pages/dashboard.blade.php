@extends('layouts.app')

@section('content')

<div class="container">
    <!-- Breadcrumbs -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>

    <!-- Cards Section -->
    <div class="row mb-4 bg-">
        <div class="col-md-4">
            <div class="card huge-card bg-primary">
                <div class="card-body ">
                    <i class="fa fa-bell icon-large text-warning"></i>
                    <h4 class="card-title">Notifications</h4>
                    <p class="card-text">Stay up to date with your latest notifications.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card huge-card bg-warning">
                <div class="card-body">
                    <i class="fa fa-thumbs-up icon-large text-primary"></i>
                    <h4 class="card-title">Likes</h4>
                    <p class="card-text">See your most popular content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card huge-card bg-danger">
                <div class="card-body">
                    <i class="fa fa-warning icon-large text-danger"></i>
                    <h4 class="card-title">Warnings</h4>
                    <p class="card-text">Important warnings regarding your account.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="card">
        <div class="card-header">
            <h4>Recent Activities</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Activity</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Liked your post</td>
                        <td>2024-11-20</td>
                        <td><span class="badge bg-success">Completed</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>New comment on your post</td>
                        <td>2024-11-19</td>
                        <td><span class="badge bg-info">Pending</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Account warning: Suspicious activity</td>
                        <td>2024-11-18</td>
                        <td><span class="badge bg-danger">Urgent</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection
