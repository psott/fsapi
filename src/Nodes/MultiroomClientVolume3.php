<?php
/**
* MultiroomClientVolume3 is a class type Node
*
* https://github.com/flammy/fsapi/blob/master/FSAPI.md#netremotemultiroomclientvolumex
*
* see class Node for details
*
*/
class MultiroomClientVolume3 extends Node implements Nodes
{
    public function __construct()
    {
        $this->path = 'netRemote.multiroom.client.volume3';
        $this->validation_method = false;
        $this->validation_rules = false;
        $this->call_methods = array('SET','GET');    
        $this->notification = true;
    }
}