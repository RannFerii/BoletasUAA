<script type="text/javascript">
  //Recibir notificaciones del controlador, ver controlador
	 var msgError = <?php 
	  if(isset($_SESSION['mensajeError']))
      {
         echo json_encode($_SESSION['mensajeError']); 
         $_SESSION['mensajeError'] = null;
      }else
      {
      	 echo json_encode(null); 
      }
	?>;
	if(msgError)
		{
			new PNotify({
          title: 'Error interno',
          text: msgError,
          type: 'error'
      });
		}
	
</script>

