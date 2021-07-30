@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | {{ $portfolio->title }}
@endsection
@section('portfolios_show')
active
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<h2 class="content-header-title float-left mb-0">Project Details</h2>
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
                <h4 class="card-title">Project Details</h4>
            </div>
            <div class="card-body">
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <tbody>
                            <tr>
                                <th>Country</th>
                                <td>{{ $portfolio->country }}</td>
                            </tr>
                            <tr>
                                <th>City Name</th>
                                <td>{{ $portfolio->city_name }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $portfolio->title }}</td>
                            </tr>
                            <tr>
                                <th>Image</th>
                                <td><img src="{{ asset('uploads/portfolios/') }}/{{ $portfolio->image }}" width="100"
                                        alt="Not-found"></td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>{{ $portfolio->curr }} {{ $portfolio->price }}</td>
                            </tr>
                            <tr>
                                <th>Mini Title</th>
                                <td>{{ $portfolio->ninititle }}</td>
                            </tr>
                            <tr>
                                <th>Mini Price</th>
                                <td>{{ $portfolio->curre }} {{ $portfolio->miniprice }}</td>
                            </tr>
                            <tr>
                                <th>Return Of Investment</th>
                                <td>{{ $portfolio->ry }}</td>
                            </tr>
                            <tr>
                                <th>Quantiy Of Bricks</th>
                                <td>{{ $portfolio->quantity_of_bricks }}</td>
                            </tr>
                            <tr>
                                <th>Map</th>
                                <td>{{ $portfolio->map }}</td>
                            </tr>
                            <tr>
                                <th>Short Description</th>
                                <td>{{ $portfolio->short_desc }}</td>
                            </tr>
                            <tr>
                                <th>Long Description</th>
                                <td>{{ $portfolio->long_desc }}</td>
                            </tr>
                            <tr>
                                <th>About Description</th>
                                <td>{{ $portfolio->about_desc }}</td>
                            </tr>
                            <tr>
                                <th>About Image 1</th>
                                <td><img src="{{ asset('uploads/portfolios') }}/{{ $portfolio->about_image_1 }}" width="100" alt="Not-found"></td>
                            </tr>
                            <tr>
                                <th>About Image 2</th>
                                <td><img src="{{ asset('uploads/portfolios') }}/{{ $portfolio->about_image_2 }}" width="100" alt="Not-found"></td>  
                            </tr>
                            <tr>
                                <th>About Image 3</th>
                                <td><img src="{{ asset('uploads/portfolios') }}/{{ $portfolio->about_image_3 }}" width="100" alt="Not-found"></td>
                            </tr>
                            <tr>
                                <th>Multiple Image</th>
                                <td>
                                    @foreach ($portfolio->get_images as $item)
                                    <img src="{{ asset('uploads/portfolios') }}/{{ $item->multi_image }}" alt="Not found"
                                        width="100">
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Next Description:</th>
                                <td>{{ $portfolio->next_desc_1 }}</td>
                            </tr>
                    </tbody>
               
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
