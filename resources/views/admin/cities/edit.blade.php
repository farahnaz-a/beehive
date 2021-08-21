@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ $city->name }}
@endsection

@section('cities_create')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Edit {{ $city->name }}</h2>
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
                    <h4 class="card-title">Edit {{ $city->name }}</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('cities.update', $city->id) }}" enctype="multipart/form-data" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" name="country" id="country" class="form-control"  value="{{ $city->country }}" placeholder="Enter Country">
                                    @error('country')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">City Name</label>
                                    <input type="text" name="name" id="name" class="form-control"  value="{{ $city->name }}" placeholder="Enter City Name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Titile</label>
                                    <input type="text" name="title" id="title" class="form-control"  value="{{ $city->title }}" placeholder="Enter Title">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="region">Region</label>
                                    <input type="text" name="region" id="region" class="form-control" value="{{ $city->region }}" placeholder="Enter Region">
                                    @error('region')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description_1">Description 1</label>
                                    <textarea name="description_1" placeholder="Enter description 1" class="form-control">{{ $city->description_1 }}</textarea>
                                    @error('description_1')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description_2">Description 2</label>
                                    <textarea name="description_2" placeholder="Enter description 2" class="form-control">{{ $city->description_2 }}</textarea>
                                    @error('description_2')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <p>Existing Image</p>
                                <div class="form-group">
                                    <img src="{{ asset('uploads/cities') }}/{{ $city->image }}" width="150px" alt="no image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image">Edit Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <p>Existing Slider Image</p>
                                <div class="form-group">
                                    <img src="{{ asset('uploads/cities') }}/{{ $city->slider_image }}" width="150px" alt="no image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="slider_image">Edit Slider Image</label>
                                    <div class="custom-file">
                                        <input type="file" name="slider_image" class="custom-file-input" id="slider_image">
                                        <label class="custom-file-label" for="slider_image">Choose file</label>
                                    </div>
                                    @error('slider_image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 pt-1">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection