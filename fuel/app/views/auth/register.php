				<div class="masthead clearfix">
					<div class="inner">
						<h3 class="masthead-brand">Auth</h3>
						<ul class="nav masthead-nav">
							<li><?= Html::anchor('auth/login', 'Login') ?></li>
							<li class="active"><?= Html::anchor('auth/register', 'Register') ?></li>
						</ul>
					</div>
				</div>

				<div class="inner cover">
					<?= Form::open(['class' => 'form-horizontal', 'role' => 'form']) ?>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" name="email" class="form-control" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
							<div class="col-sm-10">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword3" class="col-sm-2 control-label">Confirm</label>
							<div class="col-sm-10">
								<input type="password" name="confirm-password" class="form-control" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-default">Register</button>
							</div>
						</div>
					</form>
				</div>