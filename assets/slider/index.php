
<!DOCTYPE html>
<html>
	<head>
		<title>noUiSlider Example</title>
	</head>

	<body>

		<div class="slider"></div>

		<script src="jquery.js"></script>
		<script src="jquery.nouislider.min.js"></script>

		<link href="jquery.nouislider.css" rel="stylesheet">

		<script>

			 // On document ready, initialize noUiSlider.
			$(function(){

				$('.slider').noUiSlider({
					start: [ 20, 30 ],
					range: {
						'min': 10,
						'max': 40
					}
				});

			});

		</script>

	</body>
</html>
