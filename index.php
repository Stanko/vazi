<!DOCTYPE html>
<html>
<head>
	<title>Važi - Misli zdravo - Zdrava hrana</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<meta http-equiv="Content-Type" content="text/html charset=utf-8"/>

	<link rel="stylesheet" href="css/skyblue.css">

	<link rel="icon" type="image/x-icon" href="img/icon.png" />
    <link rel="shortcut icon" href="img/icon.png">

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

	<script src="js/slider.js"></script>
	<script src="js/main.js"></script>

	<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<script src="js/jquery.corner.js"></script>
		<script src="js/ie8.js"></script>
		<link rel="stylesheet" href="css/ie8.css">
		<link rel="stylesheet" href="http://Open+Sans:300&subset=latin,latin-ext">
	    <link rel="stylesheet" href="http://Open+Sans:700&subset=latin,latin-ext">
	    <link rel="stylesheet" href="http://Open+Sans:800&subset=latin,latin-ext">
	<![endif]-->
</head>
<body>

<div class="header">
	<div class="cart">
		KORPA
	</div>
	<div class="menu">
		<span>
			<a href="#">Početna</a><a class="active" href="#menu">Meni</a><a class="posebneLink" href="javascript:void(0)">Posebne porudžbine</a><a href="#">Kontakt</a>
			<div class="contact">064 / 576 55 88</div>
			<!-- <div class="lava"></div> -->
		</span>
		<!-- <a href="#" class="cartLink">Korpa</a> -->

	</div>
	<img class="logo" src="img/logo.png" />
	<div class="waves"></div>
</div>

<div class="container hero">
	<div class="row marginBottom1em zdrava">
		<div class="span6 textRight">
			<h2>Zdrava hrana je i ukusna hrana!</h2>
			<div class="oldSaying">(Ona stara poslovica više ne važi)</div>
		</div>
		<div class="span6">
			<p>
			Napravite mesta za malo novih boja mirisa i ukusa, a mi ćemo za Vas da
			oslikamo nove obroke, koji ce biti zdravi, ukusni i maštoviti.

			</p>
		</div>
	</div>
	<div class="textCenter"><img src="img/kruzici.png" /></div>
</div>

<div class="lightStripe textCenter">
	<div class="container">
		<p>
			Nudimo Vam izvrsnu hranu pripremljenu u domaćoj radinosti.<br/>
			Svi obroci su vegeterijanski i pravljeni su od svežih namirnica, mahunarki, žitarica, povrća i voća.<br/>
			Za svaki dan imamo pripremljen izbalansiran, jedinstven obrok.
		</p>

		<h2 id="menu">
			MENI
		</h2>

		<div class="round">
			<a href="javascript:void(0)" class="goto" data-index="1">
				<img src="img/circle/1.jpg" />
				Ponedeljak
			</a>
			<a href="javascript:void(0)" class="goto" data-index="2">
				<img src="img/circle/2.jpg" />
				Utorak
			</a>
			<a href="javascript:void(0)" class="goto" data-index="3">
				<img src="img/circle/3.jpg" />
				Sreda
			</a>
			<a href="javascript:void(0)" class="goto" data-index="4">
				<img src="img/circle/4.jpg" />
				Četvrtak
			</a>
			<a href="javascript:void(0)" class="goto" data-index="5">
				<img src="img/circle/5.jpg" />
				Petak
			</a>
			<a href="javascript:void(0)" class="goto" data-index="6">
				<img src="img/circle/6.jpg" />
				Subota
			</a>
		</div>
	</div>
</div>

<div class="darkStripe">
	<div class="container">
		<div class="slider">
			<? include('ponedeljak.php') ?>
			<? include('utorak.php') ?>
			<? include('sreda.php') ?>
			<? include('cetvrtak.php') ?>
			<? include('petak.php') ?>
			<? include('subota.php') ?>
		</div>
	</div>
</div>

<div class="container height100">
	<div class="row">
		<div class="span6">
			<h3 class="smuti smuti1"></h3>
		</div>
		<div class="span6">
			<h3 class="kasice kasice1"></h3>
		</div>
	</div>
</div>

<div class="darkStripe">
	<div class="container smutiKasu">
		<div class="row">
			<div class="span6">
				<div class="item">
					<div class="name">
						Malina, kranč žitarice, banana, lan
					</div>
				</div>
				<div class="item">
					<div class="name">
						Crveno voće, kranč žitarice, banana, lan
					</div>
				</div>
				<div class="item">
					<div class="name">
						Sezonsko voće, kranč žitarice, med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Opcije za smutije
						<div class="description marginTop10">
						- Bezmasni jogurt    250 RSD</br/>
					    - Mleko   250 RSD</br>
					    - Sojino mleko   300 RSD
						</div>
					</div>
				</div>
				<div class="textRight">
					<img src="img/kasica.jpg" /><br/>
					<img src="img/smuti.jpg" />
				</div>
			</div>
			<div class="span6">
				<div class="item">
					<div class="name">
						Ječam, sezonsko voće, orašasti plodovi, med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Pirinač, jabuka, suvo grožđe, orašasti plodovi, cimet, med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Pšenica, crveno voće, suve brusnice, muskatni oraščić, med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Kukuruzni griz, proso, suva brusnica, bademi, med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Kukuruzni griz, proso, suva kajsija, suvo grožđe, bademi, med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Mix pahuljica (ječmene, ovsene, pšenične,ražene, spelta), crveno voće, badem,cimet,med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Mix pahuljica (ječmene, ovsene, pšenične,ražene, spelta), suvo voće, cimet, med
					</div>
				</div>
				<div class="item">
					<div class="name">
						Kukuruzni griz, proso, spanać, sir, morska so
					</div>
				</div>

				<div class="item">
					<div class="name">
						Opcije za kašice
						<div class="description marginTop10">
						- Kuvano na mleku 300 RSD<br/>
						- Kkuvano na sojinom mleku  350RSD<br/>
						- Kuvano na vodi 250 RSD<br/><br/>
					   	* umesto meda, možemo kašicu zasladiti žutim šećerom po želji
					   	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer container">
	<div class="row">
		<div class="span4 offset2 textRight">
			<p>
				VOLIMO PRIRODU I ČUVAJMO JE, ŽIVOTINJE, BRINIMO O NJIMA, I LJUDE, NASMEŠIMO SE JEDNI DRUGIMA!
			</p>
			<p>
				MISLIMO ZDRAVO!
			</p>
		</div>
		<div class="span4">
			<img src="img/logo2.png" />
		</div>
	</div>
</div>

<div class="posebna">
	<div class="center">
		<h3>POSEBNE PORUDŽBINE</h3>
		<p>
			Posna pita od pečuraka<br/>
			(integralne kore, luk, pečurke, sojine ljuspice, kisela voda, susam, ulje, začini)
		</p>
		<p>
			Posne slatke pite od bundeve, šljive ili jabuke
		</p>
		<h4>Pleh: 800 RSD</h4>

	</div>
</div>


</body>
</html>