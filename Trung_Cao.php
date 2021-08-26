<?php
	//Variables
	$name = "Trung Cao";
	$dream_profession = "Full-stack Developer";
	$dream_company = "Apple";
	$email = "CAOT1@nku.edu";
	$short_intro = "Hi everyone! My name is Trung Cao. I am an international student from Vietnam. I am currently a junior in Computer Science and Applied Software Engineering. My dream job is a Full-stack Developer. I am working as a Teaching Assistant for CSC 260 – Object-Oriented Programming with Dr. Frank and as a tutor at NKU PLUS Learning. I am also doing research and projects with professors to develop websites and web application. I am taking the ASE 230 – Server-side Programming to have a deeper insight into back-end development.";
	$goal = "My goal for this class is that I can develop content management system using both front-end and back-end at the end of this course.";
	$skill1 = "Java";
	$value1 = "85";
	$skill2 = "JavaScript";
	$value2 = "80";
	$skill3 = "Node.js & Express.js";
	$value3 = "75";
	$skill4 = "HTML5 & CSS3 & Bootstrap";
	$value4 = "90";
	$skill5 = "SQL";
	$value5 = "60";
	$fun_fact = "I somehow love coding... like a lot. I can spend hours sitting in front of my computer with a coffee (of course) coding (that sounds nerdy but... meh). I also love photography and videography."; 
?>
<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
	integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
	integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

<body>
	<link rel="stylesheet" href="assets/css/detail.css" />
	<?php
		echo "<title>ASE 230 - $name</title>";
	?>
	<a href="./index.php" style="text-decoration: none;">
		<button class="btn pull-left back-btn">
			<span class="material-icons">arrow_back_ios</span>
			<span>Back</span>
		</button>
	</a>
	<div class="container text-center mb-5">
		<?php
			echo "<h1>This is ASE 230 - $name</h1>";
		?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6">
				<div class="mb-2">
					<img class="w-100" src="./assets/images/IMG_0675.jpg" alt="">
				</div>
				<div class="mb-2 d-flex">
					<h4 class="font-weight-normal">
						<?php
							echo $name;
						?>
					</h4>
					<div class="social d-flex ml-auto">
						<p class="pr-2 font-weight-normal">Follow on:</p>
						<a href="https://www.facebook.com/thtrungid/" class="text-muted mr-1" target="_blank">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="https://twitter.com/" class="text-muted mr-1" target="_blank">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="https://www.instagram.com/jayjason.c/" class="text-muted mr-1" target="_blank">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="https://www.linkedin.com/in/trungcao/" class="text-muted" target="_blank">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
				</div>
				<div class="mb-2">
					<ul class="list-unstyled">
						<li class="media">
							<span class="w-30 text-black font-weight-normal">Dream
								profession: </span>
							<label class="media-body">
								<?php
									echo $dream_profession;
								?>
							</label>
						</li>
						<li class="media">
							<span class="w-30 text-black font-weight-normal">Dream company: </span>
							<label class="media-body">
								<?php
									echo $dream_company;
								?>
							</label>
						</li>
						<li class="media">
							<span class="w-30 text-black font-weight-normal">Email: </span>
							<label class="media-body">
								<?php
									echo $email;
								?>
							</label>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-6 pl-xl-3">
				<h5 class="font-weight-normal">Short intro</h5>
				<p>
					<?php
						echo $short_intro;
					?>
				</p>
				<div class="my-2 bg-light p-2">
					<p class="font-italic mb-0">
						<?php
							echo $goal;
						?>
					</p>
				</div>
				<div class="mb-2 mt-2 pt-1">
					<h5 class="font-weight-normal">Top skills</h5>
				</div>
				<div class="py-1">
					<div class="progress">
						<?php
							echo "<div class=\"progress-bar\" role=\"progressbar\" style=\"width:$value1%\"
							aria-valuenow=\"$value1\" aria-valuemin=\"0\" aria-valuemax=\"100\">
								<div class=\"progress-bar-title\">$skill1</div>
								<span class=\"progress-bar-number\">$value1%</span>
							</div>";
						?> 
					</div>
				</div>
				<div class="py-1">
					<div class="progress">
						<?php
							echo "<div class=\"progress-bar\" role=\"progressbar\" style=\"width:$value2%\"
							aria-valuenow=\"$value2\" aria-valuemin=\"0\" aria-valuemax=\"100\">
								<div class=\"progress-bar-title\">$skill2</div>
								<span class=\"progress-bar-number\">$value2%</span>
							</div>";
						?> 
					</div>
				</div>
				<div class="py-1">
					<div class="progress">
						<?php
							echo "<div class=\"progress-bar\" role=\"progressbar\" style=\"width:$value3%\"
							aria-valuenow=\"$value3\" aria-valuemin=\"0\" aria-valuemax=\"100\">
								<div class=\"progress-bar-title\">$skill3</div>
								<span class=\"progress-bar-number\">$value3%</span>
							</div>";
						?> 
					</div>
				</div>
				<div class="py-1">
					<div class="progress">
						<?php
							echo "<div class=\"progress-bar\" role=\"progressbar\" style=\"width:$value4%\"
							aria-valuenow=\"$value4\" aria-valuemin=\"0\" aria-valuemax=\"100\">
								<div class=\"progress-bar-title\">$skill4</div>
								<span class=\"progress-bar-number\">$value4%</span>
							</div>";
						?> 
					</div>
				</div>
				<div class="py-1">
					<div class="progress">
						<?php
							echo "<div class=\"progress-bar\" role=\"progressbar\" style=\"width:$value5%\"
							aria-valuenow=\"$value5\" aria-valuemin=\"0\" aria-valuemax=\"100\">
								<div class=\"progress-bar-title\">$skill5</div>
								<span class=\"progress-bar-number\">$value5%</span>
							</div>";
						?> 
					</div>
				</div>
				<h5 class="font-weight-normal">Fun fact</h5>
				<p>
					<?php
						echo $fun_fact;
					?>
				</p>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
		crossorigin="anonymous"></script>