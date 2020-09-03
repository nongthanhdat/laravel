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
                        <h1 class="m-0 text-dark">Edit User</h1>
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
                        <form action="{{route('update-user',['id'=>$u->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Tên</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập tên" value="{{$u->name}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Nhập email" value="{{$u->email}}">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleFormControlSelect1">Role</label>--}}
{{--                                <select class="form-control" name="role">--}}
{{--                                    <option>User</option>--}}
{{--                                    <option>Admin</option>--}}
{{--                                    <option>Librarian</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <button type="submit" class="btn btn-primary">Update user</button>
                            <form action="#">
                                <button type="submit" class="btn btn-default">Cancel</button>
                            </form>
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

