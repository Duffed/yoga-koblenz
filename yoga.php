<!doctype html>
<html>
	<head>		
		<title>Rosi Kracht-Zech | Yoga in der Vorstadt</title>	
		<?php include('include/head.html') ?>
		<script>
			$(document).ready(function(){
				$("#nav_yoga").addClass("current_page");

				$("a.yogasutra_link").click(function(){
					$("div.yogasutra_container").slideDown("slow");
					$("a.yogasutra_hide").hide();
				});
			});
		</script>
	</head>
<body>
	<?php include('include/header.php') ?>
	<!-- content -->
	<h2>Hatha Yoga</h2>	
	<p>Yoga ist ein Übungsweg, der über mehrere Jahrtausende hinweg in Indien entwickelt und überliefert
	wurde. Der Sanskritbegriff "Yoga" leitet sich von "Joch" ab, was anschirren, vereinigen
	bedeutet. Die spirituelle Zielsetzung im Yoga ist die Vereinigung mit dem "höchsten Selbst", ist
	also ein Weg der Selbsterkenntnis und der inneren Sammlung.</p>

	<!-- content -->
	<?php include('include/footer.html') ?>
</body>
</html>
