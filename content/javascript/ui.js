function loadUI()
{    
    clean();
    apply();
}

function apply()
{
    applyHeaderHeaderArea();
    applyFooterWidgetArea();
}

function applyHeaderHeaderArea()
{
    console.log(document.getElementsByClassName('navbar-toggler'));

    var element = document.getElementsByClassName('submenu');

    var idx = 0; 

    for (idx = 0; idx < element.length; idx++)
    {
        var currentSelectedElement = element[idx];
        
        
        console.log("before");
        console.log(currentSelectedElement);

        var id = travelFindMenuIdentity( currentSelectedElement );
        console.log("found id");
        console.log(id);

        currentSelectedElement.setAttribute('aria-labelledby', id);

    }

}

function travelFindMenuIdentity(node)
{
    var currentParent = node.parentNode;

    console.log("Parent");
    console.log(currentParent);

    var idx = 0;

    for ( idx = 0; 
        idx < currentParent.childNodes.length; 
        idx++)
    {
        var currentSelectedChild = currentParent.childNodes[idx];
        console.log(currentSelectedChild);
        
        console.log("Child");
        console.log(currentSelectedChild);

        if(currentSelectedChild.tagName == 'A')
        {
            console.log("is link");
            return currentSelectedChild.id;
        }
    }

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
