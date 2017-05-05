<?php get_header(); ?>

<div id="awave_top_logo" class="navbar-header">
	<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
</div>

<div class="awave_bg jumbotron">
	<div class="container">
		<div class="page-header">
			<h1>Marknadens enklaste och tryggaste snabbklån!</h1>
		</div>

		<div class="awave_down">
			<span><strong>Erbjudande:</strong></span><br>Just nu kan du låna 1 500 kr i 15 dagar utan ränta och avgifter.
		</div>

		<hr>

		<!-- Choose lånesumma slider -->
		<div id="awave_sumslider" class="awave_slidercontainer">
			<div class="awave_sliderheader">Välj lånesumma</div>
			<div class="awave_slidenumbers">
				<span class="text-left">1 000</span>
				<span class="text-right pull-right">20 000</span>
			</div>

			<div class="awave_sliders">
				<input id="sliderSum" type="text" data-slider-ticks="[1000, 2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000, 11000, 12000, 13000, 14000, 15000, 16000, 17000, 18000, 19000, 20000]" data-slider-min="1000" data-slider-max="20000" data-slider-step="1000" data-slider-value="5000"/>
			</div>

			<span id="sliderSumCurrentSliderValLabel" class="awave_sumheader"><span id="sliderSumSliderVal">5000</span> kr</span>
		</div>

		<!-- Choose låneperiod slider -->
		<div id="awave_periodslider" class="awave_slidercontainer">
			<div class="awave_sliderheader">Välj låneperiod</div>

			<div class="awave_slidenumbers">
				<span class="text-left">30 dagar</span>
				<span class="text-right pull-right">4 år</span>
			</div>

			<div id="awave_periodslider" class="awave_sliders">
				<input id="sliderPeriod" data-slider-id='sliderPeriodSlider' type="text" data-slider-ticks="[1, 2, 3, 4, 5]" data-slider-min="1" data-slider-max="5" data-slider-step="1" data-slider-value="1" />
			</div>

			<span id="sliderPeriodSliderVal" class="awave_sumheader">30 dagar</span>
		</div>

		<!-- Betalningssumma calculations -->
		<div class="awave_ingress">Kostnad: <strong><span id="sumextra">695</span> kr</strong> | Att återbetala: <strong><span id="sumkostnad">5 695</span> kr</strong> | Uppdelat på: <strong><span id="sumper">1</span> <span id="sumfak">faktura</span></strong> á <strong><span id="sumdel">5 695</span> kr</strong> per betalning<br>
			Effektiv ränta: <strong>387 %</strong> | Faktisk ränta: <strong>13.9 %</strong>
		</div>

		<div class="awave_sendbtn">
			<a class="btn btn-primary btn-lg" href="#" role="button"><span>Ansök nu!</span><img src="<?php bloginfo('template_url'); ?>/images/pilar.png" /></a>
		</div>

	</div><!-- .container -->

	<div class="awave_downarrow">
		<a href="#awave_fungerar">
			<img src="<?php bloginfo('template_url'); ?>/images/pil.png" />
		</a>
	</div>

</div><!-- .jumbotron -->

<div class="awave_below container">

	<div id="awave_fungerar" class="row">
		<div class="col-lg-12 text-center"><h3>Så fungerar det</h3></div>
	</div>

	<div class="awave_123 row">
		<div class="col-lg-4 text-center">
			<h3><span class="awave_nr">1</span></h3>
			<hr class="awave_seperator">
			<h4>Välj belopp</h4>
			<p>Välj önskad lånesumma och låneperiod. Låneperiod 30 dagar och 45 dagar återbetalas vid ett tillfälle. Låneperiod 60 dagar återbetalas vid två tillfällen och låneperiod 90 dagar återbetalas vid tre tillfällen. Med 30 dagars mellanrum.</p>
		</div>
		<div class="col-lg-4 text-center">
			<h3><span class="awave_nr">2</h3>
			<hr class="awave_seperator">
			<h4>Fyll i kunduppgifter</h4>
			<p>Fyll i Personnummer, telefon, e-post, inkomster och utgifter m.m. Adressuppgifter inhämtas per automatik, vilket förenklar din ansökan. Är du redan registrerad behöver du inte fylla i telefon och bankuppgifter.</p>
		</div>
		<div class="col-lg-4 text-center">
			<h3><span class="awave_nr">3</span></h3>
			<hr class="awave_seperator">
			<h4>Bekräfta villkor & identitet</h4>
			<p>Se över hela din ansökan och att allt stämmer som lånesumma, låneperiod, inkomster och utgifter m.m. Är du redan registrerad och behöver ändra telefon eller bankuppgifter, kontakta kundtjänst på 
	08-590 757 00.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center"><h3>Tryggt</h3></div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center">
			<p>När du ansöker om smslån hos Nanokredit kan du vara säker på att du är i trygga händer. Vi har erbjudit snabblån sedan 2008 och är idag ett av marknadens mest etablerade företag, med över 60 000 kunder i Sverige. Hos Nanokredit kan du låna från 1000 kr – 10 000 kr i 30, 45, 60 eller 90 dagar. Gemensamt för alla våra snabblån är att kostnaden endast består av ränta vilket gör att du får tillbaka 30 % av hela lånekostnaden för ditt smslån på skatteåterbäringen. Vi står under tillsyn av Finansinspektionen och bedriver tillståndspliktig kreditgivning. Många av våra kunder väljer även att återkomma till Nanokredit när man behöver en tillfällig ekonomisk förstärkning. Vi vill vara det självklara valet för dig. Vi strävar alltid efter att du som kund ska känna dig 100 % trygg hos oss och det är alltid gratis att ansöka om lån hos oss. </p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center"><h3>Tydligt</h3></div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center">
			<p>Vi på Nanokredit är tydliga med informationen gällande våra snabblån. Det är alltid gratis att ansöka om smslån hos oss. Det tillkommer Inga dolda kostnader, Inga uppläggningsavgifter, Inga aviavgifter och Inga ansökningsavgifter. Du betalar endast den kostnad vi tydligt redovisar på hemsidan.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center"><h3>Enkelt</h3></div>
	</div>

	<div class="row">
		<div class="col-lg-12 text-center">
			<p>Det är enkelt att ansöka om smslån hos Nanokredit. Det tar endast någon minut att fylla i din ansökan och du får besked direkt på skärmen. Om du får ditt snabblån beviljat innan kl. 14.00, har du pengar på kontot senast kl. 17.00 samma dag. Efter kl. 14.00 senast kl. 10.00 kommande vardag. Din faktura skickas alltid via e-post om du lämnat en e-post adress vid ansökan, annars sickas den via brev. Vi gör Kreditupplysningen via Bisnode vilket gör att din låneansökan blir helt anonym. Vår kundtjänst är bemannad alla helgfria vardagar mellan kl. 08.00 – 17.00 och du är alltid välkommen att kontakta oss vid frågor eller vid behov av hjälp.</p>
		</div>
	</div>

</div><!-- .awave_below -->

<?php get_footer(); ?>