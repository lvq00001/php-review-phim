<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('movies')->truncate();

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BODQ0NDhjYWItYTMxZi00NTk2LWIzNDEtOWZiYWYxZjc2MTgxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg",
            'title' => "Jumanji: Welcome to the Jungle",
            'description' => "Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.",
            'country' => "USA",
            'release_at' => 2017
        ]);

        Movie::create([
            'img' => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/1/s/1st_look_poster_-_kt_chu_n.jpg",
            'title' => "Kẻ ẩn danh",
            'description' => "Câu chuyện xoay quanh nhân vật Lâm (Kiều Minh Tuấn) - chàng trai vốn có tổ ấm bình yên bên vợ (Vân Trang). Hiền (Mai Cát Vi) - con gái riêng của vợ anh - dần lớn, muốn thoát khỏi cuộc sống nghèo khổ, bất chấp sự phản đối của mẹ. Biến cố xảy ra khi Hiền mất tích, Lâm đột nhập sào huyệt của một băng đảng tìm tung tích cô bé.",
            'country' => "Vietnam",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BMzg2Mzg4YmUtNDdkNy00NWY1LWE3NmEtZWMwNGNlMzE5YzU3XkEyXkFqcGdeQXVyMjA5MTIzMjQ@._V1_.jpg",
            'title' => "Hidden Figures",
            'description' => "The story of a team of female African-American mathematicians who served a vital role in NASA during the early years of the U.S. space program.",
            'country' => "USA",
            'release_at' => 2016
        ]);

        Movie::create([
            'img' => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/h/f/hfr-main-poster-printing.jpg",
            'title' => "Tà Chú Cấm",
            'description' => "Phim kể về cặp vợ chồng Ning, Kwin và cô con gái 7 tuổi với tên gọi Ing. Vì khó khăn về tài chính, hai vợ chồng quyết định cho thuê ngôi nhà đang ở và chuyển đến một căn hộ chung cư giá rẻ để sinh sống. Sau khi những người thuê nhà chuyển đến, Ning nhận thấy chồng bắt đầu có những hành vi bất thường. Anh ta trở nên bí mật và thường biến mất khỏi căn hộ và lúc 4 giờ sáng. Kwin thậm chí còn có một hình xăm kỳ lạ ở ngực tựa như ký hiệu đặc biệt của một hội tà giáo bí ẩn. Khi hành vi của chồng ngày càng trở nên đáng lo ngại, cũng là lúc Ning nhận ra cô con gái của mình đang gặp hiểm nguy. Bí mật nào đang được che giấu trong ngôi nhà cho thuê của họ?",
            'country' => "Thailand",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/t/u/turning_red-final_poster_1_.jpg",
            'title' => "Gấu đỏ biến hình",
            'description' => "\"Turning Red - Gấu Đỏ Biến Hình\" từ Disney và Pixar kể về Mei Lee, cô bé 13 tuổi tự tin và ngổ ngáo với những sự hỗn loạn của tuổi mới lớn. Mẹ của Mei luôn cố gắng bảo bọc và ở bên cạnh con gái mọi lúc mọi nơi, khiến cô bé cảm thấy như một thảm hoạ vậy. Và cứ như thể những thay đổi về sở thích, các mối quan hệ và thể chất còn chưa đủ, mỗi khi Mei trở nên quá phấn khích (mà thật ra lúc nào cũng vậy), \"bùm\", cô bé sẽ biến hình thành một chú gấu đỏ siêu cute khổng lồ luôn!",
            'country' => "USA",
            'release_at' => 2022
        ]);

        Movie::create([
            'img' => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster_50x70_2_.jpg",
            'title' => "65 - Trận chiến thời tiền sử",
            'description' => "Sau cú va chạm thảm khốc, tàu vũ trụ của Mills (Adam Driver) bay thẳng đến một hành tinh không xác định. Với kiến thức nhạy bén của mình, Mills nhanh chóng nhận ra hành tinh không xác định này chính là Trái Đất của 65 triệu năm trước. Liệu với những công nghệ tương lai đang có, Mills có thể sống sót trước những loài khủng long và sinh vật tiền sử đáng sợ? 65 - Trận Chiến Thời Tiền Sử đến từ bộ đôi biên kịch từng tạo nên “A Quiet Place” và được nhào nặn bởi chính NSX nổi tiếng Sam Raimi. Và, với vai chính được thủ vai bởi diễn viên từng đoạt giải Oscar - Adam Driver.",
            'country' => "USA",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BZGJkMDUwZWQtYTMzMS00NTg5LWE1ZTYtOTVhMDI4NGI1YjMyXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg",
            'title' => "The Killer",
            'description' => "After a fateful near-miss, an assassin battles his employers and himself, on an international manhunt he insists isn't personal.",
            'country' => "USA",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BMDgzMjU0NjUtMDFhMi00N2ExLThiMDYtMTc2NmJkNzI1YTQ4XkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_.jpg",
            'title' => "Believer 2",
            'description' => "A determined detective continues his search for the truth behind Asia's largest drug organization and its elusive boss he has unfinished business with.",
            'country' => "Korea",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BMDk4MTdhYzEtODk3OS00ZDBjLWFhNTQtMDI2ODdjNzQzZTA3XkEyXkFqcGdeQXVyMjMxOTE0ODA@._V1_.jpg",
            'title' => "M3GAN",
            'description' => "A robotics engineer at a toy company builds a life-like doll that begins to take on a life of its own.",
            'country' => "USA",
            'release_at' => 2022
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BYmE5Yjg0MzktYzgzMi00YTFiLWJjYTItY2M5MmI1ODI4MDY3XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg",
            'title' => "The Grinch",
            'description' => "A grumpy Grinch plots to ruin Christmas for the village of Whoville.",
            'country' => "USA",
            'release_at' => 2019
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BNmVlN2RiZjctOGQxNy00YjJmLWJhYmMtNmY5OTI3NGM3Zjk1XkEyXkFqcGdeQXVyMjQwNDE2MTk@._V1_.jpg",
            'title' => "Mắt biếc",
            'description' => "Ngạn (Trần Nghĩa) và Hà Lan (Trúc Anh) lớn lên từ làng Đo Đo. Ngay từ lần đầu gặp, Ngạn đã si mê đôi mắt to tròn, trong veo của Hà Lan. Cả hai lớn lên cùng nhau hệt như một giấc mơ cho đến một ngày, 
            Ngạn thấy Hà Lan xinh đẹp rạng ngời trong tà áo dài năm cuối cấp 2. Câu chuyện bắt đầu thay đổi khi Hà Lan phải lên thành phố trước Ngạn 2 tháng để học thêm. Chỉ trong khoảng thời gian ngắn ở nhà người cô ruột giàu có, Hà Lan thay đổi ít nhiều. Cho đến khi Ngạn rời làng lên thành phố trọ học, Hà Lan đã là người phố thị, 
            cùng những biến cố cuộc đời kéo dài đến 30 năm sau.",
            'country' => "Vietnam",
            'release_at' => 2019
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BMTE0YWFmOTMtYTU2ZS00ZTIxLWE3OTEtYTNiYzBkZjViZThiXkEyXkFqcGdeQXVyODMzMzQ4OTI@._V1_.jpg",
            'title' => "Captain Marvel",
            'description' => "Carol Danvers becomes one of the universe's most powerful heroes when Earth is caught in the middle of a galactic war between two alien races.",
            'country' => "USA",
            'release_at' => 2019
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BODM0NmVjMzUtOTJhNi00N2ZhLWFkYmMtYmZmNjRiY2M1YWY4XkEyXkFqcGdeQXVyOTgxOTA5MDg@._V1_.jpg",
            'title' => "Jujutsu Kaisen 0: Chú Thuật Hồi Chiến",
            'description' => "Một học sinh trung học giành được quyền kiểm soát một Linh hồn bị nguyền rủa cực kỳ mạnh mẽ và được các Pháp sư Jujutsu đăng ký vào Trường Trung học Jujutsu Tỉnh Tokyo để giúp anh ta kiểm soát sức mạnh và để mắt đến anh ta.",
            'country' => "Japan",
            'release_at' => 2022
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BMTM2NTU1ZTktNjc4YS00NjNhLWE4NmYtOTM2YjFjOGUzNmYzXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg",
            'title' => "Meg 2: The Trench",
            'description' => "A research team encounters multiple threats while exploring the depths of the ocean, including a malevolent mining operation.",
            'country' => "USA",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BZTNiNDA4NmMtNTExNi00YmViLWJkMDAtMDAxNmRjY2I2NDVjXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg",
            'title' => "Transformers: Rise of the Beasts",
            'description' => "During the '90s, a new faction of Transformers - the Maximals - join the Autobots as allies in the battle for Earth.",
            'country' => "USA",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BODQ0MDlmMjctMDY0ZC00ZDllLWI5NTItNmNhZGQwOWU5ZGYyXkEyXkFqcGdeQXVyNjY1MTg4Mzc@._V1_.jpg",
            'title' => "Encanto",
            'description' => "A Colombian teenage girl has to face the frustration of being the only member of her family without magical powers.",
            'country' => "USA",
            'release_at' => 2021
        ]);

        Movie::create([
            'img' => "https://m.media-amazon.com/images/M/MV5BZGRhN2JiZjYtZDJkMy00ZTUxLWJjNjMtZWY3YTEzZTBhOWIyXkEyXkFqcGdeQXVyMTM1MDExOTE2._V1_.jpg",
            'title' => "365 Dni",
            'description' => "Massimo is a member of the Sicilian Mafia family and Laura is a sales director. She does not expect that on a trip to Sicily trying to save her relationship, Massimo will kidnap her and give her 365 days to fall in love with him.",
            'country' => "USA",
            'release_at' => 2020
        ]);

        Movie::create([
            'img' => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/r/s/rsz_jenniferlawrence.jpg",
            'title' => "Vú em dạy yêu",
            'description' => "Không dành cho bé dưới 18!.. Red Band Trailer với Jennifer Lawrence trở lại, nóng bỏng cả mắt trong tựa phim hài-bựa-lầy nhất hè năm nay #NoHardFeelings - VÚ EM DẠY YÊU. Duy nhất tại rạp. Dự kiến khởi chiếu 23.06.2023",
            'country' => "USA",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/t/h/th_nh_ph_ng_g_t-_payoff_poster_-_kh_i_chi_u_13.10.2023_1_.jpg",
            'title' => "Thành Phố Ngủ Gật",
            'description' => "Nhân vật chính là một chàng thanh niên 26 tuổi, sống đơn độc giữa trung tâm thành phố nhộn nhịp, mưu sinh bằng nghề mổ gà. Một ngày, sự xuất hiện của nhóm giang hồ và một cô gái điếm đã tác động đến cuộc sống của anh. Điều đó đã làm cho bản năng hoang dã của chàng thanh niên trỗi dậy không kiểm soát.",
            'country' => "Vietnam",
            'release_at' => 2023
        ]);

        Movie::create([
            'img' => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/l/r/lr-main-poster-printing.jpg",
            'title' => "Yêu Lại Vợ Ngầu",
            'description' => "Cặp vợ chồng trẻ No Jung Yeol (Kang Ha-neul) và Hong Na Ra (Jung So-min) từ cuộc sống hôn nhân màu hồng dần “hiện nguyên hình” trở thành cái gai trong mắt đối phương với vô vàn thói hư, tật xấu. Không thể đi đến tiếng nói chung, Jung Yeol và Na Ra quyết định ra toà ly dị. Tuy nhiên, họ phải chờ 30 ngày cho đến khi mọi thủ tục chính thức được hoàn tất. Trong khoảng thời gian này, một vụ tai nạn xảy ra khiến cả hai mất đi ký ức và không nhớ người kia là ai. 30 ngày chờ đợi để được “đường ai nấy đi” nhưng nhiều tình huống trớ trêu khiến cả hai bắt đầu nảy sinh tình cảm trở lại. Liệu khi nhớ ra mọi thứ, họ vẫn sẽ ký tên vào tờ giấy ly hôn?",
            'country' => "Korea",
            'release_at' => 2023
        ]);
    }
}