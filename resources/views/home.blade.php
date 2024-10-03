@extends('/template/nav')
@section('content')
<header class="container " style="background-color: rgb(147, 228, 178); width: 105%; height: 300px; margin-top: 6%">
    <h4 class="text-white text-center" style=" font-size: 20px; padding-top: 10%">Cerpen merupakan suatu karya sastra dalam bentuk tulisan <br> yang mengisahkan tentang sebuah cerita fiksi lalu dikemas secara pendek, jelas dan ringkas.</h4>
</header>

    {{-- <h4 style="margin-left: 7%; margin-top: 3%; font-size: 20px;">Cerpen Untukmu : </h4> --}}

    
    <div class="container" style="margin-top: 5%">
        <div class="row d-flex">
            @foreach ($artikel as $item)
                
            <div class="col-3 d-flex md-5 mt-5">
                <div class="card" style="width: 100%; height: 300px">
                    {{-- <div class="flex-column shadow rounded"
                     style="background-color: white; width: 350px; height: 105%;"
                     >                 --}}
                        <img class="rounded" src="{{asset('/storage/foto/'.$item->foto)}}" alt="" style="width: 100%; height: 160px;">
                        <h4 class="card-title text-center mt-3"  style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">{{$item->judul}}</h4>
                        {{-- <p class="ms-3 mt-3 text-secondary " style="font-size: 17px;">{{$item->isi}}</p> --}}
                        <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3 mt-3"> <a style="text-decoration: none; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif" class="text-light" href="detailcerita/{{$item->id}}">Baca Sekarang</a></small></p>
                    {{-- </div> --}}

                </div>
            </div>
            @endforeach


        {{-- <div class="col-3 d-flex md-5 mt-3">
            <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                <img class="rounded " src="gambar/tari.jpg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                <h6 class="card-title text-center mt-1">Tarian Cahaya di Kerajaan Nubliss</h6>
                <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di suatu kerajaan yang tersembunyi di balik kabut dan awan tebal, terletaklah....</p>
                <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3"> <a style="text-decoration: none" class="text-light" href="detailcerita">Baca Sekarang</a></small></p>
            </div>
        </div>

        <div class="col-3 d-flex md-5 mt-3">
            <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                <img class="rounded " src="gambar/blokcnt.webp" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                <h6 class="card-title text-center mt-1">Not Balok Cinta di Kafe Jazz</h6>
                <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di tengah hiruk pikuk kota yang tak pernah tidur, terdapat sebuah kafe jazz kecil yang....</p>
                <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3"> <a style="text-decoration: none" class="text-light" href="detailcerita3">Baca Sekarang</a></small></p>
            </div>
        </div>

        <div class="col-3 d-flex md-5 mt-3">
            <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                <img class="rounded " src="gambar/ajaib2.jpg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                <h6 class="card-title text-center mt-1">Pintu Gerbang ke Dunia Ajaib</h6>
                <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di sebuah desa terpencil, tinggal seorang anak laki-laki bernama Alex....</p>
                <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3"> <a style="text-decoration: none" class="text-light" href="detailcerita4">Baca Sekarang</a></small></p>
            </div>
        </div>

        <div class="col-3 d-flex md-5 mt-5">
            <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                <img class="rounded " src="gambar/horror.jpeg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                <h6 class="card-title text-center mt-1" >Desingan Kaki di Bawah Tempat Tidur</h6>
                <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Dalam kamarnya yang penuh mainan dan warna-warni, seorang....</p>
                <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3"> <a style="text-decoration: none" class="text-light" href="detailcerita5">Baca Sekarang</a></small></p>
            </div>
        </div>

        <div class="col-3 d-flex md-5 mt-5">
            <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                <img class="rounded " src="gambar/petualangan.jpeg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                <h6 class="card-title text-center mt-1  ">Petualangan di Kota Quantum</h6>
                <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Penjelajah ruang-waktu, yang dikenal sebagai Alex, berjalan dengan....</p>
                <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
            </div>
        </div> --}}
    </div>
</div>




<div class="container mt-5">
    <h3 class="mb-3">Pilih Genre</h3>
    
    <ul class="list-group">
      <li class="list-group-item"><a href="romansa" class="text-decoration-none">Romansa</a></li>
      <li class="list-group-item"><a href="horor" class="text-decoration-none">Horor</a></li>
      <li class="list-group-item"><a href="fantasi" class="text-decoration-none">Fantasi</a></li>
    </ul>
  </div>

    <footer class="text-white mt-5" style="background-color: rgb(103, 197, 139);">
        <div class="text-center bg-secondary py-2">
            <p class="mb-0">&copy; Cerpen Platform. </p>
        </div>
    </footer>
    @endsection


</body>
</html>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>