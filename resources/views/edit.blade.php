@extends('layouts.app')
@section('content')
    <form action="" method="post">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-light">
                        <div class="card-header text-muted border border-info"> ویرایش خاطره</div>

                        <div class="card-body border border-info border-top-0 ">
                            @include('error')
                            <p>تاریخ و زمان آخرین بروزرسانی : {{jdate($data->update_at)}}</p>
                            @csrf
                            <div class="form-group">
                                <label for="title"> عنوان خاطره</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="body"> متن خاطره</label>
                                <textarea name="body" class="form-control" style="height: 12rem" id="body">{{$data->body}}</textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">ذخیره</button>
                            <a href="{{route('home')}}" class="btn btn-secondary">بازگشت</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
