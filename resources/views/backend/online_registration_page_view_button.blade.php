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
                {{-- <a class="btn btn-success mt-2" href="{{ url('/admin/online_reg_form') }}" role="button">Create Reg Form</a> --}}
                <td><a role="button" href="{{ url('/admin/update_online_registration_member/'.$data['id'])  }}" class="btn btn-primary ">Update</a></td>
                <td><a role="button" href="{{ url('/admin/delete_online_registration_member/'.$data['id'])  }}" class="btn btn-danger ">Delete</a></td>
                @if($data['status'] == 1)
                <td class="px-0"><a role="button" href="{{ url('/admin/unverify_online_registration_member/'.$data['id']) }}" class="btn  btn-warning btn">Unverify</a></td>
               @else
                <td class="px-0"><a role="button" href="{{ url('/admin/verify_online_registration_member/'.$data['id']) }}" class="btn btn-success btn">Verify</a></td>
               @endif
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
                                        <th scope="row">Father Name</th>
                                        <td>{{ $data['father_name'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CNIC No.</th>
                                        <td>{{ $data['cnic_no'] }}</td>
                                        {{-- 
                                        <td class="px-0"><a role="button" href="{{ url('/admin/delete_online_registration_member/'.$item->id) }}" class="btn btn-info btn-sm">View</a></td> --}}
                                    </tr>
                                    <tr>
                                        <th scope="row">City</th>
                                        <td>{{ $data['city'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Professional Qualification</th>
                                        <td>{{ $data['prof_qualification'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Year Qualification</th>
                                        <td>{{ $data['year_qualification'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Affiliation</th>
                                        <td>{{ $data['affiliation'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile Number</th>
                                        <td>{{ $data['mobile_no'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Landline Number</th>
                                        <td>{{ $data['landline_no'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Residential Address</th>
                                        <td>{{ $data['residential_address'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Official Address</th>
                                        <td>{{ $data['official_address'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Email</th>
                                        <td>{{ $data['email_id'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Member Category</th>
                                        <td>{{ $data['mem_cetag'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fee Schedule</th>
                                        <td>{{ $data['fee_schedule'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Submission Date</th>
                                        <td>{{ $data['submission_date'] }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CNIC Copy</th>
                                        <td><a href="{{ asset('storage/' . $data['cnic_copy']) }}" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Photo</th>
                                        <td><a href="{{ asset('storage/' . $data['photo']) }}" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Fee</th>
                                        <td><a href="{{ asset('storage/' . $data['fee']) }}" target="_blank">Download</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Document</th>
                                        <td><a href="{{ asset('storage/' . $data['doc']) }}" target="_blank">Download</a></td>
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