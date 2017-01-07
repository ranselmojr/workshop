@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                <div class="panel-body">
                    This web application is made with PHP using Laravel framework.
                </div>
            </div>
            <p class="lead"><a class="btn btn-lg btn-default" href="{{ url('/about') }}">Learn More</a></p>
        </div>
    </div>
</div>
@endsection
