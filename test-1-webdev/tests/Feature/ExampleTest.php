<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * Halaman utama redirect ke daftar produk.
     */
    public function test_the_application_redirects_to_products(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('/products');
    }
}
