@extends('admin.layouts.layout')
@section('ckeditor')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
        CKEDITOR.replace('summary-ckeditor1');
        CKEDITOR.replace('summary-ckeditor2');
        CKEDITOR.replace('summary-ckeditor3');
        CKEDITOR.replace('summary-ckeditor4');
        CKEDITOR.replace('summary-ckeditor5');
    </script>
@endsection
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vacancies</h4>
                <form class="forms-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword4">Position AZ</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="position_az" placeholder="Position" value="{{ $vacancy->position_az }}" />
                        @error('position_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Position EN</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="position_en" placeholder="Position" value="{{ $vacancy->position_en }}" />
                        @error('position_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Position RU</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="position_ru" placeholder="Position" value="{{ $vacancy->position_ru }}" />
                        @error('position_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Company</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="company" placeholder="Company" value="{{ $vacancy->company }}" />
                        @error('company')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Experience</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="experience" placeholder="experience" min="0" max="10" value="{{ $detail->experience }}"/>
                                @error('experience')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputName1">Salary</label>
                                <input type="text" class="form-control" id="exampleInputName1" name="salary" placeholder="salary" value="{{ $detail->salary }}" />
                                @error('salary')
                                    <div class="text-danger my-3">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Education AZ</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="education_az" placeholder="Education" value="{{ $detail->education_az }}" />
                        @error('education_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Education EN</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="education_en" placeholder="Education" value="{{ $detail->education_en }}" />
                        @error('education_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Education RU</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" name="education_ru" placeholder="Education" value="{{ $detail->education_ru }}" />
                        @error('education_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Responsibilities AZ</label>
                        <textarea class="form-control" id="summary-ckeditor" name="responsibility_az">{{ $detail->responsibility_az }}</textarea>
                        @error('responsibility_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Responsibilities EN</label>
                        <textarea class="form-control" id="summary-ckeditor1" name="responsibility_en">
                            {{ $detail->responsibility_en }}
                        </textarea>
                        @error('responsibility_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Responsibilities RU</label>
                        <textarea class="form-control" id="summary-ckeditor1" name="responsibility_ru">
                            {{ $detail->responsibility_ru }}
                        </textarea>
                        @error('responsibility_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Requirements AZ</label>
                        <textarea class="form-control" id="summary-ckeditor2" name="requirement_az">
                            {{ $detail->requirement_az }}
                        </textarea>
                        @error('requirement_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Requirements EN</label>
                        <textarea class="form-control" id="summary-ckeditor3" name="requirement_en">
                            {{ $detail->requirement_en }}
                        </textarea>
                        @error('requirement_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Requirements RU</label>
                        <textarea class="form-control" id="summary-ckeditor3" name="requirement_ru">
                            {{ $detail->requirement_ru }}
                        </textarea>
                        @error('requirement_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Guarantees AZ</label>
                        <textarea class="form-control" id="summary-ckeditor4" name="guarantee_az">
                            {{ $detail->guarantee_az }}
                        </textarea>
                        @error('guarantee_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Guarantees EN</label>
                        <textarea class="form-control" id="summary-ckeditor5" name="guarantee_en">
                            {{ $detail->guarantee_en }}
                        </textarea>
                        @error('guarantee_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Guarantees RU</label>
                        <textarea class="form-control" id="summary-ckeditor5" name="guarantee_ru">
                            {{ $detail->guarantee_ru }}
                        </textarea>
                        @error('guarantee_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Work Graphic AZ</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="graphic_az" placeholder="Work Graphic" value="{{ $detail->graphic_az }}" />
                        @error('graphic_az')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Work Graphic EN</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="graphic_en" placeholder="Work Graphic" value="{{ $detail->graphic_en}}" />
                        @error('graphic_en')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">Work Graphic RU</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" name="graphic_ru" placeholder="Work Graphic" value="{{ $detail->graphic_ru}}" />
                        @error('graphic_ru')
                            <div class="text-danger my-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Region</label>
                        <select class="form-control" id="exampleSelectGender" name="region">
                            @foreach ($regions as $region)
                                @if($vacancy->region->{'name_'.App::getLocale()}==$region->{'name_'.App::getLocale()})
                                    <option selected value="{{ $region->{'name_'.App::getLocale()} }}">{{ $region->{'name_'.App::getLocale()} }}</option>
                                    @else
                                    <option value="{{ $region->{'name_'.App::getLocale()} }}">{{ $region->{'name_'.App::getLocale()} }}</option>
                                @endif
                            @endforeach
                        </select>
                      </div>
                    <button type="submit" class="btn btn-success mr-2"> Edit </button>
                    <a class="btn btn-light" href="/admin-user/vacancy">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
