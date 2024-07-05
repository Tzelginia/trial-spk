<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Criteria;
use App\Models\TourismObject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'name'     => 'Superadmin',
      'username' => 'superadmin',
      'email'    => 'superadmin@spk.com',
      'password' => bcrypt('admin123'),
      'level'    => 'SUPERADMIN'
    ]);

    Criteria::create([
      'name' => 'Biaya',
      'attribute' => 'COST'
    ]);
    Criteria::create([
      'name' => 'IPK',
      'attribute' => 'BENEFIT'
    ]);
    Criteria::create([
      'name' => 'Minat',
      'attribute' => 'BENEFIT'
    ]);
    Criteria::create([
      'name' => 'Kesiapan',
      'attribute' => 'BENEFIT'
    ]);
    Criteria::create([
      'name' => 'Keahlian',
      'attribute' => 'BENEFIT'
    ]);
    TourismObject::create([
      'name' => 'Magang MSIB',
    ]);
    TourismObject::create([
      'name' => 'Magang Mandiri',
    ]);
    TourismObject::create([
      'name' => 'Studi Independent',
    ]);
    TourismObject::create([
      'name' => 'IISMA',
    ]);
    TourismObject::create([
      'name' => 'Pertukaran Pelajar',
    ]);
    TourismObject::create([
      'name' => 'KWU',
    ]);
    TourismObject::create([
      'name' => 'Reguler',
    ]);
  }
}
