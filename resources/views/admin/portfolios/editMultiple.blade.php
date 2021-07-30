@extends('layouts.dashboard')

{{-- Title --}}
@section('title')
{{ config('app.name') }} | Edit {{ $product->name }}'s Multiple Image
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
<div class="breadcrumb-wrapper">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="{{ url('/') }}">Home</a></li>
    </ol>
</div>
@endsection

@section('content')
 
 <div class="row">
         
    <div class="col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{ $product->name }}</h4>
            </div>
            <div class="card-body">
                <p class="card-text">
                    Edit {{ $product->name }}'s Multiple Image
                </p>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sl.</th>
                            <th>Image</th>
                            <th>Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product->get_images as $image)
                        <tr>
                            <td>
                                {{ $loop->index + 1 }}
                            </td>
                           
                            <td>
                                <img src="{{ asset('uploads/portfolios') }}/{{ $image->multi_image }}" width="100" alt="product">
                            </td>
                         
                            <td>
                                <a data-toggle="modal" data-target="#exampleModalCenter{{ $image->id }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter{{ $image->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                               <form action="{{ route('replace.multiple') }}" method="POST" enctype="multipart/form-data">
                                @csrf 

                                <div class="py-3">
                                    <label for="image">Image</label>
                                    <input type="hidden" name="id" value="{{ $image->id }}">
                                    <input type="file" name="image" id="" class="form-control">
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                              
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                            </div>
                        </div>
                        </div>
                    </div>
                   
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
 </div>
 
@endsection

@section('js')
<script>
    @foreach($product->get_images as $image)
    $(document).ready(function() {
        @if(count($errors) > 0)
         $("#exampleModalCenter{{ $image->id }}").modal('show');
        @endif
    });
    @endforeach
</script>
@endsection