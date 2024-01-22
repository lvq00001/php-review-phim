@include('templates.header')
<div class="container mt-4">
    <div class="fw-bold text-uppercase fs-4">
        Nội dung phim
    </div>
    <hr style="border-top: 1px solid red;" />
    <div class="card mb-3" style="border:none">
        <div class="row g-0">
            <div class="col-md-2">
                <img src="{{$movie->img}}" class="img-fluid m-1" alt="image">
            </div>
            <div class="col-md-10">
                <div class="card-body">
                    <h5 class="card-title text-uppercase">{{$movie->title}}</h5>
                    <hr />
                    <div class="card-text">
                        <span class="fw-bold">
                            Quốc gia:
                        </span>
                        {{$movie->country}}
                    </div>
                    <div class="card-text">
                        <span class="fw-bold">
                            Diễn viên:
                        </span>
                        @foreach ($stars as $s)
                        @if ($loop->last)
                        {{$s[0]}}
                        @else
                        {{$s[0] . ','}}
                        @endif
                        @endforeach

                    </div>
                    <div class="card-text">
                        <span class="fw-bold">
                            Năm:
                        </span>
                        <small class="">{{$movie->release_at}}</small>
                    </div>
                    <p class="card-text"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="">
            <span class="fw-bold">
                Nội dung:
            </span>
            {{$movie->description}}
        </div>
    </div>
</div>
@include('comment.comment-form')
@include('comment.show-comment')
@include('templates.footer')