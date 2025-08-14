   <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Bank Details</a></li>
                    </ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bank Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                  <form action="{{ route('user.bank-update') }}" method="POST">
                    @csrf

                      <div class="row ">
                        <div class="mb-3 col-md-12">
                            <label class="form-label">Bank Name <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="bank_name" value="{{ @$bank_value->bank_name }}"
                              placeholder="Enter Bank Name">
                          </div>
                        </div>

                        <div class="mb-3 col-md-12">

                              <label class="form-label">Branch Name <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" name="branch_name" value="{{ @$bank_value->branch_name }}"
                                placeholder="Enter Branch Name">

                          </div>

                          <div class="mb-3 col-md-12">

                            <label class="form-label">A/C Holder First Name <span
                                class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="account_holder" value="{{ @$bank_value->account_holder }}"
                              placeholder="Enter a/c holder first name">

                        </div>

                        <div class="mb-3 col-md-12">

                            <label class="form-label">Bank IFSC <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="ifsc_code" value="{{ @$bank_value->ifsc_code }}"
                              placeholder="Enter IFS Code " required>

                        </div>


                        <div class="mb-3 col-md-12">

                            <label class="form-label">Bank A/c Number <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="account_number" value="{{ @$bank_value->account_no }}"
                              placeholder="Enter Account Number" required>

                        </div>
                      </div>
                      <br>
                      <div class="">
                        <a href="{{route('user.BankDetail')}}" class="btn btn-primary " type="button">CANCEL</a>
                        <button class="btn btn-success " name="Bank89655656">UPDATE</button>
                      </div>

                  </form>

                </div>
            </div>
        </div>
    </div>




</div>
</div>
</div>
<!--**********************************
 Content body end
***********************************-->

