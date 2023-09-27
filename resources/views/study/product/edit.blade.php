<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('product.update',$products->id)}}" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="description">Category_id:</label>
            <select class="form-control" id="description" name="category_id">
                @foreach($categories as $key => $category)
                  <option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                  </option>
                @endforeach
              </select>
          </div>
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{$products->name}}"><br>
  @error('name')
         <div style="color: red">{{ $message }}</div>
      @enderror
  <label for="email ">Description:</label><br>
  <input type="text" id="email" name="description" value="{{$products->description}}"><br>
  @error('description')
         <div style="color: red">{{ $message }}</div>
      @enderror
  <label for="name">Price:</label><br>
  <input type="text" id="name" name="price" value="{{$products->price}}"><br>
  @error('price')
         <div style="color: red">{{ $message }}</div>
      @enderror
  <label for="email ">Quantity:</label><br>
  <input type="text" id="email" name="quantity" value="{{$products->quantity}}"><br>
  @error('quantity')
         <div style="color: red">{{ $message }}</div>
      @enderror
  <label for="image">Image:</label>
        <br>
        <input type="file" class="form-control-file" id="image" name="image">
        <br>
        <img src="{{ asset($products->image) ?? asset('public/images/' . old('image', $products->image)) }}" width="90px" height="90px" id="blah1" alt="">
        <br><br>
        <div class="form-group">
            <label for="description">Status:</label>
            <select class="form-control" id="description" name="status">
                  <option value="Còn hàng" {{$products->status == 'Còn hàng' ? 'selected' : ''}}>Còn hàng</option>
                  <option value="Hết hàng" {{$products->status == 'Hết hàng' ? 'selected' : ''}}>Hết hàng</option>
              </select>
          </div>
  <input type="submit" value="Submit">
</form>

</body>
</html>
