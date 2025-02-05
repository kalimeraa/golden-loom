<?php

namespace Database\Seeders;

use App\Models\Curtain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurtainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blackoutFabrics = Curtain::create([
            'title' => 'Blackout Fabrics',
            'slug' => 'blackout-fabrics',
            'short_description' => 'Perfect for bedeooms or media rooms where you need to block out light completely.',
            'description' => '
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
            'image' => 'images/blackout-welcome.jpg',
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/1.jpg',
            'order' => 0,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/2.jpg',
            'order' => 1,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/3.jpg',
            'order' => 2,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/4.jpg',
            'order' => 3,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/5.jpg',
            'order' => 4,
        ]);

        $blackoutFabrics->files()->create([
            'path' => 'images/blackout/6.jpg',
            'order' => 5,
        ]);
    }
}
