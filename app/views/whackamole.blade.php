@extends('layouts.master')

@section('title')
	- Whackamole
@stop

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<script src="/js/jquery.min.js"></script>
	<title>Whackamole Project</title>
	<link rel="stylesheet" type="text/css" href="/css/styles_whack.css">
	<style type="text/css"></style>

</head>

<body>

	<audio src="sounds/dj_scratch.mp3" id="dj"></audio>
	<audio id="hit" src="sounds/hit.wav"></audio>
	<audio src="sounds/cat_purr.wav" id="belly"></audio>
	<audio src="sounds/cat_meow.wav" id="head"></audio>
	<audio src="sounds/furball.wav" id="end"></audio>

	<div class="box-container" id="main-container">
		<div class="catbox" id="box-1" >
			<div></div>
		</div>

		<div class="catbox" id="box-2" >
			<div></div>
		</div>

		<div class="catbox" id="box-3" >
			<div></div>
		</div>

		<div class="catbox" id="box-4" >
			<div></div>
		</div>

		<div class="catbox" id="box-5" >
			<div></div>
		</div>

		<div class="catbox" id="box-6" >
			<div></div>
		</div>

		<div class="catbox" id="box-7" >
			<div></div>
		</div>

		<div class="catbox" id="box-8" >
			<div></div>
		</div>

		<div class="catbox" id="box-9" >
			<div></div>
		</div>

		<div class="scoreboard" id="box-10" >
			<button type="button" id="starter">Start</button>
			<h2>Time: <span id="timer"></span><br></h2>
			<h2>Hits: <span id="catHits"></span><br></h2>
		</div>
		
		<div id="dj-kitty"></div>

		<div id="cat-head"></div>

		<div id="cat-belly"></div>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<script type="text/javascript">

	$('document').ready(function() {

		// Initalize variable to use in 
		var hits = 0;

		// Initialize variable to use in setInterval
		var randomNumber = null;

		// Define Array for Gameboard
		var gameboard = $(".box-container").children();

		// Set variables for timer
		var count = 1;

		var gameTimer = 30,
			activeBox;

		// generate a number for random selection of div
		function getRandomInt() {
			return Math.floor(Math.random() * (9 + 0) + 0);
		}

		function catWhack() {
			 
			// activeBox.off();
			$('.catbox div').removeClass('active');

			activeBox = $('#box-' + randomNumber + ' div');
			// activeBox.show();
			
			activeBox.addClass('active');

			activeBox.on('click', function() {
				playSound('#hit');
				$(this).hide();
				hits++;
			});
	 
		}

		function startGame() {

			// Remove Event Listener to Start Button
			$('#starter').off();

			var intervalId = setInterval(function () {
				// console.log(intervalId);
				gameTimer--;

				// Generate Random Num
				randomNumber = getRandomInt();
				// console.log(randomNumber);

				// Call catWhack
				catWhack();

	        	// Update the timer div with the new value
	        	$('#timer').html(gameTimer);

	        	// Update the hits div with the new value
	        	$('#catHits').html(hits);

				
		        if (gameTimer == 0) {
		            console.log('Time is up.');
		            clearInterval(intervalId);
		            setTimeout(function() {
		            playSound('#end');
		        	}, 1000);
		            setTimeout(function() {
		            	location.reload();
		            }, 5000);
		            
				}

			}, 1000);

		}

		function playSound(id) {
			sound = $(id)[0];
			sound.load();
			sound.play();
		}

		// Add Event Listener to Start Button
		$('#starter').click(startGame);

		$("#dj-kitty").click(function(){
			playSound('#dj');
		});

		$("#cat-belly").click(function(){
			playSound('#belly');
		});

		$("#cat-head").click(function() {
			playSound('#head');
		});

	});

		</script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
		</script>

	</body>
	</html>
@stop
