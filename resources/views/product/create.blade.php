<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">Create product</h1>
            </div>
            <div class="col-12">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                        @error('name') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">
                            {{old('description')}}</textarea>
                        @error('description') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
                        @error('price') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Image</label>
                        <input type="text" class="form-control" id="img" name="img">
                        @error('img') <p class="text-danger">{{$message}}</p> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>