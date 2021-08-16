@extends('admin.layouts.layout')
@section('content')
    <div class="page-header">
        <h3 class="page-title">Basic Tables</h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Comments</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Text</th>
                                    <th>Blog</th>
                                    <th>Settings</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comments as $comment)
                                    @if ($comment->is_verified==false)
                                    <tr style="background: rgba(0, 0, 0, 0.14)">
                                        <td class="py-1">
                                            {{ $comment->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $comment->name !!}
                                        </td>
                                        <td>
                                            {{ $comment->email }}
                                        </td>
                                        <td class="py-1">
                                            @if(Str::length($comment->text)<=50)
                                            {{ $comment->text }}
                                            @else
                                            {{ Str::substr($comment->text, 0, 50) }}
                                            @endif
                                        </td>
                                        <td>
                                            {{ $comment->blog->{"title_".App::getLocale()} }}
                                        </td>
                                        <td>
                                            <a href="/admin-user/comment/activate/{{ $comment->id }}"
                                                class="btn btn-primary mr-2">
                                                <i class="mdi mdi-check"></i>
                                            </a>
                                            <a href="/admin-user/comment/delete/{{ $comment->id }}" class="btn btn-success mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td class="py-1">
                                            {{ $comment->id }}
                                        </td>
                                        <td class="py-1">
                                            {!! $comment->name !!}
                                        </td>
                                        <td>
                                            {{ $comment->email }}
                                        </td>
                                        <td class="py-1">
                                            @if(Str::length($comment->text)<=50)
                                            {{ $comment->text }}
                                            @else
                                            {{ Str::substr($comment->text, 0, 50) }}
                                            @endif
                                        </td>
                                        <td>
                                            {{ $comment->blog->{"title_".App::getLocale()} }}
                                        </td>
                                        <td>
                                            <a href="/admin-user/comment/delete/{{ $comment->id }}" class="btn btn-success mr-2">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
