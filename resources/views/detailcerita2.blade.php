@extends('/template/nav')
@section('content')
    <div class="container mt-5"></div>
    <div class=" row g-0">
        <div class=" col-md-4">
            <img src="gambar/jogja.webp" style="width: 600px; height: 300px; margin-left: 90%;" alt="">
        </div>
            <h2 class="text-center mb-4 mt-5">Yogya dan Rindu</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">{{$artikel->isi}}</p>

                {{-- <div class="col-lg-8 mx-auto">
                    Cahaya yang dahulu asing berhasil membuatku jatuh cinta. Angin malam yang dulunya dingin berhasil menghangatkan hati. Kota ini berhasil membuatku terkesan. Setiap hari mengukir cerita dan rasa.
                    </p>
                    <p class="text-justify">
                        Terlebih saat menelusuri berbagai rute bersama kawan. Selalu ada cerita di setiap sudut kota.
                         Tawa dan tangis mengiringi setiap langkahku di kota ini. Kupikir romansa di Yogyakarta hanyalah 
                         kiasan yang lebay. Meski tak sesempurna orang yang jatuh cinta, Yogya telah mengukir segala memori
                          indah di perjalanan hidupku. Romansa itu nyata. 

                    </p>
                    <p class="text-justify">
                        Aku, salah satu mahasiswa rantau di sini. Datang saat dunia sedang berusaha mengendalikan virus. 
                        Aku memilih Yogya untuk kabur dari permasalahan di kota asalku. Jiwaku sudah hancur lebur di sana.
                        Harapanku adalah sembuh di kota orang. “Aku akan bebas,” itu pikirku.
                    </p>
                    <p class="text-justify">Namun, ternyata tak semudah itu jauh dari keluarga. Tak banyak yang aku suka awalnya. 
                        Setiap malam tak tenang, itu yang aku rasa. Pikiran ribut dengan hati. Aku berusaha mengenal atmosfer kota ini. </p>
                    <p class="text-justify">“Hai! Sedang apa?”</p>
                    <p class="text-justify">
                        “Kau ada waktu besok?” </p>
                    <p class="text-justify">Dua pesan yang sering aku lontarkan di awal. Hampir setiap hari aku mengemis
                         waktu manusia lain agar mengalihkan pikiranku sejenak. Ke sana ke mari, mencoba mengenal setiap energinya,
                          setiap udaranya. Mulai dari warung kaki lima, alun-alun, sampai pantai. Hari ke hari, minggu ke minggu, 
                          akhirnya energiku berhasil menyatu. Menyatu dengan sepi dan kesendirian. Menyatu dengan kota yang menyimpan banyak misteri. 
                          Aku butuh waktu lama untuk mencintainya.</p>
                    <p class="text-justify">“Ah siapa sih yang bilang Yogya ini penuh rindu?,” tanya temanku </p>
                    <p class="text-justify">“Entahlah, mungkin orang yang bertemu dengan jodohnya di sini”. 
                        Aku menjawab asal karena memang nyatanya aku belum menemukan alasan untuk merindu. </p>
                    <p class="text-justify">Boro-boro memikirkan rindu, pikiran yang dipenuhi dengan, “Hari ini makan apa?” 
                        “Besok makan apa?” saja sudah cukup membuatku tersiksa. Sepertinya Tuhan membenci kekhawatiranku tentang rezeki-Nya itu.
                         Ya, pertanyaan yang selalu ada di agenda anak kos. Ujung-ujungnya juga lalapan, ayam geprek, magelangan (nasi mawut), atau mi ayam.</p>
                    <p class="text-justify">“Ayam terus perasaan,” keluhan semua orang. </p>
                    <p class="text-justify">“Ya yang murah itu. Apalagi?” kata masyarakat Jabodetabek.</p>
                    <p class="text-justify">“Tidak juga. Tak ada bedanya dengan harga lalapan di kota asalku.”</p>
                    <p class="text-justify">Harga makanan di sini tergolong murah, tapi harus pandai carinya. Banyak warung rumahan.
                         Meskipun ujungnya tetap menu ayam. Jangan lupa, menu cafe tetap dicoba. Sudah banyak cafe yang aku kunjungi. 
                         Mulai dari hanya sekadar melepas stres sampai mencari sumber stres alias mengerjakan skripsi. </p>
                    <p class="text-justify">“Aku akan rindu skripsian di cafe.”</p>
                    <p class="text-justify">“Aku akan rindu rasa mi ayam ini.”</p>
                    <p class="text-justify">“Aku akan rindu bangjo yang merahnya seabad ini.”</p>
                    <p class="text-justify">Sekarang sudah punya alasan kerinduan tentang Yogya, kota yang dikenal dengan ribuan bangjo (lampu merah).
                         Antarbangjo hanya berjarak sekian meter. Setiap terjebak di sana dan panas matahari lagi menyerang, tensi orang akan meninggi. 
                         Sedetik saja lampu hijau menyala, klakson akan bersautan. Pemandangan yang biasa pada jam-jam berangkat dan pulang kerja. 
                         Sambil menunggu, banyak pengamen jalanan yang siap menghibur. </p>
                    <p class="text-justify">“Enak ya suaranya,” temanku memuji di perempatan Mirota sana. </p>
                    <p class="text-justify">Seniman diberikan banyak panggung yang luar biasa. Semua sudut Yogya adalah seni dan sejarah.
                         Aku juga sedang menulis sejarah hidupku. Yang berjuang melewati banyak duka dan berakhir dengan damai. 
                         Yang berawal dari benci dan berakhir dengan cinta. Yang dulu malamnya penuh takut, sekarang penuh rindu. </p>
                    <p class="text-justify">Berjalan di malam hari, menikmati lampu jalanan, menghirup udara dingin, sambil mencari alasan untuk tetap tinggal. </p>
                    <p class="text-justify">“Wah, aku lagi di jalan yang dulunya asing, sekarang malah tanpa sadar pun kakiku mengantarkanku sampai di tujuan dengan selamat,” kataku. </p>
                    <p class="text-justify">“Dan ternyata tanpa sadar keluh kesah kita selama di perkuliahan ini tetap berhasil kita jalani,” saut temanku. </p>
                    <p class="text-justify">Fase dewasa sesungguhnya. Kewajiban yang penuh beban, yang harus dijalani, yang banyak menciptakan keluh kesah.
                         Pada akhirnya beban itu tetap dikerjakan dan selesai tanpa harus diultimatum. Yang awalnya terpaksa, lama-lama terbiasa. 
                         Tanpa sadar Yogya membentuk kedewasaan itu. Tanpa sadar, Yogya jadi saksi bisu aku menjadi dewasa. </p>
                    <p class="text-justify">“Hidup ini penuh rahasia, ya.”</p>
                    <p class="text-justify">“Tentang mati pun jadi rahasia.”</p>
                    <p class="text-justify">“Gak kerasa kita sudah sampai di fase mengucap selamat tinggal pada semua hal tentang kota ini.”</p>
                    <p class="text-justify">“Perasaan baru kemarin kita ke Kopi Kelothok, kok sekarang sudah di depan stasiun, mengantar satu per satu.” </p>
                    <p class="text-justify">“Baru kemarin kita menangisi KKN dan skripsi, sekarang menangisi perpisahan.”</p>
                    <p class="text-justify">“Sudah-sudah. Waktunya pulang. Jadi melow gini.” </p>
                    <p class="text-justify">Kami pun berpisah di persimpangan jalan. Aku ke barat dan yang lain ke timur. Aku kembali berjalan sendiri. Merenungkan nasib.
                         Hidup di Yogya tidak seburuk itu. Kota ini akan jadi tempat paling sering aku kunjungi nantinya. Meski hanya sekadar melewati jalan kampus, 
                         menonton teater, mendengar penyanyi jalanan, melihat karya seni, dan menyaksikan pasangan muda-mudi. </p>
                    <p class="text-justify">“Yogya, tetaplah menjadi tempat pulang untukku yang kerap sakit.”</p>
                    <p class="text-justify">Alasan rindu telah kutemukan. Romansa itu telah kudekap. Aku akan bawa kota ini sampai nanti aku mati. 
                        Selamat tinggal Titik Nol, Tugu, bundaran, Pasar Kranggan, Klebengan, ayam geprek, mi ayam, alun-alun, Malioboro, 
                        Sambal Cowek–yang sekarang jadi Sambal Colek, Taman Budaya Yogyakarta (TBY), Studio Gamplong–tempatku mengukir jahitan di kepala, dan UGM–kampus tercinta. </p>

                </div> --}}
            </div>
        </div>
    </div>
    <footer class="text-white mt-5" style="background-color: rgb(103, 197, 139);">
        <div class="text-center bg-secondary py-2">
            <p class="mb-0">&copy; 2024 Cerpen Platform. All rights reserved.</p>
        </div>
    </footer>
    @endsection
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>