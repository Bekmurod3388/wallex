<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Post::query()->create([
            'header_ru' => "Wallix & Abris сотрудничает с компанией Arrow Electronics",
            'description_ru' => "Париж, 18 мая 2021 года – WALLIX(Euronext ALLIX), европейский издатель программного обеспечения для кибербезопасности и эксперт в области решений для обеспечения безопасности идентификации и доступа, объявляет о подписании соглашения с Arrow Electronics, дистрибьютором с добавленной стоимостью Fortune 110.",
            'img' => "zero-37.jpg"
        ]);

        Post::query()->create([
            'header_ru' => "Wallix & Abris укрепляет корпоративную кибербезопасность",
            'description_ru' => "Париж, 11 мая, 2021 – WALLIX, (котируется на бирже Euronext ALLIX) Европейский издатель кибербезопасности, программного обеспечения и эксперт в области удостоверениями и доступом решений безопасности, объявляет о технологическом партнерстве и интегрирует адррес cybernova работы Центра решений...",
            'img' => "zero-38.jpg"
        ]);

        Post::query()->create([
            'header_ru' => "Wallix & Abris укрепляет свои позиции в промышленном секторе",
            'description_ru' => "Париж, 29 апреля 2021 г. – WALLIX(Euronext ALLIX), европейский издатель программного обеспечения для кибербезопасности и эксперт в области решений для обеспечения безопасности идентификации и доступа, нанимает Йоанна Деломье в качестве разработчика OT Business Developer , который присоединяется к команде...",
            'img' => "zero-35.jpg"
        ]);

        Post::query()->create([
            'header_ru' => "Аэропорт Бордо доверяет Wallix & Abris защиту своих данных",
            'description_ru' => "Париж, 2 марта 2020 г. – С июля 2019 года компанияWALLIX (Euronext ALLIX), европейский издатель программного обеспечения для кибербезопасности и эксперт в области решений для обеспечения безопасности идентификации и доступа, работает с аэропортом Бордо над решением проблем защиты данных в секторе воздушного транспорта.",
            'img' => "zero-39.jpg"
        ]);

    }
}
