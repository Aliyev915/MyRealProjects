@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Counters</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Workers</label>
                                <input type="number" class="form-control" id="exampleInputName1" name="worker"
                                    value="@if ($counter !=null){{ $counter->worker }}@endif" />
                                @error('worker')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Customers</label>
                                <input type="number" class="form-control" id="exampleInputName1" name="customer"
                                    value="@if ($counter !=null){{ $counter->customer }}@endif" />
                                @error('customer')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Branches</label>
                                <input type="number" class="form-control" id="exampleInputName1" name="branch"
                                    value="@if ($counter !=null){{ $counter->branch }}@endif" />
                                @error('branch')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Autopark</label>
                                <input type="number" class="form-control" id="exampleInputName1" name="autopark"
                                    value="@if ($counter !=null){{ $counter->autopark }}@endif" />
                                @error('autopark')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2"> Submit </button>
                    <a class="btn btn-light" href="/admin-user">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
