@extends('admin.gosujin')
@section('title','category')

@section('content')
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main" style="margin-top:50px;">
        <h3 style="">Daftar Kategori</h3><br>

        <ul class="nav vavbar-nav">
            @if(!empty($categories))
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID Kategory</th>
                            <th>Nama Kategori</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                     @forelse($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                        </tr>
                        @empty
                            <li>No Category</li>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @endif
        </ul>
        <br><br>
        <form action="{{route('category.store')}}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Nama Kategori:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kategori">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>


    </main>
@endsection