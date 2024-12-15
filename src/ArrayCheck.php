<?php 
namespace Psys\Utils;


class ArrayCheck
{    
    // Checks if two arrays have the same values regardless of value order
    public function sameValues(array $a, array $b) : bool
    {
        return ( count($a) == count($b)  &&  !array_diff($a, $b) );
    }

    /**
     * @param bool $strict - TRUE: checks if $a and $b have the same key/value pairs in the same order and of the same types.
     *                       FALSE: checks if $a and $b have the same key/value pairs.
     */
    public function areEqual(array $a, array $b, bool $strict = true) : bool
    {
        if ($strict)
        {
            return ($a === $b);
        }
        else
        {
            return ($a == $b);
        }
    }

    /**
     * Checks if at least single value from $search exists in $subject
     */
    public function hasAnyValue(array $search, array $subject) : bool
    {
        return !empty(array_intersect($search, $subject));
    }

    /**
     * Checks if all values from $search exist in $subject
     */
    public function hasAllValues(array $search, array $subject) : bool
    {
        return empty(array_diff($search, $subject));
    }
}

?>