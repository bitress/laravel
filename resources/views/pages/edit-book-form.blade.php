@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content">
        <div class="animated fadeInRightBig">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('book.update', $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Edit Book</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $data->title) }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter a brief description of the book">{{ old('description', $data->description) }}</textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="country_id">Country Code</label>
                            <input type="number" class="form-control" name="country_id" id="country_id" value="{{ old('country_id', $data->country_id) }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control" name="stock" id="stock" value="{{ old('stock', $data->stock) }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="amount">Amount (Price)</label>
                            <input type="number" step="0.01" class="form-control" name="amount" id="amount" value="{{ old('amount', $data->amount) }}" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="photo">Book Cover Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                            <small>Current Image: <img src="{{ asset('uploads/'.$data->photo) }}" width="100"></small>
                        </div>

                        <div class="form-group mb-3">
                            <button class="btn btn-primary btn-lg" type="submit">Update Book</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
