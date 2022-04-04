<?php

namespace Tests\Feature;

use Tests\TestCase;

class OlxCrawlerTest extends TestCase
{
    /**
     * Checks if the home page returns HTTP status code 200
     *
     * @return void
     */
    public function test_assert_home_page_http_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Checks if the API route returns HTTP status code 200
     *
     * @return void
     */
    public function test_assert_search_http_status()
    {
        $search = "Honda Civic 2020";
        $fuel = "gasolina";
        $numberDoors = "cad=1";

        $response = $this->get("/api/crawler?search=$search&fuel=$fuel&numberDoors=$numberDoors");

        $response->assertStatus(200);
    }
}
