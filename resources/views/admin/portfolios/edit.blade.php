@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ $portfolio->title }}
@endsection

@section('portfolios_edit')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Project Edit</h2>
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
                    <h4 class="card-title">Edit Project</small></h4>
                    <div class="float-right">
                        <a target="_blank" class="btn btn-primary" href="{{ route('project.details', $portfolio->id) }}">Preview Project</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('portfolios.update', $portfolio->id) }}" enctype="multipart/form-data" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" value="{{ $portfolio->country }}" id="country" class="form-control" name="country">
                                    @error('country')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="city_name">City name</label>
                                    <select name="city_name" id="city_name" class="form-control">
                                        <option value="{{ $portfolio->city_name }}">{{ $portfolio->city_name }}</option>
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
                                    <label for="">Existing Image:</label>
                                    <br>
                                    <img src="{{ asset('uploads/portfolios/') }}/{{ $portfolio->image }}" width="120" alt="No Image">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="customFile">Main image</label>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                        @error('image')
                                            <small class="alert alert-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" value="{{ $portfolio->title }}" id="title" class="form-control" name="title">
                                    @error('title')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <select name="curr" id="" class="form-control float-left">
                                                <option value="{{ $portfolio->curr }}">{{ $portfolio->curr }}</option>
                                                @if($portfolio->curr == '€')
                                                <option value="£">£</option>
                                                @elseif($portfolio->curr == '£') 
                                                <option value="€">€</option>
                                                @else 
                                                <option value="€">€</option>
                                                <option value="£">£</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-lg-10">
                                            <input name="price" id="price" class="form-control float-right" value="{{ $portfolio->price ?? old('price') }}" placeholder="Enter price">
                                        </div>
                                    </div>
                                    @error('price')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="minititle">Mini Title</label>
                                    <input type="text" value="{{ $portfolio->minititle }}" id="minititle" class="form-control" name="minititle">
                                    @error('minititle')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="miniprice">Minimum to invest</label>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <select name="curre" id="" class="form-control float-left">
                                                <option value="{{ $portfolio->curre }}">{{ $portfolio->curre }}</option>
                                                @if($portfolio->curre == '€')
                                                <option value="£">£</option>
                                                @elseif($portfolio->curre == '£') 
                                                <option value="€">€</option>
                                                @else 
                                                <option value="€">€</option>
                                                <option value="£">£</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-lg-10">
                                            <input name="miniprice" id="price" class="form-control float-right" value="{{ $portfolio->miniprice ?? old('price') }}" placeholder="Enter price">
                                        </div>
                                    </div>
                                    @error('miniprice')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="ry">Returns of investment  %</label>
                                    <input name="ry" id="ry" class="form-control" name="ry" value="{{ $portfolio->ry }}" placeholder="Enter returns of investment">
                                    @error('ry')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="quantity_of_bricks">Quantity Of bricks</label>
                                    <input name="quantity_of_bricks" id="quantity_of_bricks" class="form-control" name="quantity_of_bricks" value="{{ $portfolio->quantity_of_bricks }}" placeholder="Enter quantity of bricks">
                                    @error('quantity_of_bricks')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="map">Map ( <a target="_blank" href="https://i.postimg.cc/jd2RKTCK/map.png">Click for example</a> )</label>
                                    <input type="text" id="map" class="form-control" name="map" value="{{ $portfolio->map }}" placeholder="Enter Map">
                                    @error('map')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="short_desc">Short Description</label>
                                    <textarea id="short_desc" class="form-control" name="short_desc"  placeholder="Enter short description">{{ $portfolio->short_desc }}</textarea>
                                    @error('short_desc')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="long_desc">Long Description</label>
                                    <textarea id="long_desc" class="form-control" name="long_desc" placeholder="Enter long description">{{ $portfolio->long_desc }}</textarea>
                                    @error('long_desc')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="about_desc">About Description</label>
                                    <textarea id="about_desc" class="form-control" name="about_desc"  placeholder="Enter about description">{{ $portfolio->about_desc }}</textarea>
                                    @error('about_desc')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Existing Image:</label>
                                    <br>
                                    <img src="{{ asset('uploads/portfolios/') }}/{{ $portfolio->about_image_1 }}" width="120" alt="No Image">
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
                                    <label for="">Existing Image:</label>
                                    <br>
                                    <img src="{{ asset('uploads/portfolios/') }}/{{ $portfolio->about_image_2 }}" width="120" alt="No Image">
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
                                    <label for="">Existing Image:</label>
                                    <br>
                                    <img src="{{ asset('uploads/portfolios/') }}/{{ $portfolio->about_image_3 }}" width="120" alt="No Image">
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
                                    <label for="next_desc_1">Next Step Description</label>
                                    <textarea id="next_desc_1" class="form-control" name="next_desc_1" placeholder="Enter next description 1">{{ $portfolio->next_desc_1 }}</textarea>
                                    @error('next_desc_1')
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