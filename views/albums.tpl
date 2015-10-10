<div class="content">
	<h1>Albums</h1>
	{include file="pagination_albums.tpl"}
	<div id="albums">  
	    <section>
			{foreach from=$albumData item=album}
			<content>
				<h1>{$album.name}</h1>
				<p>{$album.image}</p>
				<p>{$album.date}</p>
			</content>
		    {/foreach}
		</section>
	</div>
</div>