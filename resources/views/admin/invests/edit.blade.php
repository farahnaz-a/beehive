@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ $invest->name }}
@endsection

@section('invests')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Where To Invest Edit</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Edit
            </li>
        </ol>
    </div>
@endsection

{{-- Content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Where To Invest</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('invests.update', $invest->id) }}" enctype="multipart/form-data" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{ $invest->name }}" id="name" class="form-control" name="name" placeholder="Enter City Name">
                                    @error('name')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Existing Image:</label>
                                    <br>
                                    <img src="{{ asset('uploads/invests/') }}/{{ $invest->image }}" width="100" alt="No Image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="customFile">Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        @error('image')
                                            <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection