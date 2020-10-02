<?php

require('partials/header.php'); ?>

	<div class="container">
		<table class="table table-bordered shadow-sm">
			<thead>
			<tr class="thead-dark">
				<th style="width: 300px" class="text-right">Field</th>
				<th>Value</th>
			</tr>
			</thead>
			<tbody>
				<tr class="text-center"">
					<td class="align-middle w-20 text-right">Status code</td>
					<td class="align-middle text-left"><?= $response->getStatusCode(); ?></td>
				</tr>

				<tr class="text-center"">
					<td class="align-middle w-20 text-right">Header "Content type"</td>
					<td class="align-middle text-left"><?= $response->getHeader('content-type')[0]; ?></td>
				</tr>

				<tr class="text-center"">
					<td class="align-middle w-20 text-right">Header "User-Agent"</td>
					<td class="align-middle text-left">1</td>
				</tr>
			</tbody>
		</table>

<!--		--><?php //var_dump($response); ?>
	</div>

	<div class="parsed__title text-center"><h3>This is parsed page</h3></div>
	<div class="parsedBody">
        <?php
        echo $response->getBody(); ?>
		<!--    --><?php
        //var_dump($response->getBody()); ?>
		<!--    --><?php
        //print_f($response->getHeaders()); ?>
	</div>


<?php
require('partials/footer.php'); ?>