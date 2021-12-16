<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLaundry extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'checkpoint_id', 'laundry_id', 'luggage_category', 'number_of_pieces', 'additional_description', 'picture', 'transaction_code','amount', 'payment_status', 'laundry_status', 'collection_status', 'delivery_status', 'pickup_date'];

    protected $date = 'pickup_date';
}
