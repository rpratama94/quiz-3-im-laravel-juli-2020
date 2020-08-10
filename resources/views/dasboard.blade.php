@extends('layouts.master')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">ER Diagram</h6>
    </div>
    <div class="card-body">
      <div class="text-center">
        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="{{ asset('images/erd-manajemen-proyek.png') }}" alt="">
      </div>
      <p>ERD Manajemen Proyek </p>
    </div>
  </div>
@endsection
