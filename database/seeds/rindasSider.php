<?php

use Illuminate\Database\Seeder;

class rindasSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('rindas')->get()->count() == 0){

            DB::table('rindas')->insert([

                [
                    'slug' => str_slug('SIA "Fenikss-KO" '),
                    'fotoLinks' => 'images/bildes/IM000098.jpg',
                    'vietaLimeni' => 1,
                    'lapa_id' => 1,
                    'nosaukums_lv' => 'Par mums',
                    'nosaukums_en' => 'About us',
                    'nosaukums_ru' => 'Про нас',
                    'raksts_lv' => '
SIA "Fenikss-KO" ir dibināta 1992.gada 15.aprīlī. Mūsu uzņēmums nodarbojas ar metālizstrādājumu izgatavošanu un restaurāciju.
Visi ar metālizstrādājumu izgatavošanu un restaurāciju saistītie darbi tiek veikti Metālkalšanas un restaurācijas darbnīcā "PUNDURĪŠI".
Firmas valdes priekšsēdētājs - Uldis Osis, valdes loceklis - Ārija Slišāne.
Mūsu devīze – No zīmējuma(skices) līdz gatavam produktam.
Firma savas darbības laikā ir uzkrājusi lielu praktisko pieredzi.
Mūsu darbus var apskatīt daudzās Latvijas pilsētās un ciemos, ka arī Igaunijā,Tallinā un Krievijā. ',

                    'raksts_en' => '
Fenikss-ko Ltd. was founded on April 15, 1992. Our company specializes in hardware manufacturing as well as restoration. Entire process connected with hardware manufacturing and restoration is being accomplished in Hammered work and restoration workshop "PUNDURĪŠI" The president of Fenikss-ko Ltd. - Uldis Osis, vice president - Arija Slisane.
Company device - from a drawing (sketch) to finished product.
From year to year company has accumulated great practical experience.
Our works can be seen in many cities and villages in Latvia as well as abroad in Estonia and Russia.',

                    'raksts_ru' => '
Фирма SIA„Fenikss-KO” основана 15 апреля 1992 года. Наше предприятие занимается изготовлением и реставрацией металлоизделий.
Все работы связанные с изготовлением и реставрацией проводятся в мастерской ковки металла и реставрации „Pundurīši”.
Президент фирмы – Uldis Osis, вице-президент – Ārija Slišāne.
Наш девиз – от эскиза до готового продукта.
Фирма во время своей деятельности накопила большой практический опыт. Наши работы возможно осмотреть во многих городах Латвии, а также в Эстонии, в Таллине, и в России.',

                    'ir_publisks' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('Sadarbojamies ar daudzām" '),
                    'fotoLinks' => 'images/bildes/IM000099.jpg',
                    'vietaLimeni' => 2,
                    'lapa_id' => 1,
                    'nosaukums_lv' => '',
                    'nosaukums_en' => '',
                    'nosaukums_ru' => '',
                    'raksts_lv' => '
                    Sadarbojamies ar daudzām lielām celtniecibas firmām Latvijā, tādām kā SIA RE&RE”,
                    “RBS SKALS”, “Mūsu māja”, “VELVE”, “Montāžnieks-D”, RRB u.c., kā ari darbojamies privātajā sektorā.
Mūsu  darbus var apskatīt : Vācu vēstniecība Tallinā, Mazā Ģilde Rīgā, ASV vēstniecība Rīgā, Baltkrievijas vēstniecība Rīgā,
Franču vēstniecība Rīgā,  viesnīca “Ļatvija”, “Bergs”, uzņēmums “Latvijas Balzāms”, Latvijas Banka, Nacionālais Teātris Rīgā,
Ķīpsalas dzīvojamais rajons, Tirdzniecības centrs “Bergu Bazārs”, Centrālā dzelzceļa stacija Rīgā utt. ',

                    'raksts_en' => '
                    We collaborate with many large construction companies such as RE&RE Ltd., “RBS SKALS”, “Musu maja”, “VELVE”, “Montažnieks-D”,
                     RRB a.o. Our works can be seen in: German embassy in Tallin, Small Guild in Riga, USA embassy in Riga,
                     Byelorussia embassy in Riga, French embassy in Riga, Hotel "Latvija", "Bergs", "Latvijas Balzams",
                     Bank of Latvia, National Theatre in Riga, living area in Kipsala, Trade centre "Bergu Bazars",
                     Central Railway station in Riga etc.',

                    'raksts_ru' => '
Мы сотрудничаем многими строительными фирмами; с такими как ООО „Re&Re”, „RBS SKALS”, „Mūsu Māja”, „Montāžnieks-D”, RRB и.д., а также работаем в частном секторе.
Наши работы возможно осмотреть: посольство Германии в Таллине, Малая Гильдия в Риге, посольства США, Франции и Белоруссии в Риге,
гостиница „Latvija”, „Bergs”, предприятие „Latvijas Balzāms”, Банк Латвии, жилой район Кипсала, торговый центр „Berga Bazārs”, центральный железнодорожный вокзал в Риге, и.т.д.',

                    'ir_publisks' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('musu pakalpojumi'),
                    'fotoLinks' => 'images/bildes/IM000078.jpg',
                    'vietaLimeni' => 1,
                    'lapa_id' => 2,
                    'nosaukums_lv' => '',
                    'nosaukums_en' => '',
                    'nosaukums_ru' => '',
                    'raksts_lv' => 'Žogi, vārti, terases, dažāda veida trepes, to konstrukcijas, margas, durvju,
                    logu režģi (t.sk.sabīdāmie), kamīna apdare un piederumi, gaismas ķermeņi – lustras, BRA, ielu lukturi,
                    reklāmu izkārtnes, dārza dekori, vēja rādītāji, logu, durvju furnitūra, dažāda veida lējumi no
                    krāsainā metāla, metāla darbu restaurācija, mākslas darbu kopiju izgatavošana.
Strādājam ar melno, krāsaino metālu, nerūsējošo tēraudu.
Firmā strādā  kvalificēti, izglītoti, ar lielu darba pieredzi apveltīti metālmākslinieki, metāldizaineri un restauratori.
Firmas “Fenikss-KO” darbinieki jūs labprāt konsultēs un palīdzēs īstenot jebkuru jūsu ieceri- sākot ar projekta skicēm
un beidzot ar gatavo konstrukciju montāžu!
Piedāvājam foto un skiču albumus,  reklāmas video filmu.',

                    'raksts_en' => 'Fences, gates, terraces, various types of stair constructions, railings, door
                    and window grids, fireplace onlay and accessories, illuminators – chandeliers, street illuminators,
                     advertisement signs, garden decors, weather-vanes, window, door furniture, various types of non-ferrous
                     metal castings, hardware restoration, artwork copy manufacturing.
                     Metals used in manufacturing process – ferrous metal, non-ferrous metal, stainless steel.
                    Company employs well qualified, professionally educated and highly experienced metal artists, metal
                    designers and renovators. Fenikss-ko Ltd. employees are always responsive to consult and help
                    materializing every clients wish starting from sketch to construction montage!',

                    'raksts_ru' => '
                         Заборы, ворота, террасы, различные лестницы и их конструкции, перила, решетки окон и дверей
                         (в том числе – раздвижные), отделка камина и принадлежности, светильники – люстры, уличные фонари,
                         рекламные вывески, декоры сада, стрелки ветра, фурнитура окон и дверей, различные отливки из
                         цветного металла, реставрация изделии из металла, изготовление копии художественных работ.
                         Работаем с черным и цветным металлом, с нержавеющей сталью.
                         В фирме работают квалифицированные художники по металлу, художники – дизайнеры и реставраторы с соответствующим образованием и с большим практическим опытом.
                         Работники нашей фирмы охотно проконсультируют Вас и помогут осуществить любой Ваш замысел – с эскизов проекта до монтажа готовой конструкции.
                         Предлагаем альбомы с фотографиями и эскизами, а также рекламный видеофильм.',

                    'ir_publisks' =>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('buj '),
                    'fotoLinks' => '',
                    'vietaLimeni' => 1,
                    'lapa_id' => 4,
                    'nosaukums_lv' => 'Jūs jautājat',
                    'nosaukums_en' => 'FAQ',
                    'nosaukums_ru' => 'Interesno',
                    'raksts_lv' => '
<p class="lead">J: Cik tas maksā?</p>
<p>A: Pie katra pasūtījuma strādā mākslinieks- dizainris, inženieris un pats kalējs. Cenšamies reailzēt visas Jūsu idejas, lai JŪs būtu vairāk, kā apmierināts ar rezultātu. Tomēr cenu lielākoties nosaka Jūsu izvēlētais materiāls, izstrādājuma saražģītības pakāpe un pārklājums. Bet neskatoties uz roku darbu un sarežģīto izgatavošanas procesu mūsu pakalpojumu var atļauties jebkurš priātmājas īpašnieks.</p>

<p class="lead">J: Cik ātrā laikā varat izgatavot pasūtījumu?</p>
<p>A: Izgatavošanas laiks atkarīgs no apjoma un sarežģītības, bet izgatavošanu uzsāksim 2-3 dienu laikā pēc līguma noslēgšanas.</p>

<p class="lead">J: Vai varat uzstādīt?</p>
<p>A: Varam piegādāt un uzstādīt. Par izmaksām un termiņiem vienosimies pie līguma noslēgšanas.</p>

<p class="lead">J: Vai Jūs dodat garantiju?</p>
<p>A: Kā jebkuram produktam dodam garantiju 2 gadi privātpersonām un 1 gads uzņēmumiem. Pēc garantijas, ja nepieciešams, veicam apkopi un remontu.</p>

<p class="lead">J: No kāda mteriāla izgatavojat?</p>
<p>A: Varam izgatavot no jebkura Jūsu izvēlēta metāla - melnā, krāsainā, sakausējumiem. Jāņem vērā, ka tram materiālam isr savas specifiskās īpašības. Uzklausīsim Jūsu vēlmes un kopā izvēlēsimies piemērotāko. Jūs varat izmantot savu materiālu, bet mēs dodam priekšroku jau pārbaudītiem materiālu piegādātājiem.</p>

<p class="lead">J: Vai Jūs varat apzeltīt?</p>
<p>A: Piedāvājam visus pēcapstrādes un pārklājuma veidus: ar smišu strūklu, pulēšanu, niķelēšanu, hromēšanu, apzeltīšanu utt. Galvenais, lai pārklājums atbilsu produktam.</p>

<p class="lead">J: Vai vārtus varat aprīkot ar automātiku?</p>
<p>A: Protams uzstādām automātiku. Jūs varaat izvēlēties savu (atbilstošu esošai sistēmai) vai varam piedāvāt jaunu. Vārtus varam aprīkot ar piekļuves kontroli (atveramus ar pulti, ar ID karti vai ar mobilo telefonu).</p>

<p class="lead">J: Kas man jādara lai veiktu pasūtījumu?</p>
<p>A: Vieglākais veids ir aizpildīt formu. Mūsu menedžeris sazināsies ar jums un norunās tikšanos. Jūs varēsiet ierasties pie mums vai mūsu menedžeris apmeklēs Jūsu izvēlētā vietā. Pēc līgums noslēgšanas jāiemeksā 50% priekšapmaksa. Galīgais norēķins pirms uzstādīšanas dienas.</p>',

                    'raksts_en' => 'Q: How much?',

                    'raksts_ru' => 'B: Skolko?',

                    'ir_publisks' =>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('kontaktinfo '),
                    'fotoLinks' => '',
                    'vietaLimeni' => 1,
                    'lapa_id' => 5,
                    'nosaukums_lv' => 'Sazinieties ar mums',
                    'nosaukums_en' => 'Contact us',
                    'nosaukums_ru' => 'Zvonite',
                    'raksts_lv' => 'Aizpildiet formu un mūsu menedžeris sazināsies ar Jums tuvākajā laikā.',

                    'raksts_en' => 'Fill in the form',

                    'raksts_ru' => 'Заполните форму',

                    'ir_publisks' =>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('fotogalerija '),
                    'fotoLinks' => '',
                    'vietaLimeni' => 1,
                    'lapa_id' => 3,
                    'nosaukums_lv' => 'Mūsu darbi',
                    'nosaukums_en' => 'Masterpieces',
                    'nosaukums_ru' => 'Dostežeņija',
                    'raksts_lv' => '',
                    'raksts_en' => '',
                    'raksts_ru' => '',

                    'ir_publisks' =>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('video '),
                    'fotoLinks' => 'kontakti',
                    'fotoThumb' => 'fotogalerija',
                    'vietaLimeni' => 1,
                    'lapa_id' => 6,
                    'nosaukums_lv' => 'Realizējam Jūsu idejas metālā!',
                    'nosaukums_en' => 'Realize your ideas from steel!',
                    'nosaukums_ru' => 'Реализуйте свои идеи в сталь!',
                    'raksts_lv' => 'Katrs mūsu izstrādājums ir mākslasdarbs <br>
                        ja Jums tāds ir vajadzīgs:',
                    'raksts_en' => 'Each of our products is an artwork',
                    'raksts_ru' => 'Каждый из наших продуктов - это произведение искусства',

                    'ir_publisks' =>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('parallax '),
                    'fotoLinks' => 'images/bildes/parallax.jpg',
                    'vietaLimeni' => 1,
                    'lapa_id' => 7,
                    'nosaukums_lv' => 'No Jūsu idejas līdz realizācijai ir tikai solis!',
                    'nosaukums_en' => 'No Jūsu idejas līdz realizācijai ir tikai solis!',
                    'nosaukums_ru' => 'No Jūsu idejas līdz realizācijai ir tikai solis!',
                    'raksts_lv' => 'Izstāstiet savu ideju, mēs to realizēsim!',
                    'raksts_en' => 'Izstāstiet savu ideju, mēs to realizēsim!',
                    'raksts_ru' => 'Izstāstiet savu ideju, mēs to realizēsim!',

                    'ir_publisks' =>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'slug' => str_slug('akcija '),
                    'fotoLinks' => 'kontakti',
                    'vietaLimeni' => 1,
                    'lapa_id' => 8,
                    'nosaukums_lv' => 'Akcija !',
                    'nosaukums_en' => 'Action',
                    'nosaukums_ru' => 'Akcija RU',
                    'raksts_lv' => 'Veiciet pasūtījumu līdz Lieldienām un saņemiet visiem kalšanas darbiem atlaidi 20% apmērā!',
                    'raksts_en' => 'EN raksts',
                    'raksts_ru' => 'Ru raksts',

                    'ir_publisks' =>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT \n"; }
    }
}
