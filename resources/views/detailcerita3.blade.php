@extends('/template/nav')
@section('content')
    <div class="container mt-5"></div>
    <div class=" row g-0">
        <div class=" col-md-4">
            <img src="gambar/blokcnt.webp" style="width: 600px; height: 300px; margin-left: 90%;" alt="">
        </div>
            <h2 class="text-center mb-4 mt-5">Not Balok Cinta di Kafe Jazz</h2>
            <div class="row">
                <div class="col-lg-8 mx-auto">{{$artikel->isi}}</p>

                {{-- <div class="col-lg-8 mx-auto">
                    Di tengah hiruk pikuk kota yang tak pernah tidur, terdapat sebuah kafe jazz kecil yang tersembunyi di sudut jalan. 
                    Kafe itu tak hanya menyajikan musik yang mengalun merdu, tetapi juga menyimpan kisah cinta yang penuh nuansa.
                    </p>
                    <p class="text-justify">
                        Kafe itu bernama "Harmony Jazz Cafe," tempat di mana Daniel, seorang pemain saxophone berbakat, setiap malam menyajikan melodi-melodi indah. 
                        Daniel, pria yang memiliki mata yang dalam dan senyum misterius, tak pernah lupa memandangi Bella, seorang penyanyi jazz yang memukau hati setiap orang yang mendengarkan suaranya.
                    </p>
                    <p class="text-justify">
                        Bella, dengan rambut cokelat yang jatuh indah di sepanjang bahunya, selalu tampil di panggung kafe dengan penuh pesona. 
                        Setiap not yang ia nyanyikan seolah-olah mengisi ruangan dengan aroma cinta. Daniel, yang duduk di pojok kafe dengan saxophone kesayangannya, 
                        selalu terpukau oleh kecantikan suara Bella yang merayu setiap pendengar.
                    </p>
                    <p class="text-justify">Suatu malam, setelah penampilan yang memukau, Daniel menyusun beberapa not balok di atas meja piringan hitam. 
                        Not-not itu menciptakan melodi cinta yang begitu indah, seakan-akan menceritakan perasaan Daniel pada Bella. Dia tahu bahwa kata-kata tak bisa menyampaikan perasaannya,
                        maka dia memilih melodi sebagai bahasa cinta.</p>
                    <p class="text-justify">Bella yang penasaran dengan not-not itu mendekati meja Daniel. "Apa yang kamu tulis, Daniel?" tanya Bella sambil tersenyum.</p>
                    <p class="text-justify">Daniel tersenyum dan mengajak Bella duduk di sebelahnya. "Ini adalah not-not spesial untukmu, Bella. 
                        Sebuah lagu cinta yang diciptakan oleh hatiku."</p>
                    <p class="text-justify">Bella membaca not-not itu dengan mata berbinar. Saat melihat simbol-simbol di atas kertas, dia merasa getaran yang dalam dari hati Daniel. 
                        Kemudian, tanpa berkata apa-apa, Daniel mengambil saxophone dan memainkan melodi cinta itu.</p>
                    <p class="text-justify">Kafe itu menjadi sunyi, kecuali suara merdu saxophone yang membuat hati setiap pendengar terhanyut. 
                        Bella, dengan mata berkaca-kaca, merasakan getaran cinta dari setiap nadanya.
                        Melodi itu seperti sarana magis yang menghubungkan hati Daniel dan Bella dalam keharmonisan yang tak terucapkan.</p>
                    <p class="text-justify">Setelah Daniel selesai memainkan saxophone, kafe itu gemuruh dengan tepuk tangan meriah dari para penikmat musik.
                        Bella, dengan senyum yang sulit diungkapkan dengan kata-kata, memandang Daniel dengan tatapan penuh cinta.</p>
                    <p class="text-justify">Sejak malam itu, Daniel dan Bella seringkali menyajikan melodi cinta di kafe jazz itu.
                        Mereka menjadi duet yang tak terpisahkan, menciptakan not-not balok cinta di setiap penampilan mereka.
                        Kafe itu menjadi saksi bisu dari kisah cinta yang tumbuh di antara nada-nada indah yang mengalun di Harmony Jazz Cafe.
                        Not-not balok cinta yang diciptakan oleh Daniel menjadi bukti nyata bahwa kadang-kadang cinta tak perlu kata-kata, melainkan melodi yang dapat dirasakan oleh hati.</p>
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