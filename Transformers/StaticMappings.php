<?php

namespace Transformers;

/**
 * Placeholder for mapping arrays and methods used from other transformes classes.
 *
 * @author Juan Manuel Fernandez <juanmf@gmail.com>
 */
class StaticMappings
{
    /**
     * Sheet has [Male|Female] I need [1|0]
     * 
     * @var array
     */
    public static $sex = array (
        'Male'   => 1,
        'Female' => 0,
    );
    
    public static $localidades = array (
        '12 DE OCTUBRE',
        '12 DE OCTUBRE, GANCEDO',
        '12 DE OCTUBRE, GENERAL CAPDEVILA',
        '12 DE OCTUBRE, GENERAL PINEDO',
        '12 DE OCTUBRE, INGENIERO BARBET',
        '12 DE OCTUBRE, MESON DE FIERRO',
        '12 DE OCTUBRE, PAMPA LANDRIEL',
        '12 DE OCTUBRE, RURAL',
        '1º DE MAYO',
        '1º DE MAYO, BARRIO DE LOS PESCADORES',
        '1º DE MAYO, COLONIA BENITEZ',
        '1º DE MAYO, MARGARITA BELÉN',
        '1º DE MAYO, RURAL',
        '25 DE MAYO',
        '25 DE MAYO, COLONIA ABORIGEN',
        '25 DE MAYO, MACHAGAI',
        '25 DE MAYO, NAPALPÍ',
        '25 DE MAYO, RURAL',
        '2 DE ABRIL',
        '2 DE ABRIL, HERMOSO CAMPO',
        '2 DE ABRIL, ITIN',
        '2 DE ABRIL, RURAL',
        '9 DE JULIO',
        '9 DE JULIO, LAS BREÑAS',
        '9 DE JULIO, RURAL',
        'ALMIRANTE BROWN',
        'ALMIRANTE BROWN, CONCEPCIÓN DEL BERMEJO',
        'ALMIRANTE BROWN, LOS FRENTONES',
        'ALMIRANTE BROWN, PAMPA DEL INFIERNO',
        'ALMIRANTE BROWN, RÍO MUERTO',
        'ALMIRANTE BROWN, RURAL',
        'ALMIRANTE BROWN, TACO POZO',
        'BERMEJO',
        'BERMEJO, GENERAL VEDIA',
        'BERMEJO, ISLA DEL CERRITO',
        'BERMEJO, LA LEONESA',
        'BERMEJO, LAS PALMAS',
        'BERMEJO, PUERTO BERMEJO NUEVO',
        'BERMEJO, PUERTO BERMEJO VIEJO',
        'BERMEJO, PUERTO EVA PERON',
        'BERMEJO, RURAL',
        'CHACABUCO',
        'CHACABUCO, CHARATA',
        'CHACABUCO, RURAL',
        'COMANDANTE FERNANDEZ',
        'COMANDANTE FERNANDEZ, PRESIDENCIA ROQUE SAENZ PEÑA',
        'COMANDANTE FERNANDEZ, RURAL',
        'FRAY JUSTO  SANTA MARIA DE ORO',
        'FRAY JUSTO  SANTA MARIA DE ORO, CHOROTIS',
        'FRAY JUSTO  SANTA MARIA DE ORO, RURAL',
        'FRAY JUSTO  SANTA MARIA DE ORO, SANTA SYLVINA',
        'FRAY JUSTO  SANTA MARIA DE ORO, VENADOS GRANDES',
        'GENERAL BELGRANO',
        'GENERAL BELGRANO, CORZUELA',
        'GENERAL BELGRANO, RURAL',
        'GENERAL DONOVAN',
        'GENERAL DONOVAN, LA ESCONDIDA',
        'GENERAL DONOVAN, LAPACHITO',
        'GENERAL DONOVAN, LA VERDE',
        'GENERAL DONOVAN, MAKALLE',
        'GENERAL DONOVAN, RURAL',
        'GENERAL GÜEMES',
        'GENERAL GÜEMES, EL ESPINILLO',
        'GENERAL GÜEMES, EL SAUZAL',
        'GENERAL GÜEMES, EL SAUZALITO',
        'GENERAL GÜEMES, FORTIN LAVALLE',
        'GENERAL GÜEMES, FUERTE ESPERANZA',
        'GENERAL GÜEMES, JUAN JOSÉ CASTELLI',
        'GENERAL GÜEMES, MIRAFLORES',
        'GENERAL GÜEMES, MISION NUEVA POMPEYA',
        'GENERAL GÜEMES, PUERTO LAVALLE',
        'GENERAL GÜEMES, RURAL',
        'GENERAL GÜEMES, VILLA RIO BERMEJITO',
        'GENERAL GÜEMES, WICHI',
        'GENERAL GÜEMES, ZAPARINQUI',
        'INDEPENDENCIA',
        'INDEPENDENCIA, AVIA TERAI',
        'INDEPENDENCIA, CAMPO LARGO',
        'INDEPENDENCIA, FORTIN LAS CHUÑAS',
        'INDEPENDENCIA, NAPENAY',
        'INDEPENDENCIA, RURAL',
        'LIBERTAD',
        'LIBERTAD, COLONIA POPULAR',
        'LIBERTAD, ESTACION GENERAL OBLIGADO',
        'LIBERTAD, LAGUNA BLANCA',
        'LIBERTADOR GENERAL SAN MARTIN',
        'LIBERTADOR GENERAL SAN MARTIN, CIERVO PETISO',
        'LIBERTADOR GENERAL SAN MARTIN, GENERAL JOSÉ DE SAN MARTIN',
        'LIBERTADOR GENERAL SAN MARTIN, LA EDUVIGIS',
        'LIBERTADOR GENERAL SAN MARTIN, LAGUNA LIMPIA',
        'LIBERTADOR GENERAL SAN MARTIN, PAMPA ALMIRON',
        'LIBERTADOR GENERAL SAN MARTIN, PAMPA DEL INDIO',
        'LIBERTADOR GENERAL SAN MARTIN, PRESIDENCIA ROCA',
        'LIBERTADOR GENERAL SAN MARTIN, RURAL',
        'LIBERTADOR GENERAL SAN MARTIN, SELVAS DEL RIO DE ORO',
        'LIBERTAD, PUERTO TIROL',
        'LIBERTAD, RURAL',
        'MAIPU',
        'MAIPU, RURAL',
        'MAIPU, TRES ISLETAS',
        'MAYOR LUIS JORGE FONTANA',
        'MAYOR LUIS JORGE FONTANA, CORONEL DU GRATY',
        'MAYOR LUIS JORGE FONTANA, ENRIQUE URIEN',
        'MAYOR LUIS JORGE FONTANA, RURAL',
        'MAYOR LUIS JORGE FONTANA, VILLA ANGELA',
        'O\'HIGGINS',
        'O\'HIGGINS, LA CLOTILDE',
        'O\'HIGGINS, LA TIGRA',
        'O\'HIGGINS, RURAL',
        'O\'HIGGINS, SAN BERNARDO',
        'PRESIDENTE DE LA PLAZA',
        'PRESIDENTE DE LA PLAZA, PRESIDENCIA DE LA PLAZA',
        'PRESIDENTE DE LA PLAZA, RURAL',
        'QUITILIPI',
        'QUITILIPI, QUITILIPI',
        'QUITILIPI, RURAL',
        'QUITILIPI, VILLA EL PALMAR',
        'SAN FERNANDO',
        'SAN FERNANDO, BARRANQUERAS',
        'SAN FERNANDO, BASAIL',
        'SAN FERNANDO, COLONIA BARANDA',
        'SAN FERNANDO, FONTANA',
        'SAN FERNANDO, PUERTO VILELAS',
        'SAN FERNANDO, RESISTENCIA',
        'SAN FERNANDO, RURAL',
        'SAN LORENZO, RURAL',
        'SAN LORENZO, SAMUHÚ',
        'SAN LORENZO, VILLA BERTHET',
        'SARGENTO CABRAL',
        'SARGENTO CABRAL, CAPITAN SOLARI',
        'SARGENTO CABRAL, COLONIA ELISA',
        'SARGENTO CABRAL, COLONIAS UNIDAS',
        'SARGENTO CABRAL, LAS GARCITAS',
        'SARGENTO CABRAL, RURAL',
        'TAPENAGA',
        'TAPENAGA, CHARADAI',
        'TAPENAGA, COTE LAI',
        'TAPENAGA, HAUMONIA',
        'TAPENAGA, HORQUILLA',
        'TAPENAGA, LA SABANA',
        'TAPENAGA, RURAL', 
        'INVALIDA',
    );
    
