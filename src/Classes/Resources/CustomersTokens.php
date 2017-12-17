<?php

    namespace MoldersMedia\LightspeedApi\Classes\Resources;

    use MoldersMedia\LightspeedApi\Classes\Api\ApiClient;
    use MoldersMedia\LightspeedApi\Classes\Exceptions\General\ApiClientException;

    class CustomersTokens
    {
        /**
         * @var ApiClient
         */
        private $client;

        public function __construct( ApiClient $client )
        {
            $this->client = $client;
        }

        /**
         * @param int   $customerId
         * @param array $fields
         *
         * @return array
         * @throws ApiClientException
         */
        public function create( $customerId, $fields )
        {
            $fields = [ 'customerToken' => $fields ];

            return $this->client->create( 'customers/' . $customerId . '/tokens', $fields );
        }
    }