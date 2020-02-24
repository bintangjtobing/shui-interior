@extends('dashboard.index')
@section('title','Help support development')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <form action="/request-support" method="POST">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama pelapor</label>
                                    <input type="text" name="nama_pelapor" class="form-control"
                                        value="{{auth()->user()->name}}" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email pelapor</label>
                                    <input type="text" name="email" class="form-control"
                                        value="{{auth()->user()->email}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Kategori masalah:</label>
                            <select name="kategori" class="custom-select" id="">
                                <option value="Pertanyaan umum">Pertanyaan umum</option>
                                <option value="Bantuan layanan">Bantuan layanan</option>
                                <option value="Bug, Error atau kesalahan pada sistem Shui Interior">Bug, Error atau
                                    kesalahan pada sistem Shui Interior</option>
                                <option value="Minta atau diskusikan fitur baru pada  sistem baru">Minta atau diskusikan
                                    fitur baru pada sistem baru</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ceritakan masalahnya:</label>
                            <textarea name="trouble" id="" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
