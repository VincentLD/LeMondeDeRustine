<?php get_header(); ?>
<!-- 🌀🌀🌀 HEADER 🌀🌀🌀 -->
<header class="header">
	<img
		src=" <?= get_template_directory_uri() . '/images/header.jpg' ?>"
		alt="Béatrice avec Sally"
		class="header__bg"
	/>
	<img
		src="<?= get_template_directory_uri() . '/images/logo.png' ?>" 
		alt="Logo du Monde De Rustine"
		class="header__logo"
	/>
	<nav class="navbar">
		<ul class="nav__links">
			<li class="navbar__item">
				<a href="#" class="nav__link">
					<span class="link">Accueil</span>
					<i class="fas fa-home"></i>
				</a>
			</li>
			<li class="navbar__item">
				<a href="#" class="nav__link">
					<span class="link">Qui suis-je ?</span>
					<i class="fas fa-user"></i>
				</a>
			</li>
			<li class="navbar__item">
				<a href="#" class="nav__link">
					<span class="link">Services</span>
					<i class="fas fa-paw"></i>
				</a>
			</li>
			<li class="navbar__item">
				<a href="#" class="nav__link">
					<span class="link">Contact</span>
					<i class="fas fa-envelope"></i>
				</a>
			</li>
		</ul>
		<button class="burger-bars">
			<span class="burger-bar"></span>
		</button>
	</nav>
	<h1 class="header__title">
		Médiation par l'animal
		<span class="header__title--block"
			>Comportementaliste canin et félin</span
		>
		<span class="header__title--block">Pet-sitting</span>
	</h1>
</header>
<!-- 🌀🌀🌀 QUI SUIS-JE 🌀🌀🌀 -->
<section class="about">
	<img
		class="about__path"
		src="<?= get_template_directory_uri() . '/images/paw-path.png' ?>"
		alt="pattes de chien"
	/>
	<h2 class="about__title">Qui suis-je ?</h2>
	<div>
		<div class="about__imgWrapper">
			<div class="about__imgSubWrapper">
				<img
					class="about__img"
					src="<?= get_template_directory_uri() . '/images/qui-suis-je.jpg' ?>"
					alt="Béatrice et Rustine"
				/>
				<p class="about__caption">Béatrice & Rustine</p>
			</div>
		</div>
		<div class="about__contentWrapper">
			<p class="about__content">
				Initialement destinée à une carrière commerciale avec un DUT
				techniques de commercialisation en poche, je reprends mes études
				d’éducatrice de jeunes enfants, désireuse d’exercer un métier en
				lien avec l’accompagnement et l’humain.
			</p>
			<p class="about__content">
				Passionnée et entourée d’animaux depuis ma plus tendre enfance, je
				ressens le besoin et l’envie de me lancer dans une nouvelle
				aventure : celle d’allier ma passion avec mes compétences
				professionnelles acquises durant toutes ces années.
			</p>
		</div>
	</div>
	<div class="about__buttonWrapper">
		<a href="#" class="button">En savoir plus</a>
	</div>
