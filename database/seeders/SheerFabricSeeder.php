<?php

namespace Database\Seeders;

use App\Models\Curtain;
use Illuminate\Database\Seeder;

class SheerFabricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sheerFabric = Curtain::create([
            'title' => [
                'en' => 'Sheer Fabric Curtains',
                'tr' => 'Tül Kumaş Perdeler',
                'ru' => 'Тюли',
            ],
            'slug' => 'sheer-fabrics',
            'short_description' => [
                'en' => 'Ideal for rooms where you want to let in natural light while maintaining privacy',
                'tr' => 'Doğal ışığı içeri alırken mahremiyeti korumak istediğiniz odalar için idealdir',
                'ru' => 'Идеально подходит для комнат, где нужно впустить естественный свет, сохраняя уединение',
            ],
            'description' => [
                'en' => '<p style="color:#000">Sheer fabrics are lightweight, semi-transparent materials that allow light to pass through while still offering a level of privacy. They’re commonly used for curtains, drapes, and decorative elements in interiors. Here are some key details about sheer fabrics:
</p>Types of Sheer Fabrics
            <ul>
              <li style="color:#000">
                Organza – A crisp, thin, and slightly stiff fabric made from silk, nylon, or polyester. Often used for elegant, formal drapes or decorative pieces
              </li style="color:#000">
              <li style="color:#000">
                Chiffon – A soft, flowing fabric made from silk, polyester, or nylon. It’s lightweight and often used for a delicate, airy look
              </li>
              <li style="color:#000">
               Linen Sheer – A natural, breathable fabric with a slightly textured finish. Offers a casual, rustic appearance.

              </li>
               <li style="color:#000">
                Voile – A soft, plain-weave fabric, often made from cotton or polyester. It’s lightweight and offers a smooth, flowing effect.
              </li>
              <li style="color:#000">
               Tulle – A fine, net-like fabric made from silk, nylon, or rayon. Often used in more decorative or formal settings like wedding drapes.
              </li>
            </ul>
            ',
                'tr' => '<p style="color:#000">Tül kumaşlar, ışığın geçmesine izin verirken belirli bir mahremiyet seviyesi sunan hafif, yarı saydam malzemelerdir. Perdeler, drapeler ve iç mekanlardaki dekoratif unsurlar için yaygın olarak kullanılır. İşte tül kumaşlar hakkında bazı önemli detaylar:</p>

<strong>Tül Kumaş Türleri</strong>
<ul>
  <li style="color:#000">
    <strong>Organze</strong> – İpek, naylon veya polyesterden üretilen sert, ince ve hafif sert bir kumaştır. Genellikle zarif ve resmi drapeler veya dekoratif parçalar için kullanılır.
  </li>
  <li style="color:#000">
    <strong>Şifon</strong> – İpek, polyester veya naylondan yapılan yumuşak, akıcı bir kumaştır. Hafiftir ve genellikle narin, havadar bir görünüm oluşturmak için kullanılır.
  </li>
  <li style="color:#000">
    <strong>Keten Tül</strong> – Doğal, nefes alabilen ve hafif dokulu bir yüzeye sahip bir kumaştır. Rahat ve rustik bir görünüm sunar.
  </li>
  <li style="color:#000">
    <strong>Voile</strong> – Genellikle pamuk veya polyesterden yapılan yumuşak, düz dokuma bir kumaştır. Hafif olup pürüzsüz ve akıcı bir etki sağlar.
  </li>
  <li style="color:#000">
    <strong>Tül</strong> – İpek, naylon veya rayondan yapılan ince, ağ benzeri bir kumaştır. Genellikle düğün drapeleri gibi daha dekoratif veya resmi ortamlarda kullanılır.
  </li>
</ul>
',
      'ru' => '<p style="color:#000">Тюли – это легкие, полупрозрачные материалы, которые пропускают свет, обеспечивая при этом определенный уровень уединения. Они широко используются для штор, драпировок и декоративных элементов в интерьере. Вот несколько ключевых деталей о прозрачных тканях:</p>

<strong>Типы прозрачных тканей</strong>
<ul>
  <li style="color:#000">
    <strong>Органза</strong> – Жесткая, тонкая и слегка жестковатая ткань из шелка, нейлона или полиэстера. Часто используется для элегантных, формальных драпировок или декоративных элементов.
  </li>
  <li style="color:#000">
    <strong>Шифон</strong> – Мягкая, струящаяся ткань из шелка, полиэстера или нейлона. Она легкая и часто используется для создания нежного, воздушного эффекта.
  </li>
  <li style="color:#000">
    <strong>Льняная вуаль</strong> – Натуральная, дышащая ткань с слегка текстурированной поверхностью. Обеспечивает непринужденный, деревенский вид.
  </li>
  <li style="color:#000">
    <strong>Вуаль</strong> – Мягкая, гладкотканая ткань, часто изготовленная из хлопка или полиэстера. Она легкая и создает гладкий, плавный эффект.
  </li>
  <li style="color:#000">
    <strong>Тюль</strong> – Тонкая, сетчатая ткань из шелка, нейлона или вискозы. Часто используется в декоративных или официальных интерьерах, таких как свадебные драпировки.
  </li>
</ul>
',
            ],
            'image' => 'images/sheer-welcome.jpg',
        ]);

        $sheerFabric->files()->create([
            'path' => 'images/sheer/1.jpeg',
            'order' => 0,
        ]);

        $sheerFabric->files()->create([
            'path' => 'images/sheer/2.jpeg',
            'order' => 1,
        ]);

        $sheerFabric->files()->create([
            'path' => 'images/sheer/3.jpeg',
            'order' => 2,
        ]);

        $sheerFabric->files()->create([
            'path' => 'images/sheer/4.jpeg',
            'order' => 3,
        ]);

        $sheerFabric->files()->create([
            'path' => 'images/sheer/5.jpeg',
            'order' => 4,
        ]);

    }
}
