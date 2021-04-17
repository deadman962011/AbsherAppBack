@extends('layout.master')

@section('Title')
    <title>Sub Dashboard</title>
@endsection

@section('Content')

  @include('includes.error')

  <div class="container">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addEmpModal">Add Employee Modal</button>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addEmpModal">Add product Modal</button>
    @include('Sub.dashboardInc')
  </div>

@endsection