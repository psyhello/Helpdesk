@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create an Issue</div>
                  <form action=" {{Route('issues.store')}} " method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="description">Description</label>
                     <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                      <small id="description" class="form-text text-muted">Please describe what happend</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit an Issue</button>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection