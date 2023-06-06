@extends('admin.layout.appadmin')
@section('content')
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">kategori Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <h2>Kategori Produk</h2>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($kategoriProduk as $p)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $p->nama }}</td>
                            {{-- nama_kategori diambil dari join yang ada di controller produk yang sudah dibuatkan join --}}
                        </tr>
                        @php $no++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection