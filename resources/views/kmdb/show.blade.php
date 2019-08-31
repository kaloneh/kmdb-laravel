@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        {{--Data: ${{$data}}--}}
                        @if(isset($detail))
                            <table class="table-info bg-info table-bordered table-dark">
                                <tr class="d-lg-table-row">
                                    <td class="list-group-item-info">{{$detail->primaryTitle}}</td>
                                </tr>
                                <tr class="d-sm-table-row">
                                    <td class="small">{{$detail->absolutePath}}</td>
                                </tr>
                                <tr class="d-xl-table-row">
                                    <td class="list-group-item-info">{{$detail->primaryTitle}}</td>
                                </tr>
                                <tr class="d-xl-table-row">
                                    <td>{{$detail->originalTitle}}</td>
                                </tr>
                                <tr class="d-xl-row">
                                    <td class="list-group-item-info">{{$detail->startYear}}-{{$detail->endYear}}</td>
                                </tr>
                                <tr class="d-xl-table-row">
                                    <td>{{$detail->mediainfo}}</td>
                                </tr>
                                <tr class="d-xl-table-row">
                                    <td class="list-group-item-info">{{$detail->tconst}}</td>
                                </tr>
                            </table>
                        @else
                            Data hasn't been set!
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
