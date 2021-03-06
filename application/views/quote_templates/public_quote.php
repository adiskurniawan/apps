<!doctype html>

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>FusionInvoice</title>

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/charisma/css/bootstrap.min.css">

        <style>
            body {
                color: #000 !important;
            }
            table {
                width:100%;
            }
            #header table {
                width:100%;
                padding: 0px;
            }
            #header table td {
                vertical-align: text-top;
                padding: 5px;
            }
            #company-name{
                color:#000;
                font-size: 18px;
            }
            #invoice-to {
                /*                display: table;*/
                /*                content: "";*/
            }
            #invoice-to td {
                text-align: left
            }
            .seperator {
                height: 25px
            }
            .top-border {
                border-top: none;
            }
            .no-bottom-border {
                border:none !important;
                background-color: white !important;
            }
            .alignr {
                text-align: right;
            }
            #invoice-container {
                margin: auto;
                margin-top: 25px;
                width: 900px;
                padding: 20px;
                top:10px;
                background-color: white;
                box-shadow: 4px 4px 14px rgba(0, 0, 0, 0.8);
                overflow-y: hidden;
            }
            #menu-container {
                margin: auto;
                margin-top: 25px;
                width: 900px;
                top:10px;
                overflow-y: hidden;
            }
            .flash-message {
                font-size: 120%;
                font-weight: bold;
            }
        </style>

    </head>

    <body>

        <div id="menu-container">

            <a href="<?php echo site_url('guest/view/generate_quote_pdf/' . $quote_url_key); ?>" class="btn btn-primary"><i class="icon-white icon-print"></i> <?php echo lang('download_pdf'); ?></a> 

            <?php if ($flash_message) { ?>
            <div class="alert flash-message">
                <?php echo $flash_message; ?>
            </div>
            <?php } ?>
        </div>

        <div id="invoice-container">

            <div id="header">
                <table>
                    <tr>
                        <td id="company-name">
                            <?php echo invoice_logo(); ?>
                            <h2><?php echo $quote->user_name; ?></h2>
                            <p><?php if ($quote->user_address_1) { echo $quote->user_address_1 . '<br>'; } ?>
                                <?php if ($quote->user_address_2) { echo $quote->user_address_2 . '<br>'; } ?>
                                <?php if ($quote->user_city) { echo $quote->user_city . ' '; } ?>
                                <?php if ($quote->user_state) { echo $quote->user_state . ' '; } ?>
                                <?php if ($quote->user_zip) { echo $quote->user_zip . '<br>'; } ?>
                                <?php if ($quote->user_phone) { ?><abbr>P:</abbr><?php echo $quote->user_phone; ?><br><?php } ?>
                                <?php if ($quote->user_fax) { ?><abbr>F:</abbr><?php echo $quote->user_fax; ?><?php } ?>
                            </p>
                        </td>
                        <td class="alignr"><h2><?php echo lang('quote'); ?> <?php echo $quote->quote_number; ?></h2></td>
                    </tr>
                </table>
            </div>
            <div id="invoice-to">
                <table style="width: 100%;">
                    <tr>
                        <td>
                            <h2><?php echo $quote->client_name; ?></h2>
                            <p><?php if ($quote->client_address_1) { echo $quote->client_address_1 . '<br>'; } ?>
                                <?php if ($quote->client_address_2) { echo $quote->client_address_2 . '<br>'; } ?>
                                <?php if ($quote->client_city) { echo $quote->client_city . ' '; } ?>
                                <?php if ($quote->client_state) { echo $quote->client_state . ' '; } ?>
                                <?php if ($quote->client_zip) { echo $quote->client_zip . '<br>'; } ?>
                                <?php if ($quote->client_phone) { ?><abbr>P:</abbr><?php echo $quote->client_phone; ?><br><?php } ?>
                            </p>
                        </td>
                        <td style="width:40%;"></td>
                        <td>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><?php echo lang('quote_date'); ?></td>
                                        <td><?php echo date_from_mysql($quote->quote_date_created); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo lang('expires'); ?></td>
                                        <td><?php echo date_from_mysql($quote->quote_date_expires); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo lang('total'); ?></td>
                                        <td><?php echo format_currency($quote->quote_total); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="invoice-items">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><?php echo lang('qty'); ?></th>
                            <th><?php echo lang('item'); ?></th>
                            <th><?php echo lang('description'); ?></th>
                            <th><?php echo lang('price'); ?></th>
                            <th><?php echo lang('total'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($items as $item) : ?>
                            <tr>
                                <td><?php echo $item->item_quantity; ?></td>
                                <td><?php echo $item->item_name; ?></td>
                                <td><?php echo $item->item_description; ?></td>
                                <td><?php echo format_currency($item->item_price); ?></td>
                                <td><?php echo format_currency($item->item_subtotal); ?></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="3"></td>
                            <td><?php echo lang('subtotal'); ?>:</td>
                            <td><?php echo format_currency($quote->quote_item_subtotal); ?></td>
                        </tr>
                        <?php if ($quote->quote_item_tax_total > 0) { ?>
                        <tr>
                                <td class="no-bottom-border" colspan="3"></td>
                                <td><?php echo lang('item_tax'); ?></td>
                                <td><?php echo format_currency($quote->quote_item_tax_total); ?></td>
                        </tr>
                        <?php } ?>
                        <?php foreach ($quote_tax_rates as $quote_tax_rate) : ?>
                            <tr>    
                                <td class="no-bottom-border" colspan="3"></td>
                                <td><?php echo $quote_tax_rate->quote_tax_rate_name . ' ' . $quote_tax_rate->quote_tax_rate_percent; ?>%</td>
                                <td><?php echo format_currency($quote_tax_rate->quote_tax_rate_amount); ?></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td class="no-bottom-border" colspan="3"></td>
                            <td><?php echo lang('total'); ?>:</td>
                            <td><?php echo format_currency($quote->quote_total); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="seperator"></div>
                
            </div>

        </div>

    </body>
</html>