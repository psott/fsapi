<?php

namespace FSAPI\Nodes;

/**
* NavSearchTerm is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotenavsearchterm
*
* see class Node for details
*
*/
class NavSearchTerm extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.nav.searchTerm';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = false;
    }
}