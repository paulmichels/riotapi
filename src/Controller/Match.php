<?php

namespace App\Controller;

use Exception;
use RiotAPI\LeagueAPI\LeagueAPI;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Match extends AbstractController {

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

    public function getMatch($region, $matchId)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getMatch($matchId)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getMatchlistByAccount(Request $request, $region, $encryptedSummonerId)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getMatchlistByAccount(
                $encryptedSummonerId,
                $request->query->get('queue'),
                $request->query->get('champion'),
                $request->query->get('beginTime'),
                $request->query->get('endTime'),
                $request->query->get('beginIndex'),
                $request->query->get('endIndex')
            )));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getMatchTimeline($region, $matchId)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getMatchTimeline($matchId)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getMatchesByTournament($region, $tournamentCode)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getMatchIdsByTournamentCode($tournamentCode)));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )), $e->getCode());
        }
    }

    public function getMatchByTournament($region, $matchId, $tournamentCode)
    {
        try{
            $this->api->setRegion($region);
            return new Response(json_encode($this->api->getMatchByTournamentCode($matchId, $tournamentCode)));
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
