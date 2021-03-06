<?php

namespace FSAPI\Nodes;

/**
* PlayInfoName is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremoteplayinfoname
*
* see class Node for details
*
*/
class PlayInfoName extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.play.info.name';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = true;
        $this->api_level = 1;
    }
}