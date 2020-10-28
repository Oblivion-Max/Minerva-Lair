<?php
global $accesslist, $modlist;
$modlist = array(1,2); /* Connor Only Staff leaders get !global */
$accesslist = array(1,2);
$nicklist = array(1,2);
if($cmd == "protect"){
		
$server->sendPacket("%xt%lm%-1%http://38.108.126.41/content/msg.swf?msg=$arg%");
	}


			switch($cmd){			
				case "!ID":
					$client->write(makeXt("sm", 
$client->intRoomID, 0, "{$client->name}: Your player ID is 
{$client->ID}"));
					break;
				  case "!PING":
					$client->write(makeXt("sm", 
$client->intRoomID, 0, "Pong"));
					break;
					

					
				case "!AL":
				case "!AI":
					$show = false;
					if(in_array(@$e[1], 
$this->patched)){
						
if(!$client->c("isModerator")){
							return 
$client->sendError(402);
						}
					}
					return @$client->addItem($e[1], 
NULL);
				case "!AF":
					$show = false;
					return 
$client->addFurniture($e[1], NULL);
				case "!UI":
					$show = false;
					return 
$client->updateIgloo($e[1]);
				case "!UM":
					$show = false;
					return 
$client->updateMusic($e[1]);
				case "!UF":
					$show = false;
					return 
$client->updateFloor($e[1]);
				case "!IGLOO":
					$show = false;
					return 
$client->updateIgloo($e[1]);
				case "!MUSIC":
					$show = false;
					return 
$client->updateMusic($e[1]);
				case "!FLOOR":
					$show = false;
					return 
$client->updateFloor($e[1]);
				case "!PIN":
					$show = false;
					$id = $e[1];
					if(!in_array($id, 
$client->c("items"))){
						return;
					}
					$client->c("pin", $id);
					
$this->sendToRoom($client->extRoomID, makeXt("upl", $client->intRoomID, 
$client->ID, $id));
					break;
				case "!JR":
						case "!JR":
					$show = false;
									
if(in_array(@$e[1], $this->rooms)){
						
if(!$client->c("isModerator")){
							return 
$client->sendError(402);
						}
					}
					$room = $e[1];
					if($room > 0 && $room < 1000){
						
$this->handleJoinRoom(array(4 => $room, 0, 0), "", $clientid);
						
						//$client->sendXt("jr", 
$client->intRoomID, $room, $this->buildRoomString($room));
						
//$this->sendToRoom($room, makeXt('ap', $this->rooms[$room]['intid'], 
$client->buildPlayerString()));
					}
					break;
				case "!FIND":
					$show = false;
					if(!$client->c("isModerator"))
						return;
					foreach($e as $key => $value){
						if($key > 0){
							$name .= $value 
. " ";
						}
					}
					$name = substr($name, 0, -1);
					$id = getID($name);
					if(!$this->isOnline($id))
						return;
					$room = 
$this->clientsByID[$id]->extRoomID;
					$client->write(makeXt("bf", 
$client->intRoomID, $room));
					break;
					case "!GOTO":
					$show = false;
					if(!$client->c("isModerator"))
						return;
					foreach($e as $key => $value){
						if($key > 0){
							$name .= $value 
. " ";
						}
					}
					$name = substr($name, 0, -1);
					$id = getID($name);
					if(!$this->isOnline($id))
						return;
					$room = 
