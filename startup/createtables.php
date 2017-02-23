<?php
$sql = array();
$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_admin_modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'This will store the module id',
  `module_name` text NOT NULL COMMENT 'This will store the module names (Names of the controllers)',
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
$sql[] = "
INSERT INTO `" . DBPREFIX . "_admin_modules` (`module_id`, `module_name`) VALUES
(2, 'dashboard'),
(4, 'users'),
(5, 'categories'),
(6, 'subcategories'),
(7, 'brands'),
(8, 'vendors'),
(9, 'product'),
(10, 'sales');
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_areas_covered` (
  `area_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) NULL,
  `area_pin` int(11) NULL,
  `created_id` bigint(20) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_id` bigint(20) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_id` bigint(20) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
$sql[] = "
INSERT INTO `" . DBPREFIX . "_areas_covered` (`area_pin`, `area_name`) VALUES
(2800, 'Bangued'),
(2801, 'Dolores'),
(2802, 'Lagangilang'),
(2803, 'Tayum'),
(2804, 'Peñarrubia'),
(2805, 'Bucay'),
(2806, 'Pidigan'),
(2807, 'Langiden');
";
/*
:
:
:
:
:
:
:
:
2808: San Quintin
2809: San Isidro
2810: Manabo
2811: Villaviciosa
2812: Pilar
2813: Luba
2814: Tubo
2815: Boliney
2816: Daguioman
2817: Bucloc
2818: Sallapadan
2819: Licuan-Baay
2820: Malibcong
2821: Lacub
2822: Tineg
2823: San Juan
2824: Lagayan
2825: Danglas
2826: La Paz
Agusan del Norte[edit]
8600: Butuan
8601: Buenavista
8602: Nasipit
8603: Carmen
8604: Magallanes
8605: Cabadbaran
8606: Tubay
8607: Jabonga
8608: Santiago
8609: Kitcharao
8610: Las Nieves
8611: Remedios T. Romualdez
Agusan del Sur[edit]
8500: Prosperidad
8501: San Francisco
8502: Bayugan
8503: Sibagat
8504: Rosario
8505: Trento
8506: Bunawan
8507: Loreto
8508: La Paz
8509: Veruela
8510: Talacogon
8511: San Luis
8512: Santa Josefa
8513: Esperanza
Aklan[edit]
5600: Kalibo
5601: Banga
5602: Libacao
5603: Madalag
5604: Numancia
5605: Lezo
5606: Malinao
5607: Nabas
5608: Malay
5609: Buruanga
5610: New Washington
5611: Makato
5612: Tangalan
5613: Ibajay
5614: Balete
5615: Batan
5616: Altavas
Albay[edit]
4509: Bacacay
4502: Camalig
4501: Daraga (Locsin)
4503: Guinobatan
4515: Jovellar
4500: Legazpi City
4507: Libon
4504: Ligao
4510: Malilipot
4512: Malinao
4514: Manito
4505: Oas
4516: Pio Duran (Malacbalac)
4506: Polangui
4517: Rapu-Rapu
4508: Santo Domingo
4511: Tabaco
4513: Tiwi
Antique[edit]
5717: Anini-y
5706: Barbaza
5701: Belison
5704: Bugasong
5711: Caluya
5708: Culasi
5715: Hamtic
5705: Laua-an
5710: Libertad
5712: Pandan
5702: Patnongon
5700: San Jose
5714: San Remigio
5709: Sebaste
5713: Sibalom
5707: Tibiao
5716: Tobias Fornier (Dao)
5703: Valderrama
Apayao[edit]
3814: Calanasan (Bayag)
3807: Conner
3810: Flora
3809: Kabugao
3813: Luna
3812: Pudtol
3811: Santa Marcela
Aurora[edit]
3200: Baler
3204: Casiguran
3205: Dilasag
3206: Dinalungan
3207: Dingalan
3203: Dipaculao
3202: Maria Aurora
3201: San Luis
Basilan[edit]
7300: Isabela City
7301: Lantawan
7302: Lamitan
7303: Maluso
7304: Tipo-Tipo
7305: Sumisip
7306: Tuburan
Bataan[edit]
2114: Abucay
2107: Bagac
2100: Balanga City
2106: Bataan Export Processing Zone (Mariveles)
2110: Dinalupihan
2111: Hermosa
2104: Lamao
2103: Limay
2105: Mariveles
2108: Morong
2112: Orani
2102: Orion
2101: Pilar
2109: Refugee Processing Center (Morong)
2113: Samal
Batanes[edit]
3900: Basco
3905: Itbayat
3902: Ivana
3901: Mahatao
3904: Sabtang
3903: Uyugan
Batangas[edit]
4211: Agoncillo
4205: Alitagtag
4213: Balayan
4219: Balete
4200: Batangas City
4201: Bauan
4212: Calaca
4215: Calatagan
4222: Cuenca
4218: Fernando Air Base (Lipa City)
4230: Ibaan
4221: Laurel
4209: Lemery
4216: Lian
4217: Lipa City
4229: Lobo
4202: Mabini
4233: Malvar
4223: Mataas na Kahoy
4231: Nasugbu
4224: Padre Garcia
4225: Rosario
4227: San Jose
4226: San Juan
4210: San Luis
4207: San Nicolas
4204: San Pascual
4206: Santa Teresita
4234: Santo Tomas
4208: Taal
4220: Talisay
4232: Tanauan City
4228: Taysan
4203: Tingloy
4214: Tuy
Benguet[edit]
2612: Atok
2600: Baguio
2610: Bakun
2605: Bokod
2607: Buguias
2604: Itogon
2606: Kabayan
2613: Kapangan
2611: Kibungan
2601: La Trinidad
2609: Lepanto
2608: Mankayan
2602: Philippine Military Academy (Baguio City)
2614: Sablan
2603: Tuba
2615: Tublay
Biliran[edit]
6544: Almeria
6549: Biliran
6550: Cabucgayan
6548: Caibiran
6547: Culaba
6545: Kawayan
6546: Maripipi
6543: Naval
Bohol[edit]
6302: Alburquerque
6314: Alicia
6311: Anda
6335: Antequera
6301: Baclayon
6342: Balilihan
6318: Batuan
6326: Bien Unido
6317: Bilar
6333: Buenavista
6328: Calape
6312: Candijay
6346: Pres. Carlos P. Garcia (Pitogo)
6319: Carmen
6343: Catigbian
6330: Clarin
6337: Corella
6341: Cortes
6322: Dagohoy
6344: Danao
6339: Dauis
6305: Dimiao
6309: Duero
6307: Garcia Hernandez
6310: Guindulman
6332: Inabanga
6308: Jagna
6334: Jetafe
6304: Lila
6303: Loay
6316: Loboc
6327: Loon
6313: Mabini
6336: Maribojoc
6340: Panglao
6321: Pilar
6331: Sagbayan
6345: San Isidro
6323: San Miguel
6347: Sevilla
6320: Sierra Bullones
6338: Sikatuna
6300: Tagbilaran
6325: Talibon
6324: Trinidad
6329: Tubigon
6315: Ubay
6306: Valencia
Bukidnon[edit]
8707: Baungon
8723: Cabanglasan
8721: Damulog
8719: Dangcagan
8712: Don Carlos
8702: Impasugong
8713: Kadingilan
8718: Kalilangan
8720: Kibawe
8716: Kitaotao
8722: Lantapan
8706: Libona
8700: Malaybalay
8704: Malitbog
8703: Manolo Fortich
8714: Maramag
8710: Musuan
8717: Pangantucan
8705: Phillips
8715: Quezon
8711: San Fernando
8701: Sumilao
8708: Talakag
8709: Valencia City
Bulacan[edit]
3012: Angat
3016: Balagtas (Bigaa)
3006: Baliuag
3018: Bocaue
3017: Bulacan
3007: Bustos
3003: Calumpit
3009: Doña Remedios Trinidad
3015: Guiguinto
3002: Hagonoy
3000: Malolos
3019: Marilao
3020: Meycauayan
3013: Norzagaray
3021: Obando
3014: Pandi
3001: Paombong
3004: Plaridel
3005: Pulilan
3010: San Ildefonso
3023, 3024: San Jose del Monte
3011: San Miguel
3008: San Rafael
3022: Santa Maria
Cagayan[edit]
3517: Abulug
3507: Alcala
3523: Allacapan
3505: Amulung
3515: Aparri
3506: Baggao
3516: Ballesteros
3511: Buguey
3520: Calayan
3510: Camalaniugan
3519: Claveria
3501: Enrile
3508: Gattaran
3513: Gonzaga
3504: Iguig
3509: Lal-Lo
3524: Lasam
3522: Pamplona
3502: Peñablanca
3527: Piat
3526: Rizal
3518: Sanchez-Mira
3514: Santa Ana
3521: Santa Praxedes
3512: Santa Teresita
3525: Santo Niño
3503: Solana
3528: Tuao
3500: Tuguegarao
Camarines Norte[edit]
4608: Basud
4607: Capalonga
4600: Daet
4610: San Lorenzo Ruiz
4606: Jose Panganiban
4604: Labo
4601: Mercedes
4605: Paracale
4609: San Vicente
4611: Santa Elena
4602: Talisay
4612: Tulay-na-Lupa
4603: Vinzons
Camarines Sur[edit]
4432: Baao
4436: Balatan
4434: Nabua
4435: Bato
4404: Bombon
4433: Buhi
4430: Bula
4406: Cabusao
4405: Calabanga
4401: Camaligan
4402: Canaman
4429: Caramoan
4411: Del Gallego
4412: Gainza
4428: Garchitorena
4422: Goa
4431: Iriga
4425: Lagonoy
4407: Libmanan
4409: Lupi
4403: Magarao
4413: Milaor
4414: Minalabac
4434: Nabua
4400: Naga City
4419: Ocampo
4416: Pamplona
4417: Pasacao
4418: Pili
4424: Presentacion
4410: Ragay
4421: Sagñay
4415: San Fernando
4423: San Jose
4408: Sipocot
4427: Siruma
4420: Tigaon
4426: Tinambac
Camiguin[edit]
9100: Mambajao
9101: Mahinog
9102: Guinsiliban
9103: Sagay
9104: Catarman
Capiz[edit]
5811: Cuartero
5810: Dao
5813: Dumalag
5812: Dumarao
5805: Ivisan
5808: Jamindan
5809: Ma-ayon
5807: Mambusao
5801: Pan-ay
5815: Panitan
5804: Pilar
5802: Pontevedra
5803: President Roxas
5800: Roxas City
5806: Sapian
5816: Sigma
5814: Tapaz
Catanduanes[edit]
4807: Bagamanoc
4803: Baras
4801: Bato
4808: Caramoran
4804: Gigmoto
4809: Pandan
4806: Panganiban
4810: San Andres
4802: San Miguel
4805: Viga
4800: Virac
Cavite[edit]
4123: Alfonso
4119: Amadeo
4102: Bacoor
4116: Carmona
4100: Cavite City
4101: Sangley Point Naval Base (Cavite City)
4125: Corregidor Island
4114: Dasmariñas
4115: Dasmariñas Resettlement Area (Dasmariñas)
4126: First Cavite Industrial Estate (Dasmariñas)
4124: General Emilio Aguinaldo (Bailen)
4117: General Mariano Alvarez
4107: General Trias
4103: Imus
4122: Indang
4104: Kawit
4113: Magallanes
4112: Maragondon
4121: Mendez (Mendez-Nuñez)
4110: Naic
4105: Noveleta
4106: Rosario
4118: Silang
4120: Tagaytay
4108: Tanza
4111: Ternate
4109: Trece Martires City
Cebu[edit]
6033: Alcantara
6023: Alcoy
6030: Alegria
6040: Aloguinsan
6021: Argao
6042: Asturias
6031: Badian
6041: Balamban
6052: Bantayan
6036: Barili
6010: Bogo City
6024: Boljoon
6008: Borbon
6019: Carcar
6005: Carmen
6006: Catmon
6000: Cebu City
6003: Compostela
6001: Consolacion
6017: Cordova
6013: Daanbantayan
6022: Dalaguete
6004: Danao City
6035: Dumanjug
6028: Ginatilan
6015: Lapu-Lapu City (Opon)
6002: Liloan
6016: Mactan Airport
6053: Madridejos
6029: Malabuyoc
6014: Mandaue
6012: Medellin
6046: Minglanilla
6032: Moalboal
6037: Naga City
6025: Oslob
6048: Pilar
6039: Pinamungajan
6049: Poro
6034: Ronda
6027: Samboan
6018: San Fernando
6050: San Francisco
6011: San Remigio
6047: Santa Fe
6026: Santander
6020: Sibonga
6007: Sogod
6009: Tabogon
6044: Tabuelan
6045: Talisay City
6038: Toledo
6043: Tuburan
6051: Tudela
Compostela Valley[edit]
8803: Compostela
8810: Laak (San Vicente)
8807: Mabini (Doña Alicia)
8806: Maco
8808: Maragusan (San Mariano)
8802: Mawab
8805: Monkayo
8801: Montevista
8800: Nabunturan
8804: New Bataan
8809: Pantukan
North Cotabato[edit]
9413: Alamada
9415: Aleosan
9414: Antipas
9417: Arakan
9416: Banisilan
9408: Carmen
9407: Kabacan
9400: Kidapawan
9411: Libungan
9404: Magpet
9401: Makilala
9406: Matalam
9410: Midsayap
9402: M'Lang
9412: Pigkawayan
9409: Pikit
9405: President Roxas
9403: Tulunan
Davao del Norte[edit]
8102: Asuncion
8118: Babak
8101: Carmen
8113: Kapalong
8120: Kaputian
8104: New Corella
8105: Panabo
8119: Samal City
8112: Santo Tomas
8100: Tagum
Davao del Sur[edit]
8005: Bansalan
8000: Davao City
8002: Digos
8006: Hagonoy
8008: Kiblawan
8004: Magsaysay
8010: Malalag
8003: Matanao
8007: Padada
8001: Santa Cruz
8009: Sulop
Davao Occidental[edit]
8013: Don Marcelino
8014: Jose Abad Santos
8012: Malita
8011: Santa Maria
8015: Sarangani
Davao Oriental[edit]
8200: Mati
8201: Tarragona
8202: Manay
8203: Caraga
8204: Baganga
8205: Cateel
8206: Boston
8207: Lupon
8208: Banaybanay
8209: San Isidro
8210: Governor Generoso
Dinagat Islands[edit]
8413: Basilisa (Rizal)
8411: Cagdianao
8412: Dinagat
8414: Libjo (Albor)
8415: Loreto
8427: San Jose
8426: Tubajon
Eastern Samar[edit]
6822: Arteche
6812: Balangiga
6801: Balangkayan
6800: Borongan
6806: Can-avid
6817: Dolores
6805: General MacArthur
6811: Giporlos
6809: Guiuan
6804: Hernani
6819: Jipapad
6813: Lawaan
6803: Llorente
6820: Maslog
6802: Maydolong
6808: Mercedes
6818: Oras
6810: Quinapondan
6807: Salcedo
6814: San Julian
6821: San Policarpo
6815: Sulat
6816: Taft
Guimaras[edit]
5044: Buenavista
5045: Jordan
5046: Nueva Valencia
5047: San Lorenzo
5048: Sibunag
Ifugao[edit]
3606: Aguinaldo
3608: Alfonso Lista (Potia)
3610: Asipulo
3601: Banaue
3607: Hingyon
3603: Hungduan
3604: Kiangan
3600: Lagawe
3605: Lamut
3602: Mayoyao (Mayaoyao)
3609: Tinoc
Ilocos Norte[edit]
2922: Adams
2916: Bacarra
2904: Badoc
2920: Bangui
2908: Banna (Espiritu)
2906: Batac
2918: Burgos
2911: Carasi
2903: Currimao
2913: Dingras
2921: Dumalneg
2900: Laoag
2907: Marcos
2909: Nueva Era
2919: Pagudpud
2902: Paoay
2917: Pasuquin
2912: Piddig
2905: Pinili
2901: San Nicolas
2914: Sarrat
2910: Solsona
2915: Vintar
Ilocos Sur[edit]
2716: Alilem
2708: Banayoyo
2727: Bantay
2724: Burgos
2732: Cabugao
2710: Candon
2702: Caoayan
2718: Cervantes
2709: Galimuyod
2720: Gregorio del Pilar
2723: Lidlidda
2730: Magsingal
2725: Nagbukel
2704: Narvacan
2721: Quirino (Angkaki)
2711: Salcedo (Baugen)
2722: San Emilio
2706: San Esteban
2728: San Ildefonso
2731: San Juan (Lapog)
2726: San Vicente
2703: Santa
2701: Santa Catalina
2713: Santa Cruz
2712: Santa Lucia
2705: Santa Maria
2707: Santiago
2729: Santo Domingo
2719: Sigay
2733: Sinait
2717: Sugpon
2715: Suyo
2714: Tagudin
2700: Vigan
Iloilo[edit]
5012: Ajuy
5028: Alimodian
5009: Anilao
5033: Badiangan
5018: Balasan
5010: Banate
5007: Barotac Nuevo
5011: Barotac Viejo
5016: Batad
5041: Bingawan
5031: Cabatuan
5040: Calinog
5019: Carles
5013: Concepcion
5035: Dingle
5038: Duenas
5006: Dumangas
5017: Estancia
5022: Guimbal
5029: Igbaras
5000: Iloilo City
5034: Janiuay
5042: Lambunao
5003: Leganes
5043: Lemery
5026: Leon
5030: Maasin
5023: Miagao
5032: Mina
5005: New Lucena
5020: Oton
5037: Passi City
5001: Pavia
5008: Pototan
5015: San Dionisio
5036: San Enrique
5024: San Joaquin
5025: San Miguel
5039: San Rafael
5002: Santa Barbara
5014: Sara
5021: Tigbauan
5027: Tubungan
5004: Zarraga
Isabela[edit]
3306: Alicia
3307: Angadanan
3316: Aurora
3331: Benito Soliven
3322: Burgos
3328: Cabagan
3315: Cabatuan
3305: Cauayan City
3312: Cordon
3326: Delfin Albano
3336: Dinapigui
3335: Divilacan
3309: Echague
3301: Gamu
3300: Ilagan
3313: Jones
3304: Luna
3333: Maconacon
3323: Mallig
3302: Naguillan
3334: Palanan
3324: Quezon
3321: Quirino
3319: Ramon
3303: Reina Mercedes
3320: Roxas
3314: San Agustin
3308: San Guillermo
3310: San Isidro
3317: San Manuel (Callang)
3332: San Mariano
3318: San Mateo
3329: San Pablo
3330: Santa Maria
3311: Santiago City
3327: Santo Tomas
3325: Tumauini
Kalinga[edit]
3801: Balbalan
3808: Rizal (Liwan)
3802: Lubuagan
3803: Pasil
3806: Pinukpuk
3800: Tabuk City
3805: Tanudan
3804: Tinglayan
La Union[edit]
2504: Agoo
2503: Aringay
2515: Bacnotan
2512: Bagulin
2517: Balaoan
2519: Bangar
2501: Bauang
2510: Burgos
2502: Caba
2518: Luna
2511: Naguilian
2508: Pugo
2506: Rosario
2500: San Fernando City
2513: San Gabriel
2514: San Juan
2505: Santo Tomas
2516: Santol
2520: Sudipen
2509: Tubao
Laguna[edit]
4001: Alaminos
4033: Bay
4024: Biñan City
4006: Botocan, Magdalena
4025: Cabuyao City
4027: Calamba City
4012: Calauan
4029: Camp Vicente Lim, Calamba City
4028: Canlubang, Calamba City
4013: Cavinti
4021: Famy
4015: Kalayaan
4004: Liliw
4030: Los Baños
4032: Luisiana
4014: Lumban
4020: Mabitac
4007: Magdalena
4005: Majayjay
4002: Nagcarlan
4016: Paete
4008: Pagsanjan
4017: Pakil
4018: Pangil
4010: Pila
4003: Rizal
4000: San Pablo City
4023: San Pedro City
4009: Santa Cruz
4022: Santa Maria
4026: Santa Rosa City
4019: Siniloan
4031: University of the Philippines, Los Baños
4011: Victoria
Lanao del Norte[edit]
9205: Bacolod
9217: Baloi
9210: Baroy
9200: Iligan
9214: Kapatagan
9215: Sultan Naga Dimaporo (Karomatan)
9202: Kauswagan
9207: Kolambugan
9211: Lala
9201: Linamon
9221: Magsaysay
9206: Maigo
9203: Matungao
9219: Munai
9216: Nunungan
9208: Pantao Ragat
9218: Pantar
9204: Poona Piagapo
9212: Salvador
9213: Sapad
9222: Tagoloan
9220: Tangcal
9209: Tubod
Lanao del Sur[edit]
9316: Bacolod Grande
9302: Balabagan
9318: Balindong
9309: Bayang
9310: Binidayan
9714: Buadiposo-Buntong
9708: Bubong
9320: Bumbaran
9305: Butig
9319: Calanogas
9713: Ditsaan-Ramain
9311: Ganassi
9709: Kapai
9703: Lumba-Bayabao
9307: Lumbatan
9306: Lumbayanague
9308: Lumbaca-Unayan and Macadar Andong
9315: Madalum
9314: Madamba
9715: Maguing
9300: Malabang
9303: Marogong
9711: Marantao
9700: Marawi
9706: Masiu
9702: Mulondo
9312: Pagayawan
9710: Piagapo
9705: Poona Bayabao
9313: Pualas
9701: Saguiaran
9301: Picong (Sultan Gumander)
9321: Tagoloan II
9704: Tamparan
9712: Taraka
9304: Tubaran
9317: Tugaya
9716: Wao
Leyte[edit]
6510: Abuyog
6517: Alangalang
6542: Albuera
6520: Babatngon
6519: Barugo
6525: Bato
6521: Baybay
6516: Burauen
6534: Calubian
6530: Capoocan
6529: Carigara
6515: Dagami
6505: Dulag
6524: Hilongos
6523: Hindang
6522: Inopacan
6539: Isabel
6527: Jaro
6511: Javier
6506: Julita
6531: Kananga
6508: La Paz
6533: Leyte
6509: MacArthur
6512: Mahaplag
6532: Matag-ob
6526: Matalom
6507: Mayorga
6540: Merida
6541: Ormoc
6501: Palo
6538: Palompon
6514: Pastrana
6535: San Isidro
6518: San Miguel
6513: Santa Fe
6536: Tabango
6504: Tabontabon
6500: Tacloban
6502: Tanauan
6503: Tolosa
6528: Tunga
6537: Villaba
Maguindanao[edit]
9609: Ampatuan
9614: Barira
9615: Buldon
9616: Buluan
9600: Cotabato City
9601: Datu Odin Sinsuat (Dinaig)
9617: Datu Paglas
9607: Datu Piang
9618: Gen. S.K. Pendatun
9606: Kabuntalan and Northern Kabuntalan
9613: Matanog
9608: Shariff Aguak (Maganoy)
9610: Pagalungan
9604: Parang
9603: South Upi
9605: Sultan Kudarat and Sultan Mastura
9611: Sultan sa Barongis
9612: Talayan
9602: Upi and Datu Blah T. Sinsuat
Marinduque[edit]
4900: Boac
4901: Mogpog
4902: Santa Cruz
4903: Torrijos
4904: Buenavista
4905: Gasan
Masbate[edit]
5414: Aroroy
5413: Baleno
5412: Balud
5415: Batuan
5421: Buenavista
5405: Cataingan
5409: Cawayan
5419: Claveria
5403: Dimasalang
5407: Esperanza
5411: Mandaon
5400: Masbate City
5410: Milagros
5401: Mobo
5418: Monreal
5404: Palanas
5406: Pio V. Corpuz
5408: Placer
5416: San Fernando
5417: San Jacinto
5420: San Pascual
5402: Uson
Metro Manila[edit]
Caloocan[edit]
1420: Kaybiga / Deparo
1421: Bagumbong / Pag-asa
1422: Novaliches
1423: Lilles Ville Subdivision
1424: Captol Parkland Subdivision
1425: Amparo Subdivision / Dela Costa Homes II Subdivision
1426: Bankers Village
1427: Tala Leprosarium and Victory Heights
1428: Bagong Silang
1400: Caloocan City Central Post Office
1401: Baesa
1402: Santa Quiteria
1403: Grace Park East
1404: San Jose
1405: First Avenue to Seventh Avenue West
1406: Grace Park West
1407: University Hills
1408: Sangandaan
1409: Kaunlaran Village (shared with Malabon City and Navotas)
1410: Maypajo
1411: Fish Market (shared with Navotas)
1412: Isla de Cocomo
1413: Kapitbayahan
Las Piñas[edit]
1740: Las Piñas Central Post Office
1741: Remarville Subdivision
1742: Pulang Lupa and Zapote
1743: Cut-cut
1744: Manuyo
1745: Gatchalian Subdivision
1746: Verdant Acres Subdivision
1747: Moonwalk Subdivision and Talon
1748: Manila Doctors Village
1749: Angela Village
1750: Almanza
1751: T.S. Cruz Subdivision
1752: Soldiers Hills Subdivision*/
$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_backend_users` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The backend users ID users',
  `admin_username` varchar(255) NOT NULL COMMENT 'username',
  `admin_password` varchar(255) NOT NULL COMMENT 'password',
  `user_type` text NOT NULL COMMENT 'the user type',
  `admin_name` char(255) NOT NULL COMMENT 'name of the backend user',
  `admin_email` varchar(255) NOT NULL COMMENT 'email of the backend user',
  `admin_mobile` varchar(255) NOT NULL COMMENT 'mobile of the backend user',
  `creator_id` int(11) NOT NULL COMMENT 'the id of the admin who created this user',
  `created_date` date NOT NULL COMMENT 'the date on which the user was created',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
INSERT INTO `" . DBPREFIX . "_backend_users` (`admin_id`, `admin_username`, `admin_password`, `user_type`, `admin_name`, `admin_email`, `admin_mobile`, `creator_id`, `created_date`) VALUES
(1, 'admin', 'admin', '1', 'admin', 'contact@mywebadmin.in', '999999999', 1, '2014-08-25');

";
$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_backend_usertype` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type_name` text NOT NULL,
  `user_type_dpname` text NOT NULL,
  `allowed_links` text NOT NULL,
  `disallowed_sub_links` text NOT NULL COMMENT 'list of links not allowed in modules',
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
$sql[] = "
INSERT INTO `" . DBPREFIX . "_backend_usertype` (`user_type_id`, `user_type_name`, `user_type_dpname`, `allowed_links`, `disallowed_sub_links`) VALUES
(1, 'admin', 'Admin', '*', '');
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_brands` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The brand ID of the brand',
  `brand_name` text NOT NULL COMMENT 'Name of the Brand ',
  `brand_image` varchar(255) NOT NULL COMMENT 'Image url for brand logo',
  `brand_description` text NOT NULL COMMENT 'Description about the brand',
  `display_status` enum('0','1') NOT NULL DEFAULT '1',
  `created_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `deleted_id` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_carousel` (
  `carousel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `carousel_image` varchar(255) NOT NULL,
  `carousel_link` varchar(255) NOT NULL,
  `carousel_caption` text NOT NULL,
  `display_status` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`carousel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'The category ID',
  `parent_category_id` varchar(65) NOT NULL DEFAULT '0' COMMENT 'This will store the parent category of the sub category. Parent category will have this field 0',
  `category_name` text NOT NULL COMMENT 'Name of the Category',
  `category_image` varchar(255) NOT NULL COMMENT 'Category Image URL',
  `display_status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0=>not displayed, 1=>displayed',
  `created_id` int(11) DEFAULT NULL COMMENT 'User ID of the creator',
  `created_date` datetime DEFAULT NULL,
  `updated_id` int(11) DEFAULT NULL COMMENT 'User ID of the person who will update',
  `updated_date` datetime DEFAULT NULL,
  `deleted_id` int(11) DEFAULT NULL COMMENT 'User ID of the person who will delete',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_orders` (
  `order_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cart_data` text NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `shippingaddress` text NOT NULL,
  `shipping_area` varchar(255) NOT NULL,
  `shipping_PIN` varchar(255) NOT NULL,
  `order_date_time` datetime NOT NULL,
  `is_viewed` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";
$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_product` (
  `product_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Id of the product',
  `product_name` text NOT NULL COMMENT 'Name of the product',
  `product_image` varchar(255) NOT NULL COMMENT 'Image Url of the product',
  `is_new` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'Is 1 if the product is displayed to be a new product',
  `is_featured` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'Is 1 if the product is displayed in featured product',
  `product_features` text NULL COMMENT 'features of the product(HTML)',
  `product_ingredients` text NULL COMMENT 'Ingredients in product(HTML)',
  `product_price` double NOT NULL COMMENT 'MRP of the Product',
  `discount_price` double NULL COMMENT 'The discounted price of the product',
  `discount_percent` float NULL COMMENT 'The discounted percentage of the product',
  `discount_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'to use discounted price or not',
  `display_status` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'The product to be displayed Or not',
  `category_id` varchar(255) DEFAULT NULL COMMENT 'Category Ids of the product(comma seperated if multiple)',
  `subcategory_id` varchar(255) DEFAULT NULL COMMENT 'Sub-Category Ids of the product(comma seperated if multiple)',
  `brands_id` bigint(20) DEFAULT NULL COMMENT 'Brand Id of the product',
  `manufacturer_id` varchar(255) NULL COMMENT 'The id of the manufacturer',
  `vendor_ids` varchar(255) NULL COMMENT 'Comma Seperated Vendor Ids for this product',
  `created_id` varchar(255) DEFAULT NULL COMMENT 'Id of the creator',
  `created_date` datetime DEFAULT NULL COMMENT 'Date of creation of the product',
  `updated_id` varchar(255) DEFAULT NULL COMMENT 'Id of the updater',
  `updated_date` datetime DEFAULT NULL COMMENT 'Date of updation of the product',
  `deleted_id` varchar(255) DEFAULT NULL COMMENT 'Id of the deleter',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Date of deletion of the product',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
INSERT INTO `" . DBPREFIX . "_product` (`product_name`, `product_image`, `product_price`) VALUES
('Assorted Capiz', '/images/uploads/product/parul1.jpg', '5000'),
('Larntern 1', '/images/uploads/product/parul2.jpg', '15000'),
('Larntern 2', '/images/uploads/product/parul3.jpg', '10000'),
('Larntern 3', '/images/uploads/product/parul4.jpg', '25000'),
('Larntern 4', '/images/uploads/product/parul5.jpg', '35000'),
('Larntern 5', '/images/uploads/product/parul6.jpg', '45000'),
('Larntern 6', '/images/uploads/product/parul7.jpg', '15000'),
('Larntern 7', '/images/uploads/product/parul8.jpg', '75000'),
('Larntern 8', '/images/uploads/product/parul9.jpg', '25000');
";
$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_purchase_invoice` (
  `invoice_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'The ID of a particular purchase invoice',
  `vendor_ids` varchar(255) NOT NULL COMMENT 'The id of the vendor',
  `invoice_item_ids` varchar(255) NOT NULL COMMENT 'Comma seperated ids of the items purchased',
  `purchaser` int(11) NOT NULL COMMENT 'the id of the user who purchased',
  `purchase_date` date NOT NULL COMMENT 'The date of purchase',
  `transportation_cost` double NOT NULL COMMENT 'The cost of transportation',
  `total_purchase_cost` double NOT NULL COMMENT 'The total cost of purchase',
  `total_mrp` double NOT NULL COMMENT 'The total mrp of purchase',
  `total_margin` double NOT NULL COMMENT 'The total margin obtained from the transaction',
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_purchase_invoice_items` (
  `purchase_invoice_item_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'The id of the purchased item',
  `purchase_master_id` bigint(20) NOT NULL COMMENT 'The id of the master invoice',
  `quantity` double NOT NULL COMMENT 'The quantity of the item purchased',
  `purchase_rate` double NOT NULL COMMENT 'The rate at which item was purchased per unit',
  `total_purchase_rate` double NOT NULL COMMENT 'The total purchase rate of the total quantity',
  `item_purchase_date` date NOT NULL COMMENT 'The date of purchase',
  `mrp_item` double NOT NULL COMMENT 'The selling or mrp of the item',
  `item_margin` double NOT NULL COMMENT 'This stores the margin obtained from each item',
  `vendor_id` varchar(255) NOT NULL COMMENT 'the id of the vendor',
  `product_id` bigint(20) NOT NULL COMMENT 'The id of the product purchased',
  PRIMARY KEY (`purchase_invoice_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_sales` (
  `order_id` bigint(20) NOT NULL,
  `customer_id` bigint(20) NOT NULL,
  `vendor_ids` text NULL,
  `order_date` datetime NOT NULL,
  `shipping_address` text NOT NULL,
  `shipping_area` text NOT NULL,
  `shipping_pin` int(11) NOT NULL,
  `product_ids` text NOT NULL,
  `product_quantities` text NOT NULL,
  `delivered_by` bigint(20) NULL,
  `created_by` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `present_status` enum('0','1') NOT NULL,
  `application_status` enum('1','2','3','4') NOT NULL,
  `date_created` date NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_tmpcart` (
  `cart_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cart_data` text NOT NULL,
  UNIQUE KEY `cart_id` (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `firstname` text NULL,
  `middlename` text NULL,
  `lastname` text NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `gender` enum('Male','Female') NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(10) NULL DEFAULT '',
  `telephone` varchar(15) NULL DEFAULT '',
  `city` varchar(50) NULL DEFAULT '',
  `address` text NULL,
  `shippingaddress` text NULL,
  `PIN` varchar(255) NULL,
  `shipping_PIN` varchar(255) NULL,
  `area` varchar(255) NULL,
  `shipping_area` varchar(255) NULL,
  `previouscart` text NULL,
  `updatedon` datetime NULL,
  `is_deleted` enum('0','1') NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
";

$sql[] = "
CREATE TABLE IF NOT EXISTS `" . DBPREFIX . "_vendors` (
  `vendor_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Id of the vendor',
  `vendor_name` char(128) NOT NULL COMMENT 'Name of the vendor',
  `vendor_address` text NOT NULL COMMENT 'address of the vendor(HTML)',
  `vendor_pin` varchar(255) NOT NULL COMMENT 'PINCODE of the vendor',
  `vendor_email` varchar(255) NOT NULL,
  `vendor_mobile` text NOT NULL COMMENT 'mobile number of the vendor(Comma Seperated if multiple)',
  `vendor_phone` text NOT NULL COMMENT 'Phone number of the vendor(Comma Seperated if multiple)',
  `vendor_area` varchar(255) NOT NULL COMMENT 'Area of the vendor(Comma Seperated if multiple)',
  `created_id` bigint(20) DEFAULT NULL COMMENT 'Id of the row creator',
  `created_date` datetime DEFAULT NULL COMMENT 'Created Date',
  `updated_id` bigint(20) DEFAULT NULL COMMENT 'Id of the row updater',
  `updated_date` datetime DEFAULT NULL COMMENT 'Updated Date',
  `deleted_id` bigint(20) DEFAULT NULL COMMENT 'Id of the row deleter',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted Date',
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

";
$conn = mysqli_connect(DBHOSTNAME, DBUSER, DBPWD) OR die('Connection to MySql Server could not be established');
mysqli_select_db($conn, DBNAME) OR die('Database not found');
foreach ($sql as $query) {
  mysqli_query($conn, $query) OR die('Could not create tables');
}
?>