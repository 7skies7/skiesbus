@extends('layouts.master')

@section('content')

  <div class="row justify-content-md-center">
    <div class="col-md-12">
        <div class="card text-center mt-20">
            <div class="card-body">
            <h4 class="card-title">Search, Compare and Book Bus</h4>
            <!-- <h6 class="card-subtitle mb-2 text-muted">Search, Compare and Book Bus</h6> -->
            <div class="card-text mx-auto">
                <form class="form-inline mt-20">
                    <div class="form-group">
                        <label for="staticEmail2" class="sr-only">Email</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="email@example.com">
                    </div>
                    <div class="form-group mx-sm-3">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm identity</button>
                </form>
            </div>
            
            </div>
        </div>
    </div>

  </div>
      
@endsection
