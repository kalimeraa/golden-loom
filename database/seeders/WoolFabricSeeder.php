<?php

namespace Database\Seeders;

use App\Models\Curtain;
use Illuminate\Database\Seeder;

class WoolFabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $woolFabric = Curtain::create([
            'title' => [
                'en' => 'Wool Fabric Curtains',
                'tr' => 'Yün Kumaş Perdeler',
                'ru' => 'Шторы из шерстяной ткани',
            ],
            'slug' => 'wool-fabrics',
            'short_description' => [
                'en' => 'Warm , durable and luxurious',
                'tr' =>'Sıcak, dayanıklı ve lüks',
                'ru' => 'Теплый, прочный и роскошный'
            ],
            'description' => [
                'en' => '<p style="color:#000">Wool fabric curtains are a premium choice for those looking for warmth, durability, and an elegant touch. Wool is naturally insulating, making it ideal for colder climates or rooms that need extra coziness
</p>Benefits of Wool Curtains:

            <ul>
              <li style="color:#000">
                Excellent Insulation – Wool is a natural thermal insulator, keeping rooms warm in winter and cool in summer.
Noise Reduction – The dense fibers of wool help absorb sound, making it great for reducing echoes and outside noise.
</li style="color:#000">
              <li style="color:#000">
               Durability – Wool is strong, long-lasting, and resistant to wear and tear.



              </li>
              <li style="color:#000">
             Elegant Appearance – Wool drapes beautifully, adding a rich and sophisticated look to any space.

              </li>
               <li style="color:#000">
                Flame-Resistant – Unlike synthetic fabrics, wool has natural fire-resistant properties, making it a safer option.



              </li>
              <li style="color:#000">
               Moisture-Wicking – Wool helps regulate humidity by absorbing and releasing moisture, preventing dampness and mold.

              </li>
            </ul>
            ',
                'tr' => '<p style="color:#000">Yün kumaş perdeler, sıcaklık, dayanıklılık ve zarif bir dokunuş arayanlar için birinci sınıf bir seçimdir. Yün doğal olarak yalıtkandır ve bu da onu daha soğuk iklimler veya ekstra rahatlığa ihtiyaç duyan odalar için ideal hale getirir
</p>Yün Perdelerin Faydaları:

<ul>
<li style="color:#000">
Mükemmel Yalıtım – Yün doğal bir ısı yalıtkanıdır ve odaları kışın sıcak, yazın serin tutar.
Gürültü Azaltma – Yünün yoğun lifleri sesi emmeye yardımcı olur ve yankıları ve dış gürültüyü azaltmak için harika hale getirir.
</li style="color:#000">
<li style="color:#000">
Dayanıklılık – Yün güçlü, uzun ömürlü ve aşınmaya ve yıpranmaya karşı dayanıklıdır.

</li>
<li style="color:#000">
Zarif Görünüm – Yün güzelce örtülür ve her alana zengin ve sofistike bir görünüm katar.

</li>
<li style="color:#000">
Aleve Dayanıklı – Sentetik kumaşların aksine, yün doğal yangına dayanıklı özelliklere sahiptir ve bu da onu daha güvenli bir seçenek haline getirir.

</li>
<li style="color:#000">
Nem Emici – Yün, nemi emerek ve serbest bırakarak nemi düzenlemeye yardımcı olur, rutubeti ve küfü önler.

</li>
</ul>',
      'ru' => '<p style="color:#000">Шторы из шерстяной ткани — это первоклассный выбор для тех, кто ищет тепло, долговечность и элегантность. Шерсть обладает естественными изолирующими свойствами, что делает ее идеальной для холодного климата или помещений, которым нужен дополнительный уют
</p>Преимущества шерстяных штор:

<ul>
<li style="color:#000">
Отличная изоляция — шерсть является естественным теплоизолятором, сохраняя тепло в помещениях зимой и прохладу летом.

Шумоподавление — плотные волокна шерсти помогают поглощать звук, что делает ее отличным средством для уменьшения эха и внешнего шума.
</li style="color:#000">
<li style="color:#000">
Долговечность — шерсть прочная, долговечная и устойчивая к износу.

</li>
<li style="color:#000">
Элегантный внешний вид — шерсть красиво драпируется, добавляя богатый и изысканный вид любому пространству.

</li>
<li style="color:#000">
Огнестойкость — в отличие от синтетических тканей шерсть обладает естественными огнестойкими свойствами, что делает ее более безопасным вариантом.

</li>
<li style="color:#000">
Влагоотводящая — шерсть помогает регулировать влажность, впитывая и выделяя влагу, предотвращая появление сырости и плесени.

</li>
</ul>',
            ],
            'image' => 'images/wool-welcome.jpeg',
        ]);

        $woolFabric->files()->create([
            'path' => 'images/wool/1.jpeg',
            'order' => 0,
        ]);

        $woolFabric->files()->create([
            'path' => 'images/wool/2.jpeg',
            'order' => 1,
        ]);

        $woolFabric->files()->create([
            'path' => 'images/wool/3.jpeg',
            'order' => 2,
        ]);

        $woolFabric->files()->create([
            'path' => 'images/wool/4.jpeg',
            'order' => 3,
        ]);

        $woolFabric->files()->create([
            'path' => 'images/wool/5.jpeg',
            'order' => 4,
        ]);

    }
}
