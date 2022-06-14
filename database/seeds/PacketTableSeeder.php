<?php

use Illuminate\Database\Seeder;
use \Faker\Generator as Faker;
use App\Packet;

class PacketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++){
            $newPacket = new Packet();
            $newPacket->name = $faker->company();
            $newPacket->title = $faker->catchPhrase();
            $newPacket->description = $faker->paragraph();
            $newPacket->price = $faker->randomFloat(1, 50, 9999);
            $newPacket->image = $faker->imageUrl(640, 480, 'beautiful destination', true);
            $newPacket->save();
        }  
    }
}
