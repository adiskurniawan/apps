				<!-- <div id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="#">Distributor</a>

							<span class="divider">
								<i class="icon-angle-right"></i>
							</span>
						</li>
						<li class="active">Barang</li>
					</ul> 

				</div> breadcrumb-->

				<div id="page-content" class="clearfix">
					
					<!-- 
					<div class="page-header position-relative">
						<h1>
							Tables
							<small>
								<i class="icon-double-angle-right"></i>
								Static &amp; Dynamic Tables
							</small>
						</h1>
					</div> page-header-->

						<div class="row-fluid">
							<!-- <h3 class="header smaller lighter blue">jQuery dataTables</h3> -->
							<div class="table-header">
								Pelanggan
							</div>

							<table id="table_report" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th class="center">
											<label>
												<input type="checkbox" />
												<span class="lbl"></span>
											</label>
										</th>
										<th><?php echo lang('client_name'); ?></th>
										<th><?php echo lang('email_address'); ?></th>
										<th><?php echo lang('phone_number'); ?></th>
										<th><?php echo lang('active'); ?></th>
										<th><?php echo lang('options'); ?></th>
									</tr>
								</thead>

								<tbody style="font-size:97%;">
									<?php foreach ($records as $client) { ?>
									<tr>
										<td style="padding-top:0; padding-bottom:2px" class="center" 
											id="<?php echo $client->client_id; ?>" value="<?php echo $client->client_id; ?>">
											<label>
												<input type="checkbox"/>
												<span class="lbl"></span>
											</label>
										</td>

										<td style="padding-top:3px; padding-bottom:3px">
											<a href="#"><?php echo $client->client_name; ?></a>
										</td>
										<td style="padding-top:3px; padding-bottom:3px"><?php echo $client->client_email; ?></td>
										<td style="padding-top:3px; padding-bottom:3px"><?php echo $client->client_phone; ?></td>
										<td style="padding-top:3px; padding-bottom:3px"><?php echo $client->client_active; ?></td>

										<!-- <td style="padding-top:3px; padding-bottom:3px" class="hidden-480">
											<span class="label label-warning">Expiring</span>
										</td> -->

										<td style="padding-top:3px; padding-bottom:3px" class="td-actions">
											<div class="hidden-phone visible-desktop btn-group">
												<button class="btn btn-mini btn-success">
													<i class="icon-ok bigger-120"></i>
												</button>

												<button class="btn btn-mini btn-info">
													<i class="icon-edit bigger-120"></i>
												</button>

												<button class="btn btn-mini btn-danger">
													<i class="icon-trash bigger-120"></i>
												</button>

												<button class="btn btn-mini btn-warning">
													<i class="icon-flag bigger-120"></i>
												</button>
											</div>

											<!-- <div class="hidden-desktop visible-phone">
												<div class="inline position-relative">
													<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
														<i class="icon-caret-down icon-only bigger-120"></i>
													</button>

													<ul class="dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close">
														<li>
															<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit" data-placement="left">
																<span class="green">
																	<i class="icon-edit"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-warning" data-rel="tooltip" title="Flag" data-placement="left">
																<span class="blue">
																	<i class="icon-flag"></i>
																</span>
															</a>
														</li>

														<li>
															<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete" data-placement="left">
																<span class="red">
																	<i class="icon-trash"></i>
																</span>
															</a>
														</li>
													</ul>
												</div>
											</div> -->
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>

						<!--PAGE CONTENT ENDS HERE-->
					</div><!--/row-->
				</div><!--/#page-content-->