@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <watch-list :movies="{{ $movies }}" ></watch-list>
        </div>
    </div>
</div>

@endsection
