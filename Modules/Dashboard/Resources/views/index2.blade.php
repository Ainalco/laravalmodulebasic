@extends('adminlayout')
@push('css')
<link href="{{asset('admincss/custom_new.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ Module::asset('dashboard:css/home_dashboard.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{asset('daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
<style>
.ui-datepicker{z-index: 999 !important;}
</style>
@endpush
@section('content')

<div class="content main-content">


        <div class="d-flex justify-content-between flex-wrap" style="margin-bottom: 20px;">

          <h4>
            Welcome Mr.Tohidul Islam, 12:45 AM, Sep-02-2022
          </h4>

          <div>
            <button type="button" class="btn btn-danger">POS</button>
            <button type="button" class="btn btn-success">KITCHEN (KDS)</button>
            <button type="button" class="btn btn-primary">WAITING DISPLAY</button>
            <button type="button" class="btn btn-warning">ORDER LIST</button>
            <button type="button" class="btn btn-violet">REPORT</button>
          </div>

        </div>


        <div class="card-content">
          <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 d-flex">
              <div class="info-box d-flex position-relative  flex-fill w-100 overflow-hidden" style="    background-color: #241818;
              color: #fff;">
                <span class="align-self-center d-flex info-box-icon justify-content-center text-center">
                  <!-- <img src="assets/dist/img/008-factory-2.png" alt="" height="60" width="60"> -->
                  <i class="fa fa-shopping-basket"></i>
                </span>
                <div class="info-box-content d-flex flex-column justify-content-center">
                  <span class="info-box-text fw-bold fs-17px">Today Sales Amount</span>
                  <span class="info-box-number d-block counter fw-bold"><span>$</span>41,410</span>
                  <div class="progress-description fs-14"><i class="fa fa-caret-up"></i> Yesterday Sale Amount :
                    $110,00.00</div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 d-flex">
              <div class="info-box d-flex position-relative  flex-fill w-100 bg-success overflow-hidden"
                style="background-color: #3D4B7C; color: #fff;">
                <span class="info-box-icon d-flex align-self-center text-center justify-content-center">
                  <!-- <img src="assets/dist/img/001-economic-disparities.png" alt="" height="60" width="60"> -->
                  <i class="fa fa-first-order"></i>
                </span>
                <div class="info-box-content d-flex flex-column justify-content-center">
                  <span class="info-box-text fw-bold fs-17px">Todays Orders</span>
                  <span class="info-box-number d-block  counter fw-bold">65,56</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 d-flex">
              <div class="info-box d-flex position-relative  flex-fill w-100 bg-warning overflow-hidden"
                style="    background-color: #2997E5;  color: #fff;">
                <span class="info-box-icon d-flex align-self-center text-center justify-content-center">
                  <i class="fa fa-first-order"></i>
                </span>
                <div class="info-box-content d-flex flex-column justify-content-center">
                  <span class="info-box-text fw-bold fs-17px">Total Orders</span>
                  <span class="info-box-number d-block counter fw-bold">235</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 d-flex">
              <div class="info-box d-flex position-relative  flex-fill w-100 bg-danger overflow-hidden"
                style="background-color: #FFA200;">
                <span class="info-box-icon d-flex align-self-center text-center justify-content-center">
                  <i class="fa fa-users"></i>
                </span>
                <div class="info-box-content d-flex flex-column justify-content-center">
                  <span class="info-box-text fw-bold fs-17px">Total Customer</span>
                  <span class="info-box-number d-block counter fw-bold">9,455</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4 d-flex">
              <div class="info-box d-flex position-relative  flex-fill w-100 bg-danger overflow-hidden"
                style="background-color: #730D4A;  color: #fff;">
                <span class="info-box-icon d-flex align-self-center text-center justify-content-center">
                  <i class="fa fa-shopping-basket"></i>
                </span>
                <div class="info-box-content d-flex flex-column justify-content-center">
                  <span class="info-box-text fw-bold fs-17px">Total Sales Amount</span>
                  <span class="info-box-number d-block  counter fw-bold"><span>$</span>46,78,965</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
        </div>





        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
            <div class="panel panel-bd">
              <div class="panel-heading d-flex justify-content-between flex-wrap">
                <div class="panel-title">
                  <h4>Sales Graph</h4>
                </div>
                <input type="text" class="form-control daterange" name="daterange" value="01/01/2018 - 01/15/2018"
                  style="width: auto;" />
              </div>
              <div class="panel-body">
                <div id="gradientLineArea"></div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="panel panel-bd">
              <div class="panel-heading d-flex justify-content-between flex-wrap">
                <div class="panel-title">
                  <h4>Order Type Based Overview</h4>
                </div>
                <input type="text" class="form-control daterange" name="daterange" value="01/01/2018 - 01/15/2018"
                  style="width: auto;" />
              </div>
              <div class="panel-body">
                <div id="monochromeChart"></div>
              </div>
            </div>
          </div>
          <div class="col col-xs-6 col-md-3">
            <div class="panel panel-bd">
              <div class="panel-heading bg-red text-white">
                <div class="panel-title">
                  <h4>Today Overview</h4>
                </div>
              </div>
              <div class="panel-body">
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Total Order</span>
                  <span class="text-danger fw-bold">100 <i class="fa fa-arrow-down"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Order Value</span>
                  <span class="text-danger fw-bold">1,50,000 <i class="fa fa-arrow-down"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Purchase</span>
                  <span class="text-success fw-bold">1,25,000 <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium">
                  <span>Others Expenses</span>
                  <span class="text-danger fw-bold">0.00 <i class="fa fa-arrow-down"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-xs-6 col-md-3">
            <div class="panel panel-bd">
              <div class="bg-violet panel-heading text-white">
                <div class="panel-title">
                  <h4>Weekly Overview</h4>
                </div>
              </div>
              <div class="panel-body">
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Total Order</span>
                  <span class="text-success fw-bold">100 <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Order Value</span>
                  <span class="text-danger fw-bold">1,50,000 <i class="fa fa-arrow-down"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Purchase</span>
                  <span class="text-success fw-bold">1,25,000 <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium">
                  <span>Others Expenses</span>
                  <span class="text-success fw-bold">0.00 <i class="fa fa-arrow-up"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-xs-6 col-md-3">
            <div class="panel panel-bd">
              <div class="panel-heading bg-green text-white">
                <div class="panel-title">
                  <h4>Monthly Overview</h4>
                </div>
              </div>
              <div class="panel-body">
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Total Order</span>
                  <span class="text-success fw-bold">100 <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Order Value</span>
                  <span class="text-danger fw-bold">1,50,000 <i class="fa fa-arrow-down"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Purchase</span>
                  <span class="text-success fw-bold">1,25,000 <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium">
                  <span>Others Expenses</span>
                  <span class="text-danger fw-bold">0.00 <i class="fa fa-arrow-down"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-xs-6 col-md-3">
            <div class="panel panel-bd">
              <div class="panel-heading bg-yellow">
                <div class="panel-title">
                  <h4>Yearly Overview</h4>
                </div>
              </div>
              <div class="panel-body">
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Total Order</span>
                  <span class="text-danger fw-bold">100 <i class="fa fa-arrow-down"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Order Value</span>
                  <span class="text-success fw-bold">1,50,000 <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium mb-2">
                  <span>Purchase</span>
                  <span class="text-success fw-bold">1,25,000 <i class="fa fa-arrow-up"></i></span>
                </div>
                <div class="d-flex justify-content-between fw-medium">
                  <span>Others Expenses</span>
                  <span class="text-danger fw-bold">0.00 <i class="fa fa-arrow-down"></i></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="panel panel-bd">
              <div class="panel-heading d-flex justify-content-between flex-wrap">
                <div class="panel-title">
                  <h4>Income vs Expense Growth</h4>
                </div>
                <input type="text" class="form-control daterange" name="daterange" value="01/01/2018 - 01/15/2018"
                  style="width: auto;" />
              </div>
              <div class="panel-body">
                <div id="chartSpline"></div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="panel panel-bd">
              <div class="panel-heading d-flex justify-content-between flex-wrap">
                <div class="panel-title">
                  <h4>Purchase Graph</h4>
                </div>
                <input type="text" class="form-control daterange" name="daterange" value="01/01/2018 - 01/15/2018"
                  style="width: auto;" />
              </div>
              <div class="panel-body">
                <div id="barChart"></div>
              </div>
            </div>
          </div>
          <div class="col col-xs-12 col-sm-6 col-md-6">
            <div class="panel panel-bd" style="background-color: #37a0000f;
            color: #37a000;">
              <div class="panel-heading" style="    background-color: #37a000;
              color: #fff;">
                <div class="panel-title">
                  <h4>Top Selling Items</h4>
                </div>
              </div>
              <div class="panel-body" style="padding: 0;">
                <div class="table-responsive">
                  <table class="table table-striped" style="margin: 0;">
                    <thead>
                      <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th class="text-center">Today</th>
                        <th class="text-center">Weekly</th>
                        <th class="text-center">All Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-medium">Alfresco Burger</td>
                        <td>120.00</td>
                        <td>Regular</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Naga burger</td>
                        <td>160.00</td>
                        <td>In Progress</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Chicken Biryani</td>
                        <td>230.00</td>
                        <td>Progress</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Beef Tehari</td>
                        <td>180.00</td>
                        <td>Regular</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Beef Biryani</td>
                        <td>120.00</td>
                        <td>In Progress</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Himlayan Blue Water</td>
                        <td>390.00</td>
                        <td>Progress</td>
                        <td class="text-center">0</td>
                        <td class="text-center">10</td>
                        <td class="text-center">99</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Margarita Pizza</td>
                        <td>3190.00</td>
                        <td>Active</td>
                        <td class="text-center">19</td>
                        <td class="text-center">12</td>
                        <td class="text-center">55</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Beef Tehari</td>
                        <td>180.00</td>
                        <td>Regular</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-xs-12 col-sm-6 col-md-6">
            <div class="panel panel-bd panel-red" style="background-color: #e5343d0d;
            color: #E5343D;">
              <div class="panel-heading" style="background-color: #E5343D;
              color: #fff;">
                <div class="panel-title">
                  <h4>Slow Selling Items</h4>
                </div>
              </div>
              <div class="panel-body" style="padding: 0;">
                <div class="table-responsive">
                  <table class="table table-striped" style="margin: 0;">
                    <thead>
                      <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th class="text-center">Today</th>
                        <th class="text-center">Weekly</th>
                        <th class="text-center">All Time</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="fw-medium">Alfresco Burger</td>
                        <td>120.00</td>
                        <td>Regular</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Naga burger</td>
                        <td>160.00</td>
                        <td>In Progress</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Chicken Biryani</td>
                        <td>230.00</td>
                        <td>Progress</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Beef Tehari</td>
                        <td>180.00</td>
                        <td>Regular</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Beef Biryani</td>
                        <td>120.00</td>
                        <td>In Progress</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Himlayan Blue Water</td>
                        <td>390.00</td>
                        <td>Progress</td>
                        <td class="text-center">0</td>
                        <td class="text-center">10</td>
                        <td class="text-center">99</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Margarita Pizza</td>
                        <td>3190.00</td>
                        <td>Active</td>
                        <td class="text-center">19</td>
                        <td class="text-center">12</td>
                        <td class="text-center">55</td>
                      </tr>
                      <tr>
                        <td class="fw-medium">Beef Tehari</td>
                        <td>180.00</td>
                        <td>Regular</td>
                        <td class="text-center">10</td>
                        <td class="text-center">50</td>
                        <td class="text-center">150</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col col-xs-12 col-sm-6 col-md-6">
            <div class="panel panel-bd panel-red">
              <div class="panel-heading">
                <div class="panel-title">
                  <h4>Hourly Order</h4>
                </div>
              </div>
              <div class="panel-body">
                <!-- <div id="apexMixedChart"></div> -->
                <div id="lineChart"></div>
              </div>
            </div>
          </div>
          <div class="col col-xs-12 col-sm-6 col-md-6">
            <div class="panel panel-bd panel-red">
              <div class="panel-heading">
                <div class="panel-title">
                  <h4>Waiter Sales</h4>
                </div>
              </div>
              <div class="panel-body">
                <div id="chartHorizontalBar"></div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /.content -->
      <input name="alldays" id="alldays" type="hidden" value="1-Dec,2-Dec,3-Dec,4-Dec,5-Dec,6-Dec,7-Dec,8-Dec,9-Dec,10-Dec,11-Dec,12-Dec,13-Dec,14-Dec,15-Dec,16-Dec,17-Dec,18-Dec,19-Dec,20-Dec,21-Dec,22-Dec,23-Dec,24-Dec,25-Dec,26-Dec,27-Dec,28-Dec,29-Dec,30-Dec,31-Dec" autocomplete="off">
