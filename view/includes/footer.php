<footer>
			<div class="inner-foot clearfix">
				<span>
					<h2>Computer shop</h2>
					<p>Sajt je napravljen iskljucivo za potrebe zavrsnog ispita, slike su zasticene, ali koriste se za potrebe developmenta.</p>
				</span>
				<span>
					<h2>Contact</h2>
					<ul>
						<li><a href="#"><i class="fas fa-envelope"></i> drndica54@gmail.com</a></li>
						<li><a href="#"><i class="fas fa-phone"></i> 0604628xxx</a></li>
						<li><i class="fas fa-globe-europe"></i> Potrazi nas na drustvenim mrezama</li>
					</ul>
				</span>
			<span class="follow">
				<h2>Zaprati nas</h2>
				<?php if(!isset($_GET['url'])) : ?>
				<ul>
					<li><a href="https://www.facebook.com/milan.drndarevic.9" target="_blank"><img src="./assets/icons/facebook.jpg" alt="facebook" id="facebook"></a></li>
					<li><a href="https://www.pinterest.com/drndica54/" target="_blank"><img src="./assets/icons/pinterest.jpg" alt="pinterest" id="pinterest"></a></li>
					<li><a href="https://twitter.com/?lang=sr" target="_blank"><img src="./assets/icons/twitter.jpg" alt="twitter" id="twitter"></a></li>
				</ul>
				<?php else : ?>
					<ul>
						<li><a href="https://www.facebook.com/milan.drndarevic.9" target="_blank"><img src="<?php dirname('includes/header.php', 1) ?>../assets/icons/facebook.jpg" alt="facebook" id="facebook"></a></li>
						<li><a href="https://www.pinterest.com/drndica54/" target="_blank"><img src="<?php dirname('includes/header.php', 1) ?>../assets/icons/pinterest.jpg" alt="pinterest" id="pinterest"></a></li>
						<li><a href="https://twitter.com/?lang=sr" target="_blank"><img src="<?php dirname('includes/header.php', 1) ?>../assets/icons/twitter.jpg" alt="twitter" id="twitter"></a></li>
					</ul>
				<?php endif; ?>
			</span>
		</div>
			<div class="foot-span">
				<p>Copyright ©2019 All rights reserved</p>
			</div>
		</footer>
	</body>
</html>
