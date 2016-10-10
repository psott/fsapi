<?php
/**
* NavErrorStr is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotenaverrorstr
*
* see class Node for details
*
*/
class NavErrorStr extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.nav.errorStr';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('GET');    
        $this->notification = false;
    }
}