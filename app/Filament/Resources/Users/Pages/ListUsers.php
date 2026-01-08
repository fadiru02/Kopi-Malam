<?php

namespace App\Filament\Resources\Users\Pages;

use App\Filament\Resources\Users\UserResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('all')
                ->label('Semua User')
                ->icon('heroicon-m-users'),
            'customers' => Tab::make('customers')
                ->label('Customers')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('role', 'customer'))
                ->icon('heroicon-m-user-group'),
            'employees' => Tab::make('employees')
                ->label('Employees')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('role', 'employee'))
                ->icon('heroicon-m-briefcase'),
        ];
    }
}