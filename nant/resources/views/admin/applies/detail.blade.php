@extends('admin.layouts.layout')
@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Apply</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Fullname</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->name }} {{ $apply->person->lastname }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->email }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Phone</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->phone }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Birthplace</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->birthplace }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Birtday</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->birthday }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Citizenship</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->citizenship }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Nationality</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->nationality }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputName1">Mobile</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->mobile }}" disabled />
                        </div>
                    </div>
                    @if ($apply->person->position_is_want != null)
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">What position do you work at</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    value="{{ $apply->person->position_is_want }}" disabled />
                            </div>
                        </div>
                    @endif
                    @if ($apply->person->sector_is_want != null)
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputName1">What sector do you work at</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    value="{{ $apply->person->sector_is_want }}" disabled />
                            </div>
                        </div>
                    @endif
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Gender</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->gender }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Martial Status</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->martial_status }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Military Service</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->military_service }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Driving License</label>
                            <input type="text" class="form-control" id="exampleInputName1"
                                value="{{ $apply->person->driving_license }}" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Do you want to work external</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="@if ($apply->person->external) Yes @else No @endif" disabled />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputName1">Do you work at the moment</label>
                            <input type="text" class="form-control" id="exampleInputName1" value="@if ($apply->person->is_working) Yes @else No @endif" disabled />
                        </div>
                    </div>
                </div>
                @if ($apply->person->educations->count() != 0)
                    <h4 class="card-title">Educations</h4>
                    <div class="row">
                        @foreach ($apply->person->educations as $education)
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">School</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $education->school }}" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Graduate Year</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $education->graduate }}" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Speciality</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $education->speciality }}" disabled />
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if ($apply->person->knowledges->count() != 0)
                    <h4 class="card-title">Knowledges</h4>
                    <div class="row">
                        @foreach ($apply->person->knowledges as $knowledge)
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Computer Operator</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled>{{ $knowledge->comp_operator }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Computer Graphics</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled>{{ $knowledge->comp_graphic }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Computer Programming</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled>{{ $knowledge->comp_programming }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputName1">Technical Knowledge</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1"
                                        disabled>{{ $knowledge->technical }}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if ($apply->person->languages->count() != 0)
                    <h4 class="card-title">Languages</h4>
                    <div class="row">
                        @foreach ($apply->person->languages as $language)
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Language</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $language->name }}" disabled />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Writing</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $language->writing }}" disabled />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Reading</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $language->reading }}" disabled />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputName1">Speaking</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $language->speaking }}" disabled />
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if ($apply->person->experiences->count() != 0)
                    <h4 class="card-title">Experiences</h4>
                    <div class="row">
                        @foreach ($apply->person->experiences as $experience)
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Company</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $experience->company }}" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Position</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $experience->position }}" disabled />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName1">Duration</label>
                                    <input type="text" class="form-control" id="exampleInputName1"
                                        value="{{ $experience->duration }}" disabled />
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                <a class="btn btn-danger" href="/admin-user/apply/delete/{{ $apply->id }}">Delete</a>
                <a class="btn btn-light" href="/admin-user/apply">Cancel</a>
            </div>
        </div>
    </div>
@endsection
