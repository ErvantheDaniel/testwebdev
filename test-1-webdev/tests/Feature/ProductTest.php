<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_shows_products(): void
    {
        Product::create(['name' => 'Kopi Susu', 'price' => 18000]);

        $this->get('/products')->assertOk()->assertSee('Kopi Susu');
    }

    public function test_can_create_product(): void
    {
        $this->post('/products', ['name' => 'Teh', 'price' => 8000])
            ->assertRedirect('/products');

        $this->assertDatabaseHas('products', ['name' => 'Teh']);
    }

    public function test_show_uses_route_model_binding(): void
    {
        $product = Product::create(['name' => 'Roti', 'price' => 15000]);

        $this->get("/products/{$product->id}")->assertOk()->assertSee('Roti');
        $this->get('/products/999')->assertNotFound();
    }

    public function test_can_update_product(): void
    {
        $product = Product::create(['name' => 'Lama', 'price' => 1000]);

        $this->put("/products/{$product->id}", ['name' => 'Baru', 'price' => 2000])
            ->assertRedirect('/products');

        $this->assertDatabaseHas('products', ['id' => $product->id, 'name' => 'Baru']);
    }

    public function test_can_delete_product(): void
    {
        $product = Product::create(['name' => 'Hapus', 'price' => 1000]);

        $this->delete("/products/{$product->id}")->assertRedirect('/products');

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
