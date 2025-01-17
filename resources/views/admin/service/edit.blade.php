@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Service</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Service
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <div class="pd-20 card-box mb-30">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('admin.service.update',$service) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12 row">

                    <div class="form-group col-md-6">
                        <label for="title">Title<span style="color: red; margin-left: 5px;">*</span>
                        </label>

                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title',$service->title) }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image<span style="color: red; margin-left: 5px;">*</span></label>
<img src="{{$service->image}}" height="100" width="100" alt="">
                        <input class="form-control" id="image" name="image" type="file"
                            value="{{ old('image',$service->image) }}" />
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label for="description">Description<span style="color: red; margin-left: 5px;">*</span></label>
                    <textarea name="description" id="editor" cols="50" rows="10">{{ old('description',$service->description) }}</textarea>
                    <span class="text-warning">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>

        </div>
       

    </div>
@endsection