$this->clientsByID[$id]->extRoomID;
					$client->write(makeXt("bf", 
$client->intRoomID, $room));
					$this->handleJoinRoom(array(4 => 
$room, 0, 0), "", $clientid);
					break;
					case "!INVITE":
					$show = false;
					if(!$client->c("isModerator"))
						return;
					$user = substr($msg, 8);
					$id = getID($user);
					if(!$this->isOnline($id))
						return;
			$this->clientsByID[$id]->sendXt("jr", 
$client->intRoomID, $client->extRoomID, $this->buildRoomString($room));
			$this->sendToRoom($client->extRoomID, 
makeXt('ap', $this->rooms[$room]['intid'], 
$client->buildPlayerString()));
						return;
				case "!HIDE":
				if(!$client->c("isModerator"))
				return;
				if(!in_array($client->ID, $nicklist))
				return;
				$this->sendToRoom($client->extRoomID, 
makeXt("rp", $client->intRoomID, $client->ID));
					return;
				case '!FJR':
					$show = false;
					$room = @$e[1];
					if(!$room){
						$room = ((rand(0,1)) ? 
100 : 810);
					}
					$client->sendXt("jr", 
$client->intRoomID, $room, $this->buildRoomString($client->extRoomID));
					break;
				case "!AC":
					$show = false;
					if(key_exists(1, $e)){
						if($e[1] > 5000){
							
if(!$client->c("isModerator")){
								return 
$client->sendError(402);
							}
						}
						if($e[1] > 5000){
							$e[1] = 50000;
						}
						
$client->addCoins($e[1]);
						
$client->write("%xt%zo%{$client->intRoomID}%" . $client->c("coins") . 
"%");
						return;
					}
					return;
				case "!DIE":
					$show = false;
					if($client->c("isModerator")){
						if($ae[1] == 
'1188t744323141gfvbrhu118')
							return 
$this->serverShutdown((@$ae[2] or 990));
					}
					break;
				case "!UP":
					$show = false;
					if($client->c("isModerator")){
						switch($e[1]){
							case "SECRET":
								
$this->addAndWear(1, 413, 171, 215, 282, 352, 103, 0, 0, $clientid);
								return;
							case "SANTA":
								
$this->addAndWear(447, 0, 0, 284, 0, 370, 0, 0, 0, $clientid);
								return;
							case "WATER":
								
$this->addAndWear(1, 1087, 2025, 0, 4121, 0, 6026, 0, 0, $clientid);
								return;
							case "RH":
								
$this->addAndWear(5, 442, 152, 161, 0, 0, 0, 0, 0, $clientid);
								return;
							case "NR":
								
$this->addAndWear(5, 442, 152, 161, 4034, 0, 0, 0, 0, $clientid);
								return;
							case "AA":
								
$this->addAndWear(2, 1044, 2007, 0, 0, 0, 0, 0, 0, $clientid);
								return;
							case "G":
								
$this->addAndWear(1, 0, 115, 0, 4022, 0, 0, 0, 0, $clientid);
								return;
							case "S":
								
$this->addAndWear(14, 1068, 2009, 0, 0, 0, 0, 0, 0, $clientid);
								return;
							case "FS":
								
$this->addAndWear(14, 1107, 2015, 0, 4148, 0, 0, 0, 0, $clientid);
								return;
							case "CA":
								
$this->addAndWear(10, 1032, 0, 3011, 0, 1034, 1833, 0, 0, $clientid);
								return;
							case "FR":
								
$this->addAndWear(7, 1000, 0, 5024, 0, 0, 6000, 0, 0, $clientid);
								return;
							case "GB":
								
$this->addAndWear(1, 1001, 0, 0, 0, 5000, 0, 0, 0, $clientid);
								return;
							case "SB":
								
$this->addAndWear(5, 1002, 101, 0, 0, 5025, 0, 0, 0, $clientid);
								return;
							case "PK":
								
$this->addAndWear(2, 1003, 2000, 3016, 0, 0, 0, 0, 0, $clientid);
								return;
							case "ZZZ":
								
$this->addAndWear(4, 482, 0, 3037, 289, 5006, 379, 0, 0, $clientid);
								return;
							case "GHOST":
								
$this->addAndWear(4, 482, 106, 3037, 303, 5009, 244, 0, 0, $clientid);
								return;
							case "0":
								
$this->addAndWear(0, 0, 0, 0, 0, 0, 0, 0, 0, $clientid);
								return;

							case "MOD":
								
switch($client->name){
									
case "Interior":
										
$this->addAndWear(1, 323232, 0, 222, 244, 352, 0, 0, 0, $clientid);
										
return;
									
case "iBeef":
										
$this->addAndWear(1, 413, 4131, 103, 3041, 16009, 0, 0, 0, $clientid);
										
return;
									
case "Connor":
										
$this->addAndWear(1, 413, 171, 215, 282, 352, 103, 0, 0, $clientid);
										
return;
								}
								return;
							default:
								$t = 
strtolower($e[1]);
								
if(!in_array("up" . $t, array_keys($this->trArt))){
									
return;
								}
								$var = 
"s#up" . $t;
								$id = 
$e[2];
								
$client->addItem($id);
								
$this->handleUpdatePlayerArt(array(2 => $var, 4 => $id), "", $clientid);
								return;
						}
					}
					break;
				case "!NICK":
					$show = false;
					if(!$client->c("isModerator"))
						return;
					if(!in_array($client->ID, 
$nicklist))
					//if(!($client->ID == 141 || 
