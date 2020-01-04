@extends('layouts.app')
@section('content')
    <form action="{{isset($record) ? route('update',compact('id')) : "" }}" method="post">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card bg-light">
                        <div class="card-header text-muted border border-info"> خاطره جدید</div>

                        <div class="card-body border border-info border-top-0 ">
                            @include('error')
                            @csrf
                            <div class="form-group">
                                <label for="title"> عنوان خاطره</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       placeholder="مثلا:سفر هیجان انگیز به ترکیه">
                            </div>
                            <div class="form-group">
                                <label for="body"> متن خاطره</label>
                                <textarea name="body" class="form-control" style="height: 16rem" id="body"
                                          placeholder="متن را وارد کنید"></textarea>
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
