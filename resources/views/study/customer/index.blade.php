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
  @if (session('status'))
                  <div class="alert alert-success" role="alert">
                      {{ session('status') }}
                  </div>
              @endif
  <table class="table table-success table-striped">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <a href="{{ route('customer.create') }}" class="btn btn-success">Thêm</a>
        @foreach($customers as $index => $customer)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td>{{ $customer->address }}</td>
          <td>
              <div class="button-group">
                  <a href="{{ route('customer.edit', ['customer' => $customer->id]) }}">
                      <button class="btn btn-primary">
                          <i class="fas fa-edit"></i> Sửa
                      </button>
                  </a>
                  <a href="{{ route('customer.show', ['customer' => $customer->id]) }}">
                      <button class="btn btn-secondary">
                          <i class="fas fa-eye"></i> Xem
                      </button>
                  </a>
                  <form class="deleteForm" action="{{ route('customer.destroy', ['customer' => $customer->id]) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">
                          <i class="fas fa-trash"></i> Xóa
                      </button>
                  </form>
              </div>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>