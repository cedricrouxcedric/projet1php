<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Le caillou</title>
    <link rel="icon" type="image/png" href="pictures/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Gayathri&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Lobster+Two&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css" />
</head>

<body>
<?php include("header.php"); ?>

	<main>
		<section class="banner">
			<h1>
				Bar <br>
				Restaurant<br>
				Concerts <br>
				Jazz<br>
			</h1>
		</section>
		<img src="pictures/logo_square.png" class="logo" alt="logo saxophone sur assiette">
		<section class="introduction">
			<h1 class="titlebig">Le Caillou du Jardin Botanique</h1>
			<p>Situé dans le jardin Botanique de Bordeaux, notre établissement offre des services de bar-restauration et
				organise régulièrement des concerts de Jazz. </p>
			<p>Venez manger ou siroter un verre ....</p>
		</section>
		<section id="Menus" class="transition">
			<div class="transitionBackground">
				<img src="pictures/noteGold.png" class="transitionpicture" alt="notes de musiques">
			</div>
			<div class="transition_title">
				<hr>
				<h1 class="titlebig">Menus</h1>
			</div>
		</section>
		<section class="menu part">
			<img src="pictures/restaurantPicture.jpg" class="picture_mobile picture_desktop" alt="photo du restaurant">
			<div class="menu_main">
				<div class="menu_container">
					<div class="menu_card">
						<h2 class="colored_font">Viandard</h2>
						<p>17€</p>
						<br>
						<p class="colored_font">Plats:</p>
						<p>Magret de canard aux fruits rouges</p>
						<br>
						<p class="colored_font">Dessert: </p>
						<p>Pudding à la mangue</p>
					</div>
					<div class="menu_card">
						<h2 class="colored_font">Vegan</h2>
						<p>12€</p>
						<br>
						<p class="colored_font">Plats:</p>
						<p>Wok Végan Nouilles sautées</p>
						<br>
						<p class="colored_font">Dessert:</p>
						<p>Pudding à la mangue </p>
					</div>
					<br>
				</div>
				<a href="#Reserve" class="button_links"><button type="submit"> Réserver une table </button></a>
			</div>
		</section>
		<section class="transition">
			<div id="Concerts" class="transitionBackground">
				<img src="pictures/noteGold.png" class="transitionpicture" alt="notes de musiques">
			</div>
			<div class="transition_title">
				<hr>
                <div class="concerts">
            <?php include("concerts.php");?>
                </div>
        </section>
		<section id="Reserve" class="transition">
			<div class="transitionBackground">
				<img src="pictures/noteGold.png" class="transitionpicture" alt="notes de musique">
			</div>
			<div class="transition_title">
				<hr>
				<h1 class="titlebig">Réservation</h1>
			</div>
		</section>
		<section class="booking part">
			<form action="form.php"  method="get" class="booking_form">
				<div class="form_items">
                    <label for="email">Entrer votre adresse mail :</label>
                    <input id="mailAdresse" type="text"  name="mailAdresse">
                </div>
                <div class="form_items">
					<label for="clientName"> Votre nom : </label>
					<input id="clientName" type="text" name="clientName">
				</div>
				<div class="form_items">
					<label for="clientFirstname"> Votre prénom : <abbr title="required">*</abbr></label>
					<input id="clientFirstname" type="text" name="clientFirstname">
				</div>
				<div class="form_items">
					<label for="date"> Date : <abbr title="required">*</abbr></label>
					<input id="date" type="date" name="date">
				</div>
				<div class="form_items">
					<label for="message"> Laissez ici votre message nombre de personnes, d'enfants, si besoin de siège
						bébé, ou autre...<abbr title="required">*</abbr></label>
					<textarea id="message" name="message"></textarea>
				</div>
				<button type="submit" >Envoyer une demande de réservation</button>
				<br>


				<span>Compte tenu des nombreuses demandes nous vous confirmerons votre réservation dans les meilleurs
					délais.</span>

			</form>
		</section>
		<section id="Contact" class="transition">
			<div class="transitionBackground">
				<img src="pictures/noteGold.png" class="transitionpicture" alt="notes de musique">
			</div>
			<div class="transition_title">
				<hr>
				<h1 class="titlebig">Nous contacter</h1>
			</div>
		</section>
		<section class="contact part">
			<p>Vous souhaitez vous produire dans notre établissement, rejoindre notre équipe ou simplement nous envoyer
				un message, contactez-nous via le formulaire ci-dessous en sélectionnant l'objet de votre message.</p>
			<form class="options_form">
				<p>
					<label for="object">
						<span>Objet du message:</span>
					</label>
					<select id="object" name="messageobject">
						<option value="artists">Se produire sur la scène du Caillou.</option>
						<option value="recrut">Rejoindre l'équipe.</option>
						<option value="message">Envoyer un message.</option>
					</select>
				</p>
			</form>
			<form>
				<div class="form_items">
					<label for="clientName">
						Votre nom : <abbr title="required">*</abbr></label>
					<input id="client_Name" type="text" name="clientName" />
				</div>
				<div class="form_items">
					<label for="clientFirstname">
						Votre prénom : <abbr title="required">*</abbr></label>
					<input id="client_First_name" type="text" name="clientFirstname" />
				</div>
				<div class="form_items">
					<label for="message">
						Laissez ici votre message</label>
				</div>
				<div class="form_items">
					<textarea id="sendMessage" name="message"></textarea>
				</div>

			</form>
            <button type="submit" onclick="Message_send_two()">Envoyer votre message</button>
		</section>
	</main>

    <?php include("footer.php"); ?>
	<script type="text/javascript" src="index.js"></script>
</body>

</html>