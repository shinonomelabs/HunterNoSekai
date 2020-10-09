@extends('admin.gosujin')
@section('title','Tambah Barang')   
@section('content')
<div class="container-fluid">
    <div class="row">
        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" style="text-decoration: none; margin-top:50px;" >
            <h3 style="margin-bottom: 30px;">Tambahkan Barang</h3>
            <div class="col-md-6">
                <div class="panel-body">
                    <form action="{{route('product.store')}}" method="post" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}

                    <div class="form-group{{$errors->has('pro_name')?' has-error':''}}">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Nama Produk">
                            <span class="text-danger">{{$errors->first('pro_name')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('pro_code')?' has-error':''}}">
                            <label for="">Kode</label>
                            <input type="text" class="form-control" name="pro_code" id="pro_code" placeholder="Kode Produk">
                            <span class="text-danger">{{$errors->first('pro_code')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('pro_price')?' has-error':''}}">
                            <label for="">Harga</label>
                            <input type="text" class="form-control" name="pro_price" id="pro_price" placeholder="Harga">
                            <span class="text-danger">{{$errors->first('pro_price')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('pro_disc')?' has-error':''}}">
                            <label for="">Diskon %</label>
                            <input type="text" class="form-control" name="pro_disc" id="pro_disc" placeholder="Diskon">
                            <span class="text-danger">{{$errors->first('pro_price')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('stock')?' has-error':''}}">
                            <label for="">Stok barang</label>
                            <input type="text" class="form-control" name="stock" id="stock" placeholder="Stok Barang">
                            <span class="text-danger">{{$errors->first('stock')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('pro_info')?' has-error':''}}">
                            <label for="">Deskripsi</label>
                            <textarea class="form-control" type="text" name="pro_info" id="pro_info" rows="5"></textarea>
                            <span class="text-danger">{{$errors->first('pro_info')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('category_id')?' has-error':''}}">
                            <label for="">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">- Pilih Kategori -</option>
                                @foreach($categories as $id=>$category)
                                    <option value="{{$id}}">{{$category}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{$errors->first('category_id')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('image')?' has-error':''}}">
                            <label for="">Gambar</label>
                            <input type="file" name="image" class="form-control">
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>

                        <div class="form-group{{$errors->has('spl_price')?' has-error':''}}">
                            <label for="">Harga jual</label>
                            <input type="text" class="form-control" name="spl_price" id="spl_price" placeholder="Harga Jual">
                            <span class="text-danger">{{$errors->first('spl_price')}}</span>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>

            </div>
        </main>
    </div>
</div>
@endsection