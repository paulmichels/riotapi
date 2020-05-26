<?php

namespace App\Controller;

use Exception;
use RiotAPI\LeagueAPI\LeagueAPI;
use Symfony\Component\HttpFoundation\Response;

class League {

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

    public function getLeagueChallenger($region, $queue)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getLeagueChallenger($queue)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getLeagueEntriesForSummoner($region, $encryptedSummonerId)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getLeagueEntriesForSummoner($encryptedSummonerId)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getLeagueEntries($region, $queue, $tier, $division)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getLeagueEntries($queue, $tier, $division)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getLeagueGrandmaster($region, $queue)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getLeagueGrandmaster($queue)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getLeagueById($region, $leagueId)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getLeagueById($leagueId)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getLeagueMaster($region, $queue)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getLeagueMaster($queue)));
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
