@extends('app')
@section('content')
<h1>Reports</h1>
<table class="table" width="50%">
    <thead>
    <tr>

        <th>Category</th>
    </tr>
    </thead>
    <tbody>

    <tr class="success">

        <td><a href="{{ url('/xapi/reports/statistic') }}"> Course Launch Statistic</a></td>

    </tr>
    <tr class="success">

        <td><a href="{{ url('/xapi/reports/completion') }}"> Course Completion</a></td>
    </tr>
    <tr class="success">
        <td><a href="{{ url('/xapi/reports/analysis') }}">Question Analysis</a></td>
    </tr>
    <tr class="success">
        <td><a href="{{ url('/xapi/reports/moduleanalysis') }}">Module Analysis</a></td>
    </tr>
    </tbody>
</table>
@stop
@section('footer')
@stop