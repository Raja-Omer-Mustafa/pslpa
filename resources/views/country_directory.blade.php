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
                <th>#ID</th>
                <th>Name</th>
                <th>Affiliation</th>
                <th>City</th>
                <th>status</th>
                <th>Verification No.</th>
            </tr>
        </thead>
            @foreach ($details as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->affiliation }} </td>
                    <td>{{ $item->city }}</td>
                    <td>
                        @if($item->status == 1)
                        Active
                        @else
                        Inactive
                        @endif
                    </td>
                    <td>{{ $item->verification_code }}</td>
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