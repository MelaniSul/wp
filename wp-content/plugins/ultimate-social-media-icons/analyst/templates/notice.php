<div class="notice notice-success analyst-notice">
	<p>
		<strong class="analyst-plugin-name"><?=$notice->getPluginName()?></strong>
		<?=$notice->getBody()?>
	</p>

	<button type="button" class="analyst-notice-dismiss notice-dismiss" analyst-notice-id="<?=$notice->getId()?>">
		<span class="screen-reader-text">Dismiss this notice.</span>
	</button>
</div>
