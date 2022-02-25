@extends('template.index')

@section('content')

<div class="wrapper">
    <!--- card for account payable--->
    <div class="d-sm-flex align-items-start justify-content-between mb-2">
        <h1 class="h3 mb-0 text-gray-800">Payments</h1>

        <div class="col-xl-3 col-md-6 mb-4 border-1">
            <div class="card border-left-primary shadow h-100 pt-2">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                    Total Payment 
                    </div>
                </div>
                <div class="card-body">
                    <div class="row no-gutters d-flex align-items-center justify-content-around">
                        <div class="h6 mb-0">
                        <span class="font-weight-bold text-gray-800">Birr 20,000</span><br>
                        <small>Active</small>
                        </div>
                        <div class="h6 mb-0">
                        <span class="font-weight-bold text-danger">$2,800</span><br>
                        <small>Over Due</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
            {{-- Tab Navigation --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="bill_payment-tab" data-toggle="tab" href=".bill_payment" role="tab" aria-controls="bill-payment" aria-selected="true">Bill Payment</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="other_payment-tab" data-toggle="tab" href=".other_payment" role="tab" aria-controls="other-payment" aria-selected="false">Other Payment</a>
            </li>
        </ul>
            {{-- Tab Contents --}}
        <div class="card" class="content-card">
            <div class="card-body tab-content">
                <!--Bill Payment content--->
                <div class="table-responsive tab-pane fade show active bill_payment">
                    <table class="table table-bordered" id="dataTables" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Vendor Name</th>
                                <th>Date</th>
                                <th>Due Date</th>
                                <th>Bill No.</th>
                                <th>Bill Type</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Vendor Name</th>
                                <th>Date</th>
                                <th>Due Date</th>
                                <th>Bill No.</th>
                                <th>Bill Type</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr onclick="window.location='/individualBill'">
                                <td>Anna Clean</td>
                                <td>December 20, 2021</td>
                                <td>February 14, 2022</td>
                                <td>000293</td>
                                <td>Credit Invoice</td>
                                <td>Paid</td>
                            </tr>
                            <tr>
                                <td>Deborah Aira</td>
                                <td>December 22, 2021</td>
                                <td>February 10, 2022</td>
                                <td>000293</td>
                                <td>Credit Invoice</td>
                                <td>Partially Paid</td>
                            </tr>
                            <tr>
                                <td>Naelia Devorah</td>
                                <td>January 11, 2021</td>
                                <td>February 15, 2022</td>
                                <td>000255</td>
                                <td>Credit Invoice</td>
                                <td>Paid</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!--Other Payment content--->
                <div class="table-responsive tab-pane fade other_payment">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTables2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Vendor Name</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                    <th>Bill No.</th>
                                    <th>Bill Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr onclick="window.location='/individualBill'">
                                    <td>Anna Halcon</td>
                                    <td>December 20, 2021</td>
                                    <td>February 14, 2022</td>
                                    <td>000293</td>
                                    <td>Credit Invoice</td>
                                    <td>Paid</td>
                                </tr>
                                <tr>
                                    <td>Alvin Dexter</td>
                                    <td>December 22, 2021</td>
                                    <td>February 10, 2022</td>
                                    <td>000293</td>
                                    <td>Credit Invoice</td>
                                    <td>Partially Paid</td>
                                </tr>
                                <tr>
                                    <td>Ate Che-Che</td>
                                    <td>January 11, 2021</td>
                                    <td>February 15, 2022</td>
                                    <td>000255</td>
                                    <td>Credit Invoice</td>
                                    <td>Paid</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#dataTables').DataTable();
        $('#dataTables2').DataTable();
        $('.dataTables_filter').addClass('pull-right');
    });
</script>
@endsection