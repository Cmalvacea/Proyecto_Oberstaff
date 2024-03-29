<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $DB = DB::connection('mysql');

        $DB->table('regions')->insert([
            [
                'id_reg'=>1,
                'description'=>'Australia'
                ],
                
                
                            
                 [
                'id_reg'=>2,
                'description'=>'Austria'
                ],
                
                
                            
                 [
                'id_reg'=>3,
                'description'=>'Azerbaiyán'
                ],
                
                
                            
                 [
                'id_reg'=>4,
                'description'=>'Anguilla'
                ],
                
                
                            
                 [
                'id_reg'=>5,
                'description'=>'Argentina'
                ],
                
                
                            
                 [
                'id_reg'=>6,
                'description'=>'Armenia'
                ],
                
                
                            
                 [
                'id_reg'=>7,
                'description'=>'Bielorrusia'
                ],
                
                
                            
                 [
                'id_reg'=>8,
                'description'=>'Belice'
                ],
                
                
                            
                 [
                'id_reg'=>9,
                'description'=>'Bélgica'
                ],
                
                
                            
                 [
                'id_reg'=>10,
                'description'=>'Bermudas'
                ],
                
                
                            
                 [
                'id_reg'=>11,
                'description'=>'Bulgaria'
                ],
                
                
                            
                 [
                'id_reg'=>12,
                'description'=>'Brasil'
                ],
                
                
                            
                 [
                'id_reg'=>13,
                'description'=>'Reino Unido'
                ],
                
                
                            
                 [
                'id_reg'=>14,
                'description'=>'Hungría'
                ],
                
                
                            
                 [
                'id_reg'=>15,
                'description'=>'Vietnam'
                ],
                
                
                            
                 [
                'id_reg'=>16,
                'description'=>'Haiti'
                ],
                
                
                            
                 [
                'id_reg'=>17,
                'description'=>'Guadalupe'
                ],
                
                
                            
                 [
                'id_reg'=>18,
                'description'=>'Alemania'
                ],
                
                
                            
                 [
                'id_reg'=>19,
                'description'=>'Países Bajos, Holanda'
                ],
                
                
                            
                 [
                'id_reg'=>20,
                'description'=>'Grecia'
                ],
                
                
                            
                 [
                'id_reg'=>21,
                'description'=>'Georgia'
                ],
                
                
                            
                 [
                'id_reg'=>22,
                'description'=>'Dinamarca'
                ],
                
                
                            
                 [
                'id_reg'=>23,
                'description'=>'Egipto'
                ],
                
                
                            
                 [
                'id_reg'=>24,
                'description'=>'Israel'
                ],
                
                
                            
                 [
                'id_reg'=>25,
                'description'=>'India'
                ],
                
                
                            
                 [
                'id_reg'=>26,
                'description'=>'Irán'
                ],
                
                
                            
                 [
                'id_reg'=>27,
                'description'=>'Irlanda'
                ],
                
                
                            
                 [
                'id_reg'=>28,
                'description'=>'España'
                ],
                
                
                            
                 [
                'id_reg'=>29,
                'description'=>'Italia'
                ],
                
                
                            
                 [
                'id_reg'=>30,
                'description'=>'Kazajstán'
                ],
                
                
                            
                 [
                'id_reg'=>31,
                'description'=>'Camerún'
                ],
                
                
                            
                 [
                'id_reg'=>32,
                'description'=>'Canadá'
                ],
                
                
                            
                 [
                'id_reg'=>33,
                'description'=>'Chipre'
                ],
                
                
                            
                 [
                'id_reg'=>34,
                'description'=>'Kirguistán'
                ],
                
                
                            
                 [
                'id_reg'=>35,
                'description'=>'China'
                ],
                
                
                            
                 [
                'id_reg'=>36,
                'description'=>'Costa Rica'
                ],
                
                
                            
                 [
                'id_reg'=>37,
                'description'=>'Kuwait'
                ],
                
                
                            
                 [
                'id_reg'=>38,
                'description'=>'Letonia'
                ],
                
                
                            
                 [
                'id_reg'=>39,
                'description'=>'Libia'
                ],
                
                
                            
                 [
                'id_reg'=>40,
                'description'=>'Lituania'
                ],
                
                
                            
                 [
                'id_reg'=>41,
                'description'=>'Luxemburgo'
                ],
                
                
                            
                 [
                'id_reg'=>42,
                'description'=>'México'
                ],
                
                
                            
                 [
                'id_reg'=>43,
                'description'=>'Moldavia'
                ],
                
                
                            
                 [
                'id_reg'=>44,
                'description'=>'Mónaco'
                ],
                
                
                            
                 [
                'id_reg'=>45,
                'description'=>'Nueva Zelanda'
                ],
                
                
                            
                 [
                'id_reg'=>46,
                'description'=>'Noruega'
                ],
                
                
                            
                 [
                'id_reg'=>47,
                'description'=>'Polonia'
                ],
                
                
                            
                 [
                'id_reg'=>48,
                'description'=>'Portugal'
                ],
                
                
                            
                 [
                'id_reg'=>49,
                'description'=>'Reunión'
                ],
                
                
                            
                 [
                'id_reg'=>50,
                'description'=>'Rusia'
                ],
                
                
                            
                 [
                'id_reg'=>51,
                'description'=>'El Salvador'
                ],
                
                
                            
                 [
                'id_reg'=>52,
                'description'=>'Eslovaquia'
                ],
                
                
                            
                 [
                'id_reg'=>53,
                'description'=>'Eslovenia'
                ],
                
                
                            
                 [
                'id_reg'=>54,
                'description'=>'Surinam'
                ],
                
                
                            
                 [
                'id_reg'=>55,
                'description'=>'Estados Unidos'
                ],
                
                
                            
                 [
                'id_reg'=>56,
                'description'=>'Tadjikistan'
                ],
                
                
                            
                 [
                'id_reg'=>57,
                'description'=>'Turkmenistan'
                ],
                
                
                            
                 [
                'id_reg'=>58,
                'description'=>'Islas Turcas y Caicos'
                ],
                
                
                            
                 [
                'id_reg'=>59,
                'description'=>'Turquía'
                ],
                
                
                            
                 [
                'id_reg'=>60,
                'description'=>'Uganda'
                ],
                
                
                            
                 [
                'id_reg'=>61,
                'description'=>'Uzbekistán'
                ],
                
                
                            
                 [
                'id_reg'=>62,
                'description'=>'Ucrania'
                ],
                
                
                            
                 [
                'id_reg'=>63,
                'description'=>'Finlandia'
                ],
                
                
                            
                 [
                'id_reg'=>64,
                'description'=>'Francia'
                ],
                
                
                            
                 [
                'id_reg'=>65,
                'description'=>'República Checa'
                ],
                
                
                            
                 [
                'id_reg'=>66,
                'description'=>'Suiza'
                ],
                
                
                            
                 [
                'id_reg'=>67,
                'description'=>'Suecia'
                ],
                
                
                            
                 [
                'id_reg'=>68,
                'description'=>'Estonia'
                ],
                
                
                            
                 [
                'id_reg'=>69,
                'description'=>'Corea del Sur'
                ],
                
                
                            
                 [
                'id_reg'=>70,
                'description'=>'Japón'
                ],
                
                
                            
                 [
                'id_reg'=>71,
                'description'=>'Croacia'
                ],
                
                
                            
                 [
                'id_reg'=>72,
                'description'=>'Rumanía'
                ],
                
                
                            
                 [
                'id_reg'=>73,
                'description'=>'Hong Kong'
                ],
                
                
                            
                 [
                'id_reg'=>74,
                'description'=>'Indonesia'
                ],
                
                
                            
                 [
                'id_reg'=>75,
                'description'=>'Jordania'
                ],
                
                
                            
                 [
                'id_reg'=>76,
                'description'=>'Malasia'
                ],
                
                
                            
                 [
                'id_reg'=>77,
                'description'=>'Singapur'
                ],
                
                
                            
                 [
                'id_reg'=>78,
                'description'=>'Taiwan'
                ],
                
                
                            
                 [
                'id_reg'=>79,
                'description'=>'Bosnia y Herzegovina'
                ],
                
                
                            
                 [
                'id_reg'=>80,
                'description'=>'Bahamas'
                ],
                
                
                            
                 [
                'id_reg'=>81,
                'description'=>'Chile'
                ],
                
                
                            
                 [
                'id_reg'=>82,
                'description'=>'Colombia'
                ],
                
                
                            
                 [
                'id_reg'=>83,
                'description'=>'Islandia'
                ],
                
                
                            
                 [
                'id_reg'=>84,
                'description'=>'Corea del Norte'
                ],
                
                
                            
                 [
                'id_reg'=>85,
                'description'=>'Macedonia'
                ],
                
                
                            
                 [
                'id_reg'=>86,
                'description'=>'Malta'
                ],
                
                
                            
                 [
                'id_reg'=>87,
                'description'=>'Pakistán'
                ],
                
                
                            
                 [
                'id_reg'=>88,
                'description'=>'Papúa-Nueva Guinea'
                ],
                
                
                            
                 [
                'id_reg'=>89,
                'description'=>'Perú'
                ],
                
                
                            
                 [
                'id_reg'=>90,
                'description'=>'Filipinas'
                ],
                
                
                            
                 [
                'id_reg'=>91,
                'description'=>'Arabia Saudita'
                ],
                
                
                            
                 [
                'id_reg'=>92,
                'description'=>'Tailandia'
                ],
                
                
                            
                 [
                'id_reg'=>93,
                'description'=>'Emiratos árabes Unidos'
                ],
                
                
                            
                 [
                'id_reg'=>94,
                'description'=>'Groenlandia'
                ],
                
                
                            
                 [
                'id_reg'=>95,
                'description'=>'Venezuela'
                ],
                
                
                            
                 [
                'id_reg'=>96,
                'description'=>'Zimbabwe'
                ],
                
                
                            
                 [
                'id_reg'=>97,
                'description'=>'Kenia'
                ],
                
                
                            
                 [
                'id_reg'=>98,
                'description'=>'Algeria'
                ],
                
                
                            
                 [
                'id_reg'=>99,
                'description'=>'Líbano'
                ],
                
                
                            
                 [
                'id_reg'=>100,
                'description'=>'Botsuana'
                ],
                
                
                            
                 [
                'id_reg'=>101,
                'description'=>'Tanzania'
                ],
                
                
                            
                 [
                'id_reg'=>102,
                'description'=>'Namibia'
                ],
                
                
                            
                 [
                'id_reg'=>103,
                'description'=>'Ecuador'
                ],
                
                
                            
                 [
                'id_reg'=>104,
                'description'=>'Marruecos'
                ],
                
                
                            
                 [
                'id_reg'=>105,
                'description'=>'Ghana'
                ],
                
                
                            
                 [
                'id_reg'=>106,
                'description'=>'Siria'
                ],
                
                
                            
                 [
                'id_reg'=>107,
                'description'=>'Nepal'
                ],
                
                
                            
                 [
                'id_reg'=>108,
                'description'=>'Mauritania'
                ],
                
                
                            
                 [
                'id_reg'=>109,
                'description'=>'Seychelles'
                ],
                
                
                            
                 [
                'id_reg'=>110,
                'description'=>'Paraguay'
                ],
                
                
                            
                 [
                'id_reg'=>111,
                'description'=>'Uruguay'
                ],
                
                
                            
                 [
                'id_reg'=>112,
                'description'=>'Congo (Brazzaville)'
                ],
                
                
                            
                 [
                'id_reg'=>113,
                'description'=>'Cuba'
                ],
                
                
                            
                 [
                'id_reg'=>114,
                'description'=>'Albania'
                ],
                
                
                            
                 [
                'id_reg'=>115,
                'description'=>'Nigeria'
                ],
                
                
                            
                 [
                'id_reg'=>116,
                'description'=>'Zambia'
                ],
                  
                 [
                'id_reg'=>117,
                'description'=>'Mozambique'
                ],
                
                
                            
                 [
                'id_reg'=>119,
                'description'=>'Angola'
                ],
                
                
                            
                 [
                'id_reg'=>120,
                'description'=>'Sri Lanka'
                ],
                
                
                            
                 [
                'id_reg'=>121,
                'description'=>'Etiopía'
                ],
                
                
                            
                 [
                'id_reg'=>122,
                'description'=>'Túnez'
                ],
                
                
                            
                 [
                'id_reg'=>123,
                'description'=>'Bolivia'
                ],
                
                
                            
                 [
                'id_reg'=>124,
                'description'=>'Panamá'
                ],
                
                
                            
                 [
                'id_reg'=>125,
                'description'=>'Malawi'
                ],
                
                
                            
                 [
                'id_reg'=>126,
                'description'=>'Liechtenstein'
                ],
                
                
                            
                 [
                'id_reg'=>127,
                'description'=>'Bahrein'
                ],
                
                
                            
                 [
                'id_reg'=>128,
                'description'=>'Barbados'
                ],
                
                
                            
                 [
                'id_reg'=>130,
                'description'=>'Chad'
                ],
                
                
                            
                 [
                'id_reg'=>131,
                'description'=>'Man, Isla de'
                ],
                
                
                            
                 [
                'id_reg'=>132,
                'description'=>'Jamaica'
                ],
                
                
                            
                 [
                'id_reg'=>133,
                'description'=>'Malí'
                ],
                
                
                            
                 [
                'id_reg'=>134,
                'description'=>'Madagascar'
                ],
                
                
                            
                 [
                'id_reg'=>135,
                'description'=>'Senegal'
                ],
                
                
                            
                 [
                'id_reg'=>136,
                'description'=>'Togo'
                ],
                
                
                            
                 [
                'id_reg'=>137,
                'description'=>'Honduras'
                ],
                
                
                            
                 [
                'id_reg'=>138,
                'description'=>'República Dominicana'
                ],
                
                
                            
                 [
                'id_reg'=>139,
                'description'=>'Mongolia'
                ],
                
                
                            
                 [
                'id_reg'=>140,
                'description'=>'Irak'
                ],
                
                
                            
                 [
                'id_reg'=>141,
                'description'=>'Sudáfrica'
                ],
                
                
                            
                 [
                'id_reg'=>142,
                'description'=>'Aruba'
                ],
                
                
                            
                 [
                'id_reg'=>143,
                'description'=>'Gibraltar'
                ],
                
                
                            
                 [
                'id_reg'=>144,
                'description'=>'Afganistán'
                ],
                
                
                            
                 [
                'id_reg'=>145,
                'description'=>'Andorra'
                ],
                
                
                            
                 [
                'id_reg'=>147,
                'description'=>'Antigua y Barbuda'
                ],
                
                
                            
                 [
                'id_reg'=>149,
                'description'=>'Bangladesh'
                ],
                
                
                            
                 [
                'id_reg'=>151,
                'description'=>'Benín'
                ],
                
                
                            
                 [
                'id_reg'=>152,
                'description'=>'Bután'
                ],
                
                
                            
                 [
                'id_reg'=>154,
                'description'=>'Islas Virgenes Británicas'
                ],
                
                
                            
                 [
                'id_reg'=>155,
                'description'=>'Brunéi'
                ],
                
                
                            
                 [
                'id_reg'=>156,
                'description'=>'Burkina Faso'
                ],
                
                
                            
                 [
                'id_reg'=>157,
                'description'=>'Burundi'
                ],
                
                
                            
                 [
                'id_reg'=>158,
                'description'=>'Camboya'
                ],
                
                
                            
                 [
                'id_reg'=>159,
                'description'=>'Cabo Verde'
                ],
                
                
                            
                 [
                'id_reg'=>164,
                'description'=>'Comores'
                ],
                
                
                            
                 [
                'id_reg'=>165,
                'description'=>'Congo (Kinshasa)'
                ],
                
                
                            
                 [
                'id_reg'=>166,
                'description'=>'Cook, Islas'
                ],
                
                
                            
                 [
                'id_reg'=>168,
                'description'=>'Costa de Marfil'
                ],
                
                
                            
                 [
                'id_reg'=>169,
                'description'=>'Djibouti, Yibuti'
                ],
                
                
                            
                 [
                'id_reg'=>171,
                'description'=>'Timor Oriental'
                ],
                
                
                            
                 [
                'id_reg'=>172,
                'description'=>'Guinea Ecuatorial'
                ],
                
                
                            
                 [
                'id_reg'=>173,
                'description'=>'Eritrea'
                ],
                
                
                            
                 [
                'id_reg'=>175,
                'description'=>'Feroe, Islas'
                ],
                
                
                            
                 [
                'id_reg'=>176,
                'description'=>'Fiyi'
                ],
                
                
                            
                 [
                'id_reg'=>178,
                'description'=>'Polinesia Francesa'
                ],
                
                
                            
                 [
                'id_reg'=>180,
                'description'=>'Gabón'
                ],
                
                
                            
                 [
                'id_reg'=>181,
                'description'=>'Gambia'
                ],
                
                
                            
                 [
                'id_reg'=>184,
                'description'=>'Granada'
                ],
                
                
                            
                 [
                'id_reg'=>185,
                'description'=>'Guatemala'
                ],
                
                
                            
                 [
                'id_reg'=>186,
                'description'=>'Guernsey'
                ],
                
                
                            
                 [
                'id_reg'=>187,
                'description'=>'Guinea'
                ],
                
                
                            
                 [
                'id_reg'=>188,
                'description'=>'Guinea-Bissau'
                ],
                
                
                            
                 [
                'id_reg'=>189,
                'description'=>'Guyana'
                ],
                
                
                            
                 [
                'id_reg'=>193,
                'description'=>'Jersey'
                ],
                
                
                            
                 [
                'id_reg'=>195,
                'description'=>'Kiribati'
                ],
                
                
                            
                 [
                'id_reg'=>196,
                'description'=>'Laos'
                ],
                
                
                            
                 [
                'id_reg'=>197,
                'description'=>'Lesotho'
                ],
                
                
                            
                 [
                'id_reg'=>198,
                'description'=>'Liberia'
                ],
                
                
                            
                 [
                'id_reg'=>200,
                'description'=>'Maldivas'
                ],
                
                
                            
                 [
                'id_reg'=>201,
                'description'=>'Martinica'
                ],
                
                
                            
                 [
                'id_reg'=>202,
                'description'=>'Mauricio'
                ],
                
                
                            
                 [
                'id_reg'=>205,
                'description'=>'Myanmar'
                ],
                
                
                            
                 [
                'id_reg'=>206,
                'description'=>'Nauru'
                ],
                
                
                            
                 [
                'id_reg'=>207,
                'description'=>'Antillas Holandesas'
                ],
                
                
                            
                 [
                'id_reg'=>208,
                'description'=>'Nueva Caledonia'
                ],
                
                
                            
                 [
                'id_reg'=>209,
                'description'=>'Nicaragua'
                ],
                
                
                            
                 [
                'id_reg'=>210,
                'description'=>'Níger'
                ],
                
                
                            
                 [
                'id_reg'=>212,
                'description'=>'Norfolk Island'
                ],
                
                
                            
                 [
                'id_reg'=>213,
                'description'=>'Omán'
                ],
                
                
                            
                 [
                'id_reg'=>215,
                'description'=>'Isla Pitcairn'
                ],
                
                
                            
                 [
                'id_reg'=>216,
                'description'=>'Qatar'
                ],
                
                
                            
                 [
                'id_reg'=>217,
                'description'=>'Ruanda'
                ],
                
                
                            
                 [
                'id_reg'=>218,
                'description'=>'Santa Elena'
                ],
                
                
                            
                 [
                'id_reg'=>219,
                'description'=>'San Cristobal y Nevis'
                ],
                
                
                            
                 [
                'id_reg'=>220,
                'description'=>'Santa Lucía'
                ],
                
                
                            
                 [
                'id_reg'=>221,
                'description'=>'San Pedro y Miquelón'
                ],
                
                
                            
                 [
                'id_reg'=>222,
                'description'=>'San Vincente y Granadinas'
                ],
                
                
                            
                 [
                'id_reg'=>223,
                'description'=>'Samoa'
                ],
                
                
                            
                 [
                'id_reg'=>224,
                'description'=>'San Marino'
                ],
                
                
                            
                 [
                'id_reg'=>225,
                'description'=>'San Tomé y Príncipe'
                ],
                
                
                            
                 [
                'id_reg'=>226,
                'description'=>'Serbia y Montenegro'
                ],
                
                
                            
                 [
                'id_reg'=>227,
                'description'=>'Sierra Leona'
                ],
                
                
                            
                 [
                'id_reg'=>228,
                'description'=>'Islas Salomón'
                ],
                
                
                            
                 [
                'id_reg'=>229,
                'description'=>'Somalia'
                ],
                
                
                            
                 [
                'id_reg'=>232,
                'description'=>'Sudán'
                ],
                
                
                            
                 [
                'id_reg'=>234,
                'description'=>'Swazilandia'
                ],
                
                
                            
                 [
                'id_reg'=>235,
                'description'=>'Tokelau'
                ],
                
                
                            
                 [
                'id_reg'=>236,
                'description'=>'Tonga'
                ],
                
                
                            
                 [
                'id_reg'=>237,
                'description'=>'Trinidad y Tobago'
                ],
                
                
                            
                 [
                'id_reg'=>239,
                'description'=>'Tuvalu'
                ],
                
                
                            
                 [
                'id_reg'=>240,
                'description'=>'Vanuatu'
                ],
                
                
                            
                 [
                'id_reg'=>241,
                'description'=>'Wallis y Futuna'
                ],         
                 [
                'id_reg'=>242,
                'description'=>'Sáhara Occidental'
                ],
                
                
                            
                 [
                'id_reg'=>243,
                'description'=>'Yemen'
                ],
                
                
                            
                 [
                'id_reg'=>246,
                'description'=>'Puerto Rico'
                ]
        ]);  

        $DB->table('communes')->insert([
            [
                'id_com'=>1,
                'id_reg'=>3,
                'description'=>'Azerbaijan'
                ],
                
                
                            
                [
                'id_com'=>2,
                'id_reg'=>3,
                'description'=>'Nargorni Karabakh'
                ],
                
                
                            
                [
                'id_com'=>3,
                'id_reg'=>3,
                'description'=>'Nakhichevanskaya Region'
                ],
                
                
                            
                [
                'id_com'=>4,
                'id_reg'=>4,
                'description'=>'Anguilla'
                ],
                
                
                            
                [
                'id_com'=>5,
                'id_reg'=>7,
                'description'=>'Brestskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>6,
                'id_reg'=>7,
                'description'=>'Vitebskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>7,
                'id_reg'=>7,
                'description'=>'Gomelskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>8,
                'id_reg'=>7,
                'description'=>'Grodnenskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>9,
                'id_reg'=>7,
                'description'=>'Minskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>10,
                'id_reg'=>7,
                'description'=>'Mogilevskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>11,
                'id_reg'=>8,
                'description'=>'Belize'
                ],
                
                
                            
                [
                'id_com'=>12,
                'id_reg'=>10,
                'description'=>'Hamilton'
                ],
                
                
                            
                [
                'id_com'=>13,
                'id_reg'=>15,
                'description'=>'Dong Bang Song Cuu Long'
                ],
                
                
                            
                [
                'id_com'=>14,
                'id_reg'=>15,
                'description'=>'Dong Bang Song Hong'
                ],
                
                
                            
                [
                'id_com'=>15,
                'id_reg'=>15,
                'description'=>'Dong Nam Bo'
                ],
                
                
                            
                [
                'id_com'=> 16,
                'id_reg'=>15,
                'description'=>'Duyen Hai Mien Trung'
                ],
                
                
                            
                [
                'id_com'=>17,
                'id_reg'=>15,
                'description'=>'Khu Bon Cu'
                ],
                
                
                            
                [
                'id_com'=>18,
                'id_reg'=>15,
                'description'=>'Mien Nui Va Trung Du'
                ],
                
                
                            
                [
                'id_com'=>19,
                'id_reg'=>15,
                'description'=>'Thai Nguyen'
                ],
                
                
                            
                [
                'id_com'=>20,
                'id_reg'=>16,
                'description'=>'Artibonite'
                ],
                
                
                            
                [
                'id_com'=>21,
                'id_reg'=>16,
                'description'=>'Grand Anse'
                ],
                
                
                            
                [
                'id_com'=>22,
                'id_reg'=>16,
                'description'=>'North West'
                ],
                
                
                            
                [
                'id_com'=>23,
                'id_reg'=>16,
                'description'=>'West'
                ],
                
                
                            
                [
                'id_com'=>24,
                'id_reg'=>16,
                'description'=>'South'
                ],
                
                
                            
                [
                'id_com'=>25,
                'id_reg'=>16,
                'description'=>'South East'
                ],
                
                
                            
                [
                'id_com'=>26,
                'id_reg'=>17,
                'description'=>'Grande-Terre'
                ],
                
                
                            
                [
                'id_com'=>27,
                'id_reg'=>17,
                'description'=>'Basse-Terre'
                ],
                
                
                            
                [
                'id_com'=>28,
                'id_reg'=>21,
                'description'=>'Abkhazia'
                ],
                
                
                            
                [
                'id_com'=>29,
                'id_reg'=>21,
                'description'=>'Ajaria'
                ],
                
                
                            
                [
                'id_com'=>30,
                'id_reg'=>21,
                'description'=>'Georgia'
                ],
                
                
                            
                [
                'id_com'=>31,
                'id_reg'=>21,
                'description'=>'South Ossetia'
                ],
                
                
                            
                [
                'id_com'=>32,
                'id_reg'=>23,
                'description'=>'Al QÄhira'
                ],
                
                
                            
                [
                'id_com'=>33,
                'id_reg'=>23,
                'description'=>'Aswan'
                ],
                
                
                            
                [
                'id_com'=>34,
                'id_reg'=>23,
                'description'=>'Asyut'
                ],
                
                
                            
                [
                'id_com'=>35,
                'id_reg'=>23,
                'description'=>'Beni Suef'
                ],
                
                
                            
                [
                'id_com'=>36,
                'id_reg'=>23,
                'description'=>'Gharbia'
                ],
                
                
                            
                [
                'id_com'=>37,
                'id_reg'=>23,
                'description'=>'Damietta'
                ],
                
                
                            
                [
                'id_com'=>38,
                'id_reg'=>24,
                'description'=>'Southern District'
                ],
                
                
                            
                [
                'id_com'=>39,
                'id_reg'=>24,
                'description'=>'Central District'
                ],
                
                
                            
                [
                'id_com'=>40,
                'id_reg'=>24,
                'description'=>'Northern District'
                ],
                
                
                            
                [
                'id_com'=>41,
                'id_reg'=>24,
                'description'=>'Haifa'
                ],
                
                
                            
                [
                'id_com'=>42,
                'id_reg'=>24,
                'description'=>'Tel Aviv'
                ],
                
                
                            
                [
                'id_com'=>43,
                'id_reg'=>24,
                'description'=>'Jerusalem'
                ],
                
                
                            
                [
                'id_com'=>44,
                'id_reg'=>25,
                'description'=>'Bangala'
                ],
                
                
                            
                [
                'id_com'=>45,
                'id_reg'=>25,
                'description'=>'Chhattisgarh'
                ],
                
                
                            
                [
                'id_com'=>46,
                'id_reg'=>25,
                'description'=>'Karnataka'
                ],
                
                
                            
                [
                'id_com'=>47,
                'id_reg'=>25,
                'description'=>'Uttaranchal'
                ],
                
                
                            
                [
                'id_com'=>48,
                'id_reg'=>25,
                'description'=>'Andhara Pradesh'
                ],
                
                
                            
                [
                'id_com'=>49,
                'id_reg'=>25,
                'description'=>'Assam'
                ],
                
                
                            
                [
                'id_com'=>50,
                'id_reg'=>25,
                'description'=>'Bihar'
                ],
                
                
                            
                [
                'id_com'=>51,
                'id_reg'=>25,
                'description'=>'Gujarat'
                ],
                
                
                            
                [
                'id_com'=>52,
                'id_reg'=>25,
                'description'=>'Jammu and Kashmir'
                ],
                
                
                            
                [
                'id_com'=>53,
                'id_reg'=>25,
                'description'=>'Kerala'
                ],
                
                
                            
                [
                'id_com'=>54,
                'id_reg'=>25,
                'description'=>'Madhya Pradesh'
                ],
                
                
                            
                [
                'id_com'=>55,
                'id_reg'=>25,
                'description'=>'Manipur'
                ],
                
                
                            
                [
                'id_com'=>56,
                'id_reg'=>25,
                'description'=>'Maharashtra'
                ],
                
                
                            
                [
                'id_com'=>57,
                'id_reg'=>25,
                'description'=>'Megahalaya'
                ],
                
                
                            
                [
                'id_com'=>58,
                'id_reg'=>25,
                'description'=>'Orissa'
                ],
                
                
                            
                [
                'id_com'=>59,
                'id_reg'=>25,
                'description'=>'Punjab'
                ],
                
                
                            
                [
                'id_com'=>60,
                'id_reg'=>25,
                'description'=>'Pondisheri'
                ],
                
                
                            
                [
                'id_com'=>61,
                'id_reg'=>25,
                'description'=>'Rajasthan'
                ],
                
                
                            
                [
                'id_com'=>62,
                'id_reg'=>25,
                'description'=>'Tamil Nadu'
                ],
                
                
                            
                [
                'id_com'=>63,
                'id_reg'=>25,
                'description'=>'Tripura'
                ],
                
                
                            
                [
                'id_com'=>64,
                'id_reg'=>25,
                'description'=>'Uttar Pradesh'
                ],
                
                
                            
                [
                'id_com'=>65,
                'id_reg'=>25,
                'description'=>'Haryana'
                ],
                
                
                            
                [
                'id_com'=>66,
                'id_reg'=>25,
                'description'=>'Chandigarh'
                ],
                
                
                            
                [
                'id_com'=>67,
                'id_reg'=>26,
                'description'=>'Azarbayjan-e Khavari'
                ],
                
                
                            
                [
                'id_com'=>68,
                'id_reg'=>26,
                'description'=>'Esfahan'
                ],
                
                
                            
                [
                'id_com'=>69,
                'id_reg'=>26,
                'description'=>'Hamadan'
                ],
                
                
                            
                [
                'id_com'=>70,
                'id_reg'=>26,
                'description'=>'Kordestan'
                ],
                
                
                            
                [
                'id_com'=>71,
                'id_reg'=>26,
                'description'=>'Markazi'
                ],
                
                
                            
                [
                'id_com'=>72,
                'id_reg'=>26,
                'description'=>'Sistan-e Baluches'
                ],
                
                
                            
                [
                'id_com'=>73,
                'id_reg'=>26,
                'description'=>'Yazd'
                ],
                
                
                            
                [
                'id_com'=>74,
                'id_reg'=>26,
                'description'=>'Kerman'
                ],
                
                
                            
                [
                'id_com'=>75,
                'id_reg'=>26,
                'description'=>'Kermanshakhan'
                ],
                
                
                            
                [
                'id_com'=>76,
                'id_reg'=>26,
                'description'=>'Mazenderan'
                ],
                
                
                            
                [
                'id_com'=>77,
                'id_reg'=>26,
                'description'=>'Tehran'
                ],
                
                
                            
                [
                'id_com'=>78,
                'id_reg'=>26,
                'description'=>'Fars'
                ],
                
                
                            
                [
                'id_com'=>79,
                'id_reg'=>26,
                'description'=>'Horasan'
                ],
                
                
                            
                [
                'id_com'=>80,
                'id_reg'=>26,
                'description'=>'Husistan'
                ],
                
                
                            
                [
                'id_com'=>81,
                'id_reg'=>30,
                'description'=>'Aktyubinskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>82,
                'id_reg'=>30,
                'description'=>'Alma-Atinskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>83,
                'id_reg'=>30,
                'description'=>'Vostochno-Kazahstanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>84,
                'id_reg'=>30,
                'description'=>'Gurevskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>85,
                'id_reg'=>30,
                'description'=>'Zhambylskaya obl. (Dzhambulskaya obl.)'
                ],
                
                
                            
                [
                'id_com'=>86,
                'id_reg'=>30,
                'description'=>'Dzhezkazganskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>87,
                'id_reg'=>30,
                'description'=>'Karagandinskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>88,
                'id_reg'=>30,
                'description'=>'Kzyl-Ordinskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>89,
                'id_reg'=>30,
                'description'=>'Kokchetavskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>90,
                'id_reg'=>30,
                'description'=>'Kustanaiskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>91,
                'id_reg'=>30,
                'description'=>'Mangystauskaya (Mangyshlakskaya obl.)'
                ],
                
                
                            
                [
                'id_com'=>92,
                'id_reg'=>30,
                'description'=>'Pavlodarskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>93,
                'id_reg'=>30,
                'description'=>'Severo-Kazahstanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>94,
                'id_reg'=>30,
                'description'=>'Taldy-Kurganskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>95,
                'id_reg'=>30,
                'description'=>'Turgaiskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>96,
                'id_reg'=>30,
                'description'=>'Akmolinskaya obl. (Tselinogradskaya obl.)'
                ],
                
                
                            
                [
                'id_com'=>97,
                'id_reg'=>30,
                'description'=>'Chimkentskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>98,
                'id_reg'=>31,
                'description'=>'Littoral'
                ],
                
                
                            
                [
                'id_com'=>99,
                'id_reg'=>31,
                'description'=>'Southwest Region'
                ],
                
                
                            
                [
                'id_com'=>100,
                'id_reg'=>31,
                'description'=>'North'
                ],
                
                
                            
                [
                'id_com'=>101,
                'id_reg'=>31,
                'description'=>'Central'
                ],
                
                
                            
                [
                'id_com'=>102,
                'id_reg'=>33,
                'description'=>'Government controlled area'
                ],
                
                
                            
                [
                'id_com'=>103,
                'id_reg'=>33,
                'description'=>'Turkish controlled area'
                ],
                
                
                            
                [
                'id_com'=>104,
                'id_reg'=>34,
                'description'=>'Issik Kulskaya Region'
                ],
                
                
                            
                [
                'id_com'=>105,
                'id_reg'=>34,
                'description'=>'Kyrgyzstan'
                ],
                
                
                            
                [
                'id_com'=>106,
                'id_reg'=>34,
                'description'=>'Narinskaya Region'
                ],
                
                
                            
                [
                'id_com'=>107,
                'id_reg'=>34,
                'description'=>'Oshskaya Region'
                ],
                
                
                            
                [
                'id_com'=>108,
                'id_reg'=>34,
                'description'=>'Tallaskaya Region'
                ],
                
                
                            
                [
                'id_com'=>109,
                'id_reg'=>37,
                'description'=>'al-Jahra'
                ],
                
                
                            
                [
                'id_com'=>110,
                'id_reg'=>37,
                'description'=>'al-Kuwait'
                ],
                
                
                            
                [
                'id_com'=>111,
                'id_reg'=>38,
                'description'=>'Latviya'
                ],
                
                
                            
                [
                'id_com'=>112,
                'id_reg'=>39,
                'description'=>'Tarabulus'
                ],
                
                
                            
                [
                'id_com'=>113,
                'id_reg'=>39,
                'description'=>'Bengasi'
                ],
                
                
                            
                [
                'id_com'=>114,
                'id_reg'=>40,
                'description'=>'Litva'
                ],
                
                
                            
                [
                'id_com'=>115,
                'id_reg'=>43,
                'description'=>'Moldova'
                ],
                
                
                            
                [
                'id_com'=>116,
                'id_reg'=>45,
                'description'=>'Auckland'
                ],
                
                
                            
                [
                'id_com'=>117,
                'id_reg'=>45,
                'description'=>'Bay of Plenty'
                ],
                
                
                            
                [
                'id_com'=>118,
                'id_reg'=>45,
                'description'=>'Canterbury'
                ],
                
                
                            
                [
                'id_com'=>119,
                'id_reg'=>45,
                'description'=>'Gisborne'
                ],
                
                
                            
                [
                'id_com'=>120,
                'id_reg'=>45,
                'description'=>'Hawke Bay'
                ],
                
                
                            
                [
                'id_com'=>121,
                'id_reg'=>45,
                'description'=>'Manawatu-Wanganui'
                ],
                
                
                            
                [
                'id_com'=>122,
                'id_reg'=>45,
                'description'=>'Marlborough'
                ],
                
                
                            
                [
                'id_com'=>123,
                'id_reg'=>45,
                'description'=>'Nelson'
                ],
                
                
                            
                [
                'id_com'=>124,
                'id_reg'=>45,
                'description'=>'Northland'
                ],
                
                
                            
                [
                'id_com'=>125,
                'id_reg'=>45,
                'description'=>'Otago'
                ],
                
                
                            
                [
                'id_com'=>126,
                'id_reg'=>45,
                'description'=>'Southland'
                ],
                
                
                            
                [
                'id_com'=>127,
                'id_reg'=>45,
                'description'=>'Taranaki'
                ],
                
                
                            
                [
                'id_com'=>128,
                'id_reg'=>45,
                'description'=>'Tasman'
                ],
                
                
                            
                [
                'id_com'=>129,
                'id_reg'=>45,
                'description'=>'Waikato'
                ],
                
                
                            
                [
                'id_com'=>130,
                'id_reg'=>45,
                'description'=>'Wellington'
                ],
                
                
                            
                [
                'id_com'=>131,
                'id_reg'=>45,
                'description'=>'West Coast'
                ],
                
                
                            
                [
                'id_com'=>132,
                'id_reg'=>49,
                'description'=>'Saint-Denis'
                ],
                
                
                            
                [
                'id_com'=>133,
                'id_reg'=>50,
                'description'=>'Altaiskii krai'
                ],
                
                
                            
                [
                'id_com'=>134,
                'id_reg'=>50,
                'description'=>'Amurskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>135,
                'id_reg'=>50,
                'description'=>'Arhangelskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>136,
                'id_reg'=>50,
                'description'=>'Astrahanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>137,
                'id_reg'=>50,
                'description'=>'Bashkiriya obl.'
                ],
                
                
                            
                [
                'id_com'=>138,
                'id_reg'=>50,
                'description'=>'Belgorodskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>139,
                'id_reg'=>50,
                'description'=>'Bryanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>140,
                'id_reg'=>50,
                'description'=>'Buryatiya'
                ],
                
                
                            
                [
                'id_com'=>141,
                'id_reg'=>50,
                'description'=>'Vladimirskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>142,
                'id_reg'=>50,
                'description'=>'Volgogradskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>143,
                'id_reg'=>50,
                'description'=>'Vologodskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>144,
                'id_reg'=>50,
                'description'=>'Voronezhskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>145,
                'id_reg'=>50,
                'description'=>'Nizhegorodskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>146,
                'id_reg'=>50,
                'description'=>'Dagestan'
                ],
                
                
                            
                [
                'id_com'=>147,
                'id_reg'=>50,
                'description'=>'Evreiskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>148,
                'id_reg'=>50,
                'description'=>'Ivanovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>149,
                'id_reg'=>50,
                'description'=>'Irkutskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>150,
                'id_reg'=>50,
                'description'=>'Kabardino-Balkariya'
                ],
                
                
                            
                [
                'id_com'=>151,
                'id_reg'=>50,
                'description'=>'Kaliningradskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>152,
                'id_reg'=>50,
                'description'=>'Tverskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>153,
                'id_reg'=>50,
                'description'=>'Kalmykiya'
                ],
                
                
                            
                [
                'id_com'=>154,
                'id_reg'=>50,
                'description'=>'Kaluzhskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>155,
                'id_reg'=>50,
                'description'=>'Kamchatskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>156,
                'id_reg'=>50,
                'description'=>'Kareliya'
                ],
                
                
                            
                [
                'id_com'=>157,
                'id_reg'=>50,
                'description'=>'Kemerovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>158,
                'id_reg'=>50,
                'description'=>'Kirovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>159,
                'id_reg'=>50,
                'description'=>'Komi'
                ],
                
                
                            
                [
                'id_com'=>160,
                'id_reg'=>50,
                'description'=>'Kostromskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>161,
                'id_reg'=>50,
                'description'=>'Krasnodarskii krai'
                ],
                
                
                            
                [
                'id_com'=>162,
                'id_reg'=>50,
                'description'=>'Krasnoyarskii krai'
                ],
                
                
                            
                [
                'id_com'=>163,
                'id_reg'=>50,
                'description'=>'Kurganskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>164,
                'id_reg'=>50,
                'description'=>'Kurskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>165,
                'id_reg'=>50,
                'description'=>'Lipetskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>166,
                'id_reg'=>50,
                'description'=>'Magadanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>167,
                'id_reg'=>50,
                'description'=>'Marii El'
                ],
                
                
                            
                [
                'id_com'=>168,
                'id_reg'=>50,
                'description'=>'Mordoviya'
                ],
                
                
                            
                [
                'id_com'=>169,
                'id_reg'=>50,
                'description'=>'Moscow & Moscow Region'
                ],
                
                
                            
                [
                'id_com'=>170,
                'id_reg'=>50,
                'description'=>'Murmanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>171,
                'id_reg'=>50,
                'description'=>'Novgorodskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>172,
                'id_reg'=>50,
                'description'=>'Novosibirskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>173,
                'id_reg'=>50,
                'description'=>'Omskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>174,
                'id_reg'=>50,
                'description'=>'Orenburgskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>175,
                'id_reg'=>50,
                'description'=>'Orlovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>176,
                'id_reg'=>50,
                'description'=>'Penzenskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>177,
                'id_reg'=>50,
                'description'=>'Permskiy krai'
                ],
                
                
                            
                [
                'id_com'=>178,
                'id_reg'=>50,
                'description'=>'Primorskii krai'
                ],
                
                
                            
                [
                'id_com'=>179,
                'id_reg'=>50,
                'description'=>'Pskovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>180,
                'id_reg'=>50,
                'description'=>'Rostovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>181,
                'id_reg'=>50,
                'description'=>'Ryazanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>182,
                'id_reg'=>50,
                'description'=>'Samarskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>183,
                'id_reg'=>50,
                'description'=>'Saint-Petersburg and Region'
                ],
                
                
                            
                [
                'id_com'=>184,
                'id_reg'=>50,
                'description'=>'Saratovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>185,
                'id_reg'=>50,
                'description'=>'Saha (Yakutiya)'
                ],
                
                
                            
                [
                'id_com'=>186,
                'id_reg'=>50,
                'description'=>'Sahalin'
                ],
                
                
                            
                [
                'id_com'=>187,
                'id_reg'=>50,
                'description'=>'Sverdlovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>188,
                'id_reg'=>50,
                'description'=>'Severnaya Osetiya'
                ],
                
                
                            
                [
                'id_com'=>189,
                'id_reg'=>50,
                'description'=>'Smolenskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>190,
                'id_reg'=>50,
                'description'=>'Stavropolskii krai'
                ],
                
                
                            
                [
                'id_com'=>191,
                'id_reg'=>50,
                'description'=>'Tambovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>192,
                'id_reg'=>50,
                'description'=>'Tatarstan'
                ],
                
                
                            
                [
                'id_com'=>193,
                'id_reg'=>50,
                'description'=>'Tomskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>195,
                'id_reg'=>50,
                'description'=>'Tulskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>196,
                'id_reg'=>50,
                'description'=>'Tyumenskaya obl. i Hanty-Mansiiskii AO'
                ],
                
                
                            
                [
                'id_com'=>197,
                'id_reg'=>50,
                'description'=>'Udmurtiya'
                ],
                
                
                            
                [
                'id_com'=>198,
                'id_reg'=>50,
                'description'=>'Ulyanovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>199,
                'id_reg'=>50,
                'description'=>'Uralskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>200,
                'id_reg'=>50,
                'description'=>'Habarovskii krai'
                ],
                
                
                            
                [
                'id_com'=>201,
                'id_reg'=>50,
                'description'=>'Chelyabinskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>202,
                'id_reg'=>50,
                'description'=>'Checheno-Ingushetiya'
                ],
                
                
                            
                [
                'id_com'=>203,
                'id_reg'=>50,
                'description'=>'Chitinskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>204,
                'id_reg'=>50,
                'description'=>'Chuvashiya'
                ],
                
                
                            
                [
                'id_com'=>205,
                'id_reg'=>50,
                'description'=>'Yaroslavskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>206,
                'id_reg'=>51,
                'description'=>'Ahuachapán'
                ],
                
                
                            
                [
                'id_com'=>207,
                'id_reg'=>51,
                'description'=>'Cuscatlán'
                ],
                
                
                            
                [
                'id_com'=>208,
                'id_reg'=>51,
                'description'=>'La Libertad'
                ],
                
                
                            
                [
                'id_com'=>209,
                'id_reg'=>51,
                'description'=>'La Paz'
                ],
                
                
                            
                [
                'id_com'=>210,
                'id_reg'=>51,
                'description'=>'La Unión'
                ],
                
                
                            
                [
                'id_com'=>211,
                'id_reg'=>51,
                'description'=>'San Miguel'
                ],
                
                
                            
                [
                'id_com'=>212,
                'id_reg'=>51,
                'description'=>'San Salvador'
                ],
                
                
                            
                [
                'id_com'=>213,
                'id_reg'=>51,
                'description'=>'Santa Ana'
                ],
                
                
                            
                [
                'id_com'=>214,
                'id_reg'=>51,
                'description'=>'Sonsonate'
                ],
                
                
                            
                [
                'id_com'=>215,
                'id_reg'=>54,
                'description'=>'Paramaribo'
                ],
                
                
                            
                [
                'id_com'=>216,
                'id_reg'=>56,
                'description'=>'Gorno-Badakhshan Region'
                ],
                
                
                            
                [
                'id_com'=>217,
                'id_reg'=>56,
                'description'=>'Kuljabsk Region'
                ],
                
                
                            
                [
                'id_com'=>218,
                'id_reg'=>56,
                'description'=>'Kurgan-Tjube Region'
                ],
                
                
                            
                [
                'id_com'=>219,
                'id_reg'=>56,
                'description'=>'Sughd Region'
                ],
                
                
                            
                [
                'id_com'=>220,
                'id_reg'=>56,
                'description'=>'Tajikistan'
                ],
                
                
                            
                [
                'id_com'=>221,
                'id_reg'=>57,
                'description'=>'Ashgabat Region'
                ],
                
                
                            
                [
                'id_com'=>222,
                'id_reg'=>57,
                'description'=>'Krasnovodsk Region'
                ],
                
                
                            
                [
                'id_com'=>223,
                'id_reg'=>57,
                'description'=>'Mary Region'
                ],
                
                
                            
                [
                'id_com'=>224,
                'id_reg'=>57,
                'description'=>'Tashauz Region'
                ],
                
                
                            
                [
                'id_com'=>225,
                'id_reg'=>57,
                'description'=>'Chardzhou Region'
                ],
                
                
                            
                [
                'id_com'=>226,
                'id_reg'=>58,
                'description'=>'Grand Turk'
                ],
                
                
                            
                [
                'id_com'=>227,
                'id_reg'=>59,
                'description'=>'Bartin'
                ],
                
                
                            
                [
                'id_com'=>228,
                'id_reg'=>59,
                'description'=>'Bayburt'
                ],
                
                
                            
                [
                'id_com'=>229,
                'id_reg'=>59,
                'description'=>'Karabuk'
                ],
                
                
                            
                [
                'id_com'=>230,
                'id_reg'=>59,
                'description'=>'Adana'
                ],
                
                
                            
                [
                'id_com'=>231,
                'id_reg'=>59,
                'description'=>'Aydin'
                ],
                
                
                            
                [
                'id_com'=>232,
                'id_reg'=>59,
                'description'=>'Amasya'
                ],
                
                
                            
                [
                'id_com'=>233,
                'id_reg'=>59,
                'description'=>'Ankara'
                ],
                
                
                            
                [
                'id_com'=>234,
                'id_reg'=>59,
                'description'=>'Antalya'
                ],
                
                
                            
                [
                'id_com'=>235,
                'id_reg'=>59,
                'description'=>'Artvin'
                ],
                
                
                            
                [
                'id_com'=>236,
                'id_reg'=>59,
                'description'=>'Afion'
                ],
                
                
                            
                [
                'id_com'=>237,
                'id_reg'=>59,
                'description'=>'Balikesir'
                ],
                
                
                            
                [
                'id_com'=>238,
                'id_reg'=>59,
                'description'=>'Bilecik'
                ],
                
                
                            
                [
                'id_com'=>239,
                'id_reg'=>59,
                'description'=>'Bursa'
                ],
                
                
                            
                [
                'id_com'=>240,
                'id_reg'=>59,
                'description'=>'Gaziantep'
                ],
                
                
                            
                [
                'id_com'=>241,
                'id_reg'=>59,
                'description'=>'Denizli'
                ],
                
                
                            
                [
                'id_com'=>242,
                'id_reg'=>59,
                'description'=>'Izmir'
                ],
                
                
                            
                [
                'id_com'=>243,
                'id_reg'=>59,
                'description'=>'Isparta'
                ],
                
                
                            
                [
                'id_com'=>244,
                'id_reg'=>59,
                'description'=>'Icel'
                ],
                
                
                            
                [
                'id_com'=>245,
                'id_reg'=>59,
                'description'=>'Kayseri'
                ],
                
                
                            
                [
                'id_com'=>246,
                'id_reg'=>59,
                'description'=>'Kars'
                ],
                
                
                            
                [
                'id_com'=>247,
                'id_reg'=>59,
                'description'=>'Kodjaeli'
                ],
                
                
                            
                [
                'id_com'=>248,
                'id_reg'=>59,
                'description'=>'Konya'
                ],
                
                
                            
                [
                'id_com'=>249,
                'id_reg'=>59,
                'description'=>'Kirklareli'
                ],
                
                
                            
                [
                'id_com'=>250,
                'id_reg'=>59,
                'description'=>'Kutahya'
                ],
                
                
                            
                [
                'id_com'=>251,
                'id_reg'=>59,
                'description'=>'Malatya'
                ],
                
                
                            
                [
                'id_com'=>252,
                'id_reg'=>59,
                'description'=>'Manisa'
                ],
                
                
                            
                [
                'id_com'=>253,
                'id_reg'=>59,
                'description'=>'Sakarya'
                ],
                
                
                            
                [
                'id_com'=>254,
                'id_reg'=>59,
                'description'=>'Samsun'
                ],
                
                
                            
                [
                'id_com'=>255,
                'id_reg'=>59,
                'description'=>'Sivas'
                ],
                
                
                            
                [
                'id_com'=>256,
                'id_reg'=>59,
                'description'=>'Istanbul'
                ],
                
                
                            
                [
                'id_com'=>257,
                'id_reg'=>59,
                'description'=>'Trabzon'
                ],
                
                
                            
                [
                'id_com'=>258,
                'id_reg'=>59,
                'description'=>'Corum'
                ],
                
                
                            
                [
                'id_com'=>259,
                'id_reg'=>59,
                'description'=>'Edirne'
                ],
                
                
                            
                [
                'id_com'=>260,
                'id_reg'=>59,
                'description'=>'Elazig'
                ],
                
                
                            
                [
                'id_com'=>261,
                'id_reg'=>59,
                'description'=>'Erzincan'
                ],
                
                
                            
                [
                'id_com'=>262,
                'id_reg'=>59,
                'description'=>'Erzurum'
                ],
                
                
                            
                [
                'id_com'=>263,
                'id_reg'=>59,
                'description'=>'Eskisehir'
                ],
                
                
                            
                [
                'id_com'=>264,
                'id_reg'=>60,
                'description'=>'Jinja'
                ],
                
                
                            
                [
                'id_com'=>265,
                'id_reg'=>60,
                'description'=>'Kampala'
                ],
                
                
                            
                [
                'id_com'=>266,
                'id_reg'=>61,
                'description'=>'Andijon Region'
                ],
                
                
                            
                [
                'id_com'=>267,
                'id_reg'=>61,
                'description'=>'Buxoro Region'
                ],
                
                
                            
                [
                'id_com'=>268,
                'id_reg'=>61,
                'description'=>'Jizzac Region'
                ],
                
                
                            
                [
                'id_com'=>269,
                'id_reg'=>61,
                'description'=>'Qaraqalpaqstan'
                ],
                
                
                            
                [
                'id_com'=>270,
                'id_reg'=>61,
                'description'=>'Qashqadaryo Region'
                ],
                
                
                            
                [
                'id_com'=>271,
                'id_reg'=>61,
                'description'=>'Navoiy Region'
                ],
                
                
                            
                [
                'id_com'=>272,
                'id_reg'=>61,
                'description'=>'Namangan Region'
                ],
                
                
                            
                [
                'id_com'=>273,
                'id_reg'=>61,
                'description'=>'Samarqand Region'
                ],
                
                
                            
                [
                'id_com'=>274,
                'id_reg'=>61,
                'description'=>'Surxondaryo Region'
                ],
                
                
                            
                [
                'id_com'=>275,
                'id_reg'=>61,
                'description'=>'Sirdaryo Region'
                ],
                
                
                            
                [
                'id_com'=>276,
                'id_reg'=>61,
                'description'=>'Tashkent Region'
                ],
                
                
                            
                [
                'id_com'=>277,
                'id_reg'=>61,
                'description'=>'Fergana Region'
                ],
                
                
                            
                [
                'id_com'=>278,
                'id_reg'=>61,
                'description'=>'Xorazm Region'
                ],
                
                
                            
                [
                'id_com'=>279,
                'id_reg'=>62,
                'description'=>'Vinnitskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>280,
                'id_reg'=>62,
                'description'=>'Volynskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>281,
                'id_reg'=>62,
                'description'=>'Dnepropetrovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>282,
                'id_reg'=>62,
                'description'=>'Donetskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>283,
                'id_reg'=>62,
                'description'=>'Zhitomirskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>284,
                'id_reg'=>62,
                'description'=>'Zakarpatskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>285,
                'id_reg'=>62,
                'description'=>'Zaporozhskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>286,
                'id_reg'=>62,
                'description'=>'Ivano-Frankovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>287,
                'id_reg'=>62,
                'description'=>'Kievskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>288,
                'id_reg'=>62,
                'description'=>'Kirovogradskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>289,
                'id_reg'=>62,
                'description'=>'Krymskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>290,
                'id_reg'=>62,
                'description'=>'Luganskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>291,
                'id_reg'=>62,
                'description'=>'Lvovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>292,
                'id_reg'=>62,
                'description'=>'Nikolaevskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>293,
                'id_reg'=>62,
                'description'=>'Odesskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>294,
                'id_reg'=>62,
                'description'=>'Poltavskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>295,
                'id_reg'=>62,
                'description'=>'Rovenskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>296,
                'id_reg'=>62,
                'description'=>'Sumskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>297,
                'id_reg'=>62,
                'description'=>'Ternopolskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>298,
                'id_reg'=>62,
                'description'=>'Harkovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>299,
                'id_reg'=>62,
                'description'=>'Hersonskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>300,
                'id_reg'=>62,
                'description'=>'Hmelnitskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>301,
                'id_reg'=>62,
                'description'=>'Cherkasskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>302,
                'id_reg'=>62,
                'description'=>'Chernigovskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>303,
                'id_reg'=>62,
                'description'=>'Chernovitskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>304,
                'id_reg'=>68,
                'description'=>'Estoniya'
                ],
                
                
                            
                [
                'id_com'=>305,
                'id_reg'=>69,
                'description'=>'Cheju'
                ],
                
                
                            
                [
                'id_com'=>306,
                'id_reg'=>69,
                'description'=>'Chollabuk'
                ],
                
                
                            
                [
                'id_com'=>307,
                'id_reg'=>69,
                'description'=>'Chollanam'
                ],
                
                
                            
                [
                'id_com'=>308,
                'id_reg'=>69,
                'description'=>'Chungcheongbuk'
                ],
                
                
                            
                [
                'id_com'=>309,
                'id_reg'=>69,
                'description'=>'Chungcheongnam'
                ],
                
                
                            
                [
                'id_com'=>310,
                'id_reg'=>69,
                'description'=>'Incheon'
                ],
                
                
                            
                [
                'id_com'=>311,
                'id_reg'=>69,
                'description'=>'Kangweon'
                ],
                
                
                            
                [
                'id_com'=>312,
                'id_reg'=>69,
                'description'=>'Kwangju'
                ],
                
                
                            
                [
                'id_com'=>313,
                'id_reg'=>69,
                'description'=>'Kyeonggi'
                ],
                
                
                            
                [
                'id_com'=>314,
                'id_reg'=>69,
                'description'=>'Kyeongsangbuk'
                ],
                
                
                            
                [
                'id_com'=>315,
                'id_reg'=>69,
                'description'=>'Kyeongsangnam'
                ],
                
                
                            
                [
                'id_com'=>316,
                'id_reg'=>69,
                'description'=>'Pusan'
                ],
                
                
                            
                [
                'id_com'=>317,
                'id_reg'=>69,
                'description'=>'Seoul'
                ],
                
                
                            
                [
                'id_com'=>318,
                'id_reg'=>69,
                'description'=>'Taegu'
                ],
                
                
                            
                [
                'id_com'=>319,
                'id_reg'=>69,
                'description'=>'Taejeon'
                ],
                
                
                            
                [
                'id_com'=>320,
                'id_reg'=>69,
                'description'=>'Ulsan'
                ],
                
                
                            
                [
                'id_com'=>321,
                'id_reg'=>70,
                'description'=>'Aichi'
                ],
                
                
                            
                [
                'id_com'=>322,
                'id_reg'=>70,
                'description'=>'Akita'
                ],
                
                
                            
                [
                'id_com'=>323,
                'id_reg'=>70,
                'description'=>'Aomori'
                ],
                
                
                            
                [
                'id_com'=>324,
                'id_reg'=>70,
                'description'=>'Wakayama'
                ],
                
                
                            
                [
                'id_com'=>325,
                'id_reg'=>70,
                'description'=>'Gifu'
                ],
                
                
                            
                [
                'id_com'=>326,
                'id_reg'=>70,
                'description'=>'Gunma'
                ],
                
                
                            
                [
                'id_com'=>327,
                'id_reg'=>70,
                'description'=>'Ibaraki'
                ],
                
                
                            
                [
                'id_com'=>328,
                'id_reg'=>70,
                'description'=>'Iwate'
                ],
                
                
                            
                [
                'id_com'=>329,
                'id_reg'=>70,
                'description'=>'Ishikawa'
                ],
                
                
                            
                [
                'id_com'=>330,
                'id_reg'=>70,
                'description'=>'Kagawa'
                ],
                
                
                            
                [
                'id_com'=>331,
                'id_reg'=>70,
                'description'=>'Kagoshima'
                ],
                
                
                            
                [
                'id_com'=>332,
                'id_reg'=>70,
                'description'=>'Kanagawa'
                ],
                
                
                            
                [
                'id_com'=>333,
                'id_reg'=>70,
                'description'=>'Kyoto'
                ],
                
                
                            
                [
                'id_com'=>334,
                'id_reg'=>70,
                'description'=>'Kochi'
                ],
                
                
                            
                [
                'id_com'=>335,
                'id_reg'=>70,
                'description'=>'Kumamoto'
                ],
                
                
                            
                [
                'id_com'=>336,
                'id_reg'=>70,
                'description'=>'Mie'
                ],
                
                
                            
                [
                'id_com'=>337,
                'id_reg'=>70,
                'description'=>'Miyagi'
                ],
                
                
                            
                [
                'id_com'=>338,
                'id_reg'=>70,
                'description'=>'Miyazaki'
                ],
                
                
                            
                [
                'id_com'=>339,
                'id_reg'=>70,
                'description'=>'Nagano'
                ],
                
                
                            
                [
                'id_com'=>340,
                'id_reg'=>70,
                'description'=>'Nagasaki'
                ],
                
                
                            
                [
                'id_com'=>341,
                'id_reg'=>70,
                'description'=>'Nara'
                ],
                
                
                            
                [
                'id_com'=>342,
                'id_reg'=>70,
                'description'=>'Niigata'
                ],
                
                
                            
                [
                'id_com'=>343,
                'id_reg'=>70,
                'description'=>'Okayama'
                ],
                
                
                            
                [
                'id_com'=>344,
                'id_reg'=>70,
                'description'=>'Okinawa'
                ],
                
                
                            
                [
                'id_com'=>345,
                'id_reg'=>70,
                'description'=>'Osaka'
                ],
                
                
                            
                [
                'id_com'=>346,
                'id_reg'=>70,
                'description'=>'Saga'
                ],
                
                
                            
                [
                'id_com'=>347,
                'id_reg'=>70,
                'description'=>'Saitama'
                ],
                
                
                            
                [
                'id_com'=>348,
                'id_reg'=>70,
                'description'=>'Shiga'
                ],
                
                
                            
                [
                'id_com'=>349,
                'id_reg'=>70,
                'description'=>'Shizuoka'
                ],
                
                
                            
                [
                'id_com'=>350,
                'id_reg'=>70,
                'description'=>'Shimane'
                ],
                
                
                            
                [
                'id_com'=>351,
                'id_reg'=>70,
                'description'=>'Tiba'
                ],
                
                
                            
                [
                'id_com'=>352,
                'id_reg'=>70,
                'description'=>'Tokyo'
                ],
                
                
                            
                [
                'id_com'=>353,
                'id_reg'=>70,
                'description'=>'Tokushima'
                ],
                
                
                            
                [
                'id_com'=>354,
                'id_reg'=>70,
                'description'=>'Tochigi'
                ],
                
                
                            
                [
                'id_com'=>355,
                'id_reg'=>70,
                'description'=>'Tottori'
                ],
                
                
                            
                [
                'id_com'=>356,
                'id_reg'=>70,
                'description'=>'Toyama'
                ],
                
                
                            
                [
                'id_com'=>357,
                'id_reg'=>70,
                'description'=>'Fukui'
                ],
                
                
                            
                [
                'id_com'=>358,
                'id_reg'=>70,
                'description'=>'Fukuoka'
                ],
                
                
                            
                [
                'id_com'=>359,
                'id_reg'=>70,
                'description'=>'Fukushima'
                ],
                
                
                            
                [
                'id_com'=>360,
                'id_reg'=>70,
                'description'=>'Hiroshima'
                ],
                
                
                            
                [
                'id_com'=>361,
                'id_reg'=>70,
                'description'=>'Hokkaido'
                ],
                
                
                            
                [
                'id_com'=>362,
                'id_reg'=>70,
                'description'=>'Hyogo'
                ],
                
                
                            
                [
                'id_com'=>363,
                'id_reg'=>70,
                'description'=>'Yoshimi'
                ],
                
                
                            
                [
                'id_com'=>364,
                'id_reg'=>70,
                'description'=>'Yamagata'
                ],
                
                
                            
                [
                'id_com'=>365,
                'id_reg'=>70,
                'description'=>'Yamaguchi'
                ],
                
                
                            
                [
                'id_com'=>366,
                'id_reg'=>70,
                'description'=>'Yamanashi'
                ],
                
                
                            
                [
                'id_com'=>368,
                'id_reg'=>73,
                'description'=>'Hong Kong'
                ],
                
                
                            
                [
                'id_com'=>369,
                'id_reg'=>74,
                'description'=>'Indonesia'
                ],
                
                
                            
                [
                'id_com'=>370,
                'id_reg'=>75,
                'description'=>'Jordan'
                ],
                
                
                            
                [
                'id_com'=>371,
                'id_reg'=>76,
                'description'=>'Malaysia'
                ],
                
                
                            
                [
                'id_com'=>372,
                'id_reg'=>77,
                'description'=>'Singapore'
                ],
                
                
                            
                [
                'id_com'=>373,
                'id_reg'=>78,
                'description'=>'Taiwan'
                ],
                
                
                            
                [
                'id_com'=>374,
                'id_reg'=>30,
                'description'=>'Kazahstan'
                ],
                
                
                            
                [
                'id_com'=>375,
                'id_reg'=>62,
                'description'=>'Ukraina'
                ],
                
                
                            
                [
                'id_com'=>376,
                'id_reg'=>25,
                'description'=>'India'
                ],
                
                
                            
                [
                'id_com'=>377,
                'id_reg'=>23,
                'description'=>'Egypt'
                ],
                
                
                            
                [
                'id_com'=>378,
                'id_reg'=>106,
                'description'=>'Damascus'
                ],
                
                
                            
                [
                'id_com'=>379,
                'id_reg'=>131,
                'description'=>'Isle of Man'
                ],
                
                
                            
                [
                'id_com'=>380,
                'id_reg'=>30,
                'description'=>'Zapadno-Kazahstanskaya obl.'
                ],
                
                
                            
                [
                'id_com'=>381,
                'id_reg'=>50,
                'description'=>'Adygeya'
                ],
                
                
                            
                [
                'id_com'=>382,
                'id_reg'=>50,
                'description'=>'Hakasiya'
                ],
                
                
                            
                [
                'id_com'=>383,
                'id_reg'=>93,
                'description'=>'Dubai'
                ],
                
                
                            
                [
                'id_com'=>384,
                'id_reg'=>50,
                'description'=>'Chukotskii AO'
                ],
                
                
                            
                [
                'id_com'=>385,
                'id_reg'=>99,
                'description'=>'Beirut'
                ],
                
                
                            
                [
                'id_com'=>386,
                'id_reg'=>137,
                'description'=>'Tegucigalpa'
                ],
                
                
                            
                [
                'id_com'=>387,
                'id_reg'=>138,
                'description'=>'Santo Domingo'
                ],
                
                
                            
                [
                'id_com'=>388,
                'id_reg'=>139,
                'description'=>'Ulan Bator'
                ],
                
                
                            
                [
                'id_com'=>389,
                'id_reg'=>23,
                'description'=>'Sinai'
                ],
                
                
                            
                [
                'id_com'=>390,
                'id_reg'=>140,
                'description'=>'Baghdad'
                ],
                
                
                            
                [
                'id_com'=>391,
                'id_reg'=>140,
                'description'=>'Basra'
                ],
                
                
                            
                [
                'id_com'=>392,
                'id_reg'=>140,
                'description'=>'Mosul'
                ],
                
                
                            
                [
                'id_com'=>393,
                'id_reg'=>141,
                'description'=>'Johannesburg'
                ],
                
                
                            
                [
                'id_com'=>394,
                'id_reg'=>104,
                'description'=>'Morocco'
                ],
                
                
                            
                [
                'id_com'=>395,
                'id_reg'=>104,
                'description'=>'Tangier'
                ],
                
                
                            
                [
                'id_com'=>396,
                'id_reg'=>50,
                'description'=>'Yamalo-Nenetskii AO'
                ],
                
                
                            
                [
                'id_com'=>397,
                'id_reg'=>122,
                'description'=>'Tunisia'
                ],
                
                
                            
                [
                'id_com'=>398,
                'id_reg'=>92,
                'description'=>'Thailand'
                ],
                
                
                            
                [
                'id_com'=>399,
                'id_reg'=>117,
                'description'=>'Mozambique'
                ],
                
                
                            
                [
                'id_com'=>400,
                'id_reg'=>84,
                'description'=>'Korea'
                ],
                
                
                            
                [
                'id_com'=>401,
                'id_reg'=>87,
                'description'=>'Pakistan'
                ],
                
                
                            
                [
                'id_com'=>402,
                'id_reg'=>142,
                'description'=>'Aruba'
                ],
                
                
                            
                [
                'id_com'=>403,
                'id_reg'=>80,
                'description'=>'Bahamas'
                ],
                
                
                            
                [
                'id_com'=>404,
                'id_reg'=>69,
                'description'=>'South Korea'
                ],
                
                
                            
                [
                'id_com'=>405,
                'id_reg'=>132,
                'description'=>'Jamaica'
                ],
                
                
                            
                [
                'id_com'=>406,
                'id_reg'=>93,
                'description'=>'Sharjah'
                ],
                
                
                            
                [
                'id_com'=>407,
                'id_reg'=>93,
                'description'=>'Abu Dhabi'
                ],
                
                
                            
                [
                'id_com'=>409,
                'id_reg'=>24,
                'description'=>'Ramat Hagolan'
                ],
                
                
                            
                [
                'id_com'=>410,
                'id_reg'=>115,
                'description'=>'Nigeria'
                ],
                
                
                            
                [
                'id_com'=>411,
                'id_reg'=>64,
                'description'=>'Ain'
                ],
                
                
                            
                [
                'id_com'=>412,
                'id_reg'=>64,
                'description'=>'Haute-Savoie'
                ],
                
                
                            
                [
                'id_com'=>413,
                'id_reg'=>64,
                'description'=>'Aisne'
                ],
                
                
                            
                [
                'id_com'=>414,
                'id_reg'=>64,
                'description'=>'Allier'
                ],
                
                
                            
                [
                'id_com'=>415,
                'id_reg'=>64,
                'description'=>'Alpes-de-Haute-Provence'
                ],
                
                
                            
                [
                'id_com'=>416,
                'id_reg'=>64,
                'description'=>'Hautes-Alpes'
                ],
                
                
                            
                [
                'id_com'=>417,
                'id_reg'=>64,
                'description'=>'Alpes-Maritimes'
                ],
                
                
                            
                [
                'id_com'=>418,
                'id_reg'=>64,
                'description'=>'Ardèche'
                ],
                
                
                            
                [
                'id_com'=>419,
                'id_reg'=>64,
                'description'=>'Ardennes'
                ],
                
                
                            
                [
                'id_com'=>420,
                'id_reg'=>64,
                'description'=>'Ariège'
                ],
                
                
                            
                [
                'id_com'=>421,
                'id_reg'=>64,
                'description'=>'Aube'
                ],
                
                
                            
                [
                'id_com'=>422,
                'id_reg'=>64,
                'description'=>'Aude'
                ],
                
                
                            
                [
                'id_com'=>423,
                'id_reg'=>64,
                'description'=>'Aveyron'
                ],
                
                
                            
                [
                'id_com'=>424,
                'id_reg'=>64,
                'description'=>'Bouches-du-Rhône'
                ],
                
                
                            
                [
                'id_com'=>425,
                'id_reg'=>64,
                'description'=>'Calvados'
                ],
                
                
                            
                [
                'id_com'=>426,
                'id_reg'=>64,
                'description'=>'Cantal'
                ],
                
                
                            
                [
                'id_com'=>427,
                'id_reg'=>64,
                'description'=>'Charente'
                ],
                
                
                            
                [
                'id_com'=>428,
                'id_reg'=>64,
                'description'=>'Charente Maritime'
                ],
                
                
                            
                [
                'id_com'=>429,
                'id_reg'=>64,
                'description'=>'Cher'
                ],
                
                
                            
                [
                'id_com'=>430,
                'id_reg'=>64,
                'description'=>'Corrèze'
                ],
                
                
                            
                [
                'id_com'=>431,
                'id_reg'=>64,
                'description'=>'Dordogne'
                ],
                
                
                            
                [
                'id_com'=>432,
                'id_reg'=>64,
                'description'=>'Corse'
                ],
                
                
                            
                [
                'id_com'=>433,
                'id_reg'=>64,
                'description'=>"Côte d'Or"
                ],
                
                
                            
                [
                'id_com'=>434,
                'id_reg'=>64,
                'description'=>'Saône et Loire'
                ],
                
                
                            
                [
                'id_com'=>435,
                'id_reg'=>64,
                'description'=>"Côtes d'Armor"
                ],
                
                
                            
                [
                'id_com'=>436,
                'id_reg'=>64,
                'description'=>'Creuse'
                ],
                
                
                            
                [
                'id_com'=>437,
                'id_reg'=>64,
                'description'=>'Doubs'
                ],
                
                
                            
                [
                'id_com'=>438,
                'id_reg'=>64,
                'description'=>'Drôme'
                ],
                
                
                            
                [
                'id_com'=>439,
                'id_reg'=>64,
                'description'=>'Eure'
                ],
                
                
                            
                [
                'id_com'=>440,
                'id_reg'=>64,
                'description'=>'Eure-et-Loire'
                ],
                
                
                            
                [
                'id_com'=>441,
                'id_reg'=>64,
                'description'=>'Finistère'
                ],
                
                
                            
                [
                'id_com'=>442,
                'id_reg'=>64,
                'description'=>'Gard'
                ],
                
                
                            
                [
                'id_com'=>443,
                'id_reg'=>64,
                'description'=>'Haute-Garonne'
                ],
                
                
                            
                [
                'id_com'=>444,
                'id_reg'=>64,
                'description'=>'Gers'
                ],
                
                
                            
                [
                'id_com'=>445,
                'id_reg'=>64,
                'description'=>'Gironde'
                ],
                
                
                            
                [
                'id_com'=>446,
                'id_reg'=>64,
                'description'=>'Hérault'
                ],
                
                
                            
                [
                'id_com'=>447,
                'id_reg'=>64,
                'description'=>'Ille et Vilaine'
                ],
                
                
                            
                [
                'id_com'=>448,
                'id_reg'=>64,
                'description'=>'Indre'
                ],
                
                
                            
                [
                'id_com'=>449,
                'id_reg'=>64,
                'description'=>'Indre-et-Loire'
                ],
                
                
                            
                [
                'id_com'=>450,
                'id_reg'=>64,
                'description'=>'Isère'
                ],
                
                
                            
                [
                'id_com'=>451,
                'id_reg'=>64,
                'description'=>'Jura'
                ],
                
                
                            
                [
                'id_com'=>452,
                'id_reg'=>64,
                'description'=>'Landes'
                ],
                
                
                            
                [
                'id_com'=>453,
                'id_reg'=>64,
                'description'=>'Loir-et-Cher'
                ],
                
                
                            
                [
                'id_com'=>454,
                'id_reg'=>64,
                'description'=>'Loire'
                ],
                
                
                            
                [
                'id_com'=>455,
                'id_reg'=>64,
                'description'=>'Rhône'
                ],
                
                
                            
                [
                'id_com'=>456,
                'id_reg'=>64,
                'description'=>'Haute-Loire'
                ],
                
                
                            
                [
                'id_com'=>457,
                'id_reg'=>64,
                'description'=>'Loire Atlantique'
                ],
                
                
                            
                [
                'id_com'=>458,
                'id_reg'=>64,
                'description'=>'Loiret'
                ],
                
                
                            
                [
                'id_com'=>459,
                'id_reg'=>64,
                'description'=>'Lot'
                ],
                
                
                            
                [
                'id_com'=>460,
                'id_reg'=>64,
                'description'=>'Lot-et-Garonne'
                ],
                
                
                            
                [
                'id_com'=>461,
                'id_reg'=>64,
                'description'=>'Lozère'
                ],
                
                
                            
                [
                'id_com'=>462,
                'id_reg'=>64,
                'description'=>'Maine et Loire'
                ],
                
                
                            
                [
                'id_com'=>463,
                'id_reg'=>64,
                'description'=>'Manche'
                ],
                
                
                            
                [
                'id_com'=>464,
                'id_reg'=>64,
                'description'=>'Marne'
                ],
                
                
                            
                [
                'id_com'=>465,
                'id_reg'=>64,
                'description'=>'Haute-Marne'
                ],
                
                
                            
                [
                'id_com'=>466,
                'id_reg'=>64,
                'description'=>'Mayenne'
                ],
                
                
                            
                [
                'id_com'=>467,
                'id_reg'=>64,
                'description'=>'Meurthe-et-Moselle'
                ],
                
                
                            
                [
                'id_com'=>468,
                'id_reg'=>64,
                'description'=>'Meuse'
                ],
                
                
                            
                [
                'id_com'=>469,
                'id_reg'=>64,
                'description'=>'Morbihan'
                ],
                
                
                            
                [
                'id_com'=>470,
                'id_reg'=>64,
                'description'=>'Moselle'
                ],
                
                
                            
                [
                'id_com'=>471,
                'id_reg'=>64,
                'description'=>'Nièvre'
                ],
                
                
                            
                [
                'id_com'=>472,
                'id_reg'=>64,
                'description'=>'Nord'
                ],
                
                
                            
                [
                'id_com'=>473,
                'id_reg'=>64,
                'description'=>'Oise'
                ],
                
                
                            
                [
                'id_com'=>474,
                'id_reg'=>64,
                'description'=>'Orne'
                ],
                
                
                            
                [
                'id_com'=>475,
                'id_reg'=>64,
                'description'=>'Pas-de-Calais'
                ],
                
                
                            
                [
                'id_com'=>476,
                'id_reg'=>64,
                'description'=>'Puy-de-Dôme'
                ],
                
                
                            
                [
                'id_com'=>477,
                'id_reg'=>64,
                'description'=>'Pyrénées-Atlantiques'
                ],
                
                
                            
                [
                'id_com'=>478,
                'id_reg'=>64,
                'description'=>'Hautes-Pyrénées'
                ],
                
                
                            
                [
                'id_com'=>479,
                'id_reg'=>64,
                'description'=>'Pyrénées-Orientales'
                ],
                
                
                            
                [
                'id_com'=>480,
                'id_reg'=>64,
                'description'=>'Bas Rhin'
                ],
                
                
                            
                [
                'id_com'=>481,
                'id_reg'=>64,
                'description'=>'Haut Rhin'
                ],
                
                
                            
                [
                'id_com'=>482,
                'id_reg'=>64,
                'description'=>'Haute-Saône'
                ],
                
                
                            
                [
                'id_com'=>483,
                'id_reg'=>64,
                'description'=>'Sarthe'
                ],
                
                
                            
                [
                'id_com'=>484,
                'id_reg'=>64,
                'description'=>'Savoie'
                ],
                
                
                            
                [
                'id_com'=>485,
                'id_reg'=>64,
                'description'=>'Paris'
                ],
                
                
                            
                [
                'id_com'=>486,
                'id_reg'=>64,
                'description'=>'Seine-Maritime'
                ],
                
                
                            
                [
                'id_com'=>487,
                'id_reg'=>64,
                'description'=>'Seine-et-Marne'
                ],
                
                
                            
                [
                'id_com'=>488,
                'id_reg'=>64,
                'description'=>'Yvelines'
                ],
                
                
                            
                [
                'id_com'=>489,
                'id_reg'=>64,
                'description'=>'Deux-Sèvres'
                ],
                
                
                            
                [
                'id_com'=>490,
                'id_reg'=>64,
                'description'=>'Somme'
                ],
                
                
                            
                [
                'id_com'=>491,
                'id_reg'=>64,
                'description'=>'Tarn'
                ],
                
                
                            
                [
                'id_com'=>492,
                'id_reg'=>64,
                'description'=>'Tarn-et-Garonne'
                ],
                
                
                            
                [
                'id_com'=>493,
                'id_reg'=>64,
                'description'=>'Var'
                ],
                
                
                            
                [
                'id_com'=>494,
                'id_reg'=>64,
                'description'=>'Vaucluse'
                ],
                
                
                            
                [
                'id_com'=>495,
                'id_reg'=>64,
                'description'=>'Vendée'
                ],
                
                
                            
                [
                'id_com'=>496,
                'id_reg'=>64,
                'description'=>'Vienne'
                ],
                
                
                            
                [
                'id_com'=>497,
                'id_reg'=>64,
                'description'=>'Haute-Vienne'
                ],
                
                
                            
                [
                'id_com'=>498,
                'id_reg'=>64,
                'description'=>'Vosges'
                ],
                
                
                            
                [
                'id_com'=>499,
                'id_reg'=>64,
                'description'=>'Yonne'
                ],
                
                
                            
                [
                'id_com'=>500,
                'id_reg'=>64,
                'description'=>'Territoire de Belfort'
                ],
                
                
                            
                [
                'id_com'=>501,
                'id_reg'=>64,
                'description'=>'Essonne'
                ],
                
                
                            
                [
                'id_com'=>502,
                'id_reg'=>64,
                'description'=>'Hauts-de-Seine'
                ],
                
                
                            
                [
                'id_com'=>503,
                'id_reg'=>64,
                'description'=>'Seine-Saint-Denis'
                ],
                
                
                            
                [
                'id_com'=>504,
                'id_reg'=>64,
                'description'=>'Val-de-Marne'
                ],
                
                
                            
                [
                'id_com'=>505,
                'id_reg'=>64,
                'description'=>'Val-d Oise'
                ],
                
                
                            
                [
                'id_com'=>506,
                'id_reg'=>29,
                'description'=>'Piemonte - Torino'
                ],
                
                
                            
                [
                'id_com'=>507,
                'id_reg'=>29,
                'description'=>'Piemonte - Alessandria'
                ],
                
                
                            
                [
                'id_com'=>508,
                'id_reg'=>29,
                'description'=>'Piemonte - Asti'
                ],
                
                
                            
                [
                'id_com'=>509,
                'id_reg'=>29,
                'description'=>'Piemonte - Biella'
                ],
                
                
                            
                [
                'id_com'=>510,
                'id_reg'=>29,
                'description'=>'Piemonte - Cuneo'
                ],
                
                
                            
                [
                'id_com'=>511,
                'id_reg'=>29,
                'description'=>'Piemonte - Novara'
                ],
                
                
                            
                [
                'id_com'=>512,
                'id_reg'=>29,
                'description'=>'Piemonte - Verbania'
                ],
                
                
                            
                [
                'id_com'=>513,
                'id_reg'=>29,
                'description'=>'Piemonte - Vercelli'
                ],
                
                
                            
                [
                'id_com'=>514,
                'id_reg'=>29,
                'description'=>"Valle d'Aosta - Aosta"
                ],
                
                
                            
                [
                'id_com'=>515,
                'id_reg'=>29,
                'description'=>'Lombardia - Milano'
                ],
                
                
                            
                [
                'id_com'=>516,
                'id_reg'=>29,
                'description'=>'Lombardia - Bergamo'
                ],
                
                
                            
                [
                'id_com'=>517,
                'id_reg'=>29,
                'description'=>'Lombardia - Brescia'
                ],
                
                
                            
                [
                'id_com'=>518,
                'id_reg'=>29,
                'description'=>'Lombardia - Como'
                ],
                
                
                            
                [
                'id_com'=>519,
                'id_reg'=>29,
                'description'=>'Lombardia - Cremona'
                ],
                
                
                            
                [
                'id_com'=>520,
                'id_reg'=>29,
                'description'=>'Lombardia - Lecco'
                ],
                
                
                            
                [
                'id_com'=>521,
                'id_reg'=>29,
                'description'=>'Lombardia - Lodi'
                ],
                
                
                            
                [
                'id_com'=>522,
                'id_reg'=>29,
                'description'=>'Lombardia - Mantova'
                ],
                
                
                            
                [
                'id_com'=>523,
                'id_reg'=>29,
                'description'=>'Lombardia - Pavia'
                ],
                
                
                            
                [
                'id_com'=>524,
                'id_reg'=>29,
                'description'=>'Lombardia - Sondrio'
                ],
                
                
                            
                [
                'id_com'=>525,
                'id_reg'=>29,
                'description'=>'Lombardia - Varese'
                ],
                
                
                            
                [
                'id_com'=>526,
                'id_reg'=>29,
                'description'=>'Trentino Alto Adige - Trento'
                ],
                
                
                            
                [
                'id_com'=>527,
                'id_reg'=>29,
                'description'=>'Trentino Alto Adige - Bolzano'
                ],
                
                
                            
                [
                'id_com'=>528,
                'id_reg'=>29,
                'description'=>'Veneto - Venezia'
                ],
                
                
                            
                [
                'id_com'=>529,
                'id_reg'=>29,
                'description'=>'Veneto - Belluno'
                ],
                
                
                            
                [
                'id_com'=>530,
                'id_reg'=>29,
                'description'=>'Veneto - Padova'
                ],
                
                
                            
                [
                'id_com'=>531,
                'id_reg'=>29,
                'description'=>'Veneto - Rovigo'
                ],
                
                
                            
                [
                'id_com'=>532,
                'id_reg'=>29,
                'description'=>'Veneto - Treviso'
                ],
                
                
                            
                [
                'id_com'=>533,
                'id_reg'=>29,
                'description'=>'Veneto - Verona'
                ],
                
                
                            
                [
                'id_com'=>534,
                'id_reg'=>29,
                'description'=>'Veneto - Vicenza'
                ],
                
                
                            
                [
                'id_com'=>535,
                'id_reg'=>29,
                'description'=>'Friuli Venezia Giulia - Trieste'
                ],
                
                
                            
                [
                'id_com'=>536,
                'id_reg'=>29,
                'description'=>'Friuli Venezia Giulia - Gorizia'
                ],
                
                
                            
                [
                'id_com'=>537,
                'id_reg'=>29,
                'description'=>'Friuli Venezia Giulia - Pordenone'
                ],
                
                
                            
                [
                'id_com'=>538,
                'id_reg'=>29,
                'description'=>'Friuli Venezia Giulia - Udine'
                ],
                
                
                            
                [
                'id_com'=>539,
                'id_reg'=>29,
                'description'=>'Liguria - Genova'
                ],
                
                
                            
                [
                'id_com'=>540,
                'id_reg'=>29,
                'description'=>'Liguria - Imperia'
                ],
                
                
                            
                [
                'id_com'=>541,
                'id_reg'=>29,
                'description'=>'Liguria - La Spezia'
                ],
                
                
                            
                [
                'id_com'=>542,
                'id_reg'=>29,
                'description'=>'Liguria - Savona'
                ],
                
                
                            
                [
                'id_com'=>543,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Bologna'
                ],
                
                
                            
                [
                'id_com'=>544,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Ferrara'
                ],
                
                
                            
                [
                'id_com'=>545,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Forlì-Cesena'
                ],
                
                
                            
                [
                'id_com'=>546,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Modena'
                ],
                
                
                            
                [
                'id_com'=>547,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Parma'
                ],
                
                
                            
                [
                'id_com'=>548,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Piacenza'
                ],
                
                
                            
                [
                'id_com'=>549,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Ravenna'
                ],
                
                
                            
                [
                'id_com'=>550,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Reggio Emilia'
                ],
                
                
                            
                [
                'id_com'=>551,
                'id_reg'=>29,
                'description'=>'Emilia Romagna - Rimini'
                ],
                
                
                            
                [
                'id_com'=>552,
                'id_reg'=>29,
                'description'=>'Toscana - Firenze'
                ],
                
                
                            
                [
                'id_com'=>553,
                'id_reg'=>29,
                'description'=>'Toscana - Arezzo'
                ],
                
                
                            
                [
                'id_com'=>554,
                'id_reg'=>29,
                'description'=>'Toscana - Grosseto'
                ],
                
                
                            
                [
                'id_com'=>555,
                'id_reg'=>29,
                'description'=>'Toscana - Livorno'
                ],
                
                
                            
                [
                'id_com'=>556,
                'id_reg'=>29,
                'description'=>'Toscana - Lucca'
                ],
                
                
                            
                [
                'id_com'=>557,
                'id_reg'=>29,
                'description'=>'Toscana - Massa Carrara'
                ],
                
                
                            
                [
                'id_com'=>558,
                'id_reg'=>29,
                'description'=>'Toscana - Pisa'
                ],
                
                
                            
                [
                'id_com'=>559,
                'id_reg'=>29,
                'description'=>'Toscana - Pistoia'
                ],
                
                
                            
                [
                'id_com'=>560,
                'id_reg'=>29,
                'description'=>'Toscana - Prato'
                ],
                
                
                            
                [
                'id_com'=>561,
                'id_reg'=>29,
                'description'=>'Toscana - Siena'
                ],
                
                
                            
                [
                'id_com'=>562,
                'id_reg'=>29,
                'description'=>'Umbria - Perugia'
                ],
                
                
                            
                [
                'id_com'=>563,
                'id_reg'=>29,
                'description'=>'Umbria - Terni'
                ],
                
                
                            
                [
                'id_com'=>564,
                'id_reg'=>29,
                'description'=>'Marche - Ancona'
                ],
                
                
                            
                [
                'id_com'=>565,
                'id_reg'=>29,
                'description'=>'Marche - Ascoli Piceno'
                ],
                
                
                            
                [
                'id_com'=>566,
                'id_reg'=>29,
                'description'=>'Marche - Macerata'
                ],
                
                
                            
                [
                'id_com'=>567,
                'id_reg'=>29,
                'description'=>'Marche - Pesaro - Urbino'
                ],
                
                
                            
                [
                'id_com'=>568,
                'id_reg'=>29,
                'description'=>'Lazio - Roma'
                ],
                
                
                            
                [
                'id_com'=>569,
                'id_reg'=>29,
                'description'=>'Lazio - Frosinone'
                ],
                
                
                            
                [
                'id_com'=>570,
                'id_reg'=>29,
                'description'=>'Lazio - Latina'
                ],
                
                
                            
                [
                'id_com'=>571,
                'id_reg'=>29,
                'description'=>'Lazio - Rieti'
                ],
                
                
                            
                [
                'id_com'=>572,
                'id_reg'=>29,
                'description'=>'Lazio - Viterbo'
                ],
                
                
                            
                [
                'id_com'=>573,
                'id_reg'=>29,
                'description'=>'Abruzzo - L´Aquila'
                ],
                
                
                            
                [
                'id_com'=>574,
                'id_reg'=>29,
                'description'=>'Abruzzo - Chieti'
                ],
                
                
                            
                [
                'id_com'=>575,
                'id_reg'=>29,
                'description'=>'Abruzzo - Pescara'
                ],
                
                
                            
                [
                'id_com'=>576,
                'id_reg'=>29,
                'description'=>'Abruzzo - Teramo'
                ],
                
                
                            
                [
                'id_com'=>577,
                'id_reg'=>29,
                'description'=>'Molise - Campobasso'
                ],
                
                
                            
                [
                'id_com'=>578,
                'id_reg'=>29,
                'description'=>'Molise - Isernia'
                ],
                
                
                            
                [
                'id_com'=>579,
                'id_reg'=>29,
                'description'=>'Campania - Napoli'
                ],
                
                
                            
                [
                'id_com'=>580,
                'id_reg'=>29,
                'description'=>'Campania - Avellino'
                ],
                
                
                            
                [
                'id_com'=>581,
                'id_reg'=>29,
                'description'=>'Campania - Benevento'
                ],
                
                
                            
                [
                'id_com'=>582,
                'id_reg'=>29,
                'description'=>'Campania - Caserta'
                ],
                
                
                            
                [
                'id_com'=>583,
                'id_reg'=>29,
                'description'=>'Campania - Salerno'
                ],
                
                
                            
                [
                'id_com'=>584,
                'id_reg'=>29,
                'description'=>'Puglia - Bari'
                ],
                
                
                            
                [
                'id_com'=>585,
                'id_reg'=>29,
                'description'=>'Puglia - Brindisi'
                ],
                
                
                            
                [
                'id_com'=>586,
                'id_reg'=>29,
                'description'=>'Puglia - Foggia'
                ],
                
                
                            
                [
                'id_com'=>587,
                'id_reg'=>29,
                'description'=>'Puglia - Lecce'
                ],
                
                
                            
                [
                'id_com'=>588,
                'id_reg'=>29,
                'description'=>'Puglia - Taranto'
                ],
                
                
                            
                [
                'id_com'=>589,
                'id_reg'=>29,
                'description'=>'Basilicata - Potenza'
                ],
                
                
                            
                [
                'id_com'=>590,
                'id_reg'=>29,
                'description'=>'Basilicata - Matera'
                ],
                
                
                            
                [
                'id_com'=>591,
                'id_reg'=>29,
                'description'=>'Calabria - Catanzaro'
                ],
                
                
                            
                [
                'id_com'=>592,
                'id_reg'=>29,
                'description'=>'Calabria - Cosenza'
                ],
                
                
                            
                [
                'id_com'=>593,
                'id_reg'=>29,
                'description'=>'Calabria - Crotone'
                ],
                
                
                            
                [
                'id_com'=>594,
                'id_reg'=>29,
                'description'=>'Calabria - Reggio Calabria'
                ],
                
                
                            
                [
                'id_com'=>595,
                'id_reg'=>29,
                'description'=>'Calabria - Vibo Valentia'
                ],
                
                
                            
                [
                'id_com'=>596,
                'id_reg'=>29,
                'description'=>'Sicilia - Palermo'
                ],
                
                
                            
                [
                'id_com'=>597,
                'id_reg'=>29,
                'description'=>'Sicilia - Agrigento'
                ],
                
                
                            
                [
                'id_com'=>598,
                'id_reg'=>29,
                'description'=>'Sicilia - Caltanissetta'
                ],
                
                
                            
                [
                'id_com'=>599,
                'id_reg'=>29,
                'description'=>'Sicilia - Catania'
                ],
                
                
                            
                [
                'id_com'=>600,
                'id_reg'=>29,
                'description'=>'Sicilia - Enna'
                ],
                
                
                            
                [
                'id_com'=>601,
                'id_reg'=>29,
                'description'=>'Sicilia - Messina'
                ],
                
                
                            
                [
                'id_com'=>602,
                'id_reg'=>29,
                'description'=>'Sicilia - Ragusa'
                ],
                
                
                            
                [
                'id_com'=>603,
                'id_reg'=>29,
                'description'=>'Sicilia - Siracusa'
                ],
                
                
                            
                [
                'id_com'=>604,
                'id_reg'=>29,
                'description'=>'Sicilia - Trapani'
                ],
                
                
                            
                [
                'id_com'=>605,
                'id_reg'=>29,
                'description'=>'Sardegna - Cagliari'
                ],
                
                
                            
                [
                'id_com'=>606,
                'id_reg'=>29,
                'description'=>'Sardegna - Nuoro'
                ],
                
                
                            
                [
                'id_com'=>607,
                'id_reg'=>29,
                'description'=>'Sardegna - Oristano'
                ],
                
                
                            
                [
                'id_com'=>608,
                'id_reg'=>29,
                'description'=>'Sardegna - Sassari'
                ],
                
                
                            
                [
                'id_com'=>609,
                'id_reg'=>28,
                'description'=>'Las Palmas'
                ],
                
                
                            
                [
                'id_com'=>610,
                'id_reg'=>28,
                'description'=>'Soria'
                ],
                
                
                            
                [
                'id_com'=>611,
                'id_reg'=>28,
                'description'=>'Palencia'
                ],
                
                
                            
                [
                'id_com'=>612,
                'id_reg'=>28,
                'description'=>'Zamora'
                ],
                
                
                            
                [
                'id_com'=>613,
                'id_reg'=>28,
                'description'=>'Cádiz'
                ],
                
                
                            
                [
                'id_com'=>614,
                'id_reg'=>28,
                'description'=>'Navarra'
                ],
                
                
                            
                [
                'id_com'=>615,
                'id_reg'=>28,
                'description'=>'Ourense'
                ],
                
                
                            
                [
                'id_com'=>616,
                'id_reg'=>28,
                'description'=>'Segovia'
                ],
                
                
                            
                [
                'id_com'=>617,
                'id_reg'=>28,
                'description'=>'Guipúzcoa'
                ],
                
                
                            
                [
                'id_com'=>618,
                'id_reg'=>28,
                'description'=>'Ciudad Real'
                ],
                
                
                            
                [
                'id_com'=>619,
                'id_reg'=>28,
                'description'=>'Vizcaya'
                ],
                
                
                            
                [
                'id_com'=>620,
                'id_reg'=>28,
                'description'=>'álava'
                ],
                
                
                            
                [
                'id_com'=>621,
                'id_reg'=>28,
                'description'=>'A Coruña'
                ],
                
                
                            
                [
                'id_com'=>622,
                'id_reg'=>28,
                'description'=>'Cantabria'
                ],
                
                
                            
                [
                'id_com'=>623,
                'id_reg'=>28,
                'description'=>'Almería'
                ],
                
                
                            
                [
                'id_com'=>624,
                'id_reg'=>28,
                'description'=>'Zaragoza'
                ],
                
                
                            
                [
                'id_com'=>625,
                'id_reg'=>28,
                'description'=>'Santa Cruz de Tenerife'
                ],
                
                
                            
                [
                'id_com'=>626,
                'id_reg'=>28,
                'description'=>'Cáceres'
                ],
                
                
                            
                [
                'id_com'=>627,
                'id_reg'=>28,
                'description'=>'Guadalajara'
                ],
                
                
                            
                [
                'id_com'=>628,
                'id_reg'=>28,
                'description'=>'ávila'
                ],
                
                
                            
                [
                'id_com'=>629,
                'id_reg'=>28,
                'description'=>'Toledo'
                ],
                
                
                            
                [
                'id_com'=>630,
                'id_reg'=>28,
                'description'=>'Castellón'
                ],
                
                
                            
                [
                'id_com'=>631,
                'id_reg'=>28,
                'description'=>'Tarragona'
                ],
                
                
                            
                [
                'id_com'=>632,
                'id_reg'=>28,
                'description'=>'Lugo'
                ],
                
                
                            
                [
                'id_com'=>633,
                'id_reg'=>28,
                'description'=>'La Rioja'
                ],
                
                
                            
                [
                'id_com'=>634,
                'id_reg'=>28,
                'description'=>'Ceuta'
                ],
                
                
                            
                [
                'id_com'=>635,
                'id_reg'=>28,
                'description'=>'Murcia'
                ],
                
                
                            
                [
                'id_com'=>636,
                'id_reg'=>28,
                'description'=>'Salamanca'
                ],
                
                
                            
                [
                'id_com'=>637,
                'id_reg'=>28,
                'description'=>'Valladolid'
                ],
                
                
                            
                [
                'id_com'=>638,
                'id_reg'=>28,
                'description'=>'Jaén'
                ],
                
                
                            
                [
                'id_com'=>639,
                'id_reg'=>28,
                'description'=>'Girona'
                ],
                
                
                            
                [
                'id_com'=>640,
                'id_reg'=>28,
                'description'=>'Granada'
                ],
                
                
                            
                [
                'id_com'=>641,
                'id_reg'=>28,
                'description'=>'Alacant'
                ],
                
                
                            
                [
                'id_com'=>642,
                'id_reg'=>28,
                'description'=>'Córdoba'
                ],
                
                
                            
                [
                'id_com'=>643,
                'id_reg'=>28,
                'description'=>'Albacete'
                ],
                
                
                            
                [
                'id_com'=>644,
                'id_reg'=>28,
                'description'=>'Cuenca'
                ],
                
                
                            
                [
                'id_com'=>645,
                'id_reg'=>28,
                'description'=>'Pontevedra'
                ],
                
                
                            
                [
                'id_com'=>646,
                'id_reg'=>28,
                'description'=>'Teruel'
                ],
                
                
                            
                [
                'id_com'=>647,
                'id_reg'=>28,
                'description'=>'Melilla'
                ],
                
                
                            
                [
                'id_com'=>648,
                'id_reg'=>28,
                'description'=>'Barcelona'
                ],
                
                
                            
                [
                'id_com'=>649,
                'id_reg'=>28,
                'description'=>'Badajoz'
                ],
                
                
                            
                [
                'id_com'=>650,
                'id_reg'=>28,
                'description'=>'Madrid'
                ],
                
                
                            
                [
                'id_com'=>651,
                'id_reg'=>28,
                'description'=>'Sevilla'
                ],
                
                
                            
                [
                'id_com'=>652,
                'id_reg'=>28,
                'description'=>'València'
                ],
                
                
                            
                [
                'id_com'=>653,
                'id_reg'=>28,
                'description'=>'Huelva'
                ],
                
                
                            
                [
                'id_com'=>654,
                'id_reg'=>28,
                'description'=>'Lleida'
                ],
                
                
                            
                [
                'id_com'=>655,
                'id_reg'=>28,
                'description'=>'León'
                ],
                
                
                            
                [
                'id_com'=>656,
                'id_reg'=>28,
                'description'=>'Illes Balears'
                ],
                
                
                            
                [
                'id_com'=>657,
                'id_reg'=>28,
                'description'=>'Burgos'
                ],
                
                
                            
                [
                'id_com'=>658,
                'id_reg'=>28,
                'description'=>'Huesca'
                ],
                
                
                            
                [
                'id_com'=>659,
                'id_reg'=>28,
                'description'=>'Asturias'
                ],
                
                
                            
                [
                'id_com'=>660,
                'id_reg'=>28,
                'description'=>'Málaga'
                ],
                
                
                            
                [
                'id_com'=>661,
                'id_reg'=>144,
                'description'=>'Afghanistan'
                ],
                
                
                            
                [
                'id_com'=>662,
                'id_reg'=>210,
                'description'=>'Niger'
                ],
                
                
                            
                [
                'id_com'=>663,
                'id_reg'=>133,
                'description'=>'Mali'
                ],
                
                
                            
                [
                'id_com'=>664,
                'id_reg'=>156,
                'description'=>'Burkina Faso'
                ],
                
                
                            
                [
                'id_com'=>665,
                'id_reg'=>136,
                'description'=>'Togo'
                ],
                
                
                            
                [
                'id_com'=>666,
                'id_reg'=>151,
                'description'=>'Benin'
                ],
                
                
                            
                [
                'id_com'=>667,
                'id_reg'=>119,
                'description'=>'Angola'
                ],
                
                
                            
                [
                'id_com'=>668,
                'id_reg'=>102,
                'description'=>'Namibia'
                ],
                
                
                            
                [
                'id_com'=>669,
                'id_reg'=>100,
                'description'=>'Botswana'
                ],
                
                
                            
                [
                'id_com'=>670,
                'id_reg'=>134,
                'description'=>'Madagascar'
                ],
                
                
                            
                [
                'id_com'=>671,
                'id_reg'=>202,
                'description'=>'Mauritius'
                ],
                
                
                            
                [
                'id_com'=>672,
                'id_reg'=>196,
                'description'=>'Laos'
                ],
                
                
                            
                [
                'id_com'=>673,
                'id_reg'=>158,
                'description'=>'Cambodia'
                ],
                
                
                            
                [
                'id_com'=>674,
                'id_reg'=>90,
                'description'=>'Philippines'
                ],
                
                
                            
                [
                'id_com'=>675,
                'id_reg'=>88,
                'description'=>'Papua New Guinea'
                ],
                
                
                            
                [
                'id_com'=>676,
                'id_reg'=>228,
                'description'=>'Solomon Islands'
                ],
                
                
                            
                [
                'id_com'=>677,
                'id_reg'=>240,
                'description'=>'Vanuatu'
                ],
                
                
                            
                [
                'id_com'=>678,
                'id_reg'=>176,
                'description'=>'Fiji'
                ],
                
                
                            
                [
                'id_com'=>679,
                'id_reg'=>223,
                'description'=>'Samoa'
                ],
                
                
                            
                [
                'id_com'=>680,
                'id_reg'=>206,
                'description'=>'Nauru'
                ],
                
                
                            
                [
                'id_com'=>681,
                'id_reg'=>168,
                'description'=>"Cote D'Ivoire"
                ],
                
                
                            
                [
                'id_com'=>682,
                'id_reg'=>198,
                'description'=>'Liberia'
                ],
                
                
                            
                [
                'id_com'=>683,
                'id_reg'=>187,
                'description'=>'Guinea'
                ],
                
                
                            
                [
                'id_com'=>684,
                'id_reg'=>189,
                'description'=>'Guyana'
                ],
                
                
                            
                [
                'id_com'=>685,
                'id_reg'=>98,
                'description'=>'Algeria'
                ],
                
                
                            
                [
                'id_com'=>686,
                'id_reg'=>147,
                'description'=>'Antigua and Barbuda'
                ],
                
                
                            
                [
                'id_com'=>687,
                'id_reg'=>127,
                'description'=>'Bahrain'
                ],
                
                
                            
                [
                'id_com'=>688,
                'id_reg'=>149,
                'description'=>'Bangladesh'
                ],
                
                
                            
                [
                'id_com'=>689,
                'id_reg'=>128,
                'description'=>'Barbados'
                ],
                
                
                            
                [
                'id_com'=>690,
                'id_reg'=>152,
                'description'=>'Bhutan'
                ],
                
                
                            
                [
                'id_com'=>691,
                'id_reg'=>155,
                'description'=>'Brunei'
                ],
                
                
                            
                [
                'id_com'=>692,
                'id_reg'=>157,
                'description'=>'Burundi'
                ],
                
                
                            
                [
                'id_com'=>693,
                'id_reg'=>159,
                'description'=>'Cape Verde'
                ],
                
                
                            
                [
                'id_com'=>694,
                'id_reg'=>130,
                'description'=>'Chad'
                ],
                
                
                            
                [
                'id_com'=>695,
                'id_reg'=>164,
                'description'=>'Comoros'
                ],
                
                
                            
                [
                'id_com'=>696,
                'id_reg'=>112,
                'description'=>'Congo (Brazzaville)'
                ],
                
                
                            
                [
                'id_com'=>697,
                'id_reg'=>169,
                'description'=>'Djibouti'
                ],
                
                
                            
                [
                'id_com'=>698,
                'id_reg'=>171,
                'description'=>'East Timor'
                ],
                
                
                            
                [
                'id_com'=>699,
                'id_reg'=>173,
                'description'=>'Eritrea'
                ],
                
                
                            
                [
                'id_com'=>700,
                'id_reg'=>121,
                'description'=>'Ethiopia'
                ],
                
                
                            
                [
                'id_com'=>701,
                'id_reg'=>180,
                'description'=>'Gabon'
                ],
                
                
                            
                [
                'id_com'=>702,
                'id_reg'=>181,
                'description'=>'Gambia'
                ],
                
                
                            
                [
                'id_com'=>703,
                'id_reg'=>105,
                'description'=>'Ghana'
                ],
                
                
                            
                [
                'id_com'=>704,
                'id_reg'=>197,
                'description'=>'Lesotho'
                ],
                
                
                            
                [
                'id_com'=>705,
                'id_reg'=>125,
                'description'=>'Malawi'
                ],
                
                
                            
                [
                'id_com'=>706,
                'id_reg'=>200,
                'description'=>'Maldives'
                ],
                
                
                            
                [
                'id_com'=>707,
                'id_reg'=>205,
                'description'=>'Myanmar (Burma)'
                ],
                
                
                            
                [
                'id_com'=>708,
                'id_reg'=>107,
                'description'=>'Nepal'
                ],
                
                
                            
                [
                'id_com'=>709,
                'id_reg'=>213,
                'description'=>'Oman'
                ],
                
                
                            
                [
                'id_com'=>710,
                'id_reg'=>217,
                'description'=>'Rwanda'
                ],
                
                
                            
                [
                'id_com'=>711,
                'id_reg'=>91,
                'description'=>'Saudi Arabia'
                ],
                
                
                            
                [
                'id_com'=>712,
                'id_reg'=>120,
                'description'=>'Sri Lanka'
                ],
                
                
                            
                [
                'id_com'=>713,
                'id_reg'=>232,
                'description'=>'Sudan'
                ],
                
                
                            
                [
                'id_com'=>714,
                'id_reg'=>234,
                'description'=>'Swaziland'
                ],
                
                
                            
                [
                'id_com'=>715,
                'id_reg'=>101,
                'description'=>'Tanzania'
                ],
                
                
                            
                [
                'id_com'=>716,
                'id_reg'=>236,
                'description'=>'Tonga'
                ],
                
                
                            
                [
                'id_com'=>717,
                'id_reg'=>239,
                'description'=>'Tuvalu'
                ],
                
                
                            
                [
                'id_com'=>718,
                'id_reg'=>242,
                'description'=>'Western Sahara'
                ],
                
                
                            
                [
                'id_com'=>719,
                'id_reg'=>243,
                'description'=>'Yemen'
                ],
                
                
                            
                [
                'id_com'=>720,
                'id_reg'=>116,
                'description'=>'Zambia'
                ],
                
                
                            
                [
                'id_com'=>721,
                'id_reg'=>96,
                'description'=>'Zimbabwe'
                ],
                
                
                            
                [
                'id_com'=>722,
                'id_reg'=>66,
                'description'=>'Aargau'
                ],
                
                
                            
                [
                'id_com'=>723,
                'id_reg'=>66,
                'description'=>'Appenzell Innerrhoden'
                ],
                
                
                            
                [
                'id_com'=>724,
                'id_reg'=>66,
                'description'=>'Appenzell Ausserrhoden'
                ],
                
                
                            
                [
                'id_com'=>725,
                'id_reg'=>66,
                'description'=>'Bern'
                ],
                
                
                            
                [
                'id_com'=>726,
                'id_reg'=>66,
                'description'=>'Basel-Landschaft'
                ],
                
                
                            
                [
                'id_com'=>727,
                'id_reg'=>66,
                'description'=>'Basel-Stadt'
                ],
                
                
                            
                [
                'id_com'=>728,
                'id_reg'=>66,
                'description'=>'Fribourg'
                ],
                
                
                            
                [
                'id_com'=>729,
                'id_reg'=>66,
                'description'=>'Genève'
                ],
                
                
                            
                [
                'id_com'=>730,
                'id_reg'=>66,
                'description'=>'Glarus'
                ],
                
                
                            
                [
                'id_com'=>731,
                'id_reg'=>66,
                'description'=>'Graubünden'
                ],
                
                
                            
                [
                'id_com'=>732,
                'id_reg'=>66,
                'description'=>'Jura'
                ],
                
                
                            
                [
                'id_com'=>733,
                'id_reg'=>66,
                'description'=>'Luzern'
                ],
                
                
                            
                [
                'id_com'=>734,
                'id_reg'=>66,
                'description'=>'Neuchâtel'
                ],
                
                
                            
                [
                'id_com'=>735,
                'id_reg'=>66,
                'description'=>'Nidwalden'
                ],
                
                
                            
                [
                'id_com'=>736,
                'id_reg'=>66,
                'description'=>'Obwalden'
                ],
                
                
                            
                [
                'id_com'=>737,
                'id_reg'=>66,
                'description'=>'Sankt Gallen'
                ],
                
                
                            
                [
                'id_com'=>738,
                'id_reg'=>66,
                'description'=>'Schaffhausen'
                ],
                
                
                            
                [
                'id_com'=>739,
                'id_reg'=>66,
                'description'=>'Solothurn'
                ],
                
                
                            
                [
                'id_com'=>740,
                'id_reg'=>66,
                'description'=>'Schwyz'
                ],
                
                
                            
                [
                'id_com'=>741,
                'id_reg'=>66,
                'description'=>'Thurgau'
                ],
                
                
                            
                [
                'id_com'=>742,
                'id_reg'=>66,
                'description'=>'Ticino'
                ],
                
                
                            
                [
                'id_com'=>743,
                'id_reg'=>66,
                'description'=>'Uri'
                ],
                
                
                            
                [
                'id_com'=>744,
                'id_reg'=>66,
                'description'=>'Vaud'
                ],
                
                
                            
                [
                'id_com'=>745,
                'id_reg'=>66,
                'description'=>'Valais'
                ],
                
                
                            
                [
                'id_com'=>746,
                'id_reg'=>66,
                'description'=>'Zug'
                ],
                
                
                            
                [
                'id_com'=>747,
                'id_reg'=>66,
                'description'=>'Zürich'
                ],
                
                
                            
                [
                'id_com'=>749,
                'id_reg'=>48,
                'description'=>'Aveiro'
                ],
                
                
                            
                [
                'id_com'=>750,
                'id_reg'=>48,
                'description'=>'Beja'
                ],
                
                
                            
                [
                'id_com'=>751,
                'id_reg'=>48,
                'description'=>'Braga'
                ],
                
                
                            
                [
                'id_com'=>752,
                'id_reg'=>48,
                'description'=>'Braganca'
                ],
                
                
                            
                [
                'id_com'=>753,
                'id_reg'=>48,
                'description'=>'Castelo Branco'
                ],
                
                
                            
                [
                'id_com'=>754,
                'id_reg'=>48,
                'description'=>'Coimbra'
                ],
                
                
                            
                [
                'id_com'=>755,
                'id_reg'=>48,
                'description'=>'Evora'
                ],
                
                
                            
                [
                'id_com'=>756,
                'id_reg'=>48,
                'description'=>'Faro'
                ],
                
                
                            
                [
                'id_com'=>757,
                'id_reg'=>48,
                'description'=>'Madeira'
                ],
                
                
                            
                [
                'id_com'=>758,
                'id_reg'=>48,
                'description'=>'Guarda'
                ],
                
                
                            
                [
                'id_com'=>759,
                'id_reg'=>48,
                'description'=>'Leiria'
                ],
                
                
                            
                [
                'id_com'=>760,
                'id_reg'=>48,
                'description'=>'Lisboa'
                ],
                
                
                            
                [
                'id_com'=>761,
                'id_reg'=>48,
                'description'=>'Portalegre'
                ],
                
                
                            
                [
                'id_com'=>762,
                'id_reg'=>48,
                'description'=>'Porto'
                ],
                
                
                            
                [
                'id_com'=>763,
                'id_reg'=>48,
                'description'=>'Santarem'
                ],
                
                
                            
                [
                'id_com'=>764,
                'id_reg'=>48,
                'description'=>'Setubal'
                ],
                
                
                            
                [
                'id_com'=>765,
                'id_reg'=>48,
                'description'=>'Viana do Castelo'
                ],
                
                
                            
                [
                'id_com'=>766,
                'id_reg'=>48,
                'description'=>'Vila Real'
                ],
                
                
                            
                [
                'id_com'=>767,
                'id_reg'=>48,
                'description'=>'Viseu'
                ],
                
                
                            
                [
                'id_com'=>768,
                'id_reg'=>48,
                'description'=>'Azores'
                ],
                
                
                            
                [
                'id_com'=>769,
                'id_reg'=>55,
                'description'=>'Armed Forces Americas'
                ],
                
                
                            
                [
                'id_com'=>770,
                'id_reg'=>55,
                'description'=>'Armed Forces Europe'
                ],
                
                
                            
                [
                'id_com'=>771,
                'id_reg'=>55,
                'description'=>'Alaska'
                ],
                
                
                            
                [
                'id_com'=>772,
                'id_reg'=>55,
                'description'=>'Alabama'
                ],
                
                
                            
                [
                'id_com'=>773,
                'id_reg'=>55,
                'description'=>'Armed Forces Pacific'
                ],
                
                
                            
                [
                'id_com'=>774,
                'id_reg'=>55,
                'description'=>'Arkansas'
                ],
                
                
                            
                [
                'id_com'=>775,
                'id_reg'=>55,
                'description'=>'American Samoa'
                ],
                
                
                            
                [
                'id_com'=>776,
                'id_reg'=>55,
                'description'=>'Arizona'
                ],
                
                
                            
                [
                'id_com'=>777,
                'id_reg'=>55,
                'description'=>'California'
                ],
                
                
                            
                [
                'id_com'=>778,
                'id_reg'=>55,
                'description'=>'Colorado'
                ],
                
                
                            
                [
                'id_com'=>779,
                'id_reg'=>55,
                'description'=>'Connecticut'
                ],
                
                
                            
                [
                'id_com'=>780,
                'id_reg'=>55,
                'description'=>'District of Columbia'
                ],
                
                
                            
                [
                'id_com'=>781,
                'id_reg'=>55,
                'description'=>'Delaware'
                ],
                
                
                            
                [
                'id_com'=>782,
                'id_reg'=>55,
                'description'=>'Florida'
                ],
                
                
                            
                [
                'id_com'=>783,
                'id_reg'=>55,
                'description'=>'Federated States of Micronesia'
                ],
                
                
                            
                [
                'id_com'=>784,
                'id_reg'=>55,
                'description'=>'Georgia'
                ],
                
                
                            
                [
                'id_com'=>786,
                'id_reg'=>55,
                'description'=>'Hawaii'
                ],
                
                
                            
                [
                'id_com'=>787,
                'id_reg'=>55,
                'description'=>'Iowa'
                ],
                
                
                            
                [
                'id_com'=>788,
                'id_reg'=>55,
                'description'=>'Idaho'
                ],
                
                
                            
                [
                'id_com'=>789,
                'id_reg'=>55,
                'description'=>'Illinois'
                ],
                
                
                            
                [
                'id_com'=>790,
                'id_reg'=>55,
                'description'=>'Indiana'
                ],
                
                
                            
                [
                'id_com'=>791,
                'id_reg'=>55,
                'description'=>'Kansas'
                ],
                
                
                            
                [
                'id_com'=>792,
                'id_reg'=>55,
                'description'=>'Kentucky'
                ],
                
                
                            
                [
                'id_com'=>793,
                'id_reg'=>55,
                'description'=>'Louisiana'
                ],
                
                
                            
                [
                'id_com'=>794,
                'id_reg'=>55,
                'description'=>'Massachusetts'
                ],
                
                
                            
                [
                'id_com'=>795,
                'id_reg'=>55,
                'description'=>'Maryland'
                ],
                
                
                            
                [
                'id_com'=>796,
                'id_reg'=>55,
                'description'=>'Maine'
                ],
                
                
                            
                [
                'id_com'=>797,
                'id_reg'=>55,
                'description'=>'Marshall Islands'
                ],
                
                
                            
                [
                'id_com'=>798,
                'id_reg'=>55,
                'description'=>'Michigan'
                ],
                
                
                            
                [
                'id_com'=>799,
                'id_reg'=>55,
                'description'=>'Minnesota'
                ],
                
                
                            
                [
                'id_com'=>800,
                'id_reg'=>55,
                'description'=>'Missouri'
                ],
                
                
                            
                [
                'id_com'=>801,
                'id_reg'=>55,
                'description'=>'Northern Mariana Islands'
                ],
                
                
                            
                [
                'id_com'=>802,
                'id_reg'=>55,
                'description'=>'Mississippi'
                ],
                
                
                            
                [
                'id_com'=>803,
                'id_reg'=>55,
                'description'=>'Montana'
                ],
                
                
                            
                [
                'id_com'=>804,
                'id_reg'=>55,
                'description'=>'North Carolina'
                ],
                
                
                            
                [
                'id_com'=>805,
                'id_reg'=>55,
                'description'=>'North Dakota'
                ],
                
                
                            
                [
                'id_com'=>806,
                'id_reg'=>55,
                'description'=>'Nebraska'
                ],
                
                
                            
                [
                'id_com'=>807,
                'id_reg'=>55,
                'description'=>'New Hampshire'
                ],
                
                
                            
                [
                'id_com'=>808,
                'id_reg'=>55,
                'description'=>'New Jersey'
                ],
                
                
                            
                [
                'id_com'=>809,
                'id_reg'=>55,
                'description'=>'New Mexico'
                ],
                
                
                            
                [
                'id_com'=>810,
                'id_reg'=>55,
                'description'=>'Nevada'
                ],
                
                
                            
                [
                'id_com'=>811,
                'id_reg'=>55,
                'description'=>'New York'
                ],
                
                
                            
                [
                'id_com'=>812,
                'id_reg'=>55,
                'description'=>'Ohio'
                ],
                
                
                            
                [
                'id_com'=>813,
                'id_reg'=>55,
                'description'=>'Oklahoma'
                ],
                
                
                            
                [
                'id_com'=>814,
                'id_reg'=>55,
                'description'=>'Oregon'
                ],
                
                
                            
                [
                'id_com'=>815,
                'id_reg'=>55,
                'description'=>'Pennsylvania'
                ],
                
                
                            
                [
                'id_com'=>816,
                'id_reg'=>246,
                'description'=>'Puerto Rico'
                ],
                
                
                            
                [
                'id_com'=>817,
                'id_reg'=>55,
                'description'=>'Palau'
                ],
                
                
                            
                [
                'id_com'=>818,
                'id_reg'=>55,
                'description'=>'Rhode Island'
                ],
                
                
                            
                [
                'id_com'=>819,
                'id_reg'=>55,
                'description'=>'South Carolina'
                ],
                
                
                            
                [
                'id_com'=>820,
                'id_reg'=>55,
                'description'=>'South Dakota'
                ],
                
                
                            
                [
                'id_com'=>821,
                'id_reg'=>55,
                'description'=>'Tennessee'
                ],
                
                
                            
                [
                'id_com'=>822,
                'id_reg'=>55,
                'description'=>'Texas'
                ],
                
                
                            
                [
                'id_com'=>823,
                'id_reg'=>55,
                'description'=>'Utah'
                ],
                
                
                            
                [
                'id_com'=>824,
                'id_reg'=>55,
                'description'=>'Virginia'
                ],
                
                
                            
                [
                'id_com'=>825,
                'id_reg'=>55,
                'description'=>'Virgin Islands'
                ],
                
                
                            
                [
                'id_com'=>826,
                'id_reg'=>55,
                'description'=>'Vermont'
                ],
                
                
                            
                [
                'id_com'=>827,
                'id_reg'=>55,
                'description'=>'Washington'
                ],
                
                
                            
                [
                'id_com'=>828,
                'id_reg'=>55,
                'description'=>'West Virginia'
                ],
                
                
                            
                [
                'id_com'=>829,
                'id_reg'=>55,
                'description'=>'Wisconsin'
                ],
                
                
                            
                [
                'id_com'=>830,
                'id_reg'=>55,
                'description'=>'Wyoming'
                ],
                
                
                            
                [
                'id_com'=>831,
                'id_reg'=>94,
                'description'=>'Greenland'
                ],
                
                
                            
                [
                'id_com'=>832,
                'id_reg'=>18,
                'description'=>'Brandenburg'
                ],
                
                
                            
                [
                'id_com'=>833,
                'id_reg'=>18,
                'description'=>'Baden-Württemberg'
                ],
                
                
                            
                [
                'id_com'=>834,
                'id_reg'=>18,
                'description'=>'Bayern'
                ],
                
                
                            
                [
                'id_com'=>835,
                'id_reg'=>18,
                'description'=>'Hessen'
                ],
                
                
                            
                [
                'id_com'=>836,
                'id_reg'=>18,
                'description'=>'Hamburg'
                ],
                
                
                            
                [
                'id_com'=>837,
                'id_reg'=>18,
                'description'=>'Mecklenburg-Vorpommern'
                ],
                
                
                            
                [
                'id_com'=>838,
                'id_reg'=>18,
                'description'=>'Niedersachsen'
                ],
                
                
                            
                [
                'id_com'=>839,
                'id_reg'=>18,
                'description'=>'Nordrhein-Westfalen'
                ],
                
                
                            
                [
                'id_com'=>840,
                'id_reg'=>18,
                'description'=>'Rheinland-Pfalz'
                ],
                
                
                            
                [
                'id_com'=>841,
                'id_reg'=>18,
                'description'=>'Schleswig-Holstein'
                ],
                
                
                            
                [
                'id_com'=>842,
                'id_reg'=>18,
                'description'=>'Sachsen'
                ],
                
                
                            
                [
                'id_com'=>843,
                'id_reg'=>18,
                'description'=>'Sachsen-Anhalt'
                ],
                
                
                            
                [
                'id_com'=>844,
                'id_reg'=>18,
                'description'=>'Thüringen'
                ],
                
                
                            
                [
                'id_com'=>845,
                'id_reg'=>18,
                'description'=>'Berlin'
                ],
                
                
                            
                [
                'id_com'=>846,
                'id_reg'=>18,
                'description'=>'Bremen'
                ],
                
                
                            
                [
                'id_com'=>847,
                'id_reg'=>18,
                'description'=>'Saarland'
                ],
                
                
                            
                [
                'id_com'=>848,
                'id_reg'=>13,
                'description'=>'Scotland North'
                ],
                
                
                            
                [
                'id_com'=>849,
                'id_reg'=>13,
                'description'=>'England - East'
                ],
                
                
                            
                [
                'id_com'=>850,
                'id_reg'=>13,
                'description'=>'England - West Midlands'
                ],
                
                
                            
                [
                'id_com'=>851,
                'id_reg'=>13,
                'description'=>'England - South West'
                ],
                
                
                            
                [
                'id_com'=>852,
                'id_reg'=>13,
                'description'=>'England - North West'
                ],
                
                
                            
                [
                'id_com'=>853,
                'id_reg'=>13,
                'description'=>'England - Yorks & Humber'
                ],
                
                
                            
                [
                'id_com'=>854,
                'id_reg'=>13,
                'description'=>'England - South East'
                ],
                
                
                            
                [
                'id_com'=>855,
                'id_reg'=>13,
                'description'=>'England - London'
                ],
                
                
                            
                [
                'id_com'=>856,
                'id_reg'=>13,
                'description'=>'Northern Ireland'
                ],
                
                
                            
                [
                'id_com'=>857,
                'id_reg'=>13,
                'description'=>'England - North East'
                ],
                
                
                            
                [
                'id_com'=>858,
                'id_reg'=>13,
                'description'=>'Wales South'
                ],
                
                
                            
                [
                'id_com'=>859,
                'id_reg'=>13,
                'description'=>'Wales North'
                ],
                
                
                            
                [
                'id_com'=>860,
                'id_reg'=>13,
                'description'=>'England - East Midlands'
                ],
                
                
                            
                [
                'id_com'=>861,
                'id_reg'=>13,
                'description'=>'Scotland Central'
                ],
                
                
                            
                [
                'id_com'=>862,
                'id_reg'=>13,
                'description'=>'Scotland South'
                ],
                
                
                            
                [
                'id_com'=>863,
                'id_reg'=>13,
                'description'=>'Channel Islands'
                ],
                
                
                            
                [
                'id_com'=>864,
                'id_reg'=>13,
                'description'=>'Isle of Man'
                ],
                
                
                            
                [
                'id_com'=>865,
                'id_reg'=>2,
                'description'=>'Burgenland'
                ],
                
                
                            
                [
                'id_com'=>866,
                'id_reg'=>2,
                'description'=>'Kärnten'
                ],
                
                
                            
                [
                'id_com'=>867,
                'id_reg'=>2,
                'description'=>'Niederösterreich'
                ],
                
                
                            
                [
                'id_com'=>868,
                'id_reg'=>2,
                'description'=>'Oberösterreich'
                ],
                
                
                            
                [
                'id_com'=>869,
                'id_reg'=>2,
                'description'=>'Salzburg'
                ],
                
                
                            
                [
                'id_com'=>870,
                'id_reg'=>2,
                'description'=>'Steiermark'
                ],
                
                
                            
                [
                'id_com'=>871,
                'id_reg'=>2,
                'description'=>'Tirol'
                ],
                
                
                            
                [
                'id_com'=>872,
                'id_reg'=>2,
                'description'=>'Vorarlberg'
                ],
                
                
                            
                [
                'id_com'=>873,
                'id_reg'=>2,
                'description'=>'Wien'
                ],
                
                
                            
                [
                'id_com'=>874,
                'id_reg'=>9,
                'description'=>'Bruxelles'
                ],
                
                
                            
                [
                'id_com'=>875,
                'id_reg'=>9,
                'description'=>'West-Vlaanderen'
                ],
                
                
                            
                [
                'id_com'=>876,
                'id_reg'=>9,
                'description'=>'Oost-Vlaanderen'
                ],
                
                
                            
                [
                'id_com'=>877,
                'id_reg'=>9,
                'description'=>'Limburg'
                ],
                
                
                            
                [
                'id_com'=>878,
                'id_reg'=>9,
                'description'=>'Vlaams Brabant'
                ],
                
                
                            
                [
                'id_com'=>879,
                'id_reg'=>9,
                'description'=>'Antwerpen'
                ],
                
                
                            
                [
                'id_com'=>880,
                'id_reg'=>9,
                'description'=>'LiÄge'
                ],
                
                
                            
                [
                'id_com'=>881,
                'id_reg'=>9,
                'description'=>'Namur'
                ],
                
                
                            
                [
                'id_com'=>882,
                'id_reg'=>9,
                'description'=>'Hainaut'
                ],
                
                
                            
                [
                'id_com'=>883,
                'id_reg'=>9,
                'description'=>'Luxembourg'
                ],
                
                
                            
                [
                'id_com'=>884,
                'id_reg'=>9,
                'description'=>'Brabant Wallon'
                ],
                
                
                            
                [
                'id_com'=>887,
                'id_reg'=>67,
                'description'=>'Blekinge Lan'
                ],
                
                
                            
                [
                'id_com'=>888,
                'id_reg'=>67,
                'description'=>'Gavleborgs Lan'
                ],
                
                
                            
                [
                'id_com'=>890,
                'id_reg'=>67,
                'description'=>'Gotlands Lan'
                ],
                
                
                            
                [
                'id_com'=>891,
                'id_reg'=>67,
                'description'=>'Hallands Lan'
                ],
                
                
                            
                [
                'id_com'=>892,
                'id_reg'=>67,
                'description'=>'Jamtlands Lan'
                ],
                
                
                            
                [
                'id_com'=>893,
                'id_reg'=>67,
                'description'=>'Jonkopings Lan'
                ],
                
                
                            
                [
                'id_com'=>894,
                'id_reg'=>67,
                'description'=>'Kalmar Lan'
                ],
                
                
                            
                [
                'id_com'=>895,
                'id_reg'=>67,
                'description'=>'Dalarnas Lan'
                ],
                
                
                            
                [
                'id_com'=>897,
                'id_reg'=>67,
                'description'=>'Kronobergs Lan'
                ],
                
                
                            
                [
                'id_com'=>899,
                'id_reg'=>67,
                'description'=>'Norrbottens Lan'
                ],
                
                
                            
                [
                'id_com'=>900,
                'id_reg'=>67,
                'description'=>'Orebro Lan'
                ],
                
                
                            
                [
                'id_com'=>901,
                'id_reg'=>67,
                'description'=>'Ostergotlands Lan'
                ],
                
                
                            
                [
                'id_com'=>903,
                'id_reg'=>67,
                'description'=>'Sodermanlands Lan'
                ],
                
                
                            
                [
                'id_com'=>904,
                'id_reg'=>67,
                'description'=>'Uppsala Lan'
                ],
                
                
                            
                [
                'id_com'=>905,
                'id_reg'=>67,
                'description'=>'Varmlands Lan'
                ],
                
                
                            
                [
                'id_com'=>906,
                'id_reg'=>67,
                'description'=>'Vasterbottens Lan'
                ],
                
                
                            
                [
                'id_com'=>907,
                'id_reg'=>67,
                'description'=>'Vasternorrlands Lan'
                ],
                
                
                            
                [
                'id_com'=>908,
                'id_reg'=>67,
                'description'=>'Vastmanlands Lan'
                ],
                
                
                            
                [
                'id_com'=>909,
                'id_reg'=>67,
                'description'=>'Stockholms Lan'
                ],
                
                
                            
                [
                'id_com'=>910,
                'id_reg'=>67,
                'description'=>'Skane Lan'
                ],
                
                
                            
                [
                'id_com'=>911,
                'id_reg'=>67,
                'description'=>'Vastra Gotaland'
                ],
                
                
                            
                [
                'id_com'=>913,
                'id_reg'=>46,
                'description'=>'Akershus'
                ],
                
                
                            
                [
                'id_com'=>914,
                'id_reg'=>46,
                'description'=>'Aust-Agder'
                ],
                
                
                            
                [
                'id_com'=>915,
                'id_reg'=>46,
                'description'=>'Buskerud'
                ],
                
                
                            
                [
                'id_com'=>916,
                'id_reg'=>46,
                'description'=>'Finnmark'
                ],
                
                
                            
                [
                'id_com'=>917,
                'id_reg'=>46,
                'description'=>'Hedmark'
                ],
                
                
                            
                [
                'id_com'=>918,
                'id_reg'=>46,
                'description'=>'Hordaland'
                ],
                
                
                            
                [
                'id_com'=>919,
                'id_reg'=>46,
                'description'=>'More og Romsdal'
                ],
                
                
                            
                [
                'id_com'=>920,
                'id_reg'=>46,
                'description'=>'Nordland'
                ],
                
                
                            
                [
                'id_com'=>921,
                'id_reg'=>46,
                'description'=>'Nord-Trondelag'
                ],
                
                
                            
                [
                'id_com'=>922,
                'id_reg'=>46,
                'description'=>'Oppland'
                ],
                
                
                            
                [
                'id_com'=>923,
                'id_reg'=>46,
                'description'=>'Oslo'
                ],
                
                
                            
                [
                'id_com'=>924,
                'id_reg'=>46,
                'description'=>'Ostfold'
                ],
                
                
                            
                [
                'id_com'=>925,
                'id_reg'=>46,
                'description'=>'Rogaland'
                ],
                
                
                            
                [
                'id_com'=>926,
                'id_reg'=>46,
                'description'=>'Sogn og Fjordane'
                ],
                
                
                            
                [
                'id_com'=>927,
                'id_reg'=>46,
                'description'=>'Sor-Trondelag'
                ],
                
                
                            
                [
                'id_com'=>928,
                'id_reg'=>46,
                'description'=>'Telemark'
                ],
                
                
                            
                [
                'id_com'=>929,
                'id_reg'=>46,
                'description'=>'Troms'
                ],
                
                
                            
                [
                'id_com'=>930,
                'id_reg'=>46,
                'description'=>'Vest-Agder'
                ],
                
                
                            
                [
                'id_com'=>931,
                'id_reg'=>46,
                'description'=>'Vestfold'
                ],
                
                
                            
                [
                'id_com'=>933,
                'id_reg'=>63,
                'description'=>'Ð•land'
                ],
                
                
                            
                [
                'id_com'=>934,
                'id_reg'=>63,
                'description'=>'Lapland'
                ],
                
                
                            
                [
                'id_com'=>935,
                'id_reg'=>63,
                'description'=>'Oulu'
                ],
                
                
                            
                [
                'id_com'=>936,
                'id_reg'=>63,
                'description'=>'Southern Finland'
                ],
                
                
                            
                [
                'id_com'=>937,
                'id_reg'=>63,
                'description'=>'Eastern Finland'
                ],
                
                
                            
                [
                'id_com'=>938,
                'id_reg'=>63,
                'description'=>'Western Finland'
                ],
                
                
                            
                [
                'id_com'=>940,
                'id_reg'=>22,
                'description'=>'Arhus'
                ],
                
                
                            
                [
                'id_com'=>941,
                'id_reg'=>22,
                'description'=>'Bornholm'
                ],
                
                
                            
                [
                'id_com'=>942,
                'id_reg'=>22,
                'description'=>'Frederiksborg'
                ],
                
                
                            
                [
                'id_com'=>943,
                'id_reg'=>22,
                'description'=>'Fyn'
                ],
                
                
                            
                [
                'id_com'=>944,
                'id_reg'=>22,
                'description'=>'Kobenhavn'
                ],
                
                
                            
                [
                'id_com'=>945,
                'id_reg'=>22,
                'description'=>'Staden Kobenhavn'
                ],
                
                
                            
                [
                'id_com'=>946,
                'id_reg'=>22,
                'description'=>'Nordjylland'
                ],
                
                
                            
                [
                'id_com'=>947,
                'id_reg'=>22,
                'description'=>'Ribe'
                ],
                
                
                            
                [
                'id_com'=>948,
                'id_reg'=>22,
                'description'=>'Ringkobing'
                ],
                
                
                            
                [
                'id_com'=>949,
                'id_reg'=>22,
                'description'=>'Roskilde'
                ],
                
                
                            
                [
                'id_com'=>950,
                'id_reg'=>22,
                'description'=>'Sonderjylland'
                ],
                
                
                            
                [
                'id_com'=>951,
                'id_reg'=>22,
                'description'=>'Storstrom'
                ],
                
                
                            
                [
                'id_com'=>952,
                'id_reg'=>22,
                'description'=>'Vejle'
                ],
                
                
                            
                [
                'id_com'=>953,
                'id_reg'=>22,
                'description'=>'Vestsjalland'
                ],
                
                
                            
                [
                'id_com'=>954,
                'id_reg'=>22,
                'description'=>'Viborg'
                ],
                
                
                            
                [
                'id_com'=>956,
                'id_reg'=>65,
                'description'=>'Hlavni Mesto Praha'
                ],
                
                
                            
                [
                'id_com'=>957,
                'id_reg'=>65,
                'description'=>'Jihomoravsky Kraj'
                ],
                
                
                            
                [
                'id_com'=>958,
                'id_reg'=>65,
                'description'=>'Jihocesky Kraj'
                ],
                
                
                            
                [
                'id_com'=>959,
                'id_reg'=>65,
                'description'=>'Vysocina'
                ],
                
                
                            
                [
                'id_com'=>960,
                'id_reg'=>65,
                'description'=>'Karlovarsky Kraj'
                ],
                
                
                            
                [
                'id_com'=>961,
                'id_reg'=>65,
                'description'=>'Kralovehradecky Kraj'
                ],
                
                
                            
                [
                'id_com'=>962,
                'id_reg'=>65,
                'description'=>'Liberecky Kraj'
                ],
                
                
                            
                [
                'id_com'=>963,
                'id_reg'=>65,
                'description'=>'Olomoucky Kraj'
                ],
                
                
                            
                [
                'id_com'=>964,
                'id_reg'=>65,
                'description'=>'Moravskoslezsky Kraj'
                ],
                
                
                            
                [
                'id_com'=>965,
                'id_reg'=>65,
                'description'=>'Pardubicky Kraj'
                ],
                
                
                            
                [
                'id_com'=>966,
                'id_reg'=>65,
                'description'=>'Plzensky Kraj'
                ],
                
                
                            
                [
                'id_com'=>967,
                'id_reg'=>65,
                'description'=>'Stredocesky Kraj'
                ],
                
                
                            
                [
                'id_com'=>968,
                'id_reg'=>65,
                'description'=>'Ustecky Kraj'
                ],
                
                
                            
                [
                'id_com'=>969,
                'id_reg'=>65,
                'description'=>'Zlinsky Kraj'
                ],
                
                
                            
                [
                'id_com'=>971,
                'id_reg'=>114,
                'description'=>'Berat'
                ],
                
                
                            
                [
                'id_com'=>972,
                'id_reg'=>114,
                'description'=>'Diber'
                ],
                
                
                            
                [
                'id_com'=>973,
                'id_reg'=>114,
                'description'=>'Durres'
                ],
                
                
                            
                [
                'id_com'=>974,
                'id_reg'=>114,
                'description'=>'Elbasan'
                ],
                
                
                            
                [
                'id_com'=>975,
                'id_reg'=>114,
                'description'=>'Fier'
                ],
                
                
                            
                [
                'id_com'=>976,
                'id_reg'=>114,
                'description'=>'Gjirokaster'
                ],
                
                
                            
                [
                'id_com'=>977,
                'id_reg'=>114,
                'description'=>'Korce'
                ],
                
                
                            
                [
                'id_com'=>978,
                'id_reg'=>114,
                'description'=>'Kukes'
                ],
                
                
                            
                [
                'id_com'=>979,
                'id_reg'=>114,
                'description'=>'Lezhe'
                ],
                
                
                            
                [
                'id_com'=>980,
                'id_reg'=>114,
                'description'=>'Shkoder'
                ],
                
                
                            
                [
                'id_com'=>981,
                'id_reg'=>114,
                'description'=>'Tirane'
                ],
                
                
                            
                [
                'id_com'=>982,
                'id_reg'=>114,
                'description'=>'Vlore'
                ],
                
                
                            
                [
                'id_com'=>984,
                'id_reg'=>145,
                'description'=>'Canillo'
                ],
                
                
                            
                [
                'id_com'=>985,
                'id_reg'=>145,
                'description'=>'Encamp'
                ],
                
                
                            
                [
                'id_com'=>986,
                'id_reg'=>145,
                'description'=>'La Massana'
                ],
                
                
                            
                [
                'id_com'=>987,
                'id_reg'=>145,
                'description'=>'Ordino'
                ],
                
                
                            
                [
                'id_com'=>988,
                'id_reg'=>145,
                'description'=>'Sant Julia de Loria'
                ],
                
                
                            
                [
                'id_com'=>989,
                'id_reg'=>145,
                'description'=>'Andorra la Vella'
                ],
                
                
                            
                [
                'id_com'=>990,
                'id_reg'=>145,
                'description'=>'Escaldes-Engordany'
                ],
                
                
                            
                [
                'id_com'=>992,
                'id_reg'=>6,
                'description'=>'Aragatsotn'
                ],
                
                
                            
                [
                'id_com'=>993,
                'id_reg'=>6,
                'description'=>'Ararat'
                ],
                
                
                            
                [
                'id_com'=>994,
                'id_reg'=>6,
                'description'=>'Armavir'
                ],
                
                
                            
                [
                'id_com'=>995,
                'id_reg'=>6,
                'description'=>"Geghark'unik"
                ],
                
                
                            
                [
                'id_com'=>996,
                'id_reg'=>6,
                'description'=>'Kotayk'
                ],
                
                
                            
                [
                'id_com'=>997,
                'id_reg'=>6,
                'description'=>'Lorri'
                ],
                
                
                            
                [
                'id_com'=>998,
                'id_reg'=>6,
                'description'=>'Shirak'
                ],
                
                
                            
                [
                'id_com'=>999,
                'id_reg'=>6,
                'description'=>'Syunik'
                ],
                
                
                            
                [
                'id_com'=>1000,
                'id_reg'=>6,
                'description'=>'Tavush'
                ],
                
                
                            
                [
                'id_com'=>1001,
                'id_reg'=>6,
                'description'=>'Vayots Dzor'
                ],
                
                
                            
                [
                'id_com'=>1002,
                'id_reg'=>6,
                'description'=>'Yerevan'
                ],
                
                
                            
                [
                'id_com'=>1004,
                'id_reg'=>79,
                'description'=>'Federation of Bosnia and Herzegovina'
                ],
                
                
                            
                [
                'id_com'=>1005,
                'id_reg'=>79,
                'description'=>'Republika Srpska'
                ],
                
                
                            
                [
                'id_com'=>1007,
                'id_reg'=>11,
                'description'=>'Mikhaylovgrad'
                ],
                
                
                            
                [
                'id_com'=>1008,
                'id_reg'=>11,
                'description'=>'Blagoevgrad'
                ],
                
                
                            
                [
                'id_com'=>1009,
                'id_reg'=>11,
                'description'=>'Burgas'
                ],
                
                
                            
                [
                'id_com'=>1010,
                'id_reg'=>11,
                'description'=>'Dobrich'
                ],
                
                
                            
                [
                'id_com'=>1011,
                'id_reg'=>11,
                'description'=>'Gabrovo'
                ],
                
                
                            
                [
                'id_com'=>1012,
                'id_reg'=>11,
                'description'=>'Grad Sofiya'
                ],
                
                
                            
                [
                'id_com'=>1013,
                'id_reg'=>11,
                'description'=>'Khaskovo'
                ],
                
                
                            
                [
                'id_com'=>1014,
                'id_reg'=>11,
                'description'=>'Kurdzhali'
                ],
                
                
                            
                [
                'id_com'=>1015,
                'id_reg'=>11,
                'description'=>'Kyustendil'
                ],
                
                
                            
                [
                'id_com'=>1016,
                'id_reg'=>11,
                'description'=>'Lovech'
                ],
                
                
                            
                [
                'id_com'=>1017,
                'id_reg'=>11,
                'description'=>'Montana'
                ],
                
                
                            
                [
                'id_com'=>1018,
                'id_reg'=>11,
                'description'=>'Pazardzhik'
                ],
                
                
                            
                [
                'id_com'=>1019,
                'id_reg'=>11,
                'description'=>'Pernik'
                ],
                
                
                            
                [
                'id_com'=>1020,
                'id_reg'=>11,
                'description'=>'Pleven'
                ],
                
                
                            
                [
                'id_com'=>1021,
                'id_reg'=>11,
                'description'=>'Plovdiv'
                ],
                
                
                            
                [
                'id_com'=>1022,
                'id_reg'=>11,
                'description'=>'Razgrad'
                ],
                
                
                            
                [
                'id_com'=>1023,
                'id_reg'=>11,
                'description'=>'Ruse'
                ],
                
                
                            
                [
                'id_com'=>1024,
                'id_reg'=>11,
                'description'=>'Shumen'
                ],
                
                
                            
                [
                'id_com'=>1025,
                'id_reg'=>11,
                'description'=>'Silistra'
                ],
                
                
                            
                [
                'id_com'=>1026,
                'id_reg'=>11,
                'description'=>'Sliven'
                ],
                
                
                            
                [
                'id_com'=>1027,
                'id_reg'=>11,
                'description'=>'Smolyan'
                ],
                
                
                            
                [
                'id_com'=>1028,
                'id_reg'=>11,
                'description'=>'Sofiya'
                ],
                
                
                            
                [
                'id_com'=>1029,
                'id_reg'=>11,
                'description'=>'Stara Zagora'
                ],
                
                
                            
                [
                'id_com'=>1030,
                'id_reg'=>11,
                'description'=>'Turgovishte'
                ],
                
                
                            
                [
                'id_com'=>1031,
                'id_reg'=>11,
                'description'=>'Varna'
                ],
                
                
                            
                [
                'id_com'=>1032,
                'id_reg'=>11,
                'description'=>'Veliko Turnovo'
                ],
                
                
                            
                [
                'id_com'=>1033,
                'id_reg'=>11,
                'description'=>'Vidin'
                ],
                
                
                            
                [
                'id_com'=>1034,
                'id_reg'=>11,
                'description'=>'Vratsa'
                ],
                
                
                            
                [
                'id_com'=>1035,
                'id_reg'=>11,
                'description'=>'Yambol'
                ],
                
                
                            
                [
                'id_com'=>1037,
                'id_reg'=>71,
                'description'=>'Bjelovarsko-Bilogorska'
                ],
                
                
                            
                [
                'id_com'=>1038,
                'id_reg'=>71,
                'description'=>'Brodsko-Posavska'
                ],
                
                
                            
                [
                'id_com'=>1039,
                'id_reg'=>71,
                'description'=>'Dubrovacko-Neretvanska'
                ],
                
                
                            
                [
                'id_com'=>1040,
                'id_reg'=>71,
                'description'=>'Istarska'
                ],
                
                
                            
                [
                'id_com'=>1041,
                'id_reg'=>71,
                'description'=>'Karlovacka'
                ],
                
                
                            
                [
                'id_com'=>1042,
                'id_reg'=>71,
                'description'=>'Koprivnicko-Krizevacka'
                ],
                
                
                            
                [
                'id_com'=>1043,
                'id_reg'=>71,
                'description'=>'Krapinsko-Zagorska'
                ],
                
                
                            
                [
                'id_com'=>1044,
                'id_reg'=>71,
                'description'=>'Licko-Senjska'
                ],
                
                
                            
                [
                'id_com'=>1045,
                'id_reg'=>71,
                'description'=>'Medimurska'
                ],
                
                
                            
                [
                'id_com'=>1046,
                'id_reg'=>71,
                'description'=>'Osjecko-Baranjska'
                ],
                
                
                            
                [
                'id_com'=>1047,
                'id_reg'=>71,
                'description'=>'Pozesko-Slavonska'
                ],
                
                
                            
                [
                'id_com'=>1048,
                'id_reg'=>71,
                'description'=>'Primorsko-Goranska'
                ],
                
                
                            
                [
                'id_com'=>1049,
                'id_reg'=>71,
                'description'=>'Sibensko-Kninska'
                ],
                
                
                            
                [
                'id_com'=>1050,
                'id_reg'=>71,
                'description'=>'Sisacko-Moslavacka'
                ],
                
                
                            
                [
                'id_com'=>1051,
                'id_reg'=>71,
                'description'=>'Splitsko-Dalmatinska'
                ],
                
                
                            
                [
                'id_com'=>1052,
                'id_reg'=>71,
                'description'=>'Varazdinska'
                ],
                
                
                            
                [
                'id_com'=>1053,
                'id_reg'=>71,
                'description'=>'Viroviticko-Podravska'
                ],
                
                
                            
                [
                'id_com'=>1054,
                'id_reg'=>71,
                'description'=>'Vukovarsko-Srijemska'
                ],
                
                
                            
                [
                'id_com'=>1055,
                'id_reg'=>71,
                'description'=>'Zadarska'
                ],
                
                
                            
                [
                'id_com'=>1056,
                'id_reg'=>71,
                'description'=>'Zagrebacka'
                ],
                
                
                            
                [
                'id_com'=>1057,
                'id_reg'=>71,
                'description'=>'Grad Zagreb'
                ],
                
                
                            
                [
                'id_com'=>1059,
                'id_reg'=>143,
                'description'=>'Gibraltar'
                ],
                
                
                            
                [
                'id_com'=>1060,
                'id_reg'=>20,
                'description'=>'Evros'
                ],
                
                
                            
                [
                'id_com'=>1061,
                'id_reg'=>20,
                'description'=>'Rodhopi'
                ],
                
                
                            
                [
                'id_com'=>1062,
                'id_reg'=>20,
                'description'=>'Xanthi'
                ],
                
                
                            
                [
                'id_com'=>1063,
                'id_reg'=>20,
                'description'=>'Drama'
                ],
                
                
                            
                [
                'id_com'=>1064,
                'id_reg'=>20,
                'description'=>'Serrai'
                ],
                
                
                            
                [
                'id_com'=>1065,
                'id_reg'=>20,
                'description'=>'Kilkis'
                ],
                
                
                            
                [
                'id_com'=>1066,
                'id_reg'=>20,
                'description'=>'Pella'
                ],
                
                
                            
                [
                'id_com'=>1067,
                'id_reg'=>20,
                'description'=>'Florina'
                ],
                
                
                            
                [
                'id_com'=>1068,
                'id_reg'=>20,
                'description'=>'Kastoria'
                ],
                
                
                            
                [
                'id_com'=>1069,
                'id_reg'=>20,
                'description'=>'Grevena'
                ],
                
                
                            
                [
                'id_com'=>1070,
                'id_reg'=>20,
                'description'=>'Kozani'
                ],
                
                
                            
                [
                'id_com'=>1071,
                'id_reg'=>20,
                'description'=>'Imathia'
                ],
                
                
                            
                [
                'id_com'=>1072,
                'id_reg'=>20,
                'description'=>'Thessaloniki'
                ],
                
                
                            
                [
                'id_com'=>1073,
                'id_reg'=>20,
                'description'=>'Kavala'
                ],
                
                
                            
                [
                'id_com'=>1074,
                'id_reg'=>20,
                'description'=>'Khalkidhiki'
                ],
                
                
                            
                [
                'id_com'=>1075,
                'id_reg'=>20,
                'description'=>'Pieria'
                ],
                
                
                            
                [
                'id_com'=>1076,
                'id_reg'=>20,
                'description'=>'Ioannina'
                ],
                
                
                            
                [
                'id_com'=>1077,
                'id_reg'=>20,
                'description'=>'Thesprotia'
                ],
                
                
                            
                [
                'id_com'=>1078,
                'id_reg'=>20,
                'description'=>'Preveza'
                ],
                
                
                            
                [
                'id_com'=>1079,
                'id_reg'=>20,
                'description'=>'Arta'
                ],
                
                
                            
                [
                'id_com'=>1080,
                'id_reg'=>20,
                'description'=>'Larisa'
                ],
                
                
                            
                [
                'id_com'=>1081,
                'id_reg'=>20,
                'description'=>'Trikala'
                ],
                
                
                            
                [
                'id_com'=>1082,
                'id_reg'=>20,
                'description'=>'Kardhitsa'
                ],
                
                
                            
                [
                'id_com'=>1083,
                'id_reg'=>20,
                'description'=>'Magnisia'
                ],
                
                
                            
                [
                'id_com'=>1084,
                'id_reg'=>20,
                'description'=>'Kerkira'
                ],
                
                
                            
                [
                'id_com'=>1085,
                'id_reg'=>20,
                'description'=>'Levkas'
                ],
                
                
                            
                [
                'id_com'=>1086,
                'id_reg'=>20,
                'description'=>'Kefallinia'
                ],
                
                
                            
                [
                'id_com'=>1087,
                'id_reg'=>20,
                'description'=>'Zakinthos'
                ],
                
                
                            
                [
                'id_com'=>1088,
                'id_reg'=>20,
                'description'=>'Fthiotis'
                ],
                
                
                            
                [
                'id_com'=>1089,
                'id_reg'=>20,
                'description'=>'Evritania'
                ],
                
                
                            
                [
                'id_com'=>1090,
                'id_reg'=>20,
                'description'=>'Aitolia kai Akarnania'
                ],
                
                
                            
                [
                'id_com'=>1091,
                'id_reg'=>20,
                'description'=>'Fokis'
                ],
                
                
                            
                [
                'id_com'=>1092,
                'id_reg'=>20,
                'description'=>'Voiotia'
                ],
                
                
                            
                [
                'id_com'=>1093,
                'id_reg'=>20,
                'description'=>'Evvoia'
                ],
                
                
                            
                [
                'id_com'=>1094,
                'id_reg'=>20,
                'description'=>'Attiki'
                ],
                
                
                            
                [
                'id_com'=>1095,
                'id_reg'=>20,
                'description'=>'Argolis'
                ],
                
                
                            
                [
                'id_com'=>1096,
                'id_reg'=>20,
                'description'=>'Korinthia'
                ],
                
                
                            
                [
                'id_com'=>1097,
                'id_reg'=>20,
                'description'=>'Akhaia'
                ],
                
                
                            
                [
                'id_com'=>1098,
                'id_reg'=>20,
                'description'=>'Ilia'
                ],
                
                
                            
                [
                'id_com'=>1099,
                'id_reg'=>20,
                'description'=>'Messinia'
                ],
                
                
                            
                [
                'id_com'=>1100,
                'id_reg'=>20,
                'description'=>'Arkadhia'
                ],
                
                
                            
                [
                'id_com'=>1101,
                'id_reg'=>20,
                'description'=>'Lakonia'
                ],
                
                
                            
                [
                'id_com'=>1102,
                'id_reg'=>20,
                'description'=>'Khania'
                ],
                
                
                            
                [
                'id_com'=>1103,
                'id_reg'=>20,
                'description'=>'Rethimni'
                ],
                
                
                            
                [
                'id_com'=>1104,
                'id_reg'=>20,
                'description'=>'Iraklion'
                ],
                
                
                            
                [
                'id_com'=>1105,
                'id_reg'=>20,
                'description'=>'Lasithi'
                ],
                
                
                            
                [
                'id_com'=>1106,
                'id_reg'=>20,
                'description'=>'Dhodhekanisos'
                ],
                
                
                            
                [
                'id_com'=>1107,
                'id_reg'=>20,
                'description'=>'Samos'
                ],
                
                
                            
                [
                'id_com'=>1108,
                'id_reg'=>20,
                'description'=>'Kikladhes'
                ],
                
                
                            
                [
                'id_com'=>1109,
                'id_reg'=>20,
                'description'=>'Khios'
                ],
                
                
                            
                [
                'id_com'=>1110,
                'id_reg'=>20,
                'description'=>'Lesvos'
                ],
                
                
                            
                [
                'id_com'=>1112,
                'id_reg'=>14,
                'description'=>'Bacs-Kiskun'
                ],
                
                
                            
                [
                'id_com'=>1113,
                'id_reg'=>14,
                'description'=>'Baranya'
                ],
                
                
                            
                [
                'id_com'=>1114,
                'id_reg'=>14,
                'description'=>'Bekes'
                ],
                
                
                            
                [
                'id_com'=>1115,
                'id_reg'=>14,
                'description'=>'Borsod-Abauj-Zemplen'
                ],
                
                
                            
                [
                'id_com'=>1116,
                'id_reg'=>14,
                'description'=>'Budapest'
                ],
                
                
                            
                [
                'id_com'=>1117,
                'id_reg'=>14,
                'description'=>'Csongrad'
                ],
                
                
                            
                [
                'id_com'=>1118,
                'id_reg'=>14,
                'description'=>'Debrecen'
                ],
                
                
                            
                [
                'id_com'=>1119,
                'id_reg'=>14,
                'description'=>'Fejer'
                ],
                
                
                            
                [
                'id_com'=>1120,
                'id_reg'=>14,
                'description'=>'Gyor-Moson-Sopron'
                ],
                
                
                            
                [
                'id_com'=>1121,
                'id_reg'=>14,
                'description'=>'Hajdu-Bihar'
                ],
                
                
                            
                [
                'id_com'=>1122,
                'id_reg'=>14,
                'description'=>'Heves'
                ],
                
                
                            
                [
                'id_com'=>1123,
                'id_reg'=>14,
                'description'=>'Komarom-Esztergom'
                ],
                
                
                            
                [
                'id_com'=>1124,
                'id_reg'=>14,
                'description'=>'Miskolc'
                ],
                
                
                            
                [
                'id_com'=>1125,
                'id_reg'=>14,
                'description'=>'Nograd'
                ],
                
                
                            
                [
                'id_com'=>1126,
                'id_reg'=>14,
                'description'=>'Pecs'
                ],
                
                
                            
                [
                'id_com'=>1127,
                'id_reg'=>14,
                'description'=>'Pest'
                ],
                
                
                            
                [
                'id_com'=>1128,
                'id_reg'=>14,
                'description'=>'Somogy'
                ],
                
                
                            
                [
                'id_com'=>1129,
                'id_reg'=>14,
                'description'=>'Szabolcs-Szatmar-Bereg'
                ],
                
                
                            
                [
                'id_com'=>1130,
                'id_reg'=>14,
                'description'=>'Szeged'
                ],
                
                
                            
                [
                'id_com'=>1131,
                'id_reg'=>14,
                'description'=>'Jasz-Nagykun-Szolnok'
                ],
                
                
                            
                [
                'id_com'=>1132,
                'id_reg'=>14,
                'description'=>'Tolna'
                ],
                
                
                            
                [
                'id_com'=>1133,
                'id_reg'=>14,
                'description'=>'Vas'
                ],
                
                
                            
                [
                'id_com'=>1134,
                'id_reg'=>14,
                'description'=>'Veszprem'
                ],
                
                
                            
                [
                'id_com'=>1135,
                'id_reg'=>14,
                'description'=>'Zala'
                ],
                
                
                            
                [
                'id_com'=>1136,
                'id_reg'=>14,
                'description'=>'Gyor'
                ],
                
                
                            
                [
                'id_com'=>1150,
                'id_reg'=>14,
                'description'=>'Veszprem'
                ],
                
                
                            
                [
                'id_com'=>1152,
                'id_reg'=>126,
                'description'=>'Balzers'
                ],
                
                
                            
                [
                'id_com'=>1153,
                'id_reg'=>126,
                'description'=>'Eschen'
                ],
                
                
                            
                [
                'id_com'=>1154,
                'id_reg'=>126,
                'description'=>'Gamprin'
                ],
                
                
                            
                [
                'id_com'=>1155,
                'id_reg'=>126,
                'description'=>'Mauren'
                ],
                
                
                            
                [
                'id_com'=>1156,
                'id_reg'=>126,
                'description'=>'Planken'
                ],
                
                
                            
                [
                'id_com'=>1157,
                'id_reg'=>126,
                'description'=>'Ruggell'
                ],
                
                
                            
                [
                'id_com'=>1158,
                'id_reg'=>126,
                'description'=>'Schaan'
                ],
                
                
                            
                [
                'id_com'=>1159,
                'id_reg'=>126,
                'description'=>'Schellenberg'
                ],
                
                
                            
                [
                'id_com'=>1160,
                'id_reg'=>126,
                'description'=>'Triesen'
                ],
                
                
                            
                [
                'id_com'=>1161,
                'id_reg'=>126,
                'description'=>'Triesenberg'
                ],
                
                
                            
                [
                'id_com'=>1162,
                'id_reg'=>126,
                'description'=>'Vaduz'
                ],
                
                
                            
                [
                'id_com'=>1163,
                'id_reg'=>41,
                'description'=>'Diekirch'
                ],
                
                
                            
                [
                'id_com'=>1164,
                'id_reg'=>41,
                'description'=>'Grevenmacher'
                ],
                
                
                            
                [
                'id_com'=>1165,
                'id_reg'=>41,
                'description'=>'Luxembourg'
                ],
                
                
                            
                [
                'id_com'=>1167,
                'id_reg'=>85,
                'description'=>'Aracinovo'
                ],
                
                
                            
                [
                'id_com'=>1168,
                'id_reg'=>85,
                'description'=>'Bac'
                ],
                
                
                            
                [
                'id_com'=>1169,
                'id_reg'=>85,
                'description'=>'Belcista'
                ],
                
                
                            
                [
                'id_com'=>1170,
                'id_reg'=>85,
                'description'=>'Berovo'
                ],
                
                
                            
                [
                'id_com'=>1171,
                'id_reg'=>85,
                'description'=>'Bistrica'
                ],
                
                
                            
                [
                'id_com'=>1172,
                'id_reg'=>85,
                'description'=>'Bitola'
                ],
                
                
                            
                [
                'id_com'=>1173,
                'id_reg'=>85,
                'description'=>'Blatec'
                ],
                
                
                            
                [
                'id_com'=>1174,
                'id_reg'=>85,
                'description'=>'Bogdanci'
                ],
                
                
                            
                [
                'id_com'=>1175,
                'id_reg'=>85,
                'description'=>'Bogomila'
                ],
                
                
                            
                [
                'id_com'=>1176,
                'id_reg'=>85,
                'description'=>'Bogovinje'
                ],
                
                
                            
                [
                'id_com'=>1177,
                'id_reg'=>85,
                'description'=>'Bosilovo'
                ],
                
                
                            
                [
                'id_com'=>1179,
                'id_reg'=>85,
                'description'=>'Cair'
                ],
                
                
                            
                [
                'id_com'=>1180,
                'id_reg'=>85,
                'description'=>'Capari'
                ],
                
                
                            
                [
                'id_com'=>1181,
                'id_reg'=>85,
                'description'=>'Caska'
                ],
                
                
                            
                [
                'id_com'=>1182,
                'id_reg'=>85,
                'description'=>'Cegrane'
                ],
                
                
                            
                [
                'id_com'=>1184,
                'id_reg'=>85,
                'description'=>'Centar Zupa'
                ],
                
                
                            
                [
                'id_com'=>1187,
                'id_reg'=>85,
                'description'=>'Debar'
                ],
                
                
                            
                [
                'id_com'=>1188,
                'id_reg'=>85,
                'description'=>'Delcevo'
                ],
                
                
                            
                [
                'id_com'=>1190,
                'id_reg'=>85,
                'description'=>'Demir Hisar'
                ],
                
                
                            
                [
                'id_com'=>1191,
                'id_reg'=>85,
                'description'=>'Demir Kapija'
                ],
                
                
                            
                [
                'id_com'=>1195,
                'id_reg'=>85,
                'description'=>'Dorce Petrov'
                ],
                
                
                            
                [
                'id_com'=>1198,
                'id_reg'=>85,
                'description'=>'Gazi Baba'
                ],
                
                
                            
                [
                'id_com'=>1199,
                'id_reg'=>85,
                'description'=>'Gevgelija'
                ],
                
                
                            
                [
                'id_com'=>1200,
                'id_reg'=>85,
                'description'=>'Gostivar'
                ],
                
                
                            
                [
                'id_com'=>1201,
                'id_reg'=>85,
                'description'=>'Gradsko'
                ],
                
                
                            
                [
                'id_com'=>1204,
                'id_reg'=>85,
                'description'=>'Jegunovce'
                ],
                
                
                            
                [
                'id_com'=>1205,
                'id_reg'=>85,
                'description'=>'Kamenjane'
                ],
                
                
                            
                [
                'id_com'=>1207,
                'id_reg'=>85,
                'description'=>'Karpos'
                ],
                
                
                            
                [
                'id_com'=>1208,
                'id_reg'=>85,
                'description'=>'Kavadarci'
                ],
                
                
                            
                [
                'id_com'=>1209,
                'id_reg'=>85,
                'description'=>'Kicevo'
                ],
                
                
                            
                [
                'id_com'=>1210,
                'id_reg'=>85,
                'description'=>'Kisela Voda'
                ],
                
                
                            
                [
                'id_com'=>1211,
                'id_reg'=>85,
                'description'=>'Klecevce'
                ],
                
                
                            
                [
                'id_com'=>1212,
                'id_reg'=>85,
                'description'=>'Kocani'
                ],
                
                
                            
                [
                'id_com'=>1214,
                'id_reg'=>85,
                'description'=>'Kondovo'
                ],
                
                
                            
                [
                'id_com'=>1217,
                'id_reg'=>85,
                'description'=>'Kratovo'
                ],
                
                
                            
                [
                'id_com'=>1219,
                'id_reg'=>85,
                'description'=>'Krivogastani'
                ],
                
                
                            
                [
                'id_com'=>1220,
                'id_reg'=>85,
                'description'=>'Krusevo'
                ],
                
                
                            
                [
                'id_com'=>1223,
                'id_reg'=>85,
                'description'=>'Kumanovo'
                ],
                
                
                            
                [
                'id_com'=>1224,
                'id_reg'=>85,
                'description'=>'Labunista'
                ],
                
                
                            
                [
                'id_com'=>1225,
                'id_reg'=>85,
                'description'=>'Lipkovo'
                ],
                
                
                            
                [
                'id_com'=>1228,
                'id_reg'=>85,
                'description'=>'Makedonska Kamenica'
                ],
                
                
                            
                [
                'id_com'=>1229,
                'id_reg'=>85,
                'description'=>'Makedonski Brod'
                ],
                
                
                            
                [
                'id_com'=>1234,
                'id_reg'=>85,
                'description'=>'Murtino'
                ],
                
                
                            
                [
                'id_com'=>1235,
                'id_reg'=>85,
                'description'=>'Negotino'
                ],
                
                
                            
                [
                'id_com'=>1238,
                'id_reg'=>85,
                'description'=>'Novo Selo'
                ],
                
                
                            
                [
                'id_com'=>1240,
                'id_reg'=>85,
                'description'=>'Ohrid'
                ],
                
                
                            
                [
                'id_com'=>1242,
                'id_reg'=>85,
                'description'=>'Orizari'
                ],
                
                
                            
                [
                'id_com'=>1245,
                'id_reg'=>85,
                'description'=>'Petrovec'
                ],
                
                
                            
                [
                'id_com'=>1248,
                'id_reg'=>85,
                'description'=>'Prilep'
                ],
                
                
                            
                [
                'id_com'=>1249,
                'id_reg'=>85,
                'description'=>'Probistip'
                ],
                
                
                            
                [
                'id_com'=>1250,
                'id_reg'=>85,
                'description'=>'Radovis'
                ],
                
                
                            
                [
                'id_com'=>1252,
                'id_reg'=>85,
                'description'=>'Resen'
                ],
                
                
                            
                [
                'id_com'=>1253,
                'id_reg'=>85,
                'description'=>'Rosoman'
                ],
                
                
                            
                [
                'id_com'=>1256,
                'id_reg'=>85,
                'description'=>'Saraj'
                ],
                
                
                            
                [
                'id_com'=>1260,
                'id_reg'=>85,
                'description'=>'Srbinovo'
                ],
                
                
                            
                [
                'id_com'=>1262,
                'id_reg'=>85,
                'description'=>'Star Dojran'
                ],
                
                
                            
                [
                'id_com'=>1264,
                'id_reg'=>85,
                'description'=>'Stip'
                ],
                
                
                            
                [
                'id_com'=>1265,
                'id_reg'=>85,
                'description'=>'Struga'
                ],
                
                
                            
                [
                'id_com'=>1266,
                'id_reg'=>85,
                'description'=>'Strumica'
                ],
                
                
                            
                [
                'id_com'=>1267,
                'id_reg'=>85,
                'description'=>'Studenicani'
                ],
                
                
                            
                [
                'id_com'=>1268,
                'id_reg'=>85,
                'description'=>'Suto Orizari'
                ],
                
                
                            
                [
                'id_com'=>1269,
                'id_reg'=>85,
                'description'=>'Sveti Nikole'
                ],
                
                
                            
                [
                'id_com'=>1270,
                'id_reg'=>85,
                'description'=>'Tearce'
                ],
                
                
                            
                [
                'id_com'=>1271,
                'id_reg'=>85,
                'description'=>'Tetovo'
                ],
                
                
                            
                [
                'id_com'=>1273,
                'id_reg'=>85,
                'description'=>'Valandovo'
                ],
                
                
                            
                [
                'id_com'=>1275,
                'id_reg'=>85,
                'description'=>'Veles'
                ],
                
                
                            
                [
                'id_com'=>1277,
                'id_reg'=>85,
                'description'=>'Vevcani'
                ],
                
                
                            
                [
                'id_com'=>1278,
                'id_reg'=>85,
                'description'=>'Vinica'
                ],
                
                
                            
                [
                'id_com'=>1281,
                'id_reg'=>85,
                'description'=>'Vrapciste'
                ],
                
                
                            
                [
                'id_com'=>1286,
                'id_reg'=>85,
                'description'=>'Zelino'
                ],
                
                
                            
                [
                'id_com'=>1289,
                'id_reg'=>85,
                'description'=>'Zrnovci'
                ],
                
                
                            
                [
                'id_com'=>1291,
                'id_reg'=>86,
                'description'=>'Malta'
                ],
                
                
                            
                [
                'id_com'=>1292,
                'id_reg'=>44,
                'description'=>'La Condamine'
                ],
                
                
                            
                [
                'id_com'=>1293,
                'id_reg'=>44,
                'description'=>'Monaco'
                ],
                
                
                            
                [
                'id_com'=>1294,
                'id_reg'=>44,
                'description'=>'Monte-Carlo'
                ],
                
                
                            
                [
                'id_com'=>1295,
                'id_reg'=>47,
                'description'=>'Biala Podlaska'
                ],
                
                
                            
                [
                'id_com'=>1296,
                'id_reg'=>47,
                'description'=>'Bialystok'
                ],
                
                
                            
                [
                'id_com'=>1297,
                'id_reg'=>47,
                'description'=>'Bielsko'
                ],
                
                
                            
                [
                'id_com'=>1298,
                'id_reg'=>47,
                'description'=>'Bydgoszcz'
                ],
                
                
                            
                [
                'id_com'=>1299,
                'id_reg'=>47,
                'description'=>'Chelm'
                ],
                
                
                            
                [
                'id_com'=>1300,
                'id_reg'=>47,
                'description'=>'Ciechanow'
                ],
                
                
                            
                [
                'id_com'=>1301,
                'id_reg'=>47,
                'description'=>'Czestochowa'
                ],
                
                
                            
                [
                'id_com'=>1302,
                'id_reg'=>47,
                'description'=>'Elblag'
                ],
                
                
                            
                [
                'id_com'=>1303,
                'id_reg'=>47,
                'description'=>'Gdansk'
                ],
                
                
                            
                [
                'id_com'=>1304,
                'id_reg'=>47,
                'description'=>'Gorzow'
                ],
                
                
                            
                [
                'id_com'=>1305,
                'id_reg'=>47,
                'description'=>'Jelenia Gora'
                ],
                
                
                            
                [
                'id_com'=>1306,
                'id_reg'=>47,
                'description'=>'Kalisz'
                ],
                
                
                            
                [
                'id_com'=>1307,
                'id_reg'=>47,
                'description'=>'Katowice'
                ],
                
                
                            
                [
                'id_com'=>1308,
                'id_reg'=>47,
                'description'=>'Kielce'
                ],
                
                
                            
                [
                'id_com'=>1309,
                'id_reg'=>47,
                'description'=>'Konin'
                ],
                
                
                            
                [
                'id_com'=>1310,
                'id_reg'=>47,
                'description'=>'Koszalin'
                ],
                
                
                            
                [
                'id_com'=>1311,
                'id_reg'=>47,
                'description'=>'Krakow'
                ],
                
                
                            
                [
                'id_com'=>1312,
                'id_reg'=>47,
                'description'=>'Krosno'
                ],
                
                
                            
                [
                'id_com'=>1313,
                'id_reg'=>47,
                'description'=>'Legnica'
                ],
                
                
                            
                [
                'id_com'=>1314,
                'id_reg'=>47,
                'description'=>'Leszno'
                ],
                
                
                            
                [
                'id_com'=>1315,
                'id_reg'=>47,
                'description'=>'Lodz'
                ],
                
                
                            
                [
                'id_com'=>1316,
                'id_reg'=>47,
                'description'=>'Lomza'
                ],
                
                
                            
                [
                'id_com'=>1317,
                'id_reg'=>47,
                'description'=>'Lublin'
                ],
                
                
                            
                [
                'id_com'=>1318,
                'id_reg'=>47,
                'description'=>'Nowy Sacz'
                ],
                
                
                            
                [
                'id_com'=>1319,
                'id_reg'=>47,
                'description'=>'Olsztyn'
                ],
                
                
                            
                [
                'id_com'=>1320,
                'id_reg'=>47,
                'description'=>'Opole'
                ],
                
                
                            
                [
                'id_com'=>1321,
                'id_reg'=>47,
                'description'=>'Ostroleka'
                ],
                
                
                            
                [
                'id_com'=>1322,
                'id_reg'=>47,
                'description'=>'Pila'
                ],
                
                
                            
                [
                'id_com'=>1323,
                'id_reg'=>47,
                'description'=>'Piotrkow'
                ],
                
                
                            
                [
                'id_com'=>1324,
                'id_reg'=>47,
                'description'=>'Plock'
                ],
                
                
                            
                [
                'id_com'=>1325,
                'id_reg'=>47,
                'description'=>'Poznan'
                ],
                
                
                            
                [
                'id_com'=>1326,
                'id_reg'=>47,
                'description'=>'Przemysl'
                ],
                
                
                            
                [
                'id_com'=>1327,
                'id_reg'=>47,
                'description'=>'Radom'
                ],
                
                
                            
                [
                'id_com'=>1328,
                'id_reg'=>47,
                'description'=>'Rzeszow'
                ],
                
                
                            
                [
                'id_com'=>1329,
                'id_reg'=>47,
                'description'=>'Siedlce'
                ],
                
                
                            
                [
                'id_com'=>1330,
                'id_reg'=>47,
                'description'=>'Sieradz'
                ],
                
                
                            
                [
                'id_com'=>1331,
                'id_reg'=>47,
                'description'=>'Skierniewice'
                ],
                
                
                            
                [
                'id_com'=>1332,
                'id_reg'=>47,
                'description'=>'Slupsk'
                ],
                
                
                            
                [
                'id_com'=>1333,
                'id_reg'=>47,
                'description'=>'Suwalki'
                ],
                
                
                            
                [
                'id_com'=>1335,
                'id_reg'=>47,
                'description'=>'Tarnobrzeg'
                ],
                
                
                            
                [
                'id_com'=>1336,
                'id_reg'=>47,
                'description'=>'Tarnow'
                ],
                
                
                            
                [
                'id_com'=>1337,
                'id_reg'=>47,
                'description'=>'Torun'
                ],
                
                
                            
                [
                'id_com'=>1338,
                'id_reg'=>47,
                'description'=>'Walbrzych'
                ],
                
                
                            
                [
                'id_com'=>1339,
                'id_reg'=>47,
                'description'=>'Warszawa'
                ],
                
                
                            
                [
                'id_com'=>1340,
                'id_reg'=>47,
                'description'=>'Wloclawek'
                ],
                
                
                            
                [
                'id_com'=>1341,
                'id_reg'=>47,
                'description'=>'Wroclaw'
                ],
                
                
                            
                [
                'id_com'=>1342,
                'id_reg'=>47,
                'description'=>'Zamosc'
                ],
                
                
                            
                [
                'id_com'=>1343,
                'id_reg'=>47,
                'description'=>'Zielona Gora'
                ],
                
                
                            
                [
                'id_com'=>1344,
                'id_reg'=>47,
                'description'=>'Dolnoslaskie'
                ],
                
                
                            
                [
                'id_com'=>1345,
                'id_reg'=>47,
                'description'=>'Kujawsko-Pomorskie'
                ],
                
                
                            
                [
                'id_com'=>1346,
                'id_reg'=>47,
                'description'=>'Lodzkie'
                ],
                
                
                            
                [
                'id_com'=>1347,
                'id_reg'=>47,
                'description'=>'Lubelskie'
                ],
                
                
                            
                [
                'id_com'=>1348,
                'id_reg'=>47,
                'description'=>'Lubuskie'
                ],
                
                
                            
                [
                'id_com'=>1349,
                'id_reg'=>47,
                'description'=>'Malopolskie'
                ],
                
                
                            
                [
                'id_com'=>1350,
                'id_reg'=>47,
                'description'=>'Mazowieckie'
                ],
                
                
                            
                [
                'id_com'=>1351,
                'id_reg'=>47,
                'description'=>'Opolskie'
                ],
                
                
                            
                [
                'id_com'=>1352,
                'id_reg'=>47,
                'description'=>'Podkarpackie'
                ],
                
                
                            
                [
                'id_com'=>1353,
                'id_reg'=>47,
                'description'=>'Podlaskie'
                ],
                
                
                            
                [
                'id_com'=>1354,
                'id_reg'=>47,
                'description'=>'Pomorskie'
                ],
                
                
                            
                [
                'id_com'=>1355,
                'id_reg'=>47,
                'description'=>'Slaskie'
                ],
                
                
                            
                [
                'id_com'=>1356,
                'id_reg'=>47,
                'description'=>'Swietokrzyskie'
                ],
                
                
                            
                [
                'id_com'=>1357,
                'id_reg'=>47,
                'description'=>'Warminsko-Mazurskie'
                ],
                
                
                            
                [
                'id_com'=>1358,
                'id_reg'=>47,
                'description'=>'Wielkopolskie'
                ],
                
                
                            
                [
                'id_com'=>1359,
                'id_reg'=>47,
                'description'=>'Zachodniopomorskie'
                ],
                
                
                            
                [
                'id_com'=>1361,
                'id_reg'=>72,
                'description'=>'Alba'
                ],
                
                
                            
                [
                'id_com'=>1362,
                'id_reg'=>72,
                'description'=>'Arad'
                ],
                
                
                            
                [
                'id_com'=>1363,
                'id_reg'=>72,
                'description'=>'Arges'
                ],
                
                
                            
                [
                'id_com'=>1364,
                'id_reg'=>72,
                'description'=>'Bacau'
                ],
                
                
                            
                [
                'id_com'=>1365,
                'id_reg'=>72,
                'description'=>'Bihor'
                ],
                
                
                            
                [
                'id_com'=>1366,
                'id_reg'=>72,
                'description'=>'Bistrita-Nasaud'
                ],
                
                
                            
                [
                'id_com'=>1367,
                'id_reg'=>72,
                'description'=>'Botosani'
                ],
                
                
                            
                [
                'id_com'=>1368,
                'id_reg'=>72,
                'description'=>'Braila'
                ],
                
                
                            
                [
                'id_com'=>1369,
                'id_reg'=>72,
                'description'=>'Brasov'
                ],
                
                
                            
                [
                'id_com'=>1370,
                'id_reg'=>72,
                'description'=>'Bucuresti'
                ],
                
                
                            
                [
                'id_com'=>1371,
                'id_reg'=>72,
                'description'=>'Buzau'
                ],
                
                
                            
                [
                'id_com'=>1372,
                'id_reg'=>72,
                'description'=>'Caras-Severin'
                ],
                
                
                            
                [
                'id_com'=>1373,
                'id_reg'=>72,
                'description'=>'Cluj'
                ],
                
                
                            
                [
                'id_com'=>1374,
                'id_reg'=>72,
                'description'=>'Constanta'
                ],
                
                
                            
                [
                'id_com'=>1375,
                'id_reg'=>72,
                'description'=>'Covasna'
                ],
                
                
                            
                [
                'id_com'=>1376,
                'id_reg'=>72,
                'description'=>'Dambovita'
                ],
                
                
                            
                [
                'id_com'=>1377,
                'id_reg'=>72,
                'description'=>'Dolj'
                ],
                
                
                            
                [
                'id_com'=>1378,
                'id_reg'=>72,
                'description'=>'Galati'
                ],
                
                
                            
                [
                'id_com'=>1379,
                'id_reg'=>72,
                'description'=>'Gorj'
                ],
                
                
                            
                [
                'id_com'=>1380,
                'id_reg'=>72,
                'description'=>'Harghita'
                ],
                
                
                            
                [
                'id_com'=>1381,
                'id_reg'=>72,
                'description'=>'Hunedoara'
                ],
                
                
                            
                [
                'id_com'=>1382,
                'id_reg'=>72,
                'description'=>'Ialomita'
                ],
                
                
                            
                [
                'id_com'=>1383,
                'id_reg'=>72,
                'description'=>'Iasi'
                ],
                
                
                            
                [
                'id_com'=>1384,
                'id_reg'=>72,
                'description'=>'Maramures'
                ],
                
                
                            
                [
                'id_com'=>1385,
                'id_reg'=>72,
                'description'=>'Mehedinti'
                ],
                
                
                            
                [
                'id_com'=>1386,
                'id_reg'=>72,
                'description'=>'Mures'
                ],
                
                
                            
                [
                'id_com'=>1387,
                'id_reg'=>72,
                'description'=>'Neamt'
                ],
                
                
                            
                [
                'id_com'=>1388,
                'id_reg'=>72,
                'description'=>'Olt'
                ],
                
                
                            
                [
                'id_com'=>1389,
                'id_reg'=>72,
                'description'=>'Prahova'
                ],
                
                
                            
                [
                'id_com'=>1390,
                'id_reg'=>72,
                'description'=>'Salaj'
                ],
                
                
                            
                [
                'id_com'=>1391,
                'id_reg'=>72,
                'description'=>'Satu Mare'
                ],
                
                
                            
                [
                'id_com'=>1392,
                'id_reg'=>72,
                'description'=>'Sibiu'
                ],
                
                
                            
                [
                'id_com'=>1393,
                'id_reg'=>72,
                'description'=>'Suceava'
                ],
                
                
                            
                [
                'id_com'=>1394,
                'id_reg'=>72,
                'description'=>'Teleorman'
                ],
                
                
                            
                [
                'id_com'=>1395,
                'id_reg'=>72,
                'description'=>'Timis'
                ],
                
                
                            
                [
                'id_com'=>1396,
                'id_reg'=>72,
                'description'=>'Tulcea'
                ],
                
                
                            
                [
                'id_com'=>1397,
                'id_reg'=>72,
                'description'=>'Vaslui'
                ],
                
                
                            
                [
                'id_com'=>1398,
                'id_reg'=>72,
                'description'=>'Valcea'
                ],
                
                
                            
                [
                'id_com'=>1399,
                'id_reg'=>72,
                'description'=>'Vrancea'
                ],
                
                
                            
                [
                'id_com'=>1400,
                'id_reg'=>72,
                'description'=>'Calarasi'
                ],
                
                
                            
                [
                'id_com'=>1401,
                'id_reg'=>72,
                'description'=>'Giurgiu'
                ],
                
                
                            
                [
                'id_com'=>1404,
                'id_reg'=>224,
                'description'=>'Acquaviva'
                ],
                
                
                            
                [
                'id_com'=>1405,
                'id_reg'=>224,
                'description'=>'Chiesanuova'
                ],
                
                
                            
                [
                'id_com'=>1406,
                'id_reg'=>224,
                'description'=>'Domagnano'
                ],
                
                
                            
                [
                'id_com'=>1407,
                'id_reg'=>224,
                'description'=>'Faetano'
                ],
                
                
                            
                [
                'id_com'=>1408,
                'id_reg'=>224,
                'description'=>'Fiorentino'
                ],
                
                
                            
                [
                'id_com'=>1409,
                'id_reg'=>224,
                'description'=>'Borgo Maggiore'
                ],
                
                
                            
                [
                'id_com'=>1410,
                'id_reg'=>224,
                'description'=>'San Marino'
                ],
                
                
                            
                [
                'id_com'=>1411,
                'id_reg'=>224,
                'description'=>'Monte Giardino'
                ],
                
                
                            
                [
                'id_com'=>1412,
                'id_reg'=>224,
                'description'=>'Serravalle'
                ],
                
                
                            
                [
                'id_com'=>1413,
                'id_reg'=>52,
                'description'=>'Banska Bystrica'
                ],
                
                
                            
                [
                'id_com'=>1414,
                'id_reg'=>52,
                'description'=>'Bratislava'
                ],
                
                
                            
                [
                'id_com'=>1415,
                'id_reg'=>52,
                'description'=>'Kosice'
                ],
                
                
                            
                [
                'id_com'=>1416,
                'id_reg'=>52,
                'description'=>'Nitra'
                ],
                
                
                            
                [
                'id_com'=>1417,
                'id_reg'=>52,
                'description'=>'Presov'
                ],
                
                
                            
                [
                'id_com'=>1418,
                'id_reg'=>52,
                'description'=>'Trencin'
                ],
                
                
                            
                [
                'id_com'=>1419,
                'id_reg'=>52,
                'description'=>'Trnava'
                ],
                
                
                            
                [
                'id_com'=>1420,
                'id_reg'=>52,
                'description'=>'Zilina'
                ],
                
                
                            
                [
                'id_com'=>1423,
                'id_reg'=>53,
                'description'=>'Beltinci'
                ],
                
                
                            
                [
                'id_com'=>1425,
                'id_reg'=>53,
                'description'=>'Bohinj'
                ],
                
                
                            
                [
                'id_com'=>1426,
                'id_reg'=>53,
                'description'=>'Borovnica'
                ],
                
                
                            
                [
                'id_com'=>1427,
                'id_reg'=>53,
                'description'=>'Bovec'
                ],
                
                
                            
                [
                'id_com'=>1428,
                'id_reg'=>53,
                'description'=>'Brda'
                ],
                
                
                            
                [
                'id_com'=>1429,
                'id_reg'=>53,
                'description'=>'Brezice'
                ],
                
                
                            
                [
                'id_com'=>1430,
                'id_reg'=>53,
                'description'=>'Brezovica'
                ],
                
                
                            
                [
                'id_com'=>1432,
                'id_reg'=>53,
                'description'=>'Cerklje na Gorenjskem'
                ],
                
                
                            
                [
                'id_com'=>1434,
                'id_reg'=>53,
                'description'=>'Cerkno'
                ],
                
                
                            
                [
                'id_com'=>1436,
                'id_reg'=>53,
                'description'=>'Crna na Koroskem'
                ],
                
                
                            
                [
                'id_com'=>1437,
                'id_reg'=>53,
                'description'=>'Crnomelj'
                ],
                
                
                            
                [
                'id_com'=>1438,
                'id_reg'=>53,
                'description'=>'Divaca'
                ],
                
                
                            
                [
                'id_com'=>1439,
                'id_reg'=>53,
                'description'=>'Dobrepolje'
                ],
                
                
                            
                [
                'id_com'=>1440,
                'id_reg'=>53,
                'description'=>'Dol pri Ljubljani'
                ],
                
                
                            
                [
                'id_com'=>1443,
                'id_reg'=>53,
                'description'=>'Duplek'
                ],
                
                
                            
                [
                'id_com'=>1447,
                'id_reg'=>53,
                'description'=>'Gornji Grad'
                ],
                
                
                            
                [
                'id_com'=>1450,
                'id_reg'=>53,
                'description'=>'Hrastnik'
                ],
                
                
                            
                [
                'id_com'=>1451,
                'id_reg'=>53,
                'description'=>'Hrpelje-Kozina'
                ],
                
                
                            
                [
                'id_com'=>1452,
                'id_reg'=>53,
                'description'=>'Idrija'
                ],
                
                
                            
                [
                'id_com'=>1453,
                'id_reg'=>53,
                'description'=>'Ig'
                ],
                
                
                            
                [
                'id_com'=>1454,
                'id_reg'=>53,
                'description'=>'Ilirska Bistrica'
                ],
                
                
                            
                [
                'id_com'=>1455,
                'id_reg'=>53,
                'description'=>'Ivancna Gorica'
                ],
                
                
                            
                [
                'id_com'=>1462,
                'id_reg'=>53,
                'description'=>'Komen'
                ],
                
                
                            
                [
                'id_com'=>1463,
                'id_reg'=>53,
                'description'=>'Koper-Capodistria'
                ],
                
                
                            
                [
                'id_com'=>1464,
                'id_reg'=>53,
                'description'=>'Kozje'
                ],
                
                
                            
                [
                'id_com'=>1465,
                'id_reg'=>53,
                'description'=>'Kranj'
                ],
                
                
                            
                [
                'id_com'=>1466,
                'id_reg'=>53,
                'description'=>'Kranjska Gora'
                ],
                
                
                            
                [
                'id_com'=>1467,
                'id_reg'=>53,
                'description'=>'Krsko'
                ],
                
                
                            
                [
                'id_com'=>1469,
                'id_reg'=>53,
                'description'=>'Lasko'
                ],
                
                
                            
                [
                'id_com'=>1470,
                'id_reg'=>53,
                'description'=>'Ljubljana'
                ],
                
                
                            
                [
                'id_com'=>1471,
                'id_reg'=>53,
                'description'=>'Ljubno'
                ],
                
                
                            
                [
                'id_com'=>1472,
                'id_reg'=>53,
                'description'=>'Logatec'
                ],
                
                
                            
                [
                'id_com'=>1475,
                'id_reg'=>53,
                'description'=>'Medvode'
                ],
                
                
                            
                [
                'id_com'=>1476,
                'id_reg'=>53,
                'description'=>'Menges'
                ],
                
                
                            
                [
                'id_com'=>1478,
                'id_reg'=>53,
                'description'=>'Mezica'
                ],
                
                
                            
                [
                'id_com'=>1480,
                'id_reg'=>53,
                'description'=>'Moravce'
                ],
                
                
                            
                [
                'id_com'=>1482,
                'id_reg'=>53,
                'description'=>'Mozirje'
                ],
                
                
                            
                [
                'id_com'=>1483,
                'id_reg'=>53,
                'description'=>'Murska Sobota'
                ],
                
                
                            
                [
                'id_com'=>1487,
                'id_reg'=>53,
                'description'=>'Nova Gorica'
                ],
                
                
                            
                [
                'id_com'=>1489,
                'id_reg'=>53,
                'description'=>'Ormoz'
                ],
                
                
                            
                [
                'id_com'=>1491,
                'id_reg'=>53,
                'description'=>'Pesnica'
                ],
                
                
                            
                [
                'id_com'=>1494,
                'id_reg'=>53,
                'description'=>'Postojna'
                ],
                
                
                            
                [
                'id_com'=>1497,
                'id_reg'=>53,
                'description'=>'Radece'
                ],
                
                
                            
                [
                'id_com'=>1498,
                'id_reg'=>53,
                'description'=>'Radenci'
                ],
                
                
                            
                [
                'id_com'=>1500,
                'id_reg'=>53,
                'description'=>'Radovljica'
                ],
                
                
                            
                [
                'id_com'=>1502,
                'id_reg'=>53,
                'description'=>'Rogaska Slatina'
                ],
                
                
                            
                [
                'id_com'=>1505,
                'id_reg'=>53,
                'description'=>'Sencur'
                ],
                
                
                            
                [
                'id_com'=>1506,
                'id_reg'=>53,
                'description'=>'Sentilj'
                ],
                
                
                            
                [
                'id_com'=>1508,
                'id_reg'=>53,
                'description'=>'Sevnica'
                ],
                
                
                            
                [
                'id_com'=>1509,
                'id_reg'=>53,
                'description'=>'Sezana'
                ],
                
                
                            
                [
                'id_com'=>1511,
                'id_reg'=>53,
                'description'=>'Skofja Loka'
                ],
                
                
                            
                [
                'id_com'=>1513,
                'id_reg'=>53,
                'description'=>'Slovenj Gradec'
                ],
                
                
                            
                [
                'id_com'=>1514,
                'id_reg'=>53,
                'description'=>'Slovenske Konjice'
                ],
                
                
                            
                [
                'id_com'=>1515,
                'id_reg'=>53,
                'description'=>'Smarje pri Jelsah'
                ],
                
                
                            
                [
                'id_com'=>1521,
                'id_reg'=>53,
                'description'=>'Tolmin'
                ],
                
                
                            
                [
                'id_com'=>1522,
                'id_reg'=>53,
                'description'=>'Trbovlje'
                ],
                
                
                            
                [
                'id_com'=>1524,
                'id_reg'=>53,
                'description'=>'Trzic'
                ],
                
                
                            
                [
                'id_com'=>1526,
                'id_reg'=>53,
                'description'=>'Velenje'
                ],
                
                
                            
                [
                'id_com'=>1528,
                'id_reg'=>53,
                'description'=>'Vipava'
                ],
                
                
                            
                [
                'id_com'=>1531,
                'id_reg'=>53,
                'description'=>'Vrhnika'
                ],
                
                
                            
                [
                'id_com'=>1532,
                'id_reg'=>53,
                'description'=>'Vuzenica'
                ],
                
                
                            
                [
                'id_com'=>1533,
                'id_reg'=>53,
                'description'=>'Zagorje ob Savi'
                ],
                
                
                            
                [
                'id_com'=>1535,
                'id_reg'=>53,
                'description'=>'Zelezniki'
                ],
                
                
                            
                [
                'id_com'=>1536,
                'id_reg'=>53,
                'description'=>'Ziri'
                ],
                
                
                            
                [
                'id_com'=>1537,
                'id_reg'=>53,
                'description'=>'Zrece'
                ],
                
                
                            
                [
                'id_com'=>1539,
                'id_reg'=>53,
                'description'=>'Domzale'
                ],
                
                
                            
                [
                'id_com'=>1540,
                'id_reg'=>53,
                'description'=>'Jesenice'
                ],
                
                
                            
                [
                'id_com'=>1541,
                'id_reg'=>53,
                'description'=>'Kamnik'
                ],
                
                
                            
                [
                'id_com'=>1542,
                'id_reg'=>53,
                'description'=>'Kocevje'
                ],
                
                
                            
                [
                'id_com'=>1544,
                'id_reg'=>53,
                'description'=>'Lenart'
                ],
                
                
                            
                [
                'id_com'=>1545,
                'id_reg'=>53,
                'description'=>'Litija'
                ],
                
                
                            
                [
                'id_com'=>1546,
                'id_reg'=>53,
                'description'=>'Ljutomer'
                ],
                
                
                            
                [
                'id_com'=>1550,
                'id_reg'=>53,
                'description'=>'Maribor'
                ],
                
                
                            
                [
                'id_com'=>1552,
                'id_reg'=>53,
                'description'=>'Novo Mesto'
                ],
                
                
                            
                [
                'id_com'=>1553,
                'id_reg'=>53,
                'description'=>'Piran'
                ],
                
                
                            
                [
                'id_com'=>1554,
                'id_reg'=>53,
                'description'=>'Preddvor'
                ],
                
                
                            
                [
                'id_com'=>1555,
                'id_reg'=>53,
                'description'=>'Ptuj'
                ],
                
                
                            
                [
                'id_com'=>1556,
                'id_reg'=>53,
                'description'=>'Ribnica'
                ],
                
                
                            
                [
                'id_com'=>1558,
                'id_reg'=>53,
                'description'=>'Sentjur pri Celju'
                ],
                
                
                            
                [
                'id_com'=>1559,
                'id_reg'=>53,
                'description'=>'Slovenska Bistrica'
                ],
                
                
                            
                [
                'id_com'=>1560,
                'id_reg'=>53,
                'description'=>'Videm'
                ],
                
                
                            
                [
                'id_com'=>1562,
                'id_reg'=>53,
                'description'=>'Zalec'
                ],
                
                
                            
                [
                'id_com'=>1564,
                'id_reg'=>109,
                'description'=>'Seychelles'
                ],
                
                
                            
                [
                'id_com'=>1565,
                'id_reg'=>108,
                'description'=>'Mauritania'
                ],
                
                
                            
                [
                'id_com'=>1566,
                'id_reg'=>135,
                'description'=>'Senegal'
                ],
                
                
                            
                [
                'id_com'=>1567,
                'id_reg'=>154,
                'description'=>'Road Town'
                ],
                
                
                            
                [
                'id_com'=>1568,
                'id_reg'=>165,
                'description'=>'Congo'
                ],
                
                
                            
                [
                'id_com'=>1569,
                'id_reg'=>166,
                'description'=>'Avarua'
                ],
                
                
                            
                [
                'id_com'=>1570,
                'id_reg'=>172,
                'description'=>'Malabo'
                ],
                
                
                            
                [
                'id_com'=>1571,
                'id_reg'=>175,
                'description'=>'Torshavn'
                ],
                
                
                            
                [
                'id_com'=>1572,
                'id_reg'=>178,
                'description'=>'Papeete'
                ],
                
                
                            
                [
                'id_com'=>1573,
                'id_reg'=>184,
                'description'=>"St George's"
                ],
                
                
                            
                [
                'id_com'=>1574,
                'id_reg'=>186,
                'description'=>'St Peter Port'
                ],
                
                
                            
                [
                'id_com'=>1575,
                'id_reg'=>188,
                'description'=>'Bissau'
                ],
                
                
                            
                [
                'id_com'=>1576,
                'id_reg'=>193,
                'description'=>'Saint Helier'
                ],
                
                
                            
                [
                'id_com'=>1577,
                'id_reg'=>201,
                'description'=>'Fort-de-France'
                ],
                
                
                            
                [
                'id_com'=>1578,
                'id_reg'=>207,
                'description'=>'Willemstad'
                ],
                
                
                            
                [
                'id_com'=>1579,
                'id_reg'=>208,
                'description'=>'Noumea'
                ],
                
                
                            
                [
                'id_com'=>1580,
                'id_reg'=>212,
                'description'=>'Kingston'
                ],
                
                
                            
                [
                'id_com'=>1581,
                'id_reg'=>215,
                'description'=>'Adamstown'
                ],
                
                
                            
                [
                'id_com'=>1582,
                'id_reg'=>216,
                'description'=>'Doha'
                ],
                
                
                            
                [
                'id_com'=>1583,
                'id_reg'=>218,
                'description'=>'Jamestown'
                ],
                
                
                            
                [
                'id_com'=>1584,
                'id_reg'=>219,
                'description'=>'Basseterre'
                ],
                
                
                            
                [
                'id_com'=>1585,
                'id_reg'=>220,
                'description'=>'Castries'
                ],
                
                
                            
                [
                'id_com'=>1586,
                'id_reg'=>221,
                'description'=>'Saint Pierre'
                ],
                
                
                            
                [
                'id_com'=>1587,
                'id_reg'=>222,
                'description'=>'Kingstown'
                ],
                
                
                            
                [
                'id_com'=>1588,
                'id_reg'=>225,
                'description'=>'San Tome'
                ],
                
                
                            
                [
                'id_com'=>1589,
                'id_reg'=>226,
                'description'=>'Belgrade'
                ],
                
                
                            
                [
                'id_com'=>1590,
                'id_reg'=>227,
                'description'=>'Freetown'
                ],
                
                
                            
                [
                'id_com'=>1591,
                'id_reg'=>229,
                'description'=>'Mogadishu'
                ],
                
                
                            
                [
                'id_com'=>1592,
                'id_reg'=>235,
                'description'=>'Fakaofo'
                ],
                
                
                            
                [
                'id_com'=>1593,
                'id_reg'=>237,
                'description'=>'Port of Spain'
                ],
                
                
                            
                [
                'id_com'=>1594,
                'id_reg'=>241,
                'description'=>'Mata-Utu'
                ],
                
                
                            
                [
                'id_com'=>1596,
                'id_reg'=>89,
                'description'=>'Amazonas'
                ],
                
                
                            
                [
                'id_com'=>1597,
                'id_reg'=>89,
                'description'=>'Ancash'
                ],
                
                
                            
                [
                'id_com'=>1598,
                'id_reg'=>89,
                'description'=>'Apurímac'
                ],
                
                
                            
                [
                'id_com'=>1599,
                'id_reg'=>89,
                'description'=>'Arequipa'
                ],
                
                
                            
                [
                'id_com'=>1600,
                'id_reg'=>89,
                'description'=>'Ayacucho'
                ],
                
                
                            
                [
                'id_com'=>1601,
                'id_reg'=>89,
                'description'=>'Cajamarca'
                ],
                
                
                            
                [
                'id_com'=>1602,
                'id_reg'=>89,
                'description'=>'Callao'
                ],
                
                
                            
                [
                'id_com'=>1603,
                'id_reg'=>89,
                'description'=>'Cusco'
                ],
                
                
                            
                [
                'id_com'=>1604,
                'id_reg'=>89,
                'description'=>'Huancavelica'
                ],
                
                
                            
                [
                'id_com'=>1605,
                'id_reg'=>89,
                'description'=>'Huánuco'
                ],
                
                
                            
                [
                'id_com'=>1606,
                'id_reg'=>89,
                'description'=>'Ica'
                ],
                
                
                            
                [
                'id_com'=>1607,
                'id_reg'=>89,
                'description'=>'Junín'
                ],
                
                
                            
                [
                'id_com'=>1608,
                'id_reg'=>89,
                'description'=>'La Libertad'
                ],
                
                
                            
                [
                'id_com'=>1609,
                'id_reg'=>89,
                'description'=>'Lambayeque'
                ],
                
                
                            
                [
                'id_com'=>1610,
                'id_reg'=>89,
                'description'=>'Lima'
                ],
                
                
                            
                [
                'id_com'=>1611,
                'id_reg'=>89,
                'description'=>'Loreto'
                ],
                
                
                            
                [
                'id_com'=>1612,
                'id_reg'=>89,
                'description'=>'Madre de Dios'
                ],
                
                
                            
                [
                'id_com'=>1613,
                'id_reg'=>89,
                'description'=>'Moquegua'
                ],
                
                
                            
                [
                'id_com'=>1614,
                'id_reg'=>89,
                'description'=>'Pasco'
                ],
                
                
                            
                [
                'id_com'=>1615,
                'id_reg'=>89,
                'description'=>'Piura'
                ],
                
                
                            
                [
                'id_com'=>1616,
                'id_reg'=>89,
                'description'=>'Puno'
                ],
                
                
                            
                [
                'id_com'=>1617,
                'id_reg'=>89,
                'description'=>'San Martín'
                ],
                
                
                            
                [
                'id_com'=>1618,
                'id_reg'=>89,
                'description'=>'Tacna'
                ],
                
                
                            
                [
                'id_com'=>1619,
                'id_reg'=>89,
                'description'=>'Tumbes'
                ],
                
                
                            
                [
                'id_com'=>1620,
                'id_reg'=>89,
                'description'=>'Ucayali'
                ],
                
                
                            
                [
                'id_com'=>1622,
                'id_reg'=>110,
                'description'=>'Alto Paraná'
                ],
                
                
                            
                [
                'id_com'=>1623,
                'id_reg'=>110,
                'description'=>'Amambay'
                ],
                
                
                            
                [
                'id_com'=>1624,
                'id_reg'=>110,
                'description'=>'Boquerón'
                ],
                
                
                            
                [
                'id_com'=>1625,
                'id_reg'=>110,
                'description'=>'Caaguazú'
                ],
                
                
                            
                [
                'id_com'=>1626,
                'id_reg'=>110,
                'description'=>'Caazapá'
                ],
                
                
                            
                [
                'id_com'=>1627,
                'id_reg'=>110,
                'description'=>'Central'
                ],
                
                
                            
                [
                'id_com'=>1628,
                'id_reg'=>110,
                'description'=>'Concepción'
                ],
                
                
                            
                [
                'id_com'=>1629,
                'id_reg'=>110,
                'description'=>'Cordillera'
                ],
                
                
                            
                [
                'id_com'=>1630,
                'id_reg'=>110,
                'description'=>'Guairá'
                ],
                
                
                            
                [
                'id_com'=>1631,
                'id_reg'=>110,
                'description'=>'Itapúa'
                ],
                
                
                            
                [
                'id_com'=>1632,
                'id_reg'=>110,
                'description'=>'Misiones'
                ],
                
                
                            
                [
                'id_com'=>1633,
                'id_reg'=>110,
                'description'=>'Neembucú'
                ],
                
                
                            
                [
                'id_com'=>1634,
                'id_reg'=>110,
                'description'=>'Paraguarí'
                ],
                
                
                            
                [
                'id_com'=>1635,
                'id_reg'=>110,
                'description'=>'Presidente Hayes'
                ],
                
                
                            
                [
                'id_com'=>1636,
                'id_reg'=>110,
                'description'=>'San Pedro'
                ],
                
                
                            
                [
                'id_com'=>1637,
                'id_reg'=>110,
                'description'=>'Alto Paraguay'
                ],
                
                
                            
                [
                'id_com'=>1638,
                'id_reg'=>110,
                'description'=>'Canindeyú'
                ],
                
                
                            
                [
                'id_com'=>1639,
                'id_reg'=>110,
                'description'=>'Chaco'
                ],
                
                
                            
                [
                'id_com'=>1642,
                'id_reg'=>111,
                'description'=>'Artigas'
                ],
                
                
                            
                [
                'id_com'=>1643,
                'id_reg'=>111,
                'description'=>'Canelones'
                ],
                
                
                            
                [
                'id_com'=>1644,
                'id_reg'=>111,
                'description'=>'Cerro Largo'
                ],
                
                
                            
                [
                'id_com'=>1645,
                'id_reg'=>111,
                'description'=>'Colonia'
                ],
                
                
                            
                [
                'id_com'=>1646,
                'id_reg'=>111,
                'description'=>'Durazno'
                ],
                
                
                            
                [
                'id_com'=>1647,
                'id_reg'=>111,
                'description'=>'Flores'
                ],
                
                
                            
                [
                'id_com'=>1648,
                'id_reg'=>111,
                'description'=>'Florida'
                ],
                
                
                            
                [
                'id_com'=>1649,
                'id_reg'=>111,
                'description'=>'Lavalleja'
                ],
                
                
                            
                [
                'id_com'=>1650,
                'id_reg'=>111,
                'description'=>'Maldonado'
                ],
                
                
                            
                [
                'id_com'=>1651,
                'id_reg'=>111,
                'description'=>'Montevideo'
                ],
                
                
                            
                [
                'id_com'=>1652,
                'id_reg'=>111,
                'description'=>'Paysandú'
                ],
                
                
                            
                [
                'id_com'=>1653,
                'id_reg'=>111,
                'description'=>'Río Negro'
                ],
                
                
                            
                [
                'id_com'=>1654,
                'id_reg'=>111,
                'description'=>'Rivera'
                ],
                
                
                            
                [
                'id_com'=>1655,
                'id_reg'=>111,
                'description'=>'Rocha'
                ],
                
                
                            
                [
                'id_com'=>1656,
                'id_reg'=>111,
                'description'=>'Salto'
                ],
                
                
                            
                [
                'id_com'=>1657,
                'id_reg'=>111,
                'description'=>'San José'
                ],
                
                
                            
                [
                'id_com'=>1658,
                'id_reg'=>111,
                'description'=>'Soriano'
                ],
                
                
                            
                [
                'id_com'=>1659,
                'id_reg'=>111,
                'description'=>'Tacuarembó'
                ],
                
                
                            
                [
                'id_com'=>1660,
                'id_reg'=>111,
                'description'=>'Treinta y Tres'
                ],
                
                
                            
                [
                'id_com'=>1662,
                'id_reg'=>81,
                'description'=>'Región de Tarapacá'
                ],
                
                
                            
                [
                'id_com'=>1663,
                'id_reg'=>81,
                'description'=>'Región de Antofagasta'
                ],
                
                
                            
                [
                'id_com'=>1664,
                'id_reg'=>81,
                'description'=>'Región de Atacama'
                ],
                
                
                            
                [
                'id_com'=>1665,
                'id_reg'=>81,
                'description'=>'Región de Coquimbo'
                ],
                
                
                            
                [
                'id_com'=>1666,
                'id_reg'=>81,
                'description'=>'Región de Valparaíso'
                ],
                
                
                            
                [
                'id_com'=>1667,
                'id_reg'=>81,
                'description'=>"Región del Libertador General Bernardo O'Higgins"
                ],
                
                
                            
                [
                'id_com'=>1668,
                'id_reg'=>81,
                'description'=>'Región del Maule'
                ],
                
                
                            
                [
                'id_com'=>1669,
                'id_reg'=>81,
                'description'=>'Región del Bío Bío'
                ],
                
                
                            
                [
                'id_com'=>1670,
                'id_reg'=>81,
                'description'=>'Región de La Araucanía'
                ],
                
                
                            
                [
                'id_com'=>1671,
                'id_reg'=>81,
                'description'=>'Región de Los Lagos'
                ],
                
                
                            
                [
                'id_com'=>1672,
                'id_reg'=>81,
                'description'=>'Región Aisén del General Carlos Ibáñez del Campo'
                ],
                
                
                            
                [
                'id_com'=>1673,
                'id_reg'=>81,
                'description'=>'Región de Magallanes y de la Antártica Chilena'
                ],
                
                
                            
                [
                'id_com'=>1674,
                'id_reg'=>81,
                'description'=>'Región Metropolitana de Santiago'
                ],
                
                
                            
                [
                'id_com'=>1676,
                'id_reg'=>185,
                'description'=>'Alta Verapaz'
                ],
                
                
                            
                [
                'id_com'=>1677,
                'id_reg'=>185,
                'description'=>'Baja Verapaz'
                ],
                
                
                            
                [
                'id_com'=>1678,
                'id_reg'=>185,
                'description'=>'Chimaltenango'
                ],
                
                
                            
                [
                'id_com'=>1679,
                'id_reg'=>185,
                'description'=>'Chiquimula'
                ],
                
                
                            
                [
                'id_com'=>1680,
                'id_reg'=>185,
                'description'=>'El Progreso'
                ],
                
                
                            
                [
                'id_com'=>1681,
                'id_reg'=>185,
                'description'=>'Escuintla'
                ],
                
                
                            
                [
                'id_com'=>1682,
                'id_reg'=>185,
                'description'=>'Guatemala'
                ],
                
                
                            
                [
                'id_com'=>1683,
                'id_reg'=>185,
                'description'=>'Huehuetenango'
                ],
                
                
                            
                [
                'id_com'=>1684,
                'id_reg'=>185,
                'description'=>'Izabal'
                ],
                
                
                            
                [
                'id_com'=>1685,
                'id_reg'=>185,
                'description'=>'Jalapa'
                ],
                
                
                            
                [
                'id_com'=>1686,
                'id_reg'=>185,
                'description'=>'Jutiapa'
                ],
                
                
                            
                [
                'id_com'=>1687,
                'id_reg'=>185,
                'description'=>'Petén'
                ],
                
                
                            
                [
                'id_com'=>1688,
                'id_reg'=>185,
                'description'=>'Quetzaltenango'
                ],
                
                
                            
                [
                'id_com'=>1689,
                'id_reg'=>185,
                'description'=>'Quiché'
                ],
                
                
                            
                [
                'id_com'=>1690,
                'id_reg'=>185,
                'description'=>'Retalhuleu'
                ],
                
                
                            
                [
                'id_com'=>1691,
                'id_reg'=>185,
                'description'=>'Sacatepéquez'
                ],
                
                
                            
                [
                'id_com'=>1692,
                'id_reg'=>185,
                'description'=>'San Marcos'
                ],
                
                
                            
                [
                'id_com'=>1693,
                'id_reg'=>185,
                'description'=>'Santa Rosa'
                ],
                
                
                            
                [
                'id_com'=>1694,
                'id_reg'=>185,
                'description'=>'Sololá'
                ],
                
                
                            
                [
                'id_com'=>1695,
                'id_reg'=>185,
                'description'=>'Suchitepequez'
                ],
                
                
                            
                [
                'id_com'=>1696,
                'id_reg'=>185,
                'description'=>'Totonicapán'
                ],
                
                
                            
                [
                'id_com'=>1697,
                'id_reg'=>185,
                'description'=>'Zacapa'
                ],
                
                
                            
                [
                'id_com'=>1699,
                'id_reg'=>82,
                'description'=>'Amazonas'
                ],
                
                
                            
                [
                'id_com'=>1700,
                'id_reg'=>82,
                'description'=>'Antioquia'
                ],
                
                
                            
                [
                'id_com'=>1701,
                'id_reg'=>82,
                'description'=>'Arauca'
                ],
                
                
                            
                [
                'id_com'=>1702,
                'id_reg'=>82,
                'description'=>'Atlántico'
                ],
                
                
                            
                [
                'id_com'=>1703,
                'id_reg'=>82,
                'description'=>'Caquetá'
                ],
                
                
                            
                [
                'id_com'=>1704,
                'id_reg'=>82,
                'description'=>'Cauca'
                ],
                
                
                            
                [
                'id_com'=>1705,
                'id_reg'=>82,
                'description'=>'César'
                ],
                
                
                            
                [
                'id_com'=>1706,
                'id_reg'=>82,
                'description'=>'Chocó'
                ],
                
                
                            
                [
                'id_com'=>1707,
                'id_reg'=>82,
                'description'=>'Córdoba'
                ],
                
                
                            
                [
                'id_com'=>1708,
                'id_reg'=>82,
                'description'=>'Guaviare'
                ],
                
                
                            
                [
                'id_com'=>1709,
                'id_reg'=>82,
                'description'=>'Guainía'
                ],
                
                
                            
                [
                'id_com'=>1710,
                'id_reg'=>82,
                'description'=>'Huila'
                ],
                
                
                            
                [
                'id_com'=>1711,
                'id_reg'=>82,
                'description'=>'La Guajira'
                ],
                
                
                            
                [
                'id_com'=>1712,
                'id_reg'=>82,
                'description'=>'Meta'
                ],
                
                
                            
                [
                'id_com'=>1713,
                'id_reg'=>82,
                'description'=>'Narino'
                ],
                
                
                            
                [
                'id_com'=>1714,
                'id_reg'=>82,
                'description'=>'Norte de Santander'
                ],
                
                
                            
                [
                'id_com'=>1715,
                'id_reg'=>82,
                'description'=>'Putumayo'
                ],
                
                
                            
                [
                'id_com'=>1716,
                'id_reg'=>82,
                'description'=>'Quindío'
                ],
                
                
                            
                [
                'id_com'=>1717,
                'id_reg'=>82,
                'description'=>'Risaralda'
                ],
                
                
                            
                [
                'id_com'=>1718,
                'id_reg'=>82,
                'description'=>'San Andrés y Providencia'
                ],
                
                
                            
                [
                'id_com'=>1719,
                'id_reg'=>82,
                'description'=>'Santander'
                ],
                
                
                            
                [
                'id_com'=>1720,
                'id_reg'=>82,
                'description'=>'Sucre'
                ],
                
                
                            
                [
                'id_com'=>1721,
                'id_reg'=>82,
                'description'=>'Tolima'
                ],
                
                
                            
                [
                'id_com'=>1722,
                'id_reg'=>82,
                'description'=>'Valle del Cauca'
                ],
                
                
                            
                [
                'id_com'=>1723,
                'id_reg'=>82,
                'description'=>'Vaupés'
                ],
                
                
                            
                [
                'id_com'=>1724,
                'id_reg'=>82,
                'description'=>'Vichada'
                ],
                
                
                            
                [
                'id_com'=>1725,
                'id_reg'=>82,
                'description'=>'Casanare'
                ],
                
                
                            
                [
                'id_com'=>1726,
                'id_reg'=>82,
                'description'=>'Cundinamarca'
                ],
                
                
                            
                [
                'id_com'=>1727,
                'id_reg'=>82,
                'description'=>'Distrito Especial'
                ],
                
                
                            
                [
                'id_com'=>1730,
                'id_reg'=>82,
                'description'=>'Caldas'
                ],
                
                
                            
                [
                'id_com'=>1731,
                'id_reg'=>82,
                'description'=>'Magdalena'
                ],
                
                
                            
                [
                'id_com'=>1733,
                'id_reg'=>42,
                'description'=>'Aguascalientes'
                ],
                
                
                            
                [
                'id_com'=>1734,
                'id_reg'=>42,
                'description'=>'Baja California'
                ],
                
                
                            
                [
                'id_com'=>1735,
                'id_reg'=>42,
                'description'=>'Baja California Sur'
                ],
                
                
                            
                [
                'id_com'=>1736,
                'id_reg'=>42,
                'description'=>'Campeche'
                ],
                
                
                            
                [
                'id_com'=>1737,
                'id_reg'=>42,
                'description'=>'Chiapas'
                ],
                
                
                            
                [
                'id_com'=>1738,
                'id_reg'=>42,
                'description'=>'Chihuahua'
                ],
                
                
                            
                [
                'id_com'=>1739,
                'id_reg'=>42,
                'description'=>'Coahuila de Zaragoza'
                ],
                
                
                            
                [
                'id_com'=>1740,
                'id_reg'=>42,
                'description'=>'Colima'
                ],
                
                
                            
                [
                'id_com'=>1741,
                'id_reg'=>42,
                'description'=>'Distrito Federal'
                ],
                
                
                            
                [
                'id_com'=>1742,
                'id_reg'=>42,
                'description'=>'Durango'
                ],
                
                
                            
                [
                'id_com'=>1743,
                'id_reg'=>42,
                'description'=>'Guanajuato'
                ],
                
                
                            
                [
                'id_com'=>1744,
                'id_reg'=>42,
                'description'=>'Guerrero'
                ],
                
                
                            
                [
                'id_com'=>1745,
                'id_reg'=>42,
                'description'=>'Hidalgo'
                ],
                
                
                            
                [
                'id_com'=>1746,
                'id_reg'=>42,
                'description'=>'Jalisco'
                ],
                
                
                            
                [
                'id_com'=>1747,
                'id_reg'=>42,
                'description'=>'México'
                ],
                
                
                            
                [
                'id_com'=>1748,
                'id_reg'=>42,
                'description'=>'Michoacán de Ocampo'
                ],
                
                
                            
                [
                'id_com'=>1749,
                'id_reg'=>42,
                'description'=>'Morelos'
                ],
                
                
                            
                [
                'id_com'=>1750,
                'id_reg'=>42,
                'description'=>'Nayarit'
                ],
                
                
                            
                [
                'id_com'=>1751,
                'id_reg'=>42,
                'description'=>'Nuevo León'
                ],
                
                
                            
                [
                'id_com'=>1752,
                'id_reg'=>42,
                'description'=>'Oaxaca'
                ],
                
                
                            
                [
                'id_com'=>1753,
                'id_reg'=>42,
                'description'=>'Puebla'
                ],
                
                
                            
                [
                'id_com'=>1754,
                'id_reg'=>42,
                'description'=>'Querétaro de Arteaga'
                ],
                
                
                            
                [
                'id_com'=>1755,
                'id_reg'=>42,
                'description'=>'Quintana Roo'
                ],
                
                
                            
                [
                'id_com'=>1756,
                'id_reg'=>42,
                'description'=>'San Luis Potosí'
                ],
                
                
                            
                [
                'id_com'=>1757,
                'id_reg'=>42,
                'description'=>'Sinaloa'
                ],
                
                
                            
                [
                'id_com'=>1758,
                'id_reg'=>42,
                'description'=>'Sonora'
                ],
                
                
                            
                [
                'id_com'=>1759,
                'id_reg'=>42,
                'description'=>'Tabasco'
                ],
                
                
                            
                [
                'id_com'=>1760,
                'id_reg'=>42,
                'description'=>'Tamaulipas'
                ],
                
                
                            
                [
                'id_com'=>1761,
                'id_reg'=>42,
                'description'=>'Tlaxcala'
                ],
                
                
                            
                [
                'id_com'=>1762,
                'id_reg'=>42,
                'description'=>'Veracruz-Llave'
                ],
                
                
                            
                [
                'id_com'=>1763,
                'id_reg'=>42,
                'description'=>'Yucatán'
                ],
                
                
                            
                [
                'id_com'=>1764,
                'id_reg'=>42,
                'description'=>'Zacatecas'
                ],
                
                
                            
                [
                'id_com'=>1766,
                'id_reg'=>124,
                'description'=>'Bocas del Toro'
                ],
                
                
                            
                [
                'id_com'=>1767,
                'id_reg'=>124,
                'description'=>'Chiriquí'
                ],
                
                
                            
                [
                'id_com'=>1768,
                'id_reg'=>124,
                'description'=>'Coclé'
                ],
                
                
                            
                [
                'id_com'=>1769,
                'id_reg'=>124,
                'description'=>'Colón'
                ],
                
                
                            
                [
                'id_com'=>1770,
                'id_reg'=>124,
                'description'=>'Darién'
                ],
                
                
                            
                [
                'id_com'=>1771,
                'id_reg'=>124,
                'description'=>'Herrera'
                ],
                
                
                            
                [
                'id_com'=>1772,
                'id_reg'=>124,
                'description'=>'Los Santos'
                ],
                
                
                            
                [
                'id_com'=>1773,
                'id_reg'=>124,
                'description'=>'Panamá'
                ],
                
                
                            
                [
                'id_com'=>1774,
                'id_reg'=>124,
                'description'=>'San Blas'
                ],
                
                
                            
                [
                'id_com'=>1775,
                'id_reg'=>124,
                'description'=>'Veraguas'
                ],
                
                
                            
                [
                'id_com'=>1777,
                'id_reg'=>123,
                'description'=>'Chuquisaca'
                ],
                
                
                            
                [
                'id_com'=>1778,
                'id_reg'=>123,
                'description'=>'Cochabamba'
                ],
                
                
                            
                [
                'id_com'=>1779,
                'id_reg'=>123,
                'description'=>'El Beni'
                ],
                
                
                            
                [
                'id_com'=>1780,
                'id_reg'=>123,
                'description'=>'La Paz'
                ],
                
                
                            
                [
                'id_com'=>1781,
                'id_reg'=>123,
                'description'=>'Oruro'
                ],
                
                
                            
                [
                'id_com'=>1782,
                'id_reg'=>123,
                'description'=>'Pando'
                ],
                
                
                            
                [
                'id_com'=>1783,
                'id_reg'=>123,
                'description'=>'Potosí'
                ],
                
                
                            
                [
                'id_com'=>1784,
                'id_reg'=>123,
                'description'=>'Santa Cruz'
                ],
                
                
                            
                [
                'id_com'=>1785,
                'id_reg'=>123,
                'description'=>'Tarija'
                ],
                
                
                            
                [
                'id_com'=>1787,
                'id_reg'=>36,
                'description'=>'Alajuela'
                ],
                
                
                            
                [
                'id_com'=>1788,
                'id_reg'=>36,
                'description'=>'Cartago'
                ],
                
                
                            
                [
                'id_com'=>1789,
                'id_reg'=>36,
                'description'=>'Guanacaste'
                ],
                
                
                            
                [
                'id_com'=>1790,
                'id_reg'=>36,
                'description'=>'Heredia'
                ],
                
                
                            
                [
                'id_com'=>1791,
                'id_reg'=>36,
                'description'=>'Limón'
                ],
                
                
                            
                [
                'id_com'=>1792,
                'id_reg'=>36,
                'description'=>'Puntarenas'
                ],
                
                
                            
                [
                'id_com'=>1793,
                'id_reg'=>36,
                'description'=>'San José'
                ],
                
                
                            
                [
                'id_com'=>1795,
                'id_reg'=>103,
                'description'=>'Galápagos'
                ],
                
                
                            
                [
                'id_com'=>1796,
                'id_reg'=>103,
                'description'=>'Azuay'
                ],
                
                
                            
                [
                'id_com'=>1797,
                'id_reg'=>103,
                'description'=>'Bolívar'
                ],
                
                
                            
                [
                'id_com'=>1798,
                'id_reg'=>103,
                'description'=>'Canar'
                ],
                
                
                            
                [
                'id_com'=>1799,
                'id_reg'=>103,
                'description'=>'Carchi'
                ],
                
                
                            
                [
                'id_com'=>1800,
                'id_reg'=>103,
                'description'=>'Chimborazo'
                ],
                
                
                            
                [
                'id_com'=>1801,
                'id_reg'=>103,
                'description'=>'Cotopaxi'
                ],
                
                
                            
                [
                'id_com'=>1802,
                'id_reg'=>103,
                'description'=>'El Oro'
                ],
                
                
                            
                [
                'id_com'=>1803,
                'id_reg'=>103,
                'description'=>'Esmeraldas'
                ],
                
                
                            
                [
                'id_com'=>1804,
                'id_reg'=>103,
                'description'=>'Guayas'
                ],
                
                
                            
                [
                'id_com'=>1805,
                'id_reg'=>103,
                'description'=>'Imbabura'
                ],
                
                
                            
                [
                'id_com'=>1806,
                'id_reg'=>103,
                'description'=>'Loja'
                ],
                
                
                            
                [
                'id_com'=>1807,
                'id_reg'=>103,
                'description'=>'Los Ríos'
                ],
                
                
                            
                [
                'id_com'=>1808,
                'id_reg'=>103,
                'description'=>'Manabí'
                ],
                
                
                            
                [
                'id_com'=>1809,
                'id_reg'=>103,
                'description'=>'Morona-Santiago'
                ],
                
                
                            
                [
                'id_com'=>1810,
                'id_reg'=>103,
                'description'=>'Pastaza'
                ],
                
                
                            
                [
                'id_com'=>1811,
                'id_reg'=>103,
                'description'=>'Pichincha'
                ],
                
                
                            
                [
                'id_com'=>1812,
                'id_reg'=>103,
                'description'=>'Tungurahua'
                ],
                
                
                            
                [
                'id_com'=>1813,
                'id_reg'=>103,
                'description'=>'Zamora-Chinchipe'
                ],
                
                
                            
                [
                'id_com'=>1814,
                'id_reg'=>103,
                'description'=>'Sucumbíos'
                ],
                
                
                            
                [
                'id_com'=>1815,
                'id_reg'=>103,
                'description'=>'Napo'
                ],
                
                
                            
                [
                'id_com'=>1816,
                'id_reg'=>103,
                'description'=>'Orellana'
                ],
                
                
                            
                [
                'id_com'=>1818,
                'id_reg'=>5,
                'description'=>'Buenos Aires'
                ],
                
                
                            
                [
                'id_com'=>1819,
                'id_reg'=>5,
                'description'=>'Catamarca'
                ],
                
                
                            
                [
                'id_com'=>1820,
                'id_reg'=>5,
                'description'=>'Chaco'
                ],
                
                
                            
                [
                'id_com'=>1821,
                'id_reg'=>5,
                'description'=>'Chubut'
                ],
                
                
                            
                [
                'id_com'=>1822,
                'id_reg'=>5,
                'description'=>'Córdoba'
                ],
                
                
                            
                [
                'id_com'=>1823,
                'id_reg'=>5,
                'description'=>'Corrientes'
                ],
                
                
                            
                [
                'id_com'=>1824,
                'id_reg'=>5,
                'description'=>'Distrito Federal'
                ],
                
                
                            
                [
                'id_com'=>1825,
                'id_reg'=>5,
                'description'=>'Entre Ríos'
                ],
                
                
                            
                [
                'id_com'=>1826,
                'id_reg'=>5,
                'description'=>'Formosa'
                ],
                
                
                            
                [
                'id_com'=>1827,
                'id_reg'=>5,
                'description'=>'Jujuy'
                ],
                
                
                            
                [
                'id_com'=>1828,
                'id_reg'=>5,
                'description'=>'La Pampa'
                ],
                
                
                            
                [
                'id_com'=>1829,
                'id_reg'=>5,
                'description'=>'La Rioja'
                ],
                
                
                            
                [
                'id_com'=>1830,
                'id_reg'=>5,
                'description'=>'Mendoza'
                ],
                
                
                            
                [
                'id_com'=>1831,
                'id_reg'=>5,
                'description'=>'Misiones'
                ],
                
                
                            
                [
                'id_com'=>1832,
                'id_reg'=>5,
                'description'=>'Neuquén'
                ],
                
                
                            
                [
                'id_com'=>1833,
                'id_reg'=>5,
                'description'=>'Río Negro'
                ],
                
                
                            
                [
                'id_com'=>1834,
                'id_reg'=>5,
                'description'=>'Salta'
                ],
                
                
                            
                [
                'id_com'=>1835,
                'id_reg'=>5,
                'description'=>'San Juan'
                ],
                
                
                            
                [
                'id_com'=>1836,
                'id_reg'=>5,
                'description'=>'San Luis'
                ],
                
                
                            
                [
                'id_com'=>1837,
                'id_reg'=>5,
                'description'=>'Santa Cruz'
                ],
                
                
                            
                [
                'id_com'=>1838,
                'id_reg'=>5,
                'description'=>'Santa Fe'
                ],
                
                
                            
                [
                'id_com'=>1839,
                'id_reg'=>5,
                'description'=>'Santiago del Estero'
                ],
                
                
                            
                [
                'id_com'=>1840,
                'id_reg'=>5,
                'description'=>'Tierra del Fuego'
                ],
                
                
                            
                [
                'id_com'=>1841,
                'id_reg'=>5,
                'description'=>'Tucumán'
                ],
                
                
                            
                [
                'id_com'=>1843,
                'id_reg'=>95,
                'description'=>'Amazonas'
                ],
                
                
                            
                [
                'id_com'=>1844,
                'id_reg'=>95,
                'description'=>'Anzoategui'
                ],
                
                
                            
                [
                'id_com'=>1845,
                'id_reg'=>95,
                'description'=>'Apure'
                ],
                
                
                            
                [
                'id_com'=>1846,
                'id_reg'=>95,
                'description'=>'Aragua'
                ],
                
                
                            
                [
                'id_com'=>1847,
                'id_reg'=>95,
                'description'=>'Barinas'
                ],
                
                
                            
                [
                'id_com'=>1848,
                'id_reg'=>95,
                'description'=>'Bolívar'
                ],
                
                
                            
                [
                'id_com'=>1849,
                'id_reg'=>95,
                'description'=>'Carabobo'
                ],
                
                
                            
                [
                'id_com'=>1850,
                'id_reg'=>95,
                'description'=>'Cojedes'
                ],
                
                
                            
                [
                'id_com'=>1851,
                'id_reg'=>95,
                'description'=>'Delta Amacuro'
                ],
                
                
                            
                [
                'id_com'=>1852,
                'id_reg'=>95,
                'description'=>'Falcón'
                ],
                
                
                            
                [
                'id_com'=>1853,
                'id_reg'=>95,
                'description'=>'Guárico'
                ],
                
                
                            
                [
                'id_com'=>1854,
                'id_reg'=>95,
                'description'=>'Lara'
                ],
                
                
                            
                [
                'id_com'=>1855,
                'id_reg'=>95,
                'description'=>'Mérida'
                ],
                
                
                            
                [
                'id_com'=>1856,
                'id_reg'=>95,
                'description'=>'Miranda'
                ],
                
                
                            
                [
                'id_com'=>1857,
                'id_reg'=>95,
                'description'=>'Monagas'
                ],
                
                
                            
                [
                'id_com'=>1858,
                'id_reg'=>95,
                'description'=>'Nueva Esparta'
                ],
                
                
                            
                [
                'id_com'=>1859,
                'id_reg'=>95,
                'description'=>'Portuguesa'
                ],
                
                
                            
                [
                'id_com'=>1860,
                'id_reg'=>95,
                'description'=>'Sucre'
                ],
                
                
                            
                [
                'id_com'=>1861,
                'id_reg'=>95,
                'description'=>'Táchira'
                ],
                
                
                            
                [
                'id_com'=>1862,
                'id_reg'=>95,
                'description'=>'Trujillo'
                ],
                
                
                            
                [
                'id_com'=>1863,
                'id_reg'=>95,
                'description'=>'Yaracuy'
                ],
                
                
                            
                [
                'id_com'=>1864,
                'id_reg'=>95,
                'description'=>'Zulia'
                ],
                
                
                            
                [
                'id_com'=>1865,
                'id_reg'=>95,
                'description'=>'Dependencias Federales'
                ],
                
                
                            
                [
                'id_com'=>1866,
                'id_reg'=>95,
                'description'=>'Distrito Capital'
                ],
                
                
                            
                [
                'id_com'=>1867,
                'id_reg'=>95,
                'description'=>'Vargas'
                ],
                
                
                            
                [
                'id_com'=>1869,
                'id_reg'=>209,
                'description'=>'Boaco'
                ],
                
                
                            
                [
                'id_com'=>1870,
                'id_reg'=>209,
                'description'=>'Carazo'
                ],
                
                
                            
                [
                'id_com'=>1871,
                'id_reg'=>209,
                'description'=>'Chinandega'
                ],
                
                
                            
                [
                'id_com'=>1872,
                'id_reg'=>209,
                'description'=>'Chontales'
                ],
                
                
                            
                [
                'id_com'=>1873,
                'id_reg'=>209,
                'description'=>'Estelí'
                ],
                
                
                            
                [
                'id_com'=>1874,
                'id_reg'=>209,
                'description'=>'Granada'
                ],
                
                
                            
                [
                'id_com'=>1875,
                'id_reg'=>209,
                'description'=>'Jinotega'
                ],
                
                
                            
                [
                'id_com'=>1876,
                'id_reg'=>209,
                'description'=>'León'
                ],
                
                
                            
                [
                'id_com'=>1877,
                'id_reg'=>209,
                'description'=>'Madriz'
                ],
                
                
                            
                [
                'id_com'=>1878,
                'id_reg'=>209,
                'description'=>'Managua'
                ],
                
                
                            
                [
                'id_com'=>1879,
                'id_reg'=>209,
                'description'=>'Masaya'
                ],
                
                
                            
                [
                'id_com'=>1880,
                'id_reg'=>209,
                'description'=>'Matagalpa'
                ],
                
                
                            
                [
                'id_com'=>1881,
                'id_reg'=>209,
                'description'=>'Nueva Segovia'
                ],
                
                
                            
                [
                'id_com'=>1882,
                'id_reg'=>209,
                'description'=>'Rio San Juan'
                ],
                
                
                            
                [
                'id_com'=>1883,
                'id_reg'=>209,
                'description'=>'Rivas'
                ],
                
                
                            
                [
                'id_com'=>1884,
                'id_reg'=>209,
                'description'=>'Zelaya'
                ],
                
                
                            
                [
                'id_com'=>1886,
                'id_reg'=>113,
                'description'=>'Pinar del Rio'
                ],
                
                
                            
                [
                'id_com'=>1887,
                'id_reg'=>113,
                'description'=>'Ciudad de la Habana'
                ],
                
                
                            
                [
                'id_com'=>1888,
                'id_reg'=>113,
                'description'=>'Matanzas'
                ],
                
                
                            
                [
                'id_com'=>1889,
                'id_reg'=>113,
                'description'=>'Isla de la Juventud'
                ],
                
                
                            
                [
                'id_com'=>1890,
                'id_reg'=>113,
                'description'=>'Camaguey'
                ],
                
                
                            
                [
                'id_com'=>1891,
                'id_reg'=>113,
                'description'=>'Ciego de Avila'
                ],
                
                
                            
                [
                'id_com'=>1892,
                'id_reg'=>113,
                'description'=>'Cienfuegos'
                ],
                
                
                            
                [
                'id_com'=>1893,
                'id_reg'=>113,
                'description'=>'Granma'
                ],
                
                
                            
                [
                'id_com'=>1894,
                'id_reg'=>113,
                'description'=>'Guantanamo'
                ],
                
                
                            
                [
                'id_com'=>1895,
                'id_reg'=>113,
                'description'=>'La Habana'
                ],
                
                
                            
                [
                'id_com'=>1896,
                'id_reg'=>113,
                'description'=>'Holguin'
                ],
                
                
                            
                [
                'id_com'=>1897,
                'id_reg'=>113,
                'description'=>'Las Tunas'
                ],
                
                
                            
                [
                'id_com'=>1898,
                'id_reg'=>113,
                'description'=>'Sancti Spiritus'
                ],
                
                
                            
                [
                'id_com'=>1899,
                'id_reg'=>113,
                'description'=>'Santiago de Cuba'
                ],
                
                
                            
                [
                'id_com'=>1900,
                'id_reg'=>113,
                'description'=>'Villa Clara'
                ],
                
                
                            
                [
                'id_com'=>1901,
                'id_reg'=>12,
                'description'=>'Acre'
                ],
                
                
                            
                [
                'id_com'=>1902,
                'id_reg'=>12,
                'description'=>'Alagoas'
                ],
                
                
                            
                [
                'id_com'=>1903,
                'id_reg'=>12,
                'description'=>'Amapa'
                ],
                
                
                            
                [
                'id_com'=>1904,
                'id_reg'=>12,
                'description'=>'Amazonas'
                ],
                
                
                            
                [
                'id_com'=>1905,
                'id_reg'=>12,
                'description'=>'Bahia'
                ],
                
                
                            
                [
                'id_com'=>1906,
                'id_reg'=>12,
                'description'=>'Ceara'
                ],
                
                
                            
                [
                'id_com'=>1907,
                'id_reg'=>12,
                'description'=>'Distrito Federal'
                ],
                
                
                            
                [
                'id_com'=>1908,
                'id_reg'=>12,
                'description'=>'Espirito Santo'
                ],
                
                
                            
                [
                'id_com'=>1909,
                'id_reg'=>12,
                'description'=>'Mato Grosso do Sul'
                ],
                
                
                            
                [
                'id_com'=>1910,
                'id_reg'=>12,
                'description'=>'Maranhao'
                ],
                
                
                            
                [
                'id_com'=>1911,
                'id_reg'=>12,
                'description'=>'Mato Grosso'
                ],
                
                
                            
                [
                'id_com'=>1912,
                'id_reg'=>12,
                'description'=>'Minas Gerais'
                ],
                
                
                            
                [
                'id_com'=>1913,
                'id_reg'=>12,
                'description'=>'Para'
                ],
                
                
                            
                [
                'id_com'=>1914,
                'id_reg'=>12,
                'description'=>'Paraiba'
                ],
                
                
                            
                [
                'id_com'=>1915,
                'id_reg'=>12,
                'description'=>'Parana'
                ],
                
                
                            
                [
                'id_com'=>1916,
                'id_reg'=>12,
                'description'=>'Piaui'
                ],
                
                
                            
                [
                'id_com'=>1917,
                'id_reg'=>12,
                'description'=>'Rio de Janeiro'
                ],
                
                
                            
                [
                'id_com'=>1918,
                'id_reg'=>12,
                'description'=>'Rio Grande do Norte'
                ],
                
                
                            
                [
                'id_com'=>1919,
                'id_reg'=>12,
                'description'=>'Rio Grande do Sul'
                ],
                
                
                            
                [
                'id_com'=>1920,
                'id_reg'=>12,
                'description'=>'Rondonia'
                ],
                
                
                            
                [
                'id_com'=>1921,
                'id_reg'=>12,
                'description'=>'Roraima'
                ],
                
                
                            
                [
                'id_com'=>1922,
                'id_reg'=>12,
                'description'=>'Santa Catarina'
                ],
                
                
                            
                [
                'id_com'=>1923,
                'id_reg'=>12,
                'description'=>'Sao Paulo'
                ],
                
                
                            
                [
                'id_com'=>1924,
                'id_reg'=>12,
                'description'=>'Sergipe'
                ],
                
                
                            
                [
                'id_com'=>1925,
                'id_reg'=>12,
                'description'=>'Goias'
                ],
                
                
                            
                [
                'id_com'=>1926,
                'id_reg'=>12,
                'description'=>'Pernambuco'
                ],
                
                
                            
                [
                'id_com'=>1927,
                'id_reg'=>12,
                'description'=>'Tocantins'
                ],
                
                
                            
                [
                'id_com'=>1930,
                'id_reg'=>83,
                'description'=>'Akureyri'
                ],
                
                
                            
                [
                'id_com'=>1931,
                'id_reg'=>83,
                'description'=>'Arnessysla'
                ],
                
                
                            
                [
                'id_com'=>1932,
                'id_reg'=>83,
                'description'=>'Austur-Bardastrandarsysla'
                ],
                
                
                            
                [
                'id_com'=>1933,
                'id_reg'=>83,
                'description'=>'Austur-Hunavatnssysla'
                ],
                
                
                            
                [
                'id_com'=>1934,
                'id_reg'=>83,
                'description'=>'Austur-Skaftafellssysla'
                ],
                
                
                            
                [
                'id_com'=>1935,
                'id_reg'=>83,
                'description'=>'Borgarfjardarsysla'
                ],
                
                
                            
                [
                'id_com'=>1936,
                'id_reg'=>83,
                'description'=>'Dalasysla'
                ],
                
                
                            
                [
                'id_com'=>1937,
                'id_reg'=>83,
                'description'=>'Eyjafjardarsysla'
                ],
                
                
                            
                [
                'id_com'=>1938,
                'id_reg'=>83,
                'description'=>'Gullbringusysla'
                ],
                
                
                            
                [
                'id_com'=>1939,
                'id_reg'=>83,
                'description'=>'Hafnarfjordur'
                ],
                
                
                            
                [
                'id_com'=>1943,
                'id_reg'=>83,
                'description'=>'Kjosarsysla'
                ],
                
                
                            
                [
                'id_com'=>1944,
                'id_reg'=>83,
                'description'=>'Kopavogur'
                ],
                
                
                            
                [
                'id_com'=>1945,
                'id_reg'=>83,
                'description'=>'Myrasysla'
                ],
                
                
                            
                [
                'id_com'=>1946,
                'id_reg'=>83,
                'description'=>'Neskaupstadur'
                ],
                
                
                            
                [
                'id_com'=>1947,
                'id_reg'=>83,
                'description'=>'Nordur-Isafjardarsysla'
                ],
                
                
                            
                [
                'id_com'=>1948,
                'id_reg'=>83,
                'description'=>'Nordur-Mulasysla'
                ],
                
                
                            
                [
                'id_com'=>1949,
                'id_reg'=>83,
                'description'=>'Nordur-Tingeyjarsysla'
                ],
                
                
                            
                [
                'id_com'=>1950,
                'id_reg'=>83,
                'description'=>'Olafsfjordur'
                ],
                
                
                            
                [
                'id_com'=>1951,
                'id_reg'=>83,
                'description'=>'Rangarvallasysla'
                ],
                
                
                            
                [
                'id_com'=>1952,
                'id_reg'=>83,
                'description'=>'Reykjavik'
                ],
                
                
                            
                [
                'id_com'=>1953,
                'id_reg'=>83,
                'description'=>'Saudarkrokur'
                ],
                
                
                            
                [
                'id_com'=>1954,
                'id_reg'=>83,
                'description'=>'Seydisfjordur'
                ],
                
                
                            
                [
                'id_com'=>1956,
                'id_reg'=>83,
                'description'=>'Skagafjardarsysla'
                ],
                
                
                            
                [
                'id_com'=>1957,
                'id_reg'=>83,
                'description'=>'Snafellsnes- og Hnappadalssysla'
                ],
                
                
                            
                [
                'id_com'=>1958,
                'id_reg'=>83,
                'description'=>'Strandasysla'
                ],
                
                
                            
                [
                'id_com'=>1959,
                'id_reg'=>83,
                'description'=>'Sudur-Mulasysla'
                ],
                
                
                            
                [
                'id_com'=>1960,
                'id_reg'=>83,
                'description'=>'Sudur-Tingeyjarsysla'
                ],
                
                
                            
                [
                'id_com'=>1961,
                'id_reg'=>83,
                'description'=>'Vestmannaeyjar'
                ],
                
                
                            
                [
                'id_com'=>1962,
                'id_reg'=>83,
                'description'=>'Vestur-Bardastrandarsysla'
                ],
                
                
                            
                [
                'id_com'=>1964,
                'id_reg'=>83,
                'description'=>'Vestur-Isafjardarsysla'
                ],
                
                
                            
                [
                'id_com'=>1965,
                'id_reg'=>83,
                'description'=>'Vestur-Skaftafellssysla'
                ],
                
                
                            
                [
                'id_com'=>1966,
                'id_reg'=>35,
                'description'=>'Anhui'
                ],
                
                
                            
                [
                'id_com'=>1967,
                'id_reg'=>35,
                'description'=>'Zhejiang'
                ],
                
                
                            
                [
                'id_com'=>1968,
                'id_reg'=>35,
                'description'=>'Jiangxi'
                ],
                
                
                            
                [
                'id_com'=>1969,
                'id_reg'=>35,
                'description'=>'Jiangsu'
                ],
                
                
                            
                [
                'id_com'=>1970,
                'id_reg'=>35,
                'description'=>'Jilin'
                ],
                
                
                            
                [
                'id_com'=>1971,
                'id_reg'=>35,
                'description'=>'Qinghai'
                ],
                
                
                            
                [
                'id_com'=>1972,
                'id_reg'=>35,
                'description'=>'Fujian'
                ],
                
                
                            
                [
                'id_com'=>1973,
                'id_reg'=>35,
                'description'=>'Heilongjiang'
                ],
                
                
                            
                [
                'id_com'=>1974,
                'id_reg'=>35,
                'description'=>'Henan'
                ],
                
                
                            
                [
                'id_com'=>1975,
                'id_reg'=>35,
                'description'=>'Hebei'
                ],
                
                
                            
                [
                'id_com'=>1976,
                'id_reg'=>35,
                'description'=>'Hunan'
                ],
                
                
                            
                [
                'id_com'=>1977,
                'id_reg'=>35,
                'description'=>'Hubei'
                ],
                
                
                            
                [
                'id_com'=>1978,
                'id_reg'=>35,
                'description'=>'Xinjiang'
                ],
                
                
                            
                [
                'id_com'=>1979,
                'id_reg'=>35,
                'description'=>'Xizang'
                ],
                
                
                            
                [
                'id_com'=>1980,
                'id_reg'=>35,
                'description'=>'Gansu'
                ],
                
                
                            
                [
                'id_com'=>1981,
                'id_reg'=>35,
                'description'=>'Guangxi'
                ],
                
                
                            
                [
                'id_com'=>1982,
                'id_reg'=>35,
                'description'=>'Guizhou'
                ],
                
                
                            
                [
                'id_com'=>1983,
                'id_reg'=>35,
                'description'=>'Liaoning'
                ],
                
                
                            
                [
                'id_com'=>1984,
                'id_reg'=>35,
                'description'=>'Nei Mongol'
                ],
                
                
                            
                [
                'id_com'=>1985,
                'id_reg'=>35,
                'description'=>'Ningxia'
                ],
                
                
                            
                [
                'id_com'=>1986,
                'id_reg'=>35,
                'description'=>'Beijing'
                ],
                
                
                            
                [
                'id_com'=>1987,
                'id_reg'=>35,
                'description'=>'Shanghai'
                ],
                
                
                            
                [
                'id_com'=>1988,
                'id_reg'=>35,
                'description'=>'Shanxi'
                ],
                
                
                            
                [
                'id_com'=>1989,
                'id_reg'=>35,
                'description'=>'Shandong'
                ],
                
                
                            
                [
                'id_com'=>1990,
                'id_reg'=>35,
                'description'=>'Shaanxi'
                ],
                
                
                            
                [
                'id_com'=>1991,
                'id_reg'=>35,
                'description'=>'Sichuan'
                ],
                
                
                            
                [
                'id_com'=>1992,
                'id_reg'=>35,
                'description'=>'Tianjin'
                ],
                
                
                            
                [
                'id_com'=>1993,
                'id_reg'=>35,
                'description'=>'Yunnan'
                ],
                
                
                            
                [
                'id_com'=>1994,
                'id_reg'=>35,
                'description'=>'Guangdong'
                ],
                
                
                            
                [
                'id_com'=>1995,
                'id_reg'=>35,
                'description'=>'Hainan'
                ],
                
                
                            
                [
                'id_com'=>1996,
                'id_reg'=>35,
                'description'=>'Chongqing'
                ],
                
                
                            
                [
                'id_com'=>1997,
                'id_reg'=>97,
                'description'=>'Central'
                ],
                
                
                            
                [
                'id_com'=>1998,
                'id_reg'=>97,
                'description'=>'Coast'
                ],
                
                
                            
                [
                'id_com'=>1999,
                'id_reg'=>97,
                'description'=>'Eastern'
                ],
                
                
                            
                [
                'id_com'=>2000,
                'id_reg'=>97,
                'description'=>'Nairobi Area'
                ],
                
                
                            
                [
                'id_com'=>2001,
                'id_reg'=>97,
                'description'=>'North-Eastern'
                ],
                
                
                            
                [
                'id_com'=>2002,
                'id_reg'=>97,
                'description'=>'Nyanza'
                ],
                
                
                            
                [
                'id_com'=>2003,
                'id_reg'=>97,
                'description'=>'Rift Valley'
                ],
                
                
                            
                [
                'id_com'=>2004,
                'id_reg'=>97,
                'description'=>'Western'
                ],
                
                
                            
                [
                'id_com'=>2006,
                'id_reg'=>195,
                'description'=>'Gilbert Islands'
                ],
                
                
                            
                [
                'id_com'=>2007,
                'id_reg'=>195,
                'description'=>'Line Islands'
                ],
                
                
                            
                [
                'id_com'=>2008,
                'id_reg'=>195,
                'description'=>'Phoenix Islands'
                ],
                
                
                            
                [
                'id_com'=>2010,
                'id_reg'=>1,
                'description'=>'Australian Capital Territory'
                ],
                
                
                            
                [
                'id_com'=>2011,
                'id_reg'=>1,
                'description'=>'New South Wales'
                ],
                
                
                            
                [
                'id_com'=>2012,
                'id_reg'=>1,
                'description'=>'Northern Territory'
                ],
                
                
                            
                [
                'id_com'=>2013,
                'id_reg'=>1,
                'description'=>'Queensland'
                ],
                
                
                            
                [
                'id_com'=>2014,
                'id_reg'=>1,
                'description'=>'South Australia'
                ],
                
                
                            
                [
                'id_com'=>2015,
                'id_reg'=>1,
                'description'=>'Tasmania'
                ],
                
                
                            
                [
                'id_com'=>2016,
                'id_reg'=>1,
                'description'=>'Victoria'
                ],
                
                
                            
                [
                'id_com'=>2017,
                'id_reg'=>1,
                'description'=>'Western Australia'
                ],
                
                
                            
                [
                'id_com'=>2018,
                'id_reg'=>27,
                'description'=>'Dublin'
                ],
                
                
                            
                [
                'id_com'=>2019,
                'id_reg'=>27,
                'description'=>'Galway'
                ],
                
                
                            
                [
                'id_com'=>2020,
                'id_reg'=>27,
                'description'=>'Kildare'
                ],
                
                
                            
                [
                'id_com'=>2021,
                'id_reg'=>27,
                'description'=>'Leitrim'
                ],
                
                
                            
                [
                'id_com'=>2022,
                'id_reg'=>27,
                'description'=>'Limerick'
                ],
                
                
                            
                [
                'id_com'=>2023,
                'id_reg'=>27,
                'description'=>'Mayo'
                ],
                
                
                            
                [
                'id_com'=>2024,
                'id_reg'=>27,
                'description'=>'Meath'
                ],
                
                
                            
                [
                'id_com'=>2025,
                'id_reg'=>27,
                'description'=>'Carlow'
                ],
                
                
                            
                [
                'id_com'=>2026,
                'id_reg'=>27,
                'description'=>'Kilkenny'
                ],
                
                
                            
                [
                'id_com'=>2027,
                'id_reg'=>27,
                'description'=>'Laois'
                ],
                
                
                            
                [
                'id_com'=>2028,
                'id_reg'=>27,
                'description'=>'Longford'
                ],
                
                
                            
                [
                'id_com'=>2029,
                'id_reg'=>27,
                'description'=>'Louth'
                ],
                
                
                            
                [
                'id_com'=>2030,
                'id_reg'=>27,
                'description'=>'Offaly'
                ],
                
                
                            
                [
                'id_com'=>2031,
                'id_reg'=>27,
                'description'=>'Westmeath'
                ],
                
                
                            
                [
                'id_com'=>2032,
                'id_reg'=>27,
                'description'=>'Wexford'
                ],
                
                
                            
                [
                'id_com'=>2033,
                'id_reg'=>27,
                'description'=>'Wicklow'
                ],
                
                
                            
                [
                'id_com'=>2034,
                'id_reg'=>27,
                'description'=>'Roscommon'
                ],
                
                
                            
                [
                'id_com'=>2035,
                'id_reg'=>27,
                'description'=>'Sligo'
                ],
                
                
                            
                [
                'id_com'=>2036,
                'id_reg'=>27,
                'description'=>'Clare'
                ],
                
                
                            
                [
                'id_com'=>2037,
                'id_reg'=>27,
                'description'=>'Cork'
                ],
                
                
                            
                [
                'id_com'=>2038,
                'id_reg'=>27,
                'description'=>'Kerry'
                ],
                
                
                            
                [
                'id_com'=>2039,
                'id_reg'=>27,
                'description'=>'Tipperary'
                ],
                
                
                            
                [
                'id_com'=>2040,
                'id_reg'=>27,
                'description'=>'Waterford'
                ],
                
                
                            
                [
                'id_com'=>2041,
                'id_reg'=>27,
                'description'=>'Cavan'
                ],
                
                
                            
                [
                'id_com'=>2042,
                'id_reg'=>27,
                'description'=>'Donegal'
                ],
                
                
                            
                [
                'id_com'=>2043,
                'id_reg'=>27,
                'description'=>'Monaghan'
                ],
                
                
                            
                [
                'id_com'=>2044,
                'id_reg'=>50,
                'description'=>'Karachaeva-Cherkesskaya Respublica'
                ],
                
                
                            
                [
                'id_com'=>2045,
                'id_reg'=>50,
                'description'=>'Raimirskii (Dolgano-Nenetskii) AO'
                ],
                
                
                            
                [
                'id_com'=>2046,
                'id_reg'=>50,
                'description'=>'Respublica Tiva'
                ],
                
                
                            
                [
                'id_com'=>2047,
                'id_reg'=>32,
                'description'=>'Newfoundland'
                ],
                
                
                            
                [
                'id_com'=>2048,
                'id_reg'=>32,
                'description'=>'Nova Scotia'
                ],
                
                
                            
                [
                'id_com'=>2049,
                'id_reg'=>32,
                'description'=>'Prince Edward Island'
                ],
                
                
                            
                [
                'id_com'=>2050,
                'id_reg'=>32,
                'description'=>'New Brunswick'
                ],
                
                
                            
                [
                'id_com'=>2051,
                'id_reg'=>32,
                'description'=>'Quebec'
                ],
                
                
                            
                [
                'id_com'=>2052,
                'id_reg'=>32,
                'description'=>'Ontario'
                ],
                
                
                            
                [
                'id_com'=>2053,
                'id_reg'=>32,
                'description'=>'Manitoba'
                ],
                
                
                            
                [
                'id_com'=>2054,
                'id_reg'=>32,
                'description'=>'Saskatchewan'
                ],
                
                
                            
                [
                'id_com'=>2055,
                'id_reg'=>32,
                'description'=>'Alberta'
                ],
                
                
                            
                [
                'id_com'=>2056,
                'id_reg'=>32,
                'description'=>'British Columbia'
                ],
                
                
                            
                [
                'id_com'=>2057,
                'id_reg'=>32,
                'description'=>'Nunavut'
                ],
                
                
                            
                [
                'id_com'=>2058,
                'id_reg'=>32,
                'description'=>'Northwest Territories'
                ],
                
                
                            
                [
                'id_com'=>2059,
                'id_reg'=>32,
                'description'=>'Yukon Territory'
                ],
                
                
                            
                [
                'id_com'=>2060,
                'id_reg'=>19,
                'description'=>'Drenthe'
                ],
                
                
                            
                [
                'id_com'=>2061,
                'id_reg'=>19,
                'description'=>'Friesland'
                ],
                
                
                            
                [
                'id_com'=>2062,
                'id_reg'=>19,
                'description'=>'Gelderland'
                ],
                
                
                            
                [
                'id_com'=>2063,
                'id_reg'=>19,
                'description'=>'Groningen'
                ],
                
                
                            
                [
                'id_com'=>2064,
                'id_reg'=>19,
                'description'=>'Limburg'
                ],
                
                
                            
                [
                'id_com'=>2065,
                'id_reg'=>19,
                'description'=>'Noord-Brabant'
                ],
                
                
                            
                [
                'id_com'=>2066,
                'id_reg'=>19,
                'description'=>'Noord-Holland'
                ],
                
                
                            
                [
                'id_com'=>2067,
                'id_reg'=>19,
                'description'=>'Utrecht'
                ],
                
                
                            
                [
                'id_com'=>2068,
                'id_reg'=>19,
                'description'=>'Zeeland'
                ],
                
                
                            
                [
                'id_com'=>2069,
                'id_reg'=>19,
                'description'=>'Zuid-Holland'
                ],
                
                
                            
                [
                'id_com'=>2071,
                'id_reg'=>19,
                'description'=>'Overijssel'
                ],
                
                
                            
                [
                'id_com'=>2072,
                'id_reg'=>19,
                'description'=>'Flevoland'
                ],
                
                
                            
                [
                'id_com'=>2073,
                'id_reg'=>138,
                'description'=>'Duarte'
                ],
                
                
                            
                [
                'id_com'=>2074,
                'id_reg'=>138,
                'description'=>'Puerto Plata'
                ],
                
                
                            
                [
                'id_com'=>2075,
                'id_reg'=>138,
                'description'=>'Valverde'
                ],
                
                
                            
                [
                'id_com'=>2076,
                'id_reg'=>138,
                'description'=>'María Trinidad Sánchez'
                ],
                
                
                            
                [
                'id_com'=>2077,
                'id_reg'=>138,
                'description'=>'Azua'
                ],
                
                
                            
                [
                'id_com'=>2078,
                'id_reg'=>138,
                'description'=>'Santiago'
                ],
                
                
                            
                [
                'id_com'=>2079,
                'id_reg'=>138,
                'description'=>'San Cristóbal'
                ],
                
                
                            
                [
                'id_com'=>2080,
                'id_reg'=>138,
                'description'=>'Peravia'
                ],
                
                
                            
                [
                'id_com'=>2081,
                'id_reg'=>138,
                'description'=>'Elías Piña'
                ],
                
                
                            
                [
                'id_com'=>2082,
                'id_reg'=>138,
                'description'=>'Barahona'
                ],
                
                
                            
                [
                'id_com'=>2083,
                'id_reg'=>138,
                'description'=>'Monte Plata'
                ],
                
                
                            
                [
                'id_com'=>2084,
                'id_reg'=>138,
                'description'=>'Salcedo'
                ],
                
                
                            
                [
                'id_com'=>2085,
                'id_reg'=>138,
                'description'=>'La Altagracia'
                ],
                
                
                            
                [
                'id_com'=>2086,
                'id_reg'=>138,
                'description'=>'San Juan'
                ],
                
                
                            
                [
                'id_com'=>2087,
                'id_reg'=>138,
                'description'=>'Monseñor Nouel'
                ],
                
                
                            
                [
                'id_com'=>2088,
                'id_reg'=>138,
                'description'=>'Monte Cristi'
                ],
                
                
                            
                [
                'id_com'=>2089,
                'id_reg'=>138,
                'description'=>'Espaillat'
                ],
                
                
                            
                [
                'id_com'=>2090,
                'id_reg'=>138,
                'description'=>'Sánchez Ramírez'
                ],
                
                
                            
                [
                'id_com'=>2091,
                'id_reg'=>138,
                'description'=>'La Vega'
                ],
                
                
                            
                [
                'id_com'=>2092,
                'id_reg'=>138,
                'description'=>'San Pedro de Macorís'
                ],
                
                
                            
                [
                'id_com'=>2093,
                'id_reg'=>138,
                'description'=>'Independencia'
                ],
                
                
                            
                [
                'id_com'=>2094,
                'id_reg'=>138,
                'description'=>'Dajabón'
                ],
                
                
                            
                [
                'id_com'=>2095,
                'id_reg'=>138,
                'description'=>'Baoruco'
                ],
                
                
                            
                [
                'id_com'=>2096,
                'id_reg'=>138,
                'description'=>'El Seibo'
                ],
                
                
                            
                [
                'id_com'=>2097,
                'id_reg'=>138,
                'description'=>'Hato Mayor'
                ],
                
                
                            
                [
                'id_com'=>2098,
                'id_reg'=>138,
                'description'=>'La Romana'
                ],
                
                
                            
                [
                'id_com'=>2099,
                'id_reg'=>138,
                'description'=>'Pedernales'
                ],
                
                
                            
                [
                'id_com'=>2100,
                'id_reg'=>138,
                'description'=>'Samaná'
                ],
                
                
                            
                [
                'id_com'=>2101,
                'id_reg'=>138,
                'description'=>'Santiago Rodríguez'
                ],
                
                
                            
                [
                'id_com'=>2102,
                'id_reg'=>138,
                'description'=>'San José de Ocoa'
                ],
                
                
                            
                [
                'id_com'=>2103,
                'id_reg'=>70,
                'description'=>'Chiba'
                ],
                
                
                            
                [
                'id_com'=>2104,
                'id_reg'=>70,
                'description'=>'Ehime'
                ],
                
                
                            
                [
                'id_com'=>2105,
                'id_reg'=>70,
                'description'=>'Oita'
                ],
                
                
                            
                [
                'id_com'=>2106,
                'id_reg'=>85,
                'description'=>'Skopje'
                ],
                
                
                            
                [
                'id_com'=>2108,
                'id_reg'=>35,
                'description'=>'Schanghai'
                ],
                
                
                            
                [
                'id_com'=>2109,
                'id_reg'=>35,
                'description'=>'Hongkong'
                ],
                
                
                            
                [
                'id_com'=>2110,
                'id_reg'=>35,
                'description'=>'Neimenggu'
                ],
                
                
                            
                [
                'id_com'=>2111,
                'id_reg'=>35,
                'description'=>'Aomen'
                ],
                
                
                            
                [
                'id_com'=>2112,
                'id_reg'=>92,
                'description'=>'Amnat Charoen'
                ],
                
                
                            
                [
                'id_com'=>2113,
                'id_reg'=>92,
                'description'=>'Ang Thong'
                ],
                
                
                            
                [
                'id_com'=>2114,
                'id_reg'=>92,
                'description'=>'Bangkok'
                ],
                
                
                            
                [
                'id_com'=>2115,
                'id_reg'=>92,
                'description'=>'Buri Ram'
                ],
                
                
                            
                [
                'id_com'=>2116,
                'id_reg'=>92,
                'description'=>'Chachoengsao'
                ],
                
                
                            
                [
                'id_com'=>2117,
                'id_reg'=>92,
                'description'=>'Chai Nat'
                ],
                
                
                            
                [
                'id_com'=>2118,
                'id_reg'=>92,
                'description'=>'Chaiyaphum'
                ],
                
                
                            
                [
                'id_com'=>2119,
                'id_reg'=>92,
                'description'=>'Chanthaburi'
                ],
                
                
                            
                [
                'id_com'=>2120,
                'id_reg'=>92,
                'description'=>'Chiang Mai'
                ],
                
                
                            
                [
                'id_com'=>2121,
                'id_reg'=>92,
                'description'=>'Chiang Rai'
                ],
                
                
                            
                [
                'id_com'=>2122,
                'id_reg'=>92,
                'description'=>'Chon Buri'
                ],
                
                
                            
                [
                'id_com'=>2124,
                'id_reg'=>92,
                'description'=>'Kalasin'
                ],
                
                
                            
                [
                'id_com'=>2126,
                'id_reg'=>92,
                'description'=>'Kanchanaburi'
                ],
                
                
                            
                [
                'id_com'=>2127,
                'id_reg'=>92,
                'description'=>'Khon Kaen'
                ],
                
                
                            
                [
                'id_com'=>2128,
                'id_reg'=>92,
                'description'=>'Krabi'
                ],
                
                
                            
                [
                'id_com'=>2129,
                'id_reg'=>92,
                'description'=>'Lampang'
                ],
                
                
                            
                [
                'id_com'=>2131,
                'id_reg'=>92,
                'description'=>'Loei'
                ],
                
                
                            
                [
                'id_com'=>2132,
                'id_reg'=>92,
                'description'=>'Lop Buri'
                ],
                
                
                            
                [
                'id_com'=>2133,
                'id_reg'=>92,
                'description'=>'Mae Hong Son'
                ],
                
                
                            
                [
                'id_com'=>2134,
                'id_reg'=>92,
                'description'=>'Maha Sarakham'
                ],
                
                
                            
                [
                'id_com'=>2137,
                'id_reg'=>92,
                'description'=>'Nakhon Pathom'
                ],
                
                
                            
                [
                'id_com'=>2139,
                'id_reg'=>92,
                'description'=>'Nakhon Ratchasima'
                ],
                
                
                            
                [
                'id_com'=>2140,
                'id_reg'=>92,
                'description'=>'Nakhon Sawan'
                ],
                
                
                            
                [
                'id_com'=>2141,
                'id_reg'=>92,
                'description'=>'Nakhon Si Thammarat'
                ],
                
                
                            
                [
                'id_com'=>2143,
                'id_reg'=>92,
                'description'=>'Narathiwat'
                ],
                
                
                            
                [
                'id_com'=>2144,
                'id_reg'=>92,
                'description'=>'Nong Bua Lam Phu'
                ],
                
                
                            
                [
                'id_com'=>2145,
                'id_reg'=>92,
                'description'=>'Nong Khai'
                ],
                
                
                            
                [
                'id_com'=>2146,
                'id_reg'=>92,
                'description'=>'Nonthaburi'
                ],
                
                
                            
                [
                'id_com'=>2147,
                'id_reg'=>92,
                'description'=>'Pathum Thani'
                ],
                
                
                            
                [
                'id_com'=>2148,
                'id_reg'=>92,
                'description'=>'Pattani'
                ],
                
                
                            
                [
                'id_com'=>2149,
                'id_reg'=>92,
                'description'=>'Phangnga'
                ],
                
                
                            
                [
                'id_com'=>2150,
                'id_reg'=>92,
                'description'=>'Phatthalung'
                ],
                
                
                            
                [
                'id_com'=>2154,
                'id_reg'=>92,
                'description'=>'Phichit'
                ],
                
                
                            
                [
                'id_com'=>2155,
                'id_reg'=>92,
                'description'=>'Phitsanulok'
                ],
                
                
                            
                [
                'id_com'=>2156,
                'id_reg'=>92,
                'description'=>'Phra Nakhon Si Ayutthaya'
                ],
                
                
                            
                [
                'id_com'=>2157,
                'id_reg'=>92,
                'description'=>'Phrae'
                ],
                
                
                            
                [
                'id_com'=>2158,
                'id_reg'=>92,
                'description'=>'Phuket'
                ],
                
                
                            
                [
                'id_com'=>2159,
                'id_reg'=>92,
                'description'=>'Prachin Buri'
                ],
                
                
                            
                [
                'id_com'=>2160,
                'id_reg'=>92,
                'description'=>'Prachuap Khiri Khan'
                ],
                
                
                            
                [
                'id_com'=>2162,
                'id_reg'=>92,
                'description'=>'Ratchaburi'
                ],
                
                
                            
                [
                'id_com'=>2163,
                'id_reg'=>92,
                'description'=>'Rayong'
                ],
                
                
                            
                [
                'id_com'=>2164,
                'id_reg'=>92,
                'description'=>'Roi Et'
                ],
                
                
                            
                [
                'id_com'=>2165,
                'id_reg'=>92,
                'description'=>'Sa Kaeo'
                ],
                
                
                            
                [
                'id_com'=>2166,
                'id_reg'=>92,
                'description'=>'Sakon Nakhon'
                ],
                
                
                            
                [
                'id_com'=>2167,
                'id_reg'=>92,
                'description'=>'Samut Prakan'
                ],
                
                
                            
                [
                'id_com'=>2168,
                'id_reg'=>92,
                'description'=>'Samut Sakhon'
                ],
                
                
                            
                [
                'id_com'=>2169,
                'id_reg'=>92,
                'description'=>'Samut Songkhran'
                ],
                
                
                            
                [
                'id_com'=>2170,
                'id_reg'=>92,
                'description'=>'Saraburi'
                ],
                
                
                            
                [
                'id_com'=>2172,
                'id_reg'=>92,
                'description'=>'Si Sa Ket'
                ],
                
                
                            
                [
                'id_com'=>2173,
                'id_reg'=>92,
                'description'=>'Sing Buri'
                ],
                
                
                            
                [
                'id_com'=>2174,
                'id_reg'=>92,
                'description'=>'Songkhla'
                ],
                
                
                            
                [
                'id_com'=>2175,
                'id_reg'=>92,
                'description'=>'Sukhothai'
                ],
                
                
                            
                [
                'id_com'=>2176,
                'id_reg'=>92,
                'description'=>'Suphan Buri'
                ],
                
                
                            
                [
                'id_com'=>2177,
                'id_reg'=>92,
                'description'=>'Surat Thani'
                ],
                
                
                            
                [
                'id_com'=>2178,
                'id_reg'=>92,
                'description'=>'Surin'
                ],
                
                
                            
                [
                'id_com'=>2180,
                'id_reg'=>92,
                'description'=>'Trang'
                ],
                
                
                            
                [
                'id_com'=>2182,
                'id_reg'=>92,
                'description'=>'Ubon Ratchathani'
                ],
                
                
                            
                [
                'id_com'=>2183,
                'id_reg'=>92,
                'description'=>'Udon Thani'
                ],
                
                
                            
                [
                'id_com'=>2184,
                'id_reg'=>92,
                'description'=>'Uthai Thani'
                ],
                
                
                            
                [
                'id_com'=>2185,
                'id_reg'=>92,
                'description'=>'Uttaradit'
                ],
                
                
                            
                [
                'id_com'=>2186,
                'id_reg'=>92,
                'description'=>'Yala'
                ],
                
                
                            
                [
                'id_com'=>2187,
                'id_reg'=>92,
                'description'=>'Yasothon'
                ],
                
                
                            
                [
                'id_com'=>2188,
                'id_reg'=>69,
                'description'=>'Busan'
                ],
                
                
                            
                [
                'id_com'=>2189,
                'id_reg'=>69,
                'description'=>'Daegu'
                ],
                
                
                            
                [
                'id_com'=>2191,
                'id_reg'=>69,
                'description'=>'Gangwon'
                ],
                
                
                            
                [
                'id_com'=>2192,
                'id_reg'=>69,
                'description'=>'Gwangju'
                ],
                
                
                            
                [
                'id_com'=>2193,
                'id_reg'=>69,
                'description'=>'Gyeonggi'
                ],
                
                
                            
                [
                'id_com'=>2194,
                'id_reg'=>69,
                'description'=>'Gyeongsangbuk'
                ],
                
                
                            
                [
                'id_com'=>2195,
                'id_reg'=>69,
                'description'=>'Gyeongsangnam'
                ],
                
                
                            
                [
                'id_com'=>2196,
                'id_reg'=>69,
                'description'=>'Jeju'
                ],
                
                
                            
                [
                'id_com'=>2201,
                'id_reg'=>25,
                'description'=>'Delhi'
                ],
                
                
                            
                [
                'id_com'=>2202,
                'id_reg'=>81,
                'description'=>'Región de Los Ríos'
                ],
                
                
                            
                [
                'id_com'=>2203,
                'id_reg'=>81,
                'description'=>'Región de Arica y Parinacota'
                ],
        ]);
 
    }
}