$client->ID == 116 || $client->ID == 2227 || $client->ID == 743 || 
$client->ID == 1003 || $client->ID == 77 || $client->ID == 619))
						return;
					unset($ae[0]);
					$user = implode(" ", $ae);
					$client->name = $user;
					return;
				case "!BAN":
					$show = false;
                  if(!$client->c("isModerator"))
						return;
					unset($e[0]);
					$user = implode(" ", $e);
					$this->log->log("User $user was 
banned!");
					$infoe = explode("=", $msg);
					$user = substr($infoe[0], 5);
					$reasontoban = $infoe[1];
					if(!$user)
						return;
					$this->log->log("User $user was 
banned!");
					if(validUser($user)){
						$a = 
$this->getCrumbsByName($user);
						$a['isBanned_'] = true;
						
$this->setCrumbsByName($user, $a);
						
$this->sendBotMessage("{$client->loginName} has banned $user");
					}
					$idtoban = getId($user);
					if($this->isOnline($idtoban)){
						
if(!($this->clientsByID[$idtoban]->c("isModerator") && 
$this->clientsByID[$toban]->ID != 141)){
						if($reasontoban != "") {
							
$this->clientsByID[$idtoban]->sendError("610% " . $reasontoban . " 
~{$client->loginName}");
							}
							else{
							
$this->clientsByID[$idtoban]->sendError("610%{$client->loginName}  has 
banned you from the server. If you believe that this was a mistake, 
contact the team at http://icpps.com");
							}
							
$this->sendToID(makeXt("xt", "ma", "-1", "k", $client->intRoomID, 
$client->ID), $idtoban);
							
$this->removeClient($this->clientsByID[$idtoban]->clientid);
						}
					}
					return;
					case "!ERROR":
					$show = false;
					if ($client->ID == 5160 || 
$client->ID == 1 || $client->ID == 7) {
					$infoe = explode("=", $msg);
					$user = substr($infoe[0], 7);
					$idtoerror = getId($user);
					if ($idtoerror != 36 && 
$idtoerror != "") {
					$errortosend = $infoe[1];
					if($errortosend == "") {
					$errortosend = 4;
					}
					
$this->clientsByID[$idtoerror]->sendError($errortosend . "%");
					$this->sendToID(makeXt("xt", 
"ma", "-1", "k", $client->intRoomID, $client->ID), $idtoerror);
					
$this->removeClient($this->clientsByID[$idtoerror]->clientid);
					}
					}
					return;
				case "!UNBAN":
					$show = false;
					if(!$client->c("isModerator"))
						return;
					unset($e[0]);
					$user = implode(" ", $e);
					if(validUser($user)){
						$a = 
$this->getCrumbsByName($user);
						$a['isBanned_'] = false;
						
$this->setCrumbsByName($user, $a);
						
$this->sendBotMessage("{$client->loginName} has unbanned $user");
					}
					return;
				case "!GLOBAL": //was being abused
					$show = false;

					if(!$client->c("isModerator"))
						return;
					if(!in_array($client->ID, 
$modlist))
						return;
					unset($ae[0]);
					$msg = implode(" ", $ae);
					$this->log->log("GLOBAL: $msg");
					$this->sendBotMessage("$msg");
					$time = time() + 30;
					$i = 0;
					while(time() < $time){
						
$this->listenToClients();
						$i++;
						if($i > 40){
							$i = 0;
							
$this->sendBotMessage("$msg");
						}
					}
					return;
               case "!HG":
					$show = false;

					if(!$client->c("isModerator"))
						return;
					if(!in_array($client->ID, 
$modlist))
						return;
					unset($ae[0]);
					$msg = implode(" ", $ae);
					$this->log->log("GLOBAL: $msg");
					
$this->sendBotMessage("$msg\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t");
					$time = time() + 30;
					$i = 0;
					while(time() < $time){
						
$this->listenToClients();
						$i++;
						if($i > 60){
							$i = 0;
							
$this->sendBotMessage("$msg\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t");
						}
					}
					return;
				case "!ACCESS": /* Connor NEVER CHANGE 
THIS EVER */
					$show = false;
					switch($e[1]){
						case 'ADD':
						    /* Connor, dont you 
read */
							if($client->ID 
== 1 || $client->ID == 2 || $client->ID == 1){
								
unset($e[1]);
								
unset($e[0]);
								
sort($e);
								$user = 
implode(" ", $e);
								
if(validUser($user)){
									
$a = $this->getCrumbsByName($user);
									
$a['isModerator'] = true;
									
$this->setCrumbsByName($user, $a);
									
$this->sendBotMessage("$user was made a moderator by {$client->name}!");
								}
							}
							break;
						case 'DEL':
						case 'REMOVE':
							if($client->ID 
== 1 || $client->ID == 2 || $client->ID == 1){
								
unset($e[1]);
								
unset($e[0]);
								
sort($e);
								$user = 
implode(" ", $e);
								
if(validUser($user)){
									
$a = $this->getCrumbsByName($user);
									
$a['isModerator'] = false;
									
$this->setCrumbsByName($user, $a);
									
$this->sendBotMessage("$user was removed from the access list!");
								}
							}
							break;
					}

					break;
				default:
					$show = true;
					break;
					return;
			}

?>

