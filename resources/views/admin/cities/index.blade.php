@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | City
@endsection

@section('cities_list')
    active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Cities</h2>
    <div class="breadcrumb-wrapper">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">List</li>
        </ol>
    </div>
@endsection

{{-- Content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-11">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cities List</h4>

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
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="data_table" class="table table-bordered table-hover">
                            <thead class="">
                                <tr>
                                    <th>Sl</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Title</th>
                                    <th>Region</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cities as $city)
                                <tr>
                                    <td><span class="mr-1">{{ $loop -> index + 1 }}</td>
                                    <td>{{ ucfirst($city->country) }}</td>
                                    <td>{{ ucfirst($city->name) }}</td>
                                    <td>{{ ucfirst($city->title) }}</td>
                                    <td>{{ ucfirst($city->region) }}</td>
                                    <td><img src="{{ asset('uploads/cities') }}/{{ $city->image  }}" width="100" alt="No Image"></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('cities.show', $city->id) }}">
                                                    <i data-feather='eye' class="mr-50"></i>
                                                    <span>Preview</span>
                                                </a>
                                                <a class="dropdown-item" href="{{ route('cities.edit', $city->id) }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    <span>Edit</span>
                                                </a>
                                                <form action="{{ route('cities.destroy', $city->id) }}" method="POST">
                                                    {{-- Initiate Delete method --}}
                                                    {{ method_field('DELETE') }}
                                                    @csrf 
                                                    <a class="dropdown-item" href="{{ route('cities.destroy', $city->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                        <span>Delete</span>
                                                    </a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">No Data Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection