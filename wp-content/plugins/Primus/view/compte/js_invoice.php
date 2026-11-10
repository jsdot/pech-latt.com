
<script>
  
    jQuery(function($){
        $('a.<?php echo $action_slug; ?>').click( function(e){
        e.preventDefault();
              
            var url =$(this).attr('href');
            url =  url.split('/');
            url =  url[url.length - 1];


            $.ajax({
			    url : '<?php echo site_url(); ?>/wp-admin/admin-ajax.php', // à adapter selon la ressource
			    method : 'POST', // GET par défaut
                data : {
                    'action': 'request_invoice',
                    'order' : url,
                  
                }, // mes variables
                dataType: 'JSON',
                success : function( data ) { // en cas de requête réussie
                    console.log(data);   
                    $('.woocommerce-notices-wrapper').html('<div class="alert alert-primary" role="alert">'+data.message+'</div>') ;
                },
                error : function( data ) { // en cas d'échec
                    // Sinon je traite l'erreur
                    $('.woocommerce-notices-wrapper').html('<div class="alert alert-primary" role="alert">'+data+'</div>') ;
                                    
                  
                }
            });


        })
    });


</script>