@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <form action="/certificate/code" method="GET" style="margin: 100px 0" id="certificate">
                    <div class="form-group">
                        <label for="">Axtar</label>
                        <input type="text" name="code" class="form-control" placeholder="Axtar">
                        <button class="btn " type="submit">Axtar</button>
                    </div>
                </form>
            </div>
            <div class="offset-md-3 col-md-6">
            </div>
        </div>
    </div>
@endsection
