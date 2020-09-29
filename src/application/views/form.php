<?php
require('partials/header.php'); ?>
	<script src="public/js/mask.js"></script>
	<script src="public/js/form.js"></script>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<form id="form" action="p" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-12 form-group">
							<label for="url">URL</label>
							<input id="url" class="form-control shadow-sm" type="text" name="url"
							       placeholder="Url" required>
						</div>
					</div>

					<div class="row">
						<div class="col-12 form-group">
							<label for="headers">Headers</label>
							<textarea id="headers" class="form-control shadow-sm" maxlength="21845"
							          rows="3" name="headers"></textarea>
						</div>
					</div>

					<div class="row">
						<div class="col-12 form-group">
							<label for="params">POST params</label>
							<input id="params" class="form-control shadow-sm" type="text" name="params"
							       placeholder="Params">
						</div>
					</div>

					<div class="row">
						<div class="col-12 form-group">
							<label for="type">Request's type</label>
							<div class="radio-group">
								<input id="type1" name="type" type="radio" value="get" checked>
								<label class="form-check-label" for="type1">
									GET
								</label>
								<input id="type2" name="type" type="radio" value="post">
								<label class="form-check-label" for="type2">
									POST
								</label>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 form-group">
							<label for="proxy">Proxy</label>
							<input id="proxy" class="form-control shadow-sm" type="text" name="proxy"
							       placeholder="Proxy" required>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-4 offset-md-8 col-lg-2 offset-lg-10  text-right">
							<input id="btnSubmit" class="btn btn-primary btn-lg btn-block shadow-sm" value="Submit"
							       type="submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


<?php
require('partials/footer.php'); ?>