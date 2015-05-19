	<footer class="site-footer">
		<div id="wrapper">
				<section id="sektionen" class="lots-of-links">
					<h3>Andra föreningar på IT</h3>
					<ul id="name-of-compounds" class="list">
						<li>STYRELSE</li>
						<li>STUDIENÄMND</li>
						<li>SEXMÄSTERI</li>
						<li>PR & RUSTMÄSTERI</li>
						<li>ARBETSMARKNAD</li>
						<li>DIGITALA SYSTEM</li>
						<li>FANBÄRARE</li>
						<li>FYSISKA AKTIVITETER</li>
						<li>DIGITALA SPEL</li>
						<li>ANALOGA SPEL</li>
						<li>FOTO</li>
						<li>HÄFV & ODYGD</li>
						<li>SEKTIONENS REVISORER</li>
						<li>VALBEREDNINGEN</li>
					</ul>
					<ul id="links-for-compounds"class="list">
						<li><a href="http://styrit.chalmers.it/">StyrIT</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/snit/">snIT</a></li>
						<li><a href="https://sexit.chalmers.it/">sexIT<a></li>
						<li><a href="http://prit.chalmers.it/">P.R.I.T.</a></li>
						<li><a href="https://chalmers.it/foretag/">ArmIT</a></li>
						<li><a href="http://digit.chalmers.it/">digIT</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/fanbarerit/">FanbärerIT</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/fritid/">frITid</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/8-bit/">8-bIT</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/drawit/">DrawIT</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/flashit/">FlashIT</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/hookit/">HookIT</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/revisorer/">Revisorer</a></li>
						<li><a href="https://chalmers.it/sektionen/kommitteer/valberedningen/">Valberedningen</a></li>
					</ul>
				</section>
				<section id="good-links1" class="good-links lots-of-links">
					<h3>Bra länkar</h3>
					<ul class="list">
						<li><a href="">Se NollKIT jobba!</a></li>
						<li><a href="https://chalmers.it/">IT-sektionens interna sida</a></li>
						<li><a href="https://student.portal.chalmers.se/sv/Sidor/default.aspx">StudentPortalen</a></li>
						<li><a href="http://www.mk.chs.chalmers.se/">Samordnare för alla NollK:n</a></li>
						<li><a href="http://maps.chalmers.se/#a85a8be2-4ff6-4e39-9880-c2adb2a7626f">Karta över Chalmers</a></li>
						<li><a href="http://www.gfs.se/">Studenthälsa m.m.a.</a></li>
						<li><a href="http://www.chalmersstudentbostader.se/">Chalmers Studentbostäder</a></li>
						<li><a href="https://www.sgsstudentbostader.se/se">SGS Studentbostäder</a></li>
						<li><a href="https://www.bopunkten.se/">BoPunkten</a></li>
						<li><a href="http://bovision.se/">BoVision</a></li>
						<li><a href="http://www.gp.se/bostad">GP Bostad</a></li>
						<li><a href="http://www.vasttrafik.se/">Västtrafik</a></li>
						<li><a href="http://www.csn.se/">CSN</a></li>
						<li><a href="http://www.forsakringskassan.se/">Försäkringskassan</a></li>
					</ul>
				</section>
				<section id="good-links2"class="good-links lots-of-links">
					<h3>Fler bra länkar!</h3>
					<ul class="list">
						<li><a href="">Chatta med IT!</a></li>
						<li><a href="http://www.skatteverket.se/privat.4.76a43be412206334b89800052864.html">Skatteverket</a></li>
						<li><a href="http://www.adressandring.se/privatperson">Adressändring</a></li>
						<li><a href="http://www.sj.se/">SJ</a></li>
						<li><a href="http://www.fysiken.nu/">Fysiken, idrottsanläggning</a></li>
						<li><a href="http://www.gasquen.se/">Gasquen</a></li>
						<li><a href="http://www.chalmers.se/insidan/SV/arbetsredskap/it">MEDIC</a></li>
						<li><a href="https://webmail.chalmers.se/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fwebmail.chalmers.se%2fowa%2f">Chalmers Webmail</a></li>
						<li><a href="http://www.lib.chalmers.se/">Chalmers bibliotek</a></li>
						<li><a href="http://www.chs.chalmers.se/">Studentkåren</a></li>
						<li><a href="http://www.studentklubben.se/">Studentklubben</a></li>
						<li><a href="http://www.djungeltrumman.se/dt">Djungeltrumman</a></li>
						<li><a href="http://www.restaurangguiden.com/">Restaurangsguiden</a></li>
						<li><a href="http://www.gotevent.se/gotEventExtern/">Got Event</a></li>
					</ul>
				</section>
		</div>
		<nav class="site-nav">
			<?php 
				$args = array('theme_location' => 'footer');
			?>
			<?php wp_nav_menu( $args ); ?>
		</nav>	
	</footer>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<?php wp_footer(); ?>
</body>
</html>