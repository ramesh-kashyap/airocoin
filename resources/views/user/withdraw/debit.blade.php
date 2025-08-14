<div class="container-fluid main-content px-2 px-lg-4">
    <!-- Tables -->
    <div class="row my-2 g-3 g-lg-4 pb-3  ">
        <div class="col-12">
            <div class="mainchart px-3 px-md-4 py-3 py-lg-4">
                <div class="activity">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <h5 class="mb-0">Debit Reports</h5>
                        </div>

                        <div class="tab-content" id="pills-tabContent2">
                            
                            <div class="tab-pane fade show active" id="price" role="tabpanel" tabindex="0">
                                <div class="recent-contact pb-2 pt-3">
                                    <table  id="example" class="display"  >
                                    <thead>
                                    <tr>
                                        <th class="wd-15p">#S.NO</th>
                                                <th class="wd-15p">Amount</th>
                                          
                                                <th class="wd-15p">Date </th>
                                             
                                                <th class="wd-15p">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($withdraw_report) || is_object($withdraw_report)){ ?>

                                        <?php $cnt = $withdraw_report->perPage() * ($withdraw_report->currentPage() - 1); ?>
                                        @foreach($withdraw_report as $value)
                                      
                                            <tr>
                                                <td><?= $cnt += 1 ?></td>
                                                <td>{{currency()}} {{ ($value->amount) }}</td>
                                            
                                                <td>{{date("D, d M Y", strtotime($value->created_at)) }} </td>
                                                <td>{{ $value->remarks }}</td>
                                               

                                            </tr>
                                        @endforeach

                                        <?php }?>
    
                                </tbody>
                                    </table>
                                    <br>

                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

