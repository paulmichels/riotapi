<?php

namespace App\Controller;

use Exception;
use RiotAPI\LeagueAPI\LeagueAPI;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TournamentStub extends AbstractController {

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

    public function postCodes($region)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode());
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getLobbyEvents($region, $tournamentCode)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode());
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function postProvider($region)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode());
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function postTournament($region)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode());
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
