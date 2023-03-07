@extends('layouts.body')
@section('Title')
    etudient
@endsection

@section('UserName')
    Mohamed boukbir
@endsection

@section('content')
<div class="col col-lg-9" style="margin-top:50px;">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Module</th>
                <th>Note</th>
                <th>Mention</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Analyse</td>
                <td>12.65</td>
                <td class="btn-success text-center font-weight-bold">validee</td>
            </tr>
            <tr>
                <td>Algebre</td>
                <td>5.65</td>
                <td class="btn-danger text-center font-weight-bold">Non validee</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection