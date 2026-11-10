<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
jQuery(document).ready(function($) {
    // Attendre que la galerie soit bien chargée
    setTimeout(function() {
        var $img = $('.woocommerce-product-gallery__image img');

        if ($img.length && typeof $img.zoom === 'function') {
            // Supprimer le zoom existant
            $img.trigger('zoom.destroy');

            // Réinitialiser un zoom plus doux
            $img.zoom({
                magnify: 1.5, // 👈 ajuste ici selon l'effet souhaité (1.2, 1.5, etc.)
                on: 'mouseover', // déclenche le zoom au survol
                touch: true // active le zoom sur mobile aussi
            });
        }
    }, 1000); // ⏳ délai d’1s pour être sûr que tout est bien chargé
});</script>
<!-- end Simple Custom CSS and JS -->
