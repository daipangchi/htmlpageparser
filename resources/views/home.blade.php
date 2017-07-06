@extends('layouts.default')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>

    <div class="panel-body">

        {{ Form::open(array('url' => route('target.download'), 'class' => 'form-horizontal', 'method' => 'get')) }}
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Base Url:</label>
                <div class="col-sm-10">
                    <input type="text" name="base-url" class="form-control" id="base-url" placeholder="Enter Base Url" value="{{ request('base-url') }}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Download</button>
                </div>
            </div>

            @if(Request::has('base-url'))
                <h4>Result</h4>
                <div class="search-result">
                    @if(isset($error))
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @elseif(isset($title))
                        <div class="alert alert-success">
                            Title: {{ $title }}, Pages: {{ $totalPages }}
                        </div>
                    @endif
                </div>
            @endif
        {{ Form::close() }}
    </div>
</div>

@endsection
