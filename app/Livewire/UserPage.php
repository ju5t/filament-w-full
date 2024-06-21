<?php

namespace App\Livewire;

use App\Models\User;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Table;
use Livewire\Component;

class UserPage extends Component implements HasTable, HasForms
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table)
    {
        return $table->query(User::query())
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')->width('600px'),
                TextColumn::make('email')->grow(),
                TextColumn::make('email_verified_at'),
            ]);
    }

    public function render()
    {
        return view('livewire.user-page');
    }
}
