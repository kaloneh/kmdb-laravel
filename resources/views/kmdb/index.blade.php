@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <?php $movies = \App\LocalMovie::all(); ?>
                        @if (isset($movies))
                            <ul class="list-group">
                                @foreach($movies as $m)
                                    <li class="list-group-item"><a
                                                href="{{url('kmdb',['localMovie'=>$m])}}">{{$m->primaryTitle}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            Movies variable hasn't been set!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