    public static $intermediario = array(
        '-----------------',
        'Agencia de Empleo',
        'ANSES',
        'APA',
        'Bco. del Chaco',
        'Bco. Nación',
        'Casa de las Culturas',
        'CNRT',
        'Comunidad Aborigen',
        'Empleo',
        'Energía',
        'Fundación Chaco Solidario',
        'Gobernación',
        'Instituto Colonización',
        'Instituto de Cultura',
        'Instituto del Deporte',
        'Instituto Discapacidad',
        'IPDUV',
        'Loteria Chaqueña',
        'Min. Des. Social',
        'Min. Des. Social Nación',
        'Min. Educación',
        'Min. Gobierno',
        'Min. Ind. Trab. Empleo',
        'Min. Industria',
        'Min. Infraestructura',
        'Min. Producción',
        'Min. Salud',
        'Policía',
        'SAMEEP',
        'SECHEEP',
        'Sub. de Des. Y Econ. Soc.',
        'Subsec. de La Juventud',
        'Subsec. De Transporte',
        'Subsec. Empleo',
        'Subsec. Energía',
        'Subsec. Gob, Just y Culto',
        'Subsec. Legal y Tecnica',
        'Tierras',
        'Varios',
        'Vialidad Provincial',
    );
    
    public static $estado = array(
        'RESUELTO' => 'Terminada',
        'Otorgado' => 'Terminada',
        'Pendiente' => 'Pendiente',
        'En Proceso' => 'En curso',
    );
    
}
