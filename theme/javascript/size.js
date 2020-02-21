function SizeProperty()
{
    console.log(screen.height);
    
    var head = document.head || document.getElementsByTagName('head')[0];
    
    var style = document.createElement('style');
    var style_type = 'text/css';

    style.type = style_type;
    
    head.append(style);

    var css = 'main {';

    css = css.concat('min-height:', (screen.height - ( 88 + (32*2) ) ).toString(), 'px;' );

    css = css.concat('}');
    
    if (style.styleSheet)
    {
        // IE8 and below
        style.styleSheet.cssText = css;
    }
    else 
    {
        style.appendChild(document.createTextNode(css));
    }

    console.log(css);

}

SizeProperty();