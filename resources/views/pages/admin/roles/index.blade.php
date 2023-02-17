@extends('layouts.admin')

@section('title')
  Data Role
@endsection

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Data Roles</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item">Roles</div>
      </div>
    </div>

    <div class="section-body">
      <a href="{{ route('roles.create') }}" class="btn bg-primary text-white">Create New Role</a>
      <div class="row pt-3">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              {{ $dataTable->table() }}
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
@endsection

@push('addons-script')
  <!-- General JS Scripts -->
  <script src="/assets/modules/jquery.min.js"></script>
  <script src="/assets/modules/popper.js"></script>
  <script src="/assets/modules/tooltip.js"></script>
  <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/assets/modules/moment.min.js"></script>
  <script src="/assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="/assets/modules/datatables/datatables.min.js"></script>
  <script src="/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
  <script src="/assets/modules/jquery-ui/jquery-ui.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="/assets/js/page/modules-datatables.js"></script>

  {{ $dataTable->scripts() }}

  <script>
    $('#role-table').on('click','.action', function(){
      let data = $(this).data()
      let id = data.id
      let jenis = data.jenis
    })
  </script>
@endpush