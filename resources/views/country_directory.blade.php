@extends('layouts.app')

@section('content')
<div class="container mb-4">

    <form action="{{ route('searchRegForm') }}" method="get" class="mb-4">
        @csrf
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" name="search" placeholder="Search">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<div style="margin: 5% 0% 5% 0%;">
    @if($details->count() > 0)
    <table class="table table-striped ">
        <thead>
            <tr>
                <th>#</th>
                <th>Registration Number</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Phone</th>
                <th>Office Address</th>
                <th>Affiliation</th>
                <th>City</th>
                <th>status</th>
                <th>Registration Start Date</th>
                <th>Registration End Date</th>
            </tr>
        </thead>
        @foreach ($details as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->verification_code }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email_id }}</td>
            <td>{{ $item->mobile_no }}</td>
            <td>{{ $item->official_address }}</td>
            <td>{{ $item->affiliation }} </td>
            <td>{{ $item->city }}</td>
            <td>
                @if($item->status == 1)
                Active
                @else
                Inactive
                @endif
            </td>
            <td>{{ $item->verify_at }}</td>
            <td>{{ $item->expire_at }}</td>
        </tr>
        @endforeach
    </table>
    @else
    <p style="margin:0 0 27vh 4%;"> no search results found</p>
    @endif
    <center class="mt-4 ml-3">
        {{ $details->links() }}
    </center>
</div>

@endsection