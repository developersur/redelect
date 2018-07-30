
var RegionesYcomunas = {
    "regiones": [{
            "NombreRegion": "VIII Biobío",
            "comunas": ["Concepción", "Chiguayante", "Penco", "San Pedro de la Paz", "Talcahuano", "Lirquen"],
            "costo": [10000, 5000, 3000, 1000, 4000, 1000]
    }]
}



jQuery(document).ready(function () {

    var iRegion = 0;
    var htmlRegion = '<option value="">Seleccione región</option>';
    var htmlComunas = '<option value="">Seleccione comuna</option>';

    jQuery.each(RegionesYcomunas.regiones, function () {
        htmlRegion = htmlRegion + '<option value="' + RegionesYcomunas.regiones[iRegion].NombreRegion + '">' + RegionesYcomunas.regiones[iRegion].NombreRegion + '</option>';
        iRegion++;
    });

    jQuery('.regiones').html(htmlRegion);
    jQuery('.comunas').html(htmlComunas);

    jQuery('.regiones').change(function () {
        var iRegiones = 0;
        var valorRegion = jQuery(this).val();
        var htmlComuna = '<option value="">Seleccione comuna</option>';
        jQuery.each(RegionesYcomunas.regiones, function () {
            if (RegionesYcomunas.regiones[iRegiones].NombreRegion == valorRegion) {
                var iComunas = 0;
                jQuery.each(RegionesYcomunas.regiones[iRegiones].comunas.sort(), function () {
                    htmlComuna = htmlComuna + '<option value="' + RegionesYcomunas.regiones[iRegiones].comunas[iComunas] + '" data-costo="' + RegionesYcomunas.regiones[iRegiones].costo[iComunas] + '">' + RegionesYcomunas.regiones[iRegiones].comunas[iComunas] + '</option>';
                    iComunas++;
                });
            }
            iRegiones++;
        });
        jQuery('.comunas').html(htmlComuna);
    });

});