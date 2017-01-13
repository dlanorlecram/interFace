<?php

namespace AppBundle\Entity;

class myEntity {

	/**
     * @return string
     */
	public function __toString()
    {
		return json_encode(get_object_vars($this));
	}

}
