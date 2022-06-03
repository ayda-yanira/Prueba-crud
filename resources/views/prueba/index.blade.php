@extends('layouts.plantillabase');
@section('contenido')
<div class="col-lg-6"  >
        <h6 style="float: right;"><a   href="/create" class="btn btn-orange"style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%) ">REGISTRAR</a><br><br> 
          </h6> 
        </div>
<table id="excel"  class="table-bordered display nowrap table-responsive hover order-column cell-border" style="width:100% ">
<thead class=" text-white">
        <tr>
            <th scope="col" style="background-color:10">ID</th>
            <th scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Nombres &nbsp&nbsp</th>
            <th scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Apellidos &nbsp&nbsp</th>
            <th scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Cargo &nbsp&nbsp</th>
            <th scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Direccion &nbsp&nbsp</th>
            <th scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Telefono &nbsp&nbsp</th>
            <th scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Correo &nbsp&nbsp</th>
            <th scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Sueldo &nbsp&nbsp</th>
            <th  scope="col" style="background-color:rgb(34, 31, 67)">&nbsp&nbsp Acción &nbsp&nbsp</th>
         </tr>

            </thead>


                <tbody>
            
                @foreach($pruebas as $prueba)
                    <tr>
                
                    
                        <td>{{$prueba->id}}</td>
                        <td><a style="color:#01010a"  >{{$prueba->nombre}}</td>
                        <td><a style="color:#01010a"  >{{$prueba->apellido}}</td>
                        <td>{{$prueba->cargo}}</td>
                        <td>&nbsp&nbsp{{$prueba->direccion}}&nbsp&nbsp</td>
                        <td><a style="color:#03030c" >{{$prueba->telefono}}</td>
                        <td> <a style="color:#03030c"  >{{$prueba->correo}}&nbsp&nbsp</a></td>
                        <td>&nbsp&nbsp {{number_format($prueba->sueldo,2,",",".")}} &nbsp&nbsp</td>
                            
                        
                        <td>
                            

                            <form  method="POST" class="eliminar">
        
          
                            <a style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)"  class="btn btn-orange"><i class="fas fa-edit"></i></a>         
             
        
            
              @method('DELETE')
              @csrf
         
              <button style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)" type="submit" class="btn btn-orange"><i class="bi bi-trash-fill"></i></button>
         </form>  
         
         
                        </td>
                       
                    </tr> 
                    @endforeach
                </tbody>
               
</table>

<script>
  $(document).ready(function() 
  {
    $('#excel').DataTable(
      {"language": {
      "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    },
      dom: 'Bfrtip',

        buttons:{
          dom:{
            button:{
              className:'btn',
            }
          },
          buttons:[
            {
              extend:'excelHtml5',
              text:'<i class="fas fa-file-excel"></i>',
              className:'btn btn-success',
              titleAttr:'exportara a excel',
              excelStyles:{
              template:'blue'
            }
            },
            {
              extend:'copy',
              text:'<i class="fas fa-copy"></i>',
              className:' bg-gradient-info ',
              titleAttr:'Copiar',
              excelStyles:{
              template:'blue'
            }
            },
            

            {
              extend:'csv', 
              text:'<i class="fas fa-file-csv"></i>', 
              className:' bg-gradient-success ',
              titleAttr:'exportara a csv',
              excelStyles:{
              template:'blue'
            }
            }
           
           

          ]
        }
    });
} );
</script>
@endsection
