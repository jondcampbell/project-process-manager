<?php namespace Helpers;

class Helper {


	/**
	 * Convert a project status integer into a string label that actually makes sense to the user.
	 */

    public static function projectStatusToLabel($statusint)
    {
    	switch($statusint):
    	case 1:
    		return 'Active';
    		break;
    	case 2:
        	return 'Completed';
        	break;
        endswitch;
    }
}