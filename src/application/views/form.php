<?php
require('partials/header.php'); ?>
	<script src="public/js/mask.js"></script>
	<script src="public/js/form.js"></script>

	<div class="container">
		<div class="row">
			<div class="col-12">
                <form id="first" name="first" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-12">
							<h1 class="mb-5 text-center">Please enter the data for parsing</h1>
						</div>
					</div>

					<div class="row">
						<div class="col-12 form-group">
							<label for="url">URL (*)</label>
                            <input class="form-control shadow-sm" type="text" name="url" id="url" placeholder="URL">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="type1" value="get" >
                                    <label class="form-check-label" for="inlineRadio1">GET</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="type" id="type2" value="post">
                                    <label class="form-check-label" for="inlineRadio1">POST</label>
                                </div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 form-group">
							<label for="proxy">Proxy (*)</label>
                            <input class="form-control shadow-sm" type="text" name="proxy" id="proxy" placeholder="Proxy">
						</div>
					</div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proxy-type" id="proxy-radio1" value="http" >
                                <label class="form-check-label" for="inlineRadio1">HTTP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proxy-type" id="proxy-radio2" value="https">
                                <label class="form-check-label" for="inlineRadio1">HTTPS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="proxy-type" id="proxy-radio3" value="socks5" checked>
                                <label class="form-check-label" for="inlineRadio1">SOCKS5</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5">
                            <div id="response">
                                <span id="status">cURL</span>
                                <span id="code"></span>
                            </div>
                        </div>
                        <div class="col-1 offset-4">
                            <div id="loading" class="spinner-border text-primary" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="col-2 text-right">
                            <button
                                    id="btnGO"
                                    class="btn btn-primary btn-lg btn-block shadow-sm">
                                GO
                            </button>
                        </div>
                    </div>
				</form>
			</div>
		</div>
	</div>


<?php
require('partials/footer.php'); ?>