function loadImageFileAsURL()
{
    var filesSelected = document.getElementById("form_profil").files;
    if (filesSelected.length > 0)
    {
        var fileToLoad = filesSelected[0];
 
        var fileReader = new FileReader();
 
        fileReader.onload = function(fileLoadedEvent) 
        {
            var textAreaFileContents = document.getElementById
            (
                "textAreaFileContents"
            );
     
            textAreaFileContents.value = fileLoadedEvent.target.result;
        };
 
        fileReader.readAsDataURL(fileToLoad);
    }
}