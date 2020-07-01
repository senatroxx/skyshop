@extends('admin.layouts.app')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Advanced Table</h4>
        <div class="card-header-form">
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
    </div>
  </div>
</div>
@endsection