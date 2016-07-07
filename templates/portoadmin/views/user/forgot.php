<?php

/**
 * SilenceOntheWire
 * ul. Chorzowska 6
 * 40-101 Katowice
 * All rights reserved.
 */

/**
 * @filename forgot
 * @author Adrian Stolarski
 * 2016-07-07
 */
?>
<?php require './templates/portoadmin/views/user/header.php'; ?>
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppevrcase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Przypomnij hasło</h2>
					</div>
					<div class="panel-body">
						<form action="/przypomnij-haslo.html" method="post">
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
							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="termOfUse" name="termOfUse" type="checkbox"/>
										<label for="termOfUse">Akcepruję regulamin strony</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Przypomnij hasło</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Przypomnij hasło</button>
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