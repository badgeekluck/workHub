<?php
/**
 * Created by PhpStorm.
 * User: samet.yilmaz
 * Date: 1.02.2020
 * Time: 23:25
 */

namespace WorkHub\Service;


use Elasticsearch\ClientBuilder;

class ElasticClient
{
    /**
     * @return array
     */
    public function search()
    {
        $client = ClientBuilder::create()
            ->setHosts(['http://127.0.0.1:9200'])
            ->build();

        return $client->search([
            'index' => 'workhub',
            'body' => [
                'query' => [
                    'match_all' => [
                        'boost' => 1.0
                    ]
                ]
            ]
        ]);
    }
}
