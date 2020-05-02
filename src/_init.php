<?php

/********************************d*d**
 *  Autoload & use statements
 *************************************/

use RiotAPI\LeagueAPI\Definitions\Region;

// ==============================d=d==
//  Default configuration
// ==============================d=d==

//  Your normal API key
const CFG_API_KEY    = "RGAPI-2638a509-603d-4788-8098-3e27426664f2";

//  Your Tournament enabled API key, if you've got one
const CFG_TAPI_KEY   = "YOUR_TOURNAMENT_API_KEY";

//  Default region
const CFG_REGION     = Region::EUROPE_WEST;

//  Should cURL verify certificate issuer?
const CFG_VERIFY_SSL = false;

//  Rate limit
const CFG_CACHE_RATELIMIT = true;

//  Cache calls
const CFG_CACHE_CALLS = true;
