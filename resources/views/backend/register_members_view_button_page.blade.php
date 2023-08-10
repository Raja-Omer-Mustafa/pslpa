@extends('backend.layouts.app')

@section('backend_content')
<!-- Content Header (Page header) -->
<div class="content-header">
    @if(session('success'))
        <div id="Alert" class="alert alert-success m-4">
            <h5>{{ session('success') }}</h5>
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('Alert').style.display = 'none';
            }, 4000); 
        </script>
    @endif
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="mb-2">{{ $data['name'] }}</h1>
                <td><a role="button" href="{{ url('/admin/update_register_member/'.$data['id'])  }}" class="btn btn-primary ">Update</a></td>
                <td><a role="button" href="{{ url('/admin/delete_register_member/'.$data['id'])  }}" class="btn btn-danger ">Delete</a></td>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <div class="d-flex">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="row">ID</th>
                                        <td>{{ $data['id'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <td>{{ $data['name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Affiliation</th>
                                        <td>{{ $data['affiliation'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td>{{ $data['city'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>
                                            @if($data->status == 1)
                                            <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Active</option>
                                            @else
                                            <option value="0" {{ $data->status == 0 ? 'selected' : '' }}>Inactive</option>
                                            @endif
                                        </td>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection