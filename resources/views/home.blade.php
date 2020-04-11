@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <hr>
                    <a href="issues"><button type="button" class="btn btn-primary">My issues</button></a>
                    <a href="issues/create"><button type="button" class="btn btn-success">Create an issue</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
