// secondary-header

// secondary-footer
// secondary-footer-cover

function overlayUI(jsonUrl)
{
    axios.get(jsonUrl).then(resp => {
        var idx = 0;
        for(idx = 0; idx < resp.data.settings.length; idx ++)
        {
            var current = resp.data.settings[idx];
            
            applyOverlay(current);
        }
    });   
}

function applyOverlay( setting )
{
  //  console.log(setting);

    var element = document.getElementById( setting.identifier );
    console.log(element);
    console.log(setting);

//    console.log(element);

    var chosenBackground = "";

    var idx = 0;

    for( idx = 0; 
         idx < setting.data.length; 
         idx++ )
    {
        var current = setting.data[idx];

        if( idx == (setting.current - 1) )
        {   
            
            chosenBackground = current.class;
            break;
        }
    }

    console.log(chosenBackground);
    element.className += ' '.concat(chosenBackground);
    
}
