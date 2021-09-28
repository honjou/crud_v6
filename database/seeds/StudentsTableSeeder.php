<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # リセット
        DB::table('students')->delete();

        # 日本語設定
        $faker = Faker\Factory::create('ja_JP');

        # サンプルデータの挿入
        for ($i = 0; $i < 10; $i++) {
            \App\Student::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'tel' => $faker->phoneNumber(),
                'message' => $faker->text()
            ]);
        }
    }
}
