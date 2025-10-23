<!doctype html>
<html lang="en">
    <head>
        <title>Agenda de Vehículos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/main.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/main.css">
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.5/locales-all.js"></script>
    </head>

    <body>


        <div class="container">
            <div class="col-md-8 offset-md-2">
                <div id='calendar'></div>

            </div>
            <!--  Modal trigger button  -->
            <button
                type="button"
                class="btn btn-primary btn-lg"
                data-bs-toggle="modal"
                data-bs-target="#modalEvento"
            >
                Launch
            </button>
            
            <!-- Modal Body-->
            <div
                class="modal fade"
                id="modalEvento"
                tabindex="-1"
                role="dialog"
                aria-labelledby="modalTitleId"
                aria-hidden="true"
            >
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Datos del Evento
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                
                                <form action="" method="post">

                                    <div class="mb-3 visually-hidden">
                                        <label for="id" class="form-label">ID</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="id"
                                            id="id"
                                            aria-describedby="helpId"
                                            placeholder="ID"
                                        />
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="titulo" class="form-label">Titulo</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="titulo"
                                            id="titulo"
                                            aria-describedby="helpId"
                                            placeholder="Titulo"
                                        />
                                        
                                    </div>

                                    <div class="mb-3 visually-hidden">
                                        <label for="fecha" class="form-label">Fecha</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            name="fecha"
                                            id="fecha"
                                            aria-describedby="helpId"
                                            placeholder="Fecha"
                                        />
                                    
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="hora" class="form-label">Hora del evento</label>
                                        <input  
                                            type="time"
                                            class="form-control"
                                            name="hora"
                                            id="hora"
                                            aria-describedby="helpId"
                                            placeholder="Hora"
                                        />

                
                                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="descripcion" class="form-label">Descripción</label>
                                        <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="color" class="form-label">Color</label>
                                        <input
                                            type="color"
                                            class="form-control"
                                            name="color"
                                            id="color"
                                            aria-describedby="helpId"
                                            placeholder="Color"
                                        />
                                        
                                    </div>
                                    
                                    
                                    
                                    




                                    
                                </form>




                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="borrarEvento()" class="btn btn-danger" id="btnBorrar" data-bs-dismiss="modal">Borrar</button>
                            <button type="button" onclick="agregarEvento()" class="btn btn-primary" id="btnGuardar">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>


        <script>

        var modalEvento;
        modalEvento= new bootstrap.Modal(document.getElementById('modalEvento'),{keyboard:false});
        var calendar;

        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:'es',
          headerToolbar:{
            left:'prev,next today',
            center:'title',
            right:'dayGridMonth,timeGridWeek,timeGridDay'
          },
          dateClick:function(informacion){
            
            limpiarFormulario(informacion.dateStr);
            //alert("Presionaste "+informacion.dateStr);
            modalEvento.show();
          },
          eventClick:function(informacion){
           console.log(informacion);
            modalEvento.show();
            recuperarDatosEventos(informacion.event);
          },
          events:"api.php"
        });
        calendar.render();
      });

    </script>

    <script>

        function recuperarDatosEventos(evento){

            var fecha = evento.startStr.split("T");
            var hora= fecha[1].split(":");


            document.getElementById('id').value=evento.id;
            document.getElementById('titulo').value=evento.title;
            document.getElementById('fecha').value=fecha[0];
            document.getElementById('hora').value=hora[0]+":"+hora[1];
            document.getElementById('descripcion').value=evento.extendedProps.descripcion;
            document.getElementById('color').value=evento.backgroundColor;

            document.getElementById('btnBorrar').removeAttribute('disabled',"");
            document.getElementById('btnGuardar').removeAttribute('disabled',"");


        }

        function borrarEvento(){

            alert("borrando");

            enviarDatosApi("borrar");

        }

        function agregarEvento(){

            if(document.getElementById('titulo').value==""){
                document.getElementById('titulo').classList.add("is-invalid");
                return true;
            }

            accion=(document.getElementById('id').value==0)?"agregar":"actualizar";
            enviarDatosApi(accion);
            /*for(var valor of evento.values()){
            console.log(valor);
            }*/


        }

        function enviarDatosApi(accion){

            fetch("api.php?accion="+accion,{
                method:"POST",
                body:recolectarDatos()
            })
            .then(data=>{
                console.log(data);
                calendar.refetchEvents();
                modalEvento.hide();
            })
            .catch(error=>{
                console.log(error)

            })

        }


        function recolectarDatos(){

            var evento=new FormData();
            evento.append("title", document.getElementById('titulo').value);
            evento.append("fecha", document.getElementById('fecha').value);
            evento.append("hora", document.getElementById('hora').value);
            evento.append("descripcion", document.getElementById('descripcion').value);
            evento.append("color", document.getElementById('color').value);
            evento.append("id", document.getElementById('id').value);

            return evento;
        }

        function limpiarFormulario(fecha){
            document.getElementById('titulo').value="";
            document.getElementById('fecha').value=fecha;
            document.getElementById('hora').value="12:00";
            document.getElementById('descripcion').value="";
            document.getElementById('color').value="";
            document.getElementById('id').value="";

            document.getElementById('btnBorrar').setAttribute('disabled',"disabled");


        }

    </script>

    </body>
</html>
