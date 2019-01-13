﻿<?php

$weatherIndex = array("","Clear Skies","Fair Skies","Clouds","Fog","Wind","Gales","Rain","Showers","Thunder","Thunderstorms","Dust Storms","Sandstorms","Hot Spells","Heat Waves","Snow","Blizzards","Gloom","Auroras","Darkness","Tension","Clouds","Storm Clouds","Rough Seas","Rough Seas","Louring","Heat Waves","Gloom","Gales","Eruptions","Fair Skies","Fair Skies","Fair Skies","Fair Skies","Fair Skies","Irradiance","Core Radiation","Core Radiation","Core Radiation","Core Radiation","Shelf Clouds","Shelf Clouds","Shelf Clouds","Shelf Clouds","Oppression","Oppression","Oppression","Oppression","Oppression","Umbral Wind","Umbral Static","Smoke","Fair Skies","Royal Levin","Hyperelectricity","Royal Levin","Oppression","Thunder","Thunder","CutScene","Multiplicity","Multiplicity","Rain","Fair Skies","Rain","Fair Skies","Dragonstorms","Dragonstorms","Subterrain","Concordance","Concordance","Beyond Time","Beyond Time","Beyond Time","Demonic Infinity","Demonic Infinity","Demonic Infinity","Dimensional Disruption","Dimensional Disruption","Dimensional Disruption","Revelstorms","Revelstorms","Eternal Bliss","Eternal Bliss","Wyrmstorms","Wyrmstorms","Revelstorms","Quicklevin","Thunder","Dimensional Disruption","Fair Skies","Clear Skies","White Cyclones","White Cyclones","White Cyclones","Ultimania","White Cyclones","Moonlight","Moonlight","Moonlight","Moonlight","Fair Skies","Scarlet","Scarlet","Scarlet","Fair Skies","Fair Skies","Fair Skies","Fair Skies","Flames","Tsunamis","Cyclones","Geostorms","True Blue","True Blue","True Blue","","True Blue","","","","");

$zoneWeather = array('Mor Dhona - ' => array(array('Rate' => 15, 'Weather' => 3), array('Rate' => 30, 'Weather' => 4), array('Rate' => 60, 'Weather' => 17), array('Rate' => 75, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'Limsa Lominsa' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Limsa Lominsa Upper Decks' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Limsa Lominsa Lower Decks' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Middle La Noscea' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 70, 'Weather' => 2), array('Rate' => 80, 'Weather' => 5), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Lower La Noscea' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 70, 'Weather' => 2), array('Rate' => 80, 'Weather' => 5), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Eastern La Noscea' => array(array('Rate' => 5, 'Weather' => 4), array('Rate' => 50, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 3), array('Rate' => 95, 'Weather' => 7), array('Rate' => 100, 'Weather' => 8)),
    'Western La Noscea' => array(array('Rate' => 10, 'Weather' => 4), array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 80, 'Weather' => 3), array('Rate' => 90, 'Weather' => 5), array('Rate' => 100, 'Weather' => 6)),
    'Upper La Noscea' => array(array('Rate' => 30, 'Weather' => 1), array('Rate' => 50, 'Weather' => 2), array('Rate' => 70, 'Weather' => 3), array('Rate' => 80, 'Weather' => 4), array('Rate' => 90, 'Weather' => 9), array('Rate' => 100, 'Weather' => 10)),
    'Gridania' => array(array('Rate' => 5, 'Weather' => 7), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'Ul\'dah - Steps of Nald' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Ul\'dah - Steps of Thal - Merchant Strip' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Western Thanalan' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Central Thanalan' => array(array('Rate' => 15, 'Weather' => 11), array('Rate' => 55, 'Weather' => 1), array('Rate' => 75, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Eastern Thanalan' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 70, 'Weather' => 3), array('Rate' => 80, 'Weather' => 4), array('Rate' => 85, 'Weather' => 7), array('Rate' => 100, 'Weather' => 8)),
    'Southern Thanalan' => array(array('Rate' => 20, 'Weather' => 14), array('Rate' => 60, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'Northern Thanalan' => array(array('Rate' => 5, 'Weather' => 1), array('Rate' => 20, 'Weather' => 2), array('Rate' => 50, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'Ul\'dah' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'New Gridania' => array(array('Rate' => 5, 'Weather' => 7), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'Old Gridania' => array(array('Rate' => 5, 'Weather' => 7), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'Central Shroud' => array(array('Rate' => 5, 'Weather' => 9), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'East Shroud' => array(array('Rate' => 5, 'Weather' => 9), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'South Shroud' => array(array('Rate' => 5, 'Weather' => 4), array('Rate' => 10, 'Weather' => 10), array('Rate' => 25, 'Weather' => 9), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 70, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'North Shroud' => array(array('Rate' => 5, 'Weather' => 4), array('Rate' => 10, 'Weather' => 8), array('Rate' => 25, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 70, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'Ishgard' => array(array('Rate' => 60, 'Weather' => 15), array('Rate' => 70, 'Weather' => 2), array('Rate' => 75, 'Weather' => 1), array('Rate' => 90, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'Coerthas Central Highlands' => array(array('Rate' => 20, 'Weather' => 16), array('Rate' => 60, 'Weather' => 15), array('Rate' => 70, 'Weather' => 2), array('Rate' => 75, 'Weather' => 1), array('Rate' => 90, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'Mor Dhona' => array(array('Rate' => 15, 'Weather' => 3), array('Rate' => 30, 'Weather' => 4), array('Rate' => 60, 'Weather' => 17), array('Rate' => 75, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'Sanctum of the Twelve' => array(array('Rate' => 5, 'Weather' => 9), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'The Lost City of Amdapor - Central Amdapor' => array(array('Rate' => 100, 'Weather' => 4)),
    'Amdapor Keep' => array(array('Rate' => 100, 'Weather' => 3)),
    'South Shroud - Urth\'s Fount' => array(array('Rate' => 100, 'Weather' => 20)),
    'Pharos Sirius - Flood Cellar' => array(array('Rate' => 100, 'Weather' => 3)),
    'Southern Thanalan - Zanr\'ak' => array(array('Rate' => 20, 'Weather' => 14), array('Rate' => 60, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'Outer La Noscea' => array(array('Rate' => 30, 'Weather' => 1), array('Rate' => 50, 'Weather' => 2), array('Rate' => 70, 'Weather' => 3), array('Rate' => 85, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Command Room' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Bowl of Embers' => array(array('Rate' => 100, 'Weather' => 26)),
    'Wolves\' Den Pier' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 10)),
    'The Navel' => array(array('Rate' => 100, 'Weather' => 29)),
    'Thornmarch' => array(array('Rate' => 100, 'Weather' => 27)),
    'The Howling Eye' => array(array('Rate' => 100, 'Weather' => 28)),
    'Ul\'dah - Steps of Thal - Merchant Strip' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Stone Vigil' => array(array('Rate' => 100, 'Weather' => 15)),
    'Snowcloak' => array(array('Rate' => 100, 'Weather' => 16)),
    'Steps of Faith' => array(array('Rate' => 100, 'Weather' => 3)),
    'The Keeper of the Lake - Forecastle' => array(array('Rate' => 100, 'Weather' => 17)),
    'Mist' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 70, 'Weather' => 2), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'The Lavender Beds' => array(array('Rate' => 5, 'Weather' => 3), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'The Goblet' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'The Howling Eye' => array(array('Rate' => 100, 'Weather' => 28)),
    'Porta Decumana' => array(array('Rate' => 100, 'Weather' => 25)),
    'Kugane' => array(array('Rate' => 10, 'Weather' => 7), array('Rate' => 20, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'Ul\'dah - Steps of Nald - Airship Landing' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Ul\'dah - Steps of Thal - Hustings Strip' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Limsa Lominsa Upper Decks - Airship Landing' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'Mist' => array(array('Rate' => 20, 'Weather' => 3), array('Rate' => 50, 'Weather' => 1), array('Rate' => 70, 'Weather' => 2), array('Rate' => 80, 'Weather' => 2), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'The Goblet' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'The Goblet - The Goblet Subdivision' => array(array('Rate' => 40, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 85, 'Weather' => 3), array('Rate' => 95, 'Weather' => 4), array('Rate' => 100, 'Weather' => 7)),
    'The Lavender Beds' => array(array('Rate' => 5, 'Weather' => 3), array('Rate' => 20, 'Weather' => 7), array('Rate' => 30, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 55, 'Weather' => 2), array('Rate' => 85, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'The Outer Coil - Incubation Bay' => array(array('Rate' => 100, 'Weather' => 3)),
    'The Whorleater' => array(array('Rate' => 100, 'Weather' => 23)),
    'The Striking Tree' => array(array('Rate' => 100, 'Weather' => 22)),
    'Akh Afah Amphitheatre' => array(array('Rate' => 100, 'Weather' => 35)),
    'The Burning Heart' => array(array('Rate' => 100, 'Weather' => 36)),
    'The Diadem' => array(array('Rate' => 30, 'Weather' => 2), array('Rate' => 60, 'Weather' => 4), array('Rate' => 90, 'Weather' => 5), array('Rate' => 100, 'Weather' => 49)),
    'Xelphatol' => array(array('Rate' => 100, 'Weather' => 4)),
    'Baelsar\'s Wall - Lower Reaches' => array(array('Rate' => 100, 'Weather' => 4)),
    'Dun Scaith - The Lady Radlia' => array(array('Rate' => 100, 'Weather' => 1)),
    'The Misery' => array(array('Rate' => 100, 'Weather' => 5)),
    'The Dravanian Forelands' => array(array('Rate' => 10, 'Weather' => 3), array('Rate' => 20, 'Weather' => 4), array('Rate' => 30, 'Weather' => 9), array('Rate' => 40, 'Weather' => 11), array('Rate' => 70, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'The Dravanian Hinterlands' => array(array('Rate' => 10, 'Weather' => 3), array('Rate' => 20, 'Weather' => 4), array('Rate' => 30, 'Weather' => 7), array('Rate' => 40, 'Weather' => 8), array('Rate' => 70, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'The Churning Mists' => array(array('Rate' => 10, 'Weather' => 3), array('Rate' => 20, 'Weather' => 6), array('Rate' => 40, 'Weather' => 50), array('Rate' => 70, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'The Aery' => array(array('Rate' => 100, 'Weather' => 3)),
    'Thok ast Thok' => array(array('Rate' => 100, 'Weather' => 51)),
    'Idyllshire' => array(array('Rate' => 10, 'Weather' => 3), array('Rate' => 20, 'Weather' => 4), array('Rate' => 30, 'Weather' => 7), array('Rate' => 40, 'Weather' => 8), array('Rate' => 70, 'Weather' => 1), array('Rate' => 100, 'Weather' => 2)),
    'The Sea of Clouds' => array(array('Rate' => 30, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 70, 'Weather' => 3), array('Rate' => 80, 'Weather' => 4), array('Rate' => 90, 'Weather' => 5), array('Rate' => 100, 'Weather' => 49)),
    'Azys Lla' => array(array('Rate' => 35, 'Weather' => 2), array('Rate' => 70, 'Weather' => 3), array('Rate' => 100, 'Weather' => 9)),
    'Singularity Reactor' => array(array('Rate' => 100, 'Weather' => 44)),
    'Void Ark - Upper Deck' => array(array('Rate' => 100, 'Weather' => 9)),
    'Coerthas Western Highlands' => array(array('Rate' => 20, 'Weather' => 16), array('Rate' => 60, 'Weather' => 15), array('Rate' => 70, 'Weather' => 2), array('Rate' => 75, 'Weather' => 1), array('Rate' => 90, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'Dusk Vigil' => array(array('Rate' => 100, 'Weather' => 16)),
    'Containment Bay S1T7' => array(array('Rate' => 100, 'Weather' => 60)),
    'Containment Bay P1T6' => array(array('Rate' => 100, 'Weather' => 69)),
    'Containment Bay Z1T9' => array(array('Rate' => 100, 'Weather' => 74)),
    'The Interdimensional Rift' => array(array('Rate' => 100, 'Weather' => 79)),
    'The Blessed Treasury' => array(array('Rate' => 100, 'Weather' => 80)),
    'The Sirensong Sea' => array(array('Rate' => 100, 'Weather' => 5)),
    'Emanation' => array(array('Rate' => 100, 'Weather' => 82)),
    'Foundation' => array(array('Rate' => 60, 'Weather' => 15), array('Rate' => 70, 'Weather' => 2), array('Rate' => 75, 'Weather' => 1), array('Rate' => 90, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'The Pillars' => array(array('Rate' => 60, 'Weather' => 15), array('Rate' => 70, 'Weather' => 2), array('Rate' => 75, 'Weather' => 1), array('Rate' => 90, 'Weather' => 3), array('Rate' => 100, 'Weather' => 4)),
    'Shirogane' => array(array('Rate' => 10, 'Weather' => 7), array('Rate' => 20, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'The Jade Stoa' => array(array('Rate' => 100, 'Weather' => 92)),
    'Deltascape V1.0' => array(array('Rate' => 100, 'Weather' => 79)),
    'Deltascape V2.0' => array(array('Rate' => 100, 'Weather' => 79)),
    'Deltascape V3.0' => array(array('Rate' => 100, 'Weather' => 79)),
    'Deltascape V4.0' => array(array('Rate' => 100, 'Weather' => 79)),
    'Rhalgr\'s Reach' => array(array('Rate' => 15, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 80, 'Weather' => 3), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 9)),
    'Kugane' => array(array('Rate' => 10, 'Weather' => 7), array('Rate' => 20, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'The Fringes' => array(array('Rate' => 15, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 80, 'Weather' => 3), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 9)),
    'The Peaks' => array(array('Rate' => 10, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 75, 'Weather' => 3), array('Rate' => 85, 'Weather' => 4), array('Rate' => 95, 'Weather' => 5), array('Rate' => 100, 'Weather' => 11)),
    'The Lochs' => array(array('Rate' => 20, 'Weather' => 1), array('Rate' => 60, 'Weather' => 2), array('Rate' => 80, 'Weather' => 3), array('Rate' => 90, 'Weather' => 4), array('Rate' => 100, 'Weather' => 10)),
    'The Ruby Sea' => array(array('Rate' => 10, 'Weather' => 9), array('Rate' => 20, 'Weather' => 5), array('Rate' => 35, 'Weather' => 3), array('Rate' => 75, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'Yanxia' => array(array('Rate' => 5, 'Weather' => 8), array('Rate' => 15, 'Weather' => 7), array('Rate' => 25, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'The Azim Steppe' => array(array('Rate' => 5, 'Weather' => 6), array('Rate' => 10, 'Weather' => 5), array('Rate' => 17, 'Weather' => 7), array('Rate' => 25, 'Weather' => 4), array('Rate' => 35, 'Weather' => 3), array('Rate' => 75, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'Shirogane' => array(array('Rate' => 10, 'Weather' => 7), array('Rate' => 20, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'Eureka Anemos' => array(array('Rate' => 30, 'Weather' => 2), array('Rate' => 60, 'Weather' => 6), array('Rate' => 90, 'Weather' => 8), array('Rate' => 100, 'Weather' => 15)),
    'Eureka Pagos' => array(array('Rate' => 10, 'Weather' => 2), array('Rate' => 28, 'Weather' => 4), array('Rate' => 46, 'Weather' => 14), array('Rate' => 64, 'Weather' => 15), array('Rate' => 82, 'Weather' => 9), array('Rate' => 100, 'Weather' => 16)),
    'Eureka Pyros' => array(array('Rate' => 10, 'Weather' => 2), array('Rate' => 28, 'Weather' => 14), array('Rate' => 46, 'Weather' => 9), array('Rate' => 64, 'Weather' => 16), array('Rate' => 82, 'Weather' => 49), array('Rate' => 100, 'Weather' => 15)),
    'The Royal Airship Landing' => array(array('Rate' => 100, 'Weather' => 84)),
    'Transparency' => array(array('Rate' => 100, 'Weather' => 84)),
    'The House of the Fierce' => array(array('Rate' => 5, 'Weather' => 8), array('Rate' => 15, 'Weather' => 7), array('Rate' => 25, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'The Doman Enclave' => array(array('Rate' => 5, 'Weather' => 8), array('Rate' => 15, 'Weather' => 7), array('Rate' => 25, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)),
    'Bokairo Inn' => array(array('Rate' => 10, 'Weather' => 7), array('Rate' => 20, 'Weather' => 4), array('Rate' => 40, 'Weather' => 3), array('Rate' => 80, 'Weather' => 2), array('Rate' => 100, 'Weather' => 1)));

?>