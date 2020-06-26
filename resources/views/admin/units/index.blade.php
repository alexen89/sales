@extends('admin.layout')
@section('title','Unidades')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Catalogo de unidades</h3>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($units as $unit)
                <tr>
                    <td>{{$unit->id}}</td>
                    <td>{{$unit->name}}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

