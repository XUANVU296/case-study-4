<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('category.update',$categories->id)}}" method ="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{$categories->name}}"><br>
  <label for="email ">Description:</label><br>
  <input type="text" id="email" name="description" value="{{$categories->description}}"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
