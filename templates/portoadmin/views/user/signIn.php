<?php

/**
 * SilenceOntheWire
 * ul. Chorzowska 6
 * 40-101 Katowice
 * All rights reserved.
 */

/**
 * @filename signIn
 * @author Adrian Stolarski
 * 2016-07-07
 */
?>
<?php require './templates/portoadmin/views/user/header.php'; ?>
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppevrcase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Zaloguj się</h2>
					</div>
					<div class="panel-body">
						<form action="/zaloguj.html" method="post">
							<div class="form-group mb-lg">
								<label>Wprowadź nazwę użytkownika lub adres e-mail użyte podczas rejesracji.</label>
								<div class="input-group input-group-icon">
                                                                    <input name="userdata" type="text" placeholder="Nazwa użytkownika lub adres e-mail ..." class="form-control input-lg" autocomplete="off" required />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
                                                                                        <i class="fa fa-envelope"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Wprowadź hasło</label>
                                                                        <a href="/przypomnij-haslo.html" title="SilenceOntheWire - przypomnij hasło" class="pull-right">A może trzeba przypomnieć hasło?</a>
								</div>
								<div class="input-group input-group-icon">
                                                                    <input name="password" type="password" placeholder="Hasło ..." class="form-control input-lg" autocomplete="off" required />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Zapamiętaj mnie</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Zaloguj</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Zaloguj</button>
								</div>
							</div>
                                                        <!--
							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>
                                                        -->
							<p class="text-center">Nie posiadasz jeszcze konta? <a href="/zarejestracja-konta.html" title="SilenceOntheWire - rejestracja konta">Zarejestruj się</a></p>

						</form>
					</div>
				</div>
<?php require './templates/portoadmin/views/user/footer.php'; ?>
