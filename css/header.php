<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine Js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>


<style>

[x-cloak] {
			display: none;
		}

		.duration-300 {
			transition-duration: 300ms;
		}

		.ease-in {
			transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
		}

		.ease-out {
			transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
		}

		.scale-90 {
			transform: scale(.9);
		}

		.scale-100 {
			transform: scale(1);
		}

.passed{
    color:#008000;
	font-size:bold;
    width:100%;
}

.red{
    color:#FF0000;
	font-size:bold;
    width:100%;
}
</style>


