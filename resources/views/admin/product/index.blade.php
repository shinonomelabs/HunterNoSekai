@extends('admin.gosujin')
@section('title','Dafrar produk')
@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
        <h3>Product</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>image</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Diskon</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                    <tr>
                        <td><img src="{{url('images',$product->image)}}" alt="" width="80"></td>
                        <td>{{$product->pro_name}}</td>
                        <td>{{$product->pro_price}}</td>
                        <td>{{$product->pro_disc}}</td>
                        <td>
                            <form action="{{route('product.destroy',$product->id)}}" method="post">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </main>
    
@endsection