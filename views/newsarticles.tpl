<div class="content">
	<h1>Newsarticles</h1>
	{include file="pagination.tpl"}
	<div id="news">
		<section>
			{foreach from=$data item=newsitem}
			<article>
				<h1>{$newsitem.title}</h1>
				<p>{$newsitem.image}</p>
				<content>{$newsitem.content}</content>
			</article>
		    {/foreach}
		</section>
	</div>
</div>