</section>
<!-- 🌀🌀🌀 SERVICES    🌀🌀🌀 -->
<section class="services">
	<div class="services__wrapper">
		<h2 class="services__title">Les services proposés</h2>
		<i class="fa fa-chevron-left chevron chevron-left"></i>
		<i class="fa fa-chevron-right chevron chevron-right"></i>
		<ul class="dots"></ul>
		<div class="wrapper">
			<div class="slider-container">
				<div class="card--desktop">
					<div class="card service slide">
						<div class="card__header">
							<p class="card__title">Comportementaliste canin</p>
						</div>
						<div class="card__content">
							<img
								class="card__image"
								src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?>"
								alt=""
							/>
							<p>
								Mes interventions de « relation d’aide », effectuées
								exclusivement “en positif”, c’est à dire sans rapport de
								force avec l’animal, sont sans jugement, avec bienveillance
								et empathie.
								<span class="card__content--block">
									Chaque individu, qu’il s’agisse du chat ou de l’humain,
									est unique. Ce qui explique la spécificité de toute
									relation homme/chat et l’importance de vous proposer des
									solutions personnalisées.
								</span>
							</p>
						</div>
						<div class="card__footer">
							<a href="#" class="button">En savoir plus</a>
						</div>
					</div>
					<img
						class="card__image--desktop"
						src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?>"
						alt=""
					/>
				</div>
				<div class="card--desktop">
					<div class="card service slide">
						<div class="card__header">
							<p class="card__title">Comportementaliste canin</p>
						</div>
						<div class="card__content">
							<img
								class="card__image"
								src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
								alt=""
							/>
							<p>
								Mes interventions de « relation d’aide », effectuées
								exclusivement “en positif”, c’est à dire sans rapport de
								force avec l’animal, sont sans jugement, avec bienveillance
								et empathie.
								<span class="card__content--block">
									Chaque individu, qu’il s’agisse du chat ou de l’humain,
									est unique. Ce qui explique la spécificité de toute
									relation homme/chat et l’importance de vous proposer des
									solutions personnalisées.
								</span>
							</p>
						</div>
						<div class="card__footer">
							<a href="#" class="button">En savoir plus</a>
						</div>
					</div>
					<img
						class="card__image--desktop"
						src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
						alt=""
					/>
				</div>
				<div class="card--desktop">
					<div class="card service slide">
						<div class="card__header">
							<p class="card__title">Comportementaliste canin</p>
						</div>
						<div class="card__content">
							<img
								class="card__image"
								src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
								alt=""
							/>
							<p>
								Mes interventions de « relation d’aide », effectuées
								exclusivement “en positif”, c’est à dire sans rapport de
								force avec l’animal, sont sans jugement, avec bienveillance
								et empathie.
								<span class="card__content--block">
									Chaque individu, qu’il s’agisse du chat ou de l’humain,
									est unique. Ce qui explique la spécificité de toute
									relation homme/chat et l’importance de vous proposer des
									solutions personnalisées.
								</span>
							</p>
						</div>
						<div class="card__footer">
							<a href="#" class="button">En savoir plus</a>
						</div>
					</div>
					<img
						class="card__image--desktop"
						src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
						alt=""
					/>
				</div>
				<div class="card--desktop">
					<div class="card service slide">
						<div class="card__header">
							<p class="card__title">Comportementaliste canin</p>
						</div>
						<div class="card__content">
							<img
								class="card__image"
								src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
								alt=""
							/>
							<p>
								Mes interventions de « relation d’aide », effectuées
								exclusivement “en positif”, c’est à dire sans rapport de
								force avec l’animal, sont sans jugement, avec bienveillance
								et empathie.
								<span class="card__content--block">
									Chaque individu, qu’il s’agisse du chat ou de l’humain,
									est unique. Ce qui explique la spécificité de toute
									relation homme/chat et l’importance de vous proposer des
									solutions personnalisées.
								</span>
							</p>
						</div>
						<div class="card__footer">
							<a href="#" class="button">En savoir plus</a>
						</div>
					</div>
					<img
						class="card__image--desktop"
						src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
						alt=""
					/>
				</div>
				<div class="card--desktop">
					<div class="card service slide">
						<div class="card__header">
							<p class="card__title">Comportementaliste canin</p>
						</div>
						<div class="card__content">
							<img
								class="card__image"
								src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
								alt=""
							/>
							<p>
								Mes interventions de « relation d’aide », effectuées
								exclusivement “en positif”, c’est à dire sans rapport de
								force avec l’animal, sont sans jugement, avec bienveillance
								et empathie.
								<span class="card__content--block">
									Chaque individu, qu’il s’agisse du chat ou de l’humain,
									est unique. Ce qui explique la spécificité de toute
									relation homme/chat et l’importance de vous proposer des
									solutions personnalisées.
								</span>
							</p>
						</div>
						<div class="card__footer">
							<a href="#" class="button">En savoir plus</a>
						</div>
					</div>
					<img
						class="card__image--desktop"
						src="<?= get_template_directory_uri() . '/images/service-1.jpg' ?> "
						alt=""
					/>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- 🌀🌀🌀 CONTACT     🌀🌀🌀 -->
<section class="contact">
	<div class="wrapper">
		<div class="left">
			<img class="left__image" src="<?= get_template_directory_uri() . '/images/paw-contact-left.png' ?> " alt="patte de chien">
			<h2 class="contact__title">Contact</h2>
			<p class="contact__subtitle">
				Une question ?
				<span class="contact__subtitle--block"
					>N'hésitez pas à me contacter</span
				>
			</p>
			<form action="" class="form">
				<div class="form__group">
					<label for="name" class="form__label">Nom</label>
					<input
						type="text"
						name="name"
						class="form__input"
						id="name"
						required
					/>
				</div>
				<div class="form__group">
					<label for="email" class="form__label">Email</label>
					<input
						type="email"
						name="email"
						class="form__input"
						id="email"
						required
					/>
				</div>
				<div class="form__group">
					<label for="message" class="form__label">Message</label>
					<textarea
						rows="6"
						resize="none"
						class="form__input form__input--textarea"
						name="message"
						id="message"
					></textarea>
				</div>
				<p class="form__message">
					En soumetant ce formulaire, je certifie avoir pris connaissance de
					la <a href="#">politique de confidentialité</a>.
				</p>
				<button type="submit" class="form__submit">Envoyer</button>
			</form>
		</div>
		<div class="right">
			<img class="right__image" src="<?= get_template_directory_uri() . '/images/paw-contact.png' ?> " alt="pattes de chiens">
		</div>
	</div>
</section>
<?php get_footer(); ?>