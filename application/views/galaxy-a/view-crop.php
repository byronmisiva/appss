<div class="row">
	<div class="col-md-12">
		<div class="img-container">			
			<img src="<?php echo base_url()."galaxy-a/uploads/".$imagen?>" >
		</div>
	</div>
	<div class="col-md-3" style="display: none;">
		<div class="docs-data">
			<div class="input-group">
				<label class="input-group-addon" for="dataX">X</label> <input
					class="form-control" id="dataX" type="text" placeholder="x"> <span
					class="input-group-addon">px</span>
			</div>
			<div class="input-group">
				<label class="input-group-addon" for="dataY">Y</label> <input
					class="form-control" id="dataY" type="text" placeholder="y"> <span
					class="input-group-addon">px</span>
			</div>
			<div class="input-group">
				<label class="input-group-addon" for="dataWidth">Width</label> <input
					class="form-control" id="dataWidth" type="text" placeholder="width">
				<span class="input-group-addon">px</span>
			</div>
			<div class="input-group">
				<label class="input-group-addon" for="dataHeight">Height</label> <input
					class="form-control" id="dataHeight" type="text"
					placeholder="height"> <span class="input-group-addon">px</span>
			</div>
			<div class="input-group">
				<label class="input-group-addon" for="dataRotate">Rotate</label> <input
					class="form-control" id="dataRotate" type="text"
					placeholder="rotate"> <span class="input-group-addon">deg</span>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-9 docs-buttons">
		<div class="btn-group alineacion-cortes">			
			<button class="boton-acion crop" data-method="getDataURL" data-option="{ &quot;width&quot;: 340, &quot;height&quot;: 340 }"type="button" ></button>
			<button class="boton-acion mas" data-method="zoom" data-option="0.1" type="button" title="Zoom In"></button>
			<button class="boton-acion menos" data-method="zoom" data-option="-0.1" type="button" title="Zoom Out"></button>
		</div>
		<div class="btn-group" style="display: none;">
			<button class="btn btn-primary" data-method="reset" type="button" title="Reset" id="resetear">Reiniciar</button>			
		</div>
		<div class="btn-group btn-group-crop" style="display: none;" >
			<button class="btn btn-primary" data-method="getDataURL" type="button">
				<span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getDataURL&quot;)"> Get Data URL </span>
			</button>						
			<button class="btn btn-primary" data-method="getDataURL" data-option="{ &quot;width&quot;: 340, &quot;height&quot;: 340 }"
				type="button" >
				<span class="docs-tooltip" data-toggle="tooltip"
					title="$().cropper(&quot;getDataURL&quot;, { &quot;width&quot;: 340, &quot;height&quot;: 340 })">
					340 &times; 340 </span>
			</button>
		</div>		
	</div>	
</div>


<script type="text/javascript" src="<?php echo base_url()?>js/galaxy-a/croper/cropper-master.js?frefresh=<?php echo rand(0,1000)?>"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/galaxy-a/croper/main.js?frefresh=<?php echo rand(0,1000)?>"></script>