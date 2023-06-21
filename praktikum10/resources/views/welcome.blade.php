@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            @foreach ($produk as $key => $item )
            
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('front/img/about.jpg')}}" alt="Card image cap">
                    <div class="card-body" style="height:300px;">
                        <h2>{{ $item->nama }}</h2>
                        <h5 class="card-text" style=" height:110px; overflow: hidden;text-overflow: ellipsis">{{ $item->deskripsi }}</h5>
                        <p>Sisa Stok : {{$item->stok}}</p>
                        <a href="" class="btn btn-warning">Beli</a>
                    </div>
                  </div>
            </div>
            @endforeach
    </div>
</div>
@endsection
