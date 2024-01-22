<div class="container">
    <div class="fs-4 mt-2 mb-2">
    </div>
    <hr class="" style="color:red" />
    @if (count($comments) === 0)
    <div class="fs4 d-flex justify-content-center">Hiện tại chưa có bình luận nào.
        Hãy là người đầu tiên bình luận.</div>
    @else
    @foreach ($comments as $c)
    <div class="card my-1">
        <div class="card-body">
            <h5 class="card-title">{{$users[$loop->index][0]->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$c->updated_at->format('d-m-Y')}}</h6>
            <p class="card-text">{{$c->description}}</p>
            @if (Auth::check() && Auth::id() == $users[$loop->index]->id)
            <div class="mt-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Sửa
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bình luận của bạn</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form action="{{url('update-comment')}}" id="update-form" method="post">
                                @csrf
                                <div class="modal-body">
                                    <input type="text" name="movie_id" value="{{$movie->id}}" hidden>
                                    <input type="text" name="comment_id" value="{{$c->id}}" hidden>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="description" id="modal-description"
                                            rows="3">{{ $c->description }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-primary" onclick="checkModalDescription();">Lưu
                                        thay đổi</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
                <a href="" class="card-link btn btn-danger ms-2" onclick="event.preventDefault();
                    document.getElementById('delete-form').submit();">Xóa</a>
                <form id="delete-form" action="{{ url('delete-comment') }}" method="POST" class="d-none">
                    @csrf
                    <input type="text" name="movie_id" value="{{$movie->id}}" hidden>
                    <input type="text" name="comment_id" value="{{$c->id}}" hidden>
                </form>
                @endif

            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
<script>
function checkModalDescription() {
    event.preventDefault();
    if (document.getElementById('modal-description').value != null) {
        document.getElementById('update-form').submit();
    }
}
</script>