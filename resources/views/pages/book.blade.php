@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('success-delete'))
    <div class="alert alert-warning">
        {{ session('success-delete') }}
    </div>
@endif

<div class="wrapper wrapper-content">
    <div class="animated fadeInRightBig">
        <a href="{{ url('/book/new') }}" class="btn btn-primary">Add book</a>

        <div class="row">
            @foreach($data as $d)
                <div class="col">
                    <div class="card d-flex" style="width: 300px;">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <img class="card-img" src="{{ asset('uploads/' . $d->photo) }}" alt="Card image" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $d->title }}</h4>
                                    <p class="card-text">
                                        Country code: {{ $d->country_id }}
                                        <br>Stocks: {{ $d->stock }}
                                        <br>Price: {{ $d->amount }}
                                    </p>
                                    <a href="{{ url('/book/edit',$d->id) }}" class="btn btn-info" onclick="return confirm('Update?')"><i class="fa fa-edit"></i></a>
                                    <a href="{{ url('/book/delete',parameters: $d->id) }}" class="btn btn-danger" onclick="return confirm('Delete?')"><i class="fa fa-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
<style>
    .card {
    display: flex;
    flex-direction: row;
    margin-bottom: 20px;
}

.card-img {
    object-fit: cover;
    height: 200px;  /* Adjust based on your preference */
}

.card-body {
    padding-left: 15px;
}

.card-title {
    font-size: 18px;
}

</style>