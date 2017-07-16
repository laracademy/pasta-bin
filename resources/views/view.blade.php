@extends('layout.app')

@section('content')

    <div class="row">
        <!-- code -->
        <div class="col-sm-8">
            <h4>
                This paste will expire on {{ $paste->expires_at->format('F d, Y') }}
            </h4>
            <textarea name="code" id="code" class="form-control" rows="20" readonly>{{ $paste->content }}</textarea>
        </div>
        <!-- /code -->

        <!-- options -->
        <div class="col-sm-4">

            <div class="form-group">
                <label for="">Share Link</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="short-url" value="http://pasta-bin.dev/{{ $paste->slug }}" readonly />
                    <span class="input-group-addon">
                        <a href="#" data-toggle="tooltip" data-placement="left" title="Copy link" class="clipboard" data-clipboard-target="#short-url"><i class="fa fa-fw fa-clipboard"></i></a>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <a href="{{ route('new') }}" class="btn btn-block btn-info btn-lg">New Snippet</a>
            </div>

        </div>
        <!-- /options -->

    </div>
</form>

@endsection