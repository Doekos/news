@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Request Builder</div>
                <div class="card-body">
                  <form action="{{ url('/dashboard/requestbuilder') }}" method="post">
                    {{ csrf_field() }}
                      @method('POST')
                      <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Country</label>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options..</label>
                      </div>
                      <select class="custom-select" id="country" name="country">
                        <option value="nl" name="nl">Netherland</option>
                        <option value="en" name="en">United Kingdom</option>
                        <option value="us" name="us">United States</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect02">Options..</label>
                          </div>
                          <select class="custom-select" id="category" name="category">
                            <option value="business" name="business">Business</option>
                            <option value="entertainment" name="entertainment">Entertainment</option>
                            <option value="general" name="general">General</option>
                            <option value="health" name="health">Health</option>
                            <option value="science" name="science">Science</option>
                            <option value="sports" name="sports">Sports</option>
                            <option value="technology" name="technology">Technology</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Source</label>
                          <input type="text" class="form-control" id="source" name="source" placeholder="Select news source">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Keyword</label>
                          <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter a keyword to search in the article">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Number of Results</label>
                          <input type="text" class="form-control" id="results" name="results" placeholder="Amount of results returned">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="submit" class="btn btn-primary" style="float:right;">Save</button>
                      </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Preview</div>
                <div class="card-body">

                </div>
            </div>
        </div>
@endsection
