<!doctype html>
<html>
	<head>		
		<title>Rosi Kracht-Zech | Yoga in der Vorstadt</title>	
		<?php include('include/head.html') ?>
		<script>
			$(document).ready(function(){
				$("#nav_yoga").addClass("current_page");

				$("#yogasutra").click(function(){
					$("div.yogasutra_container").slideToggle("fast");
					$("p.yogasutra_hide").toggle("fast");
				});
			});
		</script>
	</head>
<body>
	<?php include('include/header.html') ?>
	<!-- content -->
	<h2>Hatha Yohga</h2>	
	<p>Yoga ist ein Übungsweg, der über mehrere Jahrtausende hinweg in Indien entwickelt und überliefert
	wurde. Der Sanskritbegriff “Yoga“ leitet sich von „Joch“ ab, was anschirren, vereinigen
	bedeutet. Die spirituelle Zielsetzung im Yoga ist die Vereinigung mit dem „höchsten Selbst“, ist
	die Erfahrung des tiefen Kerns unsers Bewustseins.</p>

	<h2>Yoga Geschichte</h2>
	<p>Die Grundlehrschrift des Yoga ist das <a href="#yogasutra">Yogasutra</a> von Patanjali, die vor etwa 2000 Jahren
	verfasst wurde. Es ist die Lehrschrift vom menschlichen Geist und seinen Transformationsmöglichkeiten,
	zeitlos, traditionsübergreifend und universell anwendbar. Hier fi nden wir Empfehlungen,
	wie wir durch unser Verhalten zu innerem Frieden fi nden und ein harmonisches soziales
	Leben führen können. <br>
	Das <a href="#yogasutra">Yogasutra</a> basiert auf Erfahrung und gibt uns zahlreiche mentale Übungen, die uns in
	Richtung essentielle Freiheit führen möchten.</p>

	<p>Erst im 14. Jahrhundert ist die Hatha-Yoga-Pradipika geschrieben worden. Hier sind zahlreiche
	Körperhaltungen, auch mit ihren heilenden Kräften, beschrieben. Mit diesem Quellentext wurden
	erstmals Körperübungen in den Schwerpunkt der Yogapraxis gesetzt.</p>

	<h2>Modernes Yoga</h2>
	<p>T Krishnamacharya , einer der bedeutendsten Yogameister des 20. Jahrhundert, war Pionier
	in Bezug auf die Wiederbelebung der alten Yogalehren. Er passte das Wissen des Yoga an
	die veränderten Lebensumstände und Bedürfi sse des modernen Menschen an. Er lehrte die
	großen Yogameister von heute, wie seinen Sohn TKV Desikachar, BKS Iyengar, Sri Pattabhi Jois
	und viele mehr.</p>
	<p>Die unterschiedlichen Yogastile gehen auf die verschiedenen Lehrer zurück, wie zum Beispiel
	„Iyengar- Yoga“ auf BKS Iyengar, hinter „Ashtanga-Yoga“ steht Sri Patthabhi Jois, „Viniyoga“
	wird häufi g für die Arbeit von TKV Desikachar benutzt.</p>
	<p>Hatha-Yoga ist ein Begriff, mit dem alle Yogarichtungen bezeichnet werden, die Körperarbeit
	integrieren.</p>
	<p>Yoga ist ein wunderbar ganzheitlicher Übungsweg. <br>
	Ich arbeite in <a href="mein_yoga.php">meinem Yoga Stil</a> im Geiste des Yoga-Sutras. So wie Desikachar betont, sollte die
	Art und Weise des Übens uns „näher zu uns selbst führen“.</p>

	<h2 id="yogasutra" class="pointer">Yogasutra</h2>
	<p class="yogasutra_hide">...</p>
	<div class="yogasutra_container">
		
		<p>Patanjali, der bedeutendste Lehrer des Yoga, verfasste um Christi Geburt das Yogasutra.
		Sutra bedeutet Faden und ist eine Dichtungsform des Sanskrit, der alten Sprache Indiens.
		Es ist mit nur 195 Sätzen sehr kurz und jeder einzelne Satz ist sehr gehaltvoll.
		Der Zusammenhang der Sätze gleicht einer Perlenkette, aus einem Faden bestehend, der einzelne
		kostbare Perlen zusammenhält.</p>

		<p>In den vergangenen beiden Jahrtausende gab es viele Kommentare zum Yogasutra.
		R.Sriram hat 2002 das Yogasutra im Kontext der Moderne klar übersetzt und erläutert.
		„In vier Kapiteln geht es darum, das meinende, denkende Selbst zu erforschen und zu verstehen.
		Das Yogastura inspiriert uns, ihm auf die Schliche zu kommen und einen klaren Weg aus
		Schwierigkeiten zu fi nden. Es bietet viele Lösungsmodelle für unterschiedliche Fragen, die sich
		auch in unserem modernen Leben stellen.“</p>

		<p>Im zweiten der insgesamt vier Kapitel beschreibt Patanjali den bekannten achtgliedrigen Pfad
		des Yoga:</p>

		<table>
			<tr>
				<th>1. Yamas</th>
				<td>Verhaltensweisen, die ein friedliches Lebens im Einklang mit sich selbst und
					der Welt fördern: <br>
					Gewaltlosigkeit, Wahrhaftigkeit, Nicht-Stehlen, Mäßigung, Nicht Anhäufen</td>
			</tr>
			<tr>
				<th>2. Niyamas</th>
				<td>Qualitäten, die unsere persönliche Entwicklung fördern: <br>
					Reinheit, Zufriedenheit, Disziplin, Selbststudium, Hingabe</td>
			</tr>
			<tr>
				<th>3. Asana</th>
				<td>eine stabile, angenehme Sitzhaltung</td>
			</tr>
			<tr>
				<th>4. Pranayama</th>
				<td>Atemführung</td>
			</tr>
			<tr>
				<th>5. Pratyahara</th>
				<td>das Zurückziehen der Sinne</td>
			</tr>
			<tr>
				<th>6. Dharana</th>
				<td>Konzentration</td>
			</tr>
			<tr>
				<th>7. Dhyana</th>
				<td>Meditation</td>
			</tr>
			<tr>
				<th>8. Samadhi</th>
				<td>Glückseligkeit, vollkommene Erkenntnis, Einheit</td>
			</tr>
		</table>

		<p>und gibt Anleitung zu Körperübungen: <br>
		a) kraftvoll üben und dabei leicht und verkrampft bleiben, <br>
		b) die Aufmerksamkeit des Geistes nicht verändern, sondern auf etwas Konstantes ausrichten.</p>
	</div>
	<!-- content -->
	<?php include('include/footer.html') ?>
</body>
</html>