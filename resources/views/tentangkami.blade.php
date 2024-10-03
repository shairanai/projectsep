@extends('/template/nav')
@section('content')

<div class="col-md-8">
    <p style="margin-top: 15%; text-align: center; margin-left: 45%; font-size: 20px">
        Kami adalah platform yang berfokus pada karya cerpen.
         Di sini, kami menampilkan berbagai cerita pendek dari berbagai penulis yang berbakat.
          Kami percaya bahwa setiap cerita memiliki kekuatan untuk membawa pembaca pada petualangan baru,
           merenungi hidup, dan memahami berbagai sudut pandang. Bergabunglah dengan kami dan temukan cerpen yang menginspirasi dan menghibur.
    </p>
    <p class="mt-5 ms-5" style="font-size: 20px">kami menyediakan berbagai genre cerpen yaitu :</p>
    <p class="fw-bold mt-5 ms-5" style="font-size: 20px;">Romansa </p>
    <p class="ms-5" style="font-size: 20px;">Dalam dunia sastra, cerpen romantis atau cerpen romantis singkat menjadi genre yang paling dicari dan dinikmati oleh pembaca dari segala usia.
         Cerpen romantis singkat adalah potret kehidupan cinta yang disampaikan dalam sebuah narasi singkat, namun mampu menyentuh hati pembaca dengan kedalaman emosi yang mendalam.</p>
         

    <p class="fw-bold mt-5 ms-5" style="font-size: 20px;">Horor </p> 
    <p class="ms-5" style="font-size: 20px;"> kisah fiksi yang ditulis dengan tujuan menciptakan ketegangan dan keganasan dalam narasi yang dianggap menakutkan.</p>

    <p class="fw-bold mt-5 ms-5" style="font-size: 20px;">Fantasi </p> 
    <p class="ms-5" style="font-size: 20px;"> karangan yang dibuat dengan mengandalkan imajinasi atau khayalan seseorang yang didalamnya akan ada berbagai macam jenis kisah</p>

    <p class="ms-5 mt-5 fw-bold" style="font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif">Berikut cerpen dari beberapa genre</p>
    

    <div class="container">
        <div class="row d-flex">
            <div class="col-3 d-flex md-5 mt-5" style="margin-left: 10%">
                <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">
                    <img class="rounded " src="gambar/blokcnt.webp" alt="" srcset="" width="100%" height="200px" style="background-color: #f8f9fa; object-fit: cover;">
                    <h6 class="card-title" style="margin-left: 5%; width: 600px">Not Balok Cinta di Kafe Jazz</h6>
                    <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di tengah hiruk pikuk kota yang tak pernah tidur, terdapat....</p>
                    <p class="card-text" style="margin-left: 30%"><small class="btn btn-success text-muted"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
                </div>
           </div>

           <div class="col-3 d-flex md-5 mt-5" style="margin-left: 20%">
            <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                <img class="rounded " src="gambar/fantasi.jpeg" alt="" srcset="" width="100%" height="200px" style="background-color: #f8f9fa; object-fit: cover;">
                <h6 class="card-title" style="margin-left: 5%; width: 600px">Melodi dari Alam Fantasi</h6>
                <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Di suatu negeri yang jauh dari dunia manusia, terdapat hutan....</p>
                <p class="card-text" style="margin-left: 30%"><small class="btn btn-success text-muted"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
            </div>
           </div>

        <div class="col-3 d-flex md-5" style="margin-left: 100%; margin-top: -35%">
            <div class="flex-column rounded shadow rounded" style="background-color: white; width: 350px; height: 105%;">                
                <img class="rounded " src="gambar/rumahhantu.jpeg" alt="" srcset="" width="100%" height="200px" style="background-color: #f8f9fa; object-fit: cover;">
                <h6 class="card-title" style="margin-left: 5%; width: 600px">Rumah Hantu</h6>
                <p class="ms-4 mt-3 text-secondary" style="font-size: 17px;">Hilmi adalah orang yang tidak takut dengan hantu. Ia percaya....</p>
                <p class="card-text" style="margin-left: 30%"><small class="btn btn-success text-muted"> <a style="text-decoration: none" class="text-light" href="#">Baca Sekarang</a></small></p>
            </div>
        </div>
        </div>
    </div>
</div>

<footer class="text-white mt-5" style="background-color: rgb(103, 197, 139);">
    <div class="text-center bg-secondary py-2">
        <p class="mb-0">&copy; Cerpen Platform. </p>
    </div>
</footer>


@endsection