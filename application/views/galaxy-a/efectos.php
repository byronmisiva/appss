<form action="#" method="post" id="interaction-form">
	<div id="interaction">
		
		<label class="selector"> Filter: <select id="filter-selector"></select>
		</label>

		<div class="controls" id="controls-blur">
			<label> Amount: <input type="range" name="data-pb-blur-amount"
				min="0" max="10" step="0.05" value="0">
			</label>
		</div>

		<div class="controls" id="controls-edges">
			<label> Amount: <input type="range" name="data-pb-edges-amount"
				min="0" max="1" step="0.01" value="1">
			</label>
		</div>

		<div class="controls" id="controls-emboss">
			<label> Amount: <input type="range" name="data-pb-emboss-amount"
				min="0" max="1" step="0.01" value="0.2">
			</label>
		</div>

		<div class="controls" id="controls-greyscale">
			<label> Opacity: <input type="range" name="data-pb-greyscale-opacity"
				min="0" max="1" step="0.01" value="1">
			</label>
		</div>

		<div class="controls" id="controls-matrix">
			<label> Amount: <input type="range" name="data-pb-matrix-amount"
				min="0" max="1" step="0.01" value="0.2">
			</label>
		</div>

		<div class="controls" id="controls-mosaic">
			<label> Opacity: <input type="range" name="data-pb-mosaic-opacity"
				min="0" max="1" step="0.01" value="1">
			</label> <label> Size: <input type="range" name="data-pb-mosaic-size"
				min="1" max="40" step="1" value="5">
			</label>
		</div>

		<div class="controls" id="controls-noise">
			<label> Amount: <input type="range" name="data-pb-noise-amount"
				min="0" max="100" step="1" value="30">
			</label> <label> Type: <input type="radio" name="data-pb-noise-type"
				value="mono"> Mono <input type="radio" name="data-pb-noise-type"
				value="colour"> Colour
			</label>
		</div>

		<div class="controls" id="controls-posterize">
			<label> Amount: <input type="range" name="data-pb-posterize-amount"
				min="2" max="100" step="1" value="5">
			</label> <label> Opacity: <input type="range"
				name="data-pb-posterize-opacity" min="0" max="1" step="0.01"
				value="1">
			</label>
		</div>

		<div class="controls" id="controls-sepia">
			<label> Opacity: <input type="range" name="data-pb-sepia-opacity"
				min="0" max="1" step="0.01" value="0.5">
			</label>
		</div>

		<div class="controls" id="controls-sharpen">
			<label> Amount: <input type="range" name="data-pb-sharpen-amount"
				min="0" max="1" step="0.01" value="0.2">
			</label>
		</div>

		<div class="controls" id="controls-tint">
			<label> Colour: <input type="text" name="data-pb-tint-color"
				value="#FF0000">
			</label> <label> Opacity: <input type="range"
				name="data-pb-tint-opacity" min="0" max="1" step="0.01" value="0.5">
			</label>
		</div>

		<button class="apply" type="submit">Apply</button>

	</div>
</form>

<script src="<?php echo base_url()?>js/galaxy-a/filtros/common.js"></script>
<script src="<?php echo base_url()?>js/galaxy-a/filtros/paintbrush.js"></script>
<script src="<?php echo base_url()?>js/galaxy-a/filtros/playground.js"></script>
