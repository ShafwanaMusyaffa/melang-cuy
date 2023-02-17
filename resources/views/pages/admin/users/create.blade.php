@extends('layouts.admin')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Create New User</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
      <div class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></div>
      <div class="breadcrumb-item">Editor</div>
    </div>
  </div>

  <div class="section-body">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header"><h4>Register</h4></div>

          <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">
              @csrf
              <div class="row">
                <div class="form-group col">
                  <label for="first_name">Name</label>
                  <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                  @error('first_name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email">
                  @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="form-group col">
                  <label for="password" class="d-block">Password</label>
                  <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                  <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                  Create
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection