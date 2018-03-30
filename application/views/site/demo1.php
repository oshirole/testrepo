<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">CPU Traffic</span>
                    <span class="info-box-number">90<small>%</small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number">760</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

            <!-- quick email widget -->
            <div class="box box-info">
                <div class="box-header">
                    <i class="fa fa-shopping-cart"></i>

                    <h3 class="box-title">Cart</h3>
                    <!-- tools box -->
                    <!--                    <div class="pull-right box-tools">
                                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                    title="Remove">
                                                <i class="fa fa-times"></i></button>
                                        </div>-->
                    <!-- /. tools -->
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <!--                        <div class="form-group">
                                                    <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                                </div>-->
                        <div class="form-group">
                            <table id="cartList" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:5%;"></th>
                                        <th style="display: none;">Code</th>
                                        <th style="display: none;">HSN</th>
                                        <th>Product</th>
                                        <th style="width:5%;">Qty.</th>
                                        <th style="width:5%;">MRP</th>
                                        <th style="width:5%;">Dis.</th>
                                        <th style="width:5%;">Rate</th>
                                        <th style="display: none;">CGST %</th>
                                        <th style="display: none;">SGST %</th>
                                        <th style="display: none;">IGST %</th>
                                        <th style="width:5%;">GST</th>
                                        <th style="width:5%;">Amount</th>
                                        <th style="width:5%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="prodDetails btn btn-info fa fa-plus"></i></td>
                                        <td style="display: none;">code 1</td>
                                        <td style="display: none;">HSN 1</td>
                                        <td>Gecko Gecko Gecko </td>
                                        <td>100.000</td>
                                        <td>200555.00</td>
                                        <td>20</td>
                                        <td>200555.00</td>
                                        <td style="display: none;">CGST 1</td>
                                        <td style="display: none;">SGST 1</td>
                                        <td style="display: none;">IGST 1</td>
                                        <td>20</td>
                                        <td>Amount 1</td>
                                        <td><i class="prodRemove btn btn-danger fa fa-trash"></i></td>
                                    </tr>
                                    <tr>
                                        <td><i class="prodDetails btn btn-info fa fa-plus"></i></td>
                                        <td style="display: none;">code 2</td>
                                        <td style="display: none;">HSN 2</td>
                                        <td>Item 2</td>
                                        <td>200.000</td>
                                        <td>300555.00</td>
                                        <td>40</td>
                                        <td>100555.00</td>
                                        <td style="display: none;">CGST 2</td>
                                        <td style="display: none;">SGST 2</td>
                                        <td style="display: none;">IGST 2</td>
                                        <td>40</td>
                                        <td>Amount 2</td>
                                        <td><i class="prodRemove btn btn-danger fa fa-trash"></i></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th style="display: none;"></th>
                                        <th>Total:</th>
                                        <th>10000</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th style="display: none;">CGST %</th>
                                        <th style="display: none;">SGST %</th>
                                        <th style="display: none;">IGST %</th>
                                        <th></th>
                                        <th>1000000</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button type="button" class="pull-right btn btn-default" id="sendEmail">Save 
                        <i class="fa fa-save"></i></button>
                </div>
            </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

            <!-- quick email widget -->
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-list"></i>

                    <h3 class="box-title">Products</h3>
                    <!--                     tools box 
                                        <div class="pull-right box-tools">
                                            <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                                    title="Remove">
                                                <i class="fa fa-times"></i></button>
                                        </div>
                                         /. tools -->
                </div>
                <div class="box-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input id="txtProd" type="text" placeholder="Search Product" class="form-control autocomplete">
                            <input id="txtProdVal" type="hidden">
                        </div>
                        <!--                        <div>
                                                    <textarea class="textarea" placeholder="Message"
                                                              style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                                </div>-->
                    </form>
                </div>
                <div class="box-footer clearfix">
                    <button type="button" class="pull-right btn btn-default" id="sendEmail">Add to Cart
                        <i class="fa fa-shopping-cart"></i></button>
                </div>
            </div>

        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->

</section>
<script type="text/javascript">
    $(document).ready(function ($) {
        loadProductSeacrh([{"label": "MS Nut Bolt", "value": "1", "category": ""}, {"label": "HT Hex Bolt", "value": "2", "category": ""}]);
    });
</script>
