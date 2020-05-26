<?php

namespace App\Controller;

use Exception;
use RiotAPI\LeagueAPI\LeagueAPI;
use Symfony\Component\HttpFoundation\Response;

class TftLeague {

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

    public function getLeagueChallenger($region)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getTFTChallengerLeague()));
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
            return new Response(json_encode($this->api->getTFTLeagueEntriesForSummoner($encryptedSummonerId)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getLeagueEntries($region, $tier, $division)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getTFTLeagueEntries($tier, $division)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getGrandmasterLeague($region)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getTFTGrandmasterLeague()));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getMasterLeague($region)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getTFTMasterLeague()));
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
            return new Response(json_encode($this->api->getTFTLeagueById($leagueId)));
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
