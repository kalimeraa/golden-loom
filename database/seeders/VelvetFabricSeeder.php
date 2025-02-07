<?php

namespace Database\Seeders;

use App\Models\Curtain;
use Illuminate\Database\Seeder;

class VelvetFabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $velvetFabric = Curtain::create([
            'title' => [
                'en' => 'Velvet Fabric Curtains',
                'tr' => 'Kadife Kumaş Perdeler',
                'ru' => 'Шторы из бархатной ткани',
            ],
            'slug' => 'velvet-fabrics',
            'short_description' => [
                'en' => 'Luxurious , elegant and insulating',
                'tr' =>'Lüks, zarif ve yalıtıcı',
                'ru' => 'Роскошный, элегантный и изолирующий'
            ],
            'description' => [
                'en' => '<p style="color:#000">Velvet curtains are a classic choice for adding richness, warmth, and sophistication to any space. Known for their soft, plush texture and deep colors, they provide excellent insulation and light-blocking properties, making them ideal for both aesthetic and functional purposes.

</p>Benefits of Velvet Curtains:

            <ul>
              <li style="color:#000">
                Luxurious Appearance – The smooth, rich texture adds a touch of elegance and opulence. </li style="color:#000">
              <li style="color:#000">
                Excellent Insulation – Helps maintain room temperature by keeping heat in during winter and blocking out heat in summer.


              </li>
              <li style="color:#000">
             Sound Absorption – The thick fabric reduces noise, making rooms quieter and more peaceful.

              </li>
               <li style="color:#000">
                Light-Blocking Properties – Provides privacy and can significantly reduce sunlight, especially when lined.


              </li>
              <li style="color:#000">
               Durable & Long-Lasting – High-quality velvet curtains are heavy-duty and resist wear over time.
              </li>
            </ul>
            ',
                'tr' => '<p style="color:#000">Kadife perdeler, her mekana zenginlik, sıcaklık ve zarafet katmak için klasik bir seçimdir. Yumuşak, peluş dokusu ve koyu renkleriyle bilinen bu perdeler, mükemmel yalıtım ve ışık engelleme özellikleri sunarak hem estetik hem de işlevsel amaçlar için idealdir.

</p>Kadife Perdelerin Faydaları:

<ul>
<li style="color:#000">
Lüks Görünüm – Pürüzsüz, zengin dokusu, bir miktar zarafet ve ihtişam katar. </li style="color:#000">
<li style="color:#000">
Mükemmel Yalıtım – Kışın ısıyı içeride tutarak ve yazın ısıyı engelleyerek oda sıcaklığının korunmasına yardımcı olur.

</li>
<li style="color:#000">
Ses Emilimi – Kalın kumaş gürültüyü azaltarak odaları daha sessiz ve daha huzurlu hale getirir.

</li>
<li style="color:#000">
Işık Engelleyici Özellikler – Gizlilik sağlar ve özellikle astarlandığında güneş ışığını önemli ölçüde azaltabilir.

</li>
<li style="color:#000">
Dayanıklı ve Uzun Ömürlü – Yüksek kaliteli kadife perdeler ağır hizmet tipi olup zamanla aşınmaya karşı dayanıklıdır.
</li>
</ul>',
      'ru' => '<p style="color:#000">Бархатные шторы — классический выбор для добавления богатства, тепла и изысканности в любое пространство. Известные своей мягкой, бархатистой текстурой и глубокими цветами, они обеспечивают превосходную изоляцию и светоблокирующие свойства, что делает их идеальными как для эстетических, так и для функциональных целей.

</p>Преимущества бархатных штор:

<ul>
<li style="color:#000">
Роскошный внешний вид — гладкая, богатая текстура добавляет нотку элегантности и роскоши. </li style="color:#000">
<li style="color:#000">
Отличная изоляция — помогает поддерживать температуру в помещении, сохраняя тепло зимой и блокируя жару летом.

</li>
<li style="color:#000">
Звукопоглощение — плотная ткань снижает уровень шума, делая комнаты тише и спокойнее.

</li>
<li style="color:#000">
Светоблокирующие свойства — обеспечивают конфиденциальность и могут значительно уменьшить солнечный свет, особенно при наличии подкладки.

</li>
<li style="color:#000">
Прочные и долговечные — высококачественные бархатные шторы прочны и устойчивы к износу с течением времени.
</li>
</ul>',
            ],
            'image' => 'images/velvet-welcome.jpeg',
        ]);

        $velvetFabric->files()->create([
            'path' => 'images/velvet/1.jpeg',
            'order' => 0,
        ]);

        $velvetFabric->files()->create([
            'path' => 'images/velvet/2.jpeg',
            'order' => 1,
        ]);

        $velvetFabric->files()->create([
            'path' => 'images/velvet/3.jpeg',
            'order' => 2,
        ]);

        $velvetFabric->files()->create([
            'path' => 'images/velvet/4.jpeg',
            'order' => 3,
        ]);

        $velvetFabric->files()->create([
            'path' => 'images/velvet/5.jpeg',
            'order' => 4,
        ]);

    }
}
