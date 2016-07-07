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
						<h2 class="title text-uppevrcase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Zarejestruj się</h2>
					</div>
					<div class="panel-body">
						<form action="/zaloz-konto.html" method="post">
							<div class="form-group mb-lg">
								<label>Wprowadź nazwę użytkownika. Nazwa użytkownika musi zawierać przynamniej 3 znaki i nie więcej niż 255.</label>
								<div class="input-group input-group-icon">
                                                                    <input name="username" type="text" placeholder="Nazwa użytkownika ..." class="form-control input-lg" autocomplete="off" pattern=".{3,255}" required />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>
                                                        <div class="form-group mb-lg">
								<label>Wprowadź adres e-mail. Prawidłowy format adresu e-mail to: osoba@host.domena</label>
								<div class="input-group input-group-icon">
                                                                    <input name="email" type="email" placeholder="Adres e-mail ..." class="form-control input-lg" pattern=".{,255}" autocomplete="off" required />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-envelope"></i>
										</span>
									</span>
								</div>
							</div>
							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Wprowadź hasło. Hasło musi zawierać minimum 12 znaków, ale nie więcej niż 255, jedną dużą literę, jedną małą literę, jedną cyfrę i jeden znak specjalny.</label>
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
                                                        <div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Wprowadź hasło ponownie.</label>
								</div>
								<div class="input-group input-group-icon">
                                                                    <input name="confirmPassword" type="password" placeholder="Potwierdź hasło ..." class="form-control input-lg" autocomplete="off" required />
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
                                                                            <input id="termOfUse" name="termOfUse" type="checkbox" required/>
										<label for="termOfUse">Akceptuję regulamin strony</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Załóż konto</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Załóż konto</button>
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
							<p class="text-center">Posiadasz już konto? <a href="/logowanie.html" title="SilenceOntheWire - logowanie">Zaloguj się</a></p>

						</form>
					</div>
				</div>
<?php require './templates/portoadmin/views/user/footer.php'; ?>
