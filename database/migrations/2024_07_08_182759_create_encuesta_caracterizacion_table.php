<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuesta_caracterizacion', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('vereda', 50)->nullable();
            $table->string('pueblo', 50)->nullable();
            $table->string('nombre_predio', 50)->nullable();
            $table->string('km_distancia', 50)->nullable();
            $table->string('area_predio', 50)->nullable();
            $table->string('tipo_tenencia', 50)->nullable();
            $table->string('otra_tenencia', 50)->nullable();
            $table->string('fuente_agua', 50)->nullable();
            $table->string('energia_electrica', 10)->nullable();
            $table->string('compania_red', 20)->nullable();
            $table->string('tipo_cel', 50)->nullable();
            $table->string('latitud', 50)->nullable();
            $table->string('longitud', 50)->nullable();
            $table->string('tiempo_cultivando', 50)->nullable();
            $table->string('propiedad_cultivo', 50)->nullable();
            $table->string('otra_propiedad_cultivo', 50)->nullable();
            $table->string('hectareas_sembradas_porcentaje', 50)->nullable();
            $table->string('hectareas_produccion', 120)->nullable();
            $table->string('rendimiento', 50)->nullable();
            $table->string('tendencia_volumen', 50)->nullable();
            $table->string('frecuencia_cosecha', 50)->nullable();
            $table->string('info_tecnica', 50)->nullable();
            $table->string('temas_info_tecnica', 50)->nullable();
            $table->string('entidad_info_tecnica', 50)->nullable();
            $table->string('especies_asociadas', 50)->nullable();
            $table->string('otra_especies', 50)->nullable();
            $table->string('analisis_suelo', 8)->nullable();
            $table->string('tipo_fertilizacion', 50)->nullable();
            $table->string('otro_tipo_fertilizacion', 50)->nullable();
            $table->string('practicas_agronomicas', 50)->nullable();
            $table->string('porcentaje_afectado_plagas', 50)->nullable();
            $table->string('frecuencia_escoba_bruja', 50)->nullable();
            $table->string('frecuencia_monilla', 50)->nullable();
            $table->string('frecuencia_fitoftora', 50)->nullable();
            $table->string('frecuencia_otro_manejo_plaga', 50)->nullable();
            $table->string('mejorar_calidad_produccion', 10)->nullable();
            $table->string('forma_mejora_calidad_produccion', 50)->nullable();
            $table->string('forma_venta_cacao', 50)->nullable();
            $table->string('separa_fruto_variedad_maduracion', 50)->nullable();
            $table->string('tipo_equipos', 50)->nullable();
            $table->string('otro_tipo_equipos', 50)->nullable();
            $table->string('uso_equipo', 50)->nullable();
            $table->string('mucilago', 50)->nullable();
            $table->string('uso_mucilago', 50)->nullable();
            $table->string('fermenta_grano', 50)->nullable();
            $table->string('lugar_fermenta_grano', 50)->nullable();
            $table->string('capacidad_fermentacion', 50)->nullable();
            $table->string('tiempos_fermentacion', 50)->nullable();
            $table->string('seca_cacao', 50)->nullable();
            $table->string('lugar_secado', 50)->nullable();
            $table->string('otro_lugar_secado', 50)->nullable();
            $table->string('tiempos_secado', 50)->nullable();
            $table->string('identificado_secado', 50)->nullable();
            $table->string('filtrado_grano', 50)->nullable();
            $table->string('calificado_grano_calidad', 50)->nullable();
            $table->string('datos_post_cosecha', 50)->nullable();
            $table->string('otro_datos_postcosecha', 50)->nullable();
            $table->string('lugar_almacenamiento', 50)->nullable();
            $table->string('otro_lugar_almacenamiento', 50)->nullable();
            $table->string('forma_comercializacion', 50)->nullable();
            $table->string('otra_comercializacion', 50)->nullable();
            $table->string('intermediario_comercio', 50)->nullable();
            $table->string('punto_compra_municipio', 50)->nullable();
            $table->string('razones_punto_venta', 50)->nullable();
            $table->string('otra_razon_punto_venta', 50)->nullable();
            $table->string('deseo_precio_calidad', 50)->nullable();
            $table->string('ultima_venta', 50)->nullable();
            $table->string('frecuencia_venta_anio', 50)->nullable();
            $table->string('cantidad_comprometida', 50)->nullable();
            $table->string('comprador_compromiso', 50)->nullable();
            $table->string('futuro_cacaocultor', 50)->nullable();
            $table->string('depende_del_cultivo_cacao', 50)->nullable();
            $table->string('mejora_ingresos_por_cacao', 50)->nullable();
            $table->string('mejora_calidad_vida_por_cacao', 50)->nullable();
            $table->string('papel_en_asociacion', 50)->nullable();
            $table->string('actividades_para_asociacion', 50)->nullable();
            $table->string('impulso_para_asociacion', 50)->nullable();
            $table->unsignedMediumInteger('id_user')->index('id_user')->comment('User');
            $table->string('otra_forma_manejo_plaga', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encuesta_caracterizacion');
    }
};
