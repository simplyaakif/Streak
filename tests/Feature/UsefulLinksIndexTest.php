<?php

namespace Tests\Feature;

use App\Livewire\Admin\Filament\UsefulLinks\UsefulLinksIndex;
use App\Models\UsefulLink;
use Database\Seeders\UsefulLinksTableSeeder;
use Filament\Actions\Testing\TestAction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class UsefulLinksIndexTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_cannot_view_useful_links_page(): void
    {
        $this->get(route('admin.useful-links'))->assertStatus(302);
    }

    /** @test */
    public function admin_can_view_useful_links_page(): void
    {
        $this->admin_can_login();

        $this->get(route('admin.useful-links'))
            ->assertStatus(200)
            ->assertSeeLivewire(UsefulLinksIndex::class);
    }

    /** @test */
    public function admin_can_create_a_useful_link(): void
    {
        $this->admin_can_login();

        Livewire::test(UsefulLinksIndex::class)
            ->callAction(TestAction::make('create_link')->table(), data: [
                'title' => 'Test Link',
                'url' => 'https://example.com',
                'category' => 'Test Category',
            ]);

        $this->assertDatabaseHas('useful_links', [
            'title' => 'Test Link',
            'url' => 'https://example.com',
            'category' => 'Test Category',
        ]);
    }

    /** @test */
    public function admin_can_edit_a_useful_link(): void
    {
        $this->admin_can_login();

        $link = UsefulLink::factory()->create([
            'title' => 'Original Title',
            'url' => 'https://original.com',
            'category' => 'Original Category',
        ]);

        Livewire::test(UsefulLinksIndex::class)
            ->callAction(TestAction::make('edit')->table($link), data: [
                'title' => 'Updated Title',
                'url' => 'https://updated.com',
                'category' => 'Updated Category',
            ]);

        $this->assertDatabaseHas('useful_links', [
            'id' => $link->id,
            'title' => 'Updated Title',
            'url' => 'https://updated.com',
            'category' => 'Updated Category',
        ]);
    }

    /** @test */
    public function admin_can_delete_a_useful_link(): void
    {
        $this->admin_can_login();

        $link = UsefulLink::factory()->create();

        Livewire::test(UsefulLinksIndex::class)
            ->callAction(TestAction::make('delete')->table($link));

        $this->assertSoftDeleted('useful_links', ['id' => $link->id]);
    }

    /** @test */
    public function seeder_inserts_all_hardcoded_links(): void
    {
        $this->seed(UsefulLinksTableSeeder::class);

        $this->assertDatabaseCount('useful_links', 28);
    }
}
