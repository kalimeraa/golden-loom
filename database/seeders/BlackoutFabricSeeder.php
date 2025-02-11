<?php

namespace Database\Seeders;

use App\Models\Curtain;
use Illuminate\Database\Seeder;

class BlackoutFabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blackoutFabrics = Curtain::create([
            'title' => [
                'en' => 'Blackout Fabric Curtains',
                'tr' => 'Karartma Kumaş Perdeler',
                'ru' => 'Шторы из затемняющей ткани',
            ],
            'slug' => 'blackout-fabrics',
            'short_description' => [
                'en' => 'Perfect for bedeooms or media rooms where you need to block out light completely.',
                'tr' => 'Işığı tamamen engellemeniz gereken yatak odaları veya medya odaları için mükemmel.',
                'ru' => 'Идеально подходит для спален или медиа-комнат, где вам нужно полностью затемнить свет.',
            ],
            'description' => [
                'en' => '
            <p style="color:#000">
                 Blackout fabrics is a specialized material designed to block light, providing privacy, insulation, and noise reduction. It’s commonly used for curtains in homes, hotels, and offices. 
 Key Benefits:
 Blocks 85–100% of light
 Reduces noise
 Provides thermal insulation (keeps rooms cool in summer and warm in winter)
Enhances privacy
Available in various colors, textures, and styles</p>
            <ul>
              <li style="color:#000">
                Foam-Coated Blackout Fabric – Polyester or cotton fabric with an acrylic foam backing that blocks light
              </li style="color:#000">
              <li style="color:#000">
                Triple-Weave Blackout Fabric – A dense weave of three fabric layers, usually polyester, that blocks 85–99% of light.
              </li>
              <li style="color:#000">
                Laminated Blackout Fabric – A fabric with an additional blackout lining, often used in hotels.
              </li>
               <li style="color:#000">
                Vinyl Blackout Fabric – A durable, waterproof option often used in commercial settings.
              </li>
              <li style="color:#000">
                Velvet Blackout Curtains – Thick and luxurious, naturally reducing light and noise.
              </li>
            </ul>
            ',
                'tr' => '<p style="color:#000">
Karartma kumaşı, ışığı engellemek, mahremiyet sağlamak, yalıtım ve gürültü azaltma amacıyla tasarlanmış özel bir malzemedir. Genellikle evlerde, otellerde ve ofislerde perde yapımında kullanılır. 
Temel Faydalar:
Işığın %85–100’ünü engeller
Gürültüyü azaltır
Isı yalıtımı sağlar (yazın serin, kışın sıcak tutar)
Mahremiyeti artırır
Farklı renk, doku ve stillerde mevcuttur
</p>
<ul>
  <li style="color:#000">
       Işığı engelleyen akrilik köpük kaplamalı polyester veya pamuklu kumaş
  </li>
  <li style="color:#000">
    Üç Katmanlı Karartma Kumaşı – Genellikle polyesterden oluşan üç katmanlı yoğun bir dokuma, ışığın %85–99’unu engeller.
  </li>
  <li style="color:#000">
    Karartma Kumaşı – Genellikle otellerde kullanılan, ekstra karartma astarı bulunan kumaş.
  </li>
  <li style="color:#000">
    Vinil Karartma Kumaşı – Ticari alanlarda yaygın olarak kullanılan dayanıklı, su geçirmez bir seçenek.
  </li>
  <li style="color:#000">
    Kadife Karartma Perdeler – Kalın ve lüks bir yapıya sahip olup doğal olarak ışık ve gürültüyü azaltır.
  </li>
</ul>',
                'ru' => '<p style="color:#000">
Затемняющая ткань — это специализированный материал, предназначенный для блокировки света, обеспечения уединения, теплоизоляции и снижения шума. Он часто используется для штор в домах, отелях и офисах. 
Ключевые преимущества:
Блокирует 85–100% света
Снижает уровень шума
Обеспечивает термоизоляцию (сохраняет прохладу летом и тепло зимой)
Повышает уровень конфиденциальности
Доступен в различных цветах, текстурах и стилях
</p>
<ul>
  <li style="color:#000">
    Затемняющая ткань с пенным покрытием – полиэстеровая или хлопковая ткань с акриловым пенным покрытием, блокирующим свет
  </li>
  <li style="color:#000">
    Затемняющая ткань с тройным переплетением – плотное переплетение трех слоев ткани, обычно полиэстера, блокирующее 85–99% света.
  </li>
  <li style="color:#000">
    Ламинированная затемняющая ткань – ткань с дополнительной затемняющей подкладкой, часто используемая в отелях.
  </li>
  <li style="color:#000">
    Виниловая затемняющая ткань – прочный, водонепроницаемый вариант, часто используемый в коммерческих помещениях.
  </li>
  <li style="color:#000">
    Бархатные затемняющие шторы – плотные и роскошные, естественно уменьшают количество света и шума.
  </li>
</ul>',
            ],
            'image' => 'images/blackout-welcome.jpg',
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/1.jpeg',
            'order' => 0,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/2.jpeg',
            'order' => 1,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/3.jpeg',
            'order' => 2,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/4.jpeg',
            'order' => 3,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/5.jpeg',
            'order' => 4,
        ]);

    }
}
