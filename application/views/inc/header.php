<header>
	<nav>
		<a href="<?echo(base_url())?>"><img src="<?echo(asset('image/logo.png'))?>" height="85px" width="620px"></a>
		<ul>
			<li>
				<a href="<?php echo(base_url())?>">Home</a>
			</li>
			<li>
				<a href="<?php echo(base_url('music/radio'))?>">Folkrider Radio</a>
			</li>
			<li>
				<a href="<?php echo(base_url('music'))?>">Music</a>
				<ul>
					<li>
						<a href="<? echo(base_url('music/artist'))?>">By Artist</a>
					</li>
					<li>
						<a href="<? echo(base_url('music/album'))?>">By Album</a>
					</li>
					<li>
						<a href="<? echo(base_url('music/song'))?>">By Song</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo(base_url('site/faq'))?>">FAQ</a>
			</li>
			<li>
				<a href="<?php echo(base_url('contact'))?>">Contact</a>
			</li>
		</ul>
	</nav>
</header>