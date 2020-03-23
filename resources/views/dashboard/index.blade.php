@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
          <div class="card">
              <div class="card-header">Features</div>

              <div class="card-body">
                <ul class="list-unstyled">
                  <li> <a href="{{ route('dashboard.features.requestbuilder') }}">Request Builder </a></li>
                  <li> <a href="{{ route('dashboard.features.storedrequests') }}">Stored Requests </a></li>
                  <li>Schedule Builder</li>
                </ul>
              </div>
          </div>
      </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in Dashboard!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
