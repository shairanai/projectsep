@extends('/template/nav')
@section('content')
    <div class="container mt-5"></div>
    <div class=" row g-0">
        <div class=" col-md-4">
            <img src="gambar/ajaib2.jpg" style="width: 600px; height: 300px; margin-left: 90%;" alt="">
        </div>
            <h2 class="text-center mb-4 mt-5">Pintu Gerbang ke Dunia Ajaib</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">{{$artikel->isi}}</p>

                {{-- <div class="col-lg-8 mx-auto">
                    Di sebuah desa terpencil, tinggal seorang anak laki-laki bernama Alex. 
                    Alex adalah anak yang penuh dengan imajinasi. Setiap hari, ia bermimpi tentang 
                    petualangan di dunia fantasi yang belum pernah ia kunjungi.
                    </p>
                    <p class="text-justify">Suatu hari, ketika sedang bermain di hutan belakang rumahnya, 
                        Alex menemukan pintu kecil yang tersembunyi di balik semak belukar. Pintu itu berwarna 
                        biru keperakan dan terlihat sangat tua. Dengan rasa penasaran yang memuncak, Alex membuka pintu tersebut.</p>
                    <p class="text-justify">Tak disangka, di balik pintu itu terdapat lorong panjang yang 
                        mengantarkan Alex ke sebuah dunia yang sangat aneh. Ia menemukan dirinya berada di 
                        tanah yang penuh dengan bunga-bunga berwarna-warni yang berbicara dan bergerak layaknya manusia.</p>
                    <p class="text-justify">Alex bertemu dengan makhluk-makhluk aneh seperti peri kecil bercahaya, 
                        pohon dengan mata, dan burung-burung bersuara indah yang berbicara dengan bahasa manusia. 
                        Mereka menyambut kedatangan Alex dengan gembira.</p>
                    <p class="text-justify">Mereka mengajak Alex berkeliling di dunia ajaib itu. 
                        Mereka menunjukkan kepadanya pemandangan yang indah, sungai yang airnya berkilauan, 
                        dan pohon-pohon yang dapat berbicara. Alex merasa senang dan terpesona dengan semua keajaiban yang ia temui di sana.</p>
                    <p class="text-justify">Namun, tiba-tiba Alex mendengar suara gemuruh dan melihat langit di atas mereka berubah gelap. 
                        Dunia ajaib itu terancam oleh kekuatan gelap yang ingin menghancurkannya. Dalam waktu singkat, 
                        Alex menyadari bahwa hanya dia yang dapat menyelamatkan dunia ajaib ini.</p>
                    <p class="text-justify">Dengan berani, Alex mengumpulkan keberanian dan menggunakan kekuatan imajinasinya untuk 
                        mengalahkan kekuatan gelap itu. Dengan bantuan teman-teman barunya, ia berhasil mengusir kekuatan jahat itu 
                        dan menyelamatkan dunia ajaib.</p>
                    <p class="text-justify">Setelah berhasil menyelamatkan dunia ajaib, pintu ke dunia itu tiba-tiba menutup dengan sendirinya. 
                        Alex pun kembali ke dunianya sendiri. Namun, pengalaman di dunia fantasi itu akan selalu tinggal di dalam ingatannya 
                        sebagai petualangan terbesar yang pernah ia alami.</p>
                    
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