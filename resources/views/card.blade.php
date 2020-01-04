<div class="card text-dark border border-info mx-1" style="width: 16rem;">
    <div class="card-body ">
        <h6 class="card-title">{{jdate($khatere->created_at)}}</h6>
        <hr class="bg-info">
        <h5 class="card-title">{{$khatere->title}}</h5>
        <div class="display-5 text-right mb-1" style="height: 8rem;overflow: hidden"> {{$khatere->body}}</div>
        <a href="{{route("show",$khatere->id)}}" class="btn btn-primary">نمایش</a>
        <a href="{{route("edit",$khatere->id)}}" class="btn btn-secondary">ویرایش</a>
        <a href="{{route("delete",$khatere->id)}}" class="btn btn-danger">حذف</a>
    </div>
</div>
