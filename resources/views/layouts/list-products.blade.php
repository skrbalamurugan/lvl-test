@extends('master')
@section('content')
<div class="row">
    <div class="col-sm-4">
        <h3>Products</h3>
        <table class="table table-bordered">
            @foreach($data as $d)
            <tr>
                <td>{{$d->name}}</td>
                <td>
                    <button class="btn btn-success btn-sm" onClick="viewProduct({{$d->id}})">VIEW</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn btn-primary btn-sm" onClick="editProduct({{$d->id}})">EDIT</button>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="col-sm-6" id="data">

    </div>
</div>
@endsection