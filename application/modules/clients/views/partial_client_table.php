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
		<div class="table-header">Daftar Klien</div>
			<table id="table_report1" class="table table-striped table-bordered table-hover">
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
						<th><?php echo lang('balance'); ?></th>
						<th><?php echo lang('active'); ?></th>
						<th></th>
					</tr>
				</thead>

				<tbody style="font-size:97%;">
					<?php foreach ($records as $client) { ?>
					<tr>
						<td class="center" style="padding-top:0; padding-bottom:3px" id="<?php echo $client->client_id; ?>" value="<?php echo $client->client_id; ?>">
							<label>
								<input type="checkbox"/>
								<span class="lbl"></span>
							</label>
						</td>
						<td style="padding-top:4px; padding-bottom:3px"><?php echo anchor('clients/view/' . $client->client_id, $client->client_name); ?></td>
						<td style="padding-top:4px; padding-bottom:3px"><?php echo $client->client_email; ?></td>
			            <td style="padding-top:4px; padding-bottom:3px"><?php echo (($client->client_phone ? $client->client_phone : ($client->client_mobile ? $client->client_mobile : ''))); ?></td>
						<td style="padding-top:4px; padding-bottom:3px; text-align: right;"><?php echo format_currency($client->client_invoice_balance); ?></td>
						<td style="padding-top:4px; padding-bottom:3px"><?php echo ($client->client_active) ? lang('yes') : lang('no'); ?></td>
						<td style="padding-top:4px; padding-bottom:3px">
							<div class="options btn-group">
								<button data-toggle="dropdown" class="btn btn-mini btn-yellow dropdown-toggle">
									<?php echo lang('options'); ?>
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="<?php echo site_url('clients/view/' . $client->client_id); ?>">
											<i class="icon-eye-open"></i> <?php echo lang('view'); ?>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('clients/form/' . $client->client_id); ?>">
											<i class="icon-pencil"></i> <?php echo lang('edit'); ?>
										</a>
									</li>
									<li>
										<a href="#" class="client-create-quote" data-client-name="<?php echo $client->client_name; ?>">
											<i class="icon-file"></i> <?php echo lang('create_quote'); ?>
										</a>
									</li>
									<li>
										<a href="#" class="client-create-invoice" data-client-name="<?php echo $client->client_name; ?>">
											<i class="icon-file"></i> <?php echo lang('create_invoice'); ?>
										</a>
									</li>
									<li>
										<a href="<?php echo site_url('clients/delete/' . $client->client_id); ?>" onclick="return confirm('<?php echo lang('delete_client_warning'); ?>');">
											<i class="icon-trash"></i> <?php echo lang('delete'); ?>
										</a>
									</li>
								</ul>
							</div>
						</td>
					</tr>
					<?php } ?>
				</tbody>

			</table>


		<!--PAGE CONTENT ENDS HERE-->
	</div><!--/row-->
</div><!--/#page-content-->