<?php

namespace FSAPI\Nodes;

/**
* SysInfoActiveSession is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotesysinfoactivesession
*
* see class Node for details
*
*/
class SysInfoActiveSession extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.sys.info.activeSession';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = false;
    }
}