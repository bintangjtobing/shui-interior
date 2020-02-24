@extends('dashboard.index')
@section('title','Edit data '.$userfind->name)
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Data {{$userfind->id}} | {{$userfind->name}}</h3>
    </div>
    <form action="/proses-user/{{$userfind->id}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6" style="color: #000 !important;">
                    <label for="username">Nama pengguna</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$userfind->name}}" autofocus
                        required>
                </div>
                <div class="form-group col-md-6" style="color: #000 !important;">
                    <label for="kategori">Username pengguna</label>
                    <input type="text" name="username" id="username" class="form-control"
                        value="{{$userfind->username}}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" style="color:#000 !important">
                    <label for="email">Email pengguna</label>
                    <input type="email" name="email" id="" class="form-control" value="{{$userfind->email}}" required>
                </div>
                <div class="form-group col-md-6" style="color:#000 !important">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                        value="{{$userfind->unpassword}}" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6" style="color:#000 !important">
                    <label for="role">Role pengguna</label>
                    <select name="role" id="role" class="custom-select" required>
                        <option>Pilih role pengguna:</option>
                        <option @if($userfind->role=='Super Administrator') selected @endif>Super Administrator</option>
                        <option @if($userfind->role=='Administrator') selected @endif>Administrator</option>
                        <option @if($userfind->role=='user') selected @endif>user</option>
                    </select>
                </div>
                <div class="form-group col-md-6" style="color:#000 !important">
                    <label for="status">Status</label> @if($userfind->status=='aktif') <span
                        class="badge badge-success">Aktif</span> @else <span class="badge badge-danger">Tidak
                        aktif</span>@endif<br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1" value="aktif"
                            @if($userfind->status=='aktif')Checked @else @endif>
                        <label class="form-check-label" for="inlineRadio1">Aktif</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="inactive"
                            @if($userfind->status=='inactive')Checked @else @endif>
                        <label class="form-check-label" for="inlineRadio2">Tidak aktif</label>
                    </div>

                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
<!-- /.card -->
@endsection
