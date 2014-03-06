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


    /**
     * 
     * Convert a project type integer into a string label that actually makes sense to the user.
     * Types 1-9 are normal
     * Types 10-19 are special
     * 
     */

    public static function projectTypeToLabel($typeint)
    {
        switch($typeint):
        case 1:
            return 'End to End';
            break;
        case 2:
            return 'Dev Only';
            break;
        case 3:
            return 'Misc';
            break;                                    
        case 10:
            return 'Evolutionary';
            break;
        
        case 100:
            return 'Completed';
            break;
        endswitch;
    }    
}