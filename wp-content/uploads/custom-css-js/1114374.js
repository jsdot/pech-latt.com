<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    // Sélectionner les éléments contenant des backslashes
    var elements = document.querySelectorAll('.asl-main-cont, .asl-desc, .asl-list-wrapper');
    
    elements.forEach(function(element) {
        // Remplacer les backslashes par rien (ou une apostrophe correcte)
        element.innerHTML = element.innerHTML.replace(/\\'/g, "'");
    });
});</script>
<!-- end Simple Custom CSS and JS -->
