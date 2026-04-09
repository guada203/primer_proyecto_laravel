<!DOCTYPE html>
<html lang="es">
<head> 
<title>Sobre mí</title> 

<!-- Bootstrap asset -->
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
 
</head>  

<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
      <div class="container"> 
         <a class="navbar-brand" href="#">Mi Sitio</a>
          <div class="navbar-nav"> 
            <a class="nav-link" href="/">Inicio</a> 
            <a class="nav-link active" href="/sobre-mi">Sobre mí</a> 
          </div> 
      </div> 
   </nav> 

   <div class="container mt-4">
    <div class="card"> 
     <div class="card-body"> 
      <h1 class="card-title">Sobre mí</h1> 

      <p><b>Nombre:</b> Guadalupe Barrios</p>
                <p><b>Edad:</b> 22 años</p>
                <p><b>De dónde soy:</b> Corrientes, Argentina</p>
                <p><b>Me gustaría trabajar en:</b> Desarrollo de software</p>
                <p><b>Expectativas del curso:</b> Aprender a crear aplicaciones web</p>
                <p><b>Hobbies:</b> Programar, escuchar música y correr</p>
     </div>
    </div>

        <a href="#" class="btn btn-primary mt-3">Descargar CV</a> 
        <a href="#" class="btn btn-secondary mt-3">Contactar</a> 

    <div class="card mt-4">   
      <div class="card-body">     
        <h2>Formulario de contacto</h2>    
          <form>      
             <div class="mb-3">         
              <label class="form-label">Nombre</label>         
              <input type="text" class="form-control" placeholder="Ingrese su nombre">      
             </div>        
             <div class="mb-3">         
              <label class="form-label">Email</label>        
               <input type="email" class="form-control" placeholder="Ingrese su email">      
               </div>       
                <div class="mb-3">     
                 <label class="form-label">Mensaje</label>         
                 <textarea class="form-control" rows="3"></textarea>      
                 </div>        
                 <button type="submit" class="btn btn-success">         Enviar mensaje       </button>     
                </form>    
              </div>
             </div> 

   </div>

  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>





<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body> 
</html> 