@extends('layouts.app')

@section('content')

  <div class="page-header">
    <h3 class="page-title">
      <span class="page-title-icon bg-gradient-primary text-white mr-2">
        <i class="mdi mdi-home"></i>                 
      </span>
      Dashboard
    </h3>
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview
          <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav>
  </div>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Current Admins</h4>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>
                    Name
                  </th>
                  <th>
                    Job
                  </th>
                  <th>
                    Joined At
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <td>
                    {{ $user->name }}
                  </td>
                  <td>
                    {{ __('Admin') }}
                  </td>
                  <td>
                    {{ $user->created_at }}
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
