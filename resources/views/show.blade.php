@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-10">
                <div class="media">
                    <div class="media-body">
                        <h5 class="p-2 mb-2">{{$data->title}}</h5>
                        <p class="text-dark mt-0">{{$data->body}}</p>
                    </div>
                </div>
                <a href="{{route('home')}}" class="btn btn-primary" >بازگشت</a>

            </div>

        </div>

    </div>

@endsection
