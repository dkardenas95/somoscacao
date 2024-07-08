<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EncuestaCaracterizacion
 * 
 * @property int $id
 * @property string|null $vereda
 * @property string|null $pueblo
 * @property string|null $nombre_predio
 * @property string|null $km_distancia
 * @property string|null $area_predio
 * @property string|null $tipo_tenencia
 * @property string|null $otra_tenencia
 * @property string|null $fuente_agua
 * @property string|null $energia_electrica
 * @property string|null $compania_red
 * @property string|null $tipo_cel
 * @property string|null $latitud
 * @property string|null $longitud
 * @property string|null $tiempo_cultivando
 * @property string|null $propiedad_cultivo
 * @property string|null $otra_propiedad_cultivo
 * @property string|null $hectareas_sembradas_porcentaje
 * @property string|null $hectareas_produccion
 * @property string|null $rendimiento
 * @property string|null $tendencia_volumen
 * @property string|null $frecuencia_cosecha
 * @property string|null $info_tecnica
 * @property string|null $temas_info_tecnica
 * @property string|null $entidad_info_tecnica
 * @property string|null $especies_asociadas
 * @property string|null $otra_especies
 * @property string|null $analisis_suelo
 * @property string|null $tipo_fertilizacion
 * @property string|null $otro_tipo_fertilizacion
 * @property string|null $practicas_agronomicas
 * @property string|null $porcentaje_afectado_plagas
 * @property string|null $frecuencia_escoba_bruja
 * @property string|null $frecuencia_monilla
 * @property string|null $frecuencia_fitoftora
 * @property string|null $frecuencia_otro_manejo_plaga
 * @property string|null $mejorar_calidad_produccion
 * @property string|null $forma_mejora_calidad_produccion
 * @property string|null $forma_venta_cacao
 * @property string|null $separa_fruto_variedad_maduracion
 * @property string|null $tipo_equipos
 * @property string|null $otro_tipo_equipos
 * @property string|null $uso_equipo
 * @property string|null $mucilago
 * @property string|null $uso_mucilago
 * @property string|null $fermenta_grano
 * @property string|null $lugar_fermenta_grano
 * @property string|null $capacidad_fermentacion
 * @property string|null $tiempos_fermentacion
 * @property string|null $seca_cacao
 * @property string|null $lugar_secado
 * @property string|null $otro_lugar_secado
 * @property string|null $tiempos_secado
 * @property string|null $identificado_secado
 * @property string|null $filtrado_grano
 * @property string|null $calificado_grano_calidad
 * @property string|null $datos_post_cosecha
 * @property string|null $otro_datos_postcosecha
 * @property string|null $lugar_almacenamiento
 * @property string|null $otro_lugar_almacenamiento
 * @property string|null $forma_comercializacion
 * @property string|null $otra_comercializacion
 * @property string|null $intermediario_comercio
 * @property string|null $punto_compra_municipio
 * @property string|null $razones_punto_venta
 * @property string|null $otra_razon_punto_venta
 * @property string|null $deseo_precio_calidad
 * @property string|null $ultima_venta
 * @property string|null $frecuencia_venta_anio
 * @property string|null $cantidad_comprometida
 * @property string|null $comprador_compromiso
 * @property string|null $futuro_cacaocultor
 * @property string|null $depende_del_cultivo_cacao
 * @property string|null $mejora_ingresos_por_cacao
 * @property string|null $mejora_calidad_vida_por_cacao
 * @property string|null $papel_en_asociacion
 * @property string|null $actividades_para_asociacion
 * @property string|null $impulso_para_asociacion
 * @property int $id_user
 * @property string|null $otra_forma_manejo_plaga
 * 
 * @property User $user
 *
 * @package App\Models
 */
class EncuestaCaracterizacion extends Model
{
	protected $table = 'encuesta_caracterizacion';
	public $timestamps = false;

	protected $casts = [
		'id_user' => 'int'
	];

	protected $fillable = [
		'vereda',
		'pueblo',
		'nombre_predio',
		'km_distancia',
		'area_predio',
		'tipo_tenencia',
		'otra_tenencia',
		'fuente_agua',
		'energia_electrica',
		'compania_red',
		'tipo_cel',
		'latitud',
		'longitud',
		'tiempo_cultivando',
		'propiedad_cultivo',
		'otra_propiedad_cultivo',
		'hectareas_sembradas_porcentaje',
		'hectareas_produccion',
		'rendimiento',
		'tendencia_volumen',
		'frecuencia_cosecha',
		'info_tecnica',
		'temas_info_tecnica',
		'entidad_info_tecnica',
		'especies_asociadas',
		'otra_especies',
		'analisis_suelo',
		'tipo_fertilizacion',
		'otro_tipo_fertilizacion',
		'practicas_agronomicas',
		'porcentaje_afectado_plagas',
		'frecuencia_escoba_bruja',
		'frecuencia_monilla',
		'frecuencia_fitoftora',
		'frecuencia_otro_manejo_plaga',
		'mejorar_calidad_produccion',
		'forma_mejora_calidad_produccion',
		'forma_venta_cacao',
		'separa_fruto_variedad_maduracion',
		'tipo_equipos',
		'otro_tipo_equipos',
		'uso_equipo',
		'mucilago',
		'uso_mucilago',
		'fermenta_grano',
		'lugar_fermenta_grano',
		'capacidad_fermentacion',
		'tiempos_fermentacion',
		'seca_cacao',
		'lugar_secado',
		'otro_lugar_secado',
		'tiempos_secado',
		'identificado_secado',
		'filtrado_grano',
		'calificado_grano_calidad',
		'datos_post_cosecha',
		'otro_datos_postcosecha',
		'lugar_almacenamiento',
		'otro_lugar_almacenamiento',
		'forma_comercializacion',
		'otra_comercializacion',
		'intermediario_comercio',
		'punto_compra_municipio',
		'razones_punto_venta',
		'otra_razon_punto_venta',
		'deseo_precio_calidad',
		'ultima_venta',
		'frecuencia_venta_anio',
		'cantidad_comprometida',
		'comprador_compromiso',
		'futuro_cacaocultor',
		'depende_del_cultivo_cacao',
		'mejora_ingresos_por_cacao',
		'mejora_calidad_vida_por_cacao',
		'papel_en_asociacion',
		'actividades_para_asociacion',
		'impulso_para_asociacion',
		'id_user',
		'otra_forma_manejo_plaga'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id_user');
	}
}
