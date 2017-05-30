<!DOCTYPE html>
<html>
<head>
	<title>Test Index</title>

	<style type="text/css">
		body {
			margin: 0;
		}
		canvas {
			width: 100%;
			height: 100%;
		}
	</style>
</head>
<body>

	<script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
	<script src="{{ asset('vendor/three/build/three.min.js') }}"></script>
	<script src="{{ asset('vendor/three/examples/js/controls/OrbitControls.js') }}"></script>
	<script type="text/javascript">
		$(function() {
			var scene, camera, controls, renderer;
			scene = new THREE.Scene();
			camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
			controls = new THREE.OrbitControls( camera );

			renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );
			var loader = new THREE.TextureLoader();
			var url = "{{ asset('images/textures/land_ocean_ice_cloud_2048.jpg') }}";
			console.log(url);
			loader.load( 'images/textures/land_ocean_ice_cloud_2048.jpg', function ( texture ) {
					var geometry = new THREE.SphereGeometry( 5, 20, 20 );
					var material = new THREE.MeshBasicMaterial( { map: texture, overdraw: 0.5 } );
					var cube = new THREE.Mesh( geometry, material );
					scene.add( cube );
			}, function(xhr) {
				console.log( (xhr.loaded / xhr.total * 100) + '% loaded' );
			}, function(xhr) {
				console.log( 'An error happened' );
			});
			camera.position.z = 5;
			// var geometry = new THREE.BoxGeometry( 1, 1, 1 );
			// var material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
			// var cube = new THREE.Mesh( geometry, material );
			// scene.add( cube );

			function render() {
				requestAnimationFrame( render );
				renderer.render( scene, camera );
				//cube.rotation.x += 0.1;
				//cube.rotation.y += 0.1;
			}
			render();
		});
	</script>
</body>
</html>