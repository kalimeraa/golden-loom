<?php

namespace Database\Seeders;

use App\Models\Curtain;
use Illuminate\Database\Seeder;

class LinenFabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $linenFabric = Curtain::create([
            'title' => [
                'en' => 'Linen Fabric Curtains',
                'tr' => 'Keten Kumaş Perdeler',
                'ru' => 'Льняные шторы',
            ],
            'slug' => 'linen-fabrics',
            'short_description' => [
                'en' => 'Linen\'s natural texture adds a touch of sophistication to any room, making it a popular choice for various interior styles.',
                'tr' =>'Ketenin doğal dokusu, her odaya sofistike bir dokunuş katar ve çeşitli iç mekan stilleri için popüler bir seçim haline getirir.',
                'ru' => 'Натуральная текстура льна придаёт комнате изысканный вид, что делает его популярным выбором для различных стилей интерьера.'
            ],
            'description' => [
                'en' => '<p style="color:#000">Keten perdeler, doğal güzelliği, dayanıklılığı ve hafif, ferah bir atmosfer yaratma yeteneği ile bilinen zamansız bir seçimdir. Keten, keten liflerinden yapılmış, çevre dostu, nefes alabilen ve hem rahat hem de şık iç mekanlar için mükemmel bir kumaştır.

Keten Perdelerin Faydaları:

Nefes Alabilir & Hafif – Havanın dolaşmasını sağlar, odaları ferah ve konforlu tutar.
Zamanla Yumuşar – Her yıkamada daha yumuşak ve esnek hale gelir.
Zarif Doku – Doğal lifler, çeşitli dekor stillerini tamamlayan rahat ve organik bir görünüm sunar.
Dayanıklı & Uzun Ömürlü – Pamuktan daha güçlü olup, uzun vadeli bir yatırım için harikadır.
Çevre Dostu – Biyolojik olarak parçalanabilen ve sürdürülebilir bir malzeme olan ketenden yapılmıştır.
Işık Filtresi – Yumuşak, dağınık ışık sağlar ve mahremiyeti korur.
</p>
',
                'tr' => '<p style="color:#000">Keten perdeler, doğal güzelliği, dayanıklılığı ve hafif, ferah bir atmosfer yaratma yeteneği ile bilinen zamansız bir seçimdir. Keten, keten liflerinden yapılmış, çevre dostu, nefes alabilen ve hem rahat hem de şık iç mekanlar için mükemmel bir kumaştır.

Keten Perdelerin Faydaları:

Nefes Alabilir & Hafif – Havanın dolaşmasını sağlar, odaları ferah ve konforlu tutar.
Zamanla Yumuşar – Her yıkamada daha yumuşak ve esnek hale gelir.
Zarif Doku – Doğal lifler, çeşitli dekor stillerini tamamlayan rahat ve organik bir görünüm sunar.
Dayanıklı & Uzun Ömürlü – Pamuktan daha güçlü olup, uzun vadeli bir yatırım için harikadır.
Çevre Dostu – Biyolojik olarak parçalanabilen ve sürdürülebilir bir malzeme olan ketenden yapılmıştır.
Işık Filtresi – Yumuşak, dağınık ışık sağlar ve mahremiyeti korur.
</p>

',
      'ru' => '<p style="color:#000">Льняные шторы – это вне времени классический выбор, известный своей естественной красотой, прочностью и способностью создавать лёгкую и воздушную атмосферу. Изготовленные из волокон льна, они экологичны, дышащие и идеально подходят как для неформальных, так и для элегантных интерьеров.

Преимущества льняных штор:

Воздухопроницаемость и лёгкость – обеспечивают циркуляцию воздуха, поддерживая свежесть и комфорт в помещении.
Становятся мягче со временем – с каждой стиркой ткань становится более мягкой и эластичной.
Элегантная текстура – натуральные волокна создают расслабленный, органичный вид, дополняя различные стили интерьера.
Прочность и долговечность – прочнее хлопка, что делает их отличным долгосрочным вложением.
Экологичность – изготовлены из льна, биоразлагаемого и устойчивого материала.
Фильтрация света – создают мягкое, рассеянное освещение, сохраняя уединённость.
</p>
',
            ],
            'image' => 'images/linen-welcome.jpeg',
        ]);

        $linenFabric->files()->create([
            'path' => 'images/linen/1.jpeg',
            'order' => 0,
        ]);

        $linenFabric->files()->create([
            'path' => 'images/linen/2.jpeg',
            'order' => 1,
        ]);

        $linenFabric->files()->create([
            'path' => 'images/linen/3.jpeg',
            'order' => 2,
        ]);

        $linenFabric->files()->create([
            'path' => 'images/linen/4.jpeg',
            'order' => 3,
        ]);

        $linenFabric->files()->create([
            'path' => 'images/linen/5.jpeg',
            'order' => 4,
        ]);

    }
}
