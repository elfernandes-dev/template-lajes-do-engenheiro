//Mascara - Telefones
function format(mask, document){
    let i = document.value.length;
    let exit = mask.substring(0,1);
    let text = mask.substring(i);
    if (text.substring(0,1) != exit){
              document.value += text.substring(0,1);
    }          
}