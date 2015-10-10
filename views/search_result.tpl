<div class="content">
	<div id="search">
		<h1>Search results:</h1>
		<section>
			{foreach from=$data item=newsitem}
			<article>
				<h1>{$newsitem.title}</h1>
				<content>{$newsitem.content}</content>
					{$newsitem.image}
			</article>
			{/foreach}
		</section>
	</div>
</div>