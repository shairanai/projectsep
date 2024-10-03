@extends('/template/nav')
@section('content')
    <div class="container mt-5"></div>
    <div class=" row g-0">
        <div class=" col-md-4">
            <img src="gambar/tarian.jpeg" style="width: 600px; height: 300px; margin-left: 90%;" alt="">
        </div>
            <h2 class="text-center mb-4 mt-5">Hantu di Sekolah Lama</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">{{$artikel->isi}}</p>

                {{-- <div class="col-lg-8 mx-auto">Di sebuah kota kecil yang terpencil, terdapat sebuah sekolah tua yang telah ditinggalkan selama bertahun-tahun.
                     Namanya adalah SD Kayu. Banyak cerita mengerikan yang berkembang di sekitar sekolah tersebut, dan kebanyakan orang menghindarinya karena reputasinya sebagai tempat yang angker dan berhantu. 
                    </p>
                    <p class="text-justify">
                        Tiga pelajar bernama Maya, Rian, dan Dika sangat penasaran dengan cerita-cerita tentang sekolah tersebut.
                        Mereka memutuskan untuk memeriksanya sendiri pada malam Minggu. Tanpa memberi tahu orang tua mereka,
                        mereka berencana menyelinap masuk ke gedung sekolah pada tengah malam.
                    </p>
                    <p class="text-justify">
                        Pada malam Minggu, ketiganya bertemu di depan gerbang sekolah yang tua dan menakutkan itu.
                        Mereka membawa senter, kamera, dan peta sekolah yang mereka temukan di internet. Meskipun ketakutan,
                        mereka merasa bersemangat untuk mengeksplorasi apa yang ada di dalam.
                    </p>
                    <p class="text-justify">Saat mereka memasuki sekolah, suasana segera menjadi gelap dan menakutkan. 
                        Langkah mereka bergema di lorong-lorong kosong yang dipenuhi oleh bayangan-bayangan yang menyeramkan.
                        Namun, mereka tidak menemukan apa pun yang mencurigakan hingga mereka mencapai lantai atas.</p>
                    <p class="text-justify">Di sana, mereka menemukan sebuah pintu yang tertutup rapat. Maya, yang paling penasaran,
                        mencoba membukanya. Namun, pintu itu terkunci kuat. Rian menyarankan untuk meninggalkan pintu itu saja, 
                        tetapi Dika ingin mencari kunci di sekitar.</p>
                    <p class="text-justify">Saat Dika berjalan menjauh, Maya dan Rian mendengar suara aneh dari balik pintu tersebut.
                        Suara itu terdengar seperti bisikan angin yang menyeramkan, membuat mereka merinding. Mereka mencoba memanggil Dika,
                        tetapi tidak ada jawaban.</p>
                    <p class="text-justify">Ketika mereka berdua berbalik untuk mencari Dika, mereka melihat sesosok bayangan gelap 
                        yang mengintai dari balik sudut lorong. Tanpa berpikir panjang, mereka berlari menjauh, mencari tempat persembunyian.</p>
                    <p class="text-justify">Mereka berhasil bersembunyi di ruangan kecil yang tersembunyi di salah satu sudut sekolah.
                        Mereka berdua diam seribu bahasa, menunggu dengan ketakutan. Tiba-tiba, mereka mendengar suara langkah kaki yang
                        mendekat.</p>
                    <p class="text-justify">Takut dan terpojok, Maya dan Rian mengunci pintu ruangan itu dan bersembunyi di bawah meja. 
                        Mereka merasa napas mereka tersangkut saat pintu itu digoyang-goyangkan dengan keras.</p>
                    <p class="text-justify">Namun, tiba-tiba, suara itu berhenti. Maya dan Rian menunggu beberapa saat, tetapi tidak ada yang terjadi. 
                        Akhirnya, mereka memutuskan untuk keluar dari persembunyian mereka dan mencari tahu apa yang telah terjadi pada Dika.</p>
                    <p class="text-justify">Namun, ketika mereka membuka pintu, mereka kaget dengan apa yang mereka temukan. 
                        Di depan mereka, terbaring Dika dalam keadaan tidak bergerak, matanya terbelalak dan bibirnya berbusa. 
                        Di sekelilingnya, bayangan-bayangan gelap menyelimuti.</p>
                    <p class="text-justify">Tanpa berpikir panjang, Maya dan Rian memutuskan untuk membawa Dika keluar dari sekolah tersebut. 
                        Mereka menggendongnya dengan hati-hati dan berlari secepat mungkin keluar dari bangunan itu.</p>
                    <p class="text-justify">Setelah mereka keluar, mereka segera memanggil bantuan. Dika dilarikan ke rumah sakit, 
                        dan setelah beberapa hari, dia akhirnya sadar. Namun, dia tidak pernah bisa mengingat apa yang terjadi padanya 
                        di dalam sekolah itu.                    </p>
                    <p class="text-justify">Sejak kejadian itu, mereka bertiga bersumpah untuk tidak pernah lagi memasuki SD Kayu. 
                        Mereka juga menyadari bahwa cerita-cerita tentang rumah hantu itu tidak hanya sekadar legenda, 
                        melainkan kenyataan yang menakutkan.</p>

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