<?php 
namespace Utils;

class HtmlUtil
{    
    public function attrs ($attry)
    {
        $attr = (isset($attry['type']) ? ' type="'.$attry['type'].'" ' : '');
        $attr .= (isset($attry['name']) ? ' name="'.$attry['name'].'" ' : '');
        $attr .= (isset($attry['min']) ? ' min="'.$attry['min'].'" ' : '');
        $attr .= (isset($attry['max']) ? ' max="'.$attry['max'].'" ' : '');
        $attr .= (isset($attry['minlength']) ? ' minlength="'.$attry['minlength'].'" ' : '');
        $attr .= (isset($attry['maxlength']) ? ' maxlength="'.$attry['maxlength'].'" ' : '');
        $attr .= (isset($attry['class']) ? ' class="'.$attry['class'].'" ' : '');
        $attr .= (isset($attry['id']) ? ' id="'.$attry['id'].'" ' : '');
        $attr .= (isset($attry['multiple']) ? ' multiple="'.$attry['multiple'].'" ' : '');
        $attr .= (isset($attry['autocomplete']) ? ' autocomplete="'.$attry['autocomplete'].'" ' : '');
        $attr .= (isset($attry['placeholder']) ? ' placeholder="'.$attry['placeholder'].'" ' : '');
        $attr .= (isset($attry['aria-label']) ? ' aria-label="'.$attry['aria-label'].'" ' : '');
        $attr .= ( (isset($attry['required']) && $attry['required'] ) ? ' required ' : '');
        $attr .= ( (isset($attry['disabled']) && $attry['disabled'] ) ? ' disabled ' : '');
        
        if ( isset($attry['download']) )
        {
            $attr .= ' download="'.$attry['download'].'" ';
        }
        
        $attr .= (isset($attry['target']) ? ' target="'.$attry['target'].'" ' : '');
        
        if ( isset($attry['data-']) ) { $attr .= $this->dataAttrs ($attry['data-']); }
        
        return $attr;
    }
    
    public function dataAttrs ($data)
    {                                       $res = '';
        foreach ($data as $key => $d)
        {
            $res .= ' data-'.$key.'="'.$d.'" ';
        }
        
        return $res;
    }
}

?>