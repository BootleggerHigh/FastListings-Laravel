@extends('layouts.app')
@section('content')
    @include('listing.listing-go.go-home')
    @include('listing.listing-go.go-edit',['id'=>$listing->id])
    @include('listing.listing-go.go-destroy',['id'=>$listing->id])
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Listing ID</th>
            <th scope="col">user_id</th>
            <th scope="col">Name User</th>
            <th scope="col">Name Listing</th>
            <th scope="col">Address</th>
            <th scope="col">Website</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Bio</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>{{$listing->id}}</th>
            <td>{{$listing->user_id}}</td>
            <td>{{$listing->user->name}}</td>
            <td>{{$listing->name}}</td>
            <td>{{$listing->address}}</td>
            <td>{{$listing->website}}</td>
            <td>{{$listing->email}}</td>
            <td>{{$listing->phone}}</td>
            <td>{{$listing->bio}}</td>
        </tr>
        </tbody>
    </table>
@endsection
