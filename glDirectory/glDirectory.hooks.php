<?php

/**
* This module allows users to vote for your site on the GL Directory
*
* @package GL Directory
* @author Chris Day
* @version 1.0.0
*/

new hook("actionMenu", function ($user) {
    if ($user) return array(
        "url" => "?page=glDirectory", 
        "text" => "Vote for " . _setting("game_name"), 
        "sort" => 1000
    );
});