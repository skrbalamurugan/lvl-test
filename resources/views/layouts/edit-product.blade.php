        <h3>Edit Product</h3>
        <form method="post" action="{{route('update-product', $data->id)}}">
            @csrf
            <div class="form-group">
                <label>Peoduct Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$data->name}}">
                @error('name')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Peoduct Price</label>
                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{$data->price}}">
                @error('price')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Peoduct Description</label>
                <textarea name="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{$data->description}}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>
                @enderror
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary">UPDATE</button>
            </div>
        </form>