<?php

namespace Tests\Feature;

use App\Filament\Exports\RecoveryExporter;
use App\Livewire\Admin\Filament\Recovery\RecoveryIndex;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class RecoveryIndexTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function table_selection_is_enabled_so_checkboxes_are_shown(): void
    {
        $this->admin_can_login();

        $component = Livewire::test(RecoveryIndex::class);

        $this->assertTrue($component->instance()->getTable()->isSelectionEnabled());
    }

    /** @test */
    public function export_bulk_action_exists_on_the_table(): void
    {
        $this->admin_can_login();

        $component = Livewire::test(RecoveryIndex::class);

        $bulkAction = $component->instance()->getTable()->getBulkAction('export');

        $this->assertNotNull($bulkAction);
        $this->assertTrue($bulkAction->isVisible());
        $this->assertSame(RecoveryExporter::class, $bulkAction->getExporter());
    }
}
