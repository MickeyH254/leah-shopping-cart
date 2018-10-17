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
              <h3 class="box-title">Add menu Item</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input name="name" type="text" class="form-control"placeholder="Enter Menu item name"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" name="image" />

                </div>
                <div class="form-group">
                  <label for="exampleInputPrice1">Price</label>
                  <input type="number" name="price" class="form-control"  placeholder="Enter Price"/>
                </div>
                <div class="form-group">
                  <label for="exampleInputDescription1">Description</label>
                  <input type="textbox" class="form-control" name="description" placeholder="Enter Description"/>
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

    <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js
    "></script>
    




    <script>
     $(document).ready(function() {
        $('#example').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });
    </script>
    
 
@endsection