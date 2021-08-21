@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ $city->name }}
@endsection

@section('cities_list')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Preview {{ $city->name }}</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Preview
            </li>
        </ol>
    </div>
@endsection

{{-- Content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Preview {{ $city->name }}</small></h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Country</th>
                            <td>{{ ucfirst($city->country) }}</td>
                          </tr>
                        <tr>
                            <th>City Name</th>
                            <td>{{ ucfirst($city->name) }}</td>
                          </tr>
                          <tr>
                            <th>Title</th>
                            <td>{{ ucfirst($city->title) }}</td>
                          </tr>
                          <tr>
                            <th>Region</th>
                            <td>{{ ucfirst($city->region) }}</td>
                          </tr>
                          <tr>
                            <th>Description 1</th>
                            <td>{{ ucfirst($city->description_1) }}</td>
                          </tr>
                          <tr>
                            <th>Description 2</th>
                            <td>{{ ucfirst($city->description_2) }}</td>
                          </tr>
                          <tr>
                            <th>Image</th>
                            <td><img src="{{ asset('uploads/cities') }}/{{ $city->image  }}" width="100" alt="No Image"></td>
                          </tr>
                          <tr>
                            <th>Slider Image</th>
                            <td><img src="{{ asset('uploads/cities') }}/{{ $city->slider_image  }}" width="100" alt="No Image"></td>
                          </tr>          
                    </table>
                    <div class="pt-2">
                        <a class="btn btn-primary waves-effect waves-float waves-light" href="{{ route('cities.edit', $city->id) }}">
                            <span>Edit</span>
                        </a>
                        <form class="d-inline-block" action="{{ route('cities.destroy', $city->id) }}" method="POST">
                            {{-- Initiate Delete method --}}
                            {{ method_field('DELETE') }}
                            @csrf 
                            <a class="btn btn-danger waves-effect waves-float waves-light" href="{{ route('cities.destroy', $city->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                <span>Delete</span>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection