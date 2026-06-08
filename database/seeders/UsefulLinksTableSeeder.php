<?php

namespace Database\Seeders;

use App\Models\UsefulLink;
use Illuminate\Database\Seeder;

class UsefulLinksTableSeeder extends Seeder
{
    public function run(): void
    {
        UsefulLink::truncate();

        $links = [
            // Evaluation
            ['category' => 'Evaluation', 'title' => 'Evaluation', 'url' => 'https://evaluation.ace.org.pk'],

            // IELTS Book Listening Audios
            ['category' => 'IELTS Book Listening Audios', 'title' => 'IELTS Book', 'url' => 'http://ielts.englishonline.com.pk/book/'],

            // IELTS Mock Listening Audios
            ['category' => 'IELTS Mock Listening Audios', 'title' => 'Listening Audio 01', 'url' => 'http://ielts.englishonline.com.pk/test01'],
            ['category' => 'IELTS Mock Listening Audios', 'title' => 'Listening Audio 02', 'url' => 'http://ielts.englishonline.com.pk/test02'],
            ['category' => 'IELTS Mock Listening Audios', 'title' => 'Listening Audio 03', 'url' => 'http://ielts.englishonline.com.pk/test03'],
            ['category' => 'IELTS Mock Listening Audios', 'title' => 'Listening Audio 04', 'url' => 'http://ielts.englishonline.com.pk/test04'],
            ['category' => 'IELTS Mock Listening Audios', 'title' => 'Listening Audio 05', 'url' => 'http://ielts.englishonline.com.pk/test05'],
            ['category' => 'IELTS Mock Listening Audios', 'title' => 'Listening Audio 06', 'url' => 'http://ielts.englishonline.com.pk/test06'],

            // IELTS Mock Check Academic Listening
            ['category' => 'IELTS Mock Check Academic Listening', 'title' => 'Academic Listening 01', 'url' => 'https://mocks.ace.org.pk/tests/academic/listening/01'],
            ['category' => 'IELTS Mock Check Academic Listening', 'title' => 'Academic Listening 02', 'url' => 'https://mocks.ace.org.pk/tests/academic/listening/02'],
            ['category' => 'IELTS Mock Check Academic Listening', 'title' => 'Academic Listening 03', 'url' => 'https://mocks.ace.org.pk/tests/academic/listening/03'],
            ['category' => 'IELTS Mock Check Academic Listening', 'title' => 'Academic Listening 04', 'url' => 'https://mocks.ace.org.pk/tests/academic/listening/04'],
            ['category' => 'IELTS Mock Check Academic Listening', 'title' => 'Academic Listening 05', 'url' => 'https://mocks.ace.org.pk/tests/academic/listening/05'],
            ['category' => 'IELTS Mock Check Academic Listening', 'title' => 'Academic Listening 06', 'url' => 'https://mocks.ace.org.pk/tests/academic/listening/06'],

            // IELTS Mock Check Academic Reading
            ['category' => 'IELTS Mock Check Academic Reading', 'title' => 'Academic Reading 01', 'url' => 'https://mocks.ace.org.pk/tests/academic/reading/01'],
            ['category' => 'IELTS Mock Check Academic Reading', 'title' => 'Academic Reading 02', 'url' => 'https://mocks.ace.org.pk/tests/academic/reading/02'],
            ['category' => 'IELTS Mock Check Academic Reading', 'title' => 'Academic Reading 03', 'url' => 'https://mocks.ace.org.pk/tests/academic/reading/03'],
            ['category' => 'IELTS Mock Check Academic Reading', 'title' => 'Academic Reading 04', 'url' => 'https://mocks.ace.org.pk/tests/academic/reading/04'],
            ['category' => 'IELTS Mock Check Academic Reading', 'title' => 'Academic Reading 05', 'url' => 'https://mocks.ace.org.pk/tests/academic/reading/05'],
            ['category' => 'IELTS Mock Check Academic Reading', 'title' => 'Academic Reading 06', 'url' => 'https://mocks.ace.org.pk/tests/academic/reading/06'],

            // IELTS Mock Check General Reading
            ['category' => 'IELTS Mock Check General Reading', 'title' => 'General Reading 01', 'url' => 'https://mocks.ace.org.pk/tests/general/reading/01'],
            ['category' => 'IELTS Mock Check General Reading', 'title' => 'General Reading 02', 'url' => 'https://mocks.ace.org.pk/tests/general/reading/02'],
            ['category' => 'IELTS Mock Check General Reading', 'title' => 'General Reading 03', 'url' => 'https://mocks.ace.org.pk/tests/general/reading/03'],
            ['category' => 'IELTS Mock Check General Reading', 'title' => 'General Reading 04', 'url' => 'https://mocks.ace.org.pk/tests/general/reading/04'],
            ['category' => 'IELTS Mock Check General Reading', 'title' => 'General Reading 05', 'url' => 'https://mocks.ace.org.pk/tests/general/reading/05'],
            ['category' => 'IELTS Mock Check General Reading', 'title' => 'General Reading 06', 'url' => 'https://mocks.ace.org.pk/tests/general/reading/06'],

            // Invoice
            ['category' => 'Invoice', 'title' => 'Invoice', 'url' => 'https://red-hummingbird-617899.hostingersite.com/invoice/'],

            // Certificate
            ['category' => 'Certificate', 'title' => 'Certificate', 'url' => 'https://red-hummingbird-617899.hostingersite.com/certificate/'],
        ];

        foreach ($links as $link) {
            UsefulLink::create($link);
        }
    }
}
