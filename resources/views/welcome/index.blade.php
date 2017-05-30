@extends('layouts.master')

@section('style')

@endsection

@section('content')
<div id="mainContent">
	@if($style == 'grid')
	<div class="ui four column grid grid-layout">
		@foreach($images as $image)
		<div class="column">
			<div class="ui centered fluid card">
				<div class="image">
					<img src="{{ $image }}">
				</div>
				<div class="content">
					<div class="header">LOW 3</div>
					<div class="description">TONAL ALIVEN VIRTUS</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@elseif($style == 'block')
	<div class="ui two column grid block-layout">
		@foreach($images as $image)
		<div class="column">
			<div class="ui centered fluid card">
				<div class="image">
					<img src="{{ $image }}">
				</div>
				<div class="content">
					<div class="header">LOW 3</div>
					<div class="description">TONAL ALIVEN VIRTUS</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@elseif($style == 'list')
	<div class="ui one column grid list-layout">
		@foreach($images as $image)
		<div class="column">
			<div class="ui centered fluid card">
				<div class="image">
					<img src="{{ $image }}">
				</div>
				<div class="content">
					<div class="header">LOW 3</div>
					<div class="description">TONAL ALIVEN VIRTUS</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	@endif
</div>
<div id="filterModal" class="ui basic fullscreen modal">
	<i class="close icon"></i>
	<div class="content">
		<div class="ui equal width five column grid">
			<div class="column">
				<div class="ui vertical text inverted menu">
					<h3 class="ui inverted header">COLOUR</h3>
					@for($i = 0; $i < 8; ++$i)
					<div class="item">GREEN</div>
					@endfor
				</div>
			</div>
			<div class="column">
				<div class="ui vertical text inverted menu">
					<h3 class="ui inverted header">GENDER</h3>
					@for($i = 0; $i < 8; ++$i)
					<div class="item">GREEN</div>
					@endfor
				</div>
			</div>
			<div class="column">
				<div class="ui vertical text inverted menu">
					<h3 class="ui inverted header">PRODUCT</h3>
					@for($i = 0; $i < 8; ++$i)
					<div class="item">GREEN</div>
					@endfor
				</div>
			</div>
			<div class="column">
				<div class="ui vertical text inverted menu">
					<h3 class="ui inverted header">SIZE</h3>
					@for($i = 0; $i < 8; ++$i)
					<div class="item">GREEN</div>
					@endfor
				</div>
			</div>
			<div class="column">
				<div class="ui vertical text inverted menu">
					<h3 class="ui inverted header">STYLE</h3>
					@for($i = 0; $i < 8; ++$i)
					<div class="item">GREEN</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
</div>
<div id="bottomMenu">
	<div class="ui bottom fixed menu">
		<div class="{{ $style == 'list' ? 'active' : '' }} list item">
			<i class="list layout icon"></i>
		</div>
		<div class="{{ $style == 'block' ? 'active' : '' }} block item">
			<i class="block layout icon"></i>
		</div>
		<div class="{{ $style == 'grid' ? 'active' : '' }} grid item">
			<i class="grid layout icon"></i>
		</div>
		<div class="right menu">
			<div class="item">
				<span>FILTER</span>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
$(function() {
	$('#bottomMenu .item:not(.active)').hover(function() {
		$this = $(this);
		$this.find('.fake').remove();
		$this.children().animate({
			bottom: '120%',
		}, 200);

		$this.children().clone().addClass('fake').css({
			bottom: '-40%',
		}).appendTo($this).animate({
			bottom: '38%',
		}, 200);
	}, function() {
		$(this).children(':not(.fake)').animate({
			bottom: '38%',
		}, 200);

		$(this).find('.fake').animate({
			bottom: '-40%'
		}, 200);
	});

	$('#bottomMenu > .menu').on('click', '> .item:not(.active)', function() {
		var url = "{{ route('welcome.index') }}?style=";
		$this = $(this);
		url = $this.hasClass('grid') ? url + 'grid' : url;
		url = $this.hasClass('block') ? url + 'block' : url;
		url = $this.hasClass('list') ? url + 'list' : url;
		window.location = url;
	});

	$('.ui.card').visibility({
		onTopVisible: function() {
			$(this).animate({
				top: '-=50px'
			}, 2000);
		}
	});

	$('.ui.card .image').hover(function() {
		$(this).next().stop(true).animate({
			opacity: 1,
			bottom: '-10px',
		}, 1000);
	}, function() {
		$(this).next().stop(true).animate({
			opacity: 0,
			bottom: '-50px',
		});
	});

	$('#bottomMenu .right .item').on('click', function() {
		$('#filterModal').modal('show');
	});
});
</script>
@endsection