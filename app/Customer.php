<?php

namespace App;
use \App\Member as MemberEloquent;
use \App\Order as OrderEloquent;
use \App\Restaurant as RestaurantEloquent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Customer extends Authenticatable
{
    use Notifiable;


    public function member(){
        return $this->belongsTo(MemberEloquent::class);
    }
    public function order(){
        return $this->belongsTo(OrderEloquent::class);
    }
    public function Restaurant(){
        return $this->belongsTo(RestaurantEloquent::class);
    }
}