<html>
	<head>
		<title><?php echo lang('payment_history'); ?></title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/charisma/css/reports.css" type="text/css">
	</head>
	<body>
		
		<h3 class="report_title"><?php echo lang('payment_history'); ?></h3>
		
		<table>
			<tr>
				<th><?php echo lang('date'); ?></th>
				<th><?php echo lang('invoice'); ?></th>
				<th><?php echo lang('client'); ?></th>
				<th><?php echo lang('payment_method'); ?></th>
				<th><?php echo lang('note'); ?></th>
				<th class="amount"><?php echo lang('amount'); ?></th>
			</tr>
			<?php foreach ($results as $result) { ?>
			<tr>
				<td><?php echo $result->payment_date; ?></td>
				<td><?php echo $result->invoice_number; ?></td>
				<td><?php echo $result->client_name; ?></td>
				<td><?php echo $result->payment_method_name; ?></td>
				<td><?php echo nl2br($result->payment_note); ?></td>
				<td class="amount"><?php echo format_currency($result->payment_amount); ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>