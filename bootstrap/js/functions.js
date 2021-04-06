function changeHref(id,document1,href){
    
    $(document1).attr('href',href+id);
    
   
}
function changeHrefModal(document1,document2,document3,href,href2){
    let id = $(document1).val();
    let name = $(document2).val();
    $(document3).attr('href',href+id+href2+name);
    
   
}