<div class="content">
	<h1>Events</h1>
	<div id="events">
	    <section>
			{foreach from=$eventData item=event}
			<content>
				<p>{$event.date}
				{$event.event}
				{$event.location}</p>
			</content>
		    {/foreach}
		</section>
	</div>
</div>