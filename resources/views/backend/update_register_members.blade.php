@extends('backend.layouts.app')

@section('backend_content')
<!-- Content Header (Page header) -->
@if(session('success'))
    <div id="successAlert" class="alert alert-success m-4">
        <h5>{{ session('success') }}</h5>
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 4000); 
    </script>
@endif

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Update Registered member</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" style="background-color: rgb(236, 236, 236)">
                    <div class="card-body table-responsive p-0">
                        <div class="m-5">
                            <form method="POST" action="{{ url('/admin/update_register_member/'.$data->id) }}">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Name</label>
                                  <input type="text" class="form-control" value="{{ $data->name }}" name="name">
                                  @error('name')
                                    <div class="error mt-1" style="color:rgb(229, 62, 62);">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Affiliation</label>
                                  <input type="text" class="form-control" value="{{ $data->affiliation }}" name="affiliation">
                                  @error('affiliation')
                                    <div class="error mt-1" style="color:rgb(229, 62, 62);">{{ $message }}</div>
                                  @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">City</label>
                                    <input type="text" class="form-control" value="{{ $data->city }}" name="city">
                                    @error('city')
                                    <div class="error mt-1" style="color:rgb(229, 62, 62);">{{ $message }}</div>
                                    @enderror
                                </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Status</label>
                                    {{-- <input type="number" class="form-control" min="0" max="1" step="0" value="{{ $data->status }}" name="status"> --}}
                                    <select class="form-control" name="status">
                                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                    @error('status')
                                    <div class="error" style="color:rgb(229, 62, 62);">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                              </form>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection