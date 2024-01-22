@include('templates.header')

<div class="container">
    <div class="fs-3">GIỚI THIỆU</div>
    <hr />
    <div class="p">
        Trang web là nơi để mọi người chia sẻ, thảo luận về nội dung phim.
        Trang web có thể giúp bạn:
        <ul>
            <li>Chia sẻ cảm nhận, ý kiến về bộ phim đã xem</li>
            <li>Tìm bộ phim hay nhất, thích hợp nhất để xem</li>
            <li>Chia sẻ kiến thức và ý kiến về phim với mọi người</li>
        </ul>
    </div>
    <div class="p">
        Các bộ phim mới sẽ luôn được cập nhật định kì.
    </div>
    <hr />
    <div class="p">Tìm hiểu về <a href="{{url('policies')}}">chính sách</a> của trang web.</div>
</div>

@include('templates.footer')