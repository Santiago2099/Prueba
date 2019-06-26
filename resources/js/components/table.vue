<template>
	<table class="table" id="example">
  		<thead class="thead-dark">
    		<tr>
      			<th scope="col">Id</th>
      			<th scope="col">Nombre</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Editar</th>
    		</tr>
  		</thead>
  		<tbody>
    		<tr v-for= "articulo in articulos">
      			<th scope="row">{{articulo.id}}</th>
      			<td>{{articulo.nombre}}</td>
            <td>{{articulo.cantidad}}</td>
            <td><button type="button" class="btn btn-primary top-space" data-toggle="modal" data-target="#updatearticle">Editar</button> </td>
    		</tr>
  		</tbody>
  </table>
</template>

<script>
  import datables from 'datatables'
  export default{
    mounted(){
      this.getArticulos()
    },
    data(){
      return{
        articulos: []
      }
    },
    methods:{
            mytable(){
                 $(function() {
                 $('#example').DataTable();
               });   
            },
      getArticulos(){
        var urlArticulos = "articulos";
        axios.get(urlArticulos).then(response=>{this.articulos = response.data;
        this.mytable()
        });
      },
    }
  }
	
</script>
