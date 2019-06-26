<template>
<div class="modal fade" id="updatearticle" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar articulo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	        <div class="form-group">
			    <label>Articulo</label>
			    <input type="text" class="form-control" placeholder="Ingresa el nombr" >
		  	</div>
		  	<div class="form-group">
			    <label>cantidad</label>
			    <input type="text" class="form-control" placeholder="Ingresa la url de una imagen" >
		  	</div>
		  	<button type="submit" class="btn btn-primary">Save</button>	
      </div>
    </div>
  </div>
</div>
</template>
<script>

	export default {
		
	}
</script>
<style>
	
</style>