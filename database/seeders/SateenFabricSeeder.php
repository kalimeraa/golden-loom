<?php

namespace Database\Seeders;

use App\Models\Curtain;
use Illuminate\Database\Seeder;

class SateenFabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sateenlFabric = Curtain::create([
            'title' => [
                'en' => 'Sateen Fabric Curtains',
                'tr' => 'Saten Kumaş Perdeler',
                'ru' => 'Шторы из атласной ткани',
            ],
            'slug' => 'sateen-fabrics',
            'short_description' => [
                'en' => 'Smooth , elegant and light-reflective',
                'tr' =>'Pürüzsüz, zarif ve ışığı yansıtan',
                'ru' => 'Гладкий, элегантный и светоотражающий'
            ],
            'description' => [
                'en' => '<p style="color:#000">Sateen fabric curtains offer a luxurious, silky feel with a soft sheen, making them a stylish choice for modern and elegant interiors. Made from tightly woven cotton or synthetic fibers, sateen has a smooth surface that enhances light reflection and drapes beautifully.

</p>Benefits of Sateen Curtains:


            <ul>
              <li style="color:#000">
               Soft & Silky Texture – Feels smooth to the touch, adding a refined look to any room.


</li style="color:#000">
              <li style="color:#000">
              Light Sheen – Offers a subtle shine that enhances the elegance of your space.
.



              </li>
              <li style="color:#000">
             Good Insulation – Helps regulate temperature, keeping rooms comfortable year-round.


              </li>
               <li style="color:#000">
               Durable & Strong – Tightly woven fibers make it resistant to wear and tear.




              </li>
              <li style="color:#000">
              Wrinkle-Resistant – Unlike regular cotton, sateen has a natural resistance to creases.
              </li>
            </ul>
            ',
                'tr' => '<p style="color:#000">Saten kumaş perdeler, yumuşak bir parlaklığa sahip lüks ve ipeksi bir his sunarak, modern ve zarif iç mekanlar için şık bir seçimdir. Sık dokunmuş pamuk veya sentetik elyaflardan üretilen saten, ışık yansımasını artıran ve güzelce dökülen pürüzsüz bir yüzeye sahiptir.

</p>Saten Perdelerin Faydaları:


 <ul>
 <li style="color:#000">
 Yumuşak ve İpeksi Dokusu – Dokunulduğunda pürüzsüz bir his verir, her odaya rafine bir görünüm katar.


</li style="color:#000">
 <li style="color:#000">
 Hafif Parlaklık – Mekanınızın zarafetini artıran ince bir parlaklık sunar.
.



 </li>
 <li style="color:#000">
 İyi Yalıtım – Sıcaklığı düzenlemeye yardımcı olur, odaların yıl boyunca konforlu kalmasını sağlar.


 </li>
 <li style="color:#000">
 Dayanıklı ve Güçlü – Sıkı dokunmuş lifler, aşınma ve yıpranmaya karşı dayanıklı olmasını sağlar.




 </li>
 <li style="color:#000">
 Kırışmaya Dayanıklı – Saten, normal pamuğun aksine, kırışmaya karşı doğal bir dirence sahiptir.
 </li>
 </ul>',
      'ru' => '<p style="color:#000">Шторы из сатиновой ткани создают роскошное, шелковистое ощущение с мягким блеском, что делает их стильным выбором для современных и элегантных интерьеров. Сатин, изготовленный из плотно сотканных хлопковых или синтетических волокон, имеет гладкую поверхность, которая усиливает отражение света и красиво драпируется.

</p>Преимущества сатиновых штор:

<ul>
<li style="color:#000">
Мягкая и шелковистая текстура — гладкая на ощупь, добавляет изысканный вид любой комнате.

</li style="color:#000">
<li style="color:#000">
Легкий блеск — обеспечивает легкий блеск, который подчеркивает элегантность вашего пространства.
.

</li>
<li style="color:#000">
Хорошая изоляция — помогает регулировать температуру, сохраняя комфорт в комнатах круглый год.

</li>
<li style="color:#000">
Прочный и крепкий — плотно сплетенные волокна делают его устойчивым к износу и разрывам.

</li>
<li style="color:#000">
Не мнется — в отличие от обычного хлопка, сатин обладает естественной устойчивостью к складкам.
</li>
</ul>',
            ],
            'image' => 'images/sateen-welcome.jpeg',
        ]);

        $sateenlFabric->files()->create([
            'path' => 'images/sateen/1.jpeg',
            'order' => 0,
        ]);

        $sateenlFabric->files()->create([
            'path' => 'images/sateen/2.jpeg',
            'order' => 1,
        ]);

        $sateenlFabric->files()->create([
            'path' => 'images/sateen/3.jpeg',
            'order' => 2,
        ]);

        $sateenlFabric->files()->create([
            'path' => 'images/sateen/4.jpeg',
            'order' => 3,
        ]);

        $sateenlFabric->files()->create([
            'path' => 'images/sateen/5.jpeg',
            'order' => 4,
        ]);

        $sateenlFabric->files()->create([
            'path' => 'images/sateen/6.jpeg',
            'order' => 5,
        ]);

    }
}
