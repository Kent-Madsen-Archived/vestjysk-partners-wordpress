function colorUI(jsonUrl)
{
    axios.get(jsonUrl).then(resp => {
        
        var idx = 0;
        
        for(idx = 0; idx < resp.data.settings.length; idx++)
        {
            
            insertColor( resp.data.settings[idx].link.class, 
                         resp.data.settings[idx].link);
        }
    });   
}

function insertColor(name, data)
{
    applyColor(name, data.inactive, data.hover, data.active);
}

function applyColor(name, inactive, hover, active)
{
    //console.log(name);

    var head = document.head || document.getElementsByTagName('head')[0];
    
    var style = document.createElement('style');
    var style_type = 'text/css';

    style.type = style_type;

    head.append(style);
    
    var css = '';
    
    if(!(inactive === null || inactive === ''))
    {
        //console.log(inactive);

        var css_inactive =  '';

        css_inactive = css_inactive.concat('.', name, ' {', 'color:', inactive ,';  }', '\r\n');
        css = css.concat(css_inactive);
    }
    
    if(!(active === null|| active === ''))
    {
        var css_active =  '';
        //console.log(active);
        
        
        css_active = css_active.concat('.', name, ':active {', 'color:', active ,';  }', '\r\n');
        css = css.concat(css_active);
    }
    
    if(!(hover === null||  hover === ''))
    {
        var css_hover =  '';

        //console.log(hover);
        
        css_hover = css_hover.concat('.', name, ':hover {', 'color:', hover ,';  }', '\r\n');
        css = css.concat(css_hover);
        
    }

    if (style.styleSheet)
    {
        // IE8 and below
        style.styleSheet.cssText = css;
    }
    else 
    {
        style.appendChild(document.createTextNode(css));
    }

    //console.log("result:");
    //console.log(css);

}