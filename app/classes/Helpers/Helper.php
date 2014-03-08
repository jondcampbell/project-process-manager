<?php namespace Helpers;

class Helper {


	/**
	 * Convert a project status integer into a string label that actually makes sense to the user.
	 */

    public static function projectStatusToLabel($statusint)
    {
    	switch($statusint):
        case 0:
            return 'Not Started';
            break;
    	case 1:
    		return 'Active';
    		break;
        case 2:
            return 'On Hold';
            break;            
    	case 10:
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
        
        case 20:
            return 'Non-Billable Client';
            break;
        case 21:
            return 'Non-Billable Partner';
            break;
        case 22:
            return 'Non-Billable Charity';
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

    public static function stageTypeToLabel($typeint)
    {
        switch($typeint):
        case 10:
            return 'Dev';
            break;
        case 20:
            return 'Financial';
            break;
        endswitch;
    }    
}