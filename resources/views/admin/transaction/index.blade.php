@extends('admin.index')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css"></link>

  
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js
    "></script>
@endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset--5">
                <div class="panel panel-default">
                    <div class="panel-heading">Customers</div>

                    <div class="panel-body">
                        <table id="example" class="display nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Token</th>
                                    <th>Stripe Token Type</th>
                                    <th>Amount Paid</th>
                                    <th>Time Purchased</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>{{ $transaction->email }}</td>
                                    <td>{{ $transaction->token }}</td>
                                    <td>{{ $transaction->stripe_token_type }}</td>
                                    <td>Ksh {{ $transaction->amount_paid }}</td>
                                    <td>{{ $transaction->created_at }}</td>

                                </tr>
                                @endforeach
                                
                            </tbody>
                            <!-- <tfoot>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Token</th>
                                    <th>Stripe Token Type</th>
                                    <th>Amount Paid</th>
                                    <th>Time Purchased</th>
                            </tfoot> -->
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

   
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
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
    } );
} );

</script>    
 
@endsection