@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-12">

                <a href="{{route('new')}}" class="btn btn-outline-primary mb-5">+ خاطره جدید</a>
               <div class="card ">
                <div class="card-header border border-info">
                    لیست خاطرات
                </div>
                <div class="card-body bg-secondary">
                <div class="d-flex flex-wrap justify-content-start mt-5">
                    @foreach($data as $khatere)
                        @include('card',compact('khatere'))
                    @endforeach

                </div>
                </div>
            </div>
            </div>
        </div>

    </div>

@endsection
