@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <search-api></search-api>

           
        </div>
        <flash-message class="myCustomClass"></flash-message>
    </div>
    <div class="base-width">
        <watch-list :movies= "{{ $Movies }}" ></watch-list>
    </div>
</div>

@endsection
