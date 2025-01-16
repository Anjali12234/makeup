@extends('backend.layouts.master')
@section('container')
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Gallery</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Gallery
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
            <form method="post" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12 row">
                    <div class="form-group col-md-6">
                        <label for="title">Title<span style="color: red; margin-left: 5px;">*</span></label>
                        <input class="form-control" id="title" name="title" type="text"
                            value="{{ old('title') }}" />
                        <span class="text-warning">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="image">Gallery Image<span style="color: red; margin-left: 5px;">*</span></label>

                        <input class="form-control" id="files" type="file" name="files[]" multiple>
                        <span class="text-warning">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                 
                </div>
                
                <div>
                    <button class="btn btn-danger" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="pd-20 card-box mb-30">
            <div class="pd-20">
                <h4 class="text-blue h4">gallery  List</h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">S.No</th>                           
                            <th>Title </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $key => $gallery)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>                               
                                <td>{{ $gallery->title }}</td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.gallery.edit', $gallery) }}"><i
                                                    class="dw dw-edit2"></i> Edit</a>

                                            <form action="{{ route('admin.gallery.destroy', $gallery) }}"
                                                method="post" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    onclick="return confirm('Are You sure want to delete')"> <i
                                                        class="dw dw-delete-3"></i>Delete </button>

                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                {{ $galleries->links() }}
            </div>
        </div>

    </div>
@endsection
