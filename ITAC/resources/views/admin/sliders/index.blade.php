@extends('admin.layouts.layout')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <a href="/admin-user/slider/create" class="btn btn-success">Create</a>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Slider Images</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td class="py-1">
                                        {{ $slider->id }}
                                    </td>
                                    <td>
                                        <img style="width: 150px !important; height:150px" src="{{ asset('storage/images/sliders/'.$slider->image) }}" alt="slider">
                                    </td>
                                    <td>
                                        <a href="/admin-user/slider/edit/{{ $slider->id }}" class="btn btn-primary mr-2">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="/admin-user/slider/delete/{{ $slider->id }}" class="btn btn-danger mr-2">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
