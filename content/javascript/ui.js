function loadUI()
{    
    clean();
    apply();
}

function apply()
{
    applyFooterWidgetArea();
}

function applyFooterWidgetArea()
{
    var element = document.getElementById('footer-widget');

    console.log(element.childNodes.length);
    
    if( element.childNodes.length >= 4 )
    {
        element.classList.add('remove-grid-bottom');
    }
}

function clean()
{
    cleanFooterWidgetArea();
}

function cleanFooterWidgetArea()
{
    var element = document.getElementById('footer-widget');

    var idx = 0;

    for(idx = 0; idx < element.childNodes.length; idx++)
    {
        var child = element.childNodes[idx];

        if(child.nodeType === 8 || child.nodeType === 3)
        {
            element.removeChild(child);
            idx --;
        }
        
    }

}
