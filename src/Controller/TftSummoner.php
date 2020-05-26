<?php

namespace App\Controller;

use Exception;
use RiotAPI\LeagueAPI\LeagueAPI;
use Symfony\Component\HttpFoundation\Response;

class TftSummoner {

    private $api;

    public function __construct()
    {
        try {
            $this->api = new LeagueAPI([
                LeagueAPI::SET_KEY => CFG_API_KEY,
                LeagueAPI::SET_TOURNAMENT_KEY => CFG_TAPI_KEY,
                LeagueAPI::SET_REGION => CFG_REGION,
                LeagueAPI::SET_VERIFY_SSL => CFG_VERIFY_SSL,
                LeagueAPI::SET_CACHE_RATELIMIT => CFG_CACHE_RATELIMIT,
                LeagueAPI::SET_CACHE_CALLS => CFG_CACHE_CALLS
            ]);
        } catch (Exception $e) {
        }
    }

    public function getSummonerByAccountId($region, $accountId)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getSummonerByAccountId($accountId)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getSummonerByName($region, $name)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getSummonerByName($name)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getSummonerByPUUID($region, $PUUID)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getSummonerByPUUID($PUUID)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getSummoner($region, $encryptedSummonerId)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getSummoner($encryptedSummonerId)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

}
