<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="{{ asset('dist/css/styles.css') }}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
		<script>

  </script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Input Order</h3></div>
                                    <div class="card-body">
									<!-- ---------------------------------------------------------------------------->
									@foreach($tv_costumer as $t)
                                        <form action="http://localhost/sales_order/public/sales/store_po" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $t->id }}">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">Costumer ID</label>
                                                        <input class="form-control py-4" name="cust_id" type="text" value="{{ $t->cust_id }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
														<label for="type_aktivasi">Order</label>
                                                       <select class="form-control" id="type_aktivasi" name="type_aktivasi">
													   <option>--Input Order--</option>
													   <option value="Upgrade">Upgrade</option>
                                                       <option value="Downgrade">Downgrade</option>
                                                        <option value="Isolir">Isolir</option>
                                                       </select>
                                                    </div>
                                                </div>
                                            </div>
									<!-- ---------------------------------------------------------------------------->
											<div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Status</label>
                                                        <input class="form-control py-4" name="status" type="text" value="{{ $t->status }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Date</label>
                                                        <input class="form-control py-4" name="open_close_date"  value="{{ $t->open_close_date }}" />
                                                    </div>
                                                </div>
                                            </div>
											
									<!-- ---------------------------------------------------------------------------->
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Request Install Date</label>
                                                        <input class="form-control py-4" name="req_install_date" type="date"  value="{{ $t->req_install_date }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Requestor Name</label>
                                                        <input class="form-control py-4" name="requestor_name" type="text"   value="{{ $t->requestor_name }}"/>
                                                    </div>
                                                </div>
                                            </div>
									
									<!-- ---------------------------------------------------------------------------->
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Form Number</label>
                                                        <input class="form-control py-4" name="form_number" type="text"  value="{{ $t->form_number }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Homepass</label>
                                                        <input class="form-control py-4" name="homepass" type="text"  value="{{ $t->homepass }}" />
                                                    </div>
                                                </div>
                                            </div>
									
									<!-- ---------------------------------------------------------------------------->
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Costumer Name</label>
                                                        <input class="form-control py-4" name="cust_name" type="text"   value="{{ $t->cust_name }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Package</label>
                                                        <input class="form-control py-4" name="package" type="text"  value="{{ $t->package }}"/>
                                                    </div>
                                                </div>
                                            </div>
											
									<!-- ---------------------------------------------------------------------------->
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Cluster</label>
                                                        <input class="form-control py-4" name="cluster" type="text"  value="{{ $t->cluster }}"/>
                                                    </div>
                                                </div>
												
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Status Install</label>
                                                        <input class="form-control py-4" name="status_install" type="text"  value="{{ $t->status_install }}"/>
                                                    </div>
                                                </div></div>
									<!-- ---------------------------------------------------------------------------->			
												 <div class="form-row">
												 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Install Date</label>
                                                        <input class="form-control py-4" name="install_date" type="date"  value="{{ $t->install_date }}"/>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Remark</label>
                                                        <input class="form-control py-4" name="remark" type="text" />
                                                    </div>
                                                </div>
                                            </div>
											
                                            <div class="form-group mt-4 mb-0"><input class="btn btn-primary btn-block" type="submit" value="Submit"></a></div>
											<div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="http://localhost/sales_order/public/sales">Cancel</a></div>
                                        @endforeach</form>
                                    </div>
                                    <div class="card-footer text-center">
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                </main>
            </div>
            <div id="layoutAuthentication_footer"><br></br>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
