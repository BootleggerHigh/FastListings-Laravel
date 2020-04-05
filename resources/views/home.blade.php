@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard
                <span class="float-right">
                    <a href="{{route('listings.create')}}" class="btn btn-secondary">
                        Create listing
                    </a>
                </span>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your listings</h3>
                    @if(!$listings->isEmpty())
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    Company
                                </th>
                            </tr>
                            @foreach($listings as $listing)
                            <tr>
                               <td>
                                   <a href="{{route('listings.show',$listing->id)}}">{{$listing->name}}</a>
                               </td>
                            </tr>
                        @endforeach
                        </table>
                        @else
                        <p> You don't have any listings yes</p>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
