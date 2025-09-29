<?php

namespace App\Filament\User\Resources\OrderResource\Pages;

use App\Filament\User\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
use Filament\Support\Enums\Alignment;
use Illuminate\Contracts\Support\Htmlable;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;
    protected $productId;
    protected $quantity;
    protected $price;

    public function getBreadcrumbs(): array
    {
       return[]; 
    }



    public function getTitle(): string
    {
        return 'Buy Tickets';
    }

    public function getCachedFormActions(): array
    {
        return [
            Actions\Action::make('create')
            ->label('Submit Order')
            ->submit('create'),
        ];
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $this->productId = $data['product_id'];
        $this->quantity = $data['qty'];
        $this->price = $data['total_amount'];

        $data['invoice_number'] = 'INV-'.now()->format('YmdHis').'-'.Str::upper(Str::random(4));;
        $data['customer_id'] = auth('customer')->user()->id;
        $data['ticket_status'] = 'tersedia';
        $data['payment_status'] = 'pending';

        unset($data['product_id']);

        return $data;
    }

   protected function afterCreate(): void
    {
        $this->record->orderItem()->create([
            'product_id' => $this->productId,
            'quantity' => $this->quantity,
            'price' => $this->price,
        ]);
    }

}
