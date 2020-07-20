@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.kelas.tambah') }}" class="btn btn-primary">
                        Tambah
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-hover" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Tipe Kelas</th>
                                <th>Thumbnail</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kelas as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->name_kelas }}</td>
                                <td>
                                    @if ($item->type_kelas == 0)
                                    Gratis
                                    @elseif($item->type_kelas == 1)
                                    Regular
                                    @elseif($item->type_kelas == 2)
                                    Premium
                                    @endif
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->thumbnail) }}" width="200" alt="" srcset="">
                                </td>
                                <td>
                                    <a href="{{ route('admin.kelas.detail',Crypt::encrypt($item->id)) }}"
                                        class="btn btn-warning">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection