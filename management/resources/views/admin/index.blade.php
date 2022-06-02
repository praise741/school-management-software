@extends('admin.layout.admin');
@section('content')
<div class="col-sm-12">
    <h2>Welcome <strong>Oluwamuyiwa Praise Oluwakanyinsayomi</strong> to <img src="img/tourafrica.png" height="150"><strong>SUPER ADMIN DASHBOARD</strong> </h2>



<a href="supersales.php?id=cash&amp;invoice=RT-10100925056872"> <div class="col-lg-3">
<div class="widget style1 navy-bg">
<div class="row">
   <div class="col-xs-4">
        <i class="fa fa-shopping-cart fa-5x"></i>
    </div>
    <div class="col-xs-8 text-left">
        <span> Add Retail Sales</span>
        <h2 class="font-bold">Retail</h2>
    </div>
</div>
</div>
</div></a>

<a href="superbulksales.php?id=cash&amp;invoice=WS-10100925054397"> <div class="col-lg-3">
<div class="widget style1 red-bg">
<div class="row">
   <div class="col-xs-4">
        <i class="fa fa-desktop fa-5x"></i>
    </div>
    <div class="col-xs-8 text-left">
        <span> Add Wholesales</span>
        <h2 class="font-bold" style="font-size: 24px">Wholesales</h2>
    </div>
</div>
</div>
</div></a>

<a data-toggle="modal" data-target="#addproduct"> <div class="col-lg-3">
<div class="widget style1 yellow-bg">
<div class="row">
   <div class="col-xs-4">
        <i class="fa fa-database fa-5x"></i>
    </div>
    <div class="col-xs-8 text-left">
        <span> Add Product</span>
        <h2 class="font-bold">Inventory</h2>
    </div>
</div>
</div>
</div></a>

<a data-toggle="modal" data-target="#addopex"> <div class="col-lg-3">
<div class="widget style1 lazur-bg">
<div class="row">
   <div class="col-xs-4">
        <i class="fa fa-calculator fa-5x"></i>
    </div>
    <div class="col-xs-8 text-left">
        <span> Add Operating Expensis</span>
        <h2 class="font-bold">Opex</h2>
    </div>
</div>
</div>
</div></a>



<div class="wrapper wrapper-content">
<div class="row">



<div class="col-lg-3">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <span class="label label-primary pull-right">Daily</span>
            <h5>Cash Sales</h5>
        </div>
        <div class="ibox-content">
                                        <h1 class="no-margins"><strong>₦0.00</strong></h1>

            <small>Total income Today</small>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <span class="label label-primary pull-right">Daily</span>
            <h5>POS Sales</h5>
        </div>
        <div class="ibox-content">
                                        <h1 class="no-margins"><strong>₦0.00</strong></h1>

            <small>Total income Today</small>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <span class="label label-primary pull-right">Daily</span>
            <h5>Transfer Sales</h5>
        </div>
        <div class="ibox-content">
                                        <h1 class="no-margins"><strong>₦0.00</strong></h1>

            <small>Total income Today</small>
        </div>
    </div>
</div>

<div class="col-lg-3">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <span class="label label-primary pull-right">Daily</span>
            <h5>Credit Sales</h5>
        </div>
        <div class="ibox-content">
                                        <h1 class="no-margins"><strong>₦0.00</strong></h1>

            <small>Total income Today</small>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <span class="label label-primary pull-right">Daily</span>
            <h5>TOTAL Sales</h5>
        </div>
        <div class="ibox-content">
                                        <h1 class="no-margins"><strong>₦0.00</strong></h1>

            <small>Total income Today</small>
        </div>
    </div>
</div>



 <div class="col-lg-6">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <span class="label label-primary pull-right">Daily</span>
            <h5>TOTAL Operating Expensis</h5>
        </div>
        <div class="ibox-content">
                                        <h1 class="no-margins"><strong>₦0.00</strong></h1>

            <small>Total Expensis Today</small>
        </div>
    </div>
</div>

<div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><b>Active Sales Rep Order  (SR)</b></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover no-margins">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Date</th>
                            <th>Cashier</th>
                            <th>Invoice</th>
                            <th>Sales Rep Name</th>
                            <th>QTY</th>
                            <th>Amount</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
             </div>


<div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><b>Current Active Retail Sales (RT)</b></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover no-margins">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Date</th>
                            <th>Cashier</th>
                            <th>Invoice</th>
                            <th>Customer Name</th>
                            <th>QTY</th>
                            <th>Amount</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
             </div>


             <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><b>Current Active Wholesales (WS)</b></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover no-margins">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Date</th>
                            <th>Cashier</th>
                            <th>Invoice</th>
                            <th>Customer Name</th>
                            <th>QTY</th>
                            <th>Amount</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
             </div>








             </div>
             </div>
             </div>

@endsection
