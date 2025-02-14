<section class="ftco-section" style="margin-top: 50px;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3>{{ __('general.contact_us') }}</h3>
									<p class="mb-4">{{ __('general.contact_us_text') }}</p>
									<div id="form-message-warning" class="mb-4"></div> 
									<div id="form-message-success" class="mb-4">
											{{ __('general.your_message_sent') }}
									</div>
									<div class="row mb-4">
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
												<div class="text">
												<p><span>{{ __('general.address') }}:</span> Istanbul/Turkey</p>
											</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>{{ __('general.email') }}:</span> <a href="mailto:info@goldenloom.store">info@goldenloom.store</a></p>
							          </div>
						         	 </div>
										</div>
										<div class="col-md-4">
											<div class="dbox w-100 d-flex align-items-start">
						        		<div class="text">
							            <p><span>{{ __('general.phone') }}:</span> <a href="tel://+905320506488">+905320506488</a></p>
							          </div>
						          </div>
										</div>
									</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="name" id="name" placeholder="{{ __('general.name') }}">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="email" class="form-control" name="name" id="email" placeholder="{{ __('general.email') }}">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('general.subject') }}">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="{{ __('general.message') }}"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="{{ __('general.send_message') }}" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5 img" style="background-image: url({{ asset('images/img.jpg') }});">
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>