<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Category</h2>
  <form action="{{route('product.store')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="description">Description:</label>
        <select class="form-control" id="description" name="category_id">
          <option value="">Vui lòng chọn khách hàng</option>
          @foreach($categories as $key => $category) {
              <option value="{{ $category->id }}">{{$category->name}}</option>
            @endforeach;
          }
        </select>
      </div>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter name" name="name">
      @error('name')
         <div style="color: red">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
        <label for="pwd">Description:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter description" name="description">
        @error('description')
         <div style="color: red">{{ $message }}</div>
      @enderror
      </div>
    <div class="form-group">
        <label for="email">Price:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter price" name="price">
        @error('price')
         <div style="color: red">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="pwd">Quantity:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Enter quantity" name="quantity">
        @error('quantity')
         <div style="color: red">{{ $message }}</div>
      @enderror
      </div>
      <div class="form-group">
        <label for="email">Image:</label>
        <input type="file" name="image" id="">
    </div>
      <div class="form-group">
        <label for="pwd">Status:</label>
        <select class="form-control" name="status" id="">
          <option value="Còn hàng">Còn hàng</option>
          <option value="Hết hàng">Hết hàng</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
