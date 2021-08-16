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
                    <h4 class="card-title">About</h4>
                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Caption</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Caption"
                                name="caption" value="@if ($about !=null) {{ $about->caption_az }} @endif" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption ENG</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Caption"
                                name="caption_en" value="@if ($about !=null) {{ $about->caption_en }} @endif" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Caption RU</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Caption"
                                name="caption_ru" value="@if ($about !=null) {{ $about->caption_ru }} @endif" />
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title</label>
                            <textarea name="title"
                                id="editor">@if ($about != null){{ $about->title_az }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Description</label>
                            <textarea class="form-control" id="editor1" rows="5"
                                name="description">@if ($about != null){{ $about->description_az }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title ENG</label>
                            <textarea name="title_en"
                                id="editor2">@if ($about != null){{ $about->title_en }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Description ENG</label>
                            <textarea class="form-control" id="editor3" rows="5"
                                name="description_en">@if ($about != null){{ $about->description_en }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Title RU</label>
                            <textarea name="title_ru"
                                id="editor4">@if ($about != null){{ $about->title_ru }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Description RU</label>
                            <textarea class="form-control" id="editor5" rows="5"
                                name="description_ru">@if ($about != null){{ $about->description_ru }}@endif</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Signature</label>
                            <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Signature"
                                name="signature" value="@if ($about !=null) {{ $about->signature }} @endif" />
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Sign Image</label>
                                    <input type="file" name="img_1" class="file-upload-default" accept="image/*" />
                                    @if ($about != null)
                                        <div class="col-sm-6">
                                            <img src="{{ asset('storage/images/'.$about->img_1) }}" height="150" width="150" alt="">
                                        </div>
                                    @endif
                                    <div class="input-group col-sm-12 my-3" style="height: 30px;">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" />
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button"> Upload
                                            </button>
                                        </span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>About Image</label>
                                    <input type="file" name="img_2" class="file-upload-default" accept="image/*" />
                                    @if ($about!=null)
                                    <div class="col-sm-6">
                                        <img src="{{ asset('storage/images/'.$about->img_2) }}" height="150" width="150" alt="">
                                    </div>
                                    @endif
                                    <div class="input-group col-sm-12 my-3" style="height: 30px;">
                                        <input type="text" class="form-control file-upload-info" disabled
                                            placeholder="Upload Image" />
                                        <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-primary" type="button"> Upload
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
