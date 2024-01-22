<!-- @push('head')
<script src="{{ asset('js/helper.js')}}"></script>
@endpush -->

<div class="container">
    <div class="fs-4 fw-bold mt-5 mb-2">
        # Bình Luận từ người xem
    </div>
    @if (Auth::check())
    <form action="{{url('store-comment')}}" method="post">
        @csrf
        <input type="text" name="movie_id" value="{{$movie->id}}" hidden>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label"></label>
            <textarea class="form-control" name="description" id="form-description"
                placeholder="Chia sẻ cảm nhận của bạn về phim" rows="4">
            </textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger">Gửi Bình Luận</button>
        </div>
    </form>
    @endif

</div>