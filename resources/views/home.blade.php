<!DOCTYPE html>
<html>
@extends('layout.head')
<body style="background-color: #3a6351;">


	<div class="container py-3 bg-white" style="margin-top: 50px;">
	<img src="{{url('/img/rangkumcrt2.png')}}" style="width: 180px; height: 112px;" class="rounded mx-auto d-block" alt="Responsive image">
		<div class="container px-3 bg-white mt-2">
		@include('layout.nav')
		@yield('main')
		{{ isset($slot) ? $slot : null}}
		
		@stack('scripts')
		</div>
	</div>
	@yield('footer')
	<script data-name="NBJ-Widget" data-cfasync="false" src="https://www.nihbuatjajan.com/javascripts/widget.prod.min.js" data-id="hubbaka" data-domain="https://www.nihbuatjajan.com" data-description="" data-message="" data-color="#FF813F" data-position="Right" data-x_margin="18" data-y_margin="18"></script>
</body>

