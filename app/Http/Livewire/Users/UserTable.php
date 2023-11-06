<?php

namespace App\Http\Livewire\Users;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Nombre", "name")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Telefono", "phone")
                ->sortable(),
            Column::make("Dirección", "location")
                ->sortable(),
            Column::make("Perfil", "about_me")
                ->sortable(),
            Column::make("Fecha Creación", "created_at")
                ->sortable(),
            Column::make("Actualizadó en", "updated_at")
                ->sortable(),
        ];
    }
}
