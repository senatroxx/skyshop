@extends('admin.layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4><a href="" class="btn btn-primary">Add Product</a></h4>
        <div class="card-header-form float-right">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <div class="input-group-btn">
                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped">
            <tr>
              <th>Product Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>Create a mobile app</td>
              <td>Web, App, Mobile</td>
              <td>Rp 5.000.000</td>
              <td><div class="badge badge-success">100</div></td>
              <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Redesign homepage</td>
              <td>Web, HTML, CSS</td>
              <td>Rp 3.000.000</td>
              <td><div class="badge badge-warning">50</div></td>
              <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Backup database</td>
              <td>Database, MySQL, PostgreSQL</td>
              <td>Rp 4.000.000</td>
              <td><div class="badge badge-success">100</div></td>
              <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            <tr>
              <td>Input data</td>
              <td>Web, PHP</td>
              <td>Rp 1.000.000</td>
              <td><div class="badge badge-danger">20</div></td>
              <td>
                <a href="#" class="btn btn-primary">Detail</a>
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
          <ul class="pagination mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection