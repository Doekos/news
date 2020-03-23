@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Stored Requests</div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Send On</th>
                      </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach ($stored_request as $sr)
                        <tr>
                          <td> {{ $sr->name }} </td>
                          <td> {{ $sr->created_at }} </td>
                          <td> {{ $sr->scheduled_time }} </td>
                        </tr>
                      @endforeach --}}
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
