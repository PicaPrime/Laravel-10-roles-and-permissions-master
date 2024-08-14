@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="sets" class="col-md-4 col-form-label text-md-end text-start"><strong>Sets:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->sets }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="repitition" class="col-md-4 col-form-label text-md-end text-start"><strong>repitition:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->repitition }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>description:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->description }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="Tutorial" class="col-md-4 col-form-label text-md-end text-start"><strong>Tutorial:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            <a href="{{ $product->youtube_link}}" target="_blank">
                                <button type="button" class="btn btn-primary btn-sm">Tutorial link</button>
                            </a>
                        </div>
                    </div>

        
            </div>
        </div>
    </div>    
</div>
    
@endsection