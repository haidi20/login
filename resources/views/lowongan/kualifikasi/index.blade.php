@extends('_layouts.default')

@section('konten')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Daftar Kualifikasi</h2>
      </div>
      <div class="col-md-6 text-right button-top">
        <a href="{{ route('tanggungjawab.index') }}" class="btn btn-default">Back</a>
        <a href="{{route('kualifikasi.create')}}" class="btn btn-success btn-md">Tambah</a>
        <a href="{{route('lowongan.index')}}" class="btn btn-info btn-md">Selesai</a>
      </div>
    </div>
    <hr class="dashed mt20 mb20">
    <br>
    <div class="row">
  <div class="col-md-12">
    <table class="table table-bordered table-custom">
      <thead>
        <tr>
          <th width="10">No</th>
          <th>Nama</th>
          <th width="125px">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Minimal Lulusan SMK / SMA / Sederajat</td>
          <td>
            <a href="#" class="btn btn-info btn-sm">Edit</a>
            <a href="#" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
      </tbody>
    </table>
    {{-- {!! $sekolah->appends(Request::input()); !!} --}}
  </div>
</div>

  </div>
@endsection