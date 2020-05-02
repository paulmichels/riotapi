<?php

namespace App\Controller;

use App\Entity\LolMatch;
use App\Repository\LolMatchRepository;
use Exception;
use RiotAPI\LeagueAPI\LeagueAPI;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Match extends AbstractController {

    private $api;
    private $serializer;
    private $matchRepository;

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
        $encoder = [new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $this->serializer = new Serializer($normalizers, $encoder);
    }

    public function getMatch($region, $matchId)
    {
        try{
            if(($match = $this->getDoctrine()->getRepository(LolMatch::class)->findMatch($region, $matchId)) == null){
                $this->api->setRegion($region);
                $match = $this->api->getMatch($matchId);

                //Insert dans lol_match
                $entityManager = $this->getDoctrine()->getManager();
                $matchEntity = new LolMatch();
                $matchEntity->setMatchId($match->gameId);
                $matchEntity->setRegion($region);
                $matchEntity->setJson((array) $match);
                $entityManager->persist($matchEntity);
                $entityManager->flush();
            } else {
                $match = json_decode($this->serializer->serialize($match->getJson(), 'json'), JSON_UNESCAPED_SLASHES);
            }
            return new Response(json_encode($match));
        } catch (Exception $e) {
            return new Response(json_encode(array(
                "status" => array(
                    "status_code" => $e->getCode(),
                    "message" => $e->getMessage()
                )
            )));
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
            )));
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
            )));
        }
    }

}
