<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    public function before($user, $ability)
    {
        if ($user->hasRole('admin')) {
            return true;
        }
    }

    public function browse(User $user)
    {
        return $user->hasRole('vendor');
    }

    public function read(User $user, Product $product)
    {
        if (empty($product->shop)) {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }

    public function add(User $user)
    {
        return $user->hasRole('vendor');
    }

    public function edit(User $user, Product $product)
    {
        if (empty($product->shop)) {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }

    public function delete(User $user, Product $product)
    {
        if (empty($product->shop)) {
            return false;
        }
        return $user->id == $product->shop->user_id;
    }
}
