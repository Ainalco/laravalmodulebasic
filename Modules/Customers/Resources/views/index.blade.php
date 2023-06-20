@extends('adminlayout')

@section('content')
<div class="form-group text-right">
 <button type="button" class="btn btn-primary btn-md" data-target="#client-info" data-toggle="modal"  ><i class="fa fa-plus-circle" aria-hidden="true"></i>
Add Customer</button> 

</div>
<form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off">
            <div class="modal fade modal-warning" id="client-info" role="dialog">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h3 class="modal-title">Add Customer</h3>
                        </div>
                        
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Customer Name <i class="text-danger">*</i></label>
                                <div class="col-sm-6">
                                    <input class="form-control simple-control" name ="customer_name" id="name" type="text" placeholder="Customer Name"  required="">
                                </div>
                            </div>
       
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Customer Email"  required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-sm-3 col-form-label">Mobile</label>
                                <div class="col-sm-6">
                                    <input class="form-control" name ="mobile" id="mobile" type="number" placeholder="Customer Mobile"  required="" min="0">
                                </div>
                            </div>
       						<div class="form-group row">
                                <label for="address " class="col-sm-3 col-form-label">Password </label>
                                <div class="col-sm-6">
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address " class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="address" id="address" rows="3" placeholder="Customer Address"></textarea>
                                </div>
                            </div>
                            
                            
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
                            <button type="button" class="btn btn-success" onclick="addcustomer()">Submit </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </form>
<div id="edit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong>Update Customer</strong>
            </div>
            <div class="modal-body editinfo">
            
    		</div>
     
            </div>
            <div class="modal-footer">

            </div>

        </div>

    </div>
<div id="add1" class="modal fade" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content customer-list">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <strong>Bulk Upload</strong>
            </div>
            <div class="modal-body">
           <div class="container">    
             <br>
             
             <?php //if (isset($error)): ?>
                <div class="alert alert-error"><?php //echo $error; ?></div>
            <?php //endif; ?>
            <?php //if ($this->session->flashdata('success') == TRUE): ?>
                <div class="form-control alert alert-success"><?php //echo $this->session->flashdata('success'); ?></div>
            <?php //endif; ?>
            <h3>You can export test.csv file Example-</h3>
            <h4>memberid,membername,mobile,status</h4>
            <h4>1,jhon doe,01717426371,Active</h4>
            <h2>Import Customer Upload Csv</h2>               
            <form action="#" enctype="multipart/form-data" method="post" accept-charset="utf-8" autocomplete="off">
                    <input type="file" name="userfile" id="userfile" ><br><br>
                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
            </form>
           
        
            
        </div>     

    </div>

</div>
</div>
</div>

<div class="row">
    <!--  table area -->
    <div class="col-sm-12">

        <div class="panel panel-default thumbnail"> 

            <div class="panel-body">
                <table width="100%" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>SI.</th>
                            <th>Customer Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //if (!empty($customerlist)) { ?>
                            <?php //$sl = 1; ?>
                            <?php //foreach ($customerlist as $customer) { ?>
                                <tr class="<?php //echo ($sl & 1)?"odd gradeX":"even gradeC" ?>">
                                    <td><?php //echo $sl; ?></td>
                                    <td><?php //echo $customer->customer_name; ?></td>
                                    <td><?php //echo $customer->customer_email; ?></td>
                                    <td><?php //echo $customer->customer_phone; ?></td>
                                     <td><?php //echo $customer->customer_address; ?></td>
                                     <td class="center">
                                    <?php //if($this->permission->method('setting','update')->access()): ?>
                                    <input name="url" type="hidden" id="url_<?php //echo $customer->customer_id; ?>" value="<?php //echo base_url("setting/customerlist/updateintfrm") ?>" />
                                        <a onclick="editinfo('<?php //echo $customer->customer_id; ?>')" class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a> 
                                         <?php //endif;?> 
                                    </td>
                                </tr>
                                <?php //$sl++; ?>
                            <?php //} ?> 
                        <?php //} ?> 
                    </tbody>
                </table>  <!-- /.table-responsive -->
                <div class="text-right"><?php ?></div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ Module::asset('customers:js/customer.js') }}" type="text/javascript"></script>
@endpush
