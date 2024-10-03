@extends('/template/nav')
@section('content')
    <div class="container mt-5"></div>
    <div class=" row g-0">
        <div class=" col-md-4 mt-5">
            <img class="rounded" src={{asset('/storage/foto/'.$artikel->foto)}} style="width: 600px; height: 300px; margin-left: 90%;" alt="">
        </div>
            <h2 class="text-center mb-4 mt-4">{{$artikel->judul}}</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">{{$artikel->isi}}</p>
                {{-- <div class="col-lg-8 mx-auto">
                    Di suatu kerajaan yang tersembunyi di balik kabut dan awan tebal, terletaklah Kerajaan Nubliss, 
                    sebuah tempat magis di mana cahaya memainkan peran penting dalam kehidupan penduduknya. Di sana, 
                    cahaya adalah sumber kekuatan dan kehidupan yang memberikan warna dan keajaiban pada setiap sudutnya.
                    </p>
                    <p class="text-justify">
                        Pada hari di mana matahari bersinar paling terang, Putri Lysa, pewaris takhta Kerajaan Nubliss, 
                        melangkah ke taman istana. Ditemani oleh penasihatnya, Merlyn, dia berdiri di depan pohon kristal 
                        yang memancarkan cahaya ke segala arah.
                    </p>
                    <p class="text-justify">
                        "Pohon Cahaya ini, Lysa, mengandung kekuatan penuh yang masih tersembunyi. Hanya orang dengan
                         hati murni yang bisa mengungkap rahasia di baliknya," kata Merlyn seraya menatap pohon kristal yang memancarkan cahaya warna-warni.
                    </p>
                    <p class="text-justify">Lysa, yang penasaran dan penuh semangat menyentuh batang pohon tersebut. Sesosok makhluk kecil berwujud cahaya 
                        muncul di hadapannya. Itu adalah Twinkle, penjaga pohon yang ditugaskan untuk menguji kedamaian dan kebaikan hati siapa pun yang mendekati pohon tersebut.</p>
                    <p class="text-justify">"Putri Lysa, apakah engkau memiliki hati yang murni dan niat yang baik?" tanya Twinkle.</p>
                    <p class="text-justify">Lysa menjawab dengan tulus, "Saya ingin menjaga kebaikan dan keindahan Kerajaan Nubliss agar tetap abadi".</p>
                    <p class="text-justify">Mendengar jawaban itu, Twinkle tersenyum dan memberikan tongkat ajaib kepadanya. "Putri, dengan tongkat ini, 
                        engkau akan dapat mengarahkan cahaya untuk membawa kebahagiaan dan kebaikan ke seluruh negeri."</p>
                    <p class="text-justify">Dari saat itu, Lysa menggunakan kekuatan tongkat ajaib untuk mengarahkan cahaya dari pohon kristal, menyebarkan kebahagiaan dan keindahan di Kerajaan Nubliss. Cahaya warna-warni yang ia sebarkan membawa keajaiban dan kedamaian bagi semua penduduk negeri tersebut.</p>
                    <p class="text-justify">Dari pengalaman itu, Lysa belajar bahwa kebaikan hati dan niat yang tulus dapat menjadi kekuatan besar dalam membawa cahaya ke dalam kehidupan orang lain. Sejak saat itu, Kerajaan Nubliss dikenal sebagai tempat di mana cahaya membawa kehidupan, harapan, dan kebahagiaan bagi semua yang tinggal di sana.</p>
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