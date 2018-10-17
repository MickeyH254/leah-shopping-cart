@extends('admin.index')

@section('styles')
    <link href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset--5">
                <div class="panel panel-default">
                    <div class="panel-heading">The Menu</div>
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary" >Create Menu Item</a>
                    <div class="panel-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->image }}</td>
                                    <td>Ksh {{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td> <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" class="btn btn-warning" >Edit Menu Item</a></td>
                                    <td><a href="{{ route('admin.products.delete', ['id' => $product->id]) }}" class="btn btn-danger" >Delete Menu Item</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascripts')
<script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
      $('#datatable').DataTable( {
    buttons: [
        {
            extend: 'pdf',
            text: 'Save current page',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }
    ]
} );
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" ></script>
 
@endsection