<input name="dailylysaleamount" id="dailylysaleamount" type="hidden" value="0.00, 0.00, 0.00, 0.00, 0.00, 1149.50, 541.50, 0.00, 0.00, 0.00, 5472.00, 2365.50, 0.00, 570.00, 3999.50, 0.00, 38.00, 3648.00, 2470.00, 1672.00, 190.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, " autocomplete="off">
<input name="monthname" id="monthname" type="hidden" value="January-22,February-22,March-22,April-22,May-22,June-22,July-22,August-22,September-22,October-22,November-22,December-22" autocomplete="off"><input name="dailypurchase" id="dailypurchase" type="hidden" value="0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 3680.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, " autocomplete="off">

<input name="weekname" id="weekname" type="hidden" value="" autocomplete="off">
<input name="weekylysaleamount" id="weekylysaleamount" type="hidden" value="" autocomplete="off">
<input name="customertypesale" id="customertypesale" type="hidden" value="302479.50387.00138.00" autocomplete="off">

<input name="piesaledata" id="piesaledata" type="hidden" value="21926,152,0,0,38" autocomplete="off">

<input name="monthlysaleamount" id="monthlysaleamount" type="hidden" value="0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 76.00, 22116.00, " autocomplete="off">
<input name="monthlysaleorder" id="monthlysaleorder" type="hidden" value="0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 437, " autocomplete="off">
<input name="hourlyordernum" id="hourlyordernum" type="hidden" value="5,6,0,4" autocomplete="off">
<input name="hourlyorderval" id="hourlyorderval" type="hidden" value="7975.00,11095.00,,390.00" autocomplete="off">
<input name="hourltimeslot" id="hourltimeslot" type="hidden" value="8:00,9:00,10:00,11:00" autocomplete="off">
<input name="waiter" id="waiter" type="hidden" value="Hm,Ainal,Manik ,Joe" autocomplete="off">
<input name="waiterordervalue" id="waiterordervalue" type="hidden" value="10450,6973,2974,1720" autocomplete="off">

<input name="incomes" id="incomes" type="hidden" value="0, 0, 0, 0, 0, 1210, 38, 0, 0, 0, 5296, 1730, 0, 30, 1189, 0, 2, 211, 130, 988, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, " autocomplete="off">
<input name="expenses" id="expenses" type="hidden" value="0, 0, 0, 0, 0, 61, 29, 0, 0, 0, 280, 125, 0, 30, 211, 0, 2, 192, 130, 88, 3690, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, " autocomplete="off">

@endsection
@push('js')
<script src="{{asset('chart/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{asset('daterangepicker/moment.min.js') }}"></script>
<script src="{{asset('daterangepicker/daterangepicker.js') }}"></script>

  <script src="{{asset('chart/Chart.bundle.js') }}"></script>
  <script src="{{asset('chart/chartjs-gauge.js') }}"></script>
  <script src="{{asset('chart/chartjs-plugin-datalabels.js') }}"></script>
<!-- Chart js -->
<script src="{{asset('chart/Chart.min.js') }}" type="text/javascript"></script>
<script src="{{ Module::asset('dashboard:js/chartdata.js') }}" type="text/javascript"></script>
@endpush