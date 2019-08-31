@extends('master')
@section('content')
<div class="row justify-content-center">
    <div class="col-sm-6">
        <form method="post" action="{{route('save-product')}}">
            @csrf
            <div class="form-group">
                <label>Peoduct Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Peoduct Price</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}">
                @error('price')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Peoduct Description</label>
                <textarea name="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary">CREATE</button>
            </div>
        </form>
    </div>
</div>
@endsection