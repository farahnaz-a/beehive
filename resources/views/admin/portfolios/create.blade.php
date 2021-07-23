@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Projects
@endsection
@section('portfolios_create')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Projects</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item active">Layout Empty</li> --}}
        </ol>
    </div>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">    
        <div class="card"> 
            <div class="card-header">
                <h4 class="card-title d-block">Projects</h4>
                <div class="pt-1">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-danger">
                            {{ session('warning') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-body">
                <form class="form form-vertical" action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="city_name">City name</label>
                                <select name="city_name" id="city_name" class="form-control">
                                    <option value="">-Select City name-</option>
                                    <option value="Paris">Paris</option>
                                    <option value="Lyon">Lyon</option>
                                    <option value="Marseille">Marseille</option>
                                    <option value="Bordeaux">Bordeaux</option>
                                </select>
                                @error('city_name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="customFile">Main Image</label>
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
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="Enter title">
                                @error('title')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input name="price" id="price" class="form-control" value="{{ old('price') }}" placeholder="Enter price">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="minititle">Mini Title</label>
                                <input type="text" id="minititle" class="form-control" name="minititle" value="{{ old('minititle') }}" placeholder="Enter mini title">
                                @error('minititle')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="miniprice">Mini Price</label>
                                <input name="miniprice" id="miniprice" class="form-control" name="minititle" value="{{ old('miniprice') }}" placeholder="Enter mini price">
                                @error('miniprice')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="ry">Returns of investment</label>
                                <input name="ry" id="ry" class="form-control" name="ry" value="{{ old('ry') }}" placeholder="Enter returns of investment">
                                @error('ry')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="quantity_of_bricks">Quantity Of bricks</label>
                                <input name="quantity_of_bricks" id="quantity_of_bricks" class="form-control" value="{{ old('quantity_of_bricks') }}" placeholder="Enter quantity of bricks">
                                @error('quantity_of_bricks')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="map">Map</label>
                                <input type="text" id="map" class="form-control" name="map" value="{{ old('map') }}" placeholder="Enter Map">
                                @error('map')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="short_desc">Short Description</label>
                                <textarea id="short_desc" class="form-control" name="short_desc" value="{{ old('short_desc') }}" placeholder="Enter short description"></textarea>
                                @error('short_desc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="long_desc">Long Description</label>
                                <textarea id="long_desc" class="form-control" name="long_desc" value="{{ old('long_desc') }}" placeholder="Enter long description"></textarea>
                                @error('long_desc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="about_desc">About Description</label>
                                <textarea id="about_desc" class="form-control" name="about_desc" value="{{ old('about_desc') }}" placeholder="Enter about description"></textarea>
                                @error('about_desc')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image-1">About Image 1</label>
                                <div class="custom-file">
                                    <input type="file" name="about_image_1" class="custom-file-input" id="image-1">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('about_image_1')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image-2">About Image 2</label>
                                <div class="custom-file">
                                    <input type="file" name="about_image_2" class="custom-file-input" id="image-2">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('about_image_2')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image-3">About Image 3</label>
                                <div class="custom-file">
                                    <input type="file" name="about_image_3" class="custom-file-input" id="image-3">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                @error('about_image_2')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="multi_image">Multiple Image</label>
                                <div class="custom-file">
                                    <input type="file" name="multi_image" class="custom-file-input" id="multi_image" multiple>
                                    <label class="custom-file-label" for="multi_image">Choose multiple image</label>
                                </div>
                                @error('about_image_2')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="next_desc_1">Next Step Description 1</label>
                                <textarea id="next_desc_1" class="form-control" name="next_desc_1" value="{{ old('next_desc_1') }}" placeholder="Enter next description 1"></textarea>
                                @error('next_desc_1')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="next_desc_2">Next Step Description 2</label>
                                <textarea id="next_desc_2" class="form-control" name="next_desc_2" value="{{ old('next_desc_2') }}" placeholder="Enter next description 2"></textarea>
                                @error('next_desc_2')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="next_desc_3">Next Step Description 3</label>
                                <textarea id="next_desc_3" class="form-control" name="next_desc_3" value="{{ old('next_desc_3') }}" placeholder="Enter next description 3"></textarea>
                                @error('next_desc_3')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
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