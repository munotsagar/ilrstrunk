@extends('app')
@section('content')
    <h1>Module Analysis </h1>
    <div><a href="javascript:window.history.back();">Back to Reports</a> </div>
    <table class="table">
        <thead>
        <tr class="success">
            <th>What Is Information Security? : {{ $statementQ2Count }}</th>


        </tr>

        <tr class="success">
            <th>Threats Interactivity : {{ $statementQ1Count }}</th>

        </tr>
        </thead>

    </table>


@stop

@section('footer')

@stop