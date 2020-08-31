@extends('layouts.admin')

@section('title')
    <title>Admin</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Home</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Starter Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <form action="{{route('store-user')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="" class="form-control" name="nameuser" placeholder="Nhập tên">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="" class="form-control" name="nameuser" placeholder="Nhập email">
                            </div>
                            <button type="submit" class="btn btn-primary">Create User</button>
                            <button type="submit" class="btn btn-default">Cancel</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->
@endsection

