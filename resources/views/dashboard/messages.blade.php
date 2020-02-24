@extends('dashboard.index')
@section('title','Pesan')
@section('aktifmessages','active')
@section('content')
<div class="row">
    <div class="col-md-3">
        <a href="#" class="btn btn-primary btn-block mb-3">@yield('card')</a>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item active">
                        <a href="/messages" class="nav-link">
                            <i class="fas fa-inbox"></i> Inbox

                            <span class="badge bg-primary float-right"></span>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-envelope"></i> Sent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-file-alt"></i> Drafts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-filter"></i> Junk
                            {{-- <span class="badge bg-warning float-right">65</span> --}}
                    </a>
                    </li>
                    <li class="nav-item">
                        <a href="/messages/archive/trash" class="nav-link">
                            <i class="far fa-trash-alt"></i> Trash
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
    <!-- /.col -->
    @yield('berkaspesan')
    <!-- /.col -->
</div>
<!-- /.row -->
</section>
@endsection
