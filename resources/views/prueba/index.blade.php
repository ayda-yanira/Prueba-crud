@extends('layouts.plantillabase');
@section('contenido')
<div class="col-lg-12"  >
        <h6 style="float: right;"><a   href="/prueba/create" class="btn btn-orange"style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%) "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>REGISTRAR</a><br><br> 
          </h6> 
        </div>
        <br>
        <br>
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
                            

                            <form action="{{ route('prueba.destroy',$prueba->id) }}"  method="POST" class="eliminar">
        
          
                            <a href="/prueba/{{$prueba->id}}/edit" style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)"  class="btn btn-orange"><i class="fas fa-edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg></i></a>         
             
        
            
              @method('DELETE')
              @csrf
         
              <button style=" background: linear-gradient(90deg, #ec5f5d 0%, #f0854a 100%)" type="submit" class="btn btn-orange"><i class="bi bi-trash-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg></button>
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
