<?php
get_header();
?>
	<div id="main-content">
		<div class="container">
			<?php
			ob_start();
			include 'images/the-map.svg';
			$map = ob_get_clean();
			echo $map;
			$siteUrl = site_url();

			?>
			<script>
				(function () {
					var states = {
						'map_1': '/locations/alabama', // AL
						'map_2': '/locations/alaska', // AK
						'map_3': '/locations/arizona', // AZ
						'map_4': '/locations/arkansas', // AR
						'map_5': '/locations/california', // CA
						'map_6': '/locations/colorado', // CO
						'map_7': '/locations/connecticut', // CT
						'map_8': '/locations/delaware', // DE
						'map_9': '/locations/florida', // FL
						'map_10': '/locations/georgia', // GA
						'map_11': '/locations/hawaii', // HI
						'map_12': '/locations/idaho', // ID
						'map_13': '/locations/illinois', // IL
						'map_14': '/locations/indiana', // IN
						'map_15': '/locations/iowa', // IA
						'map_16': '/locations/kansas', // KS
						'map_17': '/locations/kentucky', // KY
						'map_18': '/locations/louisiana', // LA
						'map_19': '/locations/maine', // ME
						'map_20': '/locations/maryland', // MD
						'map_21': '/locations/massachusetts', // MA
						'map_22': '/locations/michigan', // MI
						'map_23': '/locations/minnesota', // MN
						'map_24': '/locations/mississippi', // MS
						'map_25': '/locations/missouri', // MO
						'map_26': '/locations/montana', // MT
						'map_27': '/locations/nebraska', // NE
						'map_28': '/locations/nevada', // NV
						'map_29': '/locations/newhampshire', // NH
						'map_30': '/locations/newjersey', // NJ
						'map_31': '/locations/newmexico', // NM
						'map_32': '/locations/newyork', // NY
						'map_33': '/locations/northcarolina', // NC
						'map_34': '/locations/northdakota', // ND
						'map_35': '/locations/ohio', // OH
						'map_36': '/locations/oklahoma', // OK
						'map_37': '/locations/oregon', // OR
						'map_38': '/locations/pennsylvania', // PA
						'map_39': '/locations/rhodeisland', // RI
						'map_40': '/locations/southcarolina', // SC
						'map_41': '/locations/southdakota', // SD
						'map_42': '/locations/tennessee', // TN
						'map_43': '/locations/texas', // TX
						'map_44': '/locations/utah', // UT
						'map_45': '/locations/vermont', // VT
						'map_46': '/locations/virginia', // VA
						'map_47': '/locations/washington', // WA
						'map_48': '/locations/westvirginia', // WV
						'map_49': '/locations/wisconsin', // WI
						'map_50': '/locations/wyoming' // WY
					};


					var mapStates = document.querySelectorAll("#map path");
					var siteUrl = "<?php echo $siteUrl ?>";

					var matchElementToUrl = function (element, object) {
						//console.log(element.id);
						for (var key in object) {
							var value = object[key];
							if (element.id == key) {
								window.location = siteUrl + value;
							}
							else {
								// console.log("no matches");
							}
						}
					};

					for (var i = 0, max = mapStates.length; i < max; i++) {
						mapStates[i].addEventListener("click", function () {
							matchElementToUrl(this, states)
						})
					}


				})();

			</script>
		</div>
	</div>
<?php
get_footer();