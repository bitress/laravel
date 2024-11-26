@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content">
        <div class="animated fadeInRightBig">
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
            <form action="{{ route(name: 'add-book') }}" method="post" enctype="multipart/form-data">
                @csrf
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h4 class="mb-0">Add a New Book</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" id="title" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter a brief description of the book"></textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="country_id">Country Code</label>
                                    <input type="number" class="form-control" name="country_id" id="country_id" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="stock">Stock</label>
                                    <input type="number" class="form-control" name="stock" id="stock" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="amount">Amount (Price)</label>
                                    <input type="number" step="0.01" class="form-control" name="amount" id="amount" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="photo">Book Cover Photo</label>
                                    <input type="file" class="form-control" name="photo" id="photo">
                                </div>

                                <div class="form-group  mb-3">
                                    <button class="btn btn-primary btn-lg" type="submit">Save Book</button>
                                </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
