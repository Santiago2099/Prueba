<template>
  <div class="container">
    <form @submit.prevent="savearticulo">
      <div>
        <label>Nombre</label>
        <input type="text" class="form-control" placeholder="Ingresa el nombre del articulo" v-model="nombre">
        <label>Cantidad</label>
        <input type="text" class="form-control" placeholder="Ingrese la cantidad" v-model="cantidad">
        <label>Categoria</label>
        <input type="text" class="form-control" placeholder="Ingrese la categoria" v-model="categoria_id">
      </div>
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
</template>
  <script type="application/javascript">
  export default {
    data(){
      return {
        nombre: null,
        cantidad: null,
        categoria_id: null 
      }
    },
    methods: {
      savearticulo: function(){
        axios.post(`http://127.0.0.1:8000/articulos/`,{
          nombre: this.nombre,
          cantidad: this.cantidad,
          categoria_id: this.categoria_id
        })
        .then(function(res){
          console.log(res)
        })
        .catch(function(err){
          console.log(err)
        });
      }
    }
  }
</script>