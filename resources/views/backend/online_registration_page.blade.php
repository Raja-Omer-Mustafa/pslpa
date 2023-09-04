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
                <h1 class="m-0">Reg Form</h1>
                <a class="btn btn-success mt-2" href="{{ url('/admin/online_reg_form') }}" role="button">Create Reg Form</a>
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
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                         <h3 class="card-title">Online Registration</h3>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <div class="d-flex">
                            <table class="table table-striped ">
                                <thead>
                                  <tr>
                                    
                                    <th scope="col">ID</th>
                                    <th scope="col">Application Number</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">CNIC No.</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Mobile No.</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Submission Date</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($details as $item)
                                    <tr>
                                       
                                        <td>{{ $item->id }}</td>
                                        <td>{{"RSLP/T:" . $item->verification_code . "/" . (new \Carbon\Carbon($item->submission_date))->year }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->cnic_no }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>{{ $item->mobile_no }}</td>
                                        <td>{{ $item->email_id }}</td>
                                        <td>
                                            @if($item->status == 1)
                                            Active
                                            @else
                                            Inactive
                                            @endif
                                        </td>
                                        <td>{{ $item->submission_date }}</td>
                                        <td></td>
                                        @if($item->status == 1)
                                         <td class="px-0"><a role="button" href="{{ url('/admin/unverify_online_registration_member/'.$item->id) }}" class="btn  mx-1  btn-warning btn-sm">Unverify</a></td>
                                        @else
                                         <td class="px-0"><a role="button" href="{{ url('/admin/verify_online_registration_member/'.$item->id) }}" class="btn mx-1 btn-success btn-sm">Verify</a></td>
                                        @endif
                                        <td class="px-0"><a role="button" href="{{ url('/admin/update_online_registration_member/'.$item->id) }}" class="btn mx-1 btn-primary btn-sm">Update</a></td>
                                        <td class="px-0"><a role="button" href="{{ url('/admin/delete_online_registration_member/'.$item->id) }}" class="btn mx-1 btn-danger btn-sm ">Delete</a></td>
                                        <td class="px-0"><a role="button" href="{{ url('/admin/online-registration_view_on_button/'.$item->id) }}" class="btn mr-1 btn-info btn-sm">View</a></td>
                                    </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>                                    
                    </div>
                    <center class="mt-4 ml-3">
                        {{ $details->links() }}
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection