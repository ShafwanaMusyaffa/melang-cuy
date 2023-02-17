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
                <div class="form-group col-6">
                  <label for="first_name">First Name</label>
                  <input id="first_name" type="text" class="form-control" name="first_name" autofocus>
                  @error('first_name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
                <div class="form-group col-6">
                  <label for="last_name">Last Name</label>
                  <input id="last_name" type="text" class="form-control" name="last_name">
                  @error('last_name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email">
                  @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
                <div class="form-group col-6">
                  <label for="phone">Phone</label>
                  <input id="phone" type="number" class="form-control" name="phone">
                  @error('phone')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
              </div>

              <div class="row">
                <div class="form-group col-6">
                  <label for="password" class="d-block">Password</label>
                  <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                  <div id="pwindicator" class="pwindicator">
                    <div class="bar"></div>
                    <div class="label"></div>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label for="password_confirmation" class="d-block">Password Confirmation</label>
                  <input id="password_confirmation" type="password" class="form-control" name="password_confirmation">
                  @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
              </div>

              <div class="form-divider">
                Your Home
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label>Country</label>
                  <select class="form-control selectric" name="country">
                    <option>Indonesia</option>
                    <option>Palestine</option>
                    <option>Syria</option>
                    <option>Malaysia</option>
                    <option>Thailand</option>
                  </select>
                </div>
                <div class="form-group col-6">
                  <label>Province</label>
                  <select class="form-control selectric" name="province">
                    <option>West Java</option>
                    <option>East Java</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-6">
                  <label>City</label>
                  <input type="text" class="form-control" name="city">
                  @error('city')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                  @enderror
                </div>
                <div class="form-group col-6">
                  <label>Postal Code</label>
                  <input type="number" class="form-control" name="postal_code">
                  {{-- @error('postal_code') --}}
                        <div class="invalid-feedback">
                          Test
                        </div>
                  {{-- @enderror --}}
                </div>
                {{-- <div class="form-group col">
                  <label>Roles</label>
                  <select class="form-control selectric" name>
                    <option>User</option>
                    <option>Staff</option>
                    <option>Admin</option>
                  </select>
                </div> --}}
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