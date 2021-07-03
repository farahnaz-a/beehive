@extends('layouts.dashboard')


{{-- Title --}}
@section('title')
    {{ config('app.name') }} | {{ $faq->question }}
@endsection

{{-- Breadcrumb --}}
@section('breadcrumb')
    <h2 class="content-header-title float-left mb-0">Frequently Asked Questions</h2>
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
                    <h4 class="card-title">Edit Faq</small></h4>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('faqs.update', $faq->id) }}" class="form form-vertical">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="question">Qustion</label>
                                    <input type="text" value="{{ $faq->question }}" id="question" class="form-control" name="question">
                                    @error('title')
                                        <small class="alert alert-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="answer">Answer</label>
                                    <textarea name="answer" id="answer" class="form-control">{{ $faq->answer }}</textarea>
                                    @error('answer')
                                        <small class="alert alert-danger">{{ $message }}</small>
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