<?php require '../includes/head.php'; ?>
	<body>
		<?php require '../includes/header.php'; ?>
		<div>
			<h2><br /><u> Mes créations :</u><br /></h2>
			<div class="content">
				<div class="liste">
						<ol id="menu1" ><u>Vidéos du site</u>
							<li>
								<a onclick='showvideo(document.getElementById('video1'));' style="cursor:pointer;">Kyary Pamyu Pamyu
								</a>
								<ul id="video1" style="display:none;"><iframe width="560" height="315" src="https://www.youtube.com/embed/yzC4hFK5P3g" frameborder="0" allowfullscreen></iframe></ul>
							</li>
							<li>
								<a onclick='showvideo(document.getElementById('video2'));'' style="cursor:pointer;">Diggy Diggy Hole
								</a>
								<ul id="video2" style="display:none;"><iframe width="560" height="315" src="https://www.youtube.com/embed/ytWz0qVvBZ0" frameborder="0" allowfullscreen></iframe></ul>
							</li>
							<li>
								<a onclick='showvideo(document.getElementById('video3'));' style="cursor:pointer;">The GAG Quartet
								<br />Le Internet Medley</a>
								<ul id="video3" style="display:none;"><iframe width="560" height="315" src="https://www.youtube.com/embed/mghhLqu31cQ" frameborder="0" allowfullscreen></iframe></ul>
							</li>
							<li>
								<a onclick='showvideo(document.getElementById('video4'));' style="cursor:pointer;">La chanson des licornes (Natoo)
								</a>
								<ul id="video4" style="display:none;"><iframe width="560" height="315" src="https://www.youtube.com/embed/a021WhobrLc" frameborder="0" allowfullscreen></iframe></ul>
							</li>
							<li>
								<a onclick='showvideo(document.getElementById('video5'));' style="cursor:pointer;">Point Culture sur les CreepyPasta
								<br />(Spécial Halloween)
								</a>
								<ul id="video5" style="display:none;"><iframe width="560" height="315" src="https://www.youtube.com/embed/xnywr1eFZqk" frameborder="0" allowfullscreen></iframe></ul>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</body>
<?php require '../includes/footer.php'; ?>