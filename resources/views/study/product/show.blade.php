<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Category_id</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Image</th>
    <th>Status</th>
  </tr>
        <tr>
            <td>{{ $categories->name }}</td>
            <td>{{ $products->name }}</td>
            <td>{{ $products->description }}</td>
            <td>{{ $products->price }}</td>
            <td>{{ $products->quantity }}</td>
            <td>
                <img src="{{ asset($products->image) }}" alt="User Image" width="90px" height="90px">
            </td>
            <td>{{ $products->status }}</td>
        </tr>
</table>

</body>
</html>
