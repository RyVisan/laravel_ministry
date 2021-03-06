@extends('daskboard')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <a href="{{route('sub1_menu.index')}}" class="btn btn-primary"><i class="nav-icon fas fa-list-ul"></i> List Sub1 Menu</a>
                    </h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">


<div class="container">
    <div class="row">
    <div class="col-2"></div>
    <div class="col-8 justify-content-center">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{session('success')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>Create Sub1 Menu</h3>
            </div>
            <div class="card-body">
                <form action="{{route('sub1_menu.save')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" id="sub_menu_name">Sub Menu Name :</label>
                        <select name="submenu_name" class="form-select">
                            <option value="">-----Please select one sub menu-----</option>
                            @foreach($submenus as $submenu)
                                @if(old('submenu_name') == $submenu->id)
                                    <option selected value="{{$submenu->id}}" style="font-family: 'Siemreap', cursive;" >{{$submenu->name}}</option>
                                @else
                                    <option value="{{$submenu->id}}" style="font-family: 'Siemreap', cursive;" >{{$submenu->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('submenu_name')
                        <span class="text-danger">{{$message}}</span><br><br>
                        @enderror
                        <label for="exampleInputEmail1" class="form-label">Sub1 Menu Name :</label>
                        <input placeholder="please input name at least 3 characters" value="{{old('sub1_menu_name')}}" style="font-family: 'Siemreap', cursive;" type="text" name="sub1_menu_name" class="form-control"></input>
                        @error('sub1_menu_name')
                        <span class="text-danger">{{ $message }}</span><br><br>
                        @enderror<label for="exampleInputEmail1" class="form-label">Status :</label>
                        <select name="status" class="form-select">
                            <option @if(old('status') == 1) selected @endif value="1" style="font-family: 'Siemreap', cursive;">??????????????????</option>
                            <option @if(old('status') == 2) selected @endif value="0" style="font-family: 'Siemreap', cursive;">???????????????????????????</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success form-control"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>

    </div>
    <div class="col-2"></div>
    </div>
</div>
@endsection
