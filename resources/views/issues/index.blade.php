@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Issues</div>

                <div class="card-body">
                   <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Description</th>
                          <th scope="col">User</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($issues as $issue)
                        <tr>
                          <th scope="row">{{$issue->id}}</th>
                          <td>{{$issue->description}}</td>
                          <td>{{$issue->user->name}}</td>
                          <td>
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-success">Finish</button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection