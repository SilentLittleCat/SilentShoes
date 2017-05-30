@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div id="showShoesContent">
	<div class="ui grid">
		<div class="twelve wide column" id="shoesContent">
			<div class="ui one column grid">
				@for($i = 0; $i < 5; ++$i)
				<div class="column">
					<div class="ui fluid card">
						<div class="image">
							<img src="{{ $images[$i] }}">
						</div>
					</div>
				</div>
				@endfor
			</div>
		</div>
		<div class="four wide column">
			<div class="ui fluid card">
				<div class="content">
					<div class="ui header">
						<div class="header">LOW 3</div>
						<div class="sub header">TONAL OLIVE VIRTUS</div>
					</div>
					<div class="price">€ 260.00</div>
					<div class="description">
						Mid-top sneaker crafted from rubberized leather in Olive. Tonal leather trim, lace-up closure and a tonal Virtus rubber cup sole unit. Full calf leather lining and insole. Comes in a branded box with a dust bag and a spare set of waxed laces.
					</div>
				</div>
				<div class="content">
					<div class="ui secondary menu">
						<a href="#" class="active item" data-tab="fit">FIT</a>
						<a href="#" class="item" data-tab="delivery">DELIVERY</a>
						<a href="#" class="item" data-tab="material">MATERIAL</a>
					</div>
					<div class="ui tab active segment" data-tab="fit">FIT</div>
					<div class="ui tab segment" data-tab="delivery">DELIVERY</div>
					<div class="ui tab segment" data-tab="material">MATERIAL</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui basic modal" id="showImageModal">
		<div class="image content">
			<img class="ui fluid image" src="">
		</div>
	</div>
	<div class="ui bottom fixed menu">
		<div class="active item">
			<i class="remove icon"></i>
		</div>
		<div class="item">
			<i class="long arrow up icon"></i>
		</div>
		<div class="item">
			<i class="long arrow down icon"></i>
		</div>
		<div class="item">
			<i class="add icon"></i>
		</div>
		<div class="right menu">
			<div class="item">
				<div class="ui buttons">
					<div class="ui right labeled icon button">
						<i class="right dropdown icon"></i>Size
					</div>
					<div class="ui button">Add to bag</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function() {
	$('#shoesContent .card').hover(function() {
		$(this).css({'cursor': "url(../../images/cursor/cursor-plus.png), auto"});
	}, function() {
		//$(this).css({'cursor': 'default'});
	});

	$('#shoesContent').on('click', '.image', function() {
		$('#showImageModal').find('.fluid.image').attr('src', $(this).find('img').attr('src'));
		$('#showImageModal').modal('show');
	});
});
</script>
@endsection