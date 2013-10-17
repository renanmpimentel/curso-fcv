
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_urL('assets/js/bootstrap.min.js') ?>"></script>

    <script type="text/javascript">
    	$('document').ready(function(){
    		$('#recuperar-senha').submit(function(){
    			
    			var dados = $(this).serialize();

    			$.ajax({
    				type: "POST",
    				url: '<?php echo base_url('recuperarSenha_controller') ?>',
    				data: dados,
    				success: function(data) {
    					$('#resposta-email').html(data);
    				}
    			});

    			return false;
    		});
    	})
    </script>
  </body>
</html>