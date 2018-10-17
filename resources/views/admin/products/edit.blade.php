@extends('admin.index')

@section('styles')
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset--5">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu</div>

                    <div class="panel-body">
                    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update menu Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action = "{{ route('admin.products.update', ['id' => $products->id]) }}" method = "post">
              <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputName1">Menu Item Name</label>
                  <input name="name" value='<?php echo$products->name; ?>' type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Menu item name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPrice1">Price</label>
                  <input name="price" type="number" value='<?php echo$products->price; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter Price">
                </div>
                <div class="form-group">
                  <label for="exampleInputDescription1">Description</label>
                  <input name="description" type="textbox" value='<?php echo$products->description; ?>' class="form-control" id="exampleInputDescription1" placeholder="Enter Description">
                </div>
                
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')

@endsection