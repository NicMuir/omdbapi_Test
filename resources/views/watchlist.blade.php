@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <watch-list :movies= "{{ $Movies }}" ></watch-list>
        </div>
    </div>
</div>

@endsection
