<?php

use Faker\Generator as Faker;
use App\Package;
use Illuminate\Database\Seeder;


class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            $package = new Package();
            $package->img = $faker->randomElement(['https://cdn.pixabay.com/photo/2019/11/07/08/12/sea-4608198_960_720.jpg', 'https://velvetescape.com/wp-content/uploads/2011/11/IMG_2370-3-1280x920.jpg', 'https://tamaris-charter.com/wp-content/uploads/2018/05/Crystal-clear-sea-10.jpg', 'https://thumbs.dreamstime.com/b/sea-water-ocean-wave-surfing-surface-colorful-vibrant-sunset-barrel-shape-124362369.jpg', 'https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-ocean-with-white-cloud-blue-sky-copyspace_74190-8663.jpg?size=626&ext=jpg&ga=GA1.2.2002787713.1626307200']);
            $package->name = $faker->randomElement(['Scotland', 'Andalucia', 'Croatia', 'Norway', 'Cuba']);
            $package->start_date = $faker->dateTimeThisYear();
            $package->duration = $faker->numberBetween(7,21);
            $package->price = $faker->numberBetween(1500, 5000);
            $package->desc = $faker->text();
            $package->save();
        }
    }
}
