<?php

namespace Tests\Feature\Guest;

use App\Livewire\Guest\OnlineRegistrationForm;
use App\Models\Campus;
use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class OnlineRegistrationFormTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function fallback_whatsapp_registration_message_includes_selected_course_and_campus(): void
    {
        config([
            'services.evo.base_url' => 'https://evo.test',
            'services.evo.instance_name' => 'ace',
            'services.evo.api_key' => 'test-api-key',
        ]);

        Http::preventStrayRequests();
        Http::fake([
            'https://evo.test/*' => Http::response(),
        ]);

        $course = Course::create([
            'title' => 'Spoken English',
            'description' => 'English language course',
            'price' => '1000',
            'duration' => '1 month',
        ]);

        $campus = Campus::create([
            'name' => 'Main Campus',
            'address' => 'Campus address',
        ]);

        Livewire::test(OnlineRegistrationForm::class)
            ->set('name', 'Test Student')
            ->set('father_name', 'Test Father')
            ->set('courses', $course->id)
            ->set('campus_id', $campus->id)
            ->set('mode_of_learning', 'On-Campus')
            ->set('whatsapp_mobile', '+923001234567')
            ->set('email', 'student@example.com')
            ->call('register')
            ->assertSet('submitted', true);

        Http::assertSent(function ($request) use ($campus, $course): bool {
            return $request->url() === 'https://evo.test/message/sendText/ace'
                && $request['number'] === '923001234567'
                && str_contains($request['text'], 'Selected Course(s): '.$course->title)
                && str_contains($request['text'], 'Selected Campus: '.$campus->name);
        });
    }
}
