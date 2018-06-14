@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <ul>
                        @foreach($data as $d)
                            <li>{{$d->CardName}}</li>
                            <li><img src="{{$d->CardIllustration}}"></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
