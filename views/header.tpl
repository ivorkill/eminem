<header>
	<a href="?page=home"><img src="img/eminem_logo.png"></a>
	<nav class="nav">
		<ul class="nav-list">
			<li {if $curr_page eq 'home'} class="selected"{/if}><a href="?page=home">Home</a></li>
			<li {if $curr_page eq 'news'} class="selected"{/if}><a href="?page=news">Newsarticles</a></li>
			<li {if $curr_page eq 'events'} class="selected"{/if}><a href="?page=events">Events</a></li>
			<li {if $curr_page eq 'albums'} class="selected"{/if}><a href="?page=albums">Albums</a></li>
			<li {if $curr_page eq 'about'} class="selected"{/if}><a href="?page=about">About</a></li>
		</ul>
	</nav>
	{include file="search.tpl"}
</header>
<div id="wrapper">