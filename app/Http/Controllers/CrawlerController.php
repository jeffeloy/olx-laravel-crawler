<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CrawlerController extends Controller
{
    private $item;
    private $results = array();
    private $url = '';

    public function olxCrawler(Request $request)
    {
        $client = new Client();
        $data = $request->query->all();

        $search = $data['search'];
        $fuel = $data['fuel'];
        $numberDoors = $data['numberDoors'];

        $this->url = 'https://olx.com.br/autos-e-pecas/carros-vans-e-utilitarios' . $fuel . '?q=';

        if (Cache::has($search . $fuel . $numberDoors)) {
            return Cache::get($search . $fuel . $numberDoors);
        }

        $page =  $client->request('GET', $this->url . $search . '&' . $numberDoors);

        $page->filter('.gSNULD')->each(function ($item, $key) {

            $this->item = $item;

            $this->results[$key] = [
                'title' => $this->getText('h2'),
                'image' => $this->getImg(),
                'description' => $this->getText('.fqDYpJ > div:nth-child(1) > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(1)'),
                'price' => $this->getText('.fqDYpJ > div:nth-child(1) > div:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1)'),
                'date' =>  $this->getText('.fqDYpJ > div:nth-child(2) > div:nth-child(2) > div:nth-child(2) > span'),
                'time' => $this->getText('.fqDYpJ > div:nth-child(2) > div:nth-child(2) > div:nth-child(2) > span'),
                'location' => $this->getText('.fqDYpJ > div:nth-child(2) > div:nth-child(2) > div:nth-child(1) > div:nth-child(1) > div:nth-child(1) > span'),
            ];
        });
        
        if (count($this->results) > 0 && $search) {
            Cache::put($search . $fuel . $numberDoors, $this->results, 60 * 60 * 1); // 1 hour
        }

        return response($this->results);
    }

    private function getText($filter)
    {
        return $this->item->filter($filter)->count() ? $this->item->filter($filter)->text() : '';
    }

    private function getImg($filter = 'img')
    {
        return $this->item->filter($filter)->count() ? $this->item->filter($filter)->attr('src') : '';
    }
}
