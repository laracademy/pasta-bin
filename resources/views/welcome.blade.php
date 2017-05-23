@extends('layout.app')

@section('content')

<div class="row">

    <!-- code -->
    <div class="col-sm-8">
        <textarea name="code" id="code" class="form-control" rows="20"></textarea>
    </div>
    <!-- /code -->

    <!-- options -->
    <div class="col-sm-4">

        <div class="form-group">
            <input type="submit" class="btn btn-block btn-success btn-lg" value="Save Snippet" />
        </div>

        <div class="form-group">
            <label for="">Share Link</label>
            <div class="input-group">
                <input type="text" class="form-control" id="short-url" value="http://zonda-paste.dev/a8s726" readonly />
                <span class="input-group-addon">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Copy link" class="clipboard" data-clipboard-target="#short-url"><i class="fa fa-fw fa-clipboard"></i></a>
                </span>
            </div>
        </div>

    </div>
    <!-- /options -->
</div>

@endsection