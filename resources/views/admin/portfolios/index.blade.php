@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
    {{ config('app.name') }} | Projects
@endsection
@section('portfolios_show')
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

{{-- Content --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Project List</h4>
                </div>
                <div class="card-body">
                </div>
                <div class="table-responsive" style="overflow-x: none !important; ">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sl</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>M. Price</th>
                                <th>R.I</th>
                                <th>Q.B</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($portfolios as $portfolio)
                            <tr>
                                <td><span class="mr-1">{{ $loop -> index + 1 }}</td>
                                <td>{{ $portfolio->country }}</td>
                                <td>{{ \App\Models\City::find($portfolio->city_name)->name ?? $portfolio->city_name }}</td>
                                <td>{{ $portfolio->title }}</td>
                                <td><img src="{{ asset('uploads/portfolios/') }}/{{ $portfolio->image }}" width="100" alt="Not-found"></td>
                                <td>{{ $portfolio->curr }} {{ $portfolio->price }}</td>
                                <td>{{ $portfolio->curre }} {{ $portfolio->miniprice }}</td>
                                <td>{{ $portfolio->ry }}</td>
                                <td>{{ $portfolio->quantity_of_bricks }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('portfolios.show', $portfolio->id) }}">
                                                <i data-feather='eye'></i>
                                                <span style="margin-left:4px;">Details</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('portfolios.edit', $portfolio->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Edit</span>
                                            </a>
                                            @if($portfolio->get_images->count() > 0)
                                            <a class="dropdown-item" href="{{ route('update.multiple', $portfolio->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Edit Multiple Image</span>
                                            </a>
                                            @endif
                                            <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">
                                                {{-- Initiate Delete method --}}
                                                {{ method_field('DELETE') }}
                                                @csrf 
                                                <a class="dropdown-item" href="{{ route('portfolios.destroy', $portfolio->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
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
@endsection