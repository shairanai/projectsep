@extends('/template/nav')
@section('content')
    <div class="container mt-5"></div>
    <div class=" row g-0">
        <div class=" col-md-4">
            <img src="gambar/horror.jpeg" class="mt-3 rounded" style="width: 600px; height: 300px; margin-left: 82%;" alt="">
        </div>
            <h2 class="text-center mb-4 mt-5">Desingan Kaki di Bawah Tempat Tidur</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">{{$artikel->isi}}</p>

                {{-- <div class="col-lg-8 mx-auto">
                    Dalam kamarnya yang penuh mainan dan warna-warni, seorang anak kecil bernama Tommy merasa aman saat tidur. 
                    Ia selalu merasa nyaman dengan kakinya yang tergantung di atas tempat tidur, menggantung bebas di udara.
                    Namun, suatu malam yang tenang, saat ia meletakkan kakinya seperti biasa, ia merasakan desingan dan tarikan yang keras.
                    </p>
                    <p class="text-justify">
                        Tommy merasa sesuatu yang aneh, seperti ada tangan tak terlihat yang mencoba menarik kakinya ke bawah tempat tidur.
                         Dalam kebingungannya dan ketakutannya, ia berteriak memanggil ibunya. Ibu Tommy segera masuk ke kamar dengan
                          wajah khawatir, berusaha untuk memahami apa yang terjadi.
                    </p>
                    <p class="text-justify">
                        Namun, ketika ibunya membungkukkan tubuhnya untuk melihat di bawah tempat tidur, tidak ada yang ada di sana.
                        Tidak ada tangan yang menarik, tidak ada bayangan yang mencurigakan. Semua tampak normal.
                        Ibu Tommy mencoba meyakinkan anaknya bahwa semuanya baik-baik saja dan mungkin hanya kejadian yang diimajinasikan oleh pikiran Tommy.
                    </p>
                    <p class="text-justify">Namun, Tommy tahu apa yang ia rasakan. Ia merasa bahwa ada sesuatu di bawah tempat tidurnya
                        yang mencoba menariknya masuk. Ia merasa bahwa ia hampir saja menjadi korban sesuatu yang tidak bisa dilihat oleh mata telanjang.
                        Meskipun ia akhirnya tertidur dalam pelukan ibunya, ia tetap merasa takut akan apa yang mungkin ada di dalam kamar tidurnya.</p>
                    <p class="text-justify">Kejadian ini meninggalkan bekas pada Tommy. Ia tidak lagi merasa aman di dalam kamar tidurnya yang dulu 
                        penuh keceriaan. Setiap kali ia melihat ke bawah tempat tidurnya, ia merasakan desingan yang membuatnya menggigil.</p>
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