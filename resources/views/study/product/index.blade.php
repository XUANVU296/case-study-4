<style>
    .table {
        width: 100%;
        border-collapse: collapse;
    }
  
    .table thead th {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
        padding: 10px;
        text-align: left;
    }
  
    .table tbody td {
        border-bottom: 1px solid #dee2e6;
        padding: 10px;
    }
  
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f1f1f1;
    }
  
    .table-success thead th {
        background-color: #d4edda;
        color: #155724;
    }
    .btn-custom {
          padding: 6px 12px;
          font-size: 14px;
          border-radius: 4px;
          text-decoration: none;
          transition: background-color 0.3s ease;
      }
  
      .btn-custom.primary {
          background-color: #007bff;
          color: #fff;
      }
  
      .btn-custom.secondary {
          background-color: #6c757d;
          color: #fff;
      }
  
      .btn-custom.danger {
          background-color: #dc3545;
          color: #fff;
      }
  
      .btn-custom i {
          margin-right: 5px;
      }
      .button-group {
                  display: flex;
                  flex-direction: row;
                  align-items: center;
              }
          
      .button-group .btn {
                  margin-right: 8px;
              }
  </style>
  
  <table class="table table-success table-striped">
    <thead>
        <tr>
            <th>STT</th>
            <th>Belongs to the category</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <a href="{{ route('product.create') }}" class="btn btn-success">Thêm</a>
        @foreach($products as $index => $product)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $product->category->name }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity}}</td>
            <td>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <img width="90px" height="90px" src="{{ asset($product->image) }}" alt="">
                </form>
            </td>
            <td>{{ $product->status }}</td>
          <td>
              <div class="button-group">
                  <a href="{{ route('product.edit', ['product' => $product->id]) }}">
                      <button type="submit" class="btn btn-primary">
                          <i class="fas fa-eye"></i> Sửa
                      </button>
                  </a>
                  <a href="{{ route('product.show', ['product' => $product->id]) }}">
                      <button type="submit" class="btn btn-secondary">
                          <i class="fas fa-eye"></i> Xem
                      </button>
                  </a>
                  <form class="deleteForm" action="{{ route('product.destroy', ['product' => $product->id]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                          <i class="fas fa-eye"></i> Xóa
                      </button>
                  </form>
              </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>