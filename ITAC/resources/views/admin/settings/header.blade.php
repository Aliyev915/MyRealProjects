@extends('admin.layouts.layout')
@section('ckeditor')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor');
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('editor3');
    CKEDITOR.replace('editor4');
    CKEDITOR.replace('editor5');

</script>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Header Settings</h4>
                    <form class="forms-sample" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Caption</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="caption"
                                placeholder="Caption" value="@if ($header !=null) {{ $header->caption_az }} @endif" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption ENG</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="caption_en"
                                placeholder="Caption" value="@if ($header !=null) {{ $header->caption_en }} @endif" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" name="caption_ru"
                                placeholder="Caption" value="@if ($header !=null) {{ $header->caption_ru }} @endif" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title</label>
                            <textarea name="title" id="editor3" cols="30"
                                rows="10">@if ($header != null){!! $header->title_az !!}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title ENG</label>
                            <textarea name="title_en" id="editor1" cols="30"
                                rows="10">@if ($header != null){!! $header->title_en !!}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title RU</label>
                            <textarea name="title_ru" id="editor2" cols="30"
                                rows="10">@if ($header != null){!! $header->title_ru !!}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea rows="10" name="description"
                                id="editor">@if ($header != null){{ $header->description_az }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description ENG</label>
                            <textarea rows="10" name="description_en"
                                id="editor5">@if ($header != null){{ $header->description_en }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Description RU</label>
                            <textarea rows="10" name="description_ru"
                                id="editor4">@if ($header != null){{ $header->description_ru }}@endif</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
