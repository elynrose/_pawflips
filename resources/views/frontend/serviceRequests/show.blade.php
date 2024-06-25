@extends('layouts.frontend')
@php 
if(Auth::user()->timezone){
    date_default_timezone_set(Auth::user()->timezone);
}
date_default_timezone_set(Auth::user()->timezone);
$today = \Carbon\Carbon::now()->timezone(Auth::user()->timezone);

@endphp

@section('content')
<section class="py-5" style="background:black!important;">
	<div class="container">
		<div class="row">
			<div class="col-md-8">



				<div class="media-container-row">
					<div class="media-content">
					@php
					$service_req = new App\Models\ServiceRequest;
					$status = null;
					@endphp
					{!! $service_req->status($status, $serviceRequest) !!}
						<h1 class="mbr-section-title mbr-white mbr-fonts-style display-2">
							<br>
							<strong>{{ $serviceRequest->pet->name ?? '' }}</strong>
							<span style="color:#9d2e63;">
							
							</span>
						</h1>
						
						<div class="mbr-section-text mbr-white">
							<p class="mbr-text mbr-fonts-styles">
								{{ $serviceRequest->user->name }} {{ _('says:') }}
								<em>{!! $serviceRequest->comments !!}</em>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="mbr-figure mt-5" style="max-width: 180px;">
					<img class="img-circle" src="{{ $serviceRequest->pet->photos->getUrl('preview') }}">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="mbr-section form6 agencym4_form6 cid-ucXfcWtMY3" id="form6-3m">
	<div class="container">
		<div class="media-container-row">
			<div class="col-md-8 col-lg-8">
				<div class="text-block">
					<div class="col-lg-6 col-12 mb-4">
						<h4 class="mb-4 mbr-fonts-style display-5"><strong>Service</strong></h4>
						<p class="mbr-fonts-style display-7">{{ ucfirst($serviceRequest->service->name) ?? '' }}</p>
					</div>
					<div class="col-lg-6 col-12 mb-4">
						<h4 class="mb-4 mbr-fonts-style display-5"><strong>Credits&nbsp;</strong></h4>
						<p class="mbr-fonts-style display-7">
							{{ \Carbon\Carbon::parse($serviceRequest->from)->diffInHours(\Carbon\Carbon::parse($serviceRequest->to)) ?? '' }}
							{{ _('credits') }}
						</p>
					</div>
					<div class="col-lg-6 col-12 mb-4">
						<h4 class="mb-4 mbr-fonts-style display-5"><strong>Pickup Date</strong></h4>
						<p class="mbr-fonts-style display-7">
							{{ \Carbon\Carbon::parse($serviceRequest->from)->format('l, F j, Y, g:i A') ?? '' }}
						</p>
					</div>
					<div class="col-lg-6 col-12 mb-4">
						<h4 class="mb-4 mbr-fonts-style display-5"><strong>Return Date</strong></h4>
						<p class="mbr-fonts-style display-7">
							{{ \Carbon\Carbon::parse($serviceRequest->to)->format('l, F j, Y, g:i A') ?? '' }}
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 block-content">
				<div>
					<div>
						@if($serviceRequest->closed==0 && Auth::id()!==$serviceRequest->user_id)
							<form id="bookingForm" action="{{ route('frontend.bookings.store') }}" method="POST" enctype="multipart/form-data">
								@method('POST')
								@csrf
								<div class="panel pb-4">
									<p class="small">
										Please be certain that you have the time blocked and that the dates work for you.
										You may lose points if you decline this service.
										As much as we love to help, we also hate to disappoint.
									</p>
								</div>
								<input type="hidden" name="credits" required="required" id="credits" value="{{ \Carbon\Carbon::parse($serviceRequest->from)->diffInHours(\Carbon\Carbon::parse($serviceRequest->to)) ?? '' }}">
								<input type="hidden" name="service_request_id" required="required" value="{{ $serviceRequest->id }}">
								<input type="hidden" name="from" required="required" value="{{ $serviceRequest->from }}">
								<input type="hidden" name="to" required="required" value="{{ $serviceRequest->to }}">
								<input type="hidden" name="user_id" required="required" value="{{ Auth::id() }}">
								<input type="submit" class="btn btn-primary btn-bgr display-4" value="Book {{ $serviceRequest->pet->name ?? '' }}" id="bookButton">
							</form>
						@else
							@if(Auth::id()==$serviceRequest->user_id && $serviceRequest->pending==0)
								<a class="btn btn-success" href="{{ route('frontend.service-requests.edit', $serviceRequest->id) }}">
									<i class="fas fa-edit"></i> {{ trans('global.edit') }} {{ trans('cruds.serviceRequest.title_singular') }}
								</a>
							@else
								<a class="btn btn-success" href="{{ route('frontend.service-requests.index') }}">
									<i class="fas fa-arrow-left"></i> {{ trans('global.in_progress') }}
								</a>
							@endif
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

@section('scripts')
@parent
<script>
	$(document).ready(function() {
		$('#bookingForm').submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var submitButton = form.find('#bookButton');

			// Disable the submit button and show processing status
			submitButton.prop('disabled', true).val('Processing...');

			$.ajax({
				url: form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				success: function(response) {
					// Show success message
					alert('Booking successful!');

					// Redirect to the bookings page
					window.location.href = "{{ route('frontend.bookings.index') }}";
				},
				error: function(xhr, status, error) {
					// Show error message
					alert('An error occurred. Please try again.');

					// Enable the submit button
					submitButton.prop('disabled', false).val('Book {{ $serviceRequest->pet->name ?? '' }}');
				}
			});
		});
	});
</script>
@endsection
