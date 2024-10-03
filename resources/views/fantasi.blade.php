@extends('/template/nav')
@section('content')
     <div class="container" style="margin-top: 7%; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
        <div class="row d-flex">

            <div class="col-3 d-flex md-5 mt-3">
                <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                    <img class="rounded " src="gambar/fantasi.jpeg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                    <h6 class="card-title text-center mt-3" style="margin-left: 5%;">Melodi dari Alam Fantasi</h6>
                    {{-- <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di suatu negeri yang jauh dari dunia manusia, terdapat hutan....</p> --}}
                    <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3 mt-5"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
                </div>
            </div>

            <div class="col-3 d-flex md-5 mt-3">
                <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                    <img class="rounded " src="gambar/tarian.jpeg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                    <h6 class="card-title text-center mt-3" style="margin-left: 5%;">Tarian Cahaya di Kerajaan Nubliss</h6>
                    {{-- <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di suatu kerajaan yang tersembunyi di balik kabut dan awan tebal, terletaklah....</p> --}}
                    <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3 mt-5"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
                </div>
            </div>

            <div class="col-3 d-flex md-5 mt-3">
                <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                    <img class="rounded " src="gambar/ajaib2.jpg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                    <h6 class="card-title text-center mt-3" style="margin-left: 5%;">Pintu Gerbang ke Dunia Ajaib</h6>
                    {{-- <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di sebuah desa terpencil, tinggal seorang anak laki-laki bernama Alex....</p> --}}
                    <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3 mt-5"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
                </div>
            </div>

            <div class="col-3 d-flex md-5 mt-3">
                <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                    <img class="rounded " src="gambar/ninoalien.jpeg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                    <h6 class="card-title text-center mt-3" style="margin-left: 5%;">Nino dan Alien</h6>
                    {{-- <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Nino tidak bisa tidur pada suatu malam dan membuka jendela untuk mendapatkan ....</p> --}}
                    <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3 mt-5"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
                </div>
            </div>

            <div class="col-3 d-flex md-5 mt-5">
                <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                    <img class="rounded " src="gambar/e&j.jpeg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                    <h6 class="card-title text-center mt-3" style="margin-left: 5%;">Burung Elang dan Juna</h6>
                    {{-- <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Pada suatu waktu, keadaan alam menjadi sangat memprihatinkan....</p> --}}
                    <p class="card-text"style="margin-left: 25%"><small class="btn btn-success text-muted ms-3 mt-5"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
                </div>
            </div>

            <div class="col-3 d-flex md-5 mt-5">
                <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                    <img class="rounded " src="gambar/petualangan.jpeg" alt="" srcset="" width="100%" height="150px" style="background-color: #f8f9fa; object-fit: cover;">
                    <h6 class="card-title text-center mt-3" style="margin-left: 5%;">Petualangan di Kota Quantum</h6>
                    {{-- <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Penjelajah ruang-waktu, yang dikenal sebagai Alex, berjalan dengan....</p> --}}
                    <p class="card-text" style="margin-left: 25%"><small class="btn btn-success text-muted ms-3 mt-5"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
                </div>
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