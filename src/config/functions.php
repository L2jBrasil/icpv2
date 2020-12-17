<?php
//=======================================================================\\
//  ## ####### #######                                                   \\
//  ## ##      ##   ##                                                   \\
//  ## ##      ## ####  |\  | |¯¯¯ ¯¯|¯¯ \      / |¯¯¯| |¯¯¯| | / |¯¯¯|  \\
//  ## ##      ##       | \ | |--    |    \    /  | | | | |_| |<   ¯\_   \\
//  ## ####### ##       |  \| |___   |     \/\/   |___| | |\  | \ |___|  \\
// --------------------------------------------------------------------- \\
//       Brazillian Developer / WebSite: http://www.icpfree.com.br       \\
//                 Email & Skype: ivan1507@gmail.com.br                  \\
//=======================================================================\\
$db = strtolower($db_data) == "l2j" ? true : false;

function resposta($mensagem){
	echo "<script type=\"text/javascript\">window.alert('".$mensagem."')</script>";
}

function respostaPainel($msg){
	echo "<script type=\"text/javascript\">$('.msg').fadeIn('slow').html('".$msg."').delay(3000).fadeOut('slow');</script>";
}

function redirecionaPainel($pag,$delay=0){
	echo "<script type=\"text/javascript\">setTimeout(function(){ $('#panel').fadeIn('slow').load('".$pag."'); }, ".$delay.");</script>";
}

function filter($value, $string = FALSE) {
	return $string ? str_replace("\'", "&apos;", addslashes(trim($value))) : preg_replace("/(\D)/i" , "" , $value);
}

function cotacaoDolar(){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://www.melhorcambio.com/dolar-hoje');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
	$conteudo = curl_exec ($ch);
	curl_close($ch);
	$dom = new DomDocument();
	$dom->loadHTML($conteudo);
	$dolar = $dom->getElementById("taxa-comercial");
	return $dolar->getAttribute('value');
}

function classe_name($classe_id){
	switch ($classe_id){
		case 0:
			$class = "Fighter"; break;
		case 1:
			$class = "Warrior"; break;
		case 2:
			$class = "Gladiator"; break;
		case 3:
			$class = "Warlord"; break;
		case 4:
			$class = "Knight"; break;
		case 5:
			$class = "Paladin"; break;
		case 6:
			$class = "Dark Avenger"; break;
		case 7:
			$class = "Rogue"; break;
		case 8:
			$class = "Treasure Hunter"; break;
		case 9:
			$class = "Hawkeye"; break;
		case 10:
			$class = "Mage"; break;
		case 11:
			$class = "Wizard"; break;
		case 12:
			$class = "Sorceror"; break;
		case 13:
			$class = "Necromancer"; break;
		case 14:
			$class = "Warlock"; break;
		case 15:
			$class = "Cleric"; break;
		case 16:
			$class = "Bishop"; break;
		case 17:
			$class = "Prophet"; break;
		case 18:
			$class = "Fighter"; break;
		case 19:
			$class = "Knight"; break;
		case 20:
			$class = "Temple Knight"; break;
		case 21:
			$class = "Sword Singer"; break;
		case 22:
			$class = "Scout"; break;
		case 23:
			$class = "PlainsWalker"; break;
		case 24:
			$class = "SilverRanger"; break;
		case 25:
			$class = "Mage"; break;
		case 26:
			$class = "Wizard"; break;
		case 27:
			$class = "Spell Singer"; break;
		case 28:
			$class = "Elemental Summoner"; break;
		case 29:
			$class = "Oracle"; break;
		case 30:
			$class = "Elder"; break;
		case 31:
			$class = "Fighter"; break;
		case 32:
			$class = "Paulus Knight"; break;
		case 33:
			$class = "Shillien Knight"; break;
		case 34:
			$class = "Blade Dancer"; break;
		case 35:
			$class = "Assassin"; break;
		case 36:
			$class = "Abyss Walker"; break;
		case 37:
			$class = "Phantom Ranger"; break;
		case 38:
			$class = "Mage"; break;
		case 39:
			$class = "Dark Wizard"; break;
		case 40:
			$class = "Spellhowler"; break;
		case 41:
			$class = "Phantom Summoner"; break;
		case 42:
			$class = "Shillien Oracle"; break;
		case 43:
			$class = "Shillien Elder"; break;
		case 44:
			$class = "Fighter"; break;
		case 45:
			$class = "Raider"; break;
		case 46:
			$class = "Destroyer"; break;
		case 47:
			$class = "Monk"; break;
		case 48:
			$class = "Tyrant"; break;
		case 49:
			$class = "Mage"; break;
		case 50:
			$class = "Shaman"; break;
		case 51:
			$class = "Overlord"; break;
		case 52:
			$class = "Warcryer"; break;
		case 53:
			$class = "Fighter"; break;
		case 54:
			$class = "Scavenger"; break;
		case 55:
			$class = "BountyHunter"; break;
		case 56:
			$class = "Artisan"; break;
		case 57:
			$class = "Warsmith"; break;
		case 88:
			$class = "Duelist"; break;
		case 89:
			$class = "Dreadnought"; break;
		case 90:
			$class = "Phoenix Knight"; break;
		case 91:
			$class = "Hell Knight"; break;
		case 92:
			$class = "Sagittarius"; break;
		case 93:
			$class = "Adventurer"; break;
		case 94:
			$class = "Archmage"; break;
		case 95:
			$class = "Soultaker"; break;
		case 96:
			$class = "Arcana Lord"; break;
		case 97:
			$class = "Cardinal"; break;
		case 98:
			$class = "Hierophant"; break;
		case 99:
			$class = "Eva Templar"; break;
		case 100:
			$class = "Sword Muse"; break;
		case 101:
			$class = "Wind Rider"; break;
		case 102:
			$class = "Moonlight Sentinel"; break;
		case 103:
			$class = "Mystic Muse"; break;
		case 104:
			$class = "Elemental Master"; break;
		case 105:
			$class = "Eva Saint"; break;
		case 106:
			$class = "Shillien Templar"; break;
		case 107:
			$class = "Spectral Dancer"; break;
		case 108:
			$class = "Ghost Hunter"; break;
		case 109:
			$class = "Ghost Sentinel"; break;
		case 110:
			$class = "Storm Screamer"; break;
		case 111:
			$class = "Spectral Master"; break;
		case 112:
			$class = "Shillien Saint"; break;
		case 113:
			$class = "Titan"; break;
		case 114:
			$class = "Grand Khauatari"; break;
		case 115:
			$class = "Dominator"; break;
		case 116:
			$class = "Doomcryer"; break;
		case 117:
			$class = "Fortune Seeker"; break;
		case 118:
			$class = "Maestro"; break;
		case 123:
			$class = "Male Soldier"; break;
		case 124:
			$class = "Female Soldier"; break;
		case 125:
			$class = "Trooper"; break;
		case 126:
			$class = "Warder"; break;
		case 127:
			$class = "Berserker"; break;
		case 128:
			$class = "Male Soulbreaker"; break;
		case 129:
			$class = "Female Soulbreaker"; break;
		case 130:
			$class = "Arbalester"; break;
		case 131:
			$class = "Doombringer"; break;
		case 132:
			$class = "Male Soulhound"; break;
		case 133:
			$class = "Female Soulhound"; break;
		case 134:
			$class = "Trickster"; break;
		case 135:
			$class = "Inspector"; break;
		case 136:
			$class = "Judicator"; break;
		default:
			$class = "n/a"; break;
	}
	return $class;
}

function quest_name($quest_id){
	switch ($quest_id){
		case 1:
			$quest_name = "_letters_of_love"; break;
		case 2:
			$quest_name = "_what_women_want"; break;
		case 3:
			$quest_name = "_will_the_seal_be_broken"; break;
		case 4:
			$quest_name = "_long_live_the_paagrio_lord"; break;
		case 5:
			$quest_name = "_miners_favor"; break;
		case 6:
			$quest_name = "_step_into_the_future"; break;
		case 7:
			$quest_name = "_a_trip_begins"; break;
		case 8:
			$quest_name = "_an_adventure_begins"; break;
		case 9:
			$quest_name = "_into_the_city_of_humans"; break;
		case 10:
			$quest_name = "_into_the_world"; break;
		case 11:
			$quest_name = "_secret_meeting_with_ketra_orcs"; break;
		case 12:
			$quest_name = "_secret_meeting_with_varka_silenos"; break;
		case 13:
			$quest_name = "_parcel_delivery"; break;
		case 14:
			$quest_name = "_whereabouts_of_the_archaeologist"; break;
		case 15:
			$quest_name = "_sweet_whispers"; break;
		case 16:
			$quest_name = "_the_coming_darkness"; break;
		case 17:
			$quest_name = "_light_and_darkness"; break;
		case 18:
			$quest_name = "_meeting_with_the_golden_ram"; break;
		case 19:
			$quest_name = "_go_to_the_pastureland"; break;
		case 20:
			$quest_name = "_bring_up_with_love"; break;
		case 21:
			$quest_name = "_hidden_truth"; break;
		case 22:
			$quest_name = "_tragedy_in_von_hellmann_forest"; break;
		case 23:
			$quest_name = "_lidias_heart"; break;
		case 24:
			$quest_name = "_inhabitants_of_the_forest_of_the_dead"; break;
		case 25:
			$quest_name = "_hiding_behind_the_truth"; break;
		case 27:
			$quest_name = "_chest_caught_with_a_bait_of_wind"; break;
		case 28:
			$quest_name = "_chest_caught_with_a_bait_of_icy_air"; break;
		case 29:
			$quest_name = "_chest_caught_with_a_bait_of_earth"; break;
		case 30:
			$quest_name = "_chest_caught_with_a_bait_of_fire"; break;
		case 31:
			$quest_name = "_secret_buried_in_the_swamp"; break;
		case 32:
			$quest_name = "_an_obvious_lie"; break;
		case 33:
			$quest_name = "_make_a_pair_of_dress_shoes"; break;
		case 34:
			$quest_name = "_in_search_of_cloth"; break;
		case 35:
			$quest_name = "_find_glittering_jewelry"; break;
		case 36:
			$quest_name = "_make_a_sewing_kit"; break;
		case 37:
			$quest_name = "_make_formal_wear"; break;
		case 38:
			$quest_name = "_dragon_fangs"; break;
		case 39:
			$quest_name = "_red-eyed_invaders"; break;
		case 42:
			$quest_name = "_help_the_uncle"; break;
		case 43:
			$quest_name = "_help_the_sister"; break;
		case 44:
			$quest_name = "_help_the_son"; break;
		case 45:
			$quest_name = "_to_talking_island"; break;
		case 46:
			$quest_name = "_once_more_in_the_arms_of_the_mother_tree"; break;
		case 47:
			$quest_name = "_into_the_dark_forest"; break;
		case 48:
			$quest_name = "_to_the_immortal_plateau"; break;
		case 49:
			$quest_name = "_the_road_home"; break;
		case 50:
			$quest_name = "_lanoscos_special_bait"; break;
		case 51:
			$quest_name = "_ofulles_special_bait"; break;
		case 52:
			$quest_name = "_willies_special_bait"; break;
		case 53:
			$quest_name = "_linnaeus_special_bait"; break;
		case 70:
			$quest_name = "_succession_to_the_legend_phoenix_knight"; break;
		case 71:
			$quest_name = "_succession_to_the_legend_evas_templar"; break;
		case 72:
			$quest_name = "_succession_to_the_legend_sword_muse"; break;
		case 73:
			$quest_name = "_succession_to_the_legend_duelist"; break;
		case 74:
			$quest_name = "_succession_to_the_legend_dreadnoughts"; break;
		case 75:
			$quest_name = "_succession_to_the_legend_titan"; break;
		case 76:
			$quest_name = "_succession_to_the_legend_grand_khavatari"; break;
		case 77:
			$quest_name = "_succession_to_the_legend_dominator"; break;
		case 78:
			$quest_name = "_succession_to_the_legend_doomcryer"; break;
		case 79:
			$quest_name = "_succession_to_the_legend_adventurer"; break;
		case 80:
			$quest_name = "_succession_to_the_legend_wind_rider"; break;
		case 81:
			$quest_name = "_succession_to_the_legend_ghost_hunter"; break;
		case 82:
			$quest_name = "_succession_to_the_legend_sagittarius"; break;
		case 83:
			$quest_name = "_succession_to_the_legend_moonlight_sentinel"; break;
		case 84:
			$quest_name = "_succession_to_the_legend_ghost_sentinel"; break;
		case 85:
			$quest_name = "_succession_to_the_legend_cardinal"; break;
		case 86:
			$quest_name = "_succession_to_the_legend_hierophant"; break;
		case 87:
			$quest_name = "_succession_to_the_legend_evas_saint"; break;
		case 88:
			$quest_name = "_succession_to_the_legend_archmage"; break;
		case 89:
			$quest_name = "_succession_to_the_legend_mystic_muse"; break;
		case 90:
			$quest_name = "_succession_to_the_legend_storm_screamer"; break;
		case 91:
			$quest_name = "_succession_to_the_legend_arcana_lord"; break;
		case 92:
			$quest_name = "_succession_to_the_legend_elemental_master"; break;
		case 93:
			$quest_name = "_succession_to_the_legend_spectral_master"; break;
		case 94:
			$quest_name = "_succession_to_the_legend_soultaker"; break;
		case 95:
			$quest_name = "_succession_to_the_legend_hell_knight"; break;
		case 96:
			$quest_name = "_succession_to_the_legend_spectral_dancer"; break;
		case 97:
			$quest_name = "_succession_to_the_legend_shillien_templar"; break;
		case 98:
			$quest_name = "_succession_to_the_legend_shillien_saint"; break;
		case 99:
			$quest_name = "_succession_to_the_legend_fortune_seeker"; break;
		case 100:
			$quest_name = "_succession_to_the_legend_maestro"; break;
		case 101:
			$quest_name = "_sword_of_solidarity"; break;
		case 102:
			$quest_name = "_sea_of_spores_fever"; break;
		case 103:
			$quest_name = "_spirit_of_craftsman"; break;
		case 104:
			$quest_name = "_spirit_of_mirrors"; break;
		case 105:
			$quest_name = "_skirmish_with_the_orcs"; break;
		case 106:
			$quest_name = "_forgotten_truth"; break;
		case 107:
			$quest_name = "_merciless_punishment"; break;
		case 108:
			$quest_name = "_jumble_tumble_diamond_fuss"; break;
		case 118:
			$quest_name = "_to_lead_and_be_led"; break;
		case 151:
			$quest_name = "_cure_for_fever_disease"; break;
		case 152:
			$quest_name = "_shards_of_golem"; break;
		case 153:
			$quest_name = "_deliver_goods"; break;
		case 154:
			$quest_name = "_sacrifice_to_the_sea"; break;
		case 155:
			$quest_name = "_find_sir_windawood"; break;
		case 156:
			$quest_name = "_millennium_love"; break;
		case 157:
			$quest_name = "_recover_smuggled_goods"; break;
		case 158:
			$quest_name = "_seed_of_evil"; break;
		case 159:
			$quest_name = "_protect_the_water_source"; break;
		case 160:
			$quest_name = "_nerupas_request"; break;
		case 161:
			$quest_name = "_fruit_of_the_mothertree"; break;
		case 162:
			$quest_name = "_curse_of_the_underground_fortress"; break;
		case 163:
			$quest_name = "_legacy_of_the_poet"; break;
		case 164:
			$quest_name = "_blood_fiend"; break;
		case 165:
			$quest_name = "_shilens_hunt"; break;
		case 166:
			$quest_name = "_mass_of_darkness"; break;
		case 167:
			$quest_name = "_dwarven_kinship"; break;
		case 168:
			$quest_name = "_deliver_supplies"; break;
		case 169:
			$quest_name = "_offspring_of_nightmares"; break;
		case 170:
			$quest_name = "_dangerous_seduction"; break;
		case 171:
			$quest_name = "_acts_of_evil"; break;
		case 211:
			$quest_name = "_trial_of_the_challenger"; break;
		case 212:
			$quest_name = "_trial_of_duty"; break;
		case 213:
			$quest_name = "_trial_of_the_seeker"; break;
		case 214:
			$quest_name = "_trial_of_the_scholar"; break;
		case 215:
			$quest_name = "_trial_of_the_pilgrim"; break;
		case 216:
			$quest_name = "_trial_of_the_guildsman"; break;
		case 217:
			$quest_name = "_testimony_of_trust"; break;
		case 218:
			$quest_name = "_testimony_of_life"; break;
		case 219:
			$quest_name = "_testimony_of_fate"; break;
		case 220:
			$quest_name = "_testimony_of_glory"; break;
		case 221:
			$quest_name = "_testimony_of_prosperity"; break;
		case 222:
			$quest_name = "_test_of_the_duelist"; break;
		case 223:
			$quest_name = "_test_of_the_champion"; break;
		case 224:
			$quest_name = "_test_of_sagittarius"; break;
		case 225:
			$quest_name = "_test_of_the_searcher"; break;
		case 226:
			$quest_name = "_test_of_the_healer"; break;
		case 227:
			$quest_name = "_test_of_the_reformer"; break;
		case 228:
			$quest_name = "_test_of_magus"; break;
		case 229:
			$quest_name = "_test_of_witchcraft"; break;
		case 230:
			$quest_name = "_test_of_the_summoner"; break;
		case 231:
			$quest_name = "_test_of_the_maestro"; break;
		case 232:
			$quest_name = "_test_of_the_lord"; break;
		case 233:
			$quest_name = "_test_of_the_war_spirit"; break;
		case 234:
			$quest_name = "_fates_whisper"; break;
		case 235:
			$quest_name = "_mimirs_elixir"; break;
		case 241:
			$quest_name = "_possessor_of_a_precious_soul_-_1"; break;
		case 242:
			$quest_name = "_possessor_of_a_precious_soul_-_2"; break;
		case 246:
			$quest_name = "_possessor_of_a_precious_soul_-_3"; break;
		case 247:
			$quest_name = "_possessor_of_a_precious_soul_-_4"; break;
		case 255:
			$quest_name = "_tutorial"; break;
		case 257:
			$quest_name = "_the_guard_is_busy"; break;
		case 258:
			$quest_name = "_bring_wolf_pelts"; break;
		case 259:
			$quest_name = "_ranchers_plea"; break;
		case 260:
			$quest_name = "_hunt_the_orcs"; break;
		case 261:
			$quest_name = "_collectors_dream"; break;
		case 262:
			$quest_name = "_trade_with_the_ivory_tower"; break;
		case 263:
			$quest_name = "_orc_subjugation"; break;
		case 264:
			$quest_name = "_keen_claws"; break;
		case 265:
			$quest_name = "_chains_of_slavery"; break;
		case 266:
			$quest_name = "_pleas_of_pixies"; break;
		case 267:
			$quest_name = "_wrath_of_verdure"; break;
		case 271:
			$quest_name = "_proof_of_valor"; break;
		case 272:
			$quest_name = "_wrath_of_ancestors"; break;
		case 273:
			$quest_name = "_invaders_of_the_holy_land"; break;
		case 274:
			$quest_name = "_skirmish_with_the_werewolves"; break;
		case 275:
			$quest_name = "_dark_winged_spies"; break;
		case 276:
			$quest_name = "_totem_of_the_hestui"; break;
		case 277:
			$quest_name = "_gatekeepers_offering"; break;
		case 291:
			$quest_name = "_revenge_of_the_redbonnet"; break;
		case 292:
			$quest_name = "_brigands_sweep"; break;
		case 293:
			$quest_name = "_the_hidden_veins"; break;
		case 294:
			$quest_name = "_covert_business"; break;
		case 295:
			$quest_name = "_dreaming_of_the_skies"; break;
		case 296:
			$quest_name = "_tarantulas_spider_silk"; break;
		case 297:
			$quest_name = "_gatekeepers_favor"; break;
		case 298:
			$quest_name = "_lizardmens_conspiracy"; break;
		case 299:
			$quest_name = "_gather_ingredients_for_pie"; break;
		case 300:
			$quest_name = "_hunting_leto_lizardman"; break;
		case 303:
			$quest_name = "_collect_arrowheads"; break;
		case 306:
			$quest_name = "_crystals_of_fire_and_ice"; break;
		case 313:
			$quest_name = "_collect_spores"; break;
		case 316:
			$quest_name = "_destroy_plague_carriers"; break;
		case 317:
			$quest_name = "_catch_the_wind"; break;
		case 319:
			$quest_name = "_scent_of_death"; break;
		case 320:
			$quest_name = "_bones_tell_the_future"; break;
		case 324:
			$quest_name = "_sweetest_venom"; break;
		case 325:
			$quest_name = "_grim_collector"; break;
		case 326:
			$quest_name = "_vanquish_remnants"; break;
		case 327:
			$quest_name = "_recover_the_farmland"; break;
		case 328:
			$quest_name = "_sense_for_business"; break;
		case 329:
			$quest_name = "_curiosity_of_a_dwarf"; break;
		case 330:
			$quest_name = "_adept_of_taste"; break;
		case 331:
			$quest_name = "_arrow_of_vengeance"; break;
		case 333:
			$quest_name = "_hunt_of_the_black_lion"; break;
		case 334:
			$quest_name = "_the_wishing_potion"; break;
		case 335:
			$quest_name = "_song_of_the_hunter"; break;
		case 336:
			$quest_name = "_coin_of_magic"; break;
		case 337:
			$quest_name = "_audience_with_the_land_dragon"; break;
		case 338:
			$quest_name = "_alligator_hunter"; break;
		case 340:
			$quest_name = "_subjugation_of_lizardmen"; break;
		case 341:
			$quest_name = "_hunting_for_wild_beasts"; break;
		case 343:
			$quest_name = "_under_the_shadow_of_the_ivory_tower"; break;
		case 344:
			$quest_name = "_1000_years_the_end_of_lamentation"; break;
		case 345:
			$quest_name = "_method_to_raise_the_dead"; break;
		case 347:
			$quest_name = "_go_get_the_calculator"; break;
		case 348:
			$quest_name = "_an_arrogant_search"; break;
		case 350:
			$quest_name = "_enhance_your_weapon"; break;
		case 351:
			$quest_name = "_black_swan"; break;
		case 352:
			$quest_name = "_help_rood_raise_a_new_pet"; break;
		case 353:
			$quest_name = "_power_of_darkness"; break;
		case 354:
			$quest_name = "_conquest_of_alligator_island"; break;
		case 355:
			$quest_name = "_family_honor"; break;
		case 356:
			$quest_name = "_dig_up_the_sea_of_spores"; break;
		case 357:
			$quest_name = "_warehouse_keepers_ambition"; break;
		case 358:
			$quest_name = "_illegitimate_child_of_a_goddess"; break;
		case 359:
			$quest_name = "_for_sleepless_deadmen"; break;
		case 360:
			$quest_name = "_plunder_their_supplies"; break;
		case 362:
			$quest_name = "_bards_mandolin"; break;
		case 363:
			$quest_name = "_sorrowful_sound_of_flute"; break;
		case 364:
			$quest_name = "_jovial_accordion"; break;
		case 365:
			$quest_name = "_devils_legacy"; break;
		case 366:
			$quest_name = "_silver_haired_shaman"; break;
		case 367:
			$quest_name = "_electrifying_recharge"; break;
		case 368:
			$quest_name = "_trespassing_into_the_sacred_area"; break;
		case 369:
			$quest_name = "_collector_of_jewels"; break;
		case 370:
			$quest_name = "_a_wiseman_sows_seeds"; break;
		case 371:
			$quest_name = "_shriek_of_ghosts"; break;
		case 372:
			$quest_name = "_legacy_of_insolence"; break;
		case 373:
			$quest_name = "_supplier_of_reagents"; break;
		case 374:
			$quest_name = "_whisper_of_dreams_part_1"; break;
		case 375:
			$quest_name = "_whisper_of_dreams_part_2"; break;
		case 376:
			$quest_name = "_exploration_of_giants_cave_part_1"; break;
		case 377:
			$quest_name = "_exploration_of_giants_cave_part_2"; break;
		case 378:
			$quest_name = "_magnificent_feast"; break;
		case 379:
			$quest_name = "_fantasy_wine"; break;
		case 380:
			$quest_name = "_bring_out_the_flavor_of_ingredients"; break;
		case 381:
			$quest_name = "_lets_become_a_royal_member"; break;
		case 382:
			$quest_name = "_kails_magic_coin"; break;
		case 383:
			$quest_name = "_searching_for_treasure"; break;
		case 384:
			$quest_name = "_warehouse_keepers_pastime"; break;
		case 385:
			$quest_name = "_yoke_of_the_past"; break;
		case 386:
			$quest_name = "_stolen_dignity"; break;
		case 401:
			$quest_name = "_path_to_a_warrior"; break;
		case 402:
			$quest_name = "_path_to_a_human_knight"; break;
		case 403:
			$quest_name = "_path_to_a_rogue"; break;
		case 404:
			$quest_name = "_path_to_a_human_wizard"; break;
		case 405:
			$quest_name = "_path_to_a_cleric"; break;
		case 406:
			$quest_name = "_path_to_an_elven_knight"; break;
		case 407:
			$quest_name = "_path_to_an_elven_scout"; break;
		case 408:
			$quest_name = "_path_to_an_elven_wizard"; break;
		case 409:
			$quest_name = "_path_to_an_elven_oracle"; break;
		case 410:
			$quest_name = "_path_to_a_palus_knight"; break;
		case 411:
			$quest_name = "_path_to_an_assassin"; break;
		case 412:
			$quest_name = "_path_to_a_dark_wizard"; break;
		case 413:
			$quest_name = "_path_to_a_shillien_oracle"; break;
		case 414:
			$quest_name = "_path_to_an_orc_raider"; break;
		case 415:
			$quest_name = "_path_to_a_monk"; break;
		case 416:
			$quest_name = "_path_to_an_orc_shaman"; break;
		case 417:
			$quest_name = "_path_to_become_a_scavenger"; break;
		case 418:
			$quest_name = "_path_to_an_artisan"; break;
		case 419:
			$quest_name = "_get_a_pet"; break;
		case 420:
			$quest_name = "_little_wing"; break;
		case 421:
			$quest_name = "_little_wings_big_adventure"; break;
		case 422:
			$quest_name = "_repent_your_sins"; break;
		case 426:
			$quest_name = "_quest_for_fishing_shot"; break;
		case 431:
			$quest_name = "_wedding_march"; break;
		case 432:
			$quest_name = "_birthday_party_song"; break;
		case 501:
			$quest_name = "_proof_of_clan_alliance"; break;
		case 503:
			$quest_name = "_pursuit_of_clan_ambition"; break;
		case 504:
			$quest_name = "_competition_for_the_bandit_stronghold"; break;
		case 505:
			$quest_name = "_blood_offering"; break;
		case 508:
			$quest_name = "_a_clan_s_reputation"; break;
		case 509:
			$quest_name = "_the_clan_s_prestigue"; break;
		case 601:
			$quest_name = "_watching_eyes"; break;
		case 602:
			$quest_name = "_shadow_of_light"; break;
		case 603:
			$quest_name = "_daimon_the_white-eyed_-_part_1"; break;
		case 604:
			$quest_name = "_daimon_the_white-eyed_-_part_2"; break;
		case 605:
			$quest_name = "_alliance_with_ketra_orcs"; break;
		case 606:
			$quest_name = "_war_with_varka_silenos"; break;
		case 607:
			$quest_name = "_prove_your_courage"; break;
		case 608:
			$quest_name = "_slay_the_enemy_commander"; break;
		case 609:
			$quest_name = "_magical_power_of_water_-_part_1"; break;
		case 610:
			$quest_name = "_magical_power_of_water_-_part_2"; break;
		case 611:
			$quest_name = "_alliance_with_varka_silenos"; break;
		case 612:
			$quest_name = "_war_with_ketra_orcs"; break;
		case 613:
			$quest_name = "_prove_your_courage"; break;
		case 614:
			$quest_name = "_slay_the_enemy_commander"; break;
		case 615:
			$quest_name = "_magical_power_of_fire_-_part_1"; break;
		case 616:
			$quest_name = "_magical_power_of_fire_-_part_2"; break;
		case 617:
			$quest_name = "_gather_the_flames"; break;
		case 618:
			$quest_name = "_into_the_flame"; break;
		case 619:
			$quest_name = "_relics_of_the_old_empire"; break;
		case 620:
			$quest_name = "_four_goblets"; break;
		case 621:
			$quest_name = "_egg_delivery"; break;
		case 622:
			$quest_name = "_delivery_of_special_liquor"; break;
		case 623:
			$quest_name = "_the_finest_food"; break;
		case 624:
			$quest_name = "_the_finest_ingredients_-_part_1"; break;
		case 625:
			$quest_name = "_the_finest_ingredients_-_part_2"; break;
		case 626:
			$quest_name = "_a_dark_twilight"; break;
		case 627:
			$quest_name = "_heart_in_search_of_power"; break;
		case 628:
			$quest_name = "_hunt_of_the_golden_ram_mercenary_force"; break;
		case 629:
			$quest_name = "_clean_up_the_swamp_of_screams"; break;
		case 631:
			$quest_name = "_delicious_top_choice_meat"; break;
		case 632:
			$quest_name = "_necromancers_request"; break;
		case 633:
			$quest_name = "_in_the_forgotten_village"; break;
		case 634:
			$quest_name = "_in_search_of_fragments_of_dimension"; break;
		case 635:
			$quest_name = "_in_the_dimension_rift"; break;
		case 636:
			$quest_name = "_truth_beyond_the_gate"; break;
		case 637:
			$quest_name = "_through_the_gate_once_more"; break;
		case 638:
			$quest_name = "_seekers_of_the_holy_grail"; break;
		case 640:
			$quest_name = "_the_zero_hour"; break;
		case 642:
			$quest_name = "_a_powerful_primeval_creature"; break;
		case 643:
			$quest_name = "_rise_and_fall_of_the_elroki_tribe"; break;
		case 647:
			$quest_name = "_influx_of_the_machines"; break;
		case 648:
			$quest_name = "_an_ice_merchant_dream"; break;
		case 662:
			$quest_name = "_a_game_of_cards"; break;
		case 663:
			$quest_name = "_seductive_whispers"; break;
		case 688:
			$quest_name = "_defeat_the_elrokian_raiders"; break;
		default:
			$quest_name = "_quest_name_error"; break;
	}
	return $quest_name;
}

$noPvpItems = " AND i.item_id != '21923' AND i.item_id != '21924' AND i.item_id != '21925' AND i.item_id != '21926' AND i.item_id != '21931' AND i.item_id != '21932' AND i.item_id != '21933' AND i.item_id != '21934' AND i.item_id != '21936' AND i.item_id != '21938' AND i.item_id != '21943' AND i.item_id != '21944' AND i.item_id != '21945' AND i.item_id != '21946' AND i.item_id != '21951' AND i.item_id != '21952' AND i.item_id != '21953' AND i.item_id != '21954' AND i.item_id != '21956' AND i.item_id != '21958' AND i.item_id != '21963' AND i.item_id != '21964' AND i.item_id != '21965' AND i.item_id != '21970' AND i.item_id != '21971' AND i.item_id != '21972' AND i.item_id != '10752' AND i.item_id != '10753' AND i.item_id != '10754' AND i.item_id != '10755' AND i.item_id != '10756' AND i.item_id != '10757' AND i.item_id != '10758' AND i.item_id != '16134' AND i.item_id != '10759' AND i.item_id != '16135' AND i.item_id != '10760' AND i.item_id != '16136' AND i.item_id != '10761' AND i.item_id != '16137' AND i.item_id != '10762' AND i.item_id != '16138' AND i.item_id != '10763' AND i.item_id != '16139' AND i.item_id != '10764' AND i.item_id != '16140' AND i.item_id != '10765' AND i.item_id != '16141' AND i.item_id != '10766' AND i.item_id != '16142' AND i.item_id != '10767' AND i.item_id != '16143' AND i.item_id != '10768' AND i.item_id != '16144' AND i.item_id != '10769' AND i.item_id != '16145' AND i.item_id != '10770' AND i.item_id != '16146' AND i.item_id != '10771' AND i.item_id != '16147' AND i.item_id != '10772' AND i.item_id != '10773' AND i.item_id != '16149' AND i.item_id != '10774' AND i.item_id != '10775' AND i.item_id != '16151' AND i.item_id != '10776' AND i.item_id != '10777' AND i.item_id != '16153' AND i.item_id != '10778' AND i.item_id != '10779' AND i.item_id != '14363' AND i.item_id != '16155' AND i.item_id != '10780' AND i.item_id != '14364' AND i.item_id != '10781' AND i.item_id != '14365' AND i.item_id != '16157' AND i.item_id != '10782' AND i.item_id != '14366' AND i.item_id != '10783' AND i.item_id != '14367' AND i.item_id != '16159' AND i.item_id != '10784' AND i.item_id != '14368' AND i.item_id != '10785' AND i.item_id != '14369' AND i.item_id != '10786' AND i.item_id != '14370' AND i.item_id != '10787' AND i.item_id != '14371' AND i.item_id != '10788' AND i.item_id != '14372' AND i.item_id != '10789' AND i.item_id != '14373' AND i.item_id != '10790' AND i.item_id != '14374' AND i.item_id != '10791' AND i.item_id != '14375' AND i.item_id != '10792' AND i.item_id != '14376' AND i.item_id != '16168' AND i.item_id != '10793' AND i.item_id != '14377' AND i.item_id != '15913' AND i.item_id != '16169' AND i.item_id != '10794' AND i.item_id != '14378' AND i.item_id != '15914' AND i.item_id != '16170' AND i.item_id != '10795' AND i.item_id != '14379' AND i.item_id != '15915' AND i.item_id != '16171' AND i.item_id != '10796' AND i.item_id != '14380' AND i.item_id != '15916' AND i.item_id != '16172' AND i.item_id != '10797' AND i.item_id != '14381' AND i.item_id != '15917' AND i.item_id != '16173' AND i.item_id != '10798' AND i.item_id != '14382' AND i.item_id != '15918' AND i.item_id != '16174' AND i.item_id != '10799' AND i.item_id != '14383' AND i.item_id != '15919' AND i.item_id != '16175' AND i.item_id != '10800' AND i.item_id != '14384' AND i.item_id != '15920' AND i.item_id != '16176' AND i.item_id != '10801' AND i.item_id != '14385' AND i.item_id != '15921' AND i.item_id != '10802' AND i.item_id != '14386' AND i.item_id != '15922' AND i.item_id != '10803' AND i.item_id != '14387' AND i.item_id != '15923' AND i.item_id != '16179' AND i.item_id != '10804' AND i.item_id != '12852' AND i.item_id != '14388' AND i.item_id != '15924' AND i.item_id != '16180' AND i.item_id != '10805' AND i.item_id != '12853' AND i.item_id != '14389' AND i.item_id != '15925' AND i.item_id != '16181' AND i.item_id != '10806' AND i.item_id != '12854' AND i.item_id != '14390' AND i.item_id != '15926' AND i.item_id != '16182' AND i.item_id != '10807' AND i.item_id != '12855' AND i.item_id != '14391' AND i.item_id != '15927' AND i.item_id != '16183' AND i.item_id != '10808' AND i.item_id != '12856' AND i.item_id != '14392' AND i.item_id != '15928' AND i.item_id != '16184' AND i.item_id != '10809' AND i.item_id != '12857' AND i.item_id != '14393' AND i.item_id != '15929' AND i.item_id != '16185' AND i.item_id != '10810' AND i.item_id != '12858' AND i.item_id != '14394' AND i.item_id != '15930' AND i.item_id != '16186' AND i.item_id != '10811' AND i.item_id != '12859' AND i.item_id != '14395' AND i.item_id != '15931' AND i.item_id != '16187' AND i.item_id != '10812' AND i.item_id != '12860' AND i.item_id != '14396' AND i.item_id != '15932' AND i.item_id != '16188' AND i.item_id != '10813' AND i.item_id != '12861' AND i.item_id != '14397' AND i.item_id != '15933' AND i.item_id != '16189' AND i.item_id != '10814' AND i.item_id != '12862' AND i.item_id != '14398' AND i.item_id != '15934' AND i.item_id != '16190' AND i.item_id != '10815' AND i.item_id != '12863' AND i.item_id != '14399' AND i.item_id != '15935' AND i.item_id != '16191' AND i.item_id != '10816' AND i.item_id != '12864' AND i.item_id != '14400' AND i.item_id != '15936' AND i.item_id != '16192' AND i.item_id != '10817' AND i.item_id != '12865' AND i.item_id != '14401' AND i.item_id != '15937' AND i.item_id != '16193' AND i.item_id != '10818' AND i.item_id != '12866' AND i.item_id != '14402' AND i.item_id != '15938' AND i.item_id != '16194' AND i.item_id != '10819' AND i.item_id != '12867' AND i.item_id != '14403' AND i.item_id != '15939' AND i.item_id != '16195' AND i.item_id != '10820' AND i.item_id != '12868' AND i.item_id != '14404' AND i.item_id != '15940' AND i.item_id != '16196' AND i.item_id != '10821' AND i.item_id != '12869' AND i.item_id != '14405' AND i.item_id != '15941' AND i.item_id != '16197' AND i.item_id != '10822' AND i.item_id != '12870' AND i.item_id != '14406' AND i.item_id != '15942' AND i.item_id != '16198' AND i.item_id != '10823' AND i.item_id != '12871' AND i.item_id != '14407' AND i.item_id != '15943' AND i.item_id != '16199' AND i.item_id != '10824' AND i.item_id != '12872' AND i.item_id != '14408' AND i.item_id != '15944' AND i.item_id != '16200' AND i.item_id != '10825' AND i.item_id != '12873' AND i.item_id != '14409' AND i.item_id != '15945' AND i.item_id != '16201' AND i.item_id != '10826' AND i.item_id != '12874' AND i.item_id != '14410' AND i.item_id != '15946' AND i.item_id != '16202' AND i.item_id != '10827' AND i.item_id != '12875' AND i.item_id != '14411' AND i.item_id != '15947' AND i.item_id != '16203' AND i.item_id != '10828' AND i.item_id != '12876' AND i.item_id != '14412' AND i.item_id != '15948' AND i.item_id != '16204' AND i.item_id != '10829' AND i.item_id != '12877' AND i.item_id != '14413' AND i.item_id != '15949' AND i.item_id != '16205' AND i.item_id != '10830' AND i.item_id != '12878' AND i.item_id != '14414' AND i.item_id != '15950' AND i.item_id != '16206' AND i.item_id != '10831' AND i.item_id != '12879' AND i.item_id != '14415' AND i.item_id != '15951' AND i.item_id != '16207' AND i.item_id != '10832' AND i.item_id != '12880' AND i.item_id != '14416' AND i.item_id != '15952' AND i.item_id != '16208' AND i.item_id != '10833' AND i.item_id != '12881' AND i.item_id != '14417' AND i.item_id != '15953' AND i.item_id != '16209' AND i.item_id != '10834' AND i.item_id != '12882' AND i.item_id != '14418' AND i.item_id != '15954' AND i.item_id != '16210' AND i.item_id != '10835' AND i.item_id != '12883' AND i.item_id != '14419' AND i.item_id != '15955' AND i.item_id != '16211' AND i.item_id != '12884' AND i.item_id != '14420' AND i.item_id != '15956' AND i.item_id != '16212' AND i.item_id != '12885' AND i.item_id != '14421' AND i.item_id != '15957' AND i.item_id != '16213' AND i.item_id != '12886' AND i.item_id != '14422' AND i.item_id != '15958' AND i.item_id != '16214' AND i.item_id != '12887' AND i.item_id != '14423' AND i.item_id != '15959' AND i.item_id != '16215' AND i.item_id != '12888' AND i.item_id != '14424' AND i.item_id != '15960' AND i.item_id != '16216' AND i.item_id != '12889' AND i.item_id != '14425' AND i.item_id != '15961' AND i.item_id != '16217' AND i.item_id != '12890' AND i.item_id != '14426' AND i.item_id != '15962' AND i.item_id != '16218' AND i.item_id != '12891' AND i.item_id != '14427' AND i.item_id != '15963' AND i.item_id != '16219' AND i.item_id != '12892' AND i.item_id != '14428' AND i.item_id != '15964' AND i.item_id != '16220' AND i.item_id != '12893' AND i.item_id != '14429' AND i.item_id != '15965' AND i.item_id != '12894' AND i.item_id != '14430' AND i.item_id != '15966' AND i.item_id != '12895' AND i.item_id != '14431' AND i.item_id != '15967' AND i.item_id != '12896' AND i.item_id != '14432' AND i.item_id != '15968' AND i.item_id != '12897' AND i.item_id != '14433' AND i.item_id != '15969' AND i.item_id != '12898' AND i.item_id != '14434' AND i.item_id != '15970' AND i.item_id != '12899' AND i.item_id != '14435' AND i.item_id != '15971' AND i.item_id != '12900' AND i.item_id != '14436' AND i.item_id != '15972' AND i.item_id != '12901' AND i.item_id != '14437' AND i.item_id != '15973' AND i.item_id != '12902' AND i.item_id != '14438' AND i.item_id != '15974' AND i.item_id != '12903' AND i.item_id != '14439' AND i.item_id != '15975' AND i.item_id != '12904' AND i.item_id != '14440' AND i.item_id != '15976' AND i.item_id != '12905' AND i.item_id != '14441' AND i.item_id != '15977' AND i.item_id != '12906' AND i.item_id != '14442' AND i.item_id != '15978' AND i.item_id != '12907' AND i.item_id != '14443' AND i.item_id != '15979' AND i.item_id != '12908' AND i.item_id != '14444' AND i.item_id != '15980' AND i.item_id != '12909' AND i.item_id != '14445' AND i.item_id != '15981' AND i.item_id != '12910' AND i.item_id != '14446' AND i.item_id != '15982' AND i.item_id != '12911' AND i.item_id != '14447' AND i.item_id != '15983' AND i.item_id != '12912' AND i.item_id != '14448' AND i.item_id != '15984' AND i.item_id != '12913' AND i.item_id != '14449' AND i.item_id != '15985' AND i.item_id != '12914' AND i.item_id != '14450' AND i.item_id != '15986' AND i.item_id != '12915' AND i.item_id != '14451' AND i.item_id != '15987' AND i.item_id != '12916' AND i.item_id != '14452' AND i.item_id != '15988' AND i.item_id != '12917' AND i.item_id != '14453' AND i.item_id != '15989' AND i.item_id != '12918' AND i.item_id != '14454' AND i.item_id != '15990' AND i.item_id != '12919' AND i.item_id != '14455' AND i.item_id != '15991' AND i.item_id != '12920' AND i.item_id != '14456' AND i.item_id != '15992' AND i.item_id != '12921' AND i.item_id != '14457' AND i.item_id != '15993' AND i.item_id != '12922' AND i.item_id != '14458' AND i.item_id != '15994' AND i.item_id != '12923' AND i.item_id != '14459' AND i.item_id != '15995' AND i.item_id != '12924' AND i.item_id != '14460' AND i.item_id != '15996' AND i.item_id != '12925' AND i.item_id != '14461' AND i.item_id != '15997' AND i.item_id != '12926' AND i.item_id != '14462' AND i.item_id != '15998' AND i.item_id != '12927' AND i.item_id != '14463' AND i.item_id != '15999' AND i.item_id != '12928' AND i.item_id != '14464' AND i.item_id != '16000' AND i.item_id != '12929' AND i.item_id != '14465' AND i.item_id != '16001' AND i.item_id != '12930' AND i.item_id != '14466' AND i.item_id != '16002' AND i.item_id != '12931' AND i.item_id != '14467' AND i.item_id != '16003' AND i.item_id != '12932' AND i.item_id != '14468' AND i.item_id != '16004' AND i.item_id != '12933' AND i.item_id != '14469' AND i.item_id != '16005' AND i.item_id != '12934' AND i.item_id != '14470' AND i.item_id != '16006' AND i.item_id != '12935' AND i.item_id != '14471' AND i.item_id != '16007' AND i.item_id != '12936' AND i.item_id != '14472' AND i.item_id != '16008' AND i.item_id != '12937' AND i.item_id != '14473' AND i.item_id != '16009' AND i.item_id != '12938' AND i.item_id != '14474' AND i.item_id != '16010' AND i.item_id != '12939' AND i.item_id != '14475' AND i.item_id != '16011' AND i.item_id != '12940' AND i.item_id != '14476' AND i.item_id != '16012' AND i.item_id != '12941' AND i.item_id != '14477' AND i.item_id != '16013' AND i.item_id != '12942' AND i.item_id != '14478' AND i.item_id != '16014' AND i.item_id != '12943' AND i.item_id != '14479' AND i.item_id != '16015' AND i.item_id != '12944' AND i.item_id != '14480' AND i.item_id != '16016' AND i.item_id != '12945' AND i.item_id != '14481' AND i.item_id != '16017' AND i.item_id != '12946' AND i.item_id != '14482' AND i.item_id != '16018' AND i.item_id != '12947' AND i.item_id != '14483' AND i.item_id != '16019' AND i.item_id != '12948' AND i.item_id != '14484' AND i.item_id != '16020' AND i.item_id != '12949' AND i.item_id != '14485' AND i.item_id != '16021' AND i.item_id != '12950' AND i.item_id != '14486' AND i.item_id != '16022' AND i.item_id != '12951' AND i.item_id != '14487' AND i.item_id != '16023' AND i.item_id != '12952' AND i.item_id != '14488' AND i.item_id != '16024' AND i.item_id != '12953' AND i.item_id != '14489' AND i.item_id != '12954' AND i.item_id != '14490' AND i.item_id != '12955' AND i.item_id != '14491' AND i.item_id != '12956' AND i.item_id != '14492' AND i.item_id != '12957' AND i.item_id != '14493' AND i.item_id != '12958' AND i.item_id != '14494' AND i.item_id != '12959' AND i.item_id != '14495' AND i.item_id != '12960' AND i.item_id != '14496' AND i.item_id != '12961' AND i.item_id != '14497' AND i.item_id != '12962' AND i.item_id != '14498' AND i.item_id != '12963' AND i.item_id != '14499' AND i.item_id != '12964' AND i.item_id != '14500' AND i.item_id != '12965' AND i.item_id != '14501' AND i.item_id != '12966' AND i.item_id != '14502' AND i.item_id != '12967' AND i.item_id != '14503' AND i.item_id != '12968' AND i.item_id != '14504' AND i.item_id != '12969' AND i.item_id != '14505' AND i.item_id != '12970' AND i.item_id != '14506' AND i.item_id != '10667' AND i.item_id != '12971' AND i.item_id != '14507' AND i.item_id != '10668' AND i.item_id != '12972' AND i.item_id != '14508' AND i.item_id != '10669' AND i.item_id != '12973' AND i.item_id != '14509' AND i.item_id != '10670' AND i.item_id != '12974' AND i.item_id != '14510' AND i.item_id != '10671' AND i.item_id != '12975' AND i.item_id != '14511' AND i.item_id != '10672' AND i.item_id != '12976' AND i.item_id != '14512' AND i.item_id != '10673' AND i.item_id != '12977' AND i.item_id != '14513' AND i.item_id != '10674' AND i.item_id != '14514' AND i.item_id != '10675' AND i.item_id != '14515' AND i.item_id != '10676' AND i.item_id != '14516' AND i.item_id != '10677' AND i.item_id != '14517' AND i.item_id != '10678' AND i.item_id != '14518' AND i.item_id != '10679' AND i.item_id != '14519' AND i.item_id != '10680' AND i.item_id != '14520' AND i.item_id != '10681' AND i.item_id != '14521' AND i.item_id != '10682' AND i.item_id != '14522' AND i.item_id != '10683' AND i.item_id != '14523' AND i.item_id != '10684' AND i.item_id != '14524' AND i.item_id != '10685' AND i.item_id != '14525' AND i.item_id != '10686' AND i.item_id != '10687' AND i.item_id != '10688' AND i.item_id != '14528' AND i.item_id != '10689' AND i.item_id != '14529' AND i.item_id != '10690' AND i.item_id != '10691' AND i.item_id != '10692' AND i.item_id != '10693' AND i.item_id != '10694' AND i.item_id != '10695' AND i.item_id != '10696' AND i.item_id != '10697' AND i.item_id != '10698' AND i.item_id != '10699' AND i.item_id != '10700' AND i.item_id != '10701' AND i.item_id != '10702' AND i.item_id != '10703' AND i.item_id != '10704' AND i.item_id != '10705' AND i.item_id != '10706' AND i.item_id != '10707' AND i.item_id != '10708' AND i.item_id != '10709' AND i.item_id != '10710' AND i.item_id != '10711' AND i.item_id != '10712' AND i.item_id != '10713' AND i.item_id != '10714' AND i.item_id != '10715' AND i.item_id != '10716' AND i.item_id != '10717' AND i.item_id != '10718' AND i.item_id != '14558' AND i.item_id != '10719' AND i.item_id != '10720' AND i.item_id != '10721' AND i.item_id != '10722' AND i.item_id != '10723' AND i.item_id != '10724' AND i.item_id != '10725' AND i.item_id != '10726' AND i.item_id != '10727' AND i.item_id != '10728' AND i.item_id != '10729' AND i.item_id != '10730' AND i.item_id != '10731' AND i.item_id != '10732' AND i.item_id != '10733' AND i.item_id != '10734' AND i.item_id != '10735' AND i.item_id != '10736' AND i.item_id != '10737' AND i.item_id != '10738' AND i.item_id != '10739' AND i.item_id != '10740' AND i.item_id != '10741' AND i.item_id != '10742' AND i.item_id != '10743' AND i.item_id != '10744' AND i.item_id != '10745' AND i.item_id != '10746' AND i.item_id != '10747' AND i.item_id != '10748' AND i.item_id != '10749' AND i.item_id != '10750' AND i.item_id != '10751'";

function url_completa(){
	$url = explode("/", $_SERVER['REQUEST_URI']);
	$url_completa = null;
	for($x=0;$x<(count($url)-1);$x++){
		$url_completa .= $url[$x]."/";
	}
	return $_SERVER['SERVER_NAME'].$url_completa;
}

function envia_email($nome_remetente, $email_remetente, $assunto, $mensagem, $contato = false){
	global $host_smtp, $host_port, $email_contato, $senha_email_contato;
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';
	$mail = new PHPMailer\PHPMailer\PHPMailer(true);
	try {
		$mail->IsSMTP(); 
		$mail->Host = $host_smtp;
		$mail->SMTPAuth = true;
		$mail->Username = $email_contato;
		$mail->Password = $senha_email_contato;
		$mail->Port = $host_port;
		if($contato){
			$mail->setFrom($email_remetente, $nome_remetente);
			$mail->addAddress($email_contato);
		}else{
			$mail->setFrom($email_contato, $nome_remetente);
			$mail->addAddress($email_remetente);
		}
		$mail->WordWrap = 50;
		$mail->IsHTML(true);
		$mail->CharSet = "utf-8";
		$mail->Subject = $assunto;
		$mail->Body = $mensagem;
		return $mail->Send();
	} catch (Exception $e) {
		return false;
	}
}

function ICP_encrypt($pass){
	global $db, $L2jVersaoRussa, $L2jVersaoClassic;
	if($db){
		if($L2jVersaoRussa){
			return base64_encode(hash('whirlpool', $pass, true));
		}elseif($L2jVersaoClassic){
			return base64_encode(hash("sha3-256", $pass, true));
		}else{
			return base64_encode(hash("sha1", $pass, true));
		}
	}else{
		$key = array();
		$dst = array();
		$i = 0;
		$nBytes = strlen($pass);
		while ($i < $nBytes){
			$i++;
			$key[$i] = ord(substr($pass, $i - 1, 1));
			$dst[$i] = $key[$i];
		}
		$rslt = $key[1] + $key[2]*256 + $key[3]*65536 + $key[4]*16777216;
		$one = $rslt * 213119 + 2529077;
		$one = $one - intval($one/ 4294967296) * 4294967296;
		$rslt = $key[5] + $key[6]*256 + $key[7]*65536 + $key[8]*16777216;
		$two = $rslt * 213247 + 2529089;
		$two = $two - intval($two/ 4294967296) * 4294967296;
		$rslt = $key[9] + $key[10]*256 + $key[11]*65536 + $key[12]*16777216;
		$three = $rslt * 213203 + 2529589;
		$three = $three - intval($three/ 4294967296) * 4294967296;
		$rslt = $key[13] + $key[14]*256 + $key[15]*65536 + $key[16]*16777216;
		$four = $rslt * 213821 + 2529997;
		$four = $four - intval($four/ 4294967296) * 4294967296;
		$key[4] = intval($one/16777216);
		$key[3] = intval(($one - $key[4] * 16777216) / 65535);
		$key[2] = intval(($one - $key[4] * 16777216 - $key[3] * 65536) / 256);
		$key[1] = intval(($one - $key[4] * 16777216 - $key[3] * 65536 - $key[2] * 256));
		$key[8] = intval($two/16777216);
		$key[7] = intval(($two - $key[8] * 16777216) / 65535);
		$key[6] = intval(($two - $key[8] * 16777216 - $key[7] * 65536) / 256);
		$key[5] = intval(($two - $key[8] * 16777216 - $key[7] * 65536 - $key[6] * 256));
		$key[12] = intval($three/16777216);
		$key[11] = intval(($three - $key[12] * 16777216) / 65535);
		$key[10] = intval(($three - $key[12] * 16777216 - $key[11] * 65536) / 256);
		$key[9] = intval(($three - $key[12] * 16777216 - $key[11] * 65536 - $key[10] * 256));
		$key[16] = intval($four/16777216);
		$key[15] = intval(($four - $key[16] * 16777216) / 65535);
		$key[14] = intval(($four - $key[16] * 16777216 - $key[15] * 65536) / 256);
		$key[13] = intval(($four - $key[16] * 16777216 - $key[15] * 65536 - $key[14] * 256));
		$dst[1] = $dst[1] ^ $key[1];
		$i=1;
		while ($i<16){
			$i++;
			$dst[$i] = $dst[$i] ^ $dst[$i-1] ^ $key[$i];
		}
		$i=0;
		while ($i<16){
			$i++;
			if ($dst[$i] == 0) {
				$dst[$i] = 102;
			}
		}
		$encrypt = "0x";
		$i=0;
		while ($i<16){
			$i++;
			if ($dst[$i] < 16) {
				$encrypt = $encrypt . "0" . dechex($dst[$i]);
			} else {
				$encrypt = $encrypt . dechex($dst[$i]);
			}
		}
		return $encrypt;
	}
	return null;
}

function logar($login,$senha){
	global $db, $conn, $L2jVersaoAcis, $l2jOldAcis, $db_ip, $db_user, $db_pass;
	$username = trim($login);
	$password = trim($senha);
	$errMsg = null;
	$errMsg .= empty($username) ? 'Enter your username.<br>' : null;
	$errMsg .= empty($password) ? 'Enter your password.' : null;
	if(empty($errMsg)){
		$pass = ICP_encrypt($password);
		if($db){
			$accesslevel_accounts = info_table("accounts","accesslevel");
			if($L2jVersaoAcis && !$l2jOldAcis){
				$records = $conn->prepare('SELECT login, password, '.$accesslevel_accounts.' FROM accounts WHERE login = ? AND '.$accesslevel_accounts.' >= "0"');
				$records->execute([$username]);
				$results = $records->fetch(PDO::FETCH_ASSOC);
				if($results){
					if(password_verify($password, $results["password"])){
						$_SESSION["UsuarioLogin"] = $results['login'];
						$_SESSION["UsuarioNivel"] = $results[$accesslevel_accounts];
						return "success";
					}else{
						return "pass_login_error";
					}
				}else{
					return "pass_login_error";
				}
			}else{
				$records = $conn->prepare('SELECT login, '.$accesslevel_accounts.' FROM accounts WHERE login = ? AND password = ? AND '.$accesslevel_accounts.' >= "0"');
				$records->execute([$username,$pass]);
				$results = $records->fetch(PDO::FETCH_ASSOC);
				if($results){
					$_SESSION["UsuarioLogin"] = $results['login'];
					$_SESSION["UsuarioNivel"] = $results[$accesslevel_accounts];
					return "success";
				}else{
					return "pass_login_error";
				}
			}
		}else{
			try {
				$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
				$conn = new PDO($conect_base, $db_user, $db_pass);
			} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}
			$records = $conn->prepare("SELECT TOP 1 u.account, (SELECT uid FROM user_account WHERE account = u.account) AS uid, CASE WHEN (SELECT access_level FROM icp_accounts WHERE login = u.account) IS NULL THEN '0' ELSE (SELECT access_level FROM icp_accounts WHERE login = u.account) END AS access_level FROM user_auth AS u WHERE u.account = ? AND u.password LIKE ".$pass);
			$records->execute([$username]);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if($results){
				$_SESSION["UsuarioLogin"] = trim($results['account']);
				$_SESSION["UsuarioNivel"] = $results['access_level'];
				$_SESSION["UsuarioId"] = $results['uid'];
				return "success";
			}else{
				return "pass_login_error";
			}
		}
	}else{
		return "ERROR!<br><br>".$errMsg;
	}
}

function reg_user($login,$email,$senha1,$senha2){
	global $db, $conn, $nomedoservidor, $CreateAccWithEmail, $L2jVersaoAcis, $l2jOldAcis, $db_ip, $db_user, $db_pass;
	$username = trim($login);
	$email = trim($email);
	$password1 = trim($senha1);
	$password2 = trim($senha2);
	$errMsg = null;
	$errMsg .= empty($username) ? 'Digite um usuário.<br>' : null;
	$errMsg .= empty($email) ? 'Digite um email.<br>' : null;
	$errMsg .= !filter_var($email, FILTER_VALIDATE_EMAIL) ? 'Email inválido!<br>' : null;
	$errMsg .= empty($password1) ? 'Digite uma senha.<br>' : null;
	$errMsg .= empty($password2) ? 'Digite a confirmação de senha.<br>' : null;
	$errMsg .= $password1 != $password2 ? 'As senhas não coincindem.<br>' : null;
	$errMsg .= empty($errMsg) ? null : '<br>Tete novamente';
	if(empty($errMsg)){
		$pass = ICP_encrypt($password1);
		$acc_id = strtotime(date("Y/m/d H:i:s"));
		$assunto = "Cadastro - ".$nomedoservidor;
		$mensagem = "<center><font color='#0066FF' size='5'><b><u>".$username."</u>, bem vindo ao ".$nomedoservidor."</b>!</font><br><br>Este é um email automático gerado por nosso site para completar o seu cadastro.<br><br>Para ativar a sua conta, clique no link abaixo:<br><a href='http://".url_completa()."index.php?icp=activate&acc=".$acc_id."'>http://".url_completa()."index.php?icp=activate&acc=".$acc_id."</a><br><br>Seu Login é : <b>".$username."</b><br>Sua senha é : <b>".$password1."</b><br><br>Você pode mudar a sua senha em nosso painel de controle a qualquer instante.<br><br>Tenha um bom jogo!<br><br>Atenciosamente...<br><br><h3><u>Staff ".$nomedoservidor."</u></h3></center>";
		if($db){
			$records = $conn->prepare('SELECT login FROM accounts WHERE login = ?');
			$records->execute([$username]);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if(!$results){
				$accesslevel_accounts = info_table("accounts","accesslevel");
				if($CreateAccWithEmail){
					if(!envia_email($nomedoservidor, $email, $assunto, $mensagem)){
						return respostaPainel('ERROR!<br><br>A conta não foi criada.<br>Por favor, contate um Admin.');
					}else{
						$insert_acc = $conn->prepare('INSERT INTO accounts (login, password, '.$accesslevel_accounts.') VALUES (?,?,"-1")');
						$pass = $L2jVersaoAcis && !$l2jOldAcis ? str_replace("$2y$", "$2a$", password_hash($password1, PASSWORD_BCRYPT)) : $pass;
						$insert_acc->execute([$username,$pass]);
						$insert_icp = $conn->prepare('INSERT INTO icp_accounts (login, email, acc_id) VALUES (?,?,?)');
						$insert_icp->execute([$username,$email,$acc_id]);
						return respostaPainel('Cadastrado com sucesso.<br>Acesse seu email para ativar sua conta.<br>Caso o email não cheque, cheque sua caixa de Spams.<br>Bem vindo ao '.$nomedoservidor.'!').redirecionaPainel("pags/painel.php",3000);
					}
				}else{
					$insert_acc = $conn->prepare('INSERT INTO accounts (login, password, '.$accesslevel_accounts.') VALUES (?,?,"0")');
					$pass = $L2jVersaoAcis && !$l2jOldAcis ? str_replace("$2y$", "$2a$", password_hash($password1, PASSWORD_BCRYPT)) : $pass;
					$insert_acc->execute([$username,$pass]);
					$insert_icp = $conn->prepare('INSERT INTO icp_accounts (login, email, acc_id, status) VALUES (?,?,?,"1")');
					$insert_icp->execute([$username,$email,$acc_id]);
					return respostaPainel('Cadastrado com sucesso.<br>Bem vindo ao '.$nomedoservidor.'!').redirecionaPainel("pags/painel.php",3000);
				}
			}else{
				return respostaPainel('O nome de usuário '.$username.' já está em uso.<br>Escolha outro e tente novamente.');
			}
		}else{
			try {
				$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
				$conn = new PDO($conect_base, $db_user, $db_pass);
			} catch(PDOException $e) {
				return respostaPainel("ERROR: ".$e->getMessage());
			}
			$records = $conn->prepare('SELECT account FROM user_auth WHERE account = ?', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$records->execute([$username]);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if(!$results){
				$answer = ICP_encrypt("icpnetworks");
				$ssn = mt_rand(1000000,9999999).mt_rand(100000,999999);
				if($CreateAccWithEmail){
					if(!envia_email($nomedoservidor, $email, $assunto, $mensagem)){
						return respostaPainel('ERROR!<br><br>A conta não foi criada.<br>Por favor, contate um Admin.');
					}else{
						$insert_ssn = $conn->prepare("INSERT INTO [ssn](ssn,name,email,job,phone,zip,addr_main,addr_etc,account_num) VALUES (?,?,?,?,?,?,?,?,?)");
						$insert_ssn->execute([$ssn,$username,$email,"0","telphone","123456","","","1"]);
						$insert_acc = $conn->prepare("INSERT INTO user_account (account,pay_stat) VALUES (?,?)");
						$insert_acc->execute([$username,"1"]);
						$insert_inf = $conn->prepare("INSERT INTO user_info (account,ssn,kind) VALUES (?,?,?)");
						$insert_inf->execute([$username,$ssn,"99"]);
						$insert_auth = $conn->prepare("INSERT INTO user_auth (account,password,quiz1,quiz2,answer1,answer2) VALUES (?,".$pass.",'','',".$answer.",".$answer.")");
						$insert_auth->execute([$username]);
						$insert_icp = $conn->prepare("INSERT INTO icp_accounts (login, email, acc_id, status, access_level) VALUES (?,?,?,'1','0')");
						$insert_icp->execute([$username,$email,$acc_id]);
						return respostaPainel('Cadastrado com sucesso.<br>Acesse seu email para ativar sua conta.<br>Caso o email não cheque, cheque sua caixa de Spams.<br>Bem vindo ao '.$nomedoservidor.'!').redirecionaPainel("pags/painel.php",3000);
					}
				}else{
					$insert_ssn = $conn->prepare("INSERT INTO [ssn](ssn,name,email,job,phone,zip,addr_main,addr_etc,account_num) VALUES (?,?,?,?,?,?,?,?,?)");
					$insert_ssn->execute([$ssn,$username,$email,"0","telphone","123456","","","1"]);
					$insert_acc = $conn->prepare("INSERT INTO user_account (account,pay_stat) VALUES (?,?)");
					$insert_acc->execute([$username,"1"]);
					$insert_inf = $conn->prepare("INSERT INTO user_info (account,ssn,kind) VALUES (?,?,?)");
					$insert_inf->execute([$username,$ssn,"99"]);
					$insert_auth = $conn->prepare("INSERT INTO user_auth (account,password,quiz1,quiz2,answer1,answer2) VALUES (?,".$pass.",'','',".$answer.",".$answer.")");
					$insert_auth->execute([$username]);
					$insert_icp = $conn->prepare("INSERT INTO icp_accounts (login, email, acc_id, status, access_level) VALUES (?,?,?,'1','0')");
					$insert_icp->execute([$username,$email,$acc_id]);
					return respostaPainel('Cadastrado com sucesso.<br>Bem vindo ao '.$nomedoservidor.'!').redirecionaPainel("pags/painel.php",3000);
				}
			}else{
				return respostaPainel('O nome de usuário '.$username.' já está em uso.<br>Escolha outro e tente novamente.');
			}
		}
	}else{
		return respostaPainel("ERROR!<br><br>".$errMsg);
	}
}

function contact($name,$email,$assunto,$msg){
	$name = trim($name);
	$email = trim($email);
	$assunto = trim($assunto);
	$msg = trim($msg);
	$errMsg = null;
	$errMsg .= empty($name) ? 'Digite um nome.\\n' : null;
	$errMsg .= empty($email) ? 'Digite um email.\\n' : null;
	$errMsg .= !filter_var($email, FILTER_VALIDATE_EMAIL) ? 'Email inválido!\\n' : null;
	$errMsg .= empty($assunto) ? 'Digite um assunto.\\n' : null;
	$errMsg .= empty($msg) ? 'Digite a mensagem.\\n' : null;
	$errMsg .= empty($errMsg) ? null : '\\nTete novamente';
	if(empty($errMsg)){
		if(envia_email($name,$email,$assunto,$msg,true)){
			echo "<script>$('#contact_name').val('');$('#contact_email').val('');$('#contact_subject').val('');$('#contact_msg').val('');</script>";
			return resposta("Mensagem enviada com sucesso!\\nAguarde que em breve retornaremos\\n\\nObrigado.");
		}else{
			return resposta("Houve um erro ao tentar enviar a mensagem!");
		}
	}else{
		return resposta("ERROR!\\n\\n".$errMsg);
	}
}

function ativa_acc($hash){
	global $db, $conn, $db_ip, $db_user, $db_pass;
	$acc_id = preg_replace("/(\D)/i" , "" , $hash);
	if($acc_id > '0'){
		if(!$db){
			try {
				$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
				$conn = new PDO($conect_base, $db_user, $db_pass);
			} catch(PDOException $e) {
				return false;
			}
		}
		$records = $conn->prepare('SELECT login FROM icp_accounts WHERE acc_id = ? AND status = "0"', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$acc_id]);
		if($records->rowCount() == 1){
			while ($row = $records->fetchObject()) {
				$up_acc = $conn->prepare('UPDATE icp_accounts SET status = "1" WHERE acc_id = ? AND status = "0"');
				$up_acc->execute([$acc_id]);
				if($db){
					$accesslevel_accounts = info_table("accounts","accesslevel");
					$up_icp = $conn->prepare('UPDATE accounts SET '.$accesslevel_accounts.' = "0" WHERE login = ? AND '.$accesslevel_accounts.' = "-1"');
				}else{
					// libera login (em desenvolvimento para l2off)
				}
				$up_icp->execute([$row->login]);
				return true;
			}
		}
	}
	return false;
}

function recuperacao($login,$email){
	global $db, $conn, $nomedoservidor, $RememberAccWithEmail, $L2jVersaoAcis, $l2jOldAcis, $db_ip, $db_user, $db_pass;
	$username = trim($login);
	$email = trim($email);
	$errMsg = null;
	$errMsg .= empty($username) ? 'Digite um usuário.<br>' : null;
	$errMsg .= empty($email) ? 'Digite um email.<br>' : null;
	$errMsg .= !filter_var($email, FILTER_VALIDATE_EMAIL) ? 'Email inválido!' : null;
	if(empty($errMsg)){
		$CaracteresAceitos = 'abcdxywzABCDZYWZ0123456789'; 
		$max = strlen($CaracteresAceitos)-1;
		$password = null;
		for($i=0; $i < 8; $i++) { 
			$password .= $CaracteresAceitos{mt_rand(0, $max)}; 
		}
		$newpass = ICP_encrypt($password);
		$assunto = "Recuperação de Senha - ".$nomedoservidor;
		$mensagem = "<center><font color='#0066FF' size='5'><b>Olá <u>".$username."</u></b>!</font><br><br>Esse é um email automático gerado pelo nosso site para recuperação de senha.<br><br>Seu Login é : <b>".$username."</b><br>Sua nova senha é : <b>".$password."</b><br><br>Você pode alterar a sua senha em nosso painel de controle a qualquer instante.<br><br>Atenciosamente...<br><br><h3><u>Staff ".$nomedoservidor."</u></h3></center>";
		if(!$db){
			try {
				$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
				$conn = new PDO($conect_base, $db_user, $db_pass);
			} catch(PDOException $e) {
				return respostaPainel("ERROR: ".$e->getMessage());
			}
		}
		$records = $conn->prepare('SELECT login FROM icp_accounts WHERE login = ? AND email = ?', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$username,$email]);
		if($records->rowCount() == 1){
			if($RememberAccWithEmail){
				if(!envia_email($nomedoservidor, $email, $assunto, $mensagem)){
					return respostaPainel('Erro: Falha no envio de email.<br>Por favor, contate um Admin.');
				}else{
					if($db){
						$newpass = $L2jVersaoAcis && !$l2jOldAcis ? str_replace("$2y$", "$2a$", password_hash($password, PASSWORD_BCRYPT)) : $newpass;
						$alterandosenha = $conn->prepare('UPDATE accounts SET password = "'.$newpass.'" WHERE login = ?');
						$alterandosenha->execute([$username]);
						return respostaPainel('Uma nova senha foi enviada para o seu email.').redirecionaPainel("pags/painel.php",3000);
					}else{
						$alterandosenha = $conn->prepare('UPDATE user_auth SET password = '.$newpass.' WHERE account = ?');
						$alterandosenha->execute([$username]);
						return respostaPainel('Uma nova senha foi enviada para o seu email.').redirecionaPainel("pags/painel.php",3000);
					}
				}
			}else{
				if($db){
					$newpass = $L2jVersaoAcis && !$l2jOldAcis ? str_replace("$2y$", "$2a$", password_hash($password, PASSWORD_BCRYPT)) : $newpass;
					$alterandosenha = $conn->prepare('UPDATE accounts SET password = "'.$newpass.'" WHERE login = ?');
					$alterandosenha->execute([$username]);
					return respostaPainel('Olá '.$username.', por favor, anote sua nova senha : '.$password.'<br><br>Obrigado!<br>Staff '.$nomedoservidor).redirecionaPainel("pags/painel.php",4000);
				}else{
					$alterandosenha = $conn->prepare('UPDATE user_auth SET password = '.$newpass.' WHERE account = ?');
					$alterandosenha->execute([$username]);
					return respostaPainel('Olá '.$username.', por favor, anote sua nova senha : '.$password.'<br><br>Obrigado!<br>Staff '.$nomedoservidor).redirecionaPainel("pags/painel.php",4000);
				}
			}
		}else{
			return respostaPainel('Os dados não conferem!<br>Tente novamente.');
		}
	}else{
		return respostaPainel("ERROR!<br><br>".$errMsg);
	}
}

function troca_senha($senha1,$senha2,$senha3,$login){
	global $db, $conn, $L2jVersaoAcis, $l2jOldAcis, $db_ip, $db_user, $db_pass;
	$senha1 = trim($senha1);
	$senha2 = trim($senha2);
	$senha3 = trim($senha3);
	$username = trim($login);
	$errMsg .= empty($senha1) ? 'Digite a senha atual.\\n' : null;
	$errMsg .= empty($senha2) ? 'Digite sua nova senha.\\n' : null;
	$errMsg .= empty($senha3) ? 'Repita a sua nova senha.\\n' : null;
	$errMsg .= empty($username) ? 'Login inválido.\\n' : null;
	$errMsg .= $senha2 != $senha3 ? 'As novas senhas não coincindem.\\n' : null;
	$errMsg .= empty($errMsg) ? null : '\\nTente novamente';
	if(empty($errMsg)){
		if($db){
			if($L2jVersaoAcis && !$l2jOldAcis){
				$records = $conn->prepare('SELECT password FROM accounts WHERE login = ?');
				$records->execute([$username]);
				$results = $records->fetch(PDO::FETCH_ASSOC);
				if($results){
					if(password_verify($senha1, $results["password"])){
						$alterandosenha = $conn->prepare('UPDATE accounts SET password = ? WHERE login = ?');
						$alterandosenha->execute([str_replace("$2y$", "$2a$", password_hash($senha2, PASSWORD_BCRYPT)),$username]);
						echo "<script>$('#36').val('');$('#37').val('');$('#38').val('');</script>";
						return resposta('Senha alterada com sucesso!');
					}else{
						return resposta('Senha inválida.\\nTente novamente.');
					}
				}else{
					return resposta('Senha inválida.\\nTente novamente.');
				}
			}else{
				$records = $conn->prepare('SELECT password FROM accounts WHERE login = ? AND password = ?');
				$records->execute([$username,ICP_encrypt($senha1)]);
				if($records->rowCount() == 1){
					$alterandosenha = $conn->prepare('UPDATE accounts SET password = ? WHERE password = ? AND login = ?');
					$alterandosenha->execute([ICP_encrypt($senha2),ICP_encrypt($senha1),$username]);
					echo "<script>$('#36').val('');$('#37').val('');$('#38').val('');</script>";
					return resposta('Senha alterada com sucesso!');
				}else{
					return resposta('Senha inválida.\\nTente novamente.');
				}
			}
		}else{
			try {
				$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
				$conn = new PDO($conect_base, $db_user, $db_pass);
			} catch(PDOException $e) {
				return respostaPainel("ERROR: ".$e->getMessage());
			}
			$records = $conn->prepare('SELECT password FROM user_auth WHERE account = ? AND password = '.ICP_encrypt($senha1), array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$records->execute([$username]);
			if($records->rowCount() == 1){
				$alterandosenha = $conn->prepare('UPDATE user_auth SET password = '.ICP_encrypt($senha2).' WHERE password = '.ICP_encrypt($senha1).' AND account = ?');
				$alterandosenha->execute([$username]);
				echo "<script>$('#36').val('');$('#37').val('');$('#38').val('');</script>";
				return resposta('Senha alterada com sucesso!');
			}else{
				return resposta('Senha inválida.\\nTente novamente.');
			}
		}
	}else{
		return resposta("ERROR!\\n\\n".$errMsg);
	}
}

function classChange($charid,$login,$newBaseId){
	global $db, $conn, $baseClasChangePrice, $L2jVersaoRussa, $nomeMoeda, $allowBaseClassChange;
	$username = trim($login);
	$errMsg .= empty($charid) || $charid == "Select..." ? 'O Char não foi encontrado.\\nO Char pode estar Online, deslogue-o!' : null;
	$errMsg .= empty($newBaseId) || $newBaseId == "Select..." ? 'Nova classe inválida.\\n' : null;
	$errMsg .= empty($username) ? 'Login inválido.\\n' : null;
	$errMsg .= !$allowBaseClassChange ? 'Base class change is disabled.\\n' : null;
	$errMsg .= empty($errMsg) ? null : '\\nTente novamente';
	if(empty($errMsg)){
		if($db){
			$charid_characters = info_table("characters","charid");
			if($L2jVersaoRussa){
				$charid_subclass = info_table("character_subclasses","charid");
				$records = $conn->prepare("SELECT (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') AS base_class FROM characters WHERE account_name = ? AND ".$charid_characters." = ? AND online='0'");
			}else{
				$records = $conn->prepare("SELECT base_class FROM characters WHERE account_name = ? AND ".$charid_characters." = ? AND online='0'");
			}
		}else{
			$records = $conn->prepare("SELECT *, (subjob0_class) AS base_class FROM user_data WHERE account_name = ? AND char_id = ? AND login < logout", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute([$login,$charid]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			$credit = credit($login);
			if($credit >= $baseClasChangePrice){
				if($results["base_class"] >= 123 and $results["base_class"] <= 136){
					return resposta("Sorry, the requisition has been canceled!\\nKamaeis are prohibited of base change.");
				}else{
					debitDonate($baseClasChangePrice,$login);
					addDonateLog("Base classe change, ".classe_name($results["base_class"])." to ".classe_name($newBaseId).".",$baseClasChangePrice,$login);
					if($db){
						$charid_skills = info_table("character_skills","charid");
						$deleting_skills = $conn->prepare("DELETE FROM character_skills WHERE ".$charid_skills." = ?");
						$deleting_skills->execute([$charid]);
						$charid_oly = info_table("olympiad_nobles","charid");
						$updating_oly = $conn->prepare("UPDATE olympiad_nobles SET class_id = ?, olympiad_points = '0', competitions_done = '0' WHERE ".$charid_oly." = ?");
						$updating_oly->execute([$newBaseId,$charid]);
						if(!$L2jVersaoRussa){
							$charid_heroes = info_table("heroes","charid");
							$updating_hero = $conn->prepare("UPDATE heroes SET class_id = ? WHERE ".$charid_heroes." = ?");
							$updating_hero->execute([$newBaseId,$charid]);
						}
						if($L2jVersaoRussa){
							$changing_base = $conn->prepare("UPDATE character_subclasses AS c SET c.class_id = ? WHERE (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_subclass." AND online='0') = ? AND ".$charid_subclass." = ?");
							$changing_base->execute([$newBaseId,$login,$charid]);
						}else{
							if($newBaseId >= 88 and $newBaseId <= 98){ $raca = 0; }
							elseif($newBaseId >= 99 and $newBaseId <= 105){ $raca = 1; }
							elseif($newBaseId >= 106 and $newBaseId <= 112){ $raca = 2; }
							elseif($newBaseId >= 113 and $newBaseId <= 116){ $raca = 3; }
							elseif($newBaseId >= 117 and $newBaseId <= 118){ $raca = 4; }
							$changing_base = $conn->prepare("UPDATE characters SET base_class = ?, race = ?, classid = ? WHERE account_name = ? AND ".$charid_characters." = ? AND online='0'");
							$changing_base->execute([$newBaseId,$raca,$newBaseId,$login,$charid]);
						}
					}else{
						global $db_ip, $cached_port;
						kick_char($charid);
						if($newBaseId >= 88 and $newBaseId <= 98){ $raca = 0; }
						elseif($newBaseId >= 99 and $newBaseId <= 105){ $raca = 1; }
						elseif($newBaseId >= 106 and $newBaseId <= 112){ $raca = 2; }
						elseif($newBaseId >= 113 and $newBaseId <= 116){ $raca = 3; }
						elseif($newBaseId >= 117 and $newBaseId <= 118){ $raca = 4; }
						$buf=pack("cVVVVVVV",16,$charid,$results["gender"],$raca,$newBaseId,$results["face_index"],$results["hair_shape_index"],$results["hair_color_index"]).tounicode("admin");
						$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
						fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
						fclose($cachedsocket);
					}
					return resposta("A Classe Base do Char foi trocada com sucesso!");
				}
			}else{
				return resposta("Você não tem moedas suficientes para efetuar esta ação.\\nSeu saldo atual é de ".$credit." ".$nomeMoeda.".\\nFaça uma doação e aumente o seu saldo.");
			}
		}else{
			return resposta("O Char não foi encontrado.\\nO Char pode estar Online, deslogue-o!\\nTente novamente.");
		}
	}else{
		return resposta("ERROR!\\n\\n".$errMsg);
	}
}

function nickChange($charid,$nick,$login){
	global $db, $conn, $nickChangePrice, $L2jVersaoRussa, $nomeMoeda, $allowNickChange;
	$nick = trim($nick);
	$errMsg .= empty($charid) || $charid == "Select..." ? 'The character was not found.\\nThe character can be Online, logout!' : null;
	$errMsg .= empty($nick) ? 'Invalid nickname.\\n' : null;
	$errMsg .= empty($login) ? 'Invalid login.\\n' : null;
	$errMsg .= !$allowNickChange ? 'Nickname change is disabled.\\n' : null;
	$errMsg .= empty($errMsg) ? null : '\\nTry again';
	if(empty($errMsg)){
		$charid_characters = $db ? info_table("characters","charid") : "char_id";
		$tab_characters = $db ? "characters" : "user_data";
		$where_characters = $db ? "online='0'" : "login < logout";
		$records = $conn->prepare("SELECT * FROM ".$tab_characters." WHERE account_name = ? AND ".$charid_characters." = ? AND ".$where_characters, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$login,$charid]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			$nick_check = $conn->prepare("SELECT char_name FROM ".$tab_characters." WHERE char_name = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$nick_check->execute([$nick]);
			if($nick_check->rowCount() > 0){
				return resposta("This nick name is already in use.\\nChoose another and try again.");
			}else{
				$credit = credit($_SESSION["UsuarioLogin"]);
				if($credit >= $nickChangePrice){
					debitDonate($nickChangePrice,$login);
					addDonateLog("Nick name change, ".$results["char_name"]." to ".$nick.".",$nickChangePrice,$login);
					if($db){
						if(!$L2jVersaoRussa){
							$charid_oly = info_table("olympiad_nobles","charid");
							$update_oly = $conn->prepare("UPDATE olympiad_nobles SET char_name = ? WHERE ".$charid_oly." = ?");
							$update_oly->execute([$nick,$charid]);
							$charid_heroes = info_table("heroes","charid");
							$update_hero = $conn->prepare("UPDATE heroes SET char_name = ? WHERE ".$charid_heroes." = ?");
							$update_hero->execute([$nick,$charid]);
						}
						$nick_changing = $conn->prepare("UPDATE characters SET char_name = ? WHERE account_name = ? AND ".$charid_characters." = ? AND online='0'");
						$nick_changing->execute([$nick,$login,$charid]);
					}else{
						global $db_ip, $cached_port;
						kick_char($charid);
						$buf=pack("cV",4,$charid).tounicode($nick).tounicode("admin");
						$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
						fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
						fclose($cachedsocket);
					}
					?>
					<script>
						$('#charid option:selected').text('<?php echo $nick; ?>');
						$('#new_nick').val('');
					</script>
					<?php
					return resposta("The nick name has been successfully changed to ".$nick.".");
				}else{
					return resposta("You dont have enough coins to execute this action.\\nYour current balance is ".$credit." ".$nomeMoeda.".\\nMake a donation and increase your balance.");
				}
			}
		}else{
			return resposta("The character was not found.\\nThe character maybe is online!\\nTry again.");
		}
	}else{
		return resposta("ERROR!\\n\\n".$errMsg);
	}
}

function sexChange($charid,$sex,$login){
	global $db, $conn, $sexChangePrice, $L2jVersaoRussa, $nomeMoeda, $allowSexChange;
	$errMsg .= empty($charid) || $charid == "Select..." ? 'The character was not found.\\nThe character can be Online, logout!' : null;
	$errMsg .= empty($login) ? 'Invalid login.\\n' : null;
	$errMsg .= !$allowSexChange ? 'Sex change is disabled.\\n' : null;
	$errMsg .= empty($errMsg) ? null : '\\nTry again';
	if(empty($errMsg)){
		if($db){
			$charid_characters = info_table("characters","charid");
			$charid_subclass = $L2jVersaoRussa ? info_table("character_subclasses","charid") : null;
			$base_class = $L2jVersaoRussa ? ", (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') AS base_class" : null;
			$records = $conn->prepare("SELECT c.*".$base_class." FROM characters AS c WHERE c.account_name = ? AND c.".$charid_characters." = ? AND c.online='0'");
		}else{
			$records = $conn->prepare("SELECT *, (class) AS base_class, (gender) AS sex FROM user_data WHERE account_name = ? AND char_id = ? AND login < logout", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute([$login,$charid]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			$credit = credit($_SESSION["UsuarioLogin"]);
			if($credit >= $sexChangePrice){
				if($results["base_class"] >= 123 and $results["base_class"] <= 136){
					return resposta("Sorry, the requisition has been canceled!\\nKamaeis are prohibited of sex change.");
				}else{
					$currentSex = $results["sex"] == 0 ? "Male" : "Female";
					$newSex = $sex == 0 ? "Male" : "Female";
					debitDonate($sexChangePrice,$login);
					addDonateLog("Sex change, ".$results["char_name"]." of ".$currentSex." to ".$newSex.".",$sexChangePrice,$login);
					if($db){
						$sex_changing = $conn->prepare("UPDATE characters SET sex = ? WHERE account_name = ? AND ".$charid_characters." = ? AND online='0'");
						$sex_changing->execute([$sex,$login,$charid]);
					}else{
						global $db_ip, $cached_port;
						kick_char($charid);
						if($results["base_class"] >= 88 and $results["base_class"] <= 98){ $raca = 0; }
						elseif($results["base_class"] >= 99 and $results["base_class"] <= 105){ $raca = 1; }
						elseif($results["base_class"] >= 106 and $results["base_class"] <= 112){ $raca = 2; }
						elseif($results["base_class"] >= 113 and $results["base_class"] <= 116){ $raca = 3; }
						elseif($results["base_class"] >= 117 and $results["base_class"] <= 118){ $raca = 4; }
						$buf=pack("cVVVVVVV",16,$charid,$sex,$raca,$results["base_class"],$results["face_index"],$results["hair_shape_index"],$results["hair_color_index"]).tounicode("admin");
						$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
						fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
						fclose($cachedsocket);
					}
					return resposta("The sex has been successfully changed to ".$newSex.".");
				}
			}else{
				return resposta("You dont have enough coins to execute this action.\\nYour current balance is ".$credit." ".$nomeMoeda.".\\nMake a donation and increase your balance.");
			}
		}else{
			return resposta("The character was not found.\\nThe character maybe is online!\\nTry again.");
		}
	}else{
		return resposta("ERROR!\\n\\n".$errMsg);
	}
}

function accountChange($charid,$account,$login){
	global $db, $conn, $accountChangePrice, $nomeMoeda, $allowAccountChange;
	$account = trim($account);
	$errMsg .= empty($charid) || $charid == "Select..." ? 'The character was not found.\\nThe character can be Online, logout!' : null;
	$errMsg .= empty($account) ? 'Invalid account.\\n' : null;
	$errMsg .= empty($login) ? 'Invalid login.\\n' : null;
	$errMsg .= !$allowAccountChange ? 'Account change is disabled.\\n' : null;
	$errMsg .= empty($errMsg) ? null : '\\nTry again';
	if(empty($errMsg)){
		if($db){
			$charid_characters = info_table("characters","charid");
			$records = $conn->prepare("SELECT * FROM characters WHERE account_name = ? AND ".$charid_characters." = ? AND online='0'");
		}else{
			$records = $conn->prepare("SELECT * FROM user_data WHERE account_name = ? AND char_id = ? AND login < logout", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute([$login,$charid]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			if($db){
				$nick_check = $conn->prepare("SELECT login FROM accounts WHERE login = ?");
			}else{
				global $db_ip, $db_user, $db_pass, $db_name, $cached_port;
				try {
					$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
					$conn = new PDO($conect_base, $db_user, $db_pass);
				} catch(PDOException $e) {
					echo 'ERROR: ' . $e->getMessage();
				}
				$nick_check = $conn->prepare("SELECT uid FROM user_account WHERE account = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			}
			$nick_check->execute([$account]);
			if($nick_check->rowCount() == 1){
				if(!$db){
					try {
						$conect_base = "sqlsrv:Server=".$db_ip.";Database=".$db_name;
						$conn = new PDO($conect_base, $db_user, $db_pass);
					} catch(PDOException $e) {
						echo 'ERROR: ' . $e->getMessage();
					}
				}
				$credit = credit($_SESSION["UsuarioLogin"]);
				if($credit >= $accountChangePrice){
					debitDonate($accountChangePrice,$login);
					addDonateLog("Account change, ".$results["char_name"]." changed to ".$account.".",$accountChangePrice,$login);
					if($db){
						$acc_changing = $conn->prepare("UPDATE characters SET account_name = ? WHERE account_name = ? AND ".$charid_characters." = ? AND online='0'");
						$acc_changing->execute([$account,$login,$charid]);
					}else{
						kick_char($charid);
						$results2 = $nick_check->fetch(PDO::FETCH_ASSOC);
						$buf=pack("cVV",31,$charid,$results2["uid"]).tounicode($account).tounicode("admin");
						$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
						fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
						fclose($cachedsocket);
					}
					?>
					<script>
						$('#charid option:selected').remove();
						$('#new_account').val('');
					</script>
					<?php
					return resposta("The character has been successfully transferred to the ".$account." account.");
				}else{
					return resposta("You dont have enough coins to execute this action.\\nYour current balance is ".$credit." ".$nomeMoeda.".\\nMake a donation and increase your balance.");
				}
			}else{
				return resposta("The account ".$account." does not exist.\\nTry again.");
			}
		}else{
			return resposta("The character was not found.\\nThe character maybe is online!\\nTry again.");
		}
	}else{
		return resposta("ERROR!\\n\\n".$errMsg);
	}
}

function emailChange($email1,$email2,$login){
	global $db, $conn, $db_ip, $db_user, $db_pass;
	$errMsg .= empty($email1) ? 'Fill in the current email field.\\n' : null;
	$errMsg .= empty($email2) ? 'Fill in the new email field.\\n' : null;
	$errMsg .= !filter_var($email1, FILTER_VALIDATE_EMAIL) ? 'Incorrect current email.\\n' : null;
	$errMsg .= !filter_var($email2, FILTER_VALIDATE_EMAIL) ? 'Incorrect new email.\\n' : null;
	$errMsg .= empty($login) ? 'Invalid login.\\n' : null;
	$errMsg .= empty($errMsg) ? null : '\\nTry again';
	if(empty($errMsg)){
		if(!$db){
			try {
				$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
				$conn = new PDO($conect_base, $db_user, $db_pass);
			} catch(PDOException $e) {
				return respostaPainel("ERROR: ".$e->getMessage());
			}
		}
		$records = $conn->prepare("SELECT * FROM icp_accounts WHERE login = ? AND email = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$login,$email1]);
		if($records->rowCount() == 1){
			$email_changing = $conn->prepare("UPDATE icp_accounts SET email = ? WHERE login = ? AND email = ?");
			$email_changing->execute([$email2,$login,$email1]);
			?>
			<script>
				$("#email1").val('');
				$("#email2").val('');
			</script>
			<?php
			return resposta("Email successfully exchanged.");
		}else{
			return resposta("Incorrect current email.\\nTry again.");
		}
	}else{
		return resposta("ERROR!\\n\\n".$errMsg);
	}
}

function reward($login){
	global $db, $conn, $allowRewardSystem;
	if(!$allowRewardSystem)
		return "0;0;0";
	if($db){
		$reward = $conn->prepare("SELECT SUM(c.onlinetime) AS online_time, SUM(c.pvpkills) AS pvp, SUM(c.pkkills) AS pk, IF((SELECT COUNT(*) FROM icp_rewards WHERE account = c.account_name) IS NULL, '0;0;0', (SELECT CONCAT(onlinetime, ';', pvpkills, ';', pkkills) FROM icp_rewards WHERE account = c.account_name)) AS reward_records FROM characters AS c WHERE c.account_name = ?");
		$reward->execute([$login]);
		if($reward->rowCount() > 0){
			while ($row = $reward->fetchObject()) {
				$reward_records = explode(";", $row->reward_records);
				return ($row->online_time - $reward_records[0]).";".($row->pvp - $reward_records[1]).";".($row->pk - $reward_records[2]);
			}
		}else{
			return "0;0;0";
		}
	}else{
		$reward1 = $conn->prepare("SELECT CONCAT(onlinetime, ';', pvpkills, ';', pkkills) AS reward_records FROM icp_rewards WHERE account = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$reward1->execute([$login]);
		$results = $reward1->fetch(PDO::FETCH_ASSOC);
		$reward_records = explode(";", $results ? $results["reward_records"] : "0;0;0");
		$reward2 = $conn->prepare("SELECT SUM(c.use_time) AS online_time, SUM(c.Duel) AS pvp, SUM(c.PK) AS pk FROM user_data AS c WHERE c.account_name = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$reward2->execute([$login]);
		if($reward2->rowCount() > 0){
			while ($row2 = $reward2->fetchObject()) {
				return ($row2->online_time - $reward_records[0]).";".($row2->pvp - $reward_records[1]).";".($row2->pk - $reward_records[2]);
			}
		}else{
			return "0;0;0";
		}
	}
}

function getItemName($itemId){
	global $conn;
	$item = $conn->prepare("SELECT itemName FROM icp_icons WHERE itemId = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$item->execute([$itemId]);
	$results = $item->fetch(PDO::FETCH_ASSOC);
	if($results){
		return $results["itemName"];
	}else{
		return "No_name";
	}
}

function giveCoins($login,$qtd){
	global $db, $conn, $nomeMoeda;
	if(empty($login) || empty($qtd))
		return resposta("Você precisa preencher o nome da conta e a quantidade de moedas para entregar!");
	if($db)
		$doacao = $conn->prepare('SELECT login FROM accounts WHERE login = ?');
	else{
		global $db_ip, $db_user, $db_pass, $db_name, $cached_port;
		try {
			$conect_base = "sqlsrv:Server=".$db_ip.";Database=lin2db";
			$conn = new PDO($conect_base, $db_user, $db_pass);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
		$doacao = $conn->prepare('SELECT account FROM user_auth WHERE account = ?', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$doacao->execute([$login]);
	if($doacao->rowCount() == 1){
		if(!$db){
			try {
				$conect_base = "sqlsrv:Server=".$db_ip.";Database=".$db_name;
				$conn = new PDO($conect_base, $db_user, $db_pass);
			} catch(PDOException $e) {
				echo 'ERROR: ' . $e->getMessage();
			}
		}
		addDonate($qtd,$login);
		addDonateLog("ADM ".$_SESSION["UsuarioLogin"]." gave ".$qtd." ".$nomeMoeda." to the ".$login." account.",$qtd,$login);
		echo "<script>$('#giveAccount').val('');$('#giveCoins').val('');</script>";
		return resposta("Moedas adicionadas com sucesso!");
	}
	return resposta("Conta não encontrada! As moedas não foram adicionadas.");
}

function credit($login){
	global $conn;
	$doacao = $conn->prepare('SELECT (total - used) AS credit FROM icp_donate WHERE login = ?', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$doacao->execute([$login]);
	if($doacao->rowCount() == 1){
		while ($row = $doacao->fetchObject()) {
			return $row->credit;
		}
	}
	return 0;
}

function addDonate($value,$login){
	global $conn;
	$doacao = $conn->prepare('SELECT * FROM icp_donate WHERE login = ?', array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$doacao->execute([$login]);
	if($doacao->rowCount() == 1){
		$adding = $conn->prepare("UPDATE icp_donate SET total = (total + ?) WHERE login = ?");
		$adding->execute([$value,$login]);
	}else{
		$adding = $conn->prepare("INSERT INTO icp_donate (login, total, used) VALUES (?,?,'0')");
		$adding->execute([$login,$value]);
	}
}

function debitDonate($value,$login){
	global $conn;
	$debiting = $conn->prepare("UPDATE icp_donate SET used = (used + ?) WHERE login = ?");
	$debiting->execute([$value,$login]);
	echo "<script>$('#balance').html('".number_format(credit($login),0,".",".")."')</script>";
}

function addDonateLog($description,$cost,$login){
	global $conn;
	$donateLog = $conn->prepare("INSERT INTO icp_donate_log (date, description, cost, account) VALUES (?,?,?,?)");
	$donateLog->execute([date("Y-m-d H:i:s"),$description,$cost,$login]);
}

function donateHistory($login){
	global $conn;
	$result = null;
	$records = $conn->prepare("SELECT * FROM icp_donate_history WHERE account = ? ORDER BY date DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$result .= $row->method.";".$row->status.";".$row->amount.";".$row->currency.";".$row->price.";".$row->date."|";
		}
	}
	return empty($result) ? null : $result;
}

function donateLog($login){
	global $conn;
	$result = null;
	$records = $conn->prepare("SELECT * FROM icp_donate_log WHERE account = ? ORDER BY date DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$result .= $row->date.";".$row->description.";".$row->cost."|";
		}
	}
	return empty($result) ? null : $result;
}

function donateAdmLog(){
	if($_SESSION["UsuarioNivel"] != 1)
		return null;
	global $conn;
	$result = null;
	$records = $conn->prepare("SELECT * FROM icp_donate_log ORDER BY date DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$result .= $row->date.";".$row->description.";".$row->cost.";".$row->account."|";
		}
	}
	return empty($result) ? null : $result;
}

function rankCastelosAttDef($type,$casteloID,$dono){
	global $db, $conn, $L2jVersaoRussa;
	$AttDef = null;
	if($db){
		if(!$L2jVersaoRussa){
			$records = $conn->prepare('SELECT (SELECT clan_name FROM clan_data WHERE clan_id = sc.clan_id) AS clan FROM siege_clans AS sc WHERE sc.castle_id = ? AND sc.type = ?');
		}else{
			$records = $conn->prepare('SELECT (SELECT name FROM clan_subpledges WHERE clan_id = sc.clan_id AND type = "0") AS clan FROM siege_clans AS sc WHERE sc.residence_id = ? AND sc.type = ?');
		}
	}else{
		$records = $conn->prepare('SELECT p.name AS defensores FROM castle_war cw left join pledge p on p.pledge_id=cw.pledge_id WHERE cw.castle_id = ? AND cw.type = ?');
	}
	$records->execute([$casteloID,$type]);
	while ($row = $records->fetchObject()) {
		$AttDef .= $row->clan.":";
	}
	if($type == 1)
		if(empty($AttDef))
			$retorno = "Nenhum:";
		else
			$retorno = $AttDef;
	else
		if(empty($AttDef))
			if($dono == "Sem dono")
				$retorno = "NPC's:";
			else
				$retorno = $dono.":";
		else
			$retorno = $dono.":".$AttDef;
	return empty($retorno) ? null : $retorno;
}

function rankCastelos(){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic;
	$rankCastelos = null;
	if($db){
		if($L2jVersaoRussa){
			$records = $conn->prepare('SELECT id, name, (tax_percent) AS taxPercent, (siege_date) AS siegeDate FROM castle');
		}elseif($L2jVersaoClassic){
			$records = $conn->prepare('SELECT id, name, (siege_date) AS siegeDate FROM castle');
		}else{
			$records = $conn->prepare('SELECT id, name, taxPercent, siegeDate FROM castle');
		}
	}else{
		$records = $conn->prepare('SELECT id, name, (tax_rate) AS taxPercent, (next_war_time) AS siegeDate FROM castle');
	}
	$records->execute();
	while ($row = $records->fetchObject()) {
		$dono = rankCastelosDono($row->id);
		$rankCastelos .= $row->name."|".$dono."|".$row->taxPercent."|".$row->siegeDate."|".rankCastelosAttDef(1,$row->id,$dono)."|".rankCastelosAttDef(2,$row->id,$dono).";";
	}
	return $rankCastelos;
}

function rankCastelosDono($casteloID){
	global $db, $conn, $L2jVersaoRussa;
	$ClanDono = null;
	if($db){
		if(!$L2jVersaoRussa){
			$records = $conn->prepare('SELECT (clan_name) AS clan FROM clan_data WHERE hasCastle = ?');
		}else{
			$records = $conn->prepare('SELECT (cs.name) AS clan FROM clan_subpledges AS cs WHERE (SELECT clan_id FROM clan_data WHERE hasCastle = ? AND clan_id = cs.clan_id AND type = "0") = cs.clan_id');
		}
	}else{
		$records = $conn->prepare('SELECT (name) AS clan FROM Pledge WHERE castle_id = ?');
	}
	$records->execute([$casteloID]);
	while ($row = $records->fetchObject()) {
		$ClanDono = $row->clan;
	}
	return empty($ClanDono) ? "Sem dono" : $ClanDono;
}

function clanHallName($id){
	switch ($id){
		case 21:
			$name = "Fortress of Resistance"; break;
		case 22:
			$name = "Moonstone Hall"; break;
		case 23:
			$name = "Onyx Hall"; break;
		case 24:
			$name = "Topaz Hall"; break;
		case 25:
			$name = "Ruby Hall"; break;
		case 26:
			$name = "Crystal Hall"; break;
		case 27:
			$name = "Onyx Hall"; break;
		case 28:
			$name = "Sapphire Hall"; break;
		case 29:
			$name = "Moonstone Hall"; break;
		case 30:
			$name = "Emerald Hall"; break;
		case 31:
			$name = "The Atramental Barracks"; break;
		case 32:
			$name = "The Scarlet Barracks"; break;
		case 33:
			$name = "The Viridian Barracks"; break;
		case 34:
			$name = "Devastated Castle"; break;
		case 35:
			$name = "Bandit Stronghold"; break;
		case 36:
			$name = "The Golden Chamber"; break;
		case 37:
			$name = "The Silver Chamber"; break;
		case 38:
			$name = "The Mithril Chamber"; break;
		case 39:
			$name = "Silver Manor"; break;
		case 40:
			$name = "Gold Manor"; break;
		case 41:
			$name = "The Bronze Chamber"; break;
		case 42:
			$name = "The Golden Chamber"; break;
		case 43:
			$name = "The Silver Chamber"; break;
		case 44:
			$name = "The Mithril Chamber"; break;
		case 45:
			$name = "The Bronze Chamber"; break;
		case 46:
			$name = "Silver Manor"; break;
		case 47:
			$name = "Moonstone Hall"; break;
		case 48:
			$name = "Onyx Hall"; break;
		case 49:
			$name = "Emerald Hall"; break;
		case 50:
			$name = "Sapphire Hall"; break;
		case 51:
			$name = "Mont Chamber"; break;
		case 52:
			$name = "Astaire Chamber"; break;
		case 53:
			$name = "Aria Chamber"; break;
		case 54:
			$name = "Yiana Chamber"; break;
		case 55:
			$name = "Roien Chamber"; break;
		case 56:
			$name = "Luna Chamber"; break;
		case 57:
			$name = "Traban Chamber"; break;
		case 58:
			$name = "Eisen Hall"; break;
		case 59:
			$name = "Heavy Metal Hall"; break;
		case 60:
			$name = "Molten Ore Hall"; break;
		case 61:
			$name = "Titan Hall"; break;
		case 62:
			$name = "Rainbow Springs"; break;
		case 63:
			$name = "Beast Farm"; break;
		case 64:
			$name = "Fortress of the Dead"; break;
		case 65:
			$name = "Emerald Hall"; break;
		case 66:
			$name = "Crystal Hall"; break;
		case 67:
			$name = "Sapphire Hall"; break;
		case 68:
			$name = "Aquamarine Hall"; break;
		case 69:
			$name = "Blue Barracks"; break;
		case 70:
			$name = "Brown Barracks"; break;
		case 71:
			$name = "Yellow Barracks"; break;
		case 72:
			$name = "White Barracks"; break;
		case 73:
			$name = "Black Barracks"; break;
		case 74:
			$name = "Green Barracks"; break;
		default:
			$name = "n/a"; break;
	}
	return $name;
}

function clanHallLoc($id){
	if($id >= 22 && $id <= 25)
		$loc = "Gludio";
	elseif($id >= 26 && $id <= 30)
		$loc = "Gludin";
	elseif($id >= 31 && $id <= 33)
		$loc = "Dion";
	elseif($id >= 36 && $id <= 41)
		$loc = "Aden";
	elseif($id >= 42 && $id <= 46)
		$loc = "Giran";
	elseif($id >= 47 && $id <= 50)
		$loc = "Goddard";
	elseif($id >= 51 && $id <= 57)
		$loc = "Rune";
	elseif($id >= 58 && $id <= 61)
		$loc = "Schuttgart";
	elseif($id >= 65 && $id <= 68)
		$loc = "Gludio";
	elseif($id >= 69 && $id <= 72)
		$loc = "Dion";
	elseif($id >= 73 && $id <= 74)
		$loc = "Floran";
	else
		$loc = null;
	return $loc;
}

function rankClanHall(){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic;
	$rank = null;
	if($db){
		if($L2jVersaoRussa){
			$records = $conn->prepare("SELECT ch.id, IF((SELECT (SELECT name FROM clan_subpledges WHERE clan_id = cd.clan_id AND type='0') AS cname FROM clan_data AS cd WHERE cd.hasHideout = ch.id) IS NULL, '-', (SELECT (SELECT name FROM clan_subpledges WHERE clan_id = cd.clan_id AND type='0') AS cname FROM clan_data AS cd WHERE cd.hasHideout = ch.id)) AS clan_name, IF((SELECT (SELECT ally_name FROM ally_data WHERE ally_id = cd.ally_id) AS aname FROM clan_data AS cd WHERE cd.hasHideout = ch.id) IS NULL, '-', (SELECT (SELECT ally_name FROM ally_data WHERE ally_id = cd.ally_id) AS aname FROM clan_data AS cd WHERE cd.hasHideout = ch.id)) AS ally_name FROM clanhall AS ch WHERE ch.id != '21' AND ch.id != '34' AND ch.id != '35' AND ch.id != '62' AND ch.id != '63' AND ch.id != '64' ORDER BY ch.id ASC");
			$records->execute();
			if($records->rowCount() > 0){
				while ($row = $records->fetchObject()) {
					$rank .= clanHallName($row->id).";".clanHallLoc($row->id).";".$row->clan_name.";".$row->ally_name."|";
				}
			}
		}elseif($L2jVersaoClassic){
			$clanHalls = array(22,23,24,25,65,66,67,68,26,27,28,29,30,31,32,33,69,70,71,72,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,73,74);
			for($x=0;$x<count($clanHalls);$x++){
				$records = $conn->prepare("SELECT IF((SELECT clan_name FROM clan_data WHERE clan_id = ch.ownerId) IS NULL, '-', (SELECT clan_name FROM clan_data WHERE clan_id = ch.ownerId)) AS clan_name, IF((SELECT ally_name FROM clan_data WHERE clan_id = ch.ownerId) IS NULL, '-', (SELECT ally_name FROM clan_data WHERE clan_id = ch.ownerId)) AS ally_name FROM clanhall AS ch WHERE ch.id = '".$clanHalls[$x]."'");
				$records->execute();
				if($records->rowCount() > 0){
					while ($row = $records->fetchObject()) {
						$rank .= clanHallName($clanHalls[$x]).";".clanHallLoc($clanHalls[$x]).";".$row->clan_name.";".$row->ally_name."|";
					}
				}else{
					$rank .= clanHallName($clanHalls[$x]).";".clanHallLoc($clanHalls[$x]).";-;-|";
				}
			}
		}else{
			$records = $conn->prepare("SELECT ch.id, IF((SELECT clan_name FROM clan_data WHERE clan_id = ch.ownerId) IS NULL, '-', (SELECT clan_name FROM clan_data WHERE clan_id = ch.ownerId)) AS clan_name, IF((SELECT ally_name FROM clan_data WHERE clan_id = ch.ownerId) IS NULL, '-', (SELECT ally_name FROM clan_data WHERE clan_id = ch.ownerId)) AS ally_name FROM clanhall AS ch WHERE ch.id != '21' AND ch.id != '34' AND ch.id != '35' AND ch.id != '62' AND ch.id != '63' AND ch.id != '64' ORDER BY ch.id ASC");
			$records->execute();
			if($records->rowCount() > 0){
				while ($row = $records->fetchObject()) {
					$rank .= clanHallName($row->id).";".clanHallLoc($row->id).";".$row->clan_name.";".$row->ally_name."|";
				}
			}
		}
	}else{
		$records = $conn->prepare("SELECT ch.id, CASE WHEN ch.pledge_id > '0' THEN (SELECT name FROM Pledge WHERE pledge_id = ch.pledge_id) ELSE '-' END AS clan_name, CASE WHEN ch.pledge_id > '0' THEN (SELECT name FROM Alliance WHERE master_pledge_id = ch.pledge_id) ELSE '-' END AS ally_name FROM agit AS ch WHERE ch.id != '20' AND ch.id != '21' AND ch.id != '34' AND ch.id != '35' AND ch.id != '62' AND ch.id != '63' AND ch.id != '64' ORDER BY ch.id ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$rank .= clanHallName($row->id).";".clanHallLoc($row->id).";".$row->clan_name.";".$row->ally_name."|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function rankBosses($bossType){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic, $L2jVersaoAcis;
	$return_bosses = null;
	if($db){
		if(!$L2jVersaoRussa){
			$bossTable = $bossType == "bigboss" ? "grandboss_data" : "raidboss_spawnlist";
			if($L2jVersaoAcis){
				$npcsfile = simplexml_load_file('xml/bosses_acis.xml');
				$Bosses = $conn->query('SELECT boss_id,respawn_time FROM '.$bossTable.' WHERE boss_id != 29177 AND boss_id != 29178 AND boss_id != 29179 AND boss_id != 29046 AND boss_id != 29047 AND boss_id != 29066 AND boss_id != 29067 AND boss_id != 29068 ORDER BY respawn_time DESC');
				foreach ($Bosses as $row) {
					$morto = null;
					if(($row["boss_id"] == 29019 && ($row["respawn_time"] / 1000) < time()) || ($row["boss_id"] == 29045 && ($row["respawn_time"] / 1000) < time())){
						$bossId = array(29019 => array(29066,29067,29068), 29045 => array(29046,29047));
						for($x=0;$x<=count($bossId[$row["boss_id"]]);$x++){
							$BossRepeat = $conn->prepare('SELECT respawn_time FROM '.$bossTable.' WHERE boss_id = '.$bossId[$row["boss_id"]][$x]);
							$BossRepeat->execute();
							if($BossRepeat->rowCount() == 1){
								while ($row2 = $BossRepeat->fetchObject()) {
									if(($row2->respawn_time / 1000) > time()){
										$morto .= $row2->respawn_time;
									}
								}
							}
						}
					}
					$respawn_time = !empty($morto) ? $morto : $row["respawn_time"];
					if(($respawn_time / 1000) > time()){
						$respawn = "<span style='font-size:11px;'>".date('d/m/Y H:i:s',($respawn_time / 1000))."</span>";
						$status = "<span style='color:#F00;font-weight:bold;'>Morto</span>";
					}else{
						$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
						$respawn = "Online";
					}
					foreach ($npcsfile->xpath('//npc[@id='.$row["boss_id"].']') as $npc) {
						$boss_name = filter($npc[name], true);
					}
					foreach ($npcsfile->xpath('//npc[@id='.$row["boss_id"].']/set[@name="type"]') as $npc) {
						$boss_type = $npc[val];
					}
					$return_bosses .= $bossType == "bigboss" && $boss_type == "L2GrandBoss" && !empty($boss_name) ? $boss_name."|".$respawn."|".$status."$" : null;
					$return_bosses .= $bossType != "bigboss" && $boss_type == "L2RaidBoss" && !empty($boss_name) ? $boss_name."|".$respawn."|".$status."$" : null;
				}
			}elseif($L2jVersaoClassic){
				$bossTable = $bossType == "bigboss" ? "grandboss_data" : "npc_respawns";
				if($bossTable == "grandboss_data"){
					$Bosses = 'SELECT b.*, (SELECT name FROM icp_npc WHERE id = b.boss_id) AS bossname FROM '.$bossTable.' AS b WHERE b.boss_id != 29177 AND b.boss_id != 29178 AND b.boss_id != 29179 AND b.boss_id != 29046 AND b.boss_id != 29047 AND b.boss_id != 29066 AND b.boss_id != 29067 AND b.boss_id != 29068 ORDER BY bossname DESC';
					foreach ($conn->query($Bosses) as $row) {
						$morto = null;
						if(($row["boss_id"] == 29019 && ($row["respawn_time"] / 1000) < time()) || ($row["boss_id"] == 29045 && ($row["respawn_time"] / 1000) < time()) || ($row["boss_id"] == 29180 && ($row["respawn_time"] / 1000) < time())){
							$bossId = array(29019 => array(29066,29067,29068), 29045 => array(29046,29047), 29180 => array(29177,29178,29179));
							for($x=0;$x<=count($bossId[$row["boss_id"]]);$x++){
								$BossRepeat = $conn->prepare('SELECT respawn_time FROM '.$bossTable.' WHERE boss_id = '.$bossId[$row["boss_id"]][$x]);
								$BossRepeat->execute();
								if($BossRepeat->rowCount() == 1){
									while ($row2 = $BossRepeat->fetchObject()) {
										if(($row2->respawn_time / 1000) > time()){
											$morto .= $row2->respawn_time;
										}
									}
								}
							}
						}
						$respawn_time = !empty($morto) ? $morto : $row["respawn_time"];
						if(($row["respawn_time"] / 1000) > time()){
							$respawn = "<span style='font-size:11px;'>".date('d/m/Y H:i:s',($respawn_time / 1000))."</span>";
							$status = "<span style='color:#F00;font-weight:bold;'>Morto</span>";
						}else{
							$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
							$respawn = "Online";
						}
						$return_bosses .= $row["bossname"]."|".$respawn."|".$status."$";
					}
				}else{
					$Bosses = 'SELECT b.*, (SELECT name FROM icp_npc WHERE id = b.id) AS bossname FROM '.$bossTable.' AS b WHERE b.id != 29177 AND b.id != 29178 AND b.id != 29179 AND b.id != 29046 AND b.id != 29047 AND b.id != 29066 AND b.id != 29067 AND b.id != 29068 ORDER BY bossname DESC';
					foreach ($conn->query($Bosses) as $row) {
						$morto = null;
						if(($row["id"] == 29019 && ($row["respawnTime"] / 1000) < time()) || ($row["id"] == 29045 && ($row["respawnTime"] / 1000) < time()) || ($row["id"] == 29180 && ($row["respawnTime"] / 1000) < time())){
							$bossId = array(29019 => array(29066,29067,29068), 29045 => array(29046,29047), 29180 => array(29177,29178,29179));
							for($x=0;$x<=count($bossId[$row["id"]]);$x++){
								$BossRepeat = $conn->prepare('SELECT respawnTime FROM '.$bossTable.' WHERE id = '.$bossId[$row["id"]][$x]);
								$BossRepeat->execute();
								if($BossRepeat->rowCount() == 1){
									while ($row2 = $BossRepeat->fetchObject()) {
										if(($row2->respawnTime / 1000) > time()){
											$morto .= $row2->respawnTime;
										}
									}
								}
							}
						}
						$respawn_time = !empty($morto) ? $morto : $row["respawnTime"];
						if(($row["respawnTime"] / 1000) > time()){
							$respawn = "<span style='font-size:11px;'>".date('d/m/Y H:i:s',($respawn_time / 1000))."</span>";
							$status = "<span style='color:#F00;font-weight:bold;'>Morto</span>";
						}else{
							$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
							$respawn = "Online";
						}
						$return_bosses .= $row["bossname"]."|".$respawn."|".$status."$";
					}
				}
			}else{
				$Bosses = $conn->prepare('SELECT b.*, (SELECT name FROM icp_npc WHERE id = b.boss_id) AS bossname FROM '.$bossTable.' AS b WHERE boss_id != 29177 AND boss_id != 29178 AND boss_id != 29179 AND boss_id != 29046 AND boss_id != 29047 AND boss_id != 29066 AND boss_id != 29067 AND boss_id != 29068 ORDER BY bossname DESC');
				$Bosses->execute();
				if($Bosses->rowCount() > 0){
					while ($row = $Bosses->fetchObject()) {
						$morto = null;
						if(($row->boss_id == 29019 && ($row->respawn_time / 1000) < time()) || ($row->boss_id == 29045 && ($row->respawn_time / 1000) < time()) || ($row->boss_id == 29180 && ($row->respawn_time / 1000) < time())){
							$bossId = array(29019 => array(29066,29067,29068), 29045 => array(29046,29047), 29180 => array(29177,29178,29179));
							for($x=0;$x<=count($bossId[$row->boss_id]);$x++){
								$BossRepeat = $conn->prepare('SELECT respawn_time FROM '.$bossTable.' WHERE boss_id = '.$bossId[$row->boss_id][$x]);
								$BossRepeat->execute();
								if($BossRepeat->rowCount() == 1){
									while ($row2 = $BossRepeat->fetchObject()) {
										if(($row2->respawn_time / 1000) > time()){
											$morto .= $row2->respawn_time;
										}
									}
								}
							}
						}
						$respawn_time = !empty($morto) ? $morto : $row->respawn_time;
						if(($row->respawn_time / 1000) > time()){
							$respawn = "<span style='font-size:11px;'>".date('d/m/Y H:i:s',($respawn_time / 1000))."</span>";
							$status = "<span style='color:#F00;font-weight:bold;'>Morto</span>";
						}else{
							$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
							$respawn = "Online";
						}
						$return_bosses .= $row->bossname."|".$respawn."|".$status."$";
					}
				}else{
					if($bossType == "bigboss"){
						$Bosses = $conn->query('SELECT (b.bossId) AS boss_id, (b.respawnDate) AS respawn_time, (SELECT name FROM icp_npc WHERE id = b.bossId) AS bossname FROM grandboss_intervallist AS b WHERE bossId != 29177 AND bossId != 29178 AND bossId != 29179 AND bossId != 29046 AND bossId != 29047 AND bossId != 29066 AND bossId != 29067 AND bossId != 29068 ORDER BY bossname DESC');
					}else{
						$Bosses = $conn->query('SELECT b.*, (SELECT name FROM icp_npc WHERE id = b.boss_id) AS bossname FROM raidboss_spawnlist AS b WHERE boss_id != 29177 AND boss_id != 29178 AND boss_id != 29179 AND boss_id != 29046 AND boss_id != 29047 AND boss_id != 29066 AND boss_id != 29067 AND boss_id != 29068 ORDER BY bossname DESC');
					}
					foreach ($Bosses as $row) {
						$morto = null;
						if(($row["boss_id"] == 29019 && ($row["respawn_time"] / 1000) < time()) || ($row["boss_id"] == 29045 && ($row["respawn_time"] / 1000) < time()) || ($row["boss_id"] == 29180 && ($row["respawn_time"] / 1000) < time())){
							$bossId = array(29019 => array(29066,29067,29068), 29045 => array(29046,29047), 29180 => array(29177,29178,29179));
							for($x=0;$x<=count($bossId[$row["boss_id"]]);$x++){
								if($bossType == "bigboss"){
									$BossRepeat = $conn->prepare('SELECT (respawnDate) AS respawn_time FROM grandboss_intervallist WHERE bossId = '.$bossId[$row["boss_id"]][$x]);
								}else{
									$BossRepeat = $conn->prepare('SELECT respawn_time FROM raidboss_spawnlist WHERE boss_id = '.$bossId[$row["boss_id"]][$x]);
								}
								$BossRepeat->execute();
								if($BossRepeat->rowCount() == 1){
									while ($row2 = $BossRepeat->fetchObject()) {
										if(($row2->respawn_time / 1000) > time()){
											$morto .= $row2->respawn_time;
										}
									}
								}
							}
						}
						$respawn_time = !empty($morto) ? $morto : $row["respawn_time"];
						if(($row["respawn_time"] / 1000) > time()){
							$respawn = "<span style='font-size:11px;'>".date('d/m/Y H:i:s',($respawn_time / 1000))."</span>";
							$status = "<span style='color:#F00;font-weight:bold;'>Morto</span>";
						}else{
							$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
							$respawn = "Online";
						}
						$return_bosses .= $row["bossname"]."|".$respawn."|".$status."$";
					}
				}
			}
		}else{
			$npcsfile = simplexml_load_file('xml/bosses_russo.xml');
			foreach($npcsfile->npc as $boss){
				if ($boss["id"] != "29177" AND $boss["id"] != "29178" AND $boss["id"] != "29179" AND $boss["id"] != "29046" AND $boss["id"] != "29047" AND $boss["id"] != "29066" AND $boss["id"] != "29067" AND $boss["id"] != "29068"){
					$Bosses = $conn->prepare('SELECT * FROM raidboss_status WHERE id = ?');
					$Bosses->execute([$boss["id"]]);
					if($Bosses->rowCount() > 0){
						while ($row = $Bosses->fetchObject()) {
							$morto = null;
							if(($boss["id"] == 29019 && ($row->respawn_delay / 1000) < time()) || ($boss["id"] == 29045 && ($row->respawn_delay / 1000) < time()) || ($boss["id"] == 29180 && ($row->respawn_delay / 1000) < time())){
								$bossId = array(29019 => array(29066,29067,29068), 29045 => array(29046,29047), 29180 => array(29177,29178,29179));
								for($x=0;$x<=count($bossId[$boss["id"]]);$x++){
									$BossRepeat = $conn->prepare('SELECT respawn_delay FROM raidboss_status WHERE id = '.$bossId[$boss["id"]][$x]);
									$BossRepeat->execute();
									if($BossRepeat->rowCount() == 1){
										while ($row2 = $BossRepeat->fetchObject()) {
											if(($row2->respawn_delay / 1000) > time()){
												$morto .= $row2->respawn_delay;
											}
										}
									}
								}
							}
							$respawn_time = !empty($morto) ? $morto : $row->respawn_delay;
							if(($respawn_time / 1000) > time()){
								$respawn = "<span style='font-size:11px;'>".date('d/m/Y H:i:s',($respawn_time / 1000))."</span>";
								$status = "<span style='color:#F00;font-weight:bold;'>Morto</span>";
							}else{
								$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
								$respawn = "Online";
							}
						}
					}else{
						$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
						$respawn = "Online";
					}
					$return_bosses .= $bossType == "bigboss" && $boss["type"] == "BigBoss" ? filter($boss["name"], true)."|".$respawn."|".$status."$" : null;
					$return_bosses .= $bossType != "bigboss" && $boss["type"] == "RaidBoss" ? filter($boss["name"], true)."|".$respawn."|".$status."$" : null;
				}
			}
		}
	}else{
		if($bossType == "bigboss"){
			$Bosses = $conn->prepare("SELECT DISTINCT npc_db_name, alive, time_low FROM npc_boss WHERE npc_db_name LIKE 'Frintessa' OR npc_db_name LIKE 'Valakas' OR npc_db_name LIKE 'Zaken' OR npc_db_name LIKE 'Baium' OR npc_db_name LIKE 'queen_ant' OR npc_db_name LIKE 'High Priestess van Halter' OR npc_db_name LIKE 'Antharas' OR npc_db_name LIKE 'Benom' OR npc_db_name LIKE 'Orfen' OR npc_db_name LIKE 'Core' ORDER BY npc_db_name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$Bosses = $conn->prepare("SELECT DISTINCT npc_db_name, alive, time_low FROM npc_boss WHERE npc_db_name NOT LIKE 'sentinel_guard_%' AND npc_db_name NOT LIKE '%ordery01' AND npc_db_name NOT LIKE '%_siege_%' AND npc_db_name NOT LIKE '%b02_%' AND npc_db_name NOT LIKE 'tbb%' AND npc_db_name NOT LIKE 'tbf%' AND npc_db_name NOT LIKE 'nurka%'  AND npc_db_name NOT LIKE 'devastated_%' AND npc_db_name NOT LIKE 'fortress_%' AND npc_db_name NOT LIKE 'Frintessa' AND npc_db_name NOT LIKE 'Valakas' AND npc_db_name NOT LIKE 'Zaken' AND npc_db_name NOT LIKE 'Baium' AND npc_db_name NOT LIKE 'queen_ant' AND npc_db_name NOT LIKE 'High Priestess van Halter' AND npc_db_name NOT LIKE 'Antharas' AND npc_db_name NOT LIKE 'antaras_max' AND npc_db_name NOT LIKE 'antaras_min' AND npc_db_name NOT LIKE 'antaras_normal' AND npc_db_name NOT LIKE 'Benom' AND npc_db_name NOT LIKE 'Orfen' AND npc_db_name NOT LIKE 'Core' ORDER BY npc_db_name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$Bosses->execute();
		if($Bosses->rowCount() > 0){
			while ($row = $Bosses->fetchObject()) {
				if($row->time_low > strtotime(date('Y-m-d H:i:s'))){
					$respawn = "<span style='font-size:11px;'>".date('d/m/Y H:i:s',$row->time_low)."</span>";
					$status = "<span style='color:#F00;font-weight:bold;'>Morto</span>";
				}else{
					$status = "<span style='color:#3CB371;font-weight:bold;'>Vivo</span>";
					$respawn = "Online";
				}
				$return_bosses .= ucwords(str_replace("_"," ",$row->npc_db_name))."|".$respawn."|".$status."$";
			}
		}
	}
	return $return_bosses;
}

function info_table($tabela,$coluna){
	global $db, $conn;
	$tabela = strtolower($tabela);
	$coluna = strtolower($coluna);
	if($db){
		$stmt = $conn->prepare('SHOW COLUMNS FROM '.$tabela);
		if($stmt->execute()){
			if($coluna == "accesslevel"){
				while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
					if(preg_match("/^access/i", $row["Field"]))
						return $row["Field"];
				}
			}
			if($coluna == "charid"){
				if($tabela == "ally_data" || $tabela == "augmentations" || $tabela == "characters" || $tabela == "character_quests" || $tabela == "character_subclasses" || $tabela == "character_skills" || $tabela == "character_skills_save" || $tabela == "heroes" || $tabela == "olympiad_nobles" || $tabela == "character_raid_points" || $tabela == "items" || $tabela == "item_attributes" || $tabela == "item_elementals" || $tabela == "item_variations"){
					while($row = $stmt->fetch(\PDO::FETCH_ASSOC))
						if ($row["Key"] == "PRI")
							return $row["Field"];
				}else{
					$row = $stmt->fetch(\PDO::FETCH_ASSOC);
					return $row["Field"];
				}
			}
		}
	}else{
		// L2 OFF SCRIPTS
	}
	return null;
}

function getAdmProfile($login){
	global $conn;
	$result = null;
	$records = $conn->prepare("SELECT * FROM icp_staff WHERE login = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login]);
	if($records->rowCount() == 1){
		while ($row = $records->fetchObject()) {
			$result .= $row->img.";".$row->name.";".$row->office.";".$row->email;
		}
	}
	return empty($result) ? null : $result;
}

function showNews($limit){
	global $db, $conn;
	$news = null;
	if($limit > 0){
		if($db){
			$records = $conn->prepare("SELECT n.*, CASE WHEN n.author != '' THEN CASE WHEN (SELECT CONCAT(img,';',name) FROM icp_staff WHERE login = n.author) IS NULL THEN 'noimage.jpg;GM Anonymous' ELSE (SELECT CONCAT(img,';',name) FROM icp_staff WHERE login = n.author) END ELSE 'noimage.jpg;GM Anonymous' END AS staff FROM icp_news AS n ORDER BY n.date DESC LIMIT ".$limit);
		}else{
			$records = $conn->prepare("SELECT TOP ".$limit." n.*, CASE WHEN n.author != '' THEN CASE WHEN (SELECT CONCAT(img,';',name) FROM icp_staff WHERE login = n.author) IS NULL THEN 'noimage.jpg;GM Anonymous' ELSE (SELECT CONCAT(img,';',name) FROM icp_staff WHERE login = n.author) END ELSE 'noimage.jpg;GM Anonymous' END AS staff FROM icp_news AS n ORDER BY n.date DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$staff = explode(";",$row->staff);
				$news .= $row->id.";".$row->news.";".$row->title.";".$row->date.";".$staff[1].";".$staff[0]."|";
			}
		}
	}
	return empty($news) ? null : $news;
}

function postNews($title,$news,$edit=0){
	global $conn;
	if(empty($title))
		return resposta("Title is required!");
	if(empty($news))
		return resposta("News is required!");
	$result = null;
	if($edit > 0){
		$records = $conn->prepare("UPDATE icp_news SET news = ?, title = ? WHERE id = ?");
		$records->execute([$news,$title,$edit]);
	}else{
		$records = $conn->prepare("INSERT INTO icp_news (news, title, author, date) VALUES (?,?,?,?)");
		$records->execute([$news,$title,$_SESSION["UsuarioLogin"],date("Y-m-d H:i:s")]);
	}
	if($records->rowCount() == 1){
		$result = $edit > 0 ? "News successfully edited." : "News successfully posted.";
		echo "<script>$('#news_title').val('');$('#news_text').val('');$('#news_edit').val('0');$('#sendNews').html('Postar notícia');postedNews();</script>";
	}
	return empty($result) ? null : resposta($result);
}

function lastNews($login){
	global $conn;
	$result = null;
	$records = $conn->prepare("SELECT * FROM icp_news WHERE author = ? ORDER BY date DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$result .= $row->title.";".$row->date.";".$row->id."|";
		}
	}
	return empty($result) ? null : $result;
}

function editNews($id){
	global $conn;
	$result = null;
	$records = $conn->prepare("SELECT * FROM icp_news WHERE id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$id]);
	if($records->rowCount() == 1){
		while ($row = $records->fetchObject()) {
			$result .= $row->title."|".$row->news."|".$row->id;
		}
	}
	return empty($result) ? null : $result;
}

function deleteNews($id){
	global $conn;
	$result = null;
	$records = $conn->prepare("DELETE FROM icp_news WHERE id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$id]);
	if($records->rowCount() == 1){
		$result = "true";
	}
	return empty($result) ? null : $result;
}

function addPrimeShop($itemId,$itemCount,$itemEnchant,$itemFire,$itemWater,$itemWind,$itemEarth,$itemHoly,$itemDark,$itemPrice){
	$qtd_itens = count($itemId);
	if(count(array_count_values($itemId)) < $qtd_itens)
		return resposta("Repeated IDs are prohibited!");
	global $conn;
	$result = null;
	$item_price = filter($itemPrice) > 0 ? filter($itemPrice) : 1;
	$item_arr = array();
	$item_id = null;
	$item_count = null;
	$item_enchant = null;
	$item_fire = null;
	$item_water = null;
	$item_wind = null;
	$item_earth = null;
	$item_holy = null;
	$item_dark = null;
	for($x=0;$x<$qtd_itens;$x++){
		$item_id = filter($itemId[$x]) > 0 ? filter($itemId[$x]) : 1;
		$item_count = filter($itemCount[$x]) > 0 ? filter($itemCount[$x]) : 1;
		$item_enchant = filter($itemEnchant[$x]) > 0 ? filter($itemEnchant[$x]) : 0;
		$item_fire = filter($itemFire[$x]) > 0 ? filter($itemFire[$x]) : 0;
		$item_water = filter($itemWater[$x]) > 0 ? filter($itemWater[$x]) : 0;
		$item_wind = filter($itemWind[$x]) > 0 ? filter($itemWind[$x]) : 0;
		$item_earth = filter($itemEarth[$x]) > 0 ? filter($itemEarth[$x]) : 0;
		$item_holy = filter($itemHoly[$x]) > 0 ? filter($itemHoly[$x]) : 0;
		$item_dark = filter($itemDark[$x]) > 0 ? filter($itemDark[$x]) : 0;
		array_push($item_arr, array("id" => $item_id, $item_count, $item_enchant, $item_fire, $item_water, $item_wind, $item_earth, $item_holy, $item_dark));
	}
	foreach ($item_arr as $key => $row) {
		$id[$key]  = $row['id'];
	}
	array_multisort($id, SORT_ASC, $item_arr);
	$item_id = null;
	$item_count = null;
	$item_enchant = null;
	$item_fire = null;
	$item_water = null;
	$item_wind = null;
	$item_earth = null;
	$item_holy = null;
	$item_dark = null;
	for($y=0;$y<count($item_arr);$y++){
		$item_id .= $item_arr[$y]["id"].",";
		$item_count .= $item_arr[$y][0].",";
		$item_enchant .= $item_arr[$y][1].",";
		$item_fire .= $item_arr[$y][2].",";
		$item_water .= $item_arr[$y][3].",";
		$item_wind .= $item_arr[$y][4].",";
		$item_earth .= $item_arr[$y][5].",";
		$item_holy .= $item_arr[$y][6].",";
		$item_dark .= $item_arr[$y][7].",";
	}
	$records = $conn->prepare("INSERT INTO icp_prime_shop (item_id,price,count,enchant,attribute_fire,attribute_water,attribute_wind,attribute_earth,attribute_holy,attribute_unholy) VALUES (?,?,?,?,?,?,?,?,?,?)");
	$records->execute([$item_id,$item_price,$item_count,$item_enchant,$item_fire,$item_water,$item_wind,$item_earth,$item_holy,$item_dark]);
	if($records->rowCount() == 1){
		$result .= $qtd_itens > 1 ? "O combo foi criado com sucesso!" : "O item foi criado com sucesso!";
		echo "<script>abre('painel&pagina=_adm_prime_shop');</script>";
	}else
		$result .= "Erro ao adicionar item.";
	return resposta($result);
}

function deletePrimeShop($id){
	global $conn;
	$result = null;
	$records = $conn->prepare("DELETE FROM icp_prime_shop WHERE id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$id]);
	if($records->rowCount() == 1){
		$result = "true";
	}
	return empty($result) ? null : $result;
}

function showStaff(){
	global $conn;
	$staff = null;
	$records = $conn->prepare("SELECT * FROM icp_staff ORDER BY id ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute();
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$staff .= $row->img.",".$row->name.",".$row->office.",".$row->email."|";
		}
	}
	return empty($staff) ? null : $staff;
}

function showProfileStaff($login){
	global $conn;
	$staff = null;
	$records = $conn->prepare("SELECT * FROM icp_staff WHERE login = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login]);
	if($records->rowCount() == 1){
		while ($row = $records->fetchObject()) {
			$staff .= $row->img.";".$row->name.";".$row->office.";".$row->email;
		}
	}
	return empty($staff) ? null : $staff;
}

function staffProfile($name, $office, $email, $photo, $login){
	if(empty($name) && empty($office) && empty($email) && empty($photo["tmp_name"])){
		$msg = "Os campos estão vazios.";
	}else{
		global $conn;
		if(!empty($photo['error'])){
			switch($photo['error']){
				case 1:
					$error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
					break;
				case 2:
					$error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
					break;
				case 3:
					$error = 'The uploaded file was only partially uploaded';
					break;
				case 4:
					$error = 'Select a file!';
					break;
				case 6:
					$error = 'Missing a temporary folder';
					break;
				case 7:
					$error = 'Failed to write file to disk';
					break;
				case 8:
					$error = 'File upload stopped by extension';
					break;
				default:
					$error = 'No error code avaiable';
					break;
			}
		}else{
			$largura = 1600;
			$altura = 1024;
			$tamanho = 1000000; // 1000000 = 1MB
			$dimensoes = getimagesize($photo["tmp_name"]);
			$error .= $dimensoes[0] > $largura ? "A largura da imagem não deve ultrapassar ".$largura." pixels." : null;
			$error .= $dimensoes[1] > $altura ? "Altura da imagem não deve ultrapassar ".$altura." pixels." : null;
			$error .= !in_array($dimensoes[2], array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP)) ? "Isso não é uma imagem." : null;
			$error .= $photo["size"] > $tamanho ? "A imagem deve ter no máximo ".$tamanho." bytes." : null;
			if(empty($error)){
				preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $photo["name"], $ext);
				$imgName = md5(uniqid(time())) . "." . $ext[1];
				$caminho_imagem = "images/profiles/" . $imgName;
				move_uploaded_file($photo["tmp_name"], $caminho_imagem);
				$records = $conn->prepare("SELECT * FROM icp_staff WHERE login = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$records->execute([$login]);
				if($records->rowCount() > 0){
					$records2 = $conn->prepare("UPDATE icp_staff SET name = ?, img = ?, office = ?, email = ? WHERE login = ?");
					$records2->execute([$name,$imgName,$office,$email,$login]);
					$msg = $records2->rowCount() == 1 ? "Perfil editado com sucesso!" : "Houve um erro ao tentar editar o perfil.";
				}else{
					$records2 = $conn->prepare("INSERT INTO icp_staff (name, img, office, email, login) VALUES (?,?,?,?,?)");
					$records2->execute([$name,$imgName,$office,$email,$login]);
					$msg = $records2->rowCount() == 1 ? "Perfil criado com sucesso!" : "Houve um erro ao tentar criar o perfil.";
				}
			}else{
				$msg = $error;
			}
		}
	}
	echo "{";
	echo	"error: '" . $error . "',\n";
	echo	"msg: '" . $msg . "',\n";
	echo	"img: '" . $caminho_imagem . "'\n";
	echo "}";
}

function deleteProfile($login){
	global $conn;
	$result = null;
	$records = $conn->prepare("SELECT img FROM icp_staff WHERE login = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login]);
	if($records->rowCount() == 1){
		$records2 = $conn->prepare("DELETE FROM icp_staff WHERE login = ?");
		$records2->execute([$login]);
		if($records2->rowCount() == 1){
			while ($row = $records->fetchObject()) {
				unlink("images/profiles/".$row->img);
			}
			$result = "true";
		}
	}
	return empty($result) ? null : $result;
}

function playersOnline(){
	global $db, $conn, $fakePlayers, $fakePlayersNum;
	if($db){
		$online = $conn->prepare("SELECT char_name FROM characters WHERE online = '1'");
	}else{
		$online = $conn->prepare("SELECT char_name FROM user_data WHERE login > logout", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$online->execute();
	if($fakePlayers){
		return number_format(($online->rowCount() * "1.".$fakePlayersNum),0,".",".");
	}else{
		return number_format($online->rowCount(),0,".",".");
	}
	return 0;
}

function population(){
	global $db, $conn;
	if($db)
		$pop = $conn->prepare("SELECT char_name FROM characters");
	else
		$pop = $conn->prepare("SELECT char_name FROM user_data", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$pop->execute();
	return number_format($pop->rowCount(),0,".",".");
}

function clans(){
	global $db, $conn;
	if($db){
		$clans = $conn->prepare("SELECT clan_id FROM clan_data");
	}else{
		$clans = $conn->prepare("SELECT name FROM Pledge", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$clans->execute();
	return number_format($clans->rowCount(),0,".",".");
}

function rankClass($id){
	global $db, $conn, $L2jVersaoRussa;
	$rank = null;
	if($db){
		if($L2jVersaoRussa){
			$charid_characters = info_table("characters","charid");
			$charid_subclass = info_table("character_subclasses","charid");
			$pop = $conn->prepare("SELECT c.char_name FROM characters AS c WHERE (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') > '87'");
			$records = $conn->prepare("SELECT c.char_name FROM characters AS c WHERE (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') = '".$id."'");
		}else{
			$pop = $conn->prepare("SELECT char_name FROM characters WHERE base_class > '87'");
			$records = $conn->prepare("SELECT char_name FROM characters WHERE base_class = '".$id."'");
		}
	}else{
		$pop = $conn->prepare("SELECT char_name FROM user_data WHERE subjob0_class > '87'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records = $conn->prepare("SELECT char_name FROM user_data WHERE subjob0_class = '".$id."'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$pop->execute();
	$records->execute();
	if($records->rowCount() > 0){
		$rank .= number_format(($records->rowCount()*100)/$pop->rowCount(),2,'.','.');
	}
	return empty($rank) ? null : $rank;
}

function topClassPvp($limit,$class){
	global $db, $conn, $L2jVersaoRussa;
	$rank = null;
	if($limit > 0){
		if($db){
			$accesslevel_characters = info_table("characters","accesslevel");
			if($L2jVersaoRussa){
				$charid_subclass = info_table("character_subclasses","charid");
				$charid_characters = info_table("characters","charid");
				$records = $conn->prepare("SELECT c.char_name, c.pvpkills, IF((SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0') IS NULL, 'n/a', (SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0')) AS clan, IF((SELECT (SELECT ally_name FROM ally_data WHERE ally_id = cd.ally_id) AS aname FROM clan_data AS cd WHERE cd.clan_id = c.clanid) IS NULL, '-', (SELECT (SELECT ally_name FROM ally_data WHERE ally_id = cd.ally_id) AS aname FROM clan_data AS cd WHERE cd.clan_id = c.clanid)) AS ally FROM characters AS c WHERE c.".$accesslevel_characters." = '0' AND c.pvpkills > '0' AND (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') = '".$class."' ORDER BY c.pvpkills DESC, c.char_name ASC LIMIT ".$limit);
			}else{
				$records = $conn->prepare("SELECT c.char_name, c.pvpkills, IF((SELECT clan_name FROM clan_data WHERE clan_id = c.clanid) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = c.clanid)) AS clan, IF((SELECT ally_name FROM clan_data WHERE clan_id = c.clanid) IS NULL, 'n/a', (SELECT ally_name FROM clan_data WHERE clan_id = c.clanid)) AS ally FROM characters AS c WHERE c.".$accesslevel_characters." = '0' AND c.pvpkills > '0' AND c.base_class = '".$class."' ORDER BY c.pvpkills DESC, c.char_name ASC LIMIT ".$limit);
			}
		}else{
			$records = $conn->prepare("SELECT TOP ".$limit." c.char_name, c.DUEL, CASE WHEN c.pledge_id > '0' THEN (SELECT name FROM Pledge WHERE pledge_id = c.pledge_id) ELSE 'n/a' END AS clan, CASE WHEN c.pledge_id > '0' THEN (SELECT name FROM Alliance WHERE master_pledge_id = c.pledge_id) ELSE 'n/a' END AS ally FROM user_data AS c WHERE c.builder = '0' AND c.DUEL > '0' AND c.subjob0_class = '".$class."' ORDER BY c.DUEL DESC, c.char_name ASC");
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$rank .= $row->char_name.";".number_format($row->pvpkills,0,".",".").";".$row->ally.";".$row->clan."|";
			}
			if($records->rowCount() < $limit){
				for($x=0;$x<($limit - $records->rowCount());$x++){
					$rank .= "-;-;-;-|";
				}
			}
		}else{
			for($x=0;$x<$limit;$x++){
				$rank .= "-;-;-;-|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function topPvp($limit){
	global $db, $conn, $L2jVersaoRussa;
	$rank = null;
	if($limit > 0){
		if($db){
			$accesslevel_characters = info_table("characters","accesslevel");
			if($L2jVersaoRussa){
				$charid_subclass = info_table("character_subclasses","charid");
				$charid_characters = info_table("characters","charid");
				$records = $conn->prepare("SELECT c.char_name, c.pvpkills, (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') AS base_class, IF((SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0') IS NULL, 'n/a', (SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0')) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' AND c.pvpkills > '0' ORDER BY c.pvpkills DESC, c.char_name ASC LIMIT ".$limit);
			}else{
				$records = $conn->prepare("SELECT c.char_name, c.pvpkills, c.base_class, IF((SELECT clan_name FROM clan_data WHERE clan_id = c.clanid) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = c.clanid)) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' AND c.pvpkills > '0' ORDER BY c.pvpkills DESC, c.char_name ASC LIMIT ".$limit);
			}
		}else{
			$records = $conn->prepare("SELECT TOP ".$limit." c.char_name, (c.DUEL) AS pvpkills, (c.subjob0_class) AS base_class, CASE WHEN c.pledge_id > '0' THEN (SELECT name FROM Pledge WHERE pledge_id = c.pledge_id) ELSE 'n/a' END AS clan FROM user_data AS c WHERE c.builder = '0' AND c.DUEL > '0' ORDER BY c.DUEL DESC, c.char_name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$rank .= $row->char_name.";".number_format($row->pvpkills,0,".",".").";".classe_name($row->base_class).";".$row->clan."|";
			}
			if($records->rowCount() < $limit){
				for($x=0;$x<($limit - $records->rowCount());$x++){
					$rank .= "-;-;-;-|";
				}
			}
		}else{
			for($x=0;$x<$limit;$x++){
				$rank .= "-;-;-;-|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function topPk($limit){
	global $db, $conn, $L2jVersaoRussa;
	$rank = null;
	if($limit > 0){
		if($db){
			$accesslevel_characters = info_table("characters","accesslevel");
			if($L2jVersaoRussa){
				$charid_subclass = info_table("character_subclasses","charid");
				$charid_characters = info_table("characters","charid");
				$records = $conn->prepare("SELECT c.char_name, c.pkkills, (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') AS base_class, IF((SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0') IS NULL, 'n/a', (SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0')) AS clan FROM characters AS c WHERE ".$accesslevel_characters." = '0' AND pkkills > '0' ORDER BY pkkills DESC, char_name ASC LIMIT ".$limit);
			}else{
				$records = $conn->prepare("SELECT c.char_name, c.pkkills, c.base_class, IF((SELECT clan_name FROM clan_data WHERE clan_id = c.clanid) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = c.clanid)) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' AND c.pkkills > '0' ORDER BY pkkills DESC, char_name ASC LIMIT ".$limit);
			}
		}else{
			$records = $conn->prepare("SELECT TOP ".$limit." c.char_name, (c.PK) AS pkkills, (c.subjob0_class) AS base_class, CASE WHEN c.pledge_id > '0' THEN (SELECT name FROM Pledge WHERE pledge_id = c.pledge_id) ELSE 'n/a' END AS clan FROM user_data AS c WHERE c.builder = '0' AND c.PK > '0' ORDER BY c.PK DESC, c.char_name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$rank .= $row->char_name.";".number_format($row->pkkills,0,".",".").";".classe_name($row->base_class).";".$row->clan."|";
			}
			if($records->rowCount() < $limit){
				for($x=0;$x<($limit - $records->rowCount());$x++){
					$rank .= "-;-;-;-|";
				}
			}
		}else{
			for($x=0;$x<$limit;$x++){
				$rank .= "-;-;-;-|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function topOnline($limit){
	global $db, $conn, $L2jVersaoRussa;
	$rank = null;
	if($limit > 0){
		if($db){
			$accesslevel_characters = info_table("characters","accesslevel");
			if($L2jVersaoRussa){
				$records = $conn->prepare("SELECT c.char_name, c.onlinetime, IF((SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0') IS NULL, 'n/a', (SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0')) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' AND c.onlinetime > '0' ORDER BY c.onlinetime DESC, c.char_name ASC LIMIT ".$limit);
			}else{
				$records = $conn->prepare("SELECT c.char_name, c.onlinetime, IF((SELECT clan_name FROM clan_data WHERE clan_id = c.clanid) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = c.clanid)) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' AND c.onlinetime > '0' ORDER BY c.onlinetime DESC, c.char_name ASC LIMIT ".$limit);
			}
		}else{
			$records = $conn->prepare("SELECT TOP ".$limit." c.char_name, (c.use_time) AS onlinetime, CASE WHEN c.pledge_id > '0' THEN (SELECT name FROM Pledge WHERE pledge_id = c.pledge_id) ELSE 'n/a' END AS clan FROM user_data AS c WHERE c.builder = '0' AND c.use_time > '0' ORDER BY c.use_time DESC, c.char_name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$rank .= $row->char_name.";".remainingTime($row->onlinetime,true).";".$row->clan."|";
			}
			if($records->rowCount() < $limit){
				for($x=0;$x<($limit - $records->rowCount());$x++){
					$rank .= "-;-;-|";
				}
			}
		}else{
			for($x=0;$x<$limit;$x++){
				$rank .= "-;-;-|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function topClan($limit){
	global $db, $conn, $L2jVersaoRussa;
	$rank = null;
	if($limit > 0){
		if($db){
			$accesslevel_characters = info_table("characters","accesslevel");
			$charid_characters = info_table("characters","charid");
			if($L2jVersaoRussa){
				$records = $conn->prepare("SELECT c.clan_level, c.reputation_score, (SELECT name FROM clan_subpledges WHERE clan_id = c.clan_id AND type='0') AS clan_name, IF((SELECT ally_name FROM ally_data WHERE ally_id = c.ally_id) IS NULL, 'n/a', (SELECT ally_name FROM ally_data WHERE ally_id = c.ally_id)) AS ally_name FROM clan_data AS c WHERE (SELECT (SELECT ".$accesslevel_characters." FROM characters WHERE ".$charid_characters." = cs.leader_id) AS accesslvl FROM clan_subpledges AS cs WHERE cs.clan_id = c.clan_id AND type = '0') = '0' ORDER BY c.clan_level DESC, c.reputation_score DESC, clan_name ASC LIMIT ".$limit);
			}else{
				$records = $conn->prepare("SELECT c.clan_name, c.clan_level, c.reputation_score, IF((c.ally_name) IS NULL, 'n/a', (c.ally_name)) AS ally_name FROM clan_data AS c WHERE (SELECT ".$accesslevel_characters." FROM characters WHERE ".$charid_characters." = c.leader_id) = '0' ORDER BY c.clan_level DESC, c.reputation_score DESC, c.clan_name ASC LIMIT ".$limit);
			}
		}else{
			$records = $conn->prepare("SELECT TOP ".$limit." (c.name) AS clan_name, (c.skill_level) AS clan_level, (SELECT reputation_points FROM pledge_ext WHERE pledge_id = c.pledge_id) AS reputation_score, CASE WHEN c.alliance_id > '0' THEN (SELECT name FROM Alliance WHERE pledge_id = c.pledge_id) ELSE 'n/a' END AS ally_name FROM Pledge AS c WHERE (SELECT builder FROM user_data WHERE char_id = c.ruler_id) = '0' ORDER BY c.skill_level DESC, reputation_score DESC, c.name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$rank .= $row->clan_name.";".$row->clan_level.";".number_format($row->reputation_score,0,'.','.').";".$row->ally_name."|";
			}
			if($records->rowCount() < $limit){
				for($x=0;$x<($limit - $records->rowCount());$x++){
					$rank .= "-;-;-;-|";
				}
			}
		}else{
			for($x=0;$x<$limit;$x++){
				$rank .= "-;-;-;-|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function topHero($limit){
	global $db, $conn, $L2jVersaoRussa;
	$rank = null;
	if($db){
		$charid_heroes = info_table("heroes","charid");
		$charid_characters = info_table("characters","charid");
		$accesslevel_characters = info_table("characters","accesslevel");
		if($L2jVersaoRussa){
			$charid_subclass = info_table("character_subclasses","charid");
			if($limit > 0){
				$records = $conn->prepare("SELECT h.count, (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = h.".$charid_heroes." AND isBase = '1') AS base, (SELECT char_name FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AS char_name, IF((SELECT name FROM clan_subpledges WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AND type = '0') IS NULL, 'n/a', (SELECT name FROM clan_subpledges WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AND type = '0')) AS clan FROM heroes AS h WHERE h.played='1' AND (SELECT ".$accesslevel_characters." FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") = '0' ORDER BY h.count DESC, char_name ASC LIMIT ".$limit);
			}else{
				$records = $conn->prepare("SELECT h.count, (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = h.".$charid_heroes." AND isBase = '1') AS base, (SELECT char_name FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AS char_name, IF((SELECT name FROM clan_subpledges WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AND type = '0') IS NULL, 'n/a', (SELECT name FROM clan_subpledges WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AND type = '0')) AS clan FROM heroes AS h WHERE (SELECT ".$accesslevel_characters." FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") = '0' ORDER BY h.count DESC, char_name ASC");
			}
		}else{
			if($limit > 0){
				$records = $conn->prepare("SELECT h.count, (SELECT base_class FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AS base, (SELECT char_name FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AS char_name, IF((SELECT clan_name FROM clan_data WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.")) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes."))) AS clan FROM heroes AS h WHERE (SELECT ".$accesslevel_characters." FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") = '0' ORDER BY h.count DESC, char_name ASC LIMIT ".$limit);
			}else{
				$records = $conn->prepare("SELECT h.count, (SELECT base_class FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AS base, (SELECT char_name FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") AS char_name, IF((SELECT clan_name FROM clan_data WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.")) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = (SELECT clanid FROM characters WHERE ".$charid_characters." = h.".$charid_heroes."))) AS clan FROM heroes AS h WHERE h.played='1' AND (SELECT ".$accesslevel_characters." FROM characters WHERE ".$charid_characters." = h.".$charid_heroes.") = '0' ORDER BY base ASC");
			}
		}
	}else{
		if($limit > 0){
			$records = $conn->prepare("SELECT TOP ".$limit." c.char_name, c.subjob0_class, cl.name as clan, h.win_count as count FROM user_data AS c LEFT JOIN user_nobless AS h ON c.char_id = h.char_id LEFT JOIN pledge AS cl ON c.pledge_id = cl.pledge_id OR cl.pledge_id IS NULL WHERE h.hero_type in (1,2) AND c.builder='0' ORDER BY count DESC, c.char_name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$records = $conn->prepare("SELECT c.char_name, c.subjob0_class, cl.name as clan, h.win_count as count FROM user_data AS c LEFT JOIN user_nobless AS h ON c.char_id = h.char_id LEFT JOIN pledge AS cl ON c.pledge_id = cl.pledge_id OR cl.pledge_id IS NULL WHERE h.hero_type in (1,2) AND c.builder='0' ORDER BY c.subjob0_class ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
	}
	$records->execute();
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$rank .= $row->char_name.";".$row->clan.";".classe_name($row->base).";".$row->count."|";
		}
		if($limit > 0){
			if($records->rowCount() < $limit){
				for($x=0;$x<($limit - $records->rowCount());$x++){
					$rank .= "-;-;-;-|";
				}
			}
		}
	}else{
		if($limit > 0){
			for($x=0;$x<$limit;$x++){
				$rank .= "-;-;-;-|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function topOly(){
	global $db, $conn;
	$rank = null;
	if($db){
		$charid_oly = info_table("olympiad_nobles","charid");
		$charid_characters = info_table("characters","charid");
		$accesslevel_characters = info_table("characters","accesslevel");
		$records = $conn->prepare("SELECT o.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = o.".$charid_oly.") AS char_name FROM olympiad_nobles AS o WHERE (SELECT ".$accesslevel_characters." FROM characters WHERE ".$charid_characters." = o.".$charid_oly.") = '0' AND o.competitions_done > '8' ORDER BY o.class_id ASC, o.olympiad_points DESC, o.competitions_done ASC, char_name ASC");
	}else{
		$records = $conn->prepare("SELECT u.char_name, (u.subjob0_class) AS class_id, oly.point as olympiad_points, oly.match_count AS competitions_done FROM olympiad_result AS oly INNER JOIN user_data AS u on u.char_id=oly.char_id ORDER BY class_id ASC, olympiad_points DESC, competitions_done ASC, u.char_name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute();
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$rank .= $row->char_name.";".number_format($row->olympiad_points,0,".",".").";".$row->competitions_done.";".classe_name($row->class_id)."|";
		}
	}
	return empty($rank) ? null : $rank;
}

function topAdena($limit){
	global $db, $conn, $goldBarValue;
	$rank = null;
	if($limit > 0){
		if($db){
			$accesslevel_characters = info_table("characters","accesslevel");
			$charid_characters = info_table("characters","charid");
			$records = $conn->prepare("SELECT c.char_name, IF((SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '3470') IS NULL, '0', (SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '3470')) AS gold_bar, IF((SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '57') IS NULL, '0', (SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '57')) AS adena, ((IF((SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '3470') IS NULL, '0', (SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '3470')) * '".$goldBarValue."') + IF((SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '57') IS NULL, '0', (SELECT SUM(count) FROM items WHERE owner_id = c.".$charid_characters." AND item_id = '57'))) AS adenas FROM characters AS c WHERE c.".$accesslevel_characters." = '0' ORDER BY adenas DESC, char_name ASC LIMIT ".$limit);
			$records->execute();
			if($records->rowCount() > 0){
				while ($row = $records->fetchObject()) {
					$rank .= $row->char_name.";".number_format($row->adena,0,".",".").";".number_format($row->gold_bar,0,".",".").";".number_format($row->adenas,0,".",".")."|";
				}
			}
		}else{
			$topAdena = array();
			$records = $conn->prepare("SELECT TOP ".$limit." c.char_name, CASE WHEN (SELECT SUM(amount) FROM user_item WHERE char_id = c.char_id AND item_type = '3470') > '0' THEN (SELECT SUM(amount) FROM user_item WHERE char_id = c.char_id AND item_type = '3470') ELSE '0' END AS gold_bar, CASE WHEN (SELECT amount FROM user_item WHERE char_id = c.char_id AND item_type = '57' AND warehouse = '0') > '0' THEN (SELECT amount FROM user_item WHERE char_id = c.char_id AND item_type = '57' AND warehouse = '0') ELSE '0' END AS adena_inv, CASE WHEN (SELECT amount FROM user_item WHERE char_id = c.char_id AND item_type = '57' AND warehouse = '1') > '0' THEN (SELECT amount FROM user_item WHERE char_id = c.char_id AND item_type = '57' AND warehouse = '1') ELSE '0' END AS adena_war FROM user_data AS c WHERE c.builder = '0' ORDER BY gold_bar DESC, adena_inv DESC, adena_war DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$records->execute();
			if($records->rowCount() > 0){
				while ($row = $records->fetchObject()) {
					$adena = $row->adena_inv + $row->adena_war;
					$adenaTotal = ($row->gold_bar * $goldBarValue) + $adena;
					array_push($topAdena, array('name' => $row->char_name, 'adena' => $adena, 'gb' => $row->gold_bar, 'totaladena' => $adenaTotal));
				}
			}
			foreach ($topAdena as $key => $rows) {
				$name[$key]  = $rows['name'];
				$adena[$key] = $rows['adena'];
				$gb[$key] = $rows['gb'];
				$totaladena[$key] = $rows['totaladena'];
			}
			array_multisort($totaladena, SORT_DESC, $name, SORT_ASC, $topAdena);
			for($y=0;$y<count($topAdena);$y++){
				$rank .= $topAdena[$y]["name"].";".number_format($topAdena[$y]["adena"],0,".",".").";".number_format($topAdena[$y]["gb"],0,".",".").";".number_format($topAdena[$y]["totaladena"],0,".",".")."|";
			}
		}
		if($limit > 0){
			if($records->rowCount() < $limit){
				for($x=0;$x<($limit - $records->rowCount());$x++){
					$rank .= "-;-;-;-|";
				}
			}
		}
	}else{
		if($limit > 0){
			for($x=0;$x<$limit;$x++){
				$rank .= "-;-;-;-|";
			}
		}
	}
	return empty($rank) ? null : $rank;
}

function topRaidPoints($limit){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic;
	$rank = null;
	if($db){
		if($limit > 0){
			$accesslevel_characters = info_table("characters","accesslevel");
			$charid_characters = info_table("characters","charid");
			if($L2jVersaoRussa){
				$charid_subclass = info_table("character_subclasses","charid");
				$charid_raidpoints = info_table("raidboss_points","charid");
				$records = $conn->prepare("SELECT c.*, (SELECT SUM(points) FROM raidboss_points WHERE ".$charid_raidpoints." = c.".$charid_characters.") AS raid_points, (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') AS base_class, IF((SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0') IS NULL, 'n/a', (SELECT name FROM clan_subpledges WHERE clan_id = c.clanid AND type = '0')) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' ORDER BY raid_points DESC, char_name ASC LIMIT ".$limit);
			}elseif($L2jVersaoClassic){
				$records = $conn->prepare("SELECT c.*, (raidbossPoints) AS raid_points, IF((SELECT clan_name FROM clan_data WHERE clan_id = c.clanid) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = c.clanid)) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' ORDER BY raidbossPoints DESC, char_name ASC LIMIT ".$limit);
			}else{
				$charid_raidpoints = info_table("character_raid_points","charid");
				$records = $conn->prepare("SELECT c.*, (SELECT SUM(points) FROM character_raid_points WHERE ".$charid_raidpoints." = c.".$charid_characters.") AS raid_points, IF((SELECT clan_name FROM clan_data WHERE clan_id = c.clanid) IS NULL, 'n/a', (SELECT clan_name FROM clan_data WHERE clan_id = c.clanid)) AS clan FROM characters AS c WHERE c.".$accesslevel_characters." = '0' ORDER BY raid_points DESC, char_name ASC LIMIT ".$limit);
			}
			$records->execute();
			if($records->rowCount() > 0){
				while ($row = $records->fetchObject()) {
					$rank .= $row->char_name.";".classe_name($row->base_class).";".$row->clan.";".number_format($row->raid_points,0,".",".")."|";
				}
			}
			if($limit > 0){
				if($records->rowCount() < $limit){
					for($x=0;$x<($limit - $records->rowCount());$x++){
						$rank .= "-;-;-;-|";
					}
				}
			}
		}else{
			if($limit > 0){
				for($x=0;$x<$limit;$x++){
					$rank .= "-;-;-;-|";
				}
			}
		}
	}else{
		// L2OFF SCRIPTS
	}
	return empty($rank) ? null : $rank;
}

function sevenSings(){
	global $db, $conn;
	$result = null;
	if($db){
		$dawn = $conn->prepare("SELECT * FROM seven_signs WHERE cabal LIKE '%dusk%' LIMIT 0,1200");
		$dusk = $conn->prepare("SELECT * FROM seven_signs WHERE cabal LIKE '%dawn%' LIMIT 0,1200");
		$status = $conn->prepare("SELECT * FROM seven_signs_status");
		$dawn->execute();
		$dusk->execute();
		$status->execute();
		if($status->rowCount() > 0){
			while($row = $status->fetchObject()){
				$result .= $dawn->rowCount().";".$dusk->rowCount().";".$row->current_cycle.";".$row->date.";".($row->avarice_dawn_score+$row->avarice_dusk_score).";".($row->gnosis_dawn_score+$row->gnosis_dusk_score).";".($row->strife_dawn_score+$row->strife_dusk_score).";";
			}
		}
	}else{
		$status = $conn->prepare("SELECT TOP 1 s.*, (SELECT ssq_point FROM ssq_user_data WHERE round_number = s.round_number AND ssq_part = '1') AS dawn, (SELECT ssq_point FROM ssq_user_data WHERE round_number = s.round_number AND ssq_part = '2') AS dusk FROM ssq_data AS s ORDER BY s.round_number DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$status->execute();
		if($status->rowCount() > 0){
			while($row = $status->fetchObject()){
				$result .= intval($row->dawn).";".intval($row->dusk).";".$row->round_number.";".date("d/m/y H:i ").";".$row->seal1.";".$row->seal2.";".$row->seal3.";";
			}
		}
	}
	return empty($result) ? null : $result;
}

function enchantItem($charid,$login,$itemid,$enchant){
	global $db, $conn, $enchant_d, $enchant_c, $enchant_b, $enchant_a, $enchant_s, $enchant_s80, $enchant_s84, $enchant_max, $allowEnchantItems, $allowEnchantAugItems, $allowEnchantPvpItems, $noPvpItems, $L2jVersaoRussa;
	$result = null;
	if($enchant > $enchant_max)
		return "over_enchant";
	if(!$allowEnchantItems)
		return null;
	$noPvpItems = !$db ? str_replace("i.item_id","i.item_type",$noPvpItems) : $noPvpItems;
	$wherePvP = !$allowEnchantPvpItems ? $noPvpItems : null;
	if($db){
		$charid_characters = info_table("characters","charid");
		$charid_items = info_table("items","charid");
		$records = $conn->prepare("SELECT i.*, (SELECT itemGrade FROM icp_icons WHERE itemId = i.item_id) AS itemGrade FROM items AS i, characters AS c WHERE i.owner_id = c.".$charid_characters." AND i.".$charid_items." = ? AND c.".$charid_characters." = ? AND c.account_name = ?".$wherePvP);
	}else{
		$records = $conn->prepare("SELECT i.*, (SELECT itemGrade FROM icp_icons WHERE itemId = i.item_type) AS itemGrade FROM user_item AS i, user_data AS c WHERE i.char_id = c.char_id AND i.item_id = ? AND c.char_id = ? AND c.account_name = ?".$wherePvP, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$itemid,$charid,$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			if($db){
				if($L2jVersaoRussa){
					$augment .= $row->augmentation_id > 0 ? true : false;
				}else{
					$augElem = explode(",", getAugElem($row->$charid_items));
					$augment .= $augElem[6] > 0 ? true : false;
				}
			}else{
				$augment .= $row->augmentation > 0 ? true : false;
				$item_type .= $row->item_type;
			}
			if($augment && !$allowEnchantAugItems)
				$result .= "aug_forbiden";
			$current_enchant = $db ? $row->enchant_level : $row->enchant;
			switch ($row->itemGrade){
				case "d":
					$price = $enchant_d; break;
				case "c":
					$price = $enchant_c; break;
				case "b":
					$price = $enchant_b; break;
				case "a":
					$price = $enchant_a; break;
				case "s":
					$price = $enchant_s; break;
				case "s80":
					$price = $enchant_s80; break;
				case "s84":
					$price = $enchant_s84; break;
				default:
					$price = 1000; break;
			}
		}
	}
	if(empty($result)){
		$current_enchant = is_numeric($current_enchant) ? $current_enchant : 1000;
		$price = !empty($price) ? $price : 1000;
		if($current_enchant < 1000){
			$calc_enchant = preg_replace("/(\D)/i" , "" , $enchant) - $current_enchant;
			if($calc_enchant <= 0){
				$result .= resposta("Unenchanted item.");
			}else{
				$calc_coins = $price * $calc_enchant;
				if(credit($login) >= $calc_coins){
					if($db){
						$id_max = $conn->prepare("SELECT MAX(".$charid_items.") AS max FROM items");
						$id_max->execute();
						$results = $id_max->fetch(PDO::FETCH_ASSOC);
						$new_id = 1000 + $results["max"];
						$enchanting = $conn->prepare("UPDATE items SET enchant_level = ?, ".$charid_items." = '".$new_id."' WHERE ".$charid_items." = ?");
						$enchanting->execute([$enchant,$itemid]);
					}else{
						global $db_ip, $cached_port;
						kick_char($charid);
						$buf=pack("cVVVVVVVVVV",14,$charid,0,$itemid,$item_type,1,$enchant,0,0,0,0).tounicode("admin");
						$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
						fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
						fclose($cachedsocket);
					}
					debitDonate($calc_coins,$login);
					addDonateLog("Enchant item ID[".$new_id."] of +".$current_enchant." to +".preg_replace("/(\D)/i" , "" , $enchant).".",$calc_coins,$login);
					$result .= resposta("Successfully enchanted item!");
				}else{
					$result .= "no_credit";
				}
			}
		}
	}
	return empty($result) ? null : $result;
}

function showAllowedItems($charid,$login,$pvpItems=false,$augItems=false,$store=false){
	global $db, $conn, $L2jVersaoRussa, $noPvpItems;
	$noPvpItems = !$db ? str_replace("i.item_id","i.item_type",$noPvpItems) : $noPvpItems;
	$wherePvP = !$pvpItems ? $noPvpItems : null;
	$result = null;
	if($db){
		$charid_characters = info_table("characters","charid");
		$charid_items = info_table("items","charid");
		$records = $conn->prepare("SELECT *, SUBSTRING_INDEX(itemIcon, '.', -1) AS itemIcons FROM items AS i, icp_icons AS m WHERE i.item_id=m.itemId AND i.owner_id = ? AND (SELECT account_name FROM characters WHERE ".$charid_characters." = i.owner_id) = ? AND (SELECT online FROM characters WHERE ".$charid_characters." = i.owner_id) = '0' AND m.itemType IN('Armor','Weapon') AND i.loc IN('PAPERDOLL','INVENTORY','WAREHOUSE') AND m.itemDrop='true' AND m.itemSell='true' AND m.itemTrade='true' AND enchant_level >= '0' AND itemGrade != ''".$wherePvP." ORDER BY i.loc='PAPERDOLL' DESC, i.loc='INVENTORY' DESC, i.loc='WAREHOUSE' DESC");
		$records->execute([$charid,$login]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$augment = null;
				$fire = null;
				$water = null;
				$wind = null;
				$earth = null;
				$holy = null;
				$unholy = null;
				$attrubutes = null;
				if($L2jVersaoRussa){
					$fire .= empty($row->attribute_fire) ? null : $row->attribute_fire;
					$water .= empty($row->attribute_water) ? null : $row->attribute_water;
					$wind .= empty($row->attribute_wind) ? null : $row->attribute_wind;
					$earth .= empty($row->attribute_earth) ? null : $row->attribute_earth;
					$holy .= empty($row->attribute_holy) ? null : $row->attribute_holy;
					$unholy .= empty($row->attribute_unholy) ? null : $row->attribute_unholy;
					$augment .= $row->augmentation_id > 0 ? "Augmented " : null;
				}else{
					$augElem = explode(",", getAugElem($row->$charid_items));
					$fire .= empty($augElem[0]) ? null : $augElem[0];
					$water .= empty($augElem[1]) ? null : $augElem[1];
					$wind .= empty($augElem[2]) ? null : $augElem[2];
					$earth .= empty($augElem[3]) ? null : $augElem[3];
					$holy .= empty($augElem[4]) ? null : $augElem[4];
					$unholy .= empty($augElem[5]) ? null : $augElem[5];
					$augment .= empty($augElem[6]) ? null : "Augmented ";
				}
				$attrubutes = $fire.",".$water.",".$wind.",".$earth.",".$holy.",".$unholy.",";
				if($augElem[6] && !$augItems)
					$result .= null;
				else
					$result .= $row->count.",".$row->enchant_level.",".$attrubutes.$row->itemId.",".$augment.$row->itemName.",".$row->itemType.",".$row->itemTypeName.",".$row->itemWeight.",".$row->itemGrade.",".$row->itemBodyPart.",".$row->itemPAD.",".$row->itemMAD.",".$row->itemSS.",".$row->itemBSS.",".strtolower($row->itemIcons).",".$row->loc.",".$row->$charid_items."|";
			}
		}
	}else{
		$inStoreArr = array();
		if($store){
			$inStore = null;
			$records_store = $conn->prepare("SELECT item_id FROM icp_shop_items WHERE owner_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$records_store->execute([$charid]);
			if($records_store->rowCount() > 0){
				while ($row1 = $records_store->fetchObject()) {
					$inStore .= $row1->item_id;
				}
			}
			$inStoreArr = explode(";",$inStore);
		}
		$records = $conn->prepare("SELECT i.*, m.*, CASE WHEN i.item_id IN(u.ST_underware,u.ST_right_ear,u.ST_left_ear,u.ST_neck,u.ST_right_finger,u.ST_left_finger,u.ST_head,u.ST_right_hand,u.ST_left_hand,u.ST_gloves,u.ST_chest,u.ST_legs,u.ST_feet,u.ST_back,u.ST_both_hand,u.ST_hair,u.ST_hair_deco,u.ST_hair_all) THEN 'PAPERDOLL' ELSE 'INVENTORY' END AS loc FROM user_item AS i, icp_icons AS m, user_data AS u WHERE i.item_type=m.itemId AND i.char_id=u.char_id AND i.char_id = ? AND u.account_name = ? AND u.login < u.logout AND m.itemType IN ('Armor','Weapon') AND m.itemDrop='true' AND m.itemSell='true' AND m.itemTrade='true' AND i.enchant >= '0' AND m.itemGrade != ''".$wherePvP." ORDER BY loc DESC, i.warehouse ASC, m.itemName ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$charid,$login]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$augment = empty($row->augmentation) ? null : "Augmented ";
				$attrubutes = "0,0,0,0,0,0,";
				if($row->augmentation > 0 && !$augItems || in_array($row->item_id,$inStoreArr)){
					$result .= null;
				}else{
					$loc = empty($row->warehouse) ? $row->loc : "WAREHOUSE";
					$result .= $row->amount.",".$row->enchant.",".$attrubutes.$row->itemId.",".$augment.$row->itemName.",".$row->itemType.",".$row->itemTypeName.",".$row->itemWeight.",".$row->itemGrade.",".$row->itemBodyPart.",".$row->itemPAD.",".$row->itemMAD.",".$row->itemSS.",".$row->itemBSS.",".strtolower(str_replace("icon.","",$row->itemIcon)).",".$loc.",".$row->item_id."|";
				}
			}
		}
	}
	return empty($result) ? null : $result;
}

function itemsPremium($id){
	global $conn, $allowPrimeShop;
	if(!$allowPrimeShop)
		return null;
	$result = null;
	$where = !empty($id) ? " AND p.id = '".preg_replace("/(\D)/i" , "" , $id)."'" : null;
	$records = $conn->prepare("SELECT * FROM icp_icons AS i, icp_prime_shop AS p WHERE CONCAT(',',p.item_id,',') LIKE CONCAT('%,',i.itemId,',%')".$where, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute();
	if($records->rowCount() > 0){
		$z=0;
		while ($row = $records->fetchObject()) {
			if(!empty($id) && $row->price > credit($_SESSION["UsuarioLogin"])){
				return "no_credit";
			}else{
				$result .= $z == 0 ? $row->price."==" : null;
				$quantidade = explode(",", $row->count);
				$enchant = explode(",", $row->enchant);
				$attribute_fire = explode(",", $row->attribute_fire);
				$attribute_water = explode(",", $row->attribute_water);
				$attribute_wind = explode(",", $row->attribute_wind);
				$attribute_earth = explode(",", $row->attribute_earth);
				$attribute_holy = explode(",", $row->attribute_holy);
				$attribute_unholy = explode(",", $row->attribute_unholy);
				$result .= $quantidade[$z]."&".$enchant[$z]."&".$attribute_fire[$z]."&".$attribute_water[$z]."&".$attribute_wind[$z]."&".$attribute_earth[$z]."&".$attribute_holy[$z]."&".$attribute_unholy[$z]."&".$row->itemId."&".$row->itemName."&".$row->itemType."&".$row->itemTypeName."&".$row->itemWeight."&".$row->itemGrade."&".$row->itemBodyPart."&".$row->itemPAD."&".$row->itemMAD."&".$row->itemSS."&".$row->itemBSS."&".strtolower(str_replace("icon.","",$row->itemIcon))."&"."?";
				if($z == (count($quantidade)-2)){
					$result .= "==".$row->id."||";
					$z=0;
				}else
					$z++;
			}
		}
	}else{
		$result .= "not_found";
	}
	return empty($result) ? null : $result;
}

function cancelItemSale($id,$login){
	global $db, $conn, $timeAuction, $intervalBidAuction, $itemStoreLoc;
	$result = null;
	$timeAuction = $timeAuction * 86400;
	$charid_characters = $db ? info_table("characters","charid") : "char_id";
	$table_characters = $db ? "characters" : "user_data";
	$records = $conn->prepare("SELECT s.* FROM icp_shop_items AS s WHERE s.status = '1' AND (SELECT account_name FROM ".$table_characters." WHERE ".$charid_characters." = s.owner_id) = ? AND CASE WHEN s.type > '2' THEN CASE WHEN (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) IS NULL THEN '0' ELSE '1' END ELSE '0' END = '0' AND s.id = ? ORDER BY s.id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login,$id]);
	if($records->rowCount() == 1){
		if($db){
			while ($row = $records->fetchObject()) {
				$items = explode(";", $row->item_id);
				$count = explode(";", $row->count);
				$enchant = explode(";", $row->enchant);
				$augment_ref = explode(";", $row->augment_ref);
				$fire = explode(";", $row->fire);
				$water = explode(";", $row->water);
				$wind = explode(";", $row->wind);
				$earth = explode(";", $row->earth);
				$holy = explode(";", $row->holy);
				$unholy = explode(";", $row->unholy);
				$loc = $itemStoreLoc == "INVENTORY" ? "INVENTORY" : "WAREHOUSE";
				for($x=0;$x<(count($items)-1);$x++){
					if(empty($fire[$x]) && empty($water[$x]) && empty($wind[$x]) && empty($earth[$x]) && empty($holy[$x]) && empty($unholy[$x]) && empty($augment_ref[$x])){
						$augAtt = null;
					}else{
						$augAtt = $fire[$x].",".$water[$x].",".$wind[$x].",".$earth[$x].",".$holy[$x].",".$unholy[$x].",".$augment_ref[$x];
					}
					sendItem($items[$x],$count[$x],$enchant[$x],$loc,$row->owner_id,false,$augAtt);
				}
			}
		}
		$deleting = $conn->prepare("DELETE FROM icp_shop_items WHERE id = ?");
		$deleting->execute([$id]);
		return "<script>linkPlayerStore('itemStoreSales')</script>".resposta("Items returned successfully.");
	}else{
		return resposta("Something went wrong.");
	}
}

function cancelCharSale($id,$login){
	global $db, $conn;
	$records = $conn->prepare("SELECT s.* FROM icp_shop_chars AS s WHERE CASE WHEN s.type = '2' THEN CASE WHEN (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) IS NULL THEN '0' ELSE '1' END ELSE '0' END = '0' AND s.status = '1' AND s.account = ? AND s.id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$login,$id]);
	if($records->rowCount() == 1){
		if($db){
			while ($row = $records->fetchObject()) {
				$charid_characters = info_table("characters","charid");
				$updating = $conn->prepare("UPDATE characters SET account_name = '".$row->account."' WHERE account_name = '".$row->has_account."' AND ".$charid_characters." = '".$row->owner_id."'");
				$updating->execute();
			}
		}
		$deleting = $conn->prepare("DELETE FROM icp_shop_chars WHERE id = ?");
		$deleting->execute([$id]);
		return "<script>linkPlayerStore('charStoreSales');</script>".resposta("Character returned successfully.");
	}else{
		return resposta("Something went wrong.");
	}
}

function itemsStore($id,$type=null,$my=null){
	global $db, $conn, $timeAuction, $allowPlayerItemStore;
	if(!$allowPlayerItemStore)
		return null;
	$result = null;
	if($db){
		$timeAuction = $timeAuction * 86400;
		$charid_characters = info_table("characters","charid");
		if($my == "sales"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = s.owner_id) AS char_name, CASE WHEN s.type > '2' THEN (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_items AS s WHERE s.status = '1' AND (SELECT account_name FROM characters WHERE ".$charid_characters." = s.owner_id) = '".$_SESSION["UsuarioLogin"]."' ORDER BY s.id DESC");
		}elseif($my == "bids"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = s.owner_id) AS char_name, (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) AS price_auction FROM icp_shop_items AS s WHERE s.type > '2' AND s.status = '1' AND (SELECT COUNT(*) FROM icp_shop_items_auction WHERE bidId = s.id AND account = '".$_SESSION["UsuarioLogin"]."') > 0 ORDER BY s.id DESC");
		}else{
			$where = !empty($id) ? " AND s.id = '".ltrim(preg_replace("/(\D)/i" , "" , $id), "0")."'" : null;
			$where = !empty($type) ? " AND s.type = '".ltrim(preg_replace("/(\D)/i" , "" , $type), "0")."'" : $where;
			$winner = $my == "winner" ? null : " IF(s.type > '2', (UNIX_TIMESTAMP(s.date) + '".$timeAuction."') > '".time()."', '1'='1') AND";
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = s.owner_id) AS char_name, CASE WHEN s.type > '2' THEN (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_items AS s WHERE".$winner." s.status = '1'".$where." ORDER BY s.id DESC");
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$price = !empty($row->price_auction) ? $row->price_auction : $row->price;
				if(!empty($id) && $price > credit($_SESSION["UsuarioLogin"])){
					$result .= "no_credit";
				}else{
					$itemid = explode(";", $row->item_id);
					$count = explode(";", $row->count);
					$enchant = explode(";", $row->enchant);
					$augment = explode(";", $row->augmented);
					$attribute_fire = explode(";", $row->fire);
					$attribute_water = explode(";", $row->water);
					$attribute_wind = explode(";", $row->wind);
					$attribute_earth = explode(";", $row->earth);
					$attribute_holy = explode(";", $row->holy);
					$attribute_unholy = explode(";", $row->unholy);
					for($x=0;$x<(count($count)-1);$x++){
						$items_info = $conn->prepare("SELECT *, SUBSTRING_INDEX(itemIcon, '.', -1) AS itemIcons FROM icp_icons WHERE itemId = '".$itemid[$x]."'");
						$items_info->execute();
						while ($row2 = $items_info->fetchObject()) {
							$augmented = $augment[$x] > 0 ? "Augmented " : null;
							$result .= $count[$x].",".$enchant[$x].",".$attribute_fire[$x].",".$attribute_water[$x].",".$attribute_wind[$x].",".$attribute_earth[$x].",".$attribute_holy[$x].",".$attribute_unholy[$x].",".$row2->itemId.",".$augmented.$row2->itemName.",".$row2->itemType.",".$row2->itemTypeName.",".$row2->itemWeight.",".$row2->itemGrade.",".$row2->itemBodyPart.",".$row2->itemPAD.",".$row2->itemMAD.",".$row2->itemSS.",".$row2->itemBSS.",".strtolower($row2->itemIcons).",".$price.",".ltrim($row->id, "0").",".$row->char_name.",".$row->type.",".(strtotime($row->date) + $timeAuction).",".$row->price.",".$row->price_auction."?";
						}
					}
					$result .= "|";
				}
			}
		}else{
			$result .= "not_found";
		}
	}else{
		if($my == "sales"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM user_data WHERE char_id = s.owner_id) AS char_name, CASE WHEN s.type > '2' THEN (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_items AS s WHERE s.status = '1' AND (SELECT account_name FROM user_data WHERE char_id = s.owner_id) = '".$_SESSION["UsuarioLogin"]."' ORDER BY s.id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}elseif($my == "bids"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM user_data WHERE char_id = s.owner_id) AS char_name, (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) AS price_auction FROM icp_shop_items AS s WHERE s.type > '2' AND s.status = '1' AND (SELECT COUNT(*) FROM icp_shop_items_auction WHERE bidId = s.id AND account = '".$_SESSION["UsuarioLogin"]."') > 0 ORDER BY s.id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$where = !empty($id) ? " AND s.id = '".ltrim(preg_replace("/(\D)/i" , "" , $id), "0")."'" : null;
			$where = !empty($type) ? " AND s.type = '".ltrim(preg_replace("/(\D)/i" , "" , $type), "0")."'" : $where;
			$winner = $my == "winner" ? null : " CASE WHEN s.type > '2' THEN CASE WHEN DATEADD(DAY,".$timeAuction.",s.date) > '".date("Y-m-d H:i:s")."' THEN '0' ELSE '1' END ELSE '0' END = '0' AND";
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM user_data WHERE char_id = s.owner_id) AS char_name, CASE WHEN s.type > '2' THEN (SELECT MAX(value) FROM icp_shop_items_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_items AS s WHERE".$winner." s.status = '1'".$where." ORDER BY s.id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$price = !empty($row->price_auction) ? $row->price_auction : $row->price;
				if(!empty($id) && $price > credit($_SESSION["UsuarioLogin"])){
					$result .= "no_credit";
				}else{
					$itemid = explode(";", $row->item_id);
					for($x=0;$x<(count($itemid)-1);$x++){
						$items_info = $conn->prepare("SELECT * FROM icp_icons AS c, user_item AS i WHERE c.itemId = i.item_type AND i.item_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
						$items_info->execute([$itemid[$x]]);
						while ($row2 = $items_info->fetchObject()) {
							$augmented = $row2->augmentation > 0 ? "Augmented " : null;
							$result .= $row2->amount.",".$row2->enchant.",,,,,,,".$row2->itemId.",".$augmented.$row2->itemName.",".$row2->itemType.",".$row2->itemTypeName.",".$row2->itemWeight.",".$row2->itemGrade.",".$row2->itemBodyPart.",".$row2->itemPAD.",".$row2->itemMAD.",".$row2->itemSS.",".$row2->itemBSS.",".strtolower(str_replace("icon.","",$row2->itemIcon)).",".$price.",".ltrim($row->id, "0").",".$row->char_name.",".$row->type.",".(strtotime($row->date) + ($timeAuction*86400)).",".$row->price.",".$row->price_auction."?";
						}
					}
					$result .= "|";
				}
			}
		}else{
			$result .= "not_found";
		}
	}
	return empty($result) ? null : $result;
}

function charsStore($id,$type=null,$my=null){
	global $db, $conn, $timeAuction, $allowPlayerCharStore;
	if(!$allowPlayerCharStore)
		return null;
	$result = null;
	if($db){
		$timeAuction = $timeAuction * 86400;
		$charid_characters = info_table("characters","charid");
		if($my == "sales"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = s.owner_id) AS char_name, CASE WHEN s.type = '2' THEN (SELECT MAX(value) FROM icp_shop_chars_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_chars AS s WHERE s.status = '1' AND s.account = '".$_SESSION["UsuarioLogin"]."' ORDER BY s.id DESC");
		}elseif($my == "bids"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = s.owner_id) AS char_name, (SELECT MAX(value) FROM icp_shop_chars_auction WHERE bidId = s.id) AS price_auction FROM icp_shop_chars AS s WHERE s.type = '2' AND s.status = '1' AND (SELECT COUNT(*) FROM icp_shop_chars_auction WHERE bidId = s.id AND account = '".$_SESSION["UsuarioLogin"]."') > 0 ORDER BY s.id DESC");
		}else{
			$where = !empty($id) ? " AND s.id = '".ltrim(preg_replace("/(\D)/i" , "" , $id), "0")."'" : null;
			$where = !empty($type) ? " AND s.type = '".ltrim(preg_replace("/(\D)/i" , "" , $type), "0")."'" : $where;
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = s.owner_id) AS char_name, CASE WHEN s.type = '2' THEN (SELECT MAX(value) FROM icp_shop_chars_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_chars AS s WHERE IF(s.type = '2', (UNIX_TIMESTAMP(s.date) + '".$timeAuction."') > '".time()."', '1'='1') AND s.status = '1'".$where." ORDER BY s.id DESC");
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$price = !empty($row->price_auction) ? $row->price_auction : $row->price;
				if(!empty($id) && $price > credit($_SESSION["UsuarioLogin"])){
					$result .= "no_credit";
				}else{
					$result .= ltrim($row->id, "0").",".$price.",".$row->char_name.",".$row->type.",".$row->owner_id.",".$row->has_account.",".(strtotime($row->date) + $timeAuction).",".$row->price.",".$row->price_auction."?";
				}
			}
		}else{
			$result .= "not_found";
		}
	}else{
		if($my == "sales"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM user_data WHERE char_id = s.owner_id) AS char_name, CASE WHEN s.type = '2' THEN (SELECT MAX(value) FROM icp_shop_chars_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_chars AS s WHERE s.status = '1' AND s.account = '".$_SESSION["UsuarioLogin"]."' ORDER BY s.id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}elseif($my == "bids"){
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM user_data WHERE char_id = s.owner_id) AS char_name, (SELECT MAX(value) FROM icp_shop_chars_auction WHERE bidId = s.id) AS price_auction FROM icp_shop_chars AS s WHERE s.type = '2' AND s.status = '1' AND (SELECT COUNT(*) FROM icp_shop_chars_auction WHERE bidId = s.id AND account = '".$_SESSION["UsuarioLogin"]."') > 0 ORDER BY s.id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$where = !empty($id) ? " AND s.id = '".ltrim(preg_replace("/(\D)/i" , "" , $id), "0")."'" : null;
			$where = !empty($type) ? " AND s.type = '".ltrim(preg_replace("/(\D)/i" , "" , $type), "0")."'" : $where;
			$records = $conn->prepare("SELECT s.*, (SELECT char_name FROM user_data WHERE char_id = s.owner_id) AS char_name, CASE WHEN s.type = '2' THEN (SELECT MAX(value) FROM icp_shop_chars_auction WHERE bidId = s.id) END AS price_auction FROM icp_shop_chars AS s WHERE CASE WHEN s.type = '2' THEN CASE WHEN DATEADD(DAY,".$timeAuction.",s.date) > '".date("Y-m-d H:i:s")."' THEN '0' ELSE '1' END ELSE '0' END = '0' AND s.status = '1'".$where." ORDER BY s.id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute();
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$price = !empty($row->price_auction) ? $row->price_auction : $row->price;
				if(!empty($id) && $price > credit($_SESSION["UsuarioLogin"])){
					$result .= "no_credit";
				}else{
					$result .= ltrim($row->id, "0").",".$price.",".$row->char_name.",".$row->type.",".$row->owner_id.",".$row->account.",".(strtotime($row->date) + ($timeAuction*86400)).",".$row->price.",".$row->price_auction."?";
				}
			}
		}else{
			$result .= "not_found";
		}
	}
	return empty($result) ? null : $result;
}

function itemBidHistory($id,$store=null){
	global $db, $conn, $nomeMoeda, $allowAuction;
	if(!$allowAuction)
		return null;
	$result = null;
	$table = empty($store) ? "icp_shop_items_auction" : "icp_shop_chars_auction";
	$records = $conn->prepare("SELECT * FROM ".$table." WHERE bidId = ? ORDER BY id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$id]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$result .= $row->date." - User ".$row->account." offered ".$row->value." ".$nomeMoeda."<br>";
		}
	}else{
		$result .= "No bids yet.";
	}
	return empty($result) ? null : $result;
}

function bid($id,$value,$login,$store=false){
	global $db, $conn, $nomeMoeda, $allowAuction;
	if(!$allowAuction)
		return null;
	$result = null;
	$credito = credit($login);
	$table = !$store ? "icp_shop_items_auction" : "icp_shop_chars_auction";
	if($db){
		$records = $conn->prepare("SELECT value, account FROM ".$table." WHERE bidId = ? ORDER BY id DESC LIMIT 1");
	}else{
		$records = $conn->prepare("SELECT TOP 1 value, account FROM ".$table." WHERE bidId = ? ORDER BY id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$id]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			if($row->value < $value && $credito > $row->value && $credito >= $value){
				$biding = $conn->prepare("INSERT INTO ".$table." (bidId, account, value, date) VALUES (?,?,?,?)");
				$biding->execute([$id,$login,$value,date("Y-m-d H:i:s")]);
				addDonate($row->value,$row->account);
				addDonateLog("Auction bid refound. Auction ID: ".$id,$row->value,$row->account);
				debitDonate($value,$login);
				addDonateLog("Auction bidding. Auction ID: ".$id,$value,$login);
				if(!$store)
					echo "<script>closeWindow('players_store');abre('painel&pagina=itemStore');</script>";
				else
					echo "<script>closeWindow('players_store_chars');abre('painel&pagina=charStore');</script>";
				$result .= "Bid successfully sent!";
			}
		}
		$result .= empty($result) ? "You do not have ".$nomeMoeda." enough to make that bid.\\nYour current balance is ".$credito." ".$nomeMoeda.".\\nMake a donation and increase your balance." : $result;
	}else{
		$table2 = !$store ? "icp_shop_items" : "icp_shop_chars";
		$records2 = $conn->prepare("SELECT price FROM ".$table2." WHERE id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records2->execute([$id]);
		if($records2->rowCount() > 0){
			while ($row2 = $records2->fetchObject()) {
				if($row2->price <= $value && $credito >= $row2->price && $credito >= $value){
					$biding = $conn->prepare("INSERT INTO ".$table." (bidId, account, value, date) VALUES (?,?,?,?)");
					$biding->execute([$id,$login,$value,date("Y-m-d H:i:s")]);
					debitDonate($value,$login);
					addDonateLog("Auction bidding. Auction ID: ".$id,$value,$login);
					if(!$store)
						echo "<script>closeWindow('players_store');orderItemStore($('#order').val());</script>";
					else
						echo "<script>closeWindow('players_store_chars');orderItemStore($('#order').val());</script>";
					$result .= "Bid successfully sent!";
				}
			}
		}
		$result .= empty($result) ? "You do not have ".$nomeMoeda." enough to make that bid.\\nYour current balance is ".$credito." ".$nomeMoeda.".\\nMake a donation and increase your balance." : $result;
	}
	return empty($result) ? null : resposta($result);
}

function ownerAuction($auctionId,$login,$store=false){
	global $db, $conn;
	$table = !$store ? "icp_shop_items_auction" : "icp_shop_chars_auction";
	if($db)
		$records = $conn->prepare("SELECT account FROM ".$table." WHERE bidId = ? ORDER BY id DESC LIMIT 1");
	else
		$records = $conn->prepare("SELECT TOP 1 account FROM ".$table." WHERE bidId = ? ORDER BY id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$auctionId]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			if($row->account == $login){
				return true;
			}else{
				return false;
			}
		}
	}else{
		return false;
	}
}

function getAugElem($itemid){
	global $conn, $L2jVersaoClassic, $L2jVersaoRussa;
	$result = null;
	$augment = 0;
	$charid_elematt = info_table("item_elementals","charid");
	if($L2jVersaoClassic){
		$charid_itematt = info_table("item_variations","charid");
		$records3 = $conn->prepare("SELECT * FROM item_variations WHERE ".$charid_itematt." = ?");
		$records3->execute([$itemid]);
		if($records3->rowCount() > 0){
			while ($row3 = $records3->fetchObject()) {
				$augment = $row3->itemId > 0 ? 1 : $augment;
			}
		}
		$records2 = $conn->prepare("SELECT GROUP_CONCAT(elemType, ';', elemValue) AS elements FROM item_elementals WHERE ".$charid_elematt." = ?");
		$records2->execute([$itemid]);
		if($records2->rowCount() > 0){
			while ($row2 = $records2->fetchObject()) {
				$el = explode(",", $row2->elements);
				for($x=0;$x<(count($el)-1);$x++){
					$element = explode(";", $el[$x]);
					$fire = $element[0] == 0 ? $element[1] : null;
					$water = $element[0] == 1 ? $element[1] : null;
					$wind = $element[0] == 2 ? $element[1] : null;
					$earth = $element[0] == 3 ? $element[1] : null;
					$holy = $element[0] == 4 ? $element[1] : null;
					$unholy = $element[0] == 5 ? $element[1] : null;
				}
			}
			$attrubutes = $fire.",".$water.",".$wind.",".$earth.",".$holy.",".$unholy.",";
		}else{
			$attrubutes = ",,,,,,";
		}
	}else{
		$charid_itematt = info_table("item_attributes","charid");
		$records = $conn->prepare("SELECT * FROM item_attributes WHERE ".$charid_itematt." = ?");
		$records->execute([$itemid]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				if(isset($row->elemType)){
					$fire = $row->elemType == 0 ? $row->elemValue : null;
					$water = $row->elemType == 1 ? $row->elemValue : null;
					$wind = $row->elemType == 2 ? $row->elemValue : null;
					$earth = $row->elemType == 3 ? $row->elemValue : null;
					$holy = $row->elemType == 4 ? $row->elemValue : null;
					$unholy = $row->elemType == 5 ? $row->elemValue : null;
				}else{
					$records2 = $conn->prepare("SELECT GROUP_CONCAT(elemType, ';', elemValue) AS elements FROM item_elementals WHERE ".$charid_elematt." = ?");
					$records2->execute([$itemid]);
					if($records2->rowCount() > 0){
						while ($row2 = $records2->fetchObject()) {
							$el = explode(",", $row2->elements);
							for($x=0;$x<(count($el)-1);$x++){
								$element = explode(";", $el[$x]);
								$fire = $element[0] == 0 ? $element[1] : null;
								$water = $element[0] == 1 ? $element[1] : null;
								$wind = $element[0] == 2 ? $element[1] : null;
								$earth = $element[0] == 3 ? $element[1] : null;
								$holy = $element[0] == 4 ? $element[1] : null;
								$unholy = $element[0] == 5 ? $element[1] : null;
							}
						}
					}
				}
				$attrubutes = $fire.",".$water.",".$wind.",".$earth.",".$holy.",".$unholy.",";
				$augment = $row->augAttributes > 0 ? 1 : $augment;
			}
		}else{
			$attrubutes = ",,,,,,";
		}
	}
	if(empty($augment) && !$L2jVersaoClassic && !$L2jVersaoRussa){
		$charid_augment = info_table("augmentations","charid");
		$records4 = $conn->prepare("SELECT * FROM augmentations WHERE ".$charid_augment." = ?");
		$records4->execute([$itemid]);
		if($records4->rowCount() > 0){
			while ($row4 = $records4->fetchObject()) {
				$augment = $row4->attributes > 0 ? 1 : 0;
			}
		}
	}
	return $attrubutes.$augment.",";
}

function putItemsForSale($charid,$items,$price,$type,$login){
	global $db, $conn, $allowSalePvpItems, $noPvpItems, $L2jVersaoRussa, $allowAuction, $allowComboItems, $allowPlayerItemStore;
	if(!$allowPlayerItemStore)
		return null;
	if(!$allowComboItems && count($items) > 1)
		return resposta("You can sell only one item at a time.");
	if(count($items) > 24)
		return resposta("Maximum limit of 24 items.");
	$checkForSale = $conn->prepare("SELECT * FROM icp_shop_chars WHERE status='1' AND owner_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$checkForSale->execute([$charid]);
	if($checkForSale->rowCount() > 0)
		return resposta("You cannot sell the item because this character is for sale.");
	if(empty($type)){
		$type = count($items) > 1 ? 2 : 1;
	}else{
		if($allowAuction)
			$type = count($items) > 1 ? 4 : 3;
		else
			$type = count($items) > 1 ? 2 : 1;
	}
	$result = null;
	$item_id = null;
	$noPvpItems = !$db ? str_replace("i.item_id","i.item_type",$noPvpItems) : $noPvpItems;
	if($db){
		$count = null;
		$enchant = null;
		$fire = null;
		$water = null;
		$wind = null;
		$earth = null;
		$holy = null;
		$unholy = null;
		$augment = null;
		$augment_ref = null;
		$charid_items = info_table("items","charid");
		$charid_characters = info_table("characters","charid");
		for($x=0;$x<count($items);$x++){
			$wherePvP = !$allowSalePvpItems ? $noPvpItems : null;
			$records = $conn->prepare("SELECT i.* FROM items AS i WHERE i.".$charid_items." = ? AND i.owner_id = ? AND (SELECT online FROM characters WHERE ".$charid_characters." = i.owner_id) = '0'".$wherePvP);
			$records->execute([$items[$x],$charid]);
			if($records->rowCount() == 1){
				while ($row = $records->fetchObject()) {
					if($L2jVersaoRussa){
						if($row->augmentation_id > 0 && $allowSaleAugItems)
							return resposta("Augmented item is prohibited!");
						$fire .= empty($row->attribute_fire) ? "0;" : $row->attribute_fire.";";
						$water .= empty($row->attribute_water) ? "0;" : $row->attribute_water.";";
						$wind .= empty($row->attribute_wind) ? "0;" : $row->attribute_wind.";";
						$earth .= empty($row->attribute_earth) ? "0;" : $row->attribute_earth.";";
						$holy .= empty($row->attribute_holy) ? "0;" : $row->attribute_holy.";";
						$unholy .= empty($row->attribute_unholy) ? "0;" : $row->attribute_unholy.";";
						$augment .= empty($row->augmentation_id) ? "0;" : "1;";
						$augment_ref .= empty($row->attribute_fire) && empty($row->attribute_water) && empty($row->attribute_wind) && empty($row->attribute_earth) && empty($row->attribute_holy) && empty($row->attribute_unholy) && empty($row->augmentation_id) ? "0;" : $row->augmentation_id.";";
					}else{
						$augElem = explode(",", getAugElem($row->$charid_items));
						if($augElem[6] > 0 && $allowSaleAugItems)
							return resposta("Augmented item is prohibited!");
						$fire .= empty($augElem[0]) ? "0;" : $augElem[0].";";
						$water .= empty($augElem[1]) ? "0;" : $augElem[1].";";
						$wind .= empty($augElem[2]) ? "0;" : $augElem[2].";";
						$earth .= empty($augElem[3]) ? "0;" : $augElem[3].";";
						$holy .= empty($augElem[4]) ? "0;" : $augElem[4].";";
						$unholy .= empty($augElem[5]) ? "0;" : $augElem[5].";";
						$augment .= empty($augElem[6]) ? "0;" : "1;";
						$augment_ref .= empty($augElem[0]) && empty($augElem[1]) && empty($augElem[2]) && empty($augElem[3]) && empty($augElem[4]) && empty($augElem[5]) && empty($augElem[6]) ? "0;" : $row->$charid_items.";";
					}
					$item_id .= $row->item_id.";";
					$count .= $row->count.";";
					$enchant .= $row->enchant_level.";";
				}
			}else{
				return resposta("Character not found!\\nCheck if the character is offline.");
			}
		}
		$records2 = $conn->prepare("INSERT INTO icp_shop_items (item_id, owner_id, count, enchant, augmented, augment_ref, fire, water, wind, earth, holy, unholy, type, price) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$records2->execute([$item_id,$charid,$count,$enchant,$augment,$augment_ref,$fire,$water,$wind,$earth,$holy,$unholy,$type,$price]);
		if($records2->rowCount() == 1){
			for($y=0;$y<count($items);$y++){
				$records3 = $conn->prepare("DELETE FROM items WHERE ".$charid_items." = ?");
				$records3->execute([$items[$y]]);
			}
		}
	}else{
		for($x=0;$x<count($items);$x++){
			$wherePvP = !$allowSalePvpItems ? $noPvpItems : null;
			$records = $conn->prepare("SELECT i.* FROM user_item AS i WHERE i.item_id = ? AND i.char_id = ? AND (SELECT CASE WHEN login < logout THEN '0' ELSE '1' END FROM user_data WHERE char_id = i.char_id) = '0'".$wherePvP, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$records->execute([$items[$x],$charid]);
			if($records->rowCount() == 1){
				while ($row = $records->fetchObject()) {
					if($row->augmentation > 0 && $allowSaleAugItems)
						return resposta("Augmented item is prohibited!");
					$item_id .= $row->item_id.";";
				}
			}else{
				return resposta("Character not found!\\nCheck if the character is offline.");
			}
		}
		$records2 = $conn->prepare("INSERT INTO icp_shop_items (item_id, owner_id, type, price, date, status) VALUES (?,?,?,?,?,'1')");
		$records2->execute([$item_id,$charid,$type,$price,date("Y-m-d H:i:s")]);
	}
	$result = $type == 1 ? "The item successfully put up for sale." : $result;
	$result = $type == 2 ? "The combo items was created and successfully put up for sale." : $result;
	$result = $type == 3 ? "The auction was created and the item was successfully put up for sale." : $result;
	$result = $type == 4 ? "The auction was created and the combo items was successfully put up for sale." : $result;
	return empty($result) ? null : "<script>sellItem();</script>".resposta($result);
}

function putCharForSale($charid,$price,$type,$login){
	if(empty(preg_replace("/(\D)/i" , "" , $charid)))
		return resposta("Invalid character!");
	global $db, $conn, $allowAuction, $allowPlayerCharStore;
	if(!$allowPlayerCharStore)
		return null;
	$checkForSale = $conn->prepare("SELECT * FROM icp_shop_items WHERE status='1' AND owner_id = ?");
	$checkForSale->execute([$charid]);
	if($checkForSale->rowCount() > 0)
		return resposta("You cannot sell the character because this character have item(s) is for sale.");
	$result = null;
	if(empty($type)){
		$type = 1;
	}else{
		if($type == 1)
			$type = 1;
		else{
			if($allowAuction)
				$type = 2;
			else
				$type = 1;
		}
	}
	if($db){
		$charid_characters = info_table("characters","charid");
		$records = $conn->prepare("SELECT * FROM characters WHERE ".$charid_characters." = ? AND account_name = ?");
	}else{
		$records = $conn->prepare("SELECT * FROM user_data WHERE char_id = ? AND account_name = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$charid,$login]);
	if($records->rowCount() == 1){
		if(preg_replace("/(\D)/i" , "" , $price) > 0){
			if($db){
				$newacc = accountHash();
				$records2 = $conn->prepare("UPDATE characters SET account_name = ? WHERE ".$charid_characters." = ? AND account_name = ?");
				$records2->execute([$newacc,$charid,$login]);
				$records3 = $conn->prepare("INSERT INTO icp_shop_chars (owner_id, account, has_account, type, price) VALUES (?,?,?,?,?)");
				$records3->execute([$charid,$login,$newacc,$type,$price]);
			}else{
				$records3 = $conn->prepare("INSERT INTO icp_shop_chars (account, owner_id, type, price, date, status) VALUES (?,?,?,?,?,'1')");
				$records3->execute([$login,$charid,$type,$price,date("Y-m-d H:i:s")]);
			}
			echo "<script>linkPlayerStore('charStoreSell');</script>";
			if($type == 1)
				$result .= "The character successfully put up for sale.";
			else
				$result .= "The auction was created and the character was successfully put up for sale.";
		}else{
			$result .= "Invalid price!";
		}
	}else{
		$result .= "Character not found!\\nCheck if the character is offline.";
	}
	return empty($result) ? null : resposta($result);
}

function buyChar($charid,$login){
	global $db, $conn, $timeAuction, $nomeMoeda, $allowPlayerCharStore;
	if(!$allowPlayerCharStore)
		return null;
	$result = null;
	$timeAuction = $timeAuction * 86400;
	if($db)
		$records = $conn->prepare("SELECT s.*, CASE WHEN s.type = '2' THEN (SELECT CONCAT(account, ';', value) FROM icp_shop_chars_auction WHERE bidId = s.id ORDER BY id DESC LIMIT 1) END AS auction_details FROM icp_shop_chars AS s WHERE s.status = '1' AND s.id = ?");
	else
		$records = $conn->prepare("SELECT s.*, CASE WHEN s.type = '2' THEN (SELECT TOP 1 CONCAT(account, ';', value) FROM icp_shop_chars_auction WHERE bidId = s.id ORDER BY id DESC) END AS auction_details FROM icp_shop_chars AS s WHERE s.status = '1' AND s.id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$charid]);
	if($records->rowCount() == 1){
		while ($row = $records->fetchObject()) {
			if($row->type == 2){
				if(empty($row->auction_details)){
					$result .= "Error: unable to receive the character.";
				}else{
					if((strtotime($row->date)+$timeAuction) < time()){
						$last_bid = explode(";",$row->auction_details);
						if($login == $last_bid[0]){
							addDonate($last_bid[1],$row->account);
							addDonateLog("Character sold in the Auction of Players Store. ID: ".$row->id,$last_bid[1],$row->account);
							addDonateLog("Character purchase in the Auction of Player Store. ID: ".$row->id,$last_bid[1],$login);
							if($db){
								$buying = $conn->prepare("UPDATE icp_shop_chars SET status = '0' WHERE id = ?");
								$buying->execute([$charid]);
								$charid_characters = info_table("characters","charid");
								$buying2 = $conn->prepare("UPDATE characters SET account_name = ? WHERE ".$charid_characters." = '".$row->owner_id."' AND account_name = '".$row->has_account."'");
								$buying2->execute([$login]);
							}else{
								$buying_a = $conn->prepare("DELETE FROM icp_shop_chars_auction WHERE bidId = ?");
								$buying_a->execute([$charid]);
								$buying = $conn->prepare("DELETE FROM icp_shop_chars WHERE id = ?");
								$buying->execute([$charid]);
								if($row->account != $login){
									kick_char($row->owner_id);
									global $db_ip, $cached_port;
									$buf=pack("cVV",31,$row->owner_id,$_SESSION["UsuarioId"]).tounicode($login).tounicode("admin");
									$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
									fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
									fclose($cachedsocket);
								}
							}
							echo "<script>linkPlayerStore('charStoreBids');</script>";
							$result .= "Character successfully purchased!";
						}else{
							$result .= "Old owner not found.";
						}
					}else{
						$result .= empty($result) ? "Error: The auction is in progress yet." : null;
					}
				}
			}else{
				$credito = credit($login);
				if($credito >= $row->price){
					addDonate($row->price,$row->account);
					addDonateLog("Character sold in the Players Store. ID: ".$row->id,$row->price,$row->account);
					debitDonate($row->price,$login);
					addDonateLog("Character purchase in the Player Store. ID: ".$row->id,$row->price,$login);
					if($db){
						$buying = $conn->prepare("UPDATE icp_shop_chars SET status = '0' WHERE id = ?");
						$buying->execute([$charid]);
						$charid_characters = info_table("characters","charid");
						$buying2 = $conn->prepare("UPDATE characters SET account_name = ? WHERE ".$charid_characters." = '".$row->owner_id."' AND account_name = '".$row->has_account."'");
						$buying2->execute([$login]);
					}else{
						$buying = $conn->prepare("DELETE FROM icp_shop_chars WHERE id = ?");
						$buying->execute([$charid]);
						if($row->account != $login){
							kick_char($row->owner_id);
							global $db_ip, $cached_port;
							$buf=pack("cVV",31,$row->owner_id,$_SESSION["UsuarioId"]).tounicode($login).tounicode("admin");
							$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
							fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
							fclose($cachedsocket);
						}
					}
					echo "<script>orderCharStore($('#order').val());</script>";
					$result .= "Character successfully purchased!";
				}else{
					$result .= empty($result) ? "You do not have ".$nomeMoeda." enough to make that bid.\\nYour current balance is ".$credito." ".$nomeMoeda.".\\nMake a donation and increase your balance." : null;
				}
			}
		}
	}
	return empty($result) ? null : resposta($result);
}

function buyItem($itemid,$charid,$login,$store=true){
	global $db, $conn, $timeAuction, $itemStoreLoc, $itemPrimeShopLoc, $nomeMoeda, $allowPlayerItemStore, $allowPrimeShop;
	if(!$allowPlayerItemStore && $store)
		return null;
	if(!$allowPrimeShop && !$store)
		return null;
	$result = null;
	$timeAuction = $timeAuction * 86400;
	if($store){
		if($db)
			$records = $conn->prepare("SELECT s.*, CASE WHEN s.type > '2' THEN (SELECT CONCAT(account, ';', value) FROM icp_shop_items_auction WHERE bidId = s.id ORDER BY id DESC LIMIT 1) END AS auction_details FROM icp_shop_items AS s WHERE s.status = '1' AND s.id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		else
			$records = $conn->prepare("SELECT s.*, CASE WHEN s.type > '2' THEN (SELECT TOP 1 CONCAT(account, ';', value) FROM icp_shop_items_auction WHERE bidId = s.id ORDER BY id DESC) END AS auction_details FROM icp_shop_items AS s WHERE s.status = '1' AND s.id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}else{
		$records = $conn->prepare("SELECT * FROM icp_prime_shop WHERE id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$itemid]);
	if($records->rowCount() == 1){
		while ($row = $records->fetchObject()) {
			if($db){
				$charid_characters = info_table("characters","charid");
				$owner = $conn->prepare("SELECT * FROM characters WHERE ".$charid_characters." = ? AND account_name = ? AND online = '0'");
			}else{
				$owner = $conn->prepare("SELECT * FROM user_data WHERE char_id = ? AND account_name = ? AND login < logout", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			}
			$owner->execute([$charid,$login]);
			if($owner->rowCount() == 1){
				$credito = credit($login);
				if($store){
					if($row->type > 0 && $row->type < 3){
						if($credito >= $row->price){
							if($db)
								$old_owner = $conn->prepare("SELECT account_name FROM characters WHERE ".$charid_characters." = ?");
							else
								$old_owner = $conn->prepare("SELECT account_name FROM user_data WHERE char_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
							$old_owner->execute([$row->owner_id]);
							if($old_owner->rowCount() == 1){
								while ($row2 = $old_owner->fetchObject()) {
									addDonate($row->price,$row2->account_name);
									addDonateLog("Item(s) sold in the Players Store. ID: ".$row->id,$row->price,$row2->account_name);
									debitDonate($row->price,$login);
									addDonateLog("Item(s) purchase in the Player Store. ID: ".$row->id,$row->price,$login);
									if($db)
										$buying = $conn->prepare("UPDATE icp_shop_items SET status = '0' WHERE id = ?");
									else
										$buying = $conn->prepare("DELETE FROM icp_shop_items WHERE id = ?");
									$buying->execute([$itemid]);
									$items = explode(";", $row->item_id);
									if($db){
										$count = explode(";", $row->count);
										$enchant = explode(";", $row->enchant);
										$augment_ref = explode(";", $row->augment_ref);
										$fire = explode(";", $row->fire);
										$water = explode(";", $row->water);
										$wind = explode(";", $row->wind);
										$earth = explode(";", $row->earth);
										$holy = explode(";", $row->holy);
										$unholy = explode(";", $row->unholy);
										$loc = $itemStoreLoc == "INVENTORY" ? "INVENTORY" : "WAREHOUSE";
									}
									for($x=0;$x<(count($items)-1);$x++){
										if($db){
											if(empty($fire[$x]) && empty($water[$x]) && empty($wind[$x]) && empty($earth[$x]) && empty($holy[$x]) && empty($unholy[$x]) && empty($augment_ref[$x])){
												$augAtt = null;
											}else{
												$augAtt = $fire[$x].",".$water[$x].",".$wind[$x].",".$earth[$x].",".$holy[$x].",".$unholy[$x].",".$augment_ref[$x];
											}
											sendItem($items[$x],$count[$x],$enchant[$x],$loc,$charid,false,$augAtt);
										}else{
											if($row->owner_id != $charid){
												global $db_ip, $cached_port;
												kick_char($row->owner_id);
												kick_char($charid);
												$buf=pack("cVVVV",40,$row->owner_id,$items[$x],$charid,1).tounicode("admin");
												$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
												fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
												fclose($cachedsocket);
											}
										}
									}
									echo "<script>closeWindow('players_store');orderItemStore($('#order').val());</script>";
									$result .= "Successfully purchased item!";
								}
							}else{
								$result .= "Old owner not found.";
							}
						}else{
							$result .= empty($result) ? "You do not have ".$nomeMoeda." enough to make that bid.\\nYour current balance is ".$credito." ".$nomeMoeda.".\\nMake a donation and increase your balance." : null;
						}
					}elseif($row->type > 2 && $row->type < 5){
						if(empty($row->auction_details)){
							$result .= "Error: unable to receive the item(s).";
						}else{
							if((strtotime($row->date)+$timeAuction) < time()){
								if($db)
									$old_owner = $conn->prepare("SELECT account_name FROM characters WHERE ".$charid_characters." = ?");
								else
									$old_owner = $conn->prepare("SELECT account_name FROM user_data WHERE char_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
								$old_owner->execute([$row->owner_id]);
								if($old_owner->rowCount() == 1){
									while ($row2 = $old_owner->fetchObject()) {
										$last_bid = explode(";",$row->auction_details);
										addDonate($last_bid[1],$row2->account_name);
										addDonateLog("Item(s) sold in the Auction of Players Store. ID: ".$row->id,$last_bid[1],$row2->account_name);
										addDonateLog("Item(s) purchase in the Auction of Player Store. ID: ".$row->id,$last_bid[1],$login);
										if($db)
											$buying = $conn->prepare("UPDATE icp_shop_items SET status = '0' WHERE id = ?");
										else{
											$buying_a = $conn->prepare("DELETE FROM icp_shop_items_auction WHERE bidId = ?");
											$buying_a->execute([$itemid]);
											$buying = $conn->prepare("DELETE FROM icp_shop_items WHERE id = ?");
										}
										$buying->execute([$itemid]);
										$items = explode(";", $row->item_id);
										if($db){
											$count = explode(";", $row->count);
											$enchant = explode(";", $row->enchant);
											$augment_ref = explode(";", $row->augment_ref);
											$fire = explode(";", $row->fire);
											$water = explode(";", $row->water);
											$wind = explode(";", $row->wind);
											$earth = explode(";", $row->earth);
											$holy = explode(";", $row->holy);
											$unholy = explode(";", $row->unholy);
											$loc = $itemStoreLoc == "INVENTORY" ? "INVENTORY" : "WAREHOUSE";
										}
										for($x=0;$x<(count($items)-1);$x++){
											if($db){
												if(empty($fire[$x]) && empty($water[$x]) && empty($wind[$x]) && empty($earth[$x]) && empty($holy[$x]) && empty($unholy[$x]) && empty($augment_ref[$x])){
													$augAtt = null;
												}else{
													$augAtt = $fire[$x].",".$water[$x].",".$wind[$x].",".$earth[$x].",".$holy[$x].",".$unholy[$x].",".$augment_ref[$x];
												}
												sendItem($items[$x],$count[$x],$enchant[$x],$loc,$charid,false,$augAtt);
											}else{
												if($row->owner_id != $charid){
													global $db_ip, $cached_port;
													kick_char($row->owner_id);
													kick_char($charid);
													$buf=pack("cVVVV",40,$row->owner_id,$items[$x],$charid,1).tounicode("admin");
													$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
													fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
													fclose($cachedsocket);
												}
											}
										}
										echo "<script>closeWindow('players_store_auction');linkPlayerStore('itemStoreBids');</script>";
										$result .= "Item(s) successfully purchased!";
									}
								}else{
									$result .= "Old owner not found.";
								}
							}else{
								$result .= empty($result) ? "Error: The auction is in progress yet." : null;
							}
						}
					}
				}else{
					if($credito >= $row->price){
						debitDonate($row->price,$login);
						addDonateLog("Item(s) purchase in the Prime Shop. ID: ".$row->id,$row->price,$login);
						$items = explode(",", $row->item_id);
						$count = explode(",", $row->count);
						$enchant = explode(",", $row->enchant);
						$fire = explode(",", $row->attribute_fire);
						$water = explode(",", $row->attribute_water);
						$wind = explode(",", $row->attribute_wind);
						$earth = explode(",", $row->attribute_earth);
						$holy = explode(",", $row->attribute_holy);
						$unholy = explode(",", $row->attribute_unholy);
						$loc = $itemPrimeShopLoc == "INVENTORY" ? "INVENTORY" : "WAREHOUSE";
						for($x=0;$x<(count($items)-1);$x++){
							$stack = true;
							if(empty($fire[$x]) && empty($water[$x]) && empty($wind[$x]) && empty($earth[$x]) && empty($holy[$x]) && empty($unholy[$x])){
								$augAtt = null;
							}else{
								$augAtt = $fire[$x].",".$water[$x].",".$wind[$x].",".$earth[$x].",".$holy[$x].",".$unholy[$x];
							}
							$stackable = $conn->prepare("SELECT itemType FROM icp_icons WHERE itemId = '".$items[$x]."'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
							$stackable->execute();
							if($stackable->rowCount() == 1){
								while ($row2 = $stackable->fetchObject()) {
									$stack = $row2->itemType == "Armor" || $row2->itemType == "Weapon" ? false : $stack;
								}
							}
							sendItem($items[$x],$count[$x],$enchant[$x],$loc,$charid,$stack,$augAtt,$store);
						}
						echo "<script>closeWindow('items_premium');</script>";
						$result .= "Item(s) successfully purchased!";
					}else{
						$result .= empty($result) ? "You do not have ".$nomeMoeda." enough to make that bid.\\nYour current balance is ".$credito." ".$nomeMoeda.".\\nMake a donation and increase your balance." : null;
					}
				}
			}else{
				$result .= "Character not found!\\nCheck if the character is offline.";
			}
		}
	}
	return empty($result) ? null : resposta($result);
}

function accountHash($numAlpha=25,$numNonAlpha=10){
	$listAlpha = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
	$listNonAlpha = ':!.$/*-+&@_+./*&$-!';
	return time().str_shuffle(
		substr(str_shuffle($listAlpha),0,$numAlpha) .
		substr(str_shuffle($listNonAlpha),0,$numNonAlpha)
	);
}

function showCharQuests($charid,$login){
	global $db, $conn;
	$result = null;
	if($db){
		$charid_characters = info_table("characters","charid");
		$charid_quests = info_table("character_quests","charid");
		$records = $conn->prepare("SELECT c.* FROM character_quests AS c WHERE c.".$charid_quests." = ? AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_quests.") = ? AND value in (SELECT MAX(value) FROM character_quests WHERE ".$charid_quests." = c.".$charid_quests." GROUP by name)");
		$records->execute([$charid,$login]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$result .= $row->name.",".$row->value."|";
			}
		}
	}else{
		$records = $conn->prepare("SELECT c.* FROM quest AS c WHERE c.char_id = ? AND (SELECT account_name FROM user_data WHERE char_id = c.char_id) = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$charid,$login]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			for($x=1;$x<27;$x++){
				$result .= $results["q".$x] > 0 ? quest_name($results["q".$x]).",Started|" : null;
			}
		}
	}
	return empty($result) ? null : $result;
}

function showBaseClasse($charid,$login){
	global $db, $conn, $L2jVersaoRussa;
	$result = null;
	if($db){
		$charid_characters = info_table("characters","charid");
		if(!$L2jVersaoRussa){
			$records = $conn->prepare("SELECT (base_class) AS class_id FROM characters WHERE ".$charid_characters." = ? AND account_name = ?");
		}else{
			$charid_subclass = info_table("character_subclasses","charid");
			$records = $conn->prepare("SELECT cs.class_id FROM character_subclasses AS cs, characters AS c WHERE cs.".$charid_subclass." = ? AND cs.".$charid_subclass." = c.".$charid_characters." AND c.account_name = ? AND isBase = '1'");
		}
	}else{
		$records = $conn->prepare("SELECT (subjob0_class) AS class_id FROM user_data WHERE char_id = ? AND account_name = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$charid,$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$result .= $row->class_id;
		}
	}
	return empty($result) ? null : $result;
}
function showSubClasses($charid,$login){
	global $db, $conn, $L2jVersaoRussa;
	$result = null;
	$result .= showBaseClasse($charid,$login).";";
	if($db){
		$charid_characters = info_table("characters","charid");
		$charid_subclass = info_table("character_subclasses","charid");
		if(!$L2jVersaoRussa){
			$records = $conn->prepare("SELECT c.class_id FROM character_subclasses AS c WHERE c.".$charid_subclass." = ? AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_subclass.") = ? AND class_index != '0'");
		}else{
			$records = $conn->prepare("SELECT c.class_id FROM character_subclasses AS c WHERE c.".$charid_subclass." = ? AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_subclass.") = ? AND isBase = '0'");
		}
	}else{
		$records = $conn->prepare("SELECT subjob1_class, subjob2_class, subjob3_class FROM user_data WHERE char_id = ? AND account_name = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$charid,$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			if($db){
				$result .= $row->class_id.";";
			}else{
				$sub1 = $row->subjob1_class > 0 ? $row->subjob1_class.";" : null;
				$sub2 = $row->subjob2_class > 0 ? $row->subjob2_class.";" : null;
				$sub3 = $row->subjob3_class > 0 ? $row->subjob3_class.";" : null;
				$result .= $sub1.$sub2.$sub3;
			}
		}
	}
	return empty($result) ? null : $result;
}

function showCharBuffs($charid,$login){
	global $conn, $db, $L2jVersaoRussa;
	$result = null;
	if($db){
		$charid_skillssave = info_table("character_skills_save","charid");
		$charid_characters = info_table("characters","charid");
		if(!$L2jVersaoRussa){
			$records = $conn->prepare("SELECT *, (c.effect_cur_time) AS rtime FROM character_skills_save AS c, icp_skills AS i WHERE c.".$charid_skillssave." = ? AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_skillssave.") = ? AND c.skill_id = i.skill_id AND c.effect_cur_time >= '0' AND c.class_index = '0' ORDER BY c.effect_cur_time ASC");
		}else{
			$charid_subclass = info_table("character_subclasses","charid");
			$records = $conn->prepare("SELECT *, (c.end_time) AS rtime FROM character_skills_save AS c, icp_skills AS i WHERE c.".$charid_skillssave." = ? AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_skillssave.") = ? AND c.skill_id = i.skill_id AND c.end_time >= '0' AND c.class_index = (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_skillssave." AND isBase = '1') ORDER BY c.end_time ASC");
		}
		$records->execute([$charid,$login]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$tempo = $L2jVersaoRussa ? remainingTime(time()-($row->rtime/1000)) : remainingTime($row->rtime);
				$result .= $row->skill_id.";".$row->name.";".$row->skill_level.";".$tempo."|";
			}
		}
	}else{
		$records = $conn->prepare("SELECT u.* FROM user_ActiveSkill AS u WHERE u.char_id = ? AND (SELECT account_name FROM user_data WHERE char_id = u.char_id) = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$charid,$login]);
		if($records->rowCount() == 1){
			$row = $records->fetch(PDO::FETCH_ASSOC);
			for($x=1;$x<41;$x++){
				if($row["s".$x] > 0){
					$sName = $conn->prepare("SELECT name FROM icp_skills WHERE skill_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
					$sName->execute([$row["s".$x]]);
					$row2 = $sName->fetch(PDO::FETCH_ASSOC);
					$result .= $row["s".$x].";".$row2["name"].";".$row["l".$x].";".remainingTime($row["d".$x])."|";
				}
			}
		}
	}
	return empty($result) ? null : $result;
}

function showCharSkills($charid,$login){
	global $db, $conn, $L2jVersaoRussa;
	$result = null;
	$class = null;
	$classes = explode(";", showSubClasses($charid,$login));
	for($x=0;$x<(count($classes)-1);$x++){
		$class .= classe_name($classes[$x]).";";
		if($db){
			$class_index = $L2jVersaoRussa ? $classes[$x] : $x;
			$charid_characters = info_table("characters","charid");
			$charid_skills = info_table("character_skills","charid");
			$records = $conn->prepare("SELECT c.*, s.name, s.level FROM character_skills AS c, icp_skills AS s WHERE c.skill_id = s.skill_id AND c.".$charid_skills." = ? AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_skills.") = ? AND c.class_index = '".$class_index."'");
		}else{
			$records = $conn->prepare("SELECT c.*, (c.skill_lev) AS skill_level, s.name, s.level FROM user_skill AS c, icp_skills AS s WHERE c.skill_id = s.skill_id AND c.char_id = ? AND (SELECT account_name FROM user_data WHERE char_id = c.char_id) = ? AND c.subjob_id = '".$x."'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute([$charid,$login]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$skill_enchant = $row->skill_level > 100 ? ceil(preg_replace("/(\D)/i" , "" , substr($row->skill_level,-2))) : null;
				$skill_level = $row->skill_level > 100 ? $row->level : $row->skill_level;
				$result .= $row->skill_id.",".$row->name.",".$skill_level.",".$skill_enchant.";";
			}
			$result .= "|";
		}
	}
	return empty($result) ? null : $class."?".$result;
}

function showInventoryItems($charid,$login){
	global $db, $conn, $L2jVersaoRussa;
	$result = null;
	$peso = 0;
	$char_base_id = 0;
	$char_level = 0;
	$hennas = null;
	if($db){
		$charid_characters = info_table("characters","charid");
		$records = $conn->prepare("SELECT * FROM items AS i, icp_icons AS m WHERE i.item_id = m.itemId AND owner_id = ? AND i.loc IN('PAPERDOLL','INVENTORY') AND (SELECT account_name FROM characters WHERE ".$charid_characters." = i.owner_id) = ? ORDER BY m.itemId ASC");
	}else{
		$records = $conn->prepare("SELECT i.*, m.*, (i.amount) AS count, (i.enchant) AS enchant_level, CASE WHEN i.item_id IN(u.ST_underware,u.ST_right_ear,u.ST_left_ear,u.ST_neck,u.ST_right_finger,u.ST_left_finger,u.ST_head,u.ST_right_hand,u.ST_left_hand,u.ST_gloves,u.ST_chest,u.ST_legs,u.ST_feet,u.ST_back,u.ST_both_hand,u.ST_hair,u.ST_hair_deco,u.ST_hair_all) THEN 'PAPERDOLL' ELSE 'INVENTORY' END AS loc FROM user_item AS i, icp_icons AS m, user_data AS u WHERE i.item_type = m.itemId AND i.char_id = u.char_id AND i.char_id = ? AND i.warehouse = '0' AND u.account_name = ? ORDER BY m.itemId ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$charid,$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$augment = null;
			$fire = null;
			$water = null;
			$wind = null;
			$earth = null;
			$holy = null;
			$unholy = null;
			$attrubutes = null;
			if($db){
				if($L2jVersaoRussa){
					$fire = empty($row->attribute_fire) ? $fire : $row->attribute_fire;
					$water = empty($row->attribute_water) ? $water : $row->attribute_water;
					$wind = empty($row->attribute_wind) ? $wind : $row->attribute_wind;
					$earth = empty($row->attribute_earth) ? $earth : $row->attribute_earth;
					$holy = empty($row->attribute_holy) ? $holy : $row->attribute_holy;
					$unholy = empty($row->attribute_unholy) ? $unholy : $row->attribute_unholy;
					$augment = $row->augmentation_id > 0 ? "Augmented " : $augment;
				}else{
					$charid_items = info_table("items","charid");
					$augElem = explode(",", getAugElem($row->$charid_items));
					$fire = empty($augElem[0]) ? $fire : $augElem[0];
					$water = empty($augElem[1]) ? $water : $augElem[1];
					$wind = empty($augElem[2]) ? $wind : $augElem[2];
					$earth = empty($augElem[3]) ? $earth : $augElem[3];
					$holy = empty($augElem[4]) ? $holy : $augElem[4];
					$unholy = empty($augElem[5]) ? $unholy : $augElem[5];
					$augment = empty($augElem[6]) ? $augment : "Augmented ";
				}
			}else{
				$augment = $row->augmentation > 0 ? "Augmented " : $augment;
			}
			$attrubutes = $fire.",".$water.",".$wind.",".$earth.",".$holy.",".$unholy.",";
			$result .= $row->count.",".$row->enchant_level.",".$attrubutes.$row->itemId.",".$augment.$row->itemName.",".$row->itemType.",".$row->itemTypeName.",".$row->itemWeight.",".$row->itemGrade.",".$row->itemBodyPart.",".$row->itemPAD.",".$row->itemMAD.",".$row->itemSS.",".$row->itemBSS.",".strtolower(str_replace("icon.","",$row->itemIcon)).",".$row->loc."|";
			$peso += $row->itemWeight;
		}
	}
	if($db){
		$charid_hennas = info_table("character_hennas","charid");
		if($L2jVersaoRussa){
			$charid_subclass = info_table("character_subclasses","charid");
			$records2 = $conn->prepare("SELECT * FROM character_hennas AS c, icp_hennas AS h WHERE c.".$charid_hennas." = ? AND c.class_index = (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_hennas." AND isBase = '1') AND c.symbol_id = h.symbol_id AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_hennas.") = ? ORDER BY c.slot ASC");
		}else{
			$records2 = $conn->prepare("SELECT * FROM character_hennas AS c, icp_hennas AS h WHERE c.".$charid_hennas." = ? AND c.class_index = '0' AND c.symbol_id = h.symbol_id AND (SELECT account_name FROM characters WHERE ".$charid_characters." = c.".$charid_hennas.") = ? ORDER BY c.slot ASC");
		}
	}else{
		$records2 = $conn->prepare("SELECT * FROM user_henna AS c, icp_hennas AS h WHERE c.char_id = ? AND h.symbol_id IN(c.henna_1,c.henna_2,c.henna_3) AND (SELECT account_name FROM user_data WHERE char_id = c.char_id) = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records2->execute([$charid,$login]);
	if($records2->rowCount() > 0){
		while ($row2 = $records2->fetchObject()) {
			$hennas .= strtolower($row2->symbol_type).";";
			if(!empty($row2->stat_INT))
				$hennas .= $row2->stat_INT > 0 ? "Int +".$row2->stat_INT.";" : "Int ".$row2->stat_INT.";";
			if(!empty($row2->stat_STR))
				$hennas .= $row2->stat_STR > 0 ? "Str +".$row2->stat_STR.";" : "Str ".$row2->stat_STR.";";
			if(!empty($row2->stat_CON))
				$hennas .= $row2->stat_CON > 0 ? "Con +".$row2->stat_CON.";" : "Con ".$row2->stat_CON.";";
			if(!empty($row2->stat_MEM))
				$hennas .= $row2->stat_MEM > 0 ? "Men +".$row2->stat_MEM.";" : "Men ".$row2->stat_MEM.";";
			if(!empty($row2->stat_DEX))
				$hennas .= $row2->stat_DEX > 0 ? "Dex +".$row2->stat_DEX.";" : "Dex ".$row2->stat_DEX.";";
			if(!empty($row2->stat_WIT))
				$hennas .= $row2->stat_WIT > 0 ? "Wit +".$row2->stat_WIT.";" : "Wit ".$row2->stat_WIT.";";
			$hennas .= "_";
		}
	}
	if($db){
		$records3 = $conn->prepare("SELECT base_class, level FROM characters WHERE ".$charid_characters." = ? AND account_name = ?");
	}else{
		$records3 = $conn->prepare("SELECT subjob0_class, Lev FROM user_data WHERE char_id = ? AND account_name = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records3->execute([$charid,$login]);
	if($records3->rowCount() > 0){
		while ($row3 = $records3->fetchObject()) {
			$char_base_id = $row3->base_class;
			$char_level = $row3->level;
		}
	}
	if($char_base_id >= 0 and $char_base_id <= 9 or $char_base_id >= 88 and $char_base_id <= 93){
		$divsor = 108667;
	}elseif($char_base_id >= 10 and $char_base_id <= 17 or $char_base_id >= 94 and $char_base_id <= 98){
		$divsor = 67725;
	}elseif($char_base_id >= 18 and $char_base_id <= 24 or $char_base_id >= 99 and $char_base_id <= 102){
		$divsor = 88360;
	}elseif($char_base_id >= 25 and $char_base_id <= 30 or $char_base_id >= 103 and $char_base_id <= 105){
		$divsor = 63840;
	}elseif($char_base_id >= 31 and $char_base_id <= 37 or $char_base_id >= 106 and $char_base_id <= 109){
		$divsor = 78518;
	}elseif($char_base_id >= 38 and $char_base_id <= 43 or $char_base_id >= 110 and $char_base_id <= 112){
		$divsor = 61976;
	}elseif($char_base_id >= 44 and $char_base_id <= 48 or $char_base_id >= 113 and $char_base_id <= 114){
		$divsor = 122305;
	}elseif($char_base_id >= 49 and $char_base_id <= 52 or $char_base_id >= 115 and $char_base_id <= 116){
		$divsor = 76222;
	}elseif($char_base_id >= 53 and $char_base_id <= 57 or $char_base_id >= 117 and $char_base_id <= 118){
		if($char_level < 10){
			$divisor = 115290;
		}elseif($char_level >= 10 and $char_level < 24){
			$divisor = 230550;
		}elseif($char_level >= 24 and $char_level < 46){
			$divisor = 345870;
		}elseif($char_level >= 46){
			$divisor = 461130;
		}
		$divsor = $divisor;
	}elseif($char_base_id == 123 or $char_base_id == 125 or $char_base_id == 127 or $char_base_id == 128 or $char_base_id == 131 or $char_base_id == 132){
		$divsor = 95280;
	}elseif($char_base_id == 124 or $char_base_id == 126 or $char_base_id == 130 or $char_base_id == 129 or $char_base_id == 134 or $char_base_id == 133 or $char_base_id == 135 or $char_base_id == 136){
		$divsor = 92500;
	}
	$peso = $peso * 100 > 0 ? ($peso * 100) / $divsor : 0;
	if($peso >= 10){ $peso = substr($peso, 0,5); }else{ $peso = substr($peso, 0,4); }
	return empty($result) ? null : $peso."?".$char_base_id."?".$hennas."||".$result;
}

function showWarehouseItems($charid,$login){
	global $db, $conn, $L2jVersaoRussa;
	$result = null;
	if($db){
		$charid_characters = info_table("characters","charid");
		$records = $conn->prepare("SELECT * FROM items AS i, icp_icons AS m WHERE i.item_id = m.itemId AND owner_id = ? AND i.loc = 'WAREHOUSE' AND (SELECT account_name FROM characters WHERE ".$charid_characters." = i.owner_id) = ? ORDER BY m.itemId ASC");
	}else{
		$records = $conn->prepare("SELECT *, (amount) AS count, (enchant) AS enchant_level FROM user_item AS i, icp_icons AS m WHERE i.item_type = m.itemId AND char_id = ? AND warehouse = '1' AND (SELECT account_name FROM user_data WHERE char_id = i.char_id) = ? ORDER BY m.itemId ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute([$charid,$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$augment = null;
			$fire = null;
			$water = null;
			$wind = null;
			$earth = null;
			$holy = null;
			$unholy = null;
			$attrubutes = null;
			if($db){
				if($L2jVersaoRussa){
					$fire = empty($row->attribute_fire) ? $fire : $row->attribute_fire;
					$water = empty($row->attribute_water) ? $water : $row->attribute_water;
					$wind = empty($row->attribute_wind) ? $wind : $row->attribute_wind;
					$earth = empty($row->attribute_earth) ? $earth : $row->attribute_earth;
					$holy = empty($row->attribute_holy) ? $holy : $row->attribute_holy;
					$unholy = empty($row->attribute_unholy) ? $unholy : $row->attribute_unholy;
					$augment = $row->augmentation_id > 0 ? "Augmented " : $augment;
				}else{
					$charid_items = info_table("items","charid");
					$augElem = explode(",", getAugElem($row->$charid_items));
					$fire = empty($augElem[0]) ? $fire : $augElem[0];
					$water = empty($augElem[1]) ? $water : $augElem[1];
					$wind = empty($augElem[2]) ? $wind : $augElem[2];
					$earth = empty($augElem[3]) ? $earth : $augElem[3];
					$holy = empty($augElem[4]) ? $holy : $augElem[4];
					$unholy = empty($augElem[5]) ? $unholy : $augElem[5];
					$augment = empty($augElem[6]) ? $augment : "Augmented ";
				}
			}else{
				$augment = $row->augmentation > 0 ? "Augmented " : $augment;
			}
			$attrubutes = $fire.",".$water.",".$wind.",".$earth.",".$holy.",".$unholy.",";
			$result .= $row->count.",".$row->enchant_level.",".$attrubutes.$row->itemId.",".$augment.$row->itemName.",".$row->itemType.",".$row->itemTypeName.",".$row->itemWeight.",".$row->itemGrade.",".$row->itemBodyPart.",".$row->itemPAD.",".$row->itemMAD.",".$row->itemSS.",".$row->itemBSS.",".strtolower(str_replace("icon.","",$row->itemIcon))."|";
		}
	}
	return empty($result) ? null : $result;
}

function showItemDetails($item, $combo = false){
	$html = null;
	$grade = !empty($item[13]) ? "<img src='images/grade/".$item[13]."-grade.png' border='0' height='10'>" : null;
	switch ($item[14]){
		case "head":
			$bodypart = "Headgear"; break;
		case "chest":
			$bodypart = "Upper Body"; break;
		case "onepiece":
			$bodypart = "Upper and Lower Body"; break;
		case "legs":
			$bodypart = "Lower Body"; break;
		case "gloves":
			$bodypart = "Gloves"; break;
		case "feet":
			$bodypart = "Boots"; break;
		case "back":
			$bodypart = "Cloak"; break;
		case "underwear":
			$bodypart = "Underwear"; break;
		case "waist":
			$bodypart = "Belt"; break;
		case "rhand":
			$bodypart = "One Handed"; break;
		case "lhand":
			$bodypart = "One Handed"; break;
		case "lrhand":
			$bodypart = "Two Handed"; break;
		case "rfinger;lfinger":
			$bodypart = "Ring"; break;
		case "neck":
			$bodypart = "Necklace"; break;
		case "rear;lear":
			$bodypart = "Earring"; break;
		case "rbracelet":
			$bodypart = "Bracelet"; break;
		case "lbracelet":
			$bodypart = "Bracelet"; break;
		default:
			$bodypart = null; break;
	}
	if($item[10] == 'Armor' && !empty($bodypart)){
		$item[1] = empty($item[1]) ? 0 : $item[1];
		if($bodypart == 'Ring' or $bodypart == 'Earring' or $bodypart == 'Necklace'){
			$description = "<span class='specification'>[ Jewelry Specification ]</span>";
			$legend = "<span class='specification_legend'>".$bodypart."</span>";
		}else{
			$description = "<span class='specification'>[ Armor Specification ]</span>";
			$legend = "<span class='specification_legend'>".$bodypart;
			$legend .= !empty($item[11]) ? " / ".ucfirst($item[11]) : null;
			$legend .= "</span>";
		}
		if($item[15] > 0){
			if($item[1] > 0 and $item[1] < 4){
				$padt = (1 * $item[1]) + $item[15];
			}elseif($item[1] > 3){
				$padt = ((3 * 1) + (3 * ($item[1] - 3))) + $item[15];
			}else{
				$padt = $item[15];
			}
			$pad = "P. Def. : <span class='attribute'>".$padt."</span><br />";
		}else{
			$pad = null;
		}
		if($item[16] > 0){
			if($item[1] > 0 and $item[1] < 4){
				$madt = (1 * $item[1]) + $item[16];
			}elseif($item[1]> 3){
				$madt = ((3 * 1) + (3 * ($item[1] - 3))) + $item[16];
			}else{
				$madt = $item[16];
			}
			$mad = "M. Def. : <span class='attribute'>".$madt."</span><br />";
		}else{
			$mad = null;
		}
	}elseif($item[10] == 'Weapon' && !empty($bodypart)){
		$item[1] = empty($item[1]) ? 0 : $item[1];
		$description = "<span class='specification'>[ Weapon Specification ]</span>";
		$legend = "<span class='specification_legend'>".ucfirst($item[11])." / ".$bodypart."</span>";
		if($item[15] > 0){
			if($item[1] > 0 and $item[1] < 4){
				$padt = (4 * $item[1]) + $item[15];
			}elseif($item[1] > 3){
				$padt = ((3 * 4) + (8 * ($item[1] - 3))) + $item[15];
			}else{
				$padt = $item[15];
			}
			$pad = "P. Atk. : <span class='attribute'>".$padt."</span><br />";
		}else{
			$pad = null;
		}
		if($item[16] > 0){
			if($item[1] > 0 and $item[1] < 4){
				$madt = (3 * $item[1]) + $item[16];
			}elseif($item[1] > 3){
				$madt = ((3 * 3) + (6 * ($item[1] - 3))) + $item[16];
			}else{
				$madt = $item[16];
			}
			$mad = "M. Atk. : <span class='attribute'>".$madt."</span><br />";
		}else{
			$mad = null;
		}
	}else{
		$mad = null;
		$pad = null;
		$legend = null;
		$description = "<span class='specification'>[ Item Specification ]</span>";
	}
	$legend = !empty($legend) ? $legend."<br />" : null;
	$description = !empty($description) ? $description."<br />" : null;
	if($item[17] > 0){
		$ss = "<br />Soulshot Used : <span class='attribute'>X ".$item[17]."</span>";
	}else{
		$ss = null;
	}
	if($item[18] > 0){
		$bss = "<br />Spiritshot Used : <span class='attribute'>X ".$item[18]."</span>";
	}else{
		$bss = null;
	}
	if($combo){
		$foto = file_exists("images/icons/".$item[19].".png") ? $item[19] : 404;
		$img = "<img src='images/icons/".$foto.".png' style='border:1px solid #666; width:32px; height:32px; margin-top:2px;' align='top'>";
	}else{
		$img = null;
	}
	$enchant = $item[10] != 'EtcItem' ?  !empty($bodypart) ? " <span class='attribute'>+".$item[1]."</span>" : null : null;
	$itemname = explode(" - ", $item[9]);
	$itemname = count($itemname) > 1 && $item[10] != 'EtcItem' ? $itemname[0] != "Common Item" ? $itemname[0]." - <font color='#ffd969'>".$itemname[1]."</font>" : $item[9] : $item[9];
	$html .= " <span style='text-shadow:1px 1px #444;'>".$itemname."</span><span> ".$grade;
	$html .= $item[10] == 'EtcItem' ? " [".number_format($item[0],0,'.','.')."]" : null;
	$html .= "</span><br />".$legend."<br />".$description.$pad.$mad."Weight : <span class='attribute'>";
	$html .= !empty($item[12]) ? $item[12] : 0;
	$html .= "</span>".$ss.$bss;
	$att = 0;
	if($item[10] == 'Weapon'){
		$attItem = attrWeapons($item[2],"fire").attrWeapons($item[3],"water").attrWeapons($item[4],"wind").attrWeapons($item[5],"earth").attrWeapons($item[6],"holy").attrWeapons($item[7],"dark");
		$attItem = explode("|", $attItem);
		for($k=0;$k<count($attItem);$k++){
			$attSubItem = explode(";", $attItem[$k]);
			if(!empty($attSubItem[0])){
				$att++;
				if($att == 1)
					$html .= "<br /><br /><span class='specification'>[ Element Specification ]</span><br />";
				$html .= "<span class=attribute>".ucfirst($attSubItem[4])."</span> Lv <span class='attribute'>".$attSubItem[1]."</span> (<span class=attribute>".ucfirst($attSubItem[4])."</span> P. Atk. <span class='attribute'>".$attSubItem[0]."</span>)<br /><span style='background:url(images/grade/bar_".$attSubItem[4]."_1.png) no-repeat;width:140px;height:7px;display:block;'><img src='images/grade/bar_".$attSubItem[4]."_2.png' border='0' width='".((($attSubItem[0] - $attSubItem[2]) / ($attSubItem[3] - $attSubItem[2])) * 100)."%' height='7'></span>";
			}
		}
	}elseif($item[10] == 'Armor'){
		$attItem = attrArmors($item[2],"fire").attrArmors($item[3],"water").attrArmors($item[4],"wind").attrArmors($item[5],"earth").attrArmors($item[6],"holy").attrArmors($item[7],"dark");
		$attItem = explode("|", $attItem);
		for($l=0;$l<count($attItem);$l++){
			$attSubItem = explode(";", $attItem[$l]);
			if(!empty($attSubItem[0])){
				$att++;
				if($att == 1)
					$html .= "<br /><br /><span class='specification'>[ Element Specification ]</span><br />";
				if($attSubItem[4] == 'fire')
					$elemento = 'Water';
				elseif($attSubItem[4] == 'water')
					$elemento = 'Fire';
				elseif($attSubItem[4] == 'wind')
					$elemento = 'Earth';
				elseif($attSubItem[4] == 'earth')
					$elemento = 'Wind';
				elseif($attSubItem[4] == 'holy')
					$elemento = 'Dark';
				elseif($attSubItem[4] == 'dark')
					$elemento = 'Holy';
				else
					$elemento = null;
				$html .= "<span class=attribute>".$elemento."</span> Lv <span class='attribute'>".$attSubItem[1]."</span> (<span class=attribute>".ucfirst($attSubItem[4])."</span> P. Def. <span class='attribute'>".$attSubItem[0]."</span>)<br /><span style='background:url(images/grade/bar_".$attSubItem[4]."_1.png) no-repeat;width:140px;height:7px;display:block;'><img src='images/grade/bar_".$attSubItem[4]."_2.png' border='0' width='".((($attSubItem[0] - $attSubItem[2]) / ($attSubItem[3] - $attSubItem[2])) * 100)."%' height='7'></span>";
			}
		}
	}
	return "<p id='fanc2'>".$img.$enchant.$html."</p>";
}

function kkk($qtd){
	if($qtd >= 1000){
		$qtd = number_format($qtd,0,'.','.');
		$qt = explode(".", $qtd);
		for($k=0;$k<(count($qt)-1);$k++){
			if((count($qt) - 1) != '0'){
				$qtdk .= 'K';
			}else{
				$qtdk .= null;
			}
			$p = $k;
		}
		for($pt=0;$pt<$p;$pt++){
			$ponto .= '.';
		}
		$qtda = substr(str_replace("0", "", $qtd), 0, 3);
		if($qtda == substr(str_replace("0", "", $qtd), 0, 1)."." and strlen(preg_replace("/(\D)/i" , "" , $qtd."'")) == 6){
			$qtda = substr(str_replace("0", "", $qtd), 0, 1)."00";
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 1)."." and strlen(preg_replace("/(\D)/i" , "" , $qtd."'")) == 5){
			$qtda = substr(str_replace("0", "", $qtd), 0, 1)."0";
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 1)."."){
			$qtda = substr(str_replace("0", "", $qtd), 0, 1);
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 1).".." and strlen(preg_replace("/(\D)/i" , "" , $qtd."'")) == 9){
			$qtda = substr(str_replace("0", "", $qtd), 0, 1)."00";
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 1).".." and strlen(preg_replace("/(\D)/i" , "" , $qtd."'")) == 8){
			$qtda = substr(str_replace("0", "", $qtd), 0, 1)."0";
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 1).".."){
			$qtda = substr(str_replace("0", "", $qtd), 0, 1);
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 1)){
			$qtda = substr(str_replace("0", "", $qtd), 0, 1);
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 2).$ponto and strlen(preg_replace("/(\D)/i" , "" , $qtd."'").$ponto) == 6){
			$qtda = substr(str_replace("0", "", $qtd), 0, 2)."0";
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 2).$ponto and strlen(preg_replace("/(\D)/i" , "" , $qtd."'").$ponto) == 5){
			$qtda = substr(str_replace("0", "", $qtd), 0, 2);
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 2).$ponto and strlen(preg_replace("/(\D)/i" , "" , $qtd."'").$ponto) == 10){
			$qtda = substr(str_replace("0", "", $qtd), 0, 2)."0";
		}elseif($qtda == substr(str_replace("0", "", $qtd), 0, 2).$ponto and strlen(preg_replace("/(\D)/i" , "" , $qtd."'").$ponto) == 9){
			$qtda = substr(str_replace("0", "", $qtd), 0, 2);
		}
	}else{
		$qtda = $qtd;
	}
	return $qtda.$qtdk;
}

function attrWeapons($att,$color){
	$level = 0;
	$level = $att > 0 && $att <= 24 ? 1 : $level;
	$level = $att > 24  && $att <= 79 ? 2 : $level;
	$level = $att > 79 && $att <= 149 ? 3 : $level;
	$level = $att > 149 && $att <= 174 ? 4 : $level;
	$level = $att > 174 && $att <= 224 ? 5 : $level;
	$level = $att > 224 && $att <= 299 ? 6 : $level;
	$level = $att >= 300 ? 7 : $level;
	$bar_min = 0;
	$bar_min = $level == 1 ? 0 : $bar_min;
	$bar_min = $level == 2 ? 25 : $bar_min;
	$bar_min = $level == 3 ? 80 : $bar_min;
	$bar_min = $level == 4 ? 150 : $bar_min;
	$bar_min = $level == 5 ? 175 : $bar_min;
	$bar_min = $level == 6 ? 225 : $bar_min;
	$bar_min = $level == 7 ? 300 : $bar_min;
	$bar_max = 0;
	$bar_max = $level == 1 ? 24 : $bar_max;
	$bar_max = $level == 2 ? 79 : $bar_max;
	$bar_max = $level == 3 ? 149 : $bar_max;
	$bar_max = $level == 4 ? 174 : $bar_max;
	$bar_max = $level == 5 ? 224 : $bar_max;
	$bar_max = $level == 6 ? 299 : $bar_max;
	$bar_max = $level == 7 ? 300 : $bar_max;
	return $att.";".$level.";".$bar_min.";".$bar_max.";".$color."|";
}

function attrArmors($att,$color){
	$level = 0;
	$level = $att > 0 && $att <= 11 ? 1 : $level;
	$level = $att > 11  && $att <= 29 ? 2 : $level;
	$level = $att > 29 && $att <= 59 ? 3 : $level;
	$level = $att > 59 && $att <= 71 ? 4 : $level;
	$level = $att > 71 && $att <= 89 ? 5 : $level;
	$level = $att > 89 && $att <= 119 ? 6 : $level;
	$level = $att >= 120 ? 7 : $level;
	$bar_min = 0;
	$bar_min = $level == 1 ? 0 : $bar_min;
	$bar_min = $level == 2 ? 12 : $bar_min;
	$bar_min = $level == 3 ? 30 : $bar_min;
	$bar_min = $level == 4 ? 60 : $bar_min;
	$bar_min = $level == 5 ? 72 : $bar_min;
	$bar_min = $level == 6 ? 90 : $bar_min;
	$bar_min = $level == 7 ? 120 : $bar_min;
	$bar_max = 0;
	$bar_max = $level == 1 ? 11 : $bar_max;
	$bar_max = $level == 2 ? 29 : $bar_max;
	$bar_max = $level == 3 ? 59 : $bar_max;
	$bar_max = $level == 4 ? 71 : $bar_max;
	$bar_max = $level == 5 ? 89 : $bar_max;
	$bar_max = $level == 6 ? 119 : $bar_max;
	$bar_max = $level == 7 ? 120 : $bar_max;
	return $att.";".$level.";".$bar_min.";".$bar_max.";".$color."|";
}

function remainingTime($data,$abrevia = false) {
	$diff = time() - (time() - $data);
	$calc1 = ($diff % 86400);
	$calc2 = ($diff % 3600);
	$dias  = floor($diff / 86400);
	$horas = floor($calc1 / 3600);
	$minut = floor($calc2 / 60);
	$segun = ($calc2 % 60);
	$return .= $dias > 0 ? "<strong>".$dias."</strong>" : null;
	$return .= $dias > 0 ? $abrevia ? "d, " : " day(s), " : null;
	$return .= $horas > 0 ? "<strong>".$horas."</strong>" : null;
	$return .= $horas > 0 ? $abrevia ? "h, " : " hour(s), " : null;
	$return .= $minut > 0 ? "<strong>".$minut."</strong>" : null;
	$return .= $minut > 0 ? $abrevia ? "m, " : " minute(s), " : null;
	$return .= $segun >= 0 ? $segun : null;
	$return .= $segun >= 0 ? $abrevia ? "s." : " second(s)." : null;
	return $return;
}

function hennasAttr($base_class,$sex){
	if(($base_class >= 0 && $base_class <= 9) || ($base_class <= 88 && $base_class <= 93)){
		$int=21; $str=40; $con=43; $men=25; $dex=30; $wit=11;
	}elseif(($base_class >= 10 && $base_class <= 17) || ($base_class >= 94 && $base_class <= 98)){
		$int=41; $str=22; $con=27; $men=39; $dex=21; $wit=20;
	}elseif(($base_class >= 18 && $base_class >= 24) || ($base_class >= 99 && $base_class <= 102)){
		$int=23; $str=36; $con=36; $men=26; $dex=35; $wit=14;
	}elseif(($base_class >= 25 && $base_class <= 30) || ($base_class >= 103 && $base_class <= 105)){
		$int=37; $str=21; $con=25; $men=40; $dex=24; $wit=23;
	}elseif(($base_class >= 31 && $base_class <= 37) || ($base_class >= 106 && $base_class <= 109)){
		$int=25; $str=41; $con=32; $men=26; $dex=34; $wit=12;
	}elseif(($base_class >= 38 && $base_class <= 43) || ($base_class >= 110 && $base_class <= 112)){
		$int=44; $str=23; $con=24; $men=37; $dex=23; $wit=19;
	}elseif(($base_class >= 44 && $base_class <= 48) || ($base_class >= 113 && $base_class <= 114)){
		$int=18; $str=40; $con=47; $men=27; $dex=26; $wit=12;
	}elseif(($base_class >= 49 && $base_class <= 52) || ($base_class >= 115 && $base_class <= 116)){
		$int=31; $str=27; $con=31; $men=42; $dex=24; $wit=15;
	}elseif(($base_class >= 53 && $base_class <= 57) || ($base_class >= 117 && $base_class <= 118)){
		$int=20; $str=39; $con=45; $men=27; $dex=29; $wit=10;
	}elseif($base_class >= 123 && $base_class <= 136){
		if($sex == 0){
			$int=29; $str=41; $con=31; $men=25; $dex=33; $wit=11;
		}else{
			$int=28; $str=39; $con=30; $men=27; $dex=35; $wit=11;
		}
	}else{
		$int=0; $str=0; $con=0; $men=0; $dex=0; $wit=0;
	}
	return $int.";".$str.";".$con.";".$men.";".$dex.";".$wit.";";
}

function teleToTown($x,$y){
	$towns = array(
				array(83229,148614,-3406,'Giran Town'),
				array(146331,25762,-2018,'Aden Town'),
				array(147928,-55273,-2734,'Goddard Town'),
				array(43799,-47727,-798,'Rune Town'),
				array(15670,142983,-2705,'Dion Town'),
				array(82956,53162,-1495,'Oren Town'),
				array(-12672,122776,-3116,'Gludio Town'),
				array(87386,-143246,-1293,'Shuttgart Town'),
				array(111409,219364,-3545,'Heine Town'),
				array(-80826,149775,-3043,'Gludin Village'),
				array(116819,76994,-2714,'Hunters Village'),
				array(-84433,244484,-3728,'Talking Island Village'),
				array(115113,-178212,-901,'Dwarven Village'),
				array(-44836,-112524,-235,'Orc Village'),
				array(9745,15606,-4574,'Dark Elven Village'),
				array(46934,51467,-2977,'Elven Village'),
				array(-117251,46771,360,'Kamael Village')
			);
	$townLoc = null;
	$teleTo = null;
	for($z=0;$z<count($towns);$z++){
		$dist = 2 * asin(sqrt(pow(sin((deg2rad($towns[$z][0]) - deg2rad($x)) / 2), 2) +
		cos(deg2rad($x)) * cos(deg2rad($towns[$z][0])) * pow(sin((deg2rad($towns[$z][1]) - deg2rad($y)) / 2), 2)));
		$townLoc = $z == 0 ? $dist : $townLoc;
		if($townLoc >= $dist){
			$townLoc = $dist;
			$teleTo = array($towns[$z][0],$towns[$z][1],$towns[$z][2],$towns[$z][3]);
		}
	}
	return $teleTo;
}

function unlock($charid,$login){
	global $db, $conn, $L2jVersaoRussa;
	$result = null;
	if($db){
		$charid_characters = info_table("characters","charid");
		$records = $conn->prepare("SELECT char_name, karma, online, x, y FROM characters WHERE account_name = ? AND ".$charid_characters." = ?");
		$records->execute([$login,$charid]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			if($results["online"] > 0){
				$result .= resposta("O personagem ".$results["char_name"]." está online!\\nDeslogue e tente novamente.");
			}elseif($results["karma"] > 0){
				$result .= resposta("O personagem ".$results["char_name"]." tem karma!\\nNão é possível destravar personagem com karma.");
			}else{
				$destravar = teleToTown($results["x"],$results["y"]);
				if(!$L2jVersaoRussa){
					$destravando1 = $conn->prepare("UPDATE characters SET x='".$destravar[0]."', y='".$destravar[1]."', z='".$destravar[2]."', curHp = maxHP WHERE account_name = ? AND ".$charid_characters." = ?");
				}else{
					$destravando1 = $conn->prepare("UPDATE characters SET x='".$destravar[0]."', y='".$destravar[1]."', z='".$destravar[2]."' WHERE account_name = ? AND ".$charid_characters." = ?");
					$charid_subclass = info_table("character_subclasses","charid");
					$destravando6 = $conn->prepare("UPDATE character_subclasses SET curHp = maxHP WHERE active = '1' AND ".$charid_subclass." = ?");
					$destravando6->execute([$charid]);
				}
				$destravando1->execute([$login,$charid]);
				$destravando2 = $conn->prepare("UPDATE items SET loc='WAREHOUSE', loc_data='0' WHERE owner_id = ? AND loc = 'PAPERDOLL'");
				$destravando2->execute([$charid]);
				$charid_skillssave = info_table("character_skills_save","charid");
				$destravando3 = $conn->prepare("DELETE FROM character_skills_save WHERE ".$charid_skillssave." = ? AND skill_id = '840'");
				$destravando3->execute([$charid]);
				$destravando4 = $conn->prepare("DELETE FROM character_skills_save WHERE ".$charid_skillssave." = ? AND skill_id = '841'");
				$destravando4->execute([$charid]);
				$destravando5 = $conn->prepare("DELETE FROM character_skills_save WHERE ".$charid_skillssave." = ? AND skill_id = '842'");
				$destravando5->execute([$charid]);
				$result .= resposta("O personagem ".$results["char_name"]." foi destravado com sucesso!\\nSeu personagem foi teleportado para ".$destravar[3].", cidade mais próxima.\\nTodos os seus itens equipados foram enviados para a Warehouse.");
			}
		}else{
			$result .= resposta("Personagem não encontrado.");
		}
	}else{
		$records = $conn->prepare("SELECT char_name, (align) AS karma, CASE WHEN login > logout THEN '1' ELSE '0' END AS online, (xloc) AS x, (yloc) AS y FROM user_data WHERE account_name = ? AND char_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$login,$charid]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				if($row->online > 0){
					$result .= resposta("O personagem ".$row->char_name." está online!\\nDeslogue e tente novamente.");
				}elseif($row->karma > 0){
					$result .= resposta("O personagem ".$row->char_name." tem karma!\\nNão é possível destravar personagem com karma.");
				}else{
					kick_char($charid);
					$destravar = teleToTown($row->x,$row->y);
					teleport($charid, $destravar[0], $destravar[1], $destravar[2]);
					$result .= resposta("O personagem ".$row->char_name." foi destravado com sucesso!\\nSeu personagem foi teleportado para ".$destravar[3].", cidade mais próxima.");
				}
			}
		}else{
			$result .= resposta("Personagem não encontrado.");
		}
	}
	return empty($result) ? null : $result;
}

function charLoc($x,$y){
	if($x > 75036 and $x < 91268 and $y > 141868 and $y < 154763){
		$loc = 'Giran Town';
	}elseif($x > 111704 and $x < 119254 and $y > 142606 and $y < 147705){
		$loc = 'Giran Castle';
	}elseif($x > 140294 and $x < 154452 and $y > 14829 and $y < 32579){
		$loc = 'Aden Town';
	}elseif($x > 141528 and $x < 153145 and $y > -28 and $y < 14829){
		$loc = 'Aden Castle';
	}elseif($x > 142547 and $x < 152714 and $y > -61724 and $y < -52009){
		$loc = 'Goddard Town';
	}elseif($x > 142666 and $x < 152714 and $y > -52097 and $y < -43995){
		$loc = 'Goddard Castle';
	}elseif($x > 32202 and $x < 47239 and $y > -53161 and $y < -41825){
		$loc = 'Rune Town';
	}elseif($x > 6822 and $x < 21361 and $y > -55812 and $y < -43506){
		$loc = 'Rune Castle';
	}elseif($x > 14631 and $x < 21917 and $y > 140991 and $y < 148056){
		$loc = 'Dion Town';
	}elseif($x > 18035 and $x < 25879 and $y > 155491 and $y < 164028){
		$loc = 'Dion Castle';
	}elseif($x > 75963 and $x < 86192 and $y > 47465 and $y < 61930){
		$loc = 'Oren Town';
	}elseif($x > 77723 and $x < 85693 and $y > 34672 and $y < 40106){
		$loc = 'Oren Castle';
	}elseif($x > -17167 and $x < -10729 and $y > 120243 and $y < 127434){
		$loc = 'Gludio Town';
	}elseif($x > -20782 and $x < -15353 and $y > 106447 and $y < 114258){
		$loc = 'Gludio Castle';
	}elseif($x > 80531 and $x < 93071 and $y > -148982 and $y < -135883){
		$loc = 'Schuttgart Town';
	}elseif($x > 72068 and $x < 84483 and $y > -155479 and $y < -146970){
		$loc = 'Schuttgart Castle';
	}elseif($x > 101509 and $x < 120955 and $y > 213891 and $y < 229923){
		$loc = 'Heine';
	}elseif($x > 113197 and $x < 118888 and $y > 244173 and $y < 252229){
		$loc = 'Innadril Castle';
	}elseif($x > -85665 and $x < -77001 and $y > 148085 and $y < 156642){
		$loc = 'Gludin Village';
	}elseif($x > 111612 and $x < 123698 and $y > 73431 and $y < 81450){
		$loc = 'Hunters Village';
	}elseif($x > -125454 and $x < -65999 and $y > 211377 and $y < 259892){
		$loc = 'Talking Island Village';
	}elseif($x > 110391 and $x < 126001 and $y > -190059 and $y < -176019){
		$loc = 'Dwarven Village';
	}elseif($x > -53946 and $x < -30142 and $y > -127853 and $y < -104236){
		$loc = 'Orc Village';
	}elseif($x > 607 and $x < 24570 and $y > 6203 and $y < 24532){
		$loc = 'Dark Elf Village';
	}elseif($x > 30366 and $x < 61592 and $y > 42314 and $y < 60601){
		$loc = 'Elven Village';
	}elseif($x > -127744 and $x < -102187 and $y > 30449 and $y < 54659){
		$loc = 'Kamael Village';
	}else{
		$loc = 'Out of town';
	}
	return $loc;
}

function charStatus($charid,$login){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic;
	$result = null;
	$clan_name = "n/a";
	$clan_leader = "n/a";
	$clan_ally = "n/a";
	$hero = "No";
	$oly_fights = 0;
	$oly_points = 0;
	$int = 0;
	$str = 0;
	$con = 0;
	$men = 0;
	$dex = 0;
	$wit = 0;
	if($db){
		$charid_characters = info_table("characters","charid");
		if(!$L2jVersaoRussa){
			$charid_raidpoints = info_table("character_raid_points","charid");
			$charid_hennas = info_table("character_hennas","charid");
			if($L2jVersaoClassic){
				$records = $conn->prepare("SELECT c.*, (raidbossPoints) AS raid_points, (SELECT rec_left FROM character_reco_bonus WHERE charId = c.".$charid_characters.") AS rec_left , (SELECT GROUP_CONCAT(i.stat_INT,';',i.stat_STR,';',i.stat_CON,';',i.stat_MEM,';',i.stat_DEX,';',i.stat_WIT,',') AS hen FROM character_hennas AS h, icp_hennas AS i WHERE i.symbol_id = h.symbol_id AND h.".$charid_hennas." = c.".$charid_characters." AND h.class_index = '0') AS hennas FROM characters AS c WHERE c.account_name = ? AND c.".$charid_characters." = ?");
			}else{
				$charid_raidpoints = info_table("character_raid_points","charid");
				$records = $conn->prepare("SELECT c.*, (SELECT SUM(points) FROM character_raid_points WHERE ".$charid_raidpoints." = c.".$charid_characters.") AS raid_points, (SELECT GROUP_CONCAT(i.stat_INT,';',i.stat_STR,';',i.stat_CON,';',i.stat_MEM,';',i.stat_DEX,';',i.stat_WIT,',') AS hen FROM character_hennas AS h, icp_hennas AS i WHERE i.symbol_id = h.symbol_id AND h.".$charid_hennas." = c.".$charid_characters." AND h.class_index = '0') AS hennas FROM characters AS c WHERE c.account_name = ? AND c.".$charid_characters." = ?");
			}
			$records->execute([$login,$charid]);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if($results){
				if(!empty($results["clanid"])){
					$records2 = $conn->prepare("SELECT cd.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = cd.leader_id) AS leader_name FROM clan_data AS cd WHERE cd.clan_id = '".$results["clanid"]."'");
					$records2->execute();
					$results2 = $records2->fetch(PDO::FETCH_ASSOC);
					if($results2){
						$clan_name = empty($results2["clan_name"]) ? $clan_name : $results2["clan_name"];
						$clan_leader = empty($results2["leader_name"]) ? $clan_leader : $results2["leader_name"];;
						$clan_ally = empty($results2["ally_name"]) ? $clan_ally : $results2["ally_name"];
					}
				}
				if($results["nobless"] == 1){
					$charid_heroes = info_table("heroes","charid");
					$records3 = $conn->prepare("SELECT * FROM heroes WHERE played = '1' AND ".$charid_heroes." = '".$results[$charid_characters]."'");
					$records3->execute();
					if($records3->rowCount() > 0){
						$hero = "Yes";
					}
					$charid_oly = info_table("olympiad_nobles","charid");
					$records4 = $conn->prepare("SELECT * FROM olympiad_nobles WHERE ".$charid_oly." = '".$results[$charid_characters]."'");
					$records4->execute();
					$results4 = $records4->fetch(PDO::FETCH_ASSOC);
					if($results4){
						$oly_fights = $results4["competitions_done"];
						$oly_points = $results4["olympiad_points"];
					}
				}
				if(empty($results["_int"]) && empty($results["str"]) && empty($results["con"]) && empty($results["men"]) && empty($results["dex"]) && empty($results["wit"])){
					$result_hennas = explode(";", hennasAttr($results["base_class"],$results["sex"]));
					$int = $result_hennas[0];
					$str = $result_hennas[1];
					$con = $result_hennas[2];
					$men = $result_hennas[3];
					$dex = $result_hennas[4];
					$wit = $result_hennas[5];
				}else{
					$int = $results["_int"];
					$str = $results["str"];
					$con = $results["con"];
					$men = $results["men"];
					$dex = $results["dex"];
					$wit = $results["wit"];
				}
				if(!empty($results["hennas"])){
					$hennas = explode(",",$results["hennas"]);
					for($x=0;$x<(count($hennas)-1);$x++){
						$henna = explode(";",$hennas[$x]);
						if($henna[0] != 0)
							$int = $henna[0] > 0 ? $int+$henna[0] : $int-abs($henna[0]);
						if($henna[1] != 0)
							$str = $henna[1] > 0 ? $str+$henna[1] : $str-abs($henna[1]);
						if($henna[2] != 0)
							$con = $henna[2] > 0 ? $con+$henna[2] : $con-abs($henna[2]);
						if($henna[3] != 0)
							$men = $henna[3] > 0 ? $men+$henna[3] : $men-abs($henna[3]);
						if($henna[4] != 0)
							$dex = $henna[4] > 0 ? $dex+$henna[4] : $dex-abs($henna[4]);
						if($henna[5] != 0)
							$wit = $henna[5] > 0 ? $wit+$henna[5] : $wit-abs($henna[5]);
					}
				}
				if(empty($results["_int"]) && empty($results["str"]) && empty($results["con"]) && empty($results["men"]) && empty($results["dex"]) && empty($results["wit"])){
					$int = $result_hennas[0] > $int || $result_hennas[0] < $int ? $result_hennas[0] < $int ? $int."(+".($int-$result_hennas[0]).")" : $int."(-".($result_hennas[0]-$int).")" : $int;
					$str = $result_hennas[1] > $str || $result_hennas[1] < $str ? $result_hennas[1] < $str ? $str."(+".($str-$result_hennas[1]).")" : $str."(-".($result_hennas[1]-$str).")" : $str;
					$con = $result_hennas[2] > $con || $result_hennas[2] < $con ? $result_hennas[2] < $con ? $con."(+".($con-$result_hennas[2]).")" : $con."(-".($result_hennas[2]-$con).")" : $con;
					$men = $result_hennas[3] > $men || $result_hennas[3] < $men ? $result_hennas[3] < $men ? $men."(+".($men-$result_hennas[3]).")" : $men."(-".($result_hennas[3]-$men).")" : $men;
					$dex = $result_hennas[4] > $dex || $result_hennas[4] < $dex ? $result_hennas[4] < $dex ? $dex."(+".($dex-$result_hennas[4]).")" : $dex."(-".($result_hennas[4]-$dex).")" : $dex;
					$wit = $result_hennas[5] > $wit || $result_hennas[5] < $wit ? $result_hennas[5] < $wit ? $wit."(+".($wit-$result_hennas[5]).")" : $wit."(-".($result_hennas[5]-$wit).")" : $wit;
				}else{
					$int = $results["_int"] > $int || $results["_int"] < $int ? $results["_int"] < $int ? $int."(+".($int-$results["_int"]).")" : $int."(-".($results["_int"]-$int).")" : $int;
					$str = $results["str"] > $str || $results["str"] < $str ? $results["str"] < $str ? $str."(+".($str-$results["str"]).")" : $str."(-".($results["str"]-$str).")" : $str;
					$con = $results["con"] > $con || $results["con"] < $con ? $results["con"] < $con ? $con."(+".($con-$results["con"]).")" : $con."(-".($results["con"]-$con).")" : $con;
					$men = $results["men"] > $men || $results["men"] < $men ? $results["men"] < $men ? $men."(+".($men-$results["men"]).")" : $men."(-".($results["men"]-$men).")" : $men;
					$dex = $results["dex"] > $dex || $results["dex"] < $dex ? $results["dex"] < $dex ? $dex."(+".($dex-$results["dex"]).")" : $dex."(-".($results["dex"]-$dex).")" : $dex;
					$wit = $results["wit"] > $wit || $results["wit"] < $wit ? $results["wit"] < $wit ? $wit."(+".($wit-$results["wit"]).")" : $wit."(-".($results["wit"]-$wit).")" : $wit;
				}
				$sex = $results["sex"] == 0 ? "Male" : "Female";
				$nobless = $results["nobless"] == 1 ? "Yes" : "No";
				$title = empty($results["title"]) ? "No title" : $results["title"];
				$raid_points = empty($results["raid_points"]) ? 0 : $results["raid_points"];
				$result .= $title.";".$sex.";".remainingTime($results["onlinetime"],true).";".date("Y-m-d H:i:s", ($results["lastAccess"] / 1000)).";".$clan_name.";".$clan_leader.";".$clan_ally.";".classe_name($results["base_class"]).";".str_replace(";",",",showSubClasses($charid,$login)).";".$nobless.";".$hero.";".$oly_fights.";".$oly_points.";".$str.";".$int.";".$dex.";".$wit.";".$con.";".$men.";".$results["pvpkills"].";".$results["pkkills"].";".$results["rec_left"].";".$raid_points.";".charLoc($results["x"],$results["y"]).";".$results["level"].";";
			}
		}else{
			$charid_raidpoints = info_table("raidboss_points","charid");
			$charid_hennas = info_table("character_hennas","charid");
			$charid_oly = info_table("olympiad_nobles","charid");
			$charid_subclass = info_table("character_subclasses","charid");
			$records = $conn->prepare("SELECT c.*, (SELECT SUM(points) FROM raidboss_points WHERE ".$charid_raidpoints." = c.".$charid_characters.") AS raid_points, (SELECT CONCAT(class_id, ';', 'level) FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1') AS base_class, (SELECT GROUP_CONCAT(i.stat_INT,';',i.stat_STR,';',i.stat_CON,';',i.stat_MEM,';',i.stat_DEX,';',i.stat_WIT,',') AS hen FROM character_hennas AS h, icp_hennas AS i WHERE i.symbol_id = h.symbol_id AND h.".$charid_hennas." = c.".$charid_characters." AND h.class_index = (SELECT class_id FROM character_subclasses WHERE ".$charid_subclass." = c.".$charid_characters." AND isBase = '1')) AS hennas, IF((SELECT ".$charid_oly." FROM olympiad_nobles WHERE ".$charid_oly." = c.".$charid_characters.") IS NULL, '0', '1') AS nobless FROM characters AS c WHERE c.account_name = ? AND c.".$charid_characters." = ?");
			$records->execute([$login,$charid]);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if($results){
				if(!empty($results["clanid"])){
					$charid_allydata = info_table("ally_data","charid");
					$records2 = $conn->prepare("SELECT cd.*, (SELECT char_name FROM characters WHERE ".$charid_characters." = cd.leader_id) AS leader_name, (SELECT ally_name FROM ally_data WHERE ".$charid_allydata." = (SELECT ally_id FROM clan_data WHERE clan_id = cd.clan_id)) AS ally_name FROM clan_subpledges AS cd WHERE cd.clan_id = '".$results["clanid"]."' AND cd.type = '0'");
					$records2->execute();
					$results2 = $records2->fetch(PDO::FETCH_ASSOC);
					if($results2){
						$clan_name = empty($results2["name"]) ? $clan_name : $results2["name"];
						$clan_leader = empty($results2["leader_name"]) ? $clan_leader : $results2["leader_name"];
						$clan_ally = empty($results2["ally_name"]) ? $clan_ally : $results2["ally_name"];
					}
				}
				if($results["nobless"] == 1){
					$charid_heroes = info_table("heroes","charid");
					$records3 = $conn->prepare("SELECT * FROM heroes WHERE played = '1' AND ".$charid_heroes." = '".$results[$charid_characters]."'");
					$records3->execute();
					if($records3->rowCount() > 0){
						$hero = "Yes";
					}
					$records4 = $conn->prepare("SELECT * FROM olympiad_nobles WHERE ".$charid_oly." = '".$results[$charid_characters]."'");
					$records4->execute();
					$results4 = $records4->fetch(PDO::FETCH_ASSOC);
					if($results4){
						$oly_fights = $results4["competitions_done"];
						$oly_points = $results4["olympiad_points"];
					}
				}
				$base_level = explode(";", $results["base_class"]);
				$result_hennas = explode(";", hennasAttr($base_level[0],$results["sex"]));
				$int = $result_hennas[0];
				$str = $result_hennas[1];
				$con = $result_hennas[2];
				$men = $result_hennas[3];
				$dex = $result_hennas[4];
				$wit = $result_hennas[5];
				if(!empty($results["hennas"])){
					$hennas = explode(",",$results["hennas"]);
					for($x=0;$x<(count($hennas)-1);$x++){
						$henna = explode(";",$hennas[$x]);
						if($henna[0] != 0)
							$int = $henna[0] > 0 ? $int+$henna[0] : $int-abs($henna[0]);
						if($henna[1] != 0)
							$str = $henna[1] > 0 ? $str+$henna[1] : $str-abs($henna[1]);
						if($henna[2] != 0)
							$con = $henna[2] > 0 ? $con+$henna[2] : $con-abs($henna[2]);
						if($henna[3] != 0)
							$men = $henna[3] > 0 ? $men+$henna[3] : $men-abs($henna[3]);
						if($henna[4] != 0)
							$dex = $henna[4] > 0 ? $dex+$henna[4] : $dex-abs($henna[4]);
						if($henna[5] != 0)
							$wit = $henna[5] > 0 ? $wit+$henna[5] : $wit-abs($henna[5]);
					}
				}
				$int = $result_hennas[0] > $int || $result_hennas[0] < $int ? $result_hennas[0] < $int ? $int."(+".($int-$result_hennas[0]).")" : $int."(-".($result_hennas[0]-$int).")" : $int;
				$str = $result_hennas[1] > $str || $result_hennas[1] < $str ? $result_hennas[1] < $str ? $str."(+".($str-$result_hennas[1]).")" : $str."(-".($result_hennas[1]-$str).")" : $str;
				$con = $result_hennas[2] > $con || $result_hennas[2] < $con ? $result_hennas[2] < $con ? $con."(+".($con-$result_hennas[2]).")" : $con."(-".($result_hennas[2]-$con).")" : $con;
				$men = $result_hennas[3] > $men || $result_hennas[3] < $men ? $result_hennas[3] < $men ? $men."(+".($men-$result_hennas[3]).")" : $men."(-".($result_hennas[3]-$men).")" : $men;
				$dex = $result_hennas[4] > $dex || $result_hennas[4] < $dex ? $result_hennas[4] < $dex ? $dex."(+".($dex-$result_hennas[4]).")" : $dex."(-".($result_hennas[4]-$dex).")" : $dex;
				$wit = $result_hennas[5] > $wit || $result_hennas[5] < $wit ? $result_hennas[5] < $wit ? $wit."(+".($wit-$result_hennas[5]).")" : $wit."(-".($result_hennas[5]-$wit).")" : $wit;
				$sex = $results["sex"] == 0 ? "Male" : "Female";
				$nobless = $results["nobless"] == 1 ? "Yes" : "No";
				$title = empty($results["title"]) ? "No title" : $results["title"];
				$raid_points = empty($results["raid_points"]) ? 0 : $results["raid_points"];
				$result .= $title.";".$sex.";".remainingTime($results["onlinetime"],true).";".date("Y-m-d H:i:s", $results["lastAccess"]).";".$clan_name.";".$clan_leader.";".$clan_ally.";".classe_name($base_level[0]).";".str_replace(";",",",showSubClasses($charid,$login)).";".$nobless.";".$hero.";".$oly_fights.";".$oly_points.";".$str.";".$int.";".$dex.";".$wit.";".$con.";".$men.";".$results["pvpkills"].";".$results["pkkills"].";".$results["rec_left"].";".$raid_points.";".charLoc($results["x"],$results["y"]).";".$base_level[1].";";
			}
		}
	}else{
		$nobless = "No";
		$records = $conn->prepare("SELECT c.*, CASE WHEN c.subjob1_class != '-1' THEN STUFF((SELECT CONCAT(';',i.stat_INT,';',i.stat_STR,';',i.stat_CON,';',i.stat_MEM,';',i.stat_DEX,';',i.stat_WIT,',') FROM user_subjob AS h, icp_hennas AS i WHERE i.symbol_id IN(h.henna_1,h.henna_2,h.henna_3) AND h.char_id = c.char_id AND h.subjob_id = '0' FOR XML PATH('')),1,1,'') ELSE STUFF((SELECT CONCAT(';',i.stat_INT,';',i.stat_STR,';',i.stat_CON,';',i.stat_MEM,';',i.stat_DEX,';',i.stat_WIT,',') FROM user_henna AS h, icp_hennas AS i WHERE i.symbol_id IN(h.henna_1,h.henna_2,h.henna_3) AND h.char_id = c.char_id FOR XML PATH('')),1,1,'') END AS hennas, (SELECT used_sulffrage FROM user_sociality WHERE char_id = c.char_id) AS rec_left, CASE WHEN c.subjob1_class != '-1' THEN (SELECT level FROM user_subjob WHERE char_id = c.char_id AND subjob_id = '0') ELSE c.Lev END AS level FROM user_data AS c WHERE c.account_name = ? AND c.char_id = ?");
		$records->execute([$login,$charid]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			if(!empty($results["pledge_id"])){
				$records2 = $conn->prepare("SELECT cd.*, (SELECT char_name FROM user_data WHERE char_id = cd.ruler_id) AS leader_name, (SELECT name FROM Alliance WHERE id = cd.pledge_id) AS ally_name FROM Pledge AS cd WHERE cd.pledge_id = ?");
				$records2->execute([$results["pledge_id"]]);
				$results2 = $records2->fetch(PDO::FETCH_ASSOC);
				if($results2){
					$clan_name = empty($results2["name"]) ? $clan_name : $results2["name"];
					$clan_leader = empty($results2["leader_name"]) ? $clan_leader : $results2["leader_name"];;
					$clan_ally = empty($results2["ally_name"]) ? $clan_ally : $results2["ally_name"];
				}
			}
			$records3 = $conn->prepare("SELECT * FROM user_nobless WHERE char_id = ?");
			$records3->execute([$charid]);
			$results3 = $records3->fetch(PDO::FETCH_ASSOC);
			if($results3){
				$nobless = "Yes";
				$hero = $results3["hero_type"] > 0 ? "Yes" : $hero;
				$oly_fights = $results3["match_count"];
				$oly_points = $results3["olympiad_point"];
			}
			$result_hennas = explode(";", hennasAttr($results["subjob0_class"],$results["gender"]));
			$int = $result_hennas[0];
			$str = $result_hennas[1];
			$con = $result_hennas[2];
			$men = $result_hennas[3];
			$dex = $result_hennas[4];
			$wit = $result_hennas[5];
			if(!empty($results["hennas"])){
				$hennas = explode(",",$results["hennas"]);
				for($x=0;$x<(count($hennas)-1);$x++){
					$henna = explode(";",$hennas[$x]);
					if($henna[0] != 0)
						$int = $henna[0] > 0 ? $int+$henna[0] : $int-abs($henna[0]);
					if($henna[1] != 0)
						$str = $henna[1] > 0 ? $str+$henna[1] : $str-abs($henna[1]);
					if($henna[2] != 0)
						$con = $henna[2] > 0 ? $con+$henna[2] : $con-abs($henna[2]);
					if($henna[3] != 0)
						$men = $henna[3] > 0 ? $men+$henna[3] : $men-abs($henna[3]);
					if($henna[4] != 0)
						$dex = $henna[4] > 0 ? $dex+$henna[4] : $dex-abs($henna[4]);
					if($henna[5] != 0)
						$wit = $henna[5] > 0 ? $wit+$henna[5] : $wit-abs($henna[5]);
				}
			}
			$int = $result_hennas[0] > $int || $result_hennas[0] < $int ? $result_hennas[0] < $int ? $int."(+".($int-$result_hennas[0]).")" : $int."(-".($result_hennas[0]-$int).")" : $int;
			$str = $result_hennas[1] > $str || $result_hennas[1] < $str ? $result_hennas[1] < $str ? $str."(+".($str-$result_hennas[1]).")" : $str."(-".($result_hennas[1]-$str).")" : $str;
			$con = $result_hennas[2] > $con || $result_hennas[2] < $con ? $result_hennas[2] < $con ? $con."(+".($con-$result_hennas[2]).")" : $con."(-".($result_hennas[2]-$con).")" : $con;
			$men = $result_hennas[3] > $men || $result_hennas[3] < $men ? $result_hennas[3] < $men ? $men."(+".($men-$result_hennas[3]).")" : $men."(-".($result_hennas[3]-$men).")" : $men;
			$dex = $result_hennas[4] > $dex || $result_hennas[4] < $dex ? $result_hennas[4] < $dex ? $dex."(+".($dex-$result_hennas[4]).")" : $dex."(-".($result_hennas[4]-$dex).")" : $dex;
			$wit = $result_hennas[5] > $wit || $result_hennas[5] < $wit ? $result_hennas[5] < $wit ? $wit."(+".($wit-$result_hennas[5]).")" : $wit."(-".($result_hennas[5]-$wit).")" : $wit;
			$sex = $results["gender"] == 0 ? "Male" : "Female";
			$title = empty($results["nickname"]) ? "No title" : $results["nickname"];
			$raid_points = empty($results["raid_points"]) ? 0 : $results["raid_points"];
			$rec = empty($results["rec_left"]) ? 9 : 9-$results["rec_left"];
			$result .= $title.";".$sex.";".remainingTime($results["use_time"],true).";".date("Y-m-d H:i:s", strtotime($results["login"])).";".$clan_name.";".$clan_leader.";".$clan_ally.";".classe_name($results["subjob0_class"]).";".str_replace(";",",",showSubClasses($charid,$login)).";".$nobless.";".$hero.";".$oly_fights.";".$oly_points.";".$str.";".$int.";".$dex.";".$wit.";".$con.";".$men.";".$results["Duel"].";".$results["PK"].";".$rec.";".$raid_points.";".charLoc($results["xloc"],$results["yloc"]).";".$results["level"].";";
		}
	}
	return empty($result) ? null : $result;
}

function charInfo($charid,$login){
	global $db, $conn, $L2jVersaoRussa;
	$result = null;
	if($db){
		$charid_characters = info_table("characters","charid");
		if(!$L2jVersaoRussa){
			$records = $conn->prepare("SELECT * FROM characters WHERE account_name = ? AND ".$charid_characters." = ?");
			$records->execute([$login,$charid]);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if($results){
				$result .= $results["level"].";".$results["curHp"].";".$results["maxHp"].";".$results["curCp"].";".$results["maxCp"].";".$results["curMp"].";".$results["maxMp"].";".$results["sp"].";".$results["exp"].";".$results["karma"].";".classe_name($results["base_class"]).";".$results["online"].";".$results[$charid_characters].";";
			}
		}else{
			$charid_subclass = info_table("character_subclasses","charid");
			$records = $conn->prepare("SELECT c.".$charid_characters.", c.karma, c.online, cs.* FROM characters AS c, character_subclasses AS cs WHERE c.account_name = ? AND c.".$charid_characters." = ? AND c.".$charid_characters." = cs.".$charid_subclass." AND cs.isBase = '1'");
			$records->execute([$login,$charid]);
			$results = $records->fetch(PDO::FETCH_ASSOC);
			if($results){
				$result .= $results["level"].";".$results["curHp"].";".$results["maxHp"].";".$results["curCp"].";".$results["maxCp"].";".$results["curMp"].";".$results["maxMp"].";".$results["sp"].";".$results["exp"].";".$results["karma"].";".classe_name($results["class_id"]).";".$results["online"].";".$results[$charid_characters].";";
			}
		}
	}else{
		$records = $conn->prepare("SELECT c.*, CASE WHEN c.subjob1_class != '-1' THEN (SELECT CONCAT(hp, ';', mp, ';', sp, ';', exp, ';', level) FROM user_subjob WHERE subjob_id = '0' AND char_id = c.char_id) ELSE CONCAT(c.HP, ';', c.MP, ';', c.SP, ';', c.Exp, ';', c.Lev) END AS info FROM user_data AS c WHERE c.account_name = ? AND c.char_id = ?");
		$records->execute([$login,$charid]);
		$results = $records->fetch(PDO::FETCH_ASSOC);
		if($results){
			$info = explode(";", $results["info"]);
			$result .= $info[4].";".$info[0].";".$results["max_hp"].";".$results["cp"].";".$results["max_cp"].";".$info[1].";".$results["max_mp"].";".$info[2].";".$info[3].";".$results["align"].";".classe_name($results["subjob0_class"]).";".($results["login"] < $results["logout"] ? 0 : 1).";".$results["char_id"].";";
		}
	}
	return empty($result) ? null : $result;
}

function expPercent($xp){
	if(empty($xp))
		return number_format(0, 2, '.', '');
	$exp = array(68,363,1168,2884,6038,11287,19423,31378,48229,71201,101676,141192,191452,254327,331864,426284,539995,675590,835854,1023775,1242536,1495531,1786365,2118860,2497059,2925229,3407873,3949727,4555766,5231213,5981539,6812472,7729999,8740372,9850111,11066012,12395149,13844879,15422851,17137002,18995573,21007103,23180442,25524751,28049509,30764519,33679907,36806133,40153995,45524865,51262204,57383682,63907585,70852742,80700339,91162131,102265326,114038008,126509030,146307211,167243291,189363788,212716741,237351413,271973532,308441375,346825235,387197529,429632402,474205751,532692055,606319094,696376867,804219972,931275828,1151275834,1511275834,2099275834,4200000000,6300000000,8820000000,11844000000,15472800000,19827360000,19827360000,25314000000);
	$exp_bar = 0;
	for($v=0;$v<(count($exp)-1);$v++){
		if($xp <= 100 && $xp > 0)
			$exp_bar = ($xp*100)/$exp[$v];
		if($xp <= $exp[$v] && empty($exp_bar))
			$exp_bar = (($xp-$exp[($v-1)])*100)/($exp[$v]-$exp[($v-1)]);
	}
	$exp_bar = $exp_bar < 0 ? 0 : $exp_bar > 100 ? 100 : $exp_bar;
	return number_format($exp_bar, 2, '.', '');
}

function HpCpMpPercent($num,$total){
	$return = (($num*94)/$total) < 0 ? 0 : (($num*94)/$total) > 100 ? 100 : (($num*94)/$total);
	return intval($return);
}

function admVideo(){
	global $conn;
	$videos = null;
	$records = $conn->prepare("SELECT * FROM icp_gallery_videos ORDER BY status ASC, id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute();
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$videos .= $row->id."[]".$row->legend."[]".$row->author."[]".$row->date."[]".$row->link."[]".$row->status."|";
		}
	}
	return empty($videos) ? null : $videos;
}

function editVideo($id){
	global $conn;
	$videos = null;
	$records = $conn->prepare("UPDATE icp_gallery_videos SET status = CASE WHEN status = '0' THEN '1' ELSE '0' END WHERE id = ?");
	$records->execute([$id]);
	if($records->rowCount() == 1){
		$videos .= "true";
	}
	return empty($videos) ? null : $videos;
}

function deleteVideo($id){
	global $conn;
	$videos = null;
	$records = $conn->prepare("DELETE FROM icp_gallery_videos WHERE id = ?");
	$records->execute([$id]);
	if($records->rowCount() == 1){
		$videos .= "true";
	}
	return empty($videos) ? null : $videos;
}

function showVideoList($status, $sort, $limit, $index = true){
	global $db, $conn;
	$videos = null;
	if($db){
		if($limit > 0){
			$records = $conn->prepare("SELECT * FROM icp_gallery_videos WHERE status = '".$status."' ORDER BY ".$sort." LIMIT ".$limit);
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_videos WHERE status = '".$status."' ORDER BY ".$sort);
		}
	}else{
		if($limit > 0){
			$records = $conn->prepare("SELECT TOP ".$limit." * FROM icp_gallery_videos WHERE status = '".$status."' ORDER BY ".$sort, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_videos WHERE status = '".$status."' ORDER BY ".$sort, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
	}
	$records->execute();
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$videos .= $row->id.";;".$row->legend.";;".$row->author.";;".$row->date.";;".$row->link.";;".$row->photo.";;".$row->url.";;".$row->status.";;".$row->account."|";
		}
	}else{
		if($index){
			for($x=0;$x<$limit;$x++){
				$videos .= "-;;-;;-;;".date("d/m/Y").";;<iframe width='560' height='315' src='https://www.youtube.com/embed/qDeMdjTmKck' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>;;http://i1.ytimg.com/vi/qDeMdjTmKck/default.jpg;;https://www.youtube.com/watch?v=qDeMdjTmKck;;1;;-|";
			}
		}
	}
	return empty($videos) ? null : $videos;
}

function showMyVideoList($status, $sort, $limit, $login){
	global $db, $conn;
	$videos = null;
	if($db){
		if($limit > 0){
			$records = $conn->prepare("SELECT * FROM icp_gallery_videos WHERE status = '".$status."' AND account = ? ORDER BY ".$sort." LIMIT ".$limit);
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_videos WHERE status = '".$status."' AND account = ?");
		}
	}else{
		if($limit > 0){
			$records = $conn->prepare("SELECT TOP ".$limit." * FROM icp_gallery_videos WHERE status = '".$status."' AND account = ? ORDER BY ".$sort, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_videos WHERE status = '".$status."' AND account = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
	}
	$records->execute([$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$videos .= $row->id.";;".$row->legend.";;".$row->author.";;".$row->date.";;".$row->link.";;".$row->photo.";;".$row->url.";;".$row->status.";;".$row->account."|";
		}
	}
	return empty($videos) ? null : $videos;
}

function admScreenshot(){
	global $conn;
	$images = null;
	$records = $conn->prepare("SELECT * FROM icp_gallery_screenshots ORDER BY status ASC, id DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute();
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$images .= $row->id."[]".$row->legend."[]".$row->author."[]".$row->date."[]".$row->screenshot."[]".$row->status."|";
		}
	}
	return empty($images) ? null : $images;
}

function editScreenshot($id){
	global $conn;
	$images = null;
	$records = $conn->prepare("UPDATE icp_gallery_screenshots SET status = CASE WHEN status = '0' THEN '1' ELSE '0' END WHERE id = ?");
	$records->execute([$id]);
	if($records->rowCount() == 1){
		$images .= "true";
	}
	return empty($images) ? null : $images;
}

function deleteScreenshot($id){
	global $conn;
	$images = null;
	$records = $conn->prepare("SELECT screenshot FROM icp_gallery_screenshots WHERE id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	$records->execute([$id]);
	if($records->rowCount() == 1){
		$records2 = $conn->prepare("DELETE FROM icp_gallery_screenshots WHERE id = ?");
		$records2->execute([$id]);
		if($records2->rowCount() == 1){
			while ($row = $records->fetchObject()) {
				unlink("images/screenshots/".$row->screenshot);
			}
		}
		$images .= "true";
	}
	return empty($images) ? null : $images;
}

function showImageList($status, $sort, $limit, $index = true){
	global $db, $conn;
	$images = null;
	if($db){
		if($limit > 0){
			$records = $conn->prepare("SELECT * FROM icp_gallery_screenshots WHERE status = '".$status."' ORDER BY ".$sort." LIMIT ".$limit);
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_screenshots WHERE status = '".$status."' ORDER BY ".$sort);
		}
	}else{
		if($limit > 0){
			$records = $conn->prepare("SELECT TOP ".$limit." * FROM icp_gallery_screenshots WHERE status = '".$status."' ORDER BY ".$sort, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_screenshots WHERE status = '".$status."' ORDER BY ".$sort, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
	}
	$records->execute();
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$images .= $row->id.";".$row->legend.";".$row->author.";".$row->date.";".$row->screenshot.";".$row->status.";".$row->account."|";
		}
	}else{
		if($index){
			for($x=0;$x<$limit;$x++){
				$images .= "-;-;-;".date("d/m/Y").";noimage.jpg;1;-|";
			 }
		}
	}
	return empty($images) ? null : $images;
}

function showMyImageList($status, $sort, $limit, $login){
	global $db, $conn;
	$images = null;
	if($db){
		if($limit > 0){
			$records = $conn->prepare("SELECT * FROM icp_gallery_screenshots WHERE status = '".$status."' AND account = ? ORDER BY ".$sort." LIMIT ".$limit);
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_screenshots WHERE status = '".$status."' AND account = ?");
		}
	}else{
		if($limit > 0){
			$records = $conn->prepare("SELECT TOP ".$limit." * FROM icp_gallery_screenshots WHERE status = '".$status."' AND account = ? ORDER BY ".$sort, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}else{
			$records = $conn->prepare("SELECT * FROM icp_gallery_screenshots WHERE status = '".$status."' AND account = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
	}
	$records->execute([$login]);
	if($records->rowCount() > 0){
		while ($row = $records->fetchObject()) {
			$images .= $row->id.";".$row->legend.";".$row->author.";".$row->date.";".$row->screenshot.";".$row->status.";".$row->account."|";
		}
	}
	return empty($images) ? null : $images;
}

function sendItem($itemid,$count,$enchant,$loc,$ownerid,$stackable=true,$augAtt=null,$store=true){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic;
	if($db){
		if($stackable){
			$records = $conn->prepare("SELECT * FROM items WHERE item_id = ? AND owner_id = ? AND loc = ?");
			$records->execute([$itemid,$ownerid,$loc]);
			if($records->rowCount() > 0){
				$updating = $conn->prepare("UPDATE items SET count = (count + ?), enchant_level = ? WHERE item_id = ? AND owner_id = ? AND loc = ?");
				$updating->execute([$count,$enchant,$itemid,$ownerid,$loc]);
			}else{
				$charid_items = info_table("items","charid");
				$id_max = $conn->prepare("SELECT MAX(".$charid_items.") AS max FROM items");
				$id_max->execute();
				$results = $id_max->fetch(PDO::FETCH_ASSOC);
				$new_id = 1000 + $results["max"];
				$column = null;
				$colNum = 0;
				$colVal = null;
				$stmt = $conn->prepare('SHOW COLUMNS FROM items');
				$defaultZero = array("price_sell", "price_buy", "custom_type1", "custom_type2", "custom_flags", "life_time", "augmentation_id", "attribute_fire", "attribute_water", "attribute_wind", "attribute_earth", "attribute_holy", "attribute_unholy", "agathion_energy", "creator_id", "fish_owner_id", "creation_time", "visual_item_id");
				$defaultNull = array("time_of_use", "data");
				$defaultEmpty = array("attributes", "process");
				$defaultNegative = array("mana_left", "time");
				if($stmt->execute()){
					while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
						if($colNum > 6){
							if(in_array($row["Field"], $defaultZero)){
								$colVal .= "'0'";
							}elseif(in_array($row["Field"], $defaultNull)){
								$colVal .= "NULL";
							}elseif(in_array($row["Field"], $defaultEmpty)){
								$colVal .= "''";
							}elseif(in_array($row["Field"], $defaultNegative)){
								$colVal .= "'-1'";
							}
							$column .= $row["Field"];
							if($colNum < ($stmt->rowCount()-1)){
								$column .= ", ";
								$colVal .= ", ";
							}
						}
						$colNum++;
					}
				}
				$inserting = $conn->prepare("INSERT INTO items (owner_id, ".$charid_items.", item_id, count, enchant_level, loc, loc_data, ".$column.") VALUES (?,'".$new_id."',?,?,?,?,'0', ".$colVal.")");
				$inserting->execute([$ownerid,$itemid,$count,$enchant,$loc]);
			}
			return true;
		}else{
			$charid_items = info_table("items","charid");
			$id_max = $conn->prepare("SELECT MAX(".$charid_items.") AS max FROM items");
			$id_max->execute();
			$results = $id_max->fetch(PDO::FETCH_ASSOC);
			$new_id = 1000 + $results["max"];
			$att = null;
			if(!empty($augAtt)){
				$att = explode(",", $augAtt);
				if(!$L2jVersaoRussa){
					if($store){
						if($L2jVersaoClassic){
							$charid_itematt = info_table("item_variations","charid");
							$records = $conn->prepare("UPDATE item_variations SET ".$charid_itematt." = '".$new_id."' WHERE ".$charid_itematt." = ?");
							$records->execute([$att[6]]);
							$charid_elematt = info_table("item_elementals","charid");
							$records2 = $conn->prepare("UPDATE item_elementals SET ".$charid_elematt." = '".$new_id."' WHERE ".$charid_elematt." = ?");
							$records2->execute([$att[6]]);
						}else{
							$charid_itematt = info_table("item_attributes","charid");
							$records = $conn->prepare("UPDATE item_attributes SET ".$charid_itematt." = '".$new_id."' WHERE ".$charid_itematt." = ?");
							$records->execute([$att[6]]);
							if($records->rowCount() == 1){
								$charid_elematt = info_table("item_elementals","charid");
								$records3 = $conn->prepare("UPDATE item_elementals SET ".$charid_elematt." = '".$new_id."' WHERE ".$charid_elematt." = ?");
								$records3->execute([$att[6]]);
							}else{
								$charid_augment = info_table("augmentations","charid");
								$records2 = $conn->prepare("UPDATE augmentations SET ".$charid_augment." = '".$new_id."' WHERE ".$charid_augment." = ?");
								$records2->execute([$att[6]]);
							}
						}
					}else{
						$charid_elematt = info_table("item_elementals","charid");
						for($x=0;$x<6;$x++){
							if(!empty($att[$x])){
								$records2 = $conn->prepare("INSERT INTO item_elementals (".$charid_elematt.", elemType, elemValue) VALUES ('".$new_id."', '".$x."', ?)");
								$records2->execute([$att[$x]]);
							}
						}
						$charid_itematt = info_table("item_attributes","charid");
						for($y=0;$y<6;$y++){
							if(!empty($att[$y])){
								$records3 = $conn->prepare("INSERT INTO item_attributes (".$charid_itematt.", augAttributes, augSkillId, augSkillLevel, elemType, elemValue) VALUES ('".$new_id."', '-1', '-1', '-1', '".$y."', ?)");
								$records3->execute([$att[$y]]);
								if($records3->rowCount() == 0){
									$records4 = $conn->prepare("INSERT INTO item_attributes (".$charid_itematt.", elemType, elemValue) VALUES ('".$new_id."', '".$y."', ?)");
									$records4->execute([$att[$y]]);
								}
							}
						}
					}
				}
			}
			$column = null;
			$colNum = 0;
			$colVal = null;
			$stmt = $conn->prepare('SHOW COLUMNS FROM items');
			$defaultZero = array("price_sell", "price_buy", "custom_type1", "custom_type2", "custom_flags", "life_time", "augmentation_id", "attribute_fire", "attribute_water", "attribute_wind", "attribute_earth", "attribute_holy", "attribute_unholy", "agathion_energy", "creator_id", "fish_owner_id", "creation_time", "visual_item_id");
			$defaultNull = array("time_of_use", "data");
			$defaultEmpty = array("attributes", "process");
			$defaultNegative = array("mana_left", "time");
			if($stmt->execute()){
				while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
					if($colNum > 6){
						if(in_array($row["Field"], $defaultZero)){
							if(!empty($augAtt) && $L2jVersaoRussa){
								if($row["Field"] == "attribute_fire"){
									$colVal .= !empty($att[0]) ? "'".$att[0]."'" : "'0'";
								}elseif($row["Field"] == "attribute_water"){
									$colVal .= !empty($att[1]) ? "'".$att[1]."'" : "'0'";
								}elseif($row["Field"] == "attribute_wind"){
									$colVal .= !empty($att[2]) ? "'".$att[2]."'" : "'0'";
								}elseif($row["Field"] == "attribute_earth"){
									$colVal .= !empty($att[3]) ? "'".$att[3]."'" : "'0'";
								}elseif($row["Field"] == "attribute_holy"){
									$colVal .= !empty($att[4]) ? "'".$att[4]."'" : "'0'";
								}elseif($row["Field"] == "attribute_unholy"){
									$colVal .= !empty($att[5]) ? "'".$att[5]."'" : "'0'";
								}elseif($row["Field"] == "augmentation_id"){
									$colVal .= $att[6] > 0 ? "'".$att[6]."'" : "'0'";
								}else{
									$colVal .= "'0'";
								}
							}else{
								$colVal .= "'0'";
							}
						}elseif(in_array($row["Field"], $defaultNull)){
							$colVal .= "NULL";
						}elseif(in_array($row["Field"], $defaultEmpty)){
							$colVal .= "''";
						}elseif(in_array($row["Field"], $defaultNegative)){
							$colVal .= "'-1'";
						}
						$column .= $row["Field"];
						if($colNum < ($stmt->rowCount()-1)){
							$column .= ", ";
							$colVal .= ", ";
						}
					}
					$colNum++;
				}
			}
			$query_insert = "INSERT INTO items (owner_id, ".$charid_items.", item_id, count, enchant_level, loc, loc_data, ".$column.") VALUES (?, '".$new_id."', ?, ?, ?, ?, '0', ".$colVal.")";
			$inserting = $conn->prepare($query_insert);
			$inserting->execute([$ownerid,$itemid,$count,$enchant,$loc]);
			return true;
		}
	}else{
		global $db_ip, $cached_port;
		kick_char($ownerid);
		$loc = $loc == 'INVENTORY' ? 0 : 1;
		$buf=pack("cVVVVVVVVV",55,$ownerid,$loc,$itemid,$count,$enchant,0,0,0,0).tounicode("admin");
		$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
		fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
		fclose($cachedsocket);
		return true;
	}
	return false;
}

function sendVideo($legend, $author, $link, $login){
	global $conn;
	$result = null;
	if(substr(trim($link), 0, 31) == "http://www.youtube.com/watch?v=" || substr(trim($link), 0, 32) == "https://www.youtube.com/watch?v="){
		$id = substr(trim($link), 0, 31) == "http://www.youtube.com/watch?v=" ? substr(trim($link), 31, 11) : substr(trim($link), 32, 11);
		$video = '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$id.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		$photo = "http://img.youtube.com/vi/".$id."/default.jpg";
		$saving = $conn->prepare("INSERT INTO icp_gallery_videos (legend, author, date, link, photo, url, account) VALUES (?,?,?,?,?,?,?)");
		$saving->execute([$legend,$author,date("Y-m-d H:i:s"),$video,$photo,$link,$login]);
		?>
		<script>
			$('#legend').val('');
			$('#link').val('');
		</script>
		<?php
		$result .= 'Video uploaded successfully!\\nWait for approval from Staff.';
	}else{
		$result .= 'ERROR!\nThe video was not uploaded.\\nCause: Invalid link!';
	}
	return empty($result) ? null : resposta($result);
}

function sendScreenshot($legend, $author, $photo, $login){
	global $conn;
	if(!empty($photo['error'])){
		switch($photo['error']){
			case 1:
				$error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
				break;
			case 2:
				$error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
				break;
			case 3:
				$error = 'The uploaded file was only partially uploaded';
				break;
			case 4:
				$error = 'Select a file!';
				break;
			case 6:
				$error = 'Missing a temporary folder';
				break;
			case 7:
				$error = 'Failed to write file to disk';
				break;
			case 8:
				$error = 'File upload stopped by extension';
				break;
			default:
				$error = 'No error code avaiable';
				break;
		}
	}else{
		$largura = 1600;
		$altura = 1024;
		$tamanho = 1000000; // 1000000 = 1MB
		$dimensoes = getimagesize($photo["tmp_name"]);
		$error .= $dimensoes[0] > $largura ? "A largura da imagem não deve ultrapassar ".$largura." pixels." : null;
		$error .= $dimensoes[1] > $altura ? "Altura da imagem não deve ultrapassar ".$altura." pixels." : null;
		$error .= !in_array($dimensoes[2], array(IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP)) ? "Isso não é uma imagem." : null;
		$error .= $photo["size"] > $tamanho ? "A imagem deve ter no máximo ".$tamanho." bytes." : null;
		if(empty($error)){
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $photo["name"], $ext);
			$imgName = md5(uniqid(time())) . "." . $ext[1];
			$caminho_imagem = "images/screenshots/" . $imgName;
			move_uploaded_file($photo["tmp_name"], $caminho_imagem);
			$records = $conn->prepare("INSERT INTO icp_gallery_screenshots (legend, author, date, screenshot, account) VALUES (?,?,?,?,?)");
			$records->execute([$legend,$author,date("Y-m-d H:i:s"),$imgName,$login]);
			$msg = "ScreenShot sent successfully!!!\\nWait for approval from Staff.";
		}else{
			$msg = $error;
		}
	}
	echo "{";
	echo	"error: '" . $error . "',\n";
	echo	"msg: '" . $msg . "'\n";
	echo "}";
}

function myCharList($login,$store=false){
	global $db, $conn;
	$result = null;
	$charid_characters = $db ? info_table("characters","charid") : "char_id";
	if($db){
		$records = $conn->prepare("SELECT char_name, ".$charid_characters.", online FROM characters WHERE account_name = '".$login."' AND ".$charid_characters." >= '0'");
	}else{
		$records = $conn->prepare("SELECT char_name, char_id, CASE WHEN login > logout THEN '1' ELSE '0' END AS online FROM user_data WHERE account_name = '".$login."' AND char_id >= '0'", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
	}
	$records->execute();
	if($records->rowCount() > 0){
		while($row = $records->fetch(\PDO::FETCH_ASSOC)){
			if(!$db && $store){
				$checkStore = $conn->prepare("SELECT * FROM icp_shop_chars WHERE owner_id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$checkStore->execute([$row["char_id"]]);
				if($checkStore->rowCount() == 0)
					$result .= $row["char_name"].";".$row["char_id"].";".$row["online"]."|";
			}else
				$result .= $row["char_name"].";".$row[$charid_characters].";".$row["online"]."|";
		}
	}
	return empty($result) ? null : $result;
}

function getReward($online,$pvp,$pk,$charid,$login){
	global $db, $conn, $allowRewardSystem, $rewardOnlinetime, $rewardOnlinetimeDays, $rewardOnlinetimeItems, $rewardPvP, $rewardPvPCount, $rewardPvPItems, $rewardPk, $rewardPkCount, $rewardPkItems, $rewardLoc;
	$result = null;
	if(!$allowRewardSystem)
		return resposta("Rewards system is disabled.");
	if(!$rewardOnlinetime && !$rewardPvP && !$rewardPk){
		$result .= "Rewards system is disabled.";
	}else{
		$rewards = explode(";", reward($login));
		$online = isset($online) ? (floor($rewards[0] / (86400 * $rewardOnlinetimeDays)) * 86400) : 0;
		$pvp = isset($pvp) ? (floor($rewards[1] / $rewardPvPCount) * $rewardPvPCount) : 0;
		$pk = isset($pk) ? (floor($rewards[2] / $rewardPkCount) * $rewardPkCount) : 0;
		if(empty($online) && empty($pvp) && empty($pk)){
			$result .= "You have no rewards to receive.";
		}else{
			if($db){
				$charid_characters = info_table("characters","charid");
				$online_check = $conn->prepare("SELECT * FROM characters WHERE ".$charid_characters." = ? AND account_name = ? AND online = '0'");
			}else{
				$online_check = $conn->prepare("SELECT * FROM user_data WHERE char_id = ? AND account_name = ? AND login < logout", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			}
			$online_check->execute([$charid,$login]);
			if($online_check->rowCount() == 1){
				$records = $conn->prepare("SELECT * FROM icp_rewards WHERE account = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$records->execute([$login]);
				if($records->rowCount() > 0){
					$updating_reward = $conn->prepare("UPDATE icp_rewards SET onlinetime = (onlinetime + ?), pvpkills = (pvpkills + ?), pkkills = (pkkills + ?) WHERE account = ?");
					$updating_reward->execute([$online,$pvp,$pk,$login]);
				}else{
					$inserting_reward = $conn->prepare("INSERT INTO icp_rewards (onlinetime, pvpkills, pkkills, account) VALUES (?,?,?,?)");
					$inserting_reward->execute([$online,$pvp,$pk,$login]);
				}
				if($rewardOnlinetime && $online > 0){
					$result .= "You won: ";
					$onlineItems = explode(";", $rewardOnlinetimeItems);
					for($x=0;$x<(count($onlineItems)-1);$x++){
						$OI = explode(",", $onlineItems[$x]);
						$OICount = $OI[1] * ($online/86400);
						$result .= $OICount > 999 ? kkk($OICount)." of " : kkk($OICount)." ";
						$result .= getItemName($OI[0]);
						if($x==(count($onlineItems)-2))
							$result .= " ";
						elseif($x==(count($onlineItems)-3))
							$result .= " and ";
						else
							$result .= ", ";
						sendItem($OI[0],$OICount,0,$rewardLoc,$charid);
					}
					$result .= "for ".str_replace("<strong>", "", str_replace("</strong>", "", str_replace(", ", "", remainingTime($online, false))))." online exchanged.\\n";
					?>
					<script>
						$('#current_online').html("<?php echo remainingTime($rewards[0]-$online,true); ?>");
						$('#online_reward').html($('#online_reward').text()-<?php echo $online/86400; ?>);
					</script>
					<?php
				}
				if($rewardPvP && $pvp > 0){
					$result .= "You won: ";
					$pvpItems = explode(";", $rewardPvPItems);
					for($z=0;$z<(count($pvpItems)-1);$z++){
						$PI = explode(",", $pvpItems[$z]);
						$PICount = $PI[1] * ($pvp/$rewardPvPCount);
						$result .= $PICount > 999 ? kkk($PICount)." of " : kkk($PICount)." ";
						$result .= getItemName($PI[0]);
						if($z==(count($pvpItems)-2))
							$result .= " ";
						elseif($z==(count($pvpItems)-3))
							$result .= " and ";
						else
							$result .= ", ";
						sendItem($PI[0],$PICount,0,$rewardLoc,$charid);
					}
					$result .= "for ".$pvp." PvP\'s points exchanged.\\n";
					?>
					<script>
						$('#current_pvp').html($('#current_pvp').text()-<?php echo $pvp; ?>);
						$('#pvp_reward').html($('#pvp_reward').text()-<?php echo $pvp/$rewardPvPCount; ?>);
					</script>
					<?php
				}
				if($rewardPk && $pk > 0){
					$result .= "You won: ";
					$pkItems = explode(";", $rewardPkItems);
					for($y=0;$y<(count($pkItems)-1);$y++){
						$PkI = explode(",", $pkItems[$y]);
						$PkICount = $PkI[1] * ($pk/$rewardPkCount);
						$result .= $PkICount > 999 ? kkk($PkICount)." of " : kkk($PkICount)." ";
						$result .= getItemName($PkI[0]);
						if($y==(count($pkItems)-2))
							$result .= " ";
						elseif($y==(count($pkItems)-3))
							$result .= " and ";
						else
							$result .= ", ";
						sendItem($PkI[0],$PkICount,0,$rewardLoc,$charid);
					}
					$result .= "for ".$pk." Pk\'s points exchanged.\\n";
					?>
					<script>
						$('#current_pk').html($('#current_pk').text()-<?php echo $pk; ?>);
						$('#pk_reward').html($('#pk_reward').text()-<?php echo $pk/$rewardPkCount; ?>);
					</script>
					<?php
				}
			}else{
				$result .= "Character not found.//nCheck if the character is offline and try again.";
			}
		}
	}
	return empty($result) ? null : resposta($result);
}

function locMAP($npc_id){
	global $db, $conn;
	$result = null;
	if(!empty($npc_id)){
		if($db){
			$records = $conn->prepare("SELECT i.name, i.level, (SELECT GROUP_CONCAT(x,';',y) FROM icp_spawnlist WHERE npc_id = i.id) AS loc FROM icp_npc AS i WHERE i.id = ?");
		}else{
			$records = $conn->prepare("SELECT i.name, i.level, STUFF((SELECT ',' + CONVERT(VARCHAR, x) + ';' + CONVERT(VARCHAR, y) FROM icp_spawnlist WHERE npc_id = i.id FOR XML PATH('')),1,1,'') AS loc FROM icp_npc AS i WHERE i.id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		}
		$records->execute([$npc_id]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()) {
				$xy = explode(",",$row->loc);
				$name = $row->name;
				$level = $row->level;
				for($z=0;$z<count($xy);$z++){
					$xyz = explode(";",$xy[$z]);
					$x = (116  + ($xyz[0] + 107823) / 200);
					$y = (2580 + ($xyz[1] - 255420) / 200);
					$result .= '<div style="position:absolute;top:'.$y.'px;left:'.$x.'px;"><img src="images/marcador.gif" title="'.$name.' - Lv '.$level.'" /></div>';
				}
			}
			?>
			<script>
				$(document).ready(function() {
					var x = <?php echo $x; ?> - 235;
					var y = <?php echo $y; ?> - 235;
					$('.informer').scrollLeft(x).scrollTop(y);
				});
			</script>
			<?php
		}else{
			$result .= "<script language='javascript'>alert('Este NPC/ID não foi encontrado!');</script>";
		}
	}else{
		$result .= "<script language='javascript'>alert('Este NPC/ID não existe!');</script>";
	}
	return empty($result) ? null : $result;
}

function locNpcByNpcName($npc_name){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic, $L2jVersaoAcis;
	$result = null;
	if(!empty($npc_name)){
		if(!$db)
			$droplist = "icp_droplist_interlude";
		elseif($L2jVersaoRussa)
			$droplist = "icp_droplist_russo";
		elseif($L2jVersaoClassic)
			$droplist = "icp_droplist_classic";
		elseif($L2jVersaoAcis)
			$droplist = "icp_droplist_acis";
		else
			$droplist = "droplist";
		$records = $conn->prepare("SELECT i.name, i.id, CASE WHEN (SELECT COUNT(*) FROM ".$droplist." WHERE mobId=i.id) > '0' THEN 'true' ELSE 'false' END AS droplist, CASE WHEN (SELECT COUNT(*) FROM icp_spawnlist WHERE npc_id=i.id) > '0' THEN 'true' ELSE 'false' END AS spawn FROM icp_npc AS i WHERE i.name LIKE CONCAT('%',?,'%') ORDER BY i.name ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$npc_name]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()){
				if($row->droplist == 'true' || $row->spawn == 'true'){
					$result .= $row->name.";";
					if($row->droplist == 'true'){
						$result .= "<a href=\"javascript: void(0)\" id=\"".$row->id."\" onclick=\"javascript:informer('npc_drop',this.id)\">DROPLIST</a>;";
					}
					if($row->spawn == 'true'){
						$result .= "<a href=\"javascript: void(0)\" id=\"".$row->id."\" onclick=\"javascript:informer('npc_map',this.id)\">MAP</a>;";
					}
					$result .= "|";
				}
			}
			$result .= empty($result) ? "<script language='javascript'>alert('Este NPC não foi encontrado!');</script>" : null;
		}else{
			$result .= "<script language='javascript'>alert('Este NPC não foi encontrado!');</script>";
		}
	}else{
		$result .= "<script language='javascript'>alert('Preencha o nome do NPC!');</script>";
	}
	return empty($result) ? null : $result;
}

function locNpcByItemName($item_name){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic, $L2jVersaoAcis;
	$result = null;
	if(!empty($item_name)){
		if(!$db)
			$droplist = "icp_droplist_interlude";
		elseif($L2jVersaoRussa)
			$droplist = "icp_droplist_russo";
		elseif($L2jVersaoClassic)
			$droplist = "icp_droplist_classic";
		elseif($L2jVersaoAcis)
			$droplist = "icp_droplist_acis";
		else
			$droplist = "droplist";
		$records = $conn->prepare("SELECT itemId FROM icp_icons WHERE itemName = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$item_name]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()){
				$records2 = $conn->prepare("SELECT DISTINCT d.mobId, (SELECT name FROM icp_npc WHERE id = d.mobId) AS name, CASE WHEN (SELECT COUNT(*) FROM icp_spawnlist WHERE npc_id=d.mobId) > 0 THEN 'true' END AS spawn FROM ".$droplist." AS d WHERE d.itemId = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
				$records2->execute([$row->itemId]);
				if($records2->rowCount() > 0){
					while ($row2 = $records2->fetchObject()){
						if(!empty($row2->name)){
							$result .= $row2->name.";";
							$result .= "<a href=\"javascript: void(0)\" id=\"".$row2->mobId."\" onclick=\"javascript:informer('npc_drop',this.id)\">DROPLIST</a>;";
							if($row2->spawn == 'true'){
								$result .= "<a href=\"javascript: void(0)\" id=\"".$row2->mobId."\" onclick=\"javascript:informer('npc_map',this.id)\">MAP</a>;";
							}
							$result .= "|";
						}
					}
				}
			}
		}else{
			$result .= "<script language='javascript'>alert('Nenhum NPC dropa este item!');</script>";
		}
	}else{
		$result .= "<script language='javascript'>alert('NPC/ITEM inválido!');</script>";
	}
	return empty($result) ? null : $result;
}

function locDROP($npc_id){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic, $L2jVersaoAcis;
	$result = null;
	if(!empty($npc_id)){
		if(!$db)
			$droplist = "icp_droplist_interlude";
		elseif($L2jVersaoRussa)
			$droplist = "icp_droplist_russo";
		elseif($L2jVersaoClassic)
			$droplist = "icp_droplist_classic";
		elseif($L2jVersaoAcis)
			$droplist = "icp_droplist_acis";
		else
			$droplist = "droplist";
		$sweep = $L2jVersaoRussa || $L2jVersaoClassic ? ", (d.sweep) AS sweep" : ", (d.category) AS sweep";
		$order = $L2jVersaoRussa || $L2jVersaoClassic ? "d.sweep ASC" : "d.category DESC";
		$records = $conn->prepare("SELECT * ".$sweep." FROM ".$droplist." AS d, icp_icons AS i WHERE d.itemId = i.itemId AND mobId = ? ORDER BY ".$order.", d.chance DESC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$npc_id]);
		if($records->rowCount() > 0){
			$records2 = $conn->prepare("SELECT n.name, n.id, CASE WHEN (SELECT COUNT(*) FROM icp_spawnlist WHERE npc_id=n.id) > 0 THEN 'true' END AS spawn FROM icp_npc AS n WHERE n.id = ?", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
			$records2->execute([$npc_id]);
			while ($row2 = $records2->fetchObject()){
				$spawn = $row2->spawn == "true" ? "Loc: <a href=\"javascript: void(0)\" id=\"".$row2->id."\" onclick=\"javascript:informer('npc_map',this.id)\">MAP</a>" : null;
				$result .= "<h3>NPC name: ".$row2->name."</h3>".$spawn."||";
			}
			while ($row = $records->fetchObject()){
				$result .= "1,0,,,,,,,".$row->itemId.",".$row->itemName.",".$row->itemType.",".$row->itemTypeName.",".$row->itemWeight.",".$row->itemGrade.",".$row->itemBodyPart.",".$row->itemPAD.",".$row->itemMAD.",".$row->itemSS.",".$row->itemBSS.",".strtolower(str_replace("icon.","",$row->itemIcon)).",";
				$result .= $row->min == $row->max ? $row->max."," : kkk($row->min)." / ".kkk($row->max).",";
				$result .= $L2jVersaoClassic ? (($row->chance/100)*100)."%," : (($row->chance/1000000)*100)."%,";
				if($L2jVersaoRussa || $L2jVersaoClassic){
					$result .= empty($row->sweep) ? "Drop|" : "Spoil|";
				}else{
					$result .= $row->sweep >= 0 ? "Drop|" : "Spoil|";
				}
			}
		}else{
			$result .= "<script language='javascript'>alert('Nenhum NPC dropa este item!');</script>";
		}
	}else{
		$result .= "<script language='javascript'>alert('Este NPC não foi encontrado!');</script>";
	}
	return empty($result) ? null : $result;
}

function locITEM($item_name){
	global $db, $conn, $L2jVersaoRussa, $L2jVersaoClassic, $L2jVersaoAcis;
	$result = null;
	if(!empty($item_name)){
		if(!$db)
			$droplist = "icp_droplist_interlude";
		elseif($L2jVersaoRussa)
			$droplist = "icp_droplist_russo";
		elseif($L2jVersaoClassic)
			$droplist = "icp_droplist_classic";
		elseif($L2jVersaoAcis)
			$droplist = "icp_droplist_acis";
		else
			$droplist = "droplist";
		$records = $conn->prepare("SELECT i.*, CASE WHEN (SELECT COUNT(*) FROM ".$droplist." WHERE itemId=i.itemId) > 0 THEN 'true' ELSE 'false' END AS droplist FROM icp_icons AS i WHERE i.itemName LIKE CONCAT('%',?,'%') ORDER BY i.itemName ASC", array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
		$records->execute([$item_name]);
		if($records->rowCount() > 0){
			while ($row = $records->fetchObject()){
				if($row->droplist == 'true'){
					$result .= "1,0,,,,,,,".$row->itemId.",".$row->itemName.",".$row->itemType.",".$row->itemTypeName.",".$row->itemWeight.",".$row->itemGrade.",".$row->itemBodyPart.",".$row->itemPAD.",".$row->itemMAD.",".$row->itemSS.",".$row->itemBSS.",".strtolower(str_replace("icon.","",$row->itemIcon))."|";
				}
			}
			$result .= empty($result) ? "<script language='javascript'>alert('Item não encontrado!');</script>" : null;
		}
	}else{
		$result .= "<script language='javascript'>alert('Item não encontrado!');</script>";
	}
	return empty($result) ? null : $result;
}

function teleport($char_id,$x,$y,$z){
	global $db_ip, $cached_port;
	$buf=pack("cVVVVV",2,$char_id,1,$x,$y,$z).tounicode("admin");
	$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
	fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
	fclose($cachedsocket);
}

function kick_char($char_id){
	global $db_ip, $cached_port;
	$buf=pack("cV",5,$char_id).tounicode("admin");
	$cachedsocket=@fsockopen($db_ip,$cached_port,$errno,$errstr,1);
	fwrite($cachedsocket,pack("s",(strlen($buf)+2)).$buf);
	fclose($cachedsocket);
}

function tounicode($string){
    $rs="";
	for($i=0;$i<strlen($string);$i++) $rs.=$string[$i].chr(0);
    return($rs.chr(0).chr(0));
}
?>