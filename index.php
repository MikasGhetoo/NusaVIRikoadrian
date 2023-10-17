<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nusa V - Home</title> <!-- < set your community's name here -->
	<link rel="shortcut icon" href="backend/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/backend/css/main.css"> <!-- do not touch this, unless you know what u are doing.. -->
	<script src="https://kit.fontawesome.com/af48d48999.js" crossorigin="anonymous"></script>
    <meta property="og:title" content="Nusa V Indonesia"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:description" content="Go patrol or get fired.."> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:image" content="/backend/img/setting.php"> <!-- meta if u send links on discord etc includes this -->
    <meta property="og:url" content=""> <!-- meta if u send links on discord etc includes this -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
		function copyToClipboard(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).text()).select();
		document.execCommand("copy");
		$temp.remove();
		}
	</script>
</head>
<body>
	<header>
		<div class="wrapper">
			<nav>
				<!-- <img src="logo" alt="header_logo"> --> <!-- set your community logo here make sure to hide the community name if you do change=! --> 
				<h2>Nusa V <span>Indonesia</span></h2> <!-- set your community name here --> 
				<div class="right">
					<a href="#"> <button class="custom-button custom-button-primary">Forum</button></a>  <!-- change the discord link to your discord's server link -->
					<a href="https://www.discord.gg/XTvjfhQzDz"><button class="custom-button custom-button-primary">Discord</button></a>  <!-- change the discord link to your discord's server link -->
					<a href="/team.php"><button class="custom-button custom-button-primary">Staff Team</button></a> <!-- The Staff Team Page! -->
					<a href="/gallery.php"><button class="custom-button custom-button-primary">Our Photos</button></a> <!-- to be added to next update -->
					<!-- <a href="/partners.php"><button class="custom-button custom-button-primary">Our Partners</button></a> -->

				</div>
			</nav>
		</div>
	</header>
	<main>
		<div class="wrapper">
			<div class="section-promo">
				<div class="promo-background"></div>
			</div>
			<div class="section-tutorial">
				<h2>Let's get started with the basics.</h2> 
				<div class="wrapper-tutorial">
					<div class="section-tutorial-container">
						<div class="rtr">
							<h3><i class="fas fa-book"></i>Read the Rules</h3>
							<p>Server Rules Baisc Set Here!.</p> <!-- set here requested stuff you can do alot of things here visit w3schools -->
						</div>
						<div class="jts">
							<h3><i class="fas fa-sign-in-alt"></i>Join the Server</h3>
							<h4><span class="lnumbers1">1.</span> Open FiveM</h4>
							<h4><span class="lnumbers">2.</span> Click & Paste <button id="serverip" onclick="copyToClipboard('#serverip')">connect gate.nusav.id</button></h4> <!-- set server ip here -->
							<h4><span class="lnumbers">3.</span> Connect to the Server</h4>
						</div>
						<div class="dsc">
							<h3><i class="fab fa-discord"></i>Join our Discord</h3>
							<p>Mengobrol dengan sesama anggota dan menjadi bagian dari komunitas, serta menerima informasi & pembaruan terkini dengan bergabung di server perselisihan kami!</p>
							<a href="https://www.discord.gg/nusav"><i class="fab fa-discord"></i>Nusa V Indonesia</a>
						</div>
						<div class="pab">
							<h3><i class="fas fa-helicopter"></i>Police</h3>
							<p>Ayo Patroli Bersama Kami Dan Layani Warga Nusa V!</p> <!-- add some info about patrolling on your server -->
						</div>
					</div>
				</div>
			</div>







			<!-- NEWS TITLES HERE 

				To Make More Slots, Just Copy And Paste From <div class="section-extrea"> to the next lot of </div> and then repaste this, it will then create a new section! 
				ADD <br> </br> to make a gap between these sections if you want a gap!

			--> 

			<div class="section-extra">
				<h2>Read the latest news.</h2>
				<div class="section-extra-flex">
					<div class="img1"> <!-- community image 1 change image check css -->
						<h3>Edukasi</h3>
						<p>Kami dari Nusa V education team akan membuka slot untuk edukasi kepada warga kota tercinta dalam waktu terdekat jadi jangan lupa untuk siapkan materi kalian ya! <p>
					</div>


					<div class="img2"> <!-- community image 2 change image check css -->
						<h3>Level</h3>
						<p>Hai penduduk Nusa Tercinta, mulai besok kami akan menerapkan sistem level dalam seluruh aktivitas yang kalian kerjakan namun secara bertahap.<p>
					</div>


					<div class="img3"> <!-- community image 3 change image check css -->
						<h3>Open Beta</h3>
						<p>Nusa V, dengan gembira kami ingin mengumumkan bahwa pada tanggal 13 Mei 2023 server kami telah masuk ke tahap Open Beta Test.</div>
					

				</div>

				
			</div>

				
			</div>
			
		</div>
	</main>


    <footer>
		<div class="wrapper">
			<p><h2>  [Nusa V Indonesia] </h2><br><h3>© 2023 Made By DzullKz</h3></p>
		</div>
	</footer>


</body>
</html>
