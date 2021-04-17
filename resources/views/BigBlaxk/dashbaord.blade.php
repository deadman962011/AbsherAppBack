@extends('layout.master')

@section('Title')
    <title>BigBlaxk Dashboard</title>
@endsection

@section('Content')

  @include('includes.error')

  <div class="container">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#subAddModal">Add Sub Modal</button> 
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#catAddModal">Add Category Modal</button> 
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#prodAddModal">Add Product Modal</button> 


    @include('BigBlaxk.dashboardInc')
  </div>

@endsection