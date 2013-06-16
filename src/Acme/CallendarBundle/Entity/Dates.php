<?php

namespace Acme\CallendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="Dates")
 */
class Dates
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @ORM\Column(name="date",type="integer")
     */
    private $date;

    /**
     * @ORM\Column(name="event",type="string", length=256)
     */
    private $event;

    /**
     * @ORM\Column(name="user_id",type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(name="user",type="string", length=128)
     */
    private $user;
    
    private $exploded;
    
    public function getExploded(){	
	  $this->exploded=explode('|',$this->event);     
	  return $this->exploded;	
    }
    
    public function getNiceEvent(){	
	  return str_replace("|"," ",$this->event);	
    }
    
    public function trimAndConvert(){
    	$Event=$this->event;
    	$length=14;	
	$min=4;	
	$out[0]="";
	$i=0;	
	      while (strlen($Event)>$length){
		$space=strpos($Event," ");
		    if (($space<$length)&($space>$min)&($space)){
		      $out[$i]=substr($Event,0,$space);
		      $i++;
		      $Event=substr($Event,$space+1);		
		    }else{
		      $out[$i]=substr($Event,0,$length);
		      $i++;
		      $Event=substr($Event,$length);			
		    }
	      }
		$out[$i]=$Event;
	$this->event=implode("|",$out);
    }
        
    public function setId($in){	$this->id=$in;		}
    public function setDate($in){	$this->date=$in;	}
    public function setEvent($in){	$this->event=$in;	}
    public function setUser_id($in){	$this->user_id=$in;	}
    public function setUserId($in){	$this->user_id=$in;	}
    public function setUser($in){	$this->user=$in;	}
    
    public function getId(){		return $this->id;	}
    public function getDate(){		return $this->date;	}
    public function getEvent(){	return $this->event;	}
    public function getUserId(){	return $this->user_id;	}
    public function getUser_id(){	return $this->user_id;	}
    public function getUser(){		return $this->user;	}
}
