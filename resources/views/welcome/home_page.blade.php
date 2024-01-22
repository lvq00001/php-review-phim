@include('templates.header')
<div class="container">
    @if ($title != "")
    <div class="fs-3 my-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search"
            viewBox="0 0 16 16">
            <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
        </svg>
        Kết quả tìm kiếm cho "{{$title}}"
    </div>
    @endif
    <div class="row">
        @foreach ($movies as $m)
        <div class="col-6 col-sm-4 col-md-4 col-lg-3 mb-5 card-home">
            <div class="card">

                <img src="{{$m->img}}" class="card-img-top movie-image img-fluid" alt="image">

                <div class="card-body card-body-home d-flex flex-column">
                    <div class="text-truncate-container">
                        <h5 class="card-title">{{$m->title}}</h5>
                    </div>
                    <!-- <div class="card-text mt-1">Quốc gia: {{$m->country}}</div> -->
                    <div class="card-text mb-2 text-truncate">Năm: {{$m->release_at}}</div>
                    <div class="d-grid gap-2 mt-auto">
                        <a href="/movie/{{$m->id}}" class="btn btn-primary text-truncate px-2">
                            Xem bình luận
                        </a>
                    </div>


                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {!! $movies->links() !!}
    </div>

</div>
@include('templates.footer')