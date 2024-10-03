{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{asset('assets/bootstrap/css/bootstrap.min.css')}}>
    <title>Document</title>
</head>
<body> --}}
    @extends('dashboard')
    @section('content')
    
        
            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-5 pb-4">
                        
                            <div class="container pt-5">
                                @if (Session::has('pesan'))
                                    <div class="alert">{{Session::get('pesan')}}</div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="/artikel/create" class="btn" style="background-color:rgb(47, 190, 130); color: black">Tambah Data</a><br>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="/search" method="post">
                                            @csrf
                                            <div class="input-group mb-3">
                                                <input type="text" name="cari" class="form-control" placeholder="cari">
                                                <button class="btn" type="submit" style="background-color: rgb(47, 190, 130); color: black">Cari</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                Total Data Artikel : {{$total}}
                                <table class="table" style="background-color: black">
                                    <thead class="table-secondary" style="background-color: black">
                                        <tr>
                                            <th class="text-center">NO</th>
                                            <th class="text-center">JUDUL</th>
                                            <th class="text-center">ISI</th>
                                            <th class="text-center">GENRE</th>
                                            <th class="text-center">FOTO</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($artikel as $key => $item)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td class="text-center">{{$item->judul}}</td>
                                                <td class="text-center" style="width:180px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word " >{{$item->isi}}</td>
                                                <td class="text-center">{{$item->genre}}</td>
                                                
                                                <td class="text-center"><img src="{{asset('/storage/foto/'.$item->foto)}}" alt="" style="width: 50px; height: 50px;"></td>
                                                <td class="text-center">
                                                    <a href="/artikel/delete/{{$item->id}}" onclick="return window.confirm('Yakin hapus data ini')" class="btn btn-danger">Delete</a>
                                                    <a href="/artikel/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>                  
                        </div>
                    </div>
                </div>   
         @endsection
{{-- </body>
</html> --